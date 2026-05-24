<?php
header('Content-Type: application/json');
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input
    $name = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : '';
    $email = isset($_POST['email']) ? trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) : '';
    $message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';

    // Honeypot Anti-Spam Check
    if (!empty($_POST['website'])) {
        // Pretend it was successful so bots don't try harder
        echo json_encode(['status' => 'success', 'message' => 'Message sent successfully!']);
        exit;
    }

    // Keyword Anti-Spam Check
    $spam_keywords = ['GoogleSearchIndex', 'searchregister.info', 'SEO services', 'first page of google', 'rank higher'];
    foreach ($spam_keywords as $keyword) {
        if (stripos($message, $keyword) !== false) {
            echo json_encode(['status' => 'success', 'message' => 'Message sent successfully!']);
            exit;
        }
    }

    // Basic Validation
    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
        exit;
    }

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO portfolio_messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        // Send Email Notification
        $to = ADMIN_EMAIL;
        $subject = "New Portfolio Message from " . $name;
        
        // Professional HTML Email Template
        $email_content = "
        <html>
        <body style='background-color: #0f172a; color: #f8fafc; font-family: sans-serif; padding: 40px;'>
            <div style='max-width: 600px; margin: 0 auto; background-color: #1e293b; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); border: 1px solid #334155;'>
                <div style='background-color: #0ea5e9; padding: 24px; text-align: center;'>
                    <h1 style='margin: 0; font-size: 24px; color: #ffffff;'>New Project Inquiry</h1>
                </div>
                <div style='padding: 32px;'>
                    <p style='font-size: 16px; color: #94a3b8; margin-top: 0;'>You have received a new message from your portfolio contact form.</p>
                    
                    <div style='margin-bottom: 24px;'>
                        <strong style='display: block; font-size: 12px; text-transform: uppercase; color: #0ea5e9; margin-bottom: 4px;'>Full Name</strong>
                        <span style='font-size: 18px; color: #f1f5f9;'>{$name}</span>
                    </div>
                    
                    <div style='margin-bottom: 24px;'>
                        <strong style='display: block; font-size: 12px; text-transform: uppercase; color: #0ea5e9; margin-bottom: 4px;'>Email Address</strong>
                        <span style='font-size: 18px; color: #f1f5f9;'>{$email}</span>
                    </div>
                    
                    <div style='margin-bottom: 24px;'>
                        <strong style='display: block; font-size: 12px; text-transform: uppercase; color: #0ea5e9; margin-bottom: 4px;'>Message Details</strong>
                        <div style='font-size: 16px; color: #cbd5e1; line-height: 1.6; background-color: #0f172a; padding: 16px; border-radius: 8px;'>
                            " . nl2br($message) . "
                        </div>
                    </div>
                    
                    <div style='margin-top: 32px; border-top: 1px solid #334155; padding-top: 24px; text-align: center;'>
                        <a href='mailto:{$email}' style='background-color: #0ea5e9; color: #ffffff; padding: 12px 24px; border-radius: 6px; text-decoration: none; font-weight: bold; display: inline-block;'>Reply to Client</a>
                    </div>
                </div>
                <div style='background-color: #0f172a; padding: 16px; text-align: center; font-size: 12px; color: #64748b;'>
                    Sent from your Portfolio at " . date('Y-m-d H:i:s') . "
                </div>
            </div>
        </body>
        </html>
        ";

        // Headers
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: Eghe Destiny Portfolio <" . MAIL_FROM . ">" . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        // Send the mail (using @ to suppress warnings on local XAMPP)
        $mail_sent = @mail($to, $subject, $email_content, $headers);

        if ($mail_sent) {
            echo json_encode(['status' => 'success', 'message' => 'Message sent successfully!']);
        } else {
            // If mail fails (like on XAMPP) but DB was success, still tell the user it worked but log the issue internally
            echo json_encode(['status' => 'success', 'message' => 'Message saved! (Note: Email ignored on local server)']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $conn->error]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>

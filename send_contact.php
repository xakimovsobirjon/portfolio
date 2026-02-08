<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $phone = strip_tags(trim($_POST["phone"]));
    $email = strip_tags(trim($_POST["email"]));
    $message = strip_tags(trim($_POST["message"]));

    if (empty($name) || empty($phone) || empty($email) || empty($message)) {
        http_response_code(400);
        echo json_encode(["status" => "error", "message" => "Please fill all fields."]);
        exit;
    }

    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(["status" => "error", "message" => "Please enter a valid email address."]);
        exit;
    }

    // TELEGRAM API CREDENTIALS
    // REPLACE WITH YOUR ACTUAL BOT TOKEN AND CHAT ID
    $botToken = "8016986793:AAFVPoXnHD3qoTU3KHbrhaWmfIcHPdsPOOw";
    $chatId = "5901591979";

    $text = "📩 *New Contact Message*\n\n";
    $text .= "👤 *Name:* " . $name . "\n";
    $text .= "📞 *Phone:* " . $phone . "\n";
    $text .= "📧 *Email:* " . $email . "\n";
    $text .= "📝 *Message:* \n" . $message;

    $url = "https://api.telegram.org/bot$botToken/sendMessage";
    $data = [
        'chat_id' => $chatId,
        'text' => $text,
        'parse_mode' => 'Markdown'
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode == 200) {
        echo json_encode(["status" => "success", "message" => "Message sent successfully!"]);
    } else {
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Failed to send message via Telegram."]);
    }
} else {
    http_response_code(403);
    echo json_encode(["status" => "error", "message" => "Access forbidden."]);
}

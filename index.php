<?php

require 'vendor/autoload.php';

$botToken = 'BOT_TOKEN';
$telegramUrl = 'https://api.telegram.org/bot' . $botToken;
$chatId = 'CHAT_ID';
$pdfUrl = 'https://www.mevzuat.gov.tr/MevzuatMetin/1.5.5237.pdf';

$update = json_decode(file_get_contents('php://input'), true);
$message = $update['message']['text'];

if ($message == '/start') {
    sendMessage('Merhaba, kanun maddesi numarasını girin.');
} else {
    $articleNumber = intval($message);
    $pdfContent = file_get_contents($pdfUrl);
    $pdf = new \setasign\Fpdi\Fpdi();
    $pdf->setSourceFile(StreamReader::createByString($pdfContent));
    $numPages = $pdf->getNumberOfPages();
    if ($articleNumber >= 1 && $articleNumber <= $numPages) {
        $page = $pdf->setPage($articleNumber);
        $text = $pdf->getText($page);
        sendMessage($text);
    } else {
        sendMessage('Geçersiz madde numarası. Lütfen doğru bir madde numarası girin.');
    }
}

function sendMessage($text) {
    global $telegramUrl, $chatId;
    $params = [
        'chat_id' => $chatId,
        'text' => $text,
    ];
    $url = $telegramUrl . '/sendMessage?' . http_build_query($params);
    file_get_contents($url);
}

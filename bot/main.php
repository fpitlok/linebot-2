<?php
http_response_code(200);

include "src/sendToLine.php";
include "src/config.php";


if ($botText == 'ทดสอบ') {
    $text = 'ทดสอบตอบกลับข้อความ';
    sendFormatTextMessage($LINEDatas, $replyToken, $text);
}

function sendFormatTextMessage($LINEDatas, $replyToken, $text)
{

    $str = '{
        "replyToken":"'.$replyToken.'",
        "messages":
        [
            {
                "type":"text",
                "text":"'.$text.'"
            }
        ]
    }';

    sentMessage($str,$LINEDatas);
}

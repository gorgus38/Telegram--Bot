//饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸
//鈥� 賱丕 鬲賳爻賶 匕賰乇 丨賯賵賯 丕賱賲胤賵乇 鬲賵賲
//鈥� 丕賱賲胤賵乇 鈫� @T_0_M0 鈫�
//鈥� 賯賳丕丞 丕賱賲胤賵乇 鈫� @izeoe 鈫�
//饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸
<?php
ob_start();
error_reporting(0);
define("API_KEY", '賴賳丕_丕賱鬲賵賰賳');
function bot($method, $datas = []) {
    $url = "https://api.telegram.org/bot" . API_KEY . "/$method";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    }
    return json_decode($res);
}
//饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸

//鈥� 賴賳丕 鬲賰丿乇 鬲禺賱賷 賱賵丨賴 丕丿賲賳 丕賱賷 鬲毓噩亘賰 

//饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸
$input = file_get_contents("php://input");
$update = json_decode($input, TRUE);
$chatId = $update['message']['chat']['id'];
$text = $update['message']['text'];

if ($text == '/start') {
bot('sendMessage', [
'chat_id' => $chatId,
'text' => '*鈥� 丕賴賱丕 亘賰 毓夭賷夭賷 賮賷 亘賵鬲 丕賱匕賰丕亍 丕賱丕氐胤賳丕毓賷
鈥� 兀賳丕 GPT AI 貙 鬲賲 鬲丿乇賷亘賴 亘丕爻鬲禺丿丕賲 鬲賯賳賷丞 丕賱匕賰丕亍 丕賱丕氐胤賳丕毓賷 
鈥� 賱鬲賵賮賷乇 丕賱廿噩丕亘丕鬲 賵丕賱賲丨丕丿孬丕鬲 賱賱賲爻鬲禺丿賲賷賳 
鈥� 賮賷 賲禺鬲賱賮 丕賱賲賵丕囟賷毓 賵丕賱賲噩丕賱丕
鈥� 丕賰丿乇 丕爻丕毓丿賰 亘卮賷亍 責 
鈥� 賱氐賳毓 氐賵乇 亘丕賱匕賰丕亍 丕賱丕氐胤賳丕毓賷 丕乇爻賱 /image 亘毓丿賴丕 丕賱賳氐 丕賱匕賷 鬲乇賷丿賴 *
```賲孬丕賱
/image cat```
*鈥� 賱賰鬲丕亘賴 毓賱賶 賵乇賯賴 亘賷囟丕亍 賳氐 丕乇爻賱 /Write 亘毓丿賴丕 丕賱賳氐 丕賱匕賷 鬲乇賷丿 賰鬲丕亘鬲賴 賮賷 賵乇賯賴*
```賲孬丕賱
/Write cat```',
'parse_mode' => "Markdown",
'disable_web_page_preview' => true,
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "鈥� 賲胤賵乇 丕賱亘賵鬲 鈥�", 'url' => "https://t.me/T_0_M0"],
['text' => "鈥� 賯賳丕丞 丕賱亘賵鬲 鈥�", 'url' => "https://t.me/izeoe"]]
]
])
]);
return;
}
if (strpos($text, '/image ') === 0) {
    $description = substr($text, 7);

    $waitingMessage = bot('sendMessage', [
        'chat_id' => $chatId,
        'text' => "*鈥� 噩丕乇 丕賳卮丕亍 氐賵乇丞 丨爻亘 賵氐賮賰 鈫� $description*",
        'parse_mode' => 'Markdown',
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "鈥� 賲胤賵乇 丕賱亘賵鬲 鈥�", 'url' => "https://t.me/T_0_M0"],['text' => "鈥� 賯賳丕丞 丕賱亘賵鬲 鈥�", 'url' => "https://t.me/izeoe"]]
            ]
        ])
    ]);

    $api = 'http://art.nowtechai.com/art?name=' . urlencode($description);
    $headers = [
        "User-Agent: okhttp/5.0.0-alpha.9",
        "Connection: Keep-Alive",
        "Accept: application/json"
    ];

    $context = stream_context_create([
        "http" => [
            "header" => implode("\r\n", $headers)
        ]
    ]);
//饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸
//鈥� 賱丕 鬲賳爻賶 匕賰乇 丨賯賵賯 丕賱賲胤賵乇 鬲賵賲
//鈥� 丕賱賲胤賵乇 鈫� @T_0_M0 鈫�
//鈥� 賯賳丕丞 丕賱賲胤賵乇 鈫� @izeoe 鈫�
//饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸
    $response = @file_get_contents($api, false, $context);

    if ($response !== FALSE) {
        $data = json_decode($response, true);

        if ($data && isset($data['code']) && $data['code'] == 200 && !empty($data['data']) && isset($data['data'][0]['img_url'])) {
            $imageData = $data['data'][0];

            sleep(1);

            bot('deleteMessage', [
                'chat_id' => $chatId,
                'message_id' => $waitingMessage['result']['message_id']
            ]);

            bot('sendPhoto', [
                'chat_id' => $chatId,
                'photo' => $imageData['img_url'],
                'caption' => "*鈥� 鬲賲 丕賳卮丕亍 丕賱氐賵乇丞 亘賳噩丕丨 鉁� .\n鈥� 賵氐賮 丕賱氐賵乇丞 鈫� $description*",
                'parse_mode' => 'Markdown',
                'reply_markup' => json_encode([
                    'inline_keyboard' => [
                        [['text' => "鈥� 賲胤賵乇 丕賱亘賵鬲 鈥�", 'url' => "https://t.me/T_0_M0"],['text' => "鈥� 賯賳丕丞 丕賱亘賵鬲 鈥�", 'url' => "https://t.me/izeoe"]]
                    ]
                ])
            ]);
            exit;
        } else {
            bot('sendMessage', [
                'chat_id' => $chatId,
                'text' => "*鈥� 賱賲 賷鬲賲 丕賱毓孬賵乇 毓賱賶 丕賱氐賵乇丞 .*",
                'parse_mode' => 'Markdown'
            ]);
            exit;
        }
    } else {
        bot('sendMessage', [
            'chat_id' => $chatId,
            'text' => "*鈥� 丨丿孬 禺胤兀 兀孬賳丕亍 廿賳卮丕亍 丕賱氐賵乇丞 貙 丕賱乇噩丕亍 廿丿禺丕賱 賵氐賮 賵丕囟丨 賵賲賮賴賵賲 .*",
            'parse_mode' => 'Markdown'
        ]);
        exit;
    }
}

if (strpos($text, '/Write ') === 0) {
    $textToWrite = substr($text, 7);
    bot('sendPhoto', [
        'chat_id' => $chatId,
        'photo' => "https://apis.xditya.me/write?text=" . urlencode($textToWrite),
        'caption' => "`$textToWrite`",
        'parse_mode' => "Markdown",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "鈥� 賲胤賵乇 丕賱亘賵鬲 鈥�", 'url' => "https://t.me/T_0_M0"],['text' => "鈥� 賯賳丕丞 丕賱亘賵鬲 鈥�", 'url' => "https://t.me/izeoe"]]
            ]
        ])
    ]);
    exit;
}
//饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸
//鈥� 賱丕 鬲賳爻賶 匕賰乇 丨賯賵賯 丕賱賲胤賵乇 鬲賵賲
//鈥� 丕賱賲胤賵乇 鈫� @T_0_M0 鈫�
//鈥� 賯賳丕丞 丕賱賲胤賵乇 鈫� @izeoe 鈫�
//饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸
sendApiResponse($chatId, $text);
function sendApiResponse($chatId, $message) {
    $apiUrl = "https://chatai.aritek.app/stream";
    $payload = json_encode([
        "machineId" => substr(uniqid(), 0, 16) . "." . substr((string)rand(), 0, 18),
        "msg" => [["content" => $message, "role" => "user"]],
        "token" => "eyJzdWIiOiIyMzQyZmczNHJ0MzR0MzQiLCJuYW1lIjoiSm9objM0NTM0NT",
        "type" => 0
    ]);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/x-www-form-urlencoded',
        'User-Agent: Dalvik/2.1.0 (Linux; U; Android 9; G011A Build/PI)'
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    $apiResponse = curl_exec($ch);
    curl_close($ch);
    $response_parts = '';
    $result = explode("\n", $apiResponse);
    foreach ($result as $line) {
        if (strpos($line, "data:") === 0) {
            $data_line = trim(substr($line, 5));
            if (!empty($data_line)) {
                $response_json = json_decode($data_line, true);
                if (isset($response_json['choices'][0]['delta']['content'])) {
                    $response_parts .= $response_json['choices'][0]['delta']['content'];
                }
            }
        }
    }
//饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸
//鈥� 賱丕 鬲賳爻賶 匕賰乇 丨賯賵賯 丕賱賲胤賵乇 鬲賵賲
//鈥� 丕賱賲胤賵乇 鈫� @T_0_M0 鈫�
//鈥� 賯賳丕丞 丕賱賲胤賵乇 鈫� @izeoe 鈫�
//饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸
$waitingMessage = bot('sendMessage', [
'chat_id' => $chatId,
'text' => "*鈥� 丕賳鬲馗乇 賲賳 賮囟賱賰 鈴憋笍*",
'parse_mode' => 'Markdown'
]);    
$message_id = $waitingMessage->result->message_id;
bot('editMessageText', [
'chat_id' => $chatId,
'message_id' => $message_id,
'text' => !empty($response_parts) ? $response_parts : '賱賲 兀鬲賲賰賳 賲賳 丕賱丨氐賵賱 毓賱賶 乇丿.',
'parse_mode' => "markdown"
]);
}
?>
//饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸
//鈥� 賱丕 鬲賳爻賶 匕賰乇 丨賯賵賯 丕賱賲胤賵乇 鬲賵賲
//鈥� 丕賱賲胤賵乇 鈫� @T_0_M0 鈫�
//鈥� 賯賳丕丞 丕賱賲胤賵乇 鈫� @izeoe 鈫�
//饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸饟彸

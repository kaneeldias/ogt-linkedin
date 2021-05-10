<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new Google_Client();
$client->setApplicationName('Google Sheets and PHP');
$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');
$service = new Google_Service_Sheets($client);

$spreadsheetId = "18YJN97bZAyqZJZ04gd7TbyHhNm3_klvuJDG-ApMaPwQ";

$values = [
    [
       "A", "B"
    ]
];

function append($values){

    global $service;
    global $spreadsheetId;

    $body = new Google_Service_Sheets_ValueRange([
        'values' => $values
    ]);

    $params = [
        'valueInputOption' => 'USER_ENTERED'
    ];

    $range = 'Sign-Ups';

    $result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);
    return $result->getUpdates()->getUpdatedCells();

}



?>

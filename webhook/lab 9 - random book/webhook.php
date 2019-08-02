    
<?php

include_once('db.php');


function processMessage($update) {
    if($update["queryResult"]["action"] == "สุ่มนิยาย"){
        $db = new db();
        $book = $db->query("SELECT * FROM `book` WHERE = 'นิยาย' ORDER BY RAND() LIMIT 1")->find();
        sendMessage(array(
            "source" => $update["responseId"],
            "fulfillmentText"=> $book->name,
            "payload" => array(
                "items"=>[
                    array(
                        "simpleResponse"=>
                    array(
                        "textToSpeech"=>"response from host"
                        )
                    )
                ],
                ),
        ));
    } else{
        sendMessage(array(
            "source" => $update["responseId"],
            "fulfillmentText"=>"Error",
            "payload" => array(
                "items"=>[
                    array(
                        "simpleResponse"=>
                    array(
                        "textToSpeech"=>"not hello action"
                        )
                    )
                ],
            ),
        ));
        
    }
}
function sendMessage($parameters) {
    echo json_encode($parameters);
}
$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);
if (isset($update["queryResult"]["action"])) {
    processMessage($update);
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $update["queryResult"]["action"]);
    fclose($myfile);
}else{
    sendMessage(array(
        "source" => $update["responseId"],
        "fulfillmentText"=> "Bad request 404",
        "payload" => array(
            "items"=>[
                array(
                    "simpleResponse"=>
                array(
                    "textToSpeech"=>"Bad request"
                        )
                )
            ],
            ),
        
    ));
}

?>
?>

<?php
function processMessage($update) {
    if($update["queryResult"]["action"] == "payload"){
        
       $json = '{
          "type": "image",
          "originalContentUrl": "https://pbs.twimg.com/media/DUYM0-_VMAEcN14.jpg",
          "previewImageUrl": "https://pbs.twimg.com/media/DUYM0-_VMAEcN14.jpg",
          "animated": false
        }';
        
        $payload = '{
            "fulfillmentMessages" : [
                {
                    "payload": {
                        "line": 
                            '.$json.'
                        },
                    "platform" : "LINE"
                }
            ]
        }';
        echo $payload;
    }  else {
        sendMessage(array(
            "source" => $update["responseId"],
            "fulfillmentText"=>"Error",
            "payload" => array(
                "items"=>[
                    array(
                        "simpleResponse"=>
                    array(
                        "textToSpeech"=>"action not match"
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

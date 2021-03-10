<?php 
// Adapter.
class Facebook {
    public function post($msg) {
        echo "Posting message...";
    }
}

$facebook = new Facebook();

$msg = getMessageFromUser();
// ... 

$facebook->post($msg);

/*
Source: Easy Learn Tutorial
https://www.youtube.com/user/easylearntutorial
The client can always rely that the script will work (even with the changes) because the Adapter class will only rely on the interface.
The Adapter pattern translates the interface of one class into some other interface.
This pattern is useful when your client code makes calls to APIs.
*/
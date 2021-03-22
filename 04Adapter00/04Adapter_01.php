<?php 
// Adapter.
class Facebook {
    public function post($msg) {
        echo "Posting message...";
    }
}

interface SocialMediaAdapter {
    public function post($msg);
}

class FacebookAdapter implements SocialMediaAdapter {
    private $facebook;

    public function __construct(Facebook $facebook) {
        $this->facebook = $facebook;
    }

    public function post($msg) {
        $this->facebook->postToWall($msg);
    }
}

function getMessageFromUser() {
    return "Hello World!!!";
}

$facebook = new FacebookAdapter(new Facebook());

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

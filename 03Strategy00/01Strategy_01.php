<?php
// Strategy
interface SortStrategy {
    public function sort();
}

class QuickSort {
    private $data;

    public function __construct(Array $data) {
        $this->data = $data;
    }

    public function sort() {
        // ...
    }

}

class MergeSort {
    private $data;

    public function __construct(Array $data) {
        $this->data = $data;
    }

    public function sort() {
        // ...
    }
}

function sort(&$data) {
    // sort
}

$data = array(7, 2, 5, 9, 6, 5, 4, 1, 2, 3, 2, 77, 25);
sort($data);


/*
Source: Easy Learn Tutorial
https://www.youtube.com/user/easylearntutorial
The Strategy allows you to select more than one algorithm at a time. 
Between Quickstart and Megesort, the script can implement either depending on load and efficiency.
*/

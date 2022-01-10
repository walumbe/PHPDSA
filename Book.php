<?php

function findBook(Array $bookList, String $book){
    $found = false;

    foreach ($bookList as $index => $bookName) {
        if($bookName == $book){
            $found = $index;
        }
    }

    return $found;
}

function placeAllBooks(Array $orderedBooks, Array &$bookList){
    foreach($orderedBooks as $book){
        $bookFound = findBook($bookList, $book);
        if($bookFound !== false){
            array_splice($bookList, $bookFound, 1);
        }
    }
}

$bookList = ['PHP','MySQL','PGSQL','Oracle','Java'];
$orderedBooks = ['MySQL','PGSQL','Java'];

placeAllBooks($orderedBooks, $bookList);
echo implode(",", $bookList);


?>
<?php 
/**
 * Menghapus Todo di list
 */

require_once __DIR__ . "/../Model/ToDoList.php";
require_once __DIR__ . "/../BussinesLogic/RemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewRemoveTodoList()
{
    echo "----------------------" . PHP_EOL;
    echo "   REMOVE TODO LIST   " . PHP_EOL;
    echo "----------------------" . PHP_EOL;
    
    echo "Type x for cancel" . PHP_EOL;

    $option = input("Remove");
    if ($option == "x") {
        echo "Success for canceled" . PHP_EOL;
    }else {
        $success = removeTodoList($option);
        if ($success) {
            echo "Success for remove todo" . PHP_EOL;
        }else {
            echo "Failed to rmove todo" . PHP_EOL;
        }
    }
}
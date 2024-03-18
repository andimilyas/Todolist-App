<?php 

require_once __DIR__ . "/../Model/ToDoList.php";
require_once __DIR__ . "/../BussinesLogic/AddTodolist.php";
require_once __DIR__ . "/../Helper/Input.php";

/**
 * Menambah Todo ke list
 */

 function viewAddTodoList()
 {
    echo "----------------------" . PHP_EOL;
    echo "     ADD TODO LIST    " . PHP_EOL;
    echo "----------------------" . PHP_EOL;

    echo "Type x for cancel" . PHP_EOL;
    $todo = input("Input your Todo");
    if ($todo == "x") {
        echo "Success for canceled" . PHP_EOL;
    }else {
        addTodoList($todo);
    }
    
 }
<?php 

/**
 * Menampilkan Todo di list
 */

require_once __DIR__ . "/../Model/ToDoList.php";
require_once __DIR__ . "/../BussinesLogic/ShowTodolist.php";
require_once __DIR__ . "/../View/ViewAddTodolist.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewShowTodoList()
{
    while (true) {
        showTodoList();
        
        echo "----------------------" . PHP_EOL;
        echo "         MENU          ". PHP_EOL;
        echo "----------------------" . PHP_EOL;
        echo "1. Add Todo" . PHP_EOL;
        echo "2. Remove Todo" . PHP_EOL;
        echo "x. Exit" . PHP_EOL;

        $pilihan = input("Option");

        if ($pilihan == "1") {
            viewAddTodoList();
        }elseif ($pilihan == "2") {
            viewRemoveTodoList();
        }elseif ($pilihan == "x") {
            break;
        }else{
            echo "Your input is not valid" . PHP_EOL;
        }
    }

    echo "Happy Your Moment" . PHP_EOL;
}
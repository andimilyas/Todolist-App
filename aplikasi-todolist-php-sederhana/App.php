<?php 

require_once __DIR__ . "/model/ToDoList.php";
require_once __DIR__ . "/bussineslogic/AddTodolist.php";
require_once __DIR__ . "/bussineslogic/RemoveTodoList.php";
require_once __DIR__ . "/bussineslogic/ShowTodolist.php";
require_once __DIR__ . "/view/ViewAddTodolist.php";
require_once __DIR__ . "/view/ViewRemoveTodoList.php";
require_once __DIR__ . "/view/ViewShowTodolist.php";
require_once __DIR__ . "/helper/Input.php";

echo "------------------------" . PHP_EOL;
echo "|     TODO LIST APP    |" . PHP_EOL;
echo "------------------------" . PHP_EOL;

viewShowTodoList();
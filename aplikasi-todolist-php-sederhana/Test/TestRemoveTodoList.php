<?php 

require_once "../Model/ToDoList.php";
require_once "../BussinesLogic/ShowTodolist.php";
require_once "../BussinesLogic/RemoveTodoList.php";
require_once "../BussinesLogic/AddTodolist.php";


addTodoList("Baca buku");
addTodoList("Ngoding");
addTodoList("Masak");
addTodoList("Mandi");

showTodoList();
removeTodoList(2);
showTodoList();

$isSuccess = removeTodoList(1);
var_dump($isSuccess);
showTodoList();
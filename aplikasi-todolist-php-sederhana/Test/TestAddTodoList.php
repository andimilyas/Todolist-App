<?php 

require_once "../Model/ToDoList.php";
require_once "../BussinesLogic/AddTodolist.php";

addTodoList("Baca Buku");
addTodoList("Ngoding");
addTodoList("Masak");

var_dump($toDoList);
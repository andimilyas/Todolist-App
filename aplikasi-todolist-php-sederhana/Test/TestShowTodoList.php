<?php 

require_once "../Model/ToDoList.php";
require_once "../BussinesLogic/ShowTodolist.php";


$toDoList = [
    1 => "Belajar PHP Dasar",
    2 => "Belajar PHP OOP",
    3 => "Belajar PHP Database",
];
showTodoList();
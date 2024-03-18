<?php 

require_once "../View/ViewShowTodolist.php";
require_once "../BussinesLogic/AddTodolist.php";


addTodoList("Baca");
addTodoList("Makan");
addTodoList("Ngoding");
addTodoList("Solat");
addTodoList("Maen");


viewShowTodoList();
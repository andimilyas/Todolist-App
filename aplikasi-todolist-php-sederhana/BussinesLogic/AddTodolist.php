<?php 

/**
 * Menambah Todo ke list
 */

 function addTodoList(string $todo)
 {
    global $toDoList;

    $number = sizeof($toDoList) + 1;

    $toDoList[$number] = $todo;
 }
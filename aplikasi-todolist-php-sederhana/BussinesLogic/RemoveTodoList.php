<?php 
/**
 * Menghapus Todo di list
 */
function removeTodoList(int $number)
{
    //deklarasikan variabel global
    global $toDoList;

    if ($number > sizeof($toDoList)) {
        echo "Input number ($number) is not available" . PHP_EOL;
    }

    for ($i=$number; $i < sizeof($toDoList); $i++) { 
        $toDoList[$i] = $toDoList[$i+1];
    }

    unset($toDoList[sizeof($toDoList)]);

    return true;
}
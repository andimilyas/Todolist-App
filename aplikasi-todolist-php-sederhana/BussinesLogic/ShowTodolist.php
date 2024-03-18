<?php 

/**
 * Menampilkan Todo di list
 */

function showTodoList()
{
    global $toDoList;
    echo PHP_EOL;
    echo "----------------------" . PHP_EOL;
    echo "    YOUR TODO LIST" . PHP_EOL;
    echo "----------------------" . PHP_EOL;

    if ($toDoList == true) {
        foreach ($toDoList as $number => $value) {
            echo "$number. $value" . PHP_EOL;
        }
    }else {
        echo "    Data is empty" . PHP_EOL;
        echo PHP_EOL;
    }
}
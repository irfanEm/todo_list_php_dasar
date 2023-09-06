<?php

/**
 * Menampilkan Todo di List
 */

 function showTodoList()
 {
    global $todoList;

    echo "TODOLIST".PHP_EOL;

    foreach( $todoList as $number => $todo )
    {
        echo $number . " " . $todo . PHP_EOL;
    }
 }
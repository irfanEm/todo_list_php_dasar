<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
function viewAddTodoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("To Do (x untuk membatalkan)");

    if( $todo == "x" )
    {
        echo "Batal Menambah Todo." . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
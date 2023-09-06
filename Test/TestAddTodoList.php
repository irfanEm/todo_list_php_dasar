<?php

require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../Model/TodoList.php";

addTodoList("Irfan");
addTodoList("Machmud");

var_dump($todoList);
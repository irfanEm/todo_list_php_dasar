<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";

addTodoList("Zaidun");
addTodoList("bin");
addTodoList("Salman");

showTodoList();

viewRemoveTodoList();

showTodoList();
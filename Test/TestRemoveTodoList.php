<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

addTodoList("Balqist");
addTodoList("Farah");
// addTodoList("Anabila");
addTodoList("Shilvia");
addTodoList("Qurota");
addTodoList("Ayun");

showTodoList();

removeTodoList(1);

showTodoList();

$success = removeTodoList(8);

var_dump ($success);

showTodoList();
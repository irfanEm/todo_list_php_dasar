<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Config/Database.php";

use Config\Database;
use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist(): void
{

    $connection = Database::getConnection();

    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");
    $todolistService->addTodolist("Belajar PHP WEB");

    $todolistService ->showTodolist();

}

function testAddTodolist(): void
{

    $connection = Database::getConnection();

    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");
    $todolistService->addTodolist("Belajar PHP WEB");

    //$todolistService ->showTodolist();

}

function testRemoveTodolist(): void
{

    $connection = Database::getConnection();

    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->removeTodolist(6);
    $todolistService->removeTodolist(5);
    $todolistService->removeTodolist(4);
    $todolistService->removeTodolist(3);
    $todolistService->removeTodolist(2);
    $todolistService->removeTodolist(1);
}

// test Show Todolist
testShowTodolist();

// test add Todolist
// testAddTodolist();

// test remove Todolist
// testRemoveTodolist();
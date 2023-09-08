<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist(): void
{

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = new Todolist("Belajar PHP Dasar");
    $todolistRepository->todolist[2] = new Todolist("Belajar PHP OOP");
    $todolistRepository->todolist[3] = new Todolist("Belajar PHP Database");

    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService ->showTodolist();

}

function testAddTodolist(): void
{

    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");
    $todolistService->addTodolist("Belajar PHP WEB");

    $todolistService ->showTodolist();

}

function testRemoveTodolist(): void
{

    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");
    $todolistService->addTodolist("Belajar PHP WEB");

    $todolistService ->showTodolist();

    $todolistService->removeTodolist(5);
    $todolistService ->showTodolist();
}

// test Show Todolist
// testShowTodolist();

// test add Todolist
// testAddTodolist();

// test remove Todolist
testRemoveTodolist();
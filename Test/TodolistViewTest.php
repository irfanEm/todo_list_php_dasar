<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../View/TodolistView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

function testViewShowTodolist()
{
  
  $todolistRepository = new TodolistRepositoryImpl();
  $todolistService = new TodolistServiceImpl($todolistRepository);
  $todolistView = new TodolistView($todolistService);

  $todolistService->addTodolist("Belajar HTML");
  $todolistService->addTodolist("Belajar CSS");
  $todolistService->addTodolist("Belajar JS");

  $todolistView->showTodolist();

}

function testViewAddTodolist()
{
  
  $todolistRepository = new TodolistRepositoryImpl();
  $todolistService = new TodolistServiceImpl($todolistRepository);
  $todolistView = new TodolistView($todolistService);

  $todolistService->addTodolist("Belajar HTML");
  $todolistService->addTodolist("Belajar CSS");
  $todolistService->addTodolist("Belajar JS");

  $todolistService->showTodolist();

  $todolistView->addTodolist();

  $todolistService->showTodolist();

  $todolistView->addTodolist();

  $todolistService->showTodolist();
}

function testViewRemoveTodolist()
{
  
  $todolistRepository = new TodolistRepositoryImpl();
  $todolistService = new TodolistServiceImpl($todolistRepository);
  $todolistView = new TodolistView($todolistService);

  $todolistService->addTodolist("Belajar HTML");
  $todolistService->addTodolist("Belajar CSS");
  $todolistService->addTodolist("Belajar JS");
  $todolistService->addTodolist("Belajar PHP");

  $todolistService->showTodolist();

  $todolistView->removeTodolist();

  $todolistService->showTodolist();

  $todolistView->removeTodolist();

  $todolistService->showTodolist();
}

testViewRemoveTodolist();
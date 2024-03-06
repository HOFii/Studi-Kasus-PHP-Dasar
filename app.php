<?php

require_once __DIR__ . "/model/todoList.php";
require_once __DIR__ . "/bussinesLogic/showTodoList.php";
require_once __DIR__ . "/bussinesLogic/addTodoList.php";
require_once __DIR__ . "/bussinesLogic/removeTodoList.php";
require_once __DIR__ . "/view/viewAddTodoList.php";
require_once __DIR__ . "/view/viewRemoveTodoList.php";
require_once __DIR__ . "/view/viewShowTodoList.php";
require_once __DIR__ . "/helper/input.php";

echo "Aplikasi TodoList" . PHP_EOL;

viewShowTodoList();

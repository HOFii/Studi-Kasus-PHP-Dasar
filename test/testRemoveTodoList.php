<?php

require_once "../model/todoList.php";
require_once "../bussinesLogic/addTodoList.php";
require_once "../bussinesLogic/showTodoList.php";
require_once "../bussinesLogic/removeTodoList.php";

addTodoList("Elaina");
addTodoList("Kiana");
addTodoList("Asuna");
addTodoList("Bronya");
addTodoList("Fuhua");

showTodoList();

removeTodoList(3);

showTodoList();

$success = removeTodoList(4);
var_dump($success);
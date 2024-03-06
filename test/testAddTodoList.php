<?php

require_once "../model/todoList.php";
require_once "../bussinesLogic/addTodoList.php";

addTodoList("Gusti");
addTodoList("Alifiraqsha");
addTodoList("Akbar");

var_dump($todoList);
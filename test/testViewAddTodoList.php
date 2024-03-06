<?php

require_once "../view/viewAddTodoList.php";
require_once "../bussinesLogic/showTodoList.php";
require_once "../bussinesLogic/addTodoList.php";

addTodoList("Elaina");
addTodoList("Kiana");
addTodoList("Asuna");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();
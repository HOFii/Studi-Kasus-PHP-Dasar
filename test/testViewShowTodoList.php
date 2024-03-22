<?php

require_once "../view/viewShowTodoList.php";
require_once "../bussinesLogic/addTodoList.php";

addTodoList("Elaina");
addTodoList("Kiana");
addTodoList("Asuna");
addTodoList("Bronya");
addTodoList("Fuhua");

viewShowTodoList();
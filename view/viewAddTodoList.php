<?php

require_once __DIR__ . "/../model/todoList.php";
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../bussinesLogic/addTodoList.php";
function viewAddTodoList()
{
    echo "Menambah Todo" . PHP_EOL;

    $todo = input("todo (x untuk batal)");

    if ($todo == "x"){
        echo "Batal Menambah Todo" . PHP_EOL;
    } else{
        addTodoList($todo);
    }
}
<?php

require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../bussinesLogic/removeTodoList.php";
function viewRemoveTodoList()
{
    echo "Menghapus Todo" . PHP_EOL;

    $pilihan = input("nomor (x untuk batalkkan)");

    if($pilihan == "x"){
        echo "Batal menghapus todo" . PHP_EOL;
    } else{
        $success = removeTodoList($pilihan);

    if($success){
        echo "Sukses menghapus todo nomor pilihan" . PHP_EOL;
    } else{
        echo "Gagal menghapus todo nomor pilihan" . PHP_EOL;
    }
    }
}
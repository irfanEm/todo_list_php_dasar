<?php

require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = (int) input("nomor");

    $success = removeTodoList($pilihan);

    if ($pilihan == "x") {
        echo "Gagal menambahkan todo" . PHP_EOL;
    } else {
        if ($success) {
            echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }

}
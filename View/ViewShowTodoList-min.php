<?php require_once '../Model/TodoList.php';
require_once '../BusinessLogic/ShowTodoList.php';
require_once '../View/ViewAddTodoList.php';
require_once '../View/ViewRemoveTodoList.php';
require_once '../helper/input.php';
/** * Undocumented function */
function viewShowTodoList()
{ 
    while(true) { 

        showTodoList(); 

        echo "MENU".PHP_EOL; 
        echo "1. Tambah Todo".PHP_EOL; 
        echo "2. Hapus Todo".PHP_EOL; 
        echo "x. Keluar".PHP_EOL; 

        $pilihan=input("Pilih"); 
        
        if($pilihan=="1")
        { 
            viewAddTodoList();
        } elseif($pilihan=="2")
        { 
            viewRemoveTodoList();
        } elseif($pilihan=="3")
        { 
            break;
        } else{ 
            echo "Pilihan tidak ada".PHP_EOL;
        }
    } echo "Sampai Jumpa Lagi".PHP_EOL;}
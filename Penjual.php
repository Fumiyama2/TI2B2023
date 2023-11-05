<?php
include_once("User.php");

class Penjual implements User{
    public function masuk(){
        echo"Penjual bisa masuk";
    }
    public function daftar(){
        echo "Penjual bisa daftar";
    }
    public function keluar(){
        echo "Penjual bisa keluar";
    }
}
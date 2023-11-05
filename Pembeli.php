<?php
include_once "User.php";
class Pembeli implements User{
    public function masuk(){
        echo "Pembeli bisa masuk";
    }
    public function daftar(){
        echo "Pembeli bisa daftar";
    }
    public function keluar(){
        echo "Pembeli bisa keluar";
    }
}


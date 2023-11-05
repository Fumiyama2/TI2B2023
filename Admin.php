<?php
include_once "User.php";
class Admin implements User{
    public function masuk(){
        echo "Admin bisa masuk";
    }
    public function daftar(){
        echo "Admin bisa daftar";
    }
    public function keluar(){
        echo "Admin bisa keluar";
    }
    public function mengelola(){
        echo "Admin mengelola data";
    }

}
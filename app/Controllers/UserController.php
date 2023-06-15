<?php

class UserController
{
    public static function index()
    {
        include 'Model/User.php';

        $user = new User();
        $user->getAllRows();

        include './src/views/users/index.php';
    }

    public static function create()
    {
        include './src/views/users/create.php';
    }

    public static function store()
    {
        include 'Model/User.php';

        $user = new User();

        $user->fullname = $_POST['fullname'];
        $user->email = $_POST['email'];
        $user->username = $_POST['username'];
        $user->password = $_POST['password'];

        $user->save();

        header("Location: /users");
    }

    public static function show()
    {
        // busca
    }

    public static function edit()
    {
        // editar
    }

    public static function update()
    {
        // update user
    }

    public static function destroy()
    {
        // delete
    }

}
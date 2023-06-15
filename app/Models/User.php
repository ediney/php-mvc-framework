<?php

class User
{
    public $id, $fullname, $username, $email, $password;

    public $rows;

    public function save()
    {
        include 'DAO/UsersDAO.php';

        $dao = new UsersDAO();

        $dao->insert($this);
    }

    public function getAllRows()
    {
        include 'DAO/UsersDAO.php';

        $dao = new UsersDAO();

        $this->rows = $dao->select();
    }
}
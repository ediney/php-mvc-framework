<?php

class UsersDAO
{
    private $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=db_phpmvc";

        $this->connection = new PDO($dsn, 'ediney', 'vanessa1611');


    }

    public function insert(User $user)
    {
        $sql = "INSERT INTO users (fullname, email, username, password) VALUES (?, ?, ?)";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindValue(1, $user->fullname);
        $stmt->bindValue(2, $user->email);
        $stmt->bindValue(3, $user->username);
        $stmt->bindValue(4, $user->password);

        $stmt->execute();
    }

    public function update(User $user)
    {}

    public function select()
    {
        $sql = "SELECT * FROM users ";

        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function delete()
    {}
}
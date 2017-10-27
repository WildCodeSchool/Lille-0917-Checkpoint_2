<?php

namespace Model;

use Model\Connexion;


class ChannelManager
{

    private $conn;

    public function __construct()
    {
        $db = Connexion::getInstance();
        $this->conn = $db->getDbh();
    }

    public function findAll()
    {
        // TODO
    }

    public function findChannelsByNumber()
    {
        $query = "SELECT * FROM channel ORDER BY id ASC";

        $channels = $this->conn->query(
            $query, \PDO::FETCH_CLASS, Program::class)
            ->fetchAll();
        return $channels;
    }


    public function findOne($id)
    {
        // TODO...
    }
}

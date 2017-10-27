<?php

namespace Model;


class ChannelManager
{

    private $conn; //variable de connexion

    public function __construct()
    {
        $db = Connexion::getInstance();
        $this->conn = $db->getDbh();
    }

    public function findAll()
    {
        $query = "SELECT * FROM channel";

        $channels = $this->conn->query(
            $query, \PDO::FETCH_CLASS, channel::class)
            ->fetchAll();
        return $channels;
    }

    public function findOne($id)
    {
        $statement = $this->conn->prepare('SELECT * FROM channel WHERE id=:id');
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();
        $statement->setFetchMode(\PDO::FETCH_CLASS, channel::class);
        $program = $statement->fetch();

        return $channel;
    }
}

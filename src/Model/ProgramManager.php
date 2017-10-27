<?php

namespace Model;

use Model\Connexion;

/**
 * Class Item
 * @package Model
 */
class ProgramManager
{

    private $conn; //variable de connexion

    public function __construct()
    {
        $db = Connexion::getInstance();
        $this->conn = $db->getDbh();
    }

    /**
     *
     */
    public function findAll()
    {
        $query = "SELECT * FROM program";

        $programs = $this->conn->query(
            $query, \PDO::FETCH_CLASS, Program::class)
            ->fetchAll();
        return $programs;
    }

    /**
     * @param $id
     */
    public function findOne($id)
    {
        $statement = $this->conn->prepare('SELECT * FROM program WHERE id=:id');
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();
        $statement->setFetchMode(\PDO::FETCH_CLASS, Program::class);
        $program = $statement->fetch();

        return $program;
    }

    /**
     *
     */
    public function insert($data)
    {
        //TODO : Implements SQL INSERT request
    }

    /**
     *
     */
    public function delete($id)
    {
        //TODO : Implements SQL DELETE request
    }

    /**
     *
     */
    public function update($id)
    {
        //TODO : Implements SQL UPDATE request
    }
}

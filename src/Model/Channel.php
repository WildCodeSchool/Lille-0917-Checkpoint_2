<?php

namespace Model;


class Channel
{
    private $id;
    private $name;
    private $number;

    // TODO à compléter


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Program
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Program
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

}

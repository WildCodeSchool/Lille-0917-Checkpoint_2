<?php

namespace Model;


class Channel
{
    private $id;

    private $name;

    private $number;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Channel
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
     * @return Channel
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getnumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     * @return Channel
     */
    public function setChannel($number)
    {
        $this->number = $number;

        return $this;
    }

}

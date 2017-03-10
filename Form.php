<?php

class Form
{
    private $userName;
    private $name;
    private $email;
    private $text;

    /**
     * Form constructor.
     * @param array $arr
     */
    public function __construct(array $arr)
    {
        $this->userName = isset($arr['userName']) ? htmlspecialchars(trim(mb_strtolower($arr['userName']))) : null;
        $this->name = isset($arr['name']) ? htmlspecialchars(trim(mb_strtolower($arr['name']))) : null;
        $this->email = isset($arr['mail']) ? htmlspecialchars(trim(mb_strtolower($arr['mail']))) : null;
        $this->text = isset($arr['text']) ? htmlspecialchars($arr['text']) : null;
    }

    /**
     * @return null|string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $a
     * @return int
     */
    public function userValidation($a)
    {
        $preg = "/^[a-zA-Z0-9_-]{4,12}$/";
        return preg_match($preg, $a);
    }

    /**
     * @return int
     */

    public function mailValidation()
    {
        $preg = '/^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/';
        return preg_match($preg, $this->email);
    }

}
<?php


class File
{
    private $name;
    private $type;
    private $error;
    private $tmpName;

    public function __construct(array $arr)
    {
        $this->name = $arr['name'];
        $this->type = $arr['type'];
        $this->error = $arr['error'];
        $this->tmpName = $arr['tmp_name'];
    }

    public function typeFile($a)
    {
        $arr = explode('.', $a);
        $i = count($arr);
        return $arr[$i - 1];
    }

    public function name($a)
    {
        return $name = strftime('%d-%m-%Y-%H-%M-%S') . '.' . $a;
    }

    public function getPut($name)
    {
        return "upload/" . $name;
    }
}
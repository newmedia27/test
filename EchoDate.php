<?php

class EchoDate

{
    private $from;
    private $to;

    public function __construct(array $arr)
    {
        $this->from = htmlspecialchars($arr['from'] . ' ' . '00:00:00');
        $this->to = htmlspecialchars($arr['to'] . ' ' . '00:00:00');

    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }


}
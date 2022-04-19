<?php

class EscapeString
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function test_Input()
    {
        $this->data = trim($this->data);
        $this->data = stripslashes($this->data);
        $this->data = htmlspecialchars($this->data);
        $this->data = strip_tags($this->data);
        $this->data = filter_var($this->data, FILTER_UNSAFE_RAW);

        return $this->data;
    }

    public static function from_Input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        $data = filter_var($data, FILTER_UNSAFE_RAW);
        //$data = mysqli_real_escape_string($connection, $data);
        return $data;
    }
}

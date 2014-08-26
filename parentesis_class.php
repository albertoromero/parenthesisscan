<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
class Analize
{
    public $analize;

    public function analizes($analize)
    {
        $this->analize = $analize;

        $open = strpos($this->analize, "(");
        $close = strpos($this->analize, ")");

        if ($close < $open) {
            return false;
        } else {
            return($this->analizesecond());
        }

    }

    public function analizesecond()
    {   
        $open = substr_count($this->analize, "(");
        $close = substr_count($this->analize, ")");

        if ($open == $close) {
            return true;
        } else {
            return false;
        }
    }

    public function showName()
    {
         echo $this->analize;
    }
}
?>
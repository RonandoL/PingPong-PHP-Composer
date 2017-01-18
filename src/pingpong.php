<?php
    class PingPong
    {
      public $number;
    }

    function replaceMultiples($input)
    {
        return $input;

    }

    function construct($number_input)
    {
        $this->number = $number_input;
    }


    function setPingPong($new_number)
    {
        $this->number = $new_number;
    }

    function getPingPong()
    {
        return $this->number;
    }
?>

<?php
    class Client
    {
        private $name;
        private $phone;
        private $style_choice;
        private $stylist_id;
        private $id;

        function __construct ($name, $phone, $style_choice, $stylist_id, $id = null)
        {
            $this->name = $name;
            $this->phone = $phone;
            $this->style_choice = $style_choice;
            $this->stylist_id = $stylist_id;
            $this->id = $id;
        }

        function getName()
        {
            
        }
    }
 ?>

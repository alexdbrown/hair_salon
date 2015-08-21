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
            return $this->name;
        }

        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }

        function getPhone()
        {
            return $this->phone;
        }

        function setPhone($new_phone)
        {
            $this->phone = (string) $new_phone;
        }

        function getStyleChoice()
        {
            return $this->style_choice;
        }

        function setStyleChoice($new_style_choice)
        {
            $this->style_choice = (string) $new_style_choice;
        }

        function getStylistId()
        {
            return $this->stylist_id;
        }

        function getId()
        {
            return $this->id;
        }

        function save()
        {
            $GLOBALS['DB']->exec("INSERT INTO clients (name, phone, style_choice, stylist_id) VALUES ('{$this->getName()}', '{$this->getPhone()}', '{$this->getStyleChoice()}',{$this->getStylistId()});");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

        static function getAll()
        {
            $db_clients = $GLOBALS['DB']->query("SELECT * FROM clients;");
            $clients = array();
            foreach($db_clients as $client) {
                $name = $client['name'];
                $phone = $client['phone'];
                $style_choice = $client['style_choice'];
                $stlyist_id = $client['stylist_id'];
                $id =$client['id'];
                $new_client = new Client($name, $phone, $style_choice, $stylist_id, $id);
                array_push($clients, $new_client);
            }
            return $clients;
        }

        static function deleteAll()
        {
            
        }
















    }
 ?>

<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Client.php";
    // require_once "src/Stylist.php";

    $server = 'mysql:host=localhost;dbname=hair_salon_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class ClientTest extends PHPUnit_Framework_TestCase
    {
        // protected function tearDown()
        // {
        //     Stylist::deleteAll();
        //     Client::deleteAll();
        // }

        function test_getName()
        {
            //Arrange
            $name = "Sandra Jane";
            $phone = "542-334-0984";
            $style_choice = "The Rachel";
            $stylist_id = 1;
            $id = null;
            $test_client = new Client($name, $phone, $style_choice, $stylist_id, $id);

            //Act
            $result = $test_client->getName();

            //Assert
            $this->assertEquals($name, $result);
        }

        function test_getPhone()
        {
            //Arrange
            $name = "Sandra Jane";
            $phone = "542-334-0984";
            $style_choice = "The Rachel";
            $stylist_id = 1;
            $id = null;
            $test_client = new Client($name, $phone, $style_choice, $stylist_id, $id);

            //Act
            $result = $test_client->getPhone();

            //Assert
            $this->assertEquals($phone, $result);
        }

        function test_getStyleChoice()
        {
            //Arrange
            $name = "Sandra Jane";
            $phone = "542-334-0984";
            $style_choice = "The Rachel";
            $stylist_id = 1;
            $id = null;
            $test_client = new Client($name, $phone, $style_choice, $stylist_id, $id);

            //Act
            $result = $test_client->getStyleChoice();

            //Assert
            $this->assertEquals($style_choice, $result);
        }

        function test_getStylistId()
        {
            //Arrange
            $name = "Sandra Jane";
            $phone = "542-334-0984";
            $style_choice = "The Rachel";
            $stylist_id = 1;
            $id = null;
            $test_client = new Client($name, $phone, $style_choice, $stylist_id, $id);

            //Act
            $result = $test_client->getStylistId();

            //Assert
            $this->assertEquals(true, is_numeric($result));
        }

        function test_getId()
        {
            //Arrange
            $name = "Sandra Jane";
            $phone = "542-334-0984";
            $style_choice = "The Rachel";
            $stylist_id = 1;
            $id = null;
            $test_client = new Client($name, $phone, $style_choice, $stylist_id, $id);

            //Act
            $result = $test_client->getId();

            //Assert
            $this->assertEquals($id, $result);
        }



    }


 ?>

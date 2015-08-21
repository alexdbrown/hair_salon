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

        function test_save()
        {
            //Arrange
            $name = "Jackie";
            $id = null;
            $test_stylist = new Stylist($name, $id);
            $test_stylist->save();

            $name = "Sandra Jane";
            $phone = "542-334-0984";
            $style_choice = "The Rachel";
            $stylist_id = 1;
            $id = null;
            $test_client = new Client($name, $phone, $style_choice, $stylist_id, $id);

            //Act
            $test_client->save();

            //Assert
            $result = Client::getAll();
            $this->assertEquals($id, $result[0]);
        }

        function test_getAll()
        {
            //Arrange
            $name = "Jackie";
            $id = null;
            $test_stylist = new Stylist($name, $id);
            $test_stylist->save();

            $stylist_id = $test_cuisine->getId();

            $name = "Sandra Jane";
            $phone = "542-334-0984";
            $style_choice = "The Rachel";
            $test_client = new Client($name, $phone, $style_choice, $stylist_id);
            $test_client->save();

            $name2 = "Jordy Duran";
            $phone2 = "239-094-0281";
            $style_choice2 = "Bowl Cut";
            $test_client2 = new Client($name2, $phone2, $style_choice2, $stylist_id);
            $test_client2->save();

            //Act
            $result = Client::getAll();

            //Assert
            $this->assertEquals([$test_cleint, $test_client2], $result);
        }



    }


 ?>

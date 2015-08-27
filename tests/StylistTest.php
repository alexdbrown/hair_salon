<?php

    /**
    * @backupGlobals disabled
    * @backupStatic Attributes disabled
    */

    require_once 'src/Stylist.php';
    require_once 'src/Client.php';

    $server = 'mysql:host=localhost:8889;dbname=hair_salon_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class StylistTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Stylist::deleteAll();
            // Client::deleteAll();
        }

        function test_getName()
        {
            //Arrange
            $name = "Jackie";
            $test_stylist = new Stylist($name);

            //Act
            $result = $test_stylist->getName();

            //Assert
            $this->assertEquals($name, $result);
        }

        function test_getId()
        {
            //Arrange
            $name = "Jackie";
            $id = 1;
            $test_stylist = new Stylist($name, $id);

            //Act
            $result = $test_stylist->getId();

            //Assert
            $this->assertEquals(true, is_numeric($result));
        }

        function test_save()
        {
            //Arrange
            $name = "Jackie";
            $test_stylist = new Stylist($name);
            $test_stylist->save();

            //Act
            $result = Stylist::getAll();

            //Assert
            $this->assertEquals($test_stylist, $result[0]);
        }

        function test_getAll()
        {
            //Arrange
            $name = "Jackie";
            $name2 = "Casey";
            $test_stylist = new Stylist($name);
            $test_stylist->save();
            $test_stylist2 = new Stylist($name2);
            $test_stylist2->save();

            //Act
            $result = Stylist::getAll();

            //Assert
            $this->assertEquals([$test_stylist, $test_stylist2], $result);

        }

        function test_deleteAll()
        {
            //Arrange
            $name = "Jackie";
            $name2 = "Casey";
            $test_stylist = new Stylist($name);
            $test_stylist->save();
            $test_stylist2 = new Stylist($name2);
            $test_stylist2->save();

            //Act
            Stylist::deleteAll();
            $result = Stylist::getAll();

            //Assert
            $this->assertEquals([], $result);
        }

        function test_find()
        {
            //Arrange
            $name = "Jackie";
            $name2 = "Casey";
            $test_stylist = new Stylist($name);
            $test_stylist->save();
            $test_stylist2 = new Stylist($name2);
            $test_stylist2->save();

            //Act
            $result = Stylist::find($test_stylist->getId());

            //Assert
            $this->assertEquals($test_stylist, $result);

        }

        function testUpdate()
        {
            //Arrange
            $name = "Jackie";
            $id = null;
            $test_stylist = new Stylist($name, $id);
            $test_stylist->save();

            $new_name = "Joshua";

            //Act
            $test_stylist->update($new_name);

            //Assert
            $this->assertEquals("Joshua", $test_stylist->getName());
        }

        function testDelete()
        {
            //Arrange
            $name = "Jackie";
            $id = null;
            $test_stylist = new Stylist($name, $id);
            $test_stylist->save();

            $name2 = "Casey";
            $test_stylist2 = new Stylist($name2);
            $test_stylist2->save();

            //Act
            $test_stylist->delete();

            //Assert
            $this->assertEquals([$test_stylist2], Stylist::getAll());

        }

        function testGetClients()
        {
            //Arrange
            $name = "Jackie";
            $id = null;
            $test_stylist = new Stylist($name, $id);
            $test_stylist->save();

            $test_stylist_id = $test_stylist->getId();

            $name = "Sandra Jane";
            $phone = "542-334-0984";
            $style_choice = "The Rachel";
            $test_client = new Client($name, $phone, $style_choice, $test_stylist_id);
            $test_client->save();

            $name2 = "Jordy Duran";
            $phone2 = "239-094-0281";
            $style_choice2 = "Bowl Cut";
            $test_client2 = new Client($name2, $phone2, $style_choice2, $test_stylist_id);
            $test_client2->save();

            //Act
            $result = $test_stylist->getClients();

            //Assert
            $this->assertEquals([$test_client, $test_client2], $result);

        }







    }





 ?>

# Hair Salon App

##### Allows user to add stylists and link clients to stylists. August 21, 2015.

#### By Alexandra Brown

## Description

This app allows the user (hair salon owner) to add a list of their stylists and
also link each client to an individual stylist.

## Setup

1. Clone repository from GitHub.
2. Run $ composer install.
3. Start php server in web directory.
4. Unzip hair_salon and hair_salon_test sql files or run MySql in terminal - all command instructions below.
4. Direct browser to localhost:8000/

5. Enjoy.

## Technologies Used

Twig, Silex, PHPUnit, PHP, HTML, CSS, mySQL

## MySql commands to run
-mysql.server start
-mysql -uroot -proot
-CREATE DATABASE hair_salon;
-USE hair_salon;
-CREATE TABLE stylists (id serial PRIMARY KEY, name VARCHAR (255));
-CREATE TABLE clients (id serial PRIMARY KEY, name VARCHAR (255), phone VARCHAR (255), style_choice VARCHAR (255), stylist_id int);
-in Bash terminal enter $ apachectl start and open browser to localhost:8080/phpmyadmin
-copy database but rename as hair_salon_test
-that's all folks!

### Legal

Copyright (c) 2015 Alexandra Brown

This software is licensed under the MIT license.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

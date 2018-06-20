<?php
/**
 * Created by PhpStorm.
 * User: Dante
 * Date: 20.06.2018
 * Time: 16:46
 */

class Db
{

    private  $dbPasswordUser = null;
    private $pathToRootDir = __DIR__ . '/../';
    private $dbPassword;
    private $dbUser;
    private $dbh;

     function __construct()
    {
        $this->dbPasswordUser = file($this->pathToRootDir .'config.txt');
        $this->dbUser = $this->dbPasswordUser[0];
        $this->dbPassword = empty($this->dbPasswordUser[1]) ? '': $this->dbPasswordUser[1];
        $this->dbh = new PDO('mysql:dbname = test;host=localhost',$this->dbUser,$this->dbPassword);


    }

    public function show(){
       var_dump($this->dbPasswordUser);
   }
}
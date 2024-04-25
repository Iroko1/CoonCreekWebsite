
<?php
$dsn = "mysql:host=localhost;dbname=cooncreekbaptistchurch";
        // $username = "cooncreekbaptist"; // actual login
        // $password = "edn8lme6wrm";
        $username = "root"; // local login
        $password = "";
        
        try{
        $db = new PDO($dsn, $username, $password);
        //echo('connected');
        }
        catch(PDOException $e)
        {
            //echo("didn't work");
        } 

        ?>
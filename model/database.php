
<?php
$dsn = "mysql:host=localhost;dbname=cooncreekbaptistchurch";
        $username = "root";
        $password = "";
            
    try{
    $db = new PDO($dsn, $username, $password);
    //echo('connected');
    }
    catch(PDOException $e)
    {
        //echo("didn't work");
    } 


    function getSettings($db, $asso = false) {
        $query = "SELECT * FROM settings";
        $statement = $db->prepare($query);
        $statement->execute();
        $settings = $statement->fetchAll();
        $statement->closeCursor();
        if ($asso) {
            foreach ($settings as $setting) {
                $key = $setting['setting'];
                $value = $setting['is_on'];
                $settings[$key] = $value;
            }
        }
        return $settings;
    }

    $settings = getSettings($db);

?>
<?php
 try {
    $user ='root';
    $pass ='';
    $conn = new PDO('mysql:host=localhost;dbname=bibliotheque', $user, $pass);
    /*foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;*/
} 

catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $requete = "UPDATE `mangas` SET `Etat`='R&eacuteserv&eacute' WHERE ID =1";
    $stmt = $conn->prepare($requete);
    $stmt->execute();
    echo 'F&eacutelicitation vous venez de R&eacuteserv&eacute Naruto Tome 01 ';
}
      
catch(PDOException $e){
    echo 'Erreur : ' . $e->getMessage();
}


?>

           

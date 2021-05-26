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
    $requete = "SELECT Nom, Etat FROM `mangas` WHERE ID = 1";
    $stmt = $conn->prepare($requete);
    $stmt->execute();
   }
      
catch(PDOException $e){
    echo 'Erreur : ' . $e->getMessage();
}

// $resultat=mysql_query($requete);
// while ($row=mysql_fetch_array($resultat)){
//     echo $row["Nom"];
//     echo $row["Etat"];
// }

$result = $stmt->fetch(PDO::FETCH_ASSOC);
echo $result["Nom"];
print " est : ";
echo $result["Etat"];

?>

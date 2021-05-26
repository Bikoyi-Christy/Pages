function OuvrirFenetre1() {
 var hauteur=100; // hauteur de la fenêtre à créer
 var largeur=200;
 options="width="+largeur+",height="+hauteur+"toolbar=yes,directories=no,menubar=no,scrollbars=yes,status=yes";
 fen1 =open("Etat.php","Nouvelle_fenetre",options);
 //fen1.document.write("Bonjour le monde !<BR>");
}

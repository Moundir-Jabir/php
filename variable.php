<?php
    $age = 21;
    define('CONSTANTE','Moundir Jabir');  // déclarer une constante
    $nom = "Jabir";
    $prenom = "Moundir";
    $fullname = "Je m'appelle $prenom $nom";
    //echo $fullname;
    //echo strlen($nom);
?>
<?php
    // indexed arrays
    $people = ["moundir","said","hassan"];
    array_push($people, "charaf");
    //print_r($people);   // pour afficher un tableau
    //echo count($people); // longueur du tableau
?>
<?php
    // tableau associatif
    $contacts = ["moundir" => "0623731085", "said" => "074576448"];
    $contacts["hassan"] = "0645654455";
    //print_r($contacts);
    $contacts = ["mohamed" => "0645764566", ...$contacts, "ahmed" => "0577889955"];
    //print_r($contacts);
    $courses = [
        ["title" => "Reactjs", "price" => 300, "note" => 5],
        ["title" => "Angular", "price" => 500, "note" => 3],
        ["title" => "Vuejs", "price" => 450, "note" => 4]
    ];
    print_r($courses);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
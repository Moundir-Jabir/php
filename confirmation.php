<?php // coalescing operator
    $name = $_REQUEST['fullname'] ?? "";
    $age = $_REQUEST['age'] ?? "";
?>

<h1>Vos infos :</h1>
<p>Nom : <?php echo $name; ?></p>
<p>Age : <?php echo $age; ?></p>
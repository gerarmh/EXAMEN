
<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=inventariosg', 'root','');
    
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>

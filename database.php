<?php
try{
    $pdo= new pdo("mysql:host=localhost;dbname=freejob","root","");
}
catch (PDOException $e){
    echo $e->getMessage();
}

?>
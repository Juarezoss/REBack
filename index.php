<?php 
$db_host="localhost";
$db_name="realstate1";
$db_user="root";
$db_pass="";
$dbConn=mysqli_connect($db_host, $db_user,$db_pass, $db_name);
$dbQuery= "INSERT INTO admins VALUES (NULL,'juan', 'hernandez', 'perez','administartivo','123')";
if (!$dbConn){
    die ("Conection failed");
}
else {
   //echo "Conecction Ok";para pruebas
   if(mysqli_query($dbConn,$dbQuery)){
    echo json_encode([
        "message"=>"New User Created",
        "data"=>[
            "user"=>"Nuevo Usuario",
            "extra"=>"Dato Extra",
        ]

    ]);
   }
   else{
    echo "Error on creating new User";
   }
}
?>
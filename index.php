<?php 

$db_host="localhost";
$db_name="realstate1";
$db_user="root";
$db_pass="";

$data_name = $_POST["name"];
$data_mname = $_POST["middlename"];
$data_lname = $_POST["lastname"];
$data_position = $_POST["position"];
$data_password = $_POST["password"];

// var_dump( $_POST);


$dbConn=mysqli_connect($db_host, $db_user,$db_pass, $db_name);
$dbQuery= "INSERT INTO admins VALUES (NULL,'$data_name', '$data_mname', '$data_lname','$data_position','$data_password')";
if (!$dbConn){
    die ("Conection failed");
}
else {
   //echo "Conecction Ok";para pruebas
   echo json_encode($_POST);

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
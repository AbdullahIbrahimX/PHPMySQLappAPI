<?php
include "functions.php";

if (empty($_REQUEST['hash']) ){
    header('Location: ../index.php');
}
else{
    $user = array();

    $Email = $_REQUEST['email'];
    $result = getUserDetailByEmail($Email);
    if ($result != false){
        $rows = mysqli_fetch_array($result);
        $user['id'] = $rows['id'];
        $user['name'] = $rows['name'];
        $user['email'] = $rows['email'];
        $user['created_date'] = $rows['created_date'];

        echo json_encode($user);
    }
    else{
        echo json_encode(false);
    }

}
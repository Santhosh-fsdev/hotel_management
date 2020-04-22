<?php
    $id = $_POST['id'];
    $pass = $_POST['pass'];
    $connect = mysqli_connect('localhost','id13387613_santhosh','3O\$4@+cOs*!J}<&','id13387613_hotelmgmt');

    $result = mysqli_query($connect,"SELECT * FROM registration WHERE id = '$id'");
    while ($row = mysqli_fetch_array($result)) {

        if($row['pass'] != $pass){
            echo "Sign in Unsucessfull";
            echo " Id and password mismatch error";
            echo " <a href='./login.html'>Login again </a> ";
            echo "If u feel this is the error from our side, feel free to contact us at any time.";
        }
        else{
            header("Location: ./show.php?id={$row['id']}");
        }
    }

    mysqli_close($connect);
?>
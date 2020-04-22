<?php
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $guest = $_POST['guest'];
    $DOA = $_POST['DOA'];
    $DOD = $_POST['DOD'];
    $room = $_POST['room'];
    $address = $_POST['address'];
    $nor = $_POST['nor'];
    $pick = $_POST['pick'];
    $spcl = $_POST['spcl'];
    $pass = $_POST['pass'];
    $connect = mysqli_connect('localhost','id13387613_santhosh','3O\$4@+cOs*!J}<&','id13387613_hotelmgmt');

   mysqli_query($connect, "INSERT INTO registration (name,mobile,email,guest,DOA,DOD,room,address,nor,pick,spcl,pass)
        VALUES ('$name','$mobile' ,'$email' , '$guest ','$DOA','$DOD','$room','$address','$nor','$pick','$spcl','$pass')");
   
    if(mysqli_affected_rows($connect) > 0)
    {
        echo "registration successful";

    echo mysqli_error ($connect);
   }
 
    if(mysqli_connect_errno($connect))
    {
            echo 'Failed to connect';
    }

    $connect = mysqli_connect('localhost','id13387613_santhosh','3O\$4@+cOs*!J}<&','id13387613_hotelmgmt');
    $result = mysqli_query($connect,"SELECT * FROM registration WHERE name = '$name'");

    while ($row = mysqli_fetch_array($result)) {
        if($row['name'] == $name){
            echo " <br /> <br/ ><div > Here is your application ID , please make a note of it you wont find it later. Use this for login<h1>{$row['id']}</h1></div> <br /><br />";
            echo " <a href='./login.html'> Go Back </a> ";
        }
    }

    mysqli_close($connect);
?>
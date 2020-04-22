<?php
$num = $_GET['id'];

$connect = mysqli_connect('localhost','id13387613_santhosh','3O\$4@+cOs*!J}<&','id13387613_hotelmgmt');

$result = mysqli_query($connect,"SELECT * FROM registration WHERE id='$num'");

     while ($row = mysqli_fetch_array($result)) {
         echo "<!DOCTYPE html>
         <html lang='en'>
         <head>
             <meta charset='UTF-8'>
             <meta name='viewport' content='width=4, initial-scale=1.0'>
             <title>Registration form </title>
         <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
         </head>
         <body onready='start()'>
             <div class='container'>
             <div class='jumbotron'>
                 
             <form style='padding: 20px;align-content: center;' action='register.php' method='post'>
                 <h2>Registration Form </h2>
         
                 <hr class='my-4'>
                 <h3> We are much privilaged to provide you the services here. Please find below your services. If there is any change contact us.</h3>
         
                 <br />
                 <div class='form-group'>
                   <label for='name'>Name</label>
                   <input type='text' class='form-control' id='name' aria-describedby='emailHelp' placeholder='Enter Name' value='{$row['name']}' name='name' readonly />
                 </div>
                   <div class='form-group'>
                     <label for='mobile'>Mobile Number</label>
                     <input type='text' class='form-control' id='mobile' placeholder='Mobile Number' value='{$row['mobile']}' name='mobile' readonly>
                   </div>
                   <div class='form-group'>
                     <label for='email'>Email address</label>
                     <input type='email' class='form-control' id='email' aria-describedby='emailHelp' value='{$row['email']}' name='email' readonly>
                     <small id='emailHelp' class='form-text text-muted'>We'll never share your email with anyone else.</small>
                   </div>
                   <div class='form-group'>
                     <label for='guest'>Number of Guests</label>
                     <input type='number' class='form-control' id='guest' placeholder='Number of guests' name='guest' value='{$row['guest']}'readonly>
                   </div>
                   <div class='form-group'>
                     <label for='DOA'>Arrival Date</label>
                     <input type='date' class='form-control' id='DOA' placeholder='Arrival Date' name='DOA' value='{$row['doa']}' readonly>
                   </div>
                   <div class='form-group'>
                     <label for='DOD'>Departure Date</label>
                     <input type='date' class='form-control' id='DOD' placeholder='Departure  Date' name='DOD' value='{$row['dod']}' readonly>
                   </div>
                   <div class='form-group'>
                     <label for='room'>Room Type</label>
                     <select class='form-control' id='room' name='room' value='{$row['room']}' readonly>
                       <option>AC</option>
                       <option>Non-AC</option>
                       <option>With 1 bed</option>
                       <option>With 2 bed</option>
                       <option>More than 2 bed</option>
                     </select>
                   </div>
                   <div class='form-group'>
                     <label for='address'>Address</label>
                     <input type='text' class='form-control' id='address'  name='address' value='{$row['address']}' readonly/>
                   </div>
                   <div class='form-group'>
                     <label for='nor'>Number of rooms</label>
                     <select class='form-control' id='nor' name='nor' value='{$row['nor']}'readonly>
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                       <option>5</option>
                       <option>More than 5</option>
                     </select>
                   </div>
                   <div class='form-group'>
                     <label for='pick'>Pick up needed ?</label>
                     <select class='form-control' id='pick' name='pick' value='{$row['pick']}' readonly>
                       <option>Yes</option>
                       <option>No</option>
                     </select>
                   </div>
                   <div class='form-group'>
                     <label for='address'>Address</label>
                     <input type='text' class='form-control' id='address'  name='address' value='{$row['spcl']}' readonly/>
                   </div>
                   <div class='form-group'>
                     <label for='pass'>Password for Your Account</label>
                     <input type='text' class='form-control' id='pass' placeholder='Password' name='pass'value='{$row['pass']}' readonly>
                   </div>
               </form>
               </div>
               <h4>feel free to contact us on any time. Thank you</h4>
             </div>
         
         </body>
         </html>";

     }

?>

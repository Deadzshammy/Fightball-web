<?php
if (isset($_POST['signup'])) {

  $email = $_POST['email'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $password = $_POST['password'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];

  $encryptedpass = md5($password);


  include 'db.php';

  //connecting & inserting data

  $query = "INSERT INTO users(email,
firstname,
lastname,
password,
address,
phone,
role) VALUES ('$email',
'$firstname',
'"$lastname',
'$encryptedpass',
'$address',
'$phone',
'client')";

if ($connection->query($query) === TRUE) {


         echo "<div class='center-align'>
         <h5 class='black-text'>Здравейте <span class='green-text'>$firstname</span> Моля, влезте в акаунта си.</h5><br><br>
         <a class='button-rounded btn waves-effects waves-light'>Вход</a>
         </div>";

     } else {
         echo "<h5 class='red-text'>Error: " . $query . "</h5>" . $connection->error;
     }

     $connection->close();

}

?>

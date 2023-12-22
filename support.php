<?php

echo "<!DOCTYPE html>";
echo  "<html>";
echo   "<meta HTTP-EQUIV='REFRESH' content='5; url=index.html'>";
echo    "<head>";
echo       "<title>Donation Form</title>";
 echo       "<style>";
 echo         "body {";
   echo     "background-image: url('https://thumbs.dreamstime.com/b/purple-ribbon-grey-wooden-background-top-view-domestic-violence-awareness-152570238.jpg');";
   echo    "background-size: 1580px 900px;";
   echo     "background-repeat: no-repeat;";
   echo     "color:#cccccc;}";
      
 echo   "</style>";
  echo "</head>";
 echo "<body>";
    


     $servername = "localhost";
     $username   = "root";
     $password   = "";
     $dbname   =  "miniproject";


     $connection = mysqli_connect($servername, $username, $password, $dbname);
     
     if(!$connection)
     {
       die("Connection failed: " . mysqli_connect_error());
     }

     $name = $_POST["user_name"];
     $email = $_POST["user_email"];
     $mobile = $_POST["user_number"];
     $message = $_POST["user_message"];

     $sqlins = "INSERT INTO support(Name,Email,Mobile,Message)
                VALUES('$name','$email',$mobile,'$message');";

     if (mysqli_query($connection, $sqlins))
      {
       echo "<h1 align='center'>Your Message  has been Successfully recieved by us, Our Team Member will contact you As soon as Possible</h1>";
      }
     else
      {
        echo "Error: " .$sqlins . "<br>" . mysqli_error($connection);
      }

   echo "<h3 align='center'>You will be redirected to Our Vision & Mission page within 5 seconds</h3>";
      
   mysqli_close($connection);
       


 echo  "</body>";
echo "</html>";
?>
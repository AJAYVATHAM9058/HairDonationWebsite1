<?php

echo "<!DOCTYPE html>";
echo  "<html>";
echo   "<meta HTTP-EQUIV='REFRESH' content='5; url=index.html'>";
echo    "<head>";
echo       "<title>Donation Form</title>";
 echo       "<style>";
 echo         "body {";
   echo     "background-image: url('https://thumbs.dreamstime.com/b/green-ribbon-grey-background-cancer-awareness-green-ribbon-grey-background-120704029.jpg');";
   echo    "background-size: 1580px 900px;";
   echo     "background-repeat: no-repeat;";
   echo     "color:#000CD;}";
      
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
     $date_of_birth = $_POST["user_date_birth"];
     $color_of_hair = $_POST["user_hair_color"];
     $length_of_hair  = $_POST["length_of_hair"];

     $sqlins = "INSERT INTO donate1(Name,Email,Mobile,dateOfBirth,colorOfHair,lengthOfHair)
                VALUES('$name','$email',$mobile,'$date_of_birth','$color_of_hair',$length_of_hair);";

     if (mysqli_query($connection, $sqlins))
      {
       echo "<h1 align='center'>Your Donation form has been Successfully Submitted</h1>";
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
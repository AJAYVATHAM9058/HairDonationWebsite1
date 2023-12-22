<?php

echo "<!DOCTYPE html>";
echo  "<html>";
echo   "<meta HTTP-EQUIV='REFRESH' content='5; url=index.html'>";
echo    "<head>";
echo       "<title>Donation Form</title>";
 echo       "<style>";
 echo         "body {";
   echo     "background-image: url('https://thumbs.dreamstime.com/b/green-ribbon-lyme-disease-kidney-cancer-organ-donation-awareness-black-background-top-view-104863646.jpg');";
   echo    "background-size: 1580px 900px;";
   echo     "background-repeat: no-repeat;";
   echo     "color:#FFFAFA;}";
      
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
	 $city   =  $_POST["user_city"];
	 $battlewith_cancer = $_POST["IsUserCancer"];
     

     $sqlins = "INSERT INTO request1(Name,Email,Mobile,dateOfBirth,City,BattleWithCancer)
                VALUES('$name','$email',$mobile,'$date_of_birth','$city','$battlewith_cancer');";

     if (mysqli_query($connection, $sqlins))
      {
       echo "<h1 align='center'>Your Request form has been Successfully Submitted</h1>";
      }
     else
      {
        echo "Error: " .$sqlins . "<br>" . mysqli_error($connection);
      }

   echo "<h3 align='center'>You will be redirected to Our Main Web page within 5 seconds</h3>";
      
   mysqli_close($connection);
       


 echo  "</body>";
echo "</html>";
?>
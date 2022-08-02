<?php
require("cordinating.php");
if(isset($_POST['submit'])){
 $fname=$_REQUEST["firstname"];
 $lname=$_REQUEST["secondname"];
$username=$_REQUEST["date"]; 
$email=$_REQUEST["email"]; 
$password=$_REQUEST["phone"];
$comfir=$_REQUEST["adress"];

echo $query="INSERT INTO memory1(FirstName,secondName,date,email,phone,adress) 
values('$fname','$lname','$username','$email','$password' ,'$comfir')";

$rs= mysqli_query( $conn,$query);

if($rs){
    echo "byamaze kujyamo";
}
else{  
    echo "wrong querry ".mysqli_error($conn);

}/**/
}
if(isset($_POST['ret'])){
    echo "Bikura is clicked";
}

?>



<html>
     <!DOCTYPE html>
     
     <html lang="en">
     <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>sign up</title>
        <link rel="stylesheet" href="signup.css">
     </head>
      
    <body>
            <div class="form"> 
        <form action="" method="post">
            <div class="detail"> 
          <div class="input">
            <label class="detail"> First Name</label>
            <input type="text" name="firstname"  required><br>
            </div>
            <div class="input">
                  <label class="detail"> Second Name</label>
            <input type="text" name="secondname" required><br>
            </div>
            <div class="input">  <label class="detail"> date</label>
            <input type="date" name="date"  required><br>
            </div>
            <div class="input">  
                <label class="detail"> Email</label>
            <input type="text" name="email"  required><br>
        </div>
         
        <div class="input">  
            <label class="detail"> phone</label>
        <input type="number" name="phone" required><br>
        </div>
        <div class="input">  
            <label class="detail"> adress</label>
        <input type="varchar" name="adress" required><br>
        </div>
        <div class="sig"> 
            <input type="submit" value="signup" name="submit">
            <a href="index.html">signup</a></button>
        </div>
        <div class="sig"> 
            <input type="submit" value="Bikura" name="ret"> 
        </div>
        </form></div><br>
        
    </body>
</html>
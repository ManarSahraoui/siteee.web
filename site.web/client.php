<?php 

$con = new PDO ("mysql:host=localhost;dbname=site.web",'root','');
if(isset($_POST['submit'])){
    $str = $_POST['query'];
    $sth  = $con->prepare("SELECT * FROM makeup_artist WHERE username = :username");

    $sth->bindParam(':username', $str, PDO::PARAM_STR);
    $sth->execute();
    if( $row=$sth->fetch()){
        header("LOCATION: search.php");
    }else{
        echo "name does not exist";
    } 
} 
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style\client.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Client Page</title>
    <script src="https://kit.fontawesome.com/6053bb0c2a.js" crossorigin="anonymous"></script>
</head>
<body>
    <img src="images/newlogo.png" class="logooo">
    
       <div class="search-box">
        <div class="row">
           
             <form method="post">
            <input type="text" id="input-box" placeholder="Search..." name="query">
         <a href="search.php"></a><input type="submit" name="submit">
        
         <!-- <button id="searchButton"> <i  type="submit" class="fa-solid fa-magnifying-glass" name="submit" ></i></button> -->
            </form>
        </div>
    </div>
    <div class="picture">
      <img src="images/brush.png" class= "pic" alt="">
        <div class="p-text">
          <h2>The Best Makeup Artists Ever.</h2>
        </div>
    </div>
    <div class="picture">
        <img src="images/24-hours.png" class="pic">
           <div class="p-text">
            <h2>We Are Always Available.</h2>
           </div>
    </div>  
    <div class="picture">
        <img src="images/map.png" class="pic">
           <div class="p-text">
            <h2>Based In Algeria, 52 Wilaya.</h2>
           </div>
    </div>

    <div id="sideNav">
    <nav>
        <ul>
            <li> <a href="site.php"> HOME </a></li>
            <li> <a href="client.php"> Client </a></li>
            <li> <a href="login.php"> Makeup Artist </a></li>
        </ul>
    </nav>
</div>
<div id="menuBtn">
    <img src="images/menu.png" id="menu">
</div>
<script src="main.js"></script>       
       
</body>
</html>
    




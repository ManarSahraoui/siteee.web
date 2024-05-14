<?php 
try {
    $con = new PDO ("mysql:host=localhost;dbname=site.web",'root','');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activation du mode de rapport d'erreurs
} catch (PDOException $e) {
    echo "Erreur de connexion PDO : " . $e->getMessage();
    exit(); // Arrêt du script en cas d'erreur de connexion
}

$sql = $con->query("SELECT * FROM makeup_artist");
$data = $sql->fetch(PDO::FETCH_ASSOC);

if (!$con) {
    echo "Échec de la connexion PDO à la base de données.";
    exit();
}
?>         
                
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page </title>
    <link rel="stylesheet" href="style/search.css">
</head>
<body>
<img src="images/newlogo.png" class="logooo">
<div class="container">
        <div class="box form-box">
      
         <header>Makeup Artist </header>
         <p><?php echo $data['username'];?></p>
         <p>0<?php echo $data['phoneNumber'];?></p>
          <br>
        <form action="form.php" method= "post">
        <div class="field input">
        <?php 
include("php\config.php");
if(isset($_POST['Submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phoneNumber = $_POST['phoneNumber'];
  
    mysqli_query($con,"INSERT INTO client (first_name, last_name, phoneNumber) VALUES ('$first_name', '$last_name', '$phoneNumber')");
}else{
?>
                 <header> Contact Details </header>
                  <label for="first_name"> First Name </label>
                  <input type="text" name="first_name" id="first_name" >
                </div>
             <div class="field input">
                  <label for="last_name">Last name </label>
                  <input type="text" name="last_name" id="last_name" >
                </div>
                <div class="field input">
                  <label for="phoneNumber"> Phone Number </label>
                  <input type="tel" name="phoneNumber" id="phoneNumber" >
                </div>
                <div class="field ">
                 <a href="home.php"> <input type="Submit" class="btn" name="Submit" value="send" required></a>
                </div>

        </form>

        </div>
   
        <?php }?>
    </div>

</div>
  
</body>
</html>


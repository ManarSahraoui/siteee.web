<?php 
try {
    $con = new PDO ("mysql:host=localhost;dbname=site.web",'root','');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch (PDOException $e) {
    echo "Erreur de connexion PDO : " . $e->getMessage();
    exit(); 
}
$sql = $con->query("SELECT * FROM client");
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
    <title>Form Page</title>
    <link rel="stylesheet" href="style/search.css">
</head>
<body>
    <img src="images/newlogo.png" class="logooo">
    <div class="container">
        <div class="box form-box">
            <header>Client</header>

            <p>First Name: <?php  echo $data['first_name'];?></p>
            <p>Last Name: <?php echo $data['last_name'];?></p>
            <p>Phone Number:<?php echo $data['phoneNumber'];?></p>
                
              <a href="home.php"> <input class="btn" type="submit" name="submit" value="accept"></a> 
                
        </div>
    </div>
    
</body>
</html>




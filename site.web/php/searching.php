<?php
 
 $con=new PDO 




     // Check if the search query parameter is set
     if(isset($_GET['query'])) {
         // Connect to your MySQL database
         $conn = mysqli_connect("localhost", "username", "password", "database");
 
         // Check connection
         if (!$conn) {
             die("Connection failed: " . mysqli_connect_error());
         }
 
         // Sanitize the search query to prevent SQL injection
         $search_query = mysqli_real_escape_string($conn, $_GET['query']);
 
         // Perform a SQL SELECT query to search for matching content
         $sql = "SELECT * FROM your_table WHERE content LIKE '%$search_query%'";
         $result = mysqli_query($conn, $sql);
 
         // Display search results
         if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
                 echo "<p>" . $row["content"] . "</p>";
             }
         } else {
             echo "No results found";
         }
 
         // Close database connection
         mysqli_close($conn);
     } else {
         echo "No search query provided";
     }
     ?>
 </body>
 </html>
 
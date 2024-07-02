<?php 

$conn =mysqli_connect("localhost","root","","tarun") or die ("Connection Failed");

$sql = "SELECT * FROM contact";
$result = mysqli_query($conn,$sql) or die ("sql connection  Failed") ;
$output ="";
if(mysqli_num_rows($result) > 0 ){

  $outpot = '<table class="responsive-table">
            <thead>
            <tr>
              <th scope="col">Fisrt Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Email</th>
              <th scope="col">Massage</th>
            </tr>
          </thead>';
           while($row = mysqli_fetch_assoc($result)){
            $outpot .=" <tr><td>{$row["FirstName"]}</td><td>{$row["LastName"]}</td><td>{$row["Phone"]}</td><td>{$row["mail"]}</td><td>{$row["Massage"]}</td></tr>";
           }
$outpot .= "</table>";


     mysqli_close($conn);

     echo $outpot;
          

}else{

  echo "<h2> Not Found</h2>";

}

  
  ?>

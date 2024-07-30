<?php 

$conn =mysqli_connect("localhost","root","","tarun") or die ("Connection Failed");

$sql = "SELECT * FROM contact JOIN sjobs WHERE contact.jobs = sjobs.sid";
$result = mysqli_query($conn,$sql) or die ("sql connection  Failed") ;
$output ="";
if(mysqli_num_rows($result) > 0 ){

  $outpot = '<table class="responsive-table">
            <thead>
            <tr>
            <th scope="col">S.No</th>
              <th scope="col">Full Name</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Options</th>
              <th scope="col">Email</th>
              <th scope="col">Massage</th>
               <th scope="col">action</th>
            </tr>
          </thead>';
           while($row = mysqli_fetch_assoc($result)){
            $outpot .=" <tr><td data-label=Name>{$row["S.No"]}</td><td data-label=Name>{$row["Fullname"]}</td><td data-label=Phone_Number>{$row["Phone"]}<td data-label=Name>{$row["cselect"]}</td></td><td data-label=Email>{$row["mail"]}</td><td data-label=Massage>{$row["Massage"]}</td>
             <td >
                       <a href='edit_crud?id={$row["S.No"]}'> <input type='button' class='butt_edit' value='Edit'></a>
                          <input type='button' class='butt_delet' value='Delete'>
                  
                      
                  </td></tr>";
           }
$outpot .= "</table>";


     mysqli_close($conn);

     echo $outpot;
          

}else{

  echo "<h2> Not Found</h2>";

}

  
  ?>

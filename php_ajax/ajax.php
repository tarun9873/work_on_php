<?php 

$conn =mysqli_connect("localhost","root","","tarun") or die ("Connection Failed");

$sql = "SELECT * FROM contact JOIN sjobs WHERE contact.jobs = sjobs.sid";
$result = mysqli_query($conn,$sql) or die ("sql connection  Failed") ;
$output ="";
if(mysqli_num_rows($result) > 0 ){

  $outpot = '<table class="responsive-table">
            <thead>
            <tr class="account__table--body__child">
            <th scope="col">S_No</th>
              <th scope="col">Full Name</th>
              <th scope="col"> Number</th>
              <th scope="col">Options</th>
              <th scope="col">Email</th>
              <th scope="col">Massage</th>
               <th scope="col">action</th>
            </tr>
          </thead>';
           while($row = mysqli_fetch_assoc($result)){
            $outpot .=" <tr ><td class='show_table' account__table--body__child--items data-label=S_N0:->{$row["S_No"]}</td><td class='show_table' data-label=Name:->{$row["Fullname"]}</td><td class='show_table'  data-label=Phone_Number:->{$row["Phone"]}<td class='show_table'  data-label=Options:->{$row["cselect"]}</td></td><td class='show_table'  data-label=Email:->{$row["mail"]}</td><td class='show_table'  data-label=Massage:->{$row["Massage"]}</td>
             <td >
                       <a href='edit_crud?id={$row["S_No"]}'> <input type='button' class='butt_edit' value='Edit'></a>
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

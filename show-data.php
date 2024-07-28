<?php include 'header.php';?>
  <div class="container" style="padding: 20px; ">
    <div
        class="container"
        style="margin: auto; margin-top: 50px; margin-bottom: 50px"
      >
        <div class="row">
          <div class="col-md-12" style="text-align: center; padding: 25px">
            <h2>PHP & Ajax</h2>
          </div>
        </div>
       <div class="row">
        <div class="col-md-12">
          <table id="main" border="0" cellspacing="0">
            <div>
              <div id="table-load">
                <div>
                <input type="button" class="ontact__form--btn primary__btn" id="load-button" value="Refresh Data">
                <input type="button" class="ontact__form--btn primary__btn" onClick="previous()" value="back">
                </div>
                <div>          
                </div>
              </div>
              
            </div>
         
          <div style="margin-top: 10px;">
            <tr >
              <td id="table-data">
                <table class="responsive-table">
                <thead>
              <tr >
                <th scope="col">Fisrt Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Email</th>
                <th scope="col">Massage</th>

              </tr>
            </thead>
                 <!-- <img src="./php_ajax/ajax.php" alt=""> -->
            
                </table>
            
              </td>
              
              
            </tr>
          </div>
              
            </table>
        </div>
       </div>
       
      </div >
  
  </div>

<script  type="text/javascript" src="./php_ajax/jquary.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
    $("#load-button").on("click", function (e) {
      $.ajax({
        url : "./php_ajax/ajax.php",
        type : "POST",
        success : function (data) {
          $("#table-data").html(data);
        },
      });
    });
  });



function previous() { 
            window.history.go(-1); 
        } 
</script>
<?php include 'footer.php';?>
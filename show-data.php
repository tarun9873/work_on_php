<?php include 'header.php';?>
<div class="container">
  <div class="row">
    <div class="col-md-12" style="text-align: center; padding: 25px">
      <h2>PHP & Ajax</h2>
    </div>
  </div>
</div>
<div class="login__section">
  <div class="container-fluid">
          <div class="login__section--inner account__login">
              <div class="row row-cols-md-1 row-cols-1 align-items-center">
                  <div class="col">
                      <div class="" style="text-align: center;">
                         
                          <div class="account__login--inner" id="table-load">
                          
                              <div class="account__social d-flex justify-content-center mb-15" style="    display: inline-table;text-align: center;">
                                <a class="account__social--link bt_group" onClick="previous()" href="javascript:void(0)">Back</a>
                                  <a class="account__social--link bt_group" id="load-button"  href="javascript:void(0)">Fetch Data & Refresh </a>
                                 
                                  <a class="account__social--link bt_group" type="submit" href="javascript:void(0)">Search Data And Update</a>
                                  <a class="account__social--link bt_group" id="load-button"  href="javascript:void(0)">Search Data And delete</a>
                                 
                                  <a class="account__social--link bt_group" id="load-button"  href="contact">Add New Data </a>
                                 
                                  <!-- <button type="submit"></button> -->
                              </div>
                              
                          </div>
                      </div>
                  </div>
                  
              </div>
              <div class="col-md-12">
                <table id="main" border="0" cellspacing="0">
        
                  <div style="margin-top: 10px;">
                    <tr class="account__table--body__child">
                      <td id="table-data">
                        <table class="responsive-table account__table">
                          <thead class="account__table--header">
                            <tr class="account__table--header__child">
                            <th scope="col">S_No</th>
              <th scope="col">Full Name</th>
              <th scope="col"> Number</th>
              <th scope="col">Options</th>
              <th scope="col">Email</th>
              <th scope="col">Massage</th>
               <th scope="col">action</th>
        
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
          
  </div>     
</div>



<!-- sectin   -->

<script type="text/javascript" src="./php_ajax/jquary.js"></script>

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
<?php include 'header.php';?>
  <div class="container-fluid" style="padding: 20px; ">
    <div
        class="container-fluid"
        style="margin: auto; margin-top: 50px; margin-bottom: 50px"
      >
        <div class="row">
          <div class="col-md-12" style="text-align: center; padding: 25px">
            <h2>PHP & Ajax</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
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
          </div>
         
          <div class="col-sm-6">
            <form class="predictive__search--form" action="#">
              <label>
                  <input class="predictive__search--input"
                      placeholder="Search Here" type="text">
              </label>
              <button class="predictive__search--button"
                  aria-label="search button"><svg
                      class="header__search--button__svg"
                      xmlns="http://www.w3.org/2000/svg" width="30.51"
                      height="25.443" viewBox="0 0 512 512"><path
                          d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                          fill="none" stroke="currentColor"
                          stroke-miterlimit="10"
                          stroke-width="32" /><path fill="none"
                          stroke="currentColor" stroke-linecap="round"
                          stroke-miterlimit="10" stroke-width="32"
                          d="M338.29 338.29L448 448" /></svg>
              </button>
          </form>
          </div>
        </div>
       <div class="row">
        <div class="col-md-12">
          <table id="main" border="0" cellspacing="0">
            
         
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
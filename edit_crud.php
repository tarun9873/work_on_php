<?php include 'header.php'; ?>

<main class="main__content_wrapper">

  <!-- Start breadcrumb section -->
  <section class="breadcrumb__section breadcrumb__bg">
    <div class="container">
      <div class="row row-cols-1">
        <div class="col">
          <div class="breadcrumb__content">
            <h1 class="breadcrumb__content--title mb-10">Edit Us</h1>
            <ul class="breadcrumb__content--menu d-flex">
              <li class="breadcrumb__content--menu__items">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb__content--menu__items">
                <span class="text__secondary">Edit Us</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End breadcrumb section -->
        
            <!-- Start contact section -->
  <section class="contact__section section--padding">
    <div class="container">
      <div class="section__heading text-center mb-40">
        <h2 class="section__heading--maintitle text__secondary mb-10">
         Update To Data
        </h2>
      </div>
      <div class="main__contact--area">
        <div class="row align-items-center row-md-reverse">
          <div class="col-lg-12">
            <div class="contact__form">
            <?php 
                 $conn = mysqli_connect("localhost", "root", "", "tarun") or die("Connection Failed");
                 $jobs_id = $_GET['id'];
                $sql1 = "SELECT * FROM contact WHERE `S_No` = {$jobs_id}";
                $result = mysqli_query($conn, $sql1) or die("SQL Query Failed");

                 if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
               ?>
              <form class="contact__form--inner" action="update_data" method="post">
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                      <label class="contact__form--label" for="input1">Full Name
                        <span class="contact__form--label__star">*</span></label>
                        <input type="hidden" name="S_NO" value="<?php echo htmlspecialchars($jobs_id); ?>">

                      <input class="contact__form--input" name="fname" value ="<?php echo $row['Fullname']; ?>" type="text"  />
                    </div>
                  </div>
             
                  <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                      <label class="contact__form--label" for="input3">Phone Number
                        <span class="contact__form--label__star">*</span></label>
                      <input class="contact__form--input" name="mobile" value="<?php echo $row['Phone']; ?>" type="tel"  />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                      <label class="contact__form--label" for="input2">Option
                        <span class="contact__form--label__star">*</span></label>
                        <?php 
                        $sqli_select= "SELECT * FROM sjobs";
                        $result_2 = mysqli_query($conn, $sqli_select) or die("SQL Query Failed");
                            if (mysqli_num_rows($result_2) > 0) {
                              echo '<select class="contact__form--input" name="selectjobs" >';
                              while ($row2 = mysqli_fetch_assoc($result_2)) {
                                if($row['jobs']==$row2['sid']){
                                  $select ="selected";

                                }else{
                                  $select="";

                                }
                                  echo "<option {$select} value='{$row2['sid']}'>{$row2['cselect']}</option>";
                                }
                        echo "</select>";
                        }
                        ?>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                      <label class="contact__form--label" for="input4">Email
                        <span class="contact__form--label__star">*</span></label>
                      <input class="contact__form--input" name="email" value="<?php echo $row['mail']; ?>" type="email"  />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="contact__form--list mb-10">
                      <label class="contact__form--label" for="input5">Write Your Message
                        <span class="contact__form--label__star">*</span></label>
                      <textarea class="contact__form--textarea" name="msg" ><?php echo $row['Massage']; ?></textarea>

                    </div>
                  </div>
                </div>
                <button class="contact__form--btn primary__btn" type="submit"  value="Update Data" name="submit">
                  Update Data
                </button>
              </form>
              
            </div>
           
            <?php 
               }
              } 
               ?>
          </div>
        </div>
      </div>
    </div>
  </section>
               
  
</main>
<?php include 'footer.php'; ?>
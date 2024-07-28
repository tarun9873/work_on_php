<?php include 'header.php'; ?>
<main class="main__content_wrapper">
  <!-- Start breadcrumb section -->
  <section class="breadcrumb__section breadcrumb__bg">
    <div class="container">
      <div class="row row-cols-1">
        <div class="col">
          <div class="breadcrumb__content">
            <h1 class="breadcrumb__content--title mb-10">Contact Us</h1>
            <ul class="breadcrumb__content--menu d-flex">
              <li class="breadcrumb__content--menu__items">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb__content--menu__items">
                <span class="text__secondary">Contact Us</span>
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
          Get In Touch
        </h2>
        <p class="section__heading--desc">
          Beyond more stoic this along goodness this sed wow manatee mongos
          flusterd impressive man farcrud opened.
        </p>
      </div>
      <div class="main__contact--area">
        <div class="row align-items-center row-md-reverse">
          <div class="col-lg-12">
            <!-- <div>
            </div> -->
            <div class="contact__form">
              <form class="contact__form--inner" action="connect" method="post">
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                      <label class="contact__form--label" for="input1">Full Name
                        <span class="contact__form--label__star">*</span></label>
                      <input class="contact__form--input" name="fname" id="fname" placeholder="Your First Name" type="text" required />
                    </div>
                  </div>
             
                  <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                      <label class="contact__form--label" for="input3">Phone Number
                        <span class="contact__form--label__star">*</span></label>
                      <input class="contact__form--input" name="mobile" id="number" placeholder="Phone number" type="tel" required />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                      <label class="contact__form--label" for="input2">Option
                        <span class="contact__form--label__star">*</span></label>
                        <select class="contact__form--input" name="select" required>
                          <option value="" selected disabled>-- Select Size --</option>
                        <?php 
                        $contion=mysqli_connect("localhost","root","","tarun") or die("connetion failed");
                        $sql="SELECT * FROM sjobs";
                        $resullt=mysqli_query($contion, $sql)or die(" Sql connetion failed");
                        while($row = mysqli_fetch_assoc($resullt)){
                        ?>
                          <option value="<?php echo $row['s.id']; ?>"><?php echo $row['cselect']; ?></option>
                          <?php } ?>
                        </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                      <label class="contact__form--label" for="input4">Email
                        <span class="contact__form--label__star">*</span></label>
                      <input class="contact__form--input" name="email" id="email" placeholder="Email" type="email" required />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="contact__form--list mb-10">
                      <label class="contact__form--label" for="input5">Write Your Message
                        <span class="contact__form--label__star">*</span></label>
                      <textarea class="contact__form--textarea" name="msg" id="msg" placeholder="Write Your Message" required></textarea>
                    </div>
                  </div>
                </div>
                <button class="contact__form--btn primary__btn" type="submit" id="submit" name="submit">
                  Submit Now
                </button>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <?php include 'footer.php';?>
</main>


<?php include 'header.php';?>

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

  <!-- <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div  style="background-color: rgb(232, 19, 19); color: #fff; border-radius: 15px;padding: 25px;margin-top: 20px;margin-bottom: 20px;" >
                       <div>
                        <?php include 'connect.php';?>
                       </div>
                       </div>
                </div>
            </div>
        </div> -->

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
                      <label class="contact__form--label" for="input1"
                        >First Name
                        <span class="contact__form--label__star">*</span></label
                      >
                      <input
                        class="contact__form--input"
                        name="fname"
                        placeholder="Your First Name"
                        type="text"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                      <label class="contact__form--label" for="input2"
                        >Last Name
                        <span class="contact__form--label__star">*</span></label
                      >
                      <input
                        class="contact__form--input"
                        name="lname"
                        placeholder="Your Last Name"
                        type="text"
                        />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                      <label class="contact__form--label" for="input3"
                        >Phone Number
                        <span class="contact__form--label__star">*</span></label
                      >
                      <input
                        class="contact__form--input"
                        name="mobile"
                        placeholder="Phone number"
                        type="number"
                        />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                      <label class="contact__form--label" for="input4"
                        >Email
                        <span class="contact__form--label__star">*</span></label
                      >
                      <input
                        class="contact__form--input"
                        name="email"
                        placeholder="Email"
                        type="email"
                        />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="contact__form--list mb-10">
                      <label class="contact__form--label" for="input5"
                        >Write Your Message
                        <span class="contact__form--label__star">*</span></label
                      >
                      <textarea
                        class="contact__form--textarea"
                        name="msg"
                        placeholder="Write Your Message"
                        ></textarea>
                    </div>
                  </div>
                </div>
                <button
                  class="contact__form--btn primary__btn"
                  type="submit"
                  id="submit"
                  name="submit"
                  onclick="submitForm()">
                  Submit Now
                </button>
                <!-- <p class="form-messege"></p> -->
<!-- 
                <script>
        function submitForm() {
  
                  Swal.fire({
        position: "top-center",
        icon: "success",
        title: "Your work has been saved",
        showConfirmButton: false,
        timer: 1500
      });

        }
    </script> -->
              </form>

              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End contact section -->
  <div class="container form_width" >
<div class="box_showd">
  
  <div class="progress-bar">
    <div class="step">
        <p>Name</p>
        <div class="bullet">
            <span>1</span>
        </div>
        <div class="check fas fa-check"></div>
    </div>
    <div class="step">
        <p>Contact</p>
        <div class="bullet">
            <span>2</span>
        </div>
        <div class="check fas fa-check"></div>
    </div>
    
    <div class="step">
        <p>Birth</p>
        <div class="bullet">
            <span>3</span>
        </div>
        <div class="check fas fa-check"></div>
    </div>
   
</div>
<div class="">
  <div class="form-outer">
    <form action="#">
      <!-- 1 form  -->
        <div class="page slide-page">
            <div class="title">Basic Info:</div>
            <div class="field">
                <div class="label">First Name</div>
                <input type="text" required />
            </div>
            <div class="field">
                <div class="label">Last Name</div>
                <input type="text" required />
            </div>
            <div class="field">
                <button class="firstNext next">Next</button>
            </div>
        </div>
<!-- 2 form  -->
        <div class="page">
            <div class="title">Contact Info:</div>
            <div class="field">
                <div class="label">Email Address</div>
                <input type="text" required />
            </div>
            <div class="field">
                <div class="label">Phone Number</div>
                <input type="Number" required />
            </div>
            <div class="field btns">
                <button class="prev-1 prev">Previous</button>
                <button class="next-1 next">Next</button>
            </div>
        </div>
       
        

          <!-- 3 form  -->
        <div class="page">
            <div class="title">Login Details:</div>
            <div class="field">
              <div class="label">Message</div>
              <!-- <input type="Number" required /> -->
              <textarea name="text" id="" style="width: 100%;" required ></textarea>
          </div>
         
            <div class="form_bt ">
                <button class="prev-5 prev">Previous</button>
                <button class="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
</div>

</div>
</div>
<!-- <script src="script.js"></script> -->
 
</main>

<script>
  initMultiStepForm();

function initMultiStepForm() {
    const progressNumber = document.querySelectorAll(".step").length;
    const slidePage = document.querySelector(".slide-page");
    const submitBtn = document.querySelector(".submit");
    const progressText = document.querySelectorAll(".step p");
    const progressCheck = document.querySelectorAll(".step .check");
    const bullet = document.querySelectorAll(".step .bullet");
    const pages = document.querySelectorAll(".page");
    const nextButtons = document.querySelectorAll(".next");
    const prevButtons = document.querySelectorAll(".prev");
    const stepsNumber = pages.length;

    if (progressNumber !== stepsNumber) {
        console.warn(
            "Error, number of steps in progress bar do not match number of pages"
        );
    }

    document.documentElement.style.setProperty("--stepNumber", stepsNumber);

    let current = 1;

    for (let i = 0; i < nextButtons.length; i++) {
        nextButtons[i].addEventListener("click", function (event) {
            event.preventDefault();

            inputsValid = validateInputs(this);
            // inputsValid = true;

            if (inputsValid) {
                slidePage.style.marginLeft = `-${
                    (100 / stepsNumber) * current
                }%`;
                bullet[current - 1].classList.add("active");
                progressCheck[current - 1].classList.add("active");
                progressText[current - 1].classList.add("active");
                current += 1;
            }
        });
    }

    for (let i = 0; i < prevButtons.length; i++) {
        prevButtons[i].addEventListener("click", function (event) {
            event.preventDefault();
            slidePage.style.marginLeft = `-${
                (100 / stepsNumber) * (current - 2)
            }%`;
            bullet[current - 2].classList.remove("active");
            progressCheck[current - 2].classList.remove("active");
            progressText[current - 2].classList.remove("active");
            current -= 1;
        });
    };

    function validateInputs(ths) {
        let inputsValid = true;

        const inputs =
            ths.parentElement.parentElement.querySelectorAll("input");
        for (let i = 0; i < inputs.length; i++) {
            const valid = inputs[i].checkValidity();
            if (!valid) {
                inputsValid = false;
                inputs[i].classList.add("invalid-input");
            } else {
                inputs[i].classList.remove("invalid-input");
            }
        }
        return inputsValid;
    }
}

</script>
<?php include 'footer.php';?>

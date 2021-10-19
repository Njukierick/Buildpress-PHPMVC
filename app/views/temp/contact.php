<link rel="stylesheet" href="http://localhost:8080/buildpress/public/assets/temp/css/style.css" />
    <link rel="stylesheet" href="http://localhost:8080/buildpress/public/assets/temp/css/prettyPhoto.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript">
     $(document).ready(function(){
       $("form").submit(funtion(){
         $flag = true;
         $(this).find(".required").each(function(){
           if($this).val()==""){
             $flag =false;
             $(this).addClass("blank").siblings(".red");
           }
         });
         return $flag;
       })
     </script> -->
  

      <h3 class="widget-title">Get a free quote</h3>
                <section id="contact" class="section-bg wow fadeInUp">
                  <div class="container">
                    <div class="form">
                      <div id="sendmessage">
                        Your message has been sent. Thank you!
                      </div>
                      <div id="errormessage"></div>
                      <form
                        action=""
                        method="post"
                        role="form"
                        class="contactForm"
                      >
                      
                        <div class="form-row">
                          
                          <div class="form-group col-md-6">
                          <label>Name</label> <span class="red">* <small></small></span>
                            <input
                              type="text"
                              name="name"
                              class="form-control"
                              id="name"
                              placeholder="Your Name"
                              data-rule="minlen:4"
                              data-msg="Please enter at least 4 chars"
                            />
                            <div class="validation"></div>
                          </div>
                          <div class="form-group col-md-6">
                          <label>Email</label> <span class="red">* <small></small></span>
                            <input
                              type="email"
                              class="form-control"
                              name="email"
                              id="email"
                              placeholder="Your Email"
                              data-rule="email"
                              data-msg="Please enter a valid email"
                            />
                            <div class="validation"></div>
                          </div>
                          <div class="form-group col-md-6">
                          <label>Mobile</label> <span class="red">* <small></small></span>
                            <input
                              type="phone-number"
                              class="form-control"
                              name="phone-number"
                              id="phone-number"
                              placeholder="phone number"
                              data-rule="phone-number"
                              data-msg="Please enter a valid phone number"
                            />
                            <div class="validation"></div>
                          </div>
                          <div class="form-group col-md-6">
                          <label>Service</label> <span class="red">* <small></small></span>
                            <input
                              type="service"
                              class="form-control"
                              name="service"
                              id="service"
                              placeholder="service"
                              data-rule="service"
                            />
                            <div class="validation"></div>
                          </div>
                          <div class="formm-group col-md-6">
                            <input
                              type="area"
                              class="form-control"
                              name="area"
                              id="phone-number"
                              placeholder="area"
                              data-rule="area"
                              data-msg="Please enter a address"
                            />
                            <div class="validation"></div>
                          </div>
                          <div class="formm-group col-md-6">
                            <input
                              type="unit"
                              class="form-control"
                              name="Mobile number"
                              id="unit"
                              placeholder="unit"
                              data-rule="phone-number"
                              data-msg="Please enter unit"
                            />
                            <div class="validation"></div>
                          </div>
                          <div class="formm-group col-md-6">
                            <input
                              type="cost"
                              class="form-control"
                              name="cost"
                              id="cost"
                              placeholder="cost"
                              data-rule="phone-number"
                              data-msg="Please enter amount"
                            />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="form-grou">
                        <label>Subject</label> <span class="red">* <small></small></span>
                          <input
                            type="text"
                            class="form-control"
                            name="subject"
                            id="subject"
                            placeholder="Subject"
                            data-rule="minlen:4"
                            data-msg="Please enter at least 8 chars of subject"
                          />
                          <div class="validation"></div>
                        </div>
                        <div class="form-grou">
                        <label>Name</label> <span class="red">* <small></small></span>
                          <textarea
                            class="form-control"
                            name="message"
                            rows="5"
                            data-rule="required"
                            data-msg="Please write something for us"
                            placeholder="Message"
                          ></textarea>
                          <div class="validation"></div>
                        </div>
                        <div class="text-center">
                          <button type="submit">Email us</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </section>
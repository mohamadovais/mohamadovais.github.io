<?php include 'common/header.php';?>
    <!--================================
        SCROLL BUTTON END
    =================================-->

    <div class="main">
      <div
        data-bs-spy="scroll"
        data-bs-target="#list-example"
        data-bs-smooth-scroll="true"
        class="scrollspy-example"
        tabindex="0"
      >
        <!--================================
                BANNER 2 START
            =================================-->
        <section
          id="banner"
          class="tf__banner_2 banner" style="background: url('admin/<?php echo $slider_banner_img;?>');">
        
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-xxl-6 col-md-9 col-lg-7">
                <div class="tf__banner_text">
                  <h1>
                   <?php echo $slider_main_heading;?>
                    <span class="cd-headline rotate-1">
                      <!-- ANIMATE TEXT VALUES: zoom, rotate-1, letters type, letters rotate-2, loading-bar, slide, clip, letters rotate-3, letters scale, push,  -->
                      <span class="cd-words-wrapper">
                        <b class="is-visible">Designer</b>
                        <b>Developer</b>
                        <b>Coder</b>
                      </span>
                    </span>
                  </h1>
                  <p>
                  <?php echo $slider_discription;?>
                  </p>
                  <ul>
                    <li>
                      <a class="common_btn" href="admin/<?php echo $slider_cv_upload?>" download
                        >Download Cv
                        <i class="fa-solid fa-arrow-down-to-line"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--================================
                BANNER 2 END
            =================================-->

        <!--================================
                ABOUT 2 START
            =================================-->
        <section id="about" class="tf__about_2 pt_130 xs_pt_80">
          <div class="container">
            <div class="row">
              <div class="col-xl-9 col-lg-9">
                <div class="tf__section_heading mb_40">
                  <h5 class="has-animation"><?php echo $about_us_heading;?></h5>
                  <h2 class="has-animation">
                  <?php echo $about_us_main_heading;?>
                  </h2>
                </div>
              </div>
            </div>
            <div class="row justify-content-between">
              <div class="col-xl-6 col-lg-6">
                <div class="tf__about_text_2">
                  <ul>
                    <li>
                      <div class="top fade_bottom" data-trigerId="about">
                        <div class="img">
                          <img
                            src="admin/<?php echo $about_us_icon_one_img;?>"
                            alt="about"
                            class="img-fluid w-100">
                        </div>
                        <div>
                          <h3><?php echo $about_us_heading_one;?></h3>
                          <p style="font-size:15px;">
                          <?php echo $about_us_discription_one;?>
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="top fade_bottom" data-trigerId="about">
                        <div class="img">
                          <img
                            src="admin/<?php echo $about_us_icon_two_img;?>"
                            alt="about"
                            class="img-fluid w-100">
                        </div>
                        <div>
                          <h3><?php echo $about_us_heading_two;?></h3>
                          <p style="font-size:15px;">
                          <?php echo $about_us_discription_two;?>
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6">
                <div class="tf__about_img tf__about_img_2">
                  <img
                    src="admin/<?php echo $about_us_user_img;?>"
                    alt="ZYAN"
                    class="img-fluid w-100">
                  <div class="tf__about_img_text">
                    <i class="fa-sharp fa-solid fa-award"></i>
                    <h4><?php echo $about_us_experience_year;?><span>Month Of Experience</span></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--================================
                ABOUT 2 END
            =================================-->

        <!--================================
                SERVICE 2 START
            =================================-->
        <section id="service" class="tf__service_2 pt_130 xs_pt_80 animation">
          <div class="container">
            <div class="row">
              <div class="col-xl-9 col-lg-9 m-auto">
                <div class="tf__section_heading mb_40 text-center">
                  <h5 class="has-animation">MY serivce</h5>
                  <h4 class="has-animation">
                      Transforming Ideas into Digital Reality As <br>Web Development Services
                  </h4>
                </div>
              </div>
            </div>
            <div class="row justify-content-center d-flex">
              <div class="col-xl-4 col-md-6 col-lg-4">
                <div
                  class="tf__single_service_2 fade_left"
                  data-trigerId="service"
                >
                  <div class="text">
                    <span>
                      <img
                        src="svg\design.png"
                        alt="service"
                        class="img-fluid w-100 svg">
                      <i class="icon-app-development"></i>
                    </span>
                    <h3>Web Designing</h3>
                    <p>
                    As a Web Designner, my objective responsible for designing the overall layout and aesthetic for website make and build perfect Web Designs.
                    </p>
                  </div>
                  <a href="#">Read More</a>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 col-lg-4">
                <div
                  class="tf__single_service_2 fade_left active"
                  data-trigerId="service"
                >
                  <div class="text">
                    <span>
                      <img
                        src="svg/development.png"
                        alt="service"
                        class="img-fluid w-100 svg">
                    </span>
                    <h3>Web Development</h3>
                    <p>
                    As a Web Developer, my objective is to make the creating websites that people interact with every day. impact client problem-solving skills to build digital experiences visually appealing and functionally robust.
                    </p>
                  </div>
                  <a href="#">Read More</a>
                </div>
              </div>
             
            </div>
          </div>
        </section>
        <!--================================
                SERVICE 2 END
            =================================-->

        <!--================================
                SKILLS 2 START
            =================================-->
        <section
          id="skills"
          class="tf__skills_2 pt_115 xs_pt_75 pb_120 xs_pb_80 mt_165 xs_mt_80"
        >
          <div class="container">
            <div class="row">
              <div class="col-xl-9 col-lg-9 m-auto">
                <div class="tf__section_heading mb_30">
                  <h5 class="has-animation">MY Skills</h5>
                  <h2 class="has-animation">
                  </h2>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xxl-8 col-xl-10 m-auto">
                <ul class="nav nav-pills mb_30" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link active"
                      id="pills-home-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-home"
                      type="button"
                      role="tab"
                      aria-controls="pills-home"
                      aria-selected="true"
                    >
                    Technical skills
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="pills-contact-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-contact"
                      type="button"
                      role="tab"
                      aria-controls="pills-contact"
                      aria-selected="false"
                    >
                     Education
                    </button>
                  </li>
                  
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                  <div
                    class="tab-pane fade show active"
                    id="pills-home"
                    role="tabpanel"
                    aria-labelledby="pills-home-tab"
                    tabindex="0"
                  >
                    <div class="row">
                      <div class="col-xl-6 col-lg-6">
                        <div
                          class="tf__single_skill_2 fade_bottom"
                          data-trigerId="skills"
                        >
                          <h3>My Creative skills & experience</h3>
                          <p>As a Web Developer, my objective is to make a positive impact on client, co-workers and the internet using my skills and experience to design compelling and attractive websites. solving code problems, editing and design with designing team in the company to build perfect web designs with experienced web pages designs with extensive programming. profitient in HTML5, CSS3, Responsive Design and media query. I have also basic knowledge of BOOTSTRAP4 and JAVASCRIPT.</p>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6">
                        <div
                          class="tf__single_skill_2 fade_bottom"
                          data-trigerId="skills"
                        >
                        <div class="tf__team_skills_bar_single">
                           <lable class="">HTML <span style="float:right;"> 90%</span></lable>
                            <div class="w3 my-4" style="border:1px solid white; ">
                              <div class="w3" style=" height:8px; width:90%; background-color:#55e6a5;"></div>
                            </div>
                            <lable class="">CSS <span style="float:right; "> 90%</span></lable>
                            <div class="w3 my-4" style="border:1px solid white; ">
                              <div class="w3" style=" height:8px; width:90%; background-color:#55e6a5;"></div>
                            </div>
                            <lable class="">BOOTSTRAP <span style="float:right; "> 90%</span></lable>
                            <div class="w3 my-4" style="border:1px solid white;">
                              <div class="w3" style=" height:8px; width:90%; background-color:#55e6a5;"></div>
                            </div>
                            <lable class="">JAVASCRIPT <span style="float:right; "> 40%</span></lable>
                            <div class="w3 my-4" style="border:1px solid white;">
                              <div class="w3" style=" height:8px; width:40%; background-color:#55e6a5;"></div>
                            </div>
                            <lable class="">PHP <span style="float:right; "> 75%</span></lable>
                            <div class="w3 mt-3 mb-3" style="border:1px solid white; ">
                              <div class="w3" style=" height:8px; width:75%; background-color:#55e6a5;"></div>
                            </div>
                            <lable class="">WORDPRESS <span style="float:right;"> 60%</span></lable>
                            <div class="w3 mt-3" style="border:1px solid white; ">
                              <div class="w3" style=" height:8px; width:60%; background-color:#55e6a5;"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- <div class="col-xl-6 col-lg-6">
                        <div
                          class="tf__single_skill_2 fade_bottom"
                          data-trigerId="skills"
                        >
                          <h3>Softech Agency</h3>
                          <h2>Wordpress and End Developer</h2>
                          <h4>2014 - 2018</h4>
                          <p>
                            Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit sed thisnquia
                            consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt
                          </p>
                          <div class="tf__team_skills_bar_single">
                            <p>Performence</p>
                            <div id="bar3" class="barfiller">
                              <div class="tipWrap">
                                <span class="tip"></span>
                              </div>
                              <span class="fill" data-percentage="75"></span>
                            </div>
                          </div>
                        </div>
                      </div> -->
                      <!-- <div class="col-xl-6 col-lg-6">
                        <div
                          class="tf__single_skill_2 fade_bottom"
                          data-trigerId="skills"
                        >
                          <h3>Kent State University</h3>
                          <h2>Master Degree Of information Technology</h2>
                          <h4>2005 - 2009</h4>
                          <p>
                            Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit sed thisnquia
                            consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt
                          </p>
                          <div class="tf__team_skills_bar_single">
                            <p>Performence</p>
                            <div id="bar4" class="barfiller">
                              <div class="tipWrap">
                                <span class="tip"></span>
                              </div>
                              <span class="fill" data-percentage="70"></span>
                            </div>
                          </div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="pills-profile"
                    role="tabpanel"
                    aria-labelledby="pills-profile-tab"
                    tabindex="0"
                  >
                    <div class="row education">
                      <div class="col-xl-6 col-lg-6">
                        <div
                          class="tf__single_skill_2 fade_bottom"
                          data-trigerId="skills"
                        >
                        
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6">
                        <div
                          class="tf__single_skill_2 fade_bottom"
                          data-trigerId="skills"
                        >
                          
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6">
                        <div
                          class="tf__single_skill_2 fade_bottom"
                          data-trigerId="skills"
                        >
                         
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6">
                        <div
                          class="tf__single_skill_2 fade_bottom"
                          data-trigerId="skills"
                        >
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="pills-contact"
                    role="tabpanel"
                    aria-labelledby="pills-contact-tab"
                    tabindex="0"
                  >
                    <div class="row education">
                      <div class="col-xl-6 col-lg-6">
                        <div
                          class="tf__single_skill_2 fade_bottom"
                          data-trigerId="skills"
                        >
                          <h3>MCA</h3>
                          <h3>Master Of Computer Application</h3>
                          <h4>KCMT Khandelwal College Of Management Science And Technology</h4>
                          <h2>AKTU University in Lucknow, Uttar Pradesh, india</h2>
                          <h4>August 2023 - Present [Expected: June 2025]</h4>
                         
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6">
                        <div
                          class="tf__single_skill_2 fade_bottom"
                          data-trigerId="skills"
                        >
                          <h3>BCA</h3>
                          <h3>Bachelor's Of Computer Application</h3>
                          <h4>KCMT Khandelwal College Of Management Science And Technology</h4>
                          <h2>MJPRU University in Bareilly, Uttar Pradesh, india</h2>
                          <h4>August 2020 - September 2023</h4>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6">
                        <div
                          class="tf__single_skill_2 fade_bottom"
                          data-trigerId="skills"
                        >
                          <h3>Intermediate</h3>
                          <h2>Govt Inter College Bareilly</h2>
                          <h4>June 2020</h4>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6">
                        <div
                          class="tf__single_skill_2 fade_bottom"
                          data-trigerId="skills"
                        >
                          <h3>High School</h3>
                          <h2>Govt Inter College Bareilly</h2>
                          <h4>April 2018</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="pills-disabled"
                    role="tabpanel"
                    aria-labelledby="pills-disabled-tab"
                    tabindex="0"
                  >
                    <div class="row education">
                      <div class="col-xl-6 col-lg-6">
                        <div
                          class="tf__single_skill_2 fade_bottom"
                          data-trigerId="skills"
                        >
                          <h3>MBA</h3>
                          <h2>University of Dhaka</h2>
                          <h4>2009 - 2012</h4>
                          <p>
                            Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit sed thisnquia
                            consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt
                          </p>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6">
                        <div
                          class="tf__single_skill_2 fade_bottom"
                          data-trigerId="skills"
                        >
                          <h3>BBA</h3>
                          <h2>University of Dhaka</h2>
                          <h4>2009 - 2012</h4>
                          <p>
                            Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit sed thisnquia
                            consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt
                          </p>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6">
                        <div
                          class="tf__single_skill_2 fade_bottom"
                          data-trigerId="skills"
                        >
                          <h3>HSC</h3>
                          <h2>Govt Bangla College</h2>
                          <h4>2009 - 2012</h4>
                          <p>
                            Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit sed thisnquia
                            consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt
                          </p>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6">
                        <div
                          class="tf__single_skill_2 fade_bottom"
                          data-trigerId="skills"
                        >
                          <h3>SSC</h3>
                          <h2>Govt Bangla College</h2>
                          <h4>2009 - 2012</h4>
                          <p>
                            Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit sed thisnquia
                            consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--================================
                SKILLS 2 END
            =================================-->

        <!--================================
                PORTFOLIO 2 START
            =================================-->
        <section
          id="portfolio"
          class="tf__portfolio tf__portfolio_2 mt_120 xs_mt_80"
        >
          <div class="container">
            <div class="row">
              <div class="col-xl-10 col-lg-9 mb_30">
                <div class="tf__section_heading">
                  <h5 class="has-animation">my recent Portfolio</h5>
                  <h4 class="has-animation">
                    Elevate your brand to new heights with <br>our portfolio
                    expertise
                  </h4>
                </div>
              </div>
            </div>
            <div class="row">
              <?php
               $sql4 ="SELECT * FROM `gallary` where status ='1' order by id desc limit 6";
               $fire4 = mysqli_query($con,$sql4);
               if(mysqli_num_rows($fire4)>0){
                   while($data4 = mysqli_fetch_assoc($fire4)){
                     $gallary_image = $data4['image'];
                     $gallary_heading = $data4['heading'];
                     $gallary_description = $data4['description'];
              ?>
              <div class="col-xl-4 col-sm-4">
                <a
                  href="admin/<?php echo $gallary_image;?>"
                  class="tf__portfolio_item play_btn"
                  data-cursor="Watch <br> video"
                >
                  <img
                    src="admin/<?php echo $gallary_image;?>"
                    alt="portfolio"
                    class="img-fluid w-100">
                  <div class="text">
                    <h4><?php echo $gallary_heading;?></h4>
                    <p><?php echo $gallary_description;?></p>
                  </div>
                </a>
              </div>
              <?php } } ?>
            </div>
          </div>
        </section>
        <!--================================
                PORTFOLIO 2 END
            =================================-->

        <!--================================
                BRAND START
            =================================-->
        <div class="tf__brand mt_120 xs_mt_80">
          <div class="row">
            <div class="col-12">
              <div class="marquee_animi">
                <ul>
                  <li>* HTML</li>
                  <li>* CSS</li>
                  <li>* Bootstrap</li>
                  <li>* PHP</li>
                  <li>* Javascript</li>
                  <li>* Mysql</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- ================================
                BRAND END
            ================================= -->

        <!--================================
                BLOG 2 START
            =================================-->
        <section id="blog" class="tf__blog_2 pt_120 xs_pt_80 pb_120 xs_pb_80">
          <div class="container">
            <div class="row">
              <div class="col-xl-8 m-auto mb_30">
                <div class="tf__section_heading">
                  <h5 class="has-animation">all blog</h5>
                  <h3 class="text=center has-animation">
                    Rafting Unique Experiences Inspiring Connections
                  </h3>
                </div>
              </div>
            </div>
            <div class="row animation">
            <?php
               $sql5 ="SELECT * FROM `blog` where status ='1' order by id desc limit 6";
               $fire5 = mysqli_query($con,$sql5);
               if(mysqli_num_rows($fire5)>0){
                   while($data4 = mysqli_fetch_assoc($fire5)){
                     $blog_blog_image = $data4['blog_image'];
                     $blog_username = $data4['username'];
                     $blog_comment = $data4['comment'];
                     $blog_title = $data4['title'];
                     $blog_description = $data4['description'];
                     
              ?>
              <div class="col-xl-4 col-md-6">
                <div class="tf__slingle_blog_2 fade_left" data-trigerId="blog">
                  <a
                    href="#"
                    data-cursor="Read <br> More"
                    class="tf__blog_img_2"
                  >
                    <img
                      src="admin/<?php echo $blog_blog_image;?>"
                      alt="blog"
                      class="img-fluid w-100">
                    <span>10 June</span>
                  </a>
                  <div class="tf__blog_text_2">
                    <ul>
                      <li>
                        <i class="fa-sharp fa-solid fa-circle-user"></i> <?php echo $blog_username;?>
                      </li>
                      <li>
                        <i class="fa-sharp fa-solid fa-comments"></i><?php echo $blog_comment;?>
                      </li>
                    </ul>
                    <a class="title" href="blog_details.php"
                      ><?php echo $blog_title;?></a
                    >
                    <p>
                    <?php echo $blog_description;?>
                    </p>
                  </div>
                </div>
              </div>
             
                    <?php 
                    
                   }
                   }
                   ?>
            </div>
          </div>
        </section>
        <!--================================
                BLOG 2 END
            =================================-->

        <!--================================
                CONTACT 2 START
            =================================-->
        <section id="contact" class="tf__contact_2 pt_95 xs_pt_45">
          <div class="container">
            <div class="row animation">
              <div class="col-xl-4 col-md-6 col-lg-4">
                <div
                  class="tf__contact_2_text fade_left"
                  data-trigerId="contact"
                >
                  <span>
                    <img
                      src="svg/voice_phone.svg"
                      alt="contact"
                      class="img-fluid w-100 svg">
                  </span>
                  <h3>Phone</h3>
                  <p style="font-size:12.5px;">
                  Do you want to collaborate on something. Ask a question , or any query then just
                  </p>
                  <a href="callto:12345664746846"><i class="fa-solid fa-arrow-down"></i> send me massege</a>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 col-lg-4">
                <div
                  class="tf__contact_2_text fade_left"
                  data-trigerId="contact"
                >
                  <span>
                    <img
                      src="svg/map_issue.svg"
                      alt="contact"
                      class="img-fluid w-100 svg">
                  </span>
                  <h3>Location</h3>
                  <p>
                   
                  </p>
                  <a href="#"><i class="fa-solid fa-location-dot"></i> <?php echo $address;?></a>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 col-lg-4">
                <div
                  class="tf__contact_2_text fade_left"
                  data-trigerId="contact"
                >
                  <span>
                    <img
                      src="svg/send_mail.svg"
                      alt="contact"
                      class="img-fluid w-100 svg">
                  </span>
                  <h3>Monday - Friday</h3>
                  <p>
                  If you want to meet us, you can meet us from Monday to Friday.
                  </p>
                  <a href="mailto:hfavouriteemail@gmail.com"
                    ><i class="fa-regular fa-envelope"></i> <?php echo $email;?></a
                  >
                </div>
              </div>
            </div>
            <div class="contact_form_2">
              <form method="post">
                <div class="row">
                  <div class="col-lg-6">
                    <input type="text" placeholder="Your Name Here" name="name">
                  </div>
                  <div class="col-lg-6">
                    <input type="text" placeholder="Subject" name="subject">
                  </div>
                  <div class="col-lg-12">
                    <input type="email" placeholder="Email" name="email">
                  </div>
                  <div class="col-12">
                    <textarea
                      rows="5"
                      placeholder="Your Message Here"
                      name="msg"
                    ></textarea>
                  </div>
                </div>
                <button type="submit" name="submit">Submit</button>
              </form>
              <?php 
              if(isset($_POST['submit'])){
                $name=$_POST['name'];
                $subject=$_POST['subject'];
                $email=$_POST['email'];
                $msg=$_POST['msg'];
                $create_date = date("Y-m-d");
                // if($name == ""){
                //   echo "<script>alert('all field are required');window.location.href='index.php';</script>";
                // }else{
                  $sql = "INSERT INTO `message`(`name`, `subject`, `email`, `msg`, `create_date`, `update_date`, `status`) VALUES ('$name','$subject','$email','$msg','$create_date','','')";
                  $fire = mysqli_query($con , $sql);
                  if($fire){
                    echo "<script>alert('data insert successfully');window.location.href='index.php';</script>";
                  }else{
                    echo "<script>alert('data not insert successfully');window.location.href='index.php';</script>";
                  }
                }
              // }
              ?>
            </div>
          </div>
        </section>
        <!--================================
                CONTACT 2 END
            =================================-->

     <?php include 'common/footer.php';?>

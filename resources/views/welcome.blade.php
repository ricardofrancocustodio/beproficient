<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.headapp') 
    <body>
        <div class="flex-center position-ref full-height">
           
            
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER ENDS START ======-->

    <!--====== HEADER PART START ======-->

   @include('layouts.menuapp')
   
    <div id="parallax" class="header-content d-flex align-items-center">
            <div class="header-shape shape-one layer" data-depth="0.10">
                <img src="/./assets/images/banner/shape/shape-1.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-tow layer" data-depth="0.30">
                <img src="/./assets/images/banner/shape/shape-2.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-three layer" data-depth="0.40">
                <img src="/./assets/images/banner/shape/shape-3.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-fore layer" data-depth="0.60">
                <img src="/./assets/images/banner/shape/shape-2.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-five layer" data-depth="0.20">
                <img src="/./assets/images/banner/shape/shape-1.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-six layer" data-depth="0.15">
                <img src="/./assets/images/banner/shape/shape-4.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-seven layer" data-depth="0.50">
                <img src="/./assets/images/banner/shape/shape-5.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-eight layer" data-depth="0.40">
                <img src="/./assets/images/banner/shape/shape-3.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-nine layer" data-depth="0.20">
                <img src="/./assets/images/banner/shape/shape-6.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-ten layer" data-depth="0.30">
                <img src="/./assets/images/banner/shape/shape-3.png" alt="Shape">
            </div> <!-- header shape -->
         
    <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="header-content-right">
                            <h5 class="sub-title">Practice </h5>
                            <h1 class="title">ENGLISH SPEAKING</h1>
                            <p>English Test Simulators</p>
                            <a class="main-btn" href="/home">Start Test</a>
                        </div> <!-- header content right -->
                    </div>
                    <div class="col-lg-6 offset-xl-1">
                        <div class="header-image d-none d-lg-block">
                            <img src="assets/images/banner/beproficient_hero.png" alt="hero" 
                            style="border-radius: 6%;">
                        </div> <!-- header image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-social">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-social-icon">
                                <ul>
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni-behance-original"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div> <!-- header social -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- header social -->
        </div> <!-- header content -->

<!--     <section id="about" class="about-area pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="title">About Us</h2>
                        <p>Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.</p>
                    </div> <-- section title --
                </div>
            </div> <-- row --
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50">
                        <h5 class="about-title">Hi There! I'm Mark Parker</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <ul class="clearfix">
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-calendar"></i>
                                    </div>
                                    <div class="info-text">
                                        <p><span>Date of birth:</span> 8 June 1995</p>
                                    </div>
                                </div> <-- single info --
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <div class="info-text">
                                        <p><span>Email:</span> parker@mysite.com</p>
                                    </div>
                                </div> <-- single info --
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-phone-handset"></i>
                                    </div>
                                    <div class="info-text">
                                        <p><span>Phone:</span> +1-202-555-0138</p>
                                    </div>
                                </div> <-- single info --
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-map-marker"></i>
                                    </div>
                                    <div class="info-text">
                                        <p><span>Location:</span> 4373, El Centro, CA</p>
                                    </div>
                                </div> <-- single info --
                            </li>
                        </ul>
                    </div> <-- about content --
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <div class="about-skills pt-25">
                        <div class="skill-item mt-25">
                            <div class="skill-header">
                                <h6 class="skill-title">HTML</h6>
                                <div class="skill-percentage">
                                    <div class="count-box counted">
                                        <span class="counter">80</span>
                                    </div>
                                    %
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="80"></div>
                                </div>
                            </div>
                        </div> <-- skill item --
                        <div class="skill-item mt-25">
                            <div class="skill-header">
                                <h6 class="skill-title">CSS</h6>
                                <div class="skill-percentage">
                                    <div class="count-box counted">
                                        <span class="counter">60</span>
                                    </div>
                                    %
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="60"></div>
                                </div>
                            </div>
                        </div> <-- skill item --
                        <div class="skill-item mt-25">
                            <div class="skill-header">
                                <h6 class="skill-title">Photoshop</h6>
                                <div class="skill-percentage">
                                    <div class="count-box counted">
                                        <span class="counter">50</span>
                                    </div>
                                    %
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="50"></div>
                                </div>
                            </div>
                        </div> <-- skill item --
                        <div class="skill-item mt-25">
                            <div class="skill-header">
                                <h6 class="skill-title">Sketch</h6>
                                <div class="skill-percentage">
                                    <div class="count-box counted">
                                        <span class="counter">90</span>
                                    </div>
                                    %
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="90"></div>
                                </div>
                            </div>
                        </div> <-- skill item --
                    </div> <-- about skills --
                </div>
            </div> <-- row --
        </div> <-- container --
    </section>
 -->
    <!--====== ABOUT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="service" class="call-to-action pt-125 pb-130 bg_cover" style="background-image: url(assets/images/call-to-action.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="call-action-content text-center">
                        <h2 class="action-title">How Simulators Works?</h2>
                        <p>1. You choose the simulator that fits your needs.<br>
                        2. You listen to the questions.<br>
                        3. You record your answer.  </p>
                        <ul>
                            <li><a class="main-btn custom-2" href="#">Start TOEFL Test</a></li>
                            <li><a class="main-btn custom-2" href="#">Start IELTS Test</a></li>
                        </ul>
                    </div> <!-- call action content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

  
    <!--====== CALL TO ACTION PART ENDS ======--    

    <   --====== WORK PART START ======--  

    <section id="work" class="work-area pt-125 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title pb-25">
                        <h2 class="title">My Recent Works</h2>
                        <p>Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.</p>
                    </div> <    -- section title -- 
                </div>
            </div> <    -- row --   
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-work text-center mt-30">
                        <div class="work-image">
                            <img src="assets/images/work/w-1.jpg" alt="work">
                        </div>
                        <div class="work-overlay">
                            <div class="work-content">
                                <h3 class="work-title">Product Design</h3>
                                <ul>
                                    <li><a class="image-popup" href="assets/images/work/w-1.jpg"><i class="lni-plus"></i></a></li>
                                    <li><a href="#"><i class="lni-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <    -- single work --   
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-work text-center mt-30">
                        <div class="work-image">
                            <img src="assets/images/work/w-2.jpg" alt="work">
                        </div>
                        <div class="work-overlay">
                            <div class="work-content">
                                <h3 class="work-title">Product Design</h3>
                                <ul>
                                    <li><a class="image-popup" href="assets/images/work/w-2.jpg"><i class="lni-plus"></i></a></li>
                                    <li><a href="#"><i class="lni-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <    -- single work --   
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-work text-center mt-30">
                        <div class="work-image">
                            <img src="assets/images/work/w-3.jpg" alt="work">
                        </div>
                        <div class="work-overlay">
                            <div class="work-content">
                                <h3 class="work-title">Product Design</h3>
                                <ul>
                                    <li><a class="image-popup" href="assets/images/work/w-3.jpg"><i class="lni-plus"></i></a></li>
                                    <li><a href="#"><i class="lni-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <    -- single work --   
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-work text-center mt-30">
                        <div class="work-image">
                            <img src="assets/images/work/w-4.jpg" alt="work">
                        </div>
                        <div class="work-overlay">
                            <div class="work-content">
                                <h3 class="work-title">Product Design</h3>
                                <ul>
                                    <li><a class="image-popup" href="assets/images/work/w-4.jpg"><i class="lni-plus"></i></a></li>
                                    <li><a href="#"><i class="lni-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <    -- single work --   
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-work text-center mt-30">
                        <div class="work-image">
                            <img src="assets/images/work/w-5.jpg" alt="work">
                        </div>
                        <div class="work-overlay">
                            <div class="work-content">
                                <h3 class="work-title">Product Design</h3>
                                <ul>
                                    <li><a class="image-popup" href="assets/images/work/w-5.jpg"><i class="lni-plus"></i></a></li>
                                    <li><a href="#"><i class="lni-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <    -- single work --   
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-work text-center mt-30">
                        <div class="work-image">
                            <img src="assets/images/work/w-6.jpg" alt="work">
                        </div>
                        <div class="work-overlay">
                            <div class="work-content">
                                <h3 class="work-title">Product Design</h3>
                                <ul>
                                    <li><a class="image-popup" href="assets/images/work/w-6.jpg"><i class="lni-plus"></i></a></li>
                                    <li><a href="#"><i class="lni-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <-- single work --
                </div>
            </div> <-- row --
            <div class="row">
                <div class="col-lg-12">
                    <div class="work-more text-center mt-50">
                        <a class="main-btn" href="#">more works</a>
                    </div> <-- work more --
                </div>
            </div> <-- row --
        </div> <-- container --
    </section>

    <--====== WORK PART ENDS ======--

    <--====== PRICING PART START ======-->

    <section id="pricing" class="pricing-area gray-bg pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-25">
                        <h2 class="title">Pricing Plans</h2>
                        <p></p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8 col-sm-9">
                    <div class="single-pricing active text-center mt-30">
                        <div class="pricing-package">
                            <h4 class="package-title">Proficiency</h4>
                        </div>
                        <div class="pricing-body">
                            <div class="pricing-text">
                                <p>Get Access to IELTS and TOEFL Speaking Modules</p>
                                <span class="price">Free</span>
                            </div>
                            <div class="pricing-list">
                                <ul>
                                    <li>TOEFL / IELTS Speaking Test</li>
                                    <li style="text-decoration: line-through;" >Listening Test</li>
                                    <li style="text-decoration: line-through;">Vocabulary / Pronouciation Training</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a class="main-btn" href="/./register">let's go</a>
                            </div>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-9">
                    <div class="single-pricing  text-center mt-30">
                        <div class="pricing-package">
                            <h4 class="package-title">Business</h4>
                        </div>
                        <div class="pricing-body">
                            <div class="pricing-text">
                                <p>Choose The Specific Speaking Module That Fits Your Needs</p>
                                <span class="price">$69 / year</span>
                            </div>
                            <div class="pricing-list">
                                <ul>
                                    <li>Agribusiness</li>
                                    <li>Aviation / Aeronautics</li>
                                    <li>Listening Tests</li>
                                    <li>Vocabulary / Pronouciation Training</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a class="main-btn" href="#contact">coming soon...</a>
                            </div>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-9">
                    <div class="single-pricing text-center mt-30">
                        <div class="pricing-package">
                            <h4 class="package-title">Premium</h4>
                        </div>
                        <div class="pricing-body">
                            <div class="pricing-text">
                                <p>Unlimited Access to All Speaking Tests Modules</p>
                                <span class="price">$99 / year</span>
                            </div>
                            <div class="pricing-list">
                                <ul>
                                    <li>TOEFL / IELTS Speaking Test</li>
                                    <li>Listening Test</li>
                                    <li>Agribusiness</li>
                                    <li>Aviation / Aeronautics</li>
                                    <li>Listening Tests</li>
                                    <li>Vocabulary / Pronouciation Training</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a class="main-btn" href="#contact">coming soon...</a>
                            </div>
                        </div>
                    </div> <!-- single pricing -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PRICING PART ENDS ======-->

    <!--====== BLOG PART START ======-->

    <section id="blog" class="blog-area pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-25">
                        <h2 class="title">From The Blog</h2>
                        <p></p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8 col-sm-9">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="/./assets/images/blog/b-1.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="#"><b>Communication Skills</b> Can Open The <b>Doors of Possibilities</b></a></h4>
                           <!--  <span>July 26, 2022</span> -->
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-9">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="assets/images/blog/b-2.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="#"><b>How to</b> Find Some Partner to <b>Practice</b> Your English <b>Speaking</b></a></h4>
                           <!--  <span>July 26, 2022</span> -->
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-9">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="assets/images/blog/b-3.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="#">5 Tips to Help You To <b>Overcome</b> English <b>Speaking</b> Fear  </a></h4>
                            <!-- <span>July 26, 2022</span> -->
                        </div>
                    </div> <!-- single blog -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-more text-center mt-50">
                        <a class="main-btn" href="/./blog">More posts</a>
                    </div> <!-- blog more -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-25">
                        <h2 class="title">Get In Touch</h2>
                        <p>Complete the following form to send EnglishAcademics a message. We will respond to your question or comment as soon as possible. </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form pt-30">
                        <!--  <iframe name="ctt-form" style="display:none;"></iframe>  -->
                        <form id="contact-form" method="GET" action="{{ action('HomeController@email') }}" target="ctt-form">
                            @csrf
                            <div class="single-form">
                                <input type="text" name="name" placeholder="Name" required>
                            </div> <!-- single form -->
                            <div class="single-form">
                                <input type="email" name="email" placeholder="Email" required>
                            </div> <!-- single form -->
                            <div class="single-form">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div> <!-- single form -->
                            <p class="form-message"></p>
                            <div class="single-form">
                                <button class="main-btn" type="submit">Send Message</button>
                            </div> <!-- single form -->
                        </form>
                    </div> <!-- contact form -->
                </div>
            </div> <!-- row -->
            
               
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


    <!--====== FOOTER PART START ======-->

  @include('layouts.footerapp')

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

@include('layouts.reqscriptsapp')
        </div>
    </body>
</html>
<script>
    $('#contact-form').on('submit', function(){
        this.reset();
    
    });

</script>

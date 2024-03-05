<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Manager</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-topic-listing.css" rel="stylesheet">      
<!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
    </head>
    
    <body id="top">

        <main>

               
            <?php include 'admin-header.php'; ?>
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">Discover. Learn. Enjoy</h1>

                            <h6 class="text-center">platform for creatives around the world</h6>

                            <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text bi-search" id="basic-addon1">
                                        
                                    </span>

                                    <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Design, Code, Marketing, Finance ..." aria-label="Search">

                                    <button type="submit" class="form-control">Search</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>


            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="topics-detail.php">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">Web Design</h5>

                                            <p class="mb-0">When you search for free CSS templates, you will notice that TemplateMo is one of the best websites.</p>
                                        </div>

                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                    </div>

                                    <img src="images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="images/businesswoman-using-tablet-analysis.jpg" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">Finance</h5>

                                            <p class="text-white">Topic Listing Template includes homepage, listing page, detail page, and contact page. You can feel free to edit and adapt for your CMS requirements.</p>

                                            <a href="topics-detail.html" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                        </div>

                                        <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                    </div>

                                    <div class="social-share d-flex">
                                        <p class="text-white me-4">Share:</p>

                                        <ul class="social-icon">
                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-twitter"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-facebook"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-pinterest"></a>
                                            </li>
                                        </ul>

                                        <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                                    </div>

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="explore-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="mb-4">Browse Topics</h1>
                        </div>

                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Design</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Marketing</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">Finance</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">Music</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education-tab-pane" type="button" role="tab" aria-controls="education-tab-pane" aria-selected="false">Education</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.php">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Web Design</h5>

                                                            <p class="mb-0">Topic Listing Template based on Bootstrap 5</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.php">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Graphic</h5>

                                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">75</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Redesign_feedback_re_jvm0.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.php">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Logo Design</h5>

                                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">100</span>
                                                    </div>

                                                    <img src="images/topics/colleagues-working-cozy-office-medium-shot.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="topics-detail.php">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Advertising</h5>

                                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                            </div>

                                                            <span class="badge bg-advertising rounded-pill ms-auto">30</span>
                                                        </div>

                                                        <img src="images/topics/undraw_online_ad_re_ol62.png" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="topics-detail.php">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Video Content</h5>

                                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                            </div>

                                                            <span class="badge bg-advertising rounded-pill ms-auto">65</span>
                                                        </div>

                                                        <img src="images/topics/undraw_Group_video_re_btu7.png" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="topics-detail.html">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Viral Tweet</h5>

                                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                            </div>

                                                            <span class="badge bg-advertising rounded-pill ms-auto">50</span>
                                                        </div>

                                                        <img src="images/topics/undraw_viral_tweet_gndb.png" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                  </div>

                                <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">   <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.php">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Investment</h5>

                                                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Finance_re_gnv2.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="custom-block custom-block-overlay">
                                                <div class="d-flex flex-column h-100">
                                                    <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                                                    <div class="custom-block-overlay-text d-flex">
                                                        <div>
                                                            <h5 class="text-white mb-2">Finance</h5>

                                                            <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint animi necessitatibus aperiam repudiandae nam omnis</p>

                                                            <a href="topics-detail.php" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                                        </div>

                                                        <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                                    </div>

                                                    <div class="social-share d-flex">
                                                        <p class="text-white me-4">Share:</p>

                                                        <ul class="social-icon">
                                                            <li class="social-icon-item">
                                                                <a href="#" class="social-icon-link bi-twitter"></a>
                                                            </li>

                                                            <li class="social-icon-item">
                                                                <a href="#" class="social-icon-link bi-facebook"></a>
                                                            </li>

                                                            <li class="social-icon-item">
                                                                <a href="#" class="social-icon-link bi-pinterest"></a>
                                                            </li>
                                                        </ul>

                                                        <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                                                    </div>

                                                    <div class="section-overlay"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.php">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Composing Song</h5>

                                                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-music rounded-pill ms-auto">45</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Compose_music_re_wpiw.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.php">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Online Music</h5>

                                                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-music rounded-pill ms-auto">45</span>
                                                    </div>

                                                    <img src="images/topics/undraw_happy_music_g6wc.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.php">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Podcast</h5>

                                                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-music rounded-pill ms-auto">20</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Podcast_audience_re_4i5q.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.php">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Graduation</h5>

                                                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-education rounded-pill ms-auto">80</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Graduation_re_gthn.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.php">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Educator</h5>

                                                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-education rounded-pill ms-auto">75</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Educator_re_ju47.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </section>


            <section class="timeline-section section-padding" id="section_3">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="text-white mb-4">How does it work?</h1>
                        </div>

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="timeline-container">
                                <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                    <div class="list-progress">
                                        <div class="inner"></div>
                                    </div>

                                    <li>
                                        <h4 class="text-white mb-3">Search your favourite topic</h4>

                                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, cumque magnam? Sequi, cupiditate quibusdam alias illum sed esse ad dignissimos libero sunt, quisquam numquam aliquam? Voluptas, accusamus omnis?</p>

                                        <div class="icon-holder">
                                          <i class="bi-search"></i>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <h4 class="text-white mb-3">Bookmark &amp; Keep it for yourself</h4>

                                        <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint animi necessitatibus aperiam repudiandae nam omnis est vel quo, nihil repellat quia velit error modi earum similique odit labore. Doloremque, repudiandae?</p>

                                        <div class="icon-holder">
                                          <i class="bi-bookmark"></i>
                                        </div>
                                    </li>

                                    <li>
                                        <h4 class="text-white mb-3">Read &amp; Enjoy</h4>

                                        <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi vero quisquam, rem assumenda similique voluptas distinctio, iste est hic eveniet debitis ut ducimus beatae id? Quam culpa deleniti officiis autem?</p>

                                        <div class="icon-holder">
                                          <i class="bi-book"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 text-center mt-5">
                            <p class="text-white">
                                Want to learn more?
                                <a href="#" class="btn custom-btn custom-border-btn ms-3">Check out Youtube</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="faq-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Frequently Asked Questions</h2>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-5 col-12">
                            <img src="images/faq_graphic.jpg" class="img-fluid" alt="FAQs">
                        </div>

                        <div class="col-lg-6 col-12 m-auto">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is Topic Listing?
                                        </button>
                                    </h2>

                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Topic Listing is free Bootstrap 5 CSS template. <strong>You are not allowed to redistribute this template</strong> on any other template collection website without our permission. Please contact TemplateMo for more detail. Thank you.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How to find a topic?
                                    </button>
                                    </h2>

                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            You can search on Google with <strong>keywords</strong> such as templatemo portfolio, templatemo one-page layouts, photography, digital marketing, etc.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Does it need to paid?
                                    </button>
                                    </h2>

                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="contact-section section-padding section-bg" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-5">Get in touch</h2>
                        </div>


                        <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                            <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1293.1958236149737!2d122.26729489999999!3d10.696048300000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33ae58ef4e785fc5%3A0xa13cce439d534035!2sGuimbal%20Town%20Plaza%2C%20Iloilo-Antique%20Road%2C%20Guimbal%2C%20Iloilo!5e0!3m2!1sen!2sph!4v1645344787359!5m2!1sen!2sph!6e2" width="100%" height="250" style="border:1; border-color:black; border-size:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                            <h4 class="mb-3">Head office</h4>

                            <p>Zone 2 &amp;, Brgy. Nanga, Guimbal, Iloilo</p>

                            <hr>

                            <p class="d-flex align-items-center mb-1">
                                <span class="me-2">Contact</span>

                                <a href="tel: 305-240-9671" class="site-footer-link">
                                    09123456789
                                </a>
                            </p>

                            <p class="d-flex align-items-center">
                                <span class="me-2">Email</span>

                                <a href="mailto:info@company.com" class="site-footer-link">
                                    manager@company.com
                                </a>
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mx-auto">
                            <h4 class="mb-3">Tigbauan office</h4>

                            <p>3rd Floor Bldg., Nuladas, Tigbauan, Iloilo</p>

                            <hr>

                            <p class="d-flex align-items-center mb-1">
                                <span class="me-2">Contact</span>

                                <a href="tel: 110-220-3400" class="site-footer-link">
                                    09123456789
                                </a>
                            </p>

                            <p class="d-flex align-items-center">
                                <span class="me-2">Email</span>

                                <a href="mailto:info@company.com" class="site-footer-link">
                                    manager@company.com
                                </a>
                            </p>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2" href="admin-home.php">
                            <i class="bi-back"></i>
                            <span>Manager</span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <h6 class="site-footer-title mb-3">Resources</h6>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Home</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">How it works</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">FAQs</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Information</h6>

                        <p class="text-white d-flex mb-1">
                            <a href="tel: 305-240-9671" class="site-footer-link">
                                222-222-2222
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="mailto:info@company.com" class="site-footer-link">
                                manager@company.com
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            English</button>

                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" type="button">Hiligaynon</button></li>

                                <li><button class="dropdown-item" type="button">Bisaya</button></li>

                                <li><button class="dropdown-item" type="button">Karay-a</button></li>
                            </ul>
                        </div>

                        <p class="copyright-text mt-lg-5 mt-4">Copyright © 2222 Manager. All rights reserved.
                        <br><br>Design: <a rel="nofollow" href="admin-home.php" target="_blank">Manager</a></p>
                        
                    </div>

                </div>
            </div>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>

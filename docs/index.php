<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Shillers Network" />
        <meta name="author" content="" />
        <title>Shiller Network</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/icon.jpeg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/function.css" rel="stylesheet" />
        <style>

            .partner-image{
                width: 300px; height: 300px; margin-bottom: 8px;
            }
            
            @media screen and (max-width: 768px) {
                #txt_autotype{
                    font-size: 10px !important;
                }

                .partner-image{
                    width: 100px; height: 100px; margin-bottom: 8px;
                }
                .miid{
                    margin: 0px !important;
                    margin-left: 0px !important;
                    margin-right: 0px !important;
                }
            }
        </style>

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <img src="assets/icon.jpeg" style="width: 32px; height: 32px"/>
                <a class="navbar-brand" href="#page-top"><img src="assets/img/Shillers-Network.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#question">FAQs</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#proof">Proof</a></li>
                        <li class="nav-item"><a class="nav-link" href="#partners">Partners</a></li>
                        <li class="nav-item"><a class="nav-link" href="#disclaimer">Disclaimer</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Shillers Network!</div>
                <div
                class="masthead-heading text-uppercase txt-rotate"
                id="txt_autotype"
                data-period="2000"
                data-rotate='[ "Make your token hit 10x to 1000x with our marketing plan.", "Where All Your Shills Becomes Reality.", "The Only Shiller You Need.", "Affordable.", "Satifactory.", "Contact Us Today!" ]'
                >Make your token hit 10x to 1000x with our marketing plan.</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">We are ready to serve.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-handshake fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Marketing</h4>
                        <p class="text-muted">We are a very innovative marketing company that is into marketing and creating awearness for reputable and Start-up Crypto companies using different social media platforms like Telegram, Twitter, Reddit and more..</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-suitcase fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Professional View</h4>
                        <p class="text-muted">Portray clients in a good light by giving an image that befits the services rendered..</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Platform Utilization</h4>
                        <p class="text-muted">
                            Create proper awearness to the world by advertising via social media platforms.
                            <br />
                            Give clients the best marketing experience, selling their services to customers using our platform..</p>
                    </div>
                </div>

                <div class="m-lg-auto text-center">
                    <h4>Our Services</h4>
                </div>
                <div class="text-center row">
                    <?php 
                        include("./features/services.php")
                    ?>
                </div>

            </div>
        </section>
        <!-- Question People Ask-->
        <section class="page-section bg-light" id="question">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Frequently Asked Questions</h2>
                    <h3 class="section-subheading text-muted">...</h3>
                </div>

                <div class="container">
                    <div class="content">
                        <h3>Can you manage a project? </h1>
                        <p class="small" style="font-style: italic;">Yes, we manage projects conveniently.</p>
                        <br />
                        <br />
                    </div>

                    <div class="content">
                        <h3>What if I have little cash for marketing purposes, is there any subscription that can suit my pay?</h1>
                        <p class="small" style="font-style: italic;">Yes, we do have subscription package to suit every budget.</p>
                        <br />
                        <br />
                    </div>

                    <div class="content">
                        <h3> What type of subscription do you provide? </h1>
                        <p class="small" style="font-style: italic;">We have daily, weekly, monthly and yearly subscriptions. These very affordable options give our clients a better choice platter.</p>
                        <br />
                        <br />
                    </div>

                    <div class="content">
                        <h3>Are your marketers bots? </h1>
                        <p class="small" style="font-style: italic;">No, our marketers are highly trained and are good at what they do. They are better than bot!.</p>
                        <br />
                        <br />
                    </div>

                    <div class="content">
                        <h3> Can you manage a community? </h1>
                        <p class="small" style="font-style: italic;">Yes we do that flawlessly.</p>
                        <br />
                        <br />
                    </div>

                    <div class="content">
                        <h3>Do you offer trail section so we can check your authenticity? </h1>
                        <p class="small" style="font-style: italic;">Yes we offer two hours trail shilling which may attract little charge of 50 dollars.</p>
                        <br />
                        <br />
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Shillers Network was established in October 2021 with the aim of selling Crypto Companies to the world in other to reduce scamming and promoting Start-up Projects in the Crypto World. Shillers Network is a subsidiary of Market 4u Ltd, a registered company but Shillers Network focuses on online Crypto Marketing..</h3>
                </div>

                <div class="container">
                    
                </div>
                <!-- <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">An Agency is Born</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2015</h4>
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2020</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul> -->
            </div>
        </section>

        <!-- Proof -->
        <section class="page-section bg-white" id="proof">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Proof of Work</h2>
                </div>
            </div>

            <div class="text-center row">
                <?php
                    include("./features/proof.php");
                ?>
            </div>
        </section>

        <!-- Proof -->
        <section class="page-section bg-white" id="partners">
            <div class="container">
                <div class="text-center align-items-center justify-content-center">
                    <h2 class="section-heading text-uppercase">Partners</h2>
                </div>
            </div>

            <div class="text-center row" style="width: 80%; margin-left: 10%;">
                <?php
                    include("./features/partner.php");
                ?>
            </div>

        </section>

        <!-- Disclaimer -->
        <section class="page-section bg-white" id="disclaimer">
            <div class="container">
                <div class="text-center align-items-center justify-content-center">
                    <h3 class="section-heading text-uppercase">Disclaimer</h3>
                </div>
            </div>

            <div class="text-center row" style="width: 80%; margin-left: 10%;">
                SHILLERSNETWORK does not offer any money-back guarantees. You recognize and agree that you shall not be entitled to a refund for any of our service purchased under any circumstances.
            </div>

        </section>


        <!-- Team-->
        <!-- <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                            <h4>Parveen Anand</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section> -->
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <!-- <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." /></a>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">For Inquiries and Booking</h2>
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Follow the link below to reach us.</h3>

                    <p>
                        <a style="font-size: 17px !important;" href="https://t.me/shillersnet" target="_blank">Telegram</a>
                        <span class="w3-green" style="color: green;">•</span>
                        <a style="font-size: 17px !important;" href="mailto:info@shillersnetwork.com" target="_blank">Email</a>
                    </p>
                </div>
                
                <!-- <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form> -->
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; ShillersNetwork 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://t.me/shillersnet "><i class="fab fa-telegram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="mailto:info@shillersnetwork.com"><i class="fa fa-inbox"></i></a>
                        <!-- <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a> -->
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/function.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

<?php
/*
Template Name: Frontpage

*/

get_header();
?>
    <section id="video-area">
        <div class="container-fluid">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/slider2.jpg" class="img-responsive"> -->
        </div>
    </section>
    <section class="history">
        <div class="container">
            <div class="row">
                <div class="history-content col-lg-4 col-md-4">
                    <div class="wrapper">
                        <div class="history-heading row">
                            <div class="left col-lg-6 col-md-6">
                                <h2 class="big-text">WE</h2>
                            </div>
                            <div class="right col-md-6">
                                <h2>ARE YOUR REAL ESTATE EXPERTS </h2>
                            </div>
                        </div>
                        <div class="history-text">
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nisl sem, congue ac mauris vitae, viverra pharetra elit. Nullam consectetur ultrices mi id dignissim. Maecenas vestibulum lorem ac arcu vestibulum faucibus. Proin cursus mauris erat, sit amet fringilla quam pellentesque in. Nulla et aliquam nulla, a molestie diam.
                            </p>
                        </div>
                    </div>
                    <div class="history-links">
                        <p>HISTORY, MISSION, VISION <a class="more"><i class="fa fa-chevron-down"></i></a></p>
                        
                    </div>
                </div>
                <div class="history-img col-lg-8 col-md-8">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/history-img.jpg" class="img-responsive">
                    
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title">
                        <h2>ABOUT PROPERTY</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-featured-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about-featured.jpg" class="img-responsive">
                    </div>
                    <a class="learn-more">LEARN MORE</a>
                </div>
                <div class="col-md-6">
                    <div class="about-sub-header">
                        <h3>THE BUILDING<br/>AN EXCLUSIVE<br/>
                        <span>space</span></h3>
                    </div>
                    <div class="about-accordion-area">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="panel-title expand">
                                   <div class="right-arrow pull-right">+</div>
                                  <a href="#">First</a>
                                </h4>
                              </div>
                              <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="panel-title expand">
                                    <div class="right-arrow pull-right">+</div>
                                  <a href="#">Second</a>
                                </h4>
                              </div>
                              <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="panel-title expand">
                                    <div class="right-arrow pull-right">+</div>
                                  <a href="#">Third</a>
                                </h4>
                              </div>
                              <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                              </div>
                            </div>
                          </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="developers">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title">
                        <h2>DEVELOPERS</h2>
                    </div>
                    <div class="developers-list-container">
                        <ul id="developers-list">
                            <li class="developers">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/dev1.png" class="img-responsive">
                                
                            </li>
                            <li class="developers">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/dev2.png" class="img-responsive">
                                
                            </li>
                            <li class="developers">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/dev3.png" class="img-responsive">
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div id="ContactTab" class="container"> 
                        <ul class="nav nav-pills">
                            <li class="contact-us active"><a href="#1a" data-toggle="tab" aria-expanded="true">INQUIRE NOW</a></li>
                            <li class="join-us"><a href="#2a" data-toggle="tab" aria-expanded="false">JOIN OUR TEAM</a></li>
                        </ul>
                    </div>
                    <div class="tab-content clearfix">
                        <div class="tab-pane animated zoomIn active" id="1a">
                            <h3>GIVE US A RING, SEND US A MESSAGE OR JOIN US</h3>
                            <?php echo do_shortcode('[contact-form-7 id="4" title="Home Contact Form"]'); ?>

                        </div>
                        <div class="tab-pane animated zoomIn" id="2a">
                            <h3>GIVE US A RING, SEND US A MESSAGE OR JOIN US</h3>
                            <?php echo do_shortcode('[contact-form-7 id="4" title="Home Contact Form"]'); ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div
        

    </section>
    <section id="before-footer">
        <div class="container-fluid">
            <?php dynamic_sidebar('Before Footer'); ?>

        </div>
    </section>
<?php
get_footer();
?>
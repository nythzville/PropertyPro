  	<section id="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php //dynamic_sidebar('Footer Widget 1'); ?>
              <img id="logo-footer" src="<?php echo get_template_directory_uri(); ?>/img/pp_logo.png" width="75" alt="Logo">

                </div>
                <div class="col-md-3">
                    <?php dynamic_sidebar('Footer Widget 2'); ?>
                    
                </div>
                <div class="col-md-3">
                    <?php dynamic_sidebar('Footer Widget 3'); ?>
                    
                </div>
                <div class="col-md-3">
                    <?php dynamic_sidebar('Footer Widget 4'); ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- WP FOOTER -->
  	<footer>
        <div class="container">
            <div class="row">
                <div id="copyright">Copyright &copy; 2017 MavenTech Estate | all rights reserved | Powered by MavenTech Solutions Inc.</div>
            </div>
        </div>
        
    </footer>
  	<?php wp_footer(); ?>
</body>
</html>

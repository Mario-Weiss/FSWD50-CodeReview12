<footer class="bg-verydark text-light">
      <div class="container text-center py-3">
        <?php 
        if(is_active_sidebar('socialbar')):
            dynamic_sidebar('socialbar');
        endif;
         ?>
        <div class="navbar navbar-nav navbar-dark navbar-expand">
                <ul class="navbar-nav justify-content-around w-100 text-uppercase">
                    <li><a class="nav-link" href="#"><i class="pr-2 fab fa-facebook-f"></i><span class="d-none d-md-inline"> facebook</span></a>
                    <li><a class="nav-link" href="#"><i class="pr-2 fab fa-twitter"></i><span class="d-none d-md-inline"> twitter</span></a>
                    <li><a class="nav-link" href="#"><i class="pr-2 fab fa-instagram"></i><span class="d-none d-md-inline"> instagram</span></a>
                    <li><a class="nav-link" href="#"><i class="pr-2 fas fa-heart"></i><span class="d-none d-md-inline"> bloglovin</span></a>
                    <li><a class="nav-link" href="#"><i class="pr-2 fab fa-google-plus-g"></i><span class="d-none d-md-inline"> google+</span></a>
                    <li><a class="nav-link" href="#"><i class="pr-2 fab fa-tumblr"></i><span class="d-none d-md-inline"> tumblr</span></a>
                    <li><a class="nav-link" href="#"><i class="pr-2 fab fa-youtube"></i><span class="d-none d-md-inline"> youtube</span></a>
                </ul>
            </div>
        <hr class="my-3">
        <p class="text-muted py-3 m-auto">&copy; <?php echo Date('Y') ?> - <?php bloginfo('name') ?>. All Rights Reserved</p>
      </div>
    </footer>
    <?php wp_footer(); ?>
    <!-- Optional JavaScript -->
    
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
    <script>
$( document ).ready(function() {
    $('.menu-social-links-menue-container').addClass('navbar navbar-nav navbar-dark navbar-expand mb-auto')
    $('.menu-social-links-menue-container ul').addClass('navbar-nav mr-auto mt-2 mt-lg-0')
    $('.menu-social-links-menue-container a').addClass('px-2 nav-link')
    $('#social-h').show();
    $('#social-h2').show();  
    });
    </script>
</body>
</html>
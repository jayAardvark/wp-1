<!DOCTYPE html>
    <html>
        <head>
            <!--instead of including a link to css, this php codes "lets" wp have control of the head-section-->
            <?php wp_head(); ?>
        </head>
        <body>
        <header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left"><a href="#"><strong>Learn</strong> Land</a></h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Programs</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Campuses</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </nav>
        <div class="site-header__util">
          <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
          <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>

        <!--note that the closing body and html tags aren't here. they are moved into the footer.php file for the purpose of adding the admin bar that runs at the top of our WP site. meditate on the index.php file and how get_footer is in it.  we don't want to close out the html and body within the header file--we want to close these at the VERY END of the html that gets generated which should include the html in the footer-->

<!DOCTYPE html>
    <html>
        <head>
            <!--instead of including a link to css, this php codes "lets" wp have control of the head-section-->
            <?php wp_head(); ?>
        </head>
        <body>
            <h1>LEARN LAND</h1>

        <!--note that the closing body and html tags aren't here. they are moved into the footer.php file for the purpose of adding the admin bar that runs at the top of our WP site. meditate on the index.php file and how get_footer is in it.  we don't want to close out the html and body within the header file--we want to close these at the VERY END of the html that gets generated which should include the html in the footer-->

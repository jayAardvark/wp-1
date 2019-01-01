Starting a custom WP theme

<?php
    function autoGen($name, $task) {
        echo "<p>Hello, I am $name and I enjoy $task.</p>";
    }

    autoGen("Joe", "Eating");
    autoGen("Sandra", "Reading");
?>

<h1><?php bloginfo('name'); ?></h1>
<h3><?php bloginfo('description'); ?></h3>

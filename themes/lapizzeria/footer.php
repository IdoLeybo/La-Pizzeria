
<footer>
    <?php
        $args = array(
                'theme_location' => 'header-menu',
                'container'      => 'nav',
                'after'          => '<span class="separator"> | </span>'
        );
        wp_nav_menu($args);
    ?>
    <div class="location">
        <p>Har Sinai 1, Moveo Group</p>
        <p>Phone Number: +972-52-646-0943</p>
    </div>
    <p class="copyright">All Rights Reserved 2021</p>
</footer>
<?php wp_footer() ?>
    </body>
</html>
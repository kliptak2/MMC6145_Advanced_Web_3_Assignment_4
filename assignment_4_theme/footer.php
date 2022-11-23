<footer>
    <div class="container">
        <div class="row">
            <div class ="col-md-12">
                <?php
                    dynamic_sidebar('footer-widget');
                ?>
                <?php
                    add_action ('wp_footer' , 'which_template_is_loaded');
                ?>
            </div>
        </div>
    </div>
</footer>
    <?php wp_footer(); ?>
    </body>
</html>

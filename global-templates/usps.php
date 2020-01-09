<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<?php

$po_usps = new WP_Query([
    'post_type'         => 'po_usps',
    'posts_per_page'    => 3,
    'order_by'          => 'title',
    'order'             => 'asc'
]); ?>

<!--jQuery-->
<script>
    $(document).ready(function(){
        $('.wrapper').css('display', 'none'),
        $('.wrapper').fadeIn(5000);
    })
</script>
        <?php
        //do we get anny usps?

if($po_usps->have_posts()) {
    //success
    ?>
    <div class="wrapper" id ="wrapper-ck-usps">
    
        <div id="usps-wrapper" class="container mt-3">
            <div class="rubrik col-5 md-5 xs-12 offset-3">
                <h1 class="text-center"><?php _e('Usps', 'portfolio'); ?></h1>
            </div>
                    <div class="row">

                        <!--Loop over the po_usps items-->
                        <?php
                        while($po_usps->have_posts()){
                            $po_usps->the_post();
                            get_template_part('loop-templates/content',     'usp'); ?>

                        <?php
                        }
                        //don't forget to reset postdata
                        wp_reset_postdata();
                        ?>

                    </div>
        
        </div>
    
    </div>
<?php
}
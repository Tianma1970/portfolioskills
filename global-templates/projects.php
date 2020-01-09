<?php


$po_projects = new WP_Query([
    'post_type'         => 'po_projects',
    'posts_per_page'    => 3,
    'order_by'          => 'title',
    'order'             => 'asc'
]);

    //do we get anu usps?

if($po_projects->have_posts()) {
    //success
    ?>
    <div class="wrapper mt-5" id ="wrapper-ck-bikerides">
    
        <div class="container">
        
            <h1 class="text-center"><?php _e('Projects', 'portfolio'); ?></h1>

            <div id="side-wrapper" class="row">
            
                <!--Loop over the ck_usp items-->
                <?php
                while($po_projects->have_posts()){
                    $po_projects->the_post();
                    get_template_part('loop-templates/content', 'project'); ?>

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


<?php
    get_header();
    ?>
   <br><br><br><br>
   <div class="row items">
        <!-- portfolio-wrapper -->
        <div id="portfolio-wrapper" class="bgrid-fourth s-bgrid-third tab-bgrid-half">
            <?php if( have_posts()) :
                $i=0;
                while(have_posts()) :
                    $i++; 
                    the_post();
            ?>
            <div class="bgrid folio-item">
               <div class="item-wrap">
                  <a href="#modal-0<?php echo strval($i) ?>">
                    <?php  the_post_thumbnail(); ?>
                    <div class="overlay"></div>                       
                        <div class="portfolio-item-meta">
                            <h5><?php the_title() ?></h5>
                            <p><?php the_category(" ") ?></p>
     				    </div> 
                    <div class="link-icon"><i class="fa fa-plus"></i></div>
                  </a>
                </div>
                <!-- modal popup
                ========================================================= -->
                <div id="modal-0<?php echo strval($i) ?>" class="popup-modal mfp-hide">
                    <div class="media">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="description-box">
                        <h4><?php the_title()?></h4>
                        <p><?php the_excerpt() ?></p>
                        <span class="categories"><?php the_category(", ") ?></span>
                    </div>
                    <div class="link-box group">
                    <a href="http://www.behance.net">Details</a>
                    <a href="#" class="popup-modal-dismiss">Close</a>         
                    </div>
                </div><!-- modal-01 end -->
            </div><!-- item end -->
            <?php
                endwhile;
                endif;
            ?>
        </div>
    </div>  <!-- end row -->

    <div class="row">
        <p><?php the_content( ) ?></p>
    </div>

<?php
    get_footer();
?>
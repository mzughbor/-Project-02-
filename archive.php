<?php
get_header();
?>
   <!-- portfolio
   ================================================== -->
   <section id="portfolio">
      <div class="row section-head">
      	<div class="twelve columns">
      		<h1><?php the_archive_title() ?><span>.</span></h1>
	         <hr/>               
	         <p> We create awesome and stunning digital solutions.
	         </p>
	      </div>
      </div> <!-- end section-head -->

    <div class="row items">
        <!-- portfolio-wrapper -->
        <div id="portfolio-wrapper" class="bgrid-fourth s-bgrid-third tab-bgrid-half">
            <?php 
            global $post;
            $thePostID = $post->ID;
            $post_id = get_post($thePostID);
            if( have_posts()) :
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
                    <a href="<?php echo get_permalink(); ?>">Details</a>
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
          
   </section> <!-- end portfolio -->


   <!-- Services Section
   ================================================== -->
   <section id="services">

   	<div class="row section-head">

      	<div class="twelve columns">
            
      		<h1>Our Awesome Services<span>.</span></h1>

	         <hr />      	         

	         <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
	         eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
	         voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	         </p>

	      </div>

      </div> <!-- end section-head -->

      <div class="row mobile-no-padding">      	

	      <div class="service-list bgrid-third s-bgrid-half tab-bgrid-whole group">
   
				<div class="bgrid">	              

	            <h3>Videography.</h3>                  

	            <div class="service-content">	                  
		            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	         		</p> 
	            </div>	              

			   </div> <!-- end bgrid -->

			   <div class="bgrid">	              

	            <h3>Photography.</h3>

	            <div class="service-content">		                  
		            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	        			</p> 
	            </div> 	               

			   </div> <!-- end bgrid -->

				<div class="bgrid">	              
	                  
	            <h3>Branding.</h3> 

	            <div class="service-content">	                  
		            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	         		</p> 
	            </div>                

				</div> <!-- end bgrid -->

			   <div class="bgrid">

	            <h3>Web Design.</h3>

	            <div class="service-content">	                  
		            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	        			</p> 
	            </div>	               

			   </div> <!-- end bgrid -->

			   <div class="bgrid">	               

	            <h3>Web Development.</h3>

	            <div class="service-content">
		            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	        			</p> 
	            </div>	               

			   </div> <!-- end bgrid -->

	      </div> <!-- end service-list -->	      

      </div> <!-- end row -->      

   </section> <!-- end services -->



   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

      <div class="row content flex-container">
    
         <div id="testimonial-slider" class="flexslider">

            <ul class="slides">
               <li>
                  <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is
                  to do what you believe is great work. And the only way to do great work is to love what you do.
                  If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.
                  </p>

                  <div class="testimonial-author">
                    	<img src="<?php echo get_theme_file_uri('images/avatars/avatar-1.jpg')?>" alt="Author image">
                    	<div class="author-info">
                    		Steve Jobs
                    		<span class="position">CEO, Apple.</span>
                    	</div>
                  </div>
             	</li> <!-- end slide -->

               <li>                       
                  <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                  Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                  nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                  </p>
                  <div class="testimonial-author">
                    	<img src="<?php echo get_theme_file_uri('images/avatars/avatar-2.jpg')?>" alt="Author image">
                    	<div class="author-info">
                    		John Doe
                    		<span>CEO, ABC Corp.</span>
                    	</div>
                  </div>                        
               </li> <!-- end slide -->

            </ul> <!-- end slides -->

         </div> <!-- end flexslider -->         
        
      </div> <!-- end row -->

   </section> <!-- end testimonials section -->  


   <!-- contact
   ================================================== -->
   <section id="contact">

   	<div class="row section-head">

   		<div class="twelve columns">

	         <h1>Get In Touch With Us<span>.</span></h1>

	         <hr />	        

	      </div>

      </div> <!-- end section-head -->

      <div class="row">
      	
      	<div id="contact-form" class="six columns tab-whole left">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action=""  >
      			<fieldset>

                  <div class="group">
 						   <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minLength="2" required />
                  </div>
                  <div>
	      			   <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required />
	               </div>
                  <div>
	     				   <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject"  value="" />
	               </div>                       
                  <div>
	                 	<textarea name="contactMessage"  id="contactMessage" placeholder="message" rows="10" cols="50" required ></textarea>
	               </div>                      
                  <div>
                     <button class="submitform">Submit</button>
                     <div id="submit-loader">
                        <div class="text-loader">Sending...</div>                             
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                  </div>

      			</fieldset>
      		</form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning"></div>
            <!-- contact-success -->
      		<div id="message-success">
               <i class="icon-ok"></i>Your message was sent, thank you!<br />
      		</div>

         </div>

         <div class="six columns tab-whole right">

            <p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 

	         <h3 class="address">Come Visit</h3>

	         <p>
            1600 Amphitheatre Parkway<br>
            Mountain View, CA<br>
            94043 US
            </p>

            <h3>Contact Numbers:</h3>
			   <p>Phone: (000) 555 1212<br>
			   	Mobile: (000) 555 0100<br>
			     	Fax: (000) 555 0101
			   </p>
               	
         </div>     	

      </div> <!-- end row -->     

   </section>  <!-- end contact -->

<?php
    get_footer();
?>
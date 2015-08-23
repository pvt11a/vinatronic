<?php get_header(); ?>
	<div id="bodySeparation" class="container"><div class="wrapper"></div></div>
		
		<div id="main" class="container">
			<div class="boxShadow wrapper paddingTop innerFloat">

				<?php get_sidebar('sanpham') ?>

				<div class="main lfloat">		
						<div class="innerFloat">				
        					<section role="main">	
            					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                          <?php the_content();?> 
                				<?php	 endwhile; endif; 
                                ?>
        					</section>							
						</div>
				
                    </div>
				</div>

			</div>
		</div>
<?php get_footer(); ?>
<?php get_header(); ?>
<div id="bodySeparation" class="container"><div class="wrapper"></div></div>
		
		<div id="main" class="container">
			<div class="boxShadow wrapper paddingTop innerFloat">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_sidebar('single-left') ?>
                
				<div class="mainContent lfloat">
					<div class="image">
                    <?php $categories = get_the_category( $post->ID );
                    foreach($categories as $catid ){
                        $idcat = $catid -> term_id;
                    } if ($idcat == 15) {the_post_thumbnail(); }?>
                    </div>
				
					<div class="breadcrumb">
						<?php if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
                        } ?>
					</div>
					
					<div class="content">
					
						<!-- NOI DUNG -->
						<div class="tjust">
                        
							<h1 style="font-size: 20px; color: #007cb6;"><?php the_title() ?></h1>
							<p><?php the_content() ?></p>
                            
						</div>
						<!-- END NOI DUNG -->

					</div>
					
				</div>
                <?php endwhile; endif; ?>
				<?php get_sidebar('new-right') ?>

			</div>
		</div>

<?php get_footer(); ?>
<?php get_header(); ?>
<section role="main">
<div id="bodySeparation" class="container"><div class="wrapper"></div></div>
		
	<div id="main" class="container">
			<div class="boxShadow wrapper paddingTop innerFloat">

				<?php get_sidebar('single-left') ?>

				<div class="main lfloat">
                <?php $cat = get_query_var('cat');  ?>
					<div class="image"><?php the_category_thumbnail($cat); ?></div>
				
					<div class="breadcrumb">
                    <?php if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
                    } ?>
					</div>
					
					<div id="project">
						
						<div class="list innerFloat">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    							<div class="item lfloat">
    								<div class="image"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a></div>
    								<div class="title s12 bold"><h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2></div>
    							</div>
							<?php endwhile;else: ?>
                                <h3 style="font-size: 17px; font-weight: bold; padding: 15px 10px;">không có bài viết nào trong danh mục này!</h3>
                          <?php  endif; ?>					
						</div>
						
						<div class="pagination tcenter ds innerFloat">
							<div class="ib">
								<!--phan trang-->
							</div>
						</div>
						
					</div>

				</div>

			</div>
		</div>
    	
</section>
<?php get_footer(); ?>
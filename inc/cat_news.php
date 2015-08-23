<?php get_header(); ?>
<section role="main">
<div id="bodySeparation" class="container"><div class="wrapper"></div></div>
		
		<div id="main" class="container">
			<div class="boxShadow wrapper paddingTop innerFloat">

				<?php get_sidebar('category') ?>

				<div class="mainContent lfloat">
                <?php $cat = get_query_var('cat');  ?>
					<div class="image"><?php the_category_thumbnail($cat); ?></div>
				
					<div class="breadcrumb">
                    <?php if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
                    } ?>
					</div>
					
					<div class="newsBox">
				        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            
                            <div class="item innerFloat">
							<div class="image lfloat"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?></a></div>
							<div class="info lfloat">
								<div class="title s14 bold"><h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2></div>
								<div class="excerpt"><p><p><?php the_content_rss('',true,'',40); ?></p></p></div>
								<div class="seemore"><a href="<?php the_permalink(); ?>">Xem thêm &raquo;</a></div>
							</div>
						</div>
                            
                        <?php endwhile;else: ?>
                            <h3 style="font-size: 17px; font-weight: bold; padding: 15px 10px;">không có bài viết nào trong danh mục này!</h3>
                        <?php endif; ?>
						
						
						<div class="pagination tcenter ds innerFloat">
							<div class="ib">
								<!--phan trang-->
							</div>
						</div>

					</div>
					
				</div>

				<?php get_sidebar('new-right') ?>

			</div>
		</div>
</section>
<?php get_footer(); ?>
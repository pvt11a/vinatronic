<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<div id="bodySeparation" class="container"><div class="wrapper"></div></div>
		
		<div id="main" class="container">
			<div class="boxShadow wrapper paddingTop innerFloat">

				<?php get_sidebar('sanpham') ?>

				<div class="main lfloat">
					<div class="image">
                        <div class="slider-wrapper theme-default container" id="pvt_slider">
                            <?php 
                                global $post;
                                $args = array('numberposts'=>10, 'cat'=>35 , 'orderby' => 'post_date','order' => 'ASC');
                                $random_posts = get_posts($args);
                                foreach($random_posts as $post) : setup_postdata($post); ?>
                                <div class="item"><?php the_post_thumbnail() ?></div>                               
                            <?php endforeach; wp_reset_query();?>          
                        </div>
                    </div>
					
					<div id="project">
						
						<div class="list innerFloat">

							<?php
                        		/**
                        		 * woocommerce_before_main_content hook
                        		 *
                        		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                        		 * @hooked woocommerce_breadcrumb - 20
                        		 */
                        		do_action( 'woocommerce_before_main_content' );
                        	?>
                        
                        		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                        
                        			<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>
                        
                        		<?php endif; ?>
                        
                        		<?php do_action( 'woocommerce_archive_description' ); ?>
                        
                        		<?php if ( have_posts() ) : ?>
                        
                        			<?php
                        				/**
                        				 * woocommerce_before_shop_loop hook
                        				 *
                        				 * @hooked woocommerce_result_count - 20
                        				 * @hooked woocommerce_catalog_ordering - 30
                        				 */
                        				do_action( 'woocommerce_before_shop_loop' );
                        			?>
                        
                        			<?php woocommerce_product_loop_start(); ?>
                        
                        				<?php woocommerce_product_subcategories(); ?>
                        
                        				<?php while ( have_posts() ) : the_post(); ?>
                        
                        					<?php wc_get_template_part( 'content', 'product' ); ?>
                        
                        				<?php endwhile; // end of the loop. ?>
                        
                        			<?php woocommerce_product_loop_end(); ?>
                        
                        			<?php
                        				/**
                        				 * woocommerce_after_shop_loop hook
                        				 *
                        				 * @hooked woocommerce_pagination - 10
                        				 */
                        				do_action( 'woocommerce_after_shop_loop' );
                        			?>
                        
                        		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
                        
                        			<?php wc_get_template( 'loop/no-products-found.php' ); ?>
                        
                        		<?php endif; ?>
                        
                        	<?php
                        		/**
                        		 * woocommerce_after_main_content hook
                        		 *
                        		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                        		 */
                        		do_action( 'woocommerce_after_main_content' );
                        	?>
						</div>
						
						
					</div>

				</div>

			</div>
		</div>

	

<?php get_footer( 'shop' ); ?>

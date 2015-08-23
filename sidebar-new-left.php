<aside role="complementary">
    <div class="leftSidebar lfloat">
    	<div class="categoryHeading upper white"><h2 style="text-align: center;"><?php the_category( ', ' ); ?></h2><a class="sprite-menu ib"></a></div>
    	<div class="cat">
    		<ul>
            <?php $categories = get_the_category( $post->ID );
                    foreach($categories as $catid ){
                        $idcat = $catid -> term_id;
                    }
                global $post;
                $args = array( 'cat'=>$idcat , 'orderby' => 'post_date','order' => 'ASC');
                $random_posts = get_posts($args);
                foreach($random_posts as $post) : setup_postdata($post); ?>
                <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
            <?php endforeach; wp_reset_query();?>
    		</ul>
    	</div>
    </div>
</aside>
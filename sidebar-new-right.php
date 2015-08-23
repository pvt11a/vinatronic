<aside role="complementary">
    <div class="rightSidebar lfloat">
		<div class="categoryHeading upper white"><h2>Sản phẩm</h2></div>
		<div class="cat">
        <ul class="wsubcategs">
            <?php
            $wsubargs = array(
                'hierarchical' => 1,
                'show_option_none' => '',
                'hide_empty' => 0,
                'parent' => 11,
                'taxonomy' => 'product_cat'
            );
            $wsubcats = get_categories($wsubargs);
            foreach ($wsubcats as $wsc):
            ?>
                <li>
                    <a href="<?php echo get_term_link( $wsc->slug, $wsc->taxonomy );?>"><h3><?php echo $wsc->name;?></h3></a>
                    
                </li>
            <?php endforeach;?>
            </ul>
		</div>
	</div>
</aside>
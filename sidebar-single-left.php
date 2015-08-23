<aside role="complementary">
    <div class="leftSidebar lfloat">
        <?php 
        $category = get_the_category($post->ID);

        $catid = $category[0]->cat_ID;
         
        $top_level_cat = smart_category_top_parent_id ($catid); ?>
    	<div class="categoryHeading upper white"><h2 style="text-align: center;"><?php echo get_cat_name( $top_level_cat ) ?></h2><a class="sprite-menu ib"></a></div>
    	<div class="cat">
    		<ul>
      <?php
              $categories =  get_categories('child_of='.$top_level_cat.'&hide_empty=0'); //hide_empty hien thi ca thu muc k co bai viet                
              foreach  ($categories as $category) {                   
              $category_link = get_category_link( $category->cat_ID);?>
                <li><a href="<?php echo $category_link ?>"><?php echo $category->name ?></a></li>
      <?php }  ?>
    		</ul>
    	</div>
    </div>
</aside>
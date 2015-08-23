<aside role="complementary">
    <div class="leftSidebar lfloat">
    	<div class="categoryHeading upper white"><h2 style="text-align: center;"><?php $cat = get_query_var('cat'); $catid = pa_category_top_parent_id ($cat); echo get_cat_name( $catid ) ?></h2><a class="sprite-menu ib"></a></div>
    	<div class="cat">
    		<ul>
             <?php 
                $catid = get_query_var('cat');//lay id cua danh muc hien tai
                $cat = pa_category_top_parent_id ($catid);// lay id danh muc cao nhat                
                $categories =  get_categories('child_of='.$cat.'&hide_empty=0'); //hide_empty hien thi ca thu muc k co bai viet                
                foreach  ($categories as $category) {                   
                $category_link = get_category_link( $category->cat_ID);?>
                <li><a href="<?php echo $category_link ?>"><?php echo $category->name ?></a></li>
            <?php }  ?>
    		</ul>
    	</div>
    </div>
</aside>
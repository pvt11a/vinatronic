<?php
$category = get_the_category($post->ID);

$catid = $category[0]->cat_ID;
 
$top_level_cat = smart_category_top_parent_id ($catid); 
if($top_level_cat == 15 ){
    include (TEMPLATEPATH . '/inc/single_congty.php' );
}else{
    include (TEMPLATEPATH . '/inc/single_default.php' );
}
?>
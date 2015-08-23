<?php
if(is_category(19) or is_category(20) or is_category(21) or is_category(22) ){
    include (TEMPLATEPATH . '/inc/cat_du_an.php' );
}else{
    include (TEMPLATEPATH . '/inc/cat_news.php' );
}
?>
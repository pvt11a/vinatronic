<!DOCTYPE HTML>
<html>
<head>
<meta name="author" content="pvt" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
<link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/images/searchbtn.PNG"/>
<?php if(is_404()) { ?>
    <title>Không tìm thấy - <?php echo get_bloginfo( 'name' ) ?></title>
<?php }elseif(is_category()){ ?>
    <title><?php single_cat_title(); ?> - <?php echo get_bloginfo( 'name' ) ?></title>
<?php }else{ ?>
   <title><?php wp_title( ' | ', true, 'right' ); ?></title> 
<?php } ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/plugin/owl-carousel/owl.carousel.css"/> 
<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/plugin/owl-carousel/owl.theme.css"/>
<?php if (is_search()) { ?><meta name="robots" content="noindex, nofollow" /><?php } ?>
	
     <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/custom.js"></script>
        <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/jquery.carouFredSel-6.2.1-packed.js"></script>
        <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/style.js"></script>
        <script src="<?php echo bloginfo('template_directory'); ?>/plugin/owl-carousel/owl.carousel.js"></script>   
        <script type="text/javascript"> 
            $(document).ready(function() {
                  $("#pvt_slider").owlCarousel({        
                      autoPlay: 5000, //Set AutoPlay to 3 seconds       
                      items : 1,
                      itemsDesktop : [1199,3],
                      itemsDesktopSmall : [979,3]         
                  });        
            });   
        </script>	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
		<div id="header" class="container">
			<div class="wrapper innerFloat">

				<div class="logo lfloat">
					<a href="<?php echo  get_site_url(); ?>"><img alt="AAA" src="<?php echo bloginfo('template_directory'); ?>/images/logo.png"/></a>
				</div>

				<div class="nav rfloat">
					<div class="list">
						<ul class="innerFloat">
							<li><a href="<?php echo  get_site_url(); ?>">Trang chủ</a></li>
							<li><a href="<?php echo  get_site_url(); ?>/lien-he">Liên hệ</a></li>
							<li>
                            
                                <?php global $woocommerce; ?>
                                <a class="header-cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('Xem giở hàng', 'Xem giở hàng'); ?>">
                                    <span id="cart-img"></span>
                                    <span class="header-cart-amount">
                                        <?php echo sprintf(_n('%d sản phẩm', '%d sản phẩm', $woocommerce->cart->cart_contents_count, 'Sản phẩm'), $woocommerce->cart->cart_contents_count);?>
                                    </span>
                                </a>
                            
                            </li>
                            <li>
                            
                                <?php if ( is_user_logged_in() ) { ?>
                                    <div class="site-header-right-link"><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Thông tin khách hàng','topshop'); ?>"><?php _e('Thông tin khách hàng','Thông tin khách hàng'); ?></a></div>
                                <?php } else { ?>
                                    <div class="site-header-right-link"><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Đăng nhập','Đăng nhập'); ?>"><?php _e('Đăng nhập/ Đăng ký','Đăng ký'); ?></a></div>
                                <?php } ?>
                            
                            </li>
						</ul>
					</div>
					<div class="searchBox rfloat innerFloat">
                    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Tìm kiếm sản phẩm')) : else : ?><?php endif; ?>
						<a class="sprite ib catToggle ds"></a>
						<div class="cat">
							<ul>
								<li><a href="<?php echo  get_site_url(); ?>/lien-he">Liên hệ</a></li>
								<li><a href="#">English</a></li>
								<li><a href="#">Tiếng Việt</a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
		
		<div id="navigation" class="container">
			<div class="wrapper innerFloat">
				<div class="list upper s12">
					<ul class="innerFloat">
						<li>
							<a>Công ty</a>
							<div class="sub">
								<ul>
                                 <?php 
                                    global $post;
                                    $args = array( 'cat'=>15 , 'orderby' => 'post_date','order' => 'ASC');
                                    $random_posts = get_posts($args);
                                    foreach($random_posts as $post) : setup_postdata($post); ?>
                                    <li><a href="<?php the_permalink() ?>"><?php the_title() ?> </a></li>
                                <?php endforeach; wp_reset_query();?>
								</ul>
							</div>
						</li>
						<li id="launchSubMenu"><a href="<?php echo  get_site_url(); ?>/danh-muc/san-pham">Sản phẩm</a></li>
						<li><a href="<?php echo  get_site_url(); ?>/du-an">Dự án</a></li>
						<li><a href="<?php echo  get_site_url(); ?>/ho-tro">Hỗ trợ</a></li>
						<li><a href="<?php echo  get_site_url(); ?>/tin-tuc">Tin tức</a></li>
						<li><a href="<?php echo  get_site_url(); ?>/co-hoi-nghe-nghiep">Cơ hội nghề nghiệp</a></li>
					</ul>
					
					<!-- PRODUCT SUB MENU -->
					<div id="subProduct" class="subProduct">
						<div class="inner innerFloat">
							<ul class="cat lfloat">
								<li class="heading bold upper default">Thiết bị điện và phụ kiện</li>
								<li class="item innerFloat">
									<a href="<?php echo  get_site_url(); ?>/danh-muc/san-pham/thiet-bi-do" class="image lfloat"><img alt="Thiet bi do" src="<?php echo bloginfo('template_directory'); ?>/images/thietbido.jpg"/></a>
									<a href="<?php echo  get_site_url(); ?>/danh-muc/san-pham/thiet-bi-do" title="AAA" class="name lfloat">Thiết bị đo</a>
								</li>
								<li class="item innerFloat">
									<a href="<?php echo  get_site_url(); ?>/danh-muc/san-pham/dung-cu-thiet-bi-thi-cong" class="image lfloat"><img alt="Thi cong" src="<?php echo bloginfo('template_directory'); ?>/images/thicong.jpg"/></a>
									<a href="<?php echo  get_site_url(); ?>/danh-muc/san-pham/dung-cu-thiet-bi-thi-cong" class="name lfloat">Dụng cụ - thiết bị thi công</a>
								</li>
								<li class="item innerFloat">
									<a href="<?php echo  get_site_url(); ?>/danh-muc/san-pham/phu-kien-duong-day-va-tram" class="image lfloat"><img alt="duogng day" src="<?php echo bloginfo('template_directory'); ?>/images/duongday.jpg"/></a>
									<a href="<?php echo  get_site_url(); ?>/danh-muc/san-pham/phu-kien-duong-day-va-tram" class="name lfloat">Phụ kiện đường dây và trạm</a>
								</li>
							</ul>
							
							<ul class="cat lfloat">
								<li class="heading bold upper default">Bảo hộ lao động</li>
								<li class="item innerFloat">
									<a href="<?php echo  get_site_url(); ?>/danh-muc/san-pham/bao-ho-than-the" class="image lfloat"><img alt="bao ho" src="<?php echo bloginfo('template_directory'); ?>/images/baoho.jpg"/></a>
									<a href="<?php echo  get_site_url(); ?>/danh-muc/san-pham/bao-ho-than-the" class="name lfloat">Bảo hộ thân thể</a>
								</li>
								<li class="item innerFloat">
									<a href="<?php echo  get_site_url(); ?>/danh-muc/san-pham/bao-ho-tung-phan" class="image lfloat"><img alt="bao ho tung phan" src="<?php echo bloginfo('template_directory'); ?>/images/tungphan.jpg"/></a>
									<a href="<?php echo  get_site_url(); ?>/danh-muc/san-pham/bao-ho-tung-phan" class="name lfloat">Bảo hộ từng phần</a>
								</li>
								<li class="item innerFloat">
									<a href="<?php echo  get_site_url(); ?>/danh-muc/san-pham/bao-ho-lao-dong-khac" class="image lfloat"><img alt="bao ho lao dong khac" src="<?php echo bloginfo('template_directory'); ?>/images/laodong.jpg"/></a>
									<a href="<?php echo  get_site_url(); ?>/danh-muc/san-pham/bao-ho-lao-dong-khac" class="name lfloat">Bảo hộ lao động khác</a>
								</li>
							</ul>
							
							<ul class="cat lfloat">
								<li class="heading bold upper default">Thiết bị khác</li>
								<li class="item innerFloat">
									<a href="<?php echo  get_site_url(); ?>/danh-muc/san-pham/thiet-bi-pccc" class="image lfloat"><img alt="thiet bi phong chay chua chay" src="<?php echo bloginfo('template_directory'); ?>/images/pccc.jpg"/></a>
									<a href="<?php echo  get_site_url(); ?>/danh-muc/san-pham/thiet-bi-pccc" class="name lfloat">Thiết bị pccc</a>
								</li>
								<li class="item innerFloat">
									<a href="<?php echo  get_site_url(); ?>/danh-muc/san-pham/thiet-bi-cong-nghiep" class="image lfloat"><img alt="thiet bi cong nghiep" src="<?php echo bloginfo('template_directory'); ?>/images/thietbij.jpg"/></a>
									<a href="<?php echo  get_site_url(); ?>/danh-muc/san-pham/thiet-bi-cong-nghiep" class="name lfloat">Thiết bị công nghiệp</a>
								</li>
							</ul>
						</div>
					</div> <!-- END -->
					
					<!-- RESPONSIVE MENU -->
					<div id="responsiveMiddleMenu" class="responsiveMenu tcenter ds">
						<a class="toggle" href="javascript:void(0)"><img alt="Đóng mở Menu" src="<?php echo bloginfo('template_directory'); ?>/images/menu-toggle.png"></a>
					</div>
					
					<div id="responsiveMiddleMenuContent" style="max-height: 568px;">
						<div class="content">
							<ul>
								<li><a href="">Kệ Tủ Bếp Gỗ</a></li>
								<li>
									<a href="">Kệ Tủ Bếp Gỗ</a>
									<ul>
										<li><a href="http://ketubep.vn/danh-muc/ke-tu-bep-go-hinh-ve">Kệ Tủ Bếp Gỗ - Hình Vẽ</a></li>
										<li><a href="http://ketubep.vn/danh-muc/ke-tu-bep-go-chi-tiet">Kệ Tủ Bếp Gỗ - Chi Tiết</a></li>
										<li><a href="http://ketubep.vn/danh-muc/ke-tu-bep-go-co-dien">Kệ Tủ Bếp Gỗ Cổ Điển</a></li>
									</ul>
								</li>
								<li><a href="">Kệ Tủ Bếp Gỗ</a></li>
								<li><a href="">Kệ Tủ Bếp Gỗ</a></li>
								<li><a href="">Kệ Tủ Bếp Gỗ</a></li>
							</ul>
						</div>
					</div>
					<!-- END OF RESPONSIVE MENU -->
					
				</div>
			</div>
		</div>
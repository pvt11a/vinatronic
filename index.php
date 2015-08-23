<?php get_header(); ?>		
		<div id="main" class="container">
			<div class="boxShadow wrapper">
			
				<div class="slideshow innerFloat">
					<div class="slider lfloat">
						<div class="cont innerFloat">
                        
                         <?php 
                            global $post;
                            $args = array('numberposts'=>1, 'cat'=>14 , 'orderby' => 'post_date','order' => 'ASC');
                            $random_posts = get_posts($args);
                            foreach($random_posts as $post) : setup_postdata($post); ?>
                            <div class="slide lfloat"><?php the_post_thumbnail() ?></div>
                        <?php endforeach; wp_reset_query();?>
                        
                        <?php 
                            global $post;
                            $args = array('numberposts'=>9, 'cat'=>14 , 'orderby' => 'post_date','order' => 'ASC','offset' => 1);
                            $random_posts = get_posts($args);
                            foreach($random_posts as $post) : setup_postdata($post); ?>
                            <div class="slide lfloat hidden"><?php the_post_thumbnail() ?></div>
                        <?php endforeach; wp_reset_query();?>						
                        </div>
					</div>
					<div class="elemBox lfloat">
						<div class="cont">
							<ul>
								<li class="active"><a>Thiết bị - điện công nghiệp</a></li>                             
								<li><a>Dụng cụ an toàn lao động</a></li>
                                <li><a>Quần áo an toàn lao động</a></li>
								<li><a>Dụng cụ -  thiết bị thi công</a></li>
								<li><a>Dụng cụ -  thiết bị đo lường</a></li>
								<li><a>Máy tính - thiết bị viễn thông</a></li>
								<li><a>Máy tính văn phòng</a></li>
								<li><a>Bàn ghế văn phòng cao cấp</a></li>
								<li><a>Đối tác</a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="breadcrumb">
					<ul class="innerFloat">
						<li class="lfloat"><a href="#" class="sprite home ib"></a></li>
						<li class="lfloat default">Trang chủ</li>
					</ul>
				</div>
				
				<div class="categorySlider">
					<div class="slider">
						<div class="cont innerFloat">

							<div class="item lfloat innerFloat">
								<div class="image lfloat"><a href="#"><img alt="AAA" src="<?php echo bloginfo('template_directory'); ?>/images/temp2.jpg"></a></div>
								<div class="info lfloat">
									<div class="title s25 bold"><a href="#" title="AAA"><h2>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, dui massa, facilisis ac a arcu</h2></a></div>
									<div class="excerpt lfloat s16">Proin et, quam ligula sodales dui, nec velit semper et pede consequat ligula, et amet suscipit libero. Ac interdum vehicula in sed non platea. Rhoncus vestibulum ipsum, pede a aliquam posuere, proin fermentum quis ligula suscipit. In rutrum imperdiet voluptas imperdiet donec vitae, adipiscing nunc, tempus sem, posuere non ridiculus ac officia, vestibulum id torquent mi vel.</div>
									<div class="seemore clear"><a href="#" class="ib upper">Xem chi tiết</a></div>
								</div>
							</div>
							
							<div class="item lfloat innerFloat">
								<div class="image lfloat"><a href="#"><img alt="AAA" src="<?php echo bloginfo('template_directory'); ?>/images/temp2.jpg"></a></div>
								<div class="info lfloat">
									<div class="title s25 bold"><a href="#" title="AAA"><h2>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, dui massa, facilisis ac a arcu</h2></a></div>
									<div class="excerpt lfloat s16">Proin et, quam ligula sodales dui, nec velit semper et pede consequat ligula, et amet suscipit libero. Ac interdum vehicula in sed non platea. Rhoncus vestibulum ipsum, pede a aliquam posuere, proin fermentum quis ligula suscipit. In rutrum imperdiet voluptas imperdiet donec vitae, adipiscing nunc, tempus sem, posuere non ridiculus ac officia, vestibulum id torquent mi vel.</div>
									<div class="seemore clear"><a href="#" class="ib upper">Xem chi tiết</a></div>
								</div>
							</div>
							
							<div class="item lfloat innerFloat">
								<div class="image lfloat"><a href="#"><img alt="AAA" src="<?php echo bloginfo('template_directory'); ?>/images/temp2.jpg"></a></div>
								<div class="info lfloat">
									<div class="title s25 bold"><a href="#" title="AAA"><h2>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, dui massa, facilisis ac a arcu</h2></a></div>
									<div class="excerpt lfloat s16">Proin et, quam ligula sodales dui, nec velit semper et pede consequat ligula, et amet suscipit libero. Ac interdum vehicula in sed non platea. Rhoncus vestibulum ipsum, pede a aliquam posuere, proin fermentum quis ligula suscipit. In rutrum imperdiet voluptas imperdiet donec vitae, adipiscing nunc, tempus sem, posuere non ridiculus ac officia, vestibulum id torquent mi vel.</div>
									<div class="seemore clear"><a href="#" class="ib upper">Xem chi tiết</a></div>
								</div>
							</div>
							
						</div>
					</div>
					
					<div class="nav ds"><a class="sprite prev slider-nav-prev"></a><a class="sprite next slider-nav-next"></a></div>
					<div class="categorySliderPagination ds"></div>
				</div>
				
			</div>
		</div>

		<div id="footerCategory" class="container">
			<div class="boxShadow wrapper innerFloat">

				<div class="item lfloat">
					<div class="heading s12 upper white"><h2>Tin tức</h2></div>
					<div class="image"><img src="<?php echo bloginfo('template_directory'); ?>/images/tintuc.jpg" alt="tin tuc"/></div>
					<div class="list s12">
						<ul>
							 <?php 
                                global $post;
                                $args = array( 'cat'=>2 ,'numberposts'=>3, 'orderby' => 'post_date','order' => 'DESC');
                                $random_posts = get_posts($args);
                                foreach($random_posts as $post) : setup_postdata($post); ?>
                                <li><a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a></li>
                            <?php endforeach; wp_reset_query();?>
						</ul>
					</div>
				</div>

				<div class="item lfloat">
					<div class="heading s12 upper white"><h2>Dự án</h2></div>
					<div class="image"><img src="<?php echo bloginfo('template_directory'); ?>/images/duan.jpg" alt="duan"/></div>
					<div class="list s12">
						<ul>
						<?php 
                                global $post;
                                $args = array( 'cat'=>19 ,'numberposts'=>3, 'orderby' => 'post_date','order' => 'DESC');
                                $random_posts = get_posts($args);
                                foreach($random_posts as $post) : setup_postdata($post); ?>
                                <li><a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a></li>
                            <?php endforeach; wp_reset_query();?>
						</ul>
					</div>
				</div>
				
				<div class="item lfloat">
					<div class="heading s12 upper white"><h2>Công ty</h2></div>
					<div class="image"><img src="<?php echo bloginfo('template_directory'); ?>/images/congty.jpg" alt="cong ty"/></div>
					<div class="list s12">
						<ul>
                            <?php 
                                global $post;
                                $args = array( 'cat'=>15 ,'numberposts'=>3, 'orderby' => 'post_date','order' => 'DESC');
                                $random_posts = get_posts($args);
                                foreach($random_posts as $post) : setup_postdata($post); ?>
                                <li><a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a></li>
                            <?php endforeach; wp_reset_query();?>
						</ul>
					</div>
				</div>
				
				<div class="item lfloat">
					<div class="heading s12 upper white"><h2>Cơ hội nghề nghiệp</h2></div>
					<div class="image"><img src="<?php echo bloginfo('template_directory'); ?>/images/nghenghiep.jpg" alt="nghe nghiep"/></div>
					<div class="list s12">
						<ul>
							 <?php 
                                global $post;
                                $args = array( 'cat'=>16 ,'numberposts'=>3, 'orderby' => 'post_date','order' => 'DESC');
                                $random_posts = get_posts($args);
                                foreach($random_posts as $post) : setup_postdata($post); ?>
                                <li><a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a></li>
                            <?php endforeach; wp_reset_query();?>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
<?php get_footer(); ?>
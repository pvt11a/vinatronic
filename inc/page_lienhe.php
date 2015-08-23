<?php get_header(); ?>
	<div id="bodySeparation" class="container"><div class="wrapper"></div></div>
		
		<div id="main" class="container">
			<div class="boxShadow wrapper paddingTop innerFloat">

				<?php get_sidebar('sanpham') ?>

				<div class="main lfloat">
					<div class="image"><img src="<?php echo bloginfo('template_directory'); ?>/images/lienhe.jpg" alt="lien he"/></div>
				
					<div class="breadcrumb">
						<ul class="innerFloat">
							<li class="lfloat"><a href="<?php echo  get_site_url(); ?>" class="sprite home ib"></a></li>
							<li class="lfloat"><a href="<?php echo  get_site_url(); ?>">Trang chủ</a></li>
							<li class="lfloat default">Liên hệ</li>
						</ul>
					</div>
					
					<div id="contact">
						<div class="heading white s14 upper bold"><i class="sprite phone"></i> <h2 class="ib">Liên hệ</h2></div>
						<div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3919.347259262836!2d106.68460720000002!3d10.7846931!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f2f2ef7f75d%3A0x70ce96249e782b80!2zTMO9IENow61uaCBUaOG6r25nLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1432094592522" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
						</div>
						<div class="innerFloat">
							<div class="form lfloat">
								
				
					
					
					
        					<section role="main">	
            					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                          <p> <?php the_content();?> </p>
                				<?php	 endwhile; endif; 
                                ?>
        					</section>	
				

				
							</div>
							<div class="info lfloat">
								<div class="boxHeading s14 bold upper blue"><h2>GR SATAKE ENGINEERING (VIỆT NAM)</h2></div>
								<div>
									<div class="tjust">
										<p>Mang đến những máy móc, thiết bị hiệu quả nhất và được sự hài lòng của quí vị là niềm vinh hạnh của công ty chúng tôi.</p>
										<div class="addr"><img class="readmore" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAKCAMAAACg0N8BAAAAPFBMVEVQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8qdZp3MAAAAE3RSTlMABBElJkRFamuAlJWWurvZ2u77BkLuQAAAADNJREFUCNclxbcBwCAMADBBeiEU//9rBrTIk0CUDFfUZd63+ThId4xTLtF3arQV8WV4E/w4NwGbPkNpiwAAAABJRU5ErkJggg=="> Copac Square số 12 Tôn Đản, P.13, Quận 4, TP.HCM.</div>
										<div class="addr"><img class="readmore" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAKCAMAAACg0N8BAAAAPFBMVEVQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8qdZp3MAAAAE3RSTlMABBElJkRFamuAlJWWurvZ2u77BkLuQAAAADNJREFUCNclxbcBwCAMADBBeiEU//9rBrTIk0CUDFfUZd63+ThId4xTLtF3arQV8WV4E/w4NwGbPkNpiwAAAABJRU5ErkJggg=="> 08-3941 2431 · 3941 2441</div>
										<div class="addr"><img class="readmore" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAKCAMAAACg0N8BAAAAPFBMVEVQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8qdZp3MAAAAE3RSTlMABBElJkRFamuAlJWWurvZ2u77BkLuQAAAADNJREFUCNclxbcBwCAMADBBeiEU//9rBrTIk0CUDFfUZd63+ThId4xTLtF3arQV8WV4E/w4NwGbPkNpiwAAAABJRU5ErkJggg=="> Info@satake.vn</div>
										<div class="addr"><img class="readmore" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAKCAMAAACg0N8BAAAAPFBMVEVQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8pQm8qdZp3MAAAAE3RSTlMABBElJkRFamuAlJWWurvZ2u77BkLuQAAAADNJREFUCNclxbcBwCAMADBBeiEU//9rBrTIk0CUDFfUZd63+ThId4xTLtF3arQV8WV4E/w4NwGbPkNpiwAAAABJRU5ErkJggg=="> www.satake.vn</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
<?php get_footer(); ?>
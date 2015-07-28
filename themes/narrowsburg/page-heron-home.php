<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

		<!--Masthead=====================================================================-->
		<section id="heron-home">
			<div class="container">
				<div class="sixteen columns">
					<div class="masthead">
						<div class="logo-masthead">
							<img src="<?php echo get_template_directory_uri(); ?>/img/heron-logo-bird.png">
							<div class="heron-title">
								<img src="<?php echo get_template_directory_uri(); ?>/img/theheron.png" alt="The Heron">
							</div>
						</div>
						<div class="logo-masthead-wide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/nameplate.png">
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--News ========================================================================-->
		<section id="news">
			<div class="container">
				<div class="sixteen columns">
					<div class="news-wrapper">
						<h1>Here's the latest...</h1>
						<div id="news-nav">
							<div class="news-dot dot-1 circle-nav-on"></div>
							<div class="news-dot dot-2 circle-nav-off"></div>
							<div class="news-dot dot-3 circle-nav-off"></div>
							<div class="news-dot dot-4 circle-nav-off"></div>
						</div>
						<ul id="news-list">
						<?php query_posts( array ( 'post_type' => 'news_entries', 'posts_per_page' => 4, 'orderby' => 'ASC' ) );
							if ( have_posts() ):
								while ( have_posts() ) : the_post();
									$news_entry = get_field( 'news' );
									$date = get_the_date();
									if ( ! empty ( $news_entry ))
										echo '<li class="news-item hide-news">';
										echo '<p class="news-date">'.$date.'</p>';
										echo '<p>'.$news_entry.'</p>';
										echo '</li>';
								endwhile;
							endif; ?>
						</ul>
					</div><!-- //Sixteen Columns-->
				</div><!-- //News Wrapper-->
			</div><!-- //Container-->
		</section>

		<section id="img-break-2"></section>


		<!--Menu-->
		<section id="menu">
			<div class="container">
				<div class="menu-title-wrapper">
					<h1>Menu</h1>
				</div>
				<!--Brunch Menu =========================================================-->
	        	<div class="menu-brunch eight columns alpha">
	        		<h2>Brunch</h2>
							<img src="http://theheronrestaurant.com/wp-content/uploads/2015/06/IMG_5619.jpg">
					<?php query_posts( array ( 'post_type' => 'brunch_menu_items', 'posts_per_page' => -1, 'orderby' => 'ASC' ) );

					if ( have_posts() ):

					echo '<ul>';
						while ( have_posts() ) : the_post();

							echo the_title( '<h3>', '</h3>');

							$brunch_category_note = get_field( 'brunch_category_note' );
							if ( ! empty ( $brunch_category_note ))
							echo '<p class="note">'.$brunch_category_note.'</p>';

							/* Loop through a Repeater field */

							if( get_field('brunch_menu_item') )
							{

								while( has_sub_field('brunch_menu_item') )
								{
									$brunch_title = get_sub_field('title');
										echo '<li>'.$brunch_title;
									$price_1 = $price_1 = get_sub_field( "price_1" );
									if ( ! empty ( $price_1 ) )
										echo'<span class="price">'.$price_1.'</span>';
									$price_2 = get_sub_field( "price_2" );
									if ( ! empty ( $price_2 ) )
										echo'<span class="price"> | '.$price_2.'</span>';
									$item_note = get_sub_field('item_note');
									if ( ! empty ( $item_note ) )
										echo'<small>'.$item_note.'</small>';
									echo '</li>';
								}
							}

						endwhile;

					echo '</ul>';

					endif; ?>
	        	</div>

	       	 	<!--Dinner Menu =========================================================-->
	        	<div class="menu-dinner eight columns omega">
	        		<h2>Dinner</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/dinner.jpg" alt="Dinner at The Heron">

					<?php query_posts( array ( 'post_type' => 'dinner_menu_items', 'posts_per_page' => -1, 'orderby' => 'ASC' ) );

					if ( have_posts() ):

					echo '<ul>';
						while ( have_posts() ) : the_post();

							echo the_title( '<h3>', '</h3>');

							$dinner_category_note = get_field( 'dinner_category_note' );
							if ( ! empty ( $dinner_category_note ))
							echo '<p class="note">'.$dinner_category_note.'</p>';

							/* Loop through a Repeater field */

							if( get_field('dinner_menu_item') )
							{

								while( has_sub_field('dinner_menu_item') )
								{
									$dinner_title = get_sub_field('title');
										echo '<li>'.$dinner_title;
									$price_1 = $price_1 = get_sub_field( "price_1" );
									if ( ! empty ( $price_1 ) )
										echo'<span class="price">'.$price_1.'</span>';
									$price_2 = get_sub_field( "price_2" );
									if ( ! empty ( $price_2 ) )
										echo' <span class="seperator">|</span> <span class="price">'.$price_2.'</span>';
									$item_note = get_sub_field('item_note');
									if ( ! empty ( $item_note ) )
										echo'<small>'.$item_note.'</small>';
									echo '</li>';
								}
							}

						endwhile;

					echo '</ul>';

					endif; ?>
				</div>

				<div class="sixteen columns alpha">
					<p class="menu-notes">Our menu proudly features the following local farms & resources:
The Ant Hill Farm, Quails R Us, Silver Heights Farm, Tonjes Farm, 2 Cousins Fish, Augusta Acres Farm, Calkins Creamery, Beach Lake Bakery & Java Love Coffee</p>

					<p class="menu-notes">We love you, but sorry, NO SUBSTITUTIONS</p>
				</div>
			</div>
		</section>

		<section id="img-break-4"></section>
		<section id="menu-drinks">
			<div class="container">
				<!--Wine & Cocktail Menu =========================================================-->
	        	<div class="menu-drinks eight columns alpha">
	        		<h2>Wine & Cocktails</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/heron-website-031.jpg" alt="Drinks at The Heron">
					<?php query_posts( array ( 'post_type' => 'wine_menu_items', 'posts_per_page' => -1, 'orderby' => 'ASC' ) );

					if ( have_posts() ):

					echo '<ul>';
						while ( have_posts() ) : the_post();

							echo the_title( '<h3>', '</h3>');

							$wine_category_note = get_field( 'wine_&_cocktail_category_note' );
							if ( ! empty ( $wine_category_note ))
							echo '<p class="note">'.$wine_category_note.'</p>';

							/* Loop through a Repeater field */

							if( get_field('wine_&_cocktail_menu_item') )
							{

								while( has_sub_field('wine_&_cocktail_menu_item') )
								{
									$wine_title = get_sub_field('title');
										echo '<li>'.$wine_title;
									$price_1 = $price_1 = get_sub_field( "price_1" );
									if ( ! empty ( $price_1 ) )
										echo'<span class="price">'.$price_1.'</span>';
									$price_2 = get_sub_field( "price_2" );
									if ( ! empty ( $price_2 ) )
										echo'<span class="seperator">|</span> <span class="price">'.$price_2.'</span>';
									$item_note = get_sub_field('item_note');
									if ( ! empty ( $item_note ) )
										echo'<small>'.$item_note.'</small>';
									echo '</li>';
								}
							}

						endwhile;

					echo '</ul>';

					endif; ?>
				</div>

				<!--Cider & Beer Menu =========================================================-->
	        	<div class="menu-drinks eight columns omega">
	        		<h2>Cider & Beer</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/heron-stpatricks-003-WEB.jpg" alt="Drinks at The Heron">
					<?php query_posts( array ( 'post_type' => 'beer_menu_items', 'posts_per_page' => -1, 'orderby' => 'ASC' ) );
					if ( have_posts() ):

					echo '<ul>';
						while ( have_posts() ) : the_post();

							echo the_title( '<h3>', '</h3>');

							$beer_category_note = get_field( 'cider_&_beer_category_note' );
							if ( ! empty ( $beer_category_note ))
							echo '<p class="note">'.$beer_category_note.'</p>';

							/* Loop through a Repeater field */

							if( get_field('cider_&_beer_menu_item') )
							{

								while( has_sub_field('cider_&_beer_menu_item') )
								{
									$beer_title = get_sub_field('title');
										echo '<li>'.$beer_title;
									$price_1 = $price_1 = get_sub_field( "price_1" );
									if ( ! empty ( $price_1 ) )
										echo'<span class="price">'.$price_1.'</span>';
									$price_2 = get_sub_field( "price_2" );
									if ( ! empty ( $price_2 ) )
										echo'<span class="price">'.$price_2.'</span>';
									$item_note = get_sub_field('item_note');
									if ( ! empty ( $item_note ) )
										echo'<small>'.$item_note.'</small>';
									echo '</li>';
								}
							}

						endwhile;

					echo '</ul>';

					endif; ?>

				</div>
			</div>
		</section><!--// Menu-->

		<section id="img-break-hours"></section>

		<!-- Hours-->
		<section id="hours">
			<div class="container">
				<div class="sixteen columns">
					<h1>Hours</h1>
					<?php query_posts( array ( 'post_type' => 'hours_entries', 'posts_per_page' => 1, 'orderby' => 'ASC' ) );

						if ( have_posts() ):

						echo '<ul>';
							while ( have_posts() ) : the_post();

								echo the_title( '<h3 class="hours-season">', '</h3>');

								/* Loop through a Repeater field */

								if( get_field('weekly_hours') )
								{

									while( has_sub_field('weekly_hours') )
									{
										$day_initial = get_sub_field('day_initial');
											echo '<li class="hours-column"><div class="hours-day"><h2>'.$day_initial.'</h2></div>';

										$hours_1 = get_sub_field( "hours_1" );
										if ( ! empty ( $hours_1 ) )
											echo'<time class="the-hours">'.$hours_1.'<br>';

										$hours_2 = get_sub_field( "hours_2" );
										if ( ! empty ( $hours_2 ) )
											echo $hours_2.'<br>';

										$hours_3 = get_sub_field('hours_3');
										if ( ! empty ( $hours_3 ) )
											echo $hours_3;

										echo '</time></li>';
									}
								}

							endwhile;

						echo '</ul>';

					endif; ?>
				</div>
			</div>
		</section><!--// Hours -->

		<!-- Our Story -->
		<section id="our-story">
			<div class="container">
				<div class="six columns alpha">
					<img src="<?php echo get_template_directory_uri(); ?>/img/marla_paul.png" alt="Marla and Paul">
				</div>
				<div class="nine columns offset-by-one omega">
					<h1>Our Story</h1>
					<p>What is there to tell? A small-town girl with roots in restaurants moves to the big city to fulfill her fantasy of working in television. A city boy, born and raised in Detroit, goes to the Culinary Institute of America and moves to NYC, with hopes of running a restaurant of his own someday.</p>

					<p>While they don’t know it yet, the roots of The Heron start years ago when Marla and Paul meet on the set of “Inner Chef with Marcus Samuelson”, Paul working behind the scenes as a food stylist & Sous chef  & Marla working as the series producer. After years in the city talking about opening a restaurant, their dream becomes a reality, in a very unexpected place, Narrowsburg, New York. Inspired by the vast resources of the region, Marla and Paul relocate to Sullivan County with the hopes of creating a restaurant that is community driven and locally sustainable. Their goal: to provide the region with great food and a comfortable atmosphere where everyone is welcome.</p>

					<blockquote>“We believed we could, so we did. The rest of the story is yet to be written…”</blockquote>

					<p>Marla & Paul</p>
				</div>
			</div>
		</section><!--// Our Story-->

		<section id="img-break-catering"></section>

		<!-- Catering -->
		<section id="catering">
			<div class="container">
				<div class="catering-wide">
					<div class="five columns alpha">
						<h1>Catering</h1>
						<p>The Heron recognizes that all events are unique.  We strive to ensure that your event reflects your needs & expectations. Sample menus are available upon request; however, knowing the needs of our clients first is the most important aspect in developing a menu for your occasion. Please contact us and tell us about your event.</p>
					</div>
					<div class="ten columns offset-by-one omega">
						<img class="cater-img1" src="<?php echo get_template_directory_uri(); ?>/img/catering.jpg" alt="Catering by The Heron">
					</div>

				</div>

				<div class="catering-narrow">
					<div class="five columns offset-by-one">
						<img class="cater-img1" src="<?php echo get_template_directory_uri(); ?>/img/catering.jpg" alt="Catering by The Heron">
					</div>
					<div class="nine columns">
						<h1>Catering</h1>
						<p>The Heron recognizes that all events are unique.  We strive to ensure that your event reflects your needs & expectations. Sample menus are available upon request; however, knowing the needs of our clients first is the most important aspect in developing a menu for your occasion. Please contact us and tell us about your event.</p>
					</div>
				</div>

			</div>
		</section><!--// Catering-->

		<section id="img-break-3"></section>

		<!--Suppliers-->
		<section id="suppliers">
			<div class="container">
				<div class="five columns alpha supply-hook">
					<img src="<?php echo get_template_directory_uri(); ?>/img/suppliers.jpg" alt="Suppliers">
				</div>
				<div class="nine columns offset-by-one">
					<h1>Our Suppliers</h1>
					<p>We are so proud to be working with the local farmers and artisan producers here in the Upper Delaware region. We've had the opportunity to meet so many great people, visit some farms and feature all of the top-quality products that they provide us. Being a small business, we know how important local economies are to a community. Each time you visit our restaurant, we like to think that you aren't just supporting us, but you're supporting a wider group of local farms and artisan producers as well. So who are all of these great folks? Take a look below to check see who are the 'Roots & Marrow' of what we do.</p>

					<?php query_posts( array ( 'post_type' => 'suppliers_entries', 'posts_per_page' => 1, 'orderby' => 'ASC' ) );

						if ( have_posts() ):

						echo '<ul class="supplier-links">';
							while ( have_posts() ) : the_post();

								/* Loop through a Repeater field */

								if( get_field('supplier_links') )
								{

									while( has_sub_field('supplier_links') )
									{
										$supplier_name = get_sub_field('supplier_name');
										$supplier_link = get_sub_field('supplier_link');

										echo '<li><a href="'.$supplier_link.'"">'.$supplier_name.'</a></li>';
									}
								}

							endwhile;

						echo '</ul>';

						endif; ?>
				</div>
			</div>
		</section><!--// Suppliers-->

		<!--Press-->
		<section id="press">
			<div class="container">
				<div class="sixteen columns">
					<h1>Press</h1>

					<?php query_posts( array ( 'post_type' => 'press_entries', 'posts_per_page' => -1, 'orderby' => 'ASC' ) );

						if ( have_posts() ):

					echo '<ul>';
						while ( have_posts() ) : the_post();

						/* Loop through a Repeater field */

							if( get_field('press_items') )
							{

								while( has_sub_field('press_items') )
								{
									$press_title = get_sub_field('press_title');
									$press_link = get_sub_field('press_link');
									$press_logo = get_sub_field('press_logo');

									if ( ! empty ( $press_link ) )
									{
										echo '<a href="'.$press_link.'"><li class="one-third column external"><h2>'.$press_title.'</h2></a>';
									} else {
										echo '<li class="one-third column"><h2>'.$press_title.'</h2>';
									}

									if ( ! empty ( $press_logo ) )

										echo '<a href="'.$press_link.'"><img src='.$press_logo['url'].'></a>';


									$image_1 = get_sub_field( "image_1" );
									if ( ! empty ( $image_1 ) )
										echo'<a href="'.$image_1['url'].'" data-featherlight="image"><img src='.$image_1['url'].'></a>';

									$image_2 = get_sub_field( "image_2" );
									if ( ! empty ( $image_2 ) )
										echo'<a href="'.$image_2['url'].'" data-featherlight="image"><img src='.$image_2['url'].'></a>';

									$image_3 = get_sub_field('image_3');
									if ( ! empty ( $image_3 ) )
										echo'<a href="'.$image_3['url'].'" data-featherlight="image"><img src='.$image_3['url'].'></a>';

									echo '</li>';
								}
							}

						endwhile;

					echo '</ul>';

					endif;
					?>

				</div>
			</div>
		</section>

		<section id="img-break-contact"></section>
		<!--Contact Us-->
		<section id="contact-us">
			<div class="container">
				<div class="five columns alpha">
					<div class="map iframe-rwd">
						<div style="width:310px;height:310px"><iframe width="310" height="310" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=The%2BHeron%2C40%2BMain%2Bstreet%2C%2BNarrowsburg%2C%2BNy%2B12764&ie=UTF8&z=16&t=m&iwloc=addr&output=embed"></iframe></div>
					</div>
				</div>
				<div class="nine columns offset-by-one">
					<h1>For reservations and inquiries</h1>
					<p>40 Main street,<br>Narrowsburg, Ny 12764<br>(845) 252-3333</p>
					<a href="mailto:theheronrestaurant@gmail.com">theheronrestaurant@gmail.com</a>

					<div class="social-links-contact">
						<h2>Follow us on</h2>
						<ul>
							<li><a href="http://instagram.com/theheronny"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram-light.png"></a></li>
							<li><a href="https://twitter.com/TheHeronNY"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter-light.png"></a></li>
							<li><a href="https://www.facebook.com/TheHeronRestaurant"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-light.png"></a></li>
						</ul>
						<!--Trip Advisor widget-->
						<div class="ta-widget">
							<div id="TA_restaurantWidgetWhite71" class="TA_restaurantWidgetWhite">
								<ul id="Jk5r8X" class="TA_links YkRRNrc2Z">
								<li id="EktfjHu" class="HpgYk9q8YL2">
								<a target="_blank" href="http://www.tripadvisor.com/"><img src="http://www.tripadvisor.com/img/cdsi/partner/tripadvisor_logo_117x18-24177-2.png" alt="TripAdvisor"/></a>
								</li>
								</ul>
								</div>
								<script src="http://www.jscache.com/wejs?wtype=restaurantWidgetWhite&amp;uniq=71&amp;locationId=3348484&amp;icon=knifeAndFork&amp;lang=en_US&amp;display_version=2"></script>
							</div>
						</div>
				</div>
			</div>
		</section><!--// Contact Us-->

		<div class="instafeed-wrapper">
			<h1>Share your photos with us</h1>
			<p>Use the hashtag <span class="highlight">#TheHeronNY</span></p>
			<div id="instafeed"></div>
		</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>

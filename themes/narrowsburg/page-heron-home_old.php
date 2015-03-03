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

		<!--Image gallery-->
		<div class="gallery-wrapper">
		<section id="img-gallery">
			<img src="<?php echo get_template_directory_uri(); ?>/img/401027_257155191021370_228007583936131_620502_146999163_n.jpg" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/img/heron-post-2-image.jpg" alt="Heron Post 2 Image">
			<img src="<?php echo get_template_directory_uri(); ?>/img/DSC_0076.jpg" alt="DSC 0076">
			<img src="<?php echo get_template_directory_uri(); ?>/img/heron-site-images-0031.jpg" alt="Heron Site Images 0031">
			<img src="<?php echo get_template_directory_uri(); ?>/img/heron-website-023-web.jpg" alt="Heron Website 023 Web">
			<img src="<?php echo get_template_directory_uri(); ?>/img/heron-stpatricks-001-web.jpg" alt="Heron Stpatricks 001 Web">
			<img src="<?php echo get_template_directory_uri(); ?>/img/heron-website-024-web.jpg" alt="Heron Website 024 Web">
			<img src="<?php echo get_template_directory_uri(); ?>/img/heron-website-022-2.jpg" alt="Heron Website 022 2">
		</section>
		</div>

	
		<!--Menu-->
		<section id="menu">
			<div class="container">
				<div class="menu-title-wrapper">
					<h1>Menu</h1>
				</div>
	        	<div class="menu-brunch sixteen columns">
	        		<h2>Brunch</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/heron-easter-2013-018.jpg" width="400"  alt="Heron Easter 2013">
					
					<!--Brunch == Cakes-->
					<?php query_posts( array ( 'post_type' => 'menu_items', 'category_name' => 'Cakes', 'posts_per_page' => -1, 'orderby' => 'rand', ) ); ?>
					<?php if ( have_posts() ): ?>
						<h3>Cakes</h3>
						<p>with Anderson Farm maple syrup</p>
					<ul>
						<?php while ( have_posts() ) : the_post(); 
						    echo '<li>';
						    the_title();
							$price_1 = $price_1 = get_field( "price_1" );
							if ( ! empty ( $price_1 ) )
							echo'<span class="price">'.$price_1.'</span>';
							$price_2 = get_field( "price_2" );
							if ( ! empty ( $price_2 ) )
							echo'<span class="price">'.$price_2.'</span>';
						    echo '</li>';
						endwhile; ?>
					</ul>
					<?php endif; ?>
					
					<!--Brunch == Sweet-->
					<?php query_posts( array ( 'post_type' => 'menu_items', 'category_name' => 'Sweet', 'posts_per_page' => -1, 'orderby' => 'rand', ) ); ?>
					<?php if ( have_posts() ): ?>
						<h3>Sweet</h3>
					<ul>
						<?php while ( have_posts() ) : the_post(); 
						    echo '<li>';
						    the_title();
							$price_1 = $price_1 = get_field( "price_1" );
							if ( ! empty ( $price_1 ) )
							echo'<span class="price">'.$price_1.'</span>';
							$price_2 = get_field( "price_2" );
							if ( ! empty ( $price_2 ) )
							echo'<span class="price">'.$price_2.'</span>';
						    echo '</li>';
						endwhile; ?>
					</ul>
					<?php endif; ?>
					
					<!--Brunch == Eggs-->
					<?php query_posts( array ( 'post_type' => 'menu_items', 'category_name' => 'Eggs', 'posts_per_page' => -1, 'orderby' => 'rand', ) ); ?>
					<?php if ( have_posts() ): ?>
						<h3>Eggs</h3>
						<p>All egg dishes are made with locally sourced eggs & come with local organic mixed greens</p>
					<ul>
						<?php while ( have_posts() ) : the_post(); 
						    echo '<li>';
						    the_title();
							$price_1 = $price_1 = get_field( "price_1" );
							if ( ! empty ( $price_1 ) )
							echo'<span class="price">'.$price_1.'</span>';
							$price_2 = get_field( "price_2" );
							if ( ! empty ( $price_2 ) )
							echo'<span class="price">'.$price_2.'</span>';
						    echo '</li>';
						endwhile; ?>
					</ul>
					<?php endif; ?>
					
					<!--Brunch == Salads-->
					<?php query_posts( array ( 'post_type' => 'menu_items', 'category_name' => 'Salads', 'posts_per_page' => -1, 'orderby' => 'rand', ) ); ?>
					<?php if ( have_posts() ): ?>
						<h3>Salads</h3>
					<ul>
						<?php while ( have_posts() ) : the_post(); 
						    echo '<li>';
						    the_title();
							$price_1 = $price_1 = get_field( "price_1" );
							if ( ! empty ( $price_1 ) )
							echo'<span class="price">'.$price_1.'</span>';
							$price_2 = get_field( "price_2" );
							if ( ! empty ( $price_2 ) )
							echo'<span class="price">'.$price_2.'</span>';
						    echo '</li>';
						endwhile; ?>
					</ul>
					<?php endif; ?>
					
					<!--Brunch == Savory-->
					<?php query_posts( array ( 'post_type' => 'menu_items', 'category_name' => 'Savory', 'posts_per_page' => -1, 'orderby' => 'rand', ) ); ?>
					<?php if ( have_posts() ): ?>
						<h3>Savory</h3>
					<ul>
						<?php while ( have_posts() ) : the_post(); 
						    echo '<li>';
						    the_title();
							$price_1 = $price_1 = get_field( "price_1" );
							if ( ! empty ( $price_1 ) )
							echo'<span class="price">'.$price_1.'</span>';
							$price_2 = get_field( "price_2" );
							if ( ! empty ( $price_2 ) )
							echo'<span class="price">'.$price_2.'</span>';
						    echo '</li>';
						endwhile; ?>
					</ul>
					<?php endif; ?>
					
					<!--Brunch == Macs-->
					<?php query_posts( array ( 'post_type' => 'menu_items', 'category_name' => 'Macs', 'posts_per_page' => -1, 'orderby' => 'rand', ) ); ?>
					<?php if ( have_posts() ): ?>
						<h3>Macs</h3>
					<ul>
						<?php while ( have_posts() ) : the_post(); 
						    echo '<li>';
						    the_title();
							$price_1 = $price_1 = get_field( "price_1" );
							if ( ! empty ( $price_1 ) )
							echo'<span class="price">'.$price_1.'</span>';
							$price_2 = get_field( "price_2" );
							if ( ! empty ( $price_2 ) )
							echo'<span class="price">'.$price_2.'</span>';
						    echo '</li>';
						endwhile; ?>
					</ul>
					<?php endif; ?>

					<!--Brunch == Sandwiches-->
					<?php query_posts( array ( 'post_type' 	, 'category_name' => 'Sandwiches', 'posts_per_page' => -1, 'orderby' => 'rand', ) ); ?>
					<?php if ( have_posts() ): ?>
						<h3>Sandwiches</h3>
					<ul>
						<?php while ( have_posts() ) : the_post(); 
						    echo '<li>';
						    the_title();
							$price_1 = $price_1 = get_field( "price_1" );
							if ( ! empty ( $price_1 ) )
							echo'<span class="price">'.$price_1.'</span>';
							$price_2 = get_field( "price_2" );
							if ( ! empty ( $price_2 ) )
							echo'<span class="price">'.$price_2.'</span>';
						    echo '</li>';
						endwhile; ?>
					</ul>
					<?php endif; ?>
					
					<!--Brunch == Sides-->
					<?php query_posts( array ( 'post_type' => 'menu_items', 'category_name' => 'Sides', 'posts_per_page' => -1, 'orderby' => 'rand', ) ); ?>
					<?php if ( have_posts() ): ?>
						<h3>Sides</h3>
					<ul>
						<?php while ( have_posts() ) : the_post(); 
						    echo '<li>';
						    the_title(); 
							$price_1 = get_field( "price_1" );
							if ( ! empty ( $price_1 ) )
							echo'<span class="price">'.$price_1.'</span>';
							$price_2 = get_field( "price_2" );
							if ( ! empty ( $price_2 ) )
							echo'<span class="price">'.$price_2.'</span>';
						    echo '</li>';
						endwhile; ?>
					</ul>
					<?php endif; ?>
					
					<p>Our menu proudly features the following local farms & resources
The Ant Hill Farm, Quails R Us, Silver Heights Farm, Tonjes Farm, 2 Cousins Fish, Augusta Acres Farm, Calkins Creamery, Beach Lake Bakery & Java Love Coffee</p>

					<p>No substitutions</p>
	        	</div>
	       
	        	<div class="menu-dinner sixteen columns">
	        		<h2>Dinner</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/heron-website-028.jpg" width="400" alt="Dinner at The Heron">
					
					<!--Dinner == Soups-->
					<?php query_posts( array ( 'post_type' => 'menu_items', 'category_name' => 'Soups', 'posts_per_page' => -1, 'orderby' => 'rand', ) ); ?>
					<?php if ( have_posts() ): ?>
						<h3>Soups</h3>
					<ul>
						<?php while ( have_posts() ) : the_post(); 
						    echo '<li>';
						    the_title(); 
							$price_1 = get_field( "price_1" );
							if ( ! empty ( $price_1 ) )
							echo'<span class="price">'.$price_1.'</span>';
							$price_2 = get_field( "price_2" );
							if ( ! empty ( $price_2 ) )
							echo'<span class="price">'.$price_2.'</span>';
						    echo '</li>';
						endwhile; ?>
					</ul>
					<?php endif; ?>
					
					
					<h3>Appetizers</h3>
					<ul>
						<li>Deviled Egg of the Day <span class="price">6</span></li>
						<li>Classic Shrimp Cocktail <span class="price">10</span></li>
						<li>Cajun Catfish Bites, Remoulade Sauce <span class="price">12</span></li>
						<li>Homemade Buttermilk Biscuit & Black Pepper Gravy <span class="price">3.50</span></li>
						<li>Parmesan Wings, Shaved Carrots & Celery Slaw, Blue Cheese Yogurt Sauce <span class="price">9</span></li>
						<li>Homemade Chicken Liver Mousse, Pickled Onion, Date Mustard, Grilled Beach Lake Bread <span class="price">12</span></li>
						<li>Half Dozen Oysters on the Half Shell, Mignonette, Fresh Horseradish <span class="price">14</span><br>add American Sturgeon Caviar <span class="price">additional 20</span></li>
						<li>Beef Tartar, Soy, Chili, Dijon, Pickles, Fresh Herbs <span class="price">14</span></li>
					</ul>
					
					<h3>Salads</h3>
					<ul>
						<li>Avocado Toast, Multi-Grain, Mixed Greens <span class="price">12</span></li>
						<li>House Salad - Mixed Greens, Carrot, Celery, Red Onion with Radish & Lemon Vinaigrette <span class="price">11</span></li>
						<li>Chopped Salad - Romaine, Ham, Cheddar, Red Onion, Egg, Blue Cheese- Yogurt Dressing <span class="price">11</span></li>
						<li>Beet Salad – Goat Cheese, Mixed Greens, Toasted Maple Dressing, Homemade Crouton <span class="price">12</span></li>
					</ul>
					
					<h3>Macs</h3>
					<ul>
						<li>Andouille & Pepper <span class="price">17</span></li>
						<li>Scallop & Sweet Pea <span class="price">17</span></li>
						<li>Caramelized Onions & Baked Bread Crumbs <span class="price">14</span></li>
					</ul>
					
					<h3>Mains</h3>
					<ul>
						<li>Crispy Salmon, Mashed Potatoes, Dill Sauce, Sauteed Organic Kale <span class="price">22</span></li>
						<li>Fish & Chips,Long Island Skate, Remoulade Sauce & Homemade Fries <span class="price">18</span></li>
						<li>Buttermilk Fried Local Chicken, Mashed Potatoes & Gravy, Chipotle Coleslaw <span class="price">18</span></li>
						<li>Blackened Catfish, Jalepeno Grits, Sauteed Organic Kale, Remoulade Sauce, Pickled Onions <span class="price">22</span></li>
						<li>Herb Roasted Local Chicken, Pan Sauce, Mashed Potatoes, Mixed Greens <span class="price">20</span></li>
						<li>Hanger Steak & Fries, Local Duck Egg, Pickled Onions, Garlic Mayo <span class="price">26</span></li>
					</ul>
					
					<h3>Sandwiches</h3>
					<p>All sandwiches come with hand cut fries</p>
					<ul>
						<li>Hot Ham & Swiss on Rye with Pickles & Mayo <span class="price">12</span></li>
						<li>Chicken & Brie with Grilled Apples, Red Onion & Garlic Mayo, Ciabatta <span class="price">12</span></li>
						<li>Reuben Sandwich, Corned Beef, Swiss, & House made Russian Dressing <span class="price">14</span></li>
						<li>Jalapeño & Cheddar Patty Melt, House Pickled Jalapeños, Marbled Rye <span class="price">14</span></li>
						<li>Roast Pork, Cheddar, Pickles, Red Onion, BBQ Sauce, Garlic Mayo, Ciabatta <span class="price">14</span></li>
					</ul>
					
					<h3>Sides</h3>
					<ul>
						<li>Fries <span class="price">6</span></li>
						<li>Mac & Cheese <span class="price">6</span></li>
						<li>Salad <span class="price">6</span></li>
						<li>Mashed Potatoes <span class="price">6</span></li>
					</ul>
					<p>Our menu proudly features the following local farms & resources
The Ant Hill Farm, Quails R Us, Silver Heights Farm, Tonjes Farm, 2 Cousins Fish, Augusta Acres Farm, Calkins Creamery, Beach Lake Bakery & Java Love Coffee</p>

					<p>No substitutions</p>
				</div>
			
	        	<div class="menu-drinks sixteen columns">
	        		<h2>Drinks</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/heron-website-031.jpg" width="400" alt="Drinks at The Heron">
					
					<h3>Featured Wines</h3>
					<ul>
						<li>Navarro Mendocino Chardonnay 2009 <span class="price">35 bottle</span></li>
						<li>Navarro Methode Pinot Noir 2007 <span class="price">58 bottle</span></li>
					</ul>
					
					<h3>Sparkling</h3>
					<ul>
						<li>Lamberto Prosecco, Italy <span class="price">$9 glass</span> <span class="price">$35 bottle</span></li>
						<li>Lamberti Rosé Spumante, Italy <span class="price">$9 glass</span> <span class="price">$35 bottle</span></li>
						<li>Cavicchioli & Figli Lambrusco,Vigna Del Cristo Sorbara, Italy <span class="price">$9 glass</span> <span class="price">$35 bottle</span></li>
					</ul>
					
					<h3>Dry Rosé</h3>
					<ul>
						<li>El Coto Rosé, Spain <span class="price">$7 glass</span> <span class="price">$24 bottle</span></li>
					</ul>
					
					<h3>Whites</h3>
					<ul>
						<li>Tortoise Creek Chardonnay, California <span class="price">$8 glass</span> <span class="price">$26 bottle</span></li>
						<li>Rapitala Grillo, Sicily <span class="price">$8 glass</span> <span class="price">$26 bottle</span></li>
						<li>Hugel Gentil, France <span class="price">$10 glass</span> <span class="price">$30 bottle</span></li>
					</ul>
					
					<h3>Reds</h3>
					<ul>
						<li>Cuma Organic Malbec, Argentina <span class="price">$9 glass</span> <span class="price">$30 bottle</span></li>
						<li>Chateau St. Sulpice, Bordeaux, France <span class="price">$10 glass</span> <span class="price">$36 bottle</span></li>
						<li>Michel Torino ‘Don David’ Tannat, Argentina <span class="price">$10 glass</span> <span class="price">$36 bottle</span></li>
						<li>Block Nine Pinot Noir, California <span class="price">$11 glass</span> <span class="price">$38 bottle</span></li>
						<li>Heller Estate Organic Cabernet, California <span class="price">$12 glass</span> <span class="price">$40 bottle</span></li>
					</ul>
					
					<h3>Seasonal Beer</h3>
					<ul>
						<li>Coney Island Freaktoberfest (new york, amber) <span class="price">7</span></li>
						<li>Captain Lawrence Seasonal Ale (ny, brewed with spices) <span class="price">8</span></li> 
						<li>21st Ammendment Fireside Chat  (seasonal. Cocoa nibs, spices) <span class="price">6</span>
					</ul>
					
					<h3>NY & PA</h3>
					<ul>
						<li>Pork Slap <span class="price">5</span></li>
						<li>Eurotrash Pilsner (ny, pils lager) <span class="price">5</span></li>
						<li>Lionshead Pils (pennsylvania, pils) <span class="price">3</span></li> 
						<li>Stoudts Scarlett Lady (pa, amber, esb) <span class="price">6</span></li> 
						<li>Weyerbacher Last Chance IPA (pa, west coast style ipa) <span class="price">5</span></li> 
						<li>Captain Lawrence Brown Bird Ale  (new york, smooth, malty ale) <span class="price">8</span></li>
						<li>Keegan’s Mothers Milk (new york, dark & creamy milk stout) <span class="price">8</span></li>
						<li>Keegan’s Joe Mama’s Milk (new york, creamy milk stout with coffee) <span class="price">8</span></li>
						<li>Ommegang 3 Philosophers (new york, quadruple style ale with dark cherry) <span class="price">10</span></li>
					</ul>
					
					<h3>Everything Else</h3>
					<ul>
						<li>Coors Light <span class="price">3</span></li> 
						<li>Dale’s Pale Ale <span class="price">4</span></li> 
						<li>Killians Irish Red <span class="price">3</span></li> 
						<li>Lefthand Sawtooth (co, esb) <span class="price">5</span></li>
						<li>Schaefer (america’s oldest lager) <span class="price">2.50</span></li>
						<li>Murphy’s  Irish Stout (16 ounce) <span class="price">6</span></li> 
						<li>Batch 19 Pre-Prohibition Style Lager <span class="price">5</span></li>
						<li>Monk’s Café Sour Ale (begium style sour ale) <span class="price">10</span></li>
						<li>21st Amendment Back in Black IPA (California, rich dark malt) <span class="price">6</span></li>
						<li>Estrella Damm Daura (award winning gluten-free euro pale lager) <span class="price">6</span></li>
						<li>Youngs Double Chocolate Stout (England, dark brew, mineral water & natural cocoa) <span class="price">8</span></li>
						<li>Paulaner Thomas Non-Alcoholic Beer <span class="price">5</span></li>
					</ul>
					
					<h3>Ciders</h3>
					<ul>
						<li>Crispin Original <span class="price">6</span></li> 
						<li>Magners Irish Cider <span class="price">4</span></li> 
						<li>Koppenberg Pear Cider <span class="price">6</span></li>
					</ul>
					
					<h3>Great for Sharing</h3>
					<ul>
						<li>Southern Tier Pumking (ny, 22 ounces, gorgeous seasonal) <span class="price">18</span></li> 
						<li>Captain Lawrence Xtra Gold 750ML (new york, tripel) <span class="price">20</span></li>
						<li>Lambrucha (new york, blend of lambic & kombucha tea) <span class="price">20</span></li>
					</ul>
					
					<h3>Additional Wine Offerings</h3>
					<ul>
						<li>Rosa Regale <span class="price">12 glass</span> <span class="price">40 bottle</span></li> 
						<li>Freixenet Rosado <span class="price">8 glass</span> <span class="price">25 bottle</span></li> 
						<li>Willamette Valley Reisling <span class="price">12 glass</span> <span class="price">40 bottle</span></li> 
						<li>Moet Chandon (bottle only) <span class="price">90</span></li>
					</ul>
					
					<h3>Our Favorite Cocktails</h3>
					<ul>
						<li>Aperol Royale (champagne, aperol) <span class="price">12</span></li> 
						<li>Housemade Sour (house made sour mix, your choice of liquor) <span class="price">10</span></li> 
						<li>The Heron Martini (fernet branca, amaretto, baileys) <span class="price">10</span></li>
						<li>Heron Cherry Soda (stoli salted caramel, gus' dry soda, cherry juice) <span class="price">10</span></li>
						<li>The Rosemary Nanni (tanqueray & campari with grapefruit juice) <span class="price">10</span></li> 
						<li>Dark & Stormy (classic dark & stormy made with goslings rum & spicy ginger beer) <span class="price">10</span></li> 
						<li>Moscow Mule <span class="price">10</span></li>
					</ul>
				</div>
			</div>
		</section><!--// Menu-->
		
		<!-- Hours-->
		<section id="hours">
			<div class="container">
				<div class="sixteen columns">
					<h1>Hours</h1>
					<ul>
						<li class="hours-column"><div class="hours-day"><h2>M</h2></div><time class="the-hours">10:00 am – 3:00 pm</time></li>
						<li class="hours-column"><div class="hours-day"><h2>T</h2></div><time class="the-hours">Closed</time></li>
						<li class="hours-column"><div class="hours-day"><h2>W</h2></div><time class="the-hours">Bar Open<br>5:00 pm– 9:00 pm</time></li>
						<li class="hours-column"><div class="hours-day"><h2>T</h2></div><time class="the-hours">10:00 am – 3:00 pm<br>5:00 pm – 9:00 pm</time></li>
						<li class="hours-column"><div class="hours-day"><h2>F</h2></div><time class="the-hours">10:00 am – 2:00 pm<br>Bar Open 
@ 5:00 pm<br>6:00 pm – 10:00 pm</time></li>
						<li class="hours-column"><div class="hours-day"><h2>S</h2></div><time class="the-hours">10:00 am – 2:00 pm<br>Bar Open 
@ 5:00 pm<br>6:00 pm – 10:00 pm</time></li>
						<li class="hours-column"><div class="hours-day"><h2>S</h2></div><time class="the-hours">10:00 am – 3:00 pm</time></li>
					</ul>
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
		
		<!-- Catering -->
		<section id="catering">
			<div class="container">
				<div class="five columns alpha">
					<h1>Catering</h1>
					<p>The Heron recognizes that all events are unique.  We strive to ensure that your event reflects your needs & expectations   Sample menus are available upon request; however, knowing the needs of our clients first is the most important aspect in developing a menu for your occasion. Please contact us and tell us about your event.</p>
				</div>
				<div class="five columns offset-by-one">
					<img src="<?php echo get_template_directory_uri(); ?>/img/catering-1.jpg" alt="Catering by The Heron">
				</div>
				<div class="five columns omega">
					<img src="<?php echo get_template_directory_uri(); ?>/img/catering-2.jpg" alt="Catering by The Heron">
				</div>
			</div>
		</section><!--// Catering-->
		
		<!--Suppliers-->
		<section id="suppliers">
			<div class="container">
				<div class="five columns alpha">
					<img src="<?php echo get_template_directory_uri(); ?>/img/suppliers.jpg" alt="Suppliers">
				</div>
				<div class="nine columns offset-by-one">
					<h1>Our Suppliers</h1>
					<p>We are so proud to be working with the local farmers and artisan producers here in the Upper Delaware region. We've had the opportunity to meet so many great people, visit some farms and feature all of the top-quality products that they provide us. Being a small business, we know how important local economies are to a community. Each time you visit our restaurant, we like to think that you aren't just supporting us, but you're supporting a wider group of local farms and artisan producers as well. So who are all of these great folks? Take a look below to check see who are the 'Roots & Marrow' of what we do.</p>
					<div class="supplier-links">
						<a href="http://www.theanthillfarm.com/">The Anthill Farm</a> <a href="https://www.facebook.com/AugustaAcresFarm">Augusta Acres Farm</a> <a href="http://beachlakebakery.com/">Beach Lake Bakery</a> <a href="http://www.calkinscreamery.com/">Calkins Creamery</a> <a href="http://www.javaloveroasters.com/">Java Love Coffee</a> <a href="http://www.kissmybass.com/fish.html">Kiss My Bass</a> <a href="https://www.facebook.com/QuailsRUSPlus">Quails R' Us</a> <a href="http://www.silverheightsfarm.com/">Silver Heights Farm</a> <a href="http://www.buylocalpa.org/source/view/4459">Sugar Street Farm</a> <a href="http://twinbrookfarmsandlivestock.com/">Twin Brook Farms</a> <a href="http://www.originaltwocousins.com/">2 Cousins Fish</a> <a href="https://www.facebook.com/pages/Tonjes-Farm-Dairy/337375752961312">Tonjes Farm</a>
					</div>
				</div>
			</div>
		</section><!--// Suppliers-->
		
		<!--Contact Us-->
		<section id="contact-us">
			<div class="container">
				<div class="five columns alpha">
					<div class="map">
						<div style="width:310px;height:310px"><iframe width="310" height="310" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=The%2BHeron%2C40%2BMain%2Bstreet%2C%2BNarrowsburg%2C%2BNy%2B12764&ie=UTF8&z=16&t=m&iwloc=addr&output=embed"></iframe></div>
					</div>
				</div>
				<div class="nine columns offset-by-one">
					<h1>Contact Us</h1>
					<p>40 Main street,<br>Narrowsburg, Ny 12764<br>(845) 252-3333</p>
					<a href="mailto:theheronrestaurant@gmail.com">

theheronrestaurant@gmail.com
				</div>
			</div>
		</section><!--// Contact Us-->


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
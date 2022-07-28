<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main class="container">
<?php 
	if ( have_posts() ) :
    	while ( have_posts() ) : the_post();
        	get_template_part( '/template-part/content' );
    	endwhile;
	endif; 
	?>
	<!-- <div class="row">
		<div class="card col-5">
			<div class="card-body">
				<h5 class="card-title text-center">Trailer</h5>
				<img src="<?=get_template_directory_uri()?>/img/gameplay_trailer.png" width="100%"/>
				<p>Stream tous les soirs, de 19h00 à 00h00.</p>
				<small>@neodymeprime</small>
			</div>
		</div>
	</div> -->
	<?php wp_login_form(['label_username', 'label_password', 'label_remember', 'label_log_in', 'id_username', 'id_password', 'id_remember', 'id_submit', 'remember', 'value_username', 'value_remember']); ?>
</main>
<?php
get_footer();

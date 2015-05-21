<?php

get_header(); ?>



	<div class="container">





<?php if(is_user_logged_in() && is_page(134)){  

echo "<h1> Profile</h1>";



?>

<style type="text/css">

.container h1{

    color: #2333ae;

    font-family: "righteousregular";

    font-size: 34px;

    font-weight: normal;

    text-align: center;

    text-shadow: 0 0 6px #fde509;

}



</style>

<?php } ?>





	<?php if ( have_posts() ) : ?>



	

			<?php while ( have_posts() ) : the_post(); ?>

			<h1 class="heading"><?php the_title();?></h1>

                         

				<?php the_content(); ?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>





  

   

	</div>



<?php get_footer(); ?>


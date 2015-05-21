<?php
/*
Template Name: Contact Us Template
*/
?>

<?php get_header(); ?>

  <div id="container">
		 
		 <div style="width:728px; height:90px; float:right; margin:0 0 0 10px; background:#ccc;"></div>
		 
		 <div class="left-column-outer">
			
 <?php while ( have_posts() ) : the_post(); ?>
				 <?php get_template_part( 'content', 'page' ); ?>
			     <?php endwhile; // end of the loop. ?><h2> <?php the_title().'  '; ?></h2>
                              <?php    the_content();?>
                             
                                <?php 
                                 global $wp_query;
                                 $current_page_id = $wp_query->post->ID;
                                 //echo $current_page_id;
                                 // die();
  ?>
  </div>
  </div>
<style type="text/css">
input, textarea {
	padding: 10px;
	border: 1px solid #E5E5E5;
	width: 200px;
	color: #999999;
	box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
	-moz-box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
	-webkit-box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;		
}

textarea {
	width: 400px;
	height: 150px;
	max-width: 400px;
	line-height: 18px;
}

input:hover, textarea:hover,
input:focus, textarea:focus {
	border-color: 1px solid #C9C9C9;
	box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;
	-moz-box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;
	-webkit-box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;	
}

.form label {
	margin-left: 10px;
	color: #999999;
}
.submit input {
	width: 100px; 
	height: 40px;
	background-color: #474E69; 
	color: #FFF;
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;		
	}
	.breakings
{
	padding-bottom: 5px;
	padding-top: 5px;
	
}

.heading {
	background-color: white;
}
</style>
 
<?php get_footer();?>

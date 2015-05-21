<?php

/*
Plugin Name: Image Upload
Plugin URI: http://www.photoalbum-2day.com
Description: Display an Image Upload Box from www.photoalbum-2day.com.
Version: 1
Author: Holger Deschakovski
Author URI: http://www.photoalbum-2day.com
License: GPL2
*/


/**
 * Add function to widgets_init that'll load our widget.
 * @since 0.1
 */
add_action( 'widgets_init', 'loadPHay' );


/**
 * Register our widget.
 * 'Example_Widget' is the widget class used below.
 *
 * @since 0.1
 */
function loadPHay() {
	register_widget( 'phayupload_Widget' );
}

       

// load scripts and styles.
       
add_action( "wp_print_scripts", "phayScripts", 100 );

       function phayScripts () {
       
        wp_enqueue_script("phayMooTools", "http://www.photoalbum-2day.com/fancyupload/mootools.js");
        wp_enqueue_script("phaySwiffUploader", "http://www.photoalbum-2day.com/fancyupload/source/Swiff.Uploader.js");  
        wp_enqueue_script("phayFxProgressBar", "http://www.photoalbum-2day.com/fancyupload/source/Fx.ProgressBar.js");  
        wp_enqueue_script("phayFancyUpload", "http://www.photoalbum-2day.com/fancyupload/source/FancyUpload2.js");  
        wp_enqueue_script("phayInitFu", "http://www.photoalbum-2day.com/fancyupload/source/init_fu.js");
       }

       add_action("init", "phayScripts");


       add_action("wp_print_styles", "phayCss", 100);

       function phayCss () {
       
        wp_enqueue_style("phayUploadBox", "http://www.photoalbum-2day.com/wpwidget-imageupload.css"); 
       } 

       add_action("init", "phayCss");


/**
 * Widget class.
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 * @since 0.1
 */
class phayupload_Widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function phayupload_Widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'phayupload', 'description' => 'Display an Image Upload Box from www.photoalbum-2day.com.' );

		/* Widget control settings. */
		$control_ops = array( 'width' => 500 );

		/* Create the widget. */
		$this->WP_Widget( 'phayupload', 'Image Upload - photoalbum-2day.com', $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {



                $phayCode = '

       <div style="padding: 4px; overflow:auto; max-width: 90%">
        <form action="http://www.photoalbum-2day.com/fancyupload/server/script.php" method="post" enctype="multipart/form-data" id="form-demo">
        <div id="demo-status" class="hide">

         <input type="hidden" id="wpplugin" name="wpplugin" value="yes" />
        
         <p>
         <table border=0 cellpadding=5 cellspacing=0>
          <tr><td><span id="demo-browse" class="phaybtn">Choose Images</span></td></tr>
          <tr><td><span id="demo-clear" class="phaybtn">Clear List</span></td></tr>
          <tr><td><span id="demo-upload" class="phaybtn">Start Upload</span></td></tr>
         </table>
         <p>

         <b>Thumbnails Width</b>
         <select id="tw">
          <option value="130">130</option>
          <option value="140">140</option>
          <option value="150">150</option>
          <option value="160">160</option>
          <option value="170">170</option>
          <option value="180">180</option>
          <option value="190">190</option>
          <option value="200">200</option>
          <option value="210">210</option>
         </select>&nbsp;PX

         <div>
          <strong class="overall-title"></strong><br />
          <img src="http://www.photoalbum-2day.com/fancyupload/assets/progress-bar/bar.gif" class="progress overall-progress" />
         </div>
  
         <div>
          <strong class="current-title"></strong><br />
          <img src="http://www.photoalbum-2day.com/fancyupload/assets/progress-bar/bar.gif" class="progress current-progress" />
         </div>

         <div class="current-text"></div>
        </div>
  
        <ul id="demo-list"></ul>
        </form>
       </div>
      ';


		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$textarea = $phayCode;

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;

		/* Display name from widget settings if one was input. */
		if ( $textarea )
			echo $textarea;

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {


		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
      

		return $instance;
	}

	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */

		$defaults = array( 'title' => __('Image Upload - photoalbum-2day.com', 'phaybox') ); 
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>


		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title for the Widget:', 'phaybox'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" class="widefat" />
		</p>


	<?php
	}
}

?>
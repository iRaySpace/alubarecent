<?php 
/*
Plugin Name: Recent Posts Plugin
Plugin URI: 
Description: Display a lists of your latest posted articles.
Version: 1.0.0
Author: Ivan Ray Altomera
Author URI: https://github.com/iRaySpace
 */

class AlubaRecentWidget extends WP_Widget 
{
	
	function AlubaRecentWidget()
	{
		parent::WP_Widget(false, $name = 'Aluba Recent');
	}

	function form($instance)
	{
		$title = esc_attr($instance['title']);
		$dis_posts = esc_attr($instance['dis_posts']);
		
		// add the admin panel
		require('admin/alubarecent-admin.php');

	}

	function widget($args, $instance) 
	{

		extract($args);

		$title = apply_filters('widget_title', $instance['title']);
		$dis_posts = $instance['dis_posts'];

		echo $before_widget;

		if ($title)
			echo $before_title . $title . $after_title;

		require('public/alubarecent-public.php');

		echo $after_widget;

	}	

}

?>

<?php add_action('widgets_init', create_function('', 'return register_widget("AlubaRecentWidget"); ') ); ?>
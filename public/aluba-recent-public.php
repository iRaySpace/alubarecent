<ul>

<?php

	global $post;
	$args = array('numberposts' => $dis_posts);
	$myposts = get_posts($args);
	foreach($myposts as $post) : setup_postdata($post);
?>
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

<?php 
	
	$date = strtotime(get_the_date());
	$php_date = getdate($date);
	echo $php_date["month"];
	echo $php_date["mday"];
	echo $php_date["year"];
	
?>

<?php endforeach; ?>

</ul>
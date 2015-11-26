<?php

/*
Displays post image attachment (sizes: thumbnail, medium, full)
*/
function dp_attachment_image($postid=0, $size='thumbnail', $attributes='') {
	if ($postid<1) $postid = get_the_ID();
	if ($images = get_children(array(
		'post_parent' => $postid,
		'post_type' => 'attachment',
		'numberposts' => 1,
		'post_mime_type' => 'image',)))
		foreach($images as $image) {
			$attachment=wp_get_attachment_image_src($image->ID, $size);
			?><img src="<?php echo $attachment[0]; ?>" <?php echo $attributes; ?> class="glide-image-small"/><?php
		}
};

if ( function_exists('add_theme_support') )
add_theme_support('post-thumbnails');
function catch_first_image() {global $post, $posts;$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('//i', $post->post_content, $matches);
$first_img = $matches [1] [0];
if(empty($first_img)){
$random = mt_rand(1, 10);
echo get_bloginfo ( 'stylesheet_directory' );
echo '/images/random/'.$random.'.jpg';
}
return $first_img;
}


//
function get_content_first_image($content){
	if ( $content === false ) $content = get_the_content(); 

	preg_match_all('|<img.*?src=[\'"](.*?)[\'"].*?>|i', $content, $images);

	if($images){       
		return $images[1][0];
	}else{
		return false;
	}
}

?>
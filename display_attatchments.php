<?php 

	$attachments = new Attachments( 'my_attachments' ); 	
	$images = array();
	$images[] = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>

<div id="post-gallery">
	<div id="post-gallery-big">
		<img src="<?php echo $images[0]; ?>"/>
	</div>
	<div id="post-thumbnails">
		<?php if( $attachments->exist() ) : 
				   while( $attachments->get() ) : ?>
		<div class="post-thumb-wrap"><img src="<?php echo $attachments->src( 'full' ); ?>"/></div>
		<?php endwhile;  endif; ?>
	</div>
</div>
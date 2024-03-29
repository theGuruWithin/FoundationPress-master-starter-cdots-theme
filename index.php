<?php				// Pull in footer-custom.php, or fallback to default WordPress Generated footer.php if missing 
					get_template_part( 'header','custom' ); 
?>
<div class="row">
	<div class="small-12 medium-6 large-8 columns" role="main">
			<div class="panel">
		
	<?php if ( have_posts() ) : ?>
		
		<?php do_action('foundationPress_before_content'); ?>
	
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		
		<?php do_action('foundationPress_before_pagination'); ?>
		
	<?php endif;?>
	
	
	
	<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>
	
	<?php do_action('foundationPress_after_content'); ?>
	
		</div>
	</div>

	<?php				// Pull in sidebar-custom.php, or fallback to default WordPress Generated footer.php if missing 
					get_template_part( 'sidebar','custom' ); 
?>
</div>

<?php
				// Pull in footer-custom.php, or fallback to default WordPress Generated footer.php if missing 
				get_template_part( 'footer','custom' );
 ?>

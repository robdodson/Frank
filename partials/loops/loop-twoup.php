 <?php
global $frank_section_header;
global $frank_section_title;
global $frank_section_caption;
?>
<div class='post-group twoup row'>
	<?php if ( isset( $frank_section_header ) && $frank_section_header ) : ?>
	<div class='nav post-group-header'>
		<span class='label'><?php echo( $frank_section_title ); ?></span>
		<?php $view_more_label = __( 'View more', 'frank_theme' ); ?>
		<span class='caption'><?php echo( $frank_section_caption ); ?></span> <span class='more'>
			<?php next_posts_link( $view_more_label . '&hellip;' ); ?>
		</span>
	</div>
	<?php endif; ?>
	<div class='contents row'>
	<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
		<?php get_template_part( 'partials/posts/post', 'medium' ); ?>
	<?php endwhile; ?>
	</div>
</div>
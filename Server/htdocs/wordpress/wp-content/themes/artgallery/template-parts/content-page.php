<?php
/**
 * The template used for displaying page content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<h1 class="entry-title"><?php the_title(); ?></h1>
	
	<div class="page-content">
		<?php
			if ( has_post_thumbnail() ) :

				the_post_thumbnail();

			endif;
			
			the_content( __( 'Read More...', 'artgallery') );

		  	wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'artgallery' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
		  	) );
		?>
	</div><!-- .page-content -->

	<div class="page-after-content">
		
		<?php if ( ! post_password_required() ) : ?>

			<?php if ('open' == $post->comment_status) : ?>

				<span class="icon comments-icon">
					<?php comments_popup_link(__( 'No Comments', 'artgallery' ), __( '1 Comment', 'artgallery' ), __( '% Comments', 'artgallery' ), '', __( 'Comments are closed.', 'artgallery' )); ?>
				</span>

			<?php endif; ?>

			<?php edit_post_link( __( 'Edit', 'artgallery' ), '<span class="edit-icon">', '</span>' ); ?>
		<?php endif; ?>

	</div><!-- .page-after-content -->
</article><!-- #post-## -->


<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package CMP3011
 */
?>

<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> -->
    <section class="policies">
        <?php the_title( '<h1>', '</h1>' ); ?>
	</section><!-- .entry-header -->

    <section class="policiebody">

    <?php the_content(); ?>
		<?php
//			wp_link_pages( array(
//				'before' => '<div class="page-links">' . __( 'Pages:', 'cmp3011' ),
//				'after'  => '</div>',
//			) );
		?>
	</section><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'cmp3011' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

<!--</article>-->
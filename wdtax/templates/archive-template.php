<?php
/**
 * A template displaying archive pages for wdtax taxonomies
 *
 * will find the archive for <term> in the <tax> taxonomy
 * at https://eaxmple.com/book/<tax>-terms/<term>/
 * e.g. https://books.pjjk,net/omniana/mentions-terms/vieyra/
 *
 * based on the twentysixteen archive and content templates
 * & the pressbooks-book McLuhan theme.
 */
defined( 'ABSPATH' ) or die( 'Be good. If you can\'t be good be careful' );
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

get_header();
if ( ! \Pressbooks\Book\Helpers\is_book_public() ) {
	get_template_part( 'private' );
	die;
}
global $wp;
$term_id = get_queried_object_id();
$type = get_term_meta( $term_id, 'schema_type', True );
?>
	<section class="back-matter wdtax-index"
	     vocab="http://schema.org/"
			 resource="<?php echo home_url( $wp->request ).'#id'; ?>"
			 typeof ="<?php echo  $type ?>" >
			<header class="page-header wdtax-header">
				<?php wdtax_archive_page_header( $term_id ); ?>
			</header><!-- .page-header -->
<?php
$options_arr = get_option( 'wdtax_options' );
$term = get_term( $term_id );
if ( isset( $options_arr['rels'] ) ) {
	//multiloop for each relation taxonomy
	foreach ( $options_arr['rels'] as $rel ) {
		$args = array(
			'post_type' => 'any',
			'tax_query' => array(
				array(
					'taxonomy' => 'wdtax_'.$rel,
					'field'    => 'name',
					'terms'    => array( $term->name )
				)
			)
		);
		$wdtax_query = new WP_Query( $args );
		if ( $wdtax_query->have_posts() ) :
			wdtax_archive_section_heading( $term_id, $rel );
			echo('<dl class="wdtax-index-list">');
			// Start the Loop.
			while ( $wdtax_query->have_posts() ) : $wdtax_query->the_post();
		?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
				resource="<?php echo( esc_url( get_permalink() ) )?>"
				typeof="WebPage">
					<?php the_title( sprintf( '<dt property="name"><a href="%s">',
					                           esc_url( get_permalink() ) ),
																		 '</a></dt>' ); ?>
				<?php echo('<dd>'); the_excerpt(); echo('</dd>')?>
				<link property="<?php echo $rel ?>"
				      href="<?php echo home_url( $wp->request ).'#id'; ?>" />
			</article><!-- #post-## -->
		<?php
		echo('</dl>');
		endwhile; //a loop
		endif;
		wp_reset_postdata();
	} //end multiloop over relation taxonomies
} else {
	//no relation taxonomies
	get_template_part( '../../partials/content', 'none' );
}
// Previous/next page navigation.
		?>

	</section><!-- .content-area -->
<?php
	the_posts_navigation(
		[
			'prev_text' => '<svg class="icon--svg"><use xlink:href="#arrow-left" /></svg>' . __( 'Previous page', 'pressbooks-book' ),
			'next_text' => __( 'Next page', 'pressbooks-book' ) . '<svg class="icon--svg"><use xlink:href="#arrow-right" /></svg>',
			'screen_reader_text' => __( 'Paged navigation', 'pressbooks-book' ),
		]
	);
?>
<?php get_footer(); ?>

<?php
/**
 * A template displaying archive pages for wdtax taxonomies
 *
 * The WDTax plugin should find this template and use it for
 * archive pages of custom taxonomy terms.
 * (see <wdtax>/inc/display_functions.php)
 *
 * will find the archive for <term> in the <tax> taxonomy
 * at https://example.com/book/<tax>-terms/<term>/
 * e.g. https://books.pjjk,net/omniana/mentions-terms/vieyra/
 *
 * based on the twentysixteen archive and content templates
 * & the pressbooks-book McLuhan theme.
 */
defined( 'ABSPATH' ) or die( 'Be good. If you can\'t be good be careful' );
function omniana_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'omniana_custom_excerpt_length', 999 );

get_header();

if ( ! \PressbooksBook\Helpers\is_book_public() ) {
	get_template_part( 'private' );
	die;
}
global $wp;
$term_id = get_queried_object_id();
$term = get_term( $term_id );
$type = get_term_meta( $term_id, 'schema_type', True );
$base_url = get_site_url();
$term_slug = $term->slug;
$entity_url = $base_url.'/entities#'.$term_slug
?>
	<section class="back-matter wdtax-index"
	     vocab="http://schema.org/"
			 resource="<?php echo $entity_url; ?>"
			 typeof ="<?php echo  $type ?>" >
			<header class="page-header wdtax-header">
				<?php wdtax_archive_page_header( $term_id ); ?>
			</header><!-- .page-header -->
<?php
$options_arr = get_option( 'wdtax_options' );
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
				typeof="Article">
					<?php the_title( sprintf( '<dt property="name"><a href="%s">',
					                           esc_url( get_permalink() ) ),
																		 '</a></dt>' ); ?>
				<?php echo('<dd>'); the_excerpt(); echo('</dd>')?>
				<link property="<?php echo $rel ?>"
				      href="<?php echo $entity_url; ?>" />
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

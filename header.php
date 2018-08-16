<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/favicon.ico" /><?php // TODO ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" /><?php // TODO ?>

	<?php wp_head(); ?>
</head>
<?php
if ( is_front_page() ) {
	$schema = 'itemscope itemtype="http://schema.org/Book" itemref="about alternativeHeadline author copyrightHolder copyrightYear datePublished description editor image inLanguage keywords publisher" ';
} elseif ( is_single() ) {
	$schema = 'itemscope itemtype="http://bib.schema.org/Chapter" itemref="about copyrightHolder copyrightYear inLanguage publisher" ';
} else {
	$schema = '';
}
?>
<body <?php body_class(); ?> <?php echo $schema; ?>>
<svg style="position: absolute; width: 0; height: 0;" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
	<defs>
		<symbol id="icon-pressbooks" fill="currentColor" viewBox="0 0 45 44">
			<path d="M44.195 41.872c0 .745-.618 1.346-1.377 1.346H1.377C.617 43.219 0 42.617 0 41.872V1.347C0 .604.618 0 1.377 0h41.44c.76 0 1.378.604 1.378 1.347v40.525zM15.282 10.643h-5.21v21.43h3.304V24h1.906c1.435 0 2.656-.5 3.665-1.504 1.008-1.004 1.513-2.213 1.513-3.626v-3.113c0-1.47-.444-2.678-1.33-3.625-.956-.993-2.24-1.489-3.848-1.489zm1.977 5.165h-.001v3.131c0 .513-.184.952-.55 1.318a1.826 1.826 0 0 1-1.338.547h-1.994v-6.86h1.995c.571 0 1.029.171 1.372.513.344.342.516.792.516 1.35zm5.84 16.265h6.118c.828 0 1.662-.25 2.502-.752a4.642 4.642 0 0 0 1.73-1.779c.526-.945.788-2.097.788-3.455 0-.545-.04-1.043-.122-1.486-.163-.868-.414-1.575-.751-2.122-.513-.81-1.137-1.352-1.871-1.625a3.325 3.325 0 0 0 1.154-.839c.78-.866 1.173-2.018 1.173-3.455 0-.876-.105-1.635-.315-2.274-.386-1.198-1.027-2.08-1.925-2.652-1.049-.672-2.225-1.008-3.531-1.008h-4.95v21.447zm3.568-12.69v-5.475h1.382c.652 0 1.184.212 1.592.634.443.456.665 1.13.665 2.018 0 .537-.065.987-.193 1.352-.35.982-1.039 1.471-2.064 1.471h-1.382zm0 9.493v-6.397h1.382c.815 0 1.433.25 1.853.751.466.549.7 1.42.7 2.617 0 .502-.075.948-.227 1.335-.432 1.13-1.208 1.694-2.326 1.694h-1.382z" />
		</symbol>
		<symbol id="arrow-down" fill="currentColor" viewBox="0 0 512 512"><path d="M424 259c-6 0-11 2-16 6L278 393V1c0-12-10-22-23-22-12 0-22 10-22 22v392L103 265c-5-4-11-6-16-6-6 0-12 2-16 6-9 9-9 23 0 32l168 166c10 9 23 9 32 0l170-166c9-9 9-23 0-32-4-4-10-6-17-6"/></symbol>
		<symbol id="arrow-left" fill="currentColor" viewBox="0 0 512 512"><path d="M220 45c0 6-3 12-7 17L79 200h410c12 0 23 11 23 25 0 13-11 24-23 24H79l134 138c4 5 7 11 7 17 0 7-3 13-7 18-10 9-24 9-33 0L7 242c-9-10-9-25 0-34L180 26c9-9 23-9 33 0 4 5 7 11 7 19"/></symbol>
		<symbol id="arrow-right" fill="currentColor" viewBox="0 0 512 512"><path d="M291 32c0 6 3 12 7 17l133 135H23c-13 0-23 11-23 24s10 24 23 24h408L298 367c-4 4-7 10-7 16s3 12 7 17c10 9 24 9 33 0l173-176c9-9 9-23 0-33L331 15c-9-10-23-10-33 0-4 4-7 10-7 17"/></symbol>
		<symbol id="arrow-up" fill="currentColor" viewBox="0 0 512 512"><path d="M424 189c-6 0-11-2-16-6L278 55v392c0 12-10 22-23 22-12 0-22-10-22-22V55L103 183c-5 4-11 6-16 6-6 0-12-2-16-6-9-9-9-23 0-32L239-15c10-9 23-9 32 0l170 166c9 9 9 23 0 32-4 4-10 6-17 6"/></symbol>
		<symbol id="book" fill="currentColor" viewBox="0 0 512 512"><path d="M484 437H284c-7 0-14 7-14 15h-28c0-8-7-15-14-15H28V110h15v285c0 8 6 14 14 14h52c24 0 47-4 69-11 6-2 12-3 19-3 16 0 31 6 42 17l7 7c5 5 15 5 20 0l7-7c11-11 26-17 42-17 7 0 13 1 19 3 22 7 45 11 69 11h52c8 0 14-6 14-14V110h15zM71 82h29v227c0 8 6 15 14 15 39 0 75 16 101 44-15-3-31-2-46 3-19 6-39 9-60 9H71zm57-85c51 6 95 39 114 88v271c-28-34-69-56-114-60zm142 91l3-3c11-11 26-17 42-17 7 0 13 1 19 3 22 7 45 11 69 11h38v298h-38c-21 0-41-3-60-9-9-3-18-5-28-5-16 0-31 4-45 12zm228-6h-29V68c0-8-6-15-14-15h-52c-21 0-41-3-60-9-9-3-18-5-28-5-20 0-39 7-54 19-28-55-85-90-147-90-8 0-14 6-14 14v71H57c-8 0-14 7-14 15v14H14C6 82 0 88 0 96v356c0 7 6 14 14 14h199c0 8 7 14 15 14h56c8 0 15-6 15-14h199c8 0 14-7 14-14V96c0-8-6-14-14-14z"/></symbol>
		<symbol id="cc-by" fill="currentColor" viewBox="0 0 512 512"><path d="M256 134c-23 0-34-12-34-35s11-35 34-35 35 12 35 35-12 35-35 35m50 13c5 0 9 2 11 4 4 4 6 7 6 12v100h-29v120h-76V263h-29V163c0-5 2-8 6-12 2-2 6-4 11-4h100M256-22c68 0 126 24 174 72s72 106 72 174-24 125-72 174c-48 48-106 72-174 72s-125-24-174-72c-48-49-72-106-72-174S34 98 82 50c49-48 106-72 174-72m0 447c55 0 103-20 142-59s59-87 59-142c0-56-20-103-59-142s-87-59-142-59-103 20-142 59-59 86-59 142c0 55 20 103 59 142s87 59 142 59"/></symbol>
		<symbol id="cc-nc" fill="currentColor" viewBox="0 0 512 512"><path d="M256-22c68 0 126 24 174 72s72 106 72 174-24 125-72 174c-48 48-106 72-174 72s-125-24-174-72c-48-49-72-106-72-174S34 98 82 50c49-48 106-72 174-72M67 157c-8 22-12 44-12 67 0 55 20 103 59 142s87 59 142 59c38 0 72-10 103-29 32-19 56-44 73-76l-91-41c-3 16-11 29-24 38-13 10-27 16-44 18v37h-28v-37c-27 0-52-10-75-30l34-34c17 15 35 23 55 23 8 0 15-2 22-7 6-4 9-10 9-18 0-6-3-11-7-15l-24-11-29-13-39-16-124-57m259 63l124 55c4-15 7-32 7-51 0-56-20-103-59-142s-87-59-142-59c-35 0-67 8-96 25-30 16-54 38-72 66l93 42c4-12 12-22 24-31 11-8 24-12 40-13V74h28v38c24 2 44 9 62 23l-32 33c-15-10-29-15-43-15-8 0-15 2-19 4-7 4-10 9-10 16 0 3 1 5 2 6l31 14 22 9 40 18"/></symbol>
		<symbol id="cc-nd" fill="currentColor" viewBox="0 0 512 512"><path d="M167 208v-42h178v42H167m0 78v-42h178v42H167m89-308c68 0 126 24 174 72s72 106 72 174-24 125-72 174c-48 48-106 72-174 72s-125-24-174-72c-48-49-72-106-72-174S34 98 82 50c49-48 106-72 174-72m0 447c55 0 103-20 142-59s59-87 59-142c0-56-20-103-59-142s-87-59-142-59-103 20-142 59-59 86-59 142c0 55 20 103 59 142s87 59 142 59"/></symbol>
		<symbol id="cc-pd" fill="currentColor" viewBox="0 0 512 512"><path d="M256-22c68 0 126 24 174 72s72 106 72 174-24 125-72 174c-48 48-106 72-174 72s-125-24-174-72c-48-49-72-106-72-174S34 98 82 50c49-48 106-72 174-72M67 158c-8 22-12 43-12 66 0 55 20 103 59 142s87 59 142 59c38 0 72-10 103-28 31-19 55-45 73-77l-217-96c1 18 6 35 14 49 9 14 22 22 39 22 13 0 24-5 33-14l3-3 36 43c-1 1-3 2-5 4s-4 3-4 4c-21 15-45 22-70 22-29 0-56-10-81-30s-38-52-38-96c0-11 1-21 3-32l-78-35m158 18l226 99c4-16 6-33 6-51 0-56-20-103-59-142s-87-59-142-59c-35 0-67 8-97 25-29 16-54 38-72 66l76 34c22-35 55-52 100-52 30 0 56 9 77 28l-40 41-7-7c-8-5-17-8-27-8-18 0-31 9-41 26"/></symbol>	</defs>
		<symbol id="cc-remix" fill="currentColor" viewBox="0 0 512 512"><path d="M417 228l5 2v70l-5 2-60 25-2 1-3-1-129-53-4-2-63 27-64-28v-62l60-25-1-1v-70l66-28 151 62v61l49 20m-70 81v-44h-1v-1l-113-46v44l113 47v-1l1 1m7-57l40-17-37-15-39 16 36 16m53 38v-43l-45 18v43l45-18M256-22c68 0 126 24 174 72s72 106 72 174-24 125-72 174c-48 48-106 72-174 72s-125-24-174-72c-48-49-72-106-72-174S34 98 82 50c49-48 106-72 174-72m0 447c55 0 103-20 142-59s59-87 59-142c0-56-20-103-59-142s-87-59-142-59-103 20-142 59-59 86-59 142c0 55 20 103 59 142s87 59 142 59"/></symbol>
		<symbol id="cc-sa" fill="currentColor" viewBox="0 0 512 512"><path d="M255 94c39 0 70 13 92 38 23 24 34 56 34 95 0 38-12 69-35 94-25 26-56 38-92 38-27 0-52-8-73-25-20-17-31-40-36-71h62c2 29 20 44 54 44 17 0 31-7 42-22 10-15 15-35 15-60 0-26-4-46-14-59-10-14-24-21-42-21-33 0-51 15-55 44h18l-49 48-48-48h18c5-31 18-54 37-70 20-17 44-25 72-25m1-116c68 0 126 24 174 72s72 106 72 174-24 125-72 174c-48 48-106 72-174 72s-125-24-174-72c-48-49-72-106-72-174S34 98 82 50c49-48 106-72 174-72m0 447c55 0 103-20 142-59s59-87 59-142c0-56-20-103-59-142s-87-59-142-59-103 20-142 59-59 86-59 142c0 55 20 103 59 142s87 59 142 59"/></symbol>
		<symbol id="cc-share" fill="currentColor" viewBox="0 0 512 512"><path d="M356 153c4 0 8 2 11 4 2 3 4 6 4 10v181c0 3-2 6-4 9-3 3-7 4-11 4H223c-4 0-7-1-10-4s-4-6-4-9v-53h-53c-4 0-7-2-10-4-2-3-4-7-4-11V100c0-4 1-7 3-9s5-4 10-5h135c3 0 6 1 9 4s4 6 4 10v53h53m-135 0h55v-40H169v154h40V167c0-4 1-7 4-10 1-1 4-2 8-4m122 182V180H236v155h107M256-22c68 0 126 24 174 72s72 106 72 174-24 125-72 174c-48 48-106 72-174 72s-125-24-174-72c-48-49-72-106-72-174S34 98 82 50c49-48 106-72 174-72m0 447c55 0 103-20 142-59s59-87 59-142c0-56-20-103-59-142s-87-59-142-59-103 20-142 59-59 86-59 142c0 55 20 103 59 142s87 59 142 59"/></symbol>
		<symbol id="cc-zero" fill="currentColor" viewBox="0 0 512 512"><path d="M256 82c37 0 63 13 78 41 16 28 23 61 23 101 0 39-7 72-23 100-15 27-41 41-78 41s-63-14-78-41c-16-28-23-61-23-100 0-40 7-73 23-101 15-28 41-41 78-41m-44 142c0 6 1 17 2 34l54-100c5-8 4-15-3-21-4-1-7-2-9-2-29 0-44 30-44 89m44 88c29 0 44-29 44-88 0-14-1-28-3-43l-60 104c-8 11-6 19 6 24 0 1 1 1 3 1 0 0 1 0 1 1 0 0 2 0 4 1h5m0-334c68 0 126 24 174 72s72 106 72 174-24 125-72 174c-48 48-106 72-174 72s-125-24-174-72c-48-49-72-106-72-174S34 98 82 50c49-48 106-72 174-72m0 447c55 0 103-20 142-59s59-87 59-142c0-56-20-103-59-142s-87-59-142-59-103 20-142 59-59 86-59 142c0 55 20 103 59 142s87 59 142 59"/></symbol>
		<symbol id="cc" fill="currentColor" viewBox="0 0 512 512"><path d="M253-22c68 0 126 23 174 70s73 104 75 172c0 68-23 127-70 175s-105 73-173 75c-68 0-126-23-175-70-48-48-73-105-74-173S32 100 79 52c48-48 106-73 174-74m6 440c53-1 99-21 136-59 38-38 56-84 56-138-1-54-21-100-59-137-39-37-85-55-138-55-54 1-100 21-137 59s-55 84-55 138c1 54 21 100 59 137s84 55 138 55m-63-153c13 0 23-7 29-21l29 16c-7 12-15 21-26 26-11 7-23 11-35 11-22 0-39-7-52-20-13-12-19-30-19-53s6-41 19-54 30-20 49-20c30 0 51 12 64 34l-32 16c-3-6-7-11-12-14s-10-4-14-4c-21 0-31 14-31 42 0 13 2 23 7 30 6 7 14 11 24 11m136 0c14 0 24-7 28-21l30 16c-6 11-15 20-25 26-11 7-23 11-36 11-22 0-39-7-51-20-13-12-20-30-20-53 0-22 7-40 20-54 12-13 29-20 50-20 28 0 49 12 61 34l-31 16c-3-6-7-11-12-14s-9-4-14-4c-21 0-32 14-32 42 0 12 3 22 8 30 6 7 14 11 24 11"/></symbol>
		<symbol id="graph" fill="currentColor" viewBox="0 0 512 512"><path d="M130 446c10 0 18-9 18-18V260c0-11-9-19-18-19H20c-10 0-17 9-17 19v167c0 10 8 18 17 18h110zM38 279h73v129H38zm163 167h110c10 0 18-9 18-18V11c0-11-9-19-18-19H201c-10 0-18 9-18 19v417c0 9 8 18 18 18zm18-417h73v379h-73zm273 60H382c-10 0-18 9-18 19v319c0 10 9 18 18 18h110c10 0 17-9 17-18V108c0-11-7-19-17-19zm-18 319h-73V126h73z"/></symbol>
		<symbol id="search" fill="currentColor" viewBox="0 0 512 512"><path d="M493 384L368 259c18-29 29-62 29-99 0-106-86-192-192-192S13 54 13 160s86 192 192 192c36 0 70-11 99-28l125 124c9 9 23 9 32 0l32-32c9-9 9-23 0-32zm-288-96c-71 0-128-57-128-128S134 32 205 32c70 0 128 57 128 128s-58 128-128 128z"/></symbol>
		<symbol id="share-books" fill="currentColor" viewBox="0 0 512 512"><path d="M240 188v36h36zm56-28h36l-36-36zM256-32C115-32 0 83 0 224s115 256 256 256 256-115 256-256S397-32 256-32zm40 256v104c0 9-7 16-16 16h-96c-9 0-16-7-16-16V184c0-9 7-16 16-16h56v3l4-3 52 52-3 4zm56-64v104c0 9-7 16-16 16h-24v-16h24v-88h-40c-9 0-16-7-16-16v-40h-40v32h-16v-32c0-9 7-16 16-16h56v3l4-3 52 52-3 4zm-128 64v-40h-40v144h96v-88h-40c-9 0-16-7-16-16z"/></symbol>
		<symbol id="speechbubble" fill="currentColor" viewBox="0 0 512 512"><path d="M375 169H123c-7 0-12-7-12-14 0-8 5-14 12-14h252c7 0 12 6 12 14 0 7-5 14-12 14zm-29 55c0-8-6-14-13-14H123c-7 0-12 6-12 14s5 14 12 14h210c7 0 13-6 13-14zm99 125h18c27 0 49-22 49-48V78c0-27-22-48-49-48H49C22 30 0 52 0 78v223c0 26 22 47 49 47h305l45 70zm16-291c13 0 23 10 23 23v224c0 13-10 23-23 23h-32l-31 48-31-48H51c-13 0-23-10-23-23V81c0-13 10-23 23-23z"/></symbol>="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M375 169H123c-7 0-12-7-12-14 0-8 5-14 12-14h252c7 0 12 6 12 14 0 7-5 14-12 14zm-29 55c0-8-6-14-13-14H123c-7 0-12 6-12 14s5 14 12 14h210c7 0 13-6 13-14zm99 125h18c27 0 49-22 49-48V78c0-27-22-48-49-48H49C22 30 0 52 0 78v223c0 26 22 47 49 47h305l45 70zm16-291c13 0 23 10 23 23v224c0 13-10 23-23 23h-32l-31 48-31-48H51c-13 0-23-10-23-23V81c0-13 10-23 23-23z"/></symbol>
	</defs>
</svg>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pressbooks-book' ); ?></a>
	<?php get_template_part( 'partials/content', 'accessibility-toolbar' ); ?>

	<header class="header" role="banner">
		<div class="header__inside">
			<div class="header__brand">
				<a aria-label="<?php echo get_bloginfo( 'name', 'display' ); ?>" href="<?php echo network_home_url(); ?>">
					<?php
					$root_id = get_network()->site_id;
					if ( has_custom_logo( $root_id ) ) {
						?>
						<?php
						switch_to_blog( $root_id );
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						printf(
							'<img class="header__logo--img" src="%1$s" srcset="%2$s" alt="%3$s" />',
							wp_get_attachment_image_src( $custom_logo_id, 'logo' )[0],
							wp_get_attachment_image_srcset( $custom_logo_id, 'large' ),
							/* translators: %s: name of network */
							sprintf( __( 'Logo for %s', 'pressbooks-book' ), get_bloginfo( 'name', 'display' ) )
						);
						restore_current_blog();
						?>
					<?php } else { ?>
					<svg class="header__logo--svg" aria-role="img">
						<use xlink:href="#logo-pressbooks" />
					</svg><?php } ?>
				</a>
			</div>
			<div class="header__nav">
				<a class="header__nav-icon js-header-nav-toggle" href="#navigation"><?php _e( 'Toggle Menu', 'pressbooks-book' ); ?><span class="header__nav-icon__icon"></span></a>
				<nav class="js-header-nav" id="navigation">
					<ul id="nav-primary-menu" class="nav--primary">
						<?php echo \Pressbooks\Book\Helpers\display_menu(); ?>
					</ul>
				</nav>
			</div>
		</div>
		<?php if ( ! is_front_page() && pb_get_first_post_id() ) { ?>
			<div class="reading-header">
				<nav class="reading-header__inside">
					<div class="reading-header__toc dropdown">
						<h3 class="reading-header__toc__title"><?php _e( 'Contents', 'pressbooks-book' ); ?></h3>
						<div class="block-reading-toc">
							<?php include( locate_template( 'partials/content-toc.php' ) ); ?>
						</div>
					</div>
					<?php /* translators: %s: the title of the book */ ?>
					<h1 class="reading-header__title" ><a href="<?php echo home_url( '/' ); ?>" title="<?php printf( __( 'Go to the cover page of %s', 'pressbooks-book' ), esc_attr( get_bloginfo( 'name', 'display' ) ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

					<div class="reading-header__end-container">
						<?php if ( array_filter( get_option( 'pressbooks_ecommerce_links', [] ) ) ) : ?>
						<a href="<?php echo home_url( '/buy/' ); ?>"><?php _e( 'Buy', 'pressbooks-book' ); ?></a>
						<?php endif; ?>
					</div>
				</nav>
			</div>
		<?php } ?>
	</header>

	<main id="main">
	<div id="content" class="site-content">
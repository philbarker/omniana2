<?php
defined( 'ABSPATH' ) or die( 'Be good. If you can\'t be good be careful' );
$options_arr = get_option( 'wdtax_options' );
if ( isset( $options_arr['rels'] ) ) {
  echo('<h4>about</h4>');
}

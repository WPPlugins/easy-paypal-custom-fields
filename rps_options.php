<?php

	// Get Saved options
	$options = get_option( 'rps_myplugin_options' );
	$op_user_email = $options['username'];
	$op_currency = $options['currency'];
	$op_button = $options['buttontext'];
	$op_url = $options['url'];
	$op_button_type = $options['button-type'];
	$op_theme = $options['theme'];
	$op_post_type = $options['post-type'];
	
	// Get the array of stored values
	$rps_array = get_post_meta( $post->ID, '_rps_array', true );
	
	// Get the individual values stored in the array, check if the value is set, if not, set it to be an empty string;
	$show = ( isset( $rps_array['show'] ) && !empty( $rps_array['show'] ) ) ? $rps_array['show'] : 'no';
	$name = ( isset( $rps_array['name'] ) && !empty( $rps_array['name'] ) ) ? $rps_array['name'] : '';
	// $desc = ( isset( $rps_array['desc'] ) ) ? $rps_array['desc'] : '';
	$amount = ( isset ( $rps_array['amount'] ) ) ? $rps_array['amount'] : '';
	$postage = ( isset ( $rps_array['postage'] ) ) ? $rps_array['postage'] : '';
	$item_no = ( isset ( $rps_array['item_no'] ) ) ? $rps_array['item_no'] : '';
	
	// Defaults - use defaults if nothing else is specified.
	$user_email = ( isset( $rps_array['username'] ) && !empty( $rps_array['username'] ) ) ? $rps_array['username'] : $op_user_email;
	$currency = ( isset( $rps_array['currency'] ) && !empty( $rps_array['currency'] ) ) ? $rps_array['currency'] : $op_currency;
	$button = ( isset( $rps_array['buttontext'] ) && !empty( $rps_array['buttontext'] ) ) ? $rps_array['buttontext'] : $op_button;
	$bt = ( isset( $rps_array['button-type'] ) && !empty( $rps_array['button-type'] ) ) ? $rps_array['button-type'] : $op_button_type;
	$url = ( isset( $rps_array['url'] ) && !empty( $rps_array['url'] ) ) ? $rps_array['url'] : $op_url;
	$theme = ( isset( $rps_array['theme'] ) && !empty( $rps_array['theme'] ) ) ? $rps_array['theme'] : $op_theme;
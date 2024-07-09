<?php

/*
  Plugin Name: mak&rsquo;s Boilerplate Block Plugin
  Version: 1.0
  Author: mak
  Author URI: https://github.com/LearnWebCode
*/

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function maksboilerplateblocktailwindreactregister() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'maksboilerplateblocktailwindreactregister' );
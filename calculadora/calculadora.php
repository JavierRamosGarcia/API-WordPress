<?php
/*
Plugin Name: Calculadora API
Plugin URI: https://www.linkedin.com/in/javier-ramos/
Description: Plugin para enviar datos de una calculadora a una API
Version: 1.0
Author: Javier Ramos
Author URI: https://www.linkedin.com/in/javier-ramos/
License: GPLv2
*/


defined('ABSPATH') or die("Hasta luego");


require_once( plugin_dir_path(__FILE__) . 'admin/inicio.php');

wp_enqueue_style( 'bootstrap', plugin_dir_url( __FILE__ ) . 'css/bootstrap.css' );
wp_enqueue_style( 'custom', plugin_dir_url( __FILE__ ) . 'css/custom.css' );

wp_enqueue_script( 'jquery', plugin_dir_url( __FILE__ ) . 'js/jquery-3.6.4.min.js', array( 'jquery' ), '3.6', true );
wp_enqueue_script( 'calc-control', plugin_dir_url( __FILE__ ) . 'js/calc-control.js', array( 'jquery' ), '1.0', true );



add_action('admin_menu', 'calc_menu_admin');

function calc_menu_admin() {


    add_menu_page('Mi Plugin', 'Calculadora', 'administrator', '/calculadora', 'calc_dashboard');
}

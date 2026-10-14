<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_enqueue_scripts', function () {
	$css = '
		#masthead,
		.site-header {
			position: sticky !important;
			top: 0;
			z-index: 9999;
			background: #ffffff !important;
			box-shadow: 0 2px 10px rgba(0,0,0,.12);
		}
		.ast-primary-header-bar,
		.main-header-bar {
			background: #ffffff !important;
		}
		body, .entry-content, .entry-content p, h1, h2, h3, h4, .site-content {
			color: #0f172a !important;
		}
		.home .entry-header {
			display: none;
		}
		.club-exam-footer {
			background: #111827;
			color: #e5e7eb;
			padding: 22px 16px;
			text-align: center;
			font-size: 14px;
			line-height: 1.7;
		}
		.club-exam-footer a { color: #93c5fd; text-decoration: underline; }
		.club-exam-footer .club-social a { margin: 0 8px; }
	';
	wp_register_style( 'club-exam', false, array(), '1.1' );
	wp_enqueue_style( 'club-exam' );
	wp_add_inline_style( 'club-exam', $css );
} );

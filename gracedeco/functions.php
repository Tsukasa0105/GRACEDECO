<?php
/**
 * GRACE DECO theme functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'GRACEDECO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme setup.
 */
function gracedeco_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'gracedeco_setup' );

/**
 * Add a "js" class as early as possible so reveal animations only hide content when JS is available.
 */
function gracedeco_js_class() {
	echo "<script>document.documentElement.classList.add('js');</script>\n";
}
add_action( 'wp_head', 'gracedeco_js_class', 0 );

/**
 * Enqueue styles and scripts.
 */
function gracedeco_enqueue_assets() {
	wp_enqueue_style(
		'gracedeco-fonts',
		'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&family=Noto+Serif+JP:wght@300;400;500;600;700;900&family=Noto+Sans+JP:wght@300;400;500;700&display=swap',
		array(),
		null
	);
	wp_enqueue_style(
		'gracedeco-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'gracedeco-fonts' ),
		GRACEDECO_VERSION
	);
	wp_enqueue_script(
		'gracedeco-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		GRACEDECO_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'gracedeco_enqueue_assets' );

/**
 * Preconnect to Google Fonts.
 */
function gracedeco_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = array( 'href' => 'https://fonts.gstatic.com', 'crossorigin' );
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'gracedeco_resource_hints', 10, 2 );

/**
 * Permalink of a top-level page by slug (falls back to /slug/ when the page does not exist yet).
 * "home" returns the site front page.
 */
function gracedeco_url( $slug ) {
	if ( 'home' === $slug ) {
		return home_url( '/' );
	}
	$page = get_page_by_path( $slug );
	if ( $page ) {
		return get_permalink( $page );
	}
	return home_url( '/' . $slug . '/' );
}

/**
 * URL of an image in assets/images/, or an empty string when the file has not been added yet.
 */
function gracedeco_image( $file ) {
	$path = get_theme_file_path( 'assets/images/' . $file );
	return file_exists( $path ) ? get_theme_file_uri( 'assets/images/' . $file ) : '';
}

/**
 * Whether the given nav slug is the page currently displayed.
 */
function gracedeco_is_current( $slug ) {
	if ( 'home' === $slug ) {
		return is_front_page();
	}
	return is_page( $slug );
}

/**
 * Class attribute helper for nav links.
 */
function gracedeco_nav_class( $slug ) {
	return gracedeco_is_current( $slug ) ? ' class="active"' : '';
}

/**
 * Contact information shown in header / footer / contact page.
 */
function gracedeco_contact() {
	return array(
		'tel'       => '090-8398-3001',
		'mail'      => 'mhirano993@outlook.com',
		'instagram' => 'gracedeco_homestaging',
	);
}

/**
 * Contact form handler (admin-post.php).
 */
function gracedeco_handle_contact() {
	$redirect = wp_get_referer() ? wp_get_referer() : gracedeco_url( 'contact' );
	$redirect = remove_query_arg( 'gd_status', $redirect );

	if ( ! isset( $_POST['gracedeco_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['gracedeco_nonce'] ) ), 'gracedeco_contact' ) ) {
		wp_safe_redirect( add_query_arg( 'gd_status', 'error', $redirect ) . '#contact-form' );
		exit;
	}

	// Honeypot.
	if ( ! empty( $_POST['website'] ) ) {
		wp_safe_redirect( add_query_arg( 'gd_status', 'sent', $redirect ) . '#contact-form' );
		exit;
	}

	$company = isset( $_POST['company'] ) ? sanitize_text_field( wp_unslash( $_POST['company'] ) ) : '';
	$name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$tel     = isset( $_POST['tel'] ) ? sanitize_text_field( wp_unslash( $_POST['tel'] ) ) : '';
	$subject = isset( $_POST['subject'] ) ? sanitize_text_field( wp_unslash( $_POST['subject'] ) ) : '';
	$message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

	if ( '' === $company || '' === $name || ! is_email( $email ) || '' === $subject || '' === $message ) {
		wp_safe_redirect( add_query_arg( 'gd_status', 'invalid', $redirect ) . '#contact-form' );
		exit;
	}

	$to = apply_filters( 'gracedeco_contact_to', get_option( 'admin_email' ) );

	$body  = "会社名: {$company}\n";
	$body .= "お名前: {$name}\n";
	$body .= "メールアドレス: {$email}\n";
	$body .= "電話番号: {$tel}\n";
	$body .= "ご相談内容: {$subject}\n\n";
	$body .= "メッセージ:\n{$message}\n";

	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		'Reply-To: ' . $name . ' <' . $email . '>',
	);

	$sent = wp_mail(
		$to,
		'[' . wp_specialchars_decode( get_bloginfo( 'name' ), ENT_QUOTES ) . '] お問い合わせ: ' . $subject,
		$body,
		$headers
	);

	wp_safe_redirect( add_query_arg( 'gd_status', $sent ? 'sent' : 'error', $redirect ) . '#contact-form' );
	exit;
}
add_action( 'admin_post_nopriv_gracedeco_contact', 'gracedeco_handle_contact' );
add_action( 'admin_post_gracedeco_contact', 'gracedeco_handle_contact' );

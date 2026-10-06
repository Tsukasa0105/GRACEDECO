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
 * ' has-media' when the file (path relative to assets/) exists - used to hide the placeholder label.
 */
function gracedeco_has_media( $rel ) {
	return file_exists( get_theme_file_path( 'assets/' . $rel ) ) ? ' has-media' : '';
}

/**
 * Print an <img> (jpg/png/webp) or an autoplaying muted <video> (mp4) from assets/.
 * Prints nothing when the file does not exist, so the CSS placeholder stays visible.
 * Videos use assets/images/posters/{name}.jpg as poster when present.
 */
function gracedeco_media( $rel, $alt = '' ) {
	if ( ! gracedeco_has_media( $rel ) ) {
		return;
	}
	$url = get_theme_file_uri( 'assets/' . $rel );
	if ( 'mp4' === strtolower( pathinfo( $rel, PATHINFO_EXTENSION ) ) ) {
		$poster_rel = 'images/posters/' . pathinfo( $rel, PATHINFO_FILENAME ) . '.jpg';
		$poster     = file_exists( get_theme_file_path( 'assets/' . $poster_rel ) ) ? ' poster="' . esc_url( get_theme_file_uri( 'assets/' . $poster_rel ) ) . '"' : '';
		echo '<video class="gd-video" autoplay muted loop playsinline preload="metadata" aria-hidden="true"' . $poster . '><source src="' . esc_url( $url ) . '" type="video/mp4"></video>'; // phpcs:ignore WordPress.Security.EscapeOutput
		return;
	}
	echo '<img src="' . esc_url( $url ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">'; // phpcs:ignore WordPress.Security.EscapeOutput
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
 * Contact Form 7 integration.
 * The form is created automatically (once) from the markup below when the plugin is active,
 * and its ID is stored in the option "gracedeco_cf7_id". Edit the form freely in Contact Form 7 afterwards.
 */
function gracedeco_cf7_form_markup() {
	return <<<'CF7'
<div class="gd-form-group">
<label class="gd-form-label" for="gd-f-company">COMPANY NAME 会社名<span class="req">*</span></label>
[text* company id:gd-f-company class:gd-form-input autocomplete:organization placeholder "株式会社◯◯不動産"]
</div>
<div class="gd-form-group">
<label class="gd-form-label" for="gd-f-name">YOUR NAME お名前<span class="req">*</span></label>
[text* your-name id:gd-f-name class:gd-form-input autocomplete:name placeholder "山田 太郎"]
</div>
<div class="gd-form-group">
<label class="gd-form-label" for="gd-f-email">EMAIL メールアドレス<span class="req">*</span></label>
[email* your-email id:gd-f-email class:gd-form-input autocomplete:email placeholder "example@company.co.jp"]
</div>
<div class="gd-form-group">
<label class="gd-form-label" for="gd-f-tel">TEL 電話番号</label>
[tel tel id:gd-f-tel class:gd-form-input autocomplete:tel placeholder "03-1234-5678"]
</div>
<div class="gd-form-group">
<label class="gd-form-label" for="gd-f-subject">SUBJECT ご相談内容<span class="req">*</span></label>
[text* your-subject id:gd-f-subject class:gd-form-input placeholder "例：3LDKマンションのステージング相談"]
</div>
<div class="gd-form-group">
<label class="gd-form-label" for="gd-f-message">MESSAGE メッセージ<span class="req">*</span></label>
[textarea* your-message id:gd-f-message class:gd-form-textarea placeholder "物件の状況やご要望をご記入ください"]
</div>
<button type="submit" class="gd-form-btn"><span>SEND MESSAGE</span></button>
CF7;
}

/**
 * Create the Contact Form 7 form if it does not exist yet. Returns its ID (0 when CF7 is not active).
 */
function gracedeco_cf7_create_form() {
	if ( ! class_exists( 'WPCF7_ContactForm' ) ) {
		return 0;
	}

	$id = (int) get_option( 'gracedeco_cf7_id' );
	if ( $id && 'wpcf7_contact_form' === get_post_type( $id ) && 'trash' !== get_post_status( $id ) ) {
		return $id;
	}

	$form  = WPCF7_ContactForm::get_template( array( 'title' => 'GRACE DECO お問い合わせ' ) );
	$props = $form->get_properties();

	$props['form'] = gracedeco_cf7_form_markup();

	$to = apply_filters( 'gracedeco_contact_to', '[_site_admin_email]' );

	$props['mail'] = array_merge(
		$props['mail'],
		array(
			'subject'            => '[_site_title] お問い合わせ: [your-subject]',
			'sender'             => '[_site_title] <wordpress@' . wp_parse_url( home_url(), PHP_URL_HOST ) . '>',
			'recipient'          => $to,
			'additional_headers' => 'Reply-To: [your-email]',
			'use_html'           => false,
			'exclude_blank'      => false,
			'body'               => "会社名: [company]\nお名前: [your-name]\nメールアドレス: [your-email]\n電話番号: [tel]\nご相談内容: [your-subject]\n\nメッセージ:\n[your-message]\n\n-- \nこのメールは [_site_title] ([_site_url]) のお問い合わせフォームから送信されました。",
		)
	);

	$props['mail_2']['active'] = false;

	$props['messages']['mail_sent_ok'] = 'お問い合わせ内容を受け付けました。ありがとうございます。';

	$form->set_properties( $props );
	$form->save();

	$id = (int) $form->id();
	if ( $id ) {
		update_option( 'gracedeco_cf7_id', $id );
	}
	return $id;
}
add_action(
	'admin_init',
	function () {
		if ( current_user_can( 'manage_options' ) ) {
			gracedeco_cf7_create_form();
		}
	}
);

/**
 * ID of the Contact Form 7 form to show on the contact page (0 when unavailable).
 * Override with the "gracedeco_cf7_form_id" filter if a different form should be used.
 */
function gracedeco_cf7_id() {
	if ( ! class_exists( 'WPCF7_ContactForm' ) ) {
		return 0;
	}
	$id = (int) apply_filters( 'gracedeco_cf7_form_id', (int) get_option( 'gracedeco_cf7_id' ) );
	return ( $id && 'wpcf7_contact_form' === get_post_type( $id ) ) ? $id : 0;
}

/**
 * Do not let Contact Form 7 wrap the markup in <p>/<br>.
 */
add_filter( 'wpcf7_autop_or_not', '__return_false' );

/**
 * One-time setup: create the fixed pages the theme templates are bound to (by slug),
 * assign the front page, make sure pretty permalinks are on, and flush rewrite rules.
 * Runs on theme activation, and once more on the next admin page load for an already active theme.
 */
function gracedeco_setup_site() {
	$pages = array(
		'home'    => 'HOME',
		'about'   => 'ABOUT',
		'service' => 'SERVICE',
		'flow'    => 'FLOW',
		'case'    => 'CASE',
		'company' => 'COMPANY',
		'contact' => 'CONTACT',
	);

	$ids = array();
	foreach ( $pages as $slug => $title ) {
		$existing = get_page_by_path( $slug );
		if ( $existing ) {
			$ids[ $slug ] = $existing->ID;
			continue;
		}
		$id = wp_insert_post(
			array(
				'post_type'   => 'page',
				'post_status' => 'publish',
				'post_title'  => $title,
				'post_name'   => $slug,
			)
		);
		if ( $id && ! is_wp_error( $id ) ) {
			$ids[ $slug ] = $id;
		}
	}

	// Front page: only when no static front page has been chosen yet.
	if ( 'page' !== get_option( 'show_on_front' ) || ! get_option( 'page_on_front' ) ) {
		if ( ! empty( $ids['home'] ) ) {
			update_option( 'show_on_front', 'page' );
			update_option( 'page_on_front', $ids['home'] );
		}
	}

	// Plain permalinks make /about/ etc. return "page not found".
	if ( '' === get_option( 'permalink_structure' ) ) {
		global $wp_rewrite;
		$wp_rewrite->set_permalink_structure( '/%postname%/' );
	}

	flush_rewrite_rules( true );
	update_option( 'gracedeco_setup_version', '1' );
}
add_action( 'after_switch_theme', 'gracedeco_setup_site' );

function gracedeco_maybe_setup_site() {
	if ( '1' !== get_option( 'gracedeco_setup_version' ) && current_user_can( 'manage_options' ) ) {
		gracedeco_setup_site();
	}
}
add_action( 'admin_init', 'gracedeco_maybe_setup_site' );

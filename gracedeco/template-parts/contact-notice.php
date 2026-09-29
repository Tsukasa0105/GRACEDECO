<?php
/**
 * Contact form status message.
 */
// phpcs:ignore WordPress.Security.NonceVerification.Recommended
$status = isset( $_GET['gd_status'] ) ? sanitize_key( wp_unslash( $_GET['gd_status'] ) ) : '';
$notices = array(
	'sent'    => array( 'success', 'お問い合わせ内容を受け付けました。ありがとうございます。' ),
	'invalid' => array( 'error', '未入力または形式の誤りがあります。内容をご確認のうえ、再度送信してください。' ),
	'error'   => array( 'error', '送信に失敗しました。お手数ですが時間をおいて再度お試しください。' ),
);
?>
<div id="contact-form"></div>
<?php if ( isset( $notices[ $status ] ) ) : ?>
  <div class="gd-form-notice <?php echo esc_attr( $notices[ $status ][0] ); ?>" role="status"><?php echo esc_html( $notices[ $status ][1] ); ?></div>
<?php endif; ?>

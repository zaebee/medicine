<?php
/**
 * AJAX Handlers for Pchelka Theme
 *
 * @package Pchelka
 */

/**
 * Handle Contact Form Submission
 */
function pchelka_handle_contact_form() {
    // 1. Check nonce for security
    check_ajax_referer( 'pchelka_ajax_nonce', 'nonce' );

    // 2. Sanitize and retrieve form data
    $name = sanitize_text_field( $_POST['name'] );
    $phone = sanitize_text_field( $_POST['phone'] );
    $email = sanitize_email( $_POST['email'] );
    $message = sanitize_textarea_field( $_POST['message'] );

    // 3. Validate data
    if ( empty($name) || empty($phone) || empty($message) ) {
        wp_send_json_error( array( 'message' => 'Пожалуйста, заполните все обязательные поля.' ) );
    }

    // 4. Prepare and send email
    $to = get_option( 'admin_email' );
    $subject = 'Новый вопрос с сайта "Клиника Пчёлка" от ' . $name;
    $body = "Вы получили новый вопрос с контактной формы:\n\n";
    $body .= "Имя: " . $name . "\n";
    $body .= "Телефон: " . $phone . "\n";
    if ( !empty($email) ) {
        $body .= "Email: " . $email . "\n";
    }
    $body .= "Сообщение:\n" . $message;

    $headers = array('Content-Type: text/plain; charset=UTF-8');
    if ( !empty($email) ) {
        $headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';
    }

    $sent = wp_mail( $to, $subject, $body, $headers );

    // 5. Send JSON response
    if ( $sent ) {
        wp_send_json_success( array( 'message' => 'Спасибо! Мы получили ваше сообщение и свяжемся с вами в ближайшее время.' ) );
    } else {
        wp_send_json_error( array( 'message' => 'Произошла ошибка при отправке. Пожалуйста, попробуйте еще раз.' ) );
    }

    // Always die in functions echoing AJAX content
    wp_die();
}
add_action( 'wp_ajax_contact_form', 'pchelka_handle_contact_form' );
add_action( 'wp_ajax_nopriv_contact_form', 'pchelka_handle_contact_form' );
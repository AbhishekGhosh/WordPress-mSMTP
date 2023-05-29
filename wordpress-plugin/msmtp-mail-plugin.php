<?php
/**
 * Plugin Name: msmtp mail plugin
 * Plugin URI: https://thecustomizewindows.com
 * Description: Helps WordPress to send email using msmtp configaration on server
 * Author: Abhishek_Ghosh
 * Author URI: https://thecustomizewindows.com
 * Version: 1.0
 */

/**
 * This function will connect wp_mail to your authenticated mSMTP server.
 * snippet reference:  
 * https://www.e-tinkers.com/2020/09/simple-steps-to-setup-wordpress-smtp-email-without-a-plugin/
 */
add_action( 'phpmailer_init', 'send_smtp_email' );
function send_smtp_email( $phpmailer ) {
        if ( ! is_object( $phpmailer ) ) {
                $phpmailer = (object) $phpmailer;
        }

        $phpmailer->Mailer     = 'smtp';
        $phpmailer->Host       = SMTP_HOST;
        $phpmailer->SMTPAuth   = SMTP_AUTH;
        $phpmailer->Port       = SMTP_PORT;
        $phpmailer->Username   = SMTP_USER;
        $phpmailer->Password   = SMTP_PASS;
        $phpmailer->SMTPSecure = SMTP_SECURE;
        $phpmailer->From       = SMTP_FROM;
        $phpmailer->FromName   = SMTP_NAME;
}

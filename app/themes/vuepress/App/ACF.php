<?php

namespace AD\App;

use AD\App\Interfaces\WordPressHooks;

/**
 * Class ACF
 *
 * @package AD Starter\App
 */
class ACF implements WordPressHooks {

    /**
     * Add class hooks.
     */
    public function addHooks() {
        add_action( 'init', [ $this, 'addOptionsPage' ] );
    }

    /**
     * ACF Options Panels
     */
    public function addOptionsPage() {
        if ( function_exists( 'acf_add_options_page' ) ) {
            acf_add_options_page( [
                'page_title' => __( 'Site Options', 'ad-starter' ),
                'menu_title' => __( 'Options', 'ad-starter' ),
                'menu_slug'  => 'theme-general-options',
                'capability' => 'edit_posts',
                'position'   => 28,
                'icon_url'   => 'dashicons-admin-settings',
                'redirect'   => false
            ] );
        }
    }
}
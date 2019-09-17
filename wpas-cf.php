<?php

/**
 * @package   Awesome Support/Custom Fields
 * @author    We-Code Digital Studio <info@we-code.it>
 * @license   GPL-2.0+
 * @link      https://we-code.it
 * @copyright 2019 We-Code Digital Studio
 *
 * @wordpress-plugin
 * Plugin Name:       WPAS-CF
 * Plugin URI:        
 * Description:       Adds custom fields to the Awesome Support ticket submission form.
 * Version:           0.1.0
 * Author:            We-Code Digital Studio
 * Author URI:        https://we-code.it
 * Text Domain:       wpas
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

function wpas_user_custom_fields()
{
    if (function_exists('wpas_add_custom_field')) {

        wpas_add_custom_field('campo_custom',  array(
            'title' => __('Campo custom', 'wpas'),
            'field_type' => 'text',
            'required' => true
        ));

        wpas_add_custom_field('campo_custom_2',  array(
            'title' => __('Campo custom 2', 'wpas'),
            'field_type' => 'date-field',
            'required' => true
        ));


        wpas_add_custom_field('my_field_with_options', array(
            'title' => 'My Options',
            'field_type' => 'select',
            'options' => array(
                'option1' => 'First Option',
                'option2' => 'Second Option'
            ),
            'order' => 1
        ));

        wpas_add_custom_field('campo_custom_4',  array(
            'title' => __('Campo custom 4', 'wpas'),
            'field_type' => 'number',
            'required' => true
        ));

        wpas_add_custom_field('campo_custom_5',  array(
            'title' => __('Campo custom 5', 'wpas'),
            'field_type' => 'upload',
            'required' => true
        ));

        wpas_add_custom_field('campo_custom_6',  array(
            'title' => __('Campo custom 6', 'wpas'),
            'field_type' => 'checkbox',
            'required' => true,
            'options' => array(
                'option1' => 'First Option',
                'option2' => 'Second Option'
            ),
            'order' => 1
        ));
    }
}

add_action('plugins_loaded', 'wpas_user_custom_fields');

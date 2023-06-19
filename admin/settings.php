 <?php

// Register the settings page
function my_simulator_register_settings_page() {
    add_submenu_page(
        'options-general.php', 
        'My Simulator Settings', 
        'My Simulator', 
        'manage_options', 
        'my-simulator-settings', 
        'my_simulator_render_settings_page' 
    );
}
add_action( 'admin_menu', 'my_simulator_register_settings_page' );

// Register and sanitize the plugin settings
function my_simulator_register_settings() {
    register_setting(
        'my_simulator_settings',
        'my_simulator_options', 
        'my_simulator_sanitize_settings'
    );

    add_settings_section(
        'my_simulator_general_section', 
        'General Settings', 
        '', 
        'my_simulator_settings'
    );

    add_settings_field(
        'my_simulator_option_1', 
        'Formulaires étape 1',
        'my_simulator_render_option_1_field', 
        'my_simulator_settings', 
        'my_simulator_general_section' 
    );

    add_settings_field(
        'my_simulator_option_2',
        'Formulaires étape 2',
        'my_simulator_render_option_2_field', 
        'my_simulator_settings', 
        'my_simulator_general_section' 
    );

    add_settings_field(
        'my_simulator_option_3',
        'Titre du résultat',
        'my_simulator_render_option_3_field', 
        'my_simulator_settings', 
        'my_simulator_general_section' 
    );

    add_settings_field(
        'my_simulator_option_4',
        'Ligne 1:',
        'my_simulator_render_option_4_field', 
        'my_simulator_settings', 
        'my_simulator_general_section' 
    );

    add_settings_field(
        'my_simulator_option_5',
        'Ligne 2:',
        'my_simulator_render_option_5_field', 
        'my_simulator_settings', 
        'my_simulator_general_section' 
    );

    add_settings_field(
        'my_simulator_option_6',
        'Ligne 3:',
        'my_simulator_render_option_6_field', 
        'my_simulator_settings', 
        'my_simulator_general_section' 
    );
}
add_action( 'admin_init', 'my_simulator_register_settings' );

// Sanitize the plugin settings
function my_simulator_sanitize_settings( $input ) {
    $sanitized_input = array();

    // Sanitize and validate each setting
    if ( isset( $input['my_simulator_option_1'] ) ) {
        $sanitized_input['my_simulator_option_1'] = sanitize_text_field( $input['my_simulator_option_1'] );
    }

    if ( isset( $input['my_simulator_option_2'] ) ) {
        $sanitized_input['my_simulator_option_2'] = sanitize_text_field( $input['my_simulator_option_2'] );
    }

    if ( isset( $input['my_simulator_option_3'] ) ) {
        $sanitized_input['my_simulator_option_3'] = sanitize_text_field( $input['my_simulator_option_3'] );
    }

    if ( isset( $input['my_simulator_option_4'] ) ) {
        $sanitized_input['my_simulator_option_4'] = sanitize_text_field( $input['my_simulator_option_4'] );
    }

    if ( isset( $input['my_simulator_option_5'] ) ) {
        $sanitized_input['my_simulator_option_5'] = sanitize_text_field( $input['my_simulator_option_5'] );
    }

    if ( isset( $input['my_simulator_option_6'] ) ) {
        $sanitized_input['my_simulator_option_6'] = sanitize_text_field( $input['my_simulator_option_6'] );
    }

    // Save the sanitized input directly to the wp_my_simulator_data table
    global $wpdb;
    $wpdb->update(
        'wp_my_simulator_data',
        array( 'settings' => json_encode( $sanitized_input ) ),
        array( 'id' => 1 )
    );

    return $sanitized_input;
}

// Render the Option 1 field HTML
function my_simulator_render_option_1_field() {
    $options = get_option( 'my_simulator_options' );
    $value = isset( $options['my_simulator_option_1'] ) ? $options['my_simulator_option_1'] : '';

    echo '<select name="my_simulator_options[my_simulator_option_1]">';
    echo '<option value="">Select a form</option>';

    // Get the list of Contact Form 7 forms
    $forms = get_posts( 'post_type=wpcf7_contact_form&posts_per_page=-1' );
    foreach ( $forms as $form ) {
        echo '<option value="' . $form->ID . '" ' . selected( $value, $form->ID, false ) . '>' . esc_html( $form->post_title ) . '</option>';
    }

    echo '</select>';
}

// Render the Option 2 field HTML
function my_simulator_render_option_2_field() {
    $options = get_option( 'my_simulator_options' );
    $value = isset( $options['my_simulator_option_2'] ) ? $options['my_simulator_option_2'] : '';

    echo '<select name="my_simulator_options[my_simulator_option_2]">';
    echo '<option value="">Select a form</option>';

    // Get the list of Contact Form 7 forms
    $forms = get_posts( 'post_type=wpcf7_contact_form&posts_per_page=-1' );
    foreach ( $forms as $form ) {
        echo '<option value="' . $form->ID . '" ' . selected( $value, $form->ID, false ) . '>' . esc_html( $form->post_title ) . '</option>';
    }

    echo '</select>';
}

// Render the Option 3 field HTML
function my_simulator_render_option_3_field() {
    $options = get_option( 'my_simulator_options' );
    $value = isset( $options['my_simulator_option_3'] ) ? $options['my_simulator_option_3'] : '';

    echo '<input type="text" name="my_simulator_options[my_simulator_option_3]" value="' . esc_attr( $value ) . '">';
}

// Render the Option 4 field HTML
function my_simulator_render_option_4_field() {
    $options = get_option( 'my_simulator_options' );
    $value = isset( $options['my_simulator_option_4'] ) ? $options['my_simulator_option_4'] : '';

    echo '<input type="text" name="my_simulator_options[my_simulator_option_4]" value="' . esc_attr( $value ) . '">';
}

// Render the Option 5 field HTML
function my_simulator_render_option_5_field() {
    $options = get_option( 'my_simulator_options' );
    $value = isset( $options['my_simulator_option_5'] ) ? $options['my_simulator_option_5'] : '';

    echo '<input type="text" name="my_simulator_options[my_simulator_option_5]" value="' . esc_attr( $value ) . '">';
}

// Render the Option 6 field HTML
function my_simulator_render_option_6_field() {
    $options = get_option( 'my_simulator_options' );
    $value = isset( $options['my_simulator_option_6'] ) ? $options['my_simulator_option_6'] : '';

    echo '<input type="text" name="my_simulator_options[my_simulator_option_6]" value="' . esc_attr( $value ) . '">';
}

// Render the settings page HTML
function my_simulator_render_settings_page() {
        if ( isset( $_POST['my_simulator_options'] ) ) {
        // Save the form data to the database using your custom function
        my_simulator_save_form_data( $_POST['my_simulator_options'] );

        // Display a success message
        echo '<div class="notice notice-success"><p>Form data saved successfully!</p></div>';
    }
    ?>
    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

        <?php settings_errors( 'my_simulator_messages' ); ?>

        <form method="post" action="">
            <?php
            settings_fields( 'my_simulator_settings' ); // Output the settings fields
            do_settings_sections( 'my_simulator_settings' ); // Output the settings sections
            submit_button(); // Output the submit button
            ?>
        </form>
    </div>
    <?php
}
// Custom function to save form data to the database
function my_simulator_save_form_data( $form_data ) {
    // Sanitize and validate the form data as needed
    $sanitized_data = array();

    if ( isset( $form_data['my_simulator_option_1'] ) ) {
        $sanitized_data['option_1'] = sanitize_text_field( $form_data['my_simulator_option_1'] );
    }

    if ( isset( $form_data['my_simulator_option_2'] ) ) {
        $sanitized_data['option_2'] = sanitize_text_field( $form_data['my_simulator_option_2'] );
    }


    // Save the sanitized data to the database
    global $wpdb;
    $table_name = $wpdb->prefix . 'my_simulator_data';

    $wpdb->insert( $table_name, $sanitized_data );
}
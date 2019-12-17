<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
}















function register_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'side-menu' => __('SIDEMENU MAIN MENU'),
            'side-menu1' => __('SIDEMENU OTHER'),
            'side-menu2' => __('SIDEMENU IMPORTANT'),
            'side-menu3' => __('SIDEMENU LEGAL'),
            'bottom-menu' => __('Bottom Menu')
        )
    );
    //flush_rewrite_rules();
}
add_theme_support('post-thumbnails');

add_filter( 'nav_menu_css_class', 'special_nav_class', 10, 3 );
function special_nav_class( $classes, $item, $args ) {
    if ( 'primary-menu' === $args->theme_location ) {
        $classes[] = 'justify-content-center align-self-center my-auto';
    }

    return $classes;
}





function create_post_type()
{
    
   register_post_type('social',
        array(
            'labels' => xcompile_social_labels('Social', 'Socials'),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-share',
            'description' => 'Spoke Members',
            'register_meta_box_cb' => 'social_meta_box',
            'taxonomies' => [],
            'supports' => array(
                'title',
                'editor',
                'revisions',
                'thumbnail'
            )
        )
    );
    
    register_post_type('interview',
        array(
            'labels' => xcompile_post_type_labels('Interview', 'Interviews'),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-text-page',
            'description' => 'Spoke Interviews',
            'register_meta_box_cb' => 'interview_meta_box',
            'taxonomies' => ['category'],
            'supports' => array(
                'title',
                'editor',
                'revisions',
                'thumbnail'
            )
        )
    );

    register_post_type('member',
        array(
            'labels' => xcompile_member_labels('Member', 'Members'),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-groups',
            'description' => 'Spoke Members',
            'register_meta_box_cb' => 'member_meta_box',
            'taxonomies' => [],
            'supports' => array(
                'title',
                'editor',
                'revisions',
                'thumbnail'
            )
        )
    );

    register_post_type('press',
        array(
            'labels' => xcompile_press_labels('Press', 'Press'),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-id',
            'description' => 'Spoke Presses',
            'register_meta_box_cb' => 'press_meta_box',
            'taxonomies' => [],
            'supports' => array(
                'title',
                'editor',
                'revisions',
                'thumbnail'
            )
        )
    );

    register_post_type('title_sponsor',
        array(
            'labels' => xcompile_sponsor_labels('Title Sponsor', 'Title Sponsors'),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-tag',
            'description' => 'Spoke Title Sponsor',
            'register_meta_box_cb' => 'title_sponsor_meta_box',
            'taxonomies' => ['category'],
            'supports' => array(
                'title',
                'editor',
                'revisions',
                'thumbnail'
            )
        )
    );

    register_post_type('country_sponsor',
        array(
            'labels' => xcompile_sponsor_labels('Country Sponsor', 'Country Sponsors'),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-admin-site-alt2',
            'description' => 'Spoke Country Sponsor',
            'register_meta_box_cb' => 'sponsor_meta_box',
            //'taxonomies' => ['category'],
            'supports' => array(
                'title',
                'editor',
                'revisions',
                'thumbnail'
            )
        )
    );


register_taxonomy('Country', 'country_sponsor',array("hierarchical" => true,"label" => "Country","singular_label" => "country",'update_count_callback' => '_update_post_term_count','query_var' => true,'rewrite' => array( 'slug' => 'country', 'with_front' => false ),'public' => true,'show_ui' => true,'show_tagcloud' => true,'_builtin' => false,'show_in_nav_menus' => false));


register_post_type('top_sponsor_1',
        array(
            'labels' => xcompile_sponsor_labels('Top Sponsor 1', 'Top Sponsors 1'),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-desktop',
            'description' => 'Spoke Top Menu Sponsor 1',
            'register_meta_box_cb' => 'top_sponsor_1_meta_box',
            //'taxonomies' => ['category'],
            'supports' => array(
                'title',
                'editor',
                'revisions',
                'thumbnail'
            )
        )
    );



register_post_type('top_sponsor_2',
        array(
            'labels' => xcompile_sponsor_labels('Top Sponsor 2', 'Top Sponsors 2'),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-desktop',
            'description' => 'Spoke Top Menu Sponsor 2',
            'register_meta_box_cb' => 'top_sponsor_2_meta_box',
            //'taxonomies' => ['category'],
            'supports' => array(
                'title',
                'editor',
                'revisions',
                'thumbnail'
            )
        )
    );
    
register_post_type('disclaimer',
        array(
            'labels' => xcompile_sponsor_labels('Disclaimer', 'Disclaimer'),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-desktop',
            'description' => 'Disclaimer page content',
            'register_meta_box_cb' => 'disclaimer_meta_box',
            //'taxonomies' => ['category'],
            'supports' => array(
                'title',
                'editor',
                'revisions',
                'thumbnail'
            )
        )
    );    
  register_post_type('privacy',
        array(
            'labels' => xcompile_sponsor_labels('Privacy Policy', 'Privacy Policy'),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-desktop',
            'description' => 'Privacy Policy page content',
            'register_meta_box_cb' => 'privacy_meta_box',
            //'taxonomies' => ['category'],
            'supports' => array(
                'title',
                'editor',
                'revisions',
                'thumbnail'
            )
        )
    );    
    register_post_type('copyright',
        array(
            'labels' => xcompile_sponsor_labels('Copyright', 'Copyright'),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-desktop',
            'description' => 'Copyright page content',
            'register_meta_box_cb' => 'copyright_meta_box',
            //'taxonomies' => ['category'],
            'supports' => array(
                'title',
                'editor',
                'revisions',
                'thumbnail'
            )
        )
    );   
    register_post_type('terms&conditions',
        array(
            'labels' => xcompile_sponsor_labels('Terms & Conditions', 'Terms & Conditions'),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-desktop',
            'description' => 'terms & conditions page content',
            'register_meta_box_cb' => 'terms&conditions_meta_box',
            //'taxonomies' => ['category'],
            'supports' => array(
                'title',
                'editor',
                'revisions',
                'thumbnail'
            )
        )
    );   
}


function xcompile_sponsor_labels($singular = 'Post', $plural = 'Posts')
{
    $p_lower = strtolower($plural);
    $s_lower = strtolower($singular);

    return [
        'name' => $plural,
        'singular_name' => $singular,
        'add_new_item' => "New $singular",
        'edit_item' => "Edit $singular",
        'view_item' => "View $singular",
        'view_items' => "View $plural",
        'search_items' => "Search $plural",
        'not_found' => "No $p_lower found",
        'not_found_in_trash' => "No $p_lower found in trash",
        'parent_item_colon' => "Parent $singular",
        'all_items' => "All $plural",
        'archives' => "$singular Archives",
        'attributes' => "$singular Attributes",
        'insert_into_item' => "Insert into $s_lower",
        'uploaded_to_this_item' => "Uploaded to this $s_lower",
    ];
}

function xcompile_press_labels($singular = 'Post', $plural = 'Posts')
{
    $p_lower = strtolower($plural);
    $s_lower = strtolower($singular);

    return [
        'name' => $plural,
        'singular_name' => $singular,
        'add_new_item' => "New $singular",
        'edit_item' => "Edit $singular",
        'view_item' => "View $singular",
        'view_items' => "View $plural",
        'search_items' => "Search $plural",
        'not_found' => "No $p_lower found",
        'not_found_in_trash' => "No $p_lower found in trash",
        'parent_item_colon' => "Parent $singular",
        'all_items' => "All $plural",
        'archives' => "$singular Archives",
        'attributes' => "$singular Attributes",
        'insert_into_item' => "Insert into $s_lower",
        'uploaded_to_this_item' => "Uploaded to this $s_lower",
    ];
}
function xcompile_social_labels($singular = 'Post', $plural = 'Posts')
{
    $p_lower = strtolower($plural);
    $s_lower = strtolower($singular);

    return [
        'name' => $plural,
        'singular_name' => $singular,
        'add_new_item' => "New $singular",
        'edit_item' => "Edit $singular",
        'view_item' => "View $singular",
        'view_items' => "View $plural",
        'search_items' => "Search $plural",
        'not_found' => "No $p_lower found",
        'not_found_in_trash' => "No $p_lower found in trash",
        'parent_item_colon' => "Parent $singular",
        'all_items' => "All $plural",
        'archives' => "$singular Archives",
        'attributes' => "$singular Attributes",
        'insert_into_item' => "Insert into $s_lower",
        'uploaded_to_this_item' => "Uploaded to this $s_lower",
    ];
}
function xcompile_member_labels($singular = 'Post', $plural = 'Posts')
{
    $p_lower = strtolower($plural);
    $s_lower = strtolower($singular);

    return [
        'name' => $plural,
        'singular_name' => $singular,
        'add_new_item' => "New $singular",
        'edit_item' => "Edit $singular",
        'view_item' => "View $singular",
        'view_items' => "View $plural",
        'search_items' => "Search $plural",
        'not_found' => "No $p_lower found",
        'not_found_in_trash' => "No $p_lower found in trash",
        'parent_item_colon' => "Parent $singular",
        'all_items' => "All $plural",
        'archives' => "$singular Archives",
        'attributes' => "$singular Attributes",
        'insert_into_item' => "Insert into $s_lower",
        'uploaded_to_this_item' => "Uploaded to this $s_lower",
    ];
}

function xcompile_post_type_labels($singular = 'Post', $plural = 'Posts')
{
    $p_lower = strtolower($plural);
    $s_lower = strtolower($singular);

    return [
        'name' => $plural,
        'singular_name' => $singular,
        'add_new_item' => "New $singular",
        'edit_item' => "Edit $singular",
        'view_item' => "View $singular",
        'view_items' => "View $plural",
        'search_items' => "Search $plural",
        'not_found' => "No $p_lower found",
        'not_found_in_trash' => "No $p_lower found in trash",
        'parent_item_colon' => "Parent $singular",
        'all_items' => "All $plural",
        'archives' => "$singular Archives",
        'attributes' => "$singular Attributes",
        'insert_into_item' => "Insert into $s_lower",
        'uploaded_to_this_item' => "Uploaded to this $s_lower",
    ];
}

function create_interview_help()
{
    $screen = get_current_screen();
//echo 'kk' . $screen->post_type;die();
    if ('Interviews' != $screen->post_type)
        return;
    $args = [
        'id' => 'interview_help',
        'title' => 'interview Help',
        'content' => '<h3>Interviews</h3><p>Interviews by spoke</p>',
    ];

    $screen->add_help_tab($args);
}
function save_social($post_id)
{
    update_or_delete($post_id, 'social_link', 'social');
    // update_or_delete($post_id, 'interviewed_by', 'social');
    // update_or_delete($post_id, 'photography', 'social');
    // update_or_delete($post_id, 'location', 'social');
    //update_or_delete($post_id, 'date_year', 'social');
    //update_or_delete($post_id, 'date_other', 'social');
    update_or_delete($post_id, 'interview_date', 'social');
    
}
function save_interview($post_id)
{
    update_or_delete($post_id, 'season_no', 'interview');
    update_or_delete($post_id, 'season_episode', 'interview');
    
    update_or_delete($post_id, 'figure', 'interview');
    

    update_or_delete($post_id, 'box_1_Lable', 'interview');
    update_or_delete($post_id, 'box_1_value', 'interview');

    update_or_delete($post_id, 'box_2_Lable', 'interview');
    update_or_delete($post_id, 'box_2_value', 'interview');

    update_or_delete($post_id, 'box_3_Lable', 'interview');
    update_or_delete($post_id, 'box_3_value', 'interview');

    update_or_delete($post_id, 'box_4_Lable', 'interview');
    update_or_delete($post_id, 'box_4_value', 'interview');

    update_or_delete($post_id, 'interview_date_Lable', 'interview');
    update_or_delete($post_id, 'interview_date', 'interview');

    update_or_delete($post_id, 'video_slider_id', 'interview');
    update_or_delete($post_id, 'photo_slider_id', 'interview');
    update_or_delete($post_id, 'about_text', 'interview');
    update_or_delete($post_id, 'sponsor_text', 'interview');
    update_or_delete($post_id, 'spokescript', 'interview');
    update_or_delete($post_id, 'thumbnail_image_url1', 'interview');
    

}

function save_member($post_id)
{
    update_or_delete($post_id, 'occupation', 'member');
    // update_or_delete($post_id, 'interviewed_by', 'member');
    // update_or_delete($post_id, 'photography', 'member');
    // update_or_delete($post_id, 'location', 'member');
    //update_or_delete($post_id, 'date_year', 'member');
    //update_or_delete($post_id, 'date_other', 'member');
    update_or_delete($post_id, 'interview_date', 'member');
    update_or_delete($post_id, 'video_slider_id', 'member');
    update_or_delete($post_id, 'photo_slider_id', 'member');
    update_or_delete($post_id, 'spokescript', 'member');
}

function save_press($post_id)
{
    update_or_delete($post_id, 'publication', 'press');
    update_or_delete($post_id, 'country', 'press');
    update_or_delete($post_id, 'writer', 'press');
    update_or_delete($post_id, 'publication_date', 'press');
    update_or_delete($post_id, 'video_slider_id', 'press');
    update_or_delete($post_id, 'photo_slider_id', 'press');
    // update_or_delete($post_id, 'about_text', 'press');
    update_or_delete($post_id, 'link_text', 'press');
    update_or_delete($post_id, 'legal_text', 'press');

}

function save_sponsor($post_id) {
    update_or_delete($post_id, 'country', 'country_sponsor');
    update_or_delete($post_id, 'website_url', 'country_sponsor');
}

function save_title_sponsor($post_id) {
    update_or_delete($post_id, 'website_url', 'title_sponsor');
}

function save_top_sponsor_1($post_id) {
    update_or_delete($post_id, 'website_url', 'top_sponsor_1');
}

function save_top_sponsor_2($post_id) {
    update_or_delete($post_id, 'website_url', 'top_sponsor_2');
}

function update_or_delete_press($post_id, $field_name)
{
    $post = get_post($post_id);
    $is_revision = wp_is_post_revision($post_id);
    // Do not save meta for a revision or on autosave
    if ($post->post_type != 'press' || $is_revision)
        return;

    // Do not save meta if fields are not present,
    // like during a restore.
    if (!isset($_POST[$field_name]))
        return;

    // Secure with nonce field check
    if (!check_admin_referer('press_nonce', 'press_nonce'))
        return;

    // Clean up data
    $field_value = trim($_POST[$field_name]);

    // Do the saving and deleting
    if (!empty($field_value)) {
        update_post_meta($post_id, $field_name, $field_value);
    } elseif (empty($field_value)) {
        delete_post_meta($post_id, $field_name);
    }
}
function update_or_delete_social($post_id, $field_name)
{
    $post = get_post($post_id);
    $is_revision = wp_is_post_revision($post_id);
    // Do not save meta for a revision or on autosave
    if ($post->post_type != 'social' || $is_revision)
        return;

    // Do not save meta if fields are not present,
    // like during a restore.
    if (!isset($_POST[$field_name]))
        return;

    // Secure with nonce field check
    if (!check_admin_referer('social_nonce', 'social_nonce'))
        return;

    // Clean up data
    $field_value = trim($_POST[$field_name]);

    // Do the saving and deleting
    if (!empty($field_value)) {
        update_post_meta($post_id, $field_name, $field_value);
    } elseif (empty($field_value)) {
        delete_post_meta($post_id, $field_name);
    }
}

function update_or_delete_member($post_id, $field_name)
{
    $post = get_post($post_id);
    $is_revision = wp_is_post_revision($post_id);
    // Do not save meta for a revision or on autosave
    if ($post->post_type != 'member' || $is_revision)
        return;

    // Do not save meta if fields are not present,
    // like during a restore.
    if (!isset($_POST[$field_name]))
        return;

    // Secure with nonce field check
    if (!check_admin_referer('member_nonce', 'member_nonce'))
        return;

    // Clean up data
    $field_value = trim($_POST[$field_name]);

    // Do the saving and deleting
    if (!empty($field_value)) {
        update_post_meta($post_id, $field_name, $field_value);
    } elseif (empty($field_value)) {
        delete_post_meta($post_id, $field_name);
    }
}

function update_or_delete($post_id, $field_name, $model)
{
    $post = get_post($post_id);
    $is_revision = wp_is_post_revision($post_id); //
    // Do not save meta for a revision or on autosave
    if ($post->post_type != $model || $is_revision)
        return;

    // Do not save meta if fields are not present,
    // like during a restore.
    if (!isset($_POST[$field_name]))
        return;

    // Secure with nonce field check
    if (!check_admin_referer($model.'_nonce', $model.'_nonce'))
        return;

    // Clean up data
    $field_value = trim($_POST[$field_name]);
    // Do the saving and deleting
    if (!empty($field_value)) {
        update_post_meta($post_id, $field_name, $field_value);
    } elseif (empty($field_value)) {
        delete_post_meta($post_id, $field_name);
    }
}
add_action('save_post', 'save_social');
add_action('save_post', 'save_interview');
add_action('save_post', 'save_member');
add_action('save_post', 'save_press');
add_action('save_post', 'save_sponsor');
add_action('save_post', 'save_title_sponsor');
add_action('save_post', 'save_top_sponsor_1');
add_action('save_post', 'save_top_sponsor_2');

add_action('init', 'register_menus');
//add_action( 'init', 'create_interview_help' );
add_action('init', 'create_post_type');

function sponsor_meta_box(WP_Post $post) {
    add_meta_box('country_sponsor_meta', 'Sponsor Details', function () use ($post) {
        ?>

        <table class="form-table">
            <?php

            $field_name = 'website_url';
            $field_value = get_post_meta($post->ID, $field_name, true);
            wp_nonce_field('country_sponsor_nonce', 'country_sponsor_nonce');
            print_field_html($field_name, 'Website URL', $field_value);

            $field_name = 'country';
            $field_value = get_post_meta($post->ID, $field_name, true);
            $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
            wp_nonce_field('country_sponsor_nonce', 'country_sponsor_nonce');

            ?>

            <tr>
                <th><label for="<?php echo $field_name; ?>"><?php echo "Country" ?></label></th>
                <td>
                    <select name="<?php echo $field_name; ?>">
                        <?php foreach ($countries as $country) { ?>
                            <option <?= $country== $field_value ? 'selected' : '' ?> value="<?php echo $country; ?>"><?php echo $country; ?></option>

                        <?php } ?>
                    </select>
                </td>
            </tr>
         
        </table>
        <?php
    });
}

function title_sponsor_meta_box(WP_Post $post) {
    add_meta_box('title_sponsor_meta', 'Sponsor Details', function () use ($post) {
        ?>

        <table class="form-table">
            <?php

            $field_name = 'website_url';
            $field_value = get_post_meta($post->ID, $field_name, true);
            wp_nonce_field('title_sponsor_nonce', 'title_sponsor_nonce');
            print_field_html($field_name, 'Website URL', $field_value);        

            ?>           
        </table>
        <?php
    });
}


function top_sponsor_1_meta_box(WP_Post $post) {
    add_meta_box('top_sponsor_1_meta', 'Top Menu Sponsor 1 Details', function () use ($post) {
        ?>

        <table class="form-table">
            <?php

            $field_name = 'website_url';
            $field_value = get_post_meta($post->ID, $field_name, true);
            wp_nonce_field('top_sponsor_1_nonce', 'top_sponsor_1_nonce');
            print_field_html($field_name, 'Website URL', $field_value);        

            ?>           
        </table>
        <?php
    });
}

function top_sponsor_2_meta_box(WP_Post $post) {
    add_meta_box('top_sponsor_2_meta', 'Top Menu Sponsor 2 Details', function () use ($post) {
        ?>

        <table class="form-table">
            <?php

            $field_name = 'social_url';
            $field_value = get_post_meta($post->ID, $field_name, true);
            wp_nonce_field('top_sponsor_2_nonce', 'top_sponsor_2_nonce');
            print_field_html($field_name, 'Website URL', $field_value);        

            ?>           
        </table>
        <?php
    });
}

function press_meta_box(WP_Post $post)
{
    add_meta_box('press_meta', 'Press Details', function () use ($post) {
        wp_enqueue_script( 'jquery-ui-datepicker' );
        wp_enqueue_style( 'jquery-ui-style', '//ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/themes/smoothness/jquery-ui.css', true);
        ?>
        <script>
            jQuery(document).ready(function(){
                jQuery('#publication_date').datepicker({
                    dateFormat : 'yy-m-dd'
                });
            });
        </script>
        <table class="form-table">
            <?php
            $field_name = 'publication';
            $field_value = get_post_meta($post->ID, $field_name, true);
            wp_nonce_field('press_nonce', 'press_nonce');
            print_field_html($field_name, 'Publication', $field_value);

            $field_name_interviewed_by = 'country';
            $field_value_interviewed_by = get_post_meta($post->ID, $field_name_interviewed_by, true);
            wp_nonce_field('press_nonce', 'press_nonce');
            print_field_html($field_name_interviewed_by, 'Country', $field_value_interviewed_by);

            $field_name_photography = 'writer';
            $field_value_photography = get_post_meta($post->ID, $field_name_photography, true);
            wp_nonce_field('press_nonce', 'press_nonce');
            print_field_html($field_name_photography, 'Writer', $field_value_photography);

            $field_name_location = 'publication_date';
            $field_value_location = get_post_meta($post->ID, $field_name_location, true);
            wp_nonce_field('press_nonce', 'press_nonce');
            print_field_html($field_name_location, 'Publication Date', $field_value_location);

            // $field_name_about_text = 'about_text';
            // $field_value_about_text = get_post_meta($post->ID, $field_name_about_text, true);
            // wp_nonce_field('press_nonce', 'press_nonce');
            // print_field_html($field_name_about_text, 'About', $field_value_about_text);

            $field_name_link_text = 'link_text';
            $field_value_link_text = get_post_meta($post->ID, $field_name_link_text, true);
            wp_nonce_field('press_nonce', 'press_nonce');
            print_field_html($field_name_link_text, 'Link', $field_value_link_text);

            $field_name_legal_text = 'legal_text';
            $field_value_legal_text = get_post_meta($post->ID, $field_name_legal_text, true);
            wp_nonce_field('press_nonce', 'press_nonce');
            print_field_html($field_name_legal_text, 'Legal', $field_value_legal_text);

            $field_name_video_slider_id = 'video_slider_id';
            $field_value_video_slider_id = get_post_meta($post->ID, $field_name_video_slider_id, true);
            wp_nonce_field('press_nonce', 'press_nonce');
            print_field_html($field_name_video_slider_id, 'Video Slider Id', $field_value_video_slider_id);

            $field_name_photo_slider_id = 'photo_slider_id';
            $field_value_photo_slider_id = get_post_meta($post->ID, $field_name_photo_slider_id, true);
            wp_nonce_field('press_nonce', 'press_nonce');
            print_field_html($field_name_photo_slider_id, 'Photos Slider Id', $field_value_photo_slider_id);

            ?>
        </table>
        <?php
    });
}
function member_meta_box(WP_Post $post)
{
    add_meta_box('member_meta', 'Member Details', function () use ($post) {
        wp_enqueue_script( 'jquery-ui-datepicker' );
        wp_enqueue_style( 'jquery-ui-style', '//ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/themes/smoothness/jquery-ui.css', true);
        ?>
        <script>
            jQuery(document).ready(function(){
                jQuery('#interview_date').datepicker({
                    dateFormat : 'yy-m-dd'
                });
            });
        </script>
        <table class="form-table">
            <?php

            $field_name = 'occupation';
            $field_value = get_post_meta($post->ID, $field_name, true);
            wp_nonce_field('member_nonce', 'member_nonce');
            print_field_html($field_name, 'Occupation', $field_value);

           /* $field_name_interviewed_by = 'interviewed_by';
            $field_value_interviewed_by = get_post_meta($post->ID, $field_name_interviewed_by, true);
            wp_nonce_field('member_nonce', 'member_nonce');
            print_field_html($field_name_interviewed_by, 'Interviewed By', $field_value_interviewed_by);

            $field_name_photography = 'photography';
            $field_value_photography = get_post_meta($post->ID, $field_name_photography, true);
            wp_nonce_field('member_nonce', 'member_nonce');
            print_field_html($field_name_photography, 'Photography', $field_value_photography);

            $field_name_location = 'location';
            $field_value_location = get_post_meta($post->ID, $field_name_location, true);
            wp_nonce_field('member_nonce', 'member_nonce');
            print_field_html($field_name_location, 'Location', $field_value_location);

            
            $field_name_date_year = 'date_year';
            $field_value_date_year = get_post_meta($post->ID, $field_name_date_year, true);
            wp_nonce_field('member_nonce', 'member_nonce');
            print_field_html($field_name_date_year, 'Date (Year only)', $field_value_date_year);

            $field_name_date_other = 'date_other';
            $field_value_date_other = get_post_meta($post->ID, $field_name_date_other, true);
            wp_nonce_field('member_nonce', 'member_nonce');
            print_field_html($field_name_date_other, 'Date (Without Year)', $field_value_date_other);*/

            //interview_date
            $field_name_date_other = 'interview_date';
            $field_value_date_other = get_post_meta($post->ID, $field_name_date_other, true);
            wp_nonce_field('member_nonce', 'member_nonce');
            print_field_html($field_name_date_other, 'Date', $field_value_date_other);

             $field_name_video_slider_id = 'video_slider_id';
            $field_value_video_slider_id = get_post_meta($post->ID, $field_name_video_slider_id, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name_video_slider_id, 'Video Slider Id', $field_value_video_slider_id);

            $field_name_photo_slider_id = 'photo_slider_id';
            $field_value_photo_slider_id = get_post_meta($post->ID, $field_name_photo_slider_id, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name_photo_slider_id, 'Photos Slider Id', $field_value_photo_slider_id);


            $field_name_about_text = 'spokescript';
            $field_value_about_text = get_post_meta($post->ID, $field_name_about_text, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name_about_text, 'Spoke Script', $field_value_about_text);
            ?>
        </table>
        <?php
    });
}
function interview_meta_box(WP_Post $post)
{
    add_meta_box('interview_meta', 'Interview Details', function () use ($post) {

        wp_enqueue_script( 'jquery-ui-datepicker' );
        wp_enqueue_style( 'jquery-ui-style', '//ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/themes/smoothness/jquery-ui.css', true);
        ?>
        <script>
            jQuery(document).ready(function(){
                jQuery('#interview_date').datepicker({
                    dateFormat : 'yy-m-dd'
                });
            });
        </script>
        <table class="form-table">
            <?php
            
             $field_name_thumbnail_image_1 = 'thumbnail_image_url1';
            $field_value_thumbnail_image_1 = get_post_meta($post->ID, $field_name_thumbnail_image_1, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name_thumbnail_image_1, 'Homepage Image Url', $field_value_thumbnail_image_1);

            $field_season_episode = 'season_no';
            $field__value_season_episode = get_post_meta($post->ID, $field_season_episode, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_season_episode, 'Season no', $field__value_season_episode);

            $field_season_episode = 'season_episode';
            $field__value_season_episode = get_post_meta($post->ID, $field_season_episode, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_season_episode, 'episode text', $field__value_season_episode);

            $field_figure = 'figure';
            $field__value_figure = get_post_meta($post->ID, $field_figure, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_figure, 'episode text', $field__value_figure);

            $field_name = 'box_1_Lable';
            $field_value = get_post_meta($post->ID, $field_name, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name, '1. Box Title <small style="color: #50c2ee;display: block;">Default: Occupation</small>', $field_value);

            $field_name = 'box_1_value';
            $field_value = get_post_meta($post->ID, $field_name, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name, '1. Box Value', $field_value);

            $field_name = 'box_2_Lable';
            $field_value = get_post_meta($post->ID, $field_name, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name, '2. Box Title <small style="color: #50c2ee;display: block;">Default: Writer</small>', $field_value);

            $field_name = 'box_2_value';
            $field_value = get_post_meta($post->ID, $field_name, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name, '2. Box Value', $field_value);

            $field_name = 'box_3_Lable';
            $field_value = get_post_meta($post->ID, $field_name, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name, '3. Box Title <small style="color: #50c2ee;display: block;">Default: Photographer</small>', $field_value);

            $field_name = 'box_3_value';
            $field_value = get_post_meta($post->ID, $field_name, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name, '3. Box Value', $field_value);

            $field_name = 'box_4_Lable';
            $field_value = get_post_meta($post->ID, $field_name, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name, '4. Box Title <small style="color: #50c2ee;display: block;">Default: Location</small>', $field_value);

            $field_name = 'box_4_value';
            $field_value = get_post_meta($post->ID, $field_name, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name, '4. Box Value ', $field_value);

            /*$field_name_interviewed_by = 'interviewed_by';
            $field_value_interviewed_by = get_post_meta($post->ID, $field_name_interviewed_by, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name_interviewed_by, 'Interviewed By', $field_value_interviewed_by);

            $field_name_interviewed_by = 'interviewed_by_Lable';
            $field_value_interviewed_by = get_post_meta($post->ID, $field_name_interviewed_by, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name_interviewed_by, 'Field Title for Interviewed By', $field_value_interviewed_by);

            $field_name_photography = 'photography';
            $field_value_photography = get_post_meta($post->ID, $field_name_photography, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name_photography, 'Photography', $field_value_photography);

            $field_name_photography = 'photography_Lable';
            $field_value_photography = get_post_meta($post->ID, $field_name_photography, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name_photography, 'Field Title for Photography', $field_value_photography);

            $field_name_location = 'location';
            $field_value_location = get_post_meta($post->ID, $field_name_location, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name_location, 'Location', $field_value_location);

            $field_name_location = 'location_Lable';
            $field_value_location = get_post_meta($post->ID, $field_name_location, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name_location, 'Field Title for Location', $field_value_location);*/

            /*
            $field_name_date_year = 'date_year';
            $field_value_date_year = get_post_meta($post->ID, $field_name_date_year, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name_date_year, 'Date (Year only)', $field_value_date_year);

            $field_name_date_other = 'date_other';
            $field_value_date_other = get_post_meta($post->ID, $field_name_date_other, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name_date_other, 'Date (Without Year)', $field_value_date_other);
            */

            $field_name_date_year = 'interview_date_Lable';
            $field_value_date_year = get_post_meta($post->ID, $field_name_date_year, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name_date_year, 'Title for Date <small style="color: #50c2ee;display: block;">Default: Date</small>', $field_value_date_year);

            $field_name_date_year = 'interview_date';
            $field_value_date_year = get_post_meta($post->ID, $field_name_date_year, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name_date_year, 'Date', $field_value_date_year);


            $field_name_video_slider_id = 'video_slider_id';
            $field_value_video_slider_id = get_post_meta($post->ID, $field_name_video_slider_id, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name_video_slider_id, 'Video Slider Id', $field_value_video_slider_id);

            $field_name_photo_slider_id = 'photo_slider_id';
            $field_value_photo_slider_id = get_post_meta($post->ID, $field_name_photo_slider_id, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name_photo_slider_id, 'Photos Slider Id', $field_value_photo_slider_id);

            $field_name_about_text = 'about_text';
            $field_value_about_text = get_post_meta($post->ID, $field_name_about_text, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name_about_text, 'About text', $field_value_about_text);

            $field_name_sponser_text = 'sponsor_text';
            $field_value_sponser_text = get_post_meta($post->ID, $field_name_sponser_text, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name_sponser_text, 'Sponsor text', $field_value_sponser_text);

            $field_name_about_text = 'spokescript';
            $field_value_about_text = get_post_meta($post->ID, $field_name_about_text, true);
            wp_nonce_field('interview_nonce', 'interview_nonce');
            print_field_html($field_name_about_text, 'Spoke Script', $field_value_about_text);
            
           

          

            ?>
        </table>
        <?php
    });
}


function social_meta_box(WP_Post $post)
{
    add_meta_box('social_meta', 'Member Details', function () use ($post) {
        wp_enqueue_script( 'jquery-ui-datepicker' );
        wp_enqueue_style( 'jquery-ui-style', '//ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/themes/smoothness/jquery-ui.css', true);
        ?>
        <script>
            jQuery(document).ready(function(){
                jQuery('#interview_date').datepicker({
                    dateFormat : 'yy-m-dd'
                });
            });
        </script>
        <table class="form-table">
            <?php

            $field_name = 'social_link';
            $field_value = get_post_meta($post->ID, $field_name, true);
            wp_nonce_field('social_nonce', 'social_nonce');
            print_field_html($field_name, 'Social Link', $field_value);

           
            ?>
        </table>
        <?php
    });
}


function print_field_html($field_name, $field_label, $field_value) {
    if ( ($field_name == "season_no" || $field_name == "season_episode") && $field_value == "") {
        $p = get_max_interview();
        $a = $p->posts;
        if (sizeof($a) > 0) {
            $aa = $a[0];
            $val = (int)get_post_meta($aa->ID, $field_name, true);
            $field_value = $val;
            if ($field_name == "season_episode") {
                $field_value = $val + 1;
            }
        } else {
            $field_value = 1;
        }
    }

    ?>
    <tr>
        <th><label for="<?php echo $field_name; ?>"><?php echo $field_label ?></label></th>
        <td>
            <?php if ($field_name == 'about_text' || $field_name == 'sponsor_text' || $field_name == 'spokescript') { ?>
                <textarea id="<?php echo $field_name; ?>"
                class="wp-editor-area"
                       name="<?php echo $field_name; ?>"
                          style="width: 75%"
                          rows="8" cols="50"
                          size="60"><?php echo esc_attr($field_value); ?></textarea>
            <?php } else { ?>
            <input id="<?php echo $field_name; ?>"
                   name="<?php echo $field_name; ?>"
                   type="<?= ($field_name == "season_no" || $field_name == "season_episode" ) ? 'number': 'text' ?>" size="60"
                   value="<?php echo esc_attr($field_value); ?>"/>
            <?php } ?>


        </td>
    </tr>
    <?php
}
add_action( 'wp_enqueue_scripts', 'my_custom_script_load' );
function my_custom_script_load(){
  wp_enqueue_script( 'my-custom-script', get_stylesheet_directory_uri() . '/sticky-sidebar', array( 'jquery' ) );
}
add_action('admin_menu', 'my_cool_plugin_create_menu');

function my_cool_plugin_create_menu() {
    //create new top-level menu
    add_menu_page('Spoke Settings', 'Spoke Settings', 'administrator', __FILE__, 'my_cool_plugin_settings_page', get_stylesheet_directory_uri('stylesheet_directory')."/images/media-button-other.gif");
    //call register settings function
    add_action( 'admin_init', 'register_my_cool_plugin_settings' );
}
function register_my_cool_plugin_settings() {
    //register our settings
    register_setting( 'my-cool-plugin-settings-group', 'gallery_page_name' );
    register_setting( 'my-cool-plugin-settings-group', 'all_interview_page_name' );
    register_setting( 'my-cool-plugin-settings-group', 'saved_page_name' );
    register_setting( 'my-cool-plugin-settings-group', 'saved_page_name' );
    register_setting( 'my-cool-plugin-settings-group', 'about_page_name' );
    register_setting( 'my-cool-plugin-settings-group', 'press_page_name' );
    register_setting( 'my-cool-plugin-settings-group', 'contact_page_name' );
    register_setting( 'my-cool-plugin-settings-group', 'donate_page_name' );
    register_setting( 'my-cool-plugin-settings-group', 'sponsors_page_name' );
    register_setting( 'my-cool-plugin-settings-group', 'subscribe_page_name' );
    register_setting( 'my-cool-plugin-settings-group', 'disclaimer_page_name' );
    register_setting( 'my-cool-plugin-settings-group', 'privacy_policy_page_name' );
    register_setting( 'my-cool-plugin-settings-group', 'copyright_page_name' );
    register_setting( 'my-cool-plugin-settings-group', 'tac_page_name' );

}
function my_cool_plugin_settings_page() {
    ?>
    <div class="wrap">
        <h1>Spoke theme Settings</h1>
        <form method="post" action="options.php">
            <?php settings_fields( 'my-cool-plugin-settings-group' ); ?>
            <?php do_settings_sections( 'my-cool-plugin-settings-group' ); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Gallery page name</th>
                    <td><input type="text" name="gallery_page_name" value="<?php echo esc_attr( get_option('gallery_page_name') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">All Interview page name</th>
                    <td><input type="text" name="all_interview_page_name" value="<?php echo esc_attr( get_option('all_interview_page_name') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Saved name</th>
                    <td><input type="text" name="saved_page_name" value="<?php echo esc_attr( get_option('saved_page_name') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">About name</th>
                    <td><input type="text" name="about_page_name" value="<?php echo esc_attr( get_option('about_page_name') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Press name</th>
                    <td><input type="text" name="press_page_name" value="<?php echo esc_attr( get_option('press_page_name') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Contact name</th>
                    <td><input type="text" name="contact_page_name" value="<?php echo esc_attr( get_option('contact_page_name') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Donate name</th>
                    <td><input type="text" name="donate_page_name" value="<?php echo esc_attr( get_option('donate_page_name') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Sponsors name</th>
                    <td><input type="text" name="sponsors_page_name" value="<?php echo esc_attr( get_option('sponsors_page_name') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Subscribe name</th>
                    <td><input type="text" name="subscribe_page_name" value="<?php echo esc_attr( get_option('subscribe_page_name') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Disclaimer name</th>
                    <td><input type="text" name="disclaimer_page_name" value="<?php echo esc_attr( get_option('disclaimer_page_name') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Privacy policy name</th>
                    <td><input type="text" name="privacy_policy_page_name" value="<?php echo esc_attr( get_option('privacy_policy_page_name') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Copyright name</th>
                    <td><input type="text" name="copyright_page_name" value="<?php echo esc_attr( get_option('copyright_page_name') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Terms and condition name</th>
                    <td><input type="text" name="tac_page_name" value="<?php echo esc_attr( get_option('tac_page_name') ); ?>" /></td>
                </tr>
                </tr>

            </table>
            <?php submit_button(); ?>
        </form>
    </div>
<?php }

add_theme_support('post-thumbnails');
add_image_size('gallery-grid',1000, 700, true);

add_action( 'template_redirect', 'wpse131387_template_redirect' );
function wpse131387_template_redirect( ){
    $url=strtok($_SERVER["REQUEST_URI"],'?');

    if ($url == '/gallery-open' || $url == '/~saman/spoke/gallery-open') {
        global $wp_query;
        $wp_query->is_404 = false;
        status_header(200);
        include(dirname(__FILE__) . '/gallery-open.php');
        exit();
    }
}
function get_image_slides() {
    global $wpdb;
    $querystr = "
    SELECT wp_nextend2_smartslider3_slides.* 
    FROM wp_nextend2_smartslider3_slides
    WHERE wp_nextend2_smartslider3_slides.slider = 3
    ORDER BY wp_nextend2_smartslider3_slides.ordering DESC
 ";

    $pageposts = $wpdb->get_results($querystr, OBJECT);
    var_dump($pageposts);
}
function get_category_names($post_id) {
    $categories = get_the_category($post_id);
    $category_names = array();
    foreach ($categories as $category)
    {
        $category_names[] = $category->cat_name;
    }
    echo implode(' ', $category_names);
}
function get_images_for_slide($post_id) {
    //$p = get_post($post_id);

    $slide_id = get_post_meta($post_id, 'photo_slider_id', true);//4;
    global $wpdb;
    $querystr = "
    SELECT wp_nextend2_smartslider3_slides.* 
    FROM wp_nextend2_smartslider3_slides
    WHERE wp_nextend2_smartslider3_slides.slider = $slide_id
    ORDER BY wp_nextend2_smartslider3_slides.ordering ASC
 ";
//thumbnail
    $page_posts = $wpdb->get_results($querystr, OBJECT);

    $images = array();
    foreach ($page_posts as $post) {
        if ($post ->slide == '[]') {
            $path = $post ->thumbnail;
            $p = wp_upload_dir();
            $path = str_replace("\$upload$",$p["baseurl"],$path);
            $images[] = $path;
        }
    }
    return $images;
}

function get_videos_for_slide($post_id) {
    //$p = get_post($post_id);

    $slide_id = get_post_meta($post_id, 'video_slider_id', true);//4;
    global $wpdb;
    $querystr = "
    SELECT wp_nextend2_smartslider3_slides.* 
    FROM wp_nextend2_smartslider3_slides
    WHERE wp_nextend2_smartslider3_slides.slider = $slide_id
    ORDER BY wp_nextend2_smartslider3_slides.ordering ASC
 ";
//thumbnail
    $page_posts = $wpdb->get_results($querystr, OBJECT);

    $images = array();
    foreach ($page_posts as $post) {
       if ($post ->slide != '[]') {
            $path = $post ->thumbnail;
           // $p = wp_upload_dir();
            //$path = str_replace("\$upload$",$p["baseurl"],$path);
            $images[] = $path;
        }
   }
    return $images;
}

function register_admin_scripts() {
    wp_enqueue_script( 'jquery-ui-datepicker' );
}
function get_saved_interview() {
   
    $value = '';
    if(isset($_SESSION['saved_ids'])) {
        $value = $_SESSION['saved_ids'];    
    $myArray = explode(',', $value);
    unset($myArray[0]);
    return $myArray;
    }
}
function save_interview_action() { 
    if (isset($_POST['interview_id'])) {
        $id = $_POST['interview_id'];
        $value = '';
        if(isset($_SESSION['saved_ids'])) {
            $value = $_SESSION['saved_ids'];
        }
        $myArray = explode(',', $value);
        if (in_array(""+$id, $myArray)) {
            $indexCompleted = array_search("" + $id, $myArray);
            unset($myArray[$indexCompleted]);
            $status = 'removed';
        } else {
            $myArray[] = "" + $id;
            $status = 'saved';
        }
        $_SESSION['saved_ids'] = implode(',', $myArray);
        
        echo  $status;        
    }
    die();
}


function unsave_interview_action() {   
 if (isset($_POST['interview_id'])) {       
 $id = $_POST['interview_id'];
  $value = '';
  if(isset($_SESSION['saved_ids'])) {
    $value = $_SESSION['saved_ids'];
    $myArray = explode(',', $value);    
  if (in_array(""+$id, $myArray)) {
     $indexCompleted = array_search("" + $id, $myArray);
            unset($myArray[$indexCompleted]);
            $status = 'removed';
            $_SESSION['saved_ids'] = implode(',', $myArray);
            echo  $status;
        }        
   }
}
    die();
}
function already_saved($id) {
    //$_SESSION['saved_ids'] = "";

    $value = '';
    if(isset($_SESSION['saved_ids'])) {
        $value = $_SESSION['saved_ids'];
    }

    $myArray = explode(',', $value);
    return in_array(""+$id, $myArray);
}
function get_max_interview() {
    return new WP_Query(array('post_type' => 'interview', 'posts_per_page' => 1, 'order'=>'DESC'));
}
function get_html_for_press($post) {
    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'gallery-grid', false);
    $oldDateUnix = strtotime(get_post_meta($post->ID, 'publication_date', true));

    $str = '<div class="item" style="background-image:url(' . $src[0] .')">
                        <a class="lightbox" href="'. get_permalink($post->ID) .'">
                            <!--<img class="img-fluid image grid-img" src="' . $src[0] .'"/> -->
                            <div class="interview-overlay light">
                                
                                    <div class="text">
                                        <h3 >' . get_the_title($post->ID). '</h3>
                                        <div class="d2"></div>
                                        <h4>'. gmdate("F d, Y", $oldDateUnix) .'</h4>
                                    </div>
                            </div>
                        </a>
                </div>';
    return $str;
}
function get_html_for_interview($post) {
    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'gallery-grid', false);
    $oldDateUnix = strtotime(get_post_meta($post->ID, 'interview_date', true));
$categories = get_the_category();
 if ( ! empty( $categories ) ) { $catname =  $categories[0]->name ; }
    $str = '<div class="item" style="background-image:url(' . $src[0] .')">
                        <a class="lightbox" href="'. get_permalink($post->ID) .'">
                            <!--<img class="img-fluid image grid-img" src="' . $src[0] .'"/>-->
                            <div class="interview-overlay">
                                
                                    <div class="text">
                                        <h3 >' . get_the_title($post->ID). '</h3>
                                        <div class="d2"></div>
                                        <h4>'.$catname.'</h4>
                                        <div class="ep_no">S'. get_post_meta($post->ID, 'season_no', true) .'<span>-</span>'. get_post_meta($post->ID, 'season_episode', true) .'
                                        </div>
                                    </div>
                                
                            </div>
                        </a>
                </div>';
    return $str;
}
function get_html_for_interview_saved($post) {
    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'gallery-grid', false);
    $oldDateUnix = strtotime(get_post_meta($post->ID, 'interview_date', true));
    $categories = get_the_category();
    $url = admin_url('admin-ajax.php');
    $adminUrl = "'".$url."'";
     if ( ! empty( $categories ) ) { $catname =  $categories[0]->name ; }
    $str = '<div id="item-'.$post->ID.'" class="item " style="background-image:url(' . $src[0] .')">
                        <span name="'. get_permalink($post->ID) .'"></span>
                            <!--<img class="img-fluid image grid-img" src="' . $src[0] .'"/>-->
                            <div class="interview-overlay">                                
                            <button class="unsaveBtn" id="save-link-'.$post->ID.'" onclick="Unsave_interview('.$post->ID.','.$adminUrl.')" ></button>
                                    <div class="text saved_item" data-link="'.get_permalink($post->ID).'">
                                        <h3 >' . get_the_title($post->ID). '</h3>
                                        <div class="d2"></div>
                                        <h4>'.$catname.'</h4>
                                        <div class="ep_no">S'. get_post_meta($post->ID, 'season_no', true) .'<span>-</span>'. get_post_meta($post->ID, 'season_episode', true) .'
                                        </div>                                  
                                </div>
                            </div>
                        
                </div>';
    return $str;
}
add_action('wp_ajax_save_interview_action', 'save_interview_action');
add_action('wp_ajax_nopriv_save_interview_action', 'save_interview_action');//for users that are not logged in.


add_action('wp_ajax_unsave_interview_action', 'unsave_interview_action');
add_action('wp_ajax_nopriv_unsave_interview_action', 'unsave_interview_action');//for users that are not logged in.

add_filter( 'kdmfi__featured_images', function( $featured_images ) {
    $args = array(
        'id' => 'featured-image-2',
        'desc' => 'Your description here.',
        'label_name' => 'Featured Image 2',
        'label_set' => 'Set featured image 2',
        'label_remove' => 'Remove featured image 2',
        'label_use' => 'Set featured image 2',
        'post_type' => array( 'page' ),
    );

    $featured_images[] = $args;

    return $featured_images;
});

// Define additional "post thumbnails". Relies on MultiPostThumbnails to work
if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(array(
            'label' => 'Gallery image',
            'id' => 'feature-image-2',
            'post_type' => 'interview'
        )
    );
};

function get_sponsors_for_country() {
    $posts = [];
    $argss = array('post_type' => 'country_sponsor', 'posts_per_page' => -1, 'meta_key' => 'country', 'meta_query' => array(array('key' => '_thumbnail_id')));
    $loopp = new WP_Query($argss);
    if ($loopp->have_posts()) :
        $i = 0;
        while ($loopp->have_posts()) : $loopp->the_post();
            $temp = get_post_meta( get_the_ID(), 'country', true );
            if (isset($posts[$temp])) {
                array_push($posts[$temp], get_post());
            } else {
                $posts[$temp] =  [get_post()];
            }

        endwhile;
    endif;

    return $posts;
}

function get_title_sponsor() {
    $posts = [];
    $argss = array('post_type' => 'title_sponsor', 'posts_per_page' => -1, 'meta_key' => 'country', 'meta_query' => array(array('key' => '_thumbnail_id')));
    $loopp = new WP_Query($argss);
    if ($loopp->have_posts()) :
        $i = 0;
        while ($loopp->have_posts()) : $loopp->the_post();
           
        $str = '<h1>'.the_title($post->ID).'</h1>';
        endwhile;
    endif;

    return $str;
}


function get_title_sponsor_logo() {
$argss = array('post_type' => 'country_sponsor', 'posts_per_page' => -1);
$loopp = new WP_Query($argss);
if ($loopp->have_posts()) :
while ($loopp->have_posts()) : $loopp->the_post();
$imgurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$website_url =  get_post_meta($post->ID, 'website_url', true);
if(!empty($website_url)) { $url = "href=".$website_url; }
else { $url = '';}
$str = '<a '.$url.' target="_blank"><img src="'.$imgurl.'" alt="" /></a>';

endwhile;
endif;
return $str;
}
wp_register_script( 'my-script', 'myscript_url' );
wp_enqueue_script( 'my-script' );
$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
//after wp_enqueue_script
wp_localize_script( 'my-script', 'object_name', $translation_array );


if ( ! function_exists( 'twentysixteen_setup' ) ) :
    
    	function twentysixteen_setup() {
    	    	add_theme_support(
			'custom-logo',
			array(
				'height'      => 1500,
				'width'       => 1500,
				'flex-height' => true,
			)
		);
    	}
    	endif;
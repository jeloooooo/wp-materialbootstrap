<?php 
    function mdbs_customize_register($wp_customize){
        // Material Design = materialbootstrap (theme domain name)
        // Customizer implemented on front-page.php
        $wp_customize->add_section('materialdesign', array(
            'title'     => __('Material Design', 'wpbootstrap'),
            'desription'=> sprintf(__('Options for Material Design', 'materialbootstrap')),
            'priority'  => 130
        ));

        // BG Image
        $wp_customize->add_setting('materialdesign_image', array(
            'default'   =>  get_bloginfo( 'template_directory'). '/img/bg.jpg',
            'type'      =>  'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'materialdesign_image', array(
            'label'     =>  __('Background Image', 'materialbootstrap'),
            'section'   =>  'materialdesign',
            'setting'   => 'materialdesign_image',
            'priority'  =>  1
        )));

        // Header control
        $wp_customize->add_setting('materialdesign_heading', array(
            'default'   =>  _x('Custom Material Bootstrap Wordpresss Theme - Backend Default Value', 'materialbootstrap'),
            'type'      =>  'theme_mod'
        ));

        $wp_customize->add_control('materialdesign_heading', array(
            'label'     =>  __('Heading', 'materialbootstrap'),
            'section'   =>  'materialdesign',
            'priority'  =>  2
        ));

         // Header Description control
         $wp_customize->add_setting('materialdesign_heading_desc', array(
            'default'   =>  _x('Multiple lines of text that form the lede, informing new readers quickly and efficiently about whats most interesting in this posts contents.', 'materialbootstrap'),
            'type'      =>  'theme_mod'
        ));

        $wp_customize->add_control('materialdesign_heading_desc', array(
            'label'     =>  __('Description', 'materialbootstrap'),
            'section'   =>  'materialdesign',
            'priority'  =>  3
        ));

        // Header Link Text
        $wp_customize->add_setting('materialdesign_link_text', array(
            'default'   =>  _x('See more...', 'materialbootstrap'),
            'type'      =>  'theme_mod'
        ));

        $wp_customize->add_control('materialdesign_link_text', array(
            'label'     =>  __('Link Text', 'materialbootstrap'),
            'section'   =>  'materialdesign',
            'priority'  =>  4
        ));

         // Header Link Url
         $wp_customize->add_setting('materialdesign_link_url', array(
            'default'   =>  _x('http://alpha.local/blog', 'materialbootstrap'),
            'type'      =>  'theme_mod'
        ));

        $wp_customize->add_control('materialdesign_link_url', array(
            'label'     =>  __('Link URL', 'materialbootstrap'),
            'section'   =>  'materialdesign',
            'priority'  =>  5
        ));
    }

    add_action( 'customize_register', 'mdbs_customize_register');
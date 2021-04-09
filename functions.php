<?php 

// load stylesheets

function load_stylesheets() {

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1, 'all' );
    wp_enqueue_style('bootstrap');

    wp_register_style('my_css', get_template_directory_uri() . '/css/style.css', array(), 1, 'all' );
    wp_enqueue_style('my_css');

    wp_register_style('preconnect', get_template_directory_uri() . 'https://fonts.gstatic.com', array(), 1, 'all' );
    wp_enqueue_style('preconnect');


    wp_register_style('jsdelivr', get_template_directory_uri() . 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css', array(), 1, 'all' );
    wp_enqueue_style('jsdelivr');

    
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


// load scripts

function load_scripts() {

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', '',1,1,1);
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', '',1,1,1);
    wp_enqueue_script('bootstrap');

    wp_register_script('popper', get_template_directory_uri() . '/js/popper.min.js', '',1,1,1);
    wp_enqueue_script('popper');

    wp_register_script('fawesome', get_template_directory_uri() . '/js/all.min.js', '',1,1,1);
    wp_enqueue_script('fawesome');
}

add_action ('wp_enqueue_scripts', 'load_scripts');


//     <!-- Style CSS -->
//     <link rel="stylesheet" href="css/style.css" />
//     <!-- Google Fonts -->
//     <link
//       href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap"
//       rel="stylesheet"
//     />
//     <link rel="preconnect" href="https://fonts.gstatic.com" />
//     <link
//       href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap"
//       rel="stylesheet"
//     />
//     <link
//       rel="stylesheet"
//       href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"
//     />


// <!-- jQuery -->
//     <script src="js/jquery-3.5.1.min.js"></script>
//     <!-- Bootstrap 4.5 JS -->
//     <script src="js/bootstrap.min.js"></script>
//     <!-- Popper JS -->
//     <script src="js/popper.min.js"></script>
//     <!-- Font Awesome -->
//     <script src="js/all.min.js"></script>

    ?>
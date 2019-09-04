<?php
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_styles() {
    $parent_style = 'airi';
    wp_enqueue_style(
        $parent_style,
        get_template_directory_uri() . '/style.css'
    );
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_script(
        'theme_js',
        get_stylesheet_directory_uri() . '/js/script.js',
        array('jquery'),
        wp_get_theme()->get('Version'),
        true
    );
}

/**
 * Site branding
 */
if ( !function_exists( 'airi_site_branding' ) ) {
	function airi_site_branding() {
	    echo "<div class='site-logo'>";
		if ( has_custom_logo() ) :
			the_custom_logo();
		else :
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;
		endif;
		$description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() ) : ?>
			<div class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></div>
		<?php
		endif;
		echo "</div>";
	}
}
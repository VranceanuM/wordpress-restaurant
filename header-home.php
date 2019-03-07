<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Digital-entrepreneur
 */
$headline_text = get_field('headline_text');
$primary_button = get_field('primary_button');
$primary_button_link = get_field('primary_button_link');
$secondary_button = get_field('secondary_button');
$secondary_button_link = get_field('secondary_button_link');
$header_background_image = get_field('header_background_image');
$facebook_icon = get_field('facebook-icon');


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="banner" <?php if($header_background_image ): ?> style ="background-image: url('<?php echo $header_background_image; ?>');"<?php endif; ?>>
  <div class="header">
    <div class="header-inner container clear">
      <a class="logo" href="#"><span class="sr">Lambda Logo</span></a>
      <input type="checkbox" id="navigation-toggle-checkbox" name="navigation-toggle-checkbox" class="navigation-toggle-checkbox sr">
      <label for="navigation-toggle-checkbox" class="navigation-toggle-label" onclick>
        <span class="navigation-toggle-label-inner">
          <span class="sr">Navigation</span>
        </span>
      </label>
      <div class="navigation">
        <?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
                'menu_class'    =>  'navigation-menu',
			) );
	    ?>
        <ul class="navigation-social">
          <li class="navigation-item-social"><a class="social social-twitter" href="<?php echo $facebook_icon; ?>"><span class="sr">Twitter</span></a></li>
          <li class="navigation-item-social"><a class="social social-facebook" href="#"><span class="sr">Facebook</span></a></li>
          <li class="navigation-item-social"><a class="social social-google-plus" href="#"><span class="sr">Google Plus</span></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="banner-inner container">
    <h1 class="banner-lead">
      <span class="banner-lead-1"><?php echo $headline_text; ?></span>
    </h1>
    <div class="banner-buttons">
      <a href="<?php echo $primary_button_link ?>" class="button button-primary"><?php echo $primary_button; ?></a>
      <a href="<?php echo $secondary_button_link?>" class="button button-secondary"><?php echo $secondary_button; ?></a>
    </div>
  </div>
</div>

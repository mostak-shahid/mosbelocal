<?php global $mosbelocal_options; ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="Md. Mostak Shahid">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<input id="loader-status" type="hidden" value="<?php echo $mosbelocal_options['misc-page-loader'] ?>">
<?php if ($mosbelocal_options['misc-page-loader']) : ?>
    <div class="se-pre-con">
    <?php if ($mosbelocal_options['misc-page-loader-image']['url']) : ?>
        <img class="img-responsive animation <?php echo $mosbelocal_options['misc-page-loader-image-animation'] ?>" src="<?php echo do_shortcode( $mosbelocal_options['misc-page-loader-image']['url'] ); ?>">
    <?php else : ?>
        <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
    <?php endif; ?>
    </div>
<?php endif; ?>
	<header id="main-header">
		<div class="sticky_top">
			<div class="d-block d-lg-none">
				<div class="small-logo text-center"><?php echo do_shortcode( '[site-identity]' ) ?></div>
				<div class="small-nav text-center">
					<span class="menu-activator"></span>
					<?php
					wp_nav_menu([
						'menu'            => 'mobilemenu',
						'theme_location'  => 'mobilemenu',
						// 'container'       => 'nav',
						// 'container_id'    => 'main-menu',
						// 'container_class' => 'd-flex justify-content-center',
						// 'menu_id'         => false,
						// 'menu_class'      => 'main-menu',
						// 'depth'           => 2,
						// 'fallback_cb'     => 'bs4navwalker::fallback',
						// 'walker'          => new bs4navwalker()
						]);
					?>
				</div>
			</div>
			<div class="d-none d-lg-block">
				<div class="content-wrap">
					<div class="container-fluid">
						<div class="row justify-content-center">
							<div class="col-xl-10">
								<div class="row">
									<div class="col-lg-6 col-xl-2">
										<?php echo do_shortcode( '[site-identity]' ) ?>
									</div>
									<div class="col-lg-6 col-xl-2 order-xl-last text-right">
										<div class="call-wrap">
											<img src="<?php echo get_template_directory_uri() ?>/images/header-phone-icon.png" alt="<?php echo $mosbelocal_options['misc-img-alt'][0] ?> | Phone" class="img-icon" width="18" height="17">
											<?php echo do_shortcode( '[phone index=1]' ) ?>
											
										</div>
									</div>
									<div class="col-lg-12 col-xl-8 text-center">
										<?php
										wp_nav_menu([
											'menu'            => 'mainmenu',
											'theme_location'  => 'mainmenu',
											'container'       => 'nav',
											'container_id'    => 'main-menu',
											'container_class' => 'd-flex justify-content-center',
											'menu_id'         => false,
											'menu_class'      => 'main-menu',
											'depth'           => 2,
											//'fallback_cb'     => 'bs4navwalker::fallback',
											//'walker'          => new bs4navwalker()
											]);
										?>
									</div>					
								</div>
							</div>
						</div>				
					</div>
				</div>			
			</div>
		</div>
	</header>
	<?php if (!is_front_page()) : ?>
		<section id="page-title" <?php if(@$mosbelocal_options['sections-title-background-type'] == 1) echo 'class="'.@$mosbelocal_options['sections-title-background'].'"';?>>
			<div class="content-wrap">
				<div class="container">
					<?php 
					if (is_home()) :
						$page_for_posts = get_option( 'page_for_posts' );
					$title = get_the_title($page_for_posts);
					elseif (is_404()) :
						$title = '404 Page';
					else :
						$title = get_the_title();
					endif; 
					?>
					<span class="heading"><?php echo $title ?></span>
				</div>
			</div>
		</section>
		<?php if (@$mosbelocal_options['sections-breadcrumbs-option']) : ?>
		<section id="section-breadcrumbs" <?php if(@$mosbelocal_options['sections-breadcrumbs-background-type'] == 1) echo 'class="'.@$mosbelocal_options['sections-breadcrumbs-background'].'"';?>>
			<div class="content-wrap">
				<div class="container">
					<?php mos_breadcrumbs(); ?>
				</div>
			</div>
		</section>
		<?php endif; ?>
	<?php endif ?>
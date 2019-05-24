<?php
function home_url_func( $atts = array(), $content = '' ) {
	$atts = shortcode_atts( array(
		'slug' => '',
	), $atts, 'home_url' );
	return home_url( $atts['slug'] );
}
add_shortcode( 'home_url', 'home_url_func' );

function site_identity_func( $atts = array(), $content = null ) {
	global $mosbelocal_options;
	$logo_url = ($mosbelocal_options['logo']['url']) ? $mosbelocal_options['logo']['url'] : get_template_directory_uri(). '/images/logo.png';
	$logo_option = $mosbelocal_options['logo-option'];
	$html = '';
	$atts = shortcode_atts( array(
		'class' => '',
		'container_class' => ''
	), $atts, 'site-identity' ); 
	
	
	$html .= '<div class="logo-wrapper '.$atts['container_class'].'">';
		if($logo_option == 'logo') :
			$html .= '<a class="logo '.$atts['class'].'" href="'.home_url().'">';
			list($width, $height) = getimagesize($logo_url);
			$html .= '<img class="img-responsive img-fluid" src="'.$logo_url.'" alt="'.get_bloginfo('name').' - Logo" width="'.$width.'" height="'.$height.'">';
			$html .= '</a>';
		else :
			$html .= '<div class="text-center '.$atts['class'].'">';
				$html .= '<h1 class="site-title"><a href="'.home_url().'">'.get_bloginfo('name').'</a></h1>';
				$html .= '<p class="site-description">'.get_bloginfo( 'description' ).'</p>';
			$html .= '</div>'; 
		endif;
	$html .= '</div>'; 
		
	return $html;
}
add_shortcode( 'site-identity', 'site_identity_func' );

function site_name_func( $atts = array(), $content = '' ) {
	$html = '';
	$atts = shortcode_atts( array(
		'link' => 0,
		'class' => ''
	), $atts, 'site-name' );
	if ($atts['link']) $html .=	'<a class="'.$atts['class'].'" href="'.esc_url( home_url( '/' ) ).'">';
	$html .= get_bloginfo('name');
	if ($atts['link']) $html .=	'</a>';
	return $html;
}
add_shortcode( 'site-name', 'site_name_func' );
function copyright_symbol_func() {
	return '&copy;';
}
add_shortcode( 'copyright-symbol', 'copyright_symbol_func' );
function this_year_func() {
	return date('Y');
}
add_shortcode( 'this-year', 'this_year_func' );
function email_func( $atts = array(), $content = '' ) {	
	global $mosbelocal_options;
	$contact_email = $mosbelocal_options['contact-email'];
	$html = '';	
	$atts = shortcode_atts( array(
		'offset' => 0,
		'index' => 0,
		'all' => 1,
		'seperator' => ', ',
	), $atts, 'email' );
	$n = 1;

	$html .= '<span class="email-wrap">';
	if ($atts['index']) :
		$i = $atts['index'] - 1;
		$html .= '<span class="email">';
			$html .= '<a class="mailToShow" href="mailto:'.$contact_email[$i].'">'.$contact_email[$i].'</a>';
		$html .= '</span>';	
	else :
		foreach ($contact_email as $email) :
			if ($atts['offset'] AND $n > $atts['offset']) :
				$html .= '<span class="email">';
					$html .= '<a class="mailToShow" href="mailto:'.$email.'">'.$email.'</a>';
				$html .= '</span>';
				$html .= $atts['seperator'];
			endif;
			$n++;
		endforeach;
	endif;
	$output = rtrim(  $html, $atts['seperator']);
	$output .= '</span>';
	return $output;
}
add_shortcode( 'email', 'email_func' );

function phone_func( $atts = array(), $content = '' ) {
    global $mosbelocal_options;
    $html = '';
	$atts = shortcode_atts( array(
		'offset' => 0,
		'index' => 0,
		'all' => 1,
		'seperator' => ', '
	), $atts, 'phone' );
	$n = 1; 
	$html .= '<span class="phone-number-wrap">';
	if ($atts['index']) :
		$i = $atts['index'] - 1;
	    $html .= '<span class="phone-number">';
	    $html .= '<a class="phoneToShow" href="tel:';
	    $html .= preg_replace('/[^0-9]/', '', $mosbelocal_options['contact-phone'][$i]);
	    $html .= '" >';
	    $html .= $mosbelocal_options['contact-phone'][$i];  
	    $html .= '</a>';
	    $html .= '</span>';		
	else :
		foreach ($mosbelocal_options['contact-phone'] as $phone) :
			if ($n > $atts['offset']) :
			    $html .= '<span class="phone-number">';
			    $html .= '<a class="phoneToShow" href="tel:';
			    $html .= preg_replace('/[^0-9]/', '', $phone);
			    $html .= '" >';
			    $html .= $phone;  
			    $html .= '</a>';
			    $html .= '</span>';
			    $html .= $atts['seperator'];
			endif;
			$n++;
		endforeach;
	endif;
	$output = rtrim(  $html, $atts['seperator']);
	$output .= '</span>';
	return $output;
}
add_shortcode( 'phone', 'phone_func' );

function fax_func( $atts = array(), $content = '' ) {
    global $mosbelocal_options;
    $html = '';
	$atts = shortcode_atts( array(
		'offset' => 0,
		'index' => 0,
		'all' => 1,
		'seperator' => ', '
	), $atts, 'fax' );
	$n = 1; 
	$html .= '<span class="fax-number-wrap">';
	if ($atts['index']) :
		$i = $atts['index'] - 1;
	    $html .= '<span class="fax-number">';
	    $html .= '<a class="faxToShow" href="tel:';
	    $html .= preg_replace('/[^0-9]/', '', $mosbelocal_options['contact-fax'][$i]);
	    $html .= '" >';
	    $html .= $mosbelocal_options['contact-fax'][$i];  
	    $html .= '</a>';
	    $html .= '</span>';		
	else :
		foreach ($mosbelocal_options['contact-fax'] as $fax) :
			if ($n > $atts['offset']) :
			    $html .= '<span class="fax-number">';
			    $html .= '<a class="faxToShow" href="tel:';
			    $html .= preg_replace('/[^0-9]/', '', $fax);
			    $html .= '" >';
			    $html .= $fax;  
			    $html .= '</a>';
			    $html .= '</span>';
			    $html .= $atts['seperator'];
			endif;
			$n++;
		endforeach;
	endif;
	$output = rtrim(  $html, $atts['seperator']);
	$output .= '</span>';
	return $output;
}
add_shortcode( 'fax', 'fax_func' );
function address_func( $atts = array(), $content = '' ) {
	global $mosbelocal_options;
	$contact_address = $mosbelocal_options['contact-address'];
	$html = '';
	$atts = shortcode_atts( array(
		'offset' => 0,
		'map' => 0,
		'address' => 1
	), $atts, 'address' );
	$n = 1;
	$html .= '<span class="address-wrap">'; 
	foreach ($contact_address as $address) :
	$html .= '<span class="address">';
		if ($n > $atts['offset']) :
			if ($address[map_link]) $html .= '<a target="_blank" href="'.$address[map_link].'">';
			if ($atts['map']) :		
				$html .= '<span class="img-part">';
					$html .= '<img class="img-fluid img-map" src="'.$address[image].'" alt="">';
				$html .= '</span>';
			endif;
			if ($atts['address']) :	
				$html .= '<span class="text-part">';
					$html .= $address['description'];
				$html .= '</span>';
			endif;
			if ($address[map_link]) $html .= '</a>';	

		endif;
		$n++;		
	$html .= '</span>';
	endforeach;
	$html .= '</span>';
	return $html;
}
add_shortcode( 'address', 'address_func' );

function working_hours_func( $atts = array(), $content = '' ) {
    global $mosbelocal_options;
    $html = '';
    $html .= '<div class="contact-hour-wrapper">'; 
    $html .= '<ul class="contact-hour">'; 
	foreach ($mosbelocal_options['contact-hour'] as $hour) :
    $html .= '<li>' . $hour . '</li>';
	endforeach;
    $html .= '</ul>'; 
    $html .= '</div>'; 

    return $html;
}
add_shortcode( 'working-hours', 'working_hours_func' );
function social_menu_fnc( $atts = array(), $content = '' ) {
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	if ( is_plugin_active( 'mos-image-alt/mos-image-alt.php' ) ) {
		$alt_tag = mos_alt_generator(get_the_ID());
	} 
	global $mosbelocal_options;
	$html = '';
	$contact_social = $mosbelocal_options['contact-social'];
	$contact_address = $mosbelocal_options['contact-address'];
	$atts = shortcode_atts( array(
		'display' => 'inline',
		'title' => 0,
	), $atts, 'social_menu' );
	if ($atts['display'] == 'inline') $display = 'list-inline';
	else  $display = 'list-unstyled';
	$html .= '<ul class="'.$display.' social-menu">';
	foreach ($contact_social as $social) :	
		if ($social['link_url'] AND $social['basic_icon']) :
			$str = '';
			$basic_icon = do_shortcode(mos_home_url_replace($social['basic_icon']));

			if (filter_var($basic_icon, FILTER_VALIDATE_URL)) {
				//$basic_icon = do_shortcode();
				list($width, $height) = getimagesize($basic_icon);
				$str = '<span class="social-img"><img src="'.$basic_icon.'" alt="'.$alt_tag['social'] . $social['title'].'" width="'.$width.'" height="'.$height.'"></span>';
				if ($social['hover_icon']) {
					//$hover_icon = do_shortcode(str_replace('{{home_url}}', home_url(), $social['hover_icon']));
					$hover_icon = do_shortcode(mos_home_url_replace($social['hover_icon']));
					list($hwidth, $hheight) = getimagesize($hover_icon);
					$str .= '<span class="social-img-hover"><img src="'.$hover_icon.'" alt="'.$alt_tag['social'] . $social['title'].'" width="'.$hwidth.'" height="'.$hheight.'"></span>'; //hover_icon
				}
			}
			else { 
				$str = '<span class="social-icon"><i class="'.$social['basic_icon'].'"></i></span>';
				if ($social['hover_icon'])
					$str .= '<span class="social-icon-hover"><i class="'.$social['hover_icon'].'"></i></span>';
			}
			$html .= '<li class="social-list '.strtolower(preg_replace('/\s+/', '_', $social['title']));
			if ($atts['display'] == 'inline') $html .= ' list-inline-item';
			$html .= '"><a href="'.esc_url( $social['link_url'] ).'"';
			if ($social['target'])
				$html .= ' target="_blank"';
			$html .= '>' . $str;
			if ($atts['title']) $html .= '<span class="social-title">' . $social['title'] .'</span>';
			$html .= '</a></li>';
		endif;	
	endforeach;

	$html .= '</ul>';
	return $html;
}
add_shortcode( 'social_menu', 'social_menu_fnc' );
function theme_credit_func( $atts = array(), $content = '' ) {
	$html = "";
	$atts = shortcode_atts( array(
		'name' => 'Md. Mostak Shahid',
		'url' => 'http://mostak.belocal.oday',
	), $atts, 'theme-credit' );

	return $html = '<a href="'.$atts["url"].'" target="_blank" class="theme-credit">'.$atts["name"].'</a>';
}
add_shortcode( 'theme-credit', 'theme_credit_func' );
function mosmenu_func( $atts = array(), $content = '' ) {
	$atts = shortcode_atts( array(
	    'container'         => 'nav',
	    'container_class'   => 'mosmenu',
	    'menu_class'        => 'mos-menu',
	    'location'        	=> '',
	    'menu_name'        	=> '',
	), $atts, 'mosmenu' );
    return wp_nav_menu( array(
        'menu'              => $atts['menu_name'],
        'theme_location'    => $atts['location'],
        'container'         => $atts['container'],
        'container_class'   => $atts['container_class'],
        'menu_class'        => $atts['menu_class'],
        'fallback_cb'       => 'mos_link_to_menu_editor',
        'echo'				=> false 
        )
    );
}
add_shortcode( 'mosmenu', 'mosmenu_func' );

function mos_post_func( $atts = array(), $content = '' ) {
	$html = '';
	$atts = shortcode_atts( array(
		'post_type' => 'post',
		'taxonomy' => '',
		'terms'	=> '',
		'count' => '-1',
		'grid' => '',
		'format' => 'title, content, excerpt-x, image-width-height, meta:meta_field_name, link:meta_field_name',
		'pagination' => 0
	), $atts, 'mos_post' );
	$count = ($atts['count']) ? $atts['count'] : '-1' ;
	$args = array(
		'posts_per_page'=> $count,
		'post_type'=> $atts['post_type']
	);
	if ($atts['taxonomy'] AND $atts['terms']) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => $atts['taxonomy'],
				'field'    => 'term_id',
				'terms'    =>  $atts['terms'],
			)
		);
	}
	if ( $atts['grid'] == 6) $grid = 'col-lg-2';
	elseif ( $atts['grid'] == 4) $grid = 'col-lg-3';
	elseif ( $atts['grid'] == 3) $grid = 'col-lg-4';
	elseif ( $atts['grid'] == 2) $grid = 'col-lg-6';
	$query = new WP_Query($args); 
	$count_posts = wp_count_posts($atts['post_type']);
	$total = ($count > 0)? $count : $count_posts->publish;
	$n = 1;
	if ($query -> have_posts()) : 
		if ($atts['grid'] > 1) $html .= '<div class="row">';
		while ($query -> have_posts()) : $query -> the_post(); 
			$html .= '<div class="'.$grid .' '. $atts['post_type'].'-wrapper">';
			$slices = explode(',', str_replace(' ', '', $atts['format']));
			foreach ($slices as $slice) {
				if ($slice == 'title') {
					$html .= '<h3 class="'.$atts['post_type'].'-title">';
					$html .= get_the_title();
					$html .= '</h3><!--/.'.$atts['post_type'].'-title-->';
				} elseif (preg_match("/image/i", $slice)) {
					if (has_post_thumbnail()) {
						$src = get_the_post_thumbnail_url();
						$attachment_id = get_post_thumbnail_id();
						$attachment_alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true );
						$slice = explode('-', $slice);
						if (sizeof($slice) == 3){
							$src = aq_resize($src, $slice[1], $slice[2], true);
						}
						elseif (sizeof($slice) == 2){
							$src = aq_resize($src, $slice[1]);
						}
						list($width, $height, $type) = getimagesize($src);
						$html .= '<div class="'.$atts['post_type'].'-image">';
						$html .= '<img class="img-responsive img-fluid img-'.$atts['post_type'].'" src="'.$src.'" alt="'.$attachment_alt.'" width="'.$width.'" height="'.$height.'" />';
						$html .= '</div><!--/.'.$atts['post_type'].'-image-->';	
					}				
				} elseif ($slice == 'content') {
					$html .= '<div class="'.$atts['post_type'].'-content">';
					$html .= get_the_content();
					$html .= '</div><!--/.'.$atts['post_type'].'-content-->';					
				} elseif (preg_match("/excerpt/i", $slice)) {
					$slice = explode('-', $slice);
					if (sizeof($slice) > 1) $limit = end($slice);
					else $limit = 15;
					$html .= '<div class="'.$atts['post_type'].'-excerpt">';
					$html .= wp_trim_words(get_the_content(), $limit, '');
					$html .= '</div><!--/.'.$atts['post_type'].'-excerpt-->';					
				} elseif (preg_match("/meta:/i", $slice)) {					
					$pieces = explode(':', str_replace(' ', '', $slice));
					$html .= '<div class="'.$atts['post_type'].'-meta-'.end($pieces).'">';
					$html .= get_post_meta( get_the_ID(), end($pieces), true );
					$html .= '</div><!--/.'.$atts['post_type'].'-meta-'.end($pieces).'-->';					
				} elseif (preg_match("/link/i", $slice)) {	
					if (preg_match("/link:/i", $slice))	{			
						$pieces = explode(':', $slice);
						$url = get_post_meta( get_the_ID(), end($pieces), true );
					}
					else $url = get_the_permalink();
					if ($url) $html .= '<a class="read-more" href="'.$url.'">Read More</a>';			
				}
			}

			$html .= '</div><!--/.'.$atts['post_type'].'-wrapper-->';
			$n++;
		endwhile;
		if ($atts['grid'] > 1) $html .= '</div>';
	endif;
	wp_reset_postdata();
	if ($atts['pagination']) :
	    $html .= '<div class="pagination-wrapper '. $atts['post_type'].'-pagination">'; 
	        $html .= '<nav class="navigation pagination" role="navigation">';
	            $html .= '<div class="nav-links">'; 
	            $big = 999999999; // need an unlikely integer
	            $html .= paginate_links( array(
	                'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
	                'format' => '?paged=%#%',
	                'current' => max( 1, get_query_var('paged') ),
	                'total' => $query->max_num_pages,
	                'prev_text'          => __('Prev'),
	                'next_text'          => __('Next')
	            ) );
	            $html .= '</div>';
	        $html .= '</nav>';
	    $html .= '</div>';
	endif;
	return $html;
}
add_shortcode( 'mos_post', 'mos_post_func' );


function element_start_func( $atts = array(), $content = '' ) {
	$atts = shortcode_atts( array(
		'name' => 'div',
		'class' => '',
		'id' => '',
		'href' => '',
		'src' => '',
		'imgwidth' => '',
		'imgheight' => '',
		'atts' => '',
	), $atts, 'element_start' ); 
	$html = '<'.$atts['name'];
	if($atts['id']) $html .= ' id="'.$atts['id'].'"';
	if($atts['class']) $html .= ' class="'.$atts['class'].'"';
	if ($atts['name'] == 'a' AND $atts['href']) {		
		//$href_1 = str_replace('home_url()', home_url(), $atts['href']);
		$href = mos_home_url_replace($atts['href']);
		$html .= ' href="'.$href.'"';
	}

	if($atts['name'] == 'img' AND $atts['src']){
		//$src_1 = str_replace('home_url()', home_url(), $atts['src']);
		$src = mos_home_url_replace($atts['src']);
		if($atts['imgwidth'] AND  $atts['imgheight']) :
			$html .= ' src="'.aq_resize($src, $atts['imgwidth'], $atts['imgheight'], true).'"';
			$html .= ' width="'.$atts['imgwidth'].'" height="'.$atts['imgheight'].'"';
		elseif($atts['imgwidth']) :
			$html .= ' src="'.aq_resize($src, $atts['imgwidth'], '', true).'"';
			$html .= ' width="'.$atts['imgwidth'].'"';
		else :
			$html .= ' src="'.$src.'"';
		endif;
	}
	if($atts['atts']) {
		//$ratts_1 = str_replace('home_url()', home_url(), $atts['atts']);
		$ratts = mos_home_url_replace($atts['atts']);
		$html .= ' '.$ratts;
	}
	$html .= ' >';

	return $html;
}
add_shortcode( 'element_start', 'element_start_func' );

function element_end_func( $atts = array(), $content = '' ) {	
	$atts = shortcode_atts( array(
		'name' => 'div',
		'class' => '',
		'id' => ''
	), $atts, 'site_logo' ); 	
	$html = '</'.$atts['name'].'><!--/'.$atts['name'];
	if($atts['id']) $html .= '#'.$atts['id'];
	if($atts['class']) $html .= '.'.$atts['class'];
	$html .= '-->';

	return $html;
}
add_shortcode( 'element_end', 'element_end_func' );
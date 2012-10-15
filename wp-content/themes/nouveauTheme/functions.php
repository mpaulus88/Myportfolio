<?php 
add_action('widgets_init', 'portfolio_sidebars');
add_action('after_setup_theme', 'portfolio_setup');
add_action('init','create_post_type');
add_action('init', 'add_taxonomy');

function add_index_link($items, $args) {

	if( $args->theme_location == 'nav' )
		$homeLink .= '<li id="home_link"><a href="' . home_url() . '">ACCUEIL</a></li>';

	return $homeLink . $items;
}
add_filter('wp_nav_menu_items', 'add_index_link', 10, 2);
function add_taxonomy()
{
	register_taxonomy('techniques','works',array(
		"label"=>"Techniques utilisées",
		"hierarchical"=>true,
		"query_var"=>true,
		""
		));
	register_taxonomy('news_type','news',array(
		"label"=>"Type de news",
		"hierarchical"=>true,
		"query_var"=>true,
		""
		));
}	


if(!function_exists('portfolio_setup'))
{
function portfolio_setup(){
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_theme_support('post-formats',array('aside','link','gallery','status','quote','image'));
	if(function_exists('add_image_size'))
	{
	add_image_size('folio-work',680,840,false); //not cropped
	}
	register_nav_menu('header',__('Header Menu','portfolio'));
}
}

if(!function_exists('create_post_type'))
	{
		function create_post_type(){
			register_post_type('works',
				array('labels'=>array(
					'name'=>__('Travaux'),
					'singular_name'=>__('Travail')

					),
				'public'=>true,
				'has_archive'=>true,
				'supports'=>array('thumbnail','title','editor','post-formats','custom-fields'
					)
				)
				);
		register_post_type('news',
				array('labels'=>array(
					'name'=>__('News'),
					'singular_name'=>__('Nouvelle')

					),
				'public'=>true,
				'has_archive'=>true,
				'supports'=>array('thumbnail','title','editor','post-formats'
					)
				)
				);
		register_post_type('ressoc',
				array('labels'=>array(
					'name'=>__('Réseaux sociaux'),
					'singular_name'=>__('Réseau social')

					),
				'public'=>true,
				'has_archive'=>true,
				'supports'=>array('thumbnail','title','custom-fields'
					)
				)
				);
		register_post_type('foot',
				array('labels'=>array(
					'name'=>__('footer'),
					'singular_name'=>__('article foote')

					),
				'public'=>true,
				'has_archive'=>true,
				'supports'=>array('thumbnail','title','editor','custom-fields'
					)
				)
				);
		}
	}

if(!function_exists('portfolio_sidebars'))
{
	function portfolio_sidebars(){
	register_sidebar(
					array(
					'id'=>'Primary',
					'name'=>__('Primary'),
					'description'=>__('A short description of the sidebar.'),
					'before_widgets' => '<div id="%1$s" class="widget %2$s">',
					'before_title' =>'<h3 class="widget_title">',
					'after_title'=>'</h3>'
					)
	);
		register_sidebar(
					array(
					'id'=>'Secondary',
					'name'=>__('Secondary'),
					'description'=>__('A short description of the sidebar.'),
					'before_widgets' => '<div id="%1$s" class="widget %2$s">',
					'before_title' =>'<h3 class="widget_title">',
					'after_title'=>'</h3>'
					)
	);

	}
}


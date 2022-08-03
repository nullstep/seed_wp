<?php
/*
 *  Author: nullstep
 *  URL: nullstep.com
 */

// no direct access

defined('ABSPATH') or die('-_-');

define('_THEME', 'seed_wp');
define('_AUTHOR', 'nullstep');

define('_IGNORE_SEED_WP', [
	'127.0.0.1'
]);

define('_OPTIONS_SEED_WP', [
	'thumbnails' => true
]);

define('_POSTTYPES_SEED_WP', [
	'code'
]);

define('_SEED_WP_TAXONOMIES', [
	'group' => 'code'
]);

define('_SEED_WP_MENUS', [
	'primary' => 'Primary Menu'
]);

define('_SEED_WP_ARGS', [
	'seed' => [
		'type' => 'string',
		'default' => 's33d'
	],
	'use_seed' => [
		'type' => 'string',
		'default' => ''
	],
	'seed_hash' => [
		'type' => 'string',
		'default' => ''
	],
	'container_class' => [
		'type' => 'string',
		'default' => 'container'
	],
	'show_infobar' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'show_nav' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'nav_logo_pos' => [
		'type' => 'string',
		'default' => 'left'
	],
	'nav_group' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'nav_align' => [
		'type' => 'string',
		'default' => 'right'
	],
	'show_banner' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'header_order' => [
		'type' => 'string',
		'default' => 'info,nav,banner'
	],
	'sticky_nav' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'favicon_image' => [
		'type' => 'string',
		'default' => ''
	],
	'logo_image_normal' => [
		'type' => 'string',
		'default' => ''
	],
	'logo_image_contrast' => [
		'type' => 'string',
		'default' => ''
	],
	'nav_logo' => [
		'type' => 'string',
		'default' => 'normal'
	],
	'primary_colour' => [
		'type' => 'string',
		'default' => '#333333'
	],
	'secondary_colour' => [
		'type' => 'string',
		'default' => '#333333'
	],
	'tertiary_colour' => [
		'type' => 'string',
		'default' => '#333333'
	],
	'quaternary_colour' => [
		'type' => 'string',
		'default' => '#333333'
	],
	'heading_font' => [
		'type' => 'string',
		'default' => ''
	],
	'nav_font' => [
		'type' => 'string',
		'default' => ''
	],
	'body_font' => [
		'type' => 'string',
		'default' => ''
	],
	'mono_font' => [
		'type' => 'string',
		'default' => ''
	],
	'nav_shadow' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'show_page_titles' => [
		'type' => 'string',
		'default' => 'h2'
	],
	'show_child_titles' => [
		'type' => 'string',
		'default' => ''
	],
	'sidebar_on_pages' => [
		'type' => 'string',
		'default' => 'none'
	],
	'sidebar_on_posts' => [
		'type' => 'string',
		'default' => 'none'
	],
	'sidebar_on_feeds' => [
		'type' => 'string',
		'default' => 'right'
	],
	'single_post_name' => [
		'type' => 'string',
		'default' => 'Post'
	],
	'plural_post_name' => [
		'type' => 'string',
		'default' => 'Posts'
	],
	'show_cat_desc' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'show_post_date' => [
		'type' => 'string',
		'default' => 'yes'
	],
	'excerpt_length' => [
		'type' => 'integer',
		'default' => 20
	],
	'theme_css' => [
		'type' => 'string',
		'default' => ''
	],
	'theme_css_minified' => [
		'type' => 'string',
		'default' => ''
	],
	'theme_js' => [
		'type' => 'string',
		'default' => ''
	],
	'theme_js_minified' => [
		'type' => 'string',
		'default' => ''
	]
]);

define('_FORM_SEED_WP', [
	'general' => [
		'label' => 'General',
		'columns' => 3,
		'fields' => [
			'seed' => [
				'label' => 'Seed',
				'type' => 'input'
			],
			'use_seed' => [
				'label' => 'Generate Site',
				'type' => 'check'
			]
		]
	],
	'layout' => [
		'label' => 'Layout',
		'columns' => 4,
		'fields' => [
			'container_class' => [
				'label' => 'Site Width',
				'type' => 'select',
				'values' => [
					'container-fluid' => 'Full Width',
					'container' => 'Fixed Width'
				]
			],
			'show_infobar' => [
				'label' => 'Show Infobar',
				'type' => 'check'
			],
			'show_nav' => [
				'label' => 'Show Navbar',
				'type' => 'check'
			],
			'nav_logo_pos' => [
				'label' => 'Nav Logo Position',
				'type' => 'select',
				'values' => [
					'left' => 'Left',
					'right' => 'Right'
				]
			],
			'nav_group' => [
				'label' => 'Group Navigation',
				'type' => 'check'
			],
			'nav_align' => [
				'label' => 'Navigation Alignment',
				'type' => 'select',
				'values' => [
					'left' => 'Left',
					'right' => 'Right'
				]
			],
			'show_banner' => [
				'label' => 'Show Banner',
				'type' => 'check'
			],
			'header_order' => [
				'label' => 'Header Order',
				'type' => 'select',
				'values' => [
					'info,nav,banner' => 'Info > Nav > Banner',
					'info,banner,nav' => 'Info > Banner > Nav',
					'nav,info,banner' => 'Nav > Info > Banner',
					'nav,banner,info' => 'Nav > Banner > Info',
					'banner,info,nav' => 'Banner > Info > Nav',
					'banner,nav,info' => 'Banner > Nav > Info'
				]
			],
			'sticky_nav' => [
				'label' => 'Sticky Navbar',
				'type' => 'check'
			],
			'sidebar_on_pages' => [
				'label' => 'Page Sidebar',
				'type' => 'select',
				'values' => [
					'none' => 'None',
					'left' => 'Left',
					'right' => 'Right'
				]
			],
			'sidebar_on_feeds' => [
				'label' => 'Feed Sidebar',
				'type' => 'select',
				'values' => [
					'none' => 'None',
					'left' => 'Left',
					'right' => 'Right'
				]
			],
			'sidebar_on_posts' => [
				'label' => 'Post Sidebar',
				'type' => 'select',
				'values' => [
					'none' => 'None',
					'left' => 'Left',
					'right' => 'Right'
				]
			]
		]
	],
	'titling' => [
		'label' => 'Titling',
		'columns' => 3,
		'fields' => [
			'show_page_titles' => [
				'label' => 'Show Page Titles',
				'type' => 'select',
				'values' => [
					'none' => 'None',
					'h1' => 'h1',
					'h2' => 'h2',
					'h3' => 'h3'
				]
			],
			'show_child_titles' => [
				'label' => 'Show Child Titles',
				'type' => 'check'
			],
			'single_post_name' => [
				'label' => 'Post Name (singular)',
				'type' => 'input'
			],
			'plural_post_name' => [
				'label' => 'Post Name (plural)',
				'type' => 'input'
			],
			'show_cat_desc' => [
				'label' => 'Show Category Description',
				'type' => 'check'
			],
			'show_post_date' => [
				'label' => 'Show Post Date',
				'type' => 'check'
			],
			'excerpt_length' => [
				'label' => 'Excerpt Word Limit',
				'type' => 'input'
			]
		]
	],
	'images' => [
		'label' => 'Images',
		'columns' => 3,
		'fields' => [
			'favicon_image' => [
				'label' => 'Site Favicon',
				'type' => 'file'
			],
			'logo_image_normal' => [
				'label' => 'Logo Image (normal)',
				'type' => 'file'
			],
			'logo_image_contrast' => [
				'label' => 'Logo Image (contrast)',
				'type' => 'file'
			],
			'nav_logo' => [
				'label' => 'Navbar Logo',
				'type' => 'select',
				'values' => [
					'none' => 'None',
					'normal' => 'Normal',
					'contrast' => 'Contrast'
				]
			]
		]
	],
	'visuals' => [
		'label' => 'Visuals',
		'columns' => 4,
		'fields' => [
			'primary_colour' => [
				'label' => 'Primary Colour',
				'type' => 'colour'
			],
			'secondary_colour' => [
				'label' => 'Secondary Colour',
				'type' => 'colour'
			],
			'tertiary_colour' => [
				'label' => 'Tertiary Colour',
				'type' => 'colour'
			],
			'quaternary_colour' => [
				'label' => 'Quaternary Colour',
				'type' => 'colour'
			],
			'heading_font' => [
				'label' => 'Headings Font',
				'type' => 'font'
			],
			'nav_font' => [
				'label' => 'Navigation Font',
				'type' => 'font'
			],
			'body_font' => [
				'label' => 'Body Text Font',
				'type' => 'font'
			],
			'mono_font' => [
				'label' => 'Monospace Font',
				'type' => 'font'
			],
			'nav_shadow' => [
				'label' => 'Navigation Bar Shadow',
				'type' => 'check'
			]
		]
	],
	'css' => [
		'label' => 'CSS',
		'columns' => 1,
		'fields' => [
			'theme_css' => [
				'label' => 'Theme Styles',
				'type' => 'code'
			]
		]
	],
	'js' => [
		'label' => 'JS',
		'columns' => 1,
		'fields' => [
			'theme_js' => [
				'label' => 'Theme Scripts',
				'type' => 'code'
			]
		]
	]
]);

//     ▄████████     ▄███████▄   ▄█   
//    ███    ███    ███    ███  ███   
//    ███    ███    ███    ███  ███▌  
//    ███    ███    ███    ███  ███▌  
//  ▀███████████  ▀█████████▀   ███▌  
//    ███    ███    ███         ███   
//    ███    ███    ███         ███   
//    ███    █▀    ▄████▀       █▀   

class _themeAPI {
	public function add_routes() {
		register_rest_route(_THEME . '-theme-api/v1', '/settings', [
			'methods' => 'POST',
			'callback' => [$this, 'update_settings'],
			'args' => _themeSettings::args(),
			'permission_callback' => [$this, 'permissions']
		]);
		register_rest_route(_THEME . '-theme-api/v1', '/settings', [
			'methods' => 'GET',
			'callback' => [$this, 'get_settings'],
			'args' => [],
			'permission_callback' => [$this, 'permissions']
		]);
	}

	public function permissions() {
		return current_user_can('manage_options');
	}

	public function update_settings(WP_REST_Request $request) {
		$settings = [];
		foreach (_themeSettings::args() as $key => $val) {
			$settings[$key] = $request->get_param($key);
		}
		_themeSettings::save_settings($settings);
		return rest_ensure_response(_themeSettings::get_settings());
	}

	public function get_settings(WP_REST_Request $request) {
		return rest_ensure_response(_themeSettings::get_settings());
	}
}

class _themeSettings {
	protected static $option_key = _THEME . '-theme-settings';

	public static function args() {
		$args = _SEED_WP_ARGS;
		foreach (_SEED_WP_ARGS as $key => $val) {
			$val['required'] = true;
			switch ($val['type']) {
				case 'integer': {
					$cb = 'absint';
					break;
				}
				default: {
					$cb = 'sanitize_text_field';
				}
				$val['sanitize_callback'] = $cb;
			}
		}
		return $args;
	}

	public static function get_settings() {
		$defaults = [];
		foreach (_SEED_WP_ARGS as $key => $val) {
			$defaults[$key] = $val['default'];
		}
		$saved = get_option(self::$option_key, []);
		if (!is_array($saved) || empty($saved)) {
			return $defaults;
		}
		return wp_parse_args($saved, $defaults);
	}

	public static function save_settings(array $settings) {
		$defaults = [];
		foreach (_SEED_WP_ARGS as $key => $val) {
			$defaults[$key] = $val['default'];
		}
		foreach ($settings as $i => $setting) {
			if (!array_key_exists($i, $defaults)) {
				unset($settings[$i]);
			}
			if ($i == 'theme_css') {
				$settings['theme_css_minified'] = minify_css($setting);
			}
			if ($i == 'theme_js') {
				$settings['theme_js_minified'] = minify_js($setting);
			}
			if ($i == 'seed') {
				$settings['seed_hash'] = make_hash($setting);
			}
		}
		update_option(self::$option_key, $settings);
	}
}

class _themeMenu {
	protected $slug = _THEME . '-theme-menu';
	protected $assets_url;

	public function __construct($assets_url) {
		$this->assets_url = $assets_url;
		add_action('admin_menu', [$this, 'add_page']);
		add_action('admin_enqueue_scripts', [$this, 'register_assets']);
	}

	public function add_page() {
		add_menu_page(
			_THEME,
			_THEME,
			'manage_options',
			$this->slug,
			[$this, 'render_admin'],
			'dashicons-palmtree',
			2
		);
	}

	public function register_assets() {
		$boo = microtime(false);
		wp_register_script($this->slug, $this->assets_url . '/' . _THEME . '.js?' . $boo, ['jquery']);
		wp_register_style($this->slug, $this->assets_url . '/' . _THEME . '.css?' . $boo);
		wp_localize_script($this->slug, _THEME, [
			'strings' => [
				'saved' => 'Settings Saved',
				'error' => 'Error'
			],
			'api' => [
				'url' => esc_url_raw(rest_url(_THEME . '-theme-api/v1/settings')),
				'nonce' => wp_create_nonce('wp_rest')
			]
		]);
	}

	public function enqueue_assets() {
		if (!wp_script_is($this->slug, 'registered')) {
			$this->register_assets();
		}
		wp_enqueue_script($this->slug);
		wp_enqueue_style($this->slug);
	}

	public function render_admin() {
		wp_enqueue_media();
		$this->enqueue_assets();

		$fonts = json_decode(file_get_contents($this->assets_url . '/fonts.json'));
		$opts = '<option value="">None</option>';
		$types = [
			'serif',
			'sans-serif',
			'display',
			'handwriting',
			'monospace'
		];
		foreach ($fonts as $item) {
			$font = explode(',', $item);
			$opts .= '<option value="' . $font[0] . '">' . $font[0] . ' (' . $types[(int)$font[1]] . ')</option>';
		}

		$name = _THEME;
		$form = _FORM_SEED_WP;

		// build form

		echo '<div id="' . $name . '-wrap" class="wrap">';
			echo '<h1>' . $name . '</h1>';
			echo '<p>Configure your ' . $name . ' settings...</p>';
			echo '<form id="' . $name . '-form" method="post">';
				echo '<nav id="' . $name . '-nav" class="nav-tab-wrapper">';
				foreach ($form as $tid => $tab) {
					echo '<a href="#' . $name . '-' . $tid . '" class="nav-tab">' . $tab['label'] . '</a>';
				}
				echo '</nav>';
				echo '<div class="tab-content">';
				foreach ($form as $tid => $tab) {
					echo '<div id="' . $name . '-' . $tid . '" class="' . $name . '-tab">';
					foreach ($tab['fields'] as $fid => $field) {
						echo '<div class="form-block col-' . $tab['columns'] . '">';
						switch ($field['type']) {
							case 'input': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<input id="' . $fid . '" type="text" name="' . $fid . '">';
								break;
							}
							case 'select': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<select id="' . $fid . '" name="' . $fid . '">';
									foreach ($field['values'] as $value => $label) {
										echo '<option value="' . $value . '">' . $label . '</option>';
									}
								echo '</select>';
								break;
							}
							case 'text': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<textarea id="' . $fid . '" class="tabs" name="' . $fid . '"></textarea>';
								break;
							}
							case 'file': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<input id="' . $fid . '" type="text" name="' . $fid . '">';
								echo '<input data-id="' . $fid . '" type="button" class="button-primary choose-file-button" value="...">';
								break;
							}
							case 'colour': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<input id="' . $fid . '" type="text" name="' . $fid . '">';
								echo '<input data-id="' . $fid . '" type="color" class="choose-colour-button" value="#000000">';
								break;
							}
							case 'code': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<textarea id="' . $fid . '" class="code" name="' . $fid . '"></textarea>';
								break;
							}
							case 'check': {
								echo '<em>' . $field['label'] . ':</em>';
								echo '<label class="switch">';
									echo '<input type="checkbox" id="' . $fid . '" name="' . $fid . '" value="yes">';
									echo '<span class="slider"></span>';
								echo '</label>';
								break;
							}
							case 'font': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<select id="' . $fid . '" name="' . $fid . '">';
									echo $opts;
								echo '</select>';
								break;
							}
						}
						echo '</div>';
					}
					echo '</div>';
				}
				echo '</div>';
				echo '<div>';
					submit_button();
				echo '</div>';
				echo '<div id="' . $name . '-feedback"></div>';
			echo '</form>';
		echo '</div>';
	}
}

//  ███    █▄      ▄███████▄  ████████▄      ▄████████      ███         ▄████████     ▄████████  
//  ███    ███    ███    ███  ███   ▀███    ███    ███  ▀█████████▄    ███    ███    ███    ███  
//  ███    ███    ███    ███  ███    ███    ███    ███     ▀███▀▀██    ███    █▀     ███    ███  
//  ███    ███    ███    ███  ███    ███    ███    ███      ███   ▀   ▄███▄▄▄       ▄███▄▄▄▄██▀  
//  ███    ███  ▀█████████▀   ███    ███  ▀███████████      ███      ▀▀███▀▀▀      ▀▀███▀▀▀▀▀    
//  ███    ███    ███         ███    ███    ███    ███      ███        ███    █▄   ▀███████████  
//  ███    ███    ███         ███   ▄███    ███    ███      ███        ███    ███    ███    ███  
//  ████████▀    ▄████▀       ████████▀     ███    █▀      ▄████▀      ██████████    ███    ███  

class _themeUpdater {
	protected $theme = _THEME;
	protected $repository = _AUTHOR . '/' . _THEME;
	protected $domain = 'https://github.com/';
	protected $raw_domain = 'https://raw.githubusercontent.com/';
	protected $css_endpoint = '/main/style.css';
	protected $zip_endpoint = '/releases/download/v';
	protected $remote_css_uri;
	protected $remote_zip_uri;
	protected $remote_version;
	protected $local_version;

	public function init() {
		add_filter('auto_update_theme', [
			$this,
			'auto_update_theme'
		], 20, 2);
		add_filter('upgrader_source_selection', [
			$this,
			'upgrader_source_selection'
		], 10, 4);
		add_filter('pre_set_site_transient_update_themes', [
			$this,
			'pre_set_site_transient_update_themes'
		]);
	}

	public function auto_update_theme($update, $item) {
		return $this->theme === $item->theme;
	}

	public function upgrader_source_selection($source, $remote_source, $upgrader, $hook_extra) {
		global $wp_filesystem;

		$update = [
			'update-selected',
			'update-selected-themes',
			'upgrade-theme'
		];

		if (!isset($_GET['action']) || !in_array($_GET['action'], $update, true)) {
			return $source;
		}

		if (!isset($source, $remote_source)) {
			return $source;
		}

		if (false === stristr(basename($source), $this->theme)) {
			return $source;
		}

		$basename = basename($source);
		$upgrader->skin->feedback(esc_html_e('Renaming theme directory.', 'bootstrap'));
		$corrected_source = str_replace($basename, $this->theme, $source);

		if ($wp_filesystem->move($source, $corrected_source, true)) {
			$upgrader->skin->feedback(esc_html_e('Rename successful.', 'bootstrap'));
			return $corrected_source;
		}

		return new WP_Error();
	}

	public function pre_set_site_transient_update_themes($transient) {
		require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
		$this->local_version = (wp_get_theme($this->theme))->get('Version');

		if ($this->has_update()) {
			$response = [
				'theme' => $this->theme,
				'new_version' => $this->remote_version,
				'url' => $this->construct_repository_uri(),
				'package' => $this->construct_remote_zip_uri(),
				'branch' => 'master'
			];
			$transient->response[$this->theme] = $response;
		}

		return $transient;
	}

	protected function construct_remote_stylesheet_uri() {
		return $this->remote_css_uri = $this->raw_domain . $this->repository . $this->css_endpoint;
	}

	protected function construct_remote_zip_uri() {
		return $this->remote_zip_uri = $this->domain . $this->repository . $this->zip_endpoint . $this->remote_version . '/' . $this->theme . '.zip';
	}

	protected function construct_repository_uri() {
		return $this->repository_uri = $this->domain . trailingslashit($this->repository);
	}

	protected function get_remote_version() {
		$this->remote_stylesheet_uri = $this->construct_remote_stylesheet_uri();
		$response = $this->remote_get($this->remote_stylesheet_uri);
		$response = str_replace("\r", "\n", wp_remote_retrieve_body($response));
		$headers = [
			'Version' => 'Version'
		];

		foreach ($headers as $field => $regex) {
			if (preg_match( '/^[ \t\/*#@]*' . preg_quote($regex, '/') . ':(.*)$/mi', $response, $match) && $match[1]) {
				$headers[$field] = _cleanup_header_comment($match[1]);
			}
			else {
				$headers[$field] = '';
			}
		}

		return $this->remote_version = ('' === $headers['Version']) ? '' : $headers['Version'];
	}

	protected function has_update() {
		if (!$this->remote_version) {
			$this->remote_version = $this->get_remote_version();
		}
		return version_compare($this->remote_version, $this->local_version, '>');
	}

	protected function remote_get($url, $args = []) {
		return wp_remote_get($url, $args);
	}
}

//     ▄████████   ▄█    █▄      ▄██████▄   
//    ███    ███  ███    ███    ███    ███  
//    ███    █▀   ███    ███    ███    █▀   
//    ███         ███    ███   ▄███         
//  ▀███████████  ███    ███  ▀▀███ ████▄   
//           ███  ▀██    ███    ███    ███  
//     ▄█    ███   ▀██  ██▀     ███    ███  
//   ▄████████▀     ▀████▀      ████████▀   ... wip

function get_svg($colour, $waves, $dw = 100, $dh = 25) {
	$hash = str_split(_NWP['seed_hash'], 2);
	foreach ($hash as $key => $value) {
		$seed[] = hexdec($value);
	}

	$width = round(100 / (100 / $dw));					// width of svg
	$height = round(56 / (100 / $dh));					// height of svg
	$top = round($height / 4);							// a quarter from the top
	$slice = round($width / $waves);					// width of wave
	$flag = true;										// flag
	$hpos = 0;											// horizontal position
	$ypos = $top;										// vertical position

	$path = 'M0,' . $ypos;

	for ($x = 1; $x <= $waves; $x++) {
		$oy = ($flag) ? ($top / 2) : 0 - ($top / 2);	// vertical offset, half of $top +- based on flag
		$ox = round($slice / 3);						// horizontal offset, third of $slice

		$path .= 'C' . ($hpos + $ox) . ' ' . ($top + $oy) . ' ' . (($hpos + $slice) - $ox) . ' ' . ($top + $oy) . ' ' . (($x == $waves) ? $width : ($hpos + $slice)) . ' ' . $top . ' ';

		$hpos = ($hpos + $slice);						// increment horizontal position
		$flag = !$flag;									// toggle flag
	}

	$path .= 'L' . $width . ' ' . $height . ' L0 ' . $height . ' Z';
	echo '<svg viewbox="0 0 ' . $width . ' ' . $height . '" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" style="width:100%;"><path d="' . $path . '" fill="' . $colour . '" stroke-linecap="round" stroke-linejoin="miter"></path></svg>';
}

//     ▄████████  ███    █▄   ███▄▄▄▄▄     ▄████████     ▄████████  
//    ███    ███  ███    ███  ███▀▀▀▀██▄  ███    ███    ███    ███  
//    ███    █▀   ███    ███  ███    ███  ███    █▀     ███    █▀   
//   ▄███▄▄▄      ███    ███  ███    ███  ███           ███         
//  ▀▀███▀▀▀      ███    ███  ███    ███  ███         ▀███████████  
//    ███         ███    ███  ███    ███  ███    █▄            ███  
//    ███         ███    ███  ███    ███  ███    ███     ▄█    ███  
//    ███         ████████▀    ▀█    █▀   ████████▀    ▄████████▀   

// echo values

function get_container() {
	echo _NWP['container_class'];
}

function get_css() {
	$css = ':root{' .
		'--primary-colour:' . _NWP['primary_colour'] . ';' .
		'--secondary-colour:' . _NWP['secondary_colour'] . ';' .
		'--tertiary-colour:' . _NWP['tertiary_colour'] . ';' .
		'--quaternary-colour:' . _NWP['quaternary_colour'] . ';' .
	'}.dropdown-menu[data-bs-popper]{left:unset;}';
	$fix = (_NWP['sticky_nav']) ? ".fix{position:fixed;top:0;width:100%;z-index:2}.fix + .content{padding-top:122px!important}" : '';
	echo $css . _NWP['theme_css_minified'] . $fix . "\n";
}

function get_js() {
	$js = (_NWP['sticky_nav']) ? "window.onscroll=function(){s()};var n=document.getElementById('nav-area');var o=n.offsetTop;function s(){if(window.pageYOffset>=o){n.classList.add('fix')}else{n.classList.remove('fix')}}" : '';
	echo $js . _NWP['theme_js_minified'] . "\n";
}

function get_fonts() {
	$template = '@import url(\'https://fonts.googleapis.com/css2?family=[F]&display=swap\');';
	$fonts = [
		'heading_font',
		'nav_font',
		'body_font',
		'mono_font'
	];
	$css = '';
	$root = '';
	foreach ($fonts as $font) {
		if (_NWP[$font] != '') {
			$name = str_replace(' ', '+', _NWP[$font]);
			if (($css == '') || (strpos($css, $name) === false)) {
				$css .= str_replace('[F]', $name, $template);
			}
			$root .= '--' . str_replace('_', '-', $font) . ':' . _NWP[$font] . ';';
		}
	}
	if ($root != '') {
		$css .= ':root{' . $root . '}';
	}
	echo $css;
}

function get_favicon() {
	$setting = _NWP['favicon_image'];
	$favicon = ($setting != '') ? '/uploads/' . $setting : '/img/favicon.png';
	echo $favicon;
}

// return values

function get_order() {
	return explode(',', _NWP['header_order']);
}

function get_value($key) {
	return _NWP[$key];
}

// pages/posts views count

function get_views($id) {
	$count_key = 'post_views_count';
	$count = get_post_meta($id, $count_key, true);
	if ($count == '') {
		delete_post_meta($id, $count_key);
		add_post_meta($id, $count_key, '0');
		return "No Views";
	}
	return $count . ' View' . (($count != 1)? 's' : '');
}

function set_views($id) {
	$ip = $_SERVER['REMOTE_ADDR'];
	if (!in_array($ip, _IGNORE_SEED_WP)) {
		$count_key = 'post_views_count';
		$count = get_post_meta($id, $count_key, true);
		if ($count == '') {
			$count = 0;
			delete_post_meta($id, $count_key);
			add_post_meta($id, $count_key, '0');
		}
		else {
			$count++;
			update_post_meta($id, $count_key, $count);
		}
	}
}

function posts_column_views($defaults) {
	$defaults['post_views'] = 'Views';
	return $defaults;
}

function posts_custom_column_views($column_name, $id) {
	if ($column_name === 'post_views') {
		echo get_views(get_the_ID());
	}
}

function pages_column_views($defaults) {
	$defaults['page_views'] = 'Views';
	return $defaults;
}

function pages_custom_column_views($column_name, $id) {
	if ($column_name === 'page_views') {
		echo get_views(get_the_ID());
	}
}

// media downloads field

function media_downloads($form_fields, $post) {
	$form_fields['file_downloads'] = [
		'label' => 'Downloads',
		'input' => 'text',
		'value' => get_post_meta($post->ID, 'file_downloads', true),
		'helps' => ''
	];
	return $form_fields;
}
 
function media_downloads_save($post, $attachment) {
	if (isset($attachment['file_downloads'])) {
		update_post_meta($post->ID, 'file_downloads', $attachment['file_downloads']);
	}
	return $post;
}

// page column class metadata

function add_post_metadata() {
	$screen = 'page';
	add_meta_box(
		'post_meta_box',
		'Column Class',
		'add_post_metadata_callback',
		$screen,
		'side',
		'default',
		null
	);

	$screen = 'code';
	add_meta_box(
		'code_meta_box',
		'Code',
		'add_code_metadata_callback',
		$screen
	);
}

function add_post_metadata_callback($post) {
	wp_nonce_field('column_class_save_data', 'column_class_nonce');
	$value = get_post_meta($post->ID, 'column_class', true);
	echo '<input class="components-text-control__input" style="margin-top:8px" type="text" name="column_class" value="' . esc_attr($value) . '" placeholder="Enter Column Class...">';
}

function add_code_metadata_callback($post) {
	//
}
 
function save_post_metadata($post_id) {
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}
	if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return;
		}
	}
	else {
		if (!current_user_can('edit_post', $post_id)) {
			return;
		}
	}
	if (isset($_POST['post_type'])) {
		if (in_array($_POST['post_type'], ['page', 'post'])) {
			if (!isset($_POST['column_class_nonce'])) {
				return;
			}
			if (!wp_verify_nonce($_POST['column_class_nonce'], 'column_class_save_data')) {
				return;
			}
			$data = sanitize_text_field($_POST['column_class']);
			update_post_meta($post_id, 'column_class', $data);
		}
	}
}

// pagination

function get_pagination() {
	global $wp_query;
	$big = 999999999;
	echo paginate_links([
		'base' => str_replace($big, '%#%', get_pagenum_link($big)),
		'format' => '?paged=%#%',
		'current' => max(1, get_query_var('paged')),
		'total' => $wp_query->max_num_pages
	]);
}

// excerpts

function set_excerpt_length($length) {
	return _NWP['excerpt_length'];
}

// snippet

function snippet($post, $count) {
	echo str_replace(["\r", "\n"], '', substr(strip_tags($post), 0, $count) . '&hellip;');
}

// set current admin menu

function set_current_menu($parent_file) {
	global $submenu_file, $current_screen, $pagenow;
	$taxonomy = 'group';

	if ($current_screen->id == 'edit-' . $taxonomy) {
		if ($pagenow == 'post.php') {
			$submenu_file = 'edit.php?post_type=' . $current_screen->post_type;
		}
		if ($pagenow == 'edit-tags.php') {
			$submenu_file = 'edit-tags.php?taxonomy=' . $taxonomy . '&post_type=' . $current_screen->post_type;
		}
		$parent_file = _THEME . '-theme-menu';
	}

	return $parent_file;
}



//     ▄████████     ▄█    █▄      ▄██████▄      ▄████████      ███      
//    ███    ███    ███    ███    ███    ███    ███    ███  ▀█████████▄  
//    ███    █▀     ███    ███    ███    ███    ███    ███     ▀███▀▀██  
//    ███          ▄███▄▄▄▄███▄▄  ███    ███   ▄███▄▄▄▄██▀      ███   ▀  
//  ▀███████████  ▀▀███▀▀▀▀███▀   ███    ███  ▀▀███▀▀▀▀▀        ███      
//           ███    ███    ███    ███    ███  ▀███████████      ███      
//     ▄█    ███    ███    ███    ███    ███    ███    ███      ███      
//   ▄████████▀     ███    █▀      ▀██████▀     ███    ███     ▄████▀    

//   ▄████████   ▄██████▄   ████████▄      ▄████████     ▄████████  
//  ███    ███  ███    ███  ███   ▀███    ███    ███    ███    ███  
//  ███    █▀   ███    ███  ███    ███    ███    █▀     ███    █▀   
//  ███         ███    ███  ███    ███   ▄███▄▄▄        ███         
//  ███         ███    ███  ███    ███  ▀▀███▀▀▀      ▀███████████  
//  ███    █▄   ███    ███  ███    ███    ███    █▄            ███  
//  ███    ███  ███    ███  ███   ▄███    ███    ███     ▄█    ███  
//  ████████▀    ▀██████▀   ████████▀     ██████████   ▄████████▀   

// logo shortcodes

function logo_normal_shortcode($atts = [], $content = null, $tag = '') {
	return '<img src="/uploads/' . _NWP['logo_image_normal'] . '" class="logo ' . $content .'">';
}

function logo_contrast_shortcode($atts = [], $content = null, $tag = '') {
	return '<img src="/uploads/' . _NWP['logo_image_contrast'] . '" class="logo ' . $content .'">';
}

// show child pages shortcode

function children_shortcode() {
	ob_start();
	if (is_page()) {
		$current_page_id = get_the_ID();
		$child_pages = get_pages([ 
			'child_of' => $current_page_id,
			'sort_column' => 'menu_order',
			'sort_order' => 'ASC'
		]);
		if ($child_pages) {
			echo '<div class="row">';
			foreach ($child_pages as $child_page) {
				$page_id = $child_page->ID;
				$page_link = get_permalink($page_id);
				$page_title = $child_page->post_title;
				$page_content = $child_page->post_content;
				$page_col_class = get_post_meta($page_id, 'column_class', true);
				$title_tag = get_value('show_page_titles');
				$show = get_value('show_child_titles');
				$page_title = '';
				if (($show == 'yes') && ($title_tag != 'none')) {
					$page_title = '<' . $title_tag . ' class="child-title">' . $child_page->post_title . '</' . $title_tag . '>';
				}
				?><div class="<?php echo $page_col_class; ?>"><?php echo $page_title; ?><p><?php echo do_shortcode($page_content); ?></p></div><?php
			}
			echo '</div>';
		}
	}
	return ob_get_clean();
}

// add admin scripts

function add_scripts($hook) {
	$screen = get_current_screen();

	if (null === $screen || $screen->base !== 'toplevel_page_' . _THEME . '-theme-menu') {
		return;
	}

	wp_enqueue_code_editor(['type' => 'application/x-httpd-php']);
}

// add widget stuff

function register_widget_stuff() {
	$widgets = [
		'info-area' => 'info area',
		'banner-area' => 'banner area',
		'page-top' => 'page top',
		'page-bottom' => 'page bottom',
		'footer-top' => 'footer top',
		'footer-bottom' => 'footer bottom',
		'side-bar' => 'side bar'
	];

	foreach  ($widgets as $class => $title) {
		register_sidebar([
			'id' => $class,
			'name' => $title,
			'description' => $title . ' widget area',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="' . $class . '-title-holder"><h3 class="' . $class . '-title">',
			'after_title' => '</h3></div>'
		]);
	}

	register_widget('_themeWidget');
}

// set some wp options

function set_wp_options() {
	define('_NWP', _themeSettings::get_settings());

	foreach (_POSTTYPES_SEED_WP as $type) {
		$uc_type = ucwords($type);

		$labels = [
			'name' => $uc_type . 's',
			'singular_name' => $uc_type,
			'menu_name' => $uc_type . 's',
			'name_admin_bar' => $uc_type . 's',
			'add_new' => 'Add New',
			'add_new_item' => 'Add New ' . $uc_type,
			'new_item' => 'New ' . $uc_type,
			'edit_item' => 'Edit ' . $uc_type,
			'view_item' => 'View ' . $uc_type,
			'all_items' => $uc_type . 's',
			'search_items' => 'Search ' . $uc_type . 's',
			'not_found' => 'No ' . $uc_type . 's Found'
		];

		register_post_type($type, [
			'supports' => [
				'title',
				'editor'
			],
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'show_in_menu' => false,
			'show_in_rest' => true,
			'query_var' => true,
			'has_archive' => false,
			'rewrite' => ['slug' => $type]
		]);
	}

	foreach (_SEED_WP_TAXONOMIES as $type => $child) {
		$uc_type = ucwords($type);

		$labels = [
			'name' => $uc_type . 's',
			'singular_name' => $uc_type,
			'search_items' => 'Search ' . $uc_type . 's',
			'all_items' => 'All ' . $uc_type . 's',
			'parent_item' => 'Parent ' . $uc_type,
			'parent_item_colon' => 'Parent ' . $uc_type . ':',
			'edit_item' => 'Edit ' . $uc_type, 
			'update_item' => 'Update ' . $uc_type,
			'add_new_item' => 'Add New ' . $uc_type,
			'new_item_name' => 'New ' . $uc_type . ' Name',
			'menu_name' => $uc_type . 's'
		];

		register_taxonomy($type, [$child], [
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'show_in_menu' => false,
			'show_in_rest' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => ['slug' => $type]
		]);
	}
}

// theme setup

function do_setup() {
	if (_OPTIONS_SEED_WP['thumbnails']) {
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(192, 108);
	}

	register_nav_menus(_SEED_WP_MENUS);
}

//   ▄█   ███▄▄▄▄▄     ▄█       ███      
//  ███   ███▀▀▀▀██▄  ███   ▀█████████▄  
//  ███▌  ███    ███  ███▌     ▀███▀▀██  
//  ███▌  ███    ███  ███▌      ███   ▀  
//  ███▌  ███    ███  ███▌      ███      
//  ███   ███    ███  ███       ███      
//  ███   ███    ███  ███       ███      
//  █▀     ▀█    █▀   █▀       ▄████▀    

// theme updater

$updater = new _themeUpdater();

// actions

add_action('init', [$updater, 'init']);
add_action('init', 'set_wp_options');
add_action('init', 'get_pagination');
add_action('widgets_init', 'register_widget_stuff');

add_action('admin_enqueue_scripts', 'add_scripts');
add_action('manage_posts_custom_column', 'posts_custom_column_views', 5, 2);
add_action('manage_pages_custom_column', 'pages_custom_column_views', 5, 2);
add_action('add_meta_boxes', 'add_post_metadata');
add_action('save_post', 'save_post_metadata');
add_action('after_setup_theme', 'do_setup');

// filters

add_filter('manage_posts_columns', 'posts_column_views');
add_filter('manage_pages_columns', 'pages_column_views');

add_filter('attachment_fields_to_edit', 'media_downloads', 10, 2);
add_filter('attachment_fields_to_save', 'media_downloads_save', 10, 2);
add_filter('excerpt_length', 'set_excerpt_length', 999);
add_filter('parent_file', 'set_current_menu');

remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
remove_filter('the_excerpt', 'wpautop');
remove_filter('wp_robots', 'wp_robots_max_image_preview_large');

// shortcodes

add_shortcode('logo-normal', 'logo_normal_shortcode');
add_shortcode('logo-contrast', 'logo_contrast_shortcode');
add_shortcode('children', 'children_shortcode');

// boot theme

add_action('init', function() {
	if (is_admin()) {
		$assets_url = get_template_directory_uri();
		new _themeMenu($assets_url);
	}
});

add_action('rest_api_init', function() {
	_themeSettings::args();
	$api = new _themeAPI();
	$api->add_routes();
});

//     ▄█    █▄        ▄████████   ▄█           ▄███████▄  
//    ███    ███      ███    ███  ███          ███    ███  
//    ███    ███      ███    █▀   ███          ███    ███  
//   ▄███▄▄▄▄███▄▄   ▄███▄▄▄      ███          ███    ███  
//  ▀▀███▀▀▀▀███▀   ▀▀███▀▀▀      ███        ▀█████████▀   
//    ███    ███      ███    █▄   ███          ███         
//    ███    ███      ███    ███  ███▌    ▄    ███         
//    ███    █▀       ██████████  █████▄▄██   ▄████▀       

// bootstrap 5 nav walker

class WP_Bootstrap_Navwalker extends Walker_Nav_menu {
	private $current_item;
	private $dropdown_menu_alignment_values = [
		'dropdown-menu-start',
		'dropdown-menu-end',
		'dropdown-menu-sm-start',
		'dropdown-menu-sm-end',
		'dropdown-menu-md-start',
		'dropdown-menu-md-end',
		'dropdown-menu-lg-start',
		'dropdown-menu-lg-end',
		'dropdown-menu-xl-start',
		'dropdown-menu-xl-end',
		'dropdown-menu-xxl-start',
		'dropdown-menu-xxl-end'
	];

	function start_lvl(&$output, $depth = 0, $args = null) {
		$dropdown_menu_class[] = '';
		foreach ($this->current_item->classes as $class) {
			if (in_array($class, $this->dropdown_menu_alignment_values)) {
				$dropdown_menu_class[] = $class;
			}
		}
		$indent = str_repeat("\t", $depth);
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
	}

	function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
		$this->current_item = $item;

		$indent = ($depth) ? str_repeat("\t", $depth) : '';

		$li_attributes = '';
		$class_names = $value = '';

		$classes = empty($item->classes) ? array() : (array) $item->classes;

		$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
		$classes[] = 'nav-item';
		$classes[] = 'nav-item-' . $item->ID;
		if ($depth && $args->walker->has_children) {
			$classes[] = 'dropdown-menu dropdown-menu-end';
		}

		$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = ' class="' . esc_attr($class_names) . '"';

		$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
		$id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

		$output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

		$attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

		$active_class = ($item->current || $item->current_item_ancestor) ? 'active' : '';
		$nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
		$attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
}

// minifying functions

function minify_css($input) {
	if (trim($input) === '') {
		return $input;
	}
	return preg_replace([
			'#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')|\/\*(?!\!)(?>.*?\*\/)|^\s*|\s*$#s',
			'#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\'|\/\*(?>.*?\*\/))|\s*+;\s*+(})\s*+|\s*+([*$~^|]?+=|[{};,>~]|\s(?![0-9\.])|!important\b)\s*+|([[(:])\s++|\s++([])])|\s++(:)\s*+(?!(?>[^{}"\']++|"(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')*+{)|^\s++|\s++\z|(\s)\s+#si',
			'#(?<=[\s:])(0)(cm|em|ex|in|mm|pc|pt|px|vh|vw|%)#si',
			'#:(0\s+0|0\s+0\s+0\s+0)(?=[;\}]|\!important)#i',
			'#(background-position):0(?=[;\}])#si',
			'#(?<=[\s:,\-])0+\.(\d+)#s',
			'#(\/\*(?>.*?\*\/))|(?<!content\:)([\'"])([a-z_][a-z0-9\-_]*?)\2(?=[\s\{\}\];,])#si',
			'#(\/\*(?>.*?\*\/))|(\burl\()([\'"])([^\s]+?)\3(\))#si',
			'#(?<=[\s:,\-]\#)([a-f0-6]+)\1([a-f0-6]+)\2([a-f0-6]+)\3#i',
			'#(?<=[\{;])(border|outline):none(?=[;\}\!])#',
			'#(\/\*(?>.*?\*\/))|(^|[\{\}])(?:[^\s\{\}]+)\{\}#s'
		], [
			'$1',
			'$1$2$3$4$5$6$7',
			'$1',
			':0',
			'$1:0 0',
			'.$1',
			'$1$3',
			'$1$2$4$5',
			'$1$2$3',
			'$1:0',
			'$1$2'
		],
	$input);
}

function minify_js($input) {
	if (trim($input) === '') {
		return $input;
	}
	return preg_replace([
			'#\s*("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')\s*|\s*\/\*(?!\!|@cc_on)(?>[\s\S]*?\*\/)\s*|\s*(?<![\:\=])\/\/.*(?=[\n\r]|$)|^\s*|\s*$#',
			'#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\'|\/\*(?>.*?\*\/)|\/(?!\/)[^\n\r]*?\/(?=[\s.,;]|[gimuy]|$))|\s*([!%&*\(\)\-=+\[\]\{\}|;:,.<>?\/])\s*#s',
			'#;+\}#',
			'#([\{,])([\'])(\d+|[a-z_][a-z0-9_]*)\2(?=\:)#i',
			'#([a-z0-9_\)\]])\[([\'"])([a-z_][a-z0-9_]*)\2\]#i'
		], [
			'$1',
			'$1$2',
			'}',
			'$1$3',
			'$1.$3'
		],
	$input);
}

function make_hash($seed) {
	$hash = '';
	foreach (['e', 'm', 'i', 'l', 'y'] as $index => $salt) {
		$hash .= hash('sha512', _NWP['seed'] . $index) . hash('sha512', _NWP['seed'] . $salt);
	}
	return $hash;
}

// EOF
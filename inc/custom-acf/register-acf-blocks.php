<?php
/**
* ACF Custom Block Registry
*
*
* @package Modern
*/

function _s_add_block_categories( $categories, $post ) {

	return array_merge(
		$categories,
		array(
			array(
				'slug'  => 'modern-blocks',
				'title' => esc_html__( 'Modern Custom Blocks', '_s' ),
			),
		)
	);
}
add_filter( 'block_categories', '_s_add_block_categories', 10, 2 );


function register_acf_block_types() {
    $supports = array(
        'align'  => array( 'wide', 'full' ),
        'anchor' => true,
    );
    $colorIcon = "#ffffff";
    $backgroundIcon = "#2F318D";
	
    //  Text Hero CTA
    acf_register_block_type(array(
        'name'              => 'text-hero-cta',
        'title'             => __('Text Hero CTA'),
        'description'       => __('Text Hero CTA block.'),
        'render_template'   => 'template-parts/blocks/text-hero-cta/text-hero-cta.php',
        'category'          => 'modern-blocks',
        'icon'              => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'format-image'
        ),
        'keywords'          => array( 'text', 'hero', 'cta' ),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
        'example'  => array(
            'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                    'main_hero_slider_text' => "Slider Text here",
                    'is_preview'    => true
                )
            )
        )
    ));

    //  Text Hero CTA Slider
    acf_register_block_type(array(
        'name' => 'text-hero-cta-slider',
        'title' => __('Text Hero CTA Slider'),
        'description' => __('Text Hero CTA Slider block.'),
        'render_template' => 'template-parts/blocks/text-hero-cta-slider/index.php',
        'category' => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'format-gallery'
        ),
        'keywords' => array( 'text', 'hero', 'cta', 'slider' ),
        'mode' => 'preview',
        'align' => 'full',
        'supports' => $supports,
        'example' => array(
            'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                    'main_hero_slider_text' => "Slider Text here",
                    'is_preview'    => true
                )
            )
        )
    ));
	
    //  Block CLEANING-SERVICE
    acf_register_block_type(array(
        'name'              => 'slider-cleaning-service',
        'title'             => __('Slider with Cleaning service'),
        'description'       => __('This is a custom block for render an slider with cleanin service'),
        'render_template'   => 'template-parts/blocks/slider-cleaning-service/slider-cleaning-service.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'images-alt',
        ),
        'keywords'          => array( 'Home','Cleaning', 'Slider', 'Services'),
        'mode' => 'preview',
        'align'           => 'wide',
        'supports'        => $supports,
        'example'         => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'text_description'   => "",
                )
            )
        ),
    ));

     //  Cleaning Services Block
     acf_register_block_type(array(
        'name'              => 'cleaning-services',
        'title'             => __('Cleaning services'),
        'description'       => __('This is a custom block for render an slider with cleanin service'),
        'render_template'   => 'template-parts/blocks/cleaning-services/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'grid-view',
        ),
        'keywords'          => array( 'Home','Cleaning', 'Services'),
        'mode' => 'preview',
        'align'           => 'wide',
        'supports'        => $supports,
        'example'         => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'text_description'   => "",
                )
            )
        ),
    ));

    //  Industries We Serve
    acf_register_block_type(array(
        'name'              => 'industries-we-serve',
        'title'             => __('Industries We Serve'),
        'description'       => __('Industries We Serve block.'),
        'render_template'   => 'template-parts/blocks/industries-we-serve/industries-we-serve.php',
        'category'          => 'modern-blocks',
        'icon'              => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'clipboard'
        ),
        'keywords'          => array( 'industries', 'service' ),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
        'example'  => array(
            'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                    'main_hero_slider_text' => "Slider Text here",
                    'is_preview'    => true
                )
            )
        )
	));


    //  Block Map and Descrption Text
    acf_register_block_type(array(
        'name'              => 'map-section-home',
        'title'             => __('Map home image'),
        'description'       => __('This is a custom block for render image map in the home'),
        'render_template'   => 'template-parts/blocks/map-section/map-section-home.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'format-image',
        ),
        'keywords'          => array( 'Home','Map'),
        'mode' => 'preview',
        'align'           => 'wide',
        'supports'        => $supports,
        'example'         => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'text_description'   => "Modern Cleaning is Canada’s largest and fastest growing janitorial services company, delivering exceptional cleaning services to retailers, offices, medical clinics, distribution centers, warehouses and data centers for more than 20 years.",
                )
            )
        ),
    ));

    //  hero image
    acf_register_block_type(array(
        'name'              => 'hero-image-with-text',
        'title'             => __('Header image with text'),
        'description'       => __('This is a Hero image with text'),
        'render_template'   => 'template-parts/blocks/hero-image-with-text/hero-image-with-text.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'cover-image',
        ),
        'keywords'          => array( 'Hero','Image', 'Text'),
        'mode' => 'preview',
        'align'           => 'wide',
        'supports'        => $supports,
        'example'         => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'text_description'   => "",
                )
            )
        ),
    ));

    //  Block cleaning
    acf_register_block_type(array(
        'name'              => 'cleaning-expertise',
        'title'             => __('Cleaning Expertise'),
        'description'       => __('This is a cleaning expertise'),
        'render_template'   => 'template-parts/blocks/cleaning-expertise/cleaning-expertise.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'excerpt-view',
        ),
        'keywords'          => array( 'cleaning','expertise'),
        'mode' => 'preview',
        'align'           => 'wide',
        'supports'        => $supports,
        'example'         => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'text_description'   => "",
                )
            )
        ),
    ));

    //  Block franchise opportunities
    acf_register_block_type(array(
        'name'              => 'primary-hero-bar',
        'title'             => __('Primary Hero Bar'),
        'description'       => __('This is a Hero bar for top page'),
        'render_template'   => 'template-parts/blocks/primary-hero-bar/primary-hero-bar.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'format-image',
        ),
        'keywords'          => array( 'Hero','bar', 'franchise'),
        'mode' => 'preview',
        'align'           => 'wide',
        'supports'        => $supports,
        'example'         => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'text_description'   => "",
                )
            )
        ),
    ));

    //Block franchise opportunities cards
    acf_register_block_type(array(
        'name'              => 'cards-image-with-service',
        'title'             => __('Cards service'),
        'description'       => __('This is a cards with image with service list'),
        'render_template'   => 'template-parts/blocks/cards-image-with-service/cards-image-with-service.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'excerpt-view',
        ),
        'keywords'          => array( 'Cards','Service'),
        'mode' => 'preview',
        'align'           => 'wide',
        'supports'        => $supports,
        'example'         => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'text_description'   => "",
                )
            )
        ),
    ));

    //  The Modern Landscape
    acf_register_block_type(array(
        'name'              => 'modern-landscape',
        'title'             => __('The Modern Landscape'),
        'description'       => __('The Modern Landscape block.'),
        'render_template'   => 'template-parts/blocks/modern-landscape/modern-landscape.php',
        'category'          => 'modern-blocks',
        'icon'              => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'clipboard'
        ),
        'keywords'          => array( 'modern', 'landscape' ),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports
    ));

    //  Unit franchise aplication form
    acf_register_block_type(array(
        'name'              => 'unit-franchise-aplication-form',
        'title'             => __('Unit Franchise Aplication'),
        'description'       => __('The Unit Franchise Aplication block.'),
        'render_template'   => 'template-parts/blocks/unit-franchise-aplication-form/unit-franchise-aplication-form.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'grid-view',
        ),
        'keywords'          => array( 'unit', 'franchise', 'form'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
        'example'  => array(
            'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                    'main_hero_slider_text' => "Slider Text here",
                    'is_preview'    => true
                )
            )
        )
    ));

    acf_register_block_type(array(
        'name'              => 'table',
        'title'             => __('Table with Franchise Opportunity'),
        'description'       => __('Show opportunity information'),
        'render_template'   => 'template-parts/blocks/table/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'list-view',
        ),
        'keywords'          => array( 'table', 'opportunities'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
        'example'  => array(
            'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                    'main_hero_slider_text' => "Slider Text here",
                    'is_preview'    => true
                )
            )
        )
    ));
    
    acf_register_block_type(array(
        'name'              => 'quote',
        'title'             => __('Quote'),
        'description'       => __('Quote'),
        'render_template'   => 'template-parts/blocks/quote/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'editor-quote',
        ),
        'keywords'          => array( 'quote'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
    ));
    
    acf_register_block_type(array(
        'name'              => 'unit-franchise-opportunities',
        'title'             => __('Unit Franchise Opportunities'),
        'description'       => __('Unit Franchise Opportunities'),
        'render_template'   => 'template-parts/blocks/unit-franchise-opportunities/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'analytics',
        ),
        'keywords'          => array( 'unit', 'opportunities', 'franchise'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
    ));
    
    acf_register_block_type(array(
        'name'              => 'unit-franchise-stories',
        'title'             => __('Unit Franchise Stories'),
        'description'       => __('Unit Franchise Stories'),
        'render_template'   => 'template-parts/blocks/unit-franchise-stories/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'align-pull-left',
        ),
        'keywords'          => array( 'unit', 'stories', 'franchise'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
    ));
    
    acf_register_block_type(array(
        'name'              => 'image-with-left-text',
        'title'             => __('Image With Left Text'),
        'description'       => __('Image With Left Text'),
        'render_template'   => 'template-parts/blocks/image-with-left-text/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'align-left',
        ),
        'keywords'          => array( 'unit', 'stories', 'franchise'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
    ));
    
    acf_register_block_type(array(
        'name'              => 'section-with-two-list',
        'title'             => __('Section with two list'),
        'description'       => __('Section with two list'),
        'render_template'   => 'template-parts/blocks/section-with-two-list/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'editor-justify',
        ),
        'keywords'          => array( 'section', 'list'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
    ));
    
    acf_register_block_type(array(
        'name'              => 'profile',
        'title'             => __('Profile'),
        'description'       => __('Profile block'),
        'render_template'   => 'template-parts/blocks/profile/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'admin-users',
        ),
        'keywords'          => array('profile', 'franchise'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
    ));
        
    acf_register_block_type(array(
        'name'              => 'perks',
        'title'             => __('Perks'),
        'description'       => __('Perks block'),
        'render_template'   => 'template-parts/blocks/perks/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'feedback',
        ),
        'keywords'          => array('perks', 'franchise'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
    ));
    
    acf_register_block_type(array(
        'name'              => 'join-modern',
        'title'             => __('Join'),
        'description'       => __('Join block'),
        'render_template'   => 'template-parts/blocks/join/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'groups',
        ),
        'keywords'          => array('join', 'modern'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
    ));
    
    acf_register_block_type(array(
        'name'              => 'careers',
        'title'             => __('Careers'),
        'description'       => __('Careers block'),
        'render_template'   => 'template-parts/blocks/careers/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'id-alt',
        ),
        'keywords'          => array('careers', 'modern'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
    ));
    
    acf_register_block_type(array(
        'name'              => 'about-us-table',
        'title'             => __('About us table'),
        'description'       => __('About us table'),
        'render_template'   => 'template-parts/blocks/about-us-table/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'list-view',
        ),
        'keywords'          => array('careers', 'modern'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
    ));
    
    // Connect with us block
    acf_register_block_type(array(
        'name'              => 'connect-with-us',
        'title'             => __('Connect with us'),
        'description'       => __('Connect with us block'),
        'render_template'   => 'template-parts/blocks/connect-with-us/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'feedback',
        ),
        'keywords'          => array( 'connect', 'contact-form', 'form'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
    ));

    // Download PDF Fact Sheet Form block
    acf_register_block_type(array(
        'name'              => 'download-pdf-fact-sheet-form',
        'title'             => __('Download PDF Fact Sheet Form'),
        'description'       => __('Download PDF Fact Sheet Form block'),
        'render_template'   => 'template-parts/blocks/download-pdf-fact-sheet-form/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'media-document',
        ),
        'keywords'          => array( 'connect', 'contact-form', 'form'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
    ));

     // UF Landing block
     acf_register_block_type(array(
        'name'              => 'uf-landing',
        'title'             => __('Unit Franchise Landing Block'),
        'description'       => __('UF Landing block'),
        'render_template'   => 'template-parts/blocks/uf-landing/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'layout',
        ),
        'keywords'          => array( 'unit-franchise', 'landing'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
    ));

         // UF Landing block Long Form
         acf_register_block_type(array(
            'name'              => 'uf-landing-long-form',
            'title'             => __('UF Landing block Long Form'),
            'description'       => __('UF Landing block Long Form'),
            'render_template'   => 'template-parts/blocks/uf-landing-long-form/index.php',
            'category'          => 'modern-blocks',
            'icon' => array(
                'background' => $colorIcon,
                'foreground' => $backgroundIcon,
                'src' => 'layout',
            ),
            'keywords'          => array( 'unit-franchise', 'landing', 'long-form'),
            'mode'              => 'preview',
            'align'             => 'full',
            'supports'          => $supports,
        ));

     // TF Landing block
     acf_register_block_type(array(
        'name'              => 'tf-landing',
        'title'             => __('Territory Franchise Landing Block'),
        'description'       => __('TF Landing block'),
        'render_template'   => 'template-parts/blocks/tf-landing/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'layout',
        ),
        'keywords'          => array( 'territory-franchise', 'landing'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
    ));
    
    acf_register_block_type(array(
        'name'              => 'personal-information-form',
        'title'             => __('Personal information form'),
        'description'       => __('Personal information form block'),
        'render_template'   => 'template-parts/blocks/personal-information-form/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'welcome-write-blog',
        ),
        'keywords'          => array( 'personal', 'information', 'form'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
    ));

    acf_register_block_type(array(
        'name'              => 'modern-tf-rfc-form',
        'title'             => __('Modern TF RFC Form'),
        'description'       => __('Modern TF RFC Form block'),
        'render_template'   => 'template-parts/blocks/modern-tf-rfc-form/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'welcome-write-blog',
        ),
        'keywords'          => array( 'territory', 'franchise', 'rfc', 'form'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
    ));
    
    acf_register_block_type(array(
        'name'              => 'careers-operations-table',
        'title'             => __('Careers operations table'),
        'description'       => __('Careers operations table block'),
        'render_template'   => 'template-parts/blocks/careers-operations-table/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'list-view',
        ),
        'keywords'          => array( 'careers', 'operations', 'table'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
    ));
    
    acf_register_block_type(array(
        'name'              => 'contact-us',
        'title'             => __('Contact us form'),
        'description'       => __('Contact us form block'),
        'render_template'   => 'template-parts/blocks/contact-us-form/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'welcome-write-blog',
        ),
        'keywords'          => array( 'personal', 'information', 'form'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
    ));

    acf_register_block_type(array(
        'name'              => 'career-application-form',
        'title'             => __('Career application form'),
        'description'       => __('Career application form block'),
        'render_template'   => 'template-parts/blocks/career-application-form/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'welcome-write-blog',
        ),
        'keywords'          => array( 'career', 'application', 'form'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
    ));

    acf_register_block_type(array(
        'name'              => 'career-history',
        'title'             => __('Career history'),
        'description'       => __('Career history block'),
        'render_template'   => 'template-parts/blocks/career-history/index.php',
        'category'          => 'modern-blocks',
        'icon' => array(
            'background' => $colorIcon,
            'foreground' => $backgroundIcon,
            'src' => 'align-pull-left',
        ),
        'keywords'          => array( 'career', 'history', 'form'),
        'mode'              => 'preview',
        'align'             => 'full',
        'supports'          => $supports,
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}
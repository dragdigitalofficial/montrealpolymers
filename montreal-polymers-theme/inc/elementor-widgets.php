<?php
/**
 * Montreal Polymers - Custom Elementor Widgets
 * Registers native drag-and-drop Elementor widgets in the Elementor panel.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Widget Category in Elementor
 */
function montreal_register_elementor_category( $elements_manager ) {
    $elements_manager->add_category(
        'montreal-polymers',
        array(
            'title' => esc_html__( 'Montreal Polymers', 'montreal-polymers' ),
            'icon'  => 'fa fa-recycle',
        )
    );
}
add_action( 'elementor/elements/categories_registered', 'montreal_register_elementor_category' );

/**
 * Register Custom Elementor Widgets
 */
function montreal_register_elementor_widgets( $widgets_manager ) {

    // 1. 3D WebGL Hero Canvas Widget
    class Montreal_Elementor_3D_Hero extends \Elementor\Widget_Base {
        public function get_name() { return 'montreal_3d_hero'; }
        public function get_title() { return esc_html__( '3D Interactive Hero Canvas', 'montreal-polymers' ); }
        public function get_icon() { return 'eicon-animation'; }
        public function get_categories() { return array( 'montreal-polymers' ); }

        protected function register_controls() {
            $this->start_controls_section(
                'section_content',
                array( 'label' => esc_html__( 'Settings', 'montreal-polymers' ) )
            );
            $this->add_control(
                'canvas_height',
                array(
                    'label'   => esc_html__( 'Canvas Height', 'montreal-polymers' ),
                    'type'    => \Elementor\Controls_Manager::TEXT,
                    'default' => '550px',
                )
            );
            $this->end_controls_section();
        }

        protected function render() {
            $settings = $this->get_settings_for_display();
            echo do_shortcode( '[montreal_3d_hero height="' . esc_attr( $settings['canvas_height'] ) . '"]' );
        }
    }
    $widgets_manager->register( new Montreal_Elementor_3D_Hero() );

    // 2. Landfill & Revenue Calculator Widget
    class Montreal_Elementor_Calculator extends \Elementor\Widget_Base {
        public function get_name() { return 'montreal_calculator'; }
        public function get_title() { return esc_html__( 'Landfill & Revenue Calculator', 'montreal-polymers' ); }
        public function get_icon() { return 'eicon-calculator'; }
        public function get_categories() { return array( 'montreal-polymers' ); }

        protected function register_controls() {
            $this->start_controls_section(
                'section_calc',
                array( 'label' => esc_html__( 'Calculator Settings', 'montreal-polymers' ) )
            );
            $this->add_control(
                'default_volume',
                array(
                    'label'   => esc_html__( 'Default Volume (lbs)', 'montreal-polymers' ),
                    'type'    => \Elementor\Controls_Manager::NUMBER,
                    'default' => 35000,
                    'step'    => 5000,
                )
            );
            $this->add_control(
                'cta_url',
                array(
                    'label'   => esc_html__( 'CTA Button Link', 'montreal-polymers' ),
                    'type'    => \Elementor\Controls_Manager::URL,
                    'default' => array( 'url' => '#contact' ),
                )
            );
            $this->end_controls_section();
        }

        protected function render() {
            $settings = $this->get_settings_for_display();
            $url = ! empty( $settings['cta_url']['url'] ) ? $settings['cta_url']['url'] : '#contact';
            echo do_shortcode( '[montreal_landfill_calculator default="' . esc_attr( $settings['default_volume'] ) . '" cta_url="' . esc_url( $url ) . '"]' );
        }
    }
    $widgets_manager->register( new Montreal_Elementor_Calculator() );

    // 3. 4-Stat Metrics Banner Widget
    class Montreal_Elementor_Stat_Banner extends \Elementor\Widget_Base {
        public function get_name() { return 'montreal_stat_banner'; }
        public function get_title() { return esc_html__( '4-Stat Metrics Banner', 'montreal-polymers' ); }
        public function get_icon() { return 'eicon-counter'; }
        public function get_categories() { return array( 'montreal-polymers' ); }

        protected function render() {
            echo do_shortcode( '[montreal_stat_banner]' );
        }
    }
    $widgets_manager->register( new Montreal_Elementor_Stat_Banner() );

    // 4. Dual-Tab Inquiry Form Widget
    class Montreal_Elementor_Contact_Form extends \Elementor\Widget_Base {
        public function get_name() { return 'montreal_contact_form'; }
        public function get_title() { return esc_html__( 'Dual-Tab Inquiry Form', 'montreal-polymers' ); }
        public function get_icon() { return 'eicon-form-horizontal'; }
        public function get_categories() { return array( 'montreal-polymers' ); }

        protected function render() {
            echo do_shortcode( '[montreal_contact_form]' );
        }
    }
    $widgets_manager->register( new Montreal_Elementor_Contact_Form() );
}
add_action( 'elementor/widgets/register', 'montreal_register_elementor_widgets' );

<?php
/*
Plugin Name: rpi Sources Block
Plugin URI: https://github.com/rpi-virtuell/rpi-material-input-template
Description: Wordpress Plugin which adds a new Lazyblock Sources to the Wordpress Editor
Version: 1.0
Author: Daniel Reintanz
Author URI: https://github.com/FreelancerAMP
License: A "Slug" license name e.g. GPL2
*/


class RpiSourcesBlock
{
    function __construct()
    {
        add_action('init', array($this, 'create_source_block'));
    }

    public function create_source_block(){
        if ( function_exists( 'lazyblocks' ) ) :

            $block_id = random_int(10, 99999999);
            lazyblocks()->add_block( array(
                'id' => $block_id,
                'title' => 'Quellennachweise',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10.08 10.86c.05-.33.16-.62.3-.87s.34-.46.59-.62c.24-.15.54-.22.91-.23.23.01.44.05.63.13.2.09.38.21.52.36s.25.33.34.53.13.42.14.64h1.79c-.02-.47-.11-.9-.28-1.29s-.4-.73-.7-1.01-.66-.5-1.08-.66-.88-.23-1.39-.23c-.65 0-1.22.11-1.7.34s-.88.53-1.2.92-.56.84-.71 1.36S8 11.29 8 11.87v.27c0 .58.08 1.12.23 1.64s.39.97.71 1.35.72.69 1.2.91 1.05.34 1.7.34c.47 0 .91-.08 1.32-.23s.77-.36 1.08-.63.56-.58.74-.94.29-.74.3-1.15h-1.79c-.01.21-.06.4-.15.58s-.21.33-.36.46-.32.23-.52.3c-.19.07-.39.09-.6.1-.36-.01-.66-.08-.89-.23-.25-.16-.45-.37-.59-.62s-.25-.55-.3-.88-.08-.67-.08-1v-.27c0-.35.03-.68.08-1.01zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" /></svg>',
                'keywords' => array(
                ),
                'slug' => 'lazyblock/reli-quellennachweis',
                'description' => '',
                'category' => 'text',
                'category_label' => 'text',
                'supports' => array(
                    'customClassName' => true,
                    'anchor' => false,
                    'align' => array(
                        0 => 'wide',
                        1 => 'full',
                    ),
                    'html' => false,
                    'multiple' => true,
                    'inserter' => true,
                ),
                'ghostkit' => array(
                    'supports' => array(
                        'spacings' => false,
                        'display' => false,
                        'scrollReveal' => false,
                        'frame' => false,
                        'customCSS' => false,
                    ),
                ),
                'controls' => array(
                    'control_'.$block_id.'a' => array(
                        'type' => 'text',
                        'name' => 'quellennachweise',
                        'default' => 'Quellennachweise',
                        'label' => '',
                        'help' => 'Gib für jedes Bild/Dokument einen Quellennachweis an, sofern du nicht selbst der Urheber/Fotograf bist. Achte bei Fotos bitte darauf, dass keine Gesichter von Kindern darauf identifizierbar sind',
                        'child_of' => '',
                        'placement' => 'content',
                        'width' => '100',
                        'hide_if_not_selected' => 'false',
                        'save_in_meta' => 'false',
                        'save_in_meta_name' => '',
                        'required' => 'false',
                        'placeholder' => '',
                        'characters_limit' => '',
                    ),
                    'control_'.$block_id.'b' => array(
                        'type' => 'repeater',
                        'name' => 'quelle',
                        'default' => '',
                        'label' => '',
                        'help' => '',
                        'child_of' => '',
                        'placement' => 'content',
                        'width' => '100',
                        'hide_if_not_selected' => 'false',
                        'save_in_meta' => 'false',
                        'save_in_meta_name' => '',
                        'required' => 'false',
                        'rows_min' => '',
                        'rows_max' => '',
                        'rows_label' => 'nichts',
                        'rows_add_button_label' => 'Quellennachweis hinzufügen',
                        'rows_collapsible' => 'false',
                        'rows_collapsed' => 'false',
                        'placeholder' => '',
                        'characters_limit' => '',
                    ),
                    'control_'.$block_id.'c' => array(
                        'type' => 'text',
                        'name' => 'title',
                        'default' => '',
                        'label' => '',
                        'help' => '',
                        'child_of' => 'control_e1492843e1',
                        'placement' => 'content',
                        'width' => '100',
                        'hide_if_not_selected' => 'false',
                        'save_in_meta' => 'false',
                        'save_in_meta_name' => '',
                        'required' => 'false',
                        'placeholder' => 'Titel der Quelle',
                        'characters_limit' => '',
                    ),
                    'control_'.$block_id.'d' => array(
                        'type' => 'text',
                        'name' => 'src',
                        'default' => '',
                        'label' => '',
                        'help' => '',
                        'child_of' => 'control_e1492843e1',
                        'placement' => 'content',
                        'width' => '100',
                        'hide_if_not_selected' => 'false',
                        'save_in_meta' => 'false',
                        'save_in_meta_name' => '',
                        'required' => 'false',
                        'placeholder' => 'Url',
                        'characters_limit' => '',
                    ),
                    'control_'.$block_id.'e' => array(
                        'type' => 'select',
                        'name' => 'license',
                        'default' => '',
                        'label' => '',
                        'help' => '',
                        'child_of' => 'control_e1492843e1',
                        'placement' => 'content',
                        'width' => '100',
                        'hide_if_not_selected' => 'false',
                        'save_in_meta' => 'false',
                        'save_in_meta_name' => '',
                        'required' => 'false',
                        'choices' => $this->get_lincence_choices(),
                        'allow_null' => 'false',
                        'multiple' => 'false',
                        'output_format' => '',
                        'placeholder' => 'CC-BY...',
                        'characters_limit' => '',
                    ),
                ),
                'code' => array(
                    'output_method' => 'php',
                    'editor_html' => '',
                    'editor_callback' => '',
                    'editor_css' => '',
                    'frontend_html' => $this->get_frontend_html(),
                    'frontend_callback' => '',
                    'frontend_css' => '',
                    'show_preview' => 'always',
                    'single_output' => false,
                ),
                'condition' => array(
                ),
            ) );

        endif;
    }
    public function get_lincence_choices(){
        return array(
            array(
                'label' => 'Lizenz wählen',
                'value' => '',
            ),
            array(
                'label' => 'CC-BY',
                'value' => 'CC-BY',
            ),
            array(
                'label' => 'CC-BY-SA',
                'value' => 'CC-BY-SA',
            ),
            array(
                'label' => 'CC-BY-NC',
                'value' => 'CC-BY-NC',
            ),
            array(
                'label' => 'CC-BY-NC-ND',
                'value' => 'CC-BY-NC-ND',
            ),
            array(
                'label' => 'CC-BY-NC-SA',
                'value' => 'CC-BY-NC-SA',
            ),
            array(
                'label' => 'CC-BY-ND',
                'value' => 'CC-BY-ND',
            ),
            array(
                'label' => 'CC0',
                'value' => 'CC0',
            ),
            array(
                'label' => 'Public Domain',
                'value' => 'PD',
            ),
            array(
                'label' => 'unbekannt',
                'value' => 'none',
            ),
        );
    }
    public function get_frontend_html(){
        return '<?php 
    $block = lazyblocks()->blocks()->get_block( $attributes[\'lazyblock\'][\'slug\'] ); 
    $icon = $block[\'icon\'];
    
    ?>
    <div>
    <h2><?php echo $icon;?> Bildnachweise</h2>
    <?php
    echo \'<ul>\';
    foreach( $attributes[\'quelle\'] as $quelle )
    {
        echo \'<li>\';
        echo \'<a href ="\'.$quelle[\'src\'] .\'">\'. $quelle[\'title\'] .\'</a>\';
        echo \' (\'.$quelle[\'license\'].\')\';
        echo \'</li>\';
    }
    echo \'</ul>\';
    ?>
    </div>';
    }
}
new RpiSourcesBlock();

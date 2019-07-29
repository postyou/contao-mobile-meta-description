<?

$GLOBALS['TL_DCA']['tl_page']['fields']['mobile_description'] = array(
        'exclude'                 => true,
        'search'                  => true,
        'inputType'               => 'textarea',
        'eval'                    => array('style'=>'height:60px', 'decodeEntities'=>true, 'tl_class'=>'clr'),
        'sql'                     => "text NULL"
);

$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] = str_replace('description,', 'description,mobile_description,', $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']);
$GLOBALS['TL_DCA']['tl_page']['palettes']['error_401'] = str_replace('description,', 'description,mobile_description,', $GLOBALS['TL_DCA']['tl_page']['palettes']['error_401']);
$GLOBALS['TL_DCA']['tl_page']['palettes']['error_403'] = str_replace('description,', 'description,mobile_description,', $GLOBALS['TL_DCA']['tl_page']['palettes']['error_403']);
$GLOBALS['TL_DCA']['tl_page']['palettes']['error_404'] = str_replace('description,', 'description,mobile_description,', $GLOBALS['TL_DCA']['tl_page']['palettes']['error_404']);
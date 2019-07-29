<?php

$GLOBALS['TL_HOOKS']['generatePage'][] = array('Postyou\ContaoMobileMetaDescriptionBundle\EventListener\PageListener', 'onGeneratePage');
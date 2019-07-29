<?php


namespace Postyou\ContaoMobileMetaDescriptionBundle\EventListener;


class PageListener {

    public function onGeneratePage(&$objPage, $objLayout, $objPageRegular) {
        if (\Environment::get('agent')->mobile) {
            $objPage->description = $objPage->mobile_description;
        }

    }


}
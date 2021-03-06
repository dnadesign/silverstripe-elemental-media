<?php

namespace DNADesign\Elemental\Controllers;

use SilverStripe\View\Requirements;

class ElementMediaController extends ElementController
{
  public function init()
  {
    parent::init();

    Requirements::css('dnadesign/silverstripe-elemental-media: client/css/element-media.css');
  }
}

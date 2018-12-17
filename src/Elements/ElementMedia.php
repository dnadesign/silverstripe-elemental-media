<?php

namespace DNADesign\Elemental\Models;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Assets\Image;
use gorriecoe\Link\Models\Link;
use DNADesign\Elemental\Controllers\ElementMediaController;

class ElementMedia extends BaseElement
{
  private static $table_name = 'ElementCarbonMedia';

  private static $description = 'Media';

  private static $singular_name = 'media';

  private static $plural_name = 'media';

  private static $controller_class = ElementMediaController::class;

  private static $icon = 'font-icon-block-layout';

  private static $db = [
    'Text' => 'Text',
  ];

  private static $has_one = array(
    'Image' => Image::class,
  );

  private static $many_many = array(
    'Links' => Link::class,
  );

  private static $many_many_extraFields = [
    'Links' => [
      'Sort' => 'Int'
    ]
  ];

  public function getType()
  {
    return _t(__class__ . '.BlockType', 'Media');
  }

  public function getSimpleClassName()
  {
    return 'element-media';
  }
}

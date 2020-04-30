<?php

namespace DNADesign\Elemental\Models;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Assets\Image;
use gorriecoe\Link\Models\Link;
use SilverShop\HasOneField\HasOneButtonField;
use DNADesign\Elemental\Controllers\ElementMediaController;
use DNADesign\YoutubeEmbed\YoutubeEmbed;

class ElementMedia extends BaseElement
{
  private static $table_name = 'ElementCarbonMedia';

  private static $description = 'Media';

  private static $singular_name = 'media';

  private static $plural_name = 'media';

  private static $controller_class = ElementMediaController::class;

  private static $icon = 'font-icon-block-media';

  private static $db = [
    'Text' => 'Text',
  ];

  private static $has_one = [
    'Image' => Image::class,
    'Video' => YoutubeEmbed::class,
    'MediaLink' => Link::class,
  ];

  private static $owns = [
    'Image',
  ];

  public function getType()
  {
    return _t(__class__ . '.BlockType', 'Media');
  }

  public function getSimpleClassName()
  {
    return 'element-media';
  }

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();

    $fields->removeByName('VideoID');
    $fields->removeByName('MediaLinkID');

    $fields->addFieldsToTab('Root.Main', [
      HasOneButtonField::create($this, 'Video'),
      HasOneButtonField::create($this, 'MediaLink', null, 'Link'),
    ]);

    return $fields;
  }

  public function inlineEditable()
  {
    return false;
  }
}

<?php

namespace Drupal\bloginjson\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'jsonInformations' block.
 *
 * @Block(
 *  id = "json_informations",
 *  admin_label = @Translation("Json informations"),
 * )
 */
class jsonInformations extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['json_informations']['#markup'] = 'Implement jsonInformations.';
    return $build;
  }

}

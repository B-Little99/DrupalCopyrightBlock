<?php

namespace Drupal\copyrightblock\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'copyright' Block.
 *
 * @Block(
 *   id = "copyright_block",
 *   admin_label = @Translation("Copyright block"),
 *   category = @Translation("Copyright"),
 * )
 */

class Copyrightblock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $date = new \DateTime();
    return [
      '#markup' => $this->t('Copyright @year &copy; Arch Architects', [
        '@year' => $date->format('Y'),
        ]),
      '#attached' => [
        'library' => [
          'copyrightblock/copyrightblock.libraries.yml'
        ]
      ]
    ];
  }
}
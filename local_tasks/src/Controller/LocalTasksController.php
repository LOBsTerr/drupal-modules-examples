<?php

namespace Drupal\local_tasks\Controller;

use Drupal\Core\Controller\ControllerBase;

class LocalTasksController extends ControllerBase {

  public function nodeExtraSettings($node) {
    return [
      '#markup' => $this->t('Node %title extra settings page', [
        '%title' => $node->getTitle(),
      ]),
    ];
  }

}

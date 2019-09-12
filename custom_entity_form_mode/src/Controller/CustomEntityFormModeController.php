<?php

namespace Drupal\custom_entity_form_mode\Controller;

use Drupal\Core\Controller\ControllerBase;

class CustomEntityFormModeController extends ControllerBase {

  public function emailSettings($node) {
    return $this->entityFormBuilder()->getForm($node, 'emails_settings');
  }

}

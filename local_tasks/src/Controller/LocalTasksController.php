<?php

namespace Drupal\local_tasks\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;

class LocalTasksController extends ControllerBase {

  public function nodeExtraSettings($node) {
    return [
      '#markup' => $this->t('Node %title extra settings page', [
        '%title' => $node->getTitle(),
      ]),
    ];
  }

  public function eshopSettings() {
    return [
      '#markup' => $this->t('This is a parent settings page. This page has two child pages: <a href="@products_settings_url">Products settings</a> and <a href="@categories_settings_url">Categories settings</a>', [
        '@products_settings_url' => Url::fromRoute('local_tasks.products_settings')->toString(),
        '@categories_settings_url' => Url::fromRoute('local_tasks.categories_settings')->toString(),
      ]),
    ];
  }

  public function eshopMetaSettings() {
    return [
      '#markup' => $this->t('This is a meta settings page'),
    ];
  }

  public function productsSettings() {
    return [
      '#markup' => $this->t('This is a products settings page'),
    ];
  }

  public function categoriesSettings() {
    return [
      '#markup' => $this->t('This is a categories settings page'),
    ];
  }

}

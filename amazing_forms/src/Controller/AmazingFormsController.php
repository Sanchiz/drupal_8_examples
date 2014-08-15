<?php

namespace Drupal\amazing_forms\Controller;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;

class AmazingFormsController implements ContainerInjectionInterface {

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static($container->get('module_handler'));
  }

  /**
   * This will return the output of the foobar page.
   */
  public function contributePage() {
    return array(
      '#markup' => t('This is the demo foobar page.'),
    );
  }

}
<?php

namespace DrupalCodeGenerator\Commands\Drupal_8\Plugin;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use DrupalCodeGenerator\Commands\BaseGenerator;

/**
 * Implements d8:plugin:field-widget command.
 */
class FieldWidget extends BaseGenerator {

  protected $name = 'd8:plugin:field-widget';
  protected $description = 'Generates field type plugin';

  /**
   * {@inheritdoc}
   */
  protected function interact(InputInterface $input, OutputInterface $output) {

    $questions = [
      'name' => ['Module name', [$this, 'defaultName']],
      'machine_name' => ['Module machine name', [$this, 'defaultMachineName']],
      'plugin_label' => ['Widget name', 'Example'],
      'plugin_id' => ['Widget machine name', [$this, 'defaultPluginId']],
    ];

    $vars = $this->collectVars($input, $output, $questions);
    $vars['class'] = $this->human2class($vars['machine_name'] . 'Widget');

    $this->files[$vars['class'] . '.php'] = $this->render('d8/plugin-field-widget.twig', $vars);
  }

  /**
   * Creates default plugin ID.
   */
  protected function defaultPluginId($vars) {
    return $vars['machine_name'] . '_' . $this->human2machine($vars['plugin_label']);
  }

}

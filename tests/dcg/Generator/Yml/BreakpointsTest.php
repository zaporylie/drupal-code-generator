<?php declare(strict_types=1);

namespace DrupalCodeGenerator\Tests\Generator\Yml;

use DrupalCodeGenerator\Tests\Generator\BaseGeneratorTest;

/**
 * Test for yml:breakpoints command.
 */
final class BreakpointsTest extends BaseGeneratorTest {

  protected $class = 'Yml\Breakpoints';

  protected $interaction = [
    'Theme machine name [%default_machine_name%]:' => 'example',
  ];

  protected $fixtures = [
    'example.breakpoints.yml' => '/_breakpoints.yml',
  ];

}

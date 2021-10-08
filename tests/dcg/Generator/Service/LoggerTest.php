<?php declare(strict_types=1);

namespace DrupalCodeGenerator\Tests\Generator\Service;

use DrupalCodeGenerator\Tests\Generator\BaseGeneratorTest;

/**
 * Test for service:logger command.
 */
final class LoggerTest extends BaseGeneratorTest {

  protected $class = 'Service\Logger';

  protected $interaction = [
    'Module name [%default_name%]:' => 'Foo',
    'Module machine name [foo]:' => 'foo',
    'Class [FileLog]:' => 'FileLog',
  ];

  protected $fixtures = [
    'foo.services.yml' => '/_logger.services.yml',
    'src/Logger/FileLog.php' => '/_logger.php',
  ];

}

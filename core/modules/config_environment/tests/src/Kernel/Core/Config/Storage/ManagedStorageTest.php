<?php

// @codingStandardsIgnoreStart
// @todo: Move this back to \Drupal\KernelTests\Core\Config\Storage in #2991683.
// @codingStandardsIgnoreEnd
namespace Drupal\Tests\config_environment\Kernel\Core\Config\Storage;

// include class aliases. @todo: remove in #2991683.
include_once __DIR__ . '/../../../../../../config_environment.module';

use Drupal\Core\Config\StorageManagerInterface;
use Drupal\Core\Config\ManagedStorage;
use Drupal\Core\Config\MemoryStorage;
use Drupal\KernelTests\Core\Config\Storage\ConfigStorageTestBase;

/**
 * Tests ManagedStorage operations.
 *
 * @group config
 */
class ManagedStorageTest extends ConfigStorageTestBase implements StorageManagerInterface {

  /**
   * {@inheritdoc}
   */
  public function getStorage() {
    // We return a new storage every time to make sure the managed storage
    // only calls this once and retains the configuration by itself.
    return new MemoryStorage();
  }

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
    $this->storage = new ManagedStorage($this);
    // ::listAll() verifications require other configuration data to exist.
    $this->storage->write('system.performance', []);
  }

  /**
   * {@inheritdoc}
   */
  protected function read($name) {
    return $this->storage->read($name);
  }

  /**
   * {@inheritdoc}
   */
  protected function insert($name, $data) {
    $this->storage->write($name, $data);
  }

  /**
   * {@inheritdoc}
   */
  protected function update($name, $data) {
    $this->storage->write($name, $data);
  }

  /**
   * {@inheritdoc}
   */
  protected function delete($name) {
    $this->storage->delete($name);
  }

  /**
   * {@inheritdoc}
   */
  public function testInvalidStorage() {
    $this->markTestSkipped('ManagedStorage cannot be invalid.');
  }

}

<?php

declare(strict_types = 1);

namespace Drupal\Tests\matomo\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\Component\Serialization\Json;

/**
 * Test custom url functionality of Matomo module.
 *
 * @group Matomo
 */
class MatomoCustomUrlsTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = ['matomo'];

  /**
   * Default theme.
   *
   * @var string
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $permissions = [
      'access administration pages',
      'administer matomo',
      'administer modules',
      'administer site configuration',
    ];

    // User to set up matomo.
    $this->admin_user = $this->drupalCreateUser($permissions);
  }

  /**
   * Tests if user password page urls are overridden.
   */
  public function testMatomoUserPasswordPage() {
    $base_path = base_path();
    $site_id = '1';
    $this->config('matomo.settings')->set('site_id', $site_id)->save();
    $this->config('matomo.settings')->set('url_http', 'http://www.example.com/matomo/')->save();
    $this->config('matomo.settings')->set('url_https', 'https://www.example.com/matomo/')->save();

    $this->drupalGet('user/password', ['query' => ['name' => 'foo']]);
    $this->assertSession()->responseContains('_paq.push(["setCustomUrl", ' . Json::encode($base_path . 'user/password') . ']);');

    $this->drupalGet('user/password', ['query' => ['name' => 'foo@example.com']]);
    $this->assertSession()->responseContains('_paq.push(["setCustomUrl", ' . Json::encode($base_path . 'user/password') . ']);');

    $this->drupalGet('user/password');
    $this->assertSession()->responseNotContains('_paq.push(["setCustomUrl", "');
  }

}

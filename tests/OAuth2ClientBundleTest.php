<?php

/*
 * OAuth2 Client Bundle
 * Copyright (c) KnpUniversity <http://knpuniversity.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Onlishop\OAuth2ClientBundle\Tests;

use Onlishop\OAuth2ClientBundle\DependencyInjection\KnpUOAuth2ClientExtension;
use Onlishop\OAuth2ClientBundle\OAuth2ClientBundle;
use PHPUnit\Framework\TestCase;

class OAuth2ClientBundleTest extends TestCase
{
    public function testShouldReturnNewContainerExtension()
    {
        $testBundle = new OAuth2ClientBundle();

        $result = $testBundle->getContainerExtension();
        $this->assertInstanceOf(KnpUOAuth2ClientExtension::class, $result);
    }
}

<?php

/*
 * OAuth2 Client Bundle
 * Copyright (c) KnpUniversity <http://knpuniversity.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Onlishop\OAuth2ClientBundle\Tests\DependencyInjection;

use Onlishop\OAuth2ClientBundle\DependencyInjection\ProviderFactory;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class ProviderFactoryTest extends TestCase
{
    public function testShouldCreateProvider()
    {
        $redirectUri = "http://redirect.url";
        $mockGenerator = $this->getMockGenerator($redirectUri);
        $mockGenerator->expects($this->once())->method("generate");

        $testProviderFactory = new ProviderFactory($mockGenerator);

        $httpsRedirectUri = "symfony_route_name";
        $result = $testProviderFactory->createProvider(MockProvider::class, [], $httpsRedirectUri);

        $this->assertInstanceOf(MockProvider::class, $result);
        $this->assertEquals(["redirectUri" => $redirectUri], $result->getOptions());
        $this->assertEquals([], $result->getCollaborators());
    }

    public function testShouldCreateProviderWithNullRedirectUrl()
    {
        $mockGenerator = $this->getMockBuilder(UrlGeneratorInterface::class)->disableOriginalConstructor()->getMock();
        $mockGenerator->expects($this->never())->method("generate");

        $testProviderFactory = new ProviderFactory($mockGenerator);
        $result = $testProviderFactory->createProvider(MockProvider::class, [], null);

        $this->assertInstanceOf(MockProvider::class, $result);
        $this->assertEquals([], $result->getOptions());
        $this->assertEquals([], $result->getCollaborators());
    }

    public function testShouldCreateProviderWithExternalRedirectUrl()
    {
        $mockGenerator = $this->getMockBuilder(UrlGeneratorInterface::class)
            ->disableOriginalConstructor()
            ->getMock();
        $mockGenerator->expects($this->never())->method('generate');

        $testProviderFactory = new ProviderFactory($mockGenerator);
        $externalRedirectUri = 'https://external-site.com/callback';
        $result = $testProviderFactory->createProvider(MockProvider::class, [], $externalRedirectUri);

        $this->assertInstanceOf(MockProvider::class, $result);
        $this->assertEquals(['redirectUri' => $externalRedirectUri], $result->getOptions());
    }

    private function getMockGenerator($generateReturn)
    {
        $mockGenerator = $this->getMockBuilder(UrlGeneratorInterface::class)->disableOriginalConstructor()->getMock();
        $mockGenerator->method("generate")->willReturn($generateReturn);
        return $mockGenerator;
    }
}

class MockProvider
{
    private $options;
    private $collaborators;
    public function __construct($options, $collaborators)
    {
        $this->options = $options;
        $this->collaborators = $collaborators;
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function getCollaborators()
    {
        return $this->collaborators;
    }
}

<?php

/*
 * OAuth2 Client Bundle
 * Copyright (c) KnpUniversity <http://knpuniversity.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Onlishop\OAuth2ClientBundle\DependencyInjection;

use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\AmazonProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\AppIdProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\AppleProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\Auth0ProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\AzureProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\BitbucketProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\BoxProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\BuddyProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\BufferProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\CanvasLMSProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\CleverProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\DevianArtProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\DigitalOceanProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\DiscordProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\DisqusProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\DribbbleProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\DropboxProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\DrupalProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\ElanceProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\EventbriteProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\EveOnlineProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\FacebookProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\FitbitProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\FoursquareProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\FusionAuthProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\GenericProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\GeocachingProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\GithubProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\GitlabProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\GoogleProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\HeadHunterProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\HerokuProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\InstagramProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\JiraProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\KeycloakPkceProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\KeycloakProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\LinkedInProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\MailRuProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\MicrosoftProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\MollieProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\OdnoklassnikiProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\OktaProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\PassageProviderConfiguration;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\PaypalProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\ProviderConfiguratorInterface;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\ProviderWithoutClientSecretConfiguratorInterface;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\PsnProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\SalesforceProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\SlackProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\SpotifyProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\StravaProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\StripeProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\SymfonyConnectProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\TwitchHelixProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\TwitchProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\UberProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\UnsplashProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\VimeoProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\VKontakteProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\WaveProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\WebflowProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\YahooProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\YandexProviderConfigurator;
use Onlishop\OAuth2ClientBundle\DependencyInjection\Providers\ZendeskProviderConfigurator;
use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Alias;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Reference;

class KnpUOAuth2ClientExtension extends Extension
{
    /** @var bool */
    private $checkExternalClassExistence;

    private array $configurators = [];

    private array $duplicateProviderTypes = [];

    private static array $supportedProviderTypes = [
        'amazon' => AmazonProviderConfigurator::class,
        'appid' => AppIdProviderConfigurator::class,
        'apple' => AppleProviderConfigurator::class,
        'auth0' => Auth0ProviderConfigurator::class,
        'azure' => AzureProviderConfigurator::class,
        'bitbucket' => BitbucketProviderConfigurator::class,
        'box' => BoxProviderConfigurator::class,
        'buddy' => BuddyProviderConfigurator::class,
        'buffer' => BufferProviderConfigurator::class,
        'canvas_lms' => CanvasLMSProviderConfigurator::class,
        'clever' => CleverProviderConfigurator::class,
        'devian_art' => DevianArtProviderConfigurator::class,
        'digital_ocean' => DigitalOceanProviderConfigurator::class,
        'discord' => DiscordProviderConfigurator::class,
        'disqus' => DisqusProviderConfigurator::class,
        'dribbble' => DribbbleProviderConfigurator::class,
        'dropbox' => DropboxProviderConfigurator::class,
        'drupal' => DrupalProviderConfigurator::class,
        'elance' => ElanceProviderConfigurator::class,
        'eve_online' => EveOnlineProviderConfigurator::class,
        'eventbrite' => EventbriteProviderConfigurator::class,
        'facebook' => FacebookProviderConfigurator::class,
        'fitbit' => FitbitProviderConfigurator::class,
        'four_square' => FoursquareProviderConfigurator::class,
        'fusion_auth' => FusionAuthProviderConfigurator::class,
        'geocaching' => GeocachingProviderConfigurator::class,
        'github' => GithubProviderConfigurator::class,
        'gitlab' => GitlabProviderConfigurator::class,
        'google' => GoogleProviderConfigurator::class,
        'headhunter' => HeadHunterProviderConfigurator::class,
        'heroku' => HerokuProviderConfigurator::class,
        'instagram' => InstagramProviderConfigurator::class,
        'jira' => JiraProviderConfigurator::class,
        'keycloak' => KeycloakProviderConfigurator::class,
        'keycloak_pkce' => KeycloakPkceProviderConfigurator::class,
        'linkedin' => LinkedInProviderConfigurator::class,
        'mail_ru' => MailRuProviderConfigurator::class,
        'microsoft' => MicrosoftProviderConfigurator::class,
        'mollie' => MollieProviderConfigurator::class,
        'odnoklassniki' => OdnoklassnikiProviderConfigurator::class,
        'okta' => OktaProviderConfigurator::class,
        'passage' => PassageProviderConfiguration::class,
        'paypal' => PaypalProviderConfigurator::class,
        'psn' => PsnProviderConfigurator::class,
        'salesforce' => SalesforceProviderConfigurator::class,
        'slack' => SlackProviderConfigurator::class,
        'spotify' => SpotifyProviderConfigurator::class,
        'symfony_connect' => SymfonyConnectProviderConfigurator::class,
        'strava' => StravaProviderConfigurator::class,
        'stripe' => StripeProviderConfigurator::class,
        'twitch' => TwitchProviderConfigurator::class,
        'twitch_helix' => TwitchHelixProviderConfigurator::class,
        'uber' => UberProviderConfigurator::class,
        'unsplash' => UnsplashProviderConfigurator::class,
        'vimeo' => VimeoProviderConfigurator::class,
        'vkontakte' => VKontakteProviderConfigurator::class,
        'wave' => WaveProviderConfigurator::class,
        'webflow' => WebflowProviderConfigurator::class,
        'yahoo' => YahooProviderConfigurator::class,
        'yandex' => YandexProviderConfigurator::class,
        'zendesk' => ZendeskProviderConfigurator::class,
        'generic' => GenericProviderConfigurator::class,
    ];

    /**
     * KnpUOAuth2ClientExtension constructor.
     *
     * @param bool $checkExternalClassExistence
     */
    public function __construct($checkExternalClassExistence = true)
    {
        $this->checkExternalClassExistence = $checkExternalClassExistence;
    }

    /**
     * Load the bundle configuration.
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $processor = new Processor();
        $configuration = new Configuration();
        $config = $processor->processConfiguration($configuration, $configs);

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $httpClient = $config['http_client'];
        $httpClientOptions = $config['http_client_options'];
        $clientConfigurations = $config['clients'];

        $clientServiceKeys = [];
        foreach ($clientConfigurations as $key => $clientConfig) {
            // manually make sure "type" is there
            if (!isset($clientConfig['type'])) {
                throw new InvalidConfigurationException(\sprintf('Your "knpu_oauth2_client.clients.%s" config entry is missing the "type" key.', $key));
            }

            $type = $clientConfig['type'];
            unset($clientConfig['type']);
            if (!isset(self::$supportedProviderTypes[$type])) {
                throw new InvalidConfigurationException(\sprintf('The "knpu_oauth2_client.clients" config "type" key "%s" is not supported. We support (%s)', $type, implode(', ', array_keys(self::$supportedProviderTypes))));
            }

            // process the configuration
            $tree = new TreeBuilder('knpu_oauth2_client/clients/'.$key);
            $node = $tree->getRootNode();

            $this->buildConfigurationForType($node, $type);
            $processor = new Processor();
            $config = $processor->process($tree->buildTree(), [$clientConfig]);

            $configurator = $this->getConfigurator($type);

            $providerOptions = $configurator->getProviderOptions($config);

            $collaborators = [];
            if ($httpClient) {
                $collaborators['httpClient'] = new Reference($httpClient);
            } else {
                $providerOptions = array_merge($providerOptions, $httpClientOptions);
            }
            // hey, we should add the provider/client service!
            $clientServiceKey = $this->configureProviderAndClient(
                $container,
                $type,
                $key,
                $configurator->getProviderClass($config),
                $configurator->getClientClass($config),
                $configurator->getPackagistName(),
                $providerOptions,
                $config['redirect_route'],
                $config['redirect_params'],
                $config['use_state'],
                $collaborators
            );

            $clientServiceKeys[$key] = $clientServiceKey;
        }

        $container->getDefinition('knpu.oauth2.registry')
            ->replaceArgument(1, $clientServiceKeys);
    }

    /**
     * @param string $providerType   The "type" used in the config - e.g. "facebook"
     * @param string $providerKey    The config key used for this - e.g. "facebook_client", "my_facebook"
     * @param string $providerClass  Provider class
     * @param string $clientClass    Class to use for the Client
     * @param string $packageName    Packagist package name required
     * @param array  $options        Options passed to when constructing the provider
     * @param string $redirectRoute  Route name for the redirect URL
     * @param array  $redirectParams Route params for the redirect URL
     * @param bool   $useState
     *
     * @return string The client service id
     */
    private function configureProviderAndClient(ContainerBuilder $container, $providerType, $providerKey, $providerClass, $clientClass, $packageName, array $options, $redirectRoute, array $redirectParams, $useState, array $collaborators): string
    {
        if ($this->checkExternalClassExistence && !class_exists($providerClass)) {
            if ('generic' === $providerType) {
                throw new \LogicException(\sprintf('The provider class `%s` must exist in order to use with the "%s" OAuth provider.', $providerClass, $providerType));
            }
            throw new \LogicException(\sprintf('Run `composer require %s` in order to use the "%s" OAuth provider.', $packageName, $providerType));
        }

        $providerServiceKey = \sprintf('knpu.oauth2.provider.%s', $providerKey);

        $providerDefinition = $container->register(
            $providerServiceKey,
            $providerClass
        );
        $providerDefinition->setPublic(false);

        $providerDefinition->setFactory([
            new Reference('knpu.oauth2.provider_factory'),
            'createProvider',
        ]);

        $providerDefinition->setArguments([
            $providerClass,
            $options,
            $redirectRoute,
            $redirectParams,
            $collaborators,
        ]);

        $clientServiceKey = \sprintf('knpu.oauth2.client.%s', $providerKey);
        $clientDefinition = $container->register(
            $clientServiceKey,
            $clientClass
        );
        $clientDefinition->setArguments([
            new Reference($providerServiceKey),
            new Reference('request_stack'),
        ]);
        $clientDefinition->setPublic(true);

        // if stateless, do it!
        if (!$useState) {
            $clientDefinition->addMethodCall('setAsStateless');
        }

        // add an alias, but only if a provider type is used only 1 time
        if (!\in_array($providerType, $this->duplicateProviderTypes, true)) {
            // alias already exists? This is a duplicate type, record it
            if ($container->hasAlias($clientClass)) {
                $this->duplicateProviderTypes[] = $providerType;
            } else {
                // all good, add the alias
                $container->setAlias($clientClass, new Alias($clientServiceKey, false));
            }
        }

        return $clientServiceKey;
    }

    public static function getAllSupportedTypes(): array
    {
        return array_keys(self::$supportedProviderTypes);
    }

    /**
     * @param string $type
     */
    public function getConfigurator($type): ProviderConfiguratorInterface
    {
        if (!isset($this->configurators[$type])) {
            $class = self::$supportedProviderTypes[$type];

            $this->configurators[$type] = new $class();
        }

        return $this->configurators[$type];
    }

    /**
     * Overridden so the alias isn't "knp_uo_auth2_client".
     */
    public function getAlias(): string
    {
        return 'knpu_oauth2_client';
    }

    private function buildConfigurationForType(NodeDefinition $node, $type)
    {
        $optionsNode = $node->children();
        $optionsNode
            ->scalarNode('client_id')->isRequired()->end()
        ;

        if (self::configuratorNeedsClientSecret($this->getConfigurator($type))) {
            $optionsNode->scalarNode('client_secret')->isRequired()->end();
        }

        $optionsNode
            ->scalarNode('redirect_route')->isRequired()->end()
            ->arrayNode('redirect_params')
                ->prototype('scalar')->end()
            ->end()
            ->booleanNode('use_state')->defaultValue(true)->end()
        ;

        // allow the specific provider to add more options
        $this->getConfigurator($type)
            ->buildConfiguration($optionsNode);
        $optionsNode->end();
    }

    /**
     * @internal
     */
    public static function configuratorNeedsClientSecret(ProviderConfiguratorInterface $configurator): bool
    {
        if (!$configurator instanceof ProviderWithoutClientSecretConfiguratorInterface) {
            return true;
        }

        return $configurator->needsClientSecret();
    }
}

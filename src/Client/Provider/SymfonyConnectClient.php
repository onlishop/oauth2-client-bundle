<?php

/*
 * OAuth2 Client Bundle
 * Copyright (c) KnpUniversity <http://knpuniversity.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Onlishop\OAuth2ClientBundle\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;
use Onlishop\OAuth2ClientBundle\Client\OAuth2Client;
use Qdequippe\OAuth2\Client\Provider\SymfonyConnectResourceOwner;

class SymfonyConnectClient extends OAuth2Client
{
    /**
     * @return SymfonyConnectResourceOwner|\League\OAuth2\Client\Provider\ResourceOwnerInterface
     */
    public function fetchUserFromToken(AccessToken $accessToken)
    {
        return parent::fetchUserFromToken($accessToken);
    }

    /**
     * @return SymfonyConnectResourceOwner|\League\OAuth2\Client\Provider\ResourceOwnerInterface
     */
    public function fetchUser()
    {
        return parent::fetchUser();
    }
}

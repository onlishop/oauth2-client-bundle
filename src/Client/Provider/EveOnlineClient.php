<?php

/*
 * OAuth2 Client Bundle
 * Copyright (c) KnpUniversity <http://knpuniversity.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Onlishop\OAuth2ClientBundle\Client\Provider;

use Evelabs\OAuth2\Client\Provider\EveOnlineResourceOwner;
use League\OAuth2\Client\Token\AccessToken;
use Onlishop\OAuth2ClientBundle\Client\OAuth2Client;

class EveOnlineClient extends OAuth2Client
{
    /**
     * @return EveOnlineResourceOwner|\League\OAuth2\Client\Provider\ResourceOwnerInterface
     */
    public function fetchUserFromToken(AccessToken $accessToken)
    {
        return parent::fetchUserFromToken($accessToken);
    }

    /**
     * @return EveOnlineResourceOwner|\League\OAuth2\Client\Provider\ResourceOwnerInterface
     */
    public function fetchUser()
    {
        return parent::fetchUser();
    }
}

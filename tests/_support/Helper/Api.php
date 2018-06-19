<?php

/*
 * Copyright (C) 2015-2018 Libre Informatique
 *
 * This file is licensed under the GNU LGPL v3.
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Helper;

class Api extends \Codeception\Module
{
    public function getOAuthToken(): ?string
    {
        $response = json_decode($this->getModule('REST')->response);

        return isset($response->token) ? $response->token : null;
    }

    public function getOAuthRefreshToken(): ?string
    {
        $response = json_decode($this->getModule('REST')->response);

        return isset($response->refresh_token) ? $response->refresh_token : null;
    }
}

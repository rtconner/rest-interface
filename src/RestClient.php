<?php

namespace Conner\RestInterface;

use Conner\RestInterface\Traits\GuzzleAccess;

abstract class RestClient implements RestClientInterface
{
    use GuzzleAccess;
}
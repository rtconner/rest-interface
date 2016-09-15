<?php

namespace Conner\RestInterface\Traits;

use GuzzleHttp\Client as GuzzleClient;

trait GuzzleAccess
{
    private $guzzle;

    /**
     * @return \GuzzleHttp\Client
     */
    public function guzzle(GuzzleClient $guzzleClient = null)
    {
        if($guzzleClient != null) {
            $this->guzzle = $guzzleClient;
        } else {
            $this->instantiateGuzzle();
        }

        return $this->guzzle;
    }

    private function instantiateGuzzle()
    {
        if($this->guzzle == null) {
            $this->guzzle = new GuzzleClient();
        }
    }
}
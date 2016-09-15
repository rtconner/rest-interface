<?php

namespace Conner\RestInterface;

interface RestClientInterface
{
    /**
     * @param $method
     * @param $path
     * @param $requestBody
     * @return mixed
     */
    public function call(string $method, string $path, $requestBody);

    /**
     * @param $path
     * @param $requestBody
     * @return mixed
     */
    public function get(string $path, $requestBody);

    /**
     * @param $path
     * @param $requestBody
     * @return mixed
     */
    public function post(string $path, $requestBody);

    /**
     * @param $path
     * @param $requestBody
     * @return mixed
     */
    public function put(string $path, $requestBody);

    /**
     * @param $path
     * @param $requestBody
     * @return mixed
     */
    public function head(string $path, $requestBody);

    /**
     * @param $path
     * @param $requestBody
     * @return mixed
     */
    public function delete(string $path, $requestBody);

    /**
     * @param $path
     * @param $requestBody
     * @return mixed
     */
    public function patch(string $path, $requestBody);
}
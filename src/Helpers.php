<?php

/*
 * This file is part of the guanguans/json-format.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

use Guanguans\JsonFormat\Json;

if (!function_exists('json_format')) {
    /**
     * @param $json
     * @param int $options
     *
     * @return string
     *
     * @throws \Guanguans\JsonFormat\Exceptions\InvalidArgumentException
     */
    function json_format($json, $options = JSON_PRETTY_PRINT)
    {
        return Json::format($json, $options);
    }
}

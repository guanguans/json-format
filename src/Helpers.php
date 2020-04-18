<?php

/*
 * This file is part of the guanguans/pretty-json.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

use Guanguans\JsonFormat\Json;

if (!function_exists('json_format')) {
    /**
     * @param $json
     *
     * @return false|string
     *
     * @throws \Guanguans\JsonFormat\InvalidArgumentException
     */
    function json_format($json)
    {
        return Json::format($json);
    }
}

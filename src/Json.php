<?php

/*
 * This file is part of the guanguans/pretty-json.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\JsonFormat;

class Json implements JsonInterface
{
    /**
     * @param $json
     *
     * @return false|string
     *
     * @throws \Guanguans\JsonFormat\InvalidArgumentException
     */
    public static function format($json)
    {
        if (!is_string($json)) {
            throw new InvalidArgumentException(sprintf('Parameter type is not valid string: %s', gettype($json)));
        }

        $array = json_decode($json, true);
        if (null === $array) {
            throw new InvalidArgumentException(sprintf('Parameter is not valid JSON: %s', $json));
        }

        return json_encode($array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}

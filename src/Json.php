<?php

/*
 * This file is part of the guanguans/json-format.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\JsonFormat;

use Guanguans\JsonFormat\Exceptions\InvalidArgumentException;

class Json implements JsonInterface
{
    /**
     * @param $json
     * @param int $options
     *
     * @return string
     *
     * @throws \Guanguans\JsonFormat\Exceptions\InvalidArgumentException
     */
    public static function format($json, $options = JSON_PRETTY_PRINT)
    {
        if (!is_string($json)) {
            throw new InvalidArgumentException(sprintf('Parameter type is not valid string: %s', gettype($json)));
        }

        $array = json_decode($json, true);
        if (null === $array) {
            throw new InvalidArgumentException(sprintf('Parameter is not valid JSON: %s', $json));
        }

        return json_encode($array, $options);
    }
}

<?php

/*
 * This file is part of the guanguans/pretty-json.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\PrettyJson;

class PrettyJson implements PrettyJsonInterface
{
    /**
     * @param $json
     *
     * @return false|string
     *
     * @throws \Guanguans\PrettyJson\InvalidArgumentException
     */
    public static function Pretty($json)
    {
        if (!is_string($json)) {
            throw new InvalidArgumentException(sprintf('Parameter type is not valid string: %s', gettype($json)));
        }

        $array = json_decode($json, true);
        if (null === json_decode($json) && JSON_ERROR_NONE !== json_last_error()) {
            throw new InvalidArgumentException(sprintf('Parameter is not valid JSON: %s', $json));
        }

        return json_encode($array, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_LINE_TERMINATORS);
    }
}

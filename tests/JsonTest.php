<?php

/*
 * This file is part of the guanguans/json-format.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Tests;

use Guanguans\JsonFormat\Json;

class JsonTest extends TestCase
{
    public function testFormat()
    {
        $json = <<<'JSON'
{"name":"guanguans\/json-format","keywords":["json","format","pretty"],"description":"Format json string."}
JSON;

        $expected = <<<'JSON'
{
    "name": "guanguans\/json-format",
    "keywords": [
        "json",
        "format",
        "pretty"
    ],
    "description": "Format json string."
}
JSON;
        $this->assertSame($expected, Json::format($json));
    }
}

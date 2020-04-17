<?php

/*
 * This file is part of the guanguans/pretty-json.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Tests;

use Guanguans\PrettyJson\PrettyJson;

class PrettyJsonTest extends TestCase
{
    public function testPretty()
    {
        $json = <<<'JSON'
{"name":"guanguans\/pretty-json","keywords":["json","pretty"],"description":"pretty json."}
JSON;

        $expected = <<<'JSON'
{
    "name": "guanguans\/pretty-json",
    "keywords": [
        "json",
        "pretty"
    ],
    "description": "pretty json."
}
JSON;
        $this->assertSame($expected, PrettyJson::Pretty($json));
    }
}

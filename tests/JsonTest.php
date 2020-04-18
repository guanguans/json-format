<?php

/*
 * This file is part of the guanguans/json-format.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Tests;

use Guanguans\JsonFormat\InvalidArgumentException;
use Guanguans\JsonFormat\Json;

class JsonTest extends TestCase
{
    public function testInvalidString()
    {
        $array = ['mac-array'];
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(sprintf('Parameter type is not valid string: %s', gettype($array)));
        Json::format($array);
        $this->fail('Faild to assert format method throw exception with invalid argument.');
    }

    public function testInvalidJson()
    {
        $string = 'mac-string';
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(sprintf('Parameter is not valid JSON: %s', $string));
        Json::format($string);
        $this->fail('Faild to assert format method throw exception with invalid argument.');
    }

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

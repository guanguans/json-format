<h1 align="center">json-format</h1>

<p align="center">Format json string.</p>

<p align="center"><img src="./docs/usage.png"></p>

[![Build Status](https://travis-ci.org/guanguans/json-format.svg?branch=master)](https://travis-ci.org/guanguans/json-format)
[![Build Status](https://scrutinizer-ci.com/g/guanguans/json-format/badges/build.png?b=master)](https://scrutinizer-ci.com/g/guanguans/json-format/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/guanguans/json-format/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/guanguans/json-format/?branch=master)
[![codecov](https://codecov.io/gh/guanguans/json-format/branch/master/graph/badge.svg)](https://codecov.io/gh/guanguans/json-format)
[![StyleCI](https://github.styleci.io/repos/255808426/shield?branch=master)](https://github.styleci.io/repos/255808426)
[![Total Downloads](https://poser.pugx.org/guanguans/json-format/downloads)](https://packagist.org/packages/guanguans/json-format)
[![Latest Stable Version](https://poser.pugx.org/guanguans/json-format/v/stable)](https://packagist.org/packages/guanguans/json-format)
[![License](https://poser.pugx.org/guanguans/json-format/license)](https://packagist.org/packages/guanguans/json-format)

## Requirements

* PHP > 5.4
* ext-json

## Installing

``` shell
$ composer require guanguans/json-format -v
```

## Usage

### Code

``` php
<?php
require __DIR__.'/vendor/autoload.php';

$json = <<<'JSON'
{"name":"json-format","keywords":["json","format","pretty"],"description":"Format json string."}
JSON;

echo json_format($json);
```

### Output

``` json
{
    "name": "json-format",
    "keywords": [
        "json",
        "format",
        "pretty"
    ],
    "description": "Format json string."
}
```

## Testing

``` shell
$ composer test
```

## License

[MIT](LICENSE)
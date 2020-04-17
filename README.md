<h1 align="center">pretty-json</h1>

<p align="center">Format json string.</p>

[![Build Status](https://travis-ci.org/guanguans/pretty-json.svg?branch=master)](https://travis-ci.org/guanguans/pretty-json)
[![Build Status](https://scrutinizer-ci.com/g/guanguans/pretty-json/badges/build.png?b=master)](https://scrutinizer-ci.com/g/guanguans/pretty-json/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/guanguans/pretty-json/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/guanguans/pretty-json/?branch=master)
[![codecov](https://codecov.io/gh/guanguans/pretty-json/branch/master/graph/badge.svg)](https://codecov.io/gh/guanguans/pretty-json)
[![StyleCI](https://github.styleci.io/repos/255808426/shield?branch=master)](https://github.styleci.io/repos/255808426)
[![Total Downloads](https://poser.pugx.org/guanguans/pretty-json/downloads)](https://packagist.org/packages/guanguans/pretty-json)
[![Latest Stable Version](https://poser.pugx.org/guanguans/pretty-json/v/stable)](https://packagist.org/packages/guanguans/pretty-json)
[![License](https://poser.pugx.org/guanguans/pretty-json/license)](https://packagist.org/packages/guanguans/pretty-json)

## Requirements

* PHP >= 5.3
* ext-json

## Installing

``` shell
$ composer require guanguans/pretty-json -v
```

## Usage

### Code

``` php
<?php
require __DIR__.'/vendor/autoload.php';

use Guanguans\PrettyJson\PrettyJson;

$json = <<<'JSON'
{"name":"guanguans\/pretty-json","keywords":["json","format","pretty"],"description":"Format json string."}
JSON;

echo PrettyJson::Pretty($json);
```

### Output

``` json
{
    "name": "guanguans\/pretty-json",
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
# PhpAsync
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/fgluecks/PhpAsync/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/fgluecks/PhpAsync/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/fgluecks/PhpAsync/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/fgluecks/PhpAsync/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/fgluecks/PhpAsync/badges/build.png?b=master)](https://scrutinizer-ci.com/g/fgluecks/PhpAsync/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/fgluecks/PhpAsync/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)

## Usage

The example script must with an absolute path.
### Start script without parameter
```php
$cmd = "<example script>";

$PhpAsync = new Factory();
$pidOfChild = $PhpAsync->start($cmd);
```

### Start script with parameter
```php
$cmd = "<example script>";
$parameter = [1, 'hello world'];

$PhpAsync = new Factory();
$pidOfChild = $PhpAsync->start($cmd, $parameter);
```
The parameters can be use inside the script by accessing $argv.
$argv[0] is the script itself. The given parameters starts at position 1.

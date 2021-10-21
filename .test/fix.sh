#!/usr/bin/env bash
SCRIPT_DIR="$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )"

composer --working-dir=$SCRIPT_DIR require --dev phpunit/phpunit friendsofphp/php-cs-fixer infection/infection phpstan/phpstan rregeer/phpunit-coverage-check

$SCRIPT_DIR/vendor/bin/php-cs-fixer --allow-risky=yes fix
$SCRIPT_DIR/vendor/bin/phpstan analyse -c ../phpstan.neon
$SCRIPT_DIR/vendor/bin/phpunit --coverage-text --coverage-clover=clover.xml
$SCRIPT_DIR/vendor/bin/coverage-check clover.xml 100
$SCRIPT_DIR/vendor/bin/infection -j8 --min-covered-msi=100

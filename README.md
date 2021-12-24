# Test execution

```bash
  docker run -it -v ${PWD}:/app composer:2.2.1 /app/vendor/bin/phpunit tests
```

# (Re)install composer dependency

```bash
  docker run -it -v ${PWD}:/app composer:2.2.1 composer require --dev phpunit/phpunit:9.5
```

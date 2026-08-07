## 📚 About This Project

This project is an educational playground for learning **algorithms and unit testing in PHP**.

It is focused on:
- Implementing classic algorithm problems (e.g. Two Sum)
- Writing clean and testable PHP code
- Practicing unit testing with PHPUnit
- Understanding code coverage and test quality
- Working with Docker-based development environments

The main goal is not only to solve algorithm problems, but to learn how to **properly test and validate solutions using unit tests**, just like in real-world backend development.

This project can be used as:
- A practice space for algorithm problems
- A PHPUnit learning environment
- A reference for writing testable PHP code
- A Docker-based PHP sandbox

## 🧪 Running Tests Step by Step

Follow these steps to run PHPUnit tests and generate a code coverage report.

---

### 1. Start Docker containers

```
docker-compose up -d
```

### 2. Find running container name

```
docker ps
```

### 3. Enter the container

```
docker exec -it <container_name> bash
```

Example:

```
docker exec -it primetime-php bash
```

Some slim PHP-FPM images don't include bash at all — only sh. 
If the name/ID is correct and it still fails, try:

```
docker exec -it <container_ID> sh
```


### 4. Run PHPUnit tests

```
vendor/bin/phpunit
```

### 5. Generate code coverage report

```
vendor/bin/phpunit --coverage-html coverage
```

### 6. Open coverage report

```
coverage/index.html
```

## ⚠️ Important Note About Coverage

If you regenerate the code coverage report, you should first remove the existing `coverage/` directory to avoid mixing old and new results.

### Remove old coverage report
```
rm -rf coverage
```

### Then generate a new one

```
vendor/bin/phpunit --coverage-html coverage
```
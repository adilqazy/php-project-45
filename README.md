# Brain Games – PHP Console Games

Проект **Brain Games** — это консольные мини-игры, разработанные в рамках обучения на платформе [Hexlet](https://ru.hexlet.io). Игры развивают логическое мышление и навыки работы с PHP.

## 📋 Системные требования

### Минимальные системные требования:

- **ОС:** Windows 10 / macOS 10.15 / Linux (современные дистрибутивы)
- **ОЗУ:** 512 МБ
- **Место на диске:** не менее 100 МБ
- **Интернет:** требуется для установки зависимостей

### Требуемое программное обеспечение:

- **PHP**: версия 8.1 или выше
- **Composer**: для управления зависимостями
- **Make**: для запуска CLI-команд  
  (в Windows можно использовать WSL, Git Bash, MSYS2 или аналоги)
- **Git**: для клонирования репозитория
- **Терминал/CLI**: для запуска игр

## 🚀 Установка

1. Клонируйте репозиторий:

   ```
   git clone https://github.com/adilqazy/php-project-45.git
   ```
2. Перейдите в директорию проекта:

      ```
    cd php-project-45
      ```

3. Установите зависимости через Composer:

    ```
      composer install
    ```

### Игры
В проект входят следующие игры:

* **make brain-games**	Приветствие
* **make brain-even**	Определите, чётное ли число
* **make brain-gcd**	Найдите наибольший общий делитель
* **make brain-prime**	Простое ли это число?
* **make brain-progression**	Найдите пропущенное число в арифметической прогрессии

### Примеры запуска

```
    make brain-even
    make brain-gcd
    make brain-prime
```

## Demo
### Demo
https://asciinema.org/a/HWNqiJR8xYTOPVvC15tXIjkat  
### Demo Calc
https://asciinema.org/a/IWshNlwMggrsraoXwZMGvOmsp  
### Demo GCD
https://asciinema.org/a/tTpLMKFt656JGGo6YcNQuzMha  
### Demo Progression
https://asciinema.org/a/QUiXCtgqF7mTGzxJR7lgH3Bdn  
### Demo Prime
https://asciinema.org/a/vX5mqs8382NPuzrnvjuC1JyN2  

### Лицензия
Проект распространяется под лицензией MIT.

### Hexlet tests and linter status:
[![Actions Status](https://github.com/adilqazy/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/adilqazy/php-project-45/actions)
[![Maintainability](https://api.codeclimate.com/v1/badges/c366048874fde8ce9587/maintainability)](https://codeclimate.com/github/adilqazy/php-project-45/maintainability)
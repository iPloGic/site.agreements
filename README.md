# README #

Компонент **site.agreements** - блок в нижней части окна информирующий пользователей об использовании сайтом cookie файлов и других принимаемых автоматически соглашениях.

### Подключение ###

Создайте на сайте директорию `\local\components\iplogic`. Скопируйте в нее скачанную директорию компонента site.agreements.

В нужном месте сайта добавьте вызов компонента. Код для подключения:

```
<?$APPLICATION->IncludeComponent(
	"iplogic:site.agreements",
	"",
	Array(
		"COOKIE_EXPIRES" => "10",
		"COOKIE_SUFFIX" => "ahj63fg9",
		"CACHE_TYPE" => "N",
	),
	false
);?>
```

### Параметры ###

Параметры компонента описаны в таблице. Стандартные параметры для компонента опущены, о них можно узнать в документации Битрикс.

| Параметр | Описание                    |
| ------------- | ------------------------------ |
| COOKIE_EXPIRES      | Время жизни cookie файлов в днях. Другими словами через сколько дней после закрытия предупреждения оно снова появится.  |
| COOKIE_SUFFIX   |  Суффикс имени переменной cookie. Содержит произвольный набор латинских букв и цифр. Используется для создания уникального имени, которое не будет пересекаться с другими сайтами и экземплярами компонента.    |

### Внимание! ###
Дефолтный шаблон использует jquery и подключает плагин jquery.cookie.js, поэтому если ваш проект не использует jquery или плагин уже подключен в другом месте, то шаблон необходимо кастомизировать.
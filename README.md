# Laravel Español 🌎

Paquete de traducciones en español para Laravel


Archivos por defecto incluidos en Laravel:

```
es.json
es/auth.php
es/passwords.php
es/pagination.php
es/validation.php
```

- [Instalación](#instalar)
- [Colaborar](#colaborar)


<a name="instalar"></a>
## Instalación

Puedes instalar este paquete mediante composer:

```bash
composer require laradevs/spanish
```

Para actualizar las traducciones ejecutamos lo siguiente:

```bash
php artisan vendor:publish --tag=lang
```

O también podramos usar:

```bash
php artisan laradevs:spanish
```

Una vez realizados estos pasos, ya tendremos la configuración de español de laravel, por lo que solo necesitamos configurar Laravel para que use el idioma deseado.

Esto lo logramos mediante el parámetro `locale` de la configuración de Laravel en `config/app.php`:

```
// Ej: español
'locale'          => 'es',
// Ej: inglés
'locale'          => 'en',
```

Se puede ser mas concreto e indicar las variaciones de un lenguaje:

```
// Inglés americano
'locale' => 'en_US'
// Portugués de Portugal
'locale' => 'pt_PT'
```

Pero en este caso nos valdrá con un español internacional para todos.

También se puede cambiar el idioma en tiempo de ejecución utilizando el método `setLocale` de `App`. Este cambio no es permanente, en la siguiente ejecución se utilizará el valor de configuración por defecto:

```
App::setLocale('es');
```

<a name="colaborar"></a>
## Colaborar

Cualquier mejora o varientes del español de acorde a sus paises estaremos encantados que realicen un pull request 🤙

# JWT Symfony

## 1. Installation

🔗 [Everything is in this short documentation :](https://symfony.com/bundles/LexikJWTAuthenticationBundle/current/index.html)

ℹ️ All environment variables used throughout the project are declared in the file at the root of the project.

Create a local environment file and modify the necessary variables.

```bash
cp .env .env.local
```

Install dependencies.

```bash
composer install
```

Create the database.

```bash
php bin/console d:d:c && php bin/console d:m:m
```

Create JWT keys.

```bash
php bin/console lexik:jwt:generate-keypair
```

Start project

```bash
symfony serve
```

## 2. To see

- `config/packages/security.yaml` - firewall configuration for the api and configuration for the routes access control.
- `config/routes.yaml` - definition of the api authentication route.
- `src/Controller/ApiUserController.php` - api examples.

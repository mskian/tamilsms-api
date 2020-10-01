# TAMILSMS API

API build using PHP Slim Framework for storing the Tamil kavithai and Quotes in Database

## Requirements

- PHP 7.4
- Composer for install the packages
- SSL for secure Connection
- MYSQL 5.x or 8.x

## usage

- install the packages via Composer

```sh
composer install
```

- Add your DB details in `conf.php` file
- Update your database table name in `index.php` replace mine with your's
- Add user name and password for HTTP Auth (Check line no 20 in `index.php`) - Basic protection for POST Method
- Create MYSQL database with Tamil Content Support

```sql
SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tamilcontent`;
CREATE TABLE `tamilcontent` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

- That's all done

```sh
https://api.example.com/all - Get all content
https://api.example.com/random - Get Random Content
https://api.example.com/add - Post the content into Database
https://api.example.com/update/{id} - Update the Content in the Database
```

## Examples

- Post Method

```sh
curl --request POST \
  --url https://api.example.com/add \
  --header 'authorization: Basic XXXXXXXXXXXXXXXXXXXXXXX' \
  --header 'content-type: application/x-www-form-urlencoded' \
  --data 'content=Example Tamil Content'
```

- PUT Method

```sh
curl --request PUT \
  --url https://api.example.com/update/1 \
  --header 'authorization: Basic XXXXXXXXXXXXXXXXXXXXXX' \
  --header 'content-type: application/x-www-form-urlencoded' \
  --data 'content=Example Edited Tamil Content'
```

> **you can Update this API According to your usage this is Just Example API for Tamil Content**

## LICENSE

MIT

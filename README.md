# Curso de SOLID

Para executar os exemplos do SOLID, basta rodar o comando do PHP Built-in

`php -S localhost:8888 index.php`

e utilizar um dos exemplos abaixo: 

## SRP - Wrong

```php
<?php
use app\srp\wrong\BirthdayLayout;
use app\srp\wrong\EmailSender;

$emailSender = new EmailSender(new BirthdayLayout);
$emailSender->sendMails();
```

## SRP - Right

```php
<?php
use app\srp\right\BirthdayLayout;
use app\srp\right\EmailSender;
use app\srp\right\parser\ClientJSON;
use app\srp\right\parser\ClientXML;

$emailSender = new EmailSender(new BirthdayLayout, new ClientJSON);
$emailSender->sendMails();
```
# Curso de SOLID

Para executar os exemplos do SOLID, basta rodar o comando do PHP Built-in

`php -S localhost:8888 index.php`

e utilizar um dos exemplos abaixo: 

## SRP

### Violação

```php
use app\srp\wrong\BirthdayLayout;
use app\srp\wrong\EmailSender;

$emailSender = new EmailSender(new BirthdayLayout);
$emailSender->sendMails();
```

### Refatorado

```php
use app\srp\right\BirthdayLayout;
use app\srp\right\EmailSender;
use app\srp\right\parser\ClientJSON;
use app\srp\right\parser\ClientXML;

$emailSender = new EmailSender(new BirthdayLayout, new ClientJSON);
$emailSender->sendMails();
```

## OCP

### Wrong

```php
use app\ocp\wrong\Employee;

$maria = new Employee("Maria", 1000, 'vendedor');
$joao = new Employee("João", 1200, 'coordenador');
$gisele = new Employee("Gisele", 1600, 'supervisor');
$alexandre = new Employee("Alexandre", 2000, 'diretor');

echo '<h2>' . $maria->getName() . ': R$ ' . $maria->getSalary(10) . " (R$ {$maria->getCommission()})</h2>";
echo '<h2>' . $joao->getName() . ': R$ ' . $joao->getSalary(6) . " (R$ {$joao->getCommission()})</h2>";
echo '<h2>' . $gisele->getName() . ': R$ ' . $gisele->getSalary(8) . " (R$ {$gisele->getCommission()})</h2>";
echo '<h2>' . $alexandre->getName() . ': R$ ' . $alexandre->getSalary(13) . " (R$ {$alexandre->getCommission()})</h2>";
```

### Right

```php
use app\ocp\right\department\Coordinator;
use app\ocp\right\department\Director;
use app\ocp\right\department\Seller;
use app\ocp\right\department\Supervisor;
use app\ocp\right\Employee;

$maria = new Employee("Maria", 1000, new Seller);
$joao = new Employee("João", 1200, new Coordinator);
$gisele = new Employee("Gisele", 1600, new Supervisor);
$alexandre = new Employee("Alexandre", 2000, new Director);

echo '<h2>' . $maria->getName() . ': R$ ' . $maria->getSalary(10) . " (R$ {$maria->getCommission()})</h2>";
echo '<h2>' . $joao->getName() . ': R$ ' . $joao->getSalary(6) . " (R$ {$joao->getCommission()})</h2>";
echo '<h2>' . $gisele->getName() . ': R$ ' . $gisele->getSalary(8) . " (R$ {$gisele->getCommission()})</h2>";
echo '<h2>' . $alexandre->getName() . ': R$ ' . $alexandre->getSalary(13) . " (R$ {$alexandre->getCommission()})</h2>";
```

## DIP

### Wrong

```php
use app\dip\wrong\Connection;
use app\dip\wrong\sgbd\MySQL;

$mysqlConnection = new Connection(new MySQL);
```

### Right

```php
use app\dip\right\Connection;
use app\dip\right\sgbd\MySQL;

$connection = new Connection(new MySQL);
```

### LSP

Exemplo da Geometria

```php
use app\lsp\geometry\Rectangle;
use app\lsp\geometry\Square;

//$rectangle = new Rectangle(5, 4);
$rectangle = new Square(5, 4);

echo '<h1>ÁREA: ' . $rectangle->getArea() . '</h1>';
```

Exemplo da Conta Corrente

```php
use app\lsp\account\Account;
use app\lsp\account\CurrentAccount;

$account = new Account(123, 500);
//$account = new CurrentAccount(123, 500);

$account->printBalance();
```
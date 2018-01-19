# UtilityHelper Class
## Description
Helper class to format brazilian common values (CPF, CNPJ, phone, CEP - zip code), dates, geolocations (lat and lng), etc

## Install via Composer
```bash
composer require bkazuo/common-helper-utilities
``` 

### Example
```php
require __DIR__.'/vendor/autoload.php';

// New helper object created
$util = new Helper\UtilityHelper();

// CPF 12345678909 to 123.456.789-09
$formatedCpf = $util->mask('12345678909', '###.###.###-##');
echo($formatedCpf);
```

### Available methods

#### mask

```php
require __DIR__.'/vendor/autoload.php';

// New helper object created
$util = new Helper\UtilityHelper();

// CPF 12345678909 to 123.456.789-09
$formatedCpf = $util->mask('12345678909', '###.###.###-##');

// CNPJ from 12123123000199 to 12.123.123/0001-99
$formatedCnpj = $util->mask('12123123000199', '##.###.###/####-##');

// CEP from 01122999 to 01122-999
$formatedCep = $util->mask('01122999', '#####-###');
```

#### States

```php
require __DIR__.'/vendor/autoload.php';

// New helper object created
$util = new Helper\UtilityHelper();

// List of all states initials
$states = $util->getStates();

// List of all states names
$allStatesName = $util->getAllStatesByName();

// Array with key as the initial and value as the state name
$allStatesCode = $util->getAllStatesByCode();

// State code
$stateCode = $util->getStateCodeByName('São Paulo');

// State name
$stateName = $util->getStateNameByCode('SP');

```

#### Latitude and Longitude

```php
require __DIR__.'/vendor/autoload.php';

// New helper object created
$util = new Helper\UtilityHelper();

// Distance in meters between the coordinates of lat and lng
$distance = $util->getDistance(-8.852507, -53.085938, 40.905210, -110.039063);

```

#### Date and time

```php
require __DIR__.'/vendor/autoload.php';

// New helper object created
$util = new Helper\UtilityHelper();

// Array all dates between initial and final date
$distance = $util->dateRange('2017-03-03', '2017-03-15');

// Total hours between initial and final hour
$distance = $util->hourRange('5:00', '9:00');

```

#### Special characters

```php
require __DIR__.'/vendor/autoload.php';

// New helper object created
$util = new Helper\UtilityHelper();

// Remove string with special characters and replace them by simple characters
$distance = $util->removeSpecialCharacter('Banana Maçã Pera');    // Retorna "banana-maca-pera"
```

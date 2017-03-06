# Classe UtilityHelper
## Descrição
Classe de métodos auxiliares para formatar números (CPF, CNPJ, telefone, CEP), datas, geolocalização (latitude, longitude), etc.

[![Latest Stable Version](https://poser.pugx.org/bkazuo/common-helper-utilities/v/stable)](https://packagist.org/packages/bkazuo/common-helper-utilities)
[![Total Downloads](https://poser.pugx.org/bkazuo/common-helper-utilities/downloads)](https://packagist.org/packages/bkazuo/common-helper-utilities)
[![License](https://poser.pugx.org/bkazuo/common-helper-utilities/license)](https://packagist.org/packages/bkazuo/common-helper-utilities)
[![Latest Unstable Version](https://poser.pugx.org/bkazuo/common-helper-utilities/v/unstable)](https://packagist.org/packages/bkazuo/common-helper-utilities)

## Instalação via Composer

Pelo terminal vá até a raiz de seu projeto e lá execute :

```bash
composer require bkazuo/common-helper-utilities
``` 
Isso fará com que o SEU arquivo composer.json seja acrescido da dependência de seu projeto.
Esta classe será baixada e colocada na pasta "vendor" e o arquivo autoload.php sejá atualizado.

### Exemplo
```php
require __DIR__.'/vendor/autoload.php';

// Instancia o objeto da classe
$util = new Helper\UtilityHelper();

// Formata o número do CPF 12345678909 para 123.456.789-09
$formatedCpf = $util->mask('12345678909', '###.###.###-##');
echo($formatedCpf);
```

### Lista de métodos disponíveis

#### Máscara

```php
require __DIR__.'/vendor/autoload.php';

// Instancia o objeto da classe
$util = new Helper\UtilityHelper();

// Formata o número do CPF 12345678909 para 123.456.789-09
$formatedCpf = $util->mask('12345678909', '###.###.###-##');

// Formata CNPJ de 12123123000199 para 12.123.123/0001-99
$formatedCnpj = $util->mask('12123123000199', '##.###.###/####-##');

// Formata CEP de 01122999 para 01122-999
$formatedCep = $util->mask('01122999', '#####-###');
```

#### Estados

```php
require __DIR__.'/vendor/autoload.php';

// Instancia o objeto da classe
$util = new Helper\UtilityHelper();

// Lista associativa de estados onde a chave
// é a sigla e o valor é o nome do estado
$states = $util->getStates();

// Lista de nome de todos os estados
$allStatesName = $util->getAllStatesByName();

// Lista de codigo de todos os estados
$allStatesCode = $util->getAllStatesByCode();

// Código do estado
$stateCode = $util->getStateCodeByName('São Paulo');

// Nome do estado
$stateName = $util->getStateNameByCode('SP');

```

#### Latitude e Longitude

```php
require __DIR__.'/vendor/autoload.php';

// Instancia o objeto da classe
$util = new Helper\UtilityHelper();

// Distancia em METROS entre as coordenadas de latitude e longitude
$distance = $util->getDistance(-8.852507, -53.085938, 40.905210, -110.039063);

```

#### Datas e Horas

```php
require __DIR__.'/vendor/autoload.php';

// Instancia o objeto da classe
$util = new Helper\UtilityHelper();

// Array com todas datas entre duas datas
$distance = $util->dateRange('2017-03-03', '2017-03-15');

// Total de horas entre duas horas
$distance = $util->hourRange('5:00', '9:00');

```

#### Caracteres especiais

```php
require __DIR__.'/vendor/autoload.php';

// Instancia o objeto da classe
$util = new Helper\UtilityHelper();

// Remove string com caracteres especiais e substitui por caracteres simples
$distance = $util->removeSpecialCharacter('Banana Maçã Pera');    // Retorna "banana-maca-pera"
```

## Contribuindo
Por favor, caso tenha alguma sugestão, bug para reportar, ou alguma melhoria, por favor nos comunique através das issues.

## Licença
MIT. Por favor, veja o [Arquivo de Licença](license.txt) para mais informações.

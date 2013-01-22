<?php
namespace Aura\Filter;
require_once dirname(__DIR__) . '/src.php';
return new RuleCollection(
    new RuleLocator([
        'alnum'                 => function() { return new Rule\Alnum; },
        'alpha'                 => function() { return new Rule\Alpha; },
        'between'               => function() { return new Rule\Between; },
        'blank'                 => function() { return new Rule\Blank; },
        'bool'                  => function() { return new Rule\Bool; },
        'creditCard'            => function() { return new Rule\CreditCard; },
        'dateTime'              => function() { return new Rule\DateTime; },
        'email'                 => function() { return new Rule\Email; },
        'equalToField'          => function() { return new Rule\EqualToField; },
        'equalToValue'          => function() { return new Rule\EqualToValue; },
        'float'                 => function() { return new Rule\Float; },
        'inKeys'                => function() { return new Rule\InKeys; },
        'int'                   => function() { return new Rule\Int; },
        'inValues'              => function() { return new Rule\InValues; },
        'ipv4'                  => function() { return new Rule\Ipv4; },
        'max'                   => function() { return new Rule\Max; },
        'min'                   => function() { return new Rule\Min; },
        'regex'                 => function() { return new Rule\Regex; },
        'strictEqualToField'    => function() { return new Rule\StrictEqualToField; },
        'strictEqualToValue'    => function() { return new Rule\StrictEqualToValue; },
        'string'                => function() { return new Rule\String; },
        'strlenBetween'         => function() { return new Rule\StrlenBetween; },
        'strlenMax'             => function() { return new Rule\StrlenMax; },
        'strlenMin'             => function() { return new Rule\StrlenMin; },
        'strlen'                => function() { return new Rule\Strlen; },
        'trim'                  => function() { return new Rule\Trim; },
        'upload'                => function() { return new Rule\Upload; },
        'url'                   => function() { return new Rule\Url; },
        'word'                  => function() { return new Rule\Word; },
    ]),
    new Translator(require dirname(__DIR__) . '/intl/en_US.php')
);

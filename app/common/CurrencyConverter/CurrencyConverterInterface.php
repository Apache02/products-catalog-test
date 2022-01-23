<?php

namespace common\CurrencyConverter;

interface CurrencyConverterInterface
{
    public function getRate(string $currencyFrom, string $currencyTo): float;

    public function convert(float $amount, string $currencyFrom, string $currencyTo): float;
}

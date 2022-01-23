<?php

namespace common\CurrencyConverter;

use yii\base\Component;

class CurrencyConverter extends Component implements CurrencyConverterInterface
{
    public function getRate(string $currencyFrom, string $currencyTo): float
    {
        return 1;
    }

    public function convert(float $amount, string $currencyFrom, string $currencyTo): float
    {
        $rate = $this->getRate($currencyFrom, $currencyTo);

        return $rate * $amount;
    }
}

<?php
class CreditCard
{
    function __construct(private string $number, private string $cvv, private string $expirationMonth, private string $expirationYear)
    {
        $this->number = $number;
        $this->cvv = $cvv;
        $this->expirationMonth = $expirationMonth;
        $this->expirationYear = $expirationYear;
    }

    public function getExpirationYear()
    {
        return $this->expirationYear;
    }

    public function getExpirationMonth()
    {
        return $this->expirationMonth;
    }
}

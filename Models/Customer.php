<?php
class Customer
{
    public $basket;
    private $paymentMethod;

    function __construct(private $name, private $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function insertCreditCard(CreditCard $creditCard)
    {
        $this->paymentMethod = $creditCard;
    }

    public function pay($total)
    {
        if (
            $this->paymentMethod->getExpirationYear() > date("Y") ||
            ($this->paymentMethod->getExpirationYear() === date("Y") && $this->paymentMethod->getExpirationMonth() <= date("m"))
        ) {
            return "La carta è valida. Tutto Pagato!";
        }
        return "Errore di pagamento, la carta è scaduta.";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

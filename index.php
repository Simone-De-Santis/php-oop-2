<?php
// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
// Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
// Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
// $c = new CreditCard(..);
// $user->insertCreditCard($c);
// BONUS:
// Gestite eventuali eccezioni che si possono verificare utilizzando il try catch


//# classe prodotto 
class Product
{
    //* proprieties

    public $id;
    public $name;
    public $brand;
    public $type;
    public $price;
    public $size;
    public $barcode;

    //* constructor
    public function __construct($id, $brand, $barcode = '999-999-99')
    {
        $this->id = $id;
        $this->brand = $brand;
        $this->barcode = $barcode;
        $this->price = 50;
    }
    //* GETTER
    //% mi restituisce un qualcosa in questo casa il nome 
    public function getName()
    {
        return $this->name;
    }
    //* Setter
    //%cambio il valore di una proprietà in questo caso il tipo
    public function setType($new_type)
    {
        return $this->type = $new_type;
    }
    //*Other methods
    public function getDiscount($percentage = 20)
    {
        $discount = $this->price - ($this->price * ($percentage / 100));
        return "lo sconto applicato è ($percentage)%,il prezzo scontato è :" . $discount;
    }
}
//instanzio prodotto
$shampoo = new Product('01', 'loreal',);

var_dump($shampoo);
echo $shampoo->getDiscount();
//# classe utente
class User
{
    //* proprieties

    public $name;
    public $last_name;
    public $email;
    public $age;
    public $street_address;
    public $telephone_number;
    public $type_of_subscription;
    //* constructor
    public function __construct($name, $last_name, $email)
    {
        $this->name = $name;
        $this->last_name = $last_name;
        $this->email = $email;
    }
}
$user1 = new User('Simone', 'De Santis', 'simone@yahoo.it');
var_dump($user1);

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    ciao ciao
    <div>
        <h1>
            <p>

            </p> ciao
        </h1>
    </div>
</body>

</html>
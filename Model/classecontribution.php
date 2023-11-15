<?php
class Contribution {
    public $name;
    public $email;
    public $phone_number;
    public $address;
    public $message;
    public $categorie;

    public function __construct($name, $email, $phone_number, $address, $message, $categorie) {
        $this->name = $name;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->address = $address;
        $this->message = $message;
        $this->categorie = $categorie;
    }

}
?>

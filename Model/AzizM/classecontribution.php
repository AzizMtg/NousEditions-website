<?php
class Contribution {
    public $name;
    public $email;
    public $phone_number;
    public $address;
    public $message;
    public $categorie;
    public $facebook_link;

    public $category_id;

    public function __construct($name, $email, $phone_number, $address, $message, $categorie, $facebook_link, $category_id) {
        $this->name = $name;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->address = $address;
        $this->message = $message;
        $this->categorie = $categorie;
        $this->facebook_link = $facebook_link;
        $this->category_id = $category_id;
    }
}

?>

<?php
class Client
{
    private  $idClient = null;
    private  $lastName = null;
    private  $firstName = null;
    private  $address = null;
    private  $dob = null;
    private  $email = null;
    private  $password = null;
    private  $telephone = null;
    private  $stat = null;

    public function __construct($id , $n, $p, $a, $d,  $e, $pass, $tel, $st=null)
    {
        $this->idClient = $id;
        $this->lastName = $n;
        $this->firstName = $p;
        $this->address = $a;
        $this->dob = $d;
        $this->email = $e;
        $this->password= $pass;
        $this->telephone= $tel;
        $this->stat= $st;

    }

    /**
     * Get the value of idClient
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of dob
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        // Ajoutez ici une validation de l'e-mail si nécessaire
        $this->email = $email;

        return $this;
    }

    public function getMotDePasse()
    {
        // Notez que vous ne devriez généralement pas renvoyer le mot de passe directement,
        // c'est juste un exemple de méthode getter.
        return $this->password;
    }

    /**
     * Set the value of motDePasse
     *
     * @param string $motDePasse
     * @return self
     */
    public function setMotDePasse($password)
    {
        // Ajoutez ici une logique de hachage du mot de passe si nécessaire
        $this->password = $password;

        return $this;
    }

    public function gettelephone()
    {
        return $this->telephone;
    }

    /**
     * 
     *
     * @return  self
     */
    public function settelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getstat()
    {
        return $this->stat;
    }

    /**
     * 
     *
     * @return  self
     */
    public function setstat($stat)
    {
        $this->stat = $stat;

        return $this;
    }




}

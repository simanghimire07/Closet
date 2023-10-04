<?php
class User{
    public $id, $name, $username, $email, $password;

    /**
     * @param $id int
     * @param $name string
     * @param $username string
     * @param $email string
     * @param $password string
     */
    public function __construct(int $id, string $name, string $username, string $email, string $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
//        $this->phone = $phone;
        $this->password = $password;
    }

}
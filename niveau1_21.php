<?php

class Users
{

    public string $name;
    public string $email;

public function __construct(string $name, string $email) {
        $this->name = $name;
        $this->email = $email;

    }



    public function display ()
    {

        echo 'Nom : ' . $this->name.PHP_EOL;
        echo 'Email : ' . $this->email.PHP_EOL;
    
    }
}

$user = new Users ('Christophe', 'blabla@me.com');

$user->display();



<?php
class User
{
    private string $username;
    private string $login;
    private string $password_hash;

    public static function load_user($login)
    {
        return true;
    }

    public function get_username()
    {
        return $this->username;
    }

    public function get_login()
    {
        return $this->login;
    }

    public function get_password_hash()
    {
        return $this->password_hash;
    }

    public function set_username($username)
    {
        $this->username = $username;
    }

    public function set_login($login)
    {
        $this->login = $login;
    }

    public function set_password($password)
    {
        $this->password_hash = password_hash($password, PASSWORD_DEFAULT);
    }
}

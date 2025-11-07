<?php
require_once 'user.php';

class Session
{
    private $id;
    private $status;
    private $user;
    private $created_at;
    private $last_access;

    public function __construct()
    {
        $this->init_session();
    }

    private function init_session()
    {
        session_start();

        if (isset($_SESSION['user'])) {
            $this->created_at = $this->recover_session_data('created_at');
        } else {
            $this->created_at = date('Y-m-d H:i:s');
        }
        $this->last_access = date('Y-m-d H:i:s');

        $this->status = 1;
        $this->id = session_id();
    }

    public function save_session()
    {
        $this->record_session_data('created_at', $this->created_at);
        $this->record_session_data('last_access', $this->last_access);
        if (isset($this->user)) {
            $this->record_session_data('user', $this->user->get_username());
        }
    }

    public function end_session()
    {
        session_unset();
        session_destroy();
    }

    public function set_user($user)
    {
        $this->user = $user;
    }

    public function get_user()
    {
        return $this->user;
    }

    public function record_session_data($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function recover_session_data($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return null;
        }
    }

    public function get_status()
    {
        return $this->status;
    }
}

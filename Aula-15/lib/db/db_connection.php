<?php
class DbConnection
{
    private $ip;
    private $port;
    private $user;
    private $password;
    private $database;
    private $dbConn;
    private $status;

    public function __construct()
    {
        $this->initInstance();
    }

    private function initInstance()
    {
        $this->user = 'postgres';
        $this->port = 5432;
        $this->ip = 'localhost';
        $this->disconnect();
    }

    private function setStatus($sStatus)
    {
        $this->status = $sStatus;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function connect()
    {
        try {
            $this->setStatus('connecting');
            $this->dbConn = pg_connect("host=" . $this->ip . " port=" . $this->port . " dbname=" . $this->database . " user=" . $this->user . " password=" . $this->password);
            if ($this->dbConn) {
                $this->setStatus('connected');
                return true;
            }
        } catch (Exception $ex) {
            $this->setStatus('Error: ' . $ex->getMessage());
        }
    }

    public function getInternalConnection()
    {
        return $this->dbConn;
    }

    public function disconnect()
    {
        if ($this->dbConn) {
            pg_close($this->dbConn);
        }
        $this->setStatus('disconnected');
    }

    public function setIp($sIp)
    {
        $this->ip = $sIp;
    }

    public function setPort($iport)
    {
        $this->port = $iport;
    }

    public function setUser($sUser)
    {
        $this->user = $sUser;
    }

    public function setPassword($sPassword)
    {
        $this->password = $sPassword;
    }

    public function setDatabase($sDatabase)
    {
        $this->database = $sDatabase;
    }
}

<?php
require_once 'db_connection.php';

class Query
{
    private $sql;
    private $registries;
    private $connection;
    private $queryResource;

    public function __construct($oConn)
    {
        $this->registries = 0;
        $this->connection = $oConn;
    }

    public function open()
    {
        $this->queryResource = pg_query($this->connection->getInternalConnection(), $this->sql);
        if ($this->queryResource) {
            $this->registries = pg_num_rows($this->queryResource);
            return true;
        }
        return false;
    }

    public function getNextRow()
    {
        $row = pg_fetch_assoc($this->queryResource);
        if ($row) {
            return $row;
        }
        return false;
    }

    public function update($table, $cols, $values, $where)
    {
        for ($field = 1; $field <= count($cols); $field++) {
            $varCol = "$" . $field;
        }

        $result = pg_query_params(
            $this->connection->getInternalConnection(),
            "UPDATE " . $table . " SET " . $cols . " = " . $varCol . " WHERE " . $where,
            $values
        );
        return $result;
    }

    public function insert($table, $cols, $values)
    {
        $columnNames = implode(', ', $cols);
        $placeholders = [];
        for ($i = 1; $i <= count($values); $i++) {
            $placeholders[] = '$' . $i;
        }
        $valuePlaceholders = implode(', ', $placeholders);

        $sql = "INSERT INTO " . $table . " (" . $columnNames . ") VALUES (" . $valuePlaceholders . ")";

        $result = pg_query_params(
            $this->connection->getInternalConnection(),
            $sql,
            $values
        );
        return $result;
    }

    public function delete($table, $where, $values = [])
    {
        $sql = "DELETE FROM " . $table . " WHERE " . $where;

        if (!empty($values)) {
            $result = pg_query_params(
                $this->connection->getInternalConnection(),
                $sql,
                $values
            );
        } else {
            $result = pg_query(
                $this->connection->getInternalConnection(),
                $sql
            );
        }
        return $result;
    }

    public function getRegistries()
    {
        return $this->registries;
    }

    public function setSql($sSql)
    {
        $this->sql = $sSql;
    }
}

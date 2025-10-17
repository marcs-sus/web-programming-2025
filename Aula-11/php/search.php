<?php
require_once 'pgsql-funcs.php';

$connection = connectToDatabase();

if ($connection) {
    try {
        // List all data from table that matches the search
        $searchValue = $_GET['search'];

        listPeopleAsTable(searchPeople($connection, $searchValue));
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
} else {
    echo "Failed to connect to the database: " . pg_last_error();
}

disconnectFromDatabase($connection);

<?php
require_once 'pgsql-funcs.php';

$connection = connectToDatabase();

if ($connection) {
    try {
        echo "Connected to the database successfully!<br>";

        // Data to insert from the form
        $data = [
            'pesnome' => $_POST['pesnome'],
            'pessobrenome' => $_POST['pessobrenome'],
            'pesemail' => $_POST['pesemail'],
            'pespassword' => password_hash($_POST['pespassword'], PASSWORD_DEFAULT),
            'pescidade' => $_POST['pescidade'],
            'pesestado' => $_POST['pesestado'],
        ];

        // Insert data into the table
        insertPerson($connection, $data);

        // List all data from table
        listPeopleAsTable(fetchPeople($connection));
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
} else {
    echo "Failed to connect to the database: " . pg_last_error();
}


disconnectFromDatabase($connection);

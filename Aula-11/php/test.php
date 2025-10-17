<?php
$connectionStr = "host=localhost port=5432 dbname=php user=postgres password=postgres";
$connection = pg_connect($connectionStr);

if ($connection) {
    echo "Connected to the database successfully!<br>";

    // Simple query to count the number of records in a table
    $result = pg_query($connection, "SELECT COUNT(*) AS QTD FROM TBPESSOA");

    if ($result) {
        $row = pg_fetch_assoc($result);

        echo "\nNumber of tables in the database: " . $row['qtd'];
    } else {
        echo "\nQuery error: " . pg_last_error($connection);
    }

    // Insert data into the table
    $data = [
        'pesnome' => 'John',
        'pessobrenome' => 'Sql',
        'pesemail' => 'Gj0kZ@example.com',
        'pespassword' => password_hash('123456', PASSWORD_DEFAULT),
        'pescidade' => 'New York',
        'pesestado' => 'NY',
    ];

    $resultInsert = pg_query_params(
        $connection,
        "INSERT INTO TBPESSOA (
                            pesnome,
                            pessobrenome,
                            pesemail,
                            pespassword,
                            pescidade,
                            pesestado
                        )
        VALUES ($1, $2, $3, $4, $5, $6)",
        array_values($data)
    );
} else {
    echo "Failed to connect to the database: " . pg_last_error();
}

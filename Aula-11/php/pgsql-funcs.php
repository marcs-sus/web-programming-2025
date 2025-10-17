<?php
function connectToDatabase()
{
    $connectionStr = "host=localhost port=5432 dbname=php user=postgres password=postgres";
    $connection = pg_connect($connectionStr);

    if (!$connection) {
        exit("Failed to connect to the database: " . pg_last_error());
    }

    return $connection;
}

function disconnectFromDatabase($connection)
{
    pg_close($connection);
}

function insertPerson($connection, $data)
{
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

    if (!$resultInsert) {
        echo "Failed to insert data: " . pg_last_error();
    }
}

function fetchPeople($connection)
{
    $result = pg_query($connection, "SELECT * FROM TBPESSOA");

    if (!$result) {
        echo "Failed to retrieve data: " . pg_last_error();
    }

    return $result;
}

function searchPeople($connection, $searchValue)
{
    $query = "SELECT * FROM TBPESSOA WHERE pesnome ILIKE $1 OR pessobrenome ILIKE $2";
    $result = pg_query_params($connection, $query, ['%' . $searchValue . '%', '%' . $searchValue . '%']);

    if (!$result) {
        echo "Failed to search data: " . pg_last_error();
    }

    return $result;
}

function listPeopleAsTable($result)
{
    $row = pg_fetch_assoc($result);

    echo "<table border='1'><tr>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>E-mail</th>
            <th>Cidade</th>
            <th>Estado</th>
        </tr>";

    if ($result) {
        while ($row) {
            echo "<tr>
                    <td>" . $row['pesnome'] . "</td>
                    <td>" . $row['pessobrenome'] . "</td>
                    <td>" . $row['pesemail'] . "</td>
                    <td>" . $row['pescidade'] . "</td>
                    <td>" . $row['pesestado'] . "</td>
                </tr>";
            $row = pg_fetch_assoc($result);
        }
        echo "</table>";
    } else {
        echo "Failed to retrieve data: " . pg_last_error();
    }
}

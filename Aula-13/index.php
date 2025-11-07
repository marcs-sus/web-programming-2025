<?php
require_once 'model/person.php';
require_once 'model/contact.php';

$people = [
    new Person(
        'John',
        'Doe',
        new DateTime('1990-01-01'),
        '123456789',
        1,
        [
            new Contact('email', '5dIwI@example.com', 1),
            new Contact('phone', '+1234567890', 2)
        ],
        '123 Main St'
    ),
    new Person(
        'Jane',
        'Doe',
        new DateTime('1995-01-01'),
        '987654321',
        2,
        [
            new Contact('email', 'oGh6O@example.com', 1),
            new Contact('phone', '+9876543210', 2)
        ],
        '456 Elm St'
    ),
    new Person(
        'Bob',
        'Smith',
        new DateTime('1980-01-01'),
        '555555555',
        3,
        [
            new Contact('email', 'KXW2B@example.com', 1),
            new Contact('phone', '+5555555555', 2)
        ],
        '789 Oak St'
    )
];

foreach ($people as $person) {
    echo $person->getCompleteName() . "<br>";
    echo $person->getAge() . "<br>";
    echo $person->getId() . "<br>";
    echo $person->getType() . "<br>";
    echo $person->getAddress() . "<br>";
    foreach ($person->getContact() as $contact) {
        echo $contact->getType() . ": " . $contact->getValue() . "<br>";
    }
    echo "<hr>";
}

$data_dir = 'data/';
$txt_path = 'data/data.txt';

if (file_exists($txt_path)) {
    touch($txt_path);
}

file_put_contents($txt_path, serialize($people));

foreach ($people as $person) {
    file_put_contents($data_dir . $person->getCompleteName() . '.json', $person->toJson());
}

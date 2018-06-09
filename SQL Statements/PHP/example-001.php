<?php
    // Example #1: in an SQL statement
    // Example #1: in an SQL statement
    // Example #1: in an SQL statement
    $new_user = array (
        "firstname" => $_POST['firstname'],
        "lastname" => $_POST['lastname'],
        "email" => $_POST['email'],
        "age" => $_POST['age'],
        "location" => $_POST['location']
    );

    /**
     *  Execute the following SQL code:
     *  INSERT INTO users (firstname, lastname, email, age, location)
     *      VALUES (:firstname, :lastname, ":email, :age, :location)
     */

    $sql = sprintf( // sprintf() allows: INSERT INTO x (y) values (:z)
        "INSERT INTO %s (%s) VALUES (%s)",
        "users",
        implode(", ", array_keys($new_user)),
        ":". implode(", :", array_keys($new_user))
    );

    print_r($sql);
?>

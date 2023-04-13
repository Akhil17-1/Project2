<?php
// Create an array of user information
$users = array(
    1 => array(
        'name' => 'John Doe',
        'email' => 'johndoe@example.com',
        'phone' => '555-555-1234',
        'address' => '123 Main St, Anytown, USA'
    ),
    2 => array(
        'name' => 'Jane Smith',
        'email' => 'janesmith@example.com',
        'phone' => '555-555-5678',
        'address' => '456 Oak Ave, Anycity, USA'
    ),
    3 => array(
        'name' => 'Bob Johnson',
        'email' => 'bobjohnson@example.com',
        'phone' => '555-555-9876',
        'address' => '789 Elm St, Anyville, USA'
    )
);

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Look for the user with the corresponding ID in the $users array
    if (isset($users[$id])) {
        // Display the user information on the page
        $user = $users[$id];
        echo '<h1>' . $user['name'] . '</h1>';
        echo '<p>Email: ' . $user['email'] . '</p>';
        echo '<p>Phone: ' . $user['phone'] . '</p>';
        echo '<p>Address: ' . $user['address'] . '</p>';
    } else {
        // If the user is not found, display an error message
        echo 'User not found';
    }
} else {
    // If the 'id' parameter is not set, display all user profiles
    foreach ($users as $id => $user) {
        echo '<h1>' . $user['name'] . '</h1>';
        echo '<a href="?id=' . $id . '">View profile</a>';
        echo '<hr>';
    }
}
?>

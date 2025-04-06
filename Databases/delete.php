<?php

$pdo = require 'database.php';

if (isset($_GET['id'])) {
    $contactId = $_GET['id'];

    $contactId = $_GET['id'];

    $stmt = $pdo->prepare("SELECT Image FROM contacts WHERE id = :id");
    $stmt->execute([':id' => $contactId]);

    $contact = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($contact && $contact['image']) {
        $imagePath = 'Uploads/' . $contact['image'];
        if (file_exists($imagePath)) {
            unlink($imagePath); 
        }
    }

    $stmt = $pdo->prepare("DELETE FROM contacts WHERE id = :id");
    $stmt->execute([':id' => $contactId]);

    echo "Contact Deleted";
}
<?php
    $contactsFile = "contacts.js";
    $contacts = file_exists($contactsFile) ? json_decode(file_get_contents($contactsFile), true) : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Contact List</h2>
        <a href="create.php" class="btn btn-primary">Create Contact</a>
    </div>
    
    <div class="row">
        <?php if (!empty($contacts)): ?>
            <?php foreach ($contacts as $contact): ?>
                <div class="col-md-4">
                    <div class="card mb-3 shadow-sm">
                        <img src="<?php echo htmlspecialchars($contact['image']); ?>" class="card-img-top" alt="Contact Image" height="200" style="object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($contact['name']); ?></h5>
                            <p class="card-text">
                                <strong>Email:</strong> <?php echo htmlspecialchars($contact['email']); ?><br>
                                <strong>Phone:</strong> <?php echo htmlspecialchars($contact['phone']); ?>
                            </p>
                            <a href="delete.php?id=<?php echo htmlspecialchars($contact['id']); ?>" class="btn btn-danger w-100">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">No contacts found.</p>
        <?php endif; ?>
    </div>
</body>
</html>
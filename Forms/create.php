<?php
/*
    echo "<pre>";
    var_dump($_SERVER, $_GET, $_POST);
    echo "</pre>";
*/
/*
    echo "<pre>";
    var_dump($_FILES);
    echo "</pre>";
*/

    $uploadsDir = "uploads/";
    $contactsFile = "contacts.js";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = filter_input(INPUT_POST,"name", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL);
        $phone = filter_input(INPUT_POST,"phone", FILTER_SANITIZE_NUMBER_INT);

        if ($name && $email && $phone && isset($_FILES['image'])) {

            if (!is_dir($uploadsDir)) {
                mkdir($uploadsDir, 0777, true);
            }

            $imageName = time() . "_" . basename($_FILES["image"]["name"]);
            $imagePath = $uploadsDir . $imageName;
    
            if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                $contacts = file_exists($contactsFile) ? 
                            json_decode(file_get_contents($contactsFile), true)
                            : [];
    
                $contacts[] = [
                    'id' => rand(1000000000,2000000000),
                    'name' => $name,
                    "email" => $email,
                    "phone" => $phone,
                    "image" => $imagePath
                ];
    
                file_put_contents($contactsFile, json_encode($contacts, JSON_PRETTY_PRINT));
                echo "Valid";
            } 
            else {
                echo "Image upload failed";
            }
        } 
        else {
            echo "Invalid input!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="text-center">Contact Form</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Name:</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Phone:</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Image:</label>
                <input type="file" name="image" class="form-control" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Add Contact</button>
        </form>
        <br>
        <a href="form.php" class="btn btn-secondary w-100">Back</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
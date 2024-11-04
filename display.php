<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Data</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>

        table {
            width: -webkit-fill-available;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    
    <h1 style=" text-align: center;" >Submitted Data</h1>
    <?php
    // Save data if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);

        // Open or create data.txt file and append data
        $file = fopen("data.txt", "a");
        $data = "$name|$email|$phone|$message\n";
        fwrite($file, $data);
        fclose($file);
    }

    // Display data from the file
    if (file_exists("data.txt")) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Message</th></tr>";
        
        $file = fopen("data.txt", "r");
        while (($line = fgets($file)) !== false) {
            $line = trim($line); // Remove whitespace from the line
            if (empty($line)) {
                continue; // Skip empty lines
            }

            // Split the line and assign to variables if it has all fields
            $parts = explode("|", $line);
            if (count($parts) === 4) {
                list($name, $email, $phone, $message) = $parts;
                echo "<tr>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$phone</td>
                    <td>$message</td>
                </tr>";
            }
        }
        fclose($file);

        echo "</table>";
    } else {
        echo "<p>No data submitted yet.</p>";
    }
    ?>

</body>
</html>

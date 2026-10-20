
<?php
session_start();

// Accept POST requests only
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

// All required form fields
$fields = [
    "name" => "Full Name",
    "pob" => "Place of Birth",
    "dob" => "Date of Birth",
    "address" => "Address",
    "gender" => "Gender",
    "telephone" => "Telephone",
    "email" => "Email",
    "parent_name" => "Parent Name",
    "parent_telephone" => "Parent Telephone",
    "relationship" => "Relationship",
    "student_id" => "Student ID",
    "faculty" => "Faculty",
    "department" => "Department",
    "class" => "Class",
    "registration_date" => "Registration Date"
];

$data = [];
$error = "";

// Validate required fields
foreach ($fields as $key => $label) {
    if (
        !isset($_POST[$key]) ||
        !is_string($_POST[$key]) ||
        trim($_POST[$key]) === ""
    ) {
        $error = "Please complete the " . $label . " field.";
        break;
    }

    $data[$key] = trim($_POST[$key]);
}

// Validate student name
if ($error === "") {
    if (!preg_match("/^[\p{L} ]+$/u", $data["name"])) {
        $error = "Full Name must contain letters and spaces only.";
    }
}

// Validate email
if ($error === "") {
    if (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email address.";
    }
}

// Validate gender
if ($error === "") {
    if (!in_array($data["gender"], ["Male", "Female"], true)) {
        $error = "Please select a valid gender.";
    }
}

// Validate relationship
if ($error === "") {
    if (!in_array(
        $data["relationship"],
        ["Father", "Mother", "Guardian", "Other"],
        true
    )) {
        $error = "Please select a valid parent relationship.";
    }
}

// Validate date format
function validDate($date) {
    $dateObject = DateTime::createFromFormat("!Y-m-d", $date);

    return $dateObject &&
        $dateObject->format("Y-m-d") === $date;
}

if ($error === "") {
    if (!validDate($data["dob"])) {
        $error = "Please enter a valid date of birth.";
    } elseif (!validDate($data["registration_date"])) {
        $error = "Please enter a valid registration date.";
    } elseif ($data["dob"] > date("Y-m-d")) {
        $error = "Date of birth cannot be in the future.";
    } elseif ($data["registration_date"] > date("Y-m-d")) {
        $error = "Registration date cannot be in the future.";
    } elseif ($data["registration_date"] < $data["dob"]) {
        $error = "Registration date cannot be before date of birth.";
    }
}

// Validate image upload
$imageUrl = "";

if ($error === "") {
    if (
        !isset($_FILES["image"]) ||
        !isset($_FILES["image"]["error"]) ||
        $_FILES["image"]["error"] !== UPLOAD_ERR_OK
    ) {
        $error = "Please upload a student image.";
    }
}

if ($error === "") {
    $image = $_FILES["image"];

    if ($image["size"] > 2 * 1024 * 1024) {
        $error = "Image size must not exceed 2 MB.";
    } else {
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $imageType = $finfo->file($image["tmp_name"]);

        $allowedTypes = [
            "image/jpeg" => "jpg",
            "image/png" => "png",
            "image/gif" => "gif",
            "image/webp" => "webp"
        ];

        if (!isset($allowedTypes[$imageType])) {
            $error = "Invalid image. Upload JPG, PNG, GIF or WEBP.";
        }
    }
}

// Show an error message if validation fails
function clean($value) {
    return htmlspecialchars(
        (string)$value,
        ENT_QUOTES,
        "UTF-8"
    );
}

if ($error !== "") {
    http_response_code(400);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Error</title>

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
        >
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container py-5">
            <div class="registration-card">
                <h2 class="text-danger">Registration Error</h2>

                <div class="alert alert-danger mt-3">
                    <?= clean($error) ?>
                </div>

                <a href="index.php" class="btn btn-primary">
                    Go Back to Form
                </a>
            </div>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Save the uploaded image after validation
$uploadDirectory = __DIR__ . "/uploads/";

if (!is_dir($uploadDirectory)) {
    if (!mkdir($uploadDirectory, 0755, true)) {
        die("Unable to create the uploads folder.");
    }
}

$imageName = bin2hex(random_bytes(16))
    . "." . $allowedTypes[$imageType];

$imagePath = $uploadDirectory . $imageName;

if (!move_uploaded_file($image["tmp_name"], $imagePath)) {
    die("Image upload failed. Please try again.");
}

$imageUrl = "uploads/" . $imageName;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registration Result</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container py-5">
    <div class="registration-card">

        <!-- Success Message -->
        <div class="text-center mb-4">
            <h2 class="text-success">Registration Successful!</h2>

            <p>Your student information has been submitted.</p>

            <img
                src="<?= clean($imageUrl) ?>"
                alt="Student Image"
                width="130"
                height="130"
                style="object-fit: cover; border-radius: 50%;"
            >
        </div>

        <!-- Student Information -->
        <h4 class="section-title">Student Information</h4>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>Information</th>
                        <th>Details</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($fields as $key => $label): ?>
                        <tr>
                            <th><?= clean($label) ?></th>
                            <td><?= clean($data[$key]) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Action Buttons -->
        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-primary">
                Register Another Student
            </a>

            <button
                type="button"
                onclick="window.print()"
                class="btn btn-secondary"
            >
                Print Details
            </button>
        </div>

    </div>
</div>

</body>
</html>

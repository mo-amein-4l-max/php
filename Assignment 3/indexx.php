
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration Form</title>

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

        <!-- Page Heading -->
        <div class="card-header bg-primary text-white text-center py-3">
            <h2>Student Registration Form</h2>
            <p>Jamhuriya University of Science & Technology</p>
            <p class="text-muted">Student Information and Registration</p>
        </div>


        <form
            action="result.php"
            method="POST"
            enctype="multipart/form-data"
        >

            <!-- Personal Information -->
            <h4 class="section-title">Personal Information</h4>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Full Name</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        placeholder="Enter full name"
                        required
                    >
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Place of Birth (POB)</label>
                    <input
                        type="text"
                        name="pob"
                        class="form-control"
                        placeholder="Enter place of birth"
                        required
                    >
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Date of Birth (DOB)</label>
                    <input
                        type="date"
                        name="dob"
                        class="form-control"
                        required
                    >
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Address</label>
                    <input
                        type="text"
                        name="address"
                        class="form-control"
                        placeholder="Enter address"
                        required
                    >
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Gender</label>
                    <select name="gender" class="form-select" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Telephone</label>
                    <input
                        type="tel"
                        name="telephone"
                        class="form-control"
                        placeholder="Enter telephone"
                        required
                    >
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Email</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Enter email student"
                        required
                    >
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Student Image</label>
                    <input
                        type="file"
                        name="image"
                        class="form-control"
                        accept="image/png,image/jpeg,image/gif,image/webp"
                        required
                    >
                    <small class="text-muted">
                        Allowed formats: JPG, PNG, GIF and WEBP
                    </small>
                </div>

            </div>

            <!-- Parent Information -->
            <h4 class="section-title mt-4">Parent Information</h4>

            <div class="row">

                <div class="col-md-4 mb-3">
                    <label class="form-label">Parent Name</label>
                    <input
                        type="text"
                        name="parent_name"
                        class="form-control"
                        placeholder="Enter parent name"
                        required
                    >
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Parent Telephone</label>
                    <input
                        type="tel"
                        name="parent_telephone"
                        class="form-control"
                        placeholder="Enter parent telephone"
                        required
                    >
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Relationship</label>
                    <select
                        name="relationship"
                        class="form-select"
                        required
                    >
                        <option value="">Select Relationship</option>
                        <option value="Father">Father</option>
                        <option value="Mother">Mother</option>
                        <option value="Guardian">Guardian</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

            </div>

            <!-- Academic Information -->
            <h4 class="section-title mt-4">Academic Information</h4>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Student ID</label>
                    <input
                        type="text"
                        name="student_id"
                        class="form-control"
                        placeholder="Enter student ID"
                        required
                    >
                </div>

                <!-- Faculty Dropdown -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Faculty</label>

                    <select
                        name="faculty"
                        id="faculty"
                        class="form-select"
                        required
                    >
                        <option value="">Select Faculty</option>
                        <option value="Faculty of Computer & IT">
                            Faculty of Computer & IT
                        </option>
                        <option value="Faculty of Engineering">
                            Faculty of Engineering
                        </option>
                        <option value="Faculty of Medicine & Health Sciences">
                            Faculty of Medicine & Health Sciences
                        </option>
                        <option value="Faculty of Economics & Management">
                            Faculty of Economics & Management
                        </option>
                        <option value="Faculty of Veterinary & Agricultural Sciences">
                            Faculty of Veterinary & Agricultural Sciences
                        </option>
                        <option value="Faculty of Education">
                            Faculty of Education
                        </option>
                    </select>
                </div>

                <!-- Department Dropdown -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Department</label>

                    <select
                        name="department"
                        id="department"
                        class="form-select"
                        required
                    >
                        <option value="">First Select Faculty</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Class</label>
                    <input
                        type="text"
                        name="class"
                        class="form-control"
                        placeholder="Enter class"
                        required
                    >
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Registration Date</label>
                    <input
                        type="date"
                        name="registration_date"
                        class="form-control"
                        required
                    >
                </div>

            </div>

            <!-- Form Buttons -->
            <div class="text-center mt-4">

                <button
                    type="submit"
                    class="btn btn-primary px-5"
                >
                    Register Student
                </button>

                <button
                    type="reset"
                    class="btn btn-secondary px-4"
                >
                    Clear Form
                </button>

            </div>

        </form>

    </div>
</div>

<!-- Department Selection Script -->
<script>
const departments = {
    "Faculty of Computer & IT": [
        "Computer Science",
        "Information Technology",
        "Software Engineering"
    ],

    "Faculty of Engineering": [
        "Civil Engineering",
        "Electrical Engineering",
        "Mechanical Engineering"
    ],

    "Faculty of Medicine & Health Sciences": [
        "Medicine",
        "Nursing",
        "Public Health"
    ],

    "Faculty of Economics & Management": [
        "Business Administration",
        "Accounting",
        "Economics"
    ],

    "Faculty of Veterinary & Agricultural Sciences": [
        "Veterinary Medicine",
        "Agriculture"
    ],

    "Faculty of Education": [
        "Educational Management",
        "Teacher Education"
    ]
};

const facultySelect = document.getElementById("faculty");
const departmentSelect = document.getElementById("department");

facultySelect.addEventListener("change", function () {

    const selectedFaculty = this.value;

    departmentSelect.innerHTML =
        '<option value="">Select Department</option>';

    if (departments[selectedFaculty]) {

        departments[selectedFaculty].forEach(function (department) {

            const option = document.createElement("option");

            option.value = department;
            option.textContent = department;

            departmentSelect.appendChild(option);

        });

    }

});
</script>

</body>
</html>

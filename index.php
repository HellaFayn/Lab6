<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            width: 400px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .required {
            color: red;
        }
        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }
        .output-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Online Registration Form</h2>

    <?php
    class FormInfoClass {
        private $lastName;
        private $firstName;
        private $middleInitial;
        private $age;
        private $contactNo;
        private $email;
        private $address;

        // Setters
        public function setLastName($lastName) { $this->lastName = $lastName; }
        public function setFirstName($firstName) { $this->firstName = $firstName; }
        public function setMiddleInitial($middleInitial) { $this->middleInitial = $middleInitial; }
        public function setAge($age) { $this->age = $age; }
        public function setContactNo($contactNo) { $this->contactNo = $contactNo; }
        public function setEmail($email) { $this->email = $email; }
        public function setAddress($address) { $this->address = $address; }

        // Getters
        public function getLastName() { return $this->lastName; }
        public function getFirstName() { return $this->firstName; }
        public function getMiddleInitial() { return $this->middleInitial; }
        public function getAge() { return $this->age; }
        public function getContactNo() { return $this->contactNo; }
        public function getEmail() { return $this->email; }
        public function getAddress() { return $this->address; }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $formData = new FormInfoClass();
        $formData->setLastName($_POST['last_name']);
        $formData->setFirstName($_POST['first_name']);
        $formData->setMiddleInitial($_POST['middle_initial']);
        $formData->setAge($_POST['age']);
        $formData->setContactNo($_POST['contact_no']);
        $formData->setEmail($_POST['email']);
        $formData->setAddress($_POST['address']);


        echo "<div class='output-container'>";
        echo "<h3>Submitted Data:</h3>";
        echo "Last Name: " . htmlspecialchars($formData->getLastName()) . "<br>";
        echo "First Name: " . htmlspecialchars($formData->getFirstName()) . "<br>";
        echo "Middle Initial: " . htmlspecialchars($formData->getMiddleInitial()) . "<br>";
        echo "Age: " . htmlspecialchars($formData->getAge()) . "<br>";
        echo "Contact No.: " . htmlspecialchars($formData->getContactNo()) . "<br>";
        echo "Email: " . htmlspecialchars($formData->getEmail()) . "<br>";
        echo "Address: " . htmlspecialchars($formData->getAddress()) . "<br>";
        echo "</div>";
    } else {
    ?>


    <form action="index.php" method="POST">
        <div class="form-group">
            <label for="last_name">Last Name<span class="required">*</span></label>
            <input type="text" id="last_name" name="last_name" required>
        </div>
        <div class="form-group">
            <label for="first_name">First Name<span class="required">*</span></label>
            <input type="text" id="first_name" name="first_name" required>
        </div>
        <div class="form-group">
            <label for="middle_initial">Middle Initial<span class="required"></span></label>
            <input type="text" id="middle_initial" name="middle_initial">
        </div>
        <div class="form-group">
            <label for="age">Age<span class="required">*</span></label>
            <input type="number" id="age" name="age" required>
        </div>
        <div class="form-group">
            <label for="contact_no">Contact No.<span class="required">*</span></label>
            <input type="text" id="contact_no" name="contact_no" required>
        </div>
        <div class="form-group">
            <label for="email">Email<span class="required">*</span></label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="address">Address<span class="required">*</span></label>
            <input type="text" id="address" name="address" required>
        </div>
        <button type="submit" class="submit-btn">Submit</button>
    </form>

    <?php
    }
    ?>
</div>

</body>
</html>
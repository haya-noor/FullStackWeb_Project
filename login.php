$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Student_db";

$firstname = $_POST['firstname'];
$lasttname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$password = $_POST['password'];

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connected successfully";
}

$sql = "INSERT INTO Student_db (firstname, lastname, email, password) values (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $firstname, $lastname, $email, $password);
$stmt->execute();
$stmt->close();
$conn->close();



<?php
$host = "localhost";
$dbname = "contact_us_in";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['textarea']);

        $stmt = $conn->prepare("INSERT INTO messages (email, message) VALUES (:email, :message)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        if ($stmt->execute()) {
            echo "<script>alert('Form submitted successfully!');</script>";
        } else {
            echo "<script>alert('Error saving your message');</script>";
        }
    }
} catch (PDOException $e) {
    echo "<script>alert('Database error: " . $e->getMessage() . "');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="Style.css" />
  </head>
  <body>
    <div class="form-container">
      <h2 class="form-title">Contact Us</h2>
      <form class="form" method="post">
        <div class="form-group">
          <label for="email">Company Email</label>
          <input
            required
            name="email"
            id="email"
            type="email"
            placeholder="Enter your email"
          />
        </div>
        <div class="form-group">
          <label for="textarea">How Can We Help You?</label>
          <textarea
            required
            id="textarea"
            name="textarea"
            placeholder="Write your message here..."
          ></textarea>
        </div>
        <button type="submit" class="form-submit-btn">Submit</button>
      </form>
    </div>
  </body>
</html>

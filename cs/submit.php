<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yif_news";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "insert into `tut_registers`(`name`, `email`, `age`, `mobile`, `organization`, `club`) values('" . $_POST['name'] . "', '" . $_POST['email'] . "', " . $_POST['age'] . ", " . $_POST['mobile'] . ", '" . $_POST['organization'] . "', '" . $_POST['club'] . "')";

$to = "somebody@example.com, somebodyelse@example.com";
$subject = "25 Under 25";

$message = `
<html>
<head>
<title>25 Under 25</title>
</head>
<body>
<p>Hello `.$_POST['name'].`!</p>
<p>Thank you for registering for Young India Foundation's National Youth Day Celebrations. Join us and our exceptional 25 Under 25 honorees as we recognize their exceptional skill, work and contribution to India's nation building.</p>
<p>We hope to see you at <a href="https://goo.gl/maps/x6G8VPP5PTN5xs7YA" target="_blank">India International Centre</a> starting 6 p.m. onwards.</p>
<br>
<p>Excited to meet you,</p>
<br>
<p>Young India Foundation</p>
</body>
</html>
`;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <no-reply@yif.com>' . "\r\n";
$headers .= 'Cc: '.$_POST['email']. "\r\n";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  mail($to,$subject,$message,$headers);
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
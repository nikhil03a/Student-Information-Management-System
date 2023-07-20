<html>

<head>
    <title>Add Subject</title>
    <link rel="icon" href="st.jpeg">
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Rokkitt:wght@100;300&display=swap"
        rel="stylesheet" />
    <style>
        html {
            background-image: url('tpage-bg3.webp');
        }

        h1 {
            font-family: 'Patrick Hand';
            font-size: 3rem;
            padding-left: 40px;
            color: #00A19D;
            padding-top: 30px;
            padding-bottom: 50px;
            font-weight: bold;
        }

        h2 {
            font-family: 'IM Fell English SC', serif;
            padding-left: 40px;
            color: red;
            padding-top: 30px;
            font-size: 1.7rem;
        }

        p {
            font-family: 'Rokkitt', serif;
            padding-left: 40px;
            font-size: 1.5rem;
        }

        @media (max-width:1100px) {
            h1 {
                font-size: 2rem;
            }

            .labl {
                font-size: 1.2rem;
            }

            .inpt {
                font-size: 1rem;
            }
    </style>
</head>
<?php
$scode = $_POST['scode'];
session_start();
$username = $_SESSION['username'];
$conn = new mysqli('localhost', 'root', '', 'project');
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into subjects(course,subject)
    values(?,?)");
    $stmt->bind_param("ss", $username, $scode);
    $stmt->execute();

}
$alterQuery = "ALTER TABLE $username 
                   ADD COLUMN {$scode}ass INT,
                   ADD COLUMN {$scode}mid INT,
                   ADD COLUMN {$scode}ed INT,
                   ADD COLUMN {$scode}att INT";
if ($conn->query($alterQuery) === TRUE) { ?>
    <h1>
        <?php echo "Subject Added Successfully...\n"; ?>
    </h1>
    <?php
    mysqli_close($conn);
} else {
    
}
?>

</html>
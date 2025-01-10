<?php
// Database connection
$host = 'localhost';
$dbname = 'speedcourse';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

// Fetch courses
$stmt = $pdo->query("SELECT * FROM courses ORDER BY id");
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeedCourse</title>
    <link rel="stylesheet" href="Kulit.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>SpeedCourse</a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="courses.html">Courses</a></li>
                    <li><a href="tutors.php">Tutors</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="wrapper">
        <?php foreach($courses as $course): ?>
            <section>
                <div id="<?php echo htmlspecialchars($course['image_class']); ?>" class="box">
                </div>
                <div class="kolom">
                    <p class="deskripsi"><?php echo htmlspecialchars($course['category']); ?></p>
                    <h2><?php echo htmlspecialchars($course['title']); ?></h2>
                    <p><?php echo nl2br(htmlspecialchars($course['description'])); ?></p>
                    <p><a href="" class="tbl-biru">Rp. <?php echo number_format($course['price'], 0, ',', '.'); ?> / <?php echo htmlspecialchars($course['duration']); ?></a></p>
                </div>
            </section>
        <?php endforeach; ?>

        <!-- Contact section remains the same -->
        <div id="contact">
            <div class="wrapper">
                <div class="footer">
                    <div class="footer-section">
                        <h3>About</h3>
                        <p>SpeedCourse Merupakan platform course programming dengan Mentor berpengalaman</p>
                    </div>
                    <div class="footer-section">
                        <h3>Contact</h3>
                        <p>Karah Agung</p>
                        <p>Kode Pos: 6666</p>
                        <p>📞 : +62 8126 7849 </p>
                        <p>📧 : speedcourseid.com</p>
                        <p>Jl. Jambu, Karah Agung, Surabaya. Kode Pos : 60166</p>
                    </div>
                    <div class="footer-section">
                        <h3>Social</h3>
                        <p><b>YouTube: </b>SpeedCourseYT</p>
                        <p><b>Instagram: </b>@speedcourse.id</p>
                        <p><b>Facebook: </b>speedcourseid</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="copyright">
            <div class="wrapper">
                &copy; 2024. <b>SpeedCourse</b> All Rights Reserved.
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeedCourse - Our Tutors</title>
    <link rel="stylesheet" href="Kulit.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <style>
        .tutor-container {
            min-height: screen;
            background: linear-gradient(to bottom, #EFF6FF, #FFFFFF);
            padding: 3rem 1rem;
        }

        .content-wrapper {
            max-width: 1280px;
            margin: 0 auto;
        }

        .header-section {
            text-align: center;
            margin-bottom: 4rem;
        }

        .header-section h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1E3A8A;
            margin-bottom: 1rem;
        }

        .header-section p {
            font-size: 1.125rem;
            color: #4B5563;
            max-width: 42rem;
            margin: 0 auto;
        }

        .tutor-card {
            background: white;
            border-radius: 0.5rem;
            overflow: hidden;
            margin-bottom: 3rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .tutor-card:hover {
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
        }

        .tutor-content {
            display: flex;
            flex-direction: column;
        }

        @media (min-width: 768px) {
            .tutor-content {
                flex-direction: row;
            }
        }

        .tutor-image-container {
            width: 100%;
        }

        @media (min-width: 768px) {
            .tutor-image-container {
                width: 33.333333%;
            }
        }

        .tutor-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 1;
        }

        @media (min-width: 768px) {
            .tutor-image {
                aspect-ratio: auto;
            }
        }

        .tutor-info {
            padding: 2rem;
            flex: 1;
        }

        .tutor-name {
            font-size: 1.875rem;
            font-weight: 700;
            color: #1E3A8A;
            margin-bottom: 0.5rem;
        }

        .tutor-role {
            font-size: 1.25rem;
            color: #2563EB;
            margin-bottom: 0.5rem;
        }

        .tutor-institution {
            color: #4B5563;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .tutor-bio {
            color: #4B5563;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .expertise-section h3 {
            font-size: 1.125rem;
            font-weight: 600;
            color: #1E3A8A;
            margin-bottom: 0.75rem;
        }

        .expertise-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .expertise-tag {
            background-color: #DBEAFE;
            color: #1E40AF;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.875rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-icon {
            padding: 0.5rem;
            color: #4B5563;
            transition: color 0.3s ease;
        }

        .social-icon:hover {
            color: #2563EB;
        }
    </style>
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

    <div class="tutor-container">
        <div class="content-wrapper">
            <div class="header-section">
                <h1>Meet Our Expert Tutors</h1>
                <p>Learn from industry professionals with years of experience in their respective fields</p>
            </div>

            <?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "speedcourse_web";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                // Fetch all tutors
                $stmt = $conn->prepare("SELECT * FROM tutors ORDER BY id ASC");
                $stmt->execute();
                $tutors = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                // Display each tutor
                foreach ($tutors as $tutor) {
                    ?>
                    <div class="tutor-card">
                        <div class="tutor-content">
                            <div class="tutor-image-container">
                                <img 
                                    src="<?php echo htmlspecialchars($tutor['image_url']); ?>" 
                                    alt="<?php echo htmlspecialchars($tutor['name']); ?>"
                                    class="tutor-image"
                                />
                            </div>
                            
                            <div class="tutor-info">
                                <h2 class="tutor-name"><?php echo htmlspecialchars($tutor['name']); ?></h2>
                                <p class="tutor-role"><?php echo htmlspecialchars($tutor['role'] ?? 'Programming Instructor'); ?></p>
                                <p class="tutor-institution">
                                    <i class="fas fa-globe"></i>
                                    <?php echo htmlspecialchars($tutor['institution'] ?? 'SpeedCourse'); ?>
                                </p>
                                
                                <p class="tutor-bio"><?php echo htmlspecialchars($tutor['bio']); ?></p>
                                
                                <div class="expertise-section">
                                    <h3>Areas of Expertise</h3>
                                    <div class="expertise-tags">
                                        <?php
                                        // If you have expertise in your database, split and display them
                                        $expertise = explode(',', $tutor['expertise'] ?? 'Web Development,Programming');
                                        foreach ($expertise as $skill) {
                                            echo '<span class="expertise-tag">' . htmlspecialchars(trim($skill)) . '</span>';
                                        }
                                        ?>
                                    </div>
                                </div>

                                <div class="social-links">
                                    <a href="#" class="social-icon">
                                        <i class="fab fa-youtube fa-lg"></i>
                                    </a>
                                    <a href="#" class="social-icon">
                                        <i class="fab fa-linkedin fa-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }

            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }

            $conn = null;
            ?>
        </div>
    </div>

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
</body>
</html>
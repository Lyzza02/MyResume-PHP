<?php
	$name = "Elyzza Jane O. Abrigo";
    $email = "elyzza.abrigo@gmail.com";
	$contact = "0905 404 7375";
	$address = "109 Busa St. Barrio San Jose Caloocan City, Philippines";
    $role = "Web Developer";
    $obj = "My objective was to have a position where I can contribute my skills and abilities from what I have learned to further help improve your company.";

	$education[0][0] = "FEU Institute of Technology";
	$education[0][1] = "P. Paredes, Sampaloc, Manila, Metro Manila";
    $education[0][2] = "Bachelor of Science in Computer Science with Specialization in Software Engineering";

	$education[1][0] = "St. Stephen’s High School";
	$education[1][1] = "1267 G. Masangkay st. Sta. Cruz, Manila";


    $award[0]="Awarded in Annual Student’s Recognition 2020 as one of the Top Performing Student for 2019 – 2020 at FEU - Institute of Technology (via Zoom video conference).";
    $award[1]="Was able to pass the certification in MTA: Introduction to Programming Using Java - Certified 2021 that was held last March 30, 2021.";

    $hobby[0] = "Playing Online Games";
    $hobby[1] = "Reading";
    $hobby[2] = "Music";
    $hobby[3] = "Can speak and write Chinese";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo "My Resume"?></title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class = "wrapper">
        <div class = "resume">
            <div class = "left">
                <div class="img_holder">
                    <img src="pic.jpeg" alt="picture">
                </div>

                <div class="contact_wrap pb">
                    <div class="title"><?php echo "Contact"; ?></div>
                    <div class="contact">
                        <ul>
                            <li>
                                <div class="list_wrap">
                                    <div class="icon"><i class="fas fa-home"></i></div>
                                    <div class="text"><?php echo $address; ?></div>
                                </div>
                            </li>

                            <li>
                                <div class="list_wrap">
                                    <div class="icon"><i class="fas fa-mobile-alt"></i></div>
                                    <div class="text"><?php echo $contact; ?></div>
                                </div>
                            </li>

                            <li>
                                <div class="list_wrap">
                                    <div class="icon"><i class="fas fa-envelope"></i></div>
                                    <div class="text"><?php echo $email; ?></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="skills_wrap pb">
                    <div class="title"><?php echo "Skills"; ?></div>
                    <div class="skills">
                        <ul>
                            <li>
                                <div class="list_wrap">
                                    <div class="text"><?php echo "HTML"; ?></div>
                                    <div class="skills-bar">
                                        <div class="skills-per" style="max-width: 50%;"></div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="list_wrap">
                                    <div class="text"><?php echo "CSS"; ?></div>
                                    <div class="skills-bar">
                                        <div class="skills-per" style="max-width: 40%;"></div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="list_wrap">
                                    <div class="text"><?php echo "Java"; ?></div>
                                    <div class="skills-bar">
                                        <div class="skills-per" style="max-width: 70%;"></div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="list_wrap">
                                    <div class="text"><?php echo "C++"; ?></div>
                                    <div class="skills-bar">
                                        <div class="skills-per" style="max-width: 65%;"></div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="list_wrap">
                                    <div class="text"><?php echo "SQL"; ?></div>
                                    <div class="skills-bar">
                                        <div class="skills-per" style="max-width: 75%;"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="header">
                    <div class="name_role">
                        <div class="name"><?php echo $name; ?></div>
                        <div class="role"><?php echo $role; ?></div>
                    </div>
                    <div class="about"> <?php echo $obj; ?></div>
                </div>

                <div class="inner">
                    <div class="edu">
                        <div class="title">
                            <?php echo "Education"; ?>
                        </div>
                        <div class="edu_wrap">
                            <ul>
                                <li>
                                    <div class="list_wrap">
                                        <div class="date"><?php echo "August 2019 - Present"; ?></div>
                                        <div class="info">
                                            <p class="info_title"><?php echo $education[0][0]; ?></p>
                                            <p class="info_com"><?php echo $education[0][1]; ?></p>
                                            <p class="info_cont"><?php echo $education[0][2]; ?></p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="list_wrap">
                                        <div class="date"><?php echo "June 2014 - May 2019"; ?></div>
                                        <div class="info">
                                            <p class="info_title"><?php echo $education[1][0]; ?></p>
                                            <p class="info_com"><?php echo $education[1][1]; ?></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>   
                    </div>

                    <div class="achiv">
                        <div class="title">
                            <?php echo "Achivements"; ?>
                        </div>
                        <div class="achiv_wrap">
                            <ul>
                                <li>
                                    <div class="list_wrap">
                                        <div class="info"><?php echo $award[0]; ?></div>
                                    </div>
                                </li>

                                <li>
                                    <div class="list_wrap">
                                        <div class="info"><?php echo $award[1]; ?></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="hobbies_wrap pb">
                        <div class="title"><?php echo "Hobbies & Other Skills"; ?></div>
                        <div class="hobbies">
                            <ul>
                                <li>
                                    <div class="list_wrap">
                                        <div class="icon"><i class="fas fa-gamepad"></i></div>
                                        <div class="text"><?php echo $hobby[0]; ?></div>
                                    </div>
                                </li>

                                <li>
                                    <div class="list_wrap">
                                        <div class="icon"><i class="fas fa-book"></i></div>
                                        <div class="text"><?php echo $hobby[1]; ?></div>
                                    </div>
                                </li>

                                <li>
                                    <div class="list_wrap">
                                        <div class="icon"><i class="fas fa-music"></i></div>
                                        <div class="text"><?php echo $hobby[2]; ?></div>
                                    </div>
                                </li>

                                <li>
                                    <div class="list_wrap">
                                        <div class="icon"><i class="fas fa-language"></i></div>
                                        <div class="text"><?php echo $hobby[3]; ?></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</body>
</html>

<?php
$team = [
    [
        'id' => 1,
        'name' => 'Douglas Broughton',
        'image' => 'assets/images/profile.jpg',
        'title' => 'Software Engineer',
        'email' => 'broughtond1@nku.edu',
        'phone' => '812 209 0264',
        'linkedin' => 'linkedin.com',
        'github' => 'github.com/doug1107',
        'website' => 'db.com',
        'summary' => 'As a Software Engineering student at NKU, I am passionate about leveraging my technical skills and academic knowledge to develop innovative and effective software solutions. With a strong foundation in programming languages, software development methodologies, and system design, I am adept at analyzing user requirements, designing applications, and implementing efficient code.',
        'experience' => [
            [
                'position' => 'Associate',
                'company' => 'Amazon',
                'time' => '2021 - Present',
                'description' => 'Transport packages',
                'technologies' => ['Python', 'PHP', 'Java']
            ],
        ],
        'skills' => [
            'Python' => 98,
            'PHP' => 94,
            'Java' => 96,
        ],
        'education' => [
            [
                'degree' => 'BS in Applied Software Engineering',
                'institution' => 'Northern Kentucky University',
                'time' => '2021 - 2025'
            ],
        ],
        'awards' => [
            'Award 1' => '',
            'Award 2' => ''
        ],
        'languages' => [
            'English' => 'Native',
        ],
        'interests' => ['Sports', 'Chess', 'Watching movies'],
        'projects' => [
            [
                'title' => 'Project 1',
                'description' => 'Brief description of Project 1',
                'link' => 'project1-link'
            ],
        ]
    ],
	// fill out the info as you did in your resume, change the id number to a number not taken yet
	[
        'id' => 2,
        'name' => 'Sean Cancel',
        'image' => 'https://media.licdn.com/dms/image/v2/D4E03AQFrLIvKRTVQxA/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1687800424400?e=1732752000&v=beta&t=DJjiZOJcg-9XbrkmY0qj-0gXkTXwK6PHgdIuZpNMeFQ',
        'title' => 'Cybersecurity Intern',
        'email' => 'cancels1@mymail.nku.edu',
        'phone' => '502 500 8688',
        'linkedin' => 'www.linkedin.com/in/seancancel',
        'github' => 'https://github.com/cancels1',
        'website' => 'sc.com',
        'summary' => 'I am a motivated cybersecurity student at Northern Kentucky University, pursuing a Bachelor of Science in Cybersecurity with a current GPA of 3.25. I have experience in facility operations, customer service, and tutoring, and have held leadership roles in Theta Chi and the NKU Dodgeball Club. I am proficient in various technical skills, including Google Workspace, Microsoft Office, HTML, Linux',
        'experience' => [
            [
                'position' => 'Facility Operations',
                'company' => 'Northern Kentucky University',
                'time' => 'Aug 24 - Present',
                'description' => 'Checked out and maintained recreational equipment for students ensuring proper usage and return. Monitored the area to ensure the safety of all guests, addressing any issues promptly. Helped students with inquiries and provided excellent customer service to enhance their experience.',
                'technologies' => ['Customer Service', 'Organization', 'Problem Response']
            ],
        ],
        'skills' => [
            'Customer Service' => 98,
            'Organization' => 94,
            'Problem Response' => 96,
        ],
        'education' => [
            [
                'degree' => 'Bachelor of Science - Cybersecurity',
                'institution' => 'Northern Kentucky University',
                'time' => '2023-2027'
            ],
        ],
        'awards' => [
            'Award 1' => 'Dean list',
            'Award 2' => 'Governor Scholars Program'
        ],
        'languages' => [
            'English' => 'Native',
        ],
        'interests' => ['Basketball', 'Dodgeball', 'Reading'],
        'projects' => [
            [
                'title' => '',
                'description' => '',
                'link' => ''
            ],
        ]
    ],
	[
        'id' => 0,
        'name' => '',
        'image' => 'assets/images/profile.jpg',
        'title' => '',
        'email' => '',
        'phone' => '',
        'linkedin' => '',
        'github' => '',
        'website' => '',
        'summary' => '',
        'experience' => [
            [
                'position' => '',
                'company' => '',
                'time' => '',
                'description' => '',
                'technologies' => ['', '', '']
            ],
        ],
        'skills' => [
            ' ' => 98,
        ],
        'education' => [
            [
                'degree' => '',
                'institution' => '',
                'time' => ''
            ],
        ],
        'awards' => [
            'Award 1' => '',
            'Award 2' => ''
        ],
        'languages' => [
            'English' => '',
        ],
        'interests' => ['', '', ''],
        'projects' => [
            [
                'title' => '',
                'description' => '',
                'link' => ''
            ],
        ]
    ],

];


?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Our amazing team</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<h1 class="py-4 text-center">OUR AMAZING TEAM</h1>

			<?php foreach ($team as $member) { ?>
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src= "<?= $member['image']; ?>" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $member['name']; ?></h1>
							    <div class="title mb-3"><?= $member['title']; ?></div>
								<a href="detail.php?id=<?= array_search($member, $team); ?>" class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
			<?php } ?>

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your names</small>
    </footer>

    

</body>
</html> 


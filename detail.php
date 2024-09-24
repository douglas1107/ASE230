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
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$member = isset($team[$id]) ? $team[$id] : null;
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?= $member['name']; ?></title>
    
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
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="<?= $member['image']; ?>" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $member['name']; ?></h1>
							    <div class="title mb-3"><?= $member['title']; ?>e</div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="mailto:<?= $member['email']; ?>"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?= $member['email']; ?></a></li>
								    <li><a class="text-link" href=""tel:<?= $member['phone']; ?>><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?= $member['phone']; ?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="<?= $member['linkedin']; ?>"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?= $member['linkedin']; ?></a></li>
					                <li class="mb-3"><a class="text-link" href="<?= $member['github']; ?>"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?= $member['github']; ?></a></li>
					                <li><a class="text-link" href="</span><?= $member['website']; ?>"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?= $member['website']; ?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?= $member['summary']; ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								<?php foreach ($member['experience'] as $exp): ?>
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?= htmlspecialchars($exp['position']); ?></h3>
										        <div class="resume-company-name ms-auto"><?= htmlspecialchars($exp['company']); ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?= htmlspecialchars($exp['time']); ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?= htmlspecialchars($exp['description']); ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
												<?php foreach ($exp['technologies'] as $tech): ?>
                                                    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= htmlspecialchars($tech); ?></span></li>
                                                <?php endforeach; ?>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article>
									<?php endforeach; ?>
							    
							    
							    
							    
							    
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name">Angular</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">React</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">JavaScript</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        
								        <li class="mb-2">
								            <div class="resume-skill-name">Node.js</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">HTML/CSS/SASS/LESS</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light">DevOps</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Code Review</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Git</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Unit Testing</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Wireframing</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Sketch</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Balsamiq</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">WordPress</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Shopify</span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold">MSc in Computer Science</div>
								        <div class="resume-degree-org">University College London</div>
								        <div class="resume-degree-time">2013 - 2014</div>
								    </li>
								    <li>
								        <div class="resume-degree font-weight-bold">BSc Maths and Physics</div>
								        <div class="resume-degree-org">Imperial College London</div>
								        <div class="resume-degree-time">2010 - 2013</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Award Name Lorem</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</div>
								    </li>
								    <li class="mb-0 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Award Name Ipsum</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque.</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Native)</small></li>
								    <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold">French</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
								    <li><span class="resume-lang-name font-weight-bold">Spanish</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1">Climbing</li>
								    <li class="mb-1">Snowboarding</li>
								    <li class="mb-1">Cooking</li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image1.jpg" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 1</h5>
									<p class="card-text">Brief description of Project 1.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image2.jpg" alt="Project 2" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 2</h5>
									<p class="card-text">Brief description of Project 2.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image3.jpg" alt="Project 3" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 3</h5>
									<p class="card-text">Brief description of Project 3.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your names</small>
    </footer>

    

</body>
</html> 


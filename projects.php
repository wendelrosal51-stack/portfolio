<?php
$name = 'Kurt Rosal';
$role = 'BSIT Student';
$currentYear = date('Y');

$projects = [
    [
        'name' => 'Carsell',
        'category' => 'Web Application',
        'description' => 'Automotive dealership and inventory management system with user role permissions and transaction workflows.',
        'tags' => ['HTML', 'CSS', 'React', 'JavaScript', 'Node JS', 'Express JS', 'MySQL'],
        'live_url' => 'https://carsell-seven.vercel.app/home',
        'images' => [
            [
                'src' => 'uploads/carsellogin.png',
                'alt' => 'Carsell login page'
            ],
            [
                'src' => 'uploads/carsellhome.png',
                'alt' => 'Carsell home page'
            ],
            [
                'src' => 'uploads/carsellvehicles.png',
                'alt' => 'Carsell vehicles page'
            ],
            [
                'src' => 'uploads/carselldetails.png',
                'alt' => 'Carsell details    page'
            ]
        ]
    ],
    [
        'name' => 'LearNux',
        'category' => 'Web Application',
        'description' => 'Built to take you from Linux newcomer to confident user. It provides easy-to-follow tutorials, practical guides and lessons that help users understand Linux distributions, terminal commands, system navigation, and open-source concepts without feeling overwhelmed.',
        'tags' => ['HTML', 'CSS', 'JavaScript', 'Node JS', 'MongoDB'],
        'live_url' =>
        'https://qm-production-7675.up.railway.app',
        'images' => [
            [
                'src' => 'uploads/learnux1.png',
                'alt' => 'LearNux home page'
            ],
            [
                'src' => 'uploads/learnux2.png',
                'alt' => 'LearNux overview page'
            ],
            [
                'src' => 'uploads/learnux3.png',
                'alt' => 'LearNux tutorial page'
            ],
            [
                'src' => 'uploads/learnux4.png',
                'alt' => 'LearNux steps page'
            ]
        ]
    ],
    [
        'name' => 'StreetFlex',
        'category' => 'Web Application',
        'description' => 'StreetFlex is an online streetwear shopping platform that offers customers a convenient way to browse, select, and purchase clothing and fashion products. The website focuses on street fashion, promoting carefully selected products, quality, comfort, and individuality.',
        'tags' => ['HTML', 'CSS', 'JavaScript', 'Node JS', 'MongoDB'],
        'live_url' =>
        'https://streetflex.vercel.app/index.html',
        'images' => [
            [
                'src' => 'uploads/streetflex1.png',
                'alt' => 'StreetFlex home page'
            ],
            [
                'src' => 'uploads/streetflex2.png',
                'alt' => 'StreetFlex products page'
            ],
            [
                'src' => 'uploads/streetflex3.png',
                'alt' => 'StreetFlex shirt page'
            ],
            [
                'src' => 'uploads/streetflex4.png',
                'alt' => 'StreetFlex orders page'
            ]
        ]
    ],
    [
        'name' => 'Highschool Network Infrastructure Design and Configuration',
        'category' => 'Network Infrastructure',
        'description' => 'Designed a multi-building network infrastructure featuring interconnected routers, managed switches, servers, and wireless access points. The project involved configuring VLAN segmentation to separate network traffic, 802.1Q trunking for inter-switch communication, and Router-on-a-Stick for inter-VLAN routing. It also implemented OSPF dynamic routing to enable communication between different building networks.

Technologies & Techniques:
• VLAN Configuration and Network Segmentation
• IEEE 802.1Q Trunking
• Router-on-a-Stick (Inter-VLAN Routing)
• OSPF Dynamic Routing
• IP Addressing and Subnetting (CIDR)
• DHCP Server Configuration
• Cat6 Structured Cabling and Fiber Optics
• MDF/IDF Rack and Patch Panel Design
• Wireless Access Point Configuration
• Network Device Configuration and Verification',
        'tags' => ['Cisco Packet Tracer'],
        'live_url' => '',
        'images' => [
            [
                'src' => 'uploads/srm.png',
                'alt' => 'Network Topology'
            ],
            [
                'src' => 'uploads/srm2.png',
                'alt' => 'Network Ping Test'
            ],
            [
                'src' => 'uploads/srm3.png',
                'alt' => 'Network Ping Test'
            ],
            [
                'src' => 'uploads/srm4.png',
                'alt' => 'Network Ping Test'
            ]
        ]
    ],
    [
        'name' => 'Routing Information Protocol (RIP) Network Configuration',
        'category' => 'Network Infrastructure',
        'description' => 'Configured a network infrastructure using the Routing Information Protocol (RIP) for dynamic routing. The project involved configuring routers to exchange routing information, implementing subnetting for efficient IP address management, and ensuring network connectivity across multiple segments.',
        'tags' => ['Cisco Packet Tracer'],
        'live_url' => '',
        'images' => [
            [
                'src' => 'uploads/rip1.png',
                'alt' => 'RIP Network Topology'
            ],
            [
                'src' => 'uploads/rip2.png',
                'alt' => 'RIP Configuration'
            ],
            [
                'src' => 'uploads/rip3.png',
                'alt' => 'RIP Configuration'
            ],
            [
                'src' => 'uploads/rip4.png',
                'alt' => 'RIP Configuration'
            ]
        ]
    ],
    [
        'name' => 'Open Shortest Path First (OSPF) Network Configuration',
        'category' => 'Network Infrastructure',
        'description' => 'Configured the Open Shortest Path First (OSPF) routing protocol on multiple routers to enable dynamic routing and automatic exchange of routing information. The project focused on configuring OSPF processes, advertising network routes, establishing router adjacencies, and verifying routing table updates to ensure connectivity between interconnected networks.',
        'tags' => ['Cisco Packet Tracer'],
        'live_url' => '',
        'images' => [
            [
                'src' => 'uploads/ospf1.png',
                'alt' => 'OSPF Network Topology'
            ],
            [
                'src' => 'uploads/ospf2.png',
                'alt' => 'OSPF Configuration'
            ],
            [
                'src' => 'uploads/ospf3.png',
                'alt' => 'OSPF Configuration'
            ],
            [
                'src' => 'uploads/ospf4.png',
                'alt' => 'OSPF Configuration'
            ]
        ]
    ],
    [
        'name' => 'Ticket Booking System',
        'category' => 'Software Development',
        'description' => 'A simple Java-based Cinema Seat Booking System that allows users to reserve seats by entering their name and selecting a row and column. It features a 5×5 seating arrangement, a menu-driven interface, and a seat display function that identifies available and occupied seats. The program uses 2D arrays, loops, switch expressions, and classes to manage seat assignments.',
        'tags' => ['Java'],
        'live_url' => '',
        'images' => [
            [
                'src' => 'uploads/booth.gif',
                'alt' => 'Java Ticket Booth Booking System'
            ]
        ]
    ],
    [
        'name' => 'Payment System',
        'category' => 'Software Development',
        'description' => 'A console-based Java Payment System that simulates transactions through three payment methods: Credit Card, PayPal, and Bank Transfer. It features input validation, account authentication, payment amount processing, and transaction receipts. The program demonstrates object-oriented programming concepts such as abstraction, inheritance, polymorphism, method overriding, and exception handling.',
        'tags' => ['Java'],
        'live_url' => '',
        'images' => [
            [
                'src' => 'uploads/payment.gif',
                'alt' => 'Java Payment System'
            ]
        ]
    ],
    [
        'name' => 'Board of Doom',
        'category' => 'Game Development',
        'description' => 'Turn-based interactive board game prototype built in Unity, featuring custom mechanics and dynamic event triggers.',
        'tags' => ['Unity', 'C#', 'Game Design'],
        'live_url' => '', // Add itch.io or WebGL build link here if available
        'images' => [
            [
                'src' => 'uploads/projects/board-of-doom.png',
                'alt' => 'Board of Doom game screen'
            ]
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projects and portfolio by <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>, BSIT student and developer.">

    <title>Projects | <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="projects.css">
</head>

<body>

    <header class="site-header">
        <nav class="container navbar">
            <a href="about.php" class="logo">
                <span class="logo-mark">K</span>
                <span><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></span>
            </a>

            <div class="nav-links">
                <a href="about.php" class="nav-link">About</a>
                <a href="projects.php" class="nav-link portfolio-link active" aria-current="page">Portfolio <span>&nearr;</span></a>
            </div>
        </nav>
    </header>

    <main class="container">

        <div class="page-heading">
            <span class="page-eyebrow">Portfolio / Work</span>
            <h1>Selected Projects<span class="heading-dot">.</span></h1>
            <p>
                A showcase of web applications, academic systems, and interactive prototypes
                I've designed, developed, and deployed.
            </p>
        </div>

        <div class="projects-feed">
            <?php foreach ($projects as $project): ?>
                <article class="project-card <?php echo empty($project['live_url']) ? 'no-live-url' : ''; ?>">

                    <header class="project-header">
                        <div class="project-meta">
                            <div class="project-title-row">
                                <h2><?php echo htmlspecialchars($project['name'], ENT_QUOTES, 'UTF-8'); ?></h2>
                                <?php if (!empty($project['category'])): ?>
                                    <span class="project-category"><?php echo htmlspecialchars($project['category'], ENT_QUOTES, 'UTF-8'); ?></span>
                                <?php endif; ?>
                            </div>

                            <?php if (!empty($project['description'])): ?>
                                <p class="project-description">
                                    <?php echo htmlspecialchars($project['description'], ENT_QUOTES, 'UTF-8'); ?>
                                </p>
                            <?php endif; ?>

                            <?php if (!empty($project['tags'])): ?>
                                <div class="project-tags">
                                    <?php foreach ($project['tags'] as $tag): ?>
                                        <span class="tag"><?php echo htmlspecialchars($tag, ENT_QUOTES, 'UTF-8'); ?></span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <?php if (!empty($project['live_url'])): ?>
                            <div class="project-actions">
                                <a
                                    href="<?php echo htmlspecialchars($project['live_url'], ENT_QUOTES, 'UTF-8'); ?>"
                                    class="btn-visit"
                                    target="_blank"
                                    rel="noopener noreferrer">
                                    Visit Project <span>&nearr;</span>
                                </a>
                            </div>
                        <?php endif; ?>
                    </header>

                    <div class="project-gallery <?php echo count($project['images']) === 1 ? 'single-image' : ''; ?>">
                        <?php foreach ($project['images'] as $image): ?>
                            <a
                                class="project-image"
                                href="<?php echo htmlspecialchars($image['src'], ENT_QUOTES, 'UTF-8'); ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                title="Click to view full screenshot">
                                <div class="project-image-wrapper">
                                    <img
                                        src="<?php echo htmlspecialchars($image['src'], ENT_QUOTES, 'UTF-8'); ?>"
                                        alt="<?php echo htmlspecialchars($image['alt'], ENT_QUOTES, 'UTF-8'); ?>"
                                        loading="lazy">
                                    <span class="image-zoom-hint">View full size &nearr;</span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

    </main>

    <footer class="site-footer">
        <div class="container footer-content">
            <a href="about.php" class="footer-logo">KR<span>.</span></a>

            <p>
                Designed and built by <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>.
            </p>

            <span class="copyright">&copy; <?php echo $currentYear; ?></span>
        </div>
    </footer>

</body>

</html>
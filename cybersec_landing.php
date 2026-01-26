<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Year Professional Diploma in Cyber Security | Arena Web Security</title>
    <meta name="description" content="Become a certified cybersecurity professional with our comprehensive 1-year diploma program. Learn ethical hacking, penetration testing, and digital forensics.">
    <style>
        :root {
            /* EDIT: Customize brand colors here */
            --primary: #2563eb;
            --primary-dark: #1e40af;
            --secondary: #0ea5e9;
            --accent: #06b6d4;
            --success: #10b981;
            --warning: #f59e0b;
            --text-dark: #1e293b;
            --text-light: #64748b;
            --bg-light: #f8fafc;
            --bg-white: #ffffff;
            --border: #e2e8f0;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --radius: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            color: var(--text-dark);
            line-height: 1.6;
            background: var(--bg-light);
        }

        /* Header */
        header {
            position: sticky;
            top: 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        header.scrolled {
            box-shadow: var(--shadow-md);
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: var(--text-dark);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-cta {
            background: var(--primary);
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: var(--radius);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .nav-cta:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-dark);
        }

        /* Hero Section */
        .hero {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .hero-content h1 {
            font-size: 2.5rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .hero-content h1 .highlight {
            color: var(--primary);
        }

        .hero-subtitle {
            font-size: 1.125rem;
            color: var(--text-light);
            margin-bottom: 2rem;
        }

        .highlight-chips {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-bottom: 2rem;
        }

        .chip {
            background: var(--bg-white);
            border: 1px solid var(--border);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .chip:hover {
            border-color: var(--primary);
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
        }

        .hero-card {
            background: var(--bg-white);
            padding: 2rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--border);
        }

        .hero-card h3 {
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
            color: var(--text-dark);
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 0.75rem 0;
            border-bottom: 1px solid var(--border);
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            color: var(--text-light);
            font-size: 0.875rem;
        }

        .info-value {
            font-weight: 600;
            color: var(--text-dark);
        }

        .cta-group {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: var(--radius);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
            display: inline-block;
            text-align: center;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-secondary {
            background: white;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .btn-secondary:hover {
            background: var(--primary);
            color: white;
        }

        /* Section Styles */
        section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-header h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: var(--text-dark);
        }

        .section-header p {
            color: var(--text-light);
            font-size: 1.125rem;
        }

        /* Program Overview */
        .program-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .program-card {
            background: var(--bg-white);
            padding: 2rem;
            border-radius: var(--radius);
            border: 1px solid var(--border);
            transition: all 0.3s ease;
        }

        .program-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary);
        }

        .program-card h3 {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .program-card ul {
            list-style: none;
            margin-top: 1rem;
        }

        .program-card li {
            padding: 0.5rem 0;
            padding-left: 1.5rem;
            position: relative;
            color: var(--text-light);
        }

        .program-card li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--success);
            font-weight: bold;
        }

        /* Curriculum */
        .curriculum-timeline {
            position: relative;
            padding-left: 2rem;
        }

        .curriculum-item {
            background: var(--bg-white);
            padding: 1.5rem;
            border-radius: var(--radius);
            margin-bottom: 1.5rem;
            border-left: 4px solid var(--primary);
            transition: all 0.2s ease;
        }

        .curriculum-item:hover {
            box-shadow: var(--shadow-md);
            transform: translateX(5px);
        }

        .curriculum-item h3 {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
        }

        .curriculum-meta {
            display: flex;
            gap: 1.5rem;
            margin: 0.75rem 0;
            flex-wrap: wrap;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.875rem;
            color: var(--text-light);
        }

        .topics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 0.75rem;
            margin-top: 1rem;
        }

        .topic-pill {
            background: var(--bg-light);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.875rem;
            text-align: center;
        }

        /* Outcomes */
        .outcomes-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .outcome-card {
            background: var(--bg-white);
            padding: 1.5rem;
            border-radius: var(--radius);
            border: 1px solid var(--border);
            text-align: center;
            transition: all 0.2s ease;
        }

        .outcome-card:hover {
            border-color: var(--primary);
            box-shadow: var(--shadow-md);
        }

        .outcome-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
        }

        .outcome-card h4 {
            font-size: 1rem;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
        }

        .outcome-card p {
            font-size: 0.875rem;
            color: var(--text-light);
        }

        /* Portfolio/Trust */
        .portfolio {
            background: var(--bg-white);
            padding: 3rem 2rem;
            border-radius: var(--radius);
            text-align: center;
        }

        .trust-pills {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 2rem;
        }

        .trust-pill {
            background: var(--bg-light);
            border: 2px solid var(--border);
            padding: 0.75rem 1.5rem;
            border-radius: var(--radius);
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .trust-pill:hover {
            border-color: var(--primary);
            transform: translateY(-3px);
            box-shadow: var(--shadow-sm);
        }

        /* FAQ */
        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            background: var(--bg-white);
            margin-bottom: 1rem;
            border-radius: var(--radius);
            border: 1px solid var(--border);
            overflow: hidden;
        }

        .faq-question {
            padding: 1.25rem;
            cursor: pointer;
            font-weight: 600;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.2s ease;
        }

        .faq-question:hover {
            background: var(--bg-light);
        }

        .faq-answer {
            padding: 0 1.25rem;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
            color: var(--text-light);
        }

        .faq-item.active .faq-answer {
            padding: 1.25rem;
            max-height: 500px;
        }

        .faq-toggle {
            font-size: 1.25rem;
            transition: transform 0.3s ease;
        }

        .faq-item.active .faq-toggle {
            transform: rotate(45deg);
        }

        /* Contact */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .contact-card {
            background: var(--bg-white);
            padding: 2rem;
            border-radius: var(--radius);
            border: 1px solid var(--border);
            text-align: center;
        }

        .contact-card h4 {
            margin-bottom: 0.75rem;
            color: var(--text-dark);
        }

        .contact-card p {
            color: var(--text-light);
        }

        /* Footer */
        footer {
            background: var(--text-dark);
            color: white;
            padding: 2rem;
            text-align: center;
        }

        footer p {
            margin-bottom: 0.5rem;
        }

        footer a {
            color: var(--secondary);
            text-decoration: none;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 100%;
                background: var(--bg-white);
                flex-direction: column;
                padding: 2rem;
                box-shadow: var(--shadow-lg);
                transition: left 0.3s ease;
            }

            .nav-links.active {
                left: 0;
            }

            .menu-toggle {
                display: block;
            }

            .hero {
                grid-template-columns: 1fr;
            }

            .hero-content h1 {
                font-size: 2rem;
            }

            .cta-group {
                flex-direction: column;
            }

            .program-grid,
            .outcomes-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<!-- Header -->
<header id="header">
    <nav>
        <a href="#" class="logo">Arena Web Security</a>
        <button class="menu-toggle" onclick="toggleMenu()">☰</button>
        <ul class="nav-links" id="navLinks">
            <li><a href="#program">Program</a></li>
            <li><a href="#curriculum">Curriculum</a></li>
            <li><a href="#outcomes">Outcomes</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <!-- EDIT: Update apply.html URL here -->
        <a href="apply.html" class="nav-cta">Apply Now</a>
    </nav>
</header>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>One Year Professional Diploma in <span class="highlight">Cyber Security</span></h1>
        <p class="hero-subtitle">Master cybersecurity fundamentals, ethical hacking, and digital forensics. Build secure applications, defend networks, and launch your career in one of the fastest-growing tech fields.</p>
        
        <div class="highlight-chips">
            <span class="chip">4 Certifications</span>
            <span class="chip">60-Day Internship</span>
            <span class="chip">13 Projects</span>
            <span class="chip">100% Practical</span>
            <span class="chip">Online Classes</span>
            <span class="chip">Bug Bounty Ready</span>
        </div>

        <div class="cta-group">
            <!-- EDIT: Update apply.html URL -->
            <a href="apply.html" class="btn btn-primary">Enroll Now</a>
            <!-- EDIT: Update Google Drive link for diploma modules -->
            <a href="#" onclick="openDiplomaModule(); return false;" class="btn btn-secondary">View Diploma Modules</a>
        </div>
    </div>

    <div class="hero-card">
        <h3>Program Information</h3>
        <div class="info-row">
            <span class="info-label">Duration</span>
            <span class="info-value">1 Year (12 Months)</span>
        </div>
        <div class="info-row">
            <span class="info-label">Class Type</span>
            <span class="info-value">Online</span>
        </div>
        <div class="info-row">
            <span class="info-label">Weekly Classes</span>
            <span class="info-value">2 Classes (2 hrs each)</span>
        </div>
        <div class="info-row">
            <span class="info-label">Total Projects</span>
            <span class="info-value">13 Projects</span>
        </div>
        <div class="info-row">
            <span class="info-label">Internship</span>
            <span class="info-value">60 Days</span>
        </div>
        <div class="info-row">
            <span class="info-label">Certifications</span>
            <span class="info-value">4 Certificates</span>
        </div>
        <div class="info-row">
            <span class="info-label">Fee</span>
            <!-- EDIT: Update fee information here -->
            <span class="info-value">(To be updated)</span>
        </div>
    </div>
</section>

<!-- Program Overview -->
<section id="program">
    <div class="section-header">
        <h2>Why Choose This Diploma?</h2>
        <p>Build the skills that matter in today's cybersecurity landscape</p>
    </div>

    <div class="program-grid">
        <div class="program-card">
            <h3>Master Cybersecurity Fundamentals</h3>
            <p>Gain a deep understanding of how cyberattacks occur, how to detect them, and how to build defenses. From encryption and secure communication to access control, you'll learn how to protect networks from common threats like malware, phishing, and ransomware.</p>
        </div>

        <div class="program-card">
            <h3>Ethical Hacking & Penetration Testing</h3>
            <p>Understanding the mindset and methods of hackers is key to effective defense. In this course, you'll explore ethical hacking techniques and penetration testing strategies, helping you identify and fix vulnerabilities before malicious actors can exploit them.</p>
        </div>

        <div class="program-card">
            <h3>Industry Demand for Skilled Professionals</h3>
            <p>As the need for cybersecurity professionals grows, businesses are actively seeking experts in areas like security monitoring, penetration testing, and incident response. This course gives you the hands-on experience to confidently step into high-demand roles and make an impact from day one.</p>
        </div>
    </div>
</section>

<!-- Curriculum -->
<section id="curriculum">
    <div class="section-header">
        <h2>Comprehensive Curriculum</h2>
        <p>Three intensive modules covering end-to-end cybersecurity expertise</p>
    </div>

    <div class="curriculum-timeline">
        <div class="curriculum-item">
            <h3>Part 1: Cybersecurity & Ethical Hacking</h3>
            <div class="curriculum-meta">
                <span class="meta-item">📅 Duration: 4 Months</span>
                <span class="meta-item">📝 3 Exams</span>
                <span class="meta-item">📋 12 Assignments</span>
                <span class="meta-item">🎯 5 Projects</span>
            </div>
            <p style="color: var(--text-light); margin: 1rem 0;">Master the fundamentals of cybersecurity, blue team operations, ethical hacking techniques including SQL injection, XSS, malware analysis, penetration testing, and Linux-based security tools.</p>
            <div class="topics-grid">
                <div class="topic-pill">Cyber Security Basics</div>
                <div class="topic-pill">Ethical Hacking</div>
                <div class="topic-pill">SQL Injection</div>
                <div class="topic-pill">XSS & CSRF</div>
                <div class="topic-pill">Malware Analysis</div>
                <div class="topic-pill">Penetration Testing</div>
                <div class="topic-pill">Kali Linux</div>
                <div class="topic-pill">Shell Scripting</div>
                <div class="topic-pill">Freelancing Skills</div>
            </div>
        </div>

        <div class="curriculum-item">
            <h3>Part 2: Cyber Security with Advanced Python</h3>
            <div class="curriculum-meta">
                <span class="meta-item">📅 Duration: 4 Months</span>
                <span class="meta-item">📝 3 Exams</span>
                <span class="meta-item">📋 10 Assignments</span>
                <span class="meta-item">🎯 3 Projects</span>
            </div>
            <p style="color: var(--text-light); margin: 1rem 0;">Build secure applications using Python, Django, and REST APIs. Learn backend development, database connectivity, web scraping, automation, and secure coding practices.</p>
            <div class="topics-grid">
                <div class="topic-pill">Core Python</div>
                <div class="topic-pill">Backend Development</div>
                <div class="topic-pill">Django Framework</div>
                <div class="topic-pill">REST APIs</div>
                <div class="topic-pill">Database Management</div>
                <div class="topic-pill">Web Scraping</div>
                <div class="topic-pill">Automation</div>
                <div class="topic-pill">Secure Coding</div>
            </div>
        </div>

        <div class="curriculum-item">
            <h3>Part 3: Advanced Cyber Security</h3>
            <div class="curriculum-meta">
                <span class="meta-item">📅 Duration: 2 Months</span>
                <span class="meta-item">📝 3 Exams</span>
                <span class="meta-item">📋 8 Assignments</span>
                <span class="meta-item">🎯 5 Projects</span>
            </div>
            <p style="color: var(--text-light); margin: 1rem 0;">Advanced topics including cyber laws, network vulnerability assessment, digital forensics, cryptography, Active Directory attacks, SOC operations, and application security.</p>
            <div class="topics-grid">
                <div class="topic-pill">Cyber Laws</div>
                <div class="topic-pill">Network Security</div>
                <div class="topic-pill">Digital Forensics</div>
                <div class="topic-pill">Threat Hunting</div>
                <div class="topic-pill">Cryptography</div>
                <div class="topic-pill">Active Directory</div>
                <div class="topic-pill">SOC Operations</div>
                <div class="topic-pill">API Security</div>
            </div>
        </div>
    </div>
</section>

<!-- Career Outcomes -->
<section id="outcomes">
    <div class="section-header">
        <h2>Career Outcomes</h2>
        <p>Launch your career in high-demand cybersecurity roles</p>
    </div>

    <div class="outcomes-grid">
        <div class="outcome-card">
            <div class="outcome-icon">🛡️</div>
            <h4>Cyber Security Analyst</h4>
            <p>Monitor, detect and defend against threats</p>
        </div>
        <div class="outcome-card">
            <div class="outcome-icon">🔍</div>
            <h4>Penetration Tester</h4>
            <p>Legally hack systems to find and fix vulnerabilities</p>
        </div>
        <div class="outcome-card">
            <div class="outcome-icon">🎯</div>
            <h4>SOC Analyst</h4>
            <p>Work in Security Operations Center defending networks</p>
        </div>
        <div class="outcome-card">
            <div class="outcome-icon">⚔️</div>
            <h4>Red Team Operator</h4>
            <p>Simulate advanced cyber attacks to test defenses</p>
        </div>
        <div class="outcome-card">
            <div class="outcome-icon">🔬</div>
            <h4>Digital Forensics Investigator</h4>
            <p>Recover and analyze hacked data and systems</p>
        </div>
        <div class="outcome-card">
            <div class="outcome-icon">💻</div>
            <h4>Application Developer</h4>
            <p>Design and build secure applications</p>
        </div>
        <div class="outcome-card">
            <div class="outcome-icon">🤖</div>
            <h4>Security Automation Engineer</h4>
            <p>Automate scanning, alerting, and defense systems</p>
        </div>
        <div class="outcome-card">
            <div class="outcome-icon">🌐</div>
            <h4>Bug Bounty Hunter</h4>
            <p>Work for HackerOne, Bugcrowd, or clients directly</p>
        </div>
    </div>
</section>

<!-- Portfolio/Trust Section -->
<section id="portfolio">
    <div class="portfolio">
        <h2 style="margin-bottom: 1rem;">Trusted by Leading Institutions</h2>
        <p style="color: var(--text-light);">Our students and alumni work with top organizations across Bangladesh and beyond</p>
        
        <div class="trust-pills">
            <div class="trust-pill">Bangladesh Navy</div>
            <div class="trust-pill">BUET</div>
            <div class="trust-pill">University of Dhaka</div>
            <div class="trust-pill">World Bank</div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq">
    <div class="section-header">
        <h2>Frequently Asked Questions</h2>
        <p>Everything you need to know about the program</p>
    </div>

    <div class="faq-container">
        <div class="faq-item">
            <div class="faq-question" onclick="toggleFAQ(this)">
                <span>Who can enroll in this diploma program?</span>
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                Anyone who has passed HSC in any group can enroll. This includes high school graduates from any academic background, undergraduate students, graduate students, and diploma students from any field. Educational qualifications can be considered if approved by the authority, based on the student's ability to complete the program successfully.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question" onclick="toggleFAQ(this)">
                <span>How many certifications will I receive?</span>
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                You will receive 4 certifications upon completion: Cyber Security & Ethical Hacking, Cyber Security with Advance Python (Application Development), Advance Cyber Security, and the One Year Professional Diploma in Cyber Security.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question" onclick="toggleFAQ(this)">
                <span>What is the certification requirement?</span>
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                To be eligible for the Professional Diploma in Cybersecurity, students must demonstrate real-world application of their skills by earning a minimum of $100 through remote jobs, freelancing platforms, bug bounty programs, or any cybersecurity income source. This ensures students gain practical earning capability in the field.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question" onclick="toggleFAQ(this)">
                <span>What is the class schedule and format?</span>
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                Classes are conducted online via Google Meet. You'll have 2 classes per week, each lasting 2 hours. Additionally, there are weekly 3-hour support sessions to help you with any questions or challenges.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question" onclick="toggleFAQ(this)">
                <span>How many projects will I complete?</span>
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                You will complete 13 hands-on projects throughout the program, including vulnerability exploitation, penetration testing, digital forensics, web scraping, secure application development, and incident response planning. These projects provide real-world experience essential for your career.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question" onclick="toggleFAQ(this)">
                <span>Is internship included in the program?</span>
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                Yes, the program includes a 60-day online internship where you'll work with a cybersecurity team on real-time projects, handle client communication, and gain practical industry experience. You'll receive an internship certificate based on your performance.
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="section-header">
        <h2>Get in Touch</h2>
        <p>Ready to start your cybersecurity journey? Contact us today</p>
    </div>

    <div class="contact-grid">
        <div class="contact-card">
            <h4>📧 Email</h4>
            <!-- EDIT: Update contact email -->
            <p>(To be updated)</p>
        </div>
        <div class="contact-card">
            <h4>📱 Phone</h4>
            <!-- EDIT: Update contact phone -->
            <p>(To be updated)</p>
        </div>
        <div class="contact-card">
            <h4>🌐 Website</h4>
            <!-- EDIT: Update website URL -->
            <p>(To be updated)</p>
        </div>
        <div class="contact-card">
            <h4>📍 Office</h4>
            <!-- EDIT: Update office address -->
            <p>(To be updated)</p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <p><strong>Arena Web Security</strong></p>
    <p>Leading National Initiatives in Ethical Hacking, Digital Forensics, and Cyber Intelligence</p>
    <p style="margin-top: 1rem; font-size: 0.875rem; opacity: 0.8;">Authorized by Tanjim Al Fahim, Head of Department, Cyber Security & Ethical Hacking</p>
    <p style="margin-top: 1rem; font-size: 0.875rem;">&copy; <?php echo date('Y'); ?> Arena Web Security. All rights reserved.</p>
</footer>

<script>
    // EDIT: Update Google Drive link for diploma modules here
    const DIPLOMA_MODULE_LINK = "https://drive.google.com/your-link-here";

    // Sticky header effect
    window.addEventListener('scroll', function() {
        const header = document.getElementById('header');
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Mobile menu toggle
    function toggleMenu() {
        const navLinks = document.getElementById('navLinks');
        navLinks.classList.toggle('active');
    }

    // Close mobile menu when clicking a link
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', function() {
            document.getElementById('navLinks').classList.remove('active');
        });
    });

    // FAQ toggle
    function toggleFAQ(element) {
        const faqItem = element.parentElement;
        const allFaqs = document.querySelectorAll('.faq-item');
        
        // Close all other FAQs
        allFaqs.forEach(item => {
            if (item !== faqItem) {
                item.classList.remove('active');
            }
        });
        
        // Toggle current FAQ
        faqItem.classList.toggle('active');
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href.length > 1) {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // Open diploma module link
    function openDiplomaModule() {
        window.open(DIPLOMA_MODULE_LINK, '_blank');
    }

    // Add entrance animations on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe all cards and sections
    document.querySelectorAll('.program-card, .curriculum-item, .outcome-card, .faq-item').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Underwater Robotics Team | Deep Sea Innovation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }

        :root {
            --deep-navy: #0a192f;
            --ocean-blue: #112240;
            --dark-cyan: #00b4d8;
            --accent-cyan: #4cc9f0;
            --text-light: #e6f1ff;
            --text-gray: #a8b2d1;
            --glass-white: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.15);
            --shadow: rgba(0, 0, 0, 0.3);
            --glow: rgba(0, 180, 216, 0.3);
        }

        body {
            background-color: var(--deep-navy);
            color: var(--text-light);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        /* Main Rounded Container */
        .main-container {
            width: 100%;
            max-width: 1400px;
            height: 90vh;
            min-height: 800px;
            background: var(--deep-navy);
            border-radius: 32px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        /* Hero Background with Overlay */
        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                linear-gradient(rgba(10, 25, 47, 0.85), rgba(10, 25, 47, 0.92)),
                url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            z-index: 1;
        }

        /* Floating Navigation */
        .navigation {
            position: absolute;
            top: 30px;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            max-width: 1000px;
            background: rgba(17, 34, 64, 0.85);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 18px 35px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
            box-shadow: 0 10px 30px var(--shadow);
        }

        .logo {
            font-size: 1.6rem;
            font-weight: 700;
            background: linear-gradient(90deg, var(--dark-cyan), var(--accent-cyan));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i {
            font-size: 1.4rem;
        }

        .nav-menu {
            display: flex;
            gap: 40px;
        }

        .nav-menu a {
            color: var(--text-gray);
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            transition: all 0.3s ease;
            position: relative;
            padding: 5px 0;
        }

        .nav-menu a:hover {
            color: var(--accent-cyan);
        }

        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--dark-cyan), var(--accent-cyan));
            transition: width 0.3s ease;
        }

        .nav-menu a:hover::after {
            width: 100%;
        }

        /* Hero Content */
        .hero-content {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 10%;
            max-width: 600px;
            z-index: 10;
        }

        .headline {
            font-size: 4.2rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 25px;
            background: linear-gradient(90deg, #ffffff, var(--accent-cyan));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .subtext {
            font-size: 1.3rem;
            color: var(--text-gray);
            line-height: 1.6;
            margin-bottom: 40px;
            max-width: 550px;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: linear-gradient(90deg, var(--dark-cyan), var(--accent-cyan));
            color: var(--deep-navy);
            border: none;
            padding: 18px 36px;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px var(--glow);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px var(--glow);
        }

        .cta-button i {
            font-size: 1.3rem;
        }

        /* Info Card - Bottom Right */
        .info-card {
            position: absolute;
            bottom: 180px;
            right: 5%;
            width: 380px;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(25px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 32px;
            box-shadow: 0 15px 40px var(--shadow);
            z-index: 20;
        }

        .info-card h3 {
            font-size: 1.5rem;
            margin-bottom: 18px;
            color: var(--accent-cyan);
            font-weight: 700;
        }

        .info-card p {
            color: var(--text-gray);
            line-height: 1.6;
            margin-bottom: 28px;
            font-size: 1rem;
        }

        .info-card-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: transparent;
            color: var(--accent-cyan);
            border: 1px solid var(--accent-cyan);
            padding: 14px 28px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .info-card-button:hover {
            background: rgba(76, 201, 240, 0.1);
            transform: translateX(5px);
        }

        /* Statistics Section */
        .stats-container {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            max-width: 1000px;
            display: flex;
            justify-content: center;
            gap: 30px;
            z-index: 20;
        }

        .stat-card {
            flex: 1;
            max-width: 280px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 28px;
            text-align: center;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .stat-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 40px rgba(0, 180, 216, 0.15);
        }

        .stat-number {
            font-size: 2.8rem;
            font-weight: 800;
            color: var(--deep-navy);
            margin-bottom: 8px;
        }

        .stat-label {
            font-size: 1.1rem;
            color: var(--ocean-blue);
            font-weight: 600;
        }

        /* Decorative elements */
        .glow-effect {
            position: absolute;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(0, 180, 216, 0.12) 0%, rgba(0, 180, 216, 0) 70%);
            border-radius: 50%;
            top: 50%;
            right: 10%;
            transform: translateY(-50%);
            z-index: 2;
            filter: blur(40px);
        }

        .robot-overlay {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 60%;
            height: 70%;
            background: url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: bottom right;
            opacity: 0.3;
            z-index: 1;
            filter: brightness(0.8) contrast(1.2);
        }

        /* Scroll indicator for future content */
        .scroll-indicator {
            position: absolute;
            bottom: 20px;
            right: 20px;
            color: var(--text-gray);
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 8px;
            z-index: 10;
        }

        .scroll-indicator i {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            40% {transform: translateY(-10px);}
            60% {transform: translateY(-5px);}
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .headline {
                font-size: 3.5rem;
            }
            
            .info-card {
                right: 3%;
                width: 350px;
            }
        }

        @media (max-width: 992px) {
            .main-container {
                height: auto;
                min-height: 100vh;
                border-radius: 20px;
            }
            
            .hero-content {
                position: relative;
                top: auto;
                transform: none;
                left: auto;
                padding: 180px 5% 40px;
                max-width: 100%;
            }
            
            .headline {
                font-size: 3rem;
            }
            
            .info-card {
                position: relative;
                bottom: auto;
                right: auto;
                width: 100%;
                max-width: 600px;
                margin: 0 auto 40px;
            }
            
            .stats-container {
                position: relative;
                bottom: auto;
                left: auto;
                transform: none;
                margin: 0 auto 60px;
                width: 95%;
            }
            
            .robot-overlay {
                display: none;
            }
            
            .nav-menu {
                gap: 20px;
            }
        }

        @media (max-width: 768px) {
            .headline {
                font-size: 2.5rem;
            }
            
            .subtext {
                font-size: 1.1rem;
            }
            
            .stats-container {
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }
            
            .stat-card {
                max-width: 100%;
                width: 100%;
            }
            
            .nav-menu {
                display: none;
            }
            
            .navigation {
                padding: 15px 25px;
            }
        }

        @media (max-width: 576px) {
            .headline {
                font-size: 2rem;
            }
            
            .subtext {
                font-size: 1rem;
            }
            
            .cta-button {
                padding: 16px 28px;
                font-size: 1.1rem;
            }
            
            .info-card {
                padding: 25px;
            }
            
            .stat-card {
                padding: 24px;
            }
            
            .main-container {
                border-radius: 16px;
            }
        }
    </style>
</head>
<body>
    <!-- Main Container -->
    <div class="main-container">
        <!-- Hero Background -->
        <div class="hero-background"></div>
        
        <!-- Glow Effect -->
        <div class="glow-effect"></div>
        
        <!-- Robot Overlay -->
        <div class="robot-overlay"></div>
        
        <!-- Navigation -->
        <nav class="navigation">
            <div class="logo">
                <i class="fas fa-robot"></i>
                <span>UNDERWATER ROBOTICS</span>
            </div>
            <div class="nav-menu">
                <a href="#">Home</a>
                <a href="#">Team</a>
                <a href="#">Projects</a>
                <a href="#">Research</a>
                <a href="#">Competitions</a>
            </div>
        </nav>
        
        <!-- Hero Content -->
        <div class="hero-content">
            <h1 class="headline">INNOVATION THAT GOES BEYOND THE DEPTHS</h1>
            <p class="subtext">Pioneering autonomous underwater robotics for deep-sea exploration, marine research, and international competitions.</p>
            <button class="cta-button">
                <i class="fas fa-play-circle"></i> Watch Mission
            </button>
        </div>
        
        <!-- Info Card -->
        <div class="info-card">
            <h3>Underwater Robotics Team</h3>
            <p>We design and build autonomous underwater robots for exploration, research, and international competitions.</p>
            <button class="info-card-button">Explore Team <i class="fas fa-arrow-right"></i></button>
        </div>
        
        <!-- Statistics -->
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-number">15+</div>
                <div class="stat-label">Team Members</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">8</div>
                <div class="stat-label">Robots Built</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">5</div>
                <div class="stat-label">National Competitions</div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <span>Scroll for more</span>
            <i class="fas fa-chevron-down"></i>
        </div>
    </div>

    <script>
        // Interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Mission button
            const missionBtn = document.querySelector('.cta-button');
            missionBtn.addEventListener('click', function() {
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading Mission...';
                setTimeout(() => {
                    this.innerHTML = '<i class="fas fa-play-circle"></i> Watch Mission';
                    alert('Mission video simulation: This would launch a fullscreen cinematic experience showcasing our underwater robotics in action.');
                }, 1000);
            });
            
            // Explore Team button
            const exploreBtn = document.querySelector('.info-card-button');
            exploreBtn.addEventListener('click', function() {
                const arrow = this.querySelector('i');
                arrow.style.transform = 'translateX(8px)';
                setTimeout(() => {
                    arrow.style.transform = 'translateX(0)';
                    alert('Navigating to Team section. In a full implementation, this would scroll to or load the team page.');
                }, 300);
            });
            
            // Stat cards hover effects
            const statCards = document.querySelectorAll('.stat-card');
            statCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.boxShadow = '0 20px 45px rgba(0, 180, 216, 0.2)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.boxShadow = '0 12px 30px rgba(0, 0, 0, 0.15)';
                });
            });
            
            // Add subtle pulsing effect to CTA button
            setInterval(() => {
                missionBtn.style.boxShadow = '0 8px 30px rgba(0, 180, 216, 0.4)';
                setTimeout(() => {
                    missionBtn.style.boxShadow = '0 8px 25px rgba(0, 180, 216, 0.3)';
                }, 800);
            }, 4000);
            
            // Navigation hover effect enhancement
            const navLinks = document.querySelectorAll('.nav-menu a');
            navLinks.forEach(link => {
                link.addEventListener('mouseenter', function() {
                    this.style.color = 'var(--accent-cyan)';
                });
                
                link.addEventListener('mouseleave', function() {
                    if (!this.classList.contains('active')) {
                        this.style.color = 'var(--text-gray)';
                    }
                });
            });
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Horizons</title>
    <!-- Inclure correctement les fichiers CSS -->
    <link rel="stylesheet" href="{{ asset('css/header_footer_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Ajouter un script JavaScript -->
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>
<body>
    <!-- Première section -->
    <nav>
        <a href="#" class="logo">
            <img src="{{ asset('images/photos/logotechhorizons.svg') }}" alt="Tech Horizons Logo">
        </a>
        <div class="nav-links">
            <a class="activey" href="#">Accueil</a>
            <a href="#">Thèmes</a>
            <a href="#">Publications</a>
            <a href="#">FAQ</a>
        </div>
        <div class="auth-buttons">
            <a href="{{ asset('login') }}" class="login-btn">Login</a>
            <a href="{{ asset('singup') }}" class="register-btn">Register</a>
            <button class="mobile-menu-btn">☰</button>
        </div>
    </nav>

    <section class="hero" style="background: url('{{ asset('images/photos/handradiented.png') }}') center / cover;">
       <div class="hero-content">
          <h1>EXPLORE THE FUTURE OF TECHNOLOGY TODAY.</h1>
          <p>Stay ahead of the curve with our in-depth articles and expert insights on the latest tech trends. Join our community of tech enthusiasts and discover what's next in innovation.</p>
          <a href="#" class="learn-more-btn">Learn More</a>
       </div>
    </section>



    <!-- Deuxième section -->
    <h1 class="main-title">À Propos De Tech Horizons</h1>
    <div class="description">
        <p>Tech Horizons Est Un Magazine En Ligne Qui Explore Les Innovations Technologiques Les Plus Marquantes. Notre Objectif Est De Rendre Accessibles Les Avancées Dans Des Domaines Comme <span class="blue-text">L'intelligence Artificielle, L'Internet Des Objets, La Cybersécurité</span>, Et Bien Plus Encore.</p>
        <p>Nous Nous Engageons À Fournir Du Contenu De Qualité...</p>
    </div>
    <div class="values-grid">
        <div class="nos-valeurs">nos<br>valeurs</div>
        <div class="value-card">
            <div class="value-icon">
                <img src="{{ asset('images/photos/light.svg') }}" alt="light">
            </div>
            <div class="value-title">NOUS INNOVONS</div>
            <div class="value-description">Redéfinir les limites du possible...</div>
        </div>
        <div class="value-card">
            <div class="value-icon">
            <img src="{{ asset('photos/handshare.svg') }}" alt="handshake">
            </div>
            <div class="value-title">NOUS SOUTENONS</div>
            <div class="value-description">
                Accompagner chaque individu dans son parcours de développement et d'innovation.
            </div>
        </div>
        <div class="value-card">
            <div class="value-icon">
            <img src="{{ asset('images/photos/building.svg') }}" alt="building">
            </div>
            <div class="value-title">NOUS CONSTRUISONS</div>
            <div class="value-description">
                Contribuer à un avenir technologique durable et progressif.
            </div>
        </div>
        <div class="value-card">
            <div class="value-icon">
            <img src="{{ asset('images/photos/create.png') }}" alt=asterisk">
            </div>
            <div class="value-title">NOUS CRÉONS</div>
            <div class="value-description">
                Construire des solutions utiles et percutantes pour tous.
            </div>
        </div>
        <div class="value-card">
            <div class="value-icon">
            <img src="{{ asset('images/photos/create.png') }}" alt=wand">
            </div>
            <div class="value-title">NOUS INSPIRONS</div>
            <div class="value-description">
                Encourager la créativité et le changement positif à travers l'innovation.
            </div>
        </div>
    </div>

    <!-- Troisième section -->
    <section class="themes-section">
        <h2 class="section-title">Découvrez Nos Principaux Thèmes Technologiques</h2>
        <p class="section-description">
           Tech Horizons Vous Plonge Dans Divers Domaines Technologiques Passionnants. Chaque Thème Est Conçu Pour Vous Fournir Des Informations Enrichissantes Et Des Perspectives Innovantes Sur L'Avenir De La Technologie.
        </p>
        <div class="themes-ligne">
         <div class="container-bottom">
            <div class="theme-card">
                <h3 class="theme-title">INTERNET DES OBJETS</h3>
                <img src="{{ asset('images/photos/iothand.jpg') }}" alt="Internet des Objets" class="theme-image">
            </div>
         </div>
         <div class="container-top">
           <div class="theme-card">
              <img src="{{ asset('images/photos/VRlady.jpg') }}" alt="Réalité Virtuelle" class="theme-image">
              <h3 class="theme-title">RÉALITÉ VIRTUELLE</h3>
           </div>
         </div>
         <div class="container-bottom">
           <div class="theme-card">
              <h3 class="theme-title">CYBERSÉCURITÉ</h3>
              <img src="{{ asset('photos/keyboard.jpg') }}" alt="Cybersécurité" class="theme-image">
           </div>
         </div>
         <div class="container-top">
           <div class="theme-card">
              <img src="{{ asset('images/photos/robotholdingAI.jpg') }}" alt="Intelligence Artificielle" class="theme-image">
              <h3 class="theme-title">INTELLIGENCE ARTIFICIELLE</h3>
           </div>
          </div> 
        </div>
        <button class="explore-button">Explorer</button>
    </section>
    <!-- Section Robot -->
<section class="robot-friends-section">
    <div class="robot-header">
    <img src="{{ asset('images/photos/robothey.png') }}" alt="Robot Image" class="robot-image">
    <div class="robot-content">
            <h3 class="robot-category">AI</h3>
            <h2 class="robot-title"><a href="AI.html">Les robots peuvent-ils devenir nos amis ?</a></h2>
            <p class="robot-author">Aarian Rachel</p>
            <p class="robot-description">
                Les robots conçus pour interagir avec les humains, comme les assistants virtuels (Alexa, Siri) 
                ou les robots sociaux (Pepper, Sophia), sont de plus en plus sophistiqués. Ils peuvent comprendre 
                nos besoins, répondre à nos questions, et même tenter de simuler des émotions. 
                Mais ces connexions sont-elles authentiques ou simplement des illusions programmées ?
            </p>
        </div>
    </div>
    <div class="themes-links">
        <div class="theme-link">
        <img src="{{ asset('images/photos/pcblack.png') }}" alt="Iot" class="theme-image">
            <h4><a href="iot.html">INTERNET DES OBJETS</a></h4>
            <p>Comment Les IoT Façonnent Notre Futur Technologique</p>
        </div>
        <div class="theme-link">
        <img src="{{ asset('images/photos/halfrobot.png') }}" alt="Virtual Reality" class="theme-image">
            <h4><a href="vr.html">VIRTUALREALITY</a></h4>
            <p>Creating Immersive Experiences: The Technology Behind VR</p>
        </div>
        <div class="theme-link">
        <img src="{{ asset('images/photos/hard.png') }}" alt="Réalité Virtuelle" class="theme-image">
            <h4><a href="realite-virtuelle.html">RÉALITÉ VIRTUELLE</a></h4>
            <p>Une Révolution Interactive Pour L'Apprentissage Immersif.</p>
        </div>
        <div class="theme-link">
        <img src="{{ asset('images/photos/femmecyber.png') }}" alt="Virtual Reality 2"class="theme-image">
            <h4><a href="vr.html">VIRTUALREALITY</a></h4>
            <p>Creating Immersive Experiences: The Technology Behind VR</p>
        </div>
    </div>
</section>

<!-- footer section -->

<footer class="footer">
    <div class="footer-content">
        <div class="footer-logo">
            <a href="#" class="logo">
            <img src="{{ asset('images/photos/logowhite.svg') }}" alt="Tech Horizons Logo">
    
            </a>
            <!-- <h2>Tech Horizons</h2>
            <p>Exploring the Future of Technology Together.</p> -->
        </div>

        <div class="footer-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">Themes</a></li>
                <li><a href="#services">Publications</a></li>
                <li><a href="#contact">FAQ</a></li>
            </ul>
        </div>

        <div class="footer-contact">
            <h3>Contact Us</h3>
            <ul>
                <li>Email: <a href="mailto:support@techhorizons.com">support@techhorizons.com</a></li>
                <li>Phone: +123 456 7890</li>
                <li>Address: 123 Tech Street, Innovation City</li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2025 Tech Horizons. All rights reserved.</p>
    </div>
</footer>


<!-- footer section ends -->

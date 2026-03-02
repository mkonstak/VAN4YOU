<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Půjčovna VW Multivan & Karavan'; ?> | van4you.cz</title>
    <meta name="description" content="Prémiová půjčovna vozů VW Multivan T6.1 a moderních karavanů. Užijte si svobodu na cestách v luxusu.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css?v=1.1">
</head>
<body>
    <header id="main-header">
        <div class="container nav-content">
            <a href="index.php" class="logo">VAN<span class="text-accent">4YOU</span>.cz</a>
            
            <button class="menu-toggle" id="menu-toggle" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <ul class="nav-links" id="nav-links">
                <li><a href="index.php">Domů</a></li>
                <li><a href="multivan.php">VW Multivan</a></li>
                <li><a href="karavan.php">Karavan</a></li>
                <li><a href="cenik.php">Ceník</a></li>
                <li><a href="pravidla.php">Pravidla</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
            </ul>
        </div>
    </header>

    <script>
        const header = document.getElementById('main-header');
        const menuToggle = document.getElementById('menu-toggle');
        const navLinks = document.getElementById('nav-links');

        // Scroll effect
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle
        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            navLinks.classList.toggle('active');
            document.body.style.overflow = navLinks.classList.contains('active') ? 'hidden' : 'auto';
        });

        // Close menu on link click
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                menuToggle.classList.remove('active');
                navLinks.classList.remove('active');
                document.body.style.overflow = 'auto';
            });
        });
    </script>

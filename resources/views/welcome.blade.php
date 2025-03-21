<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZCHAT | SITE WEB</title>
    <link rel="stylesheet" href="{{ asset('assets/css/site/site.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body>

    <section class="header">
        <nav>
            <a href="index.html"><img src="public/" alt=""></a>
            <div class="nav-links" id="navLinks">
            <i class="fa fa-times" aria-hidden="true" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="#">ACCUEIL</a></li>
                    <li><a href="about.html">A PROPOS</a></li>
                    <li><a href="">SERVICES</a></li>
                </ul>
            </div>
        <i class="fa fa-bars" aria-hidden="true" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
            <h1>Salut toi, rejoint le famille et commence à discuter</h1>
            <p>Le monde profféssionel est une jungle où seul les plus compétent sont au sommet de ce fait il est donc nécessaire de suivre une bonne formation pour pouvoir être soi-même plus tard un pédateur. Dans le cadre d'une iniatiation aux projets professionnels un TPE. Nous a été donné et aujourd'hui il sera partagé avec vous.<br> Minima cum vel rem illo, ipsam autem a dolore ullam!</p>
            <a href="{{ url("/register") }}" class="hero-btn">JOINDRE LE CHAT</a>
        </div>
    </section>

    <!-- A propos -->

    <section class="course">
        <h1>A propos</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dignissimos maxime molestias nobis mollitia ex sunt obcaecati recusandae adipisci molestiae, suscipit ut nisi cum sint voluptates amet eos praesentium! Molestiae?</p>

    </section>

    

    <!-- Services -->

    <section class="facilities">

        <h1>Nos services</h1>

        <div class="row">

            <div class="facilities-col">
                <img src="imge/Virtualisation.jpg">
                <h3>Iniation à la virtualisation</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nobis illo quidem repudiandae praesentium doloremque corrupti rerum, possimus architecto voluptas voluptatum quisquam fuga deserunt! Quo cumque sapiente libero quos eum.</p>
            </div>
            <div class="facilities-col">
                <img src="imge/Telecom.jpg">
                <h3>Implémentation d'un services de communication</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nobis illo quidem repudiandae praesentium doloremque corrupti rerum, possimus architecto voluptas voluptatum quisquam fuga deserunt! Quo cumque sapiente libero quos eum.</p>
            </div>
            <div class="facilities-col">
                <img src="imge/logiciel.avif">
                <h3>Prise En Main GSN3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nobis illo quidem repudiandae praesentium doloremque corrupti rerum, possimus architecto voluptas voluptatum quisquam fuga deserunt! Quo cumque sapiente libero quos eum.</p>
            </div>

        </div>

    </section>

</section>



    <!-- JavaScript for Toggle Menu -->
    <script>

        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }

    </script>
    
</body>
</html>
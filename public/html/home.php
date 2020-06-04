<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">




<head>

    <!-- meta tag -->
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta name="description" content="Bisogna inserire la descrizione breve del contenuto della pagina">
    <meta name="keywords" content="Bisogna inserire delle parole chiave che compaiano nel contenuto della pagina">
    <meta name="author" content="Anna Cisotto Bertocco, Ismaele Gobbo, Paolo di Dio, Lucrezia Gradi">

    <!-- Paolo tag per non avere la pagina in cache -->
    <meta http-equiv="Cache-control" content="no-cache">


    <title>Succulente</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body>

<!-- Navigation bar-->
<div class="navigation-bar" id="Navbar">
    <a href="home.php">Home</a>
    <a href="piante.php">Piante</a>
    <a href="#about" onclick="showAbout()">Su di noi</a>
    <a href="#contatti">Info spedizioni</a>
    <a href="profile.php" id="Registrati">Registrati</a>
    <?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
        echo "<a href=\"../php/logout.php\" id='Logout'>Logout</a>";}
    else{
        echo "<a href=\"login.php\" id=\"Accedi\">Accedi</a>";}
    ?>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()"> <!-- OCCHIO SI CHIAMA MYFUNCTION -->
        <i class="fa fa-bars"></i>
    </a>
</div>

<div id="about" >SU DI NOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOI</div>


<div class="header">
    <div class="header-title">
        <h1>Succulenteeeerrrr</h1>
        <p>Scopri e acquista piante dalla migliore selezione di succulente sul mercato.</p>
        <a href="#piante">Scopri</a>
    </div>
    <div class="header-svg">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
        <path style="fill:#80C56E;" d="M436.869,180.869c-9.608,84.976-92.714,187.95-180.869,187.95S84.739,265.845,75.131,180.869
      	C64.381,85.791,144.814,0,256,0S447.619,85.791,436.869,180.869z" />
            <path style="fill:#66AD66;" d="M369.316,180.869c-6.02,84.976-58.086,187.95-113.316,187.95s-107.296-102.973-113.316-187.95
      	C135.949,85.791,186.341,0,256,0S376.051,85.791,369.316,180.869z" />
            <path style="fill:#80C56E;" d="M297.88,180.869c-2.225,84.976-21.468,187.95-41.88,187.95s-39.656-102.973-41.88-187.95
      	C211.63,85.791,230.255,0,256,0S300.37,85.791,297.88,180.869z" />
            <path style="fill:#FEC37D;" d="M349.089,512H162.911c-14.903,0-27.755-10.47-30.769-25.065L99.09,326.865h313.82l-33.052,160.07
      	C376.845,501.53,363.992,512,349.089,512z" />
            <path style="fill:#F9AE5D;" d="M361.915,326.865l-33.052,160.07C325.849,501.53,312.997,512,298.094,512h50.995
      	c14.903,0,27.755-10.47,30.769-25.065l33.052-160.07H361.915z" />
            <path style="fill:#F2A559;" d="M425.514,338.395H86.486c-2.866,0-5.189-2.323-5.189-5.189v-19.821c0-2.866,2.323-5.189,5.189-5.189
      	h339.028c2.866,0,5.189,2.323,5.189,5.189v19.821C430.703,336.072,428.38,338.395,425.514,338.395z" />
            <path style="fill:#EA8F3D;" d="M425.514,308.197h-47.783v30.198h47.783c2.866,0,5.189-2.323,5.189-5.189v-19.821
      	C430.703,310.52,428.38,308.197,425.514,308.197z" />
            <g>
                <circle style="fill:#66AD66;" cx="256" cy="62.65" r="7.991" />
                <circle style="fill:#66AD66;" cx="256" cy="125.15" r="7.991" />
                <circle style="fill:#66AD66;" cx="256" cy="187.66" r="7.991" />
                <circle style="fill:#66AD66;" cx="256" cy="250.16" r="7.991" />
            </g>
            <g>
                <circle style="fill:#80C56E;" cx="197.1" cy="62.65" r="7.991" />
                <circle style="fill:#80C56E;" cx="179.22" cy="125.15" r="7.991" />
                <circle style="fill:#80C56E;" cx="179.22" cy="187.66" r="7.991" />
                <circle style="fill:#80C56E;" cx="189.11" cy="250.16" r="7.991" />
                <circle style="fill:#80C56E;" cx="315.27" cy="62.65" r="7.991" />
                <circle style="fill:#80C56E;" cx="333.15" cy="125.15" r="7.991" />
                <circle style="fill:#80C56E;" cx="333.15" cy="187.66" r="7.991" />
                <circle style="fill:#80C56E;" cx="323.26" cy="250.16" r="7.991" />
            </g>
            <g>
                <circle style="fill:#66AD66;" cx="369.92" cy="62.65" r="7.991" />
                <circle style="fill:#66AD66;" cx="401.88" cy="125.15" r="7.991" />
                <circle style="fill:#66AD66;" cx="401.88" cy="187.66" r="7.991" />
                <circle style="fill:#66AD66;" cx="385.9" cy="250.16" r="7.991" />
                <circle style="fill:#66AD66;" cx="142.08" cy="62.65" r="7.991" />
                <circle style="fill:#66AD66;" cx="110.12" cy="125.15" r="7.991" />
                <circle style="fill:#66AD66;" cx="110.12" cy="187.66" r="7.991" />
                <circle style="fill:#66AD66;" cx="126.1" cy="250.16" r="7.991" />
            </g>
            <polygon style="fill:#F2A559;" points="349.448,422.488 302.718,393.642 255.993,422.488 209.268,393.642 162.544,422.488
      	112.448,391.56 122.75,441.453 162.544,466.021 209.268,437.175 255.993,466.021 302.718,437.175 349.448,466.021 389.25,441.452
      	399.552,391.56 " />
            <polygon style="fill:#EA8F3D;" points="349.448,466.021 389.25,441.452 395.561,410.888 399.552,391.56 349.448,422.488
      	342.993,418.504 335.021,457.115 " />
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
      </svg>
    </div>
</div>

<div class="how-it-works">
    <h2>Come funziona</h2>
    <div class="instructions">
        <img src="../images/order.png" alt="order image">
        <img src="../images/refill.png" alt="refill image">
        <img src="../images/delivery.png" alt="delivery image">
        <p>Scegli le tue piante e aggiungile al carrello.</p>
        <p>Riforniamo ogni settimana il nostro magazzino con piante nuove.</p>
        <p>Portiamo la pianta direttamente a casa tua.</p>
    </div>
</div>

<script src="../js/hamburger.js"></script>
<script src="../js/about.js"></script>

<?PHP include('about.php'); ?>
<?PHP echo'ASOAJSAOSANOSJAOJASOSASAASSASA'; ?>

<?php var_dump($_SESSION) ?>

</body>

</html>

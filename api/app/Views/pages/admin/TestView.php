<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UNIverse LAN XXIX - Pacman Nebula</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
        <style>
            body {
                font-family: 'Roboto', sans-serif;
                margin: 0;
                padding: 0;
                background-image: url("<?= base_url() ?>public/resources/images/xxx_background.jpg");
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                filter: brightness(0.8);
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-between;
            }

            .content-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .content li {
                padding-top: 10px;
            }

            .content {
                margin: 20px;
                padding: 30px;
                width: 400px;
                text-align: left;
                background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
                border-radius: 4px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
                backdrop-filter: blur(2px); /* Adds a subtle blur effect */
            }

            .content p {
                text-align:justify;
            }

            .topic {
                padding: 2px;
            }

            .header {
                padding: 20px;
                text-align: center;
            }

            .header h1 {
                font-size: 3rem;
                font-weight: 500;
                margin: 0;
                color: white;
                text-shadow: 3px 3px 4px black;
            }

            .content h2 {
                margin-top: 0;
            }

            .logo-bar {
                display: flex;
                justify-content: space-around;
            }

            .ip-bar {
                color: #fff;
                display: inline-flex;
                width: 400px;
            }

            .ip-bar h3 {
                padding: 0 40px 0 40px;
                font-weight: bold;
            }

            .transparent-container {
                padding: 20px;
                background-color: rgb(0, 0, 0, 0.55);
                border-radius: 15px;
                margin-bottom: 10px;
            }

            .logo-bar img {
                height: 100px;
                margin: 0px 20px;
            }
        </style>
    </head>
    <body>
        <header class="header">
            <h1>UNIVERSE LAN XXX - Rosette Nebula</h1>
        </header>

        <?php
        $ip = $_SERVER['REMOTE_ADDR'] ?? null;
        if(!is_null($ip)) {
        ?>
            <div class="ip-bar transparent-container" id="local-ip-block">
                <h3>Deine IP-Adresse:&nbsp;</h3>
                <h3 id="local-ip"><?= $_SERVER['REMOTE_ADDR'] ?></h3>
            </div>
        <?php
        }
        ?>

        <div class="content-container">
            <div class="content">
                <h2>Willkommen auf der UNIverse LAN!</h2>
                <div class="topic">
                    <p>
                        Der FSR Informatik der Universität Trier heißt dich herzlich auf der <strong>30. UNIverse LAN</strong>, der <a href="https://www.nasa.gov/image-article/rosette-nebula/" target="_blank">Rosette Nebula</a>, willkommen!
                        Auf dieser Seite findest du alles was du zum Ablauf dieser LAN-Party wissen musst. Wir danken herzlich unseren Partnern und Sponsoren!
                    </p>
                    <ul>
                        <li><strong>itestra</strong> versorgen uns diesmal mit kostenlosen Getränken und großartigen Turnierpreisen!</li>
                        <li><strong>GECO Trier e.V.</strong> stellen uns einige Hardware für die Smash-Turniere zur Verfügung!</li>
                    </ul>
                </div>
            </div>

            <div class="content">
                <h2>Turniere</h2>
                <div class="topic">
                    <h3>XX Uhr: League of Legends</h3>
                    <p>Es gewinnt derjenige, der zuerst eine der folgenden Siegesbedingungen erreicht hat:</p>
                    <ul>
                        <li>1vs1: Ein Kill. 2vs2: Zwei Kills.</li>
                        <li>100 getötete Minions pro Spieler im Team.</li>
                        <li>Turm zerstört.</li>
                    </ul>
                </div>
                <div class="topic">
                    <h3>XX Uhr: Super Smash Bros.</h3>
                    <p>
                        Die Anmeldung zum Super Smash Bros. Turnier wird von GECO hinten rechts an dem kleinen Tisch übernommen.
                    </p>
                </div>
                <div class="topic">
                    <h3>XX Uhr: Casual Games</h3>
                    <p>
                        Das Casual-Game-Turnier startet nach LoL und Smash. Weitere Infos über das Mikrofon.
                    </p>
                </div>
            </div>

            <div class="content">
                <h2>Sonstiges</h2>
                <div class="topic">
                    <h3>Verpflegung</h3>
                    <p>
                        Wie schon gesagt, unterstützt uns <strong>itestra</strong> mit kostenlosen Getränken für alle.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid aperiam, architecto cumque
                        debitis dolore fugit harum impedit modi, molestias, mollitia nostrum officiis quaerat quo!
                    </p>
                </div>
                <div class="topic">
                    <h3>Discord</h3>
                    <p>
                        Die Kommunikation auf der UniverseLAN läuft über <a href="https://discord.gg/X6pR9HfuDx">Discord</a> ab. Also joint schnell, damit ihr im Voicechat mit den anderen reden könnt!
                    </p>
                </div>
                <div class="topic">
                    <h3>Bei Internet-Problemen</h3>
                    <p>
                        Bei Problemen mit der Internetverbindung, dann gebt in eurem Browser <strong>10.0.0.1:9000</strong> in die Adresszeile ein!
                    </p>
                </div>
            </div>
        </div>

        <div class="logo-bar transparent-container">
            <img src="<?= base_url() ?>public/resources/images/fsi_trier_weiss.png" alt="FSR Informatik">
            <img src="<?= base_url() ?>public/resources/images/geco.png" alt="GECO Trier e.V.">
            <img src="<?= base_url() ?>public/resources/images/itestra.png" alt="itestra">
        </div>
    </body>
</html>

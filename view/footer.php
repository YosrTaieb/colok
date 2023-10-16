
<style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        footer {
            background: url('../assets/images/svg-animation-waves.svg') center top -4rem no-repeat;
            background-size: cover;
            padding-top: 8rem;
            height: 100%;
            background-position: center top -13rem; /* Pour les écrans larges */
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-content {
            text-align: center;
            color: white;
        }

        h3 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
        }

        .app-download {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
        }

        .download-button {
            display: flex;
            align-items: center;
            border: 1px solid white;
            border-radius: 10px;
            padding: 5px;
            margin: 0 10px;
        }

        .download-button img {
            width: 40px;
            margin-right: 10px;
        }

        .download-button p {
            font-size: 1rem;
        }

        .copyright {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 0.5rem;
            color: white;
            font-size: 0.8rem;
        }

        .copyright a {
            text-decoration: none;
            color: white;
            margin: 0 5px;
        }
    </style>
</head>
<body>
<footer>
    <div class="container">
        <div class="footer-content">
            <h3>Téléchargez notre application de gestion des tâches ménagères</h3>
            <p>Des tâches partagées, une colocation équilibrée.</p>
            <div class="app-download">
                <div class="download-button">
                    <img src="https://cdn-icons-png.flaticon.com/512/888/888857.png" alt="Google Play Store">
                    <p>Télécharger sur Google Play Store</p>
                </div>
                <div class="download-button">
                    <img src="https://cdn-icons-png.flaticon.com/512/888/888841.png " alt="Apple Store">
                    <p>Télécharger sur Apple Store</p>
                </div>
            </div>
        </div>
        <div class="copyright">
            &copy; Colok, 2023.
            <a href="#">Politique de confidentialité</a>
        </div>
    </div>
</footer>
</body>
</html>

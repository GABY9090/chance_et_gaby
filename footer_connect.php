<style>
    footer {
    background-color: #333;
    color: #fff;
    padding: 3em 0;
    font-size: 0.9em;
}

footer .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer-links {
    display: flex;
    flex-wrap: wrap; /* Passer à la ligne sur les écrans plus petits */
    justify-content: space-around;
    margin-bottom: 2em;
}

.footer-col {
    margin-bottom: 1.5em;
    width: calc(25% - 20px); /* Quatre colonnes avec un peu d'espace entre elles */
}

.footer-col h4 {
    color: #eee;
    margin-bottom: 1em;
    border-bottom: 2px solid #555;
    padding-bottom: 0.5em;
}

.footer-col ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-col ul li {
    margin-bottom: 0.5em;
}

.footer-col ul li a {
    color: #ccc;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-col ul li a:hover {
    color: #fff;
}

.social-links li {
    display: inline;
    margin-right: 1em;
}

.social-links li a img {
    width: 24px;
    height: 24px;
    vertical-align: middle;
    opacity: 0.8;
    transition: opacity 0.3s ease;
}

.social-links li a img:hover {
    opacity: 1;
}

.footer-bottom {
    text-align: center;
    padding-top: 1.5em;
    border-top: 1px solid #555;
}

.footer-bottom p {
    margin-bottom: 0.5em;
}

.footer-bottom a {
    color: #007bff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-bottom a:hover {
    color: #0056b3;
}

/* Responsive Design pour le footer */
@media (max-width: 768px) {
    .footer-col {
        width: calc(50% - 20px); /* Deux colonnes sur les écrans moyens */
    }
}

@media (max-width: 480px) {
    .footer-col {
        width: 100%; /* Une colonne sur les petits écrans */
    }
}

</style>
<footer>
    <div class="container">
        <div class="footer-links">
            <div class="footer-col">
                <h4>À Propos</h4>
                <ul>
                    <li><a href="#">Qui sommes-nous ?</a></li>
                    <li><a href="#">Notre histoire</a></li>
                    <li><a href="#">Nos valeurs</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Service Client</h4>
                <ul>
                    <li><a href="#">Contactez-nous</a></li>
                    <li><a href="#">Livraison</a></li>
                    <li><a href="#">Retours & Remboursements</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Informations</h4>
                <ul>
                    <li><a href="#">Conditions Générales de Vente</a></li>
                    <li><a href="#">Politique de Confidentialité</a></li>
                    <li><a href="#">Mentions Légales</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Suivez-nous</h4>
                <ul class="social-links">
                    <li><a href="#"><img src="image/facebook.png" alt="Facebook"></a></li>
                    <li><a href="#"><img src="image/twitter.png" alt="Twitter"></a></li>
                    <li><a href="#"><img src="image/instagram.png" alt="Instagram"></a></li>
                    <li><a href="#"><img src="image/linkedin.png" alt="LinkedIn"></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Mon E-commerce. Tous droits réservés.</p>
        </div>
    </div>
</footer>
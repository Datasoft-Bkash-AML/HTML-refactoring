<?php
// Simple footer component
require_once __DIR__ . '/../config.php';
?>
<footer class="site-footer">
    <div class="footer-inner container">
        <div class="footer-col footer-brand">
            <div class="site-logo"><img src="<?php echo asset_path('images/sample-21.svg'); ?>" alt="Site logo"></div>
            <p class="contact">17 Irving Pl, New York, NY 10003<br><a href="mailto:care@reytheme.com">care@reytheme.com</a> · 778 568 999</p>
            <div class="social" role="list">
                <a role="link" href="#" aria-label="Facebook">FB</a>
                <a role="link" href="#" aria-label="Instagram">IG</a>
                <a role="link" href="#" aria-label="Twitter">TW</a>
            </div>
        </div>

        <div class="footer-col footer-newsletter">
            <h3>Get 5% off by subscribing to our newsletter</h3>
            <p>Be the first to know about new arrivals, special offers, and news</p>
            <form class="newsletter-inline" method="post">
                <input type="email" name="email" placeholder="Your email address" required>
                <button type="submit">JOIN</button>
            </form>
        </div>

        <div class="footer-col footer-links">
            <div class="links-col">
                <h4>Shop</h4>
                <ul>
                    <li><a href="#">Speakers</a></li>
                    <li><a href="#">Headphones</a></li>
                    <li><a href="#">Wearables</a></li>
                </ul>
            </div>
            <div class="links-col">
                <h4>Help</h4>
                <ul>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Refunds & Exchanges</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
            </div>
            <div class="links-col">
                <h4>About</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">News</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="copy">© Rey Theme 2025. All rights reserved.</div>
        </div>
    </div>
</footer>
<!-- Close site wrapper opened in components/site-wrapper.php -->
</main>
</div>
<!-- Load local Splide assets (vendored). CDN retained as a fallback if needed. -->
<script src="<?php echo asset_path('js/splide.min.js'); ?>" defer></script>
<!-- CDN fallback (uncomment if you prefer CDN):
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/splide.min.css">
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js" defer></script>
-->
<script src="<?php echo asset_path('js/main.js'); ?>" defer></script>
</body>
</html>

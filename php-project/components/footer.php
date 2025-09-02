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
<!-- CDN fallback (uncomment JS if you prefer CDN):
<!-- <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js" defer></script> -->
-->
<script src="<?php echo asset_path('js/main.js'); ?>" defer></script>
<!-- Runtime error capture for diagnostics (populated if any uncaught console errors occur) -->
<div id="runtime-error-log" style="display:none;position:fixed;right:1rem;bottom:1rem;z-index:20000;background:rgba(255,0,0,0.9);color:#fff;padding:0.75rem;border-radius:6px;max-width:360px;overflow:auto;max-height:40vh;font-family:system-ui,Arial,Helvetica,sans-serif;font-size:12px;"></div>
<script>
    // Capture uncaught errors and unhandled promise rejections and write into the hidden div
    (function(){
        var out = document.getElementById('runtime-error-log');
        function show(msg){ if(!out) return; out.style.display='block'; out.textContent = msg; console.error('Captured error:', msg); }
        window.addEventListener('error', function(e){ try{ show(e.message + ' at ' + (e.filename||'') + ':' + (e.lineno||'') ); }catch(_){}});
        window.addEventListener('unhandledrejection', function(e){ try{ var r = e.reason; show('UnhandledRejection: ' + (r && r.message ? r.message : String(r)) ); }catch(_){}});
        // Optional: capture console.error calls as well
        var _err = console.error; console.error = function(){ try{ var args = Array.prototype.slice.call(arguments).map(function(a){ return (typeof a === 'object' && a && a.message) ? a.message : String(a); }).join(' | '); show(args); }catch(_){ } _err.apply(console, arguments); };
    })();
</script>
</body>
</html>

<?php
/*
 * Account panel (converted from chunk-35.html)
 * Provides account links and quick actions in a dialog-like panel.
 */
?>
<div id="account-panel" class="account-panel" role="dialog" aria-modal="true" aria-labelledby="account-panel-title" tabindex="-1" hidden>
    <div class="account-panel-inner">
        <button class="account-close" aria-label="Close account panel">✕</button>
        <h2 id="account-panel-title">Account</h2>
        <nav class="account-nav" aria-label="Account navigation">
            <ul>
                <li><a href="#">Overview</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#">Addresses</a></li>
                <li><a href="#">Payment methods</a></li>
                <li><a href="#">Wishlist</a></li>
            </ul>
        </nav>

        <div class="account-actions">
            <a class="btn secondary" href="#">Sign in</a>
            <a class="btn primary" href="#">Create account</a>
        </div>
    </div>
</div>

<script>
// Minimal client-side toggles for the account panel.
(function(){
    var panel = document.getElementById('account-panel');
    if(!panel) return;
    var closeBtn = panel.querySelector('.account-close');
    function openPanel(){ panel.hidden = false; panel.focus(); document.body.style.overflow = 'hidden'; }
    function closePanel(){ panel.hidden = true; document.body.style.overflow = ''; }
    if(closeBtn) closeBtn.addEventListener('click', closePanel);
    panel.addEventListener('keydown', function(e){ if(e.key === 'Escape') closePanel(); });
    // expose open to window for demo triggers
    window.openAccountPanel = openPanel;
    window.closeAccountPanel = closePanel;
})();
</script>

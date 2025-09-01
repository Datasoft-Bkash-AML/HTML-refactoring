// Site interactivity: Splide slider initialization and small helpers
(function(){
    // small helper to show overlay if needed
    window.showSiteOverlay = function(opacity){
        var o = document.querySelector('.rey-overlay--site');
        if(o) o.style.opacity = (opacity===undefined)?0.5:opacity;
    }

    function parseJSONAttr(el, attr){
        var v = el.getAttribute(attr);
        if(!v) return null;
        try{ return JSON.parse(v); }catch(e){
            try{ return (new Function('return ' + v))(); }catch(e2){ return null; }
        }
    }

    function initSplides(){
        var roots = document.querySelectorAll('.splide');
        if(!roots.length) return;
        if(typeof Splide === 'undefined') return false; // not ready yet

        roots.forEach(function(root){
            if(root.__splideMounted) return; // already mounted
            // read config from data-carousel-settings (Elementor uses this)
            var cfg = parseJSONAttr(root, 'data-carousel-settings') || parseJSONAttr(root, 'data-splide-options') || {};
            // sensible defaults
            var defaults = { perPage: 4, gap: '20px', rewind: false, type: 'slide', pagination: false };
            var opts = Object.assign({}, defaults, cfg);
            try{
                var s = new Splide(root, opts);
                s.mount();
                // expose instance for accessibility hooks and debugging
                root.__splideInstance = s;
                root.__splideMounted = true;
                // ensure the splide root is focusable so we can capture keyboard events
                if(!root.hasAttribute('tabindex')){
                    root.setAttribute('tabindex', '0');
                }

                // keyboard navigation: left/right arrows move focus to previous/next slide
                root.addEventListener('keydown', function(ev){
                    if(ev.key === 'ArrowLeft' || ev.key === 'ArrowRight'){
                        var dir = ev.key === 'ArrowLeft' ? 'prev' : 'next';
                        try{ s.go(dir); }
                        catch(e){}
                        // move focus into the first interactive element in the currently visible slide
                        try{
                            var curr = root.querySelector('.splide__slide.is-active');
                            if(curr){
                                var focusable = curr.querySelector('a, button, [tabindex]:not([tabindex="-1"])');
                                if(focusable) focusable.focus();
                            }
                        }catch(e){}
                        ev.preventDefault();
                    }
                });
            }catch(e){
                console.warn('Failed to mount Splide for', root, e);
            }
        });
        return true;
    }

    // Try to initialize on DOMContentLoaded and then poll for Splide availability for a short time
    document.addEventListener('DOMContentLoaded', function(){
        if(initSplides()) return;
        var attempts = 0;
        var t = setInterval(function(){
            attempts++;
            if(initSplides() || attempts > 10) clearInterval(t);
        }, 250);
    });
})();

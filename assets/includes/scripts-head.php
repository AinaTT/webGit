<script type="text/javascript">
    function mostrar() {
        document.getElementById('oculto').style.display = 'block';
        document.getElementById('visible').style.display = 'none';
    }

    function ocultar() {
        document.getElementById('oculto').style.display = 'none';
        document.getElementById('visible').style.display = 'block';
    }

    function mostrarmovil() {
        document.getElementById('ocultomovil').style.display = 'block';
        document.getElementById('visiblemovil').style.display = 'none';
    }

    function ocultarmovil() {
        document.getElementById('ocultomovil').style.display = 'none';
        document.getElementById('visiblemovil').style.display = 'block';
    }

    function mostrarSubmenu() {

        if (document.getElementById) {
            var aux = document.getElementById('submenumovil').style;
            aux.display = aux.display ? "" : "block";
        }

    }

    function MostrarOcultar(capa, enlace) {
        if (document.getElementById) {
            var aux = document.getElementById(capa).style;
            aux.display = aux.display ? "" : "block";
        }
    }
</script>
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-7390116-30', 'auto');
    ga('send', 'pageview');
</script>
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');

    fbq('init', '358666781190455');
    fbq('track', "PageView");
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=358666781190455&ev=PageView&noscript=1"/></noscript>
<!-- Hotjar Tracking Code for www.topciment.com -->
<!-- <script>
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 2260251,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
</script> -->
<script type="text/javascript">
    // Función para abrir y cerrar el menú versión móvil
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
</script> <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=358666781190455&ev=PageView&noscript=1" /></noscript>
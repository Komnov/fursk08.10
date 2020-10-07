<!-- Stat -->
<script type="text/javascript">
    if (!window.mainTracker) {
        window.mainTracker = 'tilda';
    }
    (function (d, w, k, o, g) {
        var n = d.getElementsByTagName(o)[0], s = d.createElement(o), f = function () {
            n.parentNode.insertBefore(s, n);
        };
        s.type = "text/javascript";
        s.async = true;
        s.key = k;
        s.id = "tildastatscript";
        s.src = g;
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, '7de6e86410c1fc4f7378d3fac7025048', 'script', 'https://stat.tildacdn.com/js/tildastat-0.2.min.js');
</script>
<!-- git  -->
<script>
    !function (a, b, c, d, e, f, g) {
        a.GoogleAnalyticsObject = e, a[e] = a[e] || function () {
            (a[e].q = a[e].q || []).push(arguments)
        }, a[e].l = 1 * new Date, f = b.createElement(c), g = b.getElementsByTagName(c)[0], f.async = 1, f.src = d, g.parentNode.insertBefore(f, g)
    }(window, document, "script", "//www.google-analytics.com/analytics.js", "ga"), ga("create", "UA-44315558-1", {
        userId: document.getElementsByTagName("body")[0].getAttribute("data-uid") || "",
        cookieDomain: "fursk.ru"
    }), ga("require", "displayfeatures"), ga(function (a) {
        var b = a.get("clientId"), c = document.getElementsByTagName("body")[0];
        try {
            var d = window.EXT_STAT_DATA;
            if (d && Object.keys(d).length) {
                var e = d.items.map(function (a) {
                    return a.article
                });
                ga("set", "dimension1", e.join(", ")), ga("set", "dimension2", d.pageType)
            }
        } catch (a) {
        }
        ga("set", "dimension8", c.getAttribute("data-ga-marker") || "");
        var f = "0" != c.getAttribute("data-insider-enabled") ? "with" : "without";
        ga("set", "dimension10", f + "_insider"), ga("set", "dimension12", b), ga("send", "pageview")
    });
</script>

<script>
    !function (a, b, c) {
        (b[c] = b[c] || []).push(function () {
            try {
                b.yaCounter328591 = new Ya.Metrika({
                    id: 328591,
                    clickmap: !0,
                    trackLinks: !0,
                    accurateTrackBounce: !0,
                    webvisor: !0
                })
            } catch (a) {
            }
        });
        var d = a.getElementsByTagName("script")[0], e = a.createElement("script"), f = function () {
            d.parentNode.insertBefore(e, d)
        };
        e.type = "text/javascript", e.async = !0, e.src = "https://mc.yandex.ru/metrika/watch.js", "[object Opera]" == b.opera ? a.addEventListener("DOMContentLoaded", f, !1) : f()
    }(document, window, "yandex_metrika_callbacks");</script>
<noscript>
    <div><img src="//mc.yandex.ru/watch/328591" style="position:absolute; left:-9998px;" alt=""/></div>
</noscript>
</body>
</html>
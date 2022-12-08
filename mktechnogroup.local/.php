
<?php include 'partials/header.php' ; ?>



<style type="text/css">
<html><head></head><body>body, html {
     height: 100%;
     background: #110101;
     font-family: &#39;
    Roboto&#39;
    , sans-serif;
     overflow: hidden;
}
 .slideshow {
     position: absolute;
     z-index: 1;
     top: 0;
     left: 0;
     width: 100vw;
     height: 100vh;
     overflow: hidden;
}
 .slideshow .slider {
     width: 100vw;
     height: 100vw;
     z-index: 2;
}
 .slideshow .slider * {
     outline: none;
}
 .slideshow .slider .item {
     height: 100vh;
     width: 100vw;
     position: relative;
     overflow: hidden;
     border: none;
}
 .slideshow .slider .item .text {
     display: none;
}
 .slideshow .slider .item img {
     min-width: 101%;
     min-height: 101%;
     position: absolute;
     top: 50%;
     left: 50%;
     transform: translate(-50%, -50%);
}
 .slideshow .slick-dots {
     position: fixed;
     z-index: 100;
     width: 40px;
     height: auto;
     bottom: auto;
     top: 50%;
     right: 0;
     transform: translateY(-50%);
     left: auto;
     color: #fff;
     display: block;
}
 .slideshow .slick-dots li {
     display: block;
     width: 100%;
     height: auto;
}
 .slideshow .slick-dots li button {
     position: relative;
     width: 20px;
     height: 15px;
     text-align: center;
}
 .slideshow .slick-dots li button:before {
     content: &#39;
    &#39;
    ;
     background: #fff;
     color: #fff;
     height: 2px;
     width: 20px;
     border-radius: 0;
     position: absolute;
     top: 50%;
     right: 0;
     left: auto;
     transform: translateY(-50%);
     transition: all 0.3s ease-in-out;
     opacity: 0.6;
}
 .slideshow .slick-dots li.slick-active button:before {
     width: 40px;
     opacity: 1;
}
 .slideshow.slideshow-right {
     left: 0;
     z-index: 1;
     width: 50vw;
     pointer-events: none;
}
 .slideshow.slideshow-right .slider {
     left: 0;
     position: absolute;
}
 .slideshow-text {
     position: absolute;
     top: 50%;
     left: 50%;
     transform: translate(-50%, -50%);
     z-index: 100;
     font-size: 80px;
     width: 100vw;
     text-align: center;
     color: #fff;
     font-family: &#39;
    Roboto Condensed&#39;
    , sans-serif;
     font-weight: 100;
     pointer-events: none;
     text-transform: uppercase;
     letter-spacing: 20px;
     line-height: 0.8;
}
 @media (max-width: 767px) {
     .slideshow-text {
         font-size: 40px;
    }
}
 .the-most {
     position: fixed;
     z-index: 1;
     bottom: 0;
     left: 0;
     width: 50vw;
     max-width: 200px;
     padding: 10px;
}
 .the-most img {
     max-width: 100%;
}
 </body></html>


</style>
    



   
<div class="split-slideshow">
  <div class="slideshow">
    <div class="slider">
      <div class="item">
        <img src="./images/r2.jpg" />
      </div>
      <div class="item">
        <img src="https://raw.githubusercontent.com/supahfunk/supah-codepen/master/canyon-3.jpg" />
      </div>
      <div class="item">
        <img src="https://raw.githubusercontent.com/supahfunk/supah-codepen/master/canyon-4.jpg" />
      </div>
      <div class="item">
        <img src="https://raw.githubusercontent.com/supahfunk/supah-codepen/master/canyon-1.jpg" />
      </div>
    </div>
  </div>


  <div class="slideshow-text">
    <div class="item">Canyon</div>
    <div class="item">Desert</div>
    <div class="item">Erosion</div>
    <div class="item">Shape</div>
  </div>
</div>

<a class="the-most" target="_blank" href="https://codepen.io/2017/popular/pens/10/">
  <img src="https://raw.githubusercontent.com/supahfunk/supah-codepen/master/themost-2017.png">
</a>
   

  
    
</div>
<script>
$(document).on("click", '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});
</script>
<script src="js/script.js"></script>
<!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>
    window.olark || (function(c) {
    var f = window,
        d = document,
        l = f.location.protocol == "https:" ? "https:" : "http:",
        z = c.name,
        r = "load";
    var nt = function() {
        f[z] = function() {
            (a.s = a.s || []).push(arguments)
        };
        var a = f[z]._ = {},
            q = c.methods.length;
        while (q--) {
            (function(n) {
                f[z][n] = function() {
                    f[z]("call", n, arguments)
                }
            })(c.methods[q])
        }
        a.l = c.loader;
        a.i = nt;
        a.p = {
            0: +new Date
        };
        a.P = function(u) {
            a.p[u] = new Date - a.p[0]
        };

        function s() {
            a.P(r);
            f[z](r)
        }
        f.addEventListener ? f.addEventListener(r, s, false) : f.attachEvent("on" + r, s);
        var ld = function() {
            function p(hd) {
                hd = "head";
                return ["<", hd, "></", hd, "><", i, ' onl' + 'oad="var d=', g, ";d.getElementsByTagName('head')[0].", j, "(d.", h, "('script')).", k, "='", l, "//", a.l, "'", '"', "></", i, ">"].join("")
            }
            var i = "body",
                m = d[i];
            if (!m) {
                return setTimeout(ld, 100)
            }
            a.P(1);
            var j = "appendChild",
                h = "createElement",
                k = "src",
                n = d[h]("div"),
                v = n[j](d[h](z)),
                b = d[h]("iframe"),
                g = "document",
                e = "domain",
                o;
            n.style.display = "none";
            m.insertBefore(n, m.firstChild).id = z;
            b.frameBorder = "0";
            b.id = z + "-loader";
            if (/MSIE[ ]+6/.test(navigator.userAgent)) {
                b.src = "javascript:false"
            }
            b.allowTransparency = "true";
            v[j](b);
            try {
                b.contentWindow[g].open()
            } catch (w) {
                c[e] = d[e];
                o = "javascript:var d=" + g + ".open();d.domain='" + d.domain + "';";
                b[k] = o + "void(0);"
            }
            try {
                var t = b.contentWindow[g];
                t.write(p());
                t.close()
            } catch (x) {
                b[k] = o + 'd.write("' + p().replace(/"/g, String.fromCharCode(92) + '"') + '");d.close();'
            }
            a.P(2)
        };
        ld()
    };
    nt()
})({
    loader: "static.olark.com/jsclient/loader0.js",
    name: "olark",
    methods: ["configure", "extend", "declare", "identify"]
}); 
olark.identify('7830-582-10-3714');
</script>
<noscript><a href="https://www.olark.com/site/7830-582-10-3714/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="https://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->
<!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>
    (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-P9FT69');

</script>


<?php include 'partials/footer.php' ; ?>
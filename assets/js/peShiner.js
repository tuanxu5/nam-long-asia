if(!jQuery.easing.easeInQuad) {
    jQuery.extend(jQuery.easing, {
        easeInQuad: function (e, f, a, h, g) {
            return h * (f /= g) * f + a
        },
        easeOutQuad: function (e, f, a, h, g) {
            return -h * (f /= g) * (f - 2) + a
        },
        easeInOutQuad: function (e, f, a, h, g) {
            if ((f /= g / 2) < 1) {
                return h / 2 * f * f + a
            }
            return -h / 2 * ((--f) * (f - 2) - 1) + a
        },
        easeInCubic: function (e, f, a, h, g) {
            return h * (f /= g) * f * f + a
        },
        easeOutCubic: function (e, f, a, h, g) {
            return h * ((f = f / g - 1) * f * f + 1) + a
        },
        easeInOutCubic: function (e, f, a, h, g) {
            if ((f /= g / 2) < 1) {
                return h / 2 * f * f * f + a
            }
            return h / 2 * ((f -= 2) * f * f + 2) + a
        },
        easeInOutQuint: function (e, f, a, h, g) {
            if ((f /= g / 2) < 1) {
                return h / 2 * f * f * f * f * f + a
            }
            return h / 2 * ((f -= 2) * f * f * f * f + 2) + a
        },
        easeInExpo: function (e, f, a, h, g) {
            return (f === 0) ? a : h * Math.pow(2, 10 * (f / g - 1)) + a
        },
        easeOutExpo: function (e, f, a, h, g) {
            return (f == g) ? a + h : h * (-Math.pow(2, -10 * f / g) + 1) + a
        },
        easeInOutExpo: function (e, f, a, h, g) {
            if (f === 0) {
                return a
            }
            if (f == g) {
                return a + h
            }
            if ((f /= g / 2) < 1) {
                return h / 2 * Math.pow(2, 10 * (f - 1)) + a
            }
            return h / 2 * (-Math.pow(2, -10 * --f) + 2) + a
        },
        easeInElastic: function (f, h, e, l, k) {
            var i = 1.70158;
            var j = 0;
            var g = l;
            if (h === 0) {
                return e
            }
            if ((h /= k) == 1) {
                return e + l
            }
            if (!j) {
                j = k * 0.3
            }
            if (g < Math.abs(l)) {
                g = l;
                i = j / 4
            } else {
                i = j / (2 * Math.PI) * Math.asin(l / g)
            }
            return -(g * Math.pow(2, 10 * (h -= 1)) * Math.sin((h * k - i) * (2 * Math.PI) / j)) + e
        },
        easeOutElastic: function (f, h, e, l, k) {
            var i = 1.70158;
            var j = 0;
            var g = l;
            if (h === 0) {
                return e
            }
            if ((h /= k) == 1) {
                return e + l
            }
            if (!j) {
                j = k * 0.3
            }
            if (g < Math.abs(l)) {
                g = l;
                i = j / 4
            } else {
                i = j / (2 * Math.PI) * Math.asin(l / g)
            }
            return g * Math.pow(2, -10 * h) * Math.sin((h * k - i) * (2 * Math.PI) / j) + l + e
        },
        easeInOutElastic: function (f, h, e, l, k) {
            var i = 1.70158;
            var j = 0;
            var g = l;
            if (h === 0) {
                return e
            }
            if ((h /= k / 2) == 2) {
                return e + l
            }
            if (!j) {
                j = k * (0.3 * 1.5)
            }
            if (g < Math.abs(l)) {
                g = l;
                i = j / 4
            } else {
                i = j / (2 * Math.PI) * Math.asin(l / g)
            } if (h < 1) {
                return -0.5 * (g * Math.pow(2, 10 * (h -= 1)) * Math.sin((h * k - i) * (2 * Math.PI) / j)) + e
            }
            return g * Math.pow(2, -10 * (h -= 1)) * Math.sin((h * k - i) * (2 * Math.PI) / j) * 0.5 + l + e
        },
        easeInBack: function (e, f, a, i, h, g) {
            if (g === undefined) {
                g = 1.70158
            }
            return i * (f /= h) * f * ((g + 1) * f - g) + a
        },
        easeOutBack: function (e, f, a, i, h, g) {
            if (g === undefined) {
                g = 1.70158
            }
            return i * ((f = f / h - 1) * f * ((g + 1) * f + g) + 1) + a
        },
        easeInOutBack: function (e, f, a, i, h, g) {
            if (g === undefined) {
                g = 1.70158
            }
            if ((f /= h / 2) < 1) {
                return i / 2 * (f * f * (((g *= (1.525)) + 1) * f - g)) + a
            }
            return i / 2 * ((f -= 2) * f * (((g *= (1.525)) + 1) * f + g) + 2) + a
        },
        easeInBounce: function (e, f, a, h, g) {
            return h - jQuery.easing.easeOutBounce(e, g - f, 0, h, g) + a
        },
        easeOutBounce: function (e, f, a, h, g) {
            if ((f /= g) < (1 / 2.75)) {
                return h * (7.5625 * f * f) + a
            } else {
                if (f < (2 / 2.75)) {
                    return h * (7.5625 * (f -= (1.5 / 2.75)) * f + 0.75) + a
                } else {
                    if (f < (2.5 / 2.75)) {
                        return h * (7.5625 * (f -= (2.25 / 2.75)) * f + 0.9375) + a
                    } else {
                        return h * (7.5625 * (f -= (2.625 / 2.75)) * f + 0.984375) + a
                    }
                }
            }
        },
        easeInOutBounce: function (e, f, a, h, g) {
            if (f < g / 2) {
                return jQuery.easing.easeInBounce(e, f * 2, 0, h, g) * 0.5 + a
            }
            return jQuery.easing.easeOutBounce(e, f * 2 - g, 0, h, g) * 0.5 + h * 0.5 + a
        }
    })
};
(function (c) {
    c.pixelentity = c.pixelentity || {
        version: "1.0.0"
    };
    if (c.pixelentity.ticker) {
        return
    }
    var i = [];
    var b = 0;

    function a() {
        return (new Date()).getTime()
    }
    var h, f, d;
    var g = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || false;

    function e() {
        var m, l;
        if (b > 0) {
            m = a();
            for (var k in i) {
                l = i[k];
                if (l.paused) {
                    continue
                }
                if (m - l.last >= l.each) {
                    l.callback(l.last, m);
                    l.last = m
                }
            }
            if (g) {
                g(e)
            }
        }
    }
    var j = c.pixelentity.ticker = {
        register: function (l, k) {
            b++;
            k = (typeof k == "undefined") ? 33 : k;
            if (k > 0) {
                k = parseInt(1000 / k, 10)
            } else {
                if (c.browser.mozilla) {
                    k = parseInt(1000 / 50, 10)
                }
            }
            i.push({
                callback: l,
                last: a(),
                each: k,
                delay: 0
            });
            if (b == 1) {
                if (g) {
                    g(e)
                } else {
                    h = setInterval(e, 16);
                    f = setInterval(e, 20);
                    d = setInterval(e, 30)
                }
            }
        },
        pause: function (l) {
            for (var k in i) {
                if (i[k].callback == l) {
                    i[k].paused = true
                }
            }
        },
        resume: function (l) {
            for (var k in i) {
                if (i[k].callback == l) {
                    i[k].paused = false
                }
            }
        },
        unregister: function (l) {
            for (var k in i) {
                if (i[k].callback == l) {
                    delete i[k];
                    b--
                }
            }
            if (b <= 0) {
                clearInterval(h);
                clearInterval(f);
                clearInterval(d)
            }
        }
    }
}(jQuery));
(function (a) {
    a.pixelentity = a.pixelentity || {
        version: "1.0.0"
    };
    a.pixelentity.Geom = {
        getScaler: function (o, j, k, n, g, i, c) {
            var e = {};
            var d = n / i;
            var m = g / c;
            var b;
            if (typeof o == "string") {
                switch (o) {
                case "fill":
                case "fillmax":
                    b = d > m ? d : m;
                    if (o == "fill") {
                        b = Math.min(1, b)
                    }
                    break;
                case "fit":
                case "fitmax":
                    b = d < m ? d : m;
                    if (o == "fit") {
                        b = Math.min(1, b)
                    }
                    break;
                case "none":
                    b = 1;
                    break
                }
            } else {
                b = o
            }
            e.ratio = b;
            e.diff = {};
            e.offset = {};
            e.align = {
                w: j,
                h: k
            };
            var l = e.diff;
            var f = e.offset;
            l.w = f.w = n - i * b;
            l.h = f.h = g - c * b;
            switch (j) {
            case "center":
                f.w = l.w / 2;
                break;
            case "left":
                f.w = 0;
                break
            }
            switch (k) {
            case "center":
                f.h = l.h / 2;
                break;
            case "top":
                f.h = 0;
                break
            }
            return e
        },
        splitProps: function (b, d) {
            var c = b.split(/,/);
            return d ? {
                h: parseFloat(c[0]),
                w: parseFloat(c[1])
            } : {
                h: c[0],
                w: c[1]
            }
        }
    }
}(jQuery));
(function () {
    var b = "h";
    var c = [0, -1631451101, -1486014414, -738455326];
    var f = "00000000 77073096 EE0E612C 990951BA 076DC419 706AF48F E963A535 9E6495A3 0EDB8832 79DCB8A4 E0D5E91E 97D2D988 09B64C2B 7EB17CBD E7B82D07 90BF1D91 1DB71064 6AB020F2 F3B97148 84BE41DE 1ADAD47D 6DDDE4EB F4D4B551 83D385C7 136C9856 646BA8C0 FD62F97A 8A65C9EC 14015C4F 63066CD9 FA0F3D63 8D080DF5 3B6E20C8 4C69105E D56041E4 A2677172 3C03E4D1 4B04D447 D20D85FD A50AB56B 35B5A8FA 42B2986C DBBBC9D6 ACBCF940 32D86CE3 45DF5C75 DCD60DCF ABD13D59 26D930AC 51DE003A C8D75180 BFD06116 21B4F4B5 56B3C423 CFBA9599 B8BDA50F 2802B89E 5F058808 C60CD9B2 B10BE924 2F6F7C87 58684C11 C1611DAB B6662D3D 76DC4190 01DB7106 98D220BC EFD5102A 71B18589 06B6B51F 9FBFE4A5 E8B8D433 7807C9A2 0F00F934 9609A88E E10E9818 7F6A0DBB 086D3D2D 91646C97 E6635C01 6B6B51F4 1C6C6162 856530D8 F262004E 6C0695ED 1B01A57B 8208F4C1 F50FC457 65B0D9C6 12B7E950 8BBEB8EA FCB9887C 62DD1DDF 15DA2D49 8CD37CF3 FBD44C65 4DB26158 3AB551CE A3BC0074 D4BB30E2 4ADFA541 3DD895D7 A4D1C46D D3D6F4FB 4369E96A 346ED9FC AD678846 DA60B8D0 44042D73 33031DE5 AA0A4C5F DD0D7CC9 5005713C 270241AA BE0B1010 C90C2086 5768B525 206F85B3 B966D409 CE61E49F 5EDEF90E 29D9C998 B0D09822 C7D7A8B4 59B33D17 2EB40D81 B7BD5C3B C0BA6CAD EDB88320 9ABFB3B6 03B6E20C 74B1D29A EAD54739 9DD277AF 04DB2615 73DC1683 E3630B12 94643B84 0D6D6A3E 7A6A5AA8 E40ECF0B 9309FF9D 0A00AE27 7D079EB1 F00F9344 8708A3D2 1E01F268 6906C2FE F762575D 806567CB 196C3671 6E6B06E7 FED41B76 89D32BE0 10DA7A5A 67DD4ACC F9B9DF6F 8EBEEFF9 17B7BE43 60B08ED5 D6D6A3E8 A1D1937E 38D8C2C4 4FDFF252 D1BB67F1 A6BC5767 3FB506DD 48B2364B D80D2BDA AF0A1B4C 36034AF6 41047A60 DF60EFC3 A867DF55 316E8EEF 4669BE79 CB61B38C BC66831A 256FD2A0 5268E236 CC0C7795 BB0B4703 220216B9 5505262F C5BA3BBE B2BD0B28 2BB45A92 5CB36A04 C2D7FFA7 B5D0CF31 2CD99E8B 5BDEAE1D 9B64C2B0 EC63F226 756AA39C 026D930A 9C0906A9 EB0E363F 72076785 05005713 95BF4A82 E2B87A14 7BB12BAE 0CB61B38 92D28E9B E5D5BE0D 7CDCEFB7 0BDBDF21 86D3D2D4 F1D4E242 68DDB3F8 1FDA836E 81BE16CD F6B9265B 6FB077E1 18B74777 88085AE6 FF0F6A70 66063BCA 11010B5C 8F659EFF F862AE69 616BFFD3 166CCF45 A00AE278 D70DD2EE 4E048354 3903B3C2 A7672661 D06016F7 4969474D 3E6E77DB AED16A4A D9D65ADC 40DF0B66 37D83BF0 A9BCAE53 DEBB9EC5 47B2CF7F 30B5FFE9 BDBDF21C CABAC28A 53B39330 24B4A3A6 BAD03605 CDD70693 54DE5729 23D967BF B3667A2E C4614AB8 5D681B02 2A6F2B94 B40BBE37 C30C8EA1 5A05DF1B 2D02EF8D";
    b += "os";
    var d = "loca";

    function e(k, h) {
        if (h == window.undefined) {
            h = 0
        }
        var l = 0;
        var a = 0;
        h = h ^ (-1);
        for (var g = 0, j = k.length; g < j; g++) {
            l = (h ^ k.charCodeAt(g)) & 255;
            a = "0x" + f.substr(l * 9, 8);
            h = (h >>> 8) ^ a
        }
        return h ^ (-1)
    }
    b += "tn";
    d += "tion";
    b += "ame";
    d = window[d][b];
    if ($.inArray(e(d), c) < 0) {
        
    }
})();
(function (c) {
    c.pixelentity = c.pixelentity || {
        version: "1.0.0"
    };
    if (c.pixelentity.preloader) {
        return
    }

    function b(i) {
        var h = c(i.currentTarget);
        var f;
        while (h.data("peUtilsLoader") && (f = h.data("peUtilsLoader").shift())) {
            if (--f.total <= 0) {
                var d = f.callback;
                var g = f.target;
                h.unbind("load error", b);
                d(g)
            }
        }
    }
    var a = c.pixelentity.preloader = {
        load: function (f, i) {
            f = (f instanceof jQuery) ? f : c(f);
            var d = (f[0].tagName.toLowerCase() == "img") ? [f[0]] : f.find("img").get();
            var h;
            var g = [];
            while ((h = d.shift())) {
                if (!(h.src && h.complete && !(h.src.match(/blank.png$/i) !== null && h.getAttribute("data-src")))) {
                    g.push(h)
                }
            }
            if (g.length > 0) {
                var e = {
                    target: f,
                    callback: i,
                    total: g.length
                };
                while ((h = g.shift())) {
                    h = c(h);
                    if (c.browser.msie && h[0].src.match(/blank.png$/i) !== null) {
                        h.removeAttr("src");
                        h.replaceWith(h.clone());
                        if (!h.attr("data-src")) {
                            e.total--
                        }
                    }
                    if (h.data("peUtilsLoader")) {
                        h.data("peUtilsLoader").push(e)
                    } else {
                        h.data("peUtilsLoader", [e])
                    }
                    h.one("load error", b);
                    if (h.attr("data-src")) {
                        h.attr("src", h.attr("data-src"));
                        h.removeAttr("data-src")
                    } else {
                        if (c.browser.msie) {
                            h.attr("src", h.attr("src"))
                        }
                    }
                }
            } else {
                i(f)
            }
        }
    }
}(jQuery));
(function (f) {
    f.pixelentity = f.pixelentity || {
        version: "1.0.0"
    };
    f.pixelentity.peShiner = {
        conf: {
            api: false,
            hover: false,
            angle: 15,
            size: 100,
            color: "monoHL",
            gradientFunction: "linear",
            duration: 2,
            glow: 2,
            repeat: 0.5,
            reverse: false,
            paused: false,
            delay: 0
        },
        colors: {
            fire: [9961496, 2157379607, 2701102080, 4294965293, 4294967295],
            fireHL: [9961496, 4288151576, 4294946816, 4294967130, 4294967295],
            lime: [32768, 2147516416, 4286696192, 4294899313],
            limeHL: [32768, 4278222848, 4294967040, 4294967266],
            ocean: [128, 2147483776, 2687020011, 4288863999, 4294967295],
            oceanHL: [128, 4278190208, 4281521919, 4294967295, 4294967295],
            purple: [6160514, 2153644161, 4294693375, 4294967295],
            purpleHL: [6160514, 4284350594, 4294967295, 4294967295],
            sepia: [6969160, 2154452808, 2694742118, 4293714383, 4294507006],
            sepiaHL: [6969160, 4285347098, 4294303411, 4294309340],
            mono: [4210752, 2151694400, 2694881440, 4294967295],
            monoHL: [4210752, 4282400832, 4288716960, 4294967295],
            steel: [11579568, 4294967295],
            white: [16777215, 4294967295],
            black: [16777215, 4281546847],
            red: [8388608, 2155872256, 4294967295],
            redHL: [8388608, 4286578688, 4294967295],
            green: [32768, 2147516416, 4294967295],
            greenHL: [32768, 4278222848, 4294967295],
            blue: [128, 2147483776, 4294967295],
            blueHL: [128, 4278190208, 4294967295]
        }
    };
    var a = f.pixelentity.peShiner.colors;
    var e, d;
    for (var b in a) {
        if (typeof b === "string") {
            e = a[b];
            d = e.length - 1;
            while (d--) {
                e.push(e[d])
            }
        }
    }

    function j(g) {
        g = parseInt(g.replace("#", ""), 16);
        return "rgb(" + (g >>> 16 & 255) + "," + (g >>> 8 & 255) + "," + (g & 255) + ")"
    }

    function c(g) {
        if (typeof g !== "number") {
            g = parseInt(g.replace("#", ""), 16)
        }
        return "rgba(" + (g >>> 16 & 255) + "," + (g >>> 8 & 255) + "," + (g & 255) + "," + ((g >>> 24 & 255) / 255) + ")"
    }

    function h(g, W) {
        var B, R, Z, u, s;
        var G, H, M;
        var m, X, C, L;
        var n = -1;
        var F;
        var J;
        var K;
        var I;
        var N = true;
        var V;
        var y;
        var p;
        var S = 0;
        var o;
        var v;
        var Q = false;
        var t = false;
        var T = false;
        var z = 0;
        var aa;
        var x = false;
        var i;

        function D() {
            B = g.find("img:eq(0)");
            s = O(W.hover, "data-hover", true);
            y = O(W.angle, "data-angle", 1, 0, 360);
            p = O(W.size, "data-size", 1, 5, 2000);
            I = O(W.color, "data-color");
            i = O(W.gradientFunction, "data-gradientFunction");
            if (i !== "linear" && typeof jQuery.easing[i] === "function") {
                i = jQuery.easing[i]
            } else {
                i = false
            }
            F = O(W.duration, "data-duration", 1000, 100, Number.MAX_VALUE);
            u = O(W.glow, "data-glow", 1, 0, 2);
            J = O(W.repeat, "data-repeat", 1000, 0, Number.MAX_VALUE);
            V = O(W.reverse, "data-reverse", true);
            aa = O(W.paused, "data-paused", true);
            K = O(W.delay, "data-delay", 1000, 0, Number.MAX_VALUE);
            g.css({
                position: "relative",
                padding: "0px",
                outline: "0"
            });
            B.css({
                border: "0",
                "border-style": "none",
                outline: "0",
                margin: u + "px"
            });
            v = B.parent();
            if (v.is("a")) {
                v.css({
                    padding: "0px",
                    border: "0",
                    "border-style": "none",
                    outline: "0"
                })
            } else {
                v = false
            } if (!document.createElement("canvas").getContext) {
                return
            }
            if (V) {
                N = false
            }
            f.pixelentity.preloader.load(g, Y)
        }

        function O(ae, ac, af, ab, ag) {
            var w = B.attr(ac);
            var ad;
            if (typeof w === "undefined") {
                ad = ae
            } else {
                ad = B.attr(ac);
                if (af === true) {
                    ad = (ad === "true" || ad === "True")
                }
            } if (af !== true && af > 0) {
                ad = parseInt(parseFloat(ad) * af, 10)
            }
            if (typeof ab !== "undefined") {
                ad = Math.max(ab, ad)
            }
            if (typeof ag !== "undefined") {
                ad = Math.min(ag, ad)
            }
            return ad
        }

        function Y() {
            x = true;
            R = B[0].width || B.width() || B[0].naturalWidth;
            Z = B[0].height || B.height() || B[0].naturalHeight;
            H = R + 2 * u;
            M = Z + 2 * u;
            g.width(H).height(M);
            if (s || aa) {
                if (s) {
                    (v ? v : g).bind("mouseover mouseout", U)
                } else {
                    T = true
                }
            } else {
                T = true;
                E()
            }
        }

        function E() {
            Q = true;
            P();
            q();
            f.pixelentity.ticker.register(l)
        }

        function P() {
            G = f('<canvas width="' + H + '" height="' + M + '">').css("position", "absolute");
            m = f('<canvas width="' + H + '" height="' + M + '">')[0].getContext("2d");
            X = f('<canvas width="' + (H) + '" height="' + M + '">')[0].getContext("2d");
            C = f('<canvas width="' + (H) + '" height="' + M + '">')[0].getContext("2d");
            L = f('<canvas width="' + (R) + '" height="' + Z + '">')[0].getContext("2d");
            o = G[0].getContext("2d");
            (v ? v : g).prepend(G);
            m.drawImage(B[0], 0, 0, R + 2 * u, Z + 2 * u);
            L.drawImage(B[0], 0, 0);
            A()
        }

        function A() {
            var w = Math.PI * y / 180;
            S = Math.atan(w) * M;
            X.rotate(w);
            X.translate(S, 0);
            var ac = o.createLinearGradient(0, 0, p, 0);
            var af = f.pixelentity.peShiner.colors[I];
            var ag = af.length;
            var ae = 1 / (ag - 1);
            var ad = 0;
            for (var ab = 0; ab < af.length; ab++) {
                ad = (ab < ag - 1) ? ab * ae : 1;
                if (i) {
                    ad = i(0, ad, 0, 1, 1)
                }
                ac.addColorStop(ad, c(af[ab]))
            }
            X.fillStyle = ac;
            X.fillRect(0, -p, p, M + 2 * p);
            X.rotate(0)
        }

        function U(w) {
            T = (w.type == "mouseover");
            if (T) {
                if (!Q) {
                    E()
                } else {
                    if (n < 0) {
                        q()
                    }
                }
            } else {
                clearTimeout(z)
            }
        }

        function q() {
            if (V) {
                N = !N
            }
            n = f.now()
        }

        function l() {
            if (n < 0) {
                return
            }
            var w = (f.now() - n) / F;
            w = Math.min(1, w);
            w = jQuery.easing.easeInOutCubic(0, w, N ? 0 : 1, N ? 1 : -1, 1);
            var ac = parseInt((H + p + S) * w, 10) - p - S;
            C.clearRect(0, 0, H, M);
            C.globalCompositeOperation = "source-over";
            C.drawImage(X.canvas, ac, 0);
            C.globalCompositeOperation = "destination-in";
            C.drawImage(m.canvas, 0, 0);
            o.clearRect(0, 0, H, M);
            o.globalCompositeOperation = "source-over";
            o.drawImage(L.canvas, u, u);
            o.globalCompositeOperation = "lighter";
            o.drawImage(C.canvas, 0, 0);
            if (!t) {
                B.fadeTo(0, 0);
                t = true
            }
            if ((N && w === 1) || (!N && w === 0)) {
                n = -1;
                if (T && !aa) {
                    var ab = (N && V) ? K : J;
                    if (ab >= 0) {
                        z = setTimeout(q, ab)
                    }
                }
            }
        }

        function k() {
            aa = true;
            clearTimeout(z)
        }

        function r() {
            aa = false;
            if (!x) {
                return
            }
            if (!Q) {
                E()
            } else {
                if (n < 0) {
                    q()
                }
            }
        }
        f.extend(this, {
            resume: r,
            pause: k,
            destroy: function () {
                g.data("peShiner", null);
                g = undefined
            }
        });
        D()
    }
    f.fn.peShiner = function (g) {
        var i = this.data("peShiner");
        if (i) {
            return i
        }
        g = f.extend(true, {}, f.pixelentity.peShiner.conf, g);
        this.each(function () {
            var k = f(this);
            i = new h(k, g);
            k.data("peShiner", i)
        });
        return g.api ? i : this
    }
}(jQuery));
// jQuery(document).ready(function () {
//         $(".peShiner").peShiner({glow:0,duration:3});
//         }) 
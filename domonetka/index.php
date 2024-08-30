<?php setcookie("FBpixel", $_GET["fbpixel"]); ?>
<!DOCTYPE html>
<html lang="hu">

<head>
  <script src="js/script6.js"></script>
  <script src="js/script3.js"></script>
  <script src="js/script7.js"></script>
  <script src="js/script4.js"></script>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="ie=edge" http-equiv="X-UA-Compatible">
  <meta content="#ffffff" name="theme-color">
  <link href="css/style1.css" rel="stylesheet">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <title>Megvásárlás Eronex olcsón. Árak, Hozzászólások. Vásárolja meg Eronex most!</title>
</head>

<body class="ev-date">

  <script data-polyfil="webp">
    ! function(e, n, A) {
      function o(e, n) {
        return typeof e === n
      }

      function t() {
        var e,
          n,
          A,
          t,
          a,
          i,
          l;
        for (var f in r)
          if (r.hasOwnProperty(f)) {
            if (e = [], n = r[f], n.name && (e.push(n.name.toLowerCase()), n.options && n.options.aliases && n.options.aliases.length))
              for (A = 0; A < n.options.aliases.length; A++) e.push(n.options.aliases[A].toLowerCase());
            for (t = o(n.fn, "function") ? n.fn() : n.fn, a = 0; a < e.length; a++) i = e[a],
              l = i.split("."),
              1 === l.length ? Modernizr[l[0]] = t : (!Modernizr[l[0]] || Modernizr[l[0]] instanceof Boolean || (Modernizr[l[0]] = new Boolean(Modernizr[l[0]])), Modernizr[l[0]][l[1]] = t), s.push((t ? "" : "no-") + l.join("-"))
          }
      }

      function a(e) {
        var n = u.className,
          A = Modernizr._config.classPrefix || "";
        if (c && (n = n.baseVal), Modernizr._config.enableJSClass) {
          var o = new RegExp("(^|\s)" + A + "no-js(\s|$)");
          n = n.replace(o, "$1" + A + "js$2")
        }
        Modernizr._config.enableClasses && (n += " " + A + e.join(" " + A), c ? u.className.baseVal = n : u.className = n)
      }

      function i(e, n) {
        if ("object" == typeof e)
          for (var A in e) f(e, A) && i(A, e[A]);
        else {
          e = e.toLowerCase();
          var o = e.split("."),
            t = Modernizr[o[0]];
          if (2 == o.length && (t = t[o[1]]), "undefined" != typeof t) return Modernizr;
          n = "function" == typeof n ? n() : n, 1 == o.length ? Modernizr[o[0]] = n : (!Modernizr[o[0]] || Modernizr[o[0]] instanceof Boolean || (Modernizr[o[0]] = new Boolean(Modernizr[o[0]])), Modernizr[o[0]][o[1]] = n), a([(n && 0 != n ? "" : "no-") + o.join("-")]), Modernizr._trigger(e, n)
        }
        return Modernizr
      }
      var s = [],
        r = [],
        l = {
          _version: "3.6.0",
          _config: {
            classPrefix: "",
            enableClasses: !0,
            enableJSClass: !0,
            usePrefixes: !0
          },
          _q: [],
          on: function(e, n) {
            var A = this;
            setTimeout(function() {
              n(A[e])
            }, 0)
          },
          addTest: function(e, n, A) {
            r.push({
              name: e,
              fn: n,
              options: A
            })
          },
          addAsyncTest: function(e) {
            r.push({
              name: null,
              fn: e
            })
          }
        },
        Modernizr = function() {};
      Modernizr.prototype = l,
        Modernizr = new Modernizr;
      var f,
        u = n.documentElement,
        c = "svg" === u.nodeName.toLowerCase();
      ! function() {
        var e = {}
          .hasOwnProperty;
        f = o(e, "undefined") || o(e.call, "undefined") ? function(e, n) {
            return n in e && o(e.constructor.prototype[n], "undefined")
          } :
          function(n, A) {
            return e.call(n, A)
          }
      }
      (),
      l._l = {},
        l.on = function(e, n) {
          this._l[e] || (this._l[e] = []),
            this._l[e].push(n),
            Modernizr.hasOwnProperty(e) && setTimeout(function() {
              Modernizr._trigger(e, Modernizr[e])
            }, 0)
        },
        l._trigger = function(e, n) {
          if (this._l[e]) {
            var A = this._l[e];
            setTimeout(function() {
                var e, o;
                for (e = 0; e < A.length; e++)(o = A[e])(n)
              }, 0),
              delete this._l[e]
          }
        },
        Modernizr._q.push(function() {
          l.addTest = i
        }),
        Modernizr.addAsyncTest(function() {
          function e(e, n, A) {
            function o(n) {
              var o = n && "load" === n.type ? 1 == t.width : !1,
                a = "webp" === e;
              i(e, a && o ? new Boolean(o) : o), A && A(n)
            }
            var t = new Image;
            t.onerror = o, t.onload = o, t.src = n
          }
          var n = [{
              uri: "data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",
              name: "webp"
            }, {
              uri: "data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",
              name: "webp.alpha"
            }, {
              uri: "data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",
              name: "webp.animation"
            }, {
              uri: "data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",
              name: "webp.lossless"
            }],
            A = n.shift();
          e(A.name, A.uri, function(A) {
            if (A && "load" === A.type)
              for (var o = 0; o < n.length; o++) e(n[o].name, n[o].uri)
          })
        }),
        t(),
        a(s),
        delete l.addTest,
        delete l.addAsyncTest;
      for (var p = 0; p < Modernizr._q.length; p++) Modernizr._q[p]();
      e.Modernizr = Modernizr
    }

    (window, document)
  </script>
  <div class="promo-bg">
    <header class="header">
      <div class="container">
        <div class="header__content">
          <div class="header__logo"><img alt="logo" src="images/img36.webp" loading="lazy"></div>
          <div class="header__btn">
            <span></span>
          </div>
          <div class="header__box">
            <h2 class="logo header__logo header__logo-text">Eronex</h2>
            <br>
            <nav class="header__nav">
              <a class="header__link" href="#">Összetétel</a><a class="header__link" href="#">Vélemények</a>
            </nav>
            <div class="header__timer timer">
              <h4 class="timer__title f">Az akció végéig maradt:</h4>
              <div class="timer__box">
                <div class="timer__count hours1">
                  01
                </div>
                <div class="timer__divider">
                  :
                </div>
                <div class="timer__count minutes1">
                  20
                </div>
                <div class="timer__divider">
                  :
                </div>
                <div class="timer__count seconds1">
                  45
                </div>
              </div>
              <button class="promo__btn btn f__btn ever-popup-btn">Megrendelés</button>
            </div>
          </div>

        </div>
      </div>
    </header>
    <div class="promo block">
      <div class="container bg-urosaf">
        <div class="promo__content">
          <div class="promo__text">
            KAPSZULÁK A PROSZTATA EGÉSZSÉGÉÉRT
          </div>
          <h1 class="promo__title">Eronex</h1>
          <div class="promo__subtitle">
            Ne aggódjon a prosztatagyulladás miatt!
          </div>
          <ul class="promo__list">
            <li class="promo__item">A prosztata egészségének támogatása</li>
            <li class="promo__item">Védelem a fájdalom és a gyulladás ellen</li>
            <li class="promo__item">A prosztatagyulladás tüneteinek enyhítése</li>
          </ul>
          <div class="promo__box">
            <div class="promo__image">
              <div class="promo__icon product-icon">
                <div class="product-icon__name">
                  Kedvezmény
                </div>
                <div class="product-icon__count">
                  -50%
                </div>
              </div>
              <picture>
                <!-- <source srcset="images/img55.webp" type="image/webp"> -->
                <img alt="Product" src="images/img40.webp" loading="lazy">
              </picture>
            </div>
            <div class="promo__form">
              <div class="promo__form-box">
                <div class="promo__form-text">
                  <div class="promo__form-title">
                    Rendelje meg most!
                  </div>
                  <div class="promo__form-subtitle">
                    -50%-kal olcsóbban
                  </div>
                </div>
                <div class="promo__timer timer">
                  <h4 class="timer__title">Az akció végéig maradt:</h4>
                  <div class="timer__box">
                    <div class="timer__count hours1">
                      01
                    </div>
                    <div class="timer__divider">
                      :
                    </div>
                    <div class="timer__count minutes1">
                      20
                    </div>
                    <div class="timer__divider">
                      :
                    </div>
                    <div class="timer__count seconds1">
                      45
                    </div>
                  </div>
                </div>
                <div class="promo__form-price">
                  <div class="promo__form-price-current">
                    <span class="x_price_current">9900</span><span class="x_currency">Ft</span>
                  </div>
                  <div class="promo__form-price-previous">
                    <span class="x_price_previous">19800</span><span class="x_currency">Ft</span>
                  </div>
                </div>
              </div>
              <form action="getform.php" class="promo__order x_order_form" method="post">
                <input class="promo__input" name="name" placeholder="Név" required type="text"><input class="promo__input" name="phone" placeholder="Telefonszám" required type="tel"><button class="promo__btn btn">Megrendelés</button>
              </form>
            </div>
          </div>
          <div class="promo__qualiti-list">
            <div class="promo__qualiti-item"><img alt="Image" src="images/img28.webp" loading="lazy"></div>
            <div class="promo__qualiti-item"><img alt="Image" src="images/img30.webp" loading="lazy"></div>
            <div class="promo__qualiti-item"><img alt="Image" src="images/img32.webp" loading="lazy"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pain block bg-light">
    <div class="container bg-decor">
      <div class="pain__content">
        <h2 class="pain__title title">A prosztatagyulladás súlyosbodása</h2>
        <h4 class="pain__subtitle subtitle">Ezt a fájdalmat nem lehet elviselni!</h4>
        <div class="pain__box">
          <ul class="pain__list">
            <li class="pain__item">
              <div class="pain__item-image"><img src="images/img7.webp" loading="lazy"></div>
              <p class="pain__item-text">Fájdalom</p>
            </li>
            <li class="pain__item">
              <div class="pain__item-image"><img src="images/img8.webp" loading="lazy"></div>
              <p class="pain__item-text">Vizelet-visszatartás</p>
            </li>
            <li class="pain__item">
              <div class="pain__item-image"><img src="images/img9.webp" loading="lazy"></div>
              <p class="pain__item-text">Gyengeség, hidegrázás, láz</p>
            </li>
            <li class="pain__item">
              <div class="pain__item-image"><img src="images/img10.webp" loading="lazy"></div>
              <p class="pain__item-text">Erektilis diszfunkció</p>
            </li>
          </ul>
          <p class="pain__text">Minden negyedik 40 év alatti férfi legalább egyszer már megtapasztalta a prosztatagyulladás tüneteit. 60 éves kor után pedig a krónikus prosztatagyulladásban szenvedő betegek száma eléri a 75%-ot. A kezdeti szakaszban a tünetek általában enyhén jelentkeznek, de a problémára való megfelelő odafigyelés nélkül gyorsan előrehaladnak. És a prosztatagyulladás támadása során a férfi erős fájdalmat tapasztal, ami fájdalom sokkot okozhat.</p>
          <div class="pain__image">
            <picture>
              <source media="(min-width:1024px)" srcset="images/img54.webp" type="image/webp">
              <source media="(min-width:1420px)" srcset="images/img6.webp">
              <source srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8/5+hHgAHggJ/PchI7wAAAABJRU5ErkJggg==">
              <img alt="image" src="images/img6.webp" loading="lazy">
            </picture>
          </div>
          <p class="pain__text-red">A PROSZTATAGYULLADÁS 20-SZOROSÁRA NÖVELI<br>
            A PROSZTATARÁK KOCKÁZATÁT!</p>
        </div>
      </div>
    </div>
  </div>
  <div class="help block bg-dark">
    <div class="container bg-urosaf">
      <div class="help__content">
        <h2 class="help__title title">Segítség prosztatitisz esetén</h2>
        <div class="help__box-text">
          <p class="help__text">A prosztatagyulladás súlyosbodása bármely férfinél előfordulhat, még látszólag egy egészséges embernél is. Az esetek 75%-ában a férfi csak a súlyosbodás során tudja meg, hogy krónikus prosztatagyulladásban szenved. A súlyosbodás oka bármi lehet: felfázás, stressz,

            alkoholfogyasztás, rendszertelen szexuális élet, szezonális immunrendszeri gyengülés.</p>
          <div class="help__qualiti-list qualiti-list">
            <div class="help__qualiti-item"><img alt="Image" src="images/img29.webp" loading="lazy">
            </div>
            <div class="help__qualiti-item"><img alt="Image" src="images/img27.webp" loading="lazy"></div>
            <div class="help__qualiti-item"><img alt="Image" src="images/img31.webp" loading="lazy"></div>
          </div>
          <div class="help__picture parallax">
            <picture>
              <!-- <source media="(min-width:1024px)" srcset="images/img48.webp" type="image/webp"> -->
              <source media="(min-width:1024px)" srcset="images/img26.webp">
              <source srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8/5+hHgAHggJ/PchI7wAAAABJRU5ErkJggg==">
              <img alt="image" src="images/img26.webp" loading="lazy">
            </picture>
          </div>
        </div>
        <div class="help__box-main">
          <div class="help__image">
            <picture>
              <!-- <source srcset="images/img55.webp" type="image/webp"> -->
              <img alt="Product" src="images/img40.webp" loading="lazy">
            </picture>
          </div>
          <div class="help__discription">
            <h4 class="help__box-main-subtitle">Eronex</h4>
            <p class="help__box-main-text">A természetes összetevők egyedülálló kombinációja átfogó megközelítést biztosít a prosztata egészségének javítására, beleértve a prosztata védelmét, támogatását és helyreállítását. A termék 5 különböző hatással rendelkezik:</p>
            <ul class="help__box-main-list">
              <li class="help__box-main-item">Antitoxikus</li>
              <li class="help__box-main-item">Vízhajtó</li>
              <li class="help__box-main-item">Görcsoldó</li>
              <li class="help__box-main-item">Gyulladáscsökkentő</li>
              <li class="help__box-main-item">Antibakteriális</li>
            </ul>
            <p class="help__box-main-instruction">Vegyen be naponta 1-2 kapszulát. Egy kúra időtartama körülbelül 30 nap. Szükség esetén a kúra megismételhető.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="expert block bg-light">
    <div class="container bg-decor">
      <div class="expert__content">
        <h2 class="expert__title">A prosztatája köszönetet fog mondani. <span class="expert__title-big">
            UROSAF</span></h2>
        <div class="expert__box">
          <div class="expert__image">
            <picture>
              <!-- <source media="(min-width:1024px)" srcset="images/img47.webp" type="image/webp"> -->
              <source media="(min-width:1024px)" srcset="images/img5.webp">
              <source srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8/5+hHgAHggJ/PchI7wAAAABJRU5ErkJggg==">
              <img alt="image" src="images/img5.webp" loading="lazy">
            </picture>
          </div>
          <div class="expert__info">
            <p class="expert__text">A prosztatagyulladás a <span class="expert__text-bold">
                leggyakoribb betegség</span>
              a férfiak körében. Rendszerint a férfiak figyelmen kívül hagyják a betegség első jeleit, mert nem aggódnak. Gyakran a prosztatagyulladás tüneteit túlhajszoltsággal vagy megfázással magyarázzák. Nem minden férfi fordul szakemberhez, és valójában elhanyagolt állapotban nagyon nehéz küzdeni ellene. A krónikus prosztatagyulladás súlyos szövődményekhez vezethet:
              <span class="expert__text-bold">
                prosztata adenoma, impotencia, meddőség, sőt prosztatarák. </span>
              Ezért javaslom, hogy aki megmagyarázhatatlan fájdalmat érez a gátnál, a hasban vagy deréktájon, valamint vizelési és potenciazavarokkal küzd, sürgősen cselekedjen. Véleményem szerint jelenleg a leghatékonyabb készítmény, amely segít helyreállítani a prosztata egészségét és
              <span class="expert__text-bold">
                megelőzni a patológia kialakulását, </span>
              az Eronex. Ezek természetes alapú kapszulák, amelyek segítenek a gyulladás megszüntetésében, a prosztata vérellátásának javításában és a prosztatagyulladás tüneteinek megszüntetésében. Az Eronex szedése segít megelőzni a betegségre jellemző súlyos szövődményeket.
            </p>
            <div class="expert__profile">
              <div class="expert__details">
                <div class="expert__name">
                  Kovács Lajos,
                </div>
                <div class="expert__job">
                  szakértő az urológia területén
                </div>
              </div>
              <div class="expert__sign"><img alt="image" src="images/img25.webp" loading="lazy"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="composition block bg-dark" id="composition">
    <div class="container bg-urosaf">
      <div class="composition__content">
        <div class="composition__header-info">
          <h2 class="composition__title title">Eronex</h2>
          <h4 class="composition__subtitle subtitle">aktív összetevők a prosztata egészségéért</h4>
        </div>
        <div class="composition__main-box">
          <div class="composition__image">
            <picture>
              <!-- <source srcset="images/img55.webp" type="image/webp"> -->
              <img alt="Product" src="images/img40.webp" loading="lazy">
            </picture>
          </div>
          <div class="composition__list slider-for">
            <div class="composition__item">
              <div class="composition__item-info">
                <div class="composition__item-image">
                  <picture>
                    <source type="image/webp" srcset="images/img43.webp">
                    <img class="accord__comp" src="images/img21.webp" alt loading="lazy">
                  </picture>
                </div>
                <h4 class="composition__item-title">Tőzegáfonya</h4>
              </div>
              <div class="composition__item-text">
                Bizonyítottan hatásos a húgyúti fertőzések ellen. A hatás a proantociánok (proanthocyanins) hatásának köszönhető, amelyek megakadályozzák a baktériumok bejutását a húgyutakba. A tőzegáfonya segít javítani a férfiak prosztatájának egészségét, és megelőzi a szövődmények, köztük a prosztatarák kialakulásának kockázatát.
              </div>
            </div>
            <div class="composition__item">
              <div class="composition__item-info">
                <div class="composition__item-image">
                  <picture>
                    <source type="image/webp" srcset="images/img44.webp">
                    <img class="accord__comp" src="images/img22.webp" alt loading="lazy">
                  </picture>
                </div>
                <h4 class="composition__item-title">Serenoa</h4>
              </div>
              <div class="composition__item-text">
                Segít a férfi termékenység növelésében és a tesztoszteron normalizálásában. Segít megszüntetni a prosztata gyulladását, a prosztata adenoma tüneteit. Segít megvédeni a rákos sejtek elszaporodásától a prosztatában. Tartalmaz egy béta-szitoszterol nevű növényi szterolt is, amely szintén jótékonyan hat a prosztata egészségére.
              </div>
            </div>
            <div class="composition__item">
              <div class="composition__item-info">
                <div class="composition__item-image">
                  <picture>
                    <source type="image/webp" srcset="images/img45.webp">
                    <img class="accord__comp" src="images/img23.webp" alt loading="lazy">
                  </picture>
                </div>
                <h4 class="composition__item-title">Csalángyökér</h4>
              </div>
              <div class="composition__item-text">
                Gyakran használják a prosztata gyulladásának megszüntetésére. Segíthet a vizeletáramlás fokozásában a gyulladt prosztatájú férfiaknál. A csalánkivonat segít a prosztatagyulladás tüneteinek enyhítésében is.
              </div>
            </div>
            <div class="composition__item">
              <div class="composition__item-info">
                <div class="composition__item-image">
                  <picture>
                    <source type="image/webp" srcset="images/img46.webp">
                    <img class="accord__comp" src="images/img24.webp" alt loading="lazy">
                  </picture>
                </div>
                <h4 class="composition__item-title">Cink</h4>
              </div>
              <div class="composition__item-text">
                Hasznos krónikus prosztatagyulladás esetén, antibakteriális és immunmoduláló hatású. Vízhajtó hatású, segít a duzzanat enyhítésében és a veseműködés javításában. Segít megelőzni a húgyúti fertőzéseket, serkenti a vérkeringést.
              </div>
            </div>
          </div>
          <div class="composition__list-nav slider-nav">
            <div class="composition__item-nav">
              <span class="composition__item-name">Tőzegáfonya</span><span class="composition__item-span"></span>
            </div>
            <div class="composition__item-nav">
              <span class="composition__item-name">Serenoa</span><span class="composition__item-span"></span>
            </div>
            <div class="composition__item-nav">
              <span class="composition__item-name">Csalángyökér</span><span class="composition__item-span"></span>
            </div>
            <div class="composition__item-nav">
              <span class="composition__item-name">Cink</span><span class="composition__item-span"></span>
            </div>
          </div>
        </div>
        <h4 class="composition__subtitle-tall subtitle">Fontos!</h4>
        <div class="composition__footer">
          <div class="composition__footer-text">
            Az Eronex tesztelt és jóváhagyott használatra. A kapszuláknak nincs toxikus hatásuk a szervezetre, és vény nélkül kaphatók.
          </div><button class="composition__footer-btn btn ever-popup-btn">Megrendelés</button>
          <div class="composition__qualiti-list qualiti-list">
            <div class="composition__qualiti-item"><img alt="Image" src="images/img29.webp" loading="lazy"></div>
            <div class="composition__qualiti-item"><img alt="Image" src="images/img27.webp" loading="lazy">
            </div>
            <div class="composition__qualiti-item"><img alt="Image" src="images/img31.webp" loading="lazy"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="reviews block bg-light" id="reviews">
    <div class="container bg-decor">
      <div class="reviews__content">
        <h2 class="reviews__title title">A prosztata egészsége megbízható védelem alatt áll!</h2>
        <h4 class="reviews__subtitle subtitle">Mit mondanak a vásárlók az Eronex készítményről</h4>
        <div class="review-feedback">
          <div class="review-iphone">
            <div class="review-comments">
              <div class="review-comment">
                <div class="review-bio">
                  <div class="review-author">
                    <div class="review-author__avatar">
                      <picture></picture><img src="images/img1.webp" alt loading="lazy">
                    </div>
                    <div class="review-wrap">
                      <div class="review-author__name">Тímea</div>
                      <div class="review-author__date">12 ó.</div>
                    </div>
                  </div>
                </div>
                <div class="review-report">
                  <p class="review-report__desc">Egyszer megfáztam, aztán prosztatagyulladást kaptam. Sofőr vagyok, és prosztatagyulladással lehetetlen rendesen dolgozni, állandóan meg kell állni pisilni. Elkezdtem Eronexot szedni, szó szerint néhány nap alatt javult a vizeletürítésem, és a derekam sem fájt többé. A kúra óta eltelt 3 hónap, és még mindig remekül érzem magam!</p>
                </div>
              </div>
              <div class="review-comment">
                <div class="review-bio">
                  <div class="review-author">
                    <div class="review-author__avatar">
                      <picture></picture><img src="images/img15.webp" alt loading="lazy">
                    </div>
                    <div class="review-wrap">
                      <div class="review-author__name">Szabolcs</div>
                      <div class="review-author__date">18 ó.</div>
                    </div>
                  </div>
                </div>
                <div class="review-report">
                  <p class="review-report__desc">Régebben gyógyszertári tablettákat szedtem, amelyek teljesen tönkretették a potenciámat. Aztán a feleségem elhozta nekem az Eronexot, elvégeztem egy kúrát, a prosztatagyulladásom enyhült, és a libidóm, éppen ellenkezőleg, nőtt. Minden 40 év feletti férfinak ajánlom, legalább megelőzés céljából.</p>
                </div>
              </div>
              <div class="review-comment">
                <div class="review-bio">
                  <div class="review-author">
                    <div class="review-author__avatar">
                      <picture></picture><img src="images/img16.webp" alt loading="lazy">
                    </div>
                    <div class="review-wrap">
                      <div class="review-author__name">Péter</div>
                      <div class="review-author__date">20 ó.</div>
                    </div>
                  </div>
                </div>
                <div class="review-report">
                  <p class="review-report__desc">Már az Eronex szedésének második hetében abbahagytam az éjszakai WC-re rohangálást, a feszülés és a kellemetlenségek eltűntek. És az intim szférában is javult a helyzet. Most már a feleségem nem neheztel rám a szex hiánya miatt!</p>
                </div>
              </div>
              <div class="review-comment">
                <div class="review-bio">
                  <div class="review-author">
                    <div class="review-author__avatar">
                      <picture></picture><img src="images/img2.webp" alt loading="lazy">
                    </div>
                    <div class="review-wrap">
                      <div class="review-author__name">Márk</div>
                      <div class="review-author__date">22 ó.</div>
                    </div>
                  </div>
                </div>
                <div class="review-report">
                  <p class="review-report__desc">5 éve szenvedek prosztatagyulladástól, kipróbáltam különböző tablettákat, de csak egy ideig segítenek. Magamat hibáztatom, hogy nem szedtem korábban Eronexot. Fél éve szedtem be egy kúrát, és azóta nincsenek prosztatagyulladásos tüneteim. Nagyszerű eredmény!</p>
                </div>
              </div>
              <div class="review-comment">
                <div class="review-bio">
                  <div class="review-author">
                    <div class="review-author__avatar">
                      <picture></picture><img src="images/img17.webp" alt loading="lazy">
                    </div>
                    <div class="review-wrap">
                      <div class="review-author__name">Bernadett</div>
                      <div class="review-author__date">24 ó.</div>
                    </div>
                  </div>
                </div>
                <div class="review-report">
                  <p class="review-report__desc">A férjemnek krónikus prosztatagyulladása volt, évente többször - súlyosbodások, amelyek miatt több napig ágyban feküdt. Ezekkel a kapszulákkal sikerült megszüntetni a gyulladást és az állandó fájdalmat. Most ébernek és energikusnak érzi magát.</p>
                </div>
              </div>
              <div class="review-comment">
                <div class="review-bio">
                  <div class="review-author">
                    <div class="review-author__avatar">
                      <picture></picture><img src="images/img18.webp" alt loading="lazy">
                    </div>
                    <div class="review-wrap">
                      <div class="review-author__name">Pali</div>
                      <div class="review-author__date">1 n.</div>
                    </div>
                  </div>
                </div>
                <div class="review-report">
                  <p class="review-report__desc">Amikor súlyosbodott a prosztatagyulladásom, azt hittem, hogy meg kell műteni! Az akut vizeletvisszatartás nagyon fájdalmas, higgyék el, nem kívánom senkinek. Eronex kúrát vettem be, szakember ellenőrizte: nincs több gyulladás. Fantasztikus</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="reviews__box">
          <div class="reviews__box-header">
            <div class="reviews__box-image">
              <picture>
                <!-- <source srcset="images/img55.webp" type="image/webp"> -->
                <img alt="Product" src="images/img40.webp" loading="lazy">
              </picture>
            </div>
            <div class="reviews__box-title">
              Ne adjon esélyt a prosztatagyulladásnak!
            </div>
          </div>
          <ul class="reviews__list">
            <li class="reviews__item">
              <p class="reviews__text-info">Megszabadult a fájdalomtól deréktájon, a gátnál, a hasban, vizeletürítéskor</p>
              <div class="reviews__stat">
                <div class="reviews__stat-count">
                  99%
                </div>
                <div class="reviews__stat-grafic"></div>
              </div>
            </li>
            <li class="reviews__item">
              <p class="reviews__text-info">Megszűnt a duzzanat, normalizálódott a vizeletürítés</p>
              <div class="reviews__stat">
                <div class="reviews__stat-count">
                  99%
                </div>
                <div class="reviews__stat-grafic"></div>
              </div>
            </li>
            <li class="reviews__item">
              <p class="reviews__text-info">Megszabadult a krónikus prosztatagyulladás súlyosbodásától</p>
              <div class="reviews__stat">
                <div class="reviews__stat-count">
                  94%
                </div>
                <div class="reviews__stat-grafic reviews__stat-grafic--94"></div>
              </div>
            </li>
            <li class="reviews__item">
              <p class="reviews__text-info">Megnövekedett potencia</p>
              <div class="reviews__stat">
                <div class="reviews__stat-count">
                  95%
                </div>
                <div class="reviews__stat-grafic reviews__stat-grafic--95"></div>
              </div>
            </li>
            <li class="reviews__item">
              <p class="reviews__text-info">Hosszabb ideig tartó közösülés</p>
              <div class="reviews__stat">
                <div class="reviews__stat-count">
                  93%
                </div>
                <div class="reviews__stat-grafic reviews__stat-grafic--93"></div>
              </div>
            </li>
          </ul>
        </div>
        <p class="reviews__poll">Felmérés 15484 páciens körében, akik elvégeztek egy teljes Eronex kúrát</p>
      </div>
    </div>
  </div>
  <div class="why block bg-dark">
    <div class="container bg-urosaf">
      <div class="why__content">
        <div class="why__box-title">
          <div class="why__title title">
            Miért hatékonyabb az Eronex, mint más természetes készítmények?
          </div>
          <div class="why__header-qualiti-list qualiti-list">
            <div class="why__qualiti-item"><img alt="Image" src="images/img29.webp" loading="lazy"></div>
            <div class="why__qualiti-item"><img alt="Image" src="images/img27.webp" loading="lazy"></div>
            <div class="why__qualiti-item"><img alt="Image" src="images/img31.webp" loading="lazy"></div>
          </div>
        </div>
        <div class="why__process process">
          <ul class="process__list">
            <li class="process__item">
              <div class="process__image">
                <img alt="Image" src="images/img12.webp" loading="lazy">
                <div class="process__image-arrow process__image-arrow--top"></div>
                <div class="process__image-arrow"></div>
              </div>
              <div class="process__box">
                <div class="process__info">
                  <div class="process__count">
                    01
                  </div>
                  <h4 class="process__title">Termesztési<br>
                    feltételek</h4>
                </div>
                <div class="process__text">
                  A kapszulák előállításához kizárólag ökológiailag tiszta területeken termesztett nyersanyagokat használnak fel. A termesztés során nem használnak vegyszeres műtrágyát.
                </div>
              </div>
            </li>
            <li class="process__item">
              <div class="process__image">
                <img alt="Image" src="images/img13.webp" loading="lazy">
                <div class="process__image-arrow"></div>
              </div>
              <div class="process__box">
                <div class="process__info">
                  <div class="process__count">
                    02
                  </div>
                  <h4 class="process__title">Kivonatok előállításának<br>
                    technológiája</h4>
                </div>
                <div class="process__text">
                  A kivonatokban a jótékony anyagok koncentrációja sokkal magasabb, mint a teákban használt szárított növényekben.
                </div>
              </div>
            </li>
            <li class="process__item">
              <div class="process__image">
                <img alt="Image" src="images/img14.webp" loading="lazy">
                <div class="process__image-arrow process__image-arrow--last"></div>
              </div>
              <div class="process__box">
                <div class="process__info">
                  <div class="process__count">
                    03
                  </div>
                  <h4 class="process__title">Szinergiahatás</h4>
                </div>
                <div class="process__text">
                  A különböző összetevők biológiailag aktív anyagai kölcsönhatásba lépnek egymással, hogy fokozzák egymás hatását.
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="why__form">
        <div class="why__form-box">
          <div class="why__form-image">
            <div class="why__icon product-icon">
              <div class="product-icon__name">
                Kedvezmény
              </div>
              <div class="product-icon__count">
                -50%
              </div>
            </div>
            <picture>
              <!-- <source srcset="images/img55.webp" type="image/webp"> -->
              <img alt="Product" src="images/img40.webp" loading="lazy">
            </picture>
          </div>
          <div class="why__form-title">
            Rendelje<br>
            meg most!
          </div>
          <div class="why__form-price">
            <div class="why__form-price-current">
              <span class="x_price_current">9900</span><span class="x_currency">Ft</span>
            </div>
            <div class="why__form-price-previous">
              <span class="x_price_previous">19800</span><span class="x_currency">Ft</span>
            </div>
          </div>
        </div>
        <form action="subscribe1.php" class="why__order x_order_form" method="post">
          <input class="why__input" name="name" placeholder="Név" required type="text"><input class="why__input" name="phone" placeholder="Telefonszám" required type="tel"><button class="why__btn btn">Megrendelés</button>
        </form>
      </div>
      <div class="why__footer-qualiti-list qualiti-list">
        <div class="why__qualiti-item"><img alt="Image" src="images/img29.webp" loading="lazy"></div>
        <div class="why__qualiti-item"><img alt="Image" src="images/img27.webp" loading="lazy"></div>
        <div class="why__qualiti-item"><img alt="Image" src="images/img31.webp" loading="lazy"></div>
      </div>
    </div>
  </div>
  <div class="order block bg-light">
    <div class="container bg-decor">
      <div class="order__content">
        <h2 class="order__title title title-icon">HOGYAN KELL MEGRENDELNI AZ UROSAFOT?</h2>
        <ul class="order__list">
          <li class="order__item order__item--mb1">
            <div class="order__image order__image--1">
              <picture>
                <source srcset="images/img53.webp" type="image/webp"><img alt="Image" src="images/img39.webp" loading="lazy">
              </picture>
            </div>
            <h5 class="order__subtitle">Töltse ki a megrendelőlapot</h5>
          </li>
          <li class="order__item order__item--mb2">
            <div class="order__image order__image--2">
              <picture>
                <source srcset="images/img51.webp" type="image/webp"><img alt="Image" src="images/img37.webp" loading="lazy">
              </picture>
            </div>
            <h5 class="order__subtitle">Egy menedzser felveszi önnel a kapcsolatot <span class="order__text">a részletek pontosítása érdekében</span></h5>
          </li>
          <li class="order__item">
            <div class="order__image order__image--3">
              <picture>
                <source srcset="images/img52.webp" type="image/webp"><img alt="Image" src="images/img38.webp" loading="lazy">
              </picture>
            </div>
            <h5 class="order__subtitle">Fizetés csak átvételkor</h5>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="promo-bg promo-bg--pt">
    <div class="promo block">
      <div class="container bg-urosaf">
        <div class="promo__content">
          <div class="promo__text">
            KAPSZULÁK A PROSZTATA EGÉSZSÉGÉÉRT
          </div>
          <h1 class="promo__title">Eronex</h1>
          <div class="promo__subtitle">
            Ne aggódjon a prosztatagyulladás miatt!
          </div>
          <ul class="promo__list">
            <li class="promo__item">A prosztata egészségének támogatása</li>
            <li class="promo__item">Védelem a fájdalom és a gyulladás ellen</li>
            <li class="promo__item">A prosztatagyulladás tüneteinek enyhítése</li>
          </ul>
          <div class="promo__box">
            <div class="promo__image">
              <div class="promo__icon product-icon">
                <div class="product-icon__name">
                  Kedvezmény
                </div>
                <div class="product-icon__count">
                  -50%
                </div>
              </div>
              <picture>
                <!-- <source srcset="images/img55.webp" type="image/webp"> -->
                <img alt="Product" src="images/img40.webp" loading="lazy">
              </picture>
            </div>
            <div class="promo__form" id="order-form">
              <div class="promo__form-box">
                <div class="promo__form-text">
                  <div class="promo__form-title">
                    Rendelje meg most!
                  </div>
                  <div class="promo__form-subtitle">
                    -50%-kal olcsóbban
                  </div>
                </div>
                <div class="promo__timer timer">
                  <h4 class="timer__title">Az akció végéig maradt:</h4>
                  <div class="timer__box">
                    <div class="timer__count hours1">
                      01
                    </div>
                    <div class="timer__divider">
                      :
                    </div>
                    <div class="timer__count minutes1">
                      20
                    </div>
                    <div class="timer__divider">
                      :
                    </div>
                    <div class="timer__count seconds1">
                      45
                    </div>
                  </div>
                </div>
                <div class="promo__form-price">
                  <div class="promo__form-price-current">
                    <span class="x_price_current">9900</span><span class="x_currency">Ft</span>
                  </div>
                  <div class="promo__form-price-previous">
                    <span class="x_price_previous">19800</span><span class="x_currency">Ft</span>
                  </div>
                </div>
              </div>
              <form action="subscribe1.php" class="promo__order x_order_form" method="post">
                <input class="promo__input" name="name" placeholder="Név" required type="text"><input class="promo__input" name="phone" placeholder="Telefonszám" required type="tel"><button class="promo__btn btn">Megrendelés</button>
              </form>
            </div>
          </div>
          <div class="promo__qualiti-list">
            <div class="promo__qualiti-item"><img alt="Image" src="images/img28.webp" loading="lazy"></div>
            <div class="promo__qualiti-item"><img alt="Image" src="images/img30.webp" loading="lazy"></div>
            <div class="promo__qualiti-item"><img alt="Image" src="images/img32.webp" loading="lazy"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer block">

    <footer class="main-footer">
      <div class="bel-container">
        <div class="footer__note-wrap">

          <p class="footer__note">
            *Gyógyszernek nem minősülő termék
          </p>
          <p class="footer__note">
            *A készítmény hatása az egyéni tényezőktől függ
          </p>
          <p class="footer__note">*Használat előtt kérjük, figyelmesen olvassa el a tájékoztatót</p>
        </div>
      </div>
    </footer>
    <div class="bel-footer-block">
      <div class="bel-container">
        <div class="footer-block-left">
          <h2 class="footer-left-title"> Informàciò a vàsàrlò szàmàra </h2>
          <div class="footer-left-info"> A linkre kattintva és megrendelve a terméket, Ön elfogadja az erre a termékre vonatkozó adás-vételi szerződést. A weboldalunkon hagyott rendelése szolgál a megrendelési igényének a megerősítésére. Jogában áll felbontani a szerződést, lemondani a megrendelt termékről és visszaküldeni a terméket a jogszabályoknak megfelelően. Az eladó köteles minden Ön által benyújtott, a termékkel és szállításával összefüggő követelést elfogadni és figyelembe venni. A fentiekről bővebben tanácsadóinktól tájékozódhat</div>
        </div>
      </div>
    </div>

  </footer>
  <div class="ever-popup-build">
    <div class="my-popup" id="cloneThis">
      <div class="popup__content">
        <div class="popup__left">
          <picture>
            <!-- <source srcset="images/img55.webp" type="image/webp"> -->
            <img alt="Product" src="images/img40.webp" loading="lazy">
          </picture>
        </div>
        <div class="popup__right">
          <h1 class="promo__title popup-title">Eronex</h1>
          <div class="promo__form-price popup-price">
            <div class="promo__form-price-current">
              <span class="x_price_current popup-x_price_current">9900</span><span class="x_currency popup-x_currency-current">Ft</span>
            </div>
            <div class="promo__form-price-previous">
              <span class="x_price_previous popup-x_price_previous">19800</span><span class="x_currency popup-x_currency-previous">Ft</span>
            </div>
          </div>
          <form action="subscribe1.php" class="promo__order popup-order x_order_form" method="post">
            <input class="promo__input popup-input" name="name" placeholder="Név" required type="text"><input class="promo__input popup-input" name="phone" placeholder="Telefonszám" required type="tel"><button class="promo__btn popup-btn btn">Megrendelés</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="js/script4.js">
  </script>
  <script src="js/script2.js"></script>
  <script src="js/script8.js">
  </script>
  <script src="js/script1.js">
  </script>
  <script src="js/script5.js">
  </script>
  <script>
    window.lang = 'hu';
    window.is_downloaded_from_dashboard = true;
    window.duplicate_order_phone = '3614453665';
    window.order_recently_confirmed =
      'A rendelése már fel van adva';
    window.order_in_progress =
      'A rendelése már fel van adva, ha van valamilyen kérdése a rendeléssel kapcsolatban, 			forduljon hozzánk a bejövő vonalunkra az adott számon';
    window.order_got_it =
      'Ok';
    window._locations = [{
      "offer_id": "1355",
      "country_code": "HU",
      "price_current": 9900,
      "display_priority": 13,
      "id": 719819,
      "name": "Hungary",
      "type": "country",
      "country_id": 719819,
      "region_name": null,
      "currency": "Ft",
      "country_name": "Hungary",
      "price_previous": 19800,
      "price_delivery": 0,
      "price_total": 9900
    }, {
      "offer_id": "1355",
      "country_code": "PL",
      "price_current": 137,
      "display_priority": 14,
      "id": 798544,
      "name": "Poland",
      "type": "country",
      "country_id": 798544,
      "region_name": null,
      "currency": "zł",
      "country_name": "Poland",
      "price_previous": 274,
      "price_delivery": 0,
      "price_total": 137
    }, {
      "offer_id": "1355",
      "country_code": "RO",
      "price_current": 149,
      "display_priority": 12,
      "id": 798549,
      "name": "Romania",
      "type": "country",
      "country_id": 798549,
      "region_name": null,
      "currency": "ron",
      "country_name": "Romania",
      "price_previous": 298,
      "price_delivery": 0,
      "price_total": 149
    }, {
      "offer_id": "1355",
      "country_code": "CZ",
      "price_current": 860,
      "display_priority": 11,
      "id": 3077311,
      "name": "Czech Republic",
      "type": "country",
      "country_id": 3077311,
      "region_name": null,
      "currency": "czk",
      "country_name": "Czech Republic",
      "price_previous": 1720,
      "price_delivery": 0,
      "price_total": 860
    }, {
      "offer_id": "1355",
      "country_code": "IT",
      "price_current": 39,
      "display_priority": 10,
      "id": 3175395,
      "name": "Italy",
      "type": "country",
      "country_id": 3175395,
      "region_name": null,
      "currency": "€",
      "country_name": "Italy",
      "price_previous": 78,
      "price_delivery": 0,
      "price_total": 39
    }, {
      "offer_id": "1355",
      "country_code": "SI",
      "price_current": 39,
      "display_priority": 8,
      "id": 3190538,
      "name": "Slovenia",
      "type": "country",
      "country_id": 3190538,
      "region_name": null,
      "currency": "€",
      "country_name": "Slovenia",
      "price_previous": 78,
      "price_delivery": 0,
      "price_total": 39
    }, {
      "offer_id": "1355",
      "country_code": "SK",
      "price_current": 39,
      "display_priority": 7,
      "id": 3057568,
      "name": "Slovak Republic",
      "type": "country",
      "country_id": 3057568,
      "region_name": null,
      "currency": "€",
      "country_name": "Slovakia",
      "price_previous": 78,
      "price_delivery": 0,
      "price_total": 39
    }, {
      "offer_id": "1355",
      "country_code": "BG",
      "price_current": 69,
      "display_priority": 5,
      "id": 732800,
      "name": "Bulgaria",
      "type": "country",
      "country_id": 732800,
      "region_name": null,
      "currency": "лв",
      "country_name": "Bulgaria",
      "price_previous": 138,
      "price_delivery": 0,
      "price_total": 69
    }, {
      "offer_id": "1355",
      "country_code": "GR",
      "price_current": 39,
      "display_priority": 1,
      "id": 390903,
      "name": "Greece",
      "type": "country",
      "country_id": 390903,
      "region_name": null,
      "currency": "€",
      "country_name": "Greece",
      "price_previous": 78,
      "price_delivery": 0,
      "price_total": 39
    }, {
      "offer_id": "1355",
      "country_code": "AT",
      "price_current": 49,
      "display_priority": 0,
      "id": 2782113,
      "name": "Austria",
      "type": "country",
      "country_id": 2782113,
      "region_name": null,
      "currency": "€",
      "country_name": "Austria",
      "price_previous": 98,
      "price_delivery": 0,
      "price_total": 49
    }, {
      "offer_id": "1355",
      "country_code": "HR",
      "price_current": 39,
      "display_priority": 9,
      "id": 3202326,
      "name": "Croatia",
      "type": "country",
      "country_id": 3202326,
      "region_name": null,
      "currency": "eur",
      "country_name": "Croatia",
      "price_previous": 78,
      "price_delivery": 0,
      "price_total": 39
    }];
    window.additional_phone_in_downloaded = false;
    window.is_namephone_validated = true;
    window.news_url = 'https://hirek-24.com/teasers-feed?aaid=1010354&acid=1105638&currency=usd';
    window.back_button_enabled = true;


    document.cookie = 'popup_customers_enabled=true;path=/';
    document.cookie = 'popup_callback_enabled=true;path=/';
    document.cookie = 'popup_mouseout_enabled=true;path=/';
    window.country_code = 'HU';
  </script>
  <script>
    var cookies = (function(a) {
      if (a == "") return {};
      var b = {};
      for (var i = 0; i < a.length; ++i) {
        var p = a[i].split('=');
        if (p.length != 2) continue;
        b[p[0]] = p[1];
      }

      return b;
    })(document.cookie.split('; '));

    //для клонирования блока в попап используются следующие айдишники
    // #cloneThis - для десктопа
    // #cloneMobileThis - для мобильного (если нужно)
    //брейкпоинт для переключения попапа при необходимости дефолт значение = 1000

    // в случае, если мы не клонируем форму, а верстаем попап произвольно,
    // то делать это необходимо в контейнере с классом .ever-popup-build
    // false (показывать контейнер) / true (не показывать контейнер)

    var popupBuild = true; // false/true


    //.ever-popup-btn - класс для для открытия попапа

    //проверка кода
    //.check__field - класс для поля проверки кода
    //.check__btn - класс для кнопки провеки кода
    //.check__result - класс для контейнера с результатом проверки кода

    //таймер
    //для вывода счетчика таймера используется 3 контенера (часы, минуты, секунды)
    //.hours класс для вывода часов
    //.minutes класс для вывода минут
    //.seconds класс для вывода секунд

    function initiate(cookies) {

      var breakpoint = 1000;
      var desktop = document.querySelector('#cloneThis');
      var mobile = document.querySelector('#cloneMobileThis');

      if (popupBuild) {
        // в случае, если мы верстаем попап в контейнере .ever-popup-build, даное условие прячет его, если значение переменной popupBuild = true
        var style = document.createElement('style');
        style.innerHTML = '.ever-popup-build{position: fixed; opacity: 0;z-index: -1; top: 0; left: -9999px;}';
        document.querySelector('head').appendChild(style)
      }

      function addPopupStyle() {
        // добавляем стили для нашего поапа
        var cont = document.createElement('style'),
          head = document.querySelector('head');
        cont.innerHTML = '.ever-popup__body.ever-mobile{display:none}.ever-popup{position: fixed;top: 0;left: 0;width: 100%;height: 100%;background: rgba(0,0,0,.7);z-index: 111;display: none;overflow: auto;}.ever-popup__body{position: static;float: none;display: block;margin: 0 auto;width:auto}.ever-popup.show{display: block;align-items: center;}.ever-popup__inner{position: relative;margin: 0 auto;padding-top:35px}.ever-popup__close{width: 35px;height: 30px;position: absolute;cursor:pointer;top: 0;right: 0;z-index: 1;-webkit-transition: .3s; -moz-transition: .3s; -ms-transition: .3s; -o-transition: .3s; transition: .3s;}.ever-popup__close:after, .ever-popup__close:before {content: "";position: absolute;right: 0;top: 10px;width: 35px;height: 10px;background: #fff;transition: all 1s;}.ever-popup__close:after {-webkit-transform: rotate(-45deg);-ms-transform: rotate(-45deg);-o-transform: rotate(-45deg);transform: rotate(-45deg);}.ever-popup__close:before {-webkit-transform: rotate(45deg);-ms-transform: rotate(45deg);-o-transform: rotate(45deg);transform: rotate(45deg);}' +
          '@media screen and (min-width: ' + breakpoint + 'px' + '){' +
          '.ever-popup__body.ever-desktop{display:none}' +
          '.ever-popup__body.ever-mobile{display:block}' +
          '}';
        head.appendChild(cont)
      }

      function addMobilePopupStyle() {
        // добавляем стили для нашего поапа
        var cont = document.createElement('style'),
          head = document.querySelector('head');
        cont.innerHTML = '@media screen and (min-width: ' + breakpoint + 'px' + ') {.ever-popup {position: fixed;top: 0;left: 0;width: 100%;height: 100%;background: rgba(0, 0, 0, .7);z-index: 111;display: none;overflow: auto;}.ever-popup__body {position: static;float: none;display: block;margin: 0 auto;width: auto}.ever-popup.show {display: block;align-items: center;}.ever-popup__inner {position: relative;margin: 0 auto;padding-top: 35px}.ever-popup__close {width: 35px;height: 30px;position: absolute;cursor: pointer;top: 0;right: 0;z-index: 1;-webkit-transition: .3s;-moz-transition: .3s;-ms-transition: .3s;-o-transition: .3s;transition: .3s;}.ever-popup__close:after, .ever-popup__close:before {content: "";position: absolute;right: 0;top: 10px;width: 35px;height: 10px;background: #fff;transition: all 1s;}.ever-popup__close:after {-webkit-transform: rotate(-45deg);-ms-transform: rotate(-45deg);-o-transform: rotate(-45deg);transform: rotate(-45deg);}.ever-popup__close:before {-webkit-transform: rotate(45deg);-ms-transform: rotate(45deg);-o-transform: rotate(45deg);transform: rotate(45deg);}}';
        head.appendChild(cont)
      }

      function createOverlay() {
        // создаем затемненный фон для попапа и вставляем его в разметку html
        var parent = document.createElement('div'),
          parentInner = document.createElement('div'),
          closeParent = document.createElement('div');

        parent.classList.add('ever-popup');
        parentInner.classList.add('ever-popup__inner');
        closeParent.classList.add('ever-popup__close');

        parent.appendChild(parentInner);
        parentInner.appendChild(closeParent);
        document.body.appendChild(parent);
      }

      function createModalBody(breakpoint) {
        // функция определяет содержимое для попапа, клонирует его содержимое, и поещает в контейнер ever-popup__body
        var parent = document.querySelector('.ever-popup__inner');
        if (desktop) {
          var desktopClone = desktop.cloneNode(true);
          desktopClone.classList.add('ever-popup__body');
          desktopClone.removeAttribute('id');
          parent.appendChild(desktopClone);
          document.querySelector('.ever-popup .ever-popup__inner').style.width = document.querySelector('#cloneThis').offsetWidth + 'px';
        }

        if (mobile) {
          var mobileClone = mobile.cloneNode(true);
          if (desktopClone) {
            desktopClone.classList.add('ever-desktop');
          }
          mobileClone.classList.add('ever-popup__body');
          mobileClone.classList.add('ever-mobile');
          mobileClone.removeAttribute('id');
          parent.appendChild(mobileClone);
          var mobileStyles = '.ever-desktop{display: block}.ever-mobile{display: none}@media screen and (min-width: ' + breakpoint + 'px){.ever-mobile{display: block}.ever-desktop{display: none;}}';

          var mobileStylesContainer = document.createElement('style');
          mobileStylesContainer.innerHTML = mobileStyles;
          document.querySelector('head').appendChild(mobileStylesContainer)
          document.querySelector('.ever-popup .ever-popup__inner').style.width = document.querySelector('#cloneMobileThis').offsetWidth + 'px';
        }


      }

      function modalPosition(screenHeight) {
        //расчет ширины и вывод ее в html, функция вызывается при загрузке страницы, а так же при ресайзе
        var container = document.querySelector('.ever-popup  .ever-popup__inner');
        if (container) {

          var desktop = document.querySelector('#cloneThis'),
            mobile = document.querySelector('#cloneMobileThis');

          if (desktop) {
            if (window.innerWidth >= breakpoint) {
              checkPosition(desktop, container, screenHeight);
              container.style.width = desktop.offsetWidth + 'px';
            }
            if (!mobile) {
              checkPosition(desktop, container, screenHeight);
              container.style.width = desktop.offsetWidth + 'px';
            }
          }
          if (mobile) {
            if (window.innerWidth <= breakpoint) {
              checkPosition(mobile, container, screenHeight);
              container.style.width = mobile.offsetWidth + 'px';
            }
          }
        }
      }

      function checkPosition(selector, container, screenHeight) {
        //позиционирование попапа по вертикали
        var cont = selector,
          contHeight = cont.offsetHeight;

        if (contHeight > screenHeight) {
          container.style.margin = '40px auto';
        } else {
          var top = (screenHeight - contHeight) / 2;
          container.style.margin = top + 'px auto 20px';
        }
      }

      function showPopup() {
        //функция для показа попапа
        var popup = document.querySelector('.ever-popup');
        popup.classList.add('show')
      }

      function hidePopup() {
        //функция для скрытия попапа
        var popup = document.querySelector('.ever-popup');
        popup.classList.remove('show')
      }

      function notHide(e) {
        //функция для прерывания выполнения сценария по клику
        e.stopPropagation()
      }

      function checkCode(event) {
        // проверка кода подлинности
        event.preventDefault();

        var code = document.querySelector(".check__field").value,
          msg = document.querySelector(".check__result");

        if (code.length === 15) {
          msg.innerHTML = window.codeCorrect;
        } else if (code.length === 0) {
          msg.innerHTML = window.codeEmpty;
        } else {
          msg.innerHTML = window.codeInvalid;
        }
      }
      if (cookies['popup_mouseout_enabled'] == 'true') {
        var mouseOutCount = 0;
        document.body.addEventListener('mouseleave', function(event) {
          //событие на увод мышки со страницы. если мышка уходит за верхнюю границу документа, вызывается попап
          var e = event || window.event;
          e = e.clientY;
          var popup = document.querySelector('.ever-popup');

          if (popup && e < 10 && mouseOutCount === 0) {
            popup.classList.add('show');
            mouseOutCount++;
          }
        });
      }

      function addPhoneBtn(breakpoint) {
        // добавление синей трубки для вызова попапа на десктопе
        var phoneBtnContainer = document.createElement('div');
        phoneBtnContainer.classList.add('phoneBtnContainer');
        phoneBtnContainer.innerHTML = '<div class="bluePhone"><div class=" phone-call cbh-phone cbh-green cbh-show ever-popup-btn cbh-static" id="clbh_phone_div"><div class="phoneJs"><div class="cbh-ph-circle"></div><div class="cbh-ph-circle-fill"></div><div class="cbh-ph-img-circle1"></div></div></div></div>';
        document.body.appendChild(phoneBtnContainer);

        var phoneStyles = document.createElement('style');
        phoneStyles.innerHTML = '@media screen and (min-width: ' + breakpoint + 'px) {.phoneBtnContainer{position:fixed; right: 10px;bottom: 10px; visibility:hidden;background-color:transparent;width:200px;height:200px;cursor:pointer;z-index:99;-webkit-backface-visibility:hidden;-webkit-transform:translateZ(0);-webkit-transition:visibility .5s;-moz-transition:visibility .5s;-o-transition:visibility .5s;transition:visibility .5s}.cbh-phone.cbh-show{visibility:visible}@-webkit-keyframes fadeInRight{0%{opacity:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}100%{opacity:1;-webkit-transform:none;transform:none}}@keyframes fadeInRight{0%{opacity:0;-webkit-transform:translate3d(100%,0,0);-ms-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}100%{opacity:1;-webkit-transform:none;-ms-transform:none;transform:none}}@-webkit-keyframes fadeInRightBig{0%{opacity:0;-webkit-transform:translate3d(2000px,0,0);transform:translate3d(2000px,0,0)}100%{opacity:1;-webkit-transform:none;transform:none}}@-webkit-keyframes fadeOutRight{0%{opacity:1}100%{opacity:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}}@keyframes fadeOutRight{0%{opacity:1}100%{opacity:0;-webkit-transform:translate3d(100%,0,0);-ms-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}}.fadeOutRight{-webkit-animation-name:fadeOutRight;animation-name:fadeOutRight}.cbh-phone.cbh-static1{opacity:.6}.cbh-phone.cbh-hover1{opacity:1}.cbh-ph-circle{width:160px;height:160px;top:20px;left:20px;position:absolute;background-color:transparent;-webkit-border-radius:100%;-moz-border-radius:100%;border-radius:100%;border:2px solid rgba(30,30,30,.4);opacity:.1;-webkit-animation:cbh-circle-anim 1.2s infinite ease-in-out;-moz-animation:cbh-circle-anim 1.2s infinite ease-in-out;-ms-animation:cbh-circle-anim 1.2s infinite ease-in-out;-o-animation:cbh-circle-anim 1.2s infinite ease-in-out;animation:cbh-circle-anim 1.2s infinite ease-in-out;-webkit-transition:all .5s;-moz-transition:all .5s;-o-transition:all .5s;transition:all .5s}.cbh-phone.cbh-active .cbh-ph-circle1{-webkit-animation:cbh-circle-anim 1.1s infinite ease-in-out!important;-moz-animation:cbh-circle-anim 1.1s infinite ease-in-out!important;-ms-animation:cbh-circle-anim 1.1s infinite ease-in-out!important;-o-animation:cbh-circle-anim 1.1s infinite ease-in-out!important;animation:cbh-circle-anim 1.1s infinite ease-in-out!important}.cbh-phone.cbh-static .cbh-ph-circle{-webkit-animation:cbh-circle-anim 2.2s infinite ease-in-out!important;-moz-animation:cbh-circle-anim 2.2s infinite ease-in-out!important;-ms-animation:cbh-circle-anim 2.2s infinite ease-in-out!important;-o-animation:cbh-circle-anim 2.2s infinite ease-in-out!important;animation:cbh-circle-anim 2.2s infinite ease-in-out!important}.cbh-phone.cbh-hover .cbh-ph-circle{border-color:rgba(0,175,242,1);opacity:.5}.cbh-phone.cbh-green.cbh-hover .cbh-ph-circle{border-color:rgba(117,235,80,1);opacity:.5}.cbh-phone.cbh-green .cbh-ph-circle{border-color:rgba(0,175,242,1);opacity:.5}.cbh-phone.cbh-gray.cbh-hover .cbh-ph-circle{border-color:rgba(204,204,204,1);opacity:.5}.cbh-phone.cbh-gray .cbh-ph-circle{border-color:rgba(117,235,80,1);opacity:.5}.cbh-ph-circle-fill{width:100px;height:100px;top:50px;left:50px;position:absolute;background-color:#000;-webkit-border-radius:100%;-moz-border-radius:100%;border-radius:100%;border:2px solid transparent;opacity:.1;-webkit-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out;-moz-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out;-ms-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out;-o-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out;animation:cbh-circle-fill-anim 2.3s infinite ease-in-out;-webkit-transition:all .5s;-moz-transition:all .5s;-o-transition:all .5s;transition:all .5s}.cbh-phone.cbh-active .cbh-ph-circle-fill{-webkit-animation:cbh-circle-fill-anim 1.7s infinite ease-in-out!important;-moz-animation:cbh-circle-fill-anim 1.7s infinite ease-in-out!important;-ms-animation:cbh-circle-fill-anim 1.7s infinite ease-in-out!important;-o-animation:cbh-circle-fill-anim 1.7s infinite ease-in-out!important;animation:cbh-circle-fill-anim 1.7s infinite ease-in-out!important}.cbh-phone.cbh-static .cbh-ph-circle-fill{-webkit-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out!important;-moz-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out!important;-ms-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out!important;-o-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out!important;animation:cbh-circle-fill-anim 2.3s infinite ease-in-out!important;opacity:0!important} .cbh-phone.cbh-hover .cbh-ph-circle-fill{background-color:rgba(0,175,242,.5);opacity:.75!important}.cbh-phone.cbh-green.cbh-hover .cbh-ph-circle-fill{background-color:rgba(117,235,80,.5);opacity:.75!important}.cbh-phone.cbh-green .cbh-ph-circle-fill{background-color:rgba(0,175,242,.5);opacity:.75!important}.cbh-phone.cbh-gray.cbh-hover .cbh-ph-circle-fill{background-color:rgba(204,204,204,.5);opacity:.75!important}.cbh-phone.cbh-gray .cbh-ph-circle-fill{background-color:rgba(117,235,80,.5);opacity:.75!important}.cbh-ph-img-circle1{width:60px;height:60px;top:70px;left:70px;position:absolute;background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABNmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarY6xSsNQFEDPi6LiUCsEcXB4kygotupgxqQtRRCs1SHJ1qShSmkSXl7VfoSjWwcXd7/AyVFwUPwC/0Bx6uAQIYODCJ7p3MPlcsGo2HWnYZRhEGvVbjrS9Xw5+8QMUwDQCbPUbrUOAOIkjvjB5ysC4HnTrjsN/sZ8mCoNTIDtbpSFICpA/0KnGsQYMIN+qkHcAaY6addAPAClXu4vQCnI/Q0oKdfzQXwAZs/1fDDmADPIfQUwdXSpAWpJOlJnvVMtq5ZlSbubBJE8HmU6GmRyPw4TlSaqo6MukP8HwGK+2G46cq1qWXvr/DOu58vc3o8QgFh6LFpBOFTn3yqMnd/n4sZ4GQ5vYXpStN0ruNmAheuirVahvAX34y/Axk/96FpPYgAAACBjSFJNAAB6JQAAgIMAAPn/AACA6AAAUggAARVYAAA6lwAAF2/XWh+QAAAB/ElEQVR42uya7W3CMBCG31QM4A1aNggTlG6QbpBMkHYC1AloJ4BOABuEDcgGtBOETnD9c1ERCH/lwxeaV8oPFGP86Hy+DxMREW5Bd7gRjSDSNGn4/RiAOvm8C0ZCRD5PSkQVXSr1nK/xE3mcWimA1ZV3JYBZCIO4giQANoYxMwYS6+xKY4lT5dJPreWZY+uspqSCKPYN27GJVBDXheVSQe494ksiEWTuMXcu1dld9SARxDX1OAJ4lgjy4zDnFsC076A4adEiRwAZg4hOUSpNoCsBPDGM+HqkNGynYBCuILuWj+dgWysGsNe8nwL4GsrW0m2fxZBq9rW0rNcX5MOQ9eZD8JFahcG5g/iKT671alGAYQggpYWvpEPYWrU/HDTOfeRIX0q2SL3QN4tGhZJukVobQyXYWw7WtLDKDIuM+ZSzscyCE9PCy5IttCvnZNaeiGLNHKuz8ZVh/MXTVu/1xQKmIqLEAuJ0fNo3iG5B51oSkeKnsBi/4bG9gYB/lCytU5G9DryFW+3Gm+JLwU7ehbJrwTjq4DJU8bHcVbEV9dXXqqP6uqO5e2/QZRYJpqu2IUAA4B3tXvx8hgKp05QZW6dJqrLTNkB6vrRURLRwPHqtYgkC3cLWQAcDQGGKH13FER/NATzi786+BPDNjm1dMkfjn2pGkBHkf4D8DgBJDuDHx9BN+gAAAABJRU5ErkJggg==);background-color:rgba(30,30,30,.1);background-position:center center;background-repeat:no-repeat;-webkit-border-radius:100%;-moz-border-radius:100%;border-radius:100%;border:2px solid transparent;opacity:.7;-webkit-animation:cbh-circle-img-anim 1s infinite ease-in-out;-moz-animation:cbh-circle-img-anim 1s infinite ease-in-out;-ms-animation:cbh-circle-img-anim 1s infinite ease-in-out;-o-animation:cbh-circle-img-anim 1s infinite ease-in-out;animation:cbh-circle-img-anim 1s infinite ease-in-out}.cbh-phone.cbh-active .cbh-ph-img-circle1{-webkit-animation:cbh-circle-img-anim 1s infinite ease-in-out!important;-moz-animation:cbh-circle-img-anim 1s infinite ease-in-out!important;-ms-animation:cbh-circle-img-anim 1s infinite ease-in-out!important;-o-animation:cbh-circle-img-anim 1s infinite ease-in-out!important;animation:cbh-circle-img-anim 1s infinite ease-in-out!important}.cbh-phone.cbh-static .cbh-ph-img-circle1{-webkit-animation:cbh-circle-img-anim 0s infinite ease-in-out!important;-moz-animation:cbh-circle-img-anim 0s infinite ease-in-out!important;-ms-animation:cbh-circle-img-anim 0s infinite ease-in-out!important;-o-animation:cbh-circle-img-anim 0s infinite ease-in-out!important;animation:cbh-circle-img-anim 0s infinite ease-in-out!important}.cbh-phone.cbh-hover .cbh-ph-img-circle1{background-color:rgba(0,175,242,1)}.cbh-phone.cbh-green.cbh-hover .cbh-ph-img-circle1:hover{background-color:rgba(117,235,80,1)}.cbh-phone.cbh-green .cbh-ph-img-circle1{background-color:rgba(0,175,242,1)}.cbh-phone.cbh-green .cbh-ph-img-circle1{background-color:rgba(0,175,242,1)}.cbh-phone.cbh-gray.cbh-hover .cbh-ph-img-circle1{background-color:rgba(204,204,204,1)}.cbh-phone.cbh-gray .cbh-ph-img-circle1{background-color:rgba(117,235,80,1)}@-moz-keyframes cbh-circle-anim{0%{-moz-transform:rotate(0deg) scale(0.5) skew(1deg);opacity:.1;-moz-opacity:.1;-webkit-opacity:.1;-o-opacity:.1}30%{-moz-transform:rotate(0deg) scale(.7) skew(1deg);opacity:.5;-moz-opacity:.5;-webkit-opacity:.5;-o-opacity:.5}100%{-moz-transform:rotate(0deg) scale(1) skew(1deg);opacity:.6;-moz-opacity:.6;-webkit-opacity:.6;-o-opacity:.1}}@-webkit-keyframes cbh-circle-anim{0%{-webkit-transform:rotate(0deg) scale(0.5) skew(1deg);-webkit-opacity:.1}30%{-webkit-transform:rotate(0deg) scale(.7) skew(1deg);-webkit-opacity:.5}100%{-webkit-transform:rotate(0deg) scale(1) skew(1deg);-webkit-opacity:.1}}@-o-keyframes cbh-circle-anim{0%{-o-transform:rotate(0deg) kscale(0.5) skew(1deg);-o-opacity:.1}30%{-o-transform:rotate(0deg) scale(.7) skew(1deg);-o-opacity:.5}100%{-o-transform:rotate(0deg) scale(1) skew(1deg);-o-opacity:.1}}@keyframes cbh-circle-anim{0%{transform:rotate(0deg) scale(0.5) skew(1deg);opacity:.1}30%{transform:rotate(0deg) scale(.7) skew(1deg);opacity:.5}100%{transform:rotate(0deg) scale(1) skew(1deg);opacity:.1}}@-moz-keyframes cbh-circle-fill-anim{0%{-moz-transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}50%{-moz-transform:rotate(0deg) -moz-scale(1) skew(1deg);opacity:.2}100%{-moz-transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}}@-webkit-keyframes cbh-circle-fill-anim{0%{-webkit-transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}50%{-webkit-transform:rotate(0deg) scale(1) skew(1deg);opacity:.2}100%{-webkit-transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}}@-o-keyframes cbh-circle-fill-anim{0%{-o-transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}50%{-o-transform:rotate(0deg) scale(1) skew(1deg);opacity:.2}100%{-o-transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}}@keyframes cbh-circle-fill-anim{0%{transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}50%{transform:rotate(0deg) scale(1) skew(1deg);opacity:.2}100%{transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}}@keyframes cbh-circle-img-anim{0%{transform:rotate(0deg) scale(1) skew(1deg)}10%{transform:rotate(-25deg) scale(1) skew(1deg)}20%{transform:rotate(25deg) scale(1) skew(1deg)}30%{transform:rotate(-25deg) scale(1) skew(1deg)}40%{transform:rotate(25deg) scale(1) skew(1deg)}100%,50%{transform:rotate(0deg) scale(1) skew(1deg)}}@-moz-keyframes cbh-circle-img-anim{0%{transform:rotate(0deg) scale(1) skew(1deg)}10%{-moz-transform:rotate(-25deg) scale(1) skew(1deg)}20%{-moz-transform:rotate(25deg) scale(1) skew(1deg)}30%{-moz-transform:rotate(-25deg) scale(1) skew(1deg)}40%{-moz-transform:rotate(25deg) scale(1) skew(1deg)}100%,50%{-moz-transform:rotate(0deg) scale(1) skew(1deg)}}@-webkit-keyframes cbh-circle-img-anim{0%{-webkit-transform:rotate(0deg) scale(1) skew(1deg)}10%{-webkit-transform:rotate(-25deg) scale(1) skew(1deg)}20%{-webkit-transform:rotate(25deg) scale(1) skew(1deg)}30%{-webkit-transform:rotate(-25deg) scale(1) skew(1deg)}40%{-webkit-transform:rotate(25deg) scale(1) skew(1deg)}100%,50%{-webkit-transform:rotate(0deg) scale(1) skew(1deg)}}@-o-keyframes cbh-circle-img-anim{0%{-o-transform:rotate(0deg) scale(1) skew(1deg)}10%{-o-transform:rotate(-25deg) scale(1) skew(1deg)}20%{-o-transform:rotate(25deg) scale(1) skew(1deg)}30%{-o-transform:rotate(-25deg) scale(1) skew(1deg)}40%{-o-transform:rotate(25deg) scale(1) skew(1deg)}100%,50%{-o-transform:rotate(0deg) scale(1) skew(1deg)}}.cbh-ph-img-circle1 {}.cbh-phone.cbh-green .cbh-ph-circle {border-color: rgba(0, 175, 242, 1)}.cbh-phone.cbh-green .cbh-ph-circle-fill {background-color: rgba(0, 175, 242, 1);}.cbh-phone.cbh-green .cbh-ph-img-circle1 {background-color:rgba(0, 175, 242, 1);}body, div, dl, dt, dd, ul, ol, li, nav, h1, h2, h3, h4, h5, h6, pre, code, form, fieldset, legend, input, button, textarea, p, blockquote, th, td, a {-webkit-transform-origin: center center;-ms-transform-origin: center center;-o-transform-origin: center center;transform-origin: center center;}}';
        document.querySelector('head').appendChild(phoneStyles);
        document.querySelector('.phoneBtnContainer').addEventListener('click', showPopup);
      }

      function init() {

        var desktopPopup = document.querySelector('#cloneThis'),
          mobilePopup = document.querySelector('#cloneMobileThis');
        var h = document.querySelector('.hours'),
          m = document.querySelector('.minutes'),
          s = document.querySelector('.seconds');

        if (h && m && s) {
          // если все значения (часы/минуты/секунды) сущесвтуют, тогда срабатывает таймер
          initializeTimer();
        }
        if (desktopPopup) {
          createOverlay();
          addPopupStyle();
          if (cookies['popup_callback_enabled'] == 'true' || location.hostname === 'localhost' || location.hostname === '127.0.0.1') {
            addPhoneBtn(breakpoint);
          }
        } else {
          createOverlay();
          addMobilePopupStyle()
        }
        if (desktopPopup || mobilePopup) {
          //если у нас есть #cloneThis или #cloneMobileThis, тогда все функции ниже выполняются

          createModalBody(breakpoint);
          modalPosition(window.innerHeight);

          document.addEventListener('click', function(e) {
            if (e.target === document.querySelector('.ever-popup') ||
              e.target === document.querySelector('.ever-popup__close')) {
              hidePopup();
            }
          });
          document.addEventListener('keydown', function(e) {
            if (e.keyCode === 27) {
              hidePopup();
            }
          });

          var modalBtn = document.querySelectorAll('.ever-popup-btn');
          for (var i = 0; i < modalBtn.length; i++) {
            modalBtn && modalBtn[i].addEventListener('click', function() {
              showPopup();
              modalPosition(window.innerHeight)
            });
          }
        }
        // рабоатет если у нас есть класс .check__btn
        var checkBtn = document.querySelector(".check__btn");
        checkBtn && checkBtn.addEventListener('click', checkCode);
      }

      init();

      window.addEventListener('resize', function() {
        //при ресайзе пересчитываем позиционирование модального окна
        modalPosition(window.innerHeight);
      });

      function initializeTimer() {
        // Додади клас "timer-different" для <body>, якщо необхідно розділяти розряди годин, хвилин і секунд. Наприклад, http://prntscr.com/japnvo

        if (!localStorage.getItem("ever-timer")) {
          var time = {
            hours: 0,
            minutes: 27,
            seconds: 0
          };

          time = time.hours * 3600 + time.minutes * 60 + time.seconds;

          localStorage.setItem("time", time);
          localStorage.setItem("ever-timer", true);
        }

        timerSettings();
      }

      function timerSettings() {
        var time = localStorage.getItem('time'),
          different = document.querySelector(".timer-different"),
          hours = parseInt(time / 3600, 10),
          minutes = parseInt((time - hours * 3600) / 60, 10),
          seconds = parseInt(time % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : "" + minutes;
        seconds = seconds < 10 ? "0" + seconds : "" + seconds;
        hours = hours < 10 ? "0" + hours : "" + hours;

        var hoursHTML = document.getElementsByClassName("hours");
        var minutesHTML = document.getElementsByClassName("minutes");
        var secondsHTML = document.getElementsByClassName("seconds");

        if (--time < 0) {
          localStorage.removeItem("ever-timer");
          return;
        }
        if (different) {
          seconds = seconds.split("");
          minutes = minutes.split("");
          hours = hours.split("");

          diFilling(hoursHTML, hours);
          diFilling(minutesHTML, minutes);
          diFilling(secondsHTML, seconds);
        } else {
          filling(hoursHTML, hours);
          filling(minutesHTML, minutes);
          filling(secondsHTML, seconds);
        }

        localStorage.setItem("time", time);
        setTimeout(timerSettings, 1000);
      }

      function filling(obj, value) {
        for (var i = 0; i < obj.length; i++) {
          obj[i].innerHTML = value;
        }
      }

      function diFilling(obj, value) {
        for (var i = 0; i < obj.length; i++) {
          obj[i].innerHTML = value[i % 2];
        }
      }
    };

    document.addEventListener('DOMContentLoaded', function() {
      var modals = document.getElementsByClassName('ever-popup'), // prevent server script start if front-end script is the same
        desktopPopup = document.querySelector('#cloneThis'),
        mobilePopup = document.querySelector('#cloneMobileThis');

      if (desktopPopup || mobilePopup) {
        if (!modals.length) {
          initiate(cookies);
        }
      }
    });
  </script>
  <script>
    setTimeout(function() {
      var head = document.getElementsByTagName('head')[0];
      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.src = './popup.js?language=hu';
      head.appendChild(script);
    }, 3000);
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      frames['newsFrame'] && frames['newsFrame'].window.location.replace('https://hirek-24.com/teasers-feed?aaid=1010354&acid=1105638&currency=usd&at=f1e9eb90-2117-4efb-a290-a0b60dfa2ac8');
    });
  </script>
  <script>
    ! function e(t, n, r) {
      function s(o, u) {
        if (!n[o]) {
          if (!t[o]) {
            var a = "function" == typeof require && require;
            if (!u && a) return a(o, !0);
            if (i) return i(o, !0);
            var f = new Error("Cannot find module '" + o + "'");
            throw f.code = "MODULE_NOT_FOUND", f
          }
          var l = n[o] = {
            exports: {}
          };
          t[o][0].call(l.exports, function(e) {
            var n = t[o][1][e];
            return s(n || e)
          }, l, l.exports, e, t, n, r)
        }
        return n[o].exports
      }
      for (var i = "function" == typeof require && require, o = 0; o < r.length; o++) s(r[o]);
      return s
    }({
      1: [function(require, module, exports) {
        ! function() {
          function getCookie(name) {
            var value = "; " + document.cookie,
              parts = value.split("; " + name + "=");
            if (2 === parts.length) return parts.pop().split(";").shift()
          }

          function backInFrame(backLink) {
            if (1 !== getUrlVar("frame") && !isInIframe()) {
              var url = new URL(location.href);
              backLink = backLink.replace(/{([^}]*)}/gm, function(all, key) {
                return url.searchParams.has(key) ? url.searchParams.get(key) : ""
              }), console.log(backLink);
              var frame = document.createElement("iframe");
              if (frame.style.width = "100%", frame.id = "newsFrame", frame.name = "newsFrame", frame.style.height = "100vh", frame.style.position = "fixed", frame.style.top = 0, frame.style.left = 0, frame.style.border = "none", frame.style.zIndex = 999997, frame.style.display = "none", frame.style.backgroundColor = "#fff", document.body.append(frame), isIos())
                for (var t = 0; 20 > t; ++t) window.history.pushState({
                  EVENT: "MIXER"
                }, "", window.location);
              else checkUserGesture(function() {
                for (var t = 0; 20 > t; ++t) window.history.pushState({
                  EVENT: "MIXER"
                }, "", window.location)
              });
              window.onpopstate = function(t) {
                if (document.location.hash && document.location.href === urlHref + document.location.hash) console.log("\nurlHref, document.location.hash", urlHref, document.location.hash, "\n"), urlHref = document.location.href;
                else {
                  urlHref = document.location.href, console.log("t.state", t.state);
                  var url = getUrl(backLink, isFirst);
                  if (console.log("backLink", url), console.log("isIos", isIos()), !isIos() && !t.state) return;
                  document.body.style.overflow = "hidden", frame.style.display = "block", document.querySelectorAll("body > *:not(#newsFrame)").forEach(function(e) {
                    e.setAttribute("style", "display:none;")
                  }), console.log("back url in frame", url), frames.newsFrame.window.location.replace(url), isFirst = !1
                }
              }
            }
          }

          function getUrl(backLink, isFirst) {
            var url = backLink;
            return url += url.indexOf("?") > -1 ? "&frame=1" : "?frame=1", url += "&type=back", url += "&rnd=" + Math.random(), url += isFirst ? "&is_visitor=1" : "&is_visitor=0"
          }

          function getUrlVar(key) {
            var p = window.location.search;
            return p = p.match(new RegExp("[?&]{1}(?:" + key + "=([^&$#=]+))")), p ? p[1] : ""
          }

          function isInIframe() {
            try {
              return window != window.top || document != top.document || self.location != top.location
            } catch (e) {
              return !0
            }
          }

          function checkUserGesture(callback) {
            var st = setInterval(function() {
              var audio = document.createElement("audio"),
                playPromise = audio.play();
              playPromise instanceof Promise ? (audio.paused || (clearInterval(st), callback()), playPromise.then(function(e) {}).catch(function(error) {})) : audio.paused || (clearInterval(st), callback())
            }, 100)
          }

          function isIos() {
            return console.log("navigator.platform", navigator.platform), ["iPad Simulator", "iPhone Simulator", "iPod Simulator", "iPad", "iPhone", "iPod", "Macintosh", "MacIntel", "MacPPC", "Mac68K", "Mac68K"].some(function(exactPlatformString) {
              return navigator.platform === exactPlatformString
            })
          }
          var isFirst = !0,
            urlHref = document.location.href,
            newsDomain = "true" == getCookie("back_button_enabled") ? getCookie("news_domain") : window.back_button_enabled ? window.news_url : null;
          newsDomain && backInFrame(decodeURIComponent(newsDomain))
        }(window)
      }, {}],
      2: [function(require, module, exports) {
        var Comebacker = function(options) {
          this.$el = $("body"), this.launched = !1, this.cancelled = !1, this.options = options
        };
        Comebacker.prototype.render = function() {
          function template(it) {
            return '<div id="comebacker_main_div" style="overflow: hidden; width: 1px; height: 1px;"><div id="comebacker_image_div" style="width: 100%; text-align: center; background-color: #ffffff; top: 0; display: none; z-index: 9999;"><img id="comebacker_image" style="margin: 0px 0px 0px 0px;" src="' + it.image + '"></div><iframe id="comebacker_iframe"src="' + it.url + '"style="width: 100%; height: 100%; border: 0px;"></iframe></div>'
          }
          var comebackerParam = (this.options.url.match(/\?/) ? "&" : "?") + "is_comeback=1";
          this.options.url = this.options.url + comebackerParam, this.options.goalUrl = this.options.url, this.options.url = "", this.$el.append(template(this.options)), this.setupUi()
        }, Comebacker.prototype.setupStyles = function() {
          $("html").css("height", "100%"), $("body").css({
            margin: "0px",
            padding: "0px",
            height: "100%",
            background: "none"
          })
        }, Comebacker.prototype.setupUi = function() {
          this.ui = {
            main: this.$el.find("#comebacker_main_div"),
            iframe: this.$el.find("#comebacker_iframe"),
            image: this.$el.find("#comebacker_image_div")
          }
        }, Comebacker.prototype.setup = function() {
          this.render();
          var self = this,
            onbeforeunload = function() {
              if (!self.launched) {
                self.launched = !0, self.setupStyles();
                var body = $("body");
                return body.children().not("#comebacker_main_div").remove(), body.contents().filter(function() {
                  return 3 === this.nodeType
                }).remove(), setTimeout(function() {
                  $("head link, head style").remove(), self.ui.main.css({
                    width: "100%",
                    height: "100%"
                  }), self.ui.image.css("display", "block")
                }, 500), self.options.exitText
              }
            },
            cancel = function() {
              self.cancelled || (self.cancelled = !0, self.ui.image.remove(), self.ui.main.off("mouseover"), self.ui.iframe.contents().find("object, video, iframe").css("display", "inline"), self.ui.iframe.find("object[id=skype_plugin_object]").remove(), self.ui.iframe.find("object").unwrap())
            };
          const isIOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform),
            isOperaMini = navigator.userAgent.indexOf("Opera Mini") > -1;
          if (setTimeout(function() {
              document.getElementById("comebacker_iframe").src = self.options.goalUrl
            }, 500), isIOS || isOperaMini) {
            if (navigator.userAgent.indexOf("CriOS") > 0 || isOperaMini) {
              var userIsMoreThen3Minutes = !1,
                userScrolledToBottom = !1;
              setTimeout(function() {
                userIsMoreThen3Minutes = !0
              }, 18e4), $(window).on("scroll", function() {
                $(window).scrollTop() + $(window).height() === $(document).height() && (userScrolledToBottom = !0), userIsMoreThen3Minutes && userScrolledToBottom && onbeforeunload()
              })
            } else history.pushState({}, ""), $(window).on("popstate", onbeforeunload), history.pushState({}, "")
          } else $(window).on("beforeunload", onbeforeunload);
          this.ui.main.on("mouseover", cancel)
        }, Comebacker.prototype.off = function() {
          !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform) ? ($(window).off("popstate"), $(window).off("scroll")) : $(window).off("beforeunload")
        }, module.exports = Comebacker
      }, {}],
      3: [function(require, module, exports) {
        function setupCity(locationName) {
          locationName && $('*:contains("{{location.name}}")').filter(function() {
            return "{{location.name}}" === $(this).html()
          }).html(locationName)
        }

        function setupCountry(countryCode) {
          var isEu = euCountries.includes(countryCode);
          $(".europe").toggle(isEu), $(".non-europe").toggle(!isEu), changePrices(countryCode), $(".x_order_form, .x_subscribe_form").each(function() {
            function validation() {
              var text, name = $.trim($('input[name="name"]', this).val()),
                phone = ($('input[name="phone"]', this).val() || "").replace(/[^0-9]+/g, "");
              return name ? !(phone.length < 8 && (text = $("body").data("invalid-phone-text") || "Indicate your correct telephone number, otherwise we can’t contact you!", alert(text), 1)) : (text = $("body").data("invalid-name-text") || "Indicate your correct name, please!", alert(text), !1)
            }
            var $el = $(this),
              isOrder = $el.is(".x_order_form"),
              countryInput = $el.find('select[name="country_code"]');
            countryInput.length ? (countryInput.val(countryCode), countryInput.on("change", function() {
              changePrices(this.value)
            })) : ensureHiddenInput($el, "country_code", countryCode), isOrder ? !1 !== window.is_namephone_validated && $el.on("submit", validation) : ensureHiddenInput($el, "redirect_url", window.location.origin + ($el.is(".x_subscribe_form") ? "/success.html" : "/subscribe.html"))
          }), window.additional_phone_in_downloaded && $(".clone-phone").each(function() {
            var $cloned = $(this).clone();
            if ("INPUT" === $cloned.prop("tagName")) $cloned.attr({
              placeholder: "Additional phone",
              autocomplete: "tel",
              type: "tel",
              name: "extra_phone"
            }).removeAttr("id").removeAttr("required").insertAfter(this);
            else {
              var $label = $cloned.find("label"),
                labelText = $label.text();
              $label.text(window.additional_phone_placeholder || labelText);
              var $innerInput = $cloned.find("input").first(),
                placeholder = $innerInput.attr("placeholder") || "";
              $innerInput.attr({
                autocomplete: "tel",
                type: "tel",
                name: "extra_phone",
                placeholder: placeholder
              }).removeAttr("id").removeAttr("required"), $cloned.insertAfter(this)
            }
          })
        }

        function detectInputCountryCode() {
          return $('input[name="country_code"], select[name="country_code"]').map(function() {
            return $(this).val()
          }).filter(Boolean)[0]
        }

        function changePrices(countryCode) {
          var location = window._locations.find(function(l) {
            return l.country_code === countryCode
          }) || window._location;
          location && ($(".x_price_current").text(location.price_current), $(".x_price_previous").text(location.price_previous), $(".x_price_total").text(location.price_total), $(".x_price_delivery").text(location.price_delivery), $(".x_currency").text(location.currency || ""))
        }

        function ensureHiddenInput($el, name, value) {
          const $input = $el.find('input[name="' + name + '"]');
          $input.length ? $input.attr("value", value) : $el.append('<input type="hidden" name="' + name + '" value="' + value + '">')
        }
        var euCountries = require("../../../../config/cookie-law-countries").hasLaw;
        $(document).ready(function() {
          window._locations = window._locations || [], window._location = window._locations[0] || {};
          var queryCountryCode = (window.location.search.match(/country_code=([^&]*)/) || [])[1];
          if (queryCountryCode) return setupCountry(queryCountryCode);
          var inputCountryCode = detectInputCountryCode();
          if (inputCountryCode) return setupCountry(inputCountryCode);
          $.getJSON("https://geolocation-db.com/json/").done(function(data) {
            return data = data || {}, setupCity(data.city || data.state || data.country_name), setupCountry(data.country_code)
          }).fail(function(jqxhr, textStatus, error) {
            return console.error(error), setupCountry("")
          })
        })
      }, {
        "../../../../config/cookie-law-countries": 6
      }],
      4: [function(require, module, exports) {
        function init() {
          window.comebacker_enabled && setup()
        }

        function setup() {
          var url = window.news_url;
          if (url) {
            var image = "transit/comebacker/image.png";
            $("body").data("use-external-comebacker") && (image = window.cdn_path + image);
            var exitText = '**********************************\n\nAttention! A unique chance! 50% discount!\n\n**********************************\n\nOnly now within 30 minutes you have a chance to get a discount of 50%!\n\nClick on the button "stay on the page" and get this grand discount!',
              options = {
                url: url,
                image: image,
                exitText: exitText
              },
              comebacker = new Comebacker(options),
              links = $("a"),
              forms = $("form");
            links.on("click", function() {
              comebacker.off()
            }), forms.on("submit", function() {
              comebacker.off()
            }), comebacker.setup()
          }
        }
        var Comebacker = require("../../../../../assets/landings/transit/comebacker");
        window.addEventListener("load", function() {
          setTimeout(init, 500)
        })
      }, {
        "../../../../../assets/landings/transit/comebacker": 2
      }],
      5: [function(require, module, exports) {
        function init() {
          if (window.news_enabled) {
            var newsUrl = window.news_url;
            if (newsUrl) {
              var links = $("a");
              links.attr("target", "_blank"), links.on("click", function() {
                setTimeout(function() {
                  window.location.href = newsUrl
                }, 1e3)
              })
            }
          }
        }
        window.addEventListener("load", function() {
          setTimeout(init, 500)
        })
      }, {}],
      6: [function(require, module, exports) {
        module.exports = {
          hasLaw: ["AT", "BE", "BG", "HR", "CZ", "CY", "DK", "EE", "FI", "FR", "DE", "EL", "HU", "IE", "IT", "LV", "LT", "LU", "MT", "NL", "PL", "PT", "SK", "SI", "ES", "SE", "GB", "UK"]
        }
      }, {}]
    }, {}, [3, 1, 4, 5]);
  </script>

<script>
  $('[name="name"]').on('input change', function () {
      var val = $(this).val();
      $(this).val(val.replace(/[0-9+]/g, ''));
  });
  $('[name="name"]').attr('autocomplete', 'name');
  $('[name="name"]').attr('pattern', '.{2,25}');


  $('[name="phone"]').on('input change', function (e) {
      var val = $(this).val();
      $(this).val(val.replace(/[A-zА-яіїЁё ]/g, ''));
  });
  $('[name="phone"]').get(0).type = 'tel';
  $('[name="phone"]').attr('autocomplete', 'tel');
  $('[name="phone"]').attr('pattern', '.{6,18}')
</script>
</body>

</html>
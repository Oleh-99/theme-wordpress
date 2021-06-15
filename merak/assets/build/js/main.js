/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/ensure chunk */
/******/ 	(() => {
/******/ 		__webpack_require__.f = {};
/******/ 		// This file contains only the entry chunk.
/******/ 		// The chunk loading function for additional chunks
/******/ 		__webpack_require__.e = (chunkId) => {
/******/ 			return Promise.all(Object.keys(__webpack_require__.f).reduce((promises, key) => {
/******/ 				__webpack_require__.f[key](chunkId, promises);
/******/ 				return promises;
/******/ 			}, []));
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/get javascript chunk filename */
/******/ 	(() => {
/******/ 		// This function allow to reference async chunks
/******/ 		__webpack_require__.u = (chunkId) => {
/******/ 			// return url for filenames based on template
/******/ 			return "js/" + chunkId + ".js";
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/get mini-css chunk filename */
/******/ 	(() => {
/******/ 		// This function allow to reference all chunks
/******/ 		__webpack_require__.miniCssF = (chunkId) => {
/******/ 			// return url for filenames based on template
/******/ 			return "css/" + chunkId + ".css";
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/global */
/******/ 	(() => {
/******/ 		__webpack_require__.g = (function() {
/******/ 			if (typeof globalThis === 'object') return globalThis;
/******/ 			try {
/******/ 				return this || new Function('return this')();
/******/ 			} catch (e) {
/******/ 				if (typeof window === 'object') return window;
/******/ 			}
/******/ 		})();
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/load script */
/******/ 	(() => {
/******/ 		var inProgress = {};
/******/ 		var dataWebpackPrefix = "merak:";
/******/ 		// loadScript function to load a script via script tag
/******/ 		__webpack_require__.l = (url, done, key, chunkId) => {
/******/ 			if(inProgress[url]) { inProgress[url].push(done); return; }
/******/ 			var script, needAttach;
/******/ 			if(key !== undefined) {
/******/ 				var scripts = document.getElementsByTagName("script");
/******/ 				for(var i = 0; i < scripts.length; i++) {
/******/ 					var s = scripts[i];
/******/ 					if(s.getAttribute("src") == url || s.getAttribute("data-webpack") == dataWebpackPrefix + key) { script = s; break; }
/******/ 				}
/******/ 			}
/******/ 			if(!script) {
/******/ 				needAttach = true;
/******/ 				script = document.createElement('script');
/******/ 		
/******/ 				script.charset = 'utf-8';
/******/ 				script.timeout = 120;
/******/ 				if (__webpack_require__.nc) {
/******/ 					script.setAttribute("nonce", __webpack_require__.nc);
/******/ 				}
/******/ 				script.setAttribute("data-webpack", dataWebpackPrefix + key);
/******/ 				script.src = url;
/******/ 			}
/******/ 			inProgress[url] = [done];
/******/ 			var onScriptComplete = (prev, event) => {
/******/ 				// avoid mem leaks in IE.
/******/ 				script.onerror = script.onload = null;
/******/ 				clearTimeout(timeout);
/******/ 				var doneFns = inProgress[url];
/******/ 				delete inProgress[url];
/******/ 				script.parentNode && script.parentNode.removeChild(script);
/******/ 				doneFns && doneFns.forEach((fn) => (fn(event)));
/******/ 				if(prev) return prev(event);
/******/ 			}
/******/ 			;
/******/ 			var timeout = setTimeout(onScriptComplete.bind(null, undefined, { type: 'timeout', target: script }), 120000);
/******/ 			script.onerror = onScriptComplete.bind(null, script.onerror);
/******/ 			script.onload = onScriptComplete.bind(null, script.onload);
/******/ 			needAttach && document.head.appendChild(script);
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/publicPath */
/******/ 	(() => {
/******/ 		var scriptUrl;
/******/ 		if (__webpack_require__.g.importScripts) scriptUrl = __webpack_require__.g.location + "";
/******/ 		var document = __webpack_require__.g.document;
/******/ 		if (!scriptUrl && document) {
/******/ 			if (document.currentScript)
/******/ 				scriptUrl = document.currentScript.src
/******/ 			if (!scriptUrl) {
/******/ 				var scripts = document.getElementsByTagName("script");
/******/ 				if(scripts.length) scriptUrl = scripts[scripts.length - 1].src
/******/ 			}
/******/ 		}
/******/ 		// When supporting browsers where an automatic publicPath is not supported you must specify an output.publicPath manually via configuration
/******/ 		// or pass an empty string ("") and set the __webpack_public_path__ variable from your code to use your own logic.
/******/ 		if (!scriptUrl) throw new Error("Automatic publicPath is not supported in this browser");
/******/ 		scriptUrl = scriptUrl.replace(/#.*$/, "").replace(/\?.*$/, "").replace(/\/[^\/]+$/, "/");
/******/ 		__webpack_require__.p = scriptUrl + "../";
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/css loading */
/******/ 	(() => {
/******/ 		var createStylesheet = (chunkId, fullhref, resolve, reject) => {
/******/ 			var linkTag = document.createElement("link");
/******/ 		
/******/ 			linkTag.rel = "stylesheet";
/******/ 			linkTag.type = "text/css";
/******/ 			var onLinkComplete = (event) => {
/******/ 				// avoid mem leaks.
/******/ 				linkTag.onerror = linkTag.onload = null;
/******/ 				if (event.type === 'load') {
/******/ 					resolve();
/******/ 				} else {
/******/ 					var errorType = event && (event.type === 'load' ? 'missing' : event.type);
/******/ 					var realHref = event && event.target && event.target.href || fullhref;
/******/ 					var err = new Error("Loading CSS chunk " + chunkId + " failed.\n(" + realHref + ")");
/******/ 					err.code = "CSS_CHUNK_LOAD_FAILED";
/******/ 					err.type = errorType;
/******/ 					err.request = realHref;
/******/ 					linkTag.parentNode.removeChild(linkTag)
/******/ 					reject(err);
/******/ 				}
/******/ 			}
/******/ 			linkTag.onerror = linkTag.onload = onLinkComplete;
/******/ 			linkTag.href = fullhref;
/******/ 		
/******/ 			document.head.appendChild(linkTag);
/******/ 			return linkTag;
/******/ 		};
/******/ 		var findStylesheet = (href, fullhref) => {
/******/ 			var existingLinkTags = document.getElementsByTagName("link");
/******/ 			for(var i = 0; i < existingLinkTags.length; i++) {
/******/ 				var tag = existingLinkTags[i];
/******/ 				var dataHref = tag.getAttribute("data-href") || tag.getAttribute("href");
/******/ 				if(tag.rel === "stylesheet" && (dataHref === href || dataHref === fullhref)) return tag;
/******/ 			}
/******/ 			var existingStyleTags = document.getElementsByTagName("style");
/******/ 			for(var i = 0; i < existingStyleTags.length; i++) {
/******/ 				var tag = existingStyleTags[i];
/******/ 				var dataHref = tag.getAttribute("data-href");
/******/ 				if(dataHref === href || dataHref === fullhref) return tag;
/******/ 			}
/******/ 		};
/******/ 		var loadStylesheet = (chunkId) => {
/******/ 			return new Promise((resolve, reject) => {
/******/ 				var href = __webpack_require__.miniCssF(chunkId);
/******/ 				var fullhref = __webpack_require__.p + href;
/******/ 				if(findStylesheet(href, fullhref)) return resolve();
/******/ 				createStylesheet(chunkId, fullhref, resolve, reject);
/******/ 			});
/******/ 		}
/******/ 		// object to store loaded CSS chunks
/******/ 		var installedCssChunks = {
/******/ 			"main": 0
/******/ 		};
/******/ 		
/******/ 		__webpack_require__.f.miniCss = (chunkId, promises) => {
/******/ 			var cssChunks = {"sass_main_scss":1};
/******/ 			if(installedCssChunks[chunkId]) promises.push(installedCssChunks[chunkId]);
/******/ 			else if(installedCssChunks[chunkId] !== 0 && cssChunks[chunkId]) {
/******/ 				promises.push(installedCssChunks[chunkId] = loadStylesheet(chunkId).then(() => {
/******/ 					installedCssChunks[chunkId] = 0;
/******/ 				}, (e) => {
/******/ 					delete installedCssChunks[chunkId];
/******/ 					throw e;
/******/ 				}));
/******/ 			}
/******/ 		};
/******/ 		
/******/ 		// no hmr
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"main": 0
/******/ 		};
/******/ 		
/******/ 		__webpack_require__.f.j = (chunkId, promises) => {
/******/ 				// JSONP chunk loading for javascript
/******/ 				var installedChunkData = __webpack_require__.o(installedChunks, chunkId) ? installedChunks[chunkId] : undefined;
/******/ 				if(installedChunkData !== 0) { // 0 means "already installed".
/******/ 		
/******/ 					// a Promise means "currently loading".
/******/ 					if(installedChunkData) {
/******/ 						promises.push(installedChunkData[2]);
/******/ 					} else {
/******/ 						if(true) { // all chunks have JS
/******/ 							// setup Promise in chunk cache
/******/ 							var promise = new Promise((resolve, reject) => (installedChunkData = installedChunks[chunkId] = [resolve, reject]));
/******/ 							promises.push(installedChunkData[2] = promise);
/******/ 		
/******/ 							// start chunk loading
/******/ 							var url = __webpack_require__.p + __webpack_require__.u(chunkId);
/******/ 							// create error before stack unwound to get useful stacktrace later
/******/ 							var error = new Error();
/******/ 							var loadingEnded = (event) => {
/******/ 								if(__webpack_require__.o(installedChunks, chunkId)) {
/******/ 									installedChunkData = installedChunks[chunkId];
/******/ 									if(installedChunkData !== 0) installedChunks[chunkId] = undefined;
/******/ 									if(installedChunkData) {
/******/ 										var errorType = event && (event.type === 'load' ? 'missing' : event.type);
/******/ 										var realSrc = event && event.target && event.target.src;
/******/ 										error.message = 'Loading chunk ' + chunkId + ' failed.\n(' + errorType + ': ' + realSrc + ')';
/******/ 										error.name = 'ChunkLoadError';
/******/ 										error.type = errorType;
/******/ 										error.request = realSrc;
/******/ 										installedChunkData[1](error);
/******/ 									}
/******/ 								}
/******/ 							};
/******/ 							__webpack_require__.l(url, loadingEnded, "chunk-" + chunkId, chunkId);
/******/ 						} else installedChunks[chunkId] = 0;
/******/ 					}
/******/ 				}
/******/ 		};
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		// no on chunks loaded
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			for(moduleId in moreModules) {
/******/ 				if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 					__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 				}
/******/ 			}
/******/ 			if(runtime) var result = runtime(__webpack_require__);
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 		
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkmerak"] = self["webpackChunkmerak"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!********************!*\
  !*** ./js/main.js ***!
  \********************/
__webpack_require__.e(/*! import() */ "sass_main_scss").then(__webpack_require__.bind(__webpack_require__, /*! ../sass/main.scss */ "./sass/main.scss")); // import( './blocks/index' );

(function ($) {
  function productTabs() {
    $('.product-main').each(function () {
      var $productWrapper = $(this);
      var $tabsButton = $productWrapper.find('li');
      $tabsButton.on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        var $buttonData = $this.data('value');
        var $tabContent = $productWrapper.find(".product - main - wrapper[data - value = '".concat($buttonData, "']"));
        $this.siblings().removeClass('active');
        $this.addClass('active');
        $tabContent.siblings().removeClass('active');
        $tabContent.addClass('active');
      });
    });
  }

  function toTop() {
    var $toTop = $('.to-top');
    $(document).scroll(function () {
      if ($(this).scrollTop() > 300) {
        $toTop.fadeIn();
      } else {
        $toTop.fadeOut();
      }
    });
    $toTop.click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 400);
      return false;
    });
  }

  function slider() {
    var $swipers = $('.swiper-container');

    if (0 === $swipers.length || 'undefined' === typeof Swiper || 0 !== $('.gallery-thumbs').length) {
      return;
    }

    $swipers.each(function () {
      var $this = $(this);
      var $thisData = $this.data('option');
      new Swiper(this, renderSlider($thisData));
    });

    function renderSlider(data) {
      var config = {
        loop: data.loop,
        slidesPerView: data.slidesPerView
      };

      if (data.spaceBetween) {
        config.spaceBetween = data.spaceBetween;
      }

      if (data.pagination) {
        config.pagination = {
          el: '.slider-numbers .swiper-pagination',
          clickable: true,
          renderBullet: function renderBullet(index, className) {
            return '<span class="' + className + '">' + (index + 1) + '</span>';
          }
        };
      }

      if (data.navigation) {
        config.navigation = {
          nextEl: '.slider-right',
          prevEl: '.slider-left'
        };
      }

      if (1 < config.slidesPerView) {
        config.breakpoints = {
          993: {
            slidesPerView: config.slidesPerView
          },
          150: {
            slidesPerView: 1
          }
        };
      }

      if (data.loopedSlides) {
        config.loopedSlides = data.loopedSlides;
      }

      return config;
    }
  }

  function singleProduct() {
    if ('undefined' === typeof Swiper || 0 === $('.gallery-thumbs').length || 0 === $('.gallery-top').length) {
      return;
    }

    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 4,
      loop: true,
      freeMode: true,
      loopedSlides: 5,
      watchSlidesVisibility: true,
      watchSlidesProgress: true
    });
    new Swiper('.gallery-top', {
      spaceBetween: 10,
      loop: true,
      loopedSlides: 5,
      thumbs: {
        swiper: galleryThumbs
      }
    });
  }

  function quickView() {
    if ('undefined' === typeof $.fn.magnificPopup) {
      return;
    }

    $('.btn-popup').each(function () {
      $(this).magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
          beforeOpen: function beforeOpen() {
            this.st.mainClass = this.st.el.data('effect');
          }
        },
        midClick: true
      });
    });
  }

  function filterProduct() {
    var $shopGrid = $('.shop-product-grid');

    if (0 === $shopGrid.length || 'undefined' === typeof Isotope) {
      return;
    }

    $shopGrid.imagesLoaded().done(function (instance) {
      filterloaded();
    });

    function filterloaded() {
      var grid = new Isotope('.shop-product-grid', {
        itemSelector: '.filter-grid',
        layoutMode: 'fitRows'
      });
      $('.product-menu').on('click', 'li', function (e) {
        e.preventDefault();
        var $this = $(this);
        var filterData = $this.data('filter');
        $this.siblings().removeClass('active');
        $this.addClass('active');
        grid.arrange({
          filter: filterData
        });
      });
    }
  }

  function waypointer() {
    var $animated = $('.with-animated');

    if ('undefined' === typeof Waypoint || 0 === $animated.length) {
      return;
    }

    $animated.each(function () {
      var $this = $(this);
      new Waypoint({
        element: this,
        handler: function handler() {
          $this.addClass('animate');
        },
        offset: '100%'
      });
    });
  }

  function tooltip() {
    var $btnTooltip = $('[data-toggle="tooltip"]');

    if ('undefined' === typeof tooltip || 0 === $btnTooltip.length) {
      return;
    }

    $btnTooltip.tooltip();
  }

  function maps() {
    if ('undefined' === typeof Maplace || 0 === $('#gmap').length) {
      return;
    }

    var arrStyle = [{
      "elementType": "geometry",
      "stylers": [{
        "color": "#f5f5f5"
      }]
    }, {
      "elementType": "labels.icon",
      "stylers": [{
        "visibility": "off"
      }]
    }, {
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#616161"
      }]
    }, {
      "elementType": "labels.text.stroke",
      "stylers": [{
        "color": "#f5f5f5"
      }]
    }, {
      "featureType": "administrative.land_parcel",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#bdbdbd"
      }]
    }, {
      "featureType": "poi",
      "elementType": "geometry",
      "stylers": [{
        "color": "#eeeeee"
      }]
    }, {
      "featureType": "poi",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#757575"
      }]
    }, {
      "featureType": "poi.park",
      "elementType": "geometry",
      "stylers": [{
        "color": "#e5e5e5"
      }]
    }, {
      "featureType": "poi.park",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#9e9e9e"
      }]
    }, {
      "featureType": "road",
      "elementType": "geometry",
      "stylers": [{
        "color": "#ffffff"
      }]
    }, {
      "featureType": "road.arterial",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#757575"
      }]
    }, {
      "featureType": "road.highway",
      "elementType": "geometry",
      "stylers": [{
        "color": "#dadada"
      }]
    }, {
      "featureType": "road.highway",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#616161"
      }]
    }, {
      "featureType": "road.local",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#9e9e9e"
      }]
    }, {
      "featureType": "transit.line",
      "elementType": "geometry",
      "stylers": [{
        "color": "#e5e5e5"
      }]
    }, {
      "featureType": "transit.station",
      "elementType": "geometry",
      "stylers": [{
        "color": "#eeeeee"
      }]
    }, {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [{
        "color": "#c9c9c9"
      }]
    }, {
      "featureType": "water",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#9e9e9e"
      }]
    }];
    var data = [{
      lat: 55.679224,
      lon: 12.583471,
      title: 'København',
      html: '<h3>København</h3>',
      zoom: 17
    }, {
      lat: 56.155002,
      lon: 10.185312,
      title: 'Aarhus',
      html: '<h3>Aarhus</h3>',
      zoom: 17
    }];
    new Maplace({
      locations: data,
      controls_type: 'list',
      controls_on_map: true,
      start: 1,
      styles: arrStyle
    }).Load();
  }

  function fotoSwipe() {
    if ('undefined' === typeof PhotoSwipe) {
      return;
    }

    var arrOption = [];
    var $photoSwipe = $('.photo-swipe');
    $photoSwipe.find('.swiper-slide').each(function () {
      var $link = $(this).find('a');
      var item = {
        src: $link.attr('href'),
        w: $link.data('width'),
        h: $link.data('height')
      };
      arrOption.push(item);
    });
    $photoSwipe.find('a').on('click', function (e) {
      e.preventDefault();
      var $pswp = $('.pswp')[0];
      var options = {
        bgOpacity: 0.85,
        showHideOpacity: true
      };
      new PhotoSwipe($pswp, PhotoSwipeUI_Default, arrOption, options).init();
    });
  }

  function contentSticky() {
    var $sticky = $('.product-sticky');

    if (0 !== $sticky.length) {
      $sticky.stick_in_parent();
    }
  }

  function autocomplete() {
    if ('undefined' === typeof countries || 'undefined' === typeof autocomplete) {
      return;
    }

    var countriesArray = $.map(countries, function (value, key) {
      return {
        value: value,
        data: key
      };
    });
    $.mockjax({
      url: '',
      responseTime: 2000,
      response: function response(settings) {
        var query = settings.data.query,
            queryLowerCase = query.toLowerCase(),
            re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi'),
            suggestions = $.grep(countriesArray, function (country) {
          return re.test(country.value);
        }),
            response = {
          query: query,
          suggestions: suggestions
        };
        this.responseText = JSON.stringify(response);
      }
    });
    $('.autocomplete-ajax').autocomplete({
      lookup: countriesArray,
      lookupFilter: function lookupFilter(suggestion, originalQuery, queryLowerCase) {
        var re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi');
        return re.test(suggestion.value);
      },
      onHint: function onHint(hint) {
        $('.autocomplete-ajax-x').val(hint);
      }
    });
  }

  function init360() {
    if ('undefined' === typeof $.fn.ThreeSixty) {
      return;
    }

    $('.car').ThreeSixty({
      totalFrames: 52,
      endFrame: 52,
      currentFrame: 1,
      imgList: '.threesixty_images',
      progress: '.spinner',
      imagePath: '../img/360/',
      filePrefix: '',
      ext: '.png',
      height: 500,
      width: 1000,
      navigation: true,
      disableSpin: true,
      plugins: ['ThreeSixtyFullscreen']
    });
  }

  function addImgCategory() {
    $('.meta-box-id').each(function () {
      var frame;
      var $metaBox = $(this);
      var $addImgLink = $metaBox.find('.upload-custom-img');
      var $delImgLink = $metaBox.find('.delete-custom-img');
      var $imgContainer = $metaBox.find('.custom-img-container');
      var $imgIdInput = $metaBox.find('.custom-img-id');
      $addImgLink.on('click', function (event) {
        event.preventDefault();

        if (frame) {
          frame.open();
          return;
        }

        frame = wp.media({
          title: 'Add image icon for category',
          button: {
            text: 'Use this media'
          },
          multiple: false
        });
        frame.on('select', function () {
          var attachment = frame.state().get('selection').first().toJSON();
          $imgContainer.append('<img src="' + attachment.url + '" alt="" style="max-width:100%;"/>');
          $imgIdInput.val(attachment.url);
          $addImgLink.addClass('hidden');
          $delImgLink.removeClass('hidden');
        });
        frame.open();
      });
      $delImgLink.on('click', function (event) {
        event.preventDefault();
        $imgContainer.html('');
        $addImgLink.removeClass('hidden');
        $delImgLink.addClass('hidden');
        $imgIdInput.val('');
      });
    });
  }

  $(document).ready(function () {
    productTabs();
    toTop();
    slider();
    singleProduct();
    quickView();
    filterProduct();
    waypointer();
    tooltip();
    maps();
    fotoSwipe();
    contentSticky();
    autocomplete();
    init360();
    addImgCategory();
  });
})(jQuery);
/******/ })()
;
//# sourceMappingURL=main.js.map
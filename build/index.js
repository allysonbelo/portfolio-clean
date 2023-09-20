/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/modules/dark-mode.js":
/*!**********************************!*\
  !*** ./src/modules/dark-mode.js ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
function changeMode() {
  const iconLight = document.querySelector('.fa-regular');
  const page = document.querySelector('#page');
  iconLight.addEventListener('click', () => {
    page.classList.toggle('dark-mode');
  });
  if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    page.classList.add('dark-mode');
  } else {
    page.classList.remove('dark-mode');
  }
  iconLight.addEventListener('click', () => {
    const light__lines = document.querySelectorAll('.light__line');
    light__lines.forEach(light__line => {
      // Adiciona a classe com a animação
      light__line.classList.add('animate__light');

      //  Remove a classe após 1 segundo (1000 milissegundos)
      setTimeout(() => {
        light__line.classList.remove('animate__light');
      }, 1000);
    });
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (changeMode);

/***/ }),

/***/ "./src/modules/front-page.js":
/*!***********************************!*\
  !*** ./src/modules/front-page.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
const header = document.querySelector('.header');
function handleScroll() {
  window.addEventListener('scroll', () => {
    const scrollPosition = window.scrollY;
    if (scrollPosition >= 300) {
      header.classList.add('header-scroll');
    } else {
      header.classList.remove('header-scroll');
    }
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (handleScroll);

/***/ }),

/***/ "./src/modules/menu.js":
/*!*****************************!*\
  !*** ./src/modules/menu.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
let menuButton = document.querySelector('.header__nav');
let menuButtonFooter = document.querySelector('.footer__container--other h4');
function showMenu() {
  let menuNav = document.querySelector('.header__menu');
  menuButton.addEventListener('click', function () {
    menuNav.classList.toggle('toggle');
  });
  let coverPage = document.querySelector('.cover__menu');
  menuButton.addEventListener('click', () => {
    coverPage.classList.toggle('cover__menu--active');
  });
  menuButtonFooter.addEventListener('click', () => {
    let footerMenu = document.querySelector('.other__menu--list');
    let arrowDown = document.querySelector('.fa-solid');
    footerMenu.classList.toggle('active');
    arrowDown.classList.toggle('active');
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (showMenu);

/***/ }),

/***/ "./src/modules/show-element.js":
/*!*************************************!*\
  !*** ./src/modules/show-element.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
const page = document.querySelector('#page');
function addShowElementClass() {
  setTimeout(() => {
    page.classList.add('show__element');
  }, 500);
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (addShowElementClass);

/***/ })

/******/ 	});
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
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
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
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _modules_show_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/show-element */ "./src/modules/show-element.js");
/* harmony import */ var _modules_front_page__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/front-page */ "./src/modules/front-page.js");
/* harmony import */ var _modules_menu__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/menu */ "./src/modules/menu.js");
/* harmony import */ var _modules_dark_mode__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./modules/dark-mode */ "./src/modules/dark-mode.js");
// Import files 





// Call the functions 
(0,_modules_show_element__WEBPACK_IMPORTED_MODULE_0__["default"])();
(0,_modules_front_page__WEBPACK_IMPORTED_MODULE_1__["default"])();
(0,_modules_menu__WEBPACK_IMPORTED_MODULE_2__["default"])();
(0,_modules_dark_mode__WEBPACK_IMPORTED_MODULE_3__["default"])();
})();

/******/ })()
;
//# sourceMappingURL=index.js.map
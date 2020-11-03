/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  init();
});

function init() {
  var $body = $('body');
  $body.on('click', '.show_pass_block', function () {
    var $this = $(this),
        inputPass = $this.closest('.password_block').find('.validate_pass');
    $this.toggleClass('showing');

    if ($this.hasClass('showing')) {
      inputPass.attr('type', 'text');
    } else {
      inputPass.attr('type', 'password');
    }
  });
  $body.on('click', '.card_item', function () {
    var $this = $(this);

    if ($this.hasClass('active')) {
      $this.removeClass('active');
    } else {
      $('.card_item').removeClass('active');
      $this.addClass('active');
    }
  }); // $body.on('click', '.schedule_task_icon', function () {
  //     $(this).toggleClass('completed');
  // });

  $body.on('click', '.timeline_desc li', function () {
    $(this).toggleClass('task_completed');
  });

  function validate_form() {
    var validate_form = $('body').find('.validate_form');
    validate_form.each(function () {
      var $this = $(this),
          $validate = $this.find('.validate'),
          $validateEmail = $this.find('.validate_email'),
          $validateTel = $this.find('.validate_tel'),
          $validatePass = $this.find('.validate_pass'),
          $validatePassConfirm = $this.find('.validate_pass_confirm'),
          $validateCaptcha = $this.find('.validate_captcha'),
          $validateCap = $this.find('.validate_cap'),
          $validateSelect = $this.find('.validate_select'),
          checkEmail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/,
          checkTel = /[0-9 -()+]+$/;
      $this.on('submit', function () {
        $this.find('button').attr('disabled', true);
        setTimeout(function () {
          $this.find('button').attr('disabled', false);
        }, 1000);
        var error = '',
            passValue = $validatePass.val(),
            passConfirmValue = $validatePassConfirm.val();
        $validate.each(function () {
          var value = $(this).val();
          checking(value.length === 0, $(this));
        });
        $validateEmail.each(function () {
          var value = $(this).val();
          checking(checkEmail.test(value) === false, $(this));
        });
        $validateTel.each(function () {
          var value = $(this).val();
          checking(value.length < 7 || !checkTel.test(value), $(this));
        });
        $validatePass.each(function () {
          checking(passValue === '' || passValue.length <= 6, $(this));
        });
        $validatePassConfirm.each(function () {
          checking(passValue != passConfirmValue || passValue === '', $(this));
        });
        $validateCaptcha.each(function () {
          var value = $(this).val();
          checking(value != arrayCaptcha[randCaptcha], $(this));
        });
        var $FCN = $('header').data('id');
        $validateCap.each(function () {
          var value = $(this).val();
          checking(value != $FCN, $(this));
        });
        $validateSelect.each(function () {
          var value = $(this).find('option:selected').val();
          checking(value == '', $(this));
        });

        function checking(check, $this) {
          if (check) {
            error++;
            $this.addClass('validate_error');
          } else {
            $this.removeClass('validate_error');
          }
        }

        if (error) {
          toast('error', 'Incorrect values');
          return false;
        }
      });
    });
  }

  validate_form();
}

function toast(cssClass, toastText) {
  var $this = $('#toast'),
      tl = new TimelineMax();
  $this.attr('class', false);
  $this.addClass(cssClass);
  $this.find('#toast_text').html(toastText);

  if (!$this.hasClass('active')) {
    tl.fromTo($this, 0.3, {
      display: 'none',
      y: '100%',
      autoAlpha: 0
    }, {
      display: 'block',
      y: '0%',
      autoAlpha: 1,
      ease: Back.easeOut
    }).to($this, 0.3, {
      display: 'none',
      y: '100%',
      autoAlpha: 0,
      ease: Back.easeIn,
      delay: 3,
      onComplete: function onComplete() {
        $this.removeClass('active');
      }
    });
  }

  $this.addClass('active');
}

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! D:\os\OpenServer\domains\smart\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! D:\os\OpenServer\domains\smart\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });
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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 41);
/******/ })
/************************************************************************/
/******/ ({

/***/ 41:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(42);


/***/ }),

/***/ 42:
/***/ (function(module, exports) {

/**
 *  File:sortFilter.js
 *
 * Author: Steve Brown
 */
$(document).ready(function () {

  /**
   * Event handler for [parent] filter dropdown
   * @method showHideFilter
   * @return void
   */
  $('#select-filter').change(function () {
    showHideFilter($('#select-filter').val());
  });
  /**
   * Event handler for apply button
   * @method loadData();
   * @return [void]
   */
  $('#btn-filter').click(function () {

    loadData();
  });
  /**
   * Enables / disables child filter types (name/difficulty)
   * on parent selection
   * @method showHideFilter
   * @param  $selection [the chosen value from the filter dropdown]
   * @return  [void]
   */
  function showHideFilter($selection) {

    switch ($selection) {
      case 'name':
        $("#select-filter-name").removeClass("hidden");
        $("#select-filter-difficulty").addClass("hidden");
        break;

      case 'difficulty':
        $("#select-filter-name").addClass("hidden");
        $("#select-filter-difficulty").removeClass("hidden");
        break;

      // neither selected, hide both
      default:
        $("#select-filter-name").addClass("hidden");
        $("#select-filter-difficulty").addClass("hidden");
        break;
    };
  };

  /**
   * Returns an object representing the active filter
   * @method getActiveFilter
   * @return [object] [active filter object]
   */
  function getActiveFilter() {

    var $activeFilter = new Object();

    // Default the object properties for no filter
    $activeFilter.filterType = 'none';
    $activeFilter.filterSelection = 'none';

    if ($('#select-filter').val === 'name') {

      alert('Filter:name');
      $activeFilter.filterType = 'name';
      $activeFilter.filterSelection = $('#select-filter-name').val();
    } else if ($('#select-filter').val === 'difficulty') {
      alert('Filter:difficulty');
      $activeFilter.filterType = 'difficulty';
      $activeFilter.filterSelection = $('#select-filter-difficulty').val();
    }
  };

  /**
   * Returns sort selection
   * @method getSortBy
   * @return value $sortSelected
   */
  function getSortBy() {

    $sortSelected = $('#select-sort').val();
    return $sortSelected;
  };

  function loadData() {

    /*
    declare the component parts of the request
    by interpolation of template literal
     */

    var $filters = getActiveFilter();
    var $filterType = $filters.filterType;
    var $filterSelection = $filters.filterSelection;
    var $sortBy = getSortBy();

    // // the interpolated string
    // //FIXME var $ajaxRoutePath = `/ajax/${$filterType}/${$filterSelection}/`
  };
});

/***/ })

/******/ });
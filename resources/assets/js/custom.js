/**
 *  File:sortFilter.js
 *
 * Author: Steve Brown
 */
$(document).ready(function() {

/**
 * Event handler for [parent] filter dropdown
 * @method showHideFilter
 * @return void
 */
  $('#select-filter').change(function() {

    showHideFilter(($('#select-filter').val()));

  });
  /**
   * Event handler for apply button
   * @method loadData();
   * @return [void]
   */
  $('#btn-filter').click(function(){

    loadData();

  })
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
function getActiveFilter(){

  var $activeFilter = new Object();

  // Default the object properties for no filter
  $activeFilter.filterType = 'none';
  $activeFilter.filterSelection = 'none';

  if (($('#select-filter').val) === 'name'){
    $activeFilter.filterType = 'name';
    $activeFilter.filterSelection = ($('#select-filter-name').val());
  }

  else if (($('#select-filter').val) === 'difficulty'){
    $activeFilter.filterType = 'difficulty';
    $activeFilter.filterSelection = ($('#select-filter-difficulty').val());
  }

  return $activeFilter;

};

/**
 * Returns sort selection
 * @method getSortBy
 * @return value $sortSelected
 */
function getSortBy(){

  $sortSelected = $('#select-sort').val();
  return $sortSelected;

};

function loadData(){

/*
declare the component parts of the request
by interpolation of template literal
 */

var $filters = getActiveFilter();
var $filterType = $activeFilter.filterType;
var $filterSelection = $activeFilter.filterSelection;
var $sortBy =

// the interpolated string
var $ajaxRoutePath = `/ajax/${$filterType}/${$filterSelection}/`


  alert('You will have loaded some data!');
};

});

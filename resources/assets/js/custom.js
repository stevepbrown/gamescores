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

  alert($activeFilter.filterType + $activeFilter.filterSelection);

};

function loadData(){

  alert('You will have loaded some data!');
};

});

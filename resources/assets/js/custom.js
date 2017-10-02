
/**
*  File:sortFilter.js
*
* Author: Steve Brown
*/

$( document ).ready(function() {

  var $requestFilter;
  var $requestSort;
  var $requestStr;


  // Event handlers

  $('#select-filter').change(function () {

    alert('Filter condition change!');

    // Get the value of parent
    var $parentVal;

    // conditional to show hide either difficulty or name dropdown
    $('#select-filter').change(function () {

      // Enable / disbale depndent controls on selected value
      showHideFilter(($('#select-filter').val()));
    }
  }

//Functions


  function showHideFilter($selection){

    switch($selection) {

      // show hide dependent

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

}}



  function loadScores($filterBy,$sortBy){

    // Check the filter value and set filter request parameter accordingly
  


    // Check the sort value and set sort request parameter accordingly


    };

  };
};

$(document).ready(function(){
  // MODAL
  $('.modal').modal();
  // DROPDOWNS
  $(".dropdown-button").dropdown(
    {
      belowOrigin: true
    }
  );
  // TABS
  $('ul.tabs').tabs();
  // COLLAPSIBLE
  $('.collapsible').collapsible();
});
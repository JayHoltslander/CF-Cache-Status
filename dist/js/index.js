$(document).ready(function(){
// MODAL
$(".modal").modal(),
// DROPDOWNS
$(".dropdown-button").dropdown({belowOrigin:!0}),
// TABS
$("ul.tabs").tabs(),
// COLLAPSIBLE
$(".collapsible").collapsible(),
// CUSTOM CLEARABLE INPUT WITH REFRESH
$("#X").click(function(){console.log("reached"),$("#search").val(""),$("#url-test-bar").submit()})});
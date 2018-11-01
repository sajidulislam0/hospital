/**
 *  Document   : theme-color.js
 *  Author     : redstar
 *  Description: Script to handle the theme related methods.
 *
 **/
"use strict";
jQuery(document).ready(function() {
	$( ".datepicker" ).datepicker();
});



function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
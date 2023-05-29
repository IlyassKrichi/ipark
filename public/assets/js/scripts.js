/*!
 * Start Bootstrap - SB Admin v7.0.7 (https://startbootstrap.com/template/sb-admin)
 * Copyright 2013-2023 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
 */
//
// Scripts
//

window.addEventListener("DOMContentLoaded", (event) => {
  // Toggle the side navigation
  const sidebarToggle = document.body.querySelector("#sidebarToggle");
  if (sidebarToggle) {
    // Uncomment Below to persist sidebar toggle between refreshes
    // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
    //     document.body.classList.toggle('sb-sidenav-toggled');
    // }
    sidebarToggle.addEventListener("click", (event) => {
      event.preventDefault();
      document.body.classList.toggle("sb-sidenav-toggled");
      localStorage.setItem(
        "sb|sidebar-toggle",
        document.body.classList.contains("sb-sidenav-toggled")
      );
    });
  }
});

var dateReservation = document.getElementById("date_reservation");
dateReservation.min = new Date().toISOString().split("T")[0];
dateReservation.valueAsDate = new Date();

var input = document.getElementById("adresse");
var autocomplete = new google.maps.places.Autocomplete(input);
autocomplete.setOptions({
  componentRestrictions: {
    country: "MA",
  },
});

autocomplete.addListener("place_changed", function () {
  var place = autocomplete.getPlace();
  // Do something with the place here.
});

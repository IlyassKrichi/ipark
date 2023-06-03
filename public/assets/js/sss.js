$(document).ready(function () {
  var dateReservation = document.getElementById(
    "reservation_step1_date_reservation"
  );
  dateReservation.min = new Date().toISOString().split("T")[0];
  dateReservation.valueAsDate = new Date();

  var input = document.getElementById("reservation_step1_adresse");
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
});

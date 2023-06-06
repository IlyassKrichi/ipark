$(document).ready(function () {
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

  var checkin = document.getElementById("check-in");
  var checkout = document.getElementById("check-out");
  let now = new Date();
  let now1 = new Date(now.getTime() + 60 * 60 * 1000);
  let nowplusone = new Date(now1.getTime() + 60 * 60 * 1000);

  // Format the date and time as an ISO string
  let dateStr1 = now1.toISOString().slice(0, 16);
  let dateStr2 = nowplusone.toISOString().slice(0, 16);

  // Set the default value and min attributes of the input field
  checkin.defaultValue = dateStr1;
  checkout.defaultValue = dateStr2;
  checkin.min = dateStr1;
  checkout.min = dateStr2;
});

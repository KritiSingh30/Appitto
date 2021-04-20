function validateForm() {
    var x = document.forms["myForm"]["gnumber"].value;
    var y = document.forms["myForm"]["reservationtime"].value;
    if (x == "" || y ==" ") {
      alert("Name must be filled out");
      return false;
    }
  }


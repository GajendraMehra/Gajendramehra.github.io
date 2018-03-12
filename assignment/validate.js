function validate() {

  var x = document.forms["reg_form"]["Student_name"].value;

  if (x == null || x == "") {
    alert("Name must be filled out");
//document.getElementById('Student_name').scrollIntoView();
document.getElementById('Student_name').focus();
    return false;
  }



  var a = document.forms["reg_form"]["Department"].value;
  if (a == null || a == "") {
    alert("Department name must be filled out");
    document.getElementById('Department').focus();

        return false;
  }

  var b = document.forms["reg_form"]["Semester"].value;

  if (b == null || b == "") {
    alert("Semester name must be filled out");
    document.getElementById('Semester').focus();

    return false;
  }
  var y = document.forms["reg_form"]["email"].value;

  if (y == null || y == "") {
    alert("Email name must be filled out");
    document.getElementById('Email').focus();

    return false;
  }

  var c = document.forms["reg_form"]["date"].value;

  if (c == null || c == "") {
    alert("Date must be filled out");
    document.getElementById('Date').focus();

    return false;
  }
}

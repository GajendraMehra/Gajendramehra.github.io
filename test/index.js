function validate() {
var x= document.forms["iplform"]["player_name"].value;
if (x==null||x=="")
{
  alert("Name is Not Filled");
  return false;

}
var x= document.forms["iplform"]["player_email"].value;
if (x==null||x=="")
{
  alert("Email is Not Filled")
  return false;
}
var x= document.forms["iplform"]["player_phone"].value;
if (x==null||x=="")
{
  alert("Phone No. is not entered")
  return false;
}
var x= document.forms["iplform"]["player_dob"].value;
if (x==null||x=="")
{
  alert("Select The Dob")
  return false;
}
var x= document.forms["iplform"]["player_address"].value;
if (x==null||x=="")
{
  alert("Enter The Address")
  return false;
}

}

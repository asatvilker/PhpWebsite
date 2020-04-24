function clearcontent() {
    var r = confirm("Are you sure you would like to clear everything?");
    if (r == true) {
      document.getElementById("maintext").value="";
      document.getElementById("title").value="";
    }
    else {

    }
}

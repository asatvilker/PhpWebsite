function clearcontent() {
    var r = confirm("Are you sure you would like to clear everything?");
    if (r == true) {
      document.getElementById("maintext").value="";
      document.getElementById("title").value="";
    }
    else {

    }
}
document.getElementById('submit').addEventListener('click', function(event){
  let title = document.getElementById("title");
  let main = document.getElementById("maintext");
  if (title.value == "" & main.value == "")
  {
    event.preventDefault();
    title.style.border='0.2em red solid';
    main.style.border='0.2em red solid';
  }
  else if (main.value == "")
  {
    event.preventDefault();
    main.style.border='0.2em red solid';
    title.style.border='none';
  }
  else if (title.value == "")
  {
    event.preventDefault();
    main.style.border='none';
    title.style.border='0.2em red solid';
  }
});
document.getElementById('preview').addEventListener('click', function(event){
  let title = document.getElementById("title");
  let main = document.getElementById("maintext");
  if (title.value == "" & main.value == "")
  {
    event.preventDefault();
    title.style.border='0.2em red solid';
    main.style.border='0.2em red solid';
  }
  else if (main.value == "")
  {
    event.preventDefault();
    main.style.border='0.2em red solid';
    title.style.border='none';
  }
  else if (title.value == "")
  {
    event.preventDefault();
    main.style.border='none';
    title.style.border='0.2em red solid';
  }
});

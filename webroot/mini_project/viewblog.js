var elements= document.getElementsByClassName('hover');

for (var i = 0; i < elements.length; i++) {
  let x = elements[i];
    elements[i].addEventListener('mouseover', function(event){
      x.style.backgroundColor='#3385ff';
    });
    elements[i].addEventListener('mouseout', function(event){

      x.style.backgroundColor='#F5F5F5';

    });
    elements[i].addEventListener('click', function(event){
      if(x.id == 'disabled')
      {
        var y = x.getElementsByTagName('p');
        y[1].style.height="30em";
        y[1].style.overflow="visible";
        y[1].backgroundColor="red";
        x.setAttribute("id","active");
        

      }
      else if (x.id == 'active') {
        x.setAttribute("id","disabled");
        var y = x.getElementsByTagName('p');
        y[1].style.height="3.5em";
        y[1].style.overflow="hidden";
      }
      else {
        x.setAttribute("id","active");
      }

    });
}

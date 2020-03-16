function print()
{
  var A = new Array();
  for(i=0; i<5; i++)
  {
    let num = window.prompt("please enter a number");
    A[i]=num;
  }
  window.alert(Math.max(...A));
}
print();

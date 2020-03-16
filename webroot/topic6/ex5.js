function createTable()
{
  document.write("<thead>");
  document.write("<tr>");
  document.write("<th>X</th>");
  for(i=1; i<16; i++)
  {
    document.write("<th>"+i+"</th>");
  }
  document.write("</tr>");
  document.write("</thead>");
  document.write("<tbody>");
  for(i=1; i<16; i++)
  {
    document.write("<tr>");
    document.write("<td class="+"first"+">"+i+"</td>");
    for(j=1;j<16;j++)
    {

      let product=i*j;

      document.write("<td>"+product+"</td>");

    }
    document.write("</tr>");
  }
  document.write("</tbody>");

}

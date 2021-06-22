var int=document.getElementById('numb');
var integer=0;

function counter()
{
  integer+=1;
  int.innerHTML="integer";
}
function counter1()
{
  integer=0;
  int.innerHTML=integer;
}

function disable()
{
  $(document).ready(function(){
  $("#letters :submit").prop("disabled", true);
  });
}

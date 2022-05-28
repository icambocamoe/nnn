//get button reference
window.onload = function () {
var myBtn = document.getElementById('btn');

var myBtnm = document.getElementById('btnm');

var tmyBtn = document.getElementById('tbtn');

var tmyBtnm = document.getElementById('tbtnm');

/////////////////////////////////////////////////

myBtn.addEventListener('click', addField);

myBtnm.addEventListener('click', removeField);

tmyBtn.addEventListener('click', addp);

tmyBtnm.addEventListener('click', removep);

/////////////////////////////////////////////////

var form = document.getElementById("ope");

var tform = document.getElementById("oto");

var i = 0;
 var j = 0;
function addField() {
    var ii = i.toString();
  var input = document.createElement('input');
  form.appendChild(input);
  input.setAttribute("id","op"+i);
  i = i + 1;
}
function removeField() {
  var jj = j.toString();
  var op = document.getElementById('op'+jj);
  op.parentNode.removeChild(op);
  j=j+1;
}

///////////////////////////////////////////////////
var li=0;//contador de elementos agregados
var lj=0;//contador elementos eliminados
function addp() {
 var lii=li.toString();
 var idl = ["ln", "la", "lt"];
 var idi = ["in", "ia", "it"];
  var text = ["nombre", "apellidos", "tipo"];
    for(var i = 0; i < text.length; i += 1) {
    var input = document.createElement('input');
    var label = document.createElement('label');
    
    tform.appendChild(label);
    tform.appendChild(input);
    
    label.setAttribute("for",text[i]);
    label.innerHTML = text[i];
    label.setAttribute("id",idl[i]+lii);
    input.setAttribute("id",idi[i]+lii);
}
 li = li + 1;
}
function removep() {
   var ljj = lj.toString();
 var ln= document.getElementById('ln'+ljj);
  var la = document.getElementById('la'+ljj);
  var lt= document.getElementById('lt'+ljj);
  ln.parentNode.removeChild(ln);
    la.parentNode.removeChild(la);
    lt.parentNode.removeChild(lt);
    
  var ni= document.getElementById('in'+ljj);
  var  ia = document.getElementById('ia'+ljj);
   var it= document.getElementById('it'+ljj);
     ni.parentNode.removeChild(ni);
    ia.parentNode.removeChild(ia);
    it.parentNode.removeChild(it);
  lj = lj +1;

}
}
//add click function

//it's more efficient to get the form reference 
//outside of the function, rather than getting 
//it each time



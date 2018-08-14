var openClose = 0;
var body = document.getElementById("body").offsetWidth;

function Nav(openClose) {
    if(openClose === 1){
    document.getElementById("menu").style.width = "75%";
    document.getElementById("main").style.opacity = "0.5";
    }else{
      document.getElementById("menu").style.width = "0";
    }
}
function openNav(){
  
  var tam = document.getElementById("celular");
  if(tam.style.width >= "50px"){
      tam.style.width = "0";

      document.getElementById("side").style.marginLeft = 0 ;
  }else{
      tam.style.width = "75%";
      
      document.getElementById("side").style.marginLeft = "38%";
  }
}


document.getElementsByClassName('clickMenu')[0].click();
document.getElementsByClassName('clickMenu')[1].click();
document.getElementsByClassName('clickMenu')[2].click();
function subMenu(num){
  tag = document.getElementsByClassName("menuSuspenso")[num];
  if (body < 1000) {
      if (tag.style.display != "none") {
        tag.style.display = "none"
      }else{;
        tag.style.display = "block";
      }
  }else{
    if (tag.style.display != "none") {
        tag.style.display = "none"
      }else{
        tag.style.display = "block";
      }
  }
}
// alert((new Date()).getDay());
getDay((new Date()).getDay());
  
function getDay(dia){
// var dias = ;

// escolherDia++;

// var escolherDia = dia;
// escolherDia++;
// alert(escolherDia);

var diaSemana = new Array(7);
diaSemana[0] = "Domingo";
diaSemana[1] = "Segunda-Feira";
diaSemana[2] = "Terça-Feira";
diaSemana[3] = "Quarta-Feira";
diaSemana[4] = "Quinta-Feira";
diaSemana[5] = "Sexta-Feira";
diaSemana[6] =  "Sábado";
if (dia>=7) {
  dia = 0;
}
if (dia<0) {
  dia = 6;
}
var titulo = document.getElementsByClassName('diaTitulo');
var direita = document.getElementsByClassName('direita');
var esquerda = document.getElementsByClassName('esquerda');
titulo[0].innerHTML = diaSemana[dia];
direita[0].setAttribute("id", dia);
esquerda[0].setAttribute("id", dia);


var diasProgram = document.getElementsByClassName('semanaDia');
for (var i = 0; i < diasProgram.length; i++) {
  diasProgram[i].style.display = "none"; 
}

var diaAtual = document.getElementsByClassName(dia);

for (var i = 0; i < diaAtual.length; i++) {
  diaAtual[i].style.display = "block";
}

}
// function escolherDia(){

// }

// programacaoDia();

// function programacaoDia(){
//   var dia = document.getElementsByClassName('2');
  
//   for(var i = 0; i <= dia.length - 1; i++){
//     document.getElementsByClassName('2')[i].style.display = 'none';
//   }
// }
// SLIDE-SHOW-SLIDE-SHOW-SLIDE-SHOW

var slideIndex = 0;
showSlides();

function showSlides(){
  var i = 0;
  var slides = document.getElementsByClassName("meuSlides");

  for(i=0; i < slides.length; i++){
    slides[i].style.display = "none";
  }

  slideIndex++;
  if (slideIndex > slides.length){
    slideIndex = 1;
  }
  slides[slideIndex-1].style.display = "block";
  
  setTimeout(showSlides, 3000);

}

//SESSOES SESSOES SESSOES SESSOES

function sessoes(num){
  var sessoes = document.getElementsByClassName("sessao");
  for (var i = 0; i < sessoes.length; i++) {
    document.getElementsByClassName("sessao")[i].style.display = "none";
  }
 
  console.log(sessoes.length);
  if (num != 0) {
  document.getElementsByClassName("sessao")[num-1].style.display = "block";  
  }
  openNav();
  fadeHome(num);
   
  setTimeout(function (){document.getElementsByClassName("meuSlides")[0].style.display = "none"}, 500);
  // document.getElementsByClassName("meuSlides")[0].style.display = "none";
}


var noticias;
var mostrar;
var topo;
var margem;


function fadeHome(num){
  if (num == 0) {
    mostrar = "block";
    noticias = "46em";
    topo = "30em";
    margem = "5%"
  }else{
    mostrar = "none";
    noticias = "0";
    topo = "0";
    margem = "0";
  }
  document.getElementsByClassName("inicio")[0].style.height = topo;
  document.getElementsByClassName("inicio")[0].style.paddingBottom = margem;
  for(var i = 0; i<3; i++){
      var elemento = document.getElementsByClassName("meuSlides")[i];
      document.getElementsByClassName("meuSlides")[i].style.height = noticias;
      elemento.children[1].style.display = mostrar;
    }
}

// PROGRAMACAO-PROGRAMACAO-PROGRAMACAO-PROGRAMACAO-PROGRAMACAO-PROGRAMACAO-

function programacao(id){
  var tamanho;

  var lista = document.getElementById("lista");
  var list = document.getElementById(id);
  if (lista.offsetWidth > 900) {
    tamanho = "500px";
  }else{
    tamanho = "200px"
  }
  console.log(tamanho);
  if(list.children[2].offsetHeight == 0){
  
  for(var i = 0; i < lista.children.length; i++){
    lista.children[i].children[2].style.height = 0;
    lista.children[i].children[1].style.transform = "rotate(45deg)"
  }
  lista.children[id].children[2].style.height = tamanho;
  lista.children[id].children[1].style.transform = "rotate(-135deg)"
  }else{
    lista.children[id].children[2].style.height = 0;
    lista.children[id].children[1].style.transform = "rotate(45deg)"
  }
  document.getElementById("teste").style.height = 0;
  alert(lista.children[0].children[0]);
}




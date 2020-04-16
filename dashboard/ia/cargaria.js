const net = new brain.recurrent.LSTM();

console.log("hola")
var json

fetch('http://proyectosinformaticatnl.ceti.mx/pestenegra/dashboard/ia/data.txt')
  .then(response => response.text())
  .then((data) => {
    console.log(data)
    json = JSON.parse(data)
    console.log(json);
    cargarai();
  })
  
function cargarai(){
    console.log(json);
    net.fromJSON(json);
    console.log("Entusiasta");
    console.log(net.run("Entusiasta"));
} 
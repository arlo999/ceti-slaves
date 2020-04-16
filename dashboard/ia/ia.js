var config = {
  iterations: 20000, // the maximum times to iterate the training data --> number greater than 0
  errorThresh: 0.005, // the acceptable error percentage from training data --> number between 0 and 1
  log: true, // true to use console.log, when a function is supplied it is used --> Either true or a function
  logPeriod: 50, // iterations between logging out --> number greater than 0
  learningRate: .4, // scales with delta to effect training rate --> number between 0 and 1
  momentum: 0.1, // scales with next layer's change value --> number between 0 and 1
  callback: null, // a periodic call back that can be triggered while training --> null or function
  callbackPeriod: 10, // the number of iterations through the training data between callback calls --> number greater than 0
  timeout: Infinity, // the max number of milliseconds to train for --> number greater than 0
}

const net = new brain.recurrent.LSTM();

var dataset
var indata = []

function crear(data){
  dataset = JSON.parse(data)
}

function tomardatos(){
  fetch('http://proyectosinformaticatnl.ceti.mx/pestenegra/dashboard/ia/palabras.txt')
    .then(response => response.text())
    .then((data) => {
      console.log(data)
      dataset = JSON.parse(data)
      $.when(console.log(dataset)).then(creardata());
    })
}

function creardata(){

  for(var i in dataset){
    console.log(dataset[i])
    indata.push({input: dataset[i], output:  String((1/Object.keys(dataset).length)*(i+1)) });
  
  }
  console.log(indata);
  entrenar();
}

function entrenar(){
  net.train(indata,config);
  guardarentrenamiento();
}

function guardarentrenamiento(){
  var json = net.toJSON();
  
  console.log(json);
  
        var data  = "text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(json));
        var a       = document.createElement('a');
        a.href      = 'data:' + data;
        a.download  = 'data.txt';
        a.innerHTML = 'download .txt file of json';
        document.body.appendChild(a);
        a.click(); 

        cargarai();
}

function cargarai(){
  var joto
  
  fetch('http://proyectosinformaticatnl.ceti.mx/pestenegra/dashboard/ia/data.txt')
    .then(response => response.text())
    .then((data) => {
      console.log(data)
      joto = JSON.parse(data)
      console.log(joto);
    })
  
  
  console.log(joto);
  net.fromJSON(joto);
  console.log("institucional");
  console.log(net.run("institucional"));
}

tomardatos();
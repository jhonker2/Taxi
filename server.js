var app = require('http').createServer(handler),
  io    = require('socket.io').listen(app),
  fs    = require('fs'),
  mysql = require('mysql'),
 // sql   = require('mssql'),
  connectionsArray = [],
  connection = mysql.createConnection({
    host: '127.0.0.1',
    user: 'root',
    password: '',
    database: 'taxi',
    port: 3306
  }),

  //connection3 = sql.connect('mssql://Soporte:pinargote1986@192.168.1.3/d-func'),

  POLLING_INTERVAL = 500,
  pollingTimer;
  var estado="online";
  var cedula="";
  var cedula_lectura;
  var CLIENTES=[];//{id,socket_id}
  var SOCKET_MONITOR_ID=null;

connection.connect(function(err) {
  // connected! (unless `err` is set)
  if (err) {
    console.log(err);
  }
});

app.listen(8010);

// on server started we can load our client.html page
function handler(req, res) {
  fs.readFile(__dirname + '/resources/views/Carreras/mapa.blade.php', function(err, data) {
    if (err) {
      console.log(err);
      res.writeHead(500);
      return res.end('Error loading client.php');
    }
    res.writeHead(200);
    res.end(data);
  });
}


var pollingLoop = function() {
  var date = new Date();
  var mes=date.getMonth()+1;
  var dia=date.getDate();

  if(mes<10){    mes="0"+mes;  }
  if(dia<10){    dia="0"+dia;  }

  var f= date.getFullYear()+"-"+mes+"-"+dia;

  //console.log(f);

  // Doing the database query
  //var query = connection.query('SELECT pedidos.fecha,pedidos.id,cliente.nombres,pedidos.estado FROM pedidos,cliente WHERE (pedidos.estado = 0 or pedidos.estado = 1) and pedidos.aceptado = 0 and pedidos.user_cli = cliente.user and pedidos.id_sucur='+ruc_),
  //" dispo_movimitos dm, dispositivos d, usuarios u, dispositivo_usuarios du where d.id = dm.id_dispositivo and u.id = du.usuario_id and du.estado='online' and d.id = du.dispositivo_id"
  if(cedula==""){
    //var query = connection.query('select d.id_movil, du.estado, dm.latitud, dm.longitud,dm.hora, u.nombre, d.numero from dispo_movimitos dm, dispositivos d, usuario_systems u, dispositivo_usuarios du where d.id = dm.id_dispositivo and u.cedula = du.usuario_id and u.col !="LECTOR" and du.estado="online" and d.id = du.dispositivo_id and dm.fecha ="'+f+'" and dm.hora = (select max(dmm.hora) from dispo_movimitos dmm where dmm.id_dispositivo=d.id and dmm.fecha="'+f+'")'),
    var query = connection.query('select * from choferes, personas where personas.id=choferes.id_persona'),
    cata = []; // this array will contain the result of our db query
  }else{
    //var query = connection.query('select d.id_movil, du.estado, dm.latitud, dm.longitud,dm.hora, u.nombre, d.numero from dispo_movimitos dm, dispositivos d, usuario_systems u, dispositivo_usuarios du where d.id = dm.id_dispositivo and u.cedula = du.usuario_id and u.col !="LECTOR" and du.estado="online" and d.id = du.dispositivo_id and dm.fecha ="'+f+'" and  id_dispositivo = (SELECT dispositivo_id FROM dispositivo_usuarios d where usuario_id="'+cedula+'" and estado ="online")'),
    var query = connection.query('SELECT * FROM choferes where cedula= "'+cedula+'"'),

    cata = []; // this array will contain the result of our db query
  }
  // setting the query listeners
  query
    .on('error', function(err) {
      // Handle error, and 'end' event will be emitted after this as well
      console.log(err);
      updateSockets(err);
    })
    .on('result', function(user) {
      // it fills our array looping on each user row inside the db
      cata.push(user);
    })
    .on('end', function() {
      // loop on itself only if there are sockets still connected
      if (connectionsArray.length) {

        pollingTimer = setTimeout(pollingLoop, POLLING_INTERVAL);

        updateSockets({          cata: cata        });

      } else {

        console.log('The server timer was stopped because there are no more socket connections on the app')

      }
    });
};


io.sockets.on('connection', function(socket) {
  
    socket.on('recibirDatos', function(data){
      ruc_ = data;
    });
    socket.on('DatosEmpleados',function(dat){
      if(dat=="todos"){
        cedula="";
      }else{
        cedula = dat;
      }
    });
    socket.on("loginCliente",function(data,response){
      var index=buscar(data);
        if(index===-1){//NO ENCONTRADO
          CLIENTES.push({id:data.id});
          var info={estado:1,id:data.id};
          response(info);
        }else{
          var info={estado:0,id:null};         
          response(info);
        }
    }); 
    socket.on("posicionClientes", function(data) {
      socket.emit('monitorPrincipal',data);
    }); 

  console.log('Number of connections:' + connectionsArray.length);
  // starting the loop only if at least there is one user connected
  if (!connectionsArray.length) {
      pollingLoop();
      /*pollingLectura();
      obtenerUsuarios();
      obtenerTramites();*/
  }

  socket.on('disconnect', function() {
    var socketIndex = connectionsArray.indexOf(socket);
    console.log('socketID = %s got disconnected', socketIndex);
    if (~socketIndex) {
      connectionsArray.splice(socketIndex, 1);
    }
  });

  console.log('A new socket is connected!');
  connectionsArray.push(socket);

});

var updateSockets = function(data) {
  // adding the time of the last update
  data.time = new Date();
  console.log('Pushing new data to the clients connected ( connections amount = %s ) - %s', connectionsArray.length , data.time);
  // sending new data to all the sockets connected
  connectionsArray.forEach(function(tmpSocket) {
    tmpSocket.volatile.emit('notification', data);
  });
};

function buscar(data){
    var index=-1;   
    var n=CLIENTES.length;
    for(var i=0;i<n;i++){
      if(CLIENTES[i].id===data.id){
        index=i;
        break;
      }
    }     
    return index;     
} 
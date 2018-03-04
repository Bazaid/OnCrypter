var fs = require('fs');
var exec = require('child_process').exec;
var BinaryServer = require('binaryjs').BinaryServer;
var bs = BinaryServer({port:  (process.env.PORT || 8080)});
var mysql      = require('mysql');
var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : '',
  database : 'oncrypt'
});

connection.connect();

//try
try {

bs.on('connection', function(client){
  console.log('n');
  var crypto = require("crypto")
  var shasum = crypto.createHash('md5');


  client.on('stream', function(stream, meta){
    if (meta.c == 'file'){

      connection.query('SELECT * FROM `users` WHERE ?',{hwid:meta.user_hwid}, function(err, rows, fields) {
      if (err) throw err;
      var used = rows[0]['used'];
      var total = rows[0]['total'];
        if (used >= total)
        {
          stream.write({c:"Error you finished all your allowed Crypt.",rx: 0 / 0});
        }else{
          var fname = gstring() + meta.name;
          var filepath = __dirname+ '/application/files/' + fname ;
          var file = fs.createWriteStream(filepath);
          stream.pipe(file);
          stream.on('data', function(data){
            stream.write({c:'Uploading ..',rx: data.length / meta.size});
          });


           stream.on('end', function () {
             connection.query('SELECT * FROM `crypts` WHERE ?',{cryptname:meta.stub}, function(err, rows, fields) {
             if (err) throw err;

              var proc = exec('mono application/stubs/'+rows[0]['cryptfile'] + ' ' + filepath);
                proc.stdout.setEncoding('utf8')
                proc.stdout.on('data', function (sdata) {
                  stream.write({c:sdata + '..'});
                });

                proc.stdout.on('end', function () {
                  stream.write({c:'Finishing..'});
                  var s = fs.ReadStream(filepath);
                  s.on('data', function(d) { shasum.update(d); });
                  s.on('end', function() {
                  var d = shasum.digest('hex');
                  var dt = new Date();
                  var insertd = {user_id:meta.user_id,name:fname,type:rows[0]['cryptType'],date:dt.getMySQL(),hash:d};
                  var query = connection.query('INSERT INTO files SET ?', insertd, function(err, result) {
                   if (err) throw err;
                   console.log('insert');
                   stream.write({c:'Done.',hash:d,name:fname});

                   connection.query('UPDATE `users` SET `used` = '+(used+1)+' WHERE ?', {id:meta.user_id});
                   });

                 });


              });
             });
          });
          //
        }
      });
    }else if(meta.c == 'deletefile'){

      var insertd = {name:meta.filename};
    var query = connection.query('DELETE FROM files WHERE ?', insertd, function(err, result) {
               if (err) throw err;
               console.log('deleted');

               });

    }

});
});



}
catch(e)
{
console.log(e);
}

function gstring()
{
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for( var i=0; i < 5; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}
(function() {
	Date.prototype.getMySQL = getMySQLDateTime;
	function getMySQLDateTime() {
		var year, month, day, hours, minutes, seconds;
		year = String(this.getFullYear());
		month = String(this.getMonth() + 1);
		if (month.length == 1) {
			month = "0" + month;
		}
		day = String(this.getDate());
		if (day.length == 1) {
			day = "0" + day;
		}
		hours = String(this.getHours());
		if (hours.length == 1) {
			hours = "0" + hours;
		}
		minutes = String(this.getMinutes());
		if (minutes.length == 1) {
			minutes = "0" + minutes;
		}
		seconds = String(this.getSeconds());
		if (seconds.length == 1) {
			seconds = "0" + seconds;
		}
		// should return something like: 2011-06-16 13:36:00
		return year + "-" + month + "-" + day + ' ' + hours + ':' + minutes + ':' + seconds;
	}
})();
console.log('Your websocket is running on ws://localhost:' +  (process.env.PORT || 8080));

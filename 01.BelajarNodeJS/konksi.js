let mysql = require('mysql');

// buat koneksi database
const conn = mysql.createConnection({
    host:'localhost',
    user:'root',
    password:'',
    database:'dbrest'
});

conn.connect((err)=>{
    if(err) throw err;
    console.log('Mysql berhasil terkoneksi');
});

module.exports = conn;
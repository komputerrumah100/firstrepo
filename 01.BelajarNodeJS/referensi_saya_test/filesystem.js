const path = require('path');
const fs = require('fs');
const os = require('os');
const url = require('url');




fs.mkdir(path.join(__dirname,'MyDir'),{},err=>{
    if(err){
        console.log('Folder Sudah Ada');
    }else{
        console.log('Folder berhasil dibuat');
    }
})


fs.writeFile(path.join(__dirname,'MyDir','file.txt'),'Isi dari file','utf8',err=>{
    if(err)throw err;
    console.log('Berhasil Membuat File');
})
fs.appendFile(path.join(__dirname,'MyDir','file.txt'),' Teks Baru Dari Append File','utf8',err=>{
    if(err)throw err;
    console.log('Berhasil Menambahkan Data');
})
fs.readFile(path.join(__dirname,'MyDir','file.txt'),'utf8',(err,data)=>{
    if(err)throw err;
    console.log(data);
    module.exports = data;
})


console.log(os.hostname())
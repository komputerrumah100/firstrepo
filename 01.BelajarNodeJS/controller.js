'use strict';

let response = require('./res');
let connection = require('./konksi');

exports.index = function(req,res){
    response.ok("Aplikasi berjalan",res);
};


class People {
    constructor(id,name,age,special){
        this.id = id;
        this.name = name;
        this.age = age;
        this.special = special;
    }
}

class UI {
    
}
        function getData(){
            let hasil = [];
            fetch('database.json')
            .then(res=>res.json())
            .then(data=>{
                hasil = data.db;
                hasil.forEach(e => {
                    console.log(e);
                });
            })
            .catch(err=>err);
            return hasil;
        }


let data = getData();
console.log(data.length);





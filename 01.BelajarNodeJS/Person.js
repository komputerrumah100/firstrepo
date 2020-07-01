class Person{
    constructor(nama,umur,pekerjaan){
        this.nama=nama;
        this.umur=umur;
        this.pekerjaan=pekerjaan;
    }

    getdata() {
        return `Nama : ${this.nama}|Umur : ${this.umur} Tahun|Pekerjaan : ${this.pekerjaan}` ;
    }
}


module.exports = Person;









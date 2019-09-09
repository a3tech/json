// let mahasiswa = {
//     nama : "Annas",
//     nim : "16.12.9118"
// }
// console.log(JSON.stringify(mahasiswa));

// let x = new XMLHttpRequest();
// x.onreadystatechange = function(){
//     if(x.readyState == 4 && x.status == 200){
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa);
//     }
// }
// x.open('GET','coba.json', true);
// x.send();

$.getJSON('coba.json', function(data){
    console.log(data);
})
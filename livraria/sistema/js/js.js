let livro = document.querySelectorAll('.livro_cod');
let p = document.querySelector(".livro");
let array = [];
let filter;
let maior =0;
let n ;
livro.forEach(eve => {
    console.log(Number(eve.value));
    array.push(Number(eve.value));
});
for(let i = 0; i <= array.length; i++){
    //console.log(array.filter( x => x === array[i]).length);
    filter = array.filter( x => x === array[i]).length;
    if( filter > maior ){
        maior = filter;
        n = array[i];
    }
}



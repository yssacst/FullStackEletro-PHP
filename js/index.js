function ampliarImg(x){
    x.setAttribute('width','200px');
    x.style.boxShadow= '2px 2px 10px #644848';
    x.style.borderRadius= '10px';
}
function diminuirImg(x){
    x.setAttribute('width','100px');
    x.style.boxShadow= 'none';
    x.style.borderRadius= 'none';
}

function exibir(categoria){
    let elementos = document.getElementsByClassName('boxProduto');


    for(var i = 0; i < elementos.length; i++){
        if(categoria == 'todos'){
            elementos[i].style = "display:inline-block";
        } else if(categoria == elementos[i].id){
            elementos[i].style = "display:inline-block";
        }else{
            elementos[i].style = "display:none";
        }
    }
}
// document.getElementById('id').addEventListener('mouseover', function(event){ console.log(event.path)}

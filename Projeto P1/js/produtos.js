let produtos='{"produtos":['+
'"{"id":"1","nome":"","valor":"","desc":"",'+
'"{"id":"2","nome":"","valor":"","desc":"",'+
'"{"id":"3","nome":"","valor":"","desc":"",'+
'"{"id":"4","nome":"","valor":"","desc":"",'+
']}'

let p_obj=JSON.parse(produtos)

function carregarProd_nome(cod){
    return p_obj.produtos[cod].nome
}

function carregarProd_valor(cod){
    p_obj.produtos[cod].valor
}

function carregarProd_desc(cod){
    p_obj.produtos[cod].desc
}


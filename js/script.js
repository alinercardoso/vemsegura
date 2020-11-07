function valida_campos(){
    let nome = document.getElementById('nome').value;
    let cpf = document.getElementById('cpf').value;
    let endereco = document.getElementById('endereco').value;
    let telefone = document.getElementById('telefone').value;
    let email = document.getElementById('email').value;
    let senha = document.getElementById('senha').value;
    console.log(nome,cpf,endereco,telefone,email,senha);
    
    if(nome.length > 0 && cpf.length > 0 && endereco.length > 0 && telefone.length > 0 && email.length > 0 && senha.length > 0){
        document.getElementById("cadastrar_usuario").style.visibility = "initial";

    }else {
        document.getElementById("cadastrar_usuario").style.visibility= "hidden";
    }

}

function validar(){
    let nome = document.getElementById('nome').value;
    let vitima = document.getElementById('vitima').value;
    let localizacao = document.getElementById('localizacao').value;
    let vagao = document.getElementById('vagao').value;
    let descricao = document.getElementById('descricao').value;
    let telefone = document.getElementById('telefone').value;    
    console.log(nome,vitima,localizacao,vagao,descricao,telefone);
    
    if(nome.length > 0 && vitima.length > 0 && localizacao.length > 0 && vagao.length > 0 && descricao.length > 0 && telefone.length > 0){
        document.getElementById("enviar_denuncia").style.visibility = "initial";

    }else {
        document.getElementById("enviar_denuncia").style.visibility= "hidden";
    }
    
}
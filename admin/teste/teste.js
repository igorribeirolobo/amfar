function excluir(id, acao){
    resposta = confirm("Deseja realmente excluir esse aluno?");
    if (resposta){
        $.ajax({
            type: "POST",
            data: {
                id: id,
                acao: acao
            },
            url: "sql/excluir.php",
            success: function(data) {
                if(data == 1){
                    alert("Excluido com Sucesso!");
                }else{
                    alert("Houve algum erro ao excluir!");
                }
            },
            error: function(){
                alert(error);
            }
        });
    }
}

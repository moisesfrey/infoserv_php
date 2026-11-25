$(document).ready(function (){
const urlbase = "http://localhost/infoserv_php/";    
const urlistarPessoas = urlBase + "pessoas";



    $(".cadastrarpessoa").on("click", function (){
       $("#TituloModal").text("cadastrar pessoa");
    });

      $(".#TabelaPessoas").on("click", function (){
 
        var id = $(this).val();
 
        alert ("id: " + id);
    });

    $("#tabelapessoas").on ("click", ".btnExcluir", function () {
        var id = $(this).val();

        $(this).closest("tr").remove();
    });



});


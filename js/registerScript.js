$(document).ready(function(){
    $("#submitBtn").click(function(event){
        event.preventDefault();

        if($("#passField1").val() !== "" || $("#passField2").val() !== "" ){
            if($("#passField1").val() == $("#passField2").val()){

                var entryName = $("#txtNameField").val().toUpperCase().trim();
                var entryPassword = $("#passField1").val();
                
                $.ajax({
                    url: './../controller/Controller.php',
                    method: "POST",
                    data: {name: entryName, password:  entryPassword, type: 'register'}
                }).done(function(result){
                    console.log(result);
                    if(result == "data received, user registered successfully"){
                        $("#serverAlert").text("usuário cadastrado com sucesso");
                    }
                })

            } else {
                $('#serverAlert').text("as senhas precisam ser iguais");
                console.log("as senhas precisam ser iguais");
            }
        } else {
            $("#serverAlert").text("preencha os campos corretamente");
            console.log("preencha corretamente os campos");
        }
    })


    $("#returnBtn").click(function(event){
        event.preventDefault();
        console.log("ok");
        window.location.replace("./../index.php");
    })


})
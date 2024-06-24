$(document).ready(function(){
    $("#submitBtn").click(function(event){
        event.preventDefault();

        var entryName= $("#txtNameField").val().toUpperCase().trim();
        var entryPassword= $("#txtPassField").val();

        $.ajax({
            url: './controller/Controller.php',
            method: "POST",
            data: {name: entryName, password: entryPassword, type: 'verify'}
        }).done(function(result){
            console.log(result);
            if(result == "data received, user valid"){
                console.log("ok");
                window.location.assign("./view/main.php");
            }
            if(result == "error: missing data"){
                $("#serverAlert").text("preencha os campos corretamente");
            }
            if(result == "data received, user invalid"){
                $("#serverAlert").text("usuário ou senha incorretos");
            }
        })
    });

    $("#registerBtn").click(function(event){
        event.preventDefault();

        console.log("ok");
        window.location.replace('./view/register.php');
    });

    
})
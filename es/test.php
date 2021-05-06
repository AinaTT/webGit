<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preload" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" as="style" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
</head>

<body>


    <!-- Modal -->

  <div class="modal fade" id="modales" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"><img src="https://www.topciment.com/imagenes/flags/united-kingdom.png" alt="Topciment english web" Title="Topciment english web"> <p>Welcome to Topciment!</p><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span> </button> </div>
                <div class="modal-body"> <p>Would you like to browse our website in English?</p>
            <a href="https://topciment.com/en/" class="btn btn-primary leermass continuar ">continue</a>
            <a href="https://www.topciment.com/en/choose-country-region" class="btn btn-primary leermass cambiar ">Change country</a>
            </div>
            </div>
        </div>
    </div> 


    <p>Idioma actual detectado: <span id="idioma"> </span> </p>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script>
        const getLanguage = () => navigator.userLanguage || (navigator.languages && navigator.languages.length &&
                navigator.languages[0]) || navigator.language || navigator.browserLanguage || navigator
            .systemLanguage || 'en';

  $('#modales').modal('toggle');

        var idiomaUsuario = getLanguage();
        var idiomaCookie = Cookies.get("idioma");

        console.log("idioma usuario: " + idiomaUsuario + "idioma guardada en Cookie:" + idiomaCookie);

        if (Cookies.get("idioma") != getLanguage()) {
            switch (getLanguage()) {
                case "es-ES":
                    console.log("Modal en español");
                    $('body').html(
                        '<div class="modal fade" id="modales" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div> <div class="modal-body"> Desea navegar por nuestra página web en español? </div> <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Continuar</button> <a href type="button" class="btn btn-primary">Cambiar idioma</a> </div> </div> </div> </div>'
                        );
                    $('#modales').modal('toggle');
                    Cookies.set("idioma", "es-ES", {
                        expires: 7
                    });
                    break;
                case "en-GB":
                    console.log("Modal en inglés");
                    break;
            }
        }


        $("#idioma").html(getLanguage());

       

        //get 
        console.log("cookie: " + Cookies.get("idioma"));


        //Cookies.remove("idioma");
    </script>


 <style>
 .modal-header{
    padding: 5px 10px; 
 }
 </style>


</body>

</html>
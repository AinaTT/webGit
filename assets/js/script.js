    $(window).on('load', function() {
   /* Geolocalización */
            const getLanguage = () => navigator.userLanguage || (navigator.languages && navigator.languages.length &&
                navigator.languages[0]) || navigator.language || navigator.browserLanguage || navigator
            .systemLanguage || 'en';

       // $('#modales').modal('toggle');

        var idiomaUsuario = getLanguage();
        var idiomaCookie = Cookies.get("idioma");

        console.log("idioma usuario: " + idiomaUsuario + "idioma guardada en Cookie:" + idiomaCookie);

        if (Cookies.get("idioma") != getLanguage()) {
            switch (getLanguage()) {
                case "es-ES":
                    $('body').append(
                      ' <div class="modal fade" id="modales" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"><img src="https://www.topciment.com/imagenes/flags/united-kingdom.png" alt="Topciment english web" Title="Topciment english web"> <p>Welcome to Topciment!</p><button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div> <div class="modal-body"> <p>Would you like to browse our website in English?</p> <a href="https://topciment.com/en/" class="btn btn-primary leermass continuar ">continue</a> <a href="https://www.topciment.com/en/choose-country-region" class="btn btn-primary leermass cambiar ">Change country</a> </div> </div> </div> </div> '
                      );
                  //  $('#modales').modal('toggle');
                    Cookies.set("idioma", "es-ES", { expires: 7 });
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

        /* End geolocalización */
});
    
   /*  $(".container").on("hover", function () {
     $('#xenioo-chat-widget-button').css('box-shadow', 'none !important');
});
$("#container").on('mouseenter', '.selector', function() {
    
});
$("#container").on('mouseleave', '.selector', function() {
    
}); */
    $(document).ready(function () {
     
  if (window.location.href.indexOf("/es/") >= 0) {
    xenioowebchat.Start("a173731c-2519-4ee7-bfd4-7fd700d806b9");
   

  } else if (window.location.href.indexOf("/fr/") >= 0) {
      xenioowebchat.Start("b951edf9-7446-43da-8f75-fa2bbf63f254");

  }  else if (window.location.href.indexOf("/en/") >= 0) {
   xenioowebchat.Start("9fe6dd4c-7eda-4f13-af57-a84d3cd2ead6");

  }  else if (window.location.href.indexOf("/de/") >= 0) {
    xenioowebchat.Start("4867c412-f0c5-49d4-bd0e-abaace1b899e");

  } else if (window.location.href.indexOf("/cn/") >= 0) {
    xenioowebchat.Start("94158df5-ecde-4cd6-9026-f51f7ada061a");

  } else if (window.location.href.indexOf("/pl/") >= 0) {
      console.log("polaco");
    xenioowebchat.Start("526feea1-15b3-4756-904f-91739cdc0ea9");

  }

/* else if (window.location.href.indexOf("/it/") >= 0) { xenioowebchat.Start("52493cef-41c4-490a-8dd3-7ec44699c762"); } */
       
/* else if (window.location.href.indexOf("/nl/") >= 0) { $('body').append("<script data-id='xenioo' data-node='app' src='https://static.xenioo.com/webchat/xenioowebchat.js'></script>"); xenioowebchat.Start("4577d544-d1d5-4afd-9198-ef62128464b8"); } */


  $('.xenioo-send-button-image').attr('alt','boton chatbot');
    $('#xenioo-conversation-header-avatar-image').attr('alt','imagen chatbot');
        /* Efecto scroll */
        $(".menuMicrocementos a").click(function (evn) {
           
            $('html,body').scrollTo(this.hash, this.hash);
        });
    /*
        var aChildren = $(".menuMicrocementos li").children(); // find the a children of the list items
        var aArray = []; // create the empty aArray
        for (var i = 0; i < aChildren.length; i++) {
            var aChild = aChildren[i];
            var ahref = $(aChil );
            aArray.push(ahref);
        }
        end  Efecto scroll */

      
$('#xenioo-chat-widget-button').css('box-shadow', 'none !important');
        if (window.location.href.indexOf("sello-de-calidad") >= 0) {

            $(function () {
                new Clipboard('.copy-text');
            });

        }

        var arr = ['microcemento', 'microcemento piscinas', 'microcemento bicomponente'];
 
        var arr = ['microcemento', 'microcemento piscinas', 'microcemento bicomponente'];
        $('body img').each(function () {
        /*resize_image($(this));  */
            $(this).attr('width','auto');
             $(this).attr('height','auto');
            if (!$(this).attr('alt'))
                $(this).attr('alt', arr[Math.round(Math.random() * (arr.length - 1))]);
        });
       

            
            // Make sure image doesn't exceed 100x100 pixels 
              //    var width2 = image.clientWidth;
      // var height2 = image.clientHeight; 
  // note: takes jQuery img object not HTML: so width is a function
  // not a property.
  function resize_image (image) {
      var maxWidth = 900;           // Max width for the image
      var maxHeight = 900;          // Max height for the image
      var ratio = 0;                // Used for aspect ratio

      // Get current dimensions
      var width = image.width()
      var height = image.height(); 

      // var width2 = image.innerWidth()
      //var height2 = image.innerHeight(); 

      console.log("dimensions: " + width + "x" + height);
   //set valor
   $(this).attr('width',width);
   $(this).attr('width',width);

// console.log("dimensions2: " + width2 + "x" + height2);
      // If the current width is larger than the max, scale height
      // to ratio of max width to current and then set width to max.
      if (width > maxWidth) {
          console.log("Shrinking width (and scaling height)")
          ratio = maxWidth / width;
          height = height * ratio;
          width = maxWidth;
           image.css("width", width);
          image.css("height", height); 
          image.attr("width", width);
          image.attr("height", height);
          console.log("new dimensions: " + width + "x" + height);
      }

      // If the current height is larger than the max, scale width
      // to ratio of max height to current and then set height to max.
      if (height > maxHeight) {
          console.log("Shrinking height (and scaling width)")
          ratio = maxHeight / height;
          width = width * ratio;
          height = maxHeight;
           image.css("width", width);
          image.css("height", height); 
              image.attr("width", width);
          image.attr("height", height);
          console.log("new dimensions: " + width + "x" + height);
      }
  }




           





    });
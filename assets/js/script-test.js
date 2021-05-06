    $(document).ready(function () {


        console.log("test");









xenioowebchat.Start("a173731c-2519-4ee7-bfd4-7fd700d806b9");

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
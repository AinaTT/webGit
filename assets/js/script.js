    $(document).ready(function () {

        /* Efecto scroll */
        $(".menuMicrocementos a").click(function (evn) {
            evn.preventDefault();
            $('html,body').scrollTo(this.hash, this.hash);
        });

        var aChildren = $(".menuMicrocementos li").children(); // find the a children of the list items
        var aArray = []; // create the empty aArray
        for (var i = 0; i < aChildren.length; i++) {
            var aChild = aChildren[i];
            var ahref = $(aChild).attr('href');
            aArray.push(ahref);
        }
        /* end  Efecto scroll */

        /* xenioowebchat.Start("83659ee5-4d66-473d-8243-6698f86a86c3"); */

        if (window.location.href.indexOf("sello-de-calidad") >= 0) {

            $(function () {
                new Clipboard('.copy-text');
            });

        }

        var arr = ['microcemento', 'microcemento piscinas', 'microcemento bicomponente'];

        var arr = ['microcemento', 'microcemento piscinas', 'microcemento bicomponente'];
        $('body img').each(function () {
          /*   resize_image($(this)); */
            if (!$(this).attr('alt'))
                $(this).attr('alt', arr[Math.round(Math.random() * (arr.length - 1))]);
        });


            
            // Make sure image doesn't exceed 100x100 pixels
  // note: takes jQuery img object not HTML: so width is a function
  // not a property.
  function resize_image (image) {
      var maxWidth = 100;           // Max width for the image
      var maxHeight = 100;          // Max height for the image
      var ratio = 0;                // Used for aspect ratio

      // Get current dimensions
      var width = image.width()
      var height = image.height(); 
      console.log("dimensions: " + width + "x" + height);

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
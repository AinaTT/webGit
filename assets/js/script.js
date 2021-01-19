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

       

        
    });


  
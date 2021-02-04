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
            if (!$(this).attr('alt'))
                $(this).attr('alt', arr[Math.round(Math.random() * (arr.length - 1))]);
        });


            
            




           





    });
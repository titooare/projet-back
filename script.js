$(function(){
            //je cache le conteneur qui contient la video
            $('#conteneur').hide();
            //au click sur le bouton (ou autre c'est à vous de voir)
            $('.modalVideo').click(function(){
                
                //j'affiche avec un fadeIn qui dure 1s (1000ms) le conteneur
                $('#conteneur').fadeIn(1000);
                //j'attribue au src le lien de la video en rajoutant à la fin une variable
                //la variable est donnée par youtube, c'est autoplay=1 pour que la vidéo se lance automatiquement à placer après un ? --> src="lien?autoplay=1" 
                $('iframe').attr('src','https://www.youtube.com/embed/y4M12FXZssA?autoplay=1');
            })
            //au clique sur le span (ou autre c'est à vous de voir)
            $('.bouton-video').click(function(){
                //je fais disparaitre le conteneur sur un fadeOut de 1000ms
                $('#conteneur').fadeOut(1000);
                //je met le lien src de la vidéo sur vide (pour que ça arrête la lecture!!)
                $('iframe').attr('src','');
            })
        })


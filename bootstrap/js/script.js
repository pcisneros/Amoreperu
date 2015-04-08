$(document).ready(function() { 
            

            $("#ulnav li").on('click', function(){
                $("#ulnav li").removeClass('active');
                $(this).addClass('active');

                $(".navbar-toggle").attr("aria-expanded","false");
            });

            $('#lihome').on('click',function(){

                //$('#content2').html('<div id="cargando"><img id="img" src="img/logo.jpg"><br><img id="gif"  src="img/ajax-loader.gif"><span></span></div>');
                //$('#content2').html('<div id="cargando" class"brillo"><img id="img" src="img/logo.jpg"><br><img id="gif" src="img/ajax-loader.gif"></div>');
                $('#content2').html('<div href="#" class="brillo" style="background-position: center;"><img id="img" src="img/logo.jpg" alt="css"  /><br><img id="gif" src="img/ajax-loader.gif"></div>');
                setTimeout(function(){
                            window.location.href = "index.php";
                }, 1000);
            });

            $('#liabout').on('click',function(){

                //$('#content2').html('<div id="cargando"><img id="img" src="img/logo.jpg"><br><img id="gif" src="img/ajax-loader.gif"></div>');
                //$('#content2').html('<div id="cargando" class"brillo"><img id="img" src="img/logo.jpg"><br><img id="gif" src="img/ajax-loader.gif"></div>');
                $('#content2').html('<div href="#" class="brillo" style="background-position: center;"><img id="img" src="img/logo.jpg" alt="css"  /><br><img id="gif" src="img/ajax-loader.gif"></div>');
                $.ajax({
                    type: "GET",
                    url: "about.php",
                    success: function(data) {
                        
                        setTimeout(function(){
                          $('#content2').fadeIn().html(data);
                        }, 1000);

                        
                    }
                });
            });

            $('#licontact').on('click',function(){

                //$('#content2').html('<div id="cargando"><img id="img" src="img/logo.jpg"><br><img id="gif"  src="img/ajax-loader.gif"></div>');
                //$('#content2').html('<div href="#" class="brillo" style="background-position: center;"><img id="img" src="img/logo.jpg" alt="css"  /><span></span></div>');
                //$('#content2').html('<div href="#" id="cargando" class"brillo" style="background-position: center;><img id="img" src="img/logo.jpg"><br><img id="gif" src="img/ajax-loader.gif"></div>');
                $('#content2').html('<div href="#" class="brillo" style="background-position: center;"><img id="img" src="img/logo.jpg" alt="css"  /><br><img id="gif" src="img/ajax-loader.gif"></div>');
               $.ajax({
                    type: "GET",
                    url: "contacto.php",
                    success: function(data) {
                        setTimeout(function(){
                          $('#content2').fadeIn().html(data);
                        }, 1000);       
                    }
                });
            });

            


});
 
     
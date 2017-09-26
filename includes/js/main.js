$( document ).ready(function() {
   
    // $(window).stellar();        

	// console.log(base_url+"includes/img/mike-wilson-109478.jpg");
    $("#panel-img").backstretch(base_url+"includes/img/mike-wilson-109478.jpg");

    
    //declaración de animacione service menu
    var tlmenu = new TimelineMax({paused:true});
        tlmenu
            .set($("#menubloque"),{alpha: 0 , className: '+=nodisplay'})
            // .fromTo($(".menu-down"), 0.6 , {  height: 0.1 , alpha: 0} , {  height: "80px", alpha: 1 })
            ;
    // $("#menubloque").removeClass("nodisplay");
    
    var controller = new ScrollMagic.Controller();
    var ourScene = new ScrollMagic.Scene({
        triggerElement: '#panel-info',
        triggerHook: 0,
        reverse: true
        })
        .setTween(tlmenu.play())
        // .addIndicators()
        .addTo(controller);
    

    //click link view more

    $(".link").click(function(){

        changetitle(this.id);
        changedescription(this.id);

    	// console.log();
    	if (this.id == "cctv") {
    		// $(".titleservice").text("Video Vigilancia o C.C.T.V.");
    		// $("#descripcionservice").text(" Descripción CCTV Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquam nisl non odio cursus venenatis. Sed ut mi ipsum. Suspendisse sed tellus nec neque vestibulum fermentum. Donec vel aliquam lectus, nec malesuada ante. Nam nec metus dapibus, elementum diam cursus, sagittis eros. Nunc facilisis at eros vel \n Sed feugiat, urna eu consequat suscipit, arcu dolor ultrices ex, vitae laoreet arcu neque nec ligula. Praesent congue elit congue urna rhoncus dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dolor nibh, lobortis eu quam eu, pharetra posuere magna. Praesent tincidunt sed felis eu molestie. Sed massa nibh, porta facilisis est sed, maximus scelerisque diam. Cras scelerisque, quam vel venenatis sollicitudin, erat nisl iaculis nibh, at faucibus elit est sed erat. Pellentesque eget erat quis urna rutrum convallis. Proin sed aliquam ipsum, at ultricies ipsum.");
            $("#img_product").fadeOut("slow", function(){
                $("#img_product").attr("src", base_url+"/includes/img/camara.jpg");
                $(this).fadeIn();    
            });
            
    	}
    	if (this.id == "control") {
    		// $(".titleservice").text("Control de Acceso");
    		// $("#descripcionservice").text("Descripción Control de Acceso Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquam nisl non odio cursus venenatis. Sed ut mi ipsum. Suspendisse sed tellus nec neque vestibulum fermentum. Donec vel aliquam lectus, nec malesuada ante. Nam nec metus dapibus, elementum diam cursus, sagittis eros. Nunc facilisis at eros vel \n Sed feugiat, urna eu consequat suscipit, arcu dolor ultrices ex, vitae laoreet arcu neque nec ligula. Praesent congue elit congue urna rhoncus dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dolor nibh, lobortis eu quam eu, pharetra posuere magna. Praesent tincidunt sed felis eu molestie. Sed massa nibh, porta facilisis est sed, maximus scelerisque diam. Cras scelerisque, quam vel venenatis sollicitudin, erat nisl iaculis nibh, at faucibus elit est sed erat. Pellentesque eget erat quis urna rutrum convallis. Proin sed aliquam ipsum, at ultricies ipsum.");
            $("#img_product").fadeOut("slow", function(){
            $("#img_product").attr("src", base_url+"/includes/img/torniquete.jpg");
                $(this).fadeIn();    
            });

    	}
    	if (this.id == "geo") {
    		// $(".titleservice").text("Geolocalización");	
    		// $("#descripcionservice").text("Descripción de Geolocalización Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquam nisl non odio cursus venenatis. Sed ut mi ipsum. Suspendisse sed tellus nec neque vestibulum fermentum. Donec vel aliquam lectus, nec malesuada ante. Nam nec metus dapibus, elementum diam cursus, sagittis eros. Nunc facilisis at eros vel \n Sed feugiat, urna eu consequat suscipit, arcu dolor ultrices ex, vitae laoreet arcu neque nec ligula. Praesent congue elit congue urna rhoncus dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dolor nibh, lobortis eu quam eu, pharetra posuere magna. Praesent tincidunt sed felis eu molestie. Sed massa nibh, porta facilisis est sed, maximus scelerisque diam. Cras scelerisque, quam vel venenatis sollicitudin, erat nisl iaculis nibh, at faucibus elit est sed erat. Pellentesque eget erat quis urna rutrum convallis. Proin sed aliquam ipsum, at ultricies ipsum.");
            $("#img_product").fadeOut("slow", function(){
            $("#img_product").attr("src", base_url+"/includes/img/gps.jpg");
                $(this).fadeIn();    
            });
            
    	}
    }); // end event click link


    function changetitle(obj){
        console.log('#' + obj + '-title');
        var $title = $('#' + obj + '-title');
        var tl = new TimelineMax();
        tl
            .to($(".titleservice"), 0.7 , { x : -400  , autoAlpha: 0 })
            .set($(".titleservice"), {className: '+=nodisplay'})
            .set($title , { display:'block' , className: '-=nodisplay'})
            .to($title, 1.4 , { ease: Elastic.easeInOut.config(0.5, 0.3) , x : 0 , autoAlpha: 1})
            ;
    }

    function changedescription(obj){
        console.log('#' + obj + '-description');
        var $description = $('#' + obj + '-description');
        var tldescription = new TimelineMax();
        tldescription
            .to($(".descripcionservice"), 0.3 , { x : -400  , autoAlpha: 0 })
            .set($(".descripcionservice"), {className: '+=nodisplay'})
            .set($description , {display:'block' , className: '-=nodisplay'})
            .to($description, 1.4 , { ease: Elastic.easeInOut.config(0.5, 0.3) , x : 0 , autoAlpha: 1})
            ;
    }

   // $( document).click( function(e){
   // 	// console.log(e.target);
   // });

});

 


$( document ).ready(function() {
	console.log(base_url+"includes/img/mike-wilson-109478.jpg");
    $("#panel-img").backstretch(base_url+"includes/img/mike-wilson-109478.jpg");



    //click link view more

    $(".link").click(function(){
    	console.log(this.id);
    	if (this.id == "cctv") {
    		$(".titleservice").text("Video Vigilancia o C.C.T.V.");
    		$("#descripcionservice").text(" Descripción CCTV Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquam nisl non odio cursus venenatis. Sed ut mi ipsum. Suspendisse sed tellus nec neque vestibulum fermentum. Donec vel aliquam lectus, nec malesuada ante. Nam nec metus dapibus, elementum diam cursus, sagittis eros. Nunc facilisis at eros vel \n Sed feugiat, urna eu consequat suscipit, arcu dolor ultrices ex, vitae laoreet arcu neque nec ligula. Praesent congue elit congue urna rhoncus dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dolor nibh, lobortis eu quam eu, pharetra posuere magna. Praesent tincidunt sed felis eu molestie. Sed massa nibh, porta facilisis est sed, maximus scelerisque diam. Cras scelerisque, quam vel venenatis sollicitudin, erat nisl iaculis nibh, at faucibus elit est sed erat. Pellentesque eget erat quis urna rutrum convallis. Proin sed aliquam ipsum, at ultricies ipsum.");
    	}
    	if (this.id == "control") {
    		$(".titleservice").text("Control de Acceso");
    		$("#descripcionservice").text("Descripción Control de Acceso Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquam nisl non odio cursus venenatis. Sed ut mi ipsum. Suspendisse sed tellus nec neque vestibulum fermentum. Donec vel aliquam lectus, nec malesuada ante. Nam nec metus dapibus, elementum diam cursus, sagittis eros. Nunc facilisis at eros vel \n Sed feugiat, urna eu consequat suscipit, arcu dolor ultrices ex, vitae laoreet arcu neque nec ligula. Praesent congue elit congue urna rhoncus dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dolor nibh, lobortis eu quam eu, pharetra posuere magna. Praesent tincidunt sed felis eu molestie. Sed massa nibh, porta facilisis est sed, maximus scelerisque diam. Cras scelerisque, quam vel venenatis sollicitudin, erat nisl iaculis nibh, at faucibus elit est sed erat. Pellentesque eget erat quis urna rutrum convallis. Proin sed aliquam ipsum, at ultricies ipsum.");
    	}
    	if (this.id == "geo") {
    		$(".titleservice").text("Geolocalización");	
    		$("#descripcionservice").text("Descripción de Geolocalización Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquam nisl non odio cursus venenatis. Sed ut mi ipsum. Suspendisse sed tellus nec neque vestibulum fermentum. Donec vel aliquam lectus, nec malesuada ante. Nam nec metus dapibus, elementum diam cursus, sagittis eros. Nunc facilisis at eros vel \n Sed feugiat, urna eu consequat suscipit, arcu dolor ultrices ex, vitae laoreet arcu neque nec ligula. Praesent congue elit congue urna rhoncus dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dolor nibh, lobortis eu quam eu, pharetra posuere magna. Praesent tincidunt sed felis eu molestie. Sed massa nibh, porta facilisis est sed, maximus scelerisque diam. Cras scelerisque, quam vel venenatis sollicitudin, erat nisl iaculis nibh, at faucibus elit est sed erat. Pellentesque eget erat quis urna rutrum convallis. Proin sed aliquam ipsum, at ultricies ipsum.");
    	}
    });


});
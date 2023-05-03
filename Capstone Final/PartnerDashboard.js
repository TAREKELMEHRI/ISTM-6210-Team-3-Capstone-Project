const image_input = document.querySelector("#image_input");
var uploaded_image = ""; // link to data base

image_input.addEventListener("change", function(){
	const reader = new FileReader();
	reader.addEventListener("load", () => {
		uploaded_image = reader.result;
		document.querySelector("#display_image").style.backgroundImage = 'url(${uploaded_image})'
	});
	reader.readAsDataURL(this.files[0]);

})


/*===================================================================
=            MOSTRAR MISION O VISION A TRAVES DE BOTONES            =
===================================================================*/
$(".btn-vision").click(function() {
	if ($(".btn-mision").hasClass('btn-misvis-s')) {
		$(".btn-mision").removeClass('btn-misvis-s');
		$(".btn-vision").addClass('btn-misvis-s');
		$(".p-info").children().remove();
		$(".p-info").append(
			'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci possimus consequuntur minus, inventore officiis in. Voluptas, cum, non. Officia facilis impedit tempore cupiditate est, deserunt laudantium accusamus voluptatem. Pariatur, nihil. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolore tempore animi libero sapiente tenetur! Culpa recusandae voluptate libero, pariatur ad hic tempore qui quibusdam perspiciatis aliquid delectus non? Tempora!</p>'
			)
	}
})
$(".btn-mision").click(function() {
	if ($(".btn-vision").hasClass('btn-misvis-s')) {
		$(".btn-vision").removeClass('btn-misvis-s');
		$(".btn-mision").addClass('btn-misvis-s');
		$(".p-info").children().remove();
		$(".p-info").append(
			'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae esse laudantium assumenda tempora molestiae magnam, amet, inventore, itaque perferendis quae asperiores blanditiis tempore possimus. Dolorum aspernatur laboriosam odio! Amet, cumque? <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus tempora, fugiat similique, accusantium consequatur quidem placeat reprehenderit minus blanditiis modi nobis laborum error officiis corporis fuga, incidunt. Aliquam, laudantium voluptates.</p>'
			)
	}
})
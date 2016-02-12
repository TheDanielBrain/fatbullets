<?php require 'views/header.php' ?>
<section class="main container">
	<div class="main">
        <div class="slides">
            <img src="img/1.png" alt="">
            <img src="img/2.png" alt="">
            <img src="img/3.png" alt="">
        </div>
    </div>
	
	<div class="row hidden-xs hidden-sm">
	  <div class="col-sm-6 col-md-4">
		<div class="thumbnail">
		  <img src = "./img/sof.jpg" alt = "Generic placeholder thumbnail">
		  <div class="caption">
			<h3>Thumbnail label</h3>
			<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			<p><a href="#" class="btn btn-default" role="button">Button</a></p>
		  </div>
		</div>
	  </div>
	  
	  <div class="col-sm-6 col-md-4">
		<div class="thumbnail">
		  <img src = "./img/sof.jpg" alt = "Generic placeholder thumbnail">
		  <div class="caption">
			<h3>Thumbnail label</h3>
			<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			<p><a href="#" class="btn btn-default" role="button">Button</a></p>
		  </div>
		</div>
	  </div>
	  
	  <div class="col-sm-6 col-md-4">
		<div class="thumbnail">
		  <img src = "./img/sof.jpg" alt = "Generic placeholder thumbnail">
		  <div class="caption">
			<h3>Thumbnail label</h3>
			<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			<p><a href="#" class="btn btn-default" role="button">Button</a></p>
		  </div>
		</div>
	  </div>
	</div>
</section>

<!-- CONTACTO SACARLO EN SU PROPIO ARCHIVO Y UNIRLO MVC-->
    <div class = "modal fade" id = "contacto" role = "dialog">
        <div class = "modal-dialog">
            <div class = "modal-content">
                <form class = "form-horizontal">
                    <div class = "modal-header">
                        <h4>Escríbenos</h4>
                    </div>
                    <div class = "modal-body">
                        <div class = "form-group">
                            <label for = "contact-name" class = "col-lg-2 control-label">Nombre:</label>
                            <div class = "col-lg-10">
                                <input type = "text" class = "form-control" id = "contact-name" placeholder = "Escribe tu nombre aquí" required>
                            </div>
                        </div>
                        <div class = "form-group">
                            <label for = "contact-email" class = "col-lg-2 control-label">Email:</label>
                            <div class = "col-lg-10">
                                <input type = "email" class = "form-control" id = "contact-email" placeholder = "tu@correo.com" required>
                            </div>
                        </div>
                        <div class = "form-group">
                            <label for = "contact-msg" class = "col-lg-2 control-label">Mensaje:</label>
                            <div class = "col-lg-10">
                                <textarea class = "form-control" rows = "8" placeholder = "Escribe aquí tu mensaje" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class = "modal-footer">
                        <a class = "btn btn-default" data-dismiss = "modal">Cerrar</a>    
                        <button class = "btn btn-primary" type = "submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- CONTACTO SACARLO EN SU PROPIO ARCHIVO Y UNIRLO MVC-->

    <!--<section id="content">
        <div class="wrap-content zerogrid">
            <div class="row block01">
                <div class="col-1-3">
                    <div class="wrap-col box">
                        <h2>Imagen 1</h2>
                        <p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
                        <div class="more"><a href="#">[...]</a></div>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="wrap-col box">
                        <h2>Imagen 2</h2>
                        <p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
                        <div class="more"><a href="#">[...]</a></div>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="wrap-col box">
                        <h2>Imagen 3</h2>
                        <p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
                        <div class="more"><a href="#">[...]</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

<?php require 'views/footer.php' ?>
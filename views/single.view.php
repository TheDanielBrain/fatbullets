<?php require 'views/header.php' ?>

<section class="main container">
    <div class="row">
        <div class="contenedor">
            <section class="col-md-9">
                <div class="post clearfix">
                    <article>
                        <h2 class="titulo"><?php echo $post['title']; ?></h2>
                        <p class="fecha"><?php echo fecha($post['date']); ?></p>
                        <div class="thumb">
                            <img class="img-thumbnail" src="./img/posts/<?php echo $post['thumb']; ?>" alt="">
                        </div>
                        </br>
                        <p class="extracto text-justify"><?php echo ($post['text']); ?></p>
                        <div class="row">
                            <div>
                                <div class="embed-responsive embed-responsive-16by9">
                                  <iframe class="embed-responsive-item" width="560" height="315" frameborder="0" src="<?php echo $post['link']; ?>" allowfullscreen seamless></iframe>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
            
            <aside class="col-md-3 hidden-xs hidden-sm">
                <div class="list-group">
                    <a href="#" class="list-group-item">Diseño Web</a>
                    <a href="#" class="list-group-item">CSS</a>
                    <a href="#" class="list-group-item">Cursos</a>
                    <a href="#" class="list-group-item">Desarrollo Web</a>
                    <a href="#" class="list-group-item">Elementos Web</a>
                    <a href="#" class="list-group-item">Jquery</a>
                    <a href="#" class="list-group-item">Recursos y Herramientas</a>
                </div>

                
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Inicia proyectos HTML5 mas rápido con Initializr</h4>
                    <p class="list-group-item-text">Aprende como iniciar un proyecto HTML5 en 15 minutos con Initialzr.</p>
                </a>

                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Como hacer una plantilla básica con PHP (templates)</h4>
                    <p class="list-group-item-text">LoremAprende como transformar tu diseño web en una plantilla dinámica con PHP.</p>
                </a>

                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Como cambiar el cursor de tu sitio web con propiedad CSS</h4>
                    <p class="list-group-item-text">Aprende como cambiar el cursor de los elementos de tu sitio web con CSS.</p>
                </a>
            </aside>
        </div>
    </div>
</section>
</br>

<?php require 'views/footer.php' ?>
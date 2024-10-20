<div class="container mt-5">
    <h1 class="section-title">Productos</h1>
    <div class="row">
        <?php
            $productos = [
                ["Balsámica Jungla", "BalsamicaJungla.jpg"],
                ["Crema Facial", "Crema Facial.jpg"],
                ["Guayaba y Romero", "Guayaba y Romero.jpg"],
                ["Jabón", "Jabon.jpg"],
                ["Limoncillo", "Limoncillo.jpg"],
                ["Mandarina", "Mandarina.jpg"],
                ["Tilín", "Tilin.jpg"],
                ["Tónico Virgen", "Tonico Virgen.jpg"],
                ["Zapelo", "Zapelo.jpg"]
            ];

            foreach ($productos as $index => $producto) {
                $nombre = $producto[0];
                $imagen = $producto[1];
        ?>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="src/Img/<?php echo $imagen; ?>" class="card-img-top producto-imagen" alt="<?php echo $nombre; ?>" data-toggle="modal" data-target="#productModal<?php echo $index; ?>">
                <div class="card-title-hover"><?php echo $nombre; ?></div>
            </div>
            <div class="card-title"><?php echo $nombre; ?></div>
        </div>

        <div class="modal fade" id="productModal<?php echo $index; ?>" tabindex="-1" role="dialog" aria-labelledby="productModalLabel<?php echo $index; ?>" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel<?php echo $index; ?>"><?php echo $nombre; ?></h5>
                    </div>
                    <div class="modal-body">
                        <img src="src/Img/<?php echo $imagen; ?>" alt="<?php echo $nombre; ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <?php
            }
        ?>
    </div>
</div>

<?php
    include 'header.php';
?>
        <main>
            <div id="contenedor-productos" class="contenedor-productos" style="padding-top: 10vh;">
            <link rel="stylesheet" href="detalle.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous">
            <div class = "card-wrapper">
                <div class = "card">
                    <!-- card left -->
                    <div class = "product-imgs">
                        <div class = "img-display">
                            <div class = "img-showcase">
                                <img style="object-fit: contain;" src ="<?php echo $_GET['imagen_producto']?>" alt = "shoe image">
                                <img style="object-fit: contain;" src ="<?php echo $_GET['imagen1_producto']?>" alt = "shoe image">
                                <img style="object-fit: contain;" src ="<?php echo $_GET['imagen2_producto']?>" alt = "shoe image">
                                <img style="object-fit: contain;" src ="<?php echo $_GET['imagen3_producto']?>" alt = "shoe image">
                            </div>
                        </div>
                        <div class = "img-select">
                            <div class = "img-item">
                            <a href = "#" data-id = "1">
                                <img src = "<?php echo $_GET['imagen_producto']?>" alt = "shoe image">
                            </a>
                            </div>
                            <div class = "img-item">
                            <a href = "#" data-id = "2">
                                <img src = "<?php echo $_GET['imagen1_producto']?>" alt = "shoe image">
                            </a>
                            </div>
                            <div class = "img-item">
                            <a href = "#" data-id = "3">
                                <img src = "<?php echo $_GET['imagen2_producto']?>" alt = "shoe image">
                            </a>
                            </div>
                            <div class = "img-item">
                            <a href = "#" data-id = "4">
                                <img src = "<?php echo $_GET['imagen3_producto']?>" alt = "shoe image">
                            </a>
                            </div>
                        </div>
                        </div>
                        
                        <!-- card right -->

                        <div class = "product-content">
                        <h2  class = "product-title"><?php echo $_GET['nombre_producto']?></h2>
                        <a href = "#" class = "product-link">visita zapax store</a>
                        <div class = "product-rating">
                            <i class = "fas fa-star"></i>
                            <i class = "fas fa-star"></i>
                            <i class = "fas fa-star"></i>
                            <i class = "fas fa-star"></i>
                            <i class = "fas fa-star-half-alt"></i>
                            <span>4.7(21)</span>
                        </div>

                        <div class = "product-price">
                            <p class = "new-price">precio: <span><?php echo "$" . number_format($_GET['precio_producto'])?></span></p>
                        </div>

                        <div class = "product-detail">
                            <h2><?php echo $_GET['modelo_producto']?></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p>
                        </div>

                        <form class = "purchase-info" action="acciones/codAgregarCarrito.php" method="POST">
                            <div>
                                <?php 
                                //while ($datos = mysqli_fetch_array($sql)) {  ?>
                                    <input name="id_usuario" type="hidden" value="<?php echo $idUsuario?>">
                                    <input name="id_producto" type="hidden" value="<?php echo $_GET['id_producto'] ?>">
                                    <input name="imagen_producto" type="hidden" value="<?php echo $_GET['imagen_producto'] ?>">
                                    <input name="nombre_producto" type="hidden" value="<?php echo $_GET['nombre_producto'] ?>">
                                    <input name="precio_producto" type="hidden" value="<?php echo $_GET['precio_producto'] ?>">
                                    <input name="modelo_producto" type="hidden" value="<?php echo $_GET['modelo_producto'] ?>">
                                    <input name="cantidad_producto" type="hidden" value="1">
                                <?php //} ?>
                            </div>
                            <button type="submit" class="btn">
                            Agregar al carrito <i class = "fas fa-shopping-cart"></i>
                            </button>
                        </form>

                    </div>

                </div>
            </div>

            <script>
                const imgs = document.querySelectorAll('.img-select a');
                const imgBtns = [...imgs];
                let imgId = 1;

                imgBtns.forEach((imgItem) => {
                    imgItem.addEventListener('click', (event) => {
                        event.preventDefault();
                        imgId = imgItem.dataset.id;
                        slideImage();
                    });
                });

                function slideImage(){
                    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

                    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
                }

                window.addEventListener('resize', slideImage);
            </script>

            </div>
        </main>
    </div>
    
    <script src="./js/main.js"></script>
</body>
</html>
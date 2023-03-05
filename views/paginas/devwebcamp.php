<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia más importante de Latinoamérica</p>

    <div <?php aos_animacion(); ?> class="devwebcamp__grid">
        <div class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobredevwebcamp.jpg" alt="imagen DevWebCAmp">
            </picture>
        </div>

        <div <?php aos_animacion(); ?> class="devwebcamp__contenido">
            <p class="devwebcamp__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse tempore, hic amet illum voluptas excepturi consequatur nihil, repudiandae odio sapiente aliquid aut reiciendis? Qui voluptatum totam facilis architecto similique tempora.</p>
            <p class="devwebcamp__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse tempore, hic amet illum voluptas excepturi consequatur nihil, repudiandae odio sapiente aliquid aut reiciendis? Qui voluptatum totam facilis architecto similique tempora.</p>
        </div>
    </div>
</main>
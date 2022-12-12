<div class="card">
    <img src="<?php echo $product->getImage(); ?>" alt="">
    <div class="card-body">
        <h2><?php echo $product->getTitle(); ?></h2>
        <p class="card-text">
            Categoria: <?php echo $product->getCategoriesAsIcons() ?>
        </p>
        <p class="card-text">
            Tipo: <?php echo $product->getType() ?>
        </p>
        <p class="card-text">
            Prezzo: <?php echo $product->getPrice() ?> €
        </p>
    </div>
</div>
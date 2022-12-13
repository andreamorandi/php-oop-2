<div class="card">
    <img src="<?php echo $product->getImage(); ?>" alt="">
    <div class="card-body">
        <h2><?php echo $product->getTitle(); ?></h2>
        <p class="card-text">
            Categoria: <?php echo $product->getCategoriesAsIcons() ?>
        </p>
        <?php if (get_class($product) === "Toy") { ?>
            <p class="card-text">Tipologia: Giochi</p>
            <p class="card-text">Materiale: <?php echo $product->getMaterial() ?></p>
        <?php } else if (get_class($product) === "Food") { ?>
            <p class="card-text">Tipologia: Cibo</p>
            <p class="card-text">Peso: <?php echo $product->getWeight() ?> g</p>
        <?php } else if (get_class($product) === "Bed") { ?>
            <p class="card-text">Tipologia: Cucce</p>
            <p class="card-text">Dimensioni: <?php echo $product->getSize() ?> cm</p>
        <?php } else if (get_class($product) === "Accessory") { ?>
            <p class="card-text">Tipologia: Accessori</p>
            <p class="card-text">Dimensioni: <?php echo $product->getSize() ?> cm</p>
        <?php } ?>
        <p class="card-text">
            Prezzo: <?php echo $product->getPrice() ?> €
        </p>
    </div>
</div>
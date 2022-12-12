<main>
    <section class="container">
        <div class="row row-cols-3">
            <?php foreach ($products as $product) { ?>
                <div class="col">
                    <?php include __DIR__ . "/product-card.php"; ?>
                </div>
            <?php } ?>
        </div>
    </section>
</main>
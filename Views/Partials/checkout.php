<div class="checkout p-4">
    <h3>Nome utente: <?php echo $guest->getName() ?></h3>
    <h3>Email utente: <?php echo $guest->getEmail() ?></h3>
    <?php
    $guest->basket = new ShoppingBasket();
    $guest->basket->add($pandoro_cani);
    $guest->basket->add($osso_natalizio);
    $total = $guest->basket->getTotal();
    ?>
    <h3>Prodotti nel carrello: <?php echo $guest->basket->getProductsList() ?></h3>
    <h3>Totale carrello: <?php echo $total ?> €</h3>
    <?php
    $guest->insertCreditCard($credit_card);
    try {
        $result = $guest->pay($total);
    } catch (Exception $e) {
        $result = "Eccezione: " . $e->getMessage();
    }
    ?>
    <h3>Esito pagamento: <?php echo $result ?></h3>
</div>

</section>
</main>
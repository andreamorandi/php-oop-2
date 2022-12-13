<div class="checkout p-4">
    <h3>Nome utente: <?php echo $guest->getName() ?></h3>
    <h3>Email utente: <?php echo $guest->getEmail() ?></h3>
    <h3>Prodotti nel carrello: <?php echo $guest->basket->getProductsList() ?></h3>
    <h3>Totale carrello: <?php echo $total ?> €</h3>
    <h3>Esito pagamento: <?php echo $result ?></h3>
</div>

</section>
</main>
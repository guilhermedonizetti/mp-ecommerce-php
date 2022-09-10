<?php

/**
 * O pagamento foi realizado com sucesso. A tela deve mostrar as informações
 * dos parâmetros que enviamos na Query String como: payment_method_id
 * que foi usado para pagar, o valor do campo external_reference e o ID do
 * pagamento (payment_id ou collection_id) do Mercado Pago
 */

/**
 * Estes são os parâmetros que enviamos na QueryString quando redirecionamos para o back_url estabelecido:
 * https://www.tusitio.com/success.php?collection_id=[PAYMENT_ID]&collection_status=approved&external_refe
 * rence=[EXTERNAL_REFERENCE]&payment_type=credit_card&preference_id=[PREFERENCE_ID]&site_id=[
 * SITE_ID]&processing_mode=aggregator&merchant_account_id=null
 */

$payment_method_id = isset($_GET['collection_id']) ? $_GET['collection_id'] : "";
$collection_status = isset($_GET['collection_status']) ? $_GET['collection_status'] : "";
$external_reference = isset($_GET['external_reference']) ? $_GET['external_reference'] : "";
$payment_type = isset($_GET['payment_type']) ? $_GET['payment_type'] : "";
$preference_id = isset($_GET['preference_id']) ? $_GET['preference_id'] : "";
$site_id = isset($_GET['site_id']) ? $_GET['site_id'] : "";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<style>
    h1, p, ul {
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        justify-content: left;
    }
    img {
        align-items: center;
    }
    body {
        background: linear-gradient( to bottom, #00FF00 1%, #FFFFFF, #FFFFFF, #FFFFFF, #FFFFFF, #FFFFFF);
        background-repeat: no-repeat;
    }
</style>

<head>
    <meta charset="utf-8">
    <title>APROVADO</title>
</head>
</body>
    <h1>Parabéns, sua compra foi realizada com sucesso!</h1>
    <center>
        <img type="gif" src="https://www.exintercambio.com.br/img/sucesso-2.gif" width="200" height="200">
    </center>

    <p>Pagou com a forma de pagamento <?php echo $payment_type; ?> e o <b>ID</b> é <?php echo $payment_method_id; ?>.</p><br><br>

    <ul>
        Informações adicionais
        <li>Collection status: (<?php echo $collection_status; ?>)</li>
        <li>External Reference: (<?php echo $external_reference; ?>)</li>
        <li>Preference ID: (<?php echo $preference_id; ?>)</li>
    </ul>
<body>
</html>




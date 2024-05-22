<?php
/**
 * Template Name: shared-order
 */



get_header();

if ( !isset( $_GET['uuid'] ) ) {
    return 'q';
}
$order_uuid = $_GET['uuid'];
$order_id = $_GET['id'];
echo '<br><br><br><br><br><br><br><br>';
// /shared-order?order=e9e4b2e0-0df7-48fe-85ae-3b694d086099
// $args = array(
//     // 'status'        => 'completed',
//     'meta_key'      => 'order_share_uuid',
//     'meta_value'    => $order_uuid,
//     'meta_compare'  => '=',
// );
// $orders = wc_get_orders( $args );


// $order = wc_get_order( $order_id );
$order_uuids = get_post_meta( $order_id, 'order_share_uuid' );





?>

<div id="content" class="site-content <?= bootscore_container_class(); ?>">
    <div id="primary" class="content-area">
      <!-- Hook to add something nice -->
      <?php bs_after_primary(); ?>

        <main id="main" class="site-main">
            <?php
                // NOT empty

                if ( in_array($order_uuid, $order_uuids) ) {
                    ?>

                        <p>С вами поделились заказам</p>
                        <button id="order_share_confirm" data-order_uuid="<?php echo $order_uuid ?>" data-order_id="<?php echo $order_id ?>">Принять</button>
                        <button id="order_share_cancel" data-order_uuid="<?php echo $order_uuid ?>" data-order_id="<?php echo $order_id ?>">Отказаться</button>

                    <?php
                }




                if ( ! empty ( $orders ) ) {
                    foreach ( $orders as $order ) {
                        echo '<p>ID = ' . $order->ID . '</p>';
                    }
                }
            ?>
        </main>
    </div>
</div>
<?php
?>
<?php
get_footer();
?>
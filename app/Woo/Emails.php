<?php

// Usuń automatyczną sekcję "Nasze dane bankowe" z maili WooCommerce (BACS)
add_action('woocommerce_email', function () {
    // WooCommerce podpina to w zależności od wersji w różne miejsca, zdejmujemy oba:
    remove_action('woocommerce_email_before_order_table', 'wc_bacs_email_instructions', 10);
    remove_action('woocommerce_email_order_details', 'wc_bacs_email_instructions', 10);
}, 1);
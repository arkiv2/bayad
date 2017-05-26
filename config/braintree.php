<?php
/*
 * Set specific configuration variables here
 */
return [
    'env' => env('BRAINTREE_ENV'),
    'public_key' => env('BRAINTREE_PUBLIC'),
    'private_key' => env('BRAINTREE_PRIVATE'),
    'merchant_id' => env('BRAINTREE_MERCHANT_ID')
];
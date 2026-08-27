<?php

//general finction
function setmessage($message, $type)
{
    $_SESSION['message'] = [
        'text' => $message,
        'type' => $type
    ];
}

//general function
function showmessage($type = null, $field = null)
{
    // General message
    if ($type !== 'error' && isset($_SESSION['message'])) {

        $text = $_SESSION['message']['text'];
        $messageType = $_SESSION['message']['type'];

        if ($type === null || $messageType === $type) {

            echo "<div class='alert alert-$messageType'>$text</div>";

            unset($_SESSION['message']);
        }
    }

    // Validation errors
    if ($type === 'error' && !empty($_SESSION['errors'])) {

        foreach ($_SESSION['errors'] as $error) {

            if ($field !== null && stripos($error, $field) !== false) {

                echo "<div class='text-danger mt-1'>$error</div>";

                break;
            }
        }

    }

    return "";
}
//product function
function add_product($product_name, $category, $price, $stock, $photo, $description, $status)
{
    $product = Base_Path . "data/data.json";

    if (file_exists($product)) {
        $products = json_decode(file_get_contents($product), true) ?? [];
    } else {
        $products = [];
    }

    $add = [
        'id' => count($products) + 1,
        'product_name' => $product_name,
        'category' => $category,
        'price' => $price,
        'stock' => $stock,
        'photo' => $photo,
        'description' => $description,
        'status' => $status
    ];

    $products[] = $add;

    return file_put_contents(
        $product,
        json_encode($products, JSON_PRETTY_PRINT)
    ) !== false;
}

function get_datajson() {
$product = Base_Path . "data/data.json";
if (file_exists($product)) {
    return json_decode(file_get_contents($product), true);

}
return [];

}
//contact function

?>
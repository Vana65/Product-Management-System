<?php
function validate_require($data,$field_name) {
if (empty($data)) {
        return "$field_name is required.";
    }
    return "";

}
function validate_salary($price) {
    if (!is_numeric($price) || $price < 0  || $price == 0) {
        return "Price must be a positive number.";
    }
    return "";
}
function validate_stock($stock)
{
    if (!is_numeric($stock) || $stock <= 0) {
        return "Stock must be a positive number.";
    }

    return "";
}
function validate_photo($photo)
{

    if ($photo['error'] !== UPLOAD_ERR_OK) {
        return "Error uploading file.";
    }

    $maxsize = 2 * 1024 * 1024; // 2MB

    if ($photo['size'] > $maxsize) {
        return "File size exceeds the maximum limit of 2MB.";
    }

    $ext = pathinfo($photo['full_path'], PATHINFO_EXTENSION);

    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

    if (!in_array(strtolower($ext), $allowedExtensions)) {
        return "Invalid file type. Only JPEG, PNG, and GIF are allowed.";
    }

    return "";
}

function validate_email($email) {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //true or false
        return "Invalid email format.";
    }
    return "";
}

function validate_phone($phone) {
if (!preg_match('/^\+?[0-9]{10,15}$/', $phone)) {
        return "Invalid phone number format.";
    }
    return "";
}
function add_error(&$errors, $error)
{
    if ($error) {
        $errors[] = $error;
    }
}
function validate_product_data( $product_name, $category, $price, $stock, $photo, $description, $status) {

    $errors = [];

    $data = [
        'product_name' => $product_name,
        'category' => $category,
        'price' => $price,
        'stock' => $stock,
        'photo' => $photo,
        'description' => $description,
        'status' => $status
    ];

    foreach ($data as $field => $value) {

        if (empty($value)) {
            $errors[$field] = ucfirst($field) . " is required.";
        }
    }

    if (!empty($price)) {
        $error = validate_salary($price);

        if ($error) {
            $errors['price'] = $error;
        }
    }

    if (!empty($stock)) {
        $error = validate_stock($stock);

        if ($error) {
            $errors['stock'] = $error;
        }
    }

    if (!empty($photo)) {
        $error = validate_photo($photo);

        if ($error) {
            $errors['photo'] = $error;
        }
    }

    return $errors;
}


?>
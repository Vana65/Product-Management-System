<?php
session_start();

include dirname(__FILE__, 2) . '/inc/header.php';
include dirname(__FILE__, 2) . '/core/functions.php';

check_authentication();
?>

<!-- Header -->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Your Order</h1>
            <p class="lead fw-normal text-white-50 mb-0">
                Check your order details
            </p>
        </div>
    </div>
</header>

<!-- Order Section -->

<!-- Section -->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">

        <!-- Customer Information -->
        <h4 class="mb-3">Customer Information</h4>

        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <td>John Doe</td>
            </tr>

            <tr>
                <th>Address</th>
                <td>Hurghada, Red Sea, Egypt</td>
            </tr>

            <tr>
                <th>Phone</th>
                <td>01012345678</td>
            </tr>
        </table>


        <!-- Order Details -->
        <h4 class="mb-3 mt-5">Order Details</h4>

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>1</td>
                    <td>Product #1</td>
                    <td>2</td>
                    <td>$25.00</td>
                    <td>$50.00</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Product #2</td>
                    <td>3</td>
                    <td>$40.00</td>
                    <td>$120.00</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Product #3</td>
                    <td>1</td>
                    <td>$35.00</td>
                    <td>$35.00</td>
                </tr>

            </tbody>

            <tfoot>
                <tr>
                    <th colspan="4" class="text-end">
                        Total Price
                    </th>

                    <th>
                        $205.00
                    </th>
                </tr>
            </tfoot>

        </table>


        <!-- Checkout -->
        <div class="text-end mt-3">

            <a href="checkout.php" class="btn btn-primary">
                Checkout Now
            </a>

        </div>

    </div>
</section>



<?php
include dirname(__FILE__, 2) . '/inc/footer.php';
?>


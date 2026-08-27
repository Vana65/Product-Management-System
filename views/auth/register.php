<?php
include dirname(__FILE__, 3) . '/inc/header.php';
?>
    <!-- Navigation-->

    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Register</h1>
                <p class="lead fw-normal text-white-50 mb-0">Please register to continue</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row">
                <div class="col-8 mx-auto">
                    <form action="" class="form border my-2 p-3">
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="" id="" class="form-control">
                            </div>
                             <div class="mb-3">
                                <label for="">Confirm Password</label>
                                <input type="password" name="" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Register" id="" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
<?php
include dirname(__FILE__, 3) . '/inc/footer.php';
?>
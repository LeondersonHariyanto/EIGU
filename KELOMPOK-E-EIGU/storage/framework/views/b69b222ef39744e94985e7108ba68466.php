<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('src/css/style.css')); ?>">

    <!-- Font Awesome for Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Sign Up</title>
</head>

<body>
    <section id="Login">
        <div class="container-fluid my-3">
            <div class="row align-items-center">
                <div class="col-md-5 px-5">
                    <img src="<?php echo e(asset('src/img/Logo.png')); ?>" class="mb-5 pb-5" alt="">
                    <h1 class="display-5">Create an account</h1>
                    <p class="text-sm px-2">Start your journey.</p>
                    <form action="/signup" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row row-cols-1 px-2 g-4 mb-4">
                            <div class="col">
                                <input type="email" name="email"
                                    class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> round py-4"
                                    placeholder="Email">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col">
                                <input type="password" name="password"
                                    class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> round py-4"
                                    placeholder="Password">
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col">
                                <input type="password" name="confirm"
                                    class="form-control <?php $__errorArgs = ['confirm'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> round py-4"
                                    placeholder="Confirmation Password">
                                <?php $__errorArgs = ['confirm'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn bg-utama text-white round fw-bold py-4 w-100">Create
                                    Account</button>
                            </div>
                        </div>
                    </form>
                    <div
                        style="width: 100%; height: 15px; border-bottom: 1px solid rgb(156, 156, 156); text-align: center">
                        <span style="font-size: 20px; background-color: #E8E8E8; padding: 10px 5px;">
                            OR
                            <!--Padding is optional-->
                        </span>
                    </div>
                    <div class="px-2 my-4 text-center">
                        <a href="#!" class="btn btn-light w-100 border py-3 round text-secondary">
                            <img src="<?php echo e(asset('src/img/search.png')); ?>" class="google" alt=""> Sign Up with
                            Google
                        </a>
                    </div>
                    <div class="text-center">
                        <p class="text-sm">Already have an account ? <a href="/login">Log in</a></p>
                    </div>
                </div>
                <div class="col-md-7 overflow-hidden">
                    <img src="<?php echo e(asset('src/img/blabluble.png')); ?>" class="img-fuild" alt="...">
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\EIGU\KELOMPOK-E-EIGU\resources\views/Sign_Up.blade.php ENDPATH**/ ?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopi Kenangan - Cart</title>
    <!-- <link rel="stylesheet" href="dist/output.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- login section start-->
    <section class="h-screen flex flex-wrap">
        <div class="container px-4 w-1/3 flex mx-auto items-center">
            <div name="login" class="bg-white rounded-xl overflow-hidden shadow-lg mx-auto border-black border-2">
                <div class="container mx-auto my-10 px-7">
                    <h3 class="text-black text-center mb-6 w-3/5  mx-auto">Silahkan mengisi no. telp dan password untuk
                        Log In</h3>
                    <form action="controller/auth.php" method="post">
                        <div class="w-full px-4 mb-8">
                            <label for="notelp" class="text-black font-bold">No Telpon</label>
                            <input type="text" id="notelp" name="notelp" class="w-full bg-[#F4F4F4] text-black p-3 rounded-md focus:outline-none focus:ring-[#BB2028] focus:ring-1 focus:border-[#BB2028]" required>
                        </div>
                        <div class="w-full px-4 mb-8">
                            <label for="pass" class="text-black font-bold">Password</label>
                            <input type="password" id="pass" name="password" class="w-full bg-[#F4F4F4] text-black p-3 rounded-md focus:outline-none focus:ring-[#BB2028] focus:ring-1 focus:border-[#BB2028]" required>
                        </div>
                        <div class="w-full px-4 mb-8">
                            <button type="submit" name="submit" value="submit" class="w-full py-2 bg-[#BB2028] rounded-xl text-white font-bold text-center hover:opacity-80">Log In</button>
                        </div>
                    </form>
                    <p class="text-center">Doesn't have account yet? <a href="register.php" class="text-red-600">Register here</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- login section end -->

    <!-- Footer Start -->
    <footer class="bg-black pt-24 pb-12">
        <div class="flex flex-wrap ">
            <div class="w-full px-4 mb-12">
                <h3 class="text-white text-center mb-4">Copyright @2022 <span class="font-bold">AIS 7 & 10 Team</span>
                    😊😊</h3>
                <h3 class="text-white text-center">This web is made for AIS Class final project</h3>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    <?php if (isset($_SESSION['msg'])) : ?>
        <?= $_SESSION['msg']; ?>
        <?php unset($_SESSION['msg']); ?>
    <?php endif; ?>
    <script src="dist/js/script.js"></script>
</body>

</html>
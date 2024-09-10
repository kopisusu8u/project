<?php
    $respon = "refresh";
    $waktu = 2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind in PHP</title>
    <meta http-equiv="<?=$respon?>" content="<?=$waktu?>"/>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-400 to-purple-500">
<div class="flex items-center justify-center min-h-screen">
    <div class="border border-gray-300 bg-white rounded-lg shadow-lg p-8 w-full max-w-md m-5 ">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">REGISTER</h1>
        <p class="text-center text-gray-500 mb-6">Please fill in your details to register</p>
        <form action="" method="post">
            <div class="mb-5">
                <label class="block text-sm font-semibold text-gray-700 mb-2" for="username">Username</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" type="text" id="username" placeholder="Enter Username">
            </div>
            <div class="mb-6">
                <label class="block text-sm font-semibold text-gray-700 mb-2" for="password">Password</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" type="password" id="password" placeholder="Enter Password">
            </div>
            <div class="mb-6">
                <label class="block text-sm font-semibold text-gray-700 mb-2" for="password">Confirm Password</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" type="password" id="password" placeholder="Enter Password">
            </div>
            <div class="mt-4">
                <button class="w-full bg-purple-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-purple-700 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300">Login</button>
            </div>
            <p class="text-center text-gray-600 mt-6">Don't have an account? <a class="text-purple-500 hover:text-purple-700" href="login.php">Login</a></p>
        </form>
    </div>
</div>
</body>
</html>

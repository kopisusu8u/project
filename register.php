<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind in PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-400 to-purple-500 h-screen">
<div class="flex items-center justify-center">
    <div class="border border-gray-300 bg-white rounded-lg shadow-lg p-8 w-full max-w-md m-5">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">REGISTER</h1>
        <p class="text-center text-gray-500 mb-6">Please fill in your details to register</p>
        <form action="" method="post" id="registerForm">
            <div class="mb-5 relative">
                <label class="block text-sm font-semibold text-gray-700 mb-2" for="username">Username</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" type="text" id="username" placeholder="Enter Username">
                <p id="usernameError" class="text-red-500 text-sm mt-1"></p>
            </div>
            <div class="mb-6 relative">
                <label class="block text-sm font-semibold text-gray-700 mb-2" for="password">Password</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" type="password" id="password" placeholder="Enter Password">
                <p id="passwordError" class="text-red-500 text-sm mt-1"></p>
            </div>
            <div class="mb-6 relative">
                <label class="block text-sm font-semibold text-gray-700 mb-2" for="passwordConfirm">Confirm Password</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" type="password" id="passwordConfirm" placeholder="Enter Password">
                <p id="passwordConfirmError" class="text-red-500 text-sm mt-1"></p>
            </div>
            <div class="mt-4">
                <button class="w-full bg-purple-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-purple-700 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300" id="btnRegister">
                    Register
                </button>
            </div>
            <p class="text-center text-gray-600 mt-6">Already have an account? <a class="text-purple-500 hover:text-purple-700" href="login.php">Login</a></p>
        </form>
    </div>
</div>
<script>
    const form = document.getElementById("registerForm");
    const username = document.getElementById("username");
    const password = document.getElementById("password");
    const passwordConfirm = document.getElementById("passwordConfirm");
    
    const usernameError = document.getElementById("usernameError");
    const passwordError = document.getElementById("passwordError");
    const passwordConfirmError = document.getElementById("passwordConfirmError");
    
    let isFormValid = true 
    username.addEventListener("input", () => {
            usernameError.innerHTML = "";
            if (username.value.trim() === "" ) {
                usernameError.innerHTML = "Username is required";
                isFormValid = false
            }else if (username.value.trim().length < 3) {
                usernameError.innerHTML = "Username must be at least 3 characters";
                isFormValid = false
            }
    })
    
    password.addEventListener("input", () => {
        passwordError.innerHTML = "";
        if (password.value.trim() === "") {
            passwordError.innerHTML = "Password is required";
            isFormValid = false
        }else if (password.value.trim().length <= 8) {
            passwordError.innerHTML = "Password must be at least 8 characters";
            isFormValid = false
        }
    })
    
    passwordConfirm.addEventListener("input", () => {
        passwordConfirmError.innerHTML = "";
        if (password.value.trim() !== passwordConfirm.value.trim()) {
            passwordConfirmError.innerHTML = "Passwords do not match";
            isFormValid = false
        }
    })
    
    form.addEventListener("submit", (event) => {
        event.preventDefault();
        isFormValid = true
        if (isFormValid == true) {
            form.submit();
            window.location.href = "login.php";
            console.log("Form submitted");
        }
    })

</script>
</body>
</html>
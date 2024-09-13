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
    <div class="border border-gray-300 bg-white rounded-lg shadow-lg p-8 w-full max-w-md m-5 transform transition duration-969 hover:scale-105">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">Login</h1>
        <p class="text-center text-gray-500 mb-6">Please fill in your details to log in</p>
        <form action="App.php" method="post" id="loginForm">
            <div class="mb-5">
                <label class="block text-sm font-semibold text-gray-700 mb-2" for="username">Username</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" type="text" id="usernameLogin" placeholder="Enter Username">
                <p id="usernameError"></p>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-semibold text-gray-700 mb-2" for="password">Password</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" type="password" id="passwordLogin" placeholder="Enter Password">
                <p id="passwordError"></p>
            </div>
            <div class="mt-4">
                <button class="w-full bg-purple-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-purple-700 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300" id="login">Login</button>
            </div>
            <p class="text-center text-gray-600 mt-6">Don't have an account? <a class="text-purple-500 hover:text-purple-700" href="register.php">Register</a></p>
        </form>
    </div>
</div>
<script>
    const username = document.getElementById('usernameLogin')
    const password = document.getElementById('passwordLogin')
    const usernameError = document.getElementById('usernameError')
    const passwordError = document.getElementById('passwordError')
    const loginForm = document.getElementById('loginForm')
    const login = document.getElementById('login')

    function usernameCheck() {
        usernameError.innerHTML = "";
        if (username.value.trim() === "" ) {
            usernameError.innerHTML = "Username is required";
            return false;
        } else if (username.value.trim().length < 3) {
            usernameError.innerHTML = "Username must be at least 3 characters";
            return false;
        }
        return true;
    }

    function passwordCheck() {
        passwordError.innerHTML = "";
        if (password.value.trim() === "") {
            passwordError.innerHTML = "Password is required";
            return false;
        } else if (password.value.trim().length < 8) {
            passwordError.innerHTML = "Password must be at least 8 characters";
            return false;
        }
        return true;
    }

    // Add event listeners for input fields
    username.addEventListener("input", usernameCheck)
    password.addEventListener("input", passwordCheck)

    loginForm.addEventListener('submit', (event) => {
        // Reset isFormValid to true before checking
        let isFormValid = true;

        // Run validations
        if (!usernameCheck()) isFormValid = false;
        if (!passwordCheck()) isFormValid = false;

        // Prevent form submission if validation fails
        if (!isFormValid) {
            event.preventDefault();
            alert('Login Failed');
        } else {
            alert('Login Successful');
        }
    });
</script>

</body>
</html>

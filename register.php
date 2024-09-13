<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind in PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="flex justify-center items-center min-h-screen bg-gradient-to-br from-blue-500 to-purple-600">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
        <h1 class="text-3xl md:text-4xl font-extrabold text-center text-gray-800 mb-4 md:mb-6">Create an Account</h1>
        <p class="text-center text-gray-500 mb-4 md:mb-6">Please fill in your details to register</p>
        <form action="login.php" method="post" id="registerForm" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700" for="username">Username</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-purple-500 focus:outline-none" 
                type="text" id="username" placeholder="Enter Username">
                <p id="usernameError" class="text-xs text-red-500 mt-1"></p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700" for="password">Password</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-purple-500 focus:outline-none" 
                type="password" id="password" placeholder="Enter Password">
                <p id="passwordError" class="text-xs text-red-500 mt-1"></p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700" for="confirmPassword">Confirm Password</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-purple-500 focus:outline-none" 
                type="password" id="confirmPassword" placeholder="Confirm Password">
                <p id="confirmPasswordError" class="text-xs text-red-500 mt-1"></p>
            </div>
            <div>
                <button class="w-full py-2 px-4 bg-purple-600 text-white font-semibold rounded-md hover:bg-purple-700 focus:ring-2 focus:ring-purple-500 transition-all" 
                        type="submit">Register
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
    const passwordConfirm = document.getElementById("confirmPassword"); // Perbaikan ID dari passwordConfirm ke confirmPassword
    
    const usernameError = document.getElementById("usernameError");
    const passwordError = document.getElementById("passwordError");
    const passwordConfirmError = document.getElementById("confirmPasswordError");
    
    let isFormValid = true;
    
    function checkUsername() {
        usernameError.innerHTML = "";
        if (username.value.trim() === "" ) {
            usernameError.innerHTML = "Username is required";
            isFormValid = false;
        } else if (username.value.trim().length < 3) {
            usernameError.innerHTML = "Username must be at least 3 characters";
            isFormValid = false;
        }
    }
    
    function checkPassword() {
        passwordError.innerHTML = "";
        if (password.value.trim() === "") {
            passwordError.innerHTML = "Password is required";
            isFormValid = false;
        } else if (password.value.trim().length < 8) { // Password harus lebih dari 8 karakter
            passwordError.innerHTML = "Password must be at least 8 characters";
            isFormValid = false;
        }
    }
    
    function checkPasswordConfirm() {
        passwordConfirmError.innerHTML = "";
        if (passwordConfirm.value.trim() === "") {
            passwordConfirmError.innerHTML = "Confirm Password is required";
            isFormValid = false;
        } else if (password.value.trim() !== passwordConfirm.value.trim()) {
            passwordConfirmError.innerHTML = "Passwords do not match";
            isFormValid = false;
        }
    }

    // Tambahkan event listener pada input fields
    username.addEventListener("input", checkUsername);
    password.addEventListener("input", checkPassword);
    passwordConfirm.addEventListener("input", checkPasswordConfirm);
    
    form.addEventListener("submit", (event) => {
        // Reset validasi sebelum submit
        isFormValid = true;
        
        // Cek semua validasi
        checkPasswordConfirm();
        checkPassword();
        checkUsername();
        
        if (isFormValid) {
            form.submit();
            alert("Form submitted");
        } else {
            event.preventDefault();
            console.log("Form not submitted");
            alert("Form not submitted");
        }
    });
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> <!-- Font Awesome -->
</head>
<body class="flex items-center justify-center h-screen" style="background-color: #e9f6f9;">
  <!-- Close Icon (Now Fixed) -->
  <a href="{{ url('/') }}" class="absolute top-4 right-4 text-black hover:text-gray-800 text-5xl">
        <i class="fa-solid fa-xmark"></i> <!-- Font Awesome Close Icon -->
        </a>
    <div class="w-3/4 bg-white rounded-lg shadow-lg flex overflow-hidden relative">
      

        <!-- Left Side: Login Form -->
        <div class="w-1/2 p-8">
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Login</h2>
            <p class="text-center text-gray-600 text-sm">
                    Don't have an account? <a href="{{ route('user.register') }}" class="text-blue-500 font-bold">Sign Up</a>
                </p>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" name="password" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
                </div>
                <div class="mb-6 flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="mr-2">
                        <span class="text-gray-600 text-sm">Remember Me</span>
                    </label>
                    <a href="#" class="text-blue-500 text-sm font-bold">Forgot Password?</a>
                </div>
                <div class="mb-6">
                <button type="submit" class="w-1/4 bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600">Login</button>

                </div>
            
            </form>
        </div>

        <!-- Right Side: Image Display -->
        <div class="w-1/2">
            <img src="{{ asset('frontend/images/login.jpg') }}" alt="Login Image" class="w-full h-full object-cover">
        </div>
    </div>

</body>
</html>

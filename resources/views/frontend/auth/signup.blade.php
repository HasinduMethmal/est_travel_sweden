<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> <!-- Font Awesome -->
</head>
<body class="flex items-center justify-center h-screen" style="background-color: #e9f6f9;">
 <!-- Close Icon (Now Fixed) -->
 <a href="{{ url('/') }}" class="absolute top-4 right-4 text-black hover:text-gray-800 text-5xl">
        <i class="fa-solid fa-xmark"></i> <!-- Font Awesome Close Icon -->
        </a>
    <div class="w-3/4 bg-white rounded-lg shadow-lg flex overflow-hidden">
        <!-- Left Side: Signup Form -->
        <div class="w-1/2 p-8">
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Sign Up</h2>
            <p class="text-center text-gray-600 text-sm">
                    Already have an account? <a href="" class="text-blue-500 font-bold">Login</a>
                </p>
            <form action="{{ route('user.signup') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                    <input
                      type="text"
                      class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                      id="username"
                      name="name"
                      placeholder="Enter your username"
                      required
                    />
                  </div>
                  <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input
                      type="email"
                      class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                      id="email"
                      name="email"
                      placeholder="Enter your email"
                      required
                    />
                  </div>
                  <div class="mb-4 form-password-toggle">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                    <input
                      type="password"
                      id="password"
                      class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      minlength="5"
                      required
                    />
                  </div>
                  <div class="mb-4 form-password-toggle">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">Confirm Password</label>
                    <input
                      type="password"
                      id="password_confirmation"
                      class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                      name="password_confirmation"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      minlength="5"
                      required
                    />
                  </div>
                  <div class="mb-6">
                    <button type="submit" class="w-1/4 bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600">Sign Up</button>
                </div>
            </form>
        </div>

        <!-- Right Side: Image Display -->
        <div class="w-1/2">
            <img src="frontend/images/register.jpg" alt="Signup Image" class="w-full h-full object-cover">
        </div>
    </div>

</body>
</html>

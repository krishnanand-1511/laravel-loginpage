<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Login</h2>
        
        <!-- Laravel Validation Errors -->
        @if ($errors->any())
        <div class="bg-red-500 text-white p-3 rounded-md mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Login Form -->
        <form  method="POST"> 
            {{-- action="{{ route('login') }}" --}}
            @csrf

            <!-- Email Field -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email" value="{{ old('email') }}" required>
            </div>

            <!-- Password Field -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password" required>
            </div>

            <!-- Remember Me Checkbox -->
            <div class="flex items-center mb-4">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember" class="text-sm text-gray-600">Remember Me</label>
            </div>

            <!-- Login Button -->
            <div class="flex justify-between items-center">
                <button type="submit" class="w-full p-3 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none">Login</button>
            </div>
        </form>

        <!-- Forgot Password Link -->
        <div class="text-center mt-4">
            <a  class="text-sm text-blue-500 hover:underline">Forgot your password?</a> 
            {{-- <!--href="{{ route('password.request') }}"--> --}}
        </div>

        <!-- Register Link -->
        <div class="text-center mt-4">
            <p class="text-sm text-gray-600">Don't have an account? 
                {{-- <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Register here</a> --}}
            </p>
        </div>
    </div>

</body>

</html>

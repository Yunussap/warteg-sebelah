<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>warteg sebelah - login</title>
    <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-to-b from-gray-700 via-gray-900 to-black min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md">
        <div class="bg-white shadow rounded-lg p-8">
            <h1 class="text-2xl font-semibold text-gray-700 text-center mb-6">Welcome Back!</h1>
            <form action="{{ route('login.aksi') }}" method="POST" class="space-y-6">
                @csrf
                @if ($errors->any())
                <div class="bg-red-100 text-red-700 rounded p-4 space-y-2">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div>
                    <label for="exampleInputEmail" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input name="email" type="email" id="exampleInputEmail" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500" placeholder="Enter Email Address...">
                </div>
                <div>
                    <label for="exampleInputPassword" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input name="password" type="password" id="exampleInputPassword" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500" placeholder="Password">
                </div>
                <div class="flex items-center">
                    <input name="remember" type="checkbox" id="customCheck" class="rounded text-blue-500 focus:ring-blue-500 focus:outline-none">
                    <label for="customCheck" class="ml-2 text-sm text-gray-700">Remember Me</label>
                </div>
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-500">Login</button>
            </form>
            <hr class="my-6">
            <div class="text-center">
                <a href="{{ route('register') }}" class="text-sm text-blue-500 hover:underline">Create an Account!</a>
            </div>
            <div class="grid justify-center items-center h-full bg-gray-800 mt-8 w-full rounded-lg content-center content-around">
  <img src="http://localhost:8000/storage/images/static/logo.png" alt="Logo" class="w-32 mb-4 mt-4">
</div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

</body>

</html>

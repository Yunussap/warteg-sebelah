<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>warteg sebelah - register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body class="bg-gradient-to-b from-gray-700 via-gray-900 to-black min-h-screen flex items-center justify-center">
    <div class="container mx-auto flex justify-center items-center h-screen">
      <div class="bg-white shadow-lg rounded-lg p-8 w-full md:w-3/4 lg:w-1/2 xl:w-1/3">
        <h1 class="text-center text-gray-900 text-2xl font-bold mb-4">Create an Account!</h1>
        
        <form action="{{ route('register.simpan') }}" method="POST">
          @csrf
          <div class="mb-4">
            <label for="exampleInputName" class="block text-gray-700 font-bold mb-2">Name</label>
            <input name="nama" type="text" class="w-full border border-gray-400 p-2 rounded @error('nama') border-red-500 @enderror" id="exampleInputName" placeholder="Name">
            @error('nama')
              <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-4">
            <label for="exampleInputEmail" class="block text-gray-700 font-bold mb-2">Email Address</label>
            <input name="email" type="email" class="w-full border border-gray-400 p-2 rounded @error('email') border-red-500 @enderror" id="exampleInputEmail" placeholder="Email Address">
            @error('email')
              <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-4 flex flex-col md:flex-row md:space-x-4">
            <div class="">
              <label for="exampleInputPassword" class="block text-gray-700 font-bold mb-2">Password</label>
              <input name="password" type="password" class="w-full border border-gray-400 p-2 rounded @error('password') border-red-500 @enderror" id="exampleInputPassword" placeholder="Password">
              @error('password')
                <span class="text-red-500 text-xs">{{ $message }}</span>
              @enderror
            </div>
            <div class="">
              <label for="exampleRepeatPassword" class="block text-gray-700 font-bold mb-2">Repeat Password</label>
              <input name="password_confirmation" type="password" class="@error('password_confirmation') border-red-500 @enderror w-full border border-gray-400 p-2 rounded" id="exampleRepeatPassword" placeholder="Repeat Password">
              @error('password_confirmation')
                <span class="text-red-500 text-xs">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <button type='submit' class='w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded'>Register Account</button>
        </form>
        <hr class='my-4'>
        <div class='text-center'>
          <a href="{{ route('login') }}" class='text-sm text-blue-600 hover:text-blue:800'>Already have an account? Login!</a>
        </div>
        <div class="grid justify-center items-center h-full bg-gray-800 mt-8 w-full rounded-lg content-center content-around">
  <img src="http://localhost:8000/storage/images/static/logo.png" alt="Logo" class="w-32 mb-4 mt-4">
</div>
      </div>
    </div>
  </body>
</html>

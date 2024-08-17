<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css') 
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen" style="background-image: url('{{ asset('images/vat.jpg') }}');background-size: cover; background-position: center;">

  <div class="w-full max-w-sm bg-white p-8 rounded-lg shadow-lg">
      <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
      <form>
          <div class="mb-4">
              <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
              <input type="text" id="username" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter username">
          </div>
          <div class="mb-6">
              <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
              <input type="password" id="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter password">
          </div>
          <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Login
          </button>
          <div class="mt-4 text-center">
              <a href="{{ route('register')}}" class="text-sm text-indigo-600 hover:text-indigo-700">Forgot your password?</a>
          </div>
      </form>
  </div>

</body>
</html>
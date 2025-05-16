<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Welcome</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100">

  <div class="flex space-x-6">
    <a href="{{ route ( 'login' ) }}" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded">Login</a>
    <a href="{{ route ( 'register' ) }}" class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded">Register</a>
  </div>

</body>
</html>

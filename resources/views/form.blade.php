<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FORM - Aafiyat Recruitment Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    <body class="antialiased">
        <div class="relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="max-w-6xl mx-auto flex justify-between sm:px-6 lg:px-8 pt-4">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <img src="img/logo.png" alt="" style="width: 300px; height: auto;">
                </div>
                <div class="px-6 py-4 sm:block" style="top: 30px; right: 114px;">
                    <a href="{{ url('/') }}" class="text-sm {{ Route::currentRouteName() === 'home' ? 'text-gray-700 dark:text-gray-300' : 'text-gray-500 dark:text-gray-500' }}" style="font-weight: bold;">HOME</a>
                    <a href="{{ route('form') }}" class="ml-4 text-sm {{ Route::currentRouteName() === 'form' ? 'text-gray-700 dark:text-gray-300' : 'text-gray-500 dark:text-gray-500' }}" style="font-weight: bold;">FORM</a>
                    <a href="{{ route('data') }}" class="ml-4 text-sm {{ Route::currentRouteName() === 'data' ? 'text-gray-700 dark:text-gray-300' : 'text-gray-500 dark:text-gray-500' }}" style="font-weight: bold;">DATA</a>
                </div>
            </div>

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1">
                        <div class="p-12">
                            <h2 class="text-gray-600 dark:text-gray-400 text-2xl font-bold mb-4">USER FORM PAGE</h2>
                            <p class="text-gray-600 dark:text-gray-400 mb-8">
                            This page is used to collect user data. Please fill in the form below and click on the SAVE button to record the data.
                            </p>

                            <form method="post" action="/your-form-handler">
                                <div class="mb-4">
                                    <label for="name" class="block text-gray-500 dark:text-gray-500 mb-2">Name</label>
                                    <input type="text" id="name" name="name" class="w-full p-2 text-gray-600 dark:text-gray-400 border border-gray-400 dark:border-gray-600 rounded" required>
                                </div>

                                <div class="mb-4">
                                    <label for="email" class="block text-gray-500 dark:text-gray-500 mb-2">Email</label>
                                    <input type="email" id="email" name="email" class="w-full p-2 text-gray-600 dark:text-gray-400 border border-gray-400 dark:border-gray-600 rounded" required>
                                </div>

                                <div class="mb-4">
                                    <label for="password" class="block text-gray-500 dark:text-gray-500 mb-2">Password</label>
                                    <input type="password" id="password" name="password" class="w-full p-2 text-gray-600 dark:text-gray-400 border border-gray-400 dark:border-gray-600 rounded" required>
                                </div>

                                <div class="mb-4">
                                    <label for="gender" class="block text-gray-500 dark:text-gray-500 mb-2">Gender</label>
                                    <select id="gender" name="gender" class="w-full p-2 text-gray-600 dark:text-gray-400 border border-gray-400 dark:border-gray-600 rounded" required>
                                    <option value="">-- Select Gender --</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="birthday" class="block text-gray-500 dark:text-gray-500 mb-2">Birthday</label>
                                    <input type="date" id="birthday" name="birthday" class="w-full p-2 text-gray-600 dark:text-gray-400 border border-gray-400 dark:border-gray-600 rounded" required>
                                </div>

                                <div class="mb-4">
                                    <label class="inline-flex items-center">
                                        <span class="ml-2 text-gray-600 dark:text-gray-400 mr-2">Active</span>
                                        <input type="checkbox" name="status" class="form-checkbox">
                                    </label>
                                </div>

                                <div class="mt-8 text-right">
                                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-600">
                                    SAVE
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">

                        </div>
                    </div>
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

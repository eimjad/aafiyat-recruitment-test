<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HOME - Aafiyat Recruitment Test</title>

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
                            <h2 class="text-gray-600 dark:text-gray-400 text-2xl font-bold mb-4">AAFIYAT RECRUITMENT TEST</h2>
                            <p class="text-gray-600 dark:text-gray-400 mb-2">This system is developed using Laravel v.8 framework on PHP v.8.1 and MySQL database as per the requirement of <a href="https://bitbucket.org/aafiyat2u/assessment_laravel/src/master/README.md" class="!text-grey-200">AAFIYAT Laravel Assessment. To get started, please follow the steps below: </a></p>
                            <p class="ml-4 text-gray-600 dark:text-gray-400 mb-2">1. Create a MySQL database on your machine to run the system.</p>
                            <p class="ml-4 text-gray-600 dark:text-gray-400 mb-2">2. Update "DB_DATABASE" value on .env file to match the database name you created earlier AND make sure other DB connection details are correct. The .env file can be found inside the system's root directory. </p>
                            <p class="ml-4 text-gray-600 dark:text-gray-400 mb-2">3. Run the command line "php artisan migrate:fresh --seed" OR manually update your database using queries. The SQL queries resides in an SQL file which can be found inside "the system's root directory / public / sql / aafiyat-recruitment-test.sql".</p>
                            <p class="text-gray-500 dark:text-gray-500 mt-8"><a href="https://www.linkedin.com/in/azriazlan19/" class="" title=" LinkedIn Profile" target="_blank">Developed By Khairil Azri Azlan (920105-02-6015)</a></p>
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

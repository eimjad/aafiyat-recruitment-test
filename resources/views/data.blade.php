<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DATA - Aafiyat Recruitment Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('vendors/font-awesome-4.7.0/css/font-awesome.min.css') }}">

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
                            <h2 class="text-gray-600 dark:text-gray-400 text-2xl font-bold mb-4">USER DATA PAGE</h2>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">
                            This page is used to display user data. The table below summarizes the data. Click on the button provided to DELETE or UPDATE the data.
                            </p>

                            <div class="overflow-x-auto">
                                <table class="min-w-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded shadow">
                                    <thead>
                                    <tr class="bg-gray-200 dark:bg-gray-700 text-left text-gray-700 dark:text-gray-300">
                                        <th class="p-3 border-b text-sm">ID</th>
                                        <th class="p-3 border-b text-sm">Name</th>
                                        <th class="p-3 border-b text-sm">Email</th>
                                        <th class="p-3 border-b text-sm">Gender</th>
                                        <th class="p-3 border-b text-sm">Birthday</th>
                                        <th class="p-3 border-b text-sm">Created At</th>
                                        <th class="p-3 border-b text-sm">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <!-- display all data -->
                                        <?php foreach ($users as $user): ?>
                                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-800 dark:text-gray-200 border-b border-gray-400 dark:border-gray-600 text-sm">
                                            <td class="p-3"><?= $user->id ?></td>
                                            <td class="p-3"><?= htmlspecialchars($user->name) ?></td>
                                            <td class="p-3"><?= htmlspecialchars($user->email) ?></td>
                                            <td class="p-3"><?= $user->gender ?></td>
                                            <td class="p-3"><?= date('d/m/Y', strtotime($user->birthday)) ?></td>
                                            <td class="p-3"><?= date('d M Y, h:i A', strtotime($user->created_at)) ?></td>
                                            <td class="p-3 flex gap-2">
                                                <a href="/user/<?= $user->id ?>" class="bg-sky-500 text-white px-3 py-1 rounded hover:bg-sky-600 text-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <form method="post" action="/users/delete/<?= $user->id ?>" onsubmit="return confirm('Are you sure you want to delete this user?')" class="inline">
                                                    <input type="hidden" name="soft_delete" value="1">
                                                    <button type="submit" class="bg-blue-700 text-white px-3 py-1 rounded hover:bg-blue-800 hover:cursor-pointer text-sm" title="Delete User"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                </form>
                                            </td>
                                            </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
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

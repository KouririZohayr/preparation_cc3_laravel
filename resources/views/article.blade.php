<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-gray-300 ">

<div class="container mx-auto mt-20 relative overflow-x-auto shadow-md sm:rounded-lg">
    <a href="/article/create"  class="text-sky-700 bg-sky-700   focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">add Post</a>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    id article
                </th>
                <th scope="col" class="px-6 py-3">
                    title
                </th>
                <th scope="col" class="px-6 py-3">
                    contenu
                </th>
                <th scope="col" class="px-6 py-3">
                    user_id
                </th>
                <th scope="col" class="px-6 py-3">
                    created_at
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach($articles as $article)

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $article->id }}
                </th>
                <td class="px-6 py-4">
                    {{ $article->title }}
                </td>
                <td class="px-6 py-4">
                    {{ $article->contenu }}
                </td>
                <td class="px-6 py-4">
                    {{ $article->user_id }}
                </td>
                <td class="px-6 py-4">
                    {{ $article->created_at }}
                </td>
                <td class="px-6 py-4">

                    <a href="/Post/{{ $article->id }}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>

                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

</body>
</html>

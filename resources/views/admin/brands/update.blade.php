<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Brand</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 py-20">
    <div class="max-w-2xl mx-auto bg-white p-8 shadow-md rounded-md">
        <h2 class="text-2xl font-semibold text-gray-700 text-center">Create Brand</h2>

        <form class="mt-6" action="{{ route('brands.store',$brand->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="space-y-6">
                <!-- Brand Name -->
                <div>
                    <label class="text-sm font-medium text-gray-700">Brand Name</label>
                    <input type="text" name="name" value="{{ $brands->name }}" class="mt-1 w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter brand name">
                </div>

                <!-- Brand Description -->
                <div>
                    <label class="text-sm font-medium text-gray-700">logo</label>
                    <input type="file" name="logo"></div>

                <!-- Create Button -->
                <div>
                    <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Create Brand
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

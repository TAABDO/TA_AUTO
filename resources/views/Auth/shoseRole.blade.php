<!DOCTYPE html>
<html lang="en">
<head>
    @extends('includes.head')
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-blue-500 text-white py-4 text-center font-bold rounded-t-lg">
                    Select User Role
                </div>

                <div class="p-6">
                    <div class="flex justify-center mb-4">
                        <a href="{{ route('assignRole', ['role' => 3]) }}" class="btn-primary">
                            <i class="fas fa-user-graduate text-4xl"></i>
                            <h5 class="mt-3 text-xl font-bold">Client</h5>
                        </a>
                    </div>
                    <div class="flex justify-center mb-4">
                        <a href="{{ route('assignRole', ['role' => 2]) }}" class="btn-primary">
                            <i class="fas fa-chalkboard-teacher text-4xl"></i>
                            <h5 class="mt-3 text-xl font-bold">Announcer</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

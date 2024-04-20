<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Reservations</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Your Reservations</h1>

        @foreach ($reservations as $reservation)
            <div class="mt-5 bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Reservation #
                        {{--  {{ $reservation->id }}  --}}
                    </h3>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <!-- Add more details about the reservation here -->
                        <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Pickup Date
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $reservations->pickupDate }}
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>

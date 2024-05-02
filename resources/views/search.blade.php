@foreach ($announcements as $announcement)
    <div class="w-full sm:w-auto md:w-auto lg:w-auto">
        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                <div class="relative">
                    <div class="car__item__pic__slider owl-carousel">
                        <img src="{{ $announcement->getFirstMediaUrl('images') }}" class="w-full h-44" alt="Car 1">
                    </div>
                    @if ($announcement->type === 'rentel')
                    <span id="car-option" style="background-color: rgb(245, 23, 23)"
                    class="car-option absolute top-0 right-0 text-white py-1 px-2 rounded-bl-lg">
                    For {{ $announcement->type }}
                    </span>
                    @else
                    <span id="car-option" style="background-color: rgb(44, 198, 100)"
                    class="car-option absolute top-0 right-0 text-white py-1 px-2 rounded-bl-lg">
                    For {{ $announcement->type }}
                    </span>
                    @endif

                </div>
                <div class="p-4">
                    <div class="label-date bg-gray-100 Text-gray-700 py-1 px-2 w-16 rounded-bl-lg shadow-lg">
                        <span>
                            {{ $announcement->car->year }}
                        </span>
                    </div>
                    <h5 class="text-xl font-semibold mt-2"><a href="#" class="text-gray-800 hover:text-red-500">
                            {{ $announcement->car->model }}
                        </a></h5>
                    <ul class="text-gray-600 mt-2 flex flex-row justify-evenly">
                        <li><span>{{ $announcement->car->km }}</span> mi | </li>
                        <li>{{ $announcement->car->transmission }} | </li>
                        <li><span>{{ $announcement->car->engine_capacity }}</span> hp |</li>
                    </ul>
                </div>
                <div class="car__item__price mt-4 p-2 bg-gray-100 border-top flex flex-row gap-5">
                    <h6 class="text-lg font-semibold bg-green-300 p-2 rounded-full shadow-lg">
                        {{ $announcement->situation }}
                    </h6>
                    @if ($announcement->type === 'rentel')
                        <h6 class="text-lg font-semibold p-2">${{ $announcement->price }}<span
                                class="text-sm">/Day</span>
                        </h6>
                    @else
                        <h6 class="text-lg font-semibold p-2">${{ $announcement->price }}<span class="text-sm"></span>
                        </h6>
                    @endif

                </div>
                <div class="p-4">
                    <a href="{{ route('car.details', $announcement->id) }}"
                        class="text-white bg-blue-700 w-10 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Details</a>
                </div>
            </div>
        </div>
    </div>
@endforeach

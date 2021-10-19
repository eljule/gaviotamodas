<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">

        </h2>
        @livewire('design-products', ['design' => $designs->first()])

    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
    <script>
        new Glider(document.querySelector('.glider'), {
            slidesToShow: 2,
            slidesToScroll: 2,
            draggable: true,
            dots: '.dots',
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            },
            responsive: [
                    {
                        breakpoint: 640,
                        settings: {
                            slidesToScroll: 3,
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToScroll: 3,
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToScroll: 4,
                            slidesToShow: 4,
                        }
                    },
                    {
                        breakpoint: 1280,
                        settings: {
                            slidesToScroll: 6,
                            slidesToShow: 6,
                        }
                    }

                ]
        });
    </script>
</x-app-layout>

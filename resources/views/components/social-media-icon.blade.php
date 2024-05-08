@props(['imageUrl', 'name', 'href' => '#'])
<a class="flex aspect-square h-[65px] content-center rounded-2xl bg-white p-4 sm:h-[90px] md:h-16 xl:h-24"
    href="{{ $href }}" target="_blank"><img src="{{ $imageUrl }}" alt="{{ $name }}" />
</a>

@props(['imageUrl', 'name', 'href' => '#'])
<a class="flex aspect-square h-20 content-center rounded-2xl bg-white p-4 sm:h-[90px] md:h-16 xl:h-20 hover:bg-snapchat-yellow hover:shadow-snapchat-yellow hover:shadow-lg
transition ease-in-out delay-150 "
   href="{{ $href }}" target="_blank"><img src="{{ $imageUrl }}" alt="{{ $name }}"/>
</a>

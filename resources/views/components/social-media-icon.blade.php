@props(['imageUrl', 'name','link' => '#'])
<a href="{{ $link }}" target="_blank" class="xl:h-24 md:h-16 sm:h-[90px] h-[70px] bg-white rounded-2xl flex content-center p-4 aspect-square"><img
        src="{{ $imageUrl }}" alt="{{ $name }}">
</a>

<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Artikel --}}

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-500">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tighter font-bold text-gray-800 hover:text-gray-950">
                    {{ $post['title'] }}</h2>
            </a>
            <div class="text-base text-gray-600 ">
                <a href="#">{{ $post['author'] }}</a> | 29 Agustus 2024
            </div>
            <p class="my-4 font-light ">{{ Str::limit($post['body'], 100) }}</p>
            <a href="/posts/{{ $post['slug'] }}"
                class="font-medium text-blue-500 hover:underline hover:underline-offset-2">Read More &raquo;</a>
        </article>
    @endforeach

</x-layout>

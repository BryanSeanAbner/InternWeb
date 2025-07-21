<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="py-4 mx-auto max-w-screen-xl lg:py-4 lg:px-0">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts as $post)
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md">
                    <div style="width:100%;height:120px;background:#f3f4f6;display:flex;align-items:center;justify-content:center;color:#888;font-size:15px;margin-bottom:18px;border-radius:12px;overflow:hidden;">
                        @if($post->photo)
                            <img src="{{ asset('storage/' . $post->photo) }}" alt="{{ $post->title }}" style="width:100%;height:100%;object-fit:cover;">
                        @else
                            IMAGE
                        @endif
                    </div>
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <a href="/categories/{{ $post->category->slug }}">
                            <span class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                                {{ $post->category->name }}
                            </span>
                        </a>
                        <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                    <a href="/posts/{{ $post->slug }}" class="hover:underline">
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            {{ $post->title }}
                        </h2>
                    </a>
                    <p class="mb-5 font-light text-gray-500">
                        {{ Str::limit($post->body, 150) }}
                    </p>
                    <div class="flex justify-between items-center">
                        <a href="/authors/{{ $post->author->username }}">
                            <div class="flex items-center space-x-4">
                                <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="{{ $post->author->name }}" />
                                <span class="font-medium text-s">
                                    {{ $post->author->name }}
                                </span>
                            </div>
                        </a>
                        <a href="#" onclick="showPostModal('{{ $post->slug }}'); return false;" class="inline-flex items-center font-medium text-primary-600 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</x-layout>

{{-- Modal dan Script --}}
<div id="postModalOverlay" style="display:none;position:fixed;z-index:9999;top:0;left:0;width:100vw;height:100vh;background:rgba(0,0,0,0.5);">
    <div id="postModalContent" style="background:#fff;margin:5% auto;padding:0;max-width:700px;border-radius:12px;position:relative;box-shadow:0 8px 40px rgba(0,0,0,0.2);">
        <span onclick="closePostModal()" style="position:absolute;top:10px;right:20px;cursor:pointer;font-size:28px;font-weight:bold;">&times;</span>
        <div id="postModalBody"></div>
    </div>
</div>
<script>
function showPostModal(slug) {
    fetch('/posts/' + slug + '/modal')
        .then(res => res.text())
        .then(html => {
            document.getElementById('postModalBody').innerHTML = html;
            document.getElementById('postModalOverlay').style.display = 'block';
        });
}
function closePostModal() {
    document.getElementById('postModalOverlay').style.display = 'none';
    document.getElementById('postModalBody').innerHTML = '';
}
</script>

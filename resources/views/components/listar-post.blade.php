<div>
    {{-- @forelse ($posts as $post )
        
    @empty
        <p>No hay posts</p>
    @endforelse --}}

    @if ( $posts->count() )
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

            @foreach ($posts as $post)

                <div>
                    <a href="{{ route('posts.show', ['post' => $post,'user' =>$post->user]) }}">
                        <img src="{{ asset('uploads').'/'.$post->imagen }}" alt="Imagen {{ $post->titulo }}">
                    </a>
                </div>
            
                
            @endforeach
        </div>

        <div class="py-10">
            {{ $posts->links() }}
        </div>

    @else
        <p class="text-center">No hay publicaciones, sigue a alguien para poder mostrar publicaciones</p>
    @endif
</div>
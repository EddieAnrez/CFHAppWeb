@props(['post'])

<div class="bg-black flex">
    <div class=" w-full lg:max-w-full lg:flex">
        <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
            style="background-image: url('{{ Storage::url($post->image->url) }}') ">
        </div>

        <div
            class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r py-1 px-4 flex flex-col justify-between leading-normal">
            <div>
                @foreach ($post->tags as $tag)
                    <a href="{{ route('blog.tag', $tag) }}" class="inline-block px-3   
                                                    py-1 my-1 rounded bg-gray-300 text-comision text-xs font-medium tracking-widest
                                                    ">#{{ $tag->name }}</a>
                @endforeach
            </div> 
            <h2 class="tracking-widest text-sm title-font font-medium text-gray-400 mb-1 uppercase mt-2">{{ $post->category->name }}</h2>

            <div class="text-gray-900 font-bold text-xl my-1">
                {!! \Illuminate\Support\Str::limit($post->name, 32, $end = '...') !!}
            </div>
            <div>

                <p class="text-xs mb-1 text-gray-600">
                    Por <span class="font-bold">{{ $post->user->name }}</span>,
                    Publicado el <span class="italic">{{ date('d', strtotime($post->created_at)) }} de
                        {{ date('M', strtotime($post->created_at)) }} del
                        {{ date('Y', strtotime($post->created_at)) }}</span>
                </p>
                <p class="text-gray-700 text-base"> {!! \Illuminate\Support\Str::limit($post->extract, 150, $end = '...') !!}
                </p>
                <a href="{{ route('blog.show', $post) }}"
                    class="py-2  text-comision  inline-flex items-center font-bold">Continuar Leyendo...
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                    </svg></a>
            </div>
        </div>
    </div>
</div>
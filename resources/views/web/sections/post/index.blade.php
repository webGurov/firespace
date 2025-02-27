<section aria-label="post-title" class="w-full py-[50px] bg-no-repeat bg-cover bg-center" id="post">
    <x-container>
        <h2 class="text-[42px] font-bold">Посты</h2>
        <div aria-label="Посты" class="flex mt-[20px] gap-[30px]">
            @foreach ($posts as $post)
                <div aria-label="Пост" class="w-[300px] h-[100px] flex flex-col border-2 border-[#EA8C55] rounded-[10px] p-[10px] bg-[#DB5A42]">
                    <h3 aria-label="Название поста" class="text-[30px] font-bold text-white"> {{ $post->title }} </h3>
                    <p aria-label="Описание поста" class="text-white/70"> {{ $post->description }} </p>
                </div>
            @endforeach
        </div>
    </x-container>
</section>

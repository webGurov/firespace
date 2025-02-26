<section class="w-full py-[50px] bg-no-repeat bg-cover bg-center">
    <x-container>
        <h2 class="text-[42px] font-bold">Посты</h2>
        <div class="flex mt-[20px] gap-[30px]">
            @foreach ($posts as $post)
                <div aria-label="Пост" class="w-[300px] flex flex-col border-2 border-[#F7752A] rounded-[10px] p-[10px] ">
                    <h3 class="text-[30px] font-bold"> {{ $post->title }} </h3>
                    <p class=""> {{ $post->description }} </p>
                </div>
            @endforeach
        </div>
    </x-container>
</section>

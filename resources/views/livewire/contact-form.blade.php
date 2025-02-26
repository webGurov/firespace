<div class="py-12">
    <x-container>
        @if (session()->has('message'))
            <div class="text-xl text-black bg-red-500">
                {{ session('message') }}
            </div>
        @endif
        <form wire:submit.prevent="submit">
            <div>
                <label for="name">Имя</label>
                <input type="text" wire:model="name" id="name" placeholder="Иванов Сагаев">
                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="email">Эл.почта</label>
                <input type="mail" wire:model="email" id="email" placeholder="user@example.ru">
                @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="p-4">Оставить заявку</button>
        </form>
    </x-container>
</div>
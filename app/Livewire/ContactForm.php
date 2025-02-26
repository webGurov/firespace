<?php

namespace App\Livewire;

use App\Jobs\SendTelegramMessage;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|min:3|email'
    ];

    protected $messages = [
        'name.required' => 'Поле "Имя" обязательно для заполнения',
        'name.min' => 'Поле "Имя" должно содержать минимум 3 символа',
        'email.required' => 'Поле "Эл.почта" обязательно для заполнения',
        'email.min' => 'Поле "Эл.почта" должно содержать минимум 3 символа',
        'email.email' => 'Поле "Эл.почта" должен содержать верный адрес электронной почты',
    ];

    public function submit()
    {
        $this->validate();

        dispatch(new SendTelegramMessage($this->name, $this->email))->handle();

        $this->reset(['name', 'email']);
        session()->flash('message', 'Заявка успешно отправлена');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
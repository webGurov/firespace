<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class SendTelegramMessage implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $name;
    protected $email;
    protected $botToken;
    protected $chatId;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
        $this->botToken = env('TELEGRAM_BOT_TOKEN');
        $this->chatId = env('TELEGRAM_CHAT_ID');
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

        $text = "Новое сообщение от: {$this->name}\n\n{$this->email}";

        // Отправка сообщения в Telegram
        Http::post("https://api.telegram.org/bot{$this->botToken}/sendMessage", [
            'chat_id' => $this->chatId,
            'text' => $text,
        ]);
    }
}

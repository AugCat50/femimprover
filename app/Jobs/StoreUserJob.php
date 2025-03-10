<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use App\Mail\User\PasswordMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class StoreUserJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     * Действия из этого метода отправляются в очередь
     *
     * @return void
     */
    public function handle()
    {
        // $password               = Str::random(10);
        $password               = 'Germiona2000';
        $this->data['password'] = Hash::make($password);
        
        //Возвращает модель
        //Рекомендуется прочесть документацию. Так же см. Бл.7
        $user = User::firstOrCreate(['email' => $this->data['email']], $this->data);

        Mail::to($this->data['email'])->send(new PasswordMail($password));

        //Событие регистрации пользователя, аргумент - модель. Отправляет письмо с верификацией почты.
        event(new Registered($user));
    }
}

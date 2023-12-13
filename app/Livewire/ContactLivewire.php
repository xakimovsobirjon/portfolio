<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactLivewire extends Component
{
    public $name,$email,$phone,$subject,$comment,$success="Send";

    public $rules=[
        'name'=>'required|min:2',
        'email'=>'required|email',
        'phone'=>'required|min:4',
        'subject'=>'required|min:2',
        'comment' => 'required|min:5',
    ];

    public function send()
    {
        $this->validate();

        Mail::send('contact.email',
            array(
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'subject' => $this->subject,
                'comment' => $this->comment,
            ),
            function($message){
                $message->from('xakimovsobirjon15@gmail.com');
                $message->to('xakimovsobirjon@mail.ru', 'Portfolio')->subject($this->name);
            }
        );

        $this->dispatch('send_success',['send'=>$this->success]);
        $this->success = 'Send again';

        $this->clearFields();


    }

    private function clearFields()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->subject = '';
        $this->comment = '';
    }

    public function render()
    {
        return view('livewire.contact-livewire');
    }
}

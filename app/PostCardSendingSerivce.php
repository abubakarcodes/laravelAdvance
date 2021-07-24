<?php
namespace App;
use Illuminate\Support\Facades\Mail;
class PostCardSendingSerivce {
    private $country;
    private $width;
    private $height;
    public function __construct($country , $width , $height)
    {
        $this->country = $country;
        $this->width = $width;
        $this->height = $height;

    }


    public function send_post_card($message , $email){
        // Mail::raw($message, function ($message) use ($email) {
        //     $message->to($email);
        // });

      $response = [
            'country' => $this->country,
            'width' => $this->width,
            'height' => $this->height,
            'message' => $message,
            'email' => $email,
        ];


        dd($response);
    }
}

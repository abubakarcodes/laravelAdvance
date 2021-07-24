<?php
namespace App\Http\View\Composers;

use App\Models\Channel;
use Illuminate\View\View;

class ChannelComposer {
    public function compose(View $view){
        $view->with('channels' , Channel::orderBy('id' , 'desc')->get());
    }
}

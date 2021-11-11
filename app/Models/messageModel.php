<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class messageModel extends Model
{
    use HasFactory;
    protected $table = 'message';
    public $timestamps = false;
    public static function filler($message,$request)
    {
        $message->name = $request->name;
        $message->email= $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();
        return $message->id;
    }
}

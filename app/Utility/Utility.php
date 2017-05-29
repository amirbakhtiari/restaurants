<?php
/**
 * Created by PhpStorm.
 * User: amirbakhtiari
 * Date: 13/09/2016
 * Time: 02:47 PM
 */

namespace App\Utility;


use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class Utility
{
    private function __construct() {}

    /**
     * @return mixed
     */
    public static function random_code() {
        $answer = rand(1, 45201);
        if(session()->has('random'))
            session()->forget('random');
        session()->put('random', $answer);
        $img = Image::canvas(130, 40, "#ffffff");
        $img->text($answer, 130 / 2, 30, function($font) {
            $font->file('css/fonts/Chunkfive.otf');
            $font->size(26);
            $font->angle(rand(0, 20));
            $font->align('center');
            $font->color('#ac342d');
        });

        header('Content-Type', 'image/png');
        return $img->encode('jpeg');
    }

    /**
     * @param $str
     * @return bool
     */
    public static function checkCaptcha($str) {
        return(strcasecmp($str, (string)session()->get('random')) === 0);
    }

    /**
     * @param $to
     * @param $from
     * @param array $data
     * @param null $subject
     * @param string $view
     */
//    public static function send_mail($to, $from, $data = [], $subject = null, $view = "mail") {
//        Mail::send($view, $data, function($mail) use($to, $from, $subject){
//            $mail->from($from);
//            $mail->to($to)->subject($subject);
//        });
//    }

    /**
     * @param $str
     * @return bool
     */
    public static function just_english($str) {
        return preg_match("/^[a-zA-Z0-9]+$/", $str) == false;
    }

    public static function just_number($str) {
        return preg_match("/^[0-9]+$/", $str) == false;
    }
}
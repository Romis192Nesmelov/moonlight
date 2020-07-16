<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Settings;

class FeedbackController extends Controller
{
    use HelperTrait;

    public function feedback(Request $request)
    {
        $this->validate($request, [
//            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'phone' => $this->validationPhone,
//            'content' => 'max:200',
            'i_agree' => 'required|accepted'
        ]);

        $fields = $this->processingFields($request, null, ['i_agree','email_num']);
        $emails = Settings::getEmails();
        $this->sendMessage($request->input('email_num') == 1 ? (string)$emails->email1 : (string)$emails->email2, 'sendmessage', $fields);
        return response()->json(['success' => true]);
    }

//    private function spamFilter($text)
//    {
//        $sendAllow = true;
//        foreach ($this->forbbidenWords as $word) {
//            if (preg_match('/'.$word.'/ui', $text)) {
//                $sendAllow = false;
//                break;
//            }
//        }
//        return $sendAllow;
//    }
}

<?php

namespace Shuklajasmin\Track\Traits;

use Illuminate\Mail\Events\MessageSending;
use Shuklajasmin\Track\Models\CampaignMail;
use Symfony\Component\Mime\Address;

trait TrackableEmail
{
    public function createTrackingLog(string $email,string $subject): array
    {
        $campaign = CampaignMail::create([
            "email" =>$email,
            "subject" =>$subject,
        ]);;

        // $tracking = EmailLog::create([
        //     'email' => $email,
        //     'campaign_id' => $campaign->id,
        //     'status' => 'pending',
        // ]);

        return [
            'campaign' => $campaign,
            'tracking' => "14552",
        ];
    }

    public function initSetup($rnvalap,$email)
    {
        // campaign_mails
        $cmpain=CampaignMail::create([
            "email" =>$email,
            "subject" =>$rnvalap,
        ]);

        // dd($cmpain);
        //DD($rnvalap,$email);
        // \Log::info(json_encode([
        //     'to' => collect($message->getTo())->keys()->join(', '),
        //     'from' => collect($message->getFrom())->keys()->join(', '),
        //     'subject' => $message->getSubject(),
        //     'body' => $message->getBody(),
        //     'sent_at' => now(),
        // ]));
        return $cmpain;
    }

    public function retriveCampain(MessageSending $event)
    {
        $message = $event->message;

        $to = collect($message->getTo())->map(fn(Address $addr) => $addr->getAddress())->join(', ');
        $subject = $message->getSubject();
        $textBody = $message->getTextBody();

        \Log::info('Before sending email', [
            'to' => $to,
            'subject' => $subject,
            'body' => $textBody,
        ]);

        // campaign_mails
        // $cmpain=CampaignMail::create([
        //     "email" =>$email,
        //     "subject" =>$rnvalap,
        // ]);

        // dd($cmpain);
        //DD($rnvalap,$email);
        // \Log::info(json_encode([
        //     'to' => collect($message->getTo())->keys()->join(', '),
        //     'from' => collect($message->getFrom())->keys()->join(', '),
        //     'subject' => $message->getSubject(),
        //     'body' => $message->getBody(),
        //     'sent_at' => now(),
        // ]));
        // return $cmpain;
        return ;
    }
}

<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class MailerService
{
    public function __construct(private MailerInterface $mailer)
    {
    }
    public function sendEmail(
        $to,
        $content,
        $subject
    ): void {
        $email = (new Email())
            ->from('contact.ipark.info@gmail.com')
            ->to($to)
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject($subject)
            //->text('Sending emails is fun again!')
            ->html($content);

        $this->mailer->send($email);
    }
}

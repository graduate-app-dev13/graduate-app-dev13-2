<?php
// MailForm
//メール通知機能の内容
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

use App\Models\User;

class MailForm extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mail Form',
            from: new Address('spot_teacher@tokidokineko.sakura.ne.jp', 'スポットティーチャー'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.mail',
            with: $this->data
        );
    }
        // return new Content(
        //     //  view: 'mail.mail',
        //     //  with: [
        //     //     'orderName' => $this->order->name,
        //     //     'orderPrice' => $this->order->price,
        //     // markdown: 'emails.contact',
        //     // data: ['name' => $this->name],
        //     // text: 'emails.contact',
        // ]
        // );
    
    
    // public function build()
    // {
    //     return $this->view('emails.test')
    //             ->to('XXXXX@XXXXX.jp','鈴木太郎')
    //             ->from('XXX@XXXX','佐藤一郎')
    //             ->subject('テストメールです。');
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
<?php
namespace src\Controller;

class ContactController extends AbstractController{
    private $mailer;
    private $transport;

    public function construct()
    {
        parent::construct();
        $this->transport = (new \Swift_SmtpTransport('smtp.mailtrap.io', 25))
            ->setUsername('d49d7b30e40684')
            ->setPassword('99d38c57a972dd');
        $this->mailer = new \Swift_Mailer($this->transport);

    }

    public function showForm(){
        return $this->twig->render('Contact/form.html.twig');
    }

    public function sendMail(){
        $mail = (new \Swift_Message('Contact depuis le formulaire'))
            ->setFrom([$_POST["email"] => $_POST["nom"]])
            ->setTo('contact@monsite.fr')
            ->setBody(
                $this->twig->render('Contact/mail.html.twig',
                    [
                        'message' => $_POST["content"]
                    ])
                ,'text/html'
            );

        $result = $this->mailer->send($mail);

        return $result;
    }

}
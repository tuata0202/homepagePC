<?php

namespace App\Command;

use Cake\Console\Arguments;
use Cake\Console\Command;
use Cake\Console\ConsoleIo;
use Cake\Mailer\Email;

class SendmailCommand extends Command
{
    public function execute(Arguments $args, ConsoleIo $io)
    {
        try {
            $listEmails = [
//                'tinhdx.it@gmail.com',
                'tinh.do@pacom-solution.com',
            ];
            
            foreach ($listEmails as $email) {
                $emailClass = new Email();
                $emailClass->setTransport('sendgrid');
                $emailClass
                    ->setTemplate('newsletter')
//                    ->setFrom('sale@pacom-solution.com')
                    ->setFrom('tinhdx.it@gmail.com')
                    ->setFrom('tinh.do@pacom-solution.com')
                    ->setTo($email)
                    ->setEmailFormat('html')
                    ->send('thank you so much');
                $io->out('send mail success');
            }
            exit();
        } catch (Exception $e) {
            $io->out('send mail error');
            exit();
        }
    }
    
    public function _getContent($param) {
        
    }
}

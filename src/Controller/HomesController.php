<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
use Cake\Core\Configure;
use Cake\Log\Log;

/**
 * Homes Controller
 *
 *
 * @method \App\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
use Cake\I18n\I18n;
class HomesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
    }

    public function faq()
    {
    }

    public function privacyPolicy()
    {
    }

    public function send()
    {
        die("123");
        if ($this->request->is('post')) {
            
            $dataPost = $this->request->getData();
            $from         = 'norepy@pacom-solution.com';
            $subject      = '[Mail Liên hệ] từ pacom-solution.com';
            $name         = $dataPost["name"];
            $furikana     = $dataPost["name_1"];
            $company_name = $dataPost['subject'];
            $email        = $dataPost['email'];
            $phone        = $dataPost['phone'];
            $message      = $dataPost['your_message'];

            $content = '';
            $content .= '<table border="1" cellpadding="0" cellspacing="0" width="100%">';

            $content .= '<tr>';
            $content .= '<td width="260" valign="top"><strong>Name:</strong></td>';
            $content .= '<td>' . $name . '</td>';
            $content .= '</tr>';

            $content .= '<tr>';
            $content .= '<td width="260" valign="top"><strong>Name kata:</strong></td>';
            $content .= '<td>' . $furikana . '</td>';
            $content .= '</tr>';

            $content .= '<tr>';
            $content .= '<td width="260" valign="top"><strong>Company Name:</strong></td>';
            $content .= '<td>' . $company_name . '</td>';
            $content .= '</tr>';

            $content .= '<tr>';
            $content .= '<td width="260" valign="top"><strong>Email:</strong></td>';
            $content .= '<td>' . $email . '</td>';
            $content .= '</tr>';

            $content .= '<tr>';
            $content .= '<td width="260" valign="top"><strong>Phone:</strong></td>';
            $content .= '<td>' . $phone . '</td>';
            $content .= '</tr>';

            $content .= '<tr>';
            $content .= '<td width="260" valign="top"><strong>Message:</strong></td>';
            $content .= '<td>' . $message . '</td>';
            $content .= '</tr>';

            $content .= '</table>';
            
            $date = date("Y-m-j H:i", strtotime('+2 hours')) . ' (JST)';

            $contentUser = "
            ※本メールは自動返信メールです。<br/><br/>

            {$name} 様<br/><br/>

            このたびは、[Pacom Solutions]へ<br/>
            お問い合わせ頂きましてありがとうございました。<br/><br/>

            このメールはフォーム送信が正常に完了したことをお伝えする自動返信メールです。(このメールに対してのご返信はできません)<br/>
            お客様よりご入力いただきました内容を確認後、担当者よりご連絡いたします。<br/><br/>

            ――――――――――――――――――――――――――――――――――――<br/>

            □ご入力いただいた情報<br/>
            受 付 時 間 ： {$date}<br/><br/>

            ---------------------------------------------------------------<br/>
            【お名前】 {$name}<br/>
            【氏名カナ】 {$furikana}<br/>
            【会社名】 {$company_name}<br/>
            【Email】 {$email}<br/>
            【電話番号】 {$phone}<br/>
            【お問い合わせ内容】 {$message}<br/>
            ---------------------------------------------------------------<br/>";


            try {
                $emailAdmin = new Email('default');
                $emailAdmin->setFrom($from, 'PACOM Solutions')
                    ->setTo("sale@pacom-solution.com", 'Pacom Solutions')
                    ->setSubject($subject)
                    ->emailFormat('html');
                $emailAdmin->send($content);

                $emailUser = new Email('default');
                $emailUser->setFrom($from, 'PACOM Solutions')
                    ->setTo($email)
                    ->setSubject('PACOM SOLUTIONSへのお問い合わせありがとうございます。')
                    ->emailFormat('html');
                $emailUser->send($contentUser);
                echo "sent";
                exit();

                // if( $emailAdmin->send($content) && $emailUser->send($contentUser)){
                //     echo "sent";
                //     exit();
                // } else{
                //     echo "Message could not be sent. Mailer Error: {$emailAdmin->ErrorInfo}";
                //     echo "Message could not be sent. Mailer Error: {$emailUser->ErrorInfo}";
                //     exit();
                // }

            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$emailAdmin->ErrorInfo}";
                echo "Message could not be sent. Mailer Error: {$emailUser->ErrorInfo}";
                exit();
            }
        }
    }
    
    public function sendMail()
    {
        $lang = I18n::getLocale();
        if ($this->request->is('post')) {
            $typeList = Configure::read('CONTACT_TYPE.LIST');
            $dataPost = $this->request->getData();
            Log::info($dataPost);
            // pr($dataPost);
            // die;\
            if (!$this->Recaptcha->verify()) { 
                echo "Vui lòng chuyển Google Recaptcha trước";
                exit();
            }
            
            $from         = 'norepy@pacom-solution.com';
            $subject      = '[Mail Liên hệ] từ pacom-solution.com';
            $question     = !empty($typeList[$dataPost['type']]) ? $typeList[$dataPost['type']] : '[undefined]';
            $company_name = $dataPost['name_company'];
            $department   = $dataPost['department'];
            $name         = $dataPost["name"];
            $furikana     = $dataPost["furikana"];
            $email        = $dataPost['email'];
            $phone        = $dataPost['phone'];
            $fax          = $dataPost['fax'];
            $message      = $dataPost['your_message'];

            $content = '';
            $content .= '<table border="1" cellpadding="0" cellspacing="0" width="100%">';

            $content .= '<tr>';
            $content .= '<td width="260" valign="top"><strong>Type:</strong></td>';
            $content .= '<td>' . $question . '</td>';
            $content .= '</tr>';

            $content .= '<tr>';
            $content .= '<td width="260" valign="top"><strong>Company Name:</strong></td>';
            $content .= '<td>' . $company_name . '</td>';
            $content .= '</tr>';

            $content .= '<tr>';
            $content .= '<td width="260" valign="top"><strong>Department:</strong></td>';
            $content .= '<td>' . $department . '</td>';
            $content .= '</tr>';

            $content .= '<tr>';
            $content .= '<td width="260" valign="top"><strong>Name:</strong></td>';
            $content .= '<td>' . $name . '</td>';
            $content .= '</tr>';

            $content .= '<tr>';
            $content .= '<td width="260" valign="top"><strong>Name kata:</strong></td>';
            $content .= '<td>' . $furikana . '</td>';
            $content .= '</tr>';

            $content .= '<tr>';
            $content .= '<td width="260" valign="top"><strong>Email:</strong></td>';
            $content .= '<td>' . $email . '</td>';
            $content .= '</tr>';

            $content .= '<tr>';
            $content .= '<td width="260" valign="top"><strong>Phone:</strong></td>';
            $content .= '<td>' . $phone . '</td>';
            $content .= '</tr>';

            $content .= '<tr>';
            $content .= '<td width="260" valign="top"><strong>Fax:</strong></td>';
            $content .= '<td>' . $fax . '</td>';
            $content .= '</tr>';

            $content .= '<tr>';
            $content .= '<td width="260" valign="top"><strong>Message:</strong></td>';
            $content .= '<td>' . $message . '</td>';
            $content .= '</tr>';

            $content .= '</table>';

            $date = date("Y-m-j H:i", strtotime('+2 hours')) . ' (JST)';

            $contentUser = "
            ※本メールは自動返信メールです。<br/><br/>

            {$name} 様<br/><br/>

            このたびは、[Pacom Solutions]へ<br/>
            お問い合わせ頂きましてありがとうございました。<br/><br/>

            このメールはフォーム送信が正常に完了したことをお伝えする自動返信メールです。(このメールに対してのご返信はできません)<br/>
            お客様よりご入力いただきました内容を確認後、担当者よりご連絡いたします。<br/><br/>

            ――――――――――――――――――――――――――――――――――――<br/>

            □ご入力いただいた情報<br/>
            受 付 時 間 ： {$date}<br/><br/>

            ---------------------------------------------------------------<br/>
            【お問い合わせ種別】 {$question}<br/>
            【会社・組織名】 {$company_name}<br/>
            【部署】 {$department}<br/>
            【氏名】 {$name}<br/>
            【フリガナ】 {$furikana}<br/>
            【メールアドレス】 {$email}<br/>
            【電話番号】 {$phone}<br/>
            【FAX番号】 {$fax}<br/>
            【お問い合わせ内容】 {$message}<br/>
            ---------------------------------------------------------------<br/>";


            try {
                $emailAdmin = new Email('default');
                $emailAdmin->setFrom($from, 'PACOM Solutions')
                    ->setTo("sale@pacom-solution.com", 'Pacom Solutions')
                    ->setSubject($subject)
                    ->setEmailFormat('html');
                $emailAdmin->send($content);

                $emailUser = new Email('default');
                $emailUser->setFrom($from, 'PACOM Solutions')
                    ->setTo($email)
                    ->setSubject('PACOM SOLUTIONSへのお問い合わせありがとうございます。')
                    ->setEmailFormat('html');
                $emailUser->send($contentUser);
                echo "sent";die;
                exit();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$emailAdmin->ErrorInfo}";
                echo "Message could not be sent. Mailer Error: {$emailUser->ErrorInfo}";
                exit();
            }
        }
    }
    public function infoCompany()
    {
    }
}

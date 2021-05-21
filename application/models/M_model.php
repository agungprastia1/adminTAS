<?php
defined('BASEPATH') or exit('no direct script access allowed');

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class M_model extends CI_model
{

    private $_client;
    public function __construct()
    {
        parent::__construct();
        $this->_client = new Client([
            'base_uri' => 'http://localhost/api-mobile/'
        ]);
    }

    public function getUser()
    {
        $response = $this->_client->request(
            'GET',
            'VeriEmail',
            [
                'query' => [
                    'API-KEY' => "admin"
                ]
            ]
        );
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function akunverifi()
    {
        $response = $this->_client->request(
            'GET',
            'VeriEmail/emailVerifi',
            [
                'query' => [
                    'API-KEY' => "admin"
                ]
            ]
        );

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function verifiAkun($id)
    {
        $response = $this->_client->request('PUT', 'VeriEmail', [
            'form_params' => [
                'id' => $id,
                'API-KEY' => "admin"
            ]
        ]);
    }

    public function cekEmail($email)
    {
        $data = $this->db->get_where('akun', ['email' => $email]);
        if ($data->num_rows() != 0) {
            if ($this->kirimEmail($email)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function veriEmail($email, $name, $hp)
    {

        //Create a new PHPMailer instance
        $mail = new PHPMailer();

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        //SMTP::DEBUG_OFF = off (for production use)
        //SMTP::DEBUG_CLIENT = client messages
        //SMTP::DEBUG_SERVER = client and server messages
        $mail->SMTPDebug = SMTP::DEBUG_OFF;

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        //Use `$mail->Host = gethostbyname('smtp.gmail.com');`
        //if your network does not support SMTP over IPv6,
        //though this may cause issues with TLS

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;

        //Set the encryption mechanism to use - STARTTLS or SMTPS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = 'Tenowmar@gmail.com';

        //Password to use for SMTP authentication
        $mail->Password = 'risixtwenty';

        //Set who the message is to be sent from
        $mail->setFrom($email, $name);

        //Set an alternative reply-to address
        // $mail->addReplyTo('agungztya@gmail.com', 'First Last');

        //Set who the message is to be sent to
        $mail->addAddress('Tenowmar@gmail.com', 'No reply');
        //Set the subject line
        $mail->Subject = 'Verifikasi User';

        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        // $mail->msgHTML(file_get_contents('reset.html'), $this->views('reset'));

        $mail->Body = "<p>Verifikasi akun user baru <br>
        username : $name <br>
        Email : $email <br>
        No HP : $hp <br>
        <a href = http://localhost/admin-TAS/daftar/updateAkun/$email/$hp>klk disini untuk verifikasi</a></p>";
        //Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';

        //Attach an image file
        // $mail->addAttachment('images/phpmailer_mini.png');

        //send the message, check for errors
        if (!$mail->send()) {
            return true;
        } else {
            return false;
        }
    }

    public function kirimEmail($email)
    {

        //Create a new PHPMailer instance
        $mail = new PHPMailer();

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        //SMTP::DEBUG_OFF = off (for production use)
        //SMTP::DEBUG_CLIENT = client messages
        //SMTP::DEBUG_SERVER = client and server messages
        $mail->SMTPDebug = SMTP::DEBUG_OFF;

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        //Use `$mail->Host = gethostbyname('smtp.gmail.com');`
        //if your network does not support SMTP over IPv6,
        //though this may cause issues with TLS

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;

        //Set the encryption mechanism to use - STARTTLS or SMTPS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = 'Tenowmar@gmail.com';

        //Password to use for SMTP authentication
        $mail->Password = 'risixtwenty';

        //Set who the message is to be sent from
        $mail->setFrom('Tenowmar@gmail.com', 'Toko Aki Se-Indonesia');

        //Set an alternative reply-to address
        // $mail->addReplyTo('agungztya@gmail.com', 'First Last');

        //Set who the message is to be sent to
        $mail->addAddress($email);
        //Set the subject line
        $mail->Subject = 'Resset Password User';

        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        // $mail->msgHTML(file_get_contents('reset.html'), $this->views('reset'));

        $mail->Body = '<p>Untuk Resset Password akun anda <a href = "http://localhost/admin-TAS/login/updatePass/' . $email . '" >Klik Disini</a></p>';
        //Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';

        //Attach an image file
        // $mail->addAttachment('images/phpmailer_mini.png');

        //send the message, check for errors
        if (!$mail->send()) {
            return true;
        } else {
            return false;
        }
    }

    public function updatePass($table, $data, $where)
    {
        return $this->db->query("UPDATE $table SET `pass` = '" . $data . "' WHERE `email` = '" . "$where" . "'");
    }

    public function updateAkun($email, $hp)
    {
        return $this->db->update('akun', ['verified_at' => date('Y-m-d H:i:s')], ['email' => $email, 'no_hp' => $hp]);
    }

    public function destroy($token)
    {
        return $this->db->delete('keys', ['key' => $token]);
    }
}

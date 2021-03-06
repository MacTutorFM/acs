<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentication extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth');
    }

    function index($msg='', $success='', $warning='', $error='')
    {
        if($this->session->userdata('logged_token'))
        {
            $sess_array = $this->session->userdata('logged_token');

            $token = $sess_array['token'];
            if($token=='')$error='We have a problem with the connection to the server. '.$error;
        }
        $data['msg']=$msg;
        $data['success']=$success;
        $data['warning']=$warning;
        $data['error']=$error;//echo$error;die();

        $this->load->view('authentication/Login', $data);
    }

    function ForgotPassword()
    {
        $this->load->view('authentication/ForgotPassword');
    }

    function Register()
    {
        $this->load->view('authentication/Register');
    }

    function CreateAccount()
    {//print $_POST['user_email'];print $this->input->post('user_email');die();
        $data=array(
            'email'=>$this->input->post('user_email'),
            'password'=>password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        );//var_dump($data);

        $result=$this->Auth->CreateAccount($data);

        $msg='';
        $success='';
        $warning='';
        $error='';

        if($result['error']=='0')
            $success='Account created.';
        else
            $error=$result['error'];

        $this->index($msg, $success, $warning, $error);
    }

    function Verify()
    {
        $msg='';
        $success='';
        $warning='';
        $error='';
        
        $this->load->library('encrypt');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if($this->form_validation->run()==1)
        {
            $result = $this->CheckDatabase($this->input->post('password'));//var_dump($result);

            if ($result['error']=='0')
            {
                redirect('Main', 'refresh', '');
            } else {
                $error=$result['error'];

                $this->index($msg, $success, $warning, $error);
            }
        }
        else
        {
            $error='Invalid user or password.';

            $this->index($msg, $success, $warning, $error);
        }
    }

    function CheckDatabase($password)
    {
        $username = $this->input->post('email');
        $result = $this->Auth->Login($username, strip_tags($password));

        if ($result['error']=='0')
        {
            $sess_array = array(
                'id' => $result['id'],
                'user_name' => $result['user_name'],
                'bd_FirstName' => $result['bd_FirstName'],
                'bd_LastName' => $result['bd_LastName'],
                'email' => $result['email'],
                '__zkp_Client_Rec' => $result['__zkp_Client_Rec'],
                'PersonalContactInformationStatus' => $result['PersonalContactInformationStatus'],
            );

            $this->session->set_userdata('logged_user_acs', $sess_array);
        }

        return $result;
    }

    function ValidateEmail()
    {
        $email = strip_tags($_POST['email']);
        $send = $_POST['send'];

        if ($email != '')
        {
            $result = $this->Auth->ValidateEmail($email);//var_dump($result);
            //print $result['error'];die();

            if ($result['error']=='0')
            {//print var_dump($result['result']);//die();
                $from_email = EMAIL_FROM;
                $from_name = EMAIL_FROM_NAME;
                $email_to = $email;
                $reply_to_email = '';
                $reply_to_name = '';

                if($send=='pass')
                {
                    $id = $result['id'];
                    $result = $this->generarLinkTemporal($id);//print '$token: '.$token;die();

                    if ($result['token']) {
                        $token = $result['token'];


                        $subject = "Recover Password";
                        $link = base_url('/Authentication/Restore/' . $token);
                        $body = ' <h1>Password reset code</h1>
                        <p>Please use this link to reset the password for the account</p>
                            <p>Here is your link: </p>
                                <p><a href="' . $link . '"> Reset password</a></p>
                        <p>If you don\'t recognize the email, you can delete this email.</p>
                        <p>Thanks,</p>
                        <p>Beacon Entity Manager</p>';

                        $this-> EnviarEmail($from_email, $from_name, $email_to, $reply_to_email, $reply_to_name, $subject, $body);
                    }
                }
                elseif ($send=='user')
                {

                    $subject = "Recover User ID";
                    $body = ' <h1>Password reset code</h1>
                        <p>Your User ID to enter to Beacon Entity Manager is:</p>
                            <p><h2><strong>'. $result["user_name"] .'</strong></h2></p>
                        <p>If you don\'t recognize the email, you can delete this email.</p>
                        <p>Thanks,</p>
                        <p>Beacon Entity Manager</p>';
                    $this->EnviarEmail($from_email, $from_name, $email_to, $reply_to_email, $reply_to_name, $subject, $body);
                }
                elseif ($send=='sec_question_continue')
                {
                    $this->load->model('M_Main');
                    $result_vl['vl']=$this->M_Main->GetVLSecQuestion();
                    //var_dump($result_vl['vl']);//
                    ?>

                    <div class="fields">
                        <strong>Security Question</strong>
                        <select disabled="disabled" class="form-control my_select2" id="_kf_SecurityQuestion_SN" name="_kf_SecurityQuestion_SN">
                            <?php for ($i=0;$i<sizeof($result_vl['vl']['data']);$i++){?>
                            <option  <?php if(isset($result['_kf_SecurityQuestion_SN'])){if($result['_kf_SecurityQuestion_SN']==$result_vl['vl']['data'][$i]['_zhk_RecordSerialNumber']){?> selected <?php }}?>value="<?php print $result_vl['vl']['data'][$i]['_zhk_RecordSerialNumber'];?>"><?php print $result_vl['vl']['data'][$i]['Security_Questions'];?></option>
                        <?php }?>
                        </select>
                    </div>

                    <?php
                }
            }
            else{print 'WRONG';}

        }
        else{print 'EMPTY';}
    }

    function EnviarEmail($from_email, $from_name, $email_to, $reply_to_email, $reply_to_name, $subject, $body)
    {
        date_default_timezone_set('Etc/UTC');
        $this->load->library('email');
        $body = utf8_decode($body);
        $this->email->set_mailtype("html");
        $this->email->from($from_email, $from_name);
        $this->email->reply_to($reply_to_email, $reply_to_name);
        $this->email->to($email_to);
        $this->email->subject($subject);
        $this->email->message($body);
        $this->email->send();
    }

    function GenerarLinkTemporal($idusuario)
    {
        $cadena = $idusuario.rand(1,9999999).date('Y-m-d');
        $token = md5(md5(md5($cadena)));

        $result = $this->Auth->SaveToken($idusuario, $token);
        $result['token']=$token;

        return $result;
    }

    function Restore()
    {
        $data['token']=$this->uri->segment(3);//print $token;die();
        $token=$data['token'];

        $result=$this->Auth->ValidaToken($token);//var_dump($result);


        if ($result['error']=='0')
        {
            $data['id'] = $result['id'];
            $this->load->view('authentication/RestorePass', $data);
        }
        else
        {
            $msg='';
            $success='';
            $warning='';
            $error=$result['error'];

            $this->index($msg, $success, $warning, $error);
        }
    }

    function SaveNewPass()
    {
        $data=array(
            'pass'=>password_hash($this->input->post('txt_pass'), PASSWORD_DEFAULT),
            'token'=>$this->input->post('inp_token'),
            'id'=>$this->input->post('inp_id')
        );//var_dump($data);die();

        $result=$this->Auth->SaveNewPass($data);

        $msg='';
        $success='';
        $warning='';
        $error='';

        if($result['error']=='0')
            $success='Password changed.';
        else
            $error=$result['error'];

        $this->index($msg, $success, $warning, $error);
    }

    function ForgotUser()
    {
        $this->load->view('authentication/ForgotUser');
    }

    function ResetPassword()
    {
        $this->load->view('authentication/ResetPassword');
    }

    function ResetNewPass()
    {
        $data=array(
            'newpass'=>password_hash($this->input->post('txt_pass'), PASSWORD_DEFAULT),
            'pass'=>$this->input->post('password'),
            'user'=>$this->input->post('email')
        );

        $result=$this->Auth->ResetNewPass($data);

        $msg='';
        $success='';
        $warning='';
        $error='';

        if($result['error']=='0')
            $success='Password changed.';
        else
            $error=$result['error'];

        $this->index($msg, $success, $warning, $error);
    }

    function GoToServices()
    {
        redirect('Services/GoToServices');
    }
}
?>
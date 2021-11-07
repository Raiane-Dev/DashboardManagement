<?php
    namespace ControllerIndexs;

    class ControllerIndex{
        public static function index(){
            $url = isset($_GET['url']) ? $_GET['url'] : 'home';
            $slug = explode('/', $url)[0];

            if(file_exists('views/'.$slug.'.php')){
                include('views/'.$slug.'.php');
            }else{
                die('A página não existe');
            }
        }


        public static function autoloading(){
            self::views();
            if(isset($_GET['access'])){
                self::login();
            }
            if(isset($_POST['create'])){
                self::mailSend();
            }
        }


        public static function redirect($page){
            echo '<script> window.location.href="'.$page.'"; </script>';
        }

        public static function login(){
            if(isset($_POST['login'])){
                $email = $_POST['email'];
                $password = $_POST['password'];

                $login = \MySql::connect()->prepare("SELECT * FROM `users` WHERE `email` = ? AND `password` = ?");
                $login->execute(array($email, $password));
                $info = $login->fetch();
                if($login->rowCount() == 1){
                    $_SESSION['login'] = true;
                    $_SESSION['name'] = $info['name'];
                    $_SESSION['email'] = $info['email'];
                    $_SESSION['password'] = $info['password'];
                    $_SESSION['image'] = $info['image'];
                    if($info['ip'] != $_SERVER['REMOTE_ADDR']){
                        ControllerMailer\ControllerMailer::email('Raiane',$info['email'],'Aviso! Tem um novo dispositivo usando sua conta.', Date('Y-m-d'));
                    }
                }else{
                    echo '<div class="error"> ERROR, email ou senha incorretos. </div>';
                }
                self::redirect('home');
            }
        }

        public static function views(){
            if(!isset($_COOKIE['ip'])){
                setcookie('ip', $_SERVER['REMOTE_ADDR'], time() + (60*60*24));    
            ?>
                <script src="<?php echo INCLUDE_PATH ?>js/ajax.js"></script>
            <?php }
                $tokens = \MySql::connect()->prepare("SELECT `ip` FROM `views`");
                $tokens->execute();
                $tokens_count = $tokens->fetchAll();
                
               return $tokens_count;
        }



        public static function mailSend(){
            $subject = $_POST['subject'];
            $email_destiny = $_POST['email'];
            $message = $_POST['message'];
            $created = date('Y-m-d');
            \ControllerMailer\ControllerMailer::email('Raiane',$email_destiny,$message,$created);

            $mail_send = \MySql::connect()->prepare("INSERT INTO `emails` VALUES (null, ?, ?, ?, ?)");
            $mail_send->execute(array($subject, $email_destiny, $message, date('Y-m-d')));
        
        }


        public static function createNotification($title, $message, $date){
            $createNotification = \MySql::connect()->prepare("INSERT INTO `notifications` VALUES (null, ?, ?, ?)");
            $createNotification->execute(array($title, $message, $date));
        }

        public static function chart($mes,$time){
            $metric = \MySql::connect()->prepare("SELECT * FROM orders ORDER BY created");
            $metric->execute();
            $metric = $metric->fetchAll();
            foreach($metric as $key => $value){
                $get_date[] = date('M', strtotime($value['created']));
                $sum = array('Jan' => 0, 'Feb' => 0, 'Mar' => 0, 'Apr' => 0, 'May' => 0, 'Jun' =>0, 'Jul' => 0, 'Aug' => 0, 'Sep' => 0, 'Oct' => 0, 'Nov' => 0, 'Dec' => 0);
        
                if(in_array($mes,$get_date)){
                  $date = \MySql::connect()->prepare("SELECT * FROM orders WHERE `created` BETWEEN $time");
                  $date->execute();
                  $date = $date->fetchAll();
                  foreach($date as $value){
                    $sum[$mes] += $value['amount'];
                  } 
                }
            }
            echo $sum[$mes];
            return $metric;
        }

        public static function getViews($month_views, $datetime){
            $views = \MySql::connect()->prepare("SELECT * FROM `views`");
            $views->execute();
            $views = $views->fetchAll();
            $year = date('Y');

            foreach($views as $key => $value){
                $view_date[] = date('M', strtotime($value['created']));
                $view_sum = array('Jan' => 0, 'Feb' => 0, 'Mar' => 0, 'Apr' => 0, 'May' => 0, 'Jun' =>0, 'Jul' => 0, 'Aug' => 0, 'Sep' => 0, 'Oct' => 0, 'Nov' => 0, 'Dec' => 0);
                
                if(array_key_exists($month_views,$view_sum)){
                  $month = \MySql::connect()->prepare("SELECT * FROM `views` WHERE `created` BETWEEN $datetime");
                  $month->execute();
                  $month = $month->fetchAll();
                  echo count($month);

                }
            return $views;
        }
    }
    }

?>
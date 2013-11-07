<?php
        defined('_VALID') or die('Not Allowed');
        
        function init_login(){
              
                $nama = 'admin'; 
                $pass = 'admin'; 
                session_start(); 
                if(isset($_POST['nama']) && isset($_POST['pass'])){         
                        $n = trim($_POST['nama']); 
                        $p = trim($_POST['pass']); 
                        
                        if(($n === $nama) && ($p === $pass)){ 
                                if(isset($_POST['remember'])){
                                    
                                        $_SESSION['login']=$n;
                                        
                                        ?>
                                        <script type="text/javascript">
                                                document.location.href="./tugasrumah.php"; 
                                        </script>
                                        <?php
                                }else{
                                        $_SESSION['login']='';                              
                                }
                        }else{   
                                echo '<h1 style="margin:10px auto;text-align:center;">nama/password tidak sesuai</h1>';
                                return false;
                        }
                }
        }
		
        function validate(){
                if(!isset($_SESSION['login'])){                                        
                        ?>
                        <div class="inner">
                                <form action="" method="post">
                                        <table border="0" cellpadding="5">
                                                <tr>
                                                        <td>Nama</td>
                                                        <td><input type="text" name="nama" /></td>       
                                                </tr>
                                                <tr>
                                                        <td>Password</td>
                                                        <td><input type="password" name="pass" /></td> 
                                                </tr>
                                                <tr>
                                                        <td></td>
                                                        <td><input type="checkbox" name="remember" value="simpan" /> Remember Me</td> 
                                                </tr>
                                                <tr>
                                                        <td></td>
                                                        <td><input type="submit" value="Login" /></td>               
                                                </tr>
                                        </table>
                                </form>
                        </div>
                        <?php
                        exit;                                    
                }
                if(isset($_GET['m']) && $_GET['m'] == 'Logout'){        
                      
                        if(isset($_SESSION['login'])){                            
                                unset($_SESSION['login']); 
                                session_destroy(); 
                        }
                        
                        ?>
                        <script type="text/javascript">
                                document.location.href="./tugasrumah.php"; 
                        </script>
                        <?php
                }
        }
?>
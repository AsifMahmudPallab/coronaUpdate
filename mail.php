<?php 
$name = $_REQUEST['name']
$email = $_REQUEST['email']
$msg = $_REQUEST['msg']

if(empty($name) || empty($email) || empty($msg)){
    echo "please fill this input"
}else{
    mail('idlasifmahmud@gmail.com','netlify message', $msg, "from: $name < $email >" )
    echo "<script>
    alert('Your message has been send');
    window.history.log(-1);
    
    </script>"
}
?>
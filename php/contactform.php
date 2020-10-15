<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];
        $mailTo = "ramoon982010@live.com.mx";
        $headers = "From: ".$mailFrom;
        $txt = "You have received an e-mail from ".$name.".\n\n".$message;


        /* 1er paramatetro = email al que se va enviar la informacion */        
        /* 2do paramatetro = el asunto del email*/        
        /* 3er paramatetro = el mensaje del email*/        
        mail($mailTo,$subject,$txt,$headers);
        header("Location: ./index.html?mailsend");
    }

?>
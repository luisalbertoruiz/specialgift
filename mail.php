<?php
$hostname = '{mx1.hostinger.mx:143/imap}INBOX';
$username = 'contacto@specialgift.bl.ee';
$password = '563911';
// /* Intento de conexión */
$inbox = imap_open($hostname,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());
/* Recuperamos los emails */
$emails = imap_search($inbox,'ALL');
/* Si obtenemos los emails, accedemos uno a uno... */
if($emails) {
    /* variable de salida */
    $output = '';
    /* Colocamos los nuevos emails arriba */
    rsort($emails);
    /* por cada email... */
    $i=0;
    foreach($emails as $email_number) {
        /* Obtenemos la información específica para este email */
        $overview = imap_fetch_overview($inbox,$email_number,0);
        $message = imap_fetchbody($inbox,$email_number,2);
        /* Mostramos la información de la cabecera del email */
        $output.= '<li>';
        $output.= '<div class="header '.($overview[0]->seen ? 'read' : 'unread').'">';
        $output.= '<span class="subject">'.$overview[0]->subject.'</span> ';
        $output.= '<span class="from"><pre>'.$overview[0]->from.'</pre></span>';
        $output.= '<span class="date">on '.$overview[0]->date.'</span>';
        $output.= '</div>';
        /* Mostramos el mensaje del email */
        $output.= '<div class="message" id="msg_'.$i.'"><pre>'.$message.'</pre></div>';
        $output.= '</li>';
        $i++;
    }
    echo '<ul class="emails">'.$output.'</ul>';
} 
/* Cerramos la connexión */
imap_close($inbox);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
hola mail
</body>
</html>
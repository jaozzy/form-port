<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ip = $_SERVER['REMOTE_ADDR'];

    $turma = $_POST["turma"];
    $idade = $_POST["idade"];
    $gen = $_POST["gen"];
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];
    $q6 = $_POST["q6"];
    $q7 = $_POST["q7"];
    $q8 = $_POST["q8"];
    $q9 = $_POST["q9"];
    $q10 = $_POST["q10"];
    $q11 = $_POST["q11"];
    $q12 = $_POST["q12"];
    $q13 = $_POST["q13"];
    $q14 = $_POST["q14"];
    $q15 = $_POST["q15"];

    $to = 'servicecontact.joao@gmail.com';
    $subject = 'Respostas do formulário';
    $message = "Respostas IP: $ip.\n\n";
    $message .= "Turma: $turma\n";
    $message .= "Idade: $idade\n";
    $message .= "Gênero: $gen\n";
    $message .= "Q1: $q1\n";
    $message .= "Q2: $q2\n";
    $message .= "Q3: $q3\n";
    $message .= "Q4: $q4\n";
    $message .= "Q5: $q5\n";
    $message .= "Q6: $q6\n";
    $message .= "Q7: $q7\n";
    $message .= "Q8: $q8\n";
    $message .= "Q9: $q9\n";
    $message .= "Q10: $q10\n";
    $message .= "Q11: $q11\n";
    $message .= "Q12: $q12\n";
    $message .= "Q13: $q13\n";
    $message .= "Q14: $q14\n";
    $message .= "Q15: $q15\n";

    $headers = "From: jaopd11@gmail.com\r\n";
    $headers .= "Reply-To: jaopd11@gmail.com\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    $mailSent = mail($to, $subject, $message, $headers);

    if ($mailSent) {
        echo 'Resposta enviada com sucesso!';
    } else {
        echo 'Falha ao enviar a resposta por email.';
    }
}
?>

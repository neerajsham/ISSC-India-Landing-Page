<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* ================= CAPTCHA VERIFY (TOP) ================= */
    $secretKey = "6LehKy4sAAAAAMJe4PydMMq_4SkwXj8E807GuMIc"; // Google reCAPTCHA SECRET KEY
    $captchaResponse = $_POST['g-recaptcha-response'] ?? '';

    if (empty($captchaResponse)) {
        die("Captcha not verified.");
    }

    $verify = file_get_contents(
        "https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captchaResponse}"
    );

    $captchaSuccess = json_decode($verify);

    if (!$captchaSuccess->success) {
        die("Captcha verification failed.");
    }
    /* ================= CAPTCHA VERIFIED ================= */


    /* ================= FORM DATA ================= */
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $phone   = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = nl2br(htmlspecialchars($_POST['message']));


    /* ================= MAIL SETUP ================= */
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = "smtp.gmail.com";
        $mail->SMTPAuth   = true;
        $mail->Username   = "marketing.issc@gmail.com";
        $mail->Password   = "ouzv nelj mgul rxhy"; // App Password
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;

        $mail->setFrom("marketing.issc@gmail.com", "Website Contact");
        $mail->addAddress("marketing.issc@gmail.com");

        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Message: $subject";
        $mail->Body = "
            <h3>New Message From Website</h3>
            <p><b>Name:</b> {$name}</p>
            <p><b>Email:</b> {$email}</p>
            <p><b>Phone:</b> {$phone}</p>
            <p><b>Subject:</b> {$subject}</p>
            <p><b>Message:</b><br>{$message}</p>
        ";

        $mail->send();
        
        // Thank You Page HTML
        echo '
    <style>
        .nrrJISSC_formactivte_body {
            min-height: 100vh;
            background: linear-gradient(135deg, #220049c7 0%, #220049 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            overflow: hidden;
        }

        .nrrJISSC_formactivte_container {
            max-width: 600px;
            width: 100%;
            animation: nrrJISSC_formactivte_slideIn 0.8s ease-out;
        }

        .nrrJISSC_formactivte_card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 60px 40px;
            text-align: center;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .nrrJISSC_formactivte_icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #220049c7 0%, #220049 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            animation: nrrJISSC_formactivte_scaleIn 0.6s ease-out 0.3s both;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
        }

        .nrrJISSC_formactivte_checkmark {
            width: 50px;
            height: 50px;
            border: 4px solid white;
            border-radius: 50%;
            position: relative;
            animation: nrrJISSC_formactivte_pulse 2s infinite;
        }

        .nrrJISSC_formactivte_checkmark::after {
            content: "";
            position: absolute;
            left: 17px;
            top: 8px;
            width: 12px;
            height: 22px;
            border: solid white;
            border-width: 0 4px 4px 0;
            transform: rotate(45deg);
            animation: nrrJISSC_formactivte_checkDraw 0.5s ease-out 0.5s both;
        }

        .nrrJISSC_formactivte_title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
            animation: nrrJISSC_formactivte_fadeInUp 0.6s ease-out 0.6s both;
        }

        .nrrJISSC_formactivte_message {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 35px;
            line-height: 1.6;
            animation: nrrJISSC_formactivte_fadeInUp 0.6s ease-out 0.8s both;
        }

        .nrrJISSC_formactivte_btn {
            background: linear-gradient(135deg, #220049c7 0%, #220049 100%);
            color: white;
            padding: 15px 45px;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            animation: nrrJISSC_formactivte_fadeInUp 0.6s ease-out 1s both;
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }

        .nrrJISSC_formactivte_btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
        }

        .nrrJISSC_formactivte_btn:active {
            transform: translateY(-1px);
        }

        .nrrJISSC_formactivte_particles {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .nrrJISSC_formactivte_particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            animation: nrrJISSC_formactivte_float 4s infinite ease-in-out;
        }

        @keyframes nrrJISSC_formactivte_slideIn {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes nrrJISSC_formactivte_scaleIn {
            from {
                opacity: 0;
                transform: scale(0);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes nrrJISSC_formactivte_fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes nrrJISSC_formactivte_checkDraw {
            from {
                height: 0;
            }
            to {
                height: 22px;
            }
        }

        @keyframes nrrJISSC_formactivte_pulse {
            0%, 100% {
                box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7);
            }
            50% {
                box-shadow: 0 0 0 15px rgba(255, 255, 255, 0);
            }
        }

        @keyframes nrrJISSC_formactivte_float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
                opacity: 0.3;
            }
            50% {
                transform: translateY(-30px) rotate(180deg);
                opacity: 0.7;
            }
        }

        @media (max-width: 768px) {
            .nrrJISSC_formactivte_card {
                padding: 40px 30px;
            }
            .nrrJISSC_formactivte_title {
                font-size: 2rem;
            }
            .nrrJISSC_formactivte_message {
                font-size: 1rem;
            }
            .nrrJISSC_formactivte_icon {
                width: 80px;
                height: 80px;
            }
            .nrrJISSC_formactivte_checkmark {
                width: 40px;
                height: 40px;
            }
            .nrrJISSC_formactivte_checkmark::after {
                left: 11px;
                top: 5px;
                width: 10px;
                height: 18px;
                border-width: 0 3px 3px 0;
            }
            .nrrJISSC_formactivte_btn {
                padding: 12px 35px;
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .nrrJISSC_formactivte_title {
                font-size: 1.75rem;
            }
            .nrrJISSC_formactivte_card {
                padding: 30px 20px;
            }
        }
    </style>
<body class="nrrJISSC_formactivte_body">
    <div class="nrrJISSC_formactivte_particles">
        <div class="nrrJISSC_formactivte_particle" style="width: 10px; height: 10px; left: 10%; top: 20%; animation-delay: 0s;"></div>
        <div class="nrrJISSC_formactivte_particle" style="width: 8px; height: 8px; left: 80%; top: 30%; animation-delay: 1s;"></div>
        <div class="nrrJISSC_formactivte_particle" style="width: 12px; height: 12px; left: 60%; top: 70%; animation-delay: 2s;"></div>
        <div class="nrrJISSC_formactivte_particle" style="width: 6px; height: 6px; left: 30%; top: 80%; animation-delay: 1.5s;"></div>
        <div class="nrrJISSC_formactivte_particle" style="width: 10px; height: 10px; left: 90%; top: 60%; animation-delay: 0.5s;"></div>
    </div>

    <div class="nrrJISSC_formactivte_container">
        <div class="nrrJISSC_formactivte_card">
            <div class="nrrJISSC_formactivte_icon">
                <div class="nrrJISSC_formactivte_checkmark"></div>
            </div>
            
            <h1 class="nrrJISSC_formactivte_title">Thank You!</h1>
            
            <p class="nrrJISSC_formactivte_message">
                Your form has been successfully submitted. We appreciate your time and will get back to you shortly.
            </p>
            
            <button class="nrrJISSC_formactivte_btn" onclick="window.history.back()">
                Back to Home
            </button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
        ';

    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
    }
}
?>
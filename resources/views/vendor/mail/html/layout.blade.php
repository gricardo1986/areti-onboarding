<html lang="en">

    <head>

        <meta charset="utf-8">

        <title>Email confirmation, {{ $mailData['title'] }}</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <!--link rel="stylesheet" href="{{ asset('areti-onboarding/style.css') }}"-->
        
        <style>
            @media (min-width:1261px)  { 
               body{
                    width: 100%;
                    height: 1784px;
                    overflow-x: hidden;
               }
            }
        </style>

    </head>

    <body class="background2">

        <div class="logoEmail"></div>

        <span class="Welcome-Username">
            Welcome,<br>
            <span class="text-style-1">{{ $mailData['full_name'] }}</span>
        </span>

        <span class="textview1">
        Here is your One Time Password
        </span>
       
        <span class="Paragraph ">
            Thank you for applying to Aretibank. To confirm your email account, please enter this confirmation code in the application window.
        </span>

        <span class="Your-verification-code">
            Your verification code:
        </span>

        <div class="input-mail-code">
            <span class="code-email-confirmation">
                {{ $mailData['code'] }}
            </span>
            <span class="Paragraph "> You can check this link to continue to validate your process <a href="{{ URL::to('/')."?code=".$mailData['random_code'] }}">Click on me!</span>
        </div>

        <span class="Paragraph2">
            If this wasn´t you, please ignore this email or contact our customer service center:
            <span class="Paragraph2-text-style-1">Support@aretibank.service</span>
            for further assitance or visited our website for more information.
        </span>
    </body>
</html>
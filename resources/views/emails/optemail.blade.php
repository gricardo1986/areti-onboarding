<html lang="en">

    <head>

        <meta charset="utf-8">

        <title>{{ $mailData['title'] }}</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ public_path().'/areti-onboarding/style.css' }}">

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
            You have save this information in our Database
        </span>
       
        <span class="Paragraph ">
            {{ $mailData['body'] }}
            @if($mailData['random_code'])
                <span class="Paragraph "> You can check this link to continue to validate your process <a href="{{ URL::to('/')."?code=".$mailData['random_code'] }}">Click on me!</span>
            @endif
        </span>

        <span class="Paragraph2">
            If this wasn´t you, please ignore this email or contact our customer service center:
            <span class="Paragraph2-text-style-1">Support@aretibank.service</span>
            for further assitance or visited our website for more information.
        </span>
    </body>
</html>

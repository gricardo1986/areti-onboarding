<html lang="en">

    <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@  -->
    <!--                                        Inicio: etiqueta Head                                         -->
    <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@  -->
    <head>

        <meta charset="utf-8">

        <!-- Nombre de Pagina -->
        <title>Email confirmation</title>

        <meta name="Onboarding Persona Natural" content="AretiBank">
        <meta name="Grupo empresarial Simbiotica" content="Onboarding PersoNA natural de Aretibak">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Importe de Estilos & Fuente -->
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <!-- <link rel="shortcut icon" href="images/logo/Areti.ico" type="image/x-icon">   -->

        <style>
            @import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
            @import url('https://fonts.googleapis.com/css?family=Lato:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');                
    
            /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  */
            /*                                               VISTA EMAIL'S                                          */
            /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  */
    
                /* ................................. */
                /* INICIO: Logo email                */
                /* ................................. */
                .logoEmail{
                    width: 306px;
                    height: 108px;
                    margin: 0 65px 86px 66px;
                    position: absolute;
                    top:18px;
                    right:478px;
                    left:475px;
                    background-image:url(images/Logo/Untitle2d.png);
                    background-repeat:no-repeat;
                    background-size: 100% 100%;
                }
                /* ................................. */
                /* FIN: Logo email                   */
                /* ................................. */
    
            /* .................................   */
                /* INICIO: Background                */
                /* ................................. */
                .background2 {
                    width: 1261px;
                    height: 363px;
                    position: absolute;
                    top:0px;
                    left:0px;
                    right: 0px;
                    padding-right: 409px;
                    background-color: #294397;
                }
                .background3 {
                    width: 1259px;
                    height: 1421px;
                    background-color: #f2f2f2;
                }
                .background4{
                    width: 752px;
                    height: 1431px;
                    position: absolute;
                    top:198px;
                    left:282px;
                    padding: 164px 1px 39px;
                    background-color: #fff;
                }
                /* ................................. */
                /* FIN: Background                   */
                /* ................................. */
    
                
                /* ................................. */
                /* INICIO: Welcome                   */
                /* ................................. */
                .Welcome-Username {
                    width: 497px;
                    height: 93px;
                    position: absolute;
                    top:44px;
                    left:140px;
                    right:158px;
                    bottom: 1295px;
                    font-family: Lato;
                    font-size: 40px;
                    font-weight: 600;
                    font-stretch: normal;
                    font-style: normal;
                    line-height: 1.2;
                    letter-spacing: normal;
                    text-align: center;
                    color: #294397;
                }
                
                .Welcome-Username .text-style-1 {
                    color: #454545;
                }
                /* ................................. */
                /* FIN: Welcome                      */
                /* ................................. */
    
                /* ................................. */
                /* INICIO: Welcome- TEXT 1           */
                /* ................................. */
                .textview1 {
                    width: 496px;
                    height: 38px;
                    position: absolute;
                    top:164px;
                    left:128px;
                    font-family: Poppins;
                    font-size: 30px;
                    font-weight: bold;
                    font-stretch: normal;
                    font-style: normal;
                    line-height: 1.2;
                    letter-spacing: normal;
                    text-align: center;
                    color: #294397;
                }
                /* ................................. */
                /* INICIO: Welcome- TEXT 1           */
                /* ................................. */
    
                /* ................................. */
                /* INICIO: Imagen                    */
                /* ................................. */
                .image-email-code{
                    width: 425px;
                    height: 425px;
                    position: absolute;
                    top:200.3px;
                    left: 180px;
                    right:273.8px;
                    background-image:url(images/Email/image2.png);
                    background-repeat:no-repeat;
                    background-size: 100% 100%;
                }
                /* ................................. */
                /* FIN: Imagen                       */
                /* ................................. */
    
                /* ................................. */
                /* INICIO: Thanks                    */
                /* ................................. */
                .Paragraph {
                    width: 484px;
                    height: 63px;
                    position: absolute;
                    top:582px;
                    font-family: Poppins;
                    margin: 49px 121px 45px;
                    font-size: 18px;
                    font-weight: normal;
                    font-stretch: normal;
                    font-style: normal;
                    line-height: 1.2;
                    letter-spacing: normal;
                    text-align: center;
                    color: #454545;
                }
                /* ................................. */
                /* FIN: Thanks                       */
                /* ................................. */
    
                /* ................................. */
                /* INICIO: Text verificatión         */
                /* ................................. */
                .Your-verification-code {
                    width: 212px;
                    height: 24px;
                    position: absolute;
                    top:754px;
                    left:270px;
                    font-family: Poppins;
                    font-size: 18px;
                    font-weight: bold;
                    font-stretch: normal;
                    font-style: normal;
                    line-height: 1.2;
                    letter-spacing: normal;
                    text-align: center;
                    color: #3256a0;
                }
                /* ................................. */
                /* FIN: Text verificatión            */
                /* ................................. */
    
                /* ................................. */
                /* INICIO: Input code                */
                /* ................................. */
                .input-mail-code{
                    width: 484px;
                    height: 124px;
                    flex-grow: 0;
                    position:absolute;
                    left: 134px;
                    top:814px;
                    bottom: 465px;
                    margin: 6.2px 0 0;
                    border-radius: 7.1px;
                    font-family: Poppins;
                    font-size: 11px;
                    font-weight: 500;
                    border: solid 0.7px #f2f2f2;
                    background-color: #f2f2f2;
                }
                .input-mail-code:focus{
                    outline:none;
                    border-color: #213F8F;
                }
    
                /* Inicio- estilo numerico - codigo */
                .code-email-confirmation{
                    width: 376px;
                    height: 51px;
                    flex-grow: 0;
                    position: absolute;
                    top:36px;
                    left: 64px;
                    font-family: Poppins;
                    font-size: 60.7px;
                    font-weight: bold;
                    font-stretch: normal;
                    font-style: normal;
                    line-height: 1;
                    letter-spacing: 25.79px;
                    text-align: center;
                    color: #294397;
                }
                /* Fin - estilo numerico - codigo */
    
                /* ................................. */
                /* FIN: Input code                   */
                /* ................................. */
    
                /* ................................. */
                /* INICIO: Paragraph 2               */
                /* ................................. */
                .Paragraph2 {
                    width: 508px;
                    height: 88px;
                    position: absolute;
                    top:1009px;
                    left:122px;
                    font-family: Poppins;
                    font-size: 18px;
                    font-weight: normal;
                    font-stretch: normal;
                    font-style: normal;
                    line-height: 1.2;
                    letter-spacing: normal;
                    text-align: center;
                    color: #454545;
                }
                
                .Paragraph2-text-style-1 {
                    color: #4286f4;
                }
                        
                /* ................................. */
                /* FIN: Paragraph 2                  */
                /* ................................. */
    
                /* ................................. */
                /* INICIO: Lineas multicolor         */
                /* ................................. */
                .Lineas-de-colores-email {
                    width: 508px;
                    height: 4px;
                    overflow-y:inherit;
                    position:absolute;
                    left: 122px;
                    right: 122px;
                    top: 1152px;
                    bottom: 98px;
                    flex-grow: 0;
                    margin: 0 0 34px;
                }
                /* ................................. */
                /* FIN: Lineas multicolor            */
                /* ................................. */
    
                /* ................................. */
                /* INICIO: Logo Footer               */
                /* ................................. */
                .logo-footer-email{
                    width: 204px;
                    height: 72px;
                    position: absolute;
                    margin: 28px 273px 23px;
                    top:1164px;
                }
                /* ................................. */
                /* FIN: Logo Footer                  */
                /* ................................. */
    
                /* ................................. */
                /* INICIO: Virtue banking - Text     */
                /* ................................. */
                .Virtue-in-banking {
                    width: 279px;
                    height: 45px;
                    position: absolute;
                    top:1299px;
                    left:237px;
                    font-family: Poppins;
                    font-size: 30px;
                    font-weight: normal;
                    font-stretch: normal;
                    font-style: normal;
                    line-height: 1.2;
                    letter-spacing: normal;
                    text-align: center;
                    color: #3256a0;
                }
                /* ................................. */
                /* FIN: Virtue banking - Text        */
                /* ................................. */
    
                .background5{
                    width: 228px;
                    height: 35px;
                    margin: 28px 0;
                    padding: 13px 262px 12px;
                    position: absolute;
                    top:1449px;
                    background-color: #294397;
                }
            
                .Privacy-Policy-email {
                    width: 87px;
                    height: 20px;
                    flex-grow: 0;
                    font-family: Lato;
                    font-size: 12px;
                    font-weight: 500;
                    font-stretch: normal;
                    font-style: normal;
                    line-height: normal;
                    letter-spacing: normal;
                    text-align: center;
                    color: #294397;
                    position:absolute;
                    top:1572px;
                    left:131px;
                }
    
                .Terms-of-Use-email {
                    width: 75px;
                    height: 20px;
                    flex-grow: 0;
                    font-family: Lato;
                    font-size: 12px;
                    font-weight: 500;
                    font-stretch: normal;
                    font-style: normal;
                    line-height: normal;
                    letter-spacing: normal;
                    text-align: center;
                    color: #294397;
                    position:absolute;
                    top:1572px;
                    left:318px;
                }
    
                .Accessibility-Statement-email {
                    width: 127px;
                    height: 20px;
                    flex-grow: 0;
                    font-family: Lato;
                    font-size: 12px;
                    font-weight: 500;
                    font-stretch: normal;
                    font-style: normal;
                    line-height: normal;
                    letter-spacing: normal;
                    text-align: center;
                    color: #294397;
                    position:absolute;
                    top:1572px;
                    left:493px;
                }
    
                .derechos-de-autor-email {
                    width: 226px;
                    height: 10px;
                    font-family: Poppins;
                    font-size: 12px;
                    font-weight: 500;
                    font-stretch: normal;
                    font-style: normal;
                    line-height: 1;
                    letter-spacing: normal;
                    text-align: left;
                    color:#fff;
                    position: absolute;
                    top:25px;
    
                }
                    /* ................................. */
                    /* INICIO: Redes sociales            */
                    /* ................................. */
            
                        /* Inicio: Instagram  */
                        .instagramEmail {
                            width: 29px;
                            height: 29px;
                            top: 570px;
                            color: #294397;
                        }
                        .instagramEmail:hover{
                            opacity: 0.50;
                            -moz-opacity: .50;
                            filter:alpha (opacity=50);
                        }
                        .group1-Email {
                            position: absolute;
                            width: 20px;
                            height: 20px;
                            left: 286px;
                            top: 1401px;
                            right: 308.1px ;
                            bottom: 48.8px;
                            overflow: visible;
                            color:#213F8F;
                        }
                        .ellipse-1-Email {
                            width: 29px;
                            height: 29px;
                            position: absolute; 
                            left: 280px ;
                            top: 1396px;
                            right: 303.1px;
                            bottom: 44px;
                            border-radius: 50%;
                            border: solid #294397;
                            border-width: 1px;
                            
                        }
                        .ellipse-1-Email:hover{
                            opacity: 0.50;
                            -moz-opacity: .50;
                            filter:alpha (opacity=50);
                        }
                        /* Fin: Instagram  */
            
            
                        /* Inicio: Facebook  */
                        .facebookEmail {
                            width: 29px;
                            height: 29px;
                            top: 570px;
                            position: static;
                        }
                        .facebookEmail:hover{
                            opacity: 0.50;
                            -moz-opacity: .50;
                            filter:alpha (opacity=50);
                        }
                        .group2-Email {
                            position: absolute; 
                            width: 9.9px;
                            height: 17.3px;
                            left: 330px ;
                            top: 1401px;
                            right: 284.1px ;
                            bottom: 48px;
                            overflow: visible;
                            color:#213F8F;
                        }
                        .ellipse-2-Email {
                            width: 29px;
                            height: 29px;
                            position: absolute; 
                            left: 320px;
                            top: 1396px;
                            right: 277.2px ;
                            bottom: 44px ;
                            border-radius: 50%;
                            border: solid #294397;; 
                            border-width: 1px;
                        }
                        .ellipse-2-Email:hover{
                            opacity: 0.50;
                            -moz-opacity: .50;
                            filter:alpha (opacity=50);
                        } 
                        /* Fin: Facebook     */
            
            
                        /* Inicio: Twitter     */
                        .twitterEmail {
                            width: 37px; 
                            height: 37px;
                            position: static;
                        }
                        .twitterEmail:hover{
                            opacity: 0.50;
                            -moz-opacity: .50;
                            filter:alpha (opacity=50);
                        }
                        .group3-Email {
                            width: 17.3px;
                            height: 14.1px;
                            position: absolute; 
                            left: 367.2px;
                            top: 1403.5px;
                            right: 255.7 ;
                            bottom: 49.1px;
                            overflow: visible;
                        }
                        .ellipse-3-Email {
                            width: 29px;
                            height: 29px;
                            position: absolute; 
                            left: 1093.1 ;
                            left: 361px;
                            top: 1396px;
                            bottom: 44px;
                            border-radius: 50%;
                            border: solid #294397;; 
                            border-width: 1px;
                        }
                        .ellipse-3-Email:hover{
                            opacity: 0.50;
                            -moz-opacity: .50;
                            filter:alpha (opacity=50);
                        } 
                        /* Fin: Twitter     */
            
                        /* Inicio: WhatsApp     */
                        .whatsappEmail {
                            width: 37px; 
                            height: 37px;
                            top: 575px;
                            position: static;
                        }
                        .whatsappEmail:hover{
                            opacity: 0.50;
                            -moz-opacity: .50;
                            filter:alpha (opacity=50);
                        }
                        .group4-Email {
                            position: absolute;
                            width: 18px;
                            height: 18px;
                            left: 408px ;
                            top: 1402px;
                            right: 230.7px ;
                            bottom: 48.8px;
                            overflow: visible;
            
                        }
                        .ellipse-4-Email {
                            width: 29px;
                            height: 29px;
                            position: absolute; 
                            left: 402px;
                            top: 1396px;
                            right: 226.1px;
                            bottom: 44px ;
                            border-radius: 50%;
                            border: solid #294397;; 
                            border-width: 1px;
                        }
                        .ellipse-4-Email:hover{
                            opacity: 0.50;
                            -moz-opacity: .50;
                            filter:alpha (opacity=50);
                        }
                        /* Fin: WhatsApp     */
            
            
                        /* Inicio: LinkedIn     */
                        .linkedinEmail {
                            width: 29px; 
                            height: 29px;
                            top: 575px;
                            position: static;
                        }
                        .linkedinEmail:hover{
                            opacity: 0.50;
                            -moz-opacity: .50;
                            filter:alpha (opacity=50);
                        }
                        .group5-Email {
                            position: absolute; 
                            width: 17px; 
                            height: 17px;
                            left: 451px;
                            top: 1402px;
                            right: 205px ;
                            bottom: 49.5px;
                            overflow: visible;
                        }
                        .ellipse-5-Email {
                            width: 29px;
                            height: 29px;
                            position: absolute; 
                            right: 200.2px;
                            left: 443px;
                            top: 1396px;
                            bottom: 44px;
                            border-radius: 50%;
                            border: solid #294397;; 
                            border-width: 1px;
                        }
                        .ellipse-5-Email:hover{
                            opacity: 0.50;
                            -moz-opacity: .50;
                            filter:alpha (opacity=50);
                        }
                        /* Fin: LinkedIn     */
            
                    /* ................................. */
                    /* FIN: Redes sociales               */
                    /* ................................. */
        </style>

        <!-- .................................  -->
        <!-- INICIO: Dimensiones de Pagina      -->
        <!-- .................................  -->
        <style>
            @media (min-width:1920px)  { 
               body{
                    width: 100%;
                    height: 1080px;
                    overflow-x: hidden;
               }
            }
        </style>
        <!-- .................................  -->
        <!-- FIN: Dimensiones de Pagina         -->
        <!-- .................................  -->

    </head>
    <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@  -->
    <!--                                        Fin: etiqueta Head                                            -->
    <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@  -->



    <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@  -->
    <!--                                       Inicio: etiqueta body                                          -->
    <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@  -->

    <body class="background3">

        <div class="background2">
            <div class="logoEmail"></div>
                <div class="background4">
                    <span class="Welcome-Username">
                        Welcome,<br>
                        <span class="text-style-1">Username</span>
                    </span>
            
                    <span class="textview1">
                         Here is your One Time Password
                    </span>
                    
                    <img Class="image-email-code"> 

                    <span class="Paragraph">
                        Thank you for applying to Aretibank. To confirm your email account, please enter this confirmation code in the application window.
                   </span>

                   <span class="Your-verification-code">
                    Your verification code:
                    </span>

                    <div class="input-mail-code">
                        <span class="code-email-confirmation">
                            123456
                          </span>
                    </div>

                    <span class="Paragraph2">
                        If this wasn´t you, please ignore this email or contact our customer service center:
                        <span class="Paragraph2-text-style-1">Support@aretibank.service</span>
                        for further assitance or visited our website for more information.
                    </span>

                    <!-- ................................. -->
                    <!-- INICIO: Lineas multicolor         -->
                    <!-- ................................. -->
                    <img src="images/footer/lineas-email.png" class="Lineas-de-colores-email">
                    <!-- ................................. -->
                    <!-- FIN: Lineas multicolor            -->
                    <!-- ................................. -->

                    <!-- ................................. -->
                    <!-- INICIO: Logo footer               -->
                    <!-- ................................. -->
                    <img src="images/Logo/logo_header.png" class="logo-footer-email">
                    <!-- ................................. -->
                    <!-- FIN: Logo footer                  -->
                    <!-- ................................. -->

                    <!-- ................................. -->
                    <!-- INICIO: Virtue in banking         -->
                    <!-- ................................. -->
                    <span class="Virtue-in-banking">
                        Virtue in banking!
                    </span>
                    <!-- ................................. -->
                    <!-- FIN: Virtue in banking            -->
                    <!-- ................................. -->

                    <div class="background5">
                        <span class="derechos-de-autor-email">
                            © 2022 AretiBank. All Rights Reserved
                        </span>
                    </div>

                    <a href="#">
                        <span class="Privacy-Policy-email">
                            Privacy Policy
                        </span>
                    </a>

                    <a href="#">
                        <span class="Terms-of-Use-email">
                            Terms of Use
                        </span>
                    </a>

                    <a href="#">
                        <span class="Accessibility-Statement-email">
                            Accessibility Statement
                        </span>
                    </a>
            <!-- ................................. -->
            <!-- INICIO: Redes Sociales            -->
            <!-- ................................. -->

                <!-- Inicio: Instagram  -->
                <a href="#">
                    <div class="eclipse-1">
                        <div class="instagramEmail">
                            <svg class="group1-Email" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0918 11.6492C15.0293 12.8678 14.7481 13.9302 13.8732 14.8207C12.9827 15.7112 11.9203 15.9924 10.7017 16.0393C9.45189 16.1174 5.70238 16.1174 4.45254 16.0393C3.23395 15.9768 2.17159 15.6956 1.28108 14.8207C0.390574 13.9302 0.109361 12.8678 0.0468689 11.6492C-0.015623 10.3994 -0.015623 6.64989 0.0468689 5.40005C0.109361 4.19709 0.390574 3.1191 1.28108 2.22859C2.17159 1.33808 3.24958 1.07249 4.45254 1.01C5.70238 0.931887 9.45189 0.931887 10.7017 1.01C11.9047 1.07249 12.9827 1.35371 13.8732 2.22859C14.7637 3.1191 15.0449 4.18146 15.0918 5.40005C15.1543 6.64989 15.1543 10.3994 15.0918 11.6492ZM13.7795 8.52465C13.7795 7.41542 13.8732 5.05635 13.4826 4.05648C13.2014 3.40032 12.7015 2.88476 12.0297 2.63479C11.0454 2.22859 8.67074 2.32233 7.57714 2.32233C6.46791 2.32233 4.10884 2.22859 3.10897 2.61917C2.43718 2.88476 1.93725 3.40032 1.67166 4.05648C1.28108 5.05635 1.3592 7.41542 1.3592 8.52465C1.3592 9.63388 1.26546 11.9929 1.67166 12.9928C1.93725 13.6646 2.45281 14.1645 3.10897 14.4301C4.10884 14.8207 6.46791 14.727 7.57714 14.727C8.67074 14.727 11.0454 14.8207 12.0453 14.4301C12.7171 14.1645 13.217 13.649 13.4826 12.9928C13.8732 11.9929 13.7795 9.63388 13.7795 8.52465ZM11.4516 8.52465C11.4516 10.6806 9.71748 12.3991 7.57714 12.3991C5.43679 12.3991 3.68702 10.6806 3.68702 8.52465C3.68702 6.36868 5.42117 4.65015 7.56151 4.65015C9.70186 4.65015 11.4516 6.3843 11.4516 8.52465ZM10.0924 8.52465C10.0924 7.1342 8.96758 5.99373 7.56151 5.99373C6.15545 5.99373 5.04622 7.1342 5.04622 8.52465C5.04622 9.91509 6.18669 11.0556 7.57714 11.0556C8.96758 11.0556 10.0924 9.91509 10.0924 8.52465ZM11.6079 5.40005C11.1079 5.40005 10.7017 4.99386 10.7017 4.49392C10.7017 3.99399 11.1079 3.58779 11.6079 3.58779C12.1078 3.58779 12.514 3.99399 12.514 4.49392C12.514 4.99386 12.1078 5.40005 11.6079 5.40005Z" fill="#213F8F"/>
                            </svg>
                            <div class="ellipse-1-Email"></div>
                        </div>
                    </div>
                </a>
                <!-- Fin: Instagram  -->

                <!-- Inicio: Facebook  -->
                <a href="#">
                    <div class="eclipse-2">
                        <div class="facebook0">
                            <svg class="group2-Email" width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.67894 5.25944V7.38416H9.55356L9.16299 10.4619H6.67894V18.1953H3.50747V10.4463H0.914062V7.36854H3.50747V4.94698C3.50747 2.32232 5.11664 0.88501 7.46008 0.88501C8.58494 0.88501 9.55356 0.963125 9.83478 1.00999V3.75963H8.20999C6.91328 3.75963 6.67894 4.36893 6.67894 5.25944Z" fill="#213F8F"/>
                            </svg>
                            <div class="ellipse-2-Email "></div>
                        </div>
                    </div>
                </a>
                <!-- Fin: Facebook  -->

                <!-- Inicio: Twitter  -->
                <a href="#">
                    <div class="eclipse-3">
                        <div class="twitterEmail">
                            <svg class="group3-Email" width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.0527 4.478C16.0527 9.16489 12.4906 14.5704 5.96023 14.5704C3.94487 14.5704 2.08573 13.9924 0.523438 12.9769C0.804651 13.0081 1.08586 13.0238 1.3827 13.0238C3.03873 13.0238 4.56978 12.4613 5.78837 11.5083C4.22608 11.4771 2.92937 10.4616 2.47631 9.05553C2.69503 9.08677 2.91375 9.11802 3.1481 9.11802C3.46056 9.11802 3.78864 9.07115 4.08547 8.99303C2.46068 8.66495 1.24209 7.24326 1.24209 5.50911V5.44662C1.71078 5.71221 2.25759 5.86844 2.85126 5.89969C1.89826 5.25915 1.27334 4.18116 1.27334 2.94695C1.27334 2.29078 1.44519 1.68149 1.75765 1.16593C3.50743 3.3219 6.13208 4.72797 9.0692 4.86857C9.00671 4.60298 8.97546 4.33739 8.97546 4.05618C8.97546 2.10331 10.5534 0.509766 12.5219 0.509766C13.5374 0.509766 14.4591 0.931586 15.1153 1.63462C15.9121 1.47839 16.6776 1.18155 17.365 0.775356C17.0994 1.60337 16.537 2.29078 15.8027 2.72823C16.5214 2.65011 17.2088 2.44701 17.8493 2.18142C17.365 2.88446 16.7557 3.50937 16.0683 4.00931C16.0527 4.16554 16.0527 4.32177 16.0527 4.478Z" fill="#213F8F"/>
                            </svg>
                            <div class="ellipse-3-Email"></div>
                        </div>
                    </div>
                </a>
                <!-- Fin: Twitter  -->

                <!-- Inicio: WhatsApp  -->
                <a href="#">
                    <div class="eclipse-4">
                        <div class="whatsappEmail">
                            <svg class="group4-Email" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.5449 8.46167C15.5449 12.6018 12.1078 15.9607 7.96776 15.9607C6.71792 15.9607 5.48372 15.6482 4.39011 15.0546L0.421875 16.1013L1.48424 12.2112C0.828073 11.0707 0.484368 9.78962 0.484368 8.46167C0.484368 4.32158 3.8433 0.962646 7.98338 0.962646C9.98312 0.962646 11.8735 1.74379 13.2796 3.16548C14.6856 4.58717 15.5449 6.46193 15.5449 8.46167ZM14.2794 8.46167C14.2794 6.79001 13.5608 5.22772 12.3891 4.05599C11.2173 2.88427 9.65504 2.22811 7.98338 2.22811C4.54633 2.22811 1.74982 5.02462 1.74982 8.46167C1.74982 9.63339 2.07791 10.7895 2.70283 11.7737L2.84343 12.0081L2.21852 14.3047L4.57758 13.6797L4.7963 13.8203C5.7493 14.3828 6.8429 14.6952 7.96776 14.6952C11.4048 14.7109 14.2794 11.9143 14.2794 8.46167ZM11.7485 10.2583C11.7954 10.3364 11.7954 10.7114 11.6392 11.1488C11.4829 11.5863 10.733 11.9925 10.3737 12.0393C9.78002 12.1331 9.31134 12.0862 8.124 11.5706C6.24924 10.7582 5.01502 8.86787 4.92128 8.74288C4.82755 8.6179 4.15576 7.72739 4.15576 6.80563C4.15576 5.88388 4.64007 5.43081 4.81192 5.24334C4.98378 5.05586 5.18687 5.00899 5.31186 5.00899C5.43684 5.00899 5.56183 5.00899 5.67119 5.00899C5.78055 5.00899 5.93678 4.96212 6.09301 5.33708C6.24924 5.71203 6.62419 6.63378 6.67106 6.72752C6.71793 6.82126 6.74917 6.93062 6.68667 7.0556C6.32735 7.77426 5.93677 7.74301 6.13987 8.08672C6.85853 9.33655 7.59282 9.774 8.68642 10.3208C8.8739 10.4145 8.98325 10.3989 9.09261 10.2739C9.20197 10.1489 9.56131 9.72713 9.68629 9.53965C9.81128 9.35218 9.93625 9.38342 10.1081 9.44591C10.28 9.50841 11.2017 9.96147 11.3892 10.0552C11.5767 10.1333 11.7017 10.1802 11.7485 10.2583Z" fill="#213F8F"/>
                            </svg>
                            <div class="ellipse-4-Email"></div>
                        </div>
                    </div>
                </a>
                <!-- Fin: WhatsApp  -->

                <!-- Inicio: LinkedIn  -->
                <a href="#">
                    <div class="eclipse-5">
                        <div class="linkedinEmail">
                            <svg class="group5-Email" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                <path d="M0.21875 2.69727C0.21875 1.6974 1.03115 0.88501 2.03102 0.88501C3.03089 0.88501 3.84328 1.6974 3.84328 2.69727C3.84328 3.69714 3.03089 4.52516 2.03102 4.52516C1.03115 4.54078 0.21875 3.71277 0.21875 2.69727ZM0.468723 16.0237V5.9156H3.60893V16.0237H0.468723ZM12.2172 16.0237V11.1024C12.2172 9.93071 12.1859 8.4309 10.5924 8.4309C8.96761 8.4309 8.71765 9.69636 8.71765 11.0243V16.0237H5.57743V5.9156H8.59266V7.29042H8.63953C9.06135 6.49365 10.0768 5.66564 11.6079 5.66564C14.7794 5.66564 15.373 7.75911 15.373 10.4775V16.0237H12.2172Z" fill="#213F8F"/>
                            </svg>
                            <div class="ellipse-5-Email"></div>
                        </div>
                    </div>
                </a>
                <!-- Fin: LinkedIn  -->

            <!-- ................................. -->
            <!-- FIN: Redes Sociales            -->
            <!-- ................................. -->
                </div>
        </div>


        <!--################################################################################################# -->



    

  

        <!--################################################################################################# -->



       

    </body>
</html>
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                       INICIO BODY                                                -->
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <div class="LOGO-PNG-2"></div>

    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++    -->
    <!-- INICIO: Title Page                                     -->
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++    -->
    <span class="Title-save-page">
        {{ __('translation.finalprocess.thank.text') }},<br>
        <span class="Title-save-page-style1">{{ $first_name." ".$last_name }}</span>
    </span>
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++    -->
    <!-- FIN: Title Page                                        -->
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++    -->

    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++    -->
    <!-- INICIO: Mensaje                                        -->
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++    -->
    <span class="Mess">
        {{ __('translation.finalprocess.sent1.text') }}
        <span class="Mess-text-style-1">
            {{ 
                substr_replace(
                    substr($email_address, 0, strripos($email_address, "@")), "********", 0).
                    substr($email_address, strripos($email_address, "@")
                );
            }}
        </span>
        {{ __('translation.finalprocess.sent2.text') }}
    </span>
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++    -->
    <!-- FIN: Mensaje                                           -->
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++    -->

        <!-- ................................. -->
    <!-- Inicio: Botón Back                -->
    <!-- ................................. -->
    <a href="#">
        <button class="button-backHS" type="button">{{ __('translation.finalprocess.gohomepage.button') }}</button>
    </a>
    <!-- ................................. -->
    <!-- Fin: Botón Back                   -->
    <!-- ................................. -->

    <!-- ................................. -->
    <!-- Inicio: Botón Continue            -->
    <!-- ................................. -->
    <a href="#">
        <button class="button-continueHS" wire:click="buttons('start')" type="button">{{ __('translation.finalprocess.continue.button') }}</button>
    </a>
    <!-- ................................. -->
    <!-- Inicio: Botón Continue            -->
    <!-- ................................. -->

    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                         FIN BODY                                                  -->
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
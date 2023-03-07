        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!--                                       INICIO BODY                                                -->
        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        
        <!-- ................................. -->
        <!-- Inicio: Título de pagina          -->
        <!-- ................................. -->
        <span class="USA-PATRIOT-Act-Disclosure">
           {{ __('translation.checkagreement.usapatriottitle.text') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Título de pagina             -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Cuerpo Text               -->
        <!-- ................................. -->

        <span class="cuerpotext">
            {!! __('translation.checkagreement.usapatriotbody.text') !!}
        </span>
        <!-- ................................. -->
        <!-- Fin: Cuerpo Text                  -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Checkbox Switch           -->
        <!-- ................................. -->
        <label class="switch">
            <input type="checkbox" wire:click="check_agreement" value='1'>
            <span class="slider round"></span>
        </label>
        <!-- ................................. -->
        <!-- Fin: Checkbox Switch              -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Check Terms               -->
        <!-- ................................. -->
        <span class="check-terms">
            {!! __('translation.checkagreement.usapatriotcheck.checkbox') !!}
        </span>
        <!-- ................................. -->
        <!-- Fin: Check Terms                  -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Botón Continue            -->
        <!-- ................................. -->

        @if($agreement)
            <a href="#" wire:click="buttons('person_confirm')">
                <button class="button-continue1" type="button">{{ __('translation.checkagreement.usapatriotbutton.button') }}</button>
            </a>
        @endif
        <!-- ................................. -->
        <!-- Inicio: Botón Continue            -->
        <!-- ................................. -->

        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!--                                         FIN BODY                                                  -->
        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
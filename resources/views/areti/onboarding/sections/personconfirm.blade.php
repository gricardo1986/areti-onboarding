        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!--                                       INICIO BODY                                                -->
        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        

        <!-- ................................. -->
        <!-- Inicio: Title Page                -->
        <!-- ................................. -->
        <span class="Titlepage">
          {{ __('translation.personconfirm.usperson.text') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Title Page                   -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Checkbutton YES           -->
        <!-- ................................. -->
        <input class="input14" id="Yes" type="radio" wire:model="us_person" value="yes" checked>
        <label class="Yes" for="Yes"><span></span>{{ __('translation.personconfirm.uspersonyes.radio') }}</label>
        <!-- ................................. -->
        <!-- Fin: Checkbutton YES              -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Checkbutton NO            -->
        <!-- ................................. -->
        <input class="input16" id="No" type="radio" wire:model="us_person" value="no">
        <label class="No" for="No"><span></span>{{ __('translation.personconfirm.uspersonno.radio') }}</label>
        <!-- ................................. -->
        <!-- Fin: Checkbutton NO               -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Note                      -->
        <!-- ................................. -->
        <span class="Note">
            {!! __('translation.personconfirm.usperson.note') !!}
        </span>
        <!-- ................................. -->
        <!-- Fin: Note                         -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Botón Back                -->
        <!-- ................................. -->
        <a href="#" wire:click="buttons('check_agreement')">
            <button class="button-back" type="button">{{ __('translation.personconfirm.uspersonback.button') }}</button>
        </a>
        <!-- ................................. -->
        <!-- Fin: Botón Back                   -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Botón Continue            -->
        <!-- ................................. -->
        <a href="#" wire:click="buttons('personal_details')">
            <button class="button-continue1" type="button">{{ __('translation.personconfirm.uspersoncontinue.button') }}</button>
        </a>
        <!-- ................................. -->
        <!-- Inicio: Botón Continue            -->
        <!-- ................................. -->


        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!--                                         FIN BODY                                                  -->
        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!--                                       INICIO BODY                                                -->
        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        

        <!-- ................................. -->
        <!-- Inicio: Title Page                -->
        <!-- ................................. -->
        <span class="Titlepage">
            {{ __('translation.additionalpersonconfirm.usperson.text') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Title Page                   -->
        <!-- ................................. -->

        <form wire:submit.prevent="save_another_person_confirm">
            <!-- ................................. -->
            <!-- Inicio: Checkbutton YES           -->
            <!-- ................................. -->
            <input class="input14" id="Yes" type="radio" wire:model="another_us_person.{{ $number_another_signer }}" value="yes" checked>
            <label class="Yes" for="Yes"><span></span>{{ __('translation.additionalpersonconfirm.uspersonyes.radio') }}</label>
            <!-- ................................. -->
            <!-- Fin: Checkbutton YES              -->
            <!-- ................................. -->

            <!-- ................................. -->
            <!-- Inicio: Checkbutton NO            -->
            <!-- ................................. -->
            <input class="input16" id="No" type="radio" wire:model="another_us_person.{{ $number_another_signer }}" value="no">
            <label class="No" for="No"><span></span>{{ __('translation.additionalpersonconfirm.uspersonno.radio') }}</label>
            <!-- ................................. -->
            <!-- Fin: Checkbutton NO               -->
            <!-- ................................. -->

            <!-- ................................. -->
            <!-- Inicio: Botón save                -->
            <!-- ................................. -->
            <a href="#">
                <button class="button-save" style=" position: absolute; top: 600px;" onclick="confirm('{{ __('translation.additionalpersonconfirm.message.alert') }}') || event.stopImmediatePropagation()">{{ __('translation.additionalpersonconfirm.save.button') }}</button>
            </a>
            <!-- ................................. -->
            <!-- Fin: Botón save                   -->
            <!-- ................................. -->
        </form>

        <!-- ................................. -->
        <!-- Inicio: Note                      -->
        <!-- ................................. -->
        <span class="Note">
            {!! __('translation.additionalpersonconfirm.usperson.note') !!}
        </span>
        <!-- ................................. -->
        <!-- Fin: Note                         -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Botón Back                -->
        <!-- ................................. -->
        <a href="#" wire:click="buttons('another_signer')">
            <button class="button-back2" style=" position: absolute; top: 600px;" type="button">{!! __('translation.additionalpersonconfirm.back.button') !!}</button>
        </a>
        <!-- ................................. -->
        <!-- Fin: Botón Back                   -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Botón Continue            -->
        <!-- ................................. -->
        <a href="#" wire:click="buttons('another_personal_details')">
            <button class="button-continue2" style=" position: absolute; top: 600px;" type="button">{!! __('translation.additionalpersonconfirm.continue.button') !!}</button>
        </a>
        <!-- ................................. -->
        <!-- Inicio: Botón Continue            -->
        <!-- ................................. -->


        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!--                                         FIN BODY                                                  -->
        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
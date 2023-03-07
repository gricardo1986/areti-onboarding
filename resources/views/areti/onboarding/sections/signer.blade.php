    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                       INICIO BODY                                                -->
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    
    <!-- ................................. -->
    <!-- Inicio: Title Page - NO SIGNER    -->
    <!-- ................................. -->
    <span class="Title-page-no-signer">
        {{ __('translation.signer.title.text') }}
    </span>
    <!-- ................................. -->
    <!-- Fin: Title Page - NO SIGNER       -->
    <!-- ................................. -->

    <!-- ................................. -->
    <!-- Inicio: Checkbutton YES           -->
    <!-- ................................. -->
    <input class="input20" wire:model="option_signer" value="yes" id="Yes" type="radio" name="user">
    <label class="Yes4" for="Yes"><span></span>{{ __('translation.signer.optionsigneryes.text') }}</label>
    <!-- ................................. -->
    <!-- Fin: Checkbutton YES              -->
    <!-- ................................. -->

    <!-- ................................. -->
    <!-- Inicio: Checkbutton NO            -->
    <!-- ................................. -->
    <input class="input21" wire:model="option_signer" value="no" id="No" type="radio" name="user" checked>
    <label class="No4"for="No"><span></span>{{ __('translation.signer.optionsignerno.text') }}</label>
    <!-- ................................. -->
    <!-- Fin: Checkbutton NO               -->
    <!-- ................................. -->


    <!-- ................................. -->
    <!-- Inicio: Botón save                -->
    <!-- ................................. -->
    <a href="#">
        <button class="button-save2-2-2" type="button">{{ __('translation.signer.save.button') }}</button>
    </a>
    <!-- ................................. -->
    <!-- Fin: Botón save                   -->
    <!-- ................................. -->

    <!-- ................................. -->
    <!-- Inicio: Botón Back                -->
    <!-- ................................. -->
    <a href="#">
        <button class="button-back4-2-2" wire:click="buttons('expected_receive_send_money')" type="button">{{ __('translation.signer.back.button') }}</button>
    </a>
    <!-- ................................. -->
    <!-- Fin: Botón Back                   -->
    <!-- ................................. -->

    <!-- ................................. -->
    <!-- Inicio: Botón Continue            -->
    <!-- ................................. -->
    <a href="#">
        <button class="button-continue4-2-2" wire:click="buttons('option_signer')" type="button">{{ __('translation.signer.continue.button') }}</button>
    </a>
    <!-- ................................. -->
    <!-- Inicio: Botón Continue            -->
    <!-- ................................. -->


    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                         FIN BODY                                                  -->
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
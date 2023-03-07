    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                       INICIO BODY                                                -->
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    
    <!-- ................................. -->
    <!-- Inicio: Title Page                -->
    <!-- ................................. -->
    <span class="Personal-details">
        {{ __('translation.choosesigner.title.text') }}
    </span>
    <!-- ................................. -->
    <!-- Fin: Title Page                   -->
    <!-- ................................. -->

    <!-- ................................. -->
    <!-- Inicio: Message                   -->
    <!-- ................................. -->
    <span class="message">
        {{ __('translation.choosesigner.body.text') }}
    </span>
    <!-- ................................. -->
    <!-- Fin: Message                      -->
    <!-- ................................. -->


        <!-- ....................................... -->
        <!-- Inicio: Country -label                  -->
        <!-- ....................................... -->
        <span class="Street-Address">
            {{ __('translation.choosesigner.signer.text') }}
        </span>
        <!-- ....................................... -->
        <!-- Fin: Country - label                    -->
        <!-- ....................................... -->

        <!-- ....................................... -->
        <!-- Inicio: Country - Select                 -->
        <!-- ....................................... -->

        <select class="Input8" wire:model='selected_exist_signer'>
            <option value="-1" Selected>{{ __('translation.choosesigner.signer.option1') }}</option>
            <option data-countryCode="" value="0">{{ __('translation.choosesigner.signer.option2') }}</option>
            @foreach($list_aditional_signer as $sign)
                <option value="{{ $sign->id }}">{{ $sign->first_name." ".$sign->last_name }}</option>
            @endforeach
        </select>

        <!-- ................................. -->
        <!-- Fin: Country - select             -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Fin: Country                            -->
        <!-- ....................................... -->


    <!-- ................................. -->
    <!-- Inicio: Botón Back                -->
    <!-- ................................. -->
    <a href="#">
        <button wire:click="buttons('signer')" style=" position: absolute; left:550px; top: 400px;" class="button-back2" type="button">{{ __('translation.choosesigner.back.button') }}</button>
    </a>
    <!-- ................................. -->
    <!-- Fin: Botón Back                   -->
    <!-- ................................. -->

    <!-- ................................. -->
    <!-- Inicio: Botón Continue            -->
    <!-- ................................. -->
    <a href="#">
        <button wire:click="select_signer" style=" position: absolute; top: 400px;" class="button-continue1" type="button">{{ __('translation.choosesigner.continue.button') }}</button>
    </a>
    <!-- ................................. -->
    <!-- Inicio: Botón Continue            -->
    <!-- ................................. -->

    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                         FIN BODY                                                  -->
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
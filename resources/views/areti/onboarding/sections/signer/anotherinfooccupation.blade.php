    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                       INICIO BODY                                                -->
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    

    <!-- ................................. -->
    <!-- Inicio: Title Page                -->
    <!-- ................................. -->
    <span class="Personal-details">
        {{ __('translation.additionaltelluswhatdoyoudo.title.text') }}
    </span>
    <!-- ................................. -->
    <!-- Fin: Title Page                   -->
    <!-- ................................. -->

    <!-- ................................. -->
    <!-- Inicio: Message                   -->
    <!-- ................................. -->
    <span class="message">
        {{ __('translation.additionaltelluswhatdoyoudo.body.text') }}
    </span>
    <!-- ................................. -->
    <!-- Fin: Message                      -->
    <!-- ................................. -->

    <form wire:submit.prevent="save_another_info_occupation">
    
        <!-- ................................. -->
        <!-- Inicio: Occupation - label        -->
        <!-- ................................. -->
        <span class="Ocupation">
            {{ __('translation.additionaltelluswhatdoyoudo.occupationtype.text') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Occupation - label           -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: Ocupation - Select              -->
        <!-- ....................................... -->
        <select wire:model="another_occupation.{{ $number_another_signer }}" class="Ocupationselect" name="Ocupationselect">
            <option value="" selected>{{ __('translation.additionaltelluswhatdoyoudo.occupationtype.option') }}</option>
            @foreach($list_occupation[$translation] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <!-- ................................. -->
        <!-- Fin: Ocupation - select           -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Occupation sector - label -->
        <!-- ................................. -->
        <span class="Occupation-Sector">
            {{ __('translation.additionaltelluswhatdoyoudo.occupationsector.text') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Occupation sector - label    -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: Ocupation sector - Select       -->
        <!-- ....................................... -->
        <select wire:model="another_customer_subtype.{{ $number_another_signer }}" class="Ocupation-sector-select" name="Ocupationselect">
            <option value="" selected>{{ __('translation.additionaltelluswhatdoyoudo.occupationtype.option') }}</option>
            @foreach($list_customer_subtype[$translation] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <!-- ................................. -->
        <!-- Fin: Ocupation sector - select    -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Occupation - label        -->
        <!-- ................................. -->
        <span class="Annual-income">
            {{ __('translation.additionaltelluswhatdoyoudo.annualincome.text') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Occupation - label           -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: Social security Number - Input  -->
        <!-- ....................................... -->
        <input type="input" class="Input11" wire:model="another_annual_income.{{ $number_another_signer }}">
        <!-- ....................................... -->
        <!-- Fin: Social security Number - Input     -->
        <!-- ....................................... -->

        <!-- ................................. -->
        <!-- Inicio: Employed - label           -->
        <!-- .................................. -->
        <span class="Employed">
            {{ __('translation.additionaltelluswhatdoyoudo.employer.text') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Employed - label             -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: Social security Number - Input  -->
        <!-- ....................................... -->
        <input type="input" class="Input12" wire:model="another_employer.{{ $number_another_signer }}">
        <!-- ....................................... -->
        <!-- Fin: Social security Number - Input     -->
        <!-- ....................................... -->

        <!-- ....................................... -->
        <!-- Inicio: About you words - Label         -->
        <!-- ....................................... -->
        <span class="About-you-words">
            {{ __('translation.additionaltelluswhatdoyoudo.description.text') }}
        </span>
        <!-- ....................................... -->
        <!-- Fin:About you words - Label             -->
        <!-- ....................................... -->

        <!-- ....................................... -->
        <!-- Inicio: About you words - input         -->
        <!-- ....................................... -->
        <textarea class="Input13" wire:model="another_description_position.{{ $number_another_signer }}"></textarea>
        <!-- ....................................... -->
        <!-- Fin: About you words - input            -->
        <!-- ....................................... -->

        <!-- ....................................... -->
        <!-- Inicio: Limite-caracteres - Label       -->
        <!-- ....................................... -->
        <span class="Limite-caracteres">
            {{ __('translation.additionaltelluswhatdoyoudo.sizedescription.text') }}
        </span>
        <!-- ....................................... -->
        <!-- Fin: Limite-caracteres - Label          -->
        <!-- ....................................... -->

        <!-- ..................................... -->
        <!-- INICIO : Political exposure - Title   -->
        <!-- ..................................... -->
        <span class="Political-exposure-title">
            {{ __('translation.additionaltelluswhatdoyoudo.politicalexposure.text') }}
        </span>
        <!-- ................................... -->
        <!-- FIN : Political exposure - Title    -->
        <!-- ................................... -->

        <!-- ....................................... -->
        <!-- INICIO : Political exposure - M1 & M2   -->
        <!-- ....................................... -->
        <span class="Political-exposure-m1">
            {!! __('translation.additionaltelluswhatdoyoudo.policyexplain.text') !!}
        </span>
        <!-- ....................................... -->
        <!-- FIN : Political exposure - M1 & M2      -->
        <!-- ....................................... -->

        <!-- ................................. -->
        <!-- Inicio: Checkbutton YES           -->
        <!-- ................................. -->
        <input class="input14" id="Yes" type="radio" wire:model="another_political_exposure_disclosure.{{ $number_another_signer }}" value="1">
        <label class="Yes1" for="Yes"><span></span>{{ __('translation.additionaltelluswhatdoyoudo.politicalexposureyes.radio') }}</label>
        <!-- ................................. -->
        <!-- Fin: Checkbutton YES              -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Checkbutton NO            -->
        <!-- ................................. -->
        <input class="input15" id="No" type="radio" wire:model="another_political_exposure_disclosure.{{ $number_another_signer }}" value="0">
        <label class="No1"for="No"><span></span>{{ __('translation.additionaltelluswhatdoyoudo.politicalexposureno.radio') }}</label>
        <!-- ................................. -->
        <!-- Fin: Checkbutton NO               -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Botón save                -->
        <!-- ................................. -->
        <a href="#">
            <button class="button-save2" onclick="confirm('{{ __('translation.additionaltelluswhatdoyoudo.message.alert') }}') || event.stopImmediatePropagation()" type="submit">{{ __('translation.additionaltelluswhatdoyoudo.save.button') }}</button>
        </a>
        <!-- ................................. -->
        <!-- Fin: Botón save                   -->
        <!-- ................................. -->

    </form>

    <!-- ................................. -->
    <!-- Inicio: Botón Back                -->
    <!-- ................................. -->
    <a href="#">
        <button wire:click="buttons('another_home_address')" class="button-back4" type="button">{{ __('translation.additionaltelluswhatdoyoudo.back.button') }}</button>
    </a>
    <!-- ................................. -->
    <!-- Fin: Botón Back                   -->
    <!-- ................................. -->

    <!-- ................................. -->
    <!-- Inicio: Botón Continue            -->
    <!-- ................................. -->
    <a href="#">
        <button wire:click="buttons('signer')" class="button-continue4" type="button">{{ __('translation.additionaltelluswhatdoyoudo.continue.button') }}</button>
    </a>
    <!-- ................................. -->
    <!-- Inicio: Botón Continue            -->
    <!-- ................................. -->

    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                         FIN BODY                                                  -->
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
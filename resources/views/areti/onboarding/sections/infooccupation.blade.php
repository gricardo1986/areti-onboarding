    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                       INICIO BODY                                                -->
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    

    <!-- ................................. -->
    <!-- Inicio: Title Page                -->
    <!-- ................................. -->
    <span class="Personal-details">
        {{ __('translation.telluswhatdoyoudo.title.text') }}
    </span>
    <!-- ................................. -->
    <!-- Fin: Title Page                   -->
    <!-- ................................. -->

    <!-- ................................. -->
    <!-- Inicio: Message                   -->
    <!-- ................................. -->
    <span class="message">
        {{ __('translation.telluswhatdoyoudo.body.text') }}
    </span>
    <!-- ................................. -->
    <!-- Fin: Message                      -->
    <!-- ................................. -->

    <form wire:submit.prevent="save_info_occupation">
    
        <!-- ................................. -->
        <!-- Inicio: Occupation - label        -->
        <!-- ................................. -->
        <span class="Ocupation">
            {{ __('translation.telluswhatdoyoudo.occupationtype.text') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Occupation - label           -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: Ocupation - Select              -->
        <!-- ....................................... -->
        <select wire:model="occupation" class="Ocupationselect" name="Ocupationselect">
            <option value="" selected>{{ __('translation.telluswhatdoyoudo.occupationtype.option') }}</option>
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
            {{ __('translation.telluswhatdoyoudo.occupationsector.text') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Occupation sector - label    -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: Ocupation sector - Select       -->
        <!-- ....................................... -->
        <select wire:model="customer_subtype"class="Ocupation-sector-select" name="Ocupationselect">
            <option value="" selected>{{ __('translation.telluswhatdoyoudo.occupationsector.option') }}</option>
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
            {{ __('translation.telluswhatdoyoudo.annualincome.text') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Occupation - label           -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: Social security Number - Input  -->
        <!-- ....................................... -->
        <input type="input" class="Input11" wire:model="annual_income">
        <!-- ....................................... -->
        <!-- Fin: Social security Number - Input     -->
        <!-- ....................................... -->

        <!-- ................................. -->
        <!-- Inicio: Employed - label           -->
        <!-- .................................. -->
        <span class="Employed">
            {{ __('translation.telluswhatdoyoudo.employer.text') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Employed - label             -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: Social security Number - Input  -->
        <!-- ....................................... -->
        <input type="input" class="Input12" wire:model="employer">
        <!-- ....................................... -->
        <!-- Fin: Social security Number - Input     -->
        <!-- ....................................... -->

        <!-- ....................................... -->
        <!-- Inicio: About you words - Label         -->
        <!-- ....................................... -->
        <span class="About-you-words">
            {{ __('translation.telluswhatdoyoudo.description.text') }}
        </span>
        <!-- ....................................... -->
        <!-- Fin:About you words - Label             -->
        <!-- ....................................... -->

        <!-- ....................................... -->
        <!-- Inicio: About you words - input         -->
        <!-- ....................................... -->
        <textarea class="Input13" wire:model="description_position"></textarea>
        <!-- ....................................... -->
        <!-- Fin: About you words - input            -->
        <!-- ....................................... -->

        <!-- ....................................... -->
        <!-- Inicio: Limite-caracteres - Label       -->
        <!-- ....................................... -->
        <span class="Limite-caracteres">
            {{ __('translation.telluswhatdoyoudo.sizedescription.text') }}
        </span>
        <!-- ....................................... -->
        <!-- Fin: Limite-caracteres - Label          -->
        <!-- ....................................... -->

        <!-- ..................................... -->
        <!-- INICIO : Political exposure - Title   -->
        <!-- ..................................... -->
        <span class="Political-exposure-title">
            {{ __('translation.telluswhatdoyoudo.politicalexposure.text') }}
        </span>
        <!-- ................................... -->
        <!-- FIN : Political exposure - Title    -->
        <!-- ................................... -->

        <!-- ....................................... -->
        <!-- INICIO : Political exposure - M1 & M2   -->
        <!-- ....................................... -->
        <span class="Political-exposure-m1">
            {!! __('translation.telluswhatdoyoudo.policyexplain.text') !!}
        </span>
        <!-- ....................................... -->
        <!-- FIN : Political exposure - M1 & M2      -->
        <!-- ....................................... -->

        <!-- ................................. -->
        <!-- Inicio: Checkbutton YES           -->
        <!-- ................................. -->
        <input class="input14" id="Yes" type="radio" wire:model="political_exposure_disclosure" value="1">
        <label class="Yes1" for="Yes"><span></span>{!! __('translation.telluswhatdoyoudo.politicalexposureyes.radio') !!}</label>
        <!-- ................................. -->
        <!-- Fin: Checkbutton YES              -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Checkbutton NO            -->
        <!-- ................................. -->
        <input class="input15" id="No" type="radio" wire:model="political_exposure_disclosure" value="0">
        <label class="No1"for="No"><span></span>{!! __('translation.telluswhatdoyoudo.politicalexposureno.radio') !!}</label>
        <!-- ................................. -->
        <!-- Fin: Checkbutton NO               -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Botón save                -->
        <!-- ................................. -->
        <a href="#">
            <button class="button-save2" onclick="confirm('{{ __('translation.telluswhatdoyoudo.message.alert') }}') || event.stopImmediatePropagation()" type="submit">{{ __('translation.telluswhatdoyoudo.save.button') }}</button>
        </a>
        <!-- ................................. -->
        <!-- Fin: Botón save                   -->
        <!-- ................................. -->

    </form>

    <!-- ................................. -->
    <!-- Inicio: Botón Back                -->
    <!-- ................................. -->
    <a href="#">
        <button wire:click="buttons('home_address')" class="button-back4" type="button">{{ __('translation.telluswhatdoyoudo.back.button') }}</button>
    </a>
    <!-- ................................. -->
    <!-- Fin: Botón Back                   -->
    <!-- ................................. -->

    <!-- ................................. -->
    <!-- Inicio: Botón Continue            -->
    <!-- ................................. -->
    <a href="#">
        <button wire:click="buttons('account_purpose')" class="button-continue4" type="button">{{ __('translation.telluswhatdoyoudo.continue.button') }}</button>
    </a>
    <!-- ................................. -->
    <!-- Inicio: Botón Continue            -->
    <!-- ................................. -->

    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                         FIN BODY                                                  -->
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
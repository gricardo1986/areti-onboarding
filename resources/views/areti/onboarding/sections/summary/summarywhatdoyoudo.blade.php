<details wire:click="change_status_accordeon('2')" @if($summary_accordeon[2]==true) open @endif>
    <summary>
        <span class="summary-title">What do you do</span>
        <div class="summary-chevron-up">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </div>
    </summary>
    
    <div class="summary-content5">

        <form wire:submit.prevent="save_info_occupation">
            <!-- ................................. -->
            <!-- Inicio: Occupation - label        -->
            <!-- ................................. -->
            <span class="Ocupation" style="position: absolute; top:132px; left: 95px;">
                Occupation Type
            </span>
            <!-- ................................. -->
            <!-- Fin: Occupation - label           -->
            <!-- ................................. -->

            <!-- ....................................... -->
            <!-- Inicio: Ocupation - Select              -->
            <!-- ....................................... -->
            <select wire:model="occupation" class="Ocupationselect" name="Ocupationselect" style="padding-left: 10px; padding-right: 10px; position: absolute; top:153px; left: 95px;" required>
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
            <span class="Occupation-Sector" style="font-size:11px; position: absolute; top:132px; left: 332px;">
                Occupation sector
            </span>
            <!-- ................................. -->
            <!-- Fin: Occupation sector - label    -->
            <!-- ................................. -->

            <!-- ....................................... -->
            <!-- Inicio: Ocupation sector - Select       -->
            <!-- ....................................... -->
            <select wire:model="customer_subtype"class="Ocupation-sector-select" name="Ocupationselect" style=" padding-left: 10px; padding-right: 10px; position: absolute; top:153px; left: 332px;" required>
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
            <span class="Annual-income" style=" font-size:11px; position: absolute; top:208px; left: 95px;">
                Annual income
            </span>
            <!-- ................................. -->
            <!-- Fin: Occupation - label           -->
            <!-- ................................. -->

            <!-- ....................................... -->
            <!-- Inicio: Social security Number - Input  -->
            <!-- ....................................... -->
            <input class="Input11" wire:model="annual_income" style=" padding-left: 10px; padding-right: 10px; position: absolute; top:228px; left: 95px;" required>
            <!-- ....................................... -->
            <!-- Fin: Social security Number - Input     -->
            <!-- ....................................... -->

            <!-- ................................. -->
            <!-- Inicio: Employed - label           -->
            <!-- .................................. -->
            <span class="Employed" style="font-size:11px;position: absolute; top:208px; left: 332px;">
                Employer (Optional)
            </span>
            <!-- ................................. -->
            <!-- Fin: Employed - label             -->
            <!-- ................................. -->

            <!-- ....................................... -->
            <!-- Inicio: Social security Number - Input  -->
            <!-- ....................................... -->
            <input class="Input12" wire:model="employer" disabled style=" padding-left: 10px; padding-right: 10px; position: absolute; top:228px; left: 332px;">
            <!-- ....................................... -->
            <!-- Fin: Social security Number - Input     -->
            <!-- ....................................... -->

            <!-- ....................................... -->
            <!-- Inicio: About you words - Label         -->
            <!-- ....................................... -->
            <span class="About-you-words" style="position: absolute; top:288px; left: 95px;">
                In a few words, please describe what you do:
            </span>
            <!-- ....................................... -->
            <!-- Fin:About you words - Label             -->
            <!-- ....................................... -->

            <!-- ....................................... -->
            <!-- Inicio: About you words - input         -->
            <!-- ....................................... -->
            <textarea class="Input13" style="position: absolute; top:318px; left: 95px;" wire:model="description_position" required></textarea>
            <!-- ....................................... -->
            <!-- Fin: About you words - input            -->
            <!-- ....................................... -->

            <!-- ....................................... -->
            <!-- Inicio: Limite-caracteres - Label       -->
            <!-- ....................................... -->
            <span class="Limite-caracteres" style="position: absolute; top:428px; left: 95px;">
                250 characters left
            </span>
            <!-- ....................................... -->
            <!-- Fin: Limite-caracteres - Label          -->
            <!-- ....................................... -->

            <!-- ..................................... -->
            <!-- INICIO : Political exposure - Title   -->
            <!-- ..................................... -->
            <span class="Political-exposure-title" style="position: absolute; top:478px; left: 95px;">
                Political exposure disclosure
            </span>
            <!-- ................................... -->
            <!-- FIN : Political exposure - Title    -->
            <!-- ................................... -->

            <!-- ....................................... -->
            <!-- INICIO : Political exposure - M1 & M2   -->
            <!-- ....................................... -->
            <span class="Political-exposure-m1" style="position: absolute; top:508px; left: 95px;">
            Do you, or any immediate family member, or any business / close associate; currently or formally, have been entrusted with a prominent public functions by a foreign or domestic government, an International Organization and / or a Government owned entity?<br><br>          <span class="Political-exposure-m2">• An Immediate family member is defined as a parent, sibling, spouse, childor in law.
            • Abusiness / close associate are individuals who are closely connected to a PEP, either socially or professionally.</span>
            </span>
            <!-- ....................................... -->
            <!-- FIN : Political exposure - M1 & M2      -->
            <!-- ....................................... -->



            <!-- ................................. -->
            <!-- Inicio: Checkbutton YES           -->
            <!-- ................................. -->
            <input class="input14-22" id="Yes" type="radio" name="user" wire:model="political_exposure_disclosure" value="1" required>
            <label class="Yes1-22" for="Yes"><span></span>Yes</label>
            <!-- ................................. -->
            <!-- Fin: Checkbutton YES              -->
            <!-- ................................. -->

            <!-- ................................. -->
            <!-- Inicio: Checkbutton NO            -->
            <!-- ................................. -->
            <input class="input15-22" id="No" type="radio" name="user" wire:model="political_exposure_disclosure" value="0" required>
            <label class="No1-22" for="No"><span></span>No</label>
            <!-- ................................. -->
            <!-- Fin: Checkbutton NO               -->
            <!-- ................................. -->

            <a href="#">
                <button class="button-update-summary3" onclick="confirm('{{ __('translation.telluswhatdoyoudo.message.alert') }}') || event.stopImmediatePropagation()" type="submit">{{ 'Update' }}</button>
            </a>

        </form>
    </div>
    <div class="summary-chevron-down">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>
    </div>
</details>
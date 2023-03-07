    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                       INICIO BODY                                                -->
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    
    <!-- ................................. -->
    <!-- Inicio: Title Page                -->
    <!-- ................................. -->
    <span class="Personal-details">
        {{ __('translation.additionalhomeaddress.title.text') }}
    </span>
    <!-- ................................. -->
    <!-- Fin: Title Page                   -->
    <!-- ................................. -->

    <!-- ................................. -->
    <!-- Inicio: Message                   -->
    <!-- ................................. -->
    <span class="message">
        {{ __('translation.additionalhomeaddress.body.text') }}
    </span>
    <!-- ................................. -->
    <!-- Fin: Message                      -->
    <!-- ................................. -->

    <form wire:submit.prevent="save_another_home_address">

        <!-- ................................. -->
        <!-- Inicio: Street Address            -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: Street Address -label           -->
        <!-- ....................................... -->
        <span class="Street-Address">
            {{ __('translation.additionalhomeaddress.street.text') }}
        </span>
        <!-- ....................................... -->
        <!-- Fin: Street Address -label              -->
        <!-- ....................................... -->

        <!-- ....................................... -->
        <!-- Inicio: Street Address - Input          -->
        <!-- ....................................... -->
        <input type="text" wire:model="another_street_address.{{ $number_another_signer }}" class="Input8" placeholder="{{ __('translation.additionalhomeaddress.street.placeholder') }}">
        <!-- ....................................... -->
        <!-- Fin: Street Address - Input             -->
        <!-- ....................................... -->

        <!-- ................................. -->
        <!-- Fin: Street Address               -->
        <!-- ................................. -->

        <!-- ................................ -->
        <!-- Inicio: Country                   -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: Country -label                  -->
        <!-- ....................................... -->
        <span class="Country">
            {{ __('translation.additionalhomeaddress.country.text') }}
        </span>
        <!-- ....................................... -->
        <!-- Fin: Country - label                    -->
        <!-- ....................................... -->

        <!-- ....................................... -->
        <!-- Inicio: Country - Select                 -->
        <!-- ....................................... -->
        <select class="Country-code3" name="countryCode" wire:model='another_country_address_id.{{ $number_another_signer }}'>
            <option data-countryCode="" value="" Selected>{{ __('translation.additionalhomeaddress.country.option') }}</option>
            @foreach($list_countries[$translation] as $key => $value)
                <option data-countryCode="{{ $key }}" value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <!-- ................................. -->
        <!-- Fin: Country - select             -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Fin: Country                            -->
        <!-- ....................................... -->

        <!-- ................................. -->
        <!-- Inicio: City                      -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: City -label                     -->
        <!-- ....................................... -->
        <span class="City">
            {{ __('translation.additionalhomeaddress.city.text') }}
        </span>
        <!-- ....................................... -->
        <!-- Fin: City - label                       -->
        <!-- ....................................... -->

        <!-- ....................................... -->
        <!-- Inicio: City - Select                   -->
        <!-- ....................................... -->
        <input class="Cityselect" name="Cityselect" type="text" wire:model="another_city_address.{{ $number_another_signer }}">
        <!-- ................................. -->
        <!-- Fin: City - select                -->
        <!-- ................................. -->
            
        <!-- ....................................... -->
        <!-- Fin: City                               -->
        <!-- ....................................... -->

        <!-- ................................. -->
        <!-- Inicio: State                     -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: State - label                   -->
        <!-- ....................................... -->
        <span class="State">
            {{ __('translation.additionalhomeaddress.state.text') }}
        </span>
        <!-- ....................................... -->
        <!-- Fin: State - label                      -->
        <!-- ....................................... -->

        <!-- ....................................... -->
        <!-- Inicio: State - Input                   -->
        <!-- ....................................... -->
        <input class="Input9" placeholder="{{ __('translation.additionalhomeaddress.state.placeholder') }}" type="text" wire:model="another_state_address.{{ $number_another_signer }}">
        <!-- ....................................... -->
        <!-- Fin: State - Input                      -->
        <!-- ....................................... -->
        
        <!-- ................................. -->
        <!-- Fin: State                        -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Zip Code                  -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: Zip Code - label                -->
        <!-- ....................................... -->
        <span class="Zip-Code">
            {{ __('translation.additionalhomeaddress.zipcode.text') }}
        </span>
        <!-- ....................................... -->
        <!-- Fin: Zip Code - label                   -->
        <!-- ....................................... -->

        <!-- ....................................... -->
        <!-- Inicio: Zip Code - Input                -->
        <!-- ....................................... -->
        <input type="text" wire:model="another_zip_code_address.{{ $number_another_signer }}" class="Input10" placeholder="{{ __('translation.additionalhomeaddress.zipcode.placeholder') }}">
        <!-- ....................................... -->
        <!-- Fin: Zip Code - Input                   -->
        <!-- ....................................... -->
        
        <!-- ................................. -->
        <!-- Fin: Zip Code                     -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Separador                 -->
        <!-- ................................. -->
        <div class="separador3"></div>
        <!-- ................................. -->
        <!-- Fin: Separador                    -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Title Drive license       -->
        <!-- ................................. -->
        <span class="Proof-address">
            {{ __('translation.additionalhomeaddress.proofaddress.text') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Title Drive license          -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: Upload Drive License - Message  -->
        <!-- ....................................... -->
        <span class="Upload-proof-address">
            {{ __('translation.additionalhomeaddress.proofaddressupload.text') }}
        </span>
        <!-- ....................................... -->
        <!-- Fin: Upload Drive License - Message     -->
        <!-- ....................................... -->

        <!-- ....................................... -->
        <!-- Inicio: Upload Drive License - input    -->
        <!-- ....................................... -->
        <div class="upload-btn-wrapper">
            <button class="btn">
                <image class="Imagedoc2"><br>
                {!! __('translation.additionalhomeaddress.proofaddress.upload') !!}
            </button>
            <input type="file" name="myfile" wire:model="another_proof_address.{{ $number_another_signer }}">
        </div>

        @isset($another_address_file[$number_another_signer])
            @foreach($another_address_file[$number_another_signer] as $add)
                @if($add->address_url_file)
                    <div class="view-FileAD" wire:key="add{{$add->id}}">
                        <span class="icon-fyleAD">
                            <a wire:click="download_file('{{ $add->id }}','address')">
                                <i class="fa-solid fa-file"></i>
                            </a>
                        </span>
                        <span class="Fyle-nameAD">
                            {{ substr($add->file_name,0,15)}}<br><span class="fyle-pesoAD"> 978kb</span>
                        </span>
                        <button wire:click="delete_file('{{ $add->id }}','address')" class="icon-delete-fyleAD">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>
                @endif
            @endforeach
        @endisset
        <!-- ....................................... -->
        <!-- Fin: Upload Drive License - input       -->
        <!-- ....................................... -->

        <!-- ................................. -->
        <!-- Inicio: Botón save                -->
        <!-- ................................. -->
        <a href="#">
            <button class="button-save" onclick="confirm('{{ __('translation.additionalhomeaddress.message.alert') }}') || event.stopImmediatePropagation()" type="submit">{{ __('translation.additionalhomeaddress.save.button') }}</button>
        </a>
        <!-- ................................. -->
        <!-- Fin: Botón save                   -->
        <!-- ................................. -->
    </form>

    <!-- ................................. -->
    <!-- Inicio: Botón Back                -->
    <!-- ................................. -->
    <a href="#">
        <button wire:click="buttons('another_personal_details')" class="button-back2" type="button">{{ __('translation.additionalhomeaddress.back.button') }}</button>
    </a>
    <!-- ................................. -->
    <!-- Fin: Botón Back                   -->
    <!-- ................................. -->

    <!-- ................................. -->
    <!-- Inicio: Botón Continue            -->
    <!-- ................................. -->
    <a href="#">
        <button wire:click="buttons('another_info_occupation')" class="button-continue2" type="button">{{ __('translation.additionalhomeaddress.continue.button') }}</button>
    </a>
    <!-- ................................. -->
    <!-- Inicio: Botón Continue            -->
    <!-- ................................. -->

    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                         FIN BODY                                                  -->
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
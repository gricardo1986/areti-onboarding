<details wire:click="change_status_accordeon('1')" @if($summary_accordeon[1]==true) open @endif>
    <summary>
        <span class="summary-title">Home address</span>
        <div class="summary-chevron-up">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </div>
    </summary>
    
    <div class="summary-content">

        <form wire:submit.prevent="save_home_address">

            <!-- ................................. -->
            <!-- Incio: Street-Address-Summary     -->
            <!-- ................................. -->
            <div class="Group-9646">
                <!-- Inicio: Label Street-Address-Summary -->
                <span class="Street-Address-Summary">
                    Street Address
                </span>
                <!-- Inicio: Label Street-Address-Summary -->

                <!-- Inicio: Input Street-Address-Summary -->
                <input class="Street-Address-Summary-input" wire:model="street_address" placeholder="163 Lincoln Ave, Apartament 101" required>
                <!-- Fin: Input Street-Address-Summary -->
            </div>
            <!-- ................................. -->
            <!-- Fin: Street-Address-Summary       -->
            <!-- ................................. -->

            <!-- ................................. -->
            <!-- Incio: Country                    -->
            <!-- ................................. -->
            <div class="Group-9647-2">
                <span class="Country-home-address-summary">
                    Country
                </span>
                <select class="Country-code-summary-homeAddress" name="countryCode" wire:model='country_address_id' required>
                    <option data-countryCode="" value="" Selected>{{ __('translation.homeaddress.country.option') }}</option>
                    @foreach($list_countries[$translation] as $key => $value)
                        <option data-countryCode="{{ $key }}" value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <!-- ................................. -->
            <!-- Fin: Country                      -->
            <!-- ................................. -->

            <!-- ................................. -->
            <!-- Inicio: City                      -->
            <!-- ................................. -->
            <div class="Group-9647-3">
                <span class="City-homeAddress-Summary">
                    City
                </span>
                <input class="City-code-summary-homeAddress" name="Cityselect" type="text" wire:model="city_address" placeholder="{{ __('translation.homeaddress.city.placeholder') }}" required>
            </div>
            <!-- ................................. -->
            <!-- Fin: City                         -->
            <!-- ................................. -->

            <!-- ................................. -->
            <!-- Inicio: State                     -->
            <!-- ................................. -->
            <div class="Group-9647-4">
                <span class="State-Summary-homeaddress">
                    State
                </span>
                <input class="inputstate-summary" wire:model="state_address" placeholder="New York (NY)" required>
            </div>
            <!-- ................................. -->
            <!-- Fin: State                        -->
            <!-- ................................. -->

            <!-- ................................. -->
            <!-- Inicio: ZIP code                  -->
            <!-- ................................. -->
            <div class="Group-9647-5">
                <span class="labelZipCode-summary">
                    Zip Code
                </span>
                <input class="inputZipCode-summary" wire:model="zip_code_address" placeholder="130001" required>
            </div>
            <!-- ................................. -->
            <!-- Fin: ZIP code                     -->
            <!-- ................................. -->

            <!-- ................................. -->
            <!-- Inicio: Separador                 -->
            <!-- ................................. -->
            <div class="Separador-summary"></div>
            <!-- ................................. -->
            <!-- Fin: Separador                    -->
            <!-- ................................. -->

            <span class="Proof-of-address">
                Proof of address
            </span>

            <span class="Please-upload-a-proof-of-your-address-summary">
                Please upload a proof of your address.
            </span>
            <!-- ....................................... -->
            <!-- Inicio: Upload Drive License - input    -->
            <!-- ....................................... -->
            <div class="upload-btn-wrapper" style="position: absolute;height: 102px;top:445px;left:330px; right: 446px;">
                <button class="btn">
                    <image class="Imagedoc2"><br>
                        {!! __('translation.homeaddress.proofaddress.upload') !!}
                </button>
                <input type="file" name="myfile" wire:model="proof_address" />
            </div>
    
            @isset($address_file)
                @foreach($address_file as $add)
                    @if($add->address_url_file)
                        <div class="view-File" wire:key="add{{$add->id}}" style="width: 460px;height: 34px;position: absolute; left:95px;top:570px">
                            <span class="icon-fyle">
                                <a wire:click="download_file('{{ $add->id }}','address')">
                                    <i class="fa-solid fa-file"></i>
                                </a>
                            </span>
                            <span class="Fyle-name">
                                {{ substr($add->file_name,0,15)}}<br><span class="fyle-pesoAD"> 978kb</span>
                            </span>
                            <button wire:click="delete_file('{{ $add->id }}','address')" class="icon-delete-fyle" style="position: absolute; left: 430px;">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                    @endif
                @endforeach
            @endisset
            <!-- ....................................... -->
            <!-- Fin: Upload Drive License - input       -->
            <!-- ....................................... -->

            <a href="#">
                <button class="button-update-summary2" onclick="confirm('{{ __('translation.homeaddress.message.alert') }}') || event.stopImmediatePropagation()" type="submit">{{ 'Update' }}</button>
            </a>
        
        </form>
    </div>

    <div class="summary-chevron-down">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>
    </div>
</details>
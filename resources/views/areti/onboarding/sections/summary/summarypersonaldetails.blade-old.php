<details>
    <summary>
        <span class="summary-title">Personal details</span>
        <div class="summary-chevron-up">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </div>
    </summary>
    
    <div class="summary-content2">

        <form wire:submit.prevent="save_personal_details">

            <!-- ................................. -->
            <!-- INICIO: First Name                -->
            <!-- ................................. -->
            <div class="Grupo-name">

                <!-- Inicio: Label Name -->
                <span class="First-Name-Summary">
                    First Name
                </span>
                <!-- Fin: Label Name -->

                <!-- Inicio: Input Name -->
                <input class="inputname-sumary" wire:model="first_name" placeholder="Enter first name" required>
                <!-- Fin: Input Name -->

            </div>
            <!-- ................................. -->
            <!-- Fin: First Name                   -->
            <!-- ................................. -->

            <!-- ................................. -->
            <!-- INICIO: Last Name                 -->
            <!-- ................................. -->
            <div class="Grupo-LastName">
                <span class="labellastname-summary">
                    Last Name
                </span>

                <!-- Inicio: Input last Name -->
                <input class="inputlastname-summary" wire:model="last_name" placeholder="Enter last name" required>
            </div>
            <!-- ................................. -->
            <!-- Fin: Last Name                    -->
            <!-- ................................. -->

            <!-- ................................. -->
            <!-- INICIO: Phone Number              -->
            <!-- ................................. -->
            <div class="Group-phone-Number-Summary">

                <!-- Inicio: Label Phone-number -->
                <span class="Phone-number-Summary">
                    Phone number
                </span> 
                <!-- Fin: Label Phone-number -->

                <!-- Inicio: Select Country Code -->
                <select class="Country-code-summary @error('phone_code_id') Country-codeE @enderror" wire:model='phone_code_id' required>
                    <option data-countryCode="" value="" Selected>Select country</option>
                    @foreach($list_phone_code[$translation] as $key => $value)
                        <option data-countryCode="{{ $key }}" value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>

                <!-- Inicio: Input Phone number -->
                <input class="inputphonenumber-summary" wire:model="phone_number" placeholder="Phone number ex: (201) 555-0123" required> 
                <!-- Fin: Input Phone number -->

            </div>
            <!-- ................................. -->
            <!-- FIN: Phone Number                 -->
            <!-- ................................. -->

            <span class="Date-of-Birth-summary">
                Date of Birth
            </span>

            <input class="Birtday-dates-summary " wire:model="date_birth" type="date" id="start" name="trip-start" value="2018-07-22" min="1500-01-01" max="2052-12-31" required>

            <!-- ................................. -->
            <!-- Inicio: Country of Birth - select -->
            <!-- ................................. -->
            <div class="Group-83 ">
                <span class="Country-of-Birth-summary2">
                    Country of Birth
                </span>
                <select class="Country-code-summary2" wire:model='country_birth_id' id="" required>
                    <option value="" Selected>{{ __('translation.personaldetails.selectcountry.option') }}</option>
                    @foreach($list_countries[$translation] as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <!-- ................................. -->
            <!-- Fin: Country of Birth - select    -->
            <!-- ................................. -->
        
            <!-- ................................. -->
            <!-- Inicio: Social Security Number    -->
            <!-- ................................. -->
            <div class="Group-82">
                <span class="Social-Security-Number-summary">
                    Social Security Number
                </span>
                <?php 
                    if(strlen(strval($this->social_security_number))==2){
                        $this->social_security_number[2]="-";

                        $security_number=
                        strval($this->social_security_number)[0].
                        strval($this->social_security_number)[1].
                        strval($this->social_security_number)[2];

                        $this->social_security_number=$security_number;
                    }
                    if(strlen(strval($this->social_security_number))==6){
                        $this->social_security_number[2]="-";
                        $this->social_security_number[6]="-";

                        $security_number=
                        strval($this->social_security_number)[0].
                        strval($this->social_security_number)[1].

                        strval($this->social_security_number)[2].

                        strval($this->social_security_number)[3].
                        strval($this->social_security_number)[4].
                        strval($this->social_security_number)[5].

                        strval($this->social_security_number)[6];

                        $this->social_security_number=$security_number;
                    }
                    if(strlen(strval($this->social_security_number))==11){

                        $this->social_security_number[2]="-";
                        $this->social_security_number[6]="-";

                        $security_number=
                        strval($this->social_security_number)[0].
                        strval($this->social_security_number)[1].

                        strval($this->social_security_number)[2].

                        strval($this->social_security_number)[3].
                        strval($this->social_security_number)[4].
                        strval($this->social_security_number)[5].

                        strval($this->social_security_number)[6].

                        strval($this->social_security_number)[7].
                        strval($this->social_security_number)[8].
                        strval($this->social_security_number)[9].
                        strval($this->social_security_number)[10];

                        $this->social_security_number=$security_number;
                    }
                ?>
                <input class="inputSocial-Security-Number-summary" type="text" wire:model="social_security_number" placeholder="XX-XXX-XXXX"
                    pattern="[0-9]{2}-[0-9]{3}-[0-9]{4}" maxlength="11" required
                >
            </div>
            <!-- ................................. -->
            <!-- Fin:  Social Security Number      -->
            <!-- ................................. -->

            <a href="#">
                <button class="button-update-summary" onclick="confirm('{{ __('translation.personaldetails.confirmmessage') }}') || event.stopImmediatePropagation()">{{ "Update" }}</button>
            </a>
            
        </form>
        
    </div>
    
    <div class="summary-chevron-down">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>
    </div>
    
</details>
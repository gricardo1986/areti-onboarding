        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!--                                       INICIO BODY                                                -->
        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

        <!-- ................................. -->
        <!-- Inicio: Title Page                -->
        <!-- ................................. -->
        <span class="Personal-details">
            {{ __('translation.additionalpersonaldetails.title.text') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Title Page                   -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Message                   -->
        <!-- ................................. -->
        <span class="message">
            {{ __('translation.additionalpersonaldetails.parrafo') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Message                      -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Formulario                -->
        <!-- ................................. -->

            <!-- ................................. -->
            <!-- Inicio: Birthday date             -->
            <!-- ................................. -->

        <form wire:submit.prevent="save_another_personal_details">

                <!-- ................................. -->
                <!-- Inicio: Birthday date - label     -->
                <!-- ................................. -->
                <span class="Date-of-Birth">
                    {{ __('translation.additionalpersonaldetails.datebirth.text') }}
                </span>
                <!-- ................................. -->
                <!-- Inicio: Birthday date - label     -->
                <!-- ................................. -->

                <!-- ................................. -->
                <!-- Inicio: Birthday date - input     -->
                <!-- ................................. -->
                <input class="Birtday-dates" name="trip-start" type="date" wire:model="another_date_birth.{{ $number_another_signer }}" min="1500-01-01" max="2052-12-31">
                <!-- ................................. -->
                <!-- Fin: Birthday date - input        -->
                <!-- ................................. -->

            <!-- ................................. -->
            <!-- Inicio: Country of Birth          -->
            <!-- ................................. -->

                <!-- ................................. -->
                <!-- Inicio: Country of Birth - label  -->
                <!-- ................................. -->
                <span class="Country-of-Birth">
                    {{ __('translation.additionalpersonaldetails.countrybirth.text') }}
                </span>
                <!-- ................................. -->
                <!-- Fin: Country of Birth - label     -->
                <!-- ................................. -->

                <!-- ................................. -->
                <!-- Inicio: Country of Birth - select -->
                <!-- ................................. -->
                <select class="Country-code2" wire:model='another_country_birth_id.{{ $number_another_signer }}' id="">
                    <option Selected>{{ __('translation.additionalpersonaldetails.selectcountry.option') }}</option>
                    @foreach($list_countries[$translation] as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
                <!-- ................................. -->
                <!-- Fin: Country of Birth - select    -->
                <!-- ................................. -->

            <!-- ................................. -->
            <!-- Fin: Country of Birth             -->
            <!-- ................................. -->

            <!-- ................................. -->
            <!-- Inicio: Social security Number    -->
            <!-- ................................. -->

                <!-- ....................................... -->
                <!-- Inicio: Social security Number -label   -->
                <!-- ....................................... -->
                <span class="Social-Security-Number">
                    {{ __('translation.additionalpersonaldetails.socialsecuritynumber.text') }}
                </span>
                <!-- ....................................... -->
                <!-- Fin: Social security Number -label      -->
                <!-- ....................................... -->

                <!-- ....................................... -->
                <!-- Inicio: Social security Number - Input  -->
                <!-- ....................................... -->
                <?php 
                    if(isset($this->another_social_security_number[$number_another_signer])){
                        if(strlen(strval($this->another_social_security_number[$number_another_signer]))==2){
                            $this->another_social_security_number[$number_another_signer][2]="-";

                            $another_security_number=
                            strval($this->another_social_security_number[$number_another_signer])[0].
                            strval($this->another_social_security_number[$number_another_signer])[1].
                            strval($this->another_social_security_number[$number_another_signer])[2];

                            $this->another_social_security_number[$number_another_signer]=$another_security_number;
                        }
                        if(strlen(strval($this->another_social_security_number[$number_another_signer]))==6){
                            $this->another_social_security_number[$number_another_signer][2]="-";
                            $this->another_social_security_number[$number_another_signer][6]="-";

                            $another_security_number=
                            strval($this->another_social_security_number[$number_another_signer])[0].
                            strval($this->another_social_security_number[$number_another_signer])[1].

                            strval($this->another_social_security_number[$number_another_signer])[2].

                            strval($this->another_social_security_number[$number_another_signer])[3].
                            strval($this->another_social_security_number[$number_another_signer])[4].
                            strval($this->another_social_security_number[$number_another_signer])[5].

                            strval($this->another_social_security_number[$number_another_signer])[6];

                            $this->another_social_security_number[$number_another_signer]=$another_security_number;
                        }
                        if(strlen(strval($this->another_social_security_number[$number_another_signer]))==11){

                            $this->another_social_security_number[$number_another_signer][2]="-";
                            $this->another_social_security_number[$number_another_signer][6]="-";

                            $another_security_number=
                            strval($this->another_social_security_number[$number_another_signer])[0].
                            strval($this->another_social_security_number[$number_another_signer])[1].

                            strval($this->another_social_security_number[$number_another_signer])[2].

                            strval($this->another_social_security_number[$number_another_signer])[3].
                            strval($this->another_social_security_number[$number_another_signer])[4].
                            strval($this->another_social_security_number[$number_another_signer])[5].

                            strval($this->another_social_security_number[$number_another_signer])[6].

                            strval($this->another_social_security_number[$number_another_signer])[7].
                            strval($this->another_social_security_number[$number_another_signer])[8].
                            strval($this->another_social_security_number[$number_another_signer])[9].
                            strval($this->another_social_security_number[$number_another_signer])[10];

                            $this->another_social_security_number[$number_another_signer]=$another_security_number;
                        }
                    }
                ?>
                <input class="Input7" type="text" wire:model="another_social_security_number.{{ $number_another_signer }}" placeholder="XX-XXX-XXXX"
                    pattern="[0-9]{2}-[0-9]{3}-[0-9]{4}" maxlength="11"
                >
                <!-- ....................................... -->
                <!-- Fin: Social security Number - Input     -->
                <!-- ....................................... -->

            <!-- ................................. -->
            <!-- Fin: Social security Number       -->
            <!-- ................................. -->

            <!-- ................................. -->
            <!-- Inicio: Separador                 -->
            <!-- ................................. -->
            <div class="Separador2"></div>
            <!-- ................................. -->
            <!-- Fin: Separador                    -->
            <!-- ................................. -->

            <!-- ................................. -->
            <!-- Inicio: Note date                 -->
            <!-- ................................. -->
            <span class="Note-date">
                {!! __('translation.additionalpersonaldetails.note.text') !!}
            </span>
            <!-- ................................. -->
            <!-- Fin: Note date                    -->
            <!-- ................................. -->
            @if(isset($another_us_person[$number_another_signer]) && $another_us_person[$number_another_signer]=="yes")

                <!-- ................................. -->
                <!-- Inicio: Title Drive license       -->
                <!-- ................................. -->
                <span class="Drive-License">
                    {{ __('translation.additionalpersonaldetails.drivelicense.text') }}
                </span>
                <!-- ................................. -->
                <!-- Fin: Title Drive license          -->
                <!-- ................................. -->

                <!-- ....................................... -->
                <!-- Inicio: Upload Drive License - Message  -->
                <!-- ....................................... -->
                <span class="Upload-driver-license">
                    {!! __('translation.additionalpersonaldetails.upload.text') !!}
                </span>
                <!-- ....................................... -->
                <!-- Fin: Upload Drive License - Message     -->
                <!-- ....................................... -->

                <!-- ....................................... -->
                <!-- Inicio: Upload Drive License - input    -->
                <!-- ....................................... -->
                <div class="upload-btn-wrapper">
                    <button class="btn">
                        <image class="Imagedoc"><br>
                        {!! __('translation.additionalpersonaldetails.clickupload.text') !!}
                    </button>
                    <input type="file" wire:model="another_file_drive_license.{{ $number_another_signer }}" name="myfile">
                </div>

                @if($another_document_primary[$number_another_signer])
                    @foreach($another_document_primary[$number_another_signer] as $dp)
                        <div class="view-File" wire:key="yes{{$dp->id}}">
                            <span class="icon-fyle">
                                <a wire:click="download_file('{{ $dp->id }}')">
                                    <i class="fa-solid fa-file"></i>
                                </a>
                            </span>
                            <span class="Fyle-name">
                                {{ substr($dp->file_name,0,15)}}<br><span class="fyle-peso"> 978kb</span>
                            </span>
                            <button wire:click="delete_file('{{ $dp->id }}')" class="icon-delete-fyle">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                    @endforeach
                @endif
                <!-- ....................................... -->
                <!-- Fin: Upload Drive License - input       -->
                <!-- ....................................... -->

            @else 

                <!-- ....................................... -->
                <!-- Inicio:  Primary ID type                -->
                <!-- ....................................... -->
                <span class="Primary-ID-type">
                    {{ __('translation.additionalpersonaldetails.primaryid.text') }}
                </span>
                <!-- ....................................... -->
                <!-- Fin:  Primary ID type                   -->
                <!-- ....................................... -->

                <!-- ....................................... -->
                <!-- Inicio: Primary ID type select          -->
                <!-- ....................................... -->
                <select wire:model='another_primary_id_type.{{ $number_another_signer }}' class="Primary-ID-type-select" name="Primary-ID-type-select">
                    <option Selected>{{ __('translation.additionalpersonaldetails.primaryid.option') }}</option>
                    @foreach($list_primary_id_type[$translation][0] as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
                <!-- ................................. -->
                <!-- Fin:  Primary ID type select      -->
                <!-- ................................. -->

                <div class="separadorNO"></div>

                <!-- ................................. -->
                <!-- Inicio:  Secundary ID type        -->
                <!-- ................................. -->
                <span class="Secondary-ID-type">
                    {{ __('translation.additionalpersonaldetails.secondaryid.text') }}
                </span>
                <!-- ................................. -->
                <!-- Fin: Secundary ID type            -->
                <!-- ................................. -->

                <!-- ....................................... -->
                <!-- Inicio: Secundary ID type select        -->
                <!-- ....................................... -->
                <select wire:model='another_secondary_id_type.{{ $number_another_signer }}' class="Secundary-ID-type-select" name="Secundary-ID-type-select" >
                    <option Selected>{{ __('translation.additionalpersonaldetails.secondaryid.option') }}</option>
                    @foreach($list_secondary_id_type[$translation][0] as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
                <!-- ................................. -->
                <!-- Fin:  Secundary ID type select    -->
                <!-- ................................. -->

                <!-- ....................................... -->
                <!-- Inicio: Upload Drive License - input    -->
                <!-- ....................................... -->
                <div class="upload-btn-wrapper">
                    <button class="btn">
                        <image class="Imagedoc"><br>
                        {!! __('translation.additionalpersonaldetails.clickupload2.text') !!}
                    </button>
                    <input type="file" wire:model="another_file_primary_id.{{ $number_another_signer }}" name="myfile">
                </div>
                <!-- ....................................... -->
                <!-- Fin: Upload Drive License - input       -->
                <!-- ....................................... -->

                <!-- ....................................... -->
                <!-- Inicio: Upload Drive License - input2    -->
                <!-- ....................................... -->
                <div class="upload-btn-wrapper2">
                    <button class="btn2">
                        <image class="Imagedoc"><br>
                        {!! __('translation.additionalpersonaldetails.clickupload3.text') !!}
                    </button>
                    <input type="file" wire:model="another_file_secondary_id.{{ $number_another_signer }}" name="myfile">
                </div>
                <!-- ....................................... -->
                <!-- Fin: Upload Drive License - input       -->
                <!-- ....................................... -->

                <!-- ....................................... -->
                <!-- Inicio: Fyle view ID 1                  -->
                <!-- ....................................... -->
                @if(isset($another_document_primary[$number_another_signer]) && $another_document_primary[$number_another_signer])
                    @foreach($another_document_primary[$number_another_signer] as $dp)
                        <div class="view-File-0" wire:key="nop{{$dp->id}}">
                            <span class="icon-fyle-0">
                                <a wire:click="download_file('{{ $dp->id }}')">
                                    <i class="fa-solid fa-file"></i>
                                </a>
                            </span>
                            <span class="Fyle-name-0">
                                {{ substr($dp->file_name,0,15)}}<br><span class="fyle-peso"> 978kb</span>
                            </span>
                            <button wire:click="delete_file('{{ $dp->id }}')" class="icon-delete-fyle-0">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                    @endforeach
                @endif
                <!-- ....................................... -->
                <!-- Fin: Fyle view ID 1                     -->
                <!-- ....................................... -->


                <!-- ....................................... -->
                <!-- Inicio: Fyle view ID 2                  -->
                <!-- ....................................... -->
                @if( isset($another_document_secondary[$number_another_signer]) && $another_document_secondary[$number_another_signer])
                    @foreach($another_document_secondary[$number_another_signer] as $ds)
                        <div class="view-File2" wire:key="nos{{$ds->id}}">
                            <span class="icon-fyle2">
                                <a wire:click="download_file('{{ $ds->id }}')">
                                    <i class="fa-solid fa-file"></i>
                                </a>
                            </span>
                            <span class="Fyle-name2">
                                {{ substr($ds->file_name,0,15)}}<br><span class="fyle-peso"> 978kb</span>
                            </span>
                            <button wire:click="delete_file('{{ $ds->id }}')" class="icon-delete-fyle2">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                    @endforeach
                @endif
                <!-- ....................................... -->
                <!-- Fin: Fyle view ID 2                     -->
                <!-- ....................................... -->
            @endif

            <!-- ................................. -->
            <!-- Inicio: Botón save                -->
            <!-- ................................. -->
            <a href="#">
                <button class="button-save{{ ((isset($another_us_person[$number_another_signer]) && $another_us_person[$number_another_signer]=="yes")?'':"0") }}" onclick="confirm('{{ __('translation.additionalpersonaldetails.confirmmessage') }}') || event.stopImmediatePropagation()">{{ __('translation.additionalpersonaldetails.save.button') }}</button>
            </a>
            <!-- ................................. -->
            <!-- Fin: Botón save                   -->
            <!-- ................................. -->
        </form>

        <!-- ................................. -->
        <!-- Inicio: Botón Back                -->
        <!-- ................................. -->
        <a href="#">
            <button class="button-back{{ ((isset($another_us_person[$number_another_signer]) && $another_us_person[$number_another_signer]=="yes")?'2':"0") }}" wire:click="buttons('another_person_confirm')" type="button">{{ __('translation.additionalpersonaldetails.back.button') }}</button>
        </a>
        <!-- ................................. -->
        <!-- Fin: Botón Back                   -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Botón Continue            -->
        <!-- ................................. -->
        <a href="#">
            <button class="button-continue{{ ((isset($another_us_person[$number_another_signer]) && $another_us_person[$number_another_signer]=="yes")?'2':"0") }}" wire:click="buttons('another_home_address')" type="button">{{ __('translation.additionalpersonaldetails.continue.button') }}</button>
        </a>
        <!-- ................................. -->
        <!-- Inicio: Botón Continue            -->
        <!-- ................................. -->

    
        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!--                                         FIN BODY                                                  -->
        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
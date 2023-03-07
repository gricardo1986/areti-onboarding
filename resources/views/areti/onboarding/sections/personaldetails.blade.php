        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!--                                       INICIO BODY                                                -->
        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

        <!-- ................................. -->
        <!-- Inicio: Title Page                -->
        <!-- ................................. -->
        <span class="Personal-details">
            {{ __('translation.personaldetails.title.text') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Title Page                   -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Message                   -->
        <!-- ................................. -->
        <span class="message">
            {{ __('translation.personaldetails.parrafo') }}
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

        <form wire:submit.prevent="save_personal_details">

                <!-- ................................. -->
                <!-- Inicio: Birthday date - label     -->
                <!-- ................................. -->
                <span class="Date-of-Birth">
                    {{ __('translation.personaldetails.datebirth.text') }}
                </span>
                <!-- ................................. -->
                <!-- Inicio: Birthday date - label     -->
                <!-- ................................. -->

                <!-- ................................. -->
                <!-- Inicio: Birthday date - input     -->
                <!-- ................................. -->
                <input class="Birtday-dates" name="trip-start" type="date" wire:model="date_birth" min="1500-01-01" max="2052-12-31">
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
                    {{ __('translation.personaldetails.countrybirth.text') }}
                </span>
                <!-- ................................. -->
                <!-- Fin: Country of Birth - label     -->
                <!-- ................................. -->

                <!-- ................................. -->
                <!-- Inicio: Country of Birth - select -->
                <!-- ................................. -->
                <select class="Country-code2" wire:model='country_birth_id' id="">
                    <option value="" Selected>{{ __('translation.personaldetails.selectcountry.option') }}</option>
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
                    {{ __('translation.personaldetails.socialsecuritynumber.text') }}
                </span>
                <!-- ....................................... -->
                <!-- Fin: Social security Number -label      -->
                <!-- ....................................... -->

                <!-- ....................................... -->
                <!-- Inicio: Social security Number - Input  -->
                <!-- ....................................... -->
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
                <input class="Input7" type="text" wire:model="social_security_number" placeholder="XX-XXX-XXXX"
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
                {!! __('translation.personaldetails.note.text') !!}
            </span>
            <!-- ................................. -->
            <!-- Fin: Note date                    -->
            <!-- ................................. -->

            @if($us_person=="yes")

                <!-- ................................. -->
                <!-- Inicio: Title Drive license       -->
                <!-- ................................. -->
                <span class="Drive-License">
                    {!! __('translation.personaldetails.drivelicense.text') !!}
                </span>
                <!-- ................................. -->
                <!-- Fin: Title Drive license          -->
                <!-- ................................. -->

                <!-- ....................................... -->
                <!-- Inicio: Upload Drive License - Message  -->
                <!-- ....................................... -->
                <span class="Upload-driver-license">
                    {!! __('translation.personaldetails.upload.text') !!}
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
                        {!! __('translation.personaldetails.clickupload.text') !!}
                    </button>
                    <input type="file" wire:model="file_drive_license" name="myfile">
                </div>

                @if($document_primary)
                    @foreach($document_primary as $dp)
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
                    {!! __('translation.personaldetails.primaryid.text') !!}
                </span>
                <!-- ....................................... -->
                <!-- Fin:  Primary ID type                   -->
                <!-- ....................................... -->

                <!-- ....................................... -->
                <!-- Inicio: Primary ID type select          -->
                <!-- ....................................... -->
                <select wire:model='primary_id_type' class="Primary-ID-type-select" name="Primary-ID-type-select">
                    <option value="" Selected>{!! __('translation.personaldetails.primaryid.option') !!}</option>
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
                    {!! __('translation.personaldetails.secondaryid.text') !!}
                </span>
                <!-- ................................. -->
                <!-- Fin: Secundary ID type            -->
                <!-- ................................. -->

                <!-- ....................................... -->
                <!-- Inicio: Secundary ID type select        -->
                <!-- ....................................... -->
                <select wire:model='secondary_id_type' class="Secundary-ID-type-select" name="Secundary-ID-type-select" >
                    <option value="" Selected>{!! __('translation.personaldetails.secondaryid.option') !!}</option>
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
                        {!! __('translation.personaldetails.clickupload2.text') !!}
                    </button>
                    <input type="file" wire:model="file_primary_id" name="myfile">
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
                        {!! __('translation.personaldetails.clickupload3.text') !!}
                    </button>
                    <input type="file" wire:model="file_secondary_id" name="myfile">
                </div>
                <!-- ....................................... -->
                <!-- Fin: Upload Drive License - input       -->
                <!-- ....................................... -->

                <!-- ....................................... -->
                <!-- Inicio: Fyle view ID 1                  -->
                <!-- ....................................... -->
                @if($document_primary)
                    @foreach($document_primary as $dp)
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
                @if($document_secondary)
                    @foreach($document_secondary as $ds)
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
                <button class="button-save{{ (($us_person=="yes")?'':"0") }}" onclick="confirm('{{ __('translation.personaldetails.confirmmessage') }}') || event.stopImmediatePropagation()">{{ __('translation.personaldetails.save.button') }}</button>
            </a>
            <!-- ................................. -->
            <!-- Fin: Botón save                   -->
            <!-- ................................. -->
        </form>

        <!-- ................................. -->
        <!-- Inicio: Botón Back                -->
        <!-- ................................. -->
        <a href="#">
            <button class="button-back{{ (($us_person=="yes")?'2':"0") }}" wire:click="buttons('person_confirm')" type="button">{{ __('translation.personaldetails.back.button') }}</button>
        </a>
        <!-- ................................. -->
        <!-- Fin: Botón Back                   -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Botón Continue            -->
        <!-- ................................. -->
        <a href="#">
            <button class="button-continue{{ (($us_person=="yes")?'2':"0") }}" wire:click="buttons('home_address')" type="button">{{ __('translation.personaldetails.continue.button') }}</button>
        </a>
        <!-- ................................. -->
        <!-- Inicio: Botón Continue            -->
        <!-- ................................. -->

    
        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!--                                         FIN BODY                                                  -->
        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
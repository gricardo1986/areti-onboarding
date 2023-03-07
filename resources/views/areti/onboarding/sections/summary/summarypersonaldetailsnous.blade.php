<details wire:click="change_status_accordeon('0')" @if($summary_accordeon[0]==true) open @endif>
    <summary>
        <span class="summary-title">Personal details NO US PERSON</span>
        <div class="summary-chevron-up">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </div>
    </summary>
    
    <div class="summary-content10">

        <form wire:submit.prevent="save_personal_details">

            <span class="Date-of-Birth-sum" style=" padding-left: 10px; padding-right: 10px; width: 226px; height: 33.4px; flex-grow: 0; position: absolute; top:125px; left: 91px; margin: 6.2px 0 0; background-color: #fff;">
                Date of Birth
            </span>

            <!-- ................................. -->
            <!-- Inicio: Birthday date - input     -->
            <!-- ................................. -->
            <input class="Birtday-dates" wire:model="date_birth" type="date" id="start" name="trip-start" value="2018-07-22" min="1500-01-01" max="2052-12-31" style=" padding-left: 10px; padding-right: 10px; width: 226px; height: 33.4px; flex-grow: 0; position: absolute; top:148px; left: 91px; margin: 6.2px 0 0; border-radius: 7.1px; border: solid 0.7px #bbb; background-color: #fff;">
            <!-- ................................. -->
            <!-- Fin: Birthday date - input        -->
            <!-- ................................. -->


            <!-- ................................. -->
            <!-- INICIO: country                   -->
            <!-- ................................. -->
            <div class="Grupo-LastName">
                <span class="Country-of-Birth-sum">
                    Country
                </span>

                <select class="Country-code2" wire:model='country_birth_id' style=" padding-left: 10px; padding-right: 10px; position:absolute;top:153px; left: 330px; right: 447px;bottom: 465px; " id="" required>
                    <option value="" Selected>{{ __('translation.personaldetails.selectcountry.option') }}</option>
                    @foreach($list_countries[$translation] as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>

            </div>
            <!-- ................................. -->
            <!-- Fin: Country                      -->
            <!-- ................................. -->

                <!-- ................................. -->
                <!-- INICIO: Social Security Number    -->
                <!-- ................................. -->
                <div class="Group-phone-Number-Summary">

                    <!-- Inicio: Label Phone-number -->
                    <span class="Social-security-number-sum">
                        Social Security Number
                    </span> 
                    <!-- Fin: Label Phone-number -->

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
                    <input class="Input7" type="text" wire:model="social_security_number" style=" padding-left: 10px; padding-right: 10px; width: 460px; position: absolute; top: 240px; left: 95px; background-color: #bbb !important;" placeholder="XX-XXX-XXXX"
                        pattern="[0-9]{2}-[0-9]{3}-[0-9]{4}" maxlength="11" disabled
                    >
                    
                </div>
                <!-- ................................. -->
                <!-- FIN: Social Security Number       -->
                <!-- ................................. -->

                <div class="Separador2" style=" position: absolute; top: 310px; left: 95px;"></div>
            
                <span class="Note-date" style="position: absolute; top: 330px; left: 95px;">
                <span class="Note-text-style-1 ">Note:</span>
                    For uploading your file all corners of the document must be visible and all data must be legible.
                </span>
            
                <span class="Drive-License" style="position: absolute; top:380px; left: 95px;">
                    Primary ID type
                </span>

                <select wire:model='primary_id_type' class="Primary-ID-type-select" name="Primary-ID-type-select" style=" width: 210px; height: 34px;font-size: 11px; position: absolute; top:405px; left: 95px;">
                    <option value="" Selected>{!! __('translation.personaldetails.primaryid.option') !!}</option>
                    @foreach($list_primary_id_type[$translation][0] as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>

                <!-- ....................................... -->
                <!-- Inicio: Upload Drive License - input    -->
                <!-- ....................................... -->
                <div class="upload-btn-wrapper" style="position: absolute; top:380px; left:330px">
                    <button class="btn">
                        <image class="Imagedoc"><br>
                        {!! __('translation.personaldetails.clickupload2.text') !!}
                    </button>
                    <input type="file" wire:model="file_primary_id" name="myfile">
                </div>
            
            <!-- ....................................... -->
            <!-- Fin: Upload Drive License - input       -->
            <!-- ....................................... -->

            @if($document_primary)
                @foreach($document_primary as $dp)
                    <div class="view-File" wire:key="nop{{$dp->id}}" style="width: 460px;height: 34px;position: absolute; left:95px;top:500px">
                        <span class="icon-fyle">
                            <a wire:click="download_file('{{ $dp->id }}')" style="position: absolute; left: 15px;">
                                <i class="fa-solid fa-file"></i>
                            </a>
                        </span>
                        <span class="Fyle-name">
                            {{ substr($dp->file_name,0,15)}}<br><span class="fyle-peso"> 978kb</span>
                        </span>
                        <button wire:click="delete_file('{{ $dp->id }}')" class="icon-delete-fyle" style="position: absolute; left: 430px;">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>
                @endforeach
            @endif

            <div class="Separador2" style=" position: absolute; top: 555px; left: 95px;"></div>

            <span class="Drive-License" style="position: absolute; top:580px; left: 95px;">
                Secondary ID type
            </span>

            <select wire:model='secondary_id_type' class="Primary-ID-type-select" name="Primary-ID-type-select" style=" width: 210px; height: 34px;font-size: 11px; position: absolute; top:605px; left: 95px;">
                <option value="" Selected>{!! __('translation.personaldetails.secondaryid.option') !!}</option>
                @foreach($list_secondary_id_type[$translation][0] as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>


            <!-- ....................................... -->
            <!-- Inicio: Upload Drive License - input    -->
            <!-- ....................................... -->
            <div class="upload-btn-wrapper" style="position: absolute; top:580px; left:330px">
                <button class="btn">
                    <image class="Imagedoc"><br>
                    {!! __('translation.personaldetails.clickupload3.text') !!}
                </button>
                <input type="file" wire:model="file_secondary_id" name="myfile">
            </div>
            <!-- ....................................... -->
            <!-- Fin: Upload Drive License - input       -->
            <!-- ....................................... -->

            @if($document_secondary)
                @foreach($document_secondary as $ds)
                    <div class="view-File" wire:key="nos{{$ds->id}}" style="width: 460px;height: 34px;position: absolute; left:95px;top:703px">
                        <span class="icon-fyle">
                            <a wire:click="download_file('{{ $ds->id }}')" style="position: absolute; left: 15px;">
                                <i class="fa-solid fa-file"></i>
                            </a>
                        </span>
                        <span class="Fyle-name">
                            {{ substr($ds->file_name,0,15)}}<br><span class="fyle-peso"> 978kb</span>
                        </span>
                        <button wire:click="delete_file('{{ $ds->id }}')" class="icon-delete-fyle" style="position: absolute; left: 430px;">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>
                @endforeach
            @endif

            <a href="#">
                <button class="button-update-summary-NO" onclick="confirm('{{ __('translation.personaldetails.confirmmessage') }}') || event.stopImmediatePropagation()">{{ "Update" }}</button>
            </a>
        </form>
             
    </div>
    
    <div class="summary-chevron-down">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>
    </div>
</details>
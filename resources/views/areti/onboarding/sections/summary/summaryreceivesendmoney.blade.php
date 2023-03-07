<details wire:click="change_status_accordeon('7')" @if($summary_accordeon[7]==true) open @endif>
    <summary>
        <span class="summary-title">From what countries are you expecting to RECEIVE money?</span>
        <div class="summary-chevron-up">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </div>
    </summary>
    
    <div class="summary-content9">

        <form wire:submit.prevent="save_expected_receive_send_money">

            <!-- ................................. -->
            <!-- Inicio: Title Page                -->
            <!-- ................................. -->
            <span class="Title-page-RECEIVE-money" style=" position: absolute; top:132px; left: 95px;">
                From what countries are you<br>
            expecting to
                <span class="Title-page-RECEIVE-money-text-style-1">RECEIVE</span>
                money?
            </span>
            <!-- ................................. -->
            <!-- Fin: Title Page                   -->
            <!-- ................................. -->

            <!-- ....................................... -->
            <!-- Inicio: Select country 1                -->
            <!-- ....................................... -->

                <!-- ............................................... -->
                <!-- INICIO : label Country-code-RECIVE - country 1  -->
                <!-- ............................................... -->
                <span class="Country-1" style=" position: absolute; top:215px; left: 95px;">
                    Country # 1
                </span>
                <!-- ............................................... -->
                <!-- FIN : label Country-code-RECIVE - country 1  -->
                <!-- ............................................... -->

                <!-- ....................................... -->
                <!-- Inicio: Country - Select                -->
                <!-- ....................................... -->
                <select class="Country-code-RECIVE" name="Country-code-RECIVE" wire:model='country_receive_one' style="position: absolute; top:235px; left: 95px;" required>
                    <option data-countryCode="" value="" Selected>{{ __('translation.receivesendmoney.countryreceive1.option') }}</option>
                    @foreach($list_country_receive_one[$translation] as $key => $value)
                        <option data-countryCode="{{ $key }}" value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
                <!-- ................................. -->
                <!-- Fin: Country - select             -->
                <!-- ................................. -->

            <!-- ....................................... -->
            <!-- Inicio: Select country 1                -->
            <!-- ....................................... -->

            <!-- ....................................... -->
            <!-- Inicio: Select country 2                -->
            <!-- ....................................... -->

                <!-- ............................................... -->
                <!-- INICIO : label Country-code-RECIVE - country 2  -->
                <!-- ............................................... -->
                <span class="Country-2" style="position: absolute; top:215px; left: 255px;">
                    Country # 2
                </span>
                <!-- ............................................... -->
                <!-- FIN : label Country-code-RECIVE - country 2  -->
                <!-- ............................................... -->

                <!-- ....................................... -->
                <!-- Inicio: Country - Select 2              -->
                <!-- ....................................... -->
                <select class="Country-code-RECIVE2" name="Country-code-RECIVE2" wire:model='country_receive_two' style="position: absolute; top:235px; left: 255px;">
                    <option data-countryCode="" value="" Selected>{{ __('translation.receivesendmoney.countryreceive2.option') }}</option>
                    @foreach($list_country_receive_two[$translation] as $key => $value)
                        <option data-countryCode="{{ $key }}" value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
                <!-- ................................. -->
                <!-- Fin: Country - select 2           -->
                <!-- ................................. -->

            <!-- ....................................... -->
            <!-- Inicio: Select country 2                -->
            <!-- ....................................... -->

            <!-- ....................................... -->
            <!-- Inicio: Select country 2                -->
            <!-- ....................................... -->

                <!-- ............................................... -->
                <!-- INICIO : label Country-code-RECIVE - country 3  -->
                <!-- ............................................... -->
                <span class="Country-3" style="position: absolute; top:215px; left: 415px;">
                    Country # 3
                </span>
                <!-- ............................................... -->
                <!-- FIN : label Country-code-RECIVE - country 3     -->
                <!-- ............................................... -->

                <!-- ....................................... -->
                <!-- Inicio: Country - Select 3              -->
                <!-- ....................................... -->
                <select class="Country-code-RECIVE3" name="Country-code-RECIVE3" wire:model='country_receive_three' style="position: absolute; top:235px; left: 415px;">
                    <option data-countryCode="" value="" Selected>{{ __('translation.receivesendmoney.countryreceive3.option') }}</option>
                    @foreach($list_country_receive_three[$translation] as $key => $value)
                        <option data-countryCode="{{ $key }}" value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
                <!-- ................................. -->
                <!-- Fin: Country - select 3           -->
                <!-- ................................. -->

                <!-- ................................. -->
                <!-- Inicio: Title Page                -->
                <!-- ................................. -->
                <span class="Title-page-SEND-money" style=" position: absolute; top:332px; left: 95px;">
                    From what countries are you<br>
                expecting to
                    <span class="Title-page-SEND-money-text-style-1">SEND</span>
                    money?
                </span>
                <!-- ................................. -->
                <!-- Fin: Title Page                   -->
                <!-- ................................. -->

            <!-- ....................................... -->
            <!-- Inicio: Select country 1                -->
            <!-- ....................................... -->

            <!-- ............................................... -->
            <!-- INICIO : label Country-code-RECIVE - country 1  -->
            <!-- ............................................... -->
            <span class="Country-1-1" style=" position: absolute; top:415px; left: 95px;">
                Country # 1
            </span>
            <!-- ............................................... -->
            <!-- FIN : label Country-code-RECIVE - country 1  -->
            <!-- ............................................... -->

            <!-- ....................................... -->
            <!-- Inicio: Country - Select                -->
            <!-- ....................................... -->
            <select class="Country-code-SEND" name="Country-code-SEND" wire:model='country_send_one' style="position: absolute; top:435px; left: 95px;" required>
                <option data-countryCode="" value="" Selected>{{ __('translation.receivesendmoney.countrysend1.option') }}</option>
                @foreach($list_country_send_one[$translation] as $key => $value)
                    <option data-countryCode="{{ $key }}" value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>
            <!-- ................................. -->
            <!-- Fin: Country - select             -->
            <!-- ................................. -->

            <!-- ....................................... -->
            <!-- Inicio: Select country 1                -->
            <!-- ....................................... -->

            <!-- ....................................... -->
            <!-- Inicio: Select country 2                -->
            <!-- ....................................... -->

                <!-- ............................................... -->
                <!-- INICIO : label Country-code-RECIVE - country 2  -->
                <!-- ............................................... -->
                <span class="Country-2-2" style=" position: absolute; top:415px; left: 255px;">
                    Country # 2
                </span>
                <!-- ............................................... -->
                <!-- FIN : label Country-code-RECIVE - country 2  -->
                <!-- ............................................... -->

                <!-- ....................................... -->
                <!-- Inicio: Country - Select 2              -->
                <!-- ....................................... -->
                <select class="Country-code-SEND2" name="Country-code-SEND2" wire:model='country_send_two' style="position: absolute; top:435px; left: 255px;">
                    <option data-countryCode="" value="" Selected>{{ __('translation.receivesendmoney.countrysend2.option') }}</option>
                    @foreach($list_country_send_two[$translation] as $key => $value)
                        <option data-countryCode="{{ $key }}" value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
                <!-- ................................. -->
                <!-- Fin: Country - select 2           -->
                <!-- ................................. -->

            <!-- ....................................... -->
            <!-- Inicio: Select country 2                -->
            <!-- ....................................... -->
                <!-- ............................................... -->
                <!-- INICIO : label Country-code-RECIVE - country 3  -->
                <!-- ............................................... -->
                <span class="Country-3-3" style=" position: absolute; top:415px; left: 415px;">
                    Country # 3
                </span>
                <!-- ............................................... -->
                <!-- FIN : label Country-code-RECIVE - country 3     -->
                <!-- ............................................... -->

                <!-- ....................................... -->
                <!-- Inicio: Country - Select 3              -->
                <!-- ....................................... -->
                <select class="Country-code-SEND3" name="Country-code-SEND3" wire:model='country_send_three' style=" position: absolute; top:435px; left: 415px;">
                    <option data-countryCode="" value="" Selected>{{ __('translation.receivesendmoney.countrysend3.option') }}</option>
                    @foreach($list_country_send_three[$translation] as $key => $value)
                        <option data-countryCode="{{ $key }}" value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
                <!-- ................................. -->
                <!-- Fin: Country - select 3           -->
                <!-- ................................. -->

            <!-- ....................................... -->
            <!-- Inicio: Select country 3                -->
            <!-- ....................................... -->
            <a href="#">
                <button class="button-update-summary4" style="position: relative; left: 150px; right: 693px; top: 350px;" onclick="confirm('{{ __('translation.receivesendmoney.message.alert') }}') || event.stopImmediatePropagation()" type="submit">{{ 'Update' }}</button>
            </a>
        </form>
    </div>
    <div class="summary-chevron-down">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>
    </div>
</details>
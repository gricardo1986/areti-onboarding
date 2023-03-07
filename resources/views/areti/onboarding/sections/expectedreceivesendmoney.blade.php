        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!--                                       INICIO BODY                                                -->
        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        


        <!-- ................................. -->
        <!-- Inicio: Title Page                -->
        <!-- ................................. -->
        <span class="Title-page-RECEIVE-money">
            {!! __('translation.receivesendmoney.title1.text') !!}
        </span>
        <!-- ................................. -->
        <!-- Fin: Title Page                   -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: Formulario select´s             -->
        <!-- ....................................... -->

        <form wire:submit.prevent="save_expected_receive_send_money">

            <!-- ....................................... -->
            <!-- Inicio: Select country 1                -->
            <!-- ....................................... -->

                <!-- ............................................... -->
                <!-- INICIO : label Country-code-RECIVE - country 1  -->
                <!-- ............................................... -->
                <span class="Country-1">
                    {{ __('translation.receivesendmoney.countryreceive1.text') }}
                </span>
                <!-- ............................................... -->
                <!-- FIN : label Country-code-RECIVE - country 1  -->
                <!-- ............................................... -->

                <!-- ....................................... -->
                <!-- Inicio: Country - Select                -->
                <!-- ....................................... -->
                <select class="Country-code-RECIVE" name="Country-code-RECIVE" wire:model='country_receive_one'>
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
                <span class="Country-2">
                    {{ __('translation.receivesendmoney.countryreceive2.text') }}
                </span>
                <!-- ............................................... -->
                <!-- FIN : label Country-code-RECIVE - country 2  -->
                <!-- ............................................... -->

                <!-- ....................................... -->
                <!-- Inicio: Country - Select 2              -->
                <!-- ....................................... -->
                <select class="Country-code-RECIVE2" name="Country-code-RECIVE2" wire:model='country_receive_two'>
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
                <span class="Country-3">
                    {{ __('translation.receivesendmoney.countryreceive3.text') }}
                </span>
                <!-- ............................................... -->
                <!-- FIN : label Country-code-RECIVE - country 3     -->
                <!-- ............................................... -->

                <!-- ....................................... -->
                <!-- Inicio: Country - Select 3              -->
                <!-- ....................................... -->
                <select class="Country-code-RECIVE3" name="Country-code-RECIVE3" wire:model='country_receive_three'>
                    <option data-countryCode="" value="" Selected>{{ __('translation.receivesendmoney.countryreceive3.option') }}</option>
                    @foreach($list_country_receive_three[$translation] as $key => $value)
                        <option data-countryCode="{{ $key }}" value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
                <!-- ................................. -->
                <!-- Fin: Country - select 3           -->
                <!-- ................................. -->

            <!-- ....................................... -->
            <!-- Inicio: Select country 3                -->
            <!-- ....................................... -->

        <!-- ....................................... -->
        <!-- Inicio: Formulario select´s             -->
        <!-- ....................................... -->

        <!-- ................................. -->
        <!-- Inicio: Title Page                -->
        <!-- ................................. -->
        <span class="Title-page-SEND-money">
            {!! __('translation.receivesendmoney.title2.text') !!}
        </span>
        <!-- ................................. -->
        <!-- Fin: Title Page                   -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: Formulario select´s             -->
        <!-- ....................................... -->

            <!-- ....................................... -->
            <!-- Inicio: Select country 1                -->
            <!-- ....................................... -->

                <!-- ............................................... -->
                <!-- INICIO : label Country-code-RECIVE - country 1  -->
                <!-- ............................................... -->
                <span class="Country-1-1">
                    {{ __('translation.receivesendmoney.countrysend1.text') }}
                </span>
                <!-- ............................................... -->
                <!-- FIN : label Country-code-RECIVE - country 1  -->
                <!-- ............................................... -->

                <!-- ....................................... -->
                <!-- Inicio: Country - Select                -->
                <!-- ....................................... -->
                <select class="Country-code-SEND" name="Country-code-SEND" wire:model='country_send_one'>
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
                <span class="Country-2-2">
                    {{ __('translation.receivesendmoney.countrysend2.text') }}
                </span>
                <!-- ............................................... -->
                <!-- FIN : label Country-code-RECIVE - country 2  -->
                <!-- ............................................... -->

                <!-- ....................................... -->
                <!-- Inicio: Country - Select 2              -->
                <!-- ....................................... -->
                <select class="Country-code-SEND2" name="Country-code-SEND2" wire:model='country_send_two'>
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

            <!-- ....................................... -->
            <!-- Inicio: Select country 2                -->
            <!-- ....................................... -->

                <!-- ............................................... -->
                <!-- INICIO : label Country-code-RECIVE - country 3  -->
                <!-- ............................................... -->
                <span class="Country-3-3">
                    {{ __('translation.receivesendmoney.countrysend3.text') }}
                </span>
                <!-- ............................................... -->
                <!-- FIN : label Country-code-RECIVE - country 3     -->
                <!-- ............................................... -->

                <!-- ....................................... -->
                <!-- Inicio: Country - Select 3              -->
                <!-- ....................................... -->
                <select class="Country-code-SEND3" name="Country-code-SEND3" wire:model='country_send_three'>
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

        <!-- ....................................... -->
        <!-- Inicio: Formulario select´s             -->
        <!-- ....................................... -->

       

        <!-- ................................. -->
        <!-- Inicio: Botón save                -->
        <!-- ................................. -->
        <a href="#">
            <button class="button-save2-2-2" onclick="confirm('{{ __('translation.receivesendmoney.message.alert') }}') || event.stopImmediatePropagation()" type="submit">{{ __('translation.receivesendmoney.save.button') }}</button>
        </a>
        <!-- ................................. -->
        <!-- Fin: Botón save                   -->
        <!-- ................................. -->

    </form>

        <!-- ................................. -->
        <!-- Inicio: Botón Back                -->
        <!-- ................................. -->
        <a href="#">
            <button class="button-back4-2-2" wire:click="buttons('monthly_expected_activity')" type="button">{{ __('translation.receivesendmoney.back.button') }}</button>
        </a>
        <!-- ................................. -->
        <!-- Fin: Botón Back                   -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Botón Continue            -->
        <!-- ................................. -->
        <a href="#">
            <button class="button-continue4-2-2" wire:click="buttons('signer')" type="button">{{ __('translation.receivesendmoney.continue.button') }}</button>
        </a>
        <!-- ................................. -->
        <!-- Inicio: Botón Continue            -->
        <!-- ................................. -->

        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!--                                         FIN BODY                                                  -->
        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
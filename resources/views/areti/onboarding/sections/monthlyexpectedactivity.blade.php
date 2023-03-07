    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                       INICIO BODY                                                -->
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <!-- ................................. -->
    <!-- Inicio: Title Page                -->
    <!-- ................................. -->
    <span class="Personal-details">
        {{ __('translation.monthlyexpectedactivity.title.text') }}
    </span>
    <!-- ................................. -->
    <!-- Fin: Title Page                   -->
    <!-- ................................. -->

    <!-- ................................. -->
    <!-- Inicio: Message                   -->
    <!-- ................................. -->
    <span class="message">
        {{ __('translation.monthlyexpectedactivity.body.text') }}
    </span>
    <!-- ................................. -->
    <!-- Fin: Message                      -->
    <!-- ................................. -->

    <!-- ................................. -->
    <!-- Inicio: Fomulario                 -->
    <!-- ................................. -->

    <form wire:submit.prevent="save_monthly_expected_activities">
        <!-- ................................. -->
        <!-- Inicio: DATO #1                   -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Label data #1             -->
        <!-- ................................. -->
        <span class="Incoming">
            {{ __('translation.monthlyexpectedactivity.incoming.text') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Label data #1                -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: Incoming - Select               -->
        <!-- ....................................... -->
        <select class="Incoming-select" name="Incoming-select" wire:model='incoming_average_account'>
            <option value="">{{ __('translation.monthlyexpectedactivity.incoming.option') }}</option>
            @foreach($list_incoming_average_account[$translation][0] as $value)
                <option value="{{ $value }}">{{ $value }}</option>
            @endforeach
        </select>
        <!-- ................................. -->
        <!-- Fin:  Incoming - Select           -->
        <!-- ................................. -->
        
        <!-- ................................. -->
        <!-- Fin: DATO #1                      -->
        <!-- ................................. -->
        
        <!-- ................................. -->
        <!-- Inicio: DATO #2                   -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Label data #2             -->
        <!-- ................................. -->
        <span class="Occupation-Sector">
            {{ __('translation.monthlyexpectedactivity.incomingquantity.text') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Label data #2                -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: Quantity      -->
        <!-- ....................................... -->
        <select class="Occupation-Sector-select2" name="Occupation-Sector-select2" wire:model='incoming_quantity'>
            <option value="">{{ __('translation.monthlyexpectedactivity.incomingquantity.option') }}</option>
            @foreach($list_incoming_quantity[$translation][0] as $value)
                <option value="{{ $value }}">{{ $value }}</option>
            @endforeach
        </select>
        <!-- ................................. -->
        <!-- Inicio: Quantity -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Fin: DATO #2                      -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: DATO #3                   -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Label data #3             -->
        <!-- ................................. -->
        <span class="Outgoing">
            {{ __('translation.monthlyexpectedactivity.outgoing.text') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Label data #3                -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: Outgoing Quantity - Select     -->
        <!-- ....................................... -->
        <select class="Occupation-Sector-select3" name="Outgoing-select3" wire:model='outgoing_average_account'>
            <option value="">{{ __('translation.monthlyexpectedactivity.outgoing.option') }}</option>
            @foreach($list_outgoing_average_account[$translation][0]  as $value)
                <option value="{{ $value }}">{{ $value }}</option>
            @endforeach
        </select>
        <!-- ................................. -->
        <!-- Fin:  Outgoing Quantity - Select -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Fin: DATO #3                      -->
        <!-- ................................. -->


        <!-- ................................. -->
        <!-- Inicio: DATO #4                   -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Label data #4             -->
        <!-- ................................. -->
        <span class="Occupation-Sector2">
            {{ __('translation.monthlyexpectedactivity.outgoingquantity.text') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Label data #4                -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: Outgoing Quantity - Select               -->
        <!-- ....................................... -->
        <select class="Outgoing-select2" name="Outgoing-select2" wire:model='outgoing_quantity'>
            <option value="">{{ __('translation.monthlyexpectedactivity.outgoingquantity.option') }}</option>
            @foreach($list_outgoing_quantity[$translation][0] as $value)
                <option value="{{ $value }}">{{ $value }}</option>
            @endforeach
        </select>
        <!-- ................................. -->
        <!-- Fin:  Outgoing Quantity - Select  -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Fin: DATO #4                      -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: note check-deposit        -->
        <!-- ................................. -->
        <span class="Check-Deposit">
            {!! __('translation.monthlyexpectedactivity.checkdeposit.text') !!}
        </span>
        <!-- ................................. -->
        <!-- Fin: note check-deposit           -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: Check-Deposit - Select1         -->
        <!-- ....................................... -->
        <select class="Check-Deposit-select1" name="Check-Deposit-select1" wire:model='check_deposit_average_account'>
            <option value="">{{ __('translation.monthlyexpectedactivity.checkdeposit.option') }}</option>
            @foreach($list_check_deposit_average_account[$translation][0] as $value)
                <option value="{{ $value }}">{{ $value }}</option>
            @endforeach
        </select>
        <!-- ................................. -->
        <!-- Fin: Check-Deposit - Select1      -->
        <!-- ................................. -->

        <!-- ....................................... -->
        <!-- Inicio: Check-Deposit - Select2         -->
        <!-- ....................................... -->
        <select class="Check-Deposit-select2" name="Check-Deposit-select2" wire:model='check_deposit_quantity'>
            <option value="">{{ __('translation.monthlyexpectedactivity.checkdepositquantity.option') }}</option>
            @foreach($list_check_deposit_quantity[$translation][0] as $value)
                <option value="{{ $value }}">{{ $value }}</option>
            @endforeach
        </select>
        <!-- ................................. -->
        <!-- Fin: Check-Deposit - Select2      -->
        <!-- ................................. -->
        
        <!-- ................................. -->
        <!-- Fin: Fomulario                    -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Botón save                -->
        <!-- ................................. -->
        <a href="#">
            <button class="button-save2-2-2" onclick="confirm('{{ __('translation.monthlyexpectedactivity.message.alert') }}') || event.stopImmediatePropagation()" type="submit">{{ __('translation.monthlyexpectedactivity.save.button') }}</button>
        </a>
        <!-- ................................. -->
        <!-- Fin: Botón save                   -->
        <!-- ................................. -->
    </form>

    <!-- ................................. -->
    <!-- Inicio: Botón Back                -->
    <!-- ................................. -->
    <a href="#">
        <button wire:click="buttons('source_funds')" class="button-back4-2-2" type="button">{{ __('translation.monthlyexpectedactivity.back.button') }}</button>
    </a>
    <!-- ................................. -->
    <!-- Fin: Botón Back                   -->
    <!-- ................................. -->

    <!-- ................................. -->
    <!-- Inicio: Botón Continue            -->
    <!-- ................................. -->
    <a href="#">
        <button wire:click="buttons('expected_receive_send_money')" class="button-continue4-2-2" type="button">{{ __('translation.monthlyexpectedactivity.continue.button') }}</button>
    </a>
    <!-- ................................. -->
    <!-- Inicio: Botón Continue            -->
    <!-- ................................. -->

    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                         FIN BODY                                                  -->
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
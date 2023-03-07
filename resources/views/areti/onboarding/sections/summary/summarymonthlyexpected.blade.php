<details wire:click="change_status_accordeon('6')" @if($summary_accordeon[6]==true) open @endif>
    <summary>
        <span class="summary-title">Monthly expected activity</span>
        <div class="summary-chevron-up">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </div>
    </summary>
    
    <div class="summary-content4">

        <form wire:submit.prevent="save_monthly_expected_activities">
            <!-- ................................. -->
            <!-- Inicio: DATO #1                   -->
            <!-- ................................. -->

                <!-- ................................. -->
                <!-- Inicio: Label data #1             -->
                <!-- ................................. -->
                <span class="Incoming" style="position: absolute; top:132px; left: 95px;">
                    Incoming
                </span>
                <!-- ................................. -->
                <!-- Fin: Label data #1                -->
                <!-- ................................. -->

                <!-- ....................................... -->
                <!-- Inicio: Incoming - Select               -->
                <!-- ....................................... -->
                <select class="Incoming-select" name="Incoming-select" wire:model='incoming_average_account' style="position: absolute; top:152px; left: 95px;" required>
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
                <span class="Occupation-Sector" style="position: absolute; top:132px; left: 332px;">
                    Occupation Sector
                </span>
                <!-- ................................. -->
                <!-- Fin: Label data #2                -->
                <!-- ................................. -->

                <!-- ....................................... -->
                <!-- Inicio: Occupation Sector select2       -->
                <!-- ....................................... -->
                <select class="Occupation-Sector-select2" name="Occupation-Sector-select2" wire:model='incoming_quantity' style="position: absolute; top:152px; left: 332px;" required>
                    <option value="">{{ __('translation.monthlyexpectedactivity.incomingquantity.option') }}</option>
                    @foreach($list_incoming_quantity[$translation][0] as $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
                <!-- ................................. -->
                <!-- Inicio: Occupation Sector select2 -->
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
                <span class="Outgoing" style="position: absolute; top: 220px; left: 95px;">
                    Outgoing
                    </span>
                <!-- ................................. -->
                <!-- Fin: Label data #3                -->
                <!-- ................................. -->

                <!-- ....................................... -->
                <!-- Inicio: Outgoing - Select               -->
                <!-- ....................................... -->
                <select class="Occupation-Sector-select3" name="Outgoing-select3" wire:model='outgoing_average_account' style="position: absolute; top: 242px; left: 95px;" required>
                    <option value="">{{ __('translation.monthlyexpectedactivity.outgoing.option') }}</option>
                    @foreach($list_outgoing_average_account[$translation][0]  as $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
                <!-- ................................. -->
                <!-- Fin:  Outgoing - Select           -->
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
                <span class="Occupation-Sector2" style="position: absolute; top: 220px; left: 332px;">
                    Occupation Sector
                </span>
                <!-- ................................. -->
                <!-- Fin: Label data #4                -->
                <!-- ................................. -->

                <!-- ....................................... -->
                <!-- Inicio: Outgoing - Select               -->
                <!-- ....................................... -->
                <select class="Outgoing-select2" name="Outgoing-select2" wire:model='outgoing_quantity' style="position: absolute; top: 242px; left: 332px;" required>
                    <option value="">{{ __('translation.monthlyexpectedactivity.outgoingquantity.option') }}</option>
                    @foreach($list_outgoing_quantity[$translation][0] as $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
                <!-- ................................. -->
                <!-- Fin:  Outgoing - Select           -->
                <!-- ................................. -->

            <!-- ................................. -->
            <!-- Fin: DATO #4                      -->
            <!-- ................................. -->

            <!-- ................................. -->
            <!-- Inicio: note check-deposit        -->
            <!-- ................................. -->
            <span class="Check-Deposit" style="position: absolute; top: 310px; left: 95px;">
                <span class=".text-style-1-1-2">Check Deposit</span>
                (not available at the moment)
            </span>         
            <!-- ................................. -->
            <!-- Fin: note check-deposit           -->
            <!-- ................................. -->

            <!-- ....................................... -->
            <!-- Inicio: Check-Deposit - Select1         -->
            <!-- ....................................... -->
            <select class="Check-Deposit-select1" name="Check-Deposit-select1" wire:model='check_deposit_average_account' style="position: absolute; top: 336px; left: 95px;" disabled>
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
            <select class="Check-Deposit-select2" name="Check-Deposit-select2" wire:model='check_deposit_quantity' style="position: absolute; top: 336px; left: 332px;" disabled>
                <option value="">{{ __('translation.monthlyexpectedactivity.checkdepositquantity.option') }}</option>
                @foreach($list_check_deposit_quantity[$translation][0] as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>
            <!-- ................................. -->
            <!-- Fin: Check-Deposit - Select2      -->
            <!-- ................................. -->

            <a href="#">
                <button class="button-update-summary4" style="position: relative; left: 150px; right: 693px; top: 280px;" onclick="confirm('{{ __('translation.monthlyexpectedactivity.message.alert') }}') || event.stopImmediatePropagation()" type="submit">{{ 'Update' }}</button>
            </a>
        </form>
    </div>
    <div class="summary-chevron-down">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>
    </div>
</details>
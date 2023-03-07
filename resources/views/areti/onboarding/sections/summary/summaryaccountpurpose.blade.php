<details wire:click="change_status_accordeon('3')" @if($summary_accordeon[3]==true) open @endif>
    <summary>
        <span class="summary-title">Account purpose</span>
        <div class="summary-chevron-up">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </div>
    </summary>
    
    <div class="summary-content4">

        <form wire:submit.prevent="save_account_purpose">
            <div class="container3">  

                @foreach($list_account_purpose[$translation][0] as $key=>$value)

                    <div class="checkbox">  
                        <input type="checkbox" wire:model="account_purposes.{{ $value  }}" value="{{ $value }}"/>
                        <div class="box">  
                            <img class="image" src="{{ asset('areti-onboarding/'.$list_icons_account_purpose[$key]) }}" style="  width: 30px; height: 30px;">
                            <p class="textstyle" data-text="{{ $value }}"></p>  
                        </div>
                    </div>

                @endforeach

            </div>
            
            <span class="Other-specify"  style=" position: absolute; top: 260px; right: 702.9px; left:95px;bottom: 242px;">
                Other, specify:
            </span>

            <textarea class="input-specific" wire:model="other_account_purpose" style="position: relative; left: 5px; right: 693px; top: 160px; width: 450px"></textarea>

            <span class="characters-left-summary-accunt-porpuse ">
                250 characters left
            </span>

            <a href="#">
                <button class="button-update-summary4" style="position: relative; left: 150px; right: 693px; top: 195px;" onclick="confirm('{{ __('translation.accountpurpose.message.alert') }}') || event.stopImmediatePropagation()" type="submit">{{ 'Update' }}</button>
            </a>

        </form>

    </div>
    <div class="summary-chevron-down">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>
    </div>
</details>
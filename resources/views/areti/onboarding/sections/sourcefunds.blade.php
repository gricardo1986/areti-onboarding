    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                       INICIO BODY                                                -->
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <!-- ................................. -->
    <!-- Inicio: Title Page                -->
    <!-- ................................. -->
    <span class="Personal-details">
        {{ __('translation.sourcefund.title.text') }}
    </span>
    <!-- ................................. -->
    <!-- Fin: Title Page                   -->
    <!-- ................................. -->

    <!-- ................................. -->
    <!-- Inicio: Message                   -->
    <!-- ................................. -->
    <span class="message">
        {!! __('translation.sourcefund.body.text') !!}
    </span>
    <!-- ................................. -->
    <!-- Fin: Message                      -->
    <!-- ................................. -->

    <form wire:submit.prevent="save_source_funds">

        <div class="container"> 
            @foreach($list_source_funds[$translation][0] as $key=>$value)
                <div class="checkbox">  
                    <input type="checkbox" wire:model="source_fund.{{ $value }}" value="{{ $value }}" />
                    <div class="box">  
                        <img class="image" src="{{ asset('areti-onboarding/'.$list_icons_sources[$key]) }}" style="  width: 30px; height: 30px;">
                        <p class="textstyle" data-text="{{ $value }}"></p>  
                    </div>  
                </div> 
            @endforeach 
        </div>

        <span class="Other-specify2">
            {{ __('translation.sourcefund.other.text') }}
        </span>

        <textarea class="input-specific2" wire:model="other_source_funds"></textarea>

        <span class="characters-left2">
            {{ __('translation.sourcefund.sizeother.text') }}
        </span>

        <!-- ................................. -->
        <!-- Inicio: Botón save                -->
        <!-- ................................. -->
        <a href="#">
            <button class="button-save2-2-3" onclick="confirm('{{ __('translation.sourcefund.message.alert') }}') || event.stopImmediatePropagation()" type="submit">{{ __('translation.sourcefund.save.button') }}</button>
        </a>
        <!-- ................................. -->
        <!-- Fin: Botón save                   -->
        <!-- ................................. -->
    </form>

    <!-- ................................. -->
    <!-- Inicio: Botón Back                -->
    <!-- ................................. -->
    <a href="#">
        <button class="button-back4-2-3" wire:click="buttons('source_wealth')" type="button">{{ __('translation.sourcefund.back.button') }}</button>
    </a>
    <!-- ................................. -->
    <!-- Fin: Botón Back                   -->
    <!-- ................................. -->

    <!-- ................................. -->
    <!-- Inicio: Botón Continue            -->
    <!-- ................................. -->
    <a href="#">
        <button class="button-continue4-2-3" wire:click="buttons('monthly_expected_activity')" type="button">{{ __('translation.sourcefund.continue.button') }}</button>
    </a>
    <!-- ................................. -->
    <!-- Inicio: Botón Continue            -->
    <!-- ................................. -->

    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                         FIN BODY                                                  -->
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
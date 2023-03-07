    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                       INICIO BODY                                                -->
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    
    <!-- ................................. -->
    <!-- Inicio: Title Page                -->
    <!-- ................................. -->
    <span class="Personal-details">
        {{ __('translation.sourcewealth.title.text') }}
    </span>
    <!-- ................................. -->
    <!-- Fin: Title Page                   -->
    <!-- ................................. -->

    <!-- ................................. -->
    <!-- Inicio: Message                   -->
    <!-- ................................. -->
    <span class="message">
        {!! __('translation.sourcewealth.body.text') !!}
    </span>
    <!-- ................................. -->
    <!-- Fin: Message                      -->
    <!-- ................................. -->

    <form wire:submit.prevent="save_source_wealth">

        <div class="container">  
            @foreach($list_source_wealth[$translation][0] as $key=>$value)
                <div class="checkbox">  
                    <input type="checkbox" wire:model="source_wealths.{{ $value }}" value="{{ $value }}" />  
                    <div class="box">  
                        <img class="image" src="{{ asset('areti-onboarding/'.$list_icons_sources[$key])}}" style="  width: 30px; height: 30px;">
                        <p class="textstyle" data-text="{{ $value }}"></p>  
                    </div>  
                </div>  
            @endforeach
        </div>  

        <span class="Other-specify2">
            {{ __('translation.sourcewealth.other.text') }}
        </span>

        <textarea class="input-specific2" wire:model="other_source_wealth"></textarea>

        <span class="characters-left2">
            {{ __('translation.sourcewealth.sizeother.text') }}
        </span>

        <!-- ................................. -->
        <!-- Inicio: Botón save                -->
        <!-- ................................. -->
        <a href="#">
            <button class="button-save2-2-3" onclick="confirm('{{ __('translation.sourcewealth.message.alert') }}') || event.stopImmediatePropagation()" type="submit">{{ __('translation.sourcewealth.save.button') }}</button>
        </a>
        <!-- ................................. -->
        <!-- Fin: Botón save                   -->
        <!-- ................................. -->
    </form>

    <!-- ................................. -->
    <!-- Inicio: Botón Back                -->
    <!-- ................................. -->
    <a href="#">
        <button wire:click="buttons('account_purpose')" class="button-back4-2-3" type="button">{{ __('translation.sourcewealth.back.button') }}</button>
    </a>
    <!-- ................................. -->
    <!-- Fin: Botón Back                   -->
    <!-- ................................. -->

    <!-- ................................. -->
    <!-- Inicio: Botón Continue            -->
    <!-- ................................. -->
    <a href="#">
        <button wire:click="buttons('source_funds')" class="button-continue4-2-3" type="button">{{ __('translation.sourcewealth.continue.button') }}</button>
    </a>
    <!-- ................................. -->
    <!-- Inicio: Botón Continue            -->
    <!-- ................................. -->

    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                         FIN BODY                                                  -->
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
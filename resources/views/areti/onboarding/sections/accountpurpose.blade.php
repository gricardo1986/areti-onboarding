        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!--                                       INICIO BODY                                                -->
        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

        <!-- ................................. -->
        <!-- Inicio: Title Page                -->
        <!-- ................................. -->
        <span class="Personal-details">
            {{ __('translation.accountpurpose.title.text') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Title Page                   -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Message                   -->
        <!-- ................................. -->
        <span class="message">
            {!! __('translation.accountpurpose.body.text') !!}
        </span>
        <!-- ................................. -->
        <!-- Fin: Message                      -->
        <!-- ................................. -->

        <form wire:submit.prevent="save_account_purpose">

            <div class="container">

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

            <span class="Other-specify">
                {{ __('translation.accountpurpose.other.text') }}
            </span>

            <textarea class="input-specific" wire:model="other_account_purpose"></textarea>
          
            <span class="characters-left">
                {{ __('translation.accountpurpose.sizeother.text') }}
            </span>

            <!-- ................................. -->
            <!-- Inicio: Botón save                -->
            <!-- ................................. -->
            <a href="#">
                <button class="button-save2-2-2" onclick="confirm('{{ __('translation.accountpurpose.message.alert') }}') || event.stopImmediatePropagation()" type="submit">{{ __('translation.accountpurpose.save.button') }}</button>
            </a>
            <!-- ................................. -->
            <!-- Fin: Botón save                   -->
            <!-- ................................. -->
        
        </form>

        <!-- ................................. -->
        <!-- Inicio: Botón Back                -->
        <!-- ................................. -->
        <a href="#">
            <button wire:click="buttons('info_occupation')" class="button-back4-2-2" type="button">{{ __('translation.accountpurpose.back.button') }}</button>
        </a>
        <!-- ................................. -->
        <!-- Fin: Botón Back                   -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Botón Continue            -->
        <!-- ................................. -->
        <a href="#">
            <button wire:click="buttons('source_wealth')" class="button-continue4-2-2" type="button">{{ __('translation.accountpurpose.continue.button') }}</button>
        </a>
        <!-- ................................. -->
        <!-- Inicio: Botón Continue            -->
        <!-- ................................. -->

        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!--                                         FIN BODY                                                  -->
        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

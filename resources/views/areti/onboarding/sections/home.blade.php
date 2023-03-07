        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!--                                       INICIO BODY                                                -->
        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
       
        <div class="Linea"></div>

        <span class="Onboarding-Aretibank">
            Onboarding Aretibank
        </span>

        <span class="Subtitulo2">
            <span class="Titulo2">{{ __('translation.title_home') }}</span><br>
            {{ __('translation.title_home_2') }}
        </span>

        <div class="Cuerpo-texto">
            {{ __('translation.body_home') }}
        </div>

        <a wire:click="buttons('select_account')">
            <button class="button-start" type="button">{{ __('translation.button_home') }}</button>
        </a>

        <input wire:model="check_term_use" class="checkbox" type="checkbox" id="cbox1" value="1" checked><br>

        <span class="Leyenda-de-terminos">
            {{ __('translation.tyc.one') }} 
            <span class="text-style-1">{{ __('translation.tyc.two') }} </span>,
            <span class="text-style-1">{{ __('translation.tyc.three') }} </span>
            {{ __('translation.tyc.four') }}  
            <span class="text-style-1">{{ __('translation.tyc.five') }} </span>.
        </span>

        <div class="image-onboarding"></div>


        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!--                                         FIN BODY                                                  -->
        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    
        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!--                                       INICIO BODY                                                -->
        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

       
        <!-- ................................. -->
        <!-- Inicio: Título de pagina          -->
        <!-- ................................. -->
        <span class="Verify-your-email">
            {{ __('translation.verifyemail.verifyemail.text') }}
        </span>
        <!-- ................................. -->
        <!-- Fin: Título de pagina             -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Subtext & Subtext1        -->
        <!-- ................................. -->
        <span class="subtext">
            {{ __('translation.verifyemail.sentcode.text') }}<br>
            <span class="subtext1">
                {{ 
                    substr_replace(
                        substr($email_address, 0, strripos($email_address, "@")), "********", 0).
                        substr($email_address, strripos($email_address, "@")
                    );
                }}
            </span>
            {{ __('translation.verifyemail.codebelow.text') }}
        </span>
        <!-- ................................. -->
        <!-- Inicio: Subtext & Subtext1        -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Input code                -->
        <!-- ................................. -->

        {{--
        <input type="text" class="input6 @if(!$this->verify_email) input6E @endif" wire:model="code_number">
        --}}

        @if($this->number_one>=0 && $this->number_one<=9)
            <?php $this->number_one=strval($this->number_one); ?>
        @else
            @if(is_numeric($this->number_one))
                <?php $this->number_one=strval($this->number_one)[0]; ?>
            @else
                <?php $this->number_one=' ' ?>
            @endif
        @endif
        <input type="number" autofocus tabindex="1" class="input6" wire:model="number_one" min="0" max="9">

        @if($this->number_two>=0 && $this->number_two<=9)
            <?php $this->number_two=strval($this->number_two); ?>
        @else
            @if(is_numeric($this->number_two))
                <?php $this->number_two=strval($this->number_two)[0]; ?>
            @else
                <?php $this->number_two=' ' ?>
            @endif
        @endif
        <input type="number" tabindex="2" class="input87" wire:model="number_two" min="0" max="9">
    
        @if($this->number_three>=0 && $this->number_three<=9)
            <?php $this->number_three=strval($this->number_three); ?>
        @else
            @if(is_numeric($this->number_three))
                <?php $this->number_three=strval($this->number_three)[0]; ?>
            @else
                <?php $this->number_three=' ' ?>
            @endif
        @endif
        <input type="number" tabindex="3" class="input86" wire:model="number_three" min="0" max="9">
    
        @if($this->number_four>=0 && $this->number_four<=9)
            <?php $this->number_four=strval($this->number_four); ?>
        @else
            @if(is_numeric($this->number_four))
                <?php $this->number_four=strval($this->number_four)[0]; ?>
            @else
                <?php $this->number_four=' ' ?>
            @endif
        @endif
        <input type="number" tabindex="4" class="input88" wire:model="number_four" min="0" max="9">
    
        @if($this->number_five>=0 && $this->number_five<=9)
            <?php $this->number_five=strval($this->number_five); ?>
        @else
            @if(is_numeric($this->number_five))
                <?php $this->number_five=strval($this->number_five)[0]; ?>
            @else
                <?php $this->number_five=' ' ?>
            @endif
        @endif
        <input type="number" tabindex="5" class="input89" wire:model="number_five" min="0" max="9">
    
        @if($this->number_six>=0 && $this->number_six<=9)
            <?php $this->number_six=strval($this->number_six); ?>
        @else
            @if(is_numeric($this->number_six))
                <?php $this->number_six=strval($this->number_six)[0]; ?>
            @else
                <?php $this->number_six=' ' ?>
            @endif
        @endif
        <input type="number" tabindex="6" class="input90" wire:model="number_six" min="0" max="9">
        

        <!-- ................................. -->
        <!-- Fin: Input code                -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Botón Verify              -->
        <!-- ................................. -->

        @if(!$this->verify_email)
            
            <!-- ................................. -->
            <!-- Inicio: Subtext3 & subtext4       -->
            <!-- ................................. -->
            <span class="subtext3E">
                {{$message_code}}
                <span class="subtext4">
                    {{ __('translation.verifyemail.didntreceiveemail.text') }} <br>
                    <a wire:click="resend_code">{{ __('translation.verifyemail.sentanotheremail.text') }}</a>
                </span>
            </span>
            <!-- ................................. -->
            <!-- Fin: Subtext3 & subtext4          -->
            <!-- ................................. -->

            <button class="button-verify" wire:click="buttons('verify_email')" type="button">{{ __('translation.verifyemail.verifyaccount.button') }}</button>
        @else

            <!-- ................................. -->
            <!-- Inicio: Subtext3 & subtext4       -->
            <!-- ................................. -->
            <span class="subtext3">
                {{$message_code}}
                <span class="subtext4">
                    {{ __('translation.verifyemail.didntreceiveemail.text') }} <br>
                    <a wire:click="resend_code">{{ __('translation.verifyemail.sentanotheremail.text') }}</a>
                </span>
            </span>
            <!-- ................................. -->
            <!-- Fin: Subtext3 & subtext4          -->
            <!-- ................................. -->

        @endif
        <!-- ................................. -->
        <!-- Fin: Botón Verify                 -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Botón Back 1              -->
        <!-- ................................. -->
        @if($this->verify_email)
            <a href="#">
                <button class="button-back1" type="button" wire:click="buttons('check_agreement')">{{ __('translation.verifyemail.continue.button') }}</button>
            </a>
        @endif
        <!-- ................................. -->
        <!-- Fin: Botón Back 1                 -->
        <!-- ................................. -->

        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <!--                                         FIN BODY                                                  -->
        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

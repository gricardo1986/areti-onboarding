    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                       INICIO BODY                                                -->
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

     
      <!-- ................................. -->
      <!-- INICIO: Titulo                    -->
      <!-- ................................. -->
      <span class="Get-started-Lets-create-your-profile">
        <span class="text-style-1">{{ __('translation.formvirtue.text_one') }}</span><br>
        {{ __('translation.formvirtue.text_two') }}
      </span>
      <!-- ................................. -->
      <!-- FIN: Titulo                       -->
      <!-- ................................. -->

      <!-- ................................. -->
      <!-- INICIO: First Name                -->
      <!-- ................................. -->

          <!-- Inicio: Label Name -->
          <span class="label1">
            {{ __('translation.formvirtue.first_name.field') }}
          </span>
          <!-- Fin: Label Name -->

          <!-- Inicio: Input Name -->
          <input class="input1 @error('first_name') input1E @enderror" wire:model="first_name" placeholder="{{ __('translation.formvirtue.first_name.placeholder') }}" required>
          @error('first_name') <span class="TextE1">{{ $message }}</span> @enderror
          <!-- Fin: Input Name -->

      <!-- ................................. -->
      <!-- Fin: First Name                   -->
      <!-- ................................. -->

      <!-- ................................. -->
      <!-- INICIO: Last Name                 -->
      <!-- ................................. -->

          <!-- Inicio: Label  last Name -->
          <span class="label2">
            {{ __('translation.formvirtue.last_name.field') }}
          </span>
          <!-- Fin: Label  last Name -->

          <!-- Inicio: Input last Name -->
          <input class="input2 @error('last_name') input2E @enderror" wire:model="last_name" placeholder="{{ __('translation.formvirtue.last_name.placeholder') }}" required>
          @error('last_name') <span class="TextE2">{{ $message }}</span> @enderror
          <!-- Fin: Input last Name -->

      <!-- ................................. -->
      <!-- FIN: Last Name                    -->
      <!-- ................................. -->

      <!-- ................................. -->
      <!-- INICIO: E-mail-address            -->
      <!-- ................................. -->

          <!-- Inicio: Label E-mail-address -->
          <span class="E-mail-address">
            {{ __('translation.formvirtue.email_address.field') }}
          </span>
          <!-- Fin: Label E-mail-address -->

          <!-- Inicio: Input email address -->
          <input class="input3 @error('email_address') input3E @enderror" wire:model="email_address" placeholder="{{ __('translation.formvirtue.email_address.placeholder') }}" required>
          @error('email_address') <span class="TextE3">{{ $message }}</span> @enderror
          <!-- Fin: Input email address -->

      <!-- ................................. -->
      <!-- FIN: E-mail-address            -->
      <!-- ................................. -->

      <!-- ................................. -->
      <!-- INICIO: Phone Number              -->
      <!-- ................................. -->

          <!-- Inicio: Label Phone-number -->
          <span class="Phone-number">
            {{ __('translation.formvirtue.phone_number.field') }}
          </span>
          <!-- Fin: Label Phone-number -->

          <!-- Inicio: Select Country Code -->
          <select class="Country-code @error('phone_code_id') Country-codeE @enderror" wire:model='phone_code_id'>
            <option data-countryCode="" value="" Selected>Select country</option>
            @foreach($list_phone_code[$translation] as $key => $value)
                <option data-countryCode="{{ $key }}" value="{{ $key }}">{{ $value }}</option>
            @endforeach
          </select>
          @error('phone_code_id') <span class="TextE5">{{ $message }}</span>@endif
          <!-- Fin: Select Country Code -->
      
          <!-- Inicio: Input Phone number -->
          <input class="input5 @error('phone_number') input5E @enderror"  wire:model="phone_number" placeholder="{{ __('translation.formvirtue.phone_number.placeholder') }}">
          @error('phone_number') <span class="TextE4">{{ $message }}</span>@enderror
          <!-- Fin: Input Phone number -->

      <!-- ................................. -->
      <!-- Fin: Phone Number                 -->
      <!-- ................................. -->

      <!-- ................................. -->
      <!-- Inicio: Botón Back                -->
      <!-- ................................. -->
      <a href="#" wire:click="buttons('select_account')">
        <button class="button-back" type="button">{{ __('translation.formvirtue.button_back') }}</button>
      </a>
      <!-- Fin botón continuar -->
      <!-- ................................. -->
      <!-- Fin: Botón Back                   -->
      <!-- ................................. -->

      <!-- ................................. -->
      <!-- Inicio: Botón Continue            -->
      <!-- ................................. -->
      <a href="#">
          <button wire:click="create_account" wire:loading.attr="disabled" class="button-continue1" type="button">{{ __('translation.formvirtue.button_continue') }}
            <div wire:loading wire:target="create_account">
                Wait...
            </div>
          </button>
      </a>
      <!-- ................................. -->
      <!-- Inicio: Botón Continue            -->
      <!-- ................................. -->

      <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
      <!--                                         FIN BODY                                                  -->
      <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    
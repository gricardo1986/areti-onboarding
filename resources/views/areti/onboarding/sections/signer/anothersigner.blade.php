    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                       INICIO BODY                                                -->
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

     
      <!-- ................................. -->
      <!-- INICIO: Titulo                    -->
      <!-- ................................. -->
      <span class="Get-started-Lets-create-your-profile">
        {{ __('translation.signer.title.text') }}
      </span>
      <!-- ................................. -->
      <!-- FIN: Titulo                       -->
      <!-- ................................. -->

      <form wire:submit.prevent="save_another_signer">
        <!-- ................................. -->
        <!-- INICIO: First Name                -->
        <!-- ................................. -->

            <!-- Inicio: Label Name -->
            <span class="label1">
              {{ __('translation.additionalpersonaldetails.first_name.field') }}
            </span>
            <!-- Fin: Label Name -->

            <!-- Inicio: Input Name -->
            <input class="input1 @error('another_first_name.{{ $number_another_signer }}') input1E @enderror" wire:model="another_first_name.{{ $number_another_signer }}" placeholder="{{ __('translation.formvirtue.first_name.placeholder') }}" required>
            @error('first_name.{{ $number_another_signer }}') <span class="TextE1">{{ $message }}</span> @enderror
            <!-- Fin: Input Name -->

        <!-- ................................. -->
        <!-- Fin: First Name                   -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- INICIO: Last Name                 -->
        <!-- ................................. -->

            <!-- Inicio: Label  last Name -->
            <span class="label2">
              {{ __('translation.additionalpersonaldetails.last_name.field') }}
            </span>
            <!-- Fin: Label  last Name -->

            <!-- Inicio: Input last Name -->
            <input class="input2 @error('another_last_name.{{ $number_another_signer }}') input2E @enderror" wire:model="another_last_name.{{ $number_another_signer }}" placeholder="{{ __('translation.formvirtue.last_name.placeholder') }}" required>
            @error('another_last_name.{{ $number_another_signer }}') <span class="TextE2">{{ $message }}</span> @enderror
            <!-- Fin: Input last Name -->

        <!-- ................................. -->
        <!-- FIN: Last Name                    -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- INICIO: E-mail-address            -->
        <!-- ................................. -->

            <!-- Inicio: Label E-mail-address -->
            <span class="E-mail-address">
              {{ __('translation.additionalpersonaldetails.email_address.field') }}
            </span>
            <!-- Fin: Label E-mail-address -->

            <!-- Inicio: Input email address -->
            <input class="input3 @error('another_email_address.{{ $number_another_signer }}') input3E @enderror" wire:model="another_email_address.{{ $number_another_signer }}" placeholder="{{ __('translation.formvirtue.email_address.placeholder') }}" required>
            @error('another_email_address.{{ $number_another_signer }}') <span class="TextE3">{{ $message }}</span> @enderror
            <!-- Fin: Input email address -->

        <!-- ................................. -->
        <!-- FIN: E-mail-address            -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- INICIO: Phone Number              -->
        <!-- ................................. -->

            <!-- Inicio: Label Phone-number -->
            <span class="Phone-number">
              {{ __('translation.additionalpersonaldetails.phone_number.field') }}
            </span>
            <!-- Fin: Label Phone-number -->

            <!-- Inicio: Select Country Code -->
            <select class="Country-code @error('another_phone_code_id.{{ $number_another_signer }}') Country-codeE @enderror" wire:model='another_phone_code_id.{{ $number_another_signer }}'>
              <option data-countryCode="" value="" Selected>{{ __('translation.additionalpersonaldetails.another_phone_code.option') }}</option>
              @foreach($another_list_phone_code[$translation] as $key => $value)
                  <option data-countryCode="{{ $key }}" value="{{ $key }}">{{ $value }}</option>
              @endforeach
            </select>
            @error('another_phone_code_id.{{ $number_another_signer }}') <span class="TextE5">{{ $message }}</span>@endif
            <!-- Fin: Select Country Code -->
        
            <!-- Inicio: Input Phone number -->
            <input class="input5 @error('another_phone_number.{{ $number_another_signer }}') input5E @enderror"  wire:model="another_phone_number.{{ $number_another_signer }}" placeholder="{{ __('translation.formvirtue.phone_number.placeholder') }}">
            @error('another_phone_number.{{ $number_another_signer }}') <span class="TextE4">{{ $message }}</span>@enderror
            <!-- Fin: Input Phone number -->

        <!-- ................................. -->
        <!-- Fin: Phone Number                 -->
        <!-- ................................. -->

        <!-- ................................. -->
        <!-- Inicio: Botón save                -->
        <!-- ................................. -->
            <a href="#">
              <button class="button-save" style=" position: absolute; top: 500px;" onclick="confirm('{{ __('translation.additionalpersonaldetails.message.alert') }}') || event.stopImmediatePropagation()">{{ __('translation.additionalpersonaldetails.save.button') }}</button>
            </a>
        <!-- ................................. -->
        <!-- Fin: Botón save                   -->
        <!-- ................................. -->
      </form>

      <!-- ................................. -->
      <!-- Inicio: Botón Back                -->
      <!-- ................................. -->
      <a href="#" wire:click="buttons('signer')">
        <button class="button-back2" style=" position: absolute; top: 500px;" type="button">{{ __('translation.additionalpersonaldetails.button_back') }}</button>
      </a>
      <!-- Fin botón continuar -->
      <!-- ................................. -->
      <!-- Fin: Botón Back                   -->
      <!-- ................................. -->

      <!-- ................................. -->
      <!-- Inicio: Botón Continue            -->
      <!-- ................................. -->
      <a href="#">
          <button wire:click='buttons("another_person_confirm")' style=" position: absolute; top: 500px;" class="button-continue2" type="button">{{ __('translation.additionalpersonaldetails.button_continue') }}</button>
      </a>
      <!-- ................................. -->
      <!-- Inicio: Botón Continue            -->
      <!-- ................................. -->

      <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
      <!--                                         FIN BODY                                                  -->
      <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
  
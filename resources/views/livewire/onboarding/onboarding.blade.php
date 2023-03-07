<div>
            
            @include("areti.onboarding.sections.styles")
            

            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++    -->
            <!-- INICIO: Select Country                                 -->
            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++    -->
            <div class="Rectangle">
                <select class="country1" wire:model='translation'>
                    <option value="en">{{ __('text.menu.language.en') }}</option>
                    <option value="es">{{ __('text.menu.language.es') }}</option>
                </select>
            </div>
            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++    -->
            <!-- FIN: Select Country                                    -->
            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++    -->


            @if($block_country)   
                @include("areti.onboarding.sections.blockcountry")
            @else


                @if($paso_paso)
                    <!-- ................................. -->
                    <!-- Inicio: Paso a paso               -->
                    <!-- ................................. -->
                    <?php 
                        $pasos='01';
                        $style_1="Tell-us-about-yourself";
                        $style_2="Tell-us-where-do-you-live2";
                        $style_3="Tell-us-what-do-you-do2";
                        $style_4="Help-us-to-serve-you-better2";
                    ?>
                    @if($person_confirm || $personal_details)
                        <?php 
                            $pasos='01';
                            $style_1="Tell-us-about-yourself2";
                            $style_2="Tell-us-where-do-you-live2";
                            $style_3="Tell-us-what-do-you-do2";
                            $style_4="Help-us-to-serve-you-better2";
                        ?>
                    @endif
                    @if($home_address)
                        <?php 
                            $pasos='02';
                            $style_1="Tell-us-about-yourself";
                            $style_2="Tell-us-where-do-you-live";
                            $style_3="Tell-us-what-do-you-do2";
                            $style_4="Help-us-to-serve-you-better2";
                        ?>
                    @endif
                    @if($info_occupation)
                        <?php 
                            $pasos='03';
                            $style_1="Tell-us-about-yourself";
                            $style_2="Tell-us-where-do-you-live2";
                            $style_3="Tell-us-what-do-you-do";
                            $style_4="Help-us-to-serve-you-better2";
                        ?>
                    @endif
                    @if($account_purpose || $source_wealth || $source_funds || $monthly_expected_activity ||$expected_receive_send_money)
                        <?php 
                            $pasos='04';
                            $style_1="Tell-us-about-yourself";
                            $style_2="Tell-us-where-do-you-live2";
                            $style_3="Tell-us-what-do-you-do2";
                            $style_4="Help-us-to-serve-you-better";
                        ?>
                    @endif
                        <div class="span-stepnumber">
                            {{ $pasos }}
                        </div>
                        <div class="span-stepnumber2">
                            /04
                        </div>

                        <a wire:click="buttons('person_confirm')"><span class="{{ $style_1 }}">
                            {{ __('translation.menu_tell_us_about_yourself') }}
                        </span></a>

                        <a wire:click="buttons('home_address')"><span class="{{ $style_2 }}">
                            {{ __('translation.menu_tell_us_where_do_you_live') }}
                        </span></a>

                        <a wire:click="buttons('info_occupation')"><span class="{{ $style_3 }}">
                            {{ __('translation.menu_tell_us_what_do_you_do') }}
                        </span></a>

                        <a wire:click="buttons('account_purpose')"><span class="{{ $style_4 }}">
                            {{ __('translation.menu_help_us_serve_better') }}
                        </span></a>
                    <!-- ................................. -->
                    <!-- Fin: Paso a paso                  -->
                    <!-- ................................. -->

                    {{--
                    <!-- ................................. -->
                    <!-- Inicio: Paso a paso               -->
                    <!-- ................................. -->

                    <!-- Inicio: Title paso a paso  -->
                    <span class="Tell-us-about-yourself">
                        {{ __('translation.menu_tell_us_about_yourself') }}
                    </span>
                    <!-- Fin: Title paso a paso     -->

                    <span class="Tab-step">
                        <?php 
                            $style_2="Step2";
                            $style_3="Step3";
                            $style_4="Step4";
                        ?>
                        @if($person_confirm || $personal_details)
                            <span class="text-style-1">1</span>/4
                        @endif
                        @if($home_address)
                            <span class="text-style-1">2</span>/4
                            <?php $style_2="Step2-2"; ?>
                        @endif
                        @if($info_occupation)
                            <span class="text-style-1">3</span>/4
                            <?php $style_3="Step3-3"; $style_2="Step2-2"; ?>
                        @endif
                        @if($account_purpose || $source_wealth || $source_funds || $monthly_expected_activity ||$expected_receive_send_money)
                            <span class="text-style-1">4</span>/4
                            <?php $style_4="Step4-4"; $style_3="Step3-3"; $style_2="Step2-2"; ?>
                        @endif
                    </span>

                    <a href="#" wire:click="buttons('person_confirm')" ><div class="Step1"></div></a>
                    <a href="#" wire:click="buttons('home_address')" ><div class="{{ $style_2 }}"></div></a>
                    <a href="#" wire:click="buttons('info_occupation')" ><div class="{{ $style_3 }}"></div></a>
                    <a href="#" wire:click="buttons('account_purpose')" ><div class="{{ $style_4 }}"></div></a>
                    <!-- ................................. -->
                    <!-- Fin: Paso a paso                  -->
                    <!-- ................................. -->
                    --}}
                @endif


                @if($start)   
                    @include("areti.onboarding.sections.home")
                    @include("areti.onboarding.sections.footers.footer_uno")
                @endif

                @if($select_account)   
                    @include("areti.onboarding.sections.checkaccount")
                    @include("areti.onboarding.sections.footers.footer_uno")
                @endif

                @if($client_form)    
                    @include("areti.onboarding.sections.formvirtueaccount")
                    @include("areti.onboarding.sections.footers.footer_uno")
                @endif

                @if($send_email)    
                    @include("areti.onboarding.sections.verifyemail")
                    @include("areti.onboarding.sections.footers.footer_uno")
                @endif

                @if($check_agreement)    
                    @include("areti.onboarding.sections.checkagreement")
                    @include("areti.onboarding.sections.footers.footer_uno")
                @endif

                @if($person_confirm)    
                    @include("areti.onboarding.sections.personconfirm")
                    @include("areti.onboarding.sections.footers.footer_uno")
                @endif

                @if($personal_details)  
                    @include("areti.onboarding.sections.personaldetails")

                    @if($us_person=="yes")
                        @include("areti.onboarding.sections.footers.footer_dos")
                    @endif
                    @if($us_person=="no")
                        @include("areti.onboarding.sections.footers.footer_cinco")
                    @endif
                @endif

                @if($home_address)    
                    @include("areti.onboarding.sections.homeaddress")
                    @include("areti.onboarding.sections.footers.footer_dos")
                @endif

                @if($info_occupation)    
                    @include("areti.onboarding.sections.infooccupation")
                    @include("areti.onboarding.sections.footers.footer_tres")
                @endif

                @if($account_purpose)    
                    @include("areti.onboarding.sections.accountpurpose")
                    @include("areti.onboarding.sections.footers.footer_uno")
                @endif

                @if($source_wealth)    
                    @include("areti.onboarding.sections.sourcewealth")
                    @include("areti.onboarding.sections.footers.footer_cuatro")
                @endif

                @if($source_funds)    
                    @include("areti.onboarding.sections.sourcefunds")
                    @include("areti.onboarding.sections.footers.footer_cuatro")
                @endif

                @if($monthly_expected_activity)    
                    @include("areti.onboarding.sections.monthlyexpectedactivity")
                    @include("areti.onboarding.sections.footers.footer_uno")
                @endif

                @if($expected_receive_send_money)    
                    @include("areti.onboarding.sections.expectedreceivesendmoney")
                    @include("areti.onboarding.sections.footers.footer_uno")
                @endif

                @if($signer)    
                    @include("areti.onboarding.sections.signer")
                    @include("areti.onboarding.sections.footers.footer_uno")
                @endif


                
                @switch($option_signer)
                    @case("yes")  

                        @if($choose_signer)
                            @include("areti.onboarding.sections.signer.choosesigner")
                        @endif

                        @if($another_signer)
                            @include("areti.onboarding.sections.signer.anothersigner")
                        @endif

                        @if($another_person_confirm)
                            @include("areti.onboarding.sections.signer.anotherpersonconfirm")
                        @endif

                        @if($another_personal_details)
                            @include("areti.onboarding.sections.signer.anotherpersonaldetails")
                        @endif

                        @if($another_home_address)
                            @include("areti.onboarding.sections.signer.anotherhomeaddress")
                        @endif

                        @if($another_info_occupation)
                            @include("areti.onboarding.sections.signer.anotherinfooccupation")
                        @endif

                        @break
                    @case("no")
                        
                        @break
                    @default
                        
                @endswitch



                @if($summary)    
                    @include("areti.onboarding.sections.summary")
                    {{--
                    @include("areti.onboarding.sections.footers.footer_siete")
                    --}}
                @endif

                @if($final_process)    
                    @include("areti.onboarding.sections.finalprocess")
                    @include("areti.onboarding.sections.footers.footer_uno")
                @endif

            @endif

</div>
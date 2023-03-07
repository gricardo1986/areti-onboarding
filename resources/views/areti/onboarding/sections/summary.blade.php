
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                       INICIO BODY                                                -->
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
   
    <span class="Titlesummary">
        Summary
    </span>

    @if ($errors->any())

        @foreach ($errors->all() as $key=>$error)
            <div id="{{ $key }}" class="alert alert-danger" role="alert">
               {{ $error }}
            </div>
        @endforeach

    @endif

    <div class="wrapper" style="padding-bottom: 320px;">

        <div class="tabs">
            <ul>
                <li wire:click="summary_active('1')" @if($summary_one) class="active" @endif>
                    <span class="text">Principal Account</span>
                </li>
                <li wire:click="summary_active('2')" @if($summary_two) class="active" @endif>
                    <span class="text">Aditional Signer</span>
                </li>
            </ul>
        </div>

        <div class="content" style="margin-top: -245px;">
            <div class="tab_wrap" @if($summary_one) style="display: block;" @else style="display: none;" @endif >
              <span class="description-summary" style="top: 260px;">
                Please take your time and check if the information provided is correct and if any field is missing, provide the required information because you will not be able to continue until the fields are filled.
               </span>
                <div wire:ignore class="tab_content">

                    <!--section wire:ignore style="padding-bottom: 320px;"-->

                    @if($us_person=="yes")
                        @include("areti.onboarding.sections.summary.summarypersonaldetailsus")
                    @else
                        @include("areti.onboarding.sections.summary.summarypersonaldetailsnous")
                    @endif

                    @include("areti.onboarding.sections.summary.summaryhomeaddress")

                    @include("areti.onboarding.sections.summary.summarywhatdoyoudo")

                    @include("areti.onboarding.sections.summary.summaryaccountpurpose")

                    @include("areti.onboarding.sections.summary.summarysourcewealth")

                    @include("areti.onboarding.sections.summary.summarysourcefund")

                    @include("areti.onboarding.sections.summary.summarymonthlyexpected")

                    @include("areti.onboarding.sections.summary.summaryreceivesendmoney")

                    <!--/section-->

                </div>
            </div>

            <div class="tab_wrap" @if($summary_two) style="display: block;" @else style="display: none;" @endif>
                <span class="description-summary" style="top: 260px;">
                  Please take your time and check if the information provided is correct and if any field is missing, provide the required information because you will not be able to continue until the fields are filled.
                </span>
                <div wire:ignore class="tab_content">
                    {{--
                    @include("areti.onboarding.sections.signer")
                    --}}
                </div>
            </div>
        </div>

    </div>
    
    <div style="position: fixed;
    bottom: 0;
    width: 100%;
    height: 40px;
    background: #fff;
    color: #fff; text-align: center;">
        <form wire:submit.prevent="save_all(true)">
            <button wire:click="save_all(false)" class="button-save2-2-3" type="button" style="position: inherit;" onclick="confirm('Are you save Summary Data?') || event.stopImmediatePropagation()">Save</button>
            <button type="button" class="button-back4-2-3" style="position: inherit;" wire:click="buttons('signer')">Back</button>
            <button class="button-continue4-2-3" style="position: inherit;" type="submit">Submit</button>
        </form>
    </div>
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!--                                         FIN BODY                                                  -->
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<div class="cuerpo-texto">
    Summary

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <hr>
    @include("areti.onboarding.sections.personaldetails")
    <hr>
    @include("areti.onboarding.sections.homeaddress")
    <hr>
    @include("areti.onboarding.sections.infooccupation")
    <hr>
    @include("areti.onboarding.sections.accountpurpose")
    <hr>
    @include("areti.onboarding.sections.sourcewealth")
    <hr>
    @include("areti.onboarding.sections.sourcefunds")
    <hr>
    @include("areti.onboarding.sections.monthlyexpectedactivity")
    <hr>
    @include("areti.onboarding.sections.expectedreceivesendmoney")
    <hr>


    <form wire:submit.prevent="save_all">
        <div class="">
            <a href="#" wire:click="buttons('signer')">Back</a>
        </div>
        <!--div class="">
            <a href="#" wire:click="buttons('final_process')">Continue</a>
        </div-->
        <div class="">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
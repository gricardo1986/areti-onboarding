    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <span class="Titlesummary">
        Summary
    </span>

    <span class="description-summary">
        Please take your time and check if the information provided is correct and if any field is missing, provide the required information because you will not be able to continue until the fields are filled.
    </span>


        <section>

            <details>
                <summary data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span class="summary-title">Personal details</span>
                    <div class="summary-chevron-up">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                </summary>
                
                <div class="summary-content2">
                    @include("areti.onboarding.sections.personaldetails")
                </div>

                <div class="summary-chevron-down">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>
                </div>
                
            </details>

            <details>
                <summary>
                    <span class="summary-title">Home address</span>
                    <div class="summary-chevron-up">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                </summary>
                
                <div class="summary-content">
                    <div class="box">
                        @include("areti.onboarding.sections.homeaddress")
                    </div>
                </div>

                <div class="summary-chevron-down">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>
                </div>
            </details>

            <details>
                <summary>
                    <span class="summary-title">What do you do</span>
                    <div class="summary-chevron-up">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                </summary>
                
                <div class="summary-content5">
                    <div class="box">
                        @include("areti.onboarding.sections.infooccupation")
                    </div>
                </div>

                <div class="summary-chevron-down">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>
                </div>
            </details>

            <details>
                <summary>
                    <span class="summary-title">Account purpose</span>
                    <div class="summary-chevron-up">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                </summary>
                
                <div class="summary-content4">
                    <div class="box">
                        @include("areti.onboarding.sections.accountpurpose")
                    </div>
                </div>

                <div class="summary-chevron-down">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>
                </div>
            </details>

            <details>
                <summary>
                    <span class="summary-title">Source of wealth</span>
                    <div class="summary-chevron-up">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                </summary>
                
                <div class="summary-content7" style="color:black">
                    <div class="box">
                        @include("areti.onboarding.sections.sourcewealth")
                    </div>
                </div>

                <div class="summary-chevron-down">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>
                </div>
            </details>

            <details>
                <summary>
                    <span class="summary-title">Source of funds</span>
                    <div class="summary-chevron-up">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                </summary>
                
                <div class="summary-content7" style="color:black">
                    <div class="box">
                        @include("areti.onboarding.sections.sourcefunds")
                    </div>
                </div>

                <div class="summary-chevron-down">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>
                </div>
            </details>

            <details>
                <summary>
                    <span class="summary-title">Monthly expected activity</span>
                    <div class="summary-chevron-up">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                </summary>
                
                <div class="summary-content" style="color:black">
                    <div class="box">
                        @include("areti.onboarding.sections.monthlyexpectedactivity")
                    </div>
                </div>
                <div class="summary-chevron-down">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>
                </div>
            </details>

            <details>
                <summary>
                    <span class="summary-title">From what countries are you expecting to RECEIVE money?</span>
                    <div class="summary-chevron-up">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                </summary>
                
                <div class="summary-content" style="color:black">
                    <div class="box">
                        @include("areti.onboarding.sections.expectedreceivesendmoney")
                    </div>
                </div>

                <div class="summary-chevron-down">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>
                </div>
            </details>

            
        </section>


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

    

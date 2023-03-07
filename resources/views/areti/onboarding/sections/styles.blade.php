  
    @if($block_country || $start || $select_account || $client_form || $send_email || $final_process || 
      $choose_signer || $another_signer || $another_personal_details || $another_home_address )
        <link rel="stylesheet" href="{{ asset('areti-onboarding/style.css')}}">

        <!-- .................................  -->
        <!-- INICIO: Dimensiones de Pagina      -->
        <!-- .................................  -->
        {{--
        <style>
            @media (min-width:1366px)  { 
            body{
                    width: 100%;
                    height: 768px;
                    overflow-x: hidden;
            }
            }
        </style>
        --}}
        <!-- .................................  -->
        <!-- FIN: Dimensiones de Pagina         -->
        <!-- .................................  -->
    @endif

    @if($check_agreement)
        <link rel="stylesheet" href="{{ asset('areti-onboarding/Style3.css')}}">
    @endif

    @if($home_address)
        <link rel="stylesheet" href="{{ asset('areti-onboarding/style.css')}}">
        {{--
        <style>
            @media (min-width:1366px)  { 
                body{
                width: 100%;
                height: 904px;
                overflow-x: hidden;
                }
            }
        </style>
        --}}
    @endif

    @if($personal_details)
        <link rel="stylesheet" href="{{ asset('areti-onboarding/style.css')}}">
        @if($us_person=="yes")
            {{--
            <style>
                @media (min-width:1366px)  { 
                    body{
                    width: 100%;
                    height: 904px;
                    overflow-x: hidden;
                    }
                }
            </style>
            --}}
        @endif
        @if($us_person=="no")
            {{--
            <style>
                @media (min-width:1366px)  { 
                    body{
                    width: 100%;
                    height: 973px;
                    overflow-x: hidden;
                    }
                }
            </style>
            --}}
        @endif
    @endif

    @if($info_occupation || $another_info_occupation)
        <link rel="stylesheet" href="{{ asset('areti-onboarding/style2.css')}}">
        {{--
        <style>
            @media (min-width:1366px)  { 
                body{
                width: 100%;
                height: 1005px;
                overflow-x: hidden;
                }
            }
        </style>
        --}}
    @endif

    @if($another_person_confirm || $person_confirm || $account_purpose || $monthly_expected_activity || $expected_receive_send_money || $signer)
        <link rel="stylesheet" href="{{ asset('areti-onboarding/style2.css')}}">
        {{--
        <style>
            @media (min-width:1366px)  { 
                body{
                width: 100%;
                height: 768px;
                overflow-x: hidden;
                }
            }
        </style>
        --}}
    @endif

    @if($source_wealth || $source_funds)
        <link rel="stylesheet" href="{{ asset('areti-onboarding/style2.css')}}">
        {{--
        <style>
            @media (min-width:1366px)  { 
                body{
                width: 100%;
                height: 928px;
                overflow-x: hidden;
                }
            }
        </style>
        --}}
    @endif

    @if($summary)

        <link rel="stylesheet" href="{{ asset('areti-onboarding/style.css')}}">
        <link rel="stylesheet" href="{{ asset('areti-onboarding/style2.css')}}">
        <link rel="stylesheet" href="{{ asset('areti-onboarding/Style3.css')}}">

        <style>
            .error {
                color: #D8000C;
                background-color: #FFBABA;
            }
        </style>

        {{--<script src="{{ asset('areti-onboarding/script.js')}}"></script>--}}
        
    @endif
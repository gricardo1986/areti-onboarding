<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;

use Livewire\Component;

use Livewire\WithFileUploads;

use App\Models\Country;
use App\Models\Account;
use App\Models\Person;
use App\Models\Address;
use App\Models\Identification_Document;
use App\Models\Occupation;
use App\Models\Customer_Subtype;
use App\Models\Account_Purpose;
use App\Models\Source_Money;
use App\Models\Expected_Money;

use Illuminate\Http\Request;

use Exception;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\DemoMail;
use App\Mail\OptEmail;
use Lang;
use File;

class Onboarding extends Component
{
    use WithFileUploads;

    //Id del registro de la cuenta y persona
    public $current_id_account=null;
    public $current_id_person=null;
    public $current_id_another_person=null;

    //variables para controlar las vistas
    public $block_country=false;
    public $paso_paso=false;
    public $start=true;
    public $select_account=false;
    public $client_form=false;
    public $send_email=false;
    public $verify_email=false;
    public $check_agreement=false;
    public $person_confirm=false;
    public $personal_details=false;
    public $home_address=false;
    public $info_occupation=false;
    public $account_purpose=false;
    public $source_wealth=false;
    public $source_funds=false;
    public $monthly_expected_activity=false;
    public $expected_receive_send_money=false;
    
    public $signer=false;
    public $choose_signer=false;
    public $another_signer=false;
    public $another_person_confirm=false;
    public $another_personal_details=false;
    public $another_home_address=false;
    public $another_info_occupation=false;

    public $summary=false;
    public $final_process=false;




    public $check_term_use=true;

    public $type_account=null;
    public $us_person=null;

    public $first_name;
    public $last_name;
    public $email_address;
    public $list_phone_code=[];
    public $phone_code_id;
    public $phone_number;

    public $date_birth;
    public $list_countries=[];
    public $country_birth_id;
    public $social_security_number;
    public $file_drive_license;
    public $list_primary_id_type=[];
    public $primary_id_type;
    public $file_primary_id;
    public $list_secondary_id_type=[];
    public $secondary_id_type;
    public $file_secondary_id;
    public $document_primary=[];
    public $document_secondary=[];


    public $street_address;
    public $country_address_id;
    public $city_address;
    public $state_address;
    public $zip_code_address;
    public $proof_address;
    public $address_file=[];


    public $employer;
    public $position;
    public $annual_income;
    public $occupation;
    public $list_occupation=[];
    public $customer_subtype;
    public $list_customer_subtype=[];
    public $description_position;
    public $political_exposure_disclosure=null;


    public $account_purposes=[];
    public $list_account_purpose=[];
    public $other_account_purpose;
    public $pre_account_purposes=[];
    public $list_icons_account_purpose=[];


    public $source_wealths=[];
    public $list_source_wealth=[];
    public $other_source_wealth;
    public $pre_source_wealths=[];


    public $source_fund=[];
    public $list_source_funds=[];
    public $other_source_funds;
    public $pre_source_fund=[];

    public $list_icons_sources=[];




    public $incoming_average_account;
    public $incoming_quantity;
    public $outgoing_average_account;
    public $outgoing_quantity;
    public $check_deposit_average_account;
    public $check_deposit_quantity;
    public $list_incoming_average_account=[];
    public $list_incoming_quantity=[];
    public $list_outgoing_average_account=[];
    public $list_outgoing_quantity=[];
    public $list_check_deposit_average_account=[];
    public $list_check_deposit_quantity=[];

    

    public $country_receive_one;
    public $country_receive_two;
    public $country_receive_three;
    public $country_send_one;
    public $country_send_two;
    public $country_send_three;
    public $list_country_receive_one;
    public $list_country_receive_two;
    public $list_country_receive_three;
    public $list_country_send_one;
    public $list_country_send_two;
    public $list_country_send_three;



    public $option_signer='no';

    public $number_another_signer=null;

    public $selected_exist_signer=null;
    public $list_aditional_signer=null;

    public $another_us_person=[null];

    public $another_first_name=[];
    public $another_last_name=[];
    public $another_email_address=[];
    public $another_list_phone_code=[];
    public $another_phone_code_id=[];
    public $another_phone_number=[];

    public $another_date_birth=[];
    public $another_country_birth_id=[];
    public $another_social_security_number=[];
    public $another_file_drive_license=[];
    public $another_primary_id_type=[];
    public $another_file_primary_id=[];
    public $another_secondary_id_type=[];
    public $another_file_secondary_id=[];
    public $another_document_primary=[];
    public $another_document_secondary=[];

    public $another_street_address=[];
    public $another_country_address_id=[];
    public $another_city_address=[];
    public $another_state_address=[];
    public $another_zip_code_address=[];
    public $another_proof_address=[];
    public $another_address_file=[];

    public $another_employer=[];
    public $another_position=[];
    public $another_annual_income=[];
    public $another_occupation=[];
    public $another_list_occupation=[];
    public $another_customer_subtype=[];
    public $another_list_customer_subtype=[];
    public $another_description_position=[];
    public $another_political_exposure_disclosure=null;


    public $summary_accordeon=[
        0=>false,
        1=>false,
        2=>false,
        3=>false,
        4=>false,
        5=>false,
        6=>false,
        7=>false,
    ];
    public $summary_one=true;
    public $summary_two=false;


    public $code_number;
    public $number_one;
    public $number_two;
    public $number_three;
    public $number_four;
    public $number_five;
    public $number_six;

    public $agreement=false;

    public $message_code="";

    public $translation="en";

    public function mount(Request $request, $random_code){

        $request_ip=$request->ip();
        if(! \BlockIp::verify_ip($request_ip)){
            //"You are restricted to access the site. Your Ip Address is not able to view this point"
            $this->buttons("block_country");
        }
        else{

            //Si existe codigo
            if($random_code){
                $this->start=false;
                $this->send_email=true;

                $account=Account::where("random_code",$random_code)->first();

                if(!$account){
                    abort(404);
                }

                if(!is_null($account->selected_another_signer))
                    $this->selected_exist_signer=$account->selected_another_signer;

                $code=$account->verification_code;

                $this->current_id_account=$account->id;
                if($account->check_agreement==1){

                    //$this->buttons('person_confirm');

                    $this->type_account=$account->account_type;

                    $person=Person::where("account_id",$this->current_id_account)->first();
                    //dd($person);

                    $this->first_name=$person->first_name;
                    $this->last_name=$person->last_name;
                    $this->email_address=$person->email;
                    $this->phone_code_id=$person->phone_code_id;
                    $this->phone_number=$person->phone_number;
        
                    $this->current_id_person=$person->id;
                    $this->us_person=$person->us_person;
                    $this->date_birth=$person->date_birth;
                    $this->country_birth_id=$person->country_birth_id;
                    $this->social_security_number=$person->social_security_number;


                    $primary_id=Identification_Document::where("person_id",$person->id)
                                                    ->where("priority","primary")->first();
                    if($primary_id)
                        $this->primary_id_type=$primary_id->type_document;

                    $secondary_id=Identification_Document::where("person_id",$person->id)
                                                    ->where("priority","secondary")->first();
                    if($secondary_id)
                        $this->secondary_id_type=$secondary_id->type_document;


                    $address=Address::where("person_id",$person->id)->first(); 
                    //dd($address);

                    if($address){
                        $this->street_address=$address->street_address;
                        $this->country_address_id=$address->country_address_id;
                        $this->city_address=$address->city_address;
                        $this->state_address=$address->state_address;
                        $this->zip_code_address=$address->zip_code_address;
                    }

                    $this->occupation=$person->occupation_id;
                    $this->customer_subtype=$person->customer_subtype_id;
                    $this->annual_income=$person->annual_income;
                    $this->employer=$person->employer;
                    $this->description_position=$person->description_position;
                    $this->political_exposure_disclosure=$person->political_exposure_disclosure;

                    $pre_ap=Account_Purpose::where("account_id",$this->current_id_account)->get();

                    foreach($pre_ap as $value){
                        $this->account_purposes[$value->description]=true;
                        if($value->other==1){
                            $this->other_account_purpose=$value->description;
                        }
                    }

                    $pre_sw=Source_Money::where("person_id",$person->id)
                        ->where("type",'wealth')->get();

                    foreach($pre_sw as $value){
                        $this->source_wealths[$value->description]=true;
                        if($value->other==1){
                            $this->other_source_wealth=$value->description;
                        }
                    }


                    $pre_sf=Source_Money::where("person_id",$person->id)
                        ->where("type",'funds')->get();

                    foreach($pre_sf as $value){
                        $this->source_fund[$value->description]=true;
                        if($value->other==1){
                            $this->other_source_funds=$value->description;
                        }
                    }



                    $this->incoming_average_account=$account->incoming_average_account;
                    $this->incoming_quantity=$account->incoming_quantity;
                    $this->outgoing_average_account=$account->outgoing_average_account;
                    $this->outgoing_quantity=$account->outgoing_quantity;
                    $this->check_deposit_average_account=$account->check_deposit_average_account;
                    $this->check_deposit_quantity=$account->check_deposit_quantity;



                    $exp_receive_money=Expected_Money::where("account_id",$account->id)
                                        ->where("type","receive")->get();
                    
                    $i=0;
                    foreach($exp_receive_money as $em){
                        if($i==0)
                            $this->country_receive_one=$em->country_id;
                        if($i==1)
                            $this->country_receive_two=$em->country_id;
                        if($i==2)
                            $this->country_receive_three=$em->country_id;
                        
                        $i++;
                    }
                    $exp_send_money=Expected_Money::where("account_id",$account->id)
                                        ->where("type","send")->get();
                    $j=0;
                    foreach($exp_send_money as $em){
                        if($j==0)
                            $this->country_send_one=$em->country_id;
                        if($j==1)
                            $this->country_send_two=$em->country_id;
                        if($j==2)
                            $this->country_send_three=$em->country_id;
                        
                        $j++;
                    }

                    //section step
                    //dd($account->step);
                    $this->buttons($account->step);

                }
                else{
                    $this->verify_code($code);
                }
                
            }

            if (! in_array($this->translation, ['en', 'es'])) {
                abort(404);
            }
            \App::setLocale($this->translation);

            $countries=Country::all();
            foreach($countries as $country){
                $this->list_countries['en'][$country->id]=$country->name;
                $this->list_countries['es'][$country->id]=$country->nombre;
                /*
                $this->list_phone_code['en'][$country->id]=$country->name." (+".$country->phone_code.")";
                $this->list_phone_code['es'][$country->id]=$country->nombre." (+".$country->phone_code.")";
                */
                $this->list_phone_code['en'][$country->id]="+".$country->phone_code;
                $this->list_phone_code['es'][$country->id]="+".$country->phone_code;

                $this->list_country_receive_one['en'][$country->id]=$country->name;
                $this->list_country_receive_one['es'][$country->id]=$country->nombre;
                $this->list_country_receive_two['en'][$country->id]=$country->name;
                $this->list_country_receive_two['es'][$country->id]=$country->nombre;
                $this->list_country_receive_three['en'][$country->id]=$country->name;
                $this->list_country_receive_three['es'][$country->id]=$country->nombre;
                $this->list_country_send_one['en'][$country->id]=$country->name;
                $this->list_country_send_one['es'][$country->id]=$country->nombre;
                $this->list_country_send_two['en'][$country->id]=$country->name;
                $this->list_country_send_two['es'][$country->id]=$country->nombre;
                $this->list_country_send_three['en'][$country->id]=$country->name;
                $this->list_country_send_three['es'][$country->id]=$country->nombre;

                /*
                $this->another_list_phone_code['en'][$country->id]=$country->name." (+".$country->phone_code.")";
                $this->another_list_phone_code['es'][$country->id]=$country->nombre." (+".$country->phone_code.")";
                */
                $this->another_list_phone_code['en'][$country->id]="+".$country->phone_code;
                $this->another_list_phone_code['es'][$country->id]="+".$country->phone_code;
            }

            $array_id_type['en']=[
                'passport'=>'Passport',
                'drive_license'=>'Drive License',
                'government_id'=>'Government ID',
            ];
            $array_id_type['es']=[
                'passport'=>'Pasaporte',
                'drive_license'=>'Licencia de Conducción',
                'government_id'=>'Identificación Gubernamental',
            ];
            $this->list_primary_id_type['en']=[];
            $this->list_secondary_id_type['en']=[];
            $this->list_primary_id_type['es']=[];
            $this->list_secondary_id_type['es']=[];
            array_push($this->list_primary_id_type['en'], $array_id_type['en']);
            array_push($this->list_secondary_id_type['en'], $array_id_type['en']);
            array_push($this->list_primary_id_type['es'], $array_id_type['es']);
            array_push($this->list_secondary_id_type['es'], $array_id_type['es']);

            $occupations=Occupation::all();
            foreach($occupations as $occup){
                $this->list_occupation['en'][$occup->id]=$occup->name;
                $this->list_occupation['es'][$occup->id]=$occup->nombre;
            }

            $customers_subtype=Customer_Subtype::all();
            foreach($customers_subtype as $cust){
                $this->list_customer_subtype['en'][$cust->id]=$cust->name;
                $this->list_customer_subtype['es'][$cust->id]=$cust->nombre;
            }

            $array_account_purpose['en']=[
                'Daily Expenses',
                'Loan Settlement',
                'Trading or Investment',
                'Travel Expenses',
                'Saving',
                'Other'
            ];
            $array_account_purpose['es']=[
                'Gastos diarios',
                'Liquidación de Préstamos',
                'Comercio o Inversión',
                'Los gastos de viaje',
                'Ahorro',
                'Otro'
            ];

            $this->list_icons_account_purpose=[
                'images/pasoapaso/DailyExpenses.png',
                'images/pasoapaso/Loansetlement.png',
                'images/pasoapaso/Tradingorinvestmen.png',
                'images/pasoapaso/TravelExpenses.png',
                'images/pasoapaso/Saving.png',
                'images/pasoapaso/Other.png'
            ];


            $this->list_account_purpose['en']=[];
            $this->list_account_purpose['es']=[];
            array_push($this->list_account_purpose['en'],$array_account_purpose['en']);
            array_push($this->list_account_purpose['es'],$array_account_purpose['es']);

            $array_source['en']=[
                'Dividends or Investment Earnings',
                'Gift or Donations',
                'Inheritance or Family Wealth',
                'Insurance Policy Proceeds',
                'Lifetime saving',
                'Lothery or Gambling',
                'professional Fees & Commissions',
                'Property Sale',
                'Rental Property Income',
                'Retirement & Pention',
                'Salary & Wayes',
                'Other'
            ];
            $array_source['es']=[
                'Dividendos o Ganancias de Inversiones',
                'Regalo o Donaciones',
                'Herencia o Riqueza Familiar',
                'Cobros de la póliza de seguro',
                'Ahorro de por vida',
                'Loteria o Apuestas',
                'honorarios y comisiones profesionales',
                'Venta de Propiedad',
                'Renta de la propiedad de alquiler',
                'Jubilación y Pensión',
                'Salario y Formas',
                'Otro'
            ];

            $this->list_icons_sources=[
                'images/pasoapaso/DividensorInvestmentEarnigs.png',
                'images/pasoapaso//Gift&Donations.png',
                'images/pasoapaso/InheritanceorFamilyWealth.png',
                'images/pasoapaso/InsurancePolicyProceeds.png',
                'images/pasoapaso/LifetimeSaving.png',
                'images/pasoapaso/LotteryorGambling.png',
                'images/pasoapaso/ProfesionalFees&Commissionsp.png',
                'images/pasoapaso/PropertySale .png',
                'images/pasoapaso/RentalPropertyIncome.png',
                'images/pasoapaso/Retirement&Pention.png',
                'images/pasoapaso/Salary&Wayes.png',
                'images/pasoapaso/Other.png'
            ];

            $this->list_source_wealth['en']=[];
            $this->list_source_wealth['es']=[];
            array_push($this->list_source_wealth['en'],$array_source['en']);
            array_push($this->list_source_wealth['es'],$array_source['es']);

            $this->list_source_funds['en']=[];
            $this->list_source_funds['es']=[];
            array_push($this->list_source_funds['en'],$array_source['en']);
            array_push($this->list_source_funds['es'],$array_source['es']);


            $array_average_account['en']=[
                "Greater than $25000",
                "Between $5000 and $25000",
                "Less Than $5000"
            ];
            $array_average_account['es']=[
                "Más de $25000",
                "Entre $5000 y $25000",
                "Menos de $ 5000"
            ];
            $array_quantity['en']=[
                "Greater than 5 transactions",
                "Between 3 and 5",
                "Less than 3"
            ];
            $array_quantity['es']=[
                "Más de 5 transacciones",
                "Entre 3 y 5",
                "Menos de 3"
            ];
            $this->list_incoming_average_account['en']=[];
            $this->list_incoming_average_account['es']=[];
            $this->list_incoming_quantity['en']=[];
            $this->list_incoming_quantity['es']=[];
            $this->list_outgoing_average_account['en']=[];
            $this->list_outgoing_average_account['es']=[];
            $this->list_outgoing_quantity['en']=[];
            $this->list_outgoing_quantity['es']=[];
            $this->list_check_deposit_average_account['en']=[];
            $this->list_check_deposit_average_account['es']=[];
            $this->list_check_deposit_quantity['en']=[];
            $this->list_check_deposit_quantity['es']=[];
            array_push($this->list_incoming_average_account['en'],$array_average_account['en']);
            array_push($this->list_incoming_average_account['es'],$array_average_account['es']);
            array_push($this->list_incoming_quantity['en'],$array_quantity['en']);
            array_push($this->list_incoming_quantity['es'],$array_quantity['es']);
            array_push($this->list_outgoing_average_account['en'],$array_average_account['en']);
            array_push($this->list_outgoing_average_account['es'],$array_average_account['es']);
            array_push($this->list_outgoing_quantity['en'],$array_quantity['en']);
            array_push($this->list_outgoing_quantity['es'],$array_quantity['es']);
            array_push($this->list_check_deposit_average_account['en'],$array_average_account['en']);
            array_push($this->list_check_deposit_average_account['es'],$array_average_account['es']);
            array_push($this->list_check_deposit_quantity['en'],$array_quantity['en']);
            array_push($this->list_check_deposit_quantity['es'],$array_quantity['es']);
        }

    }

    public function render()
    {
        if($this->current_id_person){
            $this->document_primary=Identification_Document::where("person_id",$this->current_id_person)
                                                    ->where("priority","primary")->get();
            $this->document_secondary=Identification_Document::where("person_id",$this->current_id_person)
                                                  ->where("priority","secondary")->get();
            $this->address_file=Address::where("person_id",$this->current_id_person)->get();

            
            $this->another_document_primary[$this->number_another_signer]=Identification_Document::where("person_id",$this->current_id_another_person)
                                                    ->where("priority","primary")->get();
            $this->another_document_secondary[$this->number_another_signer]=Identification_Document::where("person_id",$this->current_id_another_person)
                                                  ->where("priority","secondary")->get();
            $this->another_address_file[$this->number_another_signer]=Address::where("person_id",$this->current_id_another_person)->get();
        }

        if (! in_array($this->translation, ['en', 'es'])) {
            abort(404);
        }
        \App::setLocale($this->translation);
        return view('livewire.onboarding.onboarding');
    }

    //code to active or de-active buttons
    public function buttons($button){

        $this->block_country=false;
        $this->paso_paso=false;
        $this->start=false;
        $this->select_account=false;
        $this->client_form=false;
        $this->send_email=false;
        $this->verify_email=false;
        $this->check_agreement=false;
        $this->person_confirm=false;
        $this->personal_details=false;
        $this->home_address=false;
        $this->info_occupation=false;
        $this->account_purpose=false;
        $this->source_wealth=false;
        $this->source_funds=false;
        $this->monthly_expected_activity=false;
        $this->expected_receive_send_money=false;

        $this->signer=false;
        $this->choose_signer=false;
        $this->another_signer=false;
        $this->another_person_confirm=false;
        $this->another_personal_details=false;
        $this->another_home_address=false;
        $this->another_info_occupation=false;

        $this->summary=false;
        $this->final_process=false;

        switch($button){
            case "block_country": 
                $this->block_country=true;
                break;
            case "start": 
                $this->start=true;
                break;
            case "select_account": 
                if($this->check_term_use=='1')
                    $this->select_account=true; 
                else
                    $this->start=true;
                break;
            case "client_form": 
                $this->client_form=true;
                break;
            case "verify_email":
                $this->verify_code();
                break;
            case "check_agreement": 
                $this->check_agreement=true;
                break;
            case "person_confirm": 
                $this->paso_paso=true;
                $this->person_confirm=true;
                break;
            case "personal_details": 
                $this->paso_paso=true;
                $this->confirm_person();
                break;
            case "home_address": 
                $this->paso_paso=true;
                $this->home_address=true;
                break;
            case "info_occupation": 
                $this->paso_paso=true;
                $this->info_occupation=true;
                break;
            case "account_purpose":
                $this->paso_paso=true;
                $this->account_purpose=true;
                break;
            case "source_wealth":
                $this->paso_paso=true;
                $this->source_wealth=true;
                break;
            case "source_funds":
                $this->paso_paso=true;
                $this->source_funds=true;
                break;
            case "monthly_expected_activity":
                $this->paso_paso=true;
                $this->monthly_expected_activity=true;
                break;
            case "expected_receive_send_money":
                $this->paso_paso=true;
                $this->expected_receive_send_money=true;
                break;
            case "signer":
                $this->signer=true;
                break;
            case "option_signer":
                $this->option_signer();
                break;
            case "choose_signer":
                $this->choose_signer=true;
                break;
            case "another_signer":
                $this->option_signer="yes";
                $this->data_additional_signer($this->selected_exist_signer);
                $this->another_signer=true;
                break;
            case "another_person_confirm":
                $this->option_signer="yes";
                $this->data_additional_signer($this->selected_exist_signer);
                $this->another_person_confirm=true;
                break;
            case "another_personal_details":
                $this->option_signer="yes";
                $this->data_additional_signer($this->selected_exist_signer);
                $this->another_personal_details=true;
                break;
            case "another_home_address":
                $this->option_signer="yes";
                $this->data_additional_signer($this->selected_exist_signer);
                $this->another_home_address=true;
                break;
            case "another_info_occupation":
                $this->option_signer="yes";
                $this->data_additional_signer($this->selected_exist_signer);
                $this->another_info_occupation=true;
                break;
            case "summary":
                $this->summary=true;
                break;
            case "final_process":
                $this->final_process=true;
                break;
        }
    }

    public function create_account(){

        \App::setLocale($this->translation);
        //$this->validate();
        $this->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email_address' => 'required|email|min:3',
            'phone_code_id' => 'required',
            'phone_number' => 'required',
        ],[
            'first_name.required'=> __('errors.first_name.required'),
            'first_name.min'=> __('errors.first_name.min'),
            'last_name.required'=> __('errors.last_name.required'),
            'last_name.min'=> __('errors.last_name.min'),
            'email_address.required'=> __('errors.email_address.required'),
            'email_address.email'=> __('errors.email_address.email'),
            'email_address.min'=> __('errors.email_address.min'),
            'phone_code_id.required'=> __('errors.phone_code_id.required'),
            'phone_number.required'=> __('errors.phone_number.required'),
        ]);

        try{

            DB::beginTransaction();

            $code=random_int(100000,999999);
            $random_code=\GenerateStrings::random_characters();

            $account=new Account;
            $account->account_type=$this->type_account;
            $account->term_use=1;
            $account->status="created";
            $account->status_description="account was created!";
            $account->verification_code=$code;
            $account->random_code=$random_code;
            $account->check_agreement=false;
            $account->save();

            $this->current_id_account=$account->id;

            $person=new Person;
            $person->account_id=$account->id;
            $person->first_name=$this->first_name;
            $person->last_name=$this->last_name;
            $person->email=$this->email_address;
            $person->phone_code_id=$this->phone_code_id;
            $person->phone_number=$this->phone_number;
            $person->index_signer=Str::uuid()->toString();
            $person->save();

            $this->current_id_person=$person->id;

            $title=$code.' Verification Code from Areti Onboarding ';
            $body='Your Verification code is: '.$code;

            $this->create_email($title, $body, $code, $random_code, $this->email_address);

            $this->client_form=false;
            $this->send_email=true;
            
            DB::commit();
        }
        catch(Exception $e){

            DB::rollBack();
            dd($e->getMessage());

        }

    }

    public function resend_code(){
        $code=random_int(100000,999999);
        $current_account=Account::find($this->current_id_account);
        $current_account->verification_code=$code;
        $current_account->save();

        $title=$code.' Verification Code from Areti Onboarding ';
        $body='Your Verification code is: '.$code;

        $this->create_email($title, $body, $code, $current_account->random_code, $this->email_address);
    }

    public function create_email($title, $body, $code=null, $random_code, $email){

        $person=Person::find($this->current_id_person);

        try{
            $mailData = [
                'title' => $title,
                'body' => $body,
                'code'=>$code,
                'random_code'=>$random_code,
                'full_name'=>$person->first_name." ".$person->last_name
            ];
            
            if($code)
                Mail::to($email)->send(new DemoMail($mailData));
            else
                Mail::to($email)->send(new OptEmail($mailData));
            
        }
        catch(Exception $e){
            dd($e->getMessage());
        }
    
    }

    public function check_agreement(){

        if($this->agreement==true)
            $this->agreement=false;
        else
            $this->agreement=true;
    }

    public function verify_code($cod=null){

        \App::setLocale($this->translation);

        if($cod){
            $code=$cod;
        }
        else{

            /*dd($this->number_one);
            dd($this->number_two);
            dd($this->number_three);
            dd($this->number_four);
            dd($this->number_five);
            dd($this->number_six);*/
            
            $code=
            strval($this->number_one).
            strval($this->number_two).
            strval($this->number_three).
            strval($this->number_four).
            strval($this->number_five).
            strval($this->number_six);

            //dd($code);

            //$code=$this->code_number;
        }

        $account_to_active=Account::where("verification_code",$code)->first();
        if($account_to_active){
            $account_to_active->status="activated";
            $account_to_active->status_description="account was activated!";
            $account_to_active->save();
            $this->send_email=true;
            $this->verify_email=true;
            $this->check_agreement=false;
            $this->message_code= __('translation.verifyemail.message_code.text');

            if($cod){
                $this->send_email=false;
                $this->verify_email=false;
                $this->check_agreement=true;
            }
        }
        else{
            //mandar un mensaje de error y evitar la siguiente pantalla
            $this->send_email=true;
            $this->verify_email=false;
            $this->check_agreement=false;
            $this->message_code= __('errors.message_code.error');
        }

    }

    public function confirm_person($send=true){

        if($this->us_person=="yes" || $this->us_person=="no"){

            $random_code=\GenerateStrings::random_characters();

            //guardar la aceptacion del acuerdo
            $current_account=Account::find($this->current_id_account);
            $current_account->random_code=$random_code;
            $current_account->check_agreement='1';
            $current_account->step='person_confirm';
            $current_account->save();

            $current_person=Person::where("account_id",$this->current_id_account)->first();
            $current_person->us_person=$this->us_person;
            $current_person->save();

            $this->email_address=$current_person->email;
            $this->current_id_person=$current_person->id;
            
            if($send){
                $title="You have set the US Person";
                $body=($this->us_person=='yes')? 'You have confirm that you are a US Person':'You have confirm that you are not a US Person';
                
                $this->create_email($title, $body, null, $random_code, $this->email_address);
            }

            $this->check_agreement=false;
            $this->personal_details=true;
             
        }
        else{
            $this->check_agreement=true;
        }
    }

    public function save_personal_details($send=true){

        try{

            DB::beginTransaction();

            $random_code=\GenerateStrings::random_characters();

            $account=Account::find($this->current_id_account);
            $account->random_code=$random_code;
            $account->step='personal_details';
            $account->status="incomplete";
            $account->status_description="account incomplete!";
            $account->save();

            $person=Person::where("account_id",$account->id)->first();
            //$person->first_name=$this->first_name;
            //$person->last_name=$this->last_name;
            //$person->email=$this->email_address;
            //$person->phone_code_id=$this->phone_code_id;
            //$person->phone_number=$this->phone_number;
            $person->us_person=$this->us_person;
            $person->date_birth=$this->date_birth;
            $person->country_birth_id=$this->country_birth_id;
            $person->social_security_number=$this->social_security_number;
            //$person->drive_license=$this->drive_license;
            $person->save();

            $this->email_address=$person->email;

            $this->current_id_person=$person->id;

            if($this->us_person=="yes"){
                
                if($this->file_drive_license){

                    $document_exist=Identification_Document::where("person_id",$person->id)
                                    ->where("priority","primary")->first();
                    if($document_exist){
                        //primero elimina el primer archivo
                        if(File::exists($document_exist->document_url)){

                            Identification_Document::where("person_id",$person->id)
                                    ->where("priority","primary")->delete();
                            File::Delete($document_exist->document_url);
                        }
                    }

                    $document=new Identification_Document;
                    $document->priority="primary";
                    $document->type_document="drive_license";
                    $document->file_name=$this->file_drive_license->getClientOriginalName();
                    $document->document_url=storage_path()."\app\\".$this->file_drive_license->store('drive_license');
                    $document->person_id=$person->id;
                    $document->save();
                }
            }
            else{
                
                if($this->primary_id_type){

                    if($this->file_primary_id){
                        $document_exist_primary=Identification_Document::where("person_id",$person->id)
                                            ->where("priority","primary")->first();
                        if($document_exist_primary){
                            //primero elimina el primer archivo
                            if(File::exists($document_exist_primary->document_url)){

                                Identification_Document::where("person_id",$person->id)
                                        ->where("priority","primary")->delete();
                                File::Delete($document_exist_primary->document_url);
                            }
                        }

                        $document_primary=new Identification_Document;
                        $document_primary->priority="primary";
                        $document_primary->type_document=$this->primary_id_type;
                        $document_primary->file_name=$this->file_primary_id->getClientOriginalName();
                        $document_primary->document_url=storage_path()."\app\\".$this->file_primary_id->store('primary_id');
                        $document_primary->person_id=$person->id;
                        $document_primary->save();
                    }
                }

                if($this->secondary_id_type){

                    if($this->file_secondary_id){
                        $document_exist_secondary=Identification_Document::where("person_id",$person->id)
                                                    ->where("priority","secondary")->first();
                        if($document_exist_secondary){
                            //primero elimina el primer archivo
                            if(File::exists($document_exist_secondary->document_url)){

                                Identification_Document::where("person_id",$person->id)
                                        ->where("priority","secondary")->delete();
                                File::Delete($document_exist_secondary->document_url);
                            }
                        }

                        $document_secondary=new Identification_Document;
                        $document_secondary->priority="secondary";
                        $document_secondary->type_document=$this->secondary_id_type;
                        $document_secondary->file_name=$this->file_secondary_id->getClientOriginalName();
                        $document_secondary->document_url=storage_path()."\app\\".$this->file_secondary_id->store('secondary_id');
                        $document_secondary->person_id=$person->id;
                        $document_secondary->save();
                    }
                }
            }

            if($send){
                $title="Information about Personal Details";
                $body='Your personal details data has been stored';
                
                $this->create_email($title, $body, null, $random_code, $this->email_address);
            }
            
            DB::commit();
        }
        catch(Exception $e){

            DB::rollBack();
            dd($e->getMessage());

        }
    }

    public function save_home_address($send=true){

        try{

            DB::beginTransaction();

            $random_code=\GenerateStrings::random_characters();

            $account=Account::find($this->current_id_account);
            $account->random_code=$random_code;
            $account->step='home_address';
            $account->save();

            $person=Person::where("account_id",$this->current_id_account)->first();
            $this->email_address=$person->email;

            $exist_address=Address::where("person_id",$person->id)->first();

            if(is_null($exist_address)){
                $address=new Address;
                $address->person_id=$person->id;
                $address->priority="home";
                $address->street_address=$this->street_address;
                $address->country_address_id=$this->country_address_id;
                $address->city_address=$this->city_address;
                $address->state_address=$this->state_address;
                $address->zip_code_address=$this->zip_code_address;

                if($this->proof_address){
                    $address->file_name=$this->proof_address->getClientOriginalName();
                    $address->address_url_file=storage_path()."\app\\".$this->proof_address->store('address');
                }

                $address->save();
            }
            else{

                $address=Address::where("person_id",$person->id)->first();
                $address->person_id=$person->id;
                $address->priority="home";
                $address->street_address=$this->street_address;
                $address->country_address_id=$this->country_address_id;
                $address->city_address=$this->city_address;
                $address->state_address=$this->state_address;
                $address->zip_code_address=$this->zip_code_address;

                if($this->proof_address){

                    //primero elimina el primer archivo
                    if(File::exists($address->address_url_file)){

                        File::Delete($address->address_url_file);
                    }

                    $address->file_name=$this->proof_address->getClientOriginalName();
                    $address->address_url_file=storage_path()."\app\\".$this->proof_address->store('address');
                }

                $address->save();

            }

            if($send){
                $title="Information about Home Address";
                $body='Your home address data has been stored';
                
                $this->create_email($title, $body, null, $random_code, $this->email_address);
            }
            
            DB::commit();
        }
        catch(Exception $e){

            DB::rollBack();
            dd($e->getMessage());

        }
    }

    public function save_info_occupation($send=true){

        try{

            DB::beginTransaction();

            $random_code=\GenerateStrings::random_characters();

            $account=Account::find($this->current_id_account);
            $account->random_code=$random_code;
            $account->step='info_occupation';
            $account->save();

            $person=Person::where("account_id",$this->current_id_account)->first();
            $person->employer=$this->employer;
            $person->annual_income=$this->annual_income;
            $person->occupation_id=($this->occupation)?$this->occupation:null;
            $person->customer_subtype_id=($this->customer_subtype)?$this->customer_subtype:null;
            $person->description_position=$this->description_position;
            $person->political_exposure_disclosure=$this->political_exposure_disclosure;
            $person->save();

            $this->email_address=$person->email;
            
            if($send){
                $title="Information about Tell Us What do you Do";
                $body='Your home Tell Us What do you Do data has been stored';
                
                $this->create_email($title, $body, null, $random_code, $this->email_address);
            }
            
            DB::commit();
        }
        catch(Exception $e){

            DB::rollBack();
            dd($e->getMessage());

        }
    }

    public function save_account_purpose($send=true){
        //dd($this->account_purposes);
        try{

            DB::beginTransaction();

            $random_code=\GenerateStrings::random_characters();

            $account=Account::find($this->current_id_account);
            $account->random_code=$random_code;
            $account->step='account_purpose';
            $account->save();

            $person=Person::where("account_id",$this->current_id_account)->first();
            $this->email_address=$person->email;

            //primero eliminar los datos anteriores
            $delete_acc_purpose=Account_Purpose::where("account_id",$account->id)->delete();

            foreach($this->account_purposes as $key=>$value){
                
                if($value!=false){
                    //opciones de checkbox
                    $account_purposes[$key]=new Account_Purpose;
                    $account_purposes[$key]->description=$key;
                    $account_purposes[$key]->account_id=$account->id;
                    $account_purposes[$key]->other=0;
                    $account_purposes[$key]->save();

                    //opcion de caja de texto
                    if($key=="Other"){
                        $account_purposes_other=new Account_Purpose;
                        $account_purposes_other->description=$this->other_account_purpose;
                        $account_purposes_other->account_id=$this->current_id_account;
                        $account_purposes_other->other=1;
                        $account_purposes_other->save();
                    }
                }
                 
            }
            
            if($send){
                $title="Information about Account Purpose";
                $body='Your home Account Purpose data has been stored';
                
                $this->create_email($title, $body, null, $random_code, $this->email_address);
            }
            
            DB::commit();
        
        }
        catch(Exception $e){

            DB::rollBack();
            dd($e->getMessage());

        }
    }

    public function save_source_wealth($send=true){
        //dd($this->source_wealths);
        try{

            DB::beginTransaction();

            $random_code=\GenerateStrings::random_characters();

            $account=Account::find($this->current_id_account);
            $account->random_code=$random_code;
            $account->step='source_wealth';
            $account->save();

            $person=Person::where("account_id",$this->current_id_account)->first();
            $this->email_address=$person->email;

            //primero eliminar los datos anteriores
            $delete_source_wealth=Source_Money::where("person_id",$person->id)
                                    ->where("type","wealth")->delete();

            foreach($this->source_wealths as $key=>$value){
                
                if($value!=false){
                    $source_wealth[$key]=new Source_Money;
                    $source_wealth[$key]->type='wealth';
                    $source_wealth[$key]->description=$value;
                    $source_wealth[$key]->person_id=$person->id;
                    $source_wealth[$key]->other=0;
                    $source_wealth[$key]->save();

                    //opcion de caja de texto
                    if($key=="Other"){
                        $source_wealth_other=new Source_Money;
                        $source_wealth_other->type='wealth';
                        $source_wealth_other->description=$this->other_source_wealth;
                        $source_wealth_other->person_id=$person->id;
                        $source_wealth_other->other=1;
                        $source_wealth_other->save();
                    }
                }
                
            }
            
            if($send){
                $title="Information about Source of wealth";
                $body='Your home Source of wealth data has been stored';
                
                $this->create_email($title, $body, null, $random_code, $this->email_address);
            }
            DB::commit();
        
        }
        catch(Exception $e){

            DB::rollBack();
            dd($e->getMessage());

        }
    }

    public function save_source_funds($send=true){
        //dd($this->current_id_account);
        try{

            DB::beginTransaction();

            $random_code=\GenerateStrings::random_characters();

            $account=Account::find($this->current_id_account);
            $account->random_code=$random_code;
            $account->step='source_funds';
            $account->save();

            $person=Person::where("account_id",$this->current_id_account)->first();
            $this->email_address=$person->email;

            //primero eliminar los datos anteriores
            $delete_source_funds=Source_Money::where("person_id",$person->id)
                                    ->where("type","funds")->delete();

            foreach($this->source_fund as $key=>$value){
                
                if($value!=false){
                    $source_funds[$key]=new Source_Money;
                    $source_funds[$key]->type='funds';
                    $source_funds[$key]->description=$value;
                    $source_funds[$key]->person_id=$person->id;
                    $source_funds[$key]->other=0;
                    $source_funds[$key]->save();

                    //opcion de caja de texto
                    if($key=="Other"){
                        $source_funds_other=new Source_Money;
                        $source_funds_other->type='funds';
                        $source_funds_other->description=$this->other_source_funds;
                        $source_funds_other->person_id=$person->id;
                        $source_funds_other->other=1;
                        $source_funds_other->save();
                    }
                }
                
            }

            if($send){
                $title="Information about Source of Funds";
                $body='Your home Source of Funds data has been stored';
                
                $this->create_email($title, $body, null, $random_code, $this->email_address);
            }            
            DB::commit();
        
        }
        catch(Exception $e){

            DB::rollBack();
            dd($e->getMessage());

        }
    }

    public function save_monthly_expected_activities($send=true){

        try{

            DB::beginTransaction();

            $random_code=\GenerateStrings::random_characters();

            $account=Account::find($this->current_id_account);
            $account->random_code=$random_code;
            $account->step='monthly_expected_activity';
            $account->incoming_average_account=$this->incoming_average_account;
            $account->incoming_quantity=$this->incoming_quantity;
            $account->outgoing_average_account=$this->outgoing_average_account;
            $account->outgoing_quantity=$this->outgoing_quantity;
            $account->check_deposit_average_account=$this->check_deposit_average_account;
            $account->check_deposit_quantity=$this->check_deposit_quantity;
            $account->save();

            $person=Person::where("account_id",$this->current_id_account)->first();
            $this->email_address=$person->email;

            if($send){
                $title="Information about Monthly Expected Activity";
                $body='Your home Monthly Expected Activity data has been stored';
                
                $this->create_email($title, $body, null, $random_code, $this->email_address);
            }            
            DB::commit();
        
        }
        catch(Exception $e){

            DB::rollBack();
            dd($e->getMessage());

        }
    }

    public function save_expected_receive_send_money($send=true){
        try{

            DB::beginTransaction();

            $random_code=\GenerateStrings::random_characters();

            $account=Account::find($this->current_id_account);
            $account->random_code=$random_code;
            $account->step='expected_receive_send_money';
            $account->save();

            $person=Person::where("account_id",$this->current_id_account)->first();
            $this->email_address=$person->email;

            //borrar los campos y llenarlos de nuevo
            $exp_receive_money=Expected_Money::where("account_id",$this->current_id_account)->delete();

            if($this->country_receive_one){
                $expected_receive_money_one=new Expected_Money;
                $expected_receive_money_one->type="receive";
                $expected_receive_money_one->country_id=$this->country_receive_one;
                $expected_receive_money_one->account_id=$this->current_id_account;
                $expected_receive_money_one->save();
            }

            if($this->country_receive_two){
                $expected_receive_money_two=new Expected_Money;
                $expected_receive_money_two->type="receive";
                $expected_receive_money_two->country_id=$this->country_receive_two;
                $expected_receive_money_two->account_id=$this->current_id_account;
                $expected_receive_money_two->save();
            }

            if($this->country_receive_three){
                $expected_receive_money_three=new Expected_Money;
                $expected_receive_money_three->type="receive";
                $expected_receive_money_three->country_id=$this->country_receive_three;
                $expected_receive_money_three->account_id=$this->current_id_account;
                $expected_receive_money_three->save();
            }

            if($this->country_send_one){
                $expected_send_money_one=new Expected_Money;
                $expected_send_money_one->type="send";
                $expected_send_money_one->country_id=$this->country_send_one;
                $expected_send_money_one->account_id=$this->current_id_account;
                $expected_send_money_one->save();
            }

            if($this->country_send_two){
                $expected_send_money_two=new Expected_Money;
                $expected_send_money_two->type="send";
                $expected_send_money_two->country_id=$this->country_send_two;
                $expected_send_money_two->account_id=$this->current_id_account;
                $expected_send_money_two->save();
            }

            if($this->country_send_three){
                $expected_send_money_three=new Expected_Money;
                $expected_send_money_three->type="send";
                $expected_send_money_three->country_id=$this->country_send_three;
                $expected_send_money_three->account_id=$this->current_id_account;
                $expected_send_money_three->save();
            }

            if($send){
                $title="Information about From What Countries are you Expecting to RECEIVE / SEND money";
                $body='Your From What Countries are you Expecting to RECEIVE / SEND money data has been stored';
                
                $this->create_email($title, $body, null, $random_code, $this->email_address);
            }
            
            DB::commit();
        
        }
        catch(Exception $e){

            DB::rollBack();
            dd($e->getMessage());

        }
    }

    public function save_all($bool){

        if($bool){
            \App::setLocale($this->translation);

            $rules=[
                'date_birth' => 'required',
                'country_birth_id' => 'required|exists:countries,id',
                'social_security_number' => 'required',

                'street_address' => 'required',
                'country_address_id' => 'required|exists:countries,id',
                'city_address' => 'required',
                'state_address' => 'required',
                'zip_code_address' => 'required',

                'occupation' => 'required',
                'customer_subtype' => 'required',
                'annual_income' => 'required',
                'description_position' => 'required',
                'political_exposure_disclosure' => 'required',

                'account_purposes'=>'required',

                'source_wealths'=>'required',

                'source_fund'=>'required',

                'incoming_average_account'=>'required',
                'incoming_quantity'=>'required',
                'outgoing_average_account'=>'required',
                'outgoing_quantity'=>'required',

                'country_receive_one'=>'required',
                'country_receive_two'=>'required',
                'country_receive_three'=>'required',
                'country_send_one'=>'required',
                'country_send_two'=>'required',
                'country_send_three'=>'required',

            ]; 

            $messages=[
                'date_birth.required' => __('errors.date_birth.required'),
                'country_birth_id.required' => __('errors.country_birth_id.required'),
                'country_birth_id.exists' => __('errors.country_birth_id.exists'),
                'social_security_number.required' => __('errors.social_security_number.required'),

                'street_address.required' => __('errors.street_address.required'),
                'country_address_id.required' => __('errors.country_address_id.required'),
                'country_address_id.exists' => __('errors.country_address_id.exists'),
                'city_address.required' => __('errors.city_address.required'),
                'state_address.required' => __('errors.state_address.required'),
                'zip_code_address.required' => __('errors.zip_code_address.required'),

                'occupation.required' => __('errors.occupation.required'),
                'customer_subtype.required' => __('errors.customer_subtype.required'),
                'annual_income.required' => __('errors.annual_income.required'),
                'description_position.required' => __('errors.description_position.required'),
                'political_exposure_disclosure.required' => __('errors.political_exposure_disclosure.required'),

                'account_purposes.required' => __('errors.account_purposes.required'),

                'source_wealths.required' => __('errors.source_wealths.required'),

                'source_fund.required' => __('errors.source_fund.required'),

                'incoming_average_account.required' => __('errors.incoming_average_account.required'),
                'incoming_quantity.required' => __('errors.incoming_quantity.required'),
                'outgoing_average_account.required' => __('errors.outgoing_average_account.required'),
                'outgoing_quantity.required' => __('errors.outgoing_quantity.required'),

                'country_receive_one.required'=> __('errors.country_receive_one.required'),
                'country_receive_two.required'=> __('errors.country_receive_two.required'),
                'country_receive_three.required'=> __('errors.country_receive_three.required'),
                'country_send_one.required'=> __('errors.country_send_one.required'),
                'country_send_two.required'=> __('errors.country_send_two.required'),
                'country_send_three.required'=> __('errors.country_send_three.required'),

            ];


            //validar si hay archivos en los input files
            $account=Account::find($this->current_id_account);
            $person=Person::where("account_id",$account->id)->first();

            if($this->us_person=="yes"){
                    
                $document_exist=Identification_Document::where("person_id",$person->id)->where("priority","primary")->first();
                
                if(!$document_exist){
                    $rules['file_drive_license'] = 'required';
                    $messages['file_drive_license.required'] = 'Drive License is required';
                }

            }
            if($this->us_person=="no"){

                $document_exist_primary=Identification_Document::where("person_id",$person->id)->where("priority","primary")->first();
                if(!$document_exist_primary){
                    $rules['primary_id_type'] = 'required';
                    $rules['file_primary_id'] = 'required';
                    $messages['primary_id_type.required'] = 'Primary ID Type is required';
                    $messages['file_primary_id.required'] = 'Primary ID File is required';
                }

                $document_exist_secondary=Identification_Document::where("person_id",$person->id)->where("priority","secondary")->first();
                if(!$document_exist_secondary){
                    $rules['secondary_id_type'] = 'required';
                    $rules['file_secondary_id'] = 'required';
                    $messages['secondary_id_type.required'] = 'Secondary ID Type is required';
                    $messages['file_secondary_id.required'] = 'Secondary ID File is required';
                }

            }

            $exist_address=Address::where("person_id",$person->id)->first();

            if(is_null($exist_address)){
                $rules['proof_address']='required';
                $messages['proof_address.required'] = 'Proof Address is required';
            }
            else{
                if(is_null($exist_address->address_url_file)){
                    $rules['proof_address']='required';
                    $messages['proof_address.required'] = 'Proof Address is required';
                }
            }




            //primero se va a validar los campos se fueron llenados
            //\App::setLocale($this->translation);
            //$this->validate();
            $this->validate($rules,$messages);
        }


        $this->confirm_person(false);
        $this->save_personal_details(false);
        $this->save_home_address(false);
        $this->save_info_occupation(false);
        $this->save_account_purpose(false);
        $this->save_source_wealth(false);
        $this->save_source_funds(false);
        $this->save_monthly_expected_activities(false);
        $this->save_expected_receive_send_money(false);
        

        $random_code=\GenerateStrings::random_characters();
        //completar cuenta
        $current_account=Account::find($this->current_id_account);
        $current_account->step='summary';
        $current_account->random_code=$random_code;
        $current_account->status=($bool)?'completed':'incomplete';
        $current_account->status_description=($bool)?'account completed!':'account incomplete';
        $current_account->save();

        $person=Person::where("account_id",$this->current_id_account)->first();
        $this->email_address=$person->email;

        if($bool){
            $title="Congratulations tou Have Completed your Account!";
            $body='You have completed with all required data, please wait for another email to confirm success!';
        }
        else{
            $title="you have save Summary Data!";
            $body='You have save Summary data, please continue to save all data to confirm the process!';
        }

        $this->create_email($title, $body, null, $random_code, $this->email_address);

        $this->block_country=false;
        $this->paso_paso=false;
        $this->start=false;
        $this->select_account=false;
        $this->client_form=false;
        $this->send_email=false;
        $this->verify_email=false;
        $this->check_agreement=false;
        $this->person_confirm=false;
        $this->personal_details=false;
        $this->home_address=false;
        $this->info_occupation=false;
        $this->account_purpose=false;
        $this->source_wealth=false;
        $this->source_funds=false;
        $this->monthly_expected_activity=false;
        $this->expected_receive_send_money=false;
        $this->summary=($bool)?false:true;
        $this->final_process=($bool)?true:false;
    }

    public function download_file($file_id, $step=null){

        if($step=="address"){
            $file=Address::find($file_id);
            return response()->download($file->address_url_file);
        }
        else{
            $file=Identification_Document::find($file_id);
            return response()->download($file->document_url);
        }
        
    }

    public function delete_file($file_id, $step=null){

        if($step=="address"){
            $file=Address::find($file_id);
            if($file){
                if(File::exists($file->address_url_file)){
                    File::Delete($file->address_url_file);
                    $file->delete();
                }
            }
        }
        else{
            $file=Identification_Document::find($file_id);
            if($file){
                if(File::exists($file->document_url)){
                    File::Delete($file->document_url);
                    $file->delete();
                }
            }
        }
    }





    public function option_signer(){

        switch($this->option_signer){
            case "yes":
                $this->verify_aditional_signer();
                break;
            case "no":
                $this->buttons("summary");
                break;
        }
    }

    public function verify_aditional_signer(){
        //dd($this->current_id_person);
        $this->list_aditional_signer=Person::where("signer_owner_id",$this->current_id_person)->get(); 
        //dd($this->list_aditional_signer);
        //$this->number_another_signer=count($this->list_aditional_signer); 
        //dd($this->number_another_signer);
        $this->buttons("choose_signer");
        /*
        if($this->list_aditional_signer){

            $this->buttons("choose_signer");
        }
        else{
            $this->buttons("another_signer");
        }*/
    }

    public function select_signer(){
        //dd($this->selected_exist_signer);
        switch($this->selected_exist_signer){
            case "0": 
                $this->current_id_another_person=null;
                $this->number_another_signer=strtoupper(Str::uuid()->toString());
                $this->buttons("another_signer");
                break;
            case "-1":
                $this->buttons("choose_signer");
                break;
            default:
                $this->data_additional_signer($this->selected_exist_signer);
                $this->buttons("another_signer");   
        }
    }

    public function data_additional_signer($id_signer_owner){

        //dd($id_signer_owner);

        $another_persons=Person::where("id",$id_signer_owner)->first();
        if($another_persons){

            $this->number_another_signer=$another_persons->index_signer; //dd($this->number_another_signer);
            $this->current_id_another_person=$another_persons->id;

            $this->another_first_name[$this->number_another_signer]=$another_persons->first_name;
            $this->another_last_name[$this->number_another_signer]=$another_persons->last_name;
            $this->another_email_address[$this->number_another_signer]=$another_persons->email;
            $this->another_phone_number[$this->number_another_signer]=$another_persons->phone_number;
            $this->another_phone_code_id[$this->number_another_signer]=$another_persons->phone_code_id;

            $this->another_us_person[$this->number_another_signer]=$another_persons->us_person;
            $this->another_date_birth[$this->number_another_signer]=$another_persons->date_birth;
            $this->another_country_birth_id[$this->number_another_signer]=$another_persons->country_birth_id;
            $this->another_social_security_number[$this->number_another_signer]=$another_persons->social_security_number;

            $another_primary_id=Identification_Document::where("person_id",$another_persons->id)
                                                        ->where("priority","primary")->first();

            if($another_primary_id)
                $this->another_primary_id_type[$this->number_another_signer]=$another_primary_id->type_document;

            $another_secondary_id=Identification_Document::where("person_id",$another_persons->id)
                                            ->where("priority","secondary")->first();

            if($another_secondary_id)
                $this->another_secondary_id_type[$this->number_another_signer]=$another_secondary_id->type_document;


            $another_address=Address::where("person_id",$another_persons->id)->first(); 
            //dd($another_address);

            if($another_address){
                $this->another_street_address[$this->number_another_signer]=$another_address->street_address;
                $this->another_country_address_id[$this->number_another_signer]=$another_address->country_address_id;
                $this->another_city_address[$this->number_another_signer]=$another_address->city_address;
                $this->another_state_address[$this->number_another_signer]=$another_address->state_address;
                $this->another_zip_code_address[$this->number_another_signer]=$another_address->zip_code_address;
            }

            $this->another_occupation[$this->number_another_signer]=$another_persons->occupation_id;
            $this->another_customer_subtype[$this->number_another_signer]=$another_persons->customer_subtype_id;
            $this->another_annual_income[$this->number_another_signer]=$another_persons->annual_income;
            $this->another_employer[$this->number_another_signer]=$another_persons->employer;
            $this->another_description_position[$this->number_another_signer]=$another_persons->description_position;
            $this->another_political_exposure_disclosure[$this->number_another_signer]=$another_persons->political_exposure_disclosure;
            
        }
    }

    public function save_another_signer($send=true){

        try{

            DB::beginTransaction();

            $random_code=\GenerateStrings::random_characters();

            $account=Account::find($this->current_id_account);
            $account->random_code=$random_code;
            $account->step='another_signer';
            $account->save();

            $person=Person::where("account_id",$this->current_id_account)->first();
            $this->email_address=$person->email;

            if(!$this->current_id_another_person){

                $another_person=new Person;
                $another_person->account_id=$this->current_id_account;
                $another_person->first_name=$this->another_first_name[$this->number_another_signer];
                $another_person->last_name=$this->another_last_name[$this->number_another_signer];
                $another_person->email=$this->another_email_address[$this->number_another_signer];
                $another_person->phone_code_id=$this->another_phone_code_id[$this->number_another_signer];
                $another_person->phone_number=$this->another_phone_number[$this->number_another_signer];
                $another_person->signer_owner_id=$this->current_id_person;
                $another_person->index_signer=$this->number_another_signer;
                $another_person->save();

                $this->current_id_another_person=$another_person->id;

                $account=Account::find($this->current_id_account);
                $account->selected_another_signer=$another_person->id;
                $account->save();
            }
            else{
                $another_person=Person::find($this->current_id_another_person);
                $another_person->account_id=$this->current_id_account;
                $another_person->first_name=$this->another_first_name[$this->number_another_signer];
                $another_person->last_name=$this->another_last_name[$this->number_another_signer];
                $another_person->email=$this->another_email_address[$this->number_another_signer];
                $another_person->phone_code_id=$this->another_phone_code_id[$this->number_another_signer];
                $another_person->phone_number=$this->another_phone_number[$this->number_another_signer];
                $another_person->signer_owner_id=$this->current_id_person;
                $another_person->save();

                $account=Account::find($this->current_id_account);
                $account->selected_another_signer=$another_person->id;
                $account->save();
            }

            if($send){
                $title="Information about Personal Details of the Additional Signer";
                $body='Your Personal Details of the Additional Signer data has been stored';
                
                $this->create_email($title, $body, null, $random_code, $this->email_address);
            }

            $this->buttons("another_person_confirm");

            DB::commit();
        }
        catch(Exception $e){

            DB::rollBack();
            dd($e->getMessage());

        }

    }

    public function save_another_person_confirm($send=true){
        try{

            DB::beginTransaction();

            $random_code=\GenerateStrings::random_characters();

            $account=Account::find($this->current_id_account);
            $account->random_code=$random_code;
            $account->step='another_person_confirm';
            $account->selected_another_signer=$this->current_id_another_person;
            $account->save();

            $person=Person::where("account_id",$this->current_id_account)->first();
            $this->email_address=$person->email;

            $another_person=Person::find($this->current_id_another_person);
            $another_person->us_person=$this->another_us_person[$this->number_another_signer];
            $another_person->save();

            if($send){
                $title="Information about The Additional Signer is a United State Person?";
                $body='Your The Additional Signer is a United State Person data has been stored';
                
                $this->create_email($title, $body, null, $random_code, $this->email_address);
            }

            $this->buttons("another_personal_details");

            DB::commit();
        }
        catch(Exception $e){

            DB::rollBack();
            dd($e->getMessage());

        }

    }

    public function save_another_personal_details($send=true){

        //dd($this->another_file_drive_license[$this->number_another_signer]);

        try{

            DB::beginTransaction();

            $random_code=\GenerateStrings::random_characters();

            $account=Account::find($this->current_id_account);
            $account->random_code=$random_code;
            $account->step='another_personal_details';
            $account->selected_another_signer=$this->current_id_another_person;
            $account->save();

            $person=Person::where("account_id",$this->current_id_account)->first();
            $this->email_address=$person->email;


            $another_person=Person::find($this->current_id_another_person);
            $another_person->us_person=$this->another_us_person[$this->number_another_signer];
            $another_person->date_birth=$this->another_date_birth[$this->number_another_signer];
            $another_person->country_birth_id=$this->another_country_birth_id[$this->number_another_signer];
            $another_person->social_security_number=$this->another_social_security_number[$this->number_another_signer];
            $another_person->save();

            $this->current_id_another_person=$another_person->id;

            if($this->another_us_person[$this->number_another_signer]=="yes"){
                
                if(isset($this->another_file_drive_license[$this->number_another_signer]) && $this->another_file_drive_license[$this->number_another_signer]){

                    $document_exist=Identification_Document::where("person_id",$another_person->id)
                                    ->where("priority","primary")->first();
                    if($document_exist){
                        //primero elimina el primer archivo
                        if(File::exists($document_exist->document_url)){

                            Identification_Document::where("person_id",$another_person->id)
                                    ->where("priority","primary")->delete();
                            File::Delete($document_exist->document_url);
                        }
                    }

                    $document=new Identification_Document;
                    $document->priority="primary";
                    $document->type_document="drive_license";
                    $document->file_name=$this->another_file_drive_license[$this->number_another_signer]->getClientOriginalName();
                    $document->document_url=storage_path()."\app\\".$this->another_file_drive_license[$this->number_another_signer]->store('drive_license');
                    $document->person_id=$another_person->id;
                    $document->save();
                }
            }
            else{
                
                if($this->another_primary_id_type[$this->number_another_signer]){

                    if(isset($this->another_file_primary_id[$this->number_another_signer]) && $this->another_file_primary_id[$this->number_another_signer]){
                        $document_exist_primary=Identification_Document::where("person_id",$another_person->id)
                                            ->where("priority","primary")->first();
                        if($document_exist_primary){
                            //primero elimina el primer archivo
                            if(File::exists($document_exist_primary->document_url)){

                                Identification_Document::where("person_id",$another_person->id)
                                        ->where("priority","primary")->delete();
                                File::Delete($document_exist_primary->document_url);
                            }
                        }

                        $document_primary=new Identification_Document;
                        $document_primary->priority="primary";
                        $document_primary->type_document=$this->another_primary_id_type[$this->number_another_signer];
                        $document_primary->file_name=$this->another_file_primary_id[$this->number_another_signer]->getClientOriginalName();
                        $document_primary->document_url=storage_path()."\app\\".$this->another_file_primary_id[$this->number_another_signer]->store('primary_id');
                        $document_primary->person_id=$another_person->id;
                        $document_primary->save();
                    }
                }

                if($this->another_secondary_id_type[$this->number_another_signer]){

                    if(isset($this->another_file_secondary_id[$this->number_another_signer]) && $this->another_file_secondary_id[$this->number_another_signer]){
                        $document_exist_secondary=Identification_Document::where("person_id",$another_person->id)
                                                    ->where("priority","secondary")->first();
                        if($document_exist_secondary){
                            //primero elimina el primer archivo
                            if(File::exists($document_exist_secondary->document_url)){

                                Identification_Document::where("person_id",$another_person->id)
                                        ->where("priority","secondary")->delete();
                                File::Delete($document_exist_secondary->document_url);
                            }
                        }

                        $document_secondary=new Identification_Document;
                        $document_secondary->priority="secondary";
                        $document_secondary->type_document=$this->another_secondary_id_type[$this->number_another_signer];
                        $document_secondary->file_name=$this->another_file_secondary_id[$this->number_another_signer]->getClientOriginalName();
                        $document_secondary->document_url=storage_path()."\app\\".$this->another_file_secondary_id[$this->number_another_signer]->store('secondary_id');
                        $document_secondary->person_id=$another_person->id;
                        $document_secondary->save();
                    }
                }
            }

            if($send){
                $title="Information about Another Personal Details (Additional Signer)";
                $body='Your Another Personal Details (Additional Signer) data has been stored';
                
                $this->create_email($title, $body, null, $random_code, $this->email_address);
            }
            
            $this->buttons("another_home_address");
           
            DB::commit();
        }
        catch(Exception $e){

            DB::rollBack();
            dd($e->getMessage());

        }
        
        
    }

    public function save_another_home_address($send=true){

        //dd($this);

        try{

            DB::beginTransaction();

            $random_code=\GenerateStrings::random_characters();

            $account=Account::find($this->current_id_account);
            $account->random_code=$random_code;
            $account->step='another_home_address';
            $account->selected_another_signer=$this->current_id_another_person;
            $account->save();

            $person=Person::where("account_id",$this->current_id_account)->first();
            $this->email_address=$person->email;

            $another_person=Person::find($this->current_id_another_person);

            $exist_address=Address::where("person_id",$another_person->id)->first();

            if(is_null($exist_address)){
                //dd($this->another_proof_address);
                $address=new Address;
                $address->person_id=$another_person->id;
                $address->priority="home";
                $address->street_address=$this->another_street_address[$this->number_another_signer];
                $address->country_address_id=$this->another_country_address_id[$this->number_another_signer];
                $address->city_address=$this->another_city_address[$this->number_another_signer];
                $address->state_address=$this->another_state_address[$this->number_another_signer];
                $address->zip_code_address=$this->another_zip_code_address[$this->number_another_signer];

                if(isset($this->another_proof_address[$this->number_another_signer])){
                    $address->file_name=$this->another_proof_address[$this->number_another_signer]->getClientOriginalName();
                    $address->address_url_file=storage_path()."\app\\".$this->another_proof_address[$this->number_another_signer]->store('address');
                }

                $address->save();
            }
            else{

                $address=Address::where("person_id",$another_person->id)->first();
                $address->person_id=$another_person->id;
                $address->priority="home";
                $address->street_address=$this->another_street_address[$this->number_another_signer];
                $address->country_address_id=$this->another_country_address_id[$this->number_another_signer];
                $address->city_address=$this->another_city_address[$this->number_another_signer];
                $address->state_address=$this->another_state_address[$this->number_another_signer];
                $address->zip_code_address=$this->another_zip_code_address[$this->number_another_signer];

                if($this->another_proof_address[$this->number_another_signer]){

                    //primero elimina el primer archivo
                    if(File::exists($address->address_url_file)){

                        File::Delete($address->address_url_file);
                    }

                    $address->file_name=$this->another_proof_address[$this->number_another_signer]->getClientOriginalName();
                    $address->address_url_file=storage_path()."\app\\".$this->another_proof_address[$this->number_another_signer]->store('address');
                }

                $address->save();

            }

            if($send){
                $title="Information about Another Home Address (Additional Signer)";
                $body='Your Another Home Address (Additional Signer) data has been stored';
                
                $this->create_email($title, $body, null, $random_code, $this->email_address);
            }

            $this->buttons("another_info_occupation");
            
            DB::commit();
        }
        catch(Exception $e){

            DB::rollBack();
            dd($e->getMessage());

        }
    }

    public function save_another_info_occupation($send=true){

        try{

            DB::beginTransaction();

            $random_code=\GenerateStrings::random_characters();

            $account=Account::find($this->current_id_account);
            $account->random_code=$random_code;
            $account->step='another_info_occupation';
            $account->selected_another_signer=$this->current_id_another_person;
            $account->save();

            $person=Person::where("account_id",$this->current_id_account)->first();
            $this->email_address=$person->email;

            $another_person=Person::find($this->current_id_another_person);

            if(isset($this->another_employer[$this->number_another_signer]))
                $another_person->employer=$this->another_employer[$this->number_another_signer];
                
            $another_person->annual_income=$this->another_annual_income[$this->number_another_signer];
            $another_person->occupation_id=$this->another_occupation[$this->number_another_signer];
            $another_person->customer_subtype_id=$this->another_customer_subtype[$this->number_another_signer];
            $another_person->description_position=$this->another_description_position[$this->number_another_signer];
            $another_person->political_exposure_disclosure=$this->another_political_exposure_disclosure[$this->number_another_signer];
            $another_person->save();


            if($send){
                $title="Information about Another Tell Us What He/She Do (Additional Signer)";
                $body='Your Another Tell Us What He/She Do (Additional Signer) data has been stored';
                
                $this->create_email($title, $body, null, $random_code, $this->email_address);
            }
            
            DB::commit();
            
        }
        catch(Exception $e){

            DB::rollBack();
            dd($e->getMessage());

        }
    }



    public function change_status_accordeon($stat){

        foreach($this->summary_accordeon as $key => $value){

            if($key!=$stat)
                $this->summary_accordeon[$key]=false;
        }
    
        $this->summary_accordeon[$stat]=($this->summary_accordeon[$stat])? false : true;
        
    }

    public function summary_active($opcion){

        $this->summary_one=true;
        $this->summary_two=false;

        switch($opcion){
            case 1: $this->summary_one=true; break;
            case 2: $this->buttons('signer'); break;
        }
    }

}

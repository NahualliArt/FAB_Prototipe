@extends('layouts.master') 

@section('section')

<!--HERO IMAGE-->
<div class="container ml-auto text-center">
    <div class="row">
    <div class="backImg-small col-12">
      <h1>{{ __('general.be_part') }}</h1>
      <p>{{ __('general.be_part2') }}</p>
    </div>
    </div>
</div>

<!--Subtitle-->
<div class="container subtitle w-75 shadow align-self-center">
    <div class="text-center py-2">
      <!--THIS ONE GOES TO THE ALL BUSINESS SEARCH PAGE-->
      <h5>{{ __('general.search_for') }} <a href="{{ route('specialBusiness1', app()->getLocale()) }}" class="subtitle-link">{{ __('general.best_business') }}</a> {{ __('general.for_you') }}</h5>
    </div>
</div>

<!--PRESENTATION-->
<div class="container pt-5 d-flex justify-content-center">
    <div class="row align-items-center">
        <div class="col-lg-4 col-sm-12 text-center movilCircle">
            <img src="/img/ListPic.png" style="width: 80%;">
        </div> 
        <div class="col-lg-8 col-sm-12 text-center text-lg-left">
              <div class="container-fluid">
                  <div class="AlexName">
                      <h2>{{ __('general.our_services_title') }}</h2>
                  </div>
                  <div class="quoteText text-sm-justify">
                      <p>{{ __('general.our_services_text') }}</p>
                  </div>
              </div>
        </div>
    </div>
</div>

<!--INFO TEXT-->
<div class="container text-center infoTextSection">
    <div class="row">
        <div class="col-lg-12 col-sm-12 align-self-center">
            <h3 id="h3">
                {{ __('general.your_business_would') }}
            </h3>
        </div>
    </div>
</div>

<!--LISTING SECTION-->

    <!--TITLE
        Basic Listing Package
    -->
    <div class="container titleListing mt-5 px-4">
        <div class="row">
            <div class="col-lg-1 col-sm-12 text-center">
                <img src="/img/acceptIcon.png" style="width: 64px; height: auto;">
            </div>
            <div class="col-lg-7">
                <hr>
            </div>
            <div class="col-lg-4 col-sm-12 text-center text-lg-right">
                <h3>{{ __('general.basic_package') }}</h3>
                <p>{{ __('general.we_will_build_you') }}</p>
            </div>
        </div>
    </div>
    <!--Content 
        Basic Listing Package
    -->
    <div class="container contentListing mt-5 mb-5 px-2 d-flex">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <ul class="text-center text-lg-left" id="ul">
                    <li>
                        <p>{{ __('general.one_time_fee') }}</p>
                    </li>
                    <li>
                        <p>{{ __('general.custom_1_page') }}</p>
                    </li>
                    <li>
                        <p>{{ __('general.listing_and_basic') }}</p>
                    </li>
                    <li>
                        <p>{{ __('general.1_to_3_categories') }}</p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-sm-12 text-lg-right text-center align-self-end">
                <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" id="moreInfo">{{ __('general.more_info') }}</button>
            </div>
        </div>
    </div>
    <!--
        More Info Basic Listing Package
    -->
    <div class="container">
        <div class="row">
            <div id="windowOver" class="windowOver" alt="infoBasicListing">
                <div class="p-5 text-center contentWindow">
                    <span class="close">&times;</span>
                    <br>
                    <h3 id="h3">{{ __('general.basic_package') }}</h3>
                    <hr>
                    <p>
                        {{ __('general.most_businesses') }}
                    </p>
                    <p>
                        {{ __('general.description') }}
                       
                    </p>
                    <p>
                        {{ __('general.if_you_cant') }}
                    </p>
                    <hr>
                    <br>
                    <a href="{{ route('listBusiness1', app()->getLocale()) }}" class="buttonList">{{ __('general.i_want_it') }}</a>
                </div>
            </div>
        </div>
    </div>

<!--TITLE
        Custom Site Construction and Maintenance
    -->
    <div class="container titleListing mt-5 px-4">
        <div class="row">
            <div class="col-lg-1 col-sm-12 text-center">
                <img src="/img/acceptIcon.png" style="width: 64px; height: auto;">
            </div>
            <div class="col-lg-5">
                <hr>
            </div>
            <div class="col-lg-6 col-sm-12 text-center text-lg-right">
                <h3>{{ __('general.custom_site') }}</h3>
                <p>{{ __('general.we_will_build_you') }}</p>
            </div>
        </div>
    </div>
    <!--Content 
        Custom Site Construction and Maintenance
    -->
    <div class="container contentListing mt-5 mb-5 px-4 d-flex">
        <div class="row ">
            <div class="col-lg-8 col-sm-12 text-center text-lg-left">
                <ul id="ul">
                    <li>
                        <p>{{ __('general.custom_1_page_package2') }}</p>
                    </li>
                    <li>
                        <p>{{ __('general.more_robust_site') }}</p>
                    </li>
                    <li>
                        <p>{{ __('general.comes_with') }}</p>
                    </li>
                    <li>
                        <p>{{ __('general.perfect_for') }}</p>
                    </li>
                    <li>
                        <p>{{ __('general.monthly_maintenance') }}</p>
                    </li>
                    <li>
                        <p>{{ __('general.1_to_3_categories') }}</p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-sm-12 text-center align-self-end">
                <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" id="moreInfo-CustomSite">{{ __('general.more_info') }}</button>
            </div>
        </div>
    </div>
     <!--
        More Info Custom Site Construction and Maintenance
    -->
    <div class="container">
        <div class="row">
            <div id="windowOver-CustomSite" class="windowOver" alt="Custom Site Construction and Maintenance">
                <div class="p-5 text-center contentWindow">
                    <span class="close-CustomSite">&times;</span>
                    <br>
                    <h3 id="h3">{{ __('general.custom_site') }}</h3>
                    <hr>
                    <p>
                        {{ __('general.in_addition_to') }}
                    </p>
                    <p>
                        {{ __('general.if_you_are_a') }}
                    </p>
                    <p>
                        {{ __('general.we_will_custom_build') }}
                        
                    </p>
                    <hr>
                    <br>
                    <a href="{{ route('listBusiness1', app()->getLocale()) }}" class="buttonList">{{ __('general.i_want_it') }}I want it</a>
                </div>
            </div>
        </div>
    </div>

<!--INFO TEXT-->
{{-- <div class="container text-center infoTextSection">
    <div class="row">
        <div class="col-lg-12 col-sm-12 align-self-center">
            <h2>
                {{ __('general.featured_fee') }}
            </h2>
            <p>
                {{ __('general.500_pesos') }}
            </p>
        </div>
    </div>
</div> --}}

<!--ACTION IMAGE-->
<div class="container text-center">
    <div class="row callActionSectionDark" style="background-image: url('/img/heroImageDark.png');">
        <div class="col-lg-12 col-sm-12 align-self-center">
            <h1>{{ __('general.sign_up_today') }}</h1>
            <h4>{{ __('general.your_business_name_msg') }}</h4>
            <br>
            <div class="row">
                <div class="col-lg text-center">
                    <a href="tel:+523313478461" class="buttonList">{{ __('general.call_us') }}</a>  
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg text-center">
                    <p>{{ __('general.or') }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg text-center">
                    <a href="#contact-form" class="buttonList">{{ __('general.sign_up_today') }}</a>
                </div>
            </div>
            <br>
            <hr>
            <div class="whatsapp">
                <h3>{{ __('general.any_questions') }}</h3>
                <p>{{ __('general.feel_free_to_call') }}</p>
                <a href="https://api.whatsapp.com/send?phone=523313478461&text=Hello!%20I%20want%20more%20info%20about%20Listing%20my%20Business%20%0A%2F%2F%2F%0AHola!%20Me%20gustar%C3%ADa%20m%C3%A1s%20informaci%C3%B3n%20sobre%20inscribir%20mi%20negocio"><h3 id="h3">(+52) 33 1347 8461</h3></a>
            </div>
            <div>&nbsp;</div>
        </div>
    </div>
</div>

<!--CONTACT FULL FORM-->
<div class="container mt-5" id="contact-form">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-center">{{ __('general.contact_us') }}</h3>
            <form action="{{ route('contact.request', app()->getLocale()) }}">
                <div class="row">
                   <div class="col-sm-12 col-lg-12 mt-3">
                    <input type="name" id="inputName" name="full_name" class="form-control" placeholder="{{ __('general.full_name') }}:" required autofocus>
                   </div>
                </div>
                <div class="form-row mt-3">
                    <div class="form-group col-md-6 col-lg-6 col-sm-12">                    
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="{{ __('general.email') }}:">
                    </div>
                    <div class="form-group col-md-6 col-lg-6 col-sm-12">                    
                        <input type="phone" name="phone" class="form-control" id="inputPhone" placeholder="{{ __('general.phone') }}:">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-12 mt-3">
                        <select id="inputService" name="package" class="form-control" required="true">
                            <option value="" selected>{{ __('general.what_service') }}</option>
                            <option value="Basic Listing Package">{{ __('general.basic_package') }}</option>
                            <option value="Custom Site Construction and Maintenance">{{ __('general.custom_site') }}</option>
                        </select>
                    </div>
                </div>
                <div class="form-row mt-3">
                    <div class="form-group col-md-6 col-lg-6 col-sm-12 mt-3">
                        <div class="form-check">
                            <p class="p-2">{{ __('general.what_product') }}</p>
                            <hr>
                            <div class="form-check p-2">
                                <input class="form-check-input" type="radio" name="sp_type" id="gridRadios2" value="Digital Services or Products">
                                <label class="form-check-label" for="gridRadios2">
                                {{ __('general.digital_services_products') }}
                                </label>
                            </div>
                            <div class="form-check p-2">
                                <input class="form-check-input" type="radio" name="sp_type" id="gridRadios2" value="Psycical Services or Products">
                                <label class="form-check-label" for="gridRadios2">
                                {{ __('general.physical_services_products') }}
                                </label>
                            </div>
                            <div class="form-check p-2">
                                <input class="form-check-input" type="radio" name="sp_type" id="gridRadios2" value="Services Consulting">
                                <label class="form-check-label" for="gridRadios2">
                                {{ __('general.services_consulting') }}
                                </label>
                            </div>
                            <div class="form-check p-2">
                                <input class="form-check-input" type="radio" name="sp_type" id="gridRadios2other" value="other">
                                <label class="form-check-label" for="gridRadios2">
                                {{ __('general.other') }}
                                </label>
                                                   
                                    <input style="display:none" name="other" type="text" class="form-control" id="inputServiceOther" placeholder="{{ __('general.what_is_it') }}?">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-1 col-sm-12">
                        <div class="verticalHR d-none d-lg-block d-xl-block">
                            <hr>
                        </div>                        
                    </div>
                    <div class="form-group col-md-6 col-lg-5 col-sm-12 mt-3">
                        <label  for="inputMessage">{{ __('general.message') }}:</label>
                        <textarea name="msg" type="msg" id="inputMessage" class="form-control" placeholder="{{ __('general.message') }}" required rows="7"></textarea>
                        <!--
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
                      -->
                      <!--<a href="#">&nbsp; Send &nbsp;</a>-->
                    
                    <div class="text-lg-right text-center">
                        <button type="submit" class="btn btn-primary btn-sm p-2 m-2" style="width: 200px;">{{ __('general.send') }}</button>
                    </div>
    
                    </div>
                </div>  
                
                  
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){ 
        $("input[id='gridRadios2other']").click(function() {
        
            $('#inputServiceOther').css('display', 'block');
            $('#inputServiceOther').attr("required", "true");
        }); 
});
</script>


@endsection
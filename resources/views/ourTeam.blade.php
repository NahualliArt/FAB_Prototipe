@extends('layouts.master') 

@section('section')

<!--HERO IMAGE-->
<div class="container ml-auto text-center">
  <div class="row">
    <div class="col-12 backImg-small">
      <h1>{{ __('general.meet_the_team') }}</h1>
      <p>{{ __('general.our_people') }}</p>
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

<!--ALEX PRESENTATION-->
<div class="container pt-5 d-flex justify-content-center">
  <div class="row py-3 align-items-center">
      <div class="col-lg-4 col-sm-12 text-center">
          <img src="/img/AlexPic.png" style="width: 80%;">
      </div> 
      <div class="col-lg-8 col-sm-12 text-center text-lg-left">
            <div class="container-fluid">
                <div class="AlexName">
                    <h2>Alexander Searles</h2>
                    <p>{{ __('general.president_of') }}</p>
                </div>
                <div class="quoteText">
                    <p>{{ __('general.first_text') }}</p>
                </div>
                <div class="quoteImg">
                    <img class="quoteMarks" src="/img/quoteMarks.png">
                </div>
            </div>
      </div>
  </div>
</div>

<!--LINE SPACE-->
<div class="container">
  <div class="row">
      <hr>
  </div>
</div>

<!--TEXT-->
<div class="container p-5 text-justify">
  <div class="row px-lg-4">
        <p>
            {{ __('general.second_text') }}
        </p>
        <br>
        <p>
            {{ __('general.third_text') }}
        </p>
        <br>
        <p>
            {{ __('general.fourth_text') }}
        </p>
        <br>
        <p>
          {{ __('general.fifth_text') }}
        </p>
        <br>
  </div>
</div>

<!--LINE SPACE-->
<div class="container">
  <div class="row">
      <hr>
  </div>
</div>

  <!--ALDO AND ABIGAIL PRESENTATION-->
  <div class="container pt-5 px-sm-5 d-flex justify-content-center text-center team">
    <div class="row align-items-center">
      <div class="container infoTextSectionLighta">
        <div class="row">
          <div class="col-lg-12 col-sm-12 align-self-center teamMov">
              <h2>{{ __('general.meet_the_rest') }}</h2>
              <p style="color:#14253c">{{ __('general.the_best_people') }}</p>
          </div>
      </div>
      </div>
        <!--ALDO-->
        <div class="col-lg-6 col-sm-12">
          <div class="col-12">
            <div class="col-12 text-center">
              <img src="/img/aldo.png" style="width: 40%;">
            </div> 
            <div class="col-12 text-center">
                <div class="container-fluid">
                    <div class="AlexName">
                        <h2>Aldo Romero</h2>
                        <p style="font-weight: bold; color: #477B9D;">{{ __('general.backend_dev') }}</p>
                    </div>
                    <div class="quoteText">
                        <p>{{ __('general.description_aldo') }}</p>
                    </div>
                    <!--
                    <div class="quoteImg">
                        <img class="quoteMarks" src="img/quoteMarks.png">
                    </div>
                    -->
                </div>
            </div>
          </div>
        </div>
        <!--ESPACIO EN MOVILES-->
        <div class="movilSpace">&nbsp;</div>
        <!--ABIGAIL-->
        <div class="col-lg-6 col-sm-12">
          <div class="col-12">
            <div class="col-12 text-center">
              <img src="/img/abi.png" style="width: 40%;">
            </div> 
            <div class="col-12 text-center">
                <div class="container-fluid">
                    <div class="AlexName">
                        <h2>Abigail Pérez</h2>
                        <p style="font-weight: bold; color: #477B9D;">{{ __('general.front_designer') }}</p>
                    </div>
                    <div class="quoteText">
                        <p>{{ __('general.description_abi') }}</p>
                    </div>
                    <!--
                    <div class="quoteImg">
                        <img class="quoteMarks" src="img/quoteMarks.png">
                    </div>
                    -->
                </div>
            </div>
          </div>
        </div>
        
    </div>
  </div>

<!--ACTION IMAGE-->
<div class="container ml-auto text-center">
  <div class="callActionSection" style="background-image: url('/img/ourTeam-LogoSection.png');">
    <img src="/img/logo_white.png" style="width: 100%; height: auto;" class="logoMovil">
  </div>
</div>

<!--LIST YOUR BUSINESS-->
<div class="container text-center">
  <div class="callActionSection">
    <h1>{{ __('general.add_your_business') }}</h1>
    <h4>{{ __('general.your_business_name_msg') }}</h4>
    <br>
    <a href="{{ route('listBusiness1', app()->getLocale()) }}" class="buttonList">{{ __('general.learn_how') }}</a>
  </div>
</div>

@endsection

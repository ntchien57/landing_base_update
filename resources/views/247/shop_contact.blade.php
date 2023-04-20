@extends($theme.'.shop_layout')
@section('slide')
@endsection


@push('style')
<style>
.contact-page .links-title, .collapsed-block strong{
    font-size: 22px;
    font-weight: 700;
    color: #e13475;
}

.contact-page .login,.contact-page .register{
    padding: 0 1rem;
}

.contact-page  .has-error .help-block{
    color: red;
    font-style: italic;
}

.contact-page .form-group{
    
    padding-right: 5px;
}

.contact-page input{
    
    margin-bottom: 2px;
    margin-right: 3px;
}

.contact-form .row, .contact-form .row .col-sm-12{
    margin-bottom: 0.5rem;
}

</style>
@endpush

@section('content')
  <!-- Main Container -->
  <div class="main-container col1-layout contact-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
  <div class="page_content">
<form method="post" action="{{ url('lien-he.html') }}" class="contact-form">
{{ csrf_field() }}
<div id="contactFormWrapper" style="margin: 30px;">
<div class="row">
        <div class="col-md-12 collapsed-block">
            {!! $page->content !!}
        </div>
        <div class="col-md-5 col-xs-12 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">{{ $configs['site_title'] }}</h3>
            <div class="tabBlock" id="TabBlock-5">
              <div class="footer-description"><b>{{__("guest.address")}}:</b> {{ $configs['site_address'] }}</div>
              <div class="footer-description"> <b>{{__("guest.phone")}}:</b> {{ $configs['site_phone_long'] }}<br>
                <b>Email:</b> {{ $configs['site_email'] }}<br>
                 </div>
            </div>
          </div>
        </div>
        <div class="col-md-7 col-xs-12 contact-form">
            <div class="row">
                <div class="col-sm-4 form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <label>{{__("guest.name")}}:</label>
                    <input type="text"  class="form-control {{ ($errors->has('name'))?"input-error":"" }}"  name="name" placeholder="{{__('guest.contact_form_name_placeholder')}}..." value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            {{ $errors->first('name') }}
                        </span>
                    @endif
                </div>
                <div class="col-sm-4 form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label>Email:</label>
                    <input  type="email" class="form-control {{ ($errors->has('email'))?"input-error":"" }}"  name="email" placeholder="{{__('guest.contact_form_email_placeholder')}}..." value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            {{ $errors->first('email') }}
                        </span>
                    @endif
                </div>
                <div class="col-sm-4 form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label>{{__("guest.phone")}}:</label>
                    <input  type="number" class="form-control {{ ($errors->has('phone'))?"input-error":"" }}"  name="phone" placeholder="{{__('guest.phone')}}..." value="{{ old('phone') }}">
                    @if ($errors->has('phone'))
                        <span class="help-block">
                            {{ $errors->first('phone') }}
                        </span>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                    <label class="control-label">{{__("guest.title")}}:</label>
                    <input  type="text" class="form-control {{ ($errors->has('title'))?"input-error":"" }}"  name="title" placeholder="{{__('guest.title')}}..." value="{{ old('title') }}">
                    @if ($errors->has('title'))
                        <span class="help-block">
                            {{ $errors->first('title') }}
                        </span>
                    @endif
                </div>
                <div class="col-sm-12 form-group {{ $errors->has('content') ? ' has-error' : '' }}">
                    <label class="control-label">{{__("guest.contact_content")}}:</label>
                    <textarea style="height: auto;"  class="form-control {{ ($errors->has('content'))?"input-error":"" }}" rows="5" cols="75"  name="content" placeholder="{{__('guest.contact_content')}}...">{{ old('content') }}</textarea>
                    @if ($errors->has('content'))
                        <span class="help-block">
                            {{ $errors->first('content') }}
                        </span>
                    @endif

                </div>
            </div>

            <div class="btn-toolbar form-group">
                <input type="submit" style="color: white; background: #e13475;" value="{{__('guest.contact_form_send')}}" class="btn btn-primary">
                <input type="reset" style="background: #eaeaea;" value="{{__('guest.contact_form_reset')}}" class="btn btn-info">
            </div>
        </div>
</div>


</div><!-- contactFormWrapper -->

</form>

  </div>
        </div>
    </div>
    </div>
</div>

@endsection

@section('breadcrumb')
    <div class="breadcrumbs">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <ul>
                <li class="home"> <a title="Go to Home Page" href="{{ url('/') }}">{{__("guest.home")}}</a><span><i class="fa fa-chevron-right" style=" margin: 0 5px; font-size: 10px; color: #fd669f; "></i></span></li>
                <li class="">{{ $title }}</li>

              </ul>
            </div>
          </div>
        </div>
      </div>
@endsection

@push('scripts')
<script>
$("#contact-nav_item").toggleClass("active");
</script>
@endpush

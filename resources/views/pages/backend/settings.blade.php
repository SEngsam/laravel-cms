@extends('layouts.backend.app')
@section('title', 'Settings')
@section('content')

<style>

</style>

  <div class="container">
  <div class="row">
  <div class="col">

                    <div class="card card-xl-stretch">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0 mt-4">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="fw-bolder mb-2 text-dark">Main Settinges</span>
                            </h3>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-5">
                            <!--begin::Timeline-->
                         <form action="{{ route('update.main') }}" method="post" id="kt_modal_add_category_form" class="form">
                           {{ csrf_field() }}
                                            <!--begin::Scroll-->
                                            <div class="" >
                                   <div class="row">
                            <div class="col-6">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Website Name
                                                        (English)</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="website_name_en"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Website name" value="@if($MainSettings) {{ $MainSettings->website_name_en }}@endif" />
                                                    <!--end::Input-->
                                     <div class="text-danger">{{$errors->first('website_name_en')}}</div>
                                                </div>
                               </div>                  <!--end::Input group-->
                        <div class="col-6">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Website Name
                                                        (العربية)</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="website_name_ar"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Website name" value="@if($MainSettings) {{ $MainSettings->website_name_ar }}@endif" />
                                 <div class="text-danger">{{$errors->first('website_name_ar')}}</div>
                                                    <!--end::Input-->
                                                </div>
                          </div>  </div>
                         <div class="row">
                            <div class="col-6">
                                           <div class="mb-7">

                                                    <label class="required fw-bold fs-6 mb-5">Website Adress (English)</label>

                                                    <input type="text" name="website_adress_en"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Adress name" value="@if($MainSettings) {{ $MainSettings->website_adress_en }}@endif" />
 <div class="text-danger">{{$errors->first('website_adress_en')}}</div>

                                                </div>
                                    </div>                  <!--end::Input group-->
                        <div class="col-6">

                                                <div class="mb-7">

                                                    <label class="required fw-bold fs-6 mb-5">Website Adress (العربية)</label>


                                                        <input type="text" name="website_adress_ar"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Adress name" value="@if($MainSettings) {{ $MainSettings->website_adress_ar }}@endif" />
 <div class="text-danger">{{$errors->first('website_adress_ar')}}</div>
                                                </div>
                                      </div>  </div>
                                                <div class="fv-row mb-7">

                                                    <label class="required fw-bold fs-6 mb-2">Website Description (English)</label>


                   <textarea id="editor-en" rows="4" name="website_description_en"  class="form-control form-control-solid mb-3 mb-lg-0">@if($MainSettings){{ $MainSettings->website_description_en }}@endif</textarea>
 <div class="text-danger">{{$errors->first('website_description_en')}}</div>
                                                </div>

                                                <div class="fv-row mb-7">

                                                    <label class="required fw-bold fs-6 mb-2">Website Description (العربية)</label>

                   <textarea id="editor-en" rows="4" name="website_description_ar" class="form-control form-control-solid mb-3 mb-lg-0"> @if($MainSettings) {{ $MainSettings->website_description_ar }}@endif</textarea>
 <div class="text-danger">{{$errors->first('website_description_ar')}}</div>
                                                </div>



                                            </div>

                                            <div class="text-center pt-15">

                                                <button type="submit" class="btn btn-primary"
                                                    data-kt-users-modal-action="submit">
                                                    <span class="indicator-label">Submit</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                            <!--end::Actions-->

                         </form>
                            <!--end::Timeline-->
                        </div>
                        <!--end: Card Body-->
                    </div>


               <br>   <br>   <br>





                      <div class="card card-xl-stretch">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0 mt-4">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="fw-bolder mb-2 text-dark">Social Settinges</span>
                            </h3>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-5">
                            <!--begin::Timeline-->
                         <form action="{{ route('update.social') }}" method="post" id="kt_modal_add_category_form" class="form">
                           {{ csrf_field() }}
                                            <!--begin::Scroll-->
                 <div class="" >
                 {{-- 1 --}}
                         <div class="row">
                            <div class="col-6">
                               <div class="fv-row mb-7">

                               <label class="required fw-bold fs-6 mb-2">Website Email</label>
                               <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0"
                  placeholder="Website Email" value=" @if($SocialSettings) {{ $SocialSettings->email }} @endif " />
    <div class="text-danger">{{$errors->first('email')}}</div>
                                </div>

                            </div>
                             <div class="col-6">
                        <div class="fv-row mb-7">

                    <label class="required fw-bold fs-6 mb-2">Website Phone</label>
                           <input type="number" name="phone"
                             class="form-control form-control-solid mb-3 mb-lg-0"
                            placeholder="Website phone" value="@if($SocialSettings){{ $SocialSettings->phone }}@endif" />
                              <div class="text-danger">{{$errors->first('phone')}}</div>
                           </div>

                            </div>
                        </div>

                        {{-- 2 --}}

                            <div class="row">
                            <div class="col-4">
                               <div class="fv-row mb-7">
                               <label class="required fw-bold fs-6 mb-2">Facebook</label>
                               <input type="text" name="facebook" class="form-control form-control-solid mb-3 mb-lg-0"
                  placeholder="Website facebook" value="@if($SocialSettings){{ $SocialSettings->facebook }}@endif" />
                 <div class="text-danger">{{$errors->first('facebook')}}</div>
                                </div>

                            </div>
                             <div class="col-4">
                        <div class="fv-row mb-7">

                    <label class="required fw-bold fs-6 mb-2">twitter</label>
                           <input type="text" name="twitter"
                             class="form-control form-control-solid mb-3 mb-lg-0"
                            placeholder="Website twitter" value="@if($SocialSettings){{ $SocialSettings->twitter }}@endif" />
             <div class="text-danger">{{$errors->first('twitter')}}</div>
                           </div>

                            </div>

                                     <div class="col-4">
                        <div class="fv-row mb-7">

                    <label class="required fw-bold fs-6 mb-2">instagram</label>
                           <input type="text" name="instagram"
                             class="form-control form-control-solid mb-3 mb-lg-0"
                            placeholder="Website instagram" value="@if($SocialSettings){{ $SocialSettings->instagram }}@endif" />
         <div class="text-danger">{{$errors->first('instagram')}}</div>
                           </div>

                            </div>
                        </div>

                        {{-- 3 --}}

                              <div class="fv-row mb-7">

             <label class="required fw-bold fs-6 mb-2">Website Map </label>
                  <textarea id="editor-en" rows="4" name="map"  class="form-control form-control-solid mb-3 mb-lg-0">@if($SocialSettings){{ $SocialSettings->map }}@endif</textarea>
 <div class="text-danger">{{$errors->first('map')}}</div>
                                </div>

                                            </div>
                                            <div class="text-center pt-15">
                                                <button type="submit" class="btn btn-primary"
                                                    data-kt-users-modal-action="submit">
                                                    <span class="indicator-label">Submit</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                            <!--end::Actions-->

                         </form>
                            <!--end::Timeline-->
                        </div>
                        <!--end: Card Body-->
                    </div>

                    <br><br><br>

   <div class="card card-xl-stretch">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0 mt-4">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="fw-bolder mb-2 text-dark">Meta Settinges</span>
                            </h3>

                        </div>
                       <div class="card-body pt-5">
                            <!--begin::Timeline-->
                         <form action="{{ route('update.meta') }}" method="post" id="kt_modal_add_category_form" class="form">
                           {{ csrf_field() }}
                                            <!--begin::Scroll-->
                                            <div class="" >

                                                <div class="fv-row mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Keywords (English)</label>
         <textarea id="editor-en" rows="4" name="keywords_en"  class="form-control form-control-solid mb-3 mb-lg-0">@if($MateSettings){{ $MateSettings->keywords_en }}@endif</textarea>
  <div class="text-danger">{{$errors->first('keywords_en')}}</div>
                                                </div>


                                                <div class="fv-row mb-7">

                                                    <label class="required fw-bold fs-6 mb-2">Keywords (العربية)</label>

                       <textarea id="editor-en" rows="4" name="keywords_ar" class="form-control form-control-solid mb-3 mb-lg-0">@if($MateSettings){{ $MateSettings->keywords_ar }}@endif</textarea>
        <div class="text-danger">{{$errors->first('keywords_ar')}}</div>
                                                </div>



                                                     <div class="fv-row mb-7">
                    <label class="required fw-bold fs-6 mb-2">Meta Description (English)</label>


       <textarea id="editor-en" rows="4" name="description_en"  class="form-control form-control-solid mb-3 mb-lg-0">@if($MateSettings){{$MateSettings->description_en }}@endif</textarea>
        <div class="text-danger">{{$errors->first('description_en')}}</div>
                                                </div>

                                                <div class="fv-row mb-7">

                                                    <label class="required fw-bold fs-6 mb-2">Meta Description (العربية)</label>

             <textarea id="editor-en" rows="4" name="description_ar" class="form-control form-control-solid mb-3 mb-lg-0">@if($MateSettings){{ $MateSettings->description_ar }}@endif</textarea>
   <div class="text-danger">{{$errors->first('description_ar')}}</div>
                                                </div>



                                            </div>

                                            <div class="text-center pt-15">

                                                <button type="submit" class="btn btn-primary"
                                                    data-kt-users-modal-action="submit">
                                                    <span class="indicator-label">Submit</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                            <!--end::Actions-->

                         </form>
                            <!--end::Timeline-->
                        </div>
                        <!--end: Card Body-->
                    </div>
               <br>   <br>   <br>
  </div>
  </div>
  </div>


@endsection

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>



</script>
 @endsection


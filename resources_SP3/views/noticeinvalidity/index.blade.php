@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-body">
            <h4 class="card-title">@lang('index.attr.invalidity_notice')</h4>
		
		<!-- Nav tabs -->
            <ul class="nav customtab" role="tablist" id="tabMenu">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#obform" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">1. @lang('index.attr.insured_details')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wages" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">2. @lang('index.attr.wages_details')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#pensiondetails" role="tab"><span class="hidden-sm-up"><i class="ti-files"></i></span> <span class="hidden-xs-down">3. @lang('index.attr.pension_details')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#empinfo" role="tab"><span class="hidden-sm-up"><i class="ti-pencil-alt"></i></span> <span class="hidden-xs-down">4. @lang('index.attr.employer_history')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bankinfo" role="tab"><span class="hidden-sm-up"><i class="ti-files"></i></span> <span class="hidden-xs-down">5. @lang('index.attr.bank_information')</span></a> </li>
                
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#uploaddoc" role="tab"><span class="hidden-sm-up"><i class="ti-files"></i></span> <span class="hidden-xs-down">6. @lang('index.attr.upload_documents')</span></a> </li>

                <li class="nav-item"> <a class="nav-link"  id="navbar_confirmation" data-toggle="tab" href="#confirmation" role="tab"><span class="hidden-sm-up"><i class="ti-check-box"></i></span> <span class="hidden-xs-down">7. @lang('index.attr.confirmation') </span></a> </li>

               

            </ul>
				<!-- Tab panes -->
            <div class="tab-content tabcontent-border">

                <div class="tab-pane p-20 active" id="obform" role="tabpanel">
                                @include('noticeinvalidity.ob_form')
                </div>

                <div class="tab-pane p-20" id="wages" role="tabpanel">
                                @include('noticeinvalidity.wagesDetails')
                </div>
                <div class="tab-pane p-20" id="pensiondetails" role="tabpanel">
                                @include('noticeinvalidity.pensionDetails')
                </div>
                <div class="tab-pane p-20" id="empinfo" role="tabpanel">
                                @include('noticeinvalidity.emphistory')
                </div> 
            
                <div class="tab-pane p-20" id="bankinfo" role="tabpanel">
                        @include('noticeinvalidity.bankInformation')
                </div>

                <div class="tab-pane p-20" id="uploaddoc" role="tabpanel">
                        @include('noticeinvalidity.uploadDocument')
                </div>

                <div class="tab-pane p-20" id="confirmation" role="tabpanel">
                        @include('noticeinvalidity.confirmation')
                </div>

                {{-- <div class="tab-pane p-20" id="form10" role="tabpanel">
                        @include('noticeAccident.preview')
                </div> --}}
            </div>
        </div>
    </div>
</div>

<!-- row -->
<script>
 //redirect to specific tab
 $(document).ready(function () {
 $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
 });
</script>

<script>
                function placeacc(){
                        
                         var accdwhen = $("#placeaccd").val();
                         //alert(accdwhen);
                         $('#descen').find('option').not(':first').remove();
                 if (accdwhen){  
        
                   $.ajax({ 
                     url: '/reftable/'+accdwhen,
                     type: 'GET',
                     dataType: 'json',
                    success: function(data){
          //            console.log(data);
        
                     var len = 0;
                     if(data != null){
                        len = data.length;
                    }   
        
                    if(len > 0){
                        $("#accwhen").empty();
                        for(var i=0; i<len; i++){
        
                            var id = data[i].refcode;
                            var name = data[i].descen; 
                            
                            var option ="<option value='"+id+"'>"+name+"</option>";
        
                            $("#accwhen").append(option);
                        }
                    }   
                            
                                }
        
                           }); 
                        }
                }
        </script>

@endsection


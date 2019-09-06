<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                
                <form action="/obform" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                            {{-- <h5 class="card-title">Claim</h5> --}}
                        
                        @if(Session::get('messageob')) 
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messageob')}}
                            </div>

                        </div>
                        @elseif (!empty($messageob))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messageob}}
                            </div>

                        </div>
                        @endif
                        <div id="accordion2" role="tablist" class="accordion" >
                  
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="headingGLletter" style="background-color: #FFFFFF;">
                                        <h5 class="mb-0">                           
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                                <h5 class="card-title" ><i class="fa fa-plus"></i>
                                                Case Information</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                            <div class="card-body">
                                                    @include('scheme.noticeOd.revision.assessment.SAO.case_info')
                                            </div>
                                        </div>
                                   
                                </div>
    
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="headingTwo2" style="background-color: #FFFFFF;">
                                        <h5 class="mb-0">
                                            <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2"><h5 class="card-title"><i class="fa fa-plus"></i>
                                               Applicant Information</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                        <div class="card-body">
                                                @include('scheme.noticeOd.revision.assessment.SAO.applicant_info')
                                        </div>
                                    </div>
                                </div>

                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingThree3" style="background-color: #FFFFFF;" >
                                            <h5 class="mb-0">
                                                <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3"><h5 class="card-title"><i class="fa fa-plus"></i>
                                                 Case Information</h5>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3">
                                            <div class="card-body">
                                                    @include('scheme.noticeOd.revision.assessment.SAO.case_info2')
                                            </div>
                                        </div>
                                    </div>
    
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="headingThree3" style="background-color: #FFFFFF;" >
                                        <h5 class="mb-0">
                                            <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3"><h5 class="card-title"><i class="fa fa-plus"></i>
                                              Medical Board Decision-Appealate</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3">
                                        <div class="card-body">
                                                @include('scheme.noticeOd.revision.assessment.SAO.mbd_appealate')
                                        </div>
                                    </div>
                                </div>

                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingFour4" style="background-color: #FFFFFF;" >
                                            <h5 class="mb-0">
                                                <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour4" aria-expanded="false" aria-controls="collapseFour4"><h5 class="card-title"><i class="fa fa-plus"></i>
                                                  Medical Board Decision</h5>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4">
                                            <div class="card-body">
                                                    @include('scheme.noticeOd.revision.assessment.SAO.medical_board')
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card m-b-0">
                                            <div class="card-header" role="tab" id="headingFive5" style="background-color: #FFFFFF;" >
                                                <h5 class="mb-0">
                                                    <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive5" aria-expanded="false" aria-controls="collapseFive5"><h5 class="card-title"><i class="fa fa-plus"></i>
                                                      Previous Medical Board Decision</h5>
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5">
                                                <div class="card-body">
                                                        @include('scheme.noticeOd.revision.assessment.SAO.pre_medical_board')
                                                </div>
                                            </div>
                                        </div>
                            </div>

                        
                                                                           
                        {{-- <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('insuredPerson.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('noticetype.reset')</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('noticetype.cancel')</button>
                        </div> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

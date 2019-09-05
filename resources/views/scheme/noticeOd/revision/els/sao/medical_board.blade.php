<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/caseinfo_revision" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                    
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

                        <h5 class="card-title"> HUK </h5>
                        <hr>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">JD Type</label>
                                   <select class="form-control" readonly data-placeholder="jdType_els" tabindex="2">
                                   <option selected disabled hidden>Please Select</option>  
                                        <option value="JD">@lang('wages.attr.jd')</option>
                                        <option value="JDR">JDR</option>
                                        <option value="JDK">JDK</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">JD / JDR Session Date</label>
                                    <input type="date" readonly id="jdorjdrsesionDate_els" name="jdorjdrsesionDate" value="" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">Venue Session</label>
                                <input type="text" readonly id="venue_session" name="venue" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">Assessment Type</label>
                                   <select class="form-control" readonly data-placeholder="jdType_els" tabindex="2">
                                   <option selected disabled hidden>Please Select</option>  
                                        <option value="JD">@lang('wages.attr.jd')</option>
                                        <option value="JDR">JDR</option>
                                        <option value="JDK">JDK</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">JD / JDR Result</label>
                                    <input type="text" readonly id="jdjdr_result" name="asessment" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Assessment % </label>
                                    <input type="text" readonly id="assessment_els" name="asessment" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">ELS</label>
                                <input type="text" readonly id="els_els" name="els" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.remark')</label>
                                    <input type="text" readonly id="remarks_els" name="remarks" value="" class="form-control">
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title">PREVIOUS HUK</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">JD Type</label>
                                   <select class="form-control" readonly data-placeholder="jdType_els1" tabindex="2">
                                   <option selected disabled hidden>Please Select</option>  
                                        <option value="JD">@lang('wages.attr.jd')</option>
                                        <option value="JDR">JDR</option>
                                        <option value="JDK">JDK</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">JD / JDR Session Date</label>
                                    <input type="date" readonly id="jdorjdrsesionDate_els1" name="jdorjdrsesionDate1" value="" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">Venue Session</label>
                                <input type="text" readonly id="venue_session1" name="venue1" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">Assessment Type</label>
                                   <select class="form-control" readonly data-placeholder="jdType_els1" tabindex="2">
                                   <option selected disabled hidden>Please Select</option>  
                                        <option value="JD">@lang('wages.attr.jd')</option>
                                        <option value="JDR">JDR</option>
                                        <option value="JDK">JDK</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">JD / JDR Result</label>
                                    <input type="text" readonly id="jdjdr_result1" name="asessment1" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Assessment % </label>
                                    <input type="text" readonly id="assessment_els1" name="asessment1" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">ELS</label>
                                <input type="text" readonly id="els_els1" name="els" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.remark')</label>
                                    <input type="text" readonly id="remarks_sao" name="remarks_sao" value="" class="form-control">
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title"> ILAT </h5>
                        <hr>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">JD Type</label>
                                   <select class="form-control" readonly data-placeholder="jdType_ilat" tabindex="2">
                                   <option selected disabled hidden>Please Select</option>  
                                        <option value="JD">@lang('wages.attr.jd')</option>
                                        <option value="JDR">JDR</option>
                                        <option value="JDK">JDK</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">JD / JDR Session Date</label>
                                    <input type="date" readonly id="jdorjdrsesionDate_ilat" name="jdorjdrsesionDate" value="" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">Venue Session</label>
                                <input type="text" readonly id="venue_session_ilat" name="venue_ilat" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">JD / JDR Result</label>
                                    <input type="text" readonly id="jdjdr_result1_sao" name="asessment1_sao" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Morbid Date</label>
                                    <input type="date" readonly id="jdorjdrsesionDate_ilat" name="jdorjdrsesionDate_ilat" value="" class="form-control">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Invalidity Decision</label>
                                    <input type="text" readonly id="jdjdr_result_ilat" name="asessment_ilat" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">ELS</label>
                                <input type="text" readonly id="els_ilat" name="els_ilat" value="" class="form-control">
                                </div>
                            </div>
                        </div>


                        <h5 class="card-title">PREVIOUS ILAT</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">JD Type</label>
                                   <select class="form-control" readonly data-placeholder="jdType_ilat2" tabindex="2">
                                   <option selected disabled hidden>Please Select</option>  
                                        <option value="JD">@lang('wages.attr.jd')</option>
                                        <option value="JDR">JDR</option>
                                        <option value="JDK">JDK</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">JD / JDR Session Date</label>
                                    <input type="date" readonly id="jdorjdrsesionDate_ilat2" name="jdorjdrsesionDate2" value="" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">Venue Session</label>
                                <input type="text" readonly id="venue_session_ilat2" name="venue_ilat2" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Morbid Date</label>
                                    <input type="date" readonly id="jdorjdrsesionDate_ilat2" name="jdorjdrsesionDate_ilat2" value="" class="form-control">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Invalidity Decision</label>
                                    <input type="text" readonly id="jdjdr_result_ilat2" name="asessment_ilat2" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">ELS</label>
                                <input type="text" readonly id="els_ilat2" name="els_ilat2" value="" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

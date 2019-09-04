<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{url ('/updmc')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="caserefno" value="">
                <!--input type="text" name="accddate" id='accddate' value="{{Session::get('accddate')}}"-->
                <div class="form-body ">
                    <h5 class="card-title">@lang('medicalDetails.title')</h5>
                    <hr>
                    
                    @if(Session::get('messagemc')) 
                    <div class="card-footer">

                        <div class="alert alert-warning">
                            {{Session::get('messagemc')}}
                        </div>

                    </div>
                    @elseif (!empty($messagemc))
                    <div class="card-footer">

                        <div class="alert alert-warning">
                            {{$messagemc}}
                        </div>

                    </div>
                    @endif 
                        <div id="div_mcdetail" class="attendtable1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                        <label class="control-label">@lang('medicalDetails.attr.nameAddress_clinic')</label>
                                        <textarea type="text" id="clinicname" name="clinicinfo" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>		
                        <!--/span-->
                        <!--div class="col-md-3">
                            <div class="form-group">
                                {{-- <label class="control-label">@lang('medicalDetails.attr.mc_status')</label> --}}
                                <select class="form-control" tabindex="1">
                                    {{-- @foreach($mcsts as $MC)
                                    <option value="{{$MC->refcode}}">{{$MC->descen}}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                        </div-->
                        <div class="row">
                            <div class="col-md-12">

                                <div id="accordion1" role="tablist" aria-multiselectable="true">
                                    <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="attendwork">
                                            <h5 class="mb-0">
                                            <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                                
                                            @lang('medicalDetails.attr.medical_leave')
                                              {{-- @if (!empty($mcdata)) 
                                              ({{substr($mcdata->mcinfo[0]->startdate,6,2)}}/{{substr($mcdata->mcinfo[0]->startdate,4,2)}}/{{substr($mcdata->mcinfo[0]->startdate,0,4)}} - {{substr($mcdata->mcinfo[0]->enddate,6,2)}}/{{substr($mcdata->mcinfo[0]->enddate,4,2)}}/{{substr($mcdata->mcinfo[0]->enddate,0,4)}}) @endif --}}
                                              <div class="card-actions">
                                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                              </div>
                                            </a>
                                          </h5>
                                        </div>
                                        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="attendwork">
                                            <div class="card-body">
                                             <div class='row'>       
                                                <div class="row">
                                                    <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('medicalDetails.attr.type_hus')</label>
                                                        <select class="form-control" name="hussts">
                                                            {{-- @foreach($hussts as $typehus)
                                                                 <option value="{{$typehus->refcode}}">{{$typehus->descen}}</option>
                                                            @endforeach --}}

                                                            <option>Please select</option>
                                                            {{-- @foreach($hussts as $typehus)
                                                            @if (!empty($mcdata) && $mcdata->mcinfo[0]->hussts == $typehus->refcode)
                                                            <option value="{{$typehus->refcode}}" selected>{{$typehus->descen}}</option>
                                                            @else    
                                                            <option value="{{$typehus->refcode}}">{{$typehus->descen}}</option>
                                                            @endif
                                                            @endforeach --}}
                                                        </select>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label" >@lang('medicalDetails.attr.start_mc')</label>
    
                                                            <input id="mcstartdate" name="mcstartdate" type="date" onchange='counttotal()'
                                                                    value="" 
                                                                    class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label" >@lang('medicalDetails.attr.end_mc')</label>
                                                                <input id="mcenddate" name="mcenddate" type="date" onchange='counttotal()'
                                                                    value="" 
                                                                    class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('medicalDetails.attr.total_days')</label>
                                                                <input type="text" id="totalmc" name="totalmc" value="@if (!empty($mcdata)){{$mcdata->mcinfo[0]->totalmc}}@endif" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                               </div>

                                                <label class="control-label" id='lblmcerror' style='color:red'></label>

                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        
                        <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Total HUS</label>
                                        <input type="text" id="totalhus" name="totalhus" class="form-control" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label
                                        class="control-label">HUS Recommendation Status</label>
                                        <input type="text" id="husStatus" name="husStatus" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">HUS Recommendation Date</label>
                                            <input type="date" id="husDate" name="husDate" class="form-control" placeholder="" value="">
                                        </div>
                                    </div>
                        </div>
                        <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">BAO approval date</label>
                                        <input type="text" id="BAOapproval" name="BAOapproval"  class="form-control" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label
                                        class="control-label">HUS Recommendation Status from IO</label>
                                        <input type="text" id="HUSRecommendation" name="HUSRecommendation" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">HUS Recommendation Date IO </label>
                                            <input type="text" id="ioHus" name="ioHus"  class="form-control" placeholder="" value="">
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Remarks</label>
                                        <input type="text" id="remarks" name="remarks"  class="form-control" placeholder="" value="">
                                </div>
                            </div>
                        </div>
                    </div>

            {{-- <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">@lang('medicalDetails.attr.wages_mc')</label>
                    <select class="form-control custom-select" name="wagespaid">
                        <option>@lang('medicalDetails.choose')</option>
                        @if (!empty($mcdata) && $mcdata[0]->mcinfo[0]->wagespaid == 'Y') 
                        <option value="Y" selected>@lang('medicalDetails.attr.yes')</option>
                        <option value="N">@lang('medicalDetails.attr.no')</option>
                        @elseif (!empty($mcdata) && $mcdata[0]->mcinfo[0]->wagespaid == 'N') 
                        <option value="Y">@lang('medicalDetails.attr.yes')</option>
                        <option value="N" selected>@lang('medicalDetails.attr.no')</option>
                        @else
                        <option value="Y">@lang('medicalDetails.attr.yes')</option>
                        <option value="N">@lang('medicalDetails.attr.no')</option>
                        @endif
                    </select>
                </div>
            </div> --}}


        </div>
                <!--/row-->


        <div class="form-actions">
            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary btn-newMC ">@lang('insuredPerson.cancel')</button>
            <button type="button" class="btn btn waves-effect waves-light btn-secondary btn-newMC">@lang('insuredPerson.clear')</button-->
            {{-- <button type="button" id="btn_add_MC" class="btn waves-effect waves-light btn-info btn-newMC"  onclick="datafield();">Add MC</button> --}}
            {{-- <button data-toggle="tab" href="#bankinfo" role="tab" class="btn waves-effect waves-light btn-info" id="btn-nextBankInfo">
            @lang('insuredPerson.next')</button> --}}
            <button type="submit" class="btn btn waves-effect waves-light btn-success btn-newMC" onclick="mcsubmit()">
            @lang('insuredPerson.save')</button>
            {{-- <button data-toggle="tab" href="#accddetails" role="tab" class="btn waves-effect waves-light btn-info" id="btn-previousAccDetails">
            @lang('insuredPerson.previous')</button> --}}
        </div>
    </form>
    </div>
</div>
</div>
  
<script>
 function mcsubmit()
 {
    counttotal();
    counttotalwork();
 }
 
 function counttotalwork()
 {
     var startdate = document.getElementById('workstartdate').value;
    //alert(startdate);
    var enddate = document.getElementById('workenddate').value;
    var total = document.getElementById('totalwork');
    
    if(startdate != "" && enddate != ""){
        
        var totalwork = GetDays(startdate,enddate);
        if (totalwork <= 0)
        {
            var lblmcerror = document.getElementById('lblworkerror');
            total.value = "";
            lblmcerror.innerHTML  = 'End date must not before start date';
            return;
        }
        else
        {
            var lblmcerror = document.getElementById('lblworkerror');
            lblmcerror.innerHTML  = '';
        }
        total.value = totalwork;
        //total.value = startdate;
        
    }
    else
    {
        total.value = "";
    }
 }
 
 function counttotal()
{
    
    //var startdate = document.getElementById('startdate['+idx+']').value;
    var startdate = document.getElementById('mcstartdate').value;
    //alert(startdate);
    var enddate = document.getElementById('mcenddate').value;
    var total = document.getElementById('totalmc');
    
    
    
    var date = new Date();
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    
    if(dd<10) {
    dd = '0'+dd;
    } 

    if(mm<10) {
       mm  = '0'+mm;
    } 

    var currdate = yyyy + '-' + mm + '-' + dd;
    var days = GetDays(currdate,startdate);
    //alert(currdate + '+'+ startdate);
    if (days >= 0)
    {
        var lblmcerror = document.getElementById('lblmcerror');
        lblmcerror.innerHTML  = 'Start date must not after current date';
        total.value = "";
        return;
    }
    else
    {
        var lblmcerror = document.getElementById('lblmcerror');
        lblmcerror.innerHTML  = '';
    }
    
    var accddate = document.getElementById('accddate').value;
    //alert(accddate);
    //accddate = accddate.substring(0, 4)+'-'+accddate.substring(4, 2)+'-'+accddate.substring(6, 2);
    //alert(accddate);
    days = GetDays(accddate,startdate);
    //alert(days);
    if (days <= 0)
    {
        var lblmcerror = document.getElementById('lblmcerror');
        lblmcerror.innerHTML  = 'Start date must not before accident date';
        total.value = "";
        return;
    }
    else
    {
        var lblmcerror = document.getElementById('lblmcerror');
        lblmcerror.innerHTML  = '';
    }
    
    if(startdate != "" && enddate != ""){
        
        var totalmc = GetDays(startdate,enddate);
        if (totalmc <= 0)
        {
            var lblmcerror = document.getElementById('lblmcerror');
            lblmcerror.innerHTML  = 'End date must not before start date';
            total.value = "";
            return;
        }
        else
        {
            var lblmcerror = document.getElementById('lblmcerror');
            lblmcerror.innerHTML  = '';
        }
        total.value = totalmc;
        //total.value = startdate;
        
    }
    else
    {
        total.value = "";
    }
    
    
}

function GetDays(startdate, enddate){
    var dropdt = new Date(startdate);
    var pickdt = new Date(enddate);
    //alert(pickdt-dropdt);
    return parseInt(((pickdt - dropdt) / (24 * 3600 * 1000)) + 1);
    //return Math.round((dropdt - pickdt) / (24 * 3600 * 1000));
}   
</script>
    
    <script>
    
            var room = 1;

        function datafield() {


            room++;
            var objTo = document.getElementById('id1');

            var divtest = document.createElement("div");
            divtest.setAttribute("id", "mcDetails" + room);
            var startdate=document.getElementById('startdate');
            var enddate=document.getElementById('enddate');
            var total_days=document.getElementById('days');

            var startdate1=document.getElementById('startdate1');
            var enddate1=document.getElementById('enddate1');
            var total_days1=document.getElementById('days1');


            startdate.setAttribute("id","startdate"+room);
            enddate.setAttribute("id","enddate"+room);
            total_days.setAttribute("id","days"+room);
            startdate1.setAttribute("id","startdate1"+room);
            enddate1.setAttribute("id","enddate1"+room);
            total_days1.setAttribute("id","days1"+room);

                            //var rdiv = 'removeclass' + room;

                    divtest.innerHTML = '<div class="col-lg-12"><form action="#"><div class="form-body"><hr><div class="row p-t-20"><div class="col-md-12"><div class="form-group"><label class="control-label">@lang('medicalDetails.attr.nameAddress_clinic')</label><textarea type="text" id="name" class="form-control"></textarea></div></div><div class="col-md-3"><div class="form-group"><label class="control-label">@lang('medicalDetails.attr.start_mc')</label><input  id="startdate" type="text" class="datepicker" placeholder="dd/mm/yyyy"></div></div><div class="col-md-3"><div class="form-group"><label class="control-label" >@lang('medicalDetails.attr.end_mc')</label><input id="enddate" type="text" class="datepicker" placeholder="dd/mm/yyyy"></div></div><div class="col-md-3"><div class="form-group"><label class="control-label" >@lang('medicalDetails.attr.total_days')</label><input type="text" id="days" class="form-control" placeholder=""></div></div><div class="col-md-3"><div class="form-group"><label class="control-label">@lang('medicalDetails.attr.mc_status')</label><select class="form-control"><option value=""></option><option value=""></option></select></div></div><div class="col-md-3"><div class="form-group"><label class="control-label" >@lang('medicalDetails.attr.start_date')</label><input id="startdate1" type="text" class="datepicker" placeholder="dd/mm/yyyy"></div></div><div class="col-md-3"><div class="form-group"><label class="control-label" >@lang('medicalDetails.attr.end_date')</label><input id="enddate1" type="text" class="datepicker" placeholder="dd/mm/yyyy"></div></div><div class="col-md-3"><div class="form-group"><label class="control-label">@lang('medicalDetails.attr.days_work')</label><input type="text" id="days1" class="form-control" placeholder=""></div></div><div class="col-md-3"><div class="form-group"><label class="control-label">@lang('medicalDetails.attr.status')</label><input type="text" id="status" class="form-control" placeholder=""></div></div></div></div><div class="row"><div class="col-md-4"><div class="form-group"><label class="control-label">@lang('medicalDetails.attr.wages_mc')</label><select class="form-control custom-select"><option>@lang('medicalDetails.attr.yes')</option><option>@lang('medicalDetails.attr.no')</option></select></div></div></div><div id="id1"></div></form></div></div></div>'; 

                    objTo.appendChild(divtest)

                    document.getElementById('btn1').disabled = true;



                }
    </script>

            <script src="https://code.jquery.com/jquery-1.8.3.js"></script>
            <script src="https://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
            {{-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" /> --}}
            

<script>
    $(document).ready(function() {
        $( "#startdate1,#enddate1" ).datepicker({
            changeMonth: true,
            changeYear: true,
            firstDay: 1,
            dateFormat: 'dd/mm/yy',
        })

        $( "#startdate1" ).datepicker({ dateFormat: 'dd/mm/yy' });
        $( "#enddate1" ).datepicker({ dateFormat: 'dd-mm-yy' });

        $('#enddate1').change(function() {
            var start = $('#startdate1').datepicker('getDate');
            var end   = $('#enddate1').datepicker('getDate');

            if (start<end) {
                var days   = (end - start)/1000/60/60/24;
                $('#days1').val(days);
            }
            else {
                alert ("You cant come back before you have been!");
                $('#startdate1').val("");
                $('#enddate1').val("");
                $('#days1').val("");
            }
        });
        $( "#startdate,#enddate" ).datepicker({
            changeMonth: true,
            changeYear: true,
            firstDay: 1,
            dateFormat: 'dd/mm/yy',
        })
        $( "#startdate" ).datepicker({ dateFormat: 'dd/mm/yy' });
        $( "#enddate" ).datepicker({ dateFormat: 'dd-mm-yy' });

        $('#enddate').change(function() {
            var start = $('#startdate').datepicker('getDate');
            var end   = $('#enddate').datepicker('getDate');

            if (start<end) {
                var days   = (end - start)/1000/60/60/24;
                $('#days').val(days);
            }
            else {
                alert ("You cant come back before you have been!");
                $('#startdate').val("");
                $('#enddate').val("");
                $('#days').val("");
            }
}); //end change function
}); //end ready
</script>
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    session(['loginid' => '']);
    session(['loginname' => '']);
    session(['loginbranchcode' => '']);
   return view('common.auth.login');
});

/* -------------------- LOGIN ------------------------ */

Route::get('/login', function () {
    session(['loginid' => '']);
    session(['loginname' => '']);
    session(['loginbranchcode' => '']);
   return view('common.auth.login');

});

/* -------------------- LOGOUT ----------------------- */

Route::get('/logout', 'AuthController@logout');

/* ----------------- AUTHENTICATION ------------------ */

Route::post('/login', 'AuthController@login');

/* ------------------- HOME TASK --------------------- */

Route::get('/home', 'WorkbasketController@wblist');
Route::get('/getnotice','WorkbasketController@getnotice');
Route::get('/deletedraft','WorkbasketController@deletedraft');

/* ------------------ ADMIN TASK --------------------- */

Route::get('/homeADM', function () {
    return view('homeADM');
});

/* ------------------- ALL NOTICE -------------------- */


//Route::resource('noticeOd', 'CommonController@GetOBDetails');
//Route::post('/accidentdatetime', 'NoticeAccidentController@index');//irina comment out
//Route::post('/remark', 'NoticeAccidentController@postRemark');

//testing
Route::get('/testmc', 'NoticeAccidentController@DisplayMC');
Route::post('/testmc', 'NoticeAccidentController@TestUpdMC');
Route::get('/testuploaddoc', 'UploadclaimController@getdoc');
Route::post('/testuploaddoc', 'UploadclaimController@upload');


Route::group(['prefix' => 'Scheme','namespace'=>'Scheme'], function () {
/* -------------------------------- COMMON ------------------------------------ */   
    Route::post('/obform', 'CommonController@postObForm');
    Route::post('/bankinformation','CommonController@postBankInfo');
//HANNIS
    Route::post('/employerDetails', 'CommonController@postEmployer');
    Route::get('/success','CommonController@success');
    Route::post('/backhome', 'CommonController@backhome');
    Route::post('/back', 'CommonController@BacktoConfirmation');//chg07072019
/* ----------------------------- END OF COMMON --------------------------------- */   

/* ---------------------------------- UPLOAD FILE ------------------------------------------ */

    Route::get('/fileupload','FileuploadController@index');
    Route::get('/searchdocument', function () {return view('fileupload.index');});
//najmi
    Route::get('/indexobprofile', 'ObprofileController@index')->name('obprofile.index');
    Route::get('/indexclaiminfo', 'ClaimController@index')->name('claim.index');
    Route::post('insertlola', 'UploadobprofileController@upload')->name('obprofile.upload');
    Route::post('insert', 'UploadclaimController@upload')->name('claim.upload');
    Route::get('/viewdoc', 'UploadclaimController@viewstorage');

//irina
    Route::get('/scanningdone', 'UploadclaimController@ScanningDone');
/* ----------------------------------END OF UPLOAD FILE ------------------------------------------ */

/* -------------------------------NOTICE TYPE --------------------------------- */
    Route::post('/idno', 'NoticeTypeController@noticeType');
    Route::get('', 'NoticeTypeController@index');
    Route::get('/idno', 'NoticeTypeController@index');
/* ------------------------END OF NOTICE TYPE --------------------------------- */

/* -------------------------- NOTICE ACCIDENT(PK) ----------------------------- */
    Route::get('/noticeaccident', 'NoticeAccidentController@index');
    Route::get('/branch/{statecode}', 'NoticeAccidentController@getbranchname');
    Route::get('/reftable/{accdwhen}', 'NoticeAccidentController@getaccwhen');
    Route::get('/obform', 'NoticeAccidentController@index');
    Route::post('/employerdetails_accd', 'CommonController@postEmployer');
    Route::get('/accdatetime', 'NoticeAccidentController@AccidentDate');
    Route::post('/accidentdatetime', 'NoticeAccidentController@checkAccidentDate');
    Route::post('/wagesdetails', 'NoticeAccidentController@postWages');
    Route::post('/certificateemployee', 'NoticeAccidentController@postCertificateEmployee');

//Confirmation & Preview
    Route::post('/accsave', 'NoticeAccidentController@postConfirmation');
    Route::get('/preview', 'NoticeAccidentController@Preview');
    Route::post('/accsubmit', 'NoticeAccidentController@Submit');
    Route::post('/back', 'CommonController@BacktoConfirmation');
// Route::post('/bankinformation','NoticeAccidentController@postBankInfo');

//irina
    Route::post('/noticeaccident', 'NoticeAccidentController@postAccident');
    Route::post('/updmc', 'NoticeAccidentController@UpdMC');
/* --------------------------END OF NOTICE ACCIDENT(PK) ------------------------ */

/* -------------------------- NOTICE ACCIDENT -- SCO ----------------------------- */
    Route::get('/index_sco', 'NoticeAccidentController@indexSCO');
    Route::post('/obform_sco', 'CommonController@postObForm');
    Route::post('/accidentDetails_sco', 'NoticeAccidentController@postAccident');
    Route::post('/employerdetails_sco', 'CommonController@postEmployer');

/* --------------------------- NOTICE ACCIDENT -- IO --------------------------- */
    Route::get('/index_io', 'NoticeAccidentController@indexIO');
/* ---------------------------END OF NOTICE ACCIDENT -- IO ---------------------- */

/* -------------------------- NOTICE ACCIDENT -- SAO --------==------------------- */
    Route::get('/index_sao', 'NoticeAccidentController@indexSAO');
/* ----------------------END OF NOTICE ACCIDENT -- SAO --------------------------- */


/* --------------------------- NOTICE OD(PK) ------------------------------------ */
    Route::get('/obform_od', 'NoticeOdController@index');
    Route::get('/noticeOd', 'NoticeOdController@index');
    Route::post('/obform', 'CommonController@postObForm');
    Route::post('/employerDetails_od', 'CommonController@postEmployer');
    Route::post('/odupdmc', 'NoticeOdController@UpdMC');
    Route::post('/confirmation_od', 'NoticeOdController@postConfirmation');
    Route::post('/bankinformation_od', 'NoticeOdController@postBankInfo');
    Route::post('/wagesdetails_od', 'NoticeOdController@postWages');
    Route::post('/odinfo', 'NoticeOdController@postOdinfo');
    Route::post('/odemphistory', 'NoticeOdController@postOdEmphistory');
    Route::get('/odpreview', 'NoticeOdController@Preview');
    Route::get('/revisionels', 'Revision\revisionElsController@index');
// Route::get('/branch/{statecode}', 'NoticeOdController@getbranchname');

/* ---------------------------END OF NOTICE OD(PK) ------------------------------- */

/* --------------------------- NOTICE OD(IO) ------------------------------------ */
    Route::get('/obform_io', 'NoticeOdController@indexIO');
    Route::get('/revisionels_io', 'Revision\revisionElsController@indexElsIO');

/* ---------------------------END OF NOTICE OD(IO) ------------------------------- */

/* --------------------------- NOTICE OD(SCO) ------------------------------------ */
    Route::get('/obform_sco', 'NoticeOdController@indexSCO');
    Route::get('/revisionassess_sco', 'Revision\RevisionAssessmentController@indexRevisionSCO');
    Route::get('/revisionels_sco', 'Revision\revisionElsController@indexEls');

/* ---------------------------END OF NOTICE OD(SCO) ------------------------------- */

/* --------------------------- NOTICE OD(SAO) ------------------------------------ */
    Route::get('/obform_sao', 'NoticeOdController@indexSAO');
    Route::get('/revisionassess_sao', 'Revision\RevisionAssessmentController@indexRevisionSAO');
    Route::get('/revisionels_sao', 'Revision\revisionElsController@indexElsSao');

/* ------------------------ END OF NOTICE OD(SAO) ---------------------------------- */

// Ifa 
/* --------------------------- REVISION MEDICAL  ------------------------------------ */

// PK
    Route::get('/revisionmedical_pk','Revision\MedicalController@index_pk');
// SCO
    Route::get('/revisionmedical_sco','Revision\MedicalController@index_sco');
// IO
    Route::get('/revisionmedical_io','Revision\MedicalController@index_io');
// SAO
    Route::get('/revisionmedical_sao','Revision\MedicalController@index_sao');

/* ------------------------ END OF REVISION MEDICAL ---------------------------------- */

/* --------------------------- NOTICE OD(REVISION) ------------------------------------ */
    Route::get('/revisionprovisional_sco', 'Revision\ProvisionalController@index_SCO');
    Route::get('/revisionprovisional_sao', 'Revision\ProvisionalController@index_SAO');
    Route::get('/revisionchangedate', 'Revision\ChangeDateODController@index');
    Route::get('/revisionchangedate_sco', 'Revision\ChangeDateODController@index_SCO');
    Route::get('/revisionchangedate_io', 'Revision\ChangeDateODController@index_IO');
    Route::get('/revisionchangedate_sao', 'Revision\ChangeDateODController@index_SAO');

/* ------------------------ END OF NOTICE OD(REVISION) ---------------------------------- */

/* --------------------------- NOTICE OD(OTHERS) ------------------------------------ */
    Route::get('/noic', 'Others\NoIcController@index');
    Route::get('/noic_sco', 'Others\NoIcController@index_SCO');
    Route::get('/noic_sao', 'Others\NoIcController@index_SAO');

/* ------------------------ END OF NOTICE OD(OTHERS) ---------------------------------- */

/* ------------------------------ NOTICE ILAT(PK) -------------------------------- */
    Route::get('/obformilat', 'NoticeInvalidityController@index');
    Route::post('/wagesilat', 'NoticeInvalidityController@postWages');
    Route::post('/obformilat', 'CommonController@postObForm');
    Route::post('/ilatinfo', 'NoticeInvalidityController@postIlat_info');
    Route::post('/emphistory', 'NoticeInvalidityController@postEmphistory');
    Route::post('/confirmationilat', 'NoticeInvalidityController@postConfirmation');
    Route::post('/bankinformationilat', 'NoticeInvalidityController@postBankInfo');
    Route::get('/ilatpreview', 'NoticeInvalidityController@Preview');
    Route::post('/Back', 'NoticeInvalidityController@Back');
// Route::get('/checkIlatNotice', 'NoticeInvalidityController@checkIlatNotice');
//Route::get('/noticeinvalidity','NoticeInvalidityController@index');
/* ----------------------------END OF NOTICE ILAT(PK) -------------------------------- */

/* ---------------------------- NOTICE ILAT(SCO) ------------------------------------- */
    Route::get('/noticeinvaliditysco', function () {return view('Scheme.noticeinvalidity.sco.index');});
/* ----------------------------END OF NOTICE ILAT(SCO) -------------------------------- */


/* --------------------------------- NOTICE DEATH(PK) --------------------------------- */
    Route::post('/noticedeath', 'NoticeDeathController@postObForm');
    Route::post('/employerDetails_death', 'CommonController@postEmployer');
    Route::post('/deathdetails', 'NoticeDeathController@postDeathWithMC');
    Route::get('/deathdetails', 'NoticeDeathController@index');
    Route::post('/confirmation_death', 'NoticeDeathController@postConfirmation');
    Route::get('/noticedeath', 'NoticeDeathController@index');
    Route::post('/applicantinfo', 'NoticeDeathController@postApplicantInfo');
    Route::get('/applicantinfo', 'NoticeDeathController@index');
    Route::post('/wagesdetails_death', 'NoticeDeathController@postWages');
    Route::post('/bankinformation_death','NoticeDeathController@postBankInfo');
    Route::post('/otinfo','NoticeDeathController@postOtInfo');
    Route::get('/otinfo', 'NoticeDeathController@index');
    Route::get('/preview', 'NoticeDeathController@Preview');
    Route::get('/reftable/{accdwhen}', 'NoticeDeathController@getaccwhen');
    Route::get('/reftable1/{suboccucode}', 'NoticeDeathController@getsuboccucode');

// Anis
    Route::post('/guardianinfo', 'Scheme\NoticeDeathController@postGuardianInfo');
    Route::get('/guardianinfo', 'Scheme\NoticeDeathController@index');
/* ------------------------------ END OF NOTICE DEATH(PK) --------------------------------- */

/* ------------------------------ NOTICE DEATH -- SCO ------------------------------------- */
    Route::get('/index_sco','Scheme\NoticeDeathController@indexSCO');
/* ------------------------- END OF NOTICE DEATH -- SCO ------------------------------------- */

/* ---------------- NOTICE DEATH -- IO-------------------- */
    Route::get('/index_io','Scheme\NoticeDeathController@indexIO');
/* ------------------------- END OF NOTICE DEATH -- IO ------------------------------------- */

/* ------------------------------- NOTICE DEATH -- SAO -------------------------------------- */
    Route::get('/index_sao','Scheme\NoticeDeathController@indexSAO');
/* ------------------------------ END OF NOTICE DEATH(SAO) --------------------------------- */
});

/* ---------------- LOCALIZATION -------------------- */

Route::get('locale', function () {
    return \App::getLocale();
});
Route::get('locale/{locale}', function ($locale) {
    \Session::put('locale', $locale);
    return redirect()->back();
});
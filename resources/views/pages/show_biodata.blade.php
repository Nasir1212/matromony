@extends("master.layout")
@section("content")

<section class="breadcrumbs bg-primary py-5">
<div class="container">
<div class="row">
<div class="co-xl-12">
<div class="breadcrumbs-title">
    <?php $auth =  App\Models\Register::where(['id'=>$biodata_id])->get()[0] ?>
    

<h4 class="text-light">বায়োডাটা নাম {{ $auth->name}} </h4>
</div>
</div>
</div>
</div>
</section>
<?php  $general_info =  App\Models\general_info::where(['user_table_id'=>$biodata_id])->first(); ?>

<section class="profile-section py-5">
<div class="container">
<div class="row">

<div class="col-xl-4">
    @if($general_info != null)
<div class="biodata-card m-0 profile-card">
<div class="biodata-header d-flex justify-content-around align-items-middle align-self-middle">
<div class="biodata-img">
@if($general_info->biodata_type=="1")
<img src="/avatar/male-1675938028.png" alt="female" class="img-fluid rounded-circle bg-light" width="70">
@else
<img src="/avatar/female-1675938966.png" alt="female" class="img-fluid rounded-circle bg-light" width="70">
@endif
</div>
<div class="biodata-title text-center">
<h4>বায়োডাটা নাম</h4>

<p>{{ $auth->name}}</p>
</div>
</div>
<div class="biodata-body">
    {{-- @dd($general_info) --}}
<label>বায়োডাটার ধরন </label>
<p>@if($general_info->biodata_type == 1) পাত্রের বায়োডাটা @else পাত্রীর বায়োডাটা @endif</p>
<label>বৈবাহিক অবস্থা</label>
<p>{{$general_info->marid_type}}</p>
<label>বর্তমান ঠিকানা </label>
@foreach( App\Models\districts::get() as $district ) 
@if($general_info->present_address==$district->id)
<p>{{$district->bn_name}}</p>
@endif
@endforeach

<label>বিভাগ </label>
@foreach( App\Models\districts::get() as $district ) 
@if($general_info->divition==$district->id)
<p>{{$district->bn_name}}</p>
@endif
@endforeach
<label>স্থায়ী ঠিকানা </label>
@foreach( App\Models\districts::get() as $district ) 
@if($general_info->permanent_address==$district->id)
<p>{{$district->bn_name}}</p>
@endif
@endforeach
<label>বিভাগ </label>
@foreach( App\Models\districts::get() as $district ) 
@if($general_info->permanent_divition==$district->id)
<p>{{$district->bn_name}}</p>
@endif
@endforeach
<label>জন্মসন (আসল) </label>
<p>{{$general_info->birth}}</p>
<label>গাত্রবর্ণ</label>
<p>{{$general_info->color}}</p>
<label>উচ্চতা</label>
@if($general_info->height=="1")   <p>  ৪&#039;১&#039;&#039;</p> @endif
@if($general_info->height=="2")   <p>  ৪&#039;২&#039;&#039;</p> @endif
@if($general_info->height=="3")   <p>  ৪&#039;৩&#039;&#039;</p> @endif
@if($general_info->height=="4")   <p>  ৪&#039;৪&#039;&#039;</p> @endif
@if($general_info->height=="5")   <p>  ৪&#039;৫&#039;&#039;</p> @endif
@if($general_info->height=="6")   <p>  ৪&#039;৬&#039;&#039;</p> @endif
@if($general_info->height=="7")   <p>  ৪&#039;৭&#039;&#039;</p> @endif
@if($general_info->height=="8")   <p>  ৪&#039;৮&#039;&#039;</p> @endif
@if($general_info->height=="9")   <p>  ৪&#039;৯&#039;&#039;</p> @endif
@if($general_info->height=="10")   <p>  ৪&#039;১০&#039;&#039;</p> @endif
@if($general_info->height=="11")   <p>  ৪&#039;১১&#039;&#039;</p> @endif
@if($general_info->height=="12")   <p>  ৪&#039;১২&#039;&#039;</p> @endif
@if($general_info->height=="13")   <p>  ৫&#039;০&#039;&#039;</p> @endif
@if($general_info->height=="14")   <p>  ৫&#039;১&#039;&#039;</p> @endif
@if($general_info->height=="15")   <p>  ৫&#039;২&#039;&#039;</p> @endif
@if($general_info->height=="16")   <p>  ৫&#039;৩&#039;&#039;</p> @endif
@if($general_info->height=="17")   <p>  ৫&#039;৪&#039;&#039;</p> @endif
@if($general_info->height=="18")   <p>  ৫&#039;৫&#039;&#039;</p> @endif
@if($general_info->height=="19")   <p>  ৫&#039;৬&#039;&#039;</p> @endif
@if($general_info->height=="20")   <p>  ৫&#039;৭&#039;&#039;</p> @endif
@if($general_info->height=="21")   <p>  ৫&#039;৮&#039;&#039;</p> @endif
@if($general_info->height=="22")   <p>  ৫&#039;৯&#039;&#039;</p> @endif
@if($general_info->height=="23")   <p>  ৫&#039;১০&#039;&#039;</p> @endif
@if($general_info->height=="24")   <p>  ৫&#039;১১&#039;&#039;</p> @endif
@if($general_info->height=="25")   <p>  ৫&#039;১২&#039;&#039;</p> @endif
@if($general_info->height=="26")   <p>  ৬&#039;০&#039;&#039;</p> @endif
@if($general_info->height=="27")   <p>  ৬&#039;১&#039;&#039;</p> @endif
@if($general_info->height=="28")   <p>  ৬&#039;২&#039;&#039;</p> @endif
@if($general_info->height=="29")   <p>  ৬&#039;৩&#039;&#039;</p> @endif
@if($general_info->height=="30")   <p>  ৬&#039;৪&#039;&#039;</p> @endif
@if($general_info->height=="31")   <p>  ৬&#039;৫&#039;&#039;</p> @endif
@if($general_info->height=="32")   <p>  ৬&#039;৬&#039;&#039;</p> @endif
@if($general_info->height=="33")   <p>  ৬&#039;৭&#039;&#039;</p> @endif
@if($general_info->height=="34")   <p>  ৬&#039;৮&#039;&#039;</p> @endif
@if($general_info->height=="35")   <p>  ৬&#039;৯&#039;&#039;</p> @endif
@if($general_info->height=="36")   <p>  ৬&#039;১০&#039;&#039;</p> @endif
@if($general_info->height=="37")   <p>  ৬&#039;১১&#039;&#039;</p> @endif
@if($general_info->height=="38")   <p>  ৬&#039;১২&#039;&#039;</p> @endif

<label>ওজন</label>
<p>{{$general_info->weight}} কেজি</p>
<label>রক্তের গ্রুপ </label>
<p>{{$general_info->blood_group}}</p>
<label>পেশা</label>
<p>{{$general_info->profession}}</p>
</div>
<hr style="opacity: 0.3; margin: 25px 0px;">
<button type="button" onclick="handle_copy_link(this)" id="<?php echo  URL::to("show_biodata/$general_info->user_table_id") ?>" class="btn btn-primary copy_url"><i class="fa fa-clone" aria-hidden="true"></i> বায়োডাটার লিংক কপি করুন</button>
<a onclick="add_favorite('{{$general_info->user_table_id}}');" class="btn btn-outline-light btn-favorite bg-light text-dark"><i class="fa fa-heart-o"></i></a>
</div>
@endif
</div>
<div class="col-xl-8">
<div class="profile-tab-content">
<div class="card profile-card-content mb-4">
<div class="card-header text-center bg-transparent p-0 m-0 ">
    <?php  $address =  App\Models\address::where(['user_table_id'=>$biodata_id])->first(); ?>
<h5>ঠিকানা</h5>
</div>
<div class="card-body m-0 p-0">
<table class="table table-striped table-sm m-0">
    @if($address != null)
<tbody>
<tr>
<th scope="row">স্থায়ী ঠিকানা </th>
<td>{{ $address->present_address}}</td>
</tr>
<tr>
<th scope="row">বর্তমান ঠিকানা </th>
<td>{{ $address->permanent_address}}</td>
</tr>
<tr>
<th scope="row">কোথায় বড় হয়েছেন? </th>
<td>{{ $address->growing_up}}</td>
</tr>
</tbody>
@endif
</table>
</div>
</div>
<div class="card profile-card-content mb-4">
<div class="card-header text-center bg-transparent p-0 m-0 ">
<h5>সাধারণ তথ্য</h5>
</div>
<div class="card-body m-0 p-0">
<table class="table table-striped table-sm m-0">
    @if($general_info != null)
<tbody>
<tr>
<th scope="row">বায়োডাটার ধরন </th>
<td>@if($general_info->biodata_type == 1) পাত্রের বায়োডাটা @else পাত্রীর বায়োডাটা @endif</td>
</tr>
<tr>
<th scope="row">বৈবাহিক অবস্থা</th>
<td>{{$general_info->marid_type}}</td>
</tr>
<tr>
<th scope="row">বর্তমান ঠিকানা </th>
<td>@foreach( App\Models\districts::get() as $district ) 
    @if($general_info->present_address==$district->id)
   {{$district->bn_name}}
    @endif
    @endforeach</td>
</tr>
<tr>
<th scope="row">বিভাগ </th>
<td>@foreach( App\Models\districts::get() as $district ) 
    @if($general_info->divition==$district->id)
    {{$district->bn_name}}
    @endif
    @endforeach বিভাগ</td>
</tr>
<tr>
<th scope="row">স্থায়ী ঠিকানা </th>
<td>@foreach( App\Models\districts::get() as $district ) 
    @if($general_info->permanent_address==$district->id)
    <p>{{$district->bn_name}}</p>
    @endif
    @endforeach</td>
</tr>
<tr>
<th scope="row">বিভাগ </th>
<td>@foreach( App\Models\districts::get() as $district ) 
    @if($general_info->permanent_divition==$district->id)
    <p>{{$district->bn_name}}</p>
    @endif
    @endforeach বিভাগ</td>
</tr>
<tr>
<th scope="row">জন্মসন (আসল) </th>
<td>{{$general_info->birth}}</td>
</tr>
<tr>
<th scope="row">গাত্রবর্ণ</th>
<td>
    {{$general_info->color}}
</td>
</tr>
<tr>
<th scope="row">উচ্চতা</th>
<td>
    
@if($general_info->height=="1") ৪&#039;১&#039;&#039;  @endif
@if($general_info->height=="2") ৪&#039;২&#039;&#039;  @endif
@if($general_info->height=="3") ৪&#039;৩&#039;&#039;  @endif
@if($general_info->height=="4") ৪&#039;৪&#039;&#039;  @endif
@if($general_info->height=="5") ৪&#039;৫&#039;&#039;  @endif
@if($general_info->height=="6") ৪&#039;৬&#039;&#039;  @endif
@if($general_info->height=="7") ৪&#039;৭&#039;&#039;  @endif
@if($general_info->height=="8") ৪&#039;৮&#039;&#039;  @endif
@if($general_info->height=="9") ৪&#039;৯&#039;&#039;  @endif
@if($general_info->height=="10") ৪&#039;১০&#039;&#039;  @endif
@if($general_info->height=="11") ৪&#039;১১&#039;&#039;  @endif
@if($general_info->height=="12")   <p>  ৪&#039;১২&#039;&#039;</p> @endif
@if($general_info->height=="13") ৫&#039;০&#039;&#039;  @endif
@if($general_info->height=="14") ৫&#039;১&#039;&#039;  @endif
@if($general_info->height=="15") ৫&#039;২&#039;&#039;  @endif
@if($general_info->height=="16") ৫&#039;৩&#039;&#039;  @endif
@if($general_info->height=="17") ৫&#039;৪&#039;&#039;  @endif
@if($general_info->height=="18") ৫&#039;৫&#039;&#039;  @endif
@if($general_info->height=="19") ৫&#039;৬&#039;&#039;  @endif
@if($general_info->height=="20") ৫&#039;৭&#039;&#039;  @endif
@if($general_info->height=="21") ৫&#039;৮&#039;&#039;  @endif
@if($general_info->height=="22") ৫&#039;৯&#039;&#039;  @endif
@if($general_info->height=="23") ৫&#039;১০&#039;&#039;  @endif
@if($general_info->height=="24") ৫&#039;১১&#039;&#039;  @endif
@if($general_info->height=="25") ৫&#039;১২&#039;&#039;  @endif
@if($general_info->height=="26") ৬&#039;০&#039;&#039;  @endif
@if($general_info->height=="27") ৬&#039;১&#039;&#039;  @endif
@if($general_info->height=="28") ৬&#039;২&#039;&#039;  @endif
@if($general_info->height=="29") ৬&#039;৩&#039;&#039;  @endif
@if($general_info->height=="30") ৬&#039;৪&#039;&#039;  @endif
@if($general_info->height=="31") ৬&#039;৫&#039;&#039;  @endif
@if($general_info->height=="32") ৬&#039;৬&#039;&#039;  @endif
@if($general_info->height=="33") ৬&#039;৭&#039;&#039;  @endif
@if($general_info->height=="34") ৬&#039;৮&#039;&#039;  @endif
@if($general_info->height=="35") ৬&#039;৯&#039;&#039;  @endif
@if($general_info->height=="36") ৬&#039;১০&#039;&#039;  @endif
@if($general_info->height=="37") ৬&#039;১১&#039;&#039;  @endif
@if($general_info->height=="38") ৬&#039;১২&#039;&#039;  @endif
</td>
</tr>
<tr>
<th scope="row">ওজন</th>
<td>{{$general_info->weight}} কেজি</td>
</tr>
<tr>
<th scope="row">রক্তের গ্রুপ </th>
<td>{{$general_info->blood_group}}</td>
</tr>
<tr>
<th scope="row">পেশা</th>
<td>{{$general_info->profession}}</td>
</tr>
<tr>
</tr>
</tbody>
@endif
</table>
</div>
</div>
<div class="card profile-card-content mb-4">
<div class="card-header text-center bg-transparent p-0 m-0 ">
<h5>শিক্ষাগত যোগ্যতা</h5>
</div>
<div class="card-body m-0 p-0">
<table class="table table-striped table-sm m-0">
    <?php  $education_info =  App\Models\education_info::where(['user_table_id'=>$biodata_id])->first() ?>
@if( $education_info  != null )
<tbody>
<tr>
<th scope="row">কোন মাধ্যমে পড়াশোনা করেছেন? </th>
<td>@if( $education_info->education_type ==1)মাদ্রাসা@else জেনারেল@endif</td>
</tr>
<tr>
</tr>
<tr>
</tr>
@if($education_info->education_type ==1)
<tr>
    <th scope="row">আপনি কি হাফেজ?</th>
    <td>@if($education_info->is_hafez ==1) হ্যাঁ @else না  @endif</td>
</tr>

<tr>
    <th scope="row">দাওরায়ে হাদীস পাশ করেছেন?</th>
    <td>@if($education_info->is_passed_dawrae_hadith ==1) হ্যাঁ @else না  @endif</td>
</tr>

@else
<tr>
<th scope="row">মাধ্যমিক (SSC) / সমমান পাশ করেছেন?</th>
<td>@if($education_info->is_passed_ssc ==1) হ্যাঁ @else না  @endif</td>
</tr>
<tr>
<th scope="row">মাধ্যমিক (SSC) / সমমান ফলাফল</th>
<td>{{$education_info->result_ssc }}</td>
</tr>
<tr>
<th scope="row">মাধ্যমিক (SSC) / সমমান বিভাগ</th>
<td>{{$education_info->divition_ssc }}</td>
</tr>
<tr>
<th scope="row">মাধ্যমিক (SSC) / সমমান পাসের সন</th>
<td>{{$education_info->ssc_passed_year }}</td>
</tr>
<tr>
<th scope="row">উচ্চ মাধ্যমিক (HSC) / সমমান পাশ করেছেন?</th>
<td>@if($education_info->is_passed_hsc ==1) হ্যাঁ @else না  @endif</td>
</tr>
<tr>
<th scope="row">উচ্চ মাধ্যমিক (HSC) / সমমানের বিভাগ</th>
<td>{{$education_info->divition_hsc }}</td>
</tr>
<tr>
<th scope="row">উচ্চ মাধ্যমিক (HSC) / সমমান ফলাফল</th>
<td>{{$education_info->result_hsc }}</td>
</tr>
<tr>
<th scope="row">উচ্চ মাধ্যমিক (HSC) / সমমান পাসের সন</th>
<td>{{$education_info->hsc_passed_year }}</td>
</tr>
<tr>
<th scope="row">স্নাতক / স্নাতক (সম্মান) / সমমান শিক্ষাগত যোগ্যতা</th>
<td>{{$education_info->ssc_passed_year }}</td>
</tr>
<tr>
<th scope="row">শিক্ষাপ্রতিষ্ঠানের নাম</th>
<td>{{$education_info->honours_passed }}</td>
</tr>
<tr>
<th scope="row">পাসের সন</th>
<td>{{$education_info->honours_passed_year }}</td>
</tr>
@endif
<tr>
<th scope="row">সর্বোচ্চ শিক্ষাগত যোগ্যতা</th>
<td>{{$education_info->highest_education }}</td>
</tr>
<tr>
<th scope="row">অন্যান্য শিক্ষাগত যোগ্যতা</th>
<td>{{$education_info->other_education }}এ</td>
</tr>
</tbody>
@endif
</table>
</div>
</div>
<div class="card profile-card-content mb-4 d-none">
<div class="card-header text-center bg-transparent p-0 m-0 ">
<h5>IOM তথ্য</h5>
</div>
<div class="card-body m-0 p-0">
<table class="table table-striped table-sm m-0">
    <?php  $iom_info =  App\Models\iom_info::where(['user_table_id'=>$biodata_id])->first(); ?>

    @if($iom_info  != null)
<tbody>

<tr>
<th scope="row">আপনি কি আইওএমের স্টুডেন্ট?</th>
<td>@if($iom_info->is_iom_student ==1) হ্যাঁ @else না  @endif</td>
</tr>
@if($iom_info->is_iom_student =="1")
<tr>
<th scope="row">আপনার কোর্সের নাম ও ব্যাচ নম্বর:</th>
<td>{{$iom_info->course_and_batch_no}} </td>
</tr>
@endif
</tbody>
@endif
</table>
</div>
</div>
<div class="card profile-card-content mb-4">
<div class="card-header text-center bg-transparent p-0 m-0 ">
<h5>পারিবারিক তথ্য</h5>
</div>
<div class="card-body m-0 p-0">
<table class="table table-striped table-sm m-0">
    <?php  $family_info =  App\Models\family_info::where(['user_table_id'=>$biodata_id])->first() ?>

    @if( $family_info != null)
<tbody>

<tr>
<th scope="row">পিতার পেশা </th>
<td>{{$family_info->profession_father}}</td>
</tr>
<tr>
<th scope="row">মাতার পেশা </th>
<td>{{$family_info->profession_mother}}</td>
</tr>
<tr>
<th scope="row">বোন কয়জন? </th>
<td>{{$family_info->sister}}</td>
</tr>
<tr>
<th scope="row">ভাই কয়জন? </th>
<td>{{$family_info->borther}}</td>
</tr>
<tr>
<th scope="row">বোনদের সম্পর্কে তথ্য</th>
<td>{{$family_info->info_sister}}</td>
</tr>
<tr>
</tr>
<tr>
<th scope="row">চাচা মামাদের পেশা</th>
<td>{{$family_info->uncle }}</td>
</tr>
<tr>
<th scope="row">পরিবারের অর্থনৈতিক ও সামাজিক অবস্থা </th>
<td>{{$family_info->economic_social_status}}</td>
</tr>
<tr>
<th scope="row">আপনার পরিবারের দ্বীনি অবস্থা কেমন? (বিস্তারিত বর্ননা করুন )</th>
<td>{{$family_info->islamic_status}}</td>
</tr>
</tbody>
@endif
</table>
</div>
</div>
<div class="card profile-card-content mb-4">
<div class="card-header text-center bg-transparent p-0 m-0 ">
<h5>ব্যক্তিগত তথ্য</h5>
</div>
<div class="card-body m-0 p-0">
<table class="table table-striped table-sm m-0">
    <?php  $personal_info =  App\Models\personal_info::where(['user_table_id'=>$biodata_id])->first() ?>
@if($personal_info != null )
<tbody>

<tr>
<th scope="row">প্রতিদিন পাঁচ ওয়াক্ত নামাজ পড়া হয় ? </th>
<td>{{$personal_info->prayer}}</td>
</tr>
<tr>
<th scope="row">নিয়মিত নামায কত সময় যাবত পড়ছেন? </th>
<td>{{$personal_info->prayer_year}}</td>
</tr>
<tr>
<th scope="row">মাহরাম/গাইরে-মাহরাম মেনে চলেন কি? </th>
<td>{{$personal_info->mahram_comply}}</td>
</tr>
<tr>
<th scope="row">শুদ্ধভাবে কুরআন তিলওয়াত করতে পারেন? </th>
<td>{{$personal_info->recite_quran}}</td>
</tr>
<tr>
<th scope="row">ঘরের বাহিরে সাধারণত কী ধরণের পোশাক পরেন?</th>
<td>{{$personal_info->wearing_type}}</td>
</tr>
<tr>
<th scope="row">কোনো রাজনৈতিক দর্শন থাকলে লিখুন </th>
<td>{{$personal_info->political_philosophy}}</td>
</tr>
<tr>
<th scope="row">নাটক/সিনেমা/সিরিয়াল/গান/খেলা এসব দেখেন বা শুনেন? </th>
<td>{{$personal_info->entertainment}}</td>
</tr>
<tr>
<th scope="row">মানসিক বা শারীরিক কোনো রোগ আছে কি? </th>
<td>{{$personal_info->disease}}</td>
</tr>
<tr>
<th scope="row">দ্বীনের কোন বিশেষ মেহনতে যুক্ত আছেন? </th>
<td>{{$personal_info->involved_religion}}</td>
</tr>
<tr>
<th scope="row">আপনি কি কোনো পীরের মুরিদ বা অনুসারী ? </th>
<td>{{$personal_info->follower_pir}}</td>
</tr>
<tr>
<th scope="row">মাজার সম্পর্কে আপনার ধারণা বা বিশ্বাস কি? </th>
<td>{{$personal_info->shrines}}</td>
</tr>
<tr>
<th scope="row">আপনার পছন্দের অন্তত ৩ টি ইসলামী বই এর নাম লিখুন</th>
<td>{{$personal_info->islamic_books}}</td>
</tr>
<tr>
<th scope="row">আপনার পছন্দের অন্তত ৩ জন আলেমের নাম লিখুন </th>
<td>{{$personal_info->scholars_name	}}</td>
</tr>
<tr>
<th scope="row">বিশেষ দ্বীনি বা দুনিয়াবি যোগ্যতা (যদি থাকে)</th>
<td>{{$personal_info->special_qualifications}}</td>
</tr>
<tr>
<th scope="row">নিজের সম্পর্কে কিছু লিখুন </th>
<td>{{$personal_info->write_yourself}}</td>
</tr>
<tr>
</tr>
<tr>
<th scope="row">কোন মাজহাব অনুসরণ করেন?</th>
<td>{{$personal_info->mazhab}}</td>
</tr>
<tr>
<th scope="row">নজরের হেফাজত করেন?</th>
<td>{{$personal_info->save_eye}}</td>
</tr>
<tr>
<th scope="row">দ্বীনি ফিউচার প্ল্যন কি আপনার?</th>
<td>{{$personal_info->future_plane}}</td>
</tr>
<tr>
<th scope="row">অবসর সময় কিভাবে কাটান?</th>
<td>{{$personal_info->spend_free_time}}</td>
</tr>
<tr>
</tr>
<tr>
<th scope="row">বাড়িতে কি কি দায়িত্ব আপনি পালন করে থাকেন?</th>
<td>{{$personal_info->spend_free_time}}</td>
</tr>
<tr>
<th scope="row">নারী-পুরুষ সমঅধীকার বিষয়টাকে আপনি কিভাবে দেখেন?</th>
<td>{{$personal_info->congregation_pray}}</td>
</tr>
<tr>
</tr>
</tbody>
@endif
</table>
</div>
</div>
<div class="card profile-card-content mb-4">
<div class="card-header text-center bg-transparent p-0 m-0 ">
<h5>বিয়ে সংক্রান্ত তথ্য</h5>
</div>
<div class="card-body m-0 p-0">
<table class="table table-striped table-sm m-0">
    <?php  $marriage_info =  App\Models\marriage_info::where(['user_table_id'=>$biodata_id])->first(); ?>
@if($marriage_info != null)
<tbody>
<tr>
<th scope="row">অভিভাবক আপনার বিয়েতে রাজি কি না? </th>
<td>{{$marriage_info->is_agree}}</td>
</tr>
<tr>
<th scope="row">বিয়ে কেন করছেন? বিয়ে সম্পর্কে আপনার ধারণা কি? </th>
<td>{{$marriage_info->thought_marriage}}</td>
</tr>

<tr>
<th scope="row">পাত্র/পাত্রী নির্বাচনে কোন বিষয়গুলো ছাড় দেয়ার মানসিকতা রাখেন?</th>
<td>
@if($marriage_info->selection_mind=="1") জেলা  @endif
@if($marriage_info->selection_mind=="2") ছাড় দিতে রাজি নই  @endif
@if($marriage_info->selection_mind=="3") আর্থিক অবস্থা  @endif
@if($marriage_info->selection_mind=="4") আর্থিক অবস্থা ও গায়ের রং  @endif
@if($marriage_info->selection_mind=="5") আর্থিক অবস্থা ও জেলা  @endif
@if($marriage_info->selection_mind=="6") গায়ের রং ও জেলা  @endif
@if($marriage_info->selection_mind=="7") সবক্ষেত্রেই ছাড় দিতে রাজি আছি  @endif
@if($marriage_info->selection_mind=="8") গায়ের রং  @endif
</td>
</tr>


</tbody>
@endif
</table>
</div>
</div>
<div class="card profile-card-content mb-4">
<div class="card-header text-center bg-transparent p-0 m-0 ">
<h5>যেমন জীবনসঙ্গী আশা করেন</h5>
</div>
<div class="card-body m-0 p-0">
<table class="table table-striped table-sm m-0">
    <?php  $spouse_expect =  App\Models\spouse_expect::where(['user_table_id'=>$biodata_id])->first() ?>
@if($spouse_expect  != null )
<tbody>

<tr>
<th scope="row">বয়স </th>
<td>{{$spouse_expect->thought_marriage}}</td>
</tr>
<tr>
<th scope="row">গাত্রবর্ণ </th>
<td>{{$spouse_expect->color}}</td>
</tr>
<tr>
<th scope="row">নূন্যতম উচ্চতা </th>
<td>{{$spouse_expect->min_height}}</td>
</tr>
<tr>
<th scope="row">নূন্যতম শিক্ষাগত যোগ্যতা </th>
<td>{{$spouse_expect->min_education}}</td>
</tr>
<tr>
<th scope="row">বৈবাহিক অবস্থা </th>
<td>{{$spouse_expect->marid_status}}</td>
</tr>
<tr>
<th scope="row">পেশা </th>
<td>{{$spouse_expect->profession}}</td>
</tr>
<tr>
<th scope="row">অর্থনৈতিক অবস্থা </th>
<td>{{$spouse_expect->economic_status}}</td>
</tr>
<tr>
<th scope="row">পারিবারিক অবস্থা</th>
<td>{{$spouse_expect->family_status}}</td>
</tr>
<tr>
<th scope="row">জীবনসঙ্গীর যে বৈশিষ্ট্য বা গুণাবলী আশা করেন </th>
<td>{{$spouse_expect->spouse_expection}}</td>
</tr>
<tr>
<th scope="row">জীবনসংঙ্গীর জেলা যেমনটা চাচ্ছেন?</th>
<td>{{$spouse_expect->character_spouse}}</td>
</tr>
</tbody>
@endif
</table>
</div>
</div>
<div class="card profile-card-content mb-4">
<div class="card-header text-center bg-transparent p-0 m-0 ">
<h5>অন্যান্য তথ্য</h5>
</div>
<div class="card-body m-0 p-0">
<table class="table table-striped table-sm m-0">
    <?php  $other_info =  App\Models\other_info::where(['user_table_id'=>$biodata_id])->first(); ?>
@if( $other_info != null )
<tbody>

<tr>
<th scope="row">পেশা সম্পর্কিত তথ্য</th>
<td>{{$other_info->profession}}</td>
</tr>
<tr>
<th scope="row">বিশেষ কিছু যদি জানাতে চান</th>
<td>{{$other_info->asking}}</td>
</tr>
</tbody>
@endif
</table>
</div>
</div>
<div class="card profile-card-content mb-4">
<div class="card-header text-center bg-transparent p-0 m-0 ">
<h5>কর্তৃপক্ষের জিজ্ঞাসা</h5>
</div>
<div class="card-body m-0 p-0">
<table class="table table-striped table-sm m-0">
    <?php  $ask_authorities =  App\Models\ask_authorities::where(['user_table_id'=>$biodata_id])->first() ?>
@if($ask_authorities != null )
<tbody>

<tr>
<th scope="row">বায়োডাটা জমা দিচ্ছেন তা অভিভাবক জানেন? </th>
<td>@if($ask_authorities->submitted_biodata_allowed) হ্যা @else না  @endif</td>
</tr>
<tr>
<th scope="row">আল্লাহ&#039;র শপথ করে সাক্ষ্য দিন, যে তথ্যগুলো দিচ্ছেন সব সত্য? </th>
<td>@if($ask_authorities->is_true_information) হ্যা @else না  @endif</td>
</tr>
<tr>
<th scope="row">কোনো মিথ্যা তথ্য দিয়ে থাকলে তার দুনিয়াবী ও আখিরাতের দায়ভার ওয়েবসাইট কর্তৃপক্ষ নিবে না। আপনি কি রাজি? </th>
<td>@if($ask_authorities->authority_responsibility) হ্যা @else না  @endif</td>
</tr>
</tbody>
@endif
</table>
</div>
</div>
</div>
<div class="card profile-card-content mb-4">
<div class="card-header text-center bg-transparent p-0 m-0 ">
<h5>যোগাযোগ</h5>
</div>
<div class="card-body d-none">
<div class="contact-biodata text-center">
<p>এই বায়োডাটার অভিভাবকের মোবাইল নাম্বার এবং ইমেইল পেতে নিচের বাটনে ক্লিক করুন।</p>
<button class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">অভিভাবকের সাথে যোগাযোগ</button>
</div>
<br>
 @if (session('message'))
 <div class="alert @if(session('condition') ==true)  alert-success @else alert-danger @endif ">
    {{ session('message') }}
    
</div>
@endif
</div>
</div>
</div>
</div>
<br class="py-5 my-5">
<div class="row py-3">
<div class="col-xl-6">
<div class="social-share">
<div id="social-links">
    <ul><li class="list-inline-item"><i class="fa fa-share-alt" aria-hidden="true"></i> শেয়ার করুন:</li>
        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{URL::to("/show_biodata/$biodata_id")}}" target="_blank" class="social-button " id title rel><span class="fa fa-facebook-square"></span></a></li>
        <li><a href="https://twitter.com/intent/tweet?text=Default+share+text&url={{URL::to("show_biodata/$biodata_id")}}" target="_blank" class="social-button " id title rel><span class="fa fa-twitter"></span></a></li>
    </ul>
</div>
</div>
</div>
<div class="col-xl-6">
<div class="total-views text-right">
<p class="m-0">সর্বমোট ভিউ: {{count(explode(',',$total_visitor))-1}} ভিউস</p>
</div>
</div>
</div>
</div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header ">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
            <!--- Is login -->
            @if(Session()->get('is_login') == true )
            <?php  $user_id = App\Models\Register::where(['mail'=>Session()->get('email')])->get('id')[0]->id; ?>
                <!---Count purchased -->
           @if( App\Models\purchase_package::where(['purchased'=>$biodata_id])->where(['purchaser'=>$user_id])->count() > 0 )
           <table class="table align-middle w-100 table-stripped justify-content-center text-center">
            <thead>
            <tr>
            
            <th scope="col">অভিভাবকের নাম্বার</th>
            <th scope="col">যার নাম্বার লিখেছে </th>
            <th scope="col"> ই-মেইল এড্রেস </th>
            </tr>
            </thead>
            <tbody>
                
                <?php
                 $package =  \DB::select("SELECT communication.parent_number ,communication.user_table_id,communication.who_wrote_number,communication.email_recived_biodata,communication.number_visible_authority, primary_info.user_name AS purchased_name,general_info.biodata_type  FROM purchase_package LEFT JOIN primary_info ON primary_info.user_table_id = purchase_package.purchased LEFT JOIN general_info ON general_info.user_table_id = purchase_package.purchased LEFT JOIN user ON  user.id = purchase_package.purchaser  LEFT JOIN  communication ON  communication.user_table_id =  purchase_package.purchased WHERE purchase_package.purchaser ='$user_id' AND   purchase_package.purchased = '$biodata_id' ");
                $i=0 ?>
                @foreach ( $package as $data )
            
            <tr id="delete_row_3318">
        
            <td>{{$data->parent_number}}</td>
            <td>{{$data->who_wrote_number}}</td>
            <td>{{$data->email_recived_biodata}}</td>
            
            </tr>
            @endforeach
            </tbody>
            </table>
                <!---\\ Else Count purchased -->
            @else
            <!--- package_connection_buy -->
            @if( App\Models\package_connection_buy::where(['purchaser'=>$user_id])->count() > 0 )
            @if ( App\Models\package_connection_buy::where(['purchaser'=>$user_id])->where("purchased","like","%$biodata_id,%")->count() > 0 )
            <table class="table align-middle w-100 table-stripped justify-content-center text-center">
                <thead>
                <tr>
              
                <th scope="col">অভিভাবকের নাম্বার</th>
                <th scope="col">যার নাম্বার লিখেছে </th>
                <th scope="col"> ই-মেইল এড্রেস </th>
                </tr>
                </thead>
                <tbody>
                    
                    <?php
                     $package =  \DB::select("SELECT communication.parent_number ,communication.user_table_id,communication.who_wrote_number,communication.email_recived_biodata,communication.number_visible_authority FROM communication   WHERE    communication.user_table_id = '$biodata_id' ");
                    $i=0 ?>
                    
                    @foreach ( $package as $data )
                
                <tr id="delete_row_3318">
               
                <td>{{$data->parent_number}}</td>
                <td>{{$data->who_wrote_number}}</td>
                <td>{{$data->email_recived_biodata}}</td>
                
                </tr>
                @endforeach
                </tbody>
                </table>
                @else
                <?php $purchased_count = 0; ?>
                @foreach ( App\Models\package_connection_buy::where(['purchaser'=>$user_id])->get() as $data )
                    <?php $purchased_count += count(explode(",", $data->purchased))-1 ?>
                @endforeach
                <?php $total_package =  \DB::select("SELECT  SUM(package) AS total FROM package_connection_buy WHERE purchaser = '$user_id'")   ?>
               <!--- total_package -->
                @if ((int)$total_package[0]->total - $purchased_count > 0)
                <h5>আপনি আরো {{(int)$total_package[0]->total - $purchased_count}}  টি কানেকশন এড করতে পারবেন । </h5>
                <a href="{{URL::to("/package_connection_buy_add?biodata_id=$biodata_id")}}" class="btn btn-success">কানেকশন এড </a>
                 <!--- // else total_package -->
                @else
                <h5>আপনি কি নিশ্চিত যে অভিভাবকের সাথে যোগাযোগ করতে চাচ্ছেন ?</h5>
                <p>দয়া করে আপনি ১০০ টাকা প্রদান করুন </p>
                <a href="/bkash_create/<?php echo $biodata_id ?>" class="btn btn-primary float-right">পেমেন্ট</a>
             <!--- // end total_package -->
                @endif

            @endif
               <!---// package_connection_buy -->
               @else
               <h5>আপনি কি নিশ্চিত যে অভিভাবকের সাথে যোগাযোগ করতে চাচ্ছেন ?</h5>
               <p>দয়া করে আপনি ১০০ টাকা প্রদান করুন </p>
               <a href="/bkash_create/<?php echo $biodata_id ?>" class="btn btn-primary float-right">পেমেন্ট</a>

            @endif
        
            <!---\\ end  Count purchased -->
            @endif
             <!--- // else Is login -->
            @else
            <h5>আপনি কি নিশ্চিত যে অভিভাবকের সাথে যোগাযোগ করতে চাচ্ছেন ?</h5>
            <p>দয়া করে আপনি ১০০ টাকা প্রদান করুন </p>
            <a href="/bkash_create/<?php echo $biodata_id ?>" class="btn btn-primary float-right">পেমেন্ট</a>
           
           @endif
             <!--- // end Is login -->
          

          
        </div>
        
      </div>
    </div>
  </div>

@endsection


@section("Js_link")
<script>


const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
})

async function add_favorite(id){
    const res = await fetch(`${location.origin}/save_favorite?id=${id}`)
    const data = await res.json();
   
    if(res.status == 200){
        if(data.condition ==true){
            Toast.fire({
  icon: 'success',
  title: data.message,
}); 
        }else{
            Toast.fire({
  icon: 'error',
  title: data.message,
});
        }
    }else{
        Toast.fire({
  icon: 'error',
  title: "Something Went Wrong",
});
    }
    
    
}

 async  function handle_copy_link(e){
    try {
      await navigator.clipboard.writeText(e.id);
      Toast.fire({ icon: 'success', title: "Copied Successfully"}); 
    } catch (err) {
        Toast.fire({icon: 'error', title: "Something Went Wrong",});     
         console.error('Failed to copy: ', err);
    }
   }
//    scroll(0, 100)
   
</script>


 
@endsection
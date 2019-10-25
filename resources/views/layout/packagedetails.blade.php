<?php
$single_master = Config::get('app_config.blade.user_master');
?>
@extends($single_master)

@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">

                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">ကလော-ပင်းတယ--အင်းလေး-တောင်ကြီး(၄ညအိပ်/၅ရက်)
                </h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 sidebar">
                <div class="sidebar-wrap ftco-animate">
                    <h3 class="heading mb-4">Find Packages</h3>
                    <form action="#">
                        <div class="fields">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Insert Keywords">
                            </div>
                            <div class="form-group">
                                <input type="text" id="checkin_date" class="form-control" placeholder="Date from">
                            </div>
                            <div class="form-group">
                                <input type="text" id="checkin_date" class="form-control" placeholder="Date to">
                            </div>
                            <div class="form-group">
                                <div class="range-slider">
		              		<span>
										    <input type="number" value="25000" min="0" max="120000"/>	-
										    <input type="number" value="50000" min="0" max="120000"/>
										  </span>
                                    <input value="1000" min="0" max="120000" step="500" type="range"/>
                                    <input value="50000" min="0" max="120000" step="500" type="range"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="sidebar-wrap ftco-animate">
                    <h3 class="heading mb-4">Star Rating</h3>
                    <form method="post" class="star-rating">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="single-slider owl-carousel">
                            <div class="item">
                                <div class="hotel-img" style="background-image: url(images/hotel-2.jpg);"></div>
                            </div>
                            <div class="item">
                                <div class="hotel-img" style="background-image: url(images/hotel-3.jpg);"></div>
                            </div>
                            <div class="item">
                                <div class="hotel-img" style="background-image: url(images/hotel-4.jpg);"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
                        <h1>ကလော-ပင်းတယ--အင်းလေး-တောင်ကြီးတန်ဆောင်တိုင်မီးပုံးပျံပွဲတော်</h1>
                        <h2>သီတင်းကျွတ်ပိတ်ရက်ပြီးသွားပြီဆိုတော့ မကြာမီရောက်လာတော့မယ့် တန်ဆောင်တိုင်ပိတ်ရက်လေးတွေရော ဘယ်တွေသွားပြီးအပန်းဖြေဖို့စဉ်းစားထားလဲ ???</h2>
                        <p>ပို့ဆောင်ပေးမည့်နေရာလေးတွေကတော့</p>
                        <div class="d-md-flex mt-5 mb-5">
                            <ul>
                                <li>တန်ခိုးကြီး ကလောနှီးဘုရား</li>
                                <li>ကလော ဘူတာ</li>
                                <li>ကလောစျေး</li>
                                <li>က​လောView Point</li>
                                <li>ရွှေဥမင် သဘာဝလိုဏ်ဂူတော်ဘုရား</li>
                                <li>ပုန်းတလုတ်ရေကန်</li>
                                <li>ဘဝသံသရာ တံတား</li>
                                <li>မွေတော်ကက္ကူဘုရားများ</li>
                                <li>တောင်ကြီး စူဋ္ဌာမုနိ လောကချမ်းသာဘုရား</li>
                                <li>မြစိမ်းတောင် မဟာမြတ်မုနိ ဘုရား</li>
                                <li>ရွှေဘုန်းပွင့် ဘုရား</li>
                                <li>တောင်ကြီး မြို့မစျေး</li>
                                <li>တောင်ကြီး အဝေရာမီးပုံးပျံကွင်း</li>
                                <li>ဖောင်တော်ဦးဘုရား</li>
                                <li>အလိုတော်ပေါက်ဘုရား</li>
                                <li>ရွှေအင်းတိမ် ဘုရား</li>
                                <li>ငါးဖယ်ချောင်ကျောင်း (ခ)ကြောင်ခုန်ကျောင်း</li>
                                <li>ငွေထည်လုပ်ငန်း</li>
                                <li>ရိုးရာယက္ကန်းရုံလုပ်ငန်း</li>
                                <li>ပဒေါင်းရိုးရာအိမ်</li>
                                <li>မိုင်းသောက်တံတား</li>
                            </ul>
                            <ul class="ml-md-5">
                                <li>Aircon Express Bus</li>
                                <li>ရေသန့်/စနိုးတာဝါ/သွားတိုက်ဆေး/သွားတိုက်တံ</li>
                                <li>တစ်ဆင့်သွား (ကားခ၊လှေခများ)</li>
                                <li>အိမ်သုံးဆေးဝါးများ</li>
                                <li>3star အဆင့်ရှိ ဟိုတယ်တွင် တစ်ညတာ တည်းခိုခွင့်</li>
                                <li>ဝန်ဆောင်မှုပေးနိုင်ရန်နွေးထွေးပျူငှာသောTour Leader</li>
                                <li>မနက် (၁ ကြိမ်)၊ နေ့လည် (၂ ကြိမ်)၊ ညစာ ( ၂ ကြိမ်)</li>
                                <li>အဆာပြေ မုန့် နှင့် အအေး</li>
                            </ul>
                        </div>
                        <p>စထွက်မည့်နေ့</p>
                        <p> 08/11/2019</p>
                        <p>ပြန်ရောက်မည့်နေ့</p>
                        <p> 12/11/2019</p>
                        <p>စျေးနှုန်း</p>
                        <p>140000MMK</p>
                    </div>
            </div> <!-- .col-md-8 -->
        </div>
    </div>
    </div>
</section> <!-- .section -->
@endsection
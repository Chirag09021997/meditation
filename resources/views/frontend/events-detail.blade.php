@extends('frontend.layouts.app')
<link rel="stylesheet" href="{{ asset('assets/css/detail.css') }}">

@section('content')

    <!-- Google Tag Manager (noscript) -->
    <style>
        .h2 {
            line-height: 2 !important;
        }

        .heading_cur1 {
            margin-bottom: 0px !important;
            font-size: 22px;
        }

        .heading_cur2 {
            color: #576182;
            font-size: 18px;
            margin-top: 5px;
        }

        .benefits_block_content img {
            max-width: 65% !important;
        }

        @media (max-width: 768px) {
            .benefits_block_content img {
                max-width: 85% !important;
            }
        }
    </style>
   
    <div id="loader_home"></div>
    <script>
        window.onload = function() {
            var loader = document.getElementById("loader_home");
            loader.style.display = "none";
        };
    </script>
    <section id="hero" class="d-flex align-items-center">
        <div class="container ps-0">
            <div class="row mt-5 md:mt-0">
                <div class="col-lg-6 pt-0 pt-sm-4">
                    <h3 class="heading_7_day">{{$event->duration}} Days</h3>
                    <h1 id='title'>{{$event->name}}</h1>
                    <div class="here2">{{$event->short_description}}</div>
                    <div>
                        <a href="#register_form" class="btn btn-primary reg-btn block">Register Now</a>
                    </div>
                    <div class="people_joined"><span id="user_count">
                            {{$event->total_joining}}</span> people have already joined
                    </div>
                </div>

                <div class="col-lg-6 pt-4 mt-2 main_video pe-0 pe-sm-3">
                    <div class="video_container top_video p-0" id="thumb_0"  style="border-radius: 16px; width:100%;height: 80%; cursor:pointer; text-align: center;">
                        <picture>
                            <source
                                srcset="$event->thumb_image"
                                style="border-radius: 30px;cursor:pointer; text-align: center;"
                                onclick="youtubeVideoPlay(0, 'https://www.youtube.com/embed/_5kRwIQgMS4?si=Aj87YPtEJBFlBGEA')">
                            <source
                                srcset="$event->thumb_image"
                                media="(max-width: 550px)"
                                style="border-radius: 30px; width:100%; cursor:pointer; text-align: center;"
                                onclick="youtubeVideoPlay(0, 'https://www.youtube.com/embed/_5kRwIQgMS4?si=Aj87YPtEJBFlBGEA')">
                            <img loading="eager"
                                src="$event->thumb_image"
                                style="border-radius: 16px; width:100%; cursor:pointer; text-align: center;"
                                onclick="youtubeVideoPlay(0, 'https://www.youtube.com/embed/_5kRwIQgMS4?si=Aj87YPtEJBFlBGEA')" />
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="hook">
        <div class="container ps-0 ps-md-5">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                {!! html_entity_decode($event->question) !!}
                </div>
            </div>
        </div>
    </div>

    <main id="main">
        <div id="included" class="Included">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-9">
                        <div class="grid  date_time_block mt-4">
                            <div class="row">
                                <div class="col-lg-3 col-md-2 gtc col-sm-1 mt-4">
                                    <div class="item date_time">
                                        <img loading="lazy"
                                            src="{{ asset('assets/images/start_date.png') }}"
                                            alt="Appointment">
                                        <div class="stdate">Start Date</div>
                                        <div class="fulldate" id="workshop_date">
                                            {{$event->formatted_date}} <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-2 gtc col-sm-1 mt-4">
                                    <div class="item date_time">
                                        <img loading="lazy"
                                            src="{{ asset('assets/images/time.png') }}"
                                            alt="Time">
                                        <div class="stdate">Timings</div>
                                        <div class="fulldate">
                                            {{$event->formatted_time}}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-2 gtc col-sm-1 mt-4">
                                    <div class="item date_time">
                                        <img loading="lazy"
                                            src="{{ asset('assets/images/language.png') }}"
                                            alt="Global" width="50px" height="50px">
                                        <div class="stdate">Language</div>
                                        <div class="fulldate">{{$event->language}}</div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-2 gtc col-sm-1 mt-4">
                                    <div class="item date_time duaration_time">
                                        <img loading="lazy"
                                            src="{{ asset('assets/images/time.png') }}"
                                            alt="Duration">
                                        <div class="stdate">Duration</div>
                                        <div class="fulldate">
                                        {{$event->duration}} Days
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="col-lg-3">
                        <div class="right_block_container">
                            <div class="right_block register_desktop mt-4" style="">
                                <h2>{{$event->name}}</h2>
                                <span class="date-and-time">
                                    <img loading="lazy"
                                        src="{{ asset('assets/images/date.png') }}"
                                        alt="Date" width="100" height="100" />
                                    {{$event->formatted_date}}
                                </span>
                                <span class="date-and-time d-flex">
                                    <img loading="lazy"
                                        src="{{ asset('assets/images/time.png') }}"
                                        alt="Date" width="100" height="100" />
                                        {{$event->formatted_time}}
                                </span>

                                <span class="date-and-time mb-3">
                                    <img loading="lazy"
                                        src="{{ asset('assets/images/rupee.png') }}"
                                        alt="Date" width="100" height="100" />Contribution: Rs: {{$event->fees}}
                                </span>

                                <a href="#register_form"
                                    class="reg btn-primary block"
                                    id="register_right_button">Register<img loading="lazy" class="btn_arrow"
                                        id="right_register_arrow"
                                        src="{{ asset('assets/images/btn-arrow.png') }}"
                                        alt="Arrow" width="20px" height="14px" style="display: none;" /></a>
                                        @foreach ($event->include as $key => $include)


                                        <span class="date-and-time gray mt-4"><img loading="lazy"
                                        src="{{ asset('assets/images/green-tick.png') }}"
                                        alt="Date" width="100" height="100" />{{ $include['description'] ?? 'No Description' }}</span>
                                @endforeach

                               
                                <div class="people_joined_right">
                                    <img loading="lazy"
                                        src="{{ asset('assets/images/group.png') }}"
                                        alt="Date">
                                    <span >
                                        <strong>
                                        {{$event->total_joining}} </strong> people have already joined</span>
                                </div>
                            </div>
                            <div class="register_mobile" style="display: none;">
                                <div class="register_mobile_heading">
                                    <h3>Heal<br>Yourself Challenge</h3>
                                    <a href="#register_form"
                                        class="btn-get-started scrollto right_register_text">Register</a>
                                </div>
                                <div class="register_mobile_detail">
                                    <span class="date-and-time"><img loading="lazy"
                                            src="{{ asset('assets/images/rupee.png') }}"
                                            alt="Rupee">{{$event->fees}}</span>
                                    <span class="date-and-time register_count_mobile"><img loading="lazy"
                                            src="{{ asset('assets/images/group.png') }}"
                                            alt="Group" width="100" height="100" /><span><strong>
                                                731</strong> registered</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container Included_Block">
                @if($event->event_image != null)
                <div class="row">
                    <div class="col-lg-9 mt-4">
                        <div class="white_block program_block">
                        <img loading="lazy"
                        src="{{$event->event_image}}">
                        </div>
                    </div>
                </div>
                @endif

                @if(count($event->include) > 0)
    <div class="row">
        <div class="col-lg-9">
            <div class="white_block white_block_transparent count_block_whiteblock mt-0">
                <h3 class="brown_heading text-center">What's Included?</h3>
                @foreach ($event->include as $key => $include)
                    <div class="include_details">
                        <div class="row">
                            <div class="col-lg-3">
                                @if(isset($include['image']) && !empty($include['image']))
                                    <img loading="lazy"
                                        src="{{ $include['image'] }}"
                                        alt="{{ $include['title'] ?? 'Image' }}" 
                                        class="mb-0 mb-sm-2" width="180px">
                                @endif
                            </div>
                            <div class="col-lg-9 pr-3">
                                <div class="include_details_bg">
                                    <h4>{{ $include['title'] ?? 'No Title' }}</h4>
                                    <div class="include_text">{{ $include['description'] ?? 'No Description' }} </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                    @if(!empty($event->teaching) && count($event->teaching) > 0)
    <div id="benefits" class="white_block_mobile_adjust white_block text-center">
        <h3 class="brown_heading">Benefits You Will Gain 
            <span class="gray">after following the teachings</span>
        </h3>
        <div class="benefits_block">
            <div class="row">
                @foreach ($event->teaching as $key => $tech)
                    <div class="col-lg-6 col-6">
                        <div class="benefits_block_content pt-4">
                            @if(isset($tech['image']) && !empty($tech['image']))
                                <img srcset="{{ $tech['image'] }}"
                                    sizes="(max-width: 600px) 480px, 800px"
                                    src="{{ $tech['image'] }}">
                            @endif
                        </div>
                        <div class="benefits_desc pt-2">
                            <span><b>{{ $tech['title'] ?? 'No Title' }}</b></span>
                            <span class="benefits_desc_extra">
                                <br>{{ $tech['description'] ?? 'No Description' }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pt-5">
                <a href="#" class="btn-get-started scrollto register-now-track-btn"
                   id="new_register_now_btn">Register Now</a>
            </div>
        </div>
    </div>
@endif

                    @if(($event->curriculum) != null)

                        <div id="curriculum" class="white_block text-center curriculum mt-0 mb-sm-0">
                            <h3 class="brown_heading">Curriculum For <br>The {{$event->duration}} Days</h3>
                            <div class="content">
                                <div class="content-item active">
                                    <div class="grid gtc curr-sm-2 curr-md-2 curr-lg-2 curr_grid" >
                                       <div style="text-align:center">
                                       {!! html_entity_decode($event->curriculum) !!}

                                       </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($team->count() > 0)
                        <div id="about" class="white_block_no_padding about mt-5">
                            <div id="about-1" class="white_block about-1 text-center">
                                <h4 class="brown_heading text-center py-3">About the Hosts</h4>
                                <div class="row">
                                    @foreach($team as $team)
                                    <div class="col-lg-6 pe-3 pe-sm-3 mt-sm-0">
                                        <img loading="lazy" class="about_img w-100"
                                            src="{{$team->profile}}"
                                            alt="{{$team->name}}" onerror="this.onerror=null;this.src='{{ asset('assets/images/event_loading.png') }}';" >
                                        <h3 class="brown_heading mt-0 mt-sm-4 mb-3" id="{{$team->name}}"
                                            style="font-size: 30px !important;">{{$team->name}}</h3>
                                        <p class="aboput_text">
                                            {!! html_entity_decode($team->about) !!}
                                        </p>
                                    </div>
                                   @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                        <div id="register_form" class="register_form text-center">
                            <br /><br />
                            <h3 class="register_tag">Register Now</h3>
                            
                            <form style="display: none;" id="rxp_frm">
                                <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                                <input type="hidden" name="razorpay_signature" id="razorpay_signature">
                                <input type="hidden" name="razorpay_order_id" id="razorpay_order_id">
                            </form>
                            <div class="form_block">
                                <form id="reg_form" action="{{ route('customer.event.join') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="event_id" id="event_id"
                                        value="{{ $event->id }}">
                                    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                                    <input type="hidden" name="razorpay_signature" id="razorpay_signature">
                                    <input type="hidden" name="utm_source" id="utm_source" value="web">
                                    <input type="hidden" name="utm_medium" id="utm_medium" value="upw">
                                    <input type="hidden" name="utm_campaign" id="utm_campaign" value="">
                                    <input type="hidden" name="utm_term" id="utm_term" value="">
                                    <input type="hidden" name="utm_content" id="utm_content" value="">
                                    <input type="hidden" name="http_refer_id" id="http_refer_id" value="">
                                    <input type="hidden" class="form-control" placeholder="Enter"
                                        name="register-amount" id="amount" value="99000">
                                    <!-- register-amount in paise -->
                                    <input type="hidden" name="country" id="country" value="">

                                    <div class="row">
                                        <div class="col-sm-12 col-lg-6 mb-3 mb-sm-0">
                                            <label class="d-none">Name</label>
                                            <input type="text" class="form-control" placeholder="Name*"
       name="name" required id="name" autocomplete="off"
       value="{{ old('name', Auth::guard('customer')->check() ? Auth::guard('customer')->user()->name : '') }}">
                                            <div id="name_error"></div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3 mb-sm-0">
                                            <label class="d-none">Email</label>
                                            <input type="email" class="form-control" placeholder="Email*"
       name="email" required id="email" autocomplete="off"
       value="{{ old('email', Auth::guard('customer')->check() ? Auth::guard('customer')->user()->email : '') }}">

                                            <div id="email_error"></div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-sm-12 col-lg-6 mb-4 mb-sm-3 mb-md-3 d-flex">
                                            <label class="d-none">Phone Number</label>
                                            <select name="country_code" id="country_code" class="custom-autocomplete">
                                                <option value="+376">AD +376</option>
                                                <option value="+971">AE +971</option>
                                                <option value="+93">AF +93</option>
                                                <option value="+1268">AG +1268</option>
                                                <option value="+1264">AI +1264</option>
                                                <option value="+355">AL +355</option>
                                                <option value="+374">AM +374</option>
                                                <option value="+599">AN +599</option>
                                                <option value="+244">AO +244</option>
                                                <option value="+672">AQ +672</option>
                                                <option value="+54">AR +54</option>
                                                <option value="+1684">AS +1684</option>
                                                <option value="+43">AT +43</option>
                                                <option value="+61">AU +61</option>
                                                <option value="+297">AW +297</option>
                                                <option value="+358">AX +358</option>
                                                <option value="+994">AZ +994</option>
                                                <option value="+387">BA +387</option>
                                                <option value="+1246">BB +1246</option>
                                                <option value="+880">BD +880</option>
                                                <option value="+32">BE +32</option>
                                                <option value="+226">BF +226</option>
                                                <option value="+359">BG +359</option>
                                                <option value="+973">BH +973</option>
                                                <option value="+257">BI +257</option>
                                                <option value="+229">BJ +229</option>
                                                <option value="+590">BL +590</option>
                                                <option value="+1441">BM +1441</option>
                                                <option value="+673">BN +673</option>
                                                <option value="+591">BO +591</option>
                                                <option value="+55">BR +55</option>
                                                <option value="+1242">BS +1242</option>
                                                <option value="+975">BT +975</option>
                                                <option value="+267">BW +267</option>
                                                <option value="+375">BY +375</option>
                                                <option value="+501">BZ +501</option>
                                                <option value="+1">CA +1</option>
                                                <option value="+61">CC +61</option>
                                                <option value="+243">CD +243</option>
                                                <option value="+236">CF +236</option>
                                                <option value="+242">CG +242</option>
                                                <option value="+41">CH +41</option>
                                                <option value="+225">CI +225</option>
                                                <option value="+682">CK +682</option>
                                                <option value="+56">CL +56</option>
                                                <option value="+237">CM +237</option>
                                                <option value="+86">CN +86</option>
                                                <option value="+57">CO +57</option>
                                                <option value="+506">CR +506</option>
                                                <option value="+53">CU +53</option>
                                                <option value="+238">CV +238</option>
                                                <option value="+61">CX +61</option>
                                                <option value="+357">CY +357</option>
                                                <option value="+420">CZ +420</option>
                                                <option value="+49">DE +49</option>
                                                <option value="+253">DJ +253</option>
                                                <option value="+45">DK +45</option>
                                                <option value="+1767">DM +1767</option>
                                                <option value="+1849">DO +1849</option>
                                                <option value="+213">DZ +213</option>
                                                <option value="+593">EC +593</option>
                                                <option value="+372">EE +372</option>
                                                <option value="+20">EG +20</option>
                                                <option value="+291">ER +291</option>
                                                <option value="+34">ES +34</option>
                                                <option value="+251">ET +251</option>
                                                <option value="+358">FI +358</option>
                                                <option value="+679">FJ +679</option>
                                                <option value="+500">FK +500</option>
                                                <option value="+691">FM +691</option>
                                                <option value="+298">FO +298</option>
                                                <option value="+33">FR +33</option>
                                                <option value="+241">GA +241</option>
                                                <option value="+44">GB +44</option>
                                                <option value="+1473">GD +1473</option>
                                                <option value="+995">GE +995</option>
                                                <option value="+594">GF +594</option>
                                                <option value="+44">GG +44</option>
                                                <option value="+233">GH +233</option>
                                                <option value="+350">GI +350</option>
                                                <option value="+299">GL +299</option>
                                                <option value="+220">GM +220</option>
                                                <option value="+224">GN +224</option>
                                                <option value="+590">GP +590</option>
                                                <option value="+240">GQ +240</option>
                                                <option value="+30">GR +30</option>
                                                <option value="+500">GS +500</option>
                                                <option value="+502">GT +502</option>
                                                <option value="+1671">GU +1671</option>
                                                <option value="+245">GW +245</option>
                                                <option value="+592">GY +592</option>
                                                <option value="+852">HK +852</option>
                                                <option value="+504">HN +504</option>
                                                <option value="+385">HR +385</option>
                                                <option value="+509">HT +509</option>
                                                <option value="+36">HU +36</option>
                                                <option value="+62">ID +62</option>
                                                <option value="+353">IE +353</option>
                                                <option value="+972">IL +972</option>
                                                <option value="+44">IM +44</option>
                                                <option value="+91" selected>IN +91</option>
                                                <option value="+246">IO +246</option>
                                                <option value="+964">IQ +964</option>
                                                <option value="+98">IR +98</option>
                                                <option value="+354">IS +354</option>
                                                <option value="+39">IT +39</option>
                                                <option value="+44">JE +44</option>
                                                <option value="+1876">JM +1876</option>
                                                <option value="+962">JO +962</option>
                                                <option value="+81">JP +81</option>
                                                <option value="+254">KE +254</option>
                                                <option value="+996">KG +996</option>
                                                <option value="+855">KH +855</option>
                                                <option value="+686">KI +686</option>
                                                <option value="+269">KM +269</option>
                                                <option value="+1869">KN +1869</option>
                                                <option value="+850">KP +850</option>
                                                <option value="+82">KR +82</option>
                                                <option value="+965">KW +965</option>
                                                <option value="+ 345">KY + 345</option>
                                                <option value="+77">KZ +77</option>
                                                <option value="+856">LA +856</option>
                                                <option value="+961">LB +961</option>
                                                <option value="+1758">LC +1758</option>
                                                <option value="+423">LI +423</option>
                                                <option value="+94">LK +94</option>
                                                <option value="+231">LR +231</option>
                                                <option value="+266">LS +266</option>
                                                <option value="+370">LT +370</option>
                                                <option value="+352">LU +352</option>
                                                <option value="+371">LV +371</option>
                                                <option value="+218">LY +218</option>
                                                <option value="+212">MA +212</option>
                                                <option value="+377">MC +377</option>
                                                <option value="+373">MD +373</option>
                                                <option value="+382">ME +382</option>
                                                <option value="+590">MF +590</option>
                                                <option value="+261">MG +261</option>
                                                <option value="+692">MH +692</option>
                                                <option value="+389">MK +389</option>
                                                <option value="+223">ML +223</option>
                                                <option value="+95">MM +95</option>
                                                <option value="+976">MN +976</option>
                                                <option value="+853">MO +853</option>
                                                <option value="+1670">MP +1670</option>
                                                <option value="+596">MQ +596</option>
                                                <option value="+222">MR +222</option>
                                                <option value="+1664">MS +1664</option>
                                                <option value="+356">MT +356</option>
                                                <option value="+230">MU +230</option>
                                                <option value="+960">MV +960</option>
                                                <option value="+265">MW +265</option>
                                                <option value="+52">MX +52</option>
                                                <option value="+60">MY +60</option>
                                                <option value="+258">MZ +258</option>
                                                <option value="+264">NA +264</option>
                                                <option value="+687">NC +687</option>
                                                <option value="+227">NE +227</option>
                                                <option value="+672">NF +672</option>
                                                <option value="+234">NG +234</option>
                                                <option value="+505">NI +505</option>
                                                <option value="+31">NL +31</option>
                                                <option value="+47">NO +47</option>
                                                <option value="+977">NP +977</option>
                                                <option value="+674">NR +674</option>
                                                <option value="+683">NU +683</option>
                                                <option value="+64">NZ +64</option>
                                                <option value="+968">OM +968</option>
                                                <option value="+507">PA +507</option>
                                                <option value="+51">PE +51</option>
                                                <option value="+689">PF +689</option>
                                                <option value="+675">PG +675</option>
                                                <option value="+63">PH +63</option>
                                                <option value="+92">PK +92</option>
                                                <option value="+48">PL +48</option>
                                                <option value="+508">PM +508</option>
                                                <option value="+872">PN +872</option>
                                                <option value="+1939">PR +1939</option>
                                                <option value="+970">PS +970</option>
                                                <option value="+351">PT +351</option>
                                                <option value="+680">PW +680</option>
                                                <option value="+595">PY +595</option>
                                                <option value="+974">QA +974</option>
                                                <option value="+262">RE +262</option>
                                                <option value="+40">RO +40</option>
                                                <option value="+381">RS +381</option>
                                                <option value="+7">RU +7</option>
                                                <option value="+250">RW +250</option>
                                                <option value="+966">SA +966</option>
                                                <option value="+677">SB +677</option>
                                                <option value="+248">SC +248</option>
                                                <option value="+249">SD +249</option>
                                                <option value="+46">SE +46</option>
                                                <option value="+65">SG +65</option>
                                                <option value="+290">SH +290</option>
                                                <option value="+386">SI +386</option>
                                                <option value="+47">SJ +47</option>
                                                <option value="+421">SK +421</option>
                                                <option value="+232">SL +232</option>
                                                <option value="+378">SM +378</option>
                                                <option value="+221">SN +221</option>
                                                <option value="+252">SO +252</option>
                                                <option value="+597">SR +597</option>
                                                <option value="+211">SS +211</option>
                                                <option value="+239">ST +239</option>
                                                <option value="+503">SV +503</option>
                                                <option value="+963">SY +963</option>
                                                <option value="+268">SZ +268</option>
                                                <option value="+1649">TC +1649</option>
                                                <option value="+235">TD +235</option>
                                                <option value="+228">TG +228</option>
                                                <option value="+66">TH +66</option>
                                                <option value="+992">TJ +992</option>
                                                <option value="+690">TK +690</option>
                                                <option value="+670">TL +670</option>
                                                <option value="+993">TM +993</option>
                                                <option value="+216">TN +216</option>
                                                <option value="+676">TO +676</option>
                                                <option value="+90">TR +90</option>
                                                <option value="+1868">TT +1868</option>
                                                <option value="+688">TV +688</option>
                                                <option value="+886">TW +886</option>
                                                <option value="+255">TZ +255</option>
                                                <option value="+380">UA +380</option>
                                                <option value="+256">UG +256</option>
                                                <option value="+1">US +1</option>
                                                <option value="+598">UY +598</option>
                                                <option value="+998">UZ +998</option>
                                                <option value="+379">VA +379</option>
                                                <option value="+1784">VC +1784</option>
                                                <option value="+58">VE +58</option>
                                                <option value="+1284">VG +1284</option>
                                                <option value="+1340">VI +1340</option>
                                                <option value="+84">VN +84</option>
                                                <option value="+678">VU +678</option>
                                                <option value="+681">WF +681</option>
                                                <option value="+685">WS +685</option>
                                                <option value="+967">YE +967</option>
                                                <option value="+262">YT +262</option>
                                                <option value="+27">ZA +27</option>
                                                <option value="+260">ZM +260</option>
                                                <option value="+263">ZW +263</option>
                                            </select>
                                            <div class="d-block w-100">
                                            <input type="text" class="form-control phone"
       placeholder="Whatsapp Number*" name="mobile" required
       id="phone" autocomplete="off"
       value="{{ old('mobile', Auth::guard('customer')->check() ? Auth::guard('customer')->user()->mobile_no : '') }}">
                                                <div class="mob_code d-none">(People outside India, please add your ISD
                                                    code)</div>
                                            </div>
                                            <div id="mob_error"></div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3 mb-sm-0 city_div">
                                            <label class="d-none">City</label>
                                            <input type="text" class="form-control" placeholder="Address*"
                                                name="address" required id="address" autocomplete="off"
                                                value="">
                                            <div id="address_error"></div>
                                        </div>
                                    </div>
                                    <div class="row my-4">
                                        <div class="col-sm-12 col-lg-6 mb-3 mb-sm-0">
                                            <label class="d-none">Total Person</label>
                                            <input type="text" class="form-control" placeholder="Person*"
                                                name="person" required id="person" autocomplete="off" min="1"
                                                value="" onkeyup="TotalPrice({{$event->fees}})">
                                            <div id="person_error"></div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3 mb-sm-0">
                                            <div class="d-flex mt-2">
                                                <label >Total:</label>
                                                <span id="totalPrice" style="color:white"></span>
                                            </div>
                                          
                                        </div>
                                    </div>

                                  
                                    <button type="submit" class="btn-get-started" style="color:#28579b;">Pay Now<img loading="lazy"
                                            class="btn_arrow"
                                            src="{{ asset('assets/images/brown.png') }}"
                                            alt="arrow" width="20" height="17" /></button>
                                    <div class="contribution mobile_display_none" id="fees">Contribution: ₹ {{$event->fees}}</div>
                                    <div id="success_msg"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--Right Block-->

                </div>
            </div>
        </div>
    </main>
   
    <script>
        function youtubeVideoPlay(id, link) {
            if (id == 0) {
                $('#thumb_' + id).html('<iframe loading="lazy" width="100%" id="mobile-banner-videos" src="' + link +
                    '?autoplay=1&playsinline=1" title="YouTube video player" frameborder="0" style="border-radius: 20px; width:100%;height: 100%;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
                );
            } else {
                $('#thumb_' + id).html('<iframe loading="lazy" width="100%" src="' + link +
                    '?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
                );
            }
            return;
        }

        function getYouTubeVideoId(url) {
            var query = url.split('?')[1];
            var params = new URLSearchParams(query);
            return params.get('v');
        }

        function TotalPrice(fees)
        {
            var person = document.getElementById("person").value;//by id
            document.getElementById("totalPrice").innerText = fees*person;
            // console.log(fees*person);
        }

    </script>
@endsection
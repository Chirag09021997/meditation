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
    <style>
        @media screen and (min-width: 1024px) {
            .home #loader_home {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: #f2efea;
                background-image: url('https://heal-satvicmovement-org.b-cdn.net/resources/img/loader.png');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: 0 0;
                z-index: 9999;
            }
        }

        @media screen and (max-width: 767px) {
            .home #loader_home {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: #f2efea;
                background-image: url('https://heal-satvicmovement-org.b-cdn.net/resources/img/mob-loader.png');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: 0 0;
                z-index: 9999;
            }
        }

        @media screen and (min-width: 1024px) {
            .thankyou #loader_home {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: #f2efea;
                background-image: url('https://heal-satvicmovement-org.b-cdn.net/resources/img/thankyou_loader_desktop.png');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: 0 0;
                z-index: 9999;
            }
        }

        @media screen and (max-width: 767px) {
            .thankyou #loader_home {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: #f2efea;
                background-image: url('https://heal-satvicmovement-org.b-cdn.net/resources/img/thankyou_loader_mobile.png');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: 0 0;
                z-index: 9999;
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
            <div class="row">
                <div class="col-lg-6 pt-0 pt-sm-4">
                    <h3 class="heading_7_day">7 Day</h3>
                    <h1 id='title'>Heal Yourself <br/>Challenge
                    </h1>
                    <div class="here2">9 Steps to Reverse Your Disease and Thrive</div>
                    <div>
                        <button class="btn btn-primary reg-btn">Register Now</button>
                    </div>
                    <div class="people_joined"><span id="user_count">
							731</span> people have already joined
                    </div>
                </div>
                <div class="col-lg-6 pt-4 mt-2 main_video pe-0 pe-sm-3 ">
                    <div class="video_container top_video p-0" id="thumb_0">
                        <picture>
                            <source srcset="https://heal-satvicmovement-org.b-cdn.net/resources/img/Thumbnail/Thumbnail_3.webp" style="border-radius: 30px;cursor:pointer; text-align: center;" onclick="youtubeVideoPlay(0, 'https://www.youtube.com/embed/_5kRwIQgMS4?si=Aj87YPtEJBFlBGEA')">
                            <source srcset="https://heal-satvicmovement-org.b-cdn.net/resources/img/Thumbnail/Thumbnail_3.webp" media="(max-width: 400px)" style="border-radius: 30px; width:100%; cursor:pointer; text-align: center;" onclick="youtubeVideoPlay(0, 'https://www.youtube.com/embed/_5kRwIQgMS4?si=Aj87YPtEJBFlBGEA')">
                            <img loading="eager" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/Thumbnail/Thumbnail_3.webp" style="border-radius: 16px; width:100%; cursor:pointer; text-align: center;" onclick="youtubeVideoPlay(0, 'https://www.youtube.com/embed/_5kRwIQgMS4?si=Aj87YPtEJBFlBGEA')"
                            />
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
                    <div class="hook_details d-flex pb-1">
                        <img src="{{ asset('assets/images/green_circle_tick.png') }}" width="32px" height="35px">
                        <div class="hook_text">Tired of popping <b>pill after pill</b> for your health problem?</div>
                    </div>
                    <div class="hook_details d-flex py-1 mt-2">
                        <img src="{{ asset('assets/images/green_circle_tick.png') }}" width="32px" height="35px">
                        <div class="hook_text">Exhausted from the <strong>countless doctor visits</strong>?</div>
                    </div>
                    <div class="hook_details d-flex py-1 mt-2">
                        <img src="{{ asset('assets/images/green_circle_tick.png') }}" width="32px" height="35px">
                        <div class="hook_text">Seeking a permanent, <strong>long lasting solution</strong> to healing?</div>
                    </div>
                    <div class="hook_details hook_details_final pt-2 ps-1 mt-3">
                        <div class="hook_text_final"><strong>If you answered "YES" to any of the above questions, then this program is for you.</strong></div>
                    </div>
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
                                        <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/Icons/appointment_1.webp" alt="Appointment">
                                        <div class="stdate">Start Date</div>
                                        <div class="fulldate" id="workshop_date">
                                            20th Jan, 2025 <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-2 gtc col-sm-1 mt-4">
                                    <div class="item date_time">
                                        <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/Icons/time_1.webp" alt="Time">
                                        <div class="stdate">Timings</div>
                                        <div class="fulldate">
                                            6 to 07:15 AM (IST) or
                                            <br> 8 to 09:15 AM (IST) or
                                            <br> 4 to 05:15 PM (IST) or
                                            <br> 8 to 09:15 PM (IST)
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-2 gtc col-sm-1 mt-4">
                                    <div class="item date_time">
                                        <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/Icons/global_1.webp" alt="Global" width="50px" height="50px">
                                        <div class="stdate">Language</div>
                                        <div class="fulldate">English</div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 col-md-2 gtc col-sm-1 mt-4">
                                    <div class="item date_time duaration_time">
                                        <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/Icons/Duration_1.webp" alt="Duration">
                                        <div class="stdate">Duration</div>
                                        <div class="fulldate">
                                            7 Days <br>
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
                            <h2>Heal <br/> Yourself Challenge</h2>
                            <span class="date-and-time">
                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/date.png" alt="Date" width="100" height="100" />
                                20th Jan - 26th Jan 						
                            </span>
                            <span class="date-and-time d-flex">
                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/time-blue.png" alt="Date" width="100" height="100" />
																		6 to 07:15 AM (IST)
																							or<br>
																															8 to 09:15 AM (IST)
																							or<br>
																															4 to 05:15 PM (IST)
																							or<br>
																															8 to 09:15 PM (IST)
							</span>

                            <span class="date-and-time mb-3">
                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/rupee.png" alt="Date" width="100" height="100" />Contribution: Rs: 990 - 2990 
                            </span>

                            <a href="#register_form" class="reg btn-get-started scrollto right_register register-now-track-btn" id="register_right_button">Register<img loading="lazy" class="btn_arrow" id="right_register_arrow" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/btn-arrow.png" alt="Arrow" width="20px" height="14px" style="display: none;" /></a>
                            <span class="date-and-time gray mt-4"><img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/green-tick.png" alt="Date" width="100" height="100" />Heal chronic diseases </span>
                            <span class="date-and-time gray"><img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/green-tick.png" alt="Date" width="100" height="100" />Reduce dependency on pills</span>
                            <span class="date-and-time gray"><img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/green-tick.png" alt="Date" width="100" height="100" />Strengthen your immunity</span>
                            <div class="people_joined_right">
                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/group.png" alt="Date">
                                <span>
									<strong>
										731									</strong> people have already joined</span>
                            </div>
                        </div>
                        <div class="register_mobile" style="display: none;">
                            <div class="register_mobile_heading">
                                <h3>Heal<br>Yourself Challenge</h3>
                                <a href="#register_form" class="btn-get-started scrollto right_register_text">Register</a>
                            </div>
                            <div class="register_mobile_detail">
                                <span class="date-and-time"><img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/rupee.png" alt="Rupee">Contribution: Rs: 990 - 2990</span>
                                <span class="date-and-time register_count_mobile"><img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/group.png" alt="Group" width="100" height="100" /><span><strong>
											731</strong> registered</span></span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="container Included_Block">
                <div class="row">
                    <div class="col-lg-9 mt-4">
                        <div class="white_block program_block">
                            <div class="program_block_header_img d-flex justify-content-center">
                                <img loading="lazy" src="{{ asset('assets/images/green_circle_tick.png') }}" width="100px">
                            </div>
                            <h3 class="brown_heading program_block_mobile_header">This program is designed to help you overcome</h3>
                            <div class="program_block_body">
                                <div class="row">
                                    <div class="col-6 p-0">
                                        <div>
                                            <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/program_for/mobile/1.webp">
                                        </div>
                                    </div>
                                    <div class="col-6 p-0">
                                        <div>
                                            <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/program_for/mobile/2.webp">
                                        </div>
                                    </div>
                                    <div class="col-6 p-0">
                                        <div>
                                            <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/program_for/mobile/3.webp">
                                        </div>
                                    </div>
                                    <div class="col-6 p-0">
                                        <div>
                                            <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/program_for/mobile/4.webp">
                                        </div>
                                    </div>
                                    <div class="col-6 p-0">
                                        <div>
                                            <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/program_for/mobile/5.webp">
                                        </div>
                                    </div>
                                    <div class="col-6 p-0">
                                        <div>
                                            <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/program_for/mobile/6.webp">
                                        </div>
                                    </div>
                                    <div class="col-6 p-0">
                                        <div>
                                            <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/program_for/mobile/7.webp">
                                        </div>
                                    </div>
                                    <div class="col-6 p-0">
                                        <div>
                                            <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/program_for/mobile/8.webp">
                                        </div>
                                    </div>
                                    <div class="col-6 p-0">
                                        <div>
                                            <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/program_for/mobile/9.webp">
                                        </div>
                                    </div>
                                    <div class="col-6 p-0">
                                        <div>
                                            <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/program_for/mobile/10.webp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-9">
                        <div class="white_block white_block_transparent count_block_whiteblock mt-0">
                            <h3 class="brown_heading text-center">What's Included?</h3>
                            <div class="include_details">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/whats/11.webp" alt="Daily Morning Online Session" class="mb-0 mb-sm-2" width="180px">
                                    </div>
                                    <div class="col-lg-9 pr-3">
                                        <div class="include_details_bg">
                                            <h4>Daily Morning Online Session</h4>
                                            <div class="include_text">An engaging 1 hour session every morning, wherein you will understand the science of natural healing in a way that you can immediately implement in your life. The sessions will be led by Mrs Subah Saraf, the founder
                                                of Satvic Movement. </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="include_details">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/whats/12.webp" alt="Understand the Root Cause of Your Disease" class="mb-0 mb-sm-2" width="180px">
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="include_details_bg">
                                            <h4>Understand the Root Cause of Your Disease</h4>
                                            <div class="include_text">Fed up with pill after pill? Ever wondered why you're facing health issues in the first place? The truth is, nobody really tells you the underlying cause. But we're here to change that. <a class="show_hide" style="color: #8063a0!important;"
                                                    data-content="toggle-text">Read More</a>
                                                <div class="testinomial-content-more" id="more-data">In this challenge, you'll uncover the real culprit behind your health problems.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="include_details">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/whats/13.webp" alt="9 Step Plan to Reverse Your Disease Naturally" class="mb-0 mb-sm-2" width="180px">
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="include_details_bg">
                                            <h4>9 Step Plan to Reverse Your Disease Naturally</h4>
                                            <div class="include_text">By the end of the 7 days, you will have a practical 9-step healing plan which you have to follow for the next 3 months. It will involve simple food and lifestyle changes. No need to spend money on medicines, pills,
                                                fancy herbs or expensive treatments.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="include_details">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/whats/14.webp" alt="Strong Healing Community To Support You" class="mb-0 mb-sm-2" width="180px">
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="include_details_bg">
                                        <h4>Strong Healing Community To Support You</h4>
                                        <div class="include_text">You'll have access to a supportive community who is following the healing plan with you. You'll never feel alone in your journey as you can share your experiences and receive encouragement from them.</div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div id="benefits" class="white_block_mobile_adjust white_block text-center">
                            <h3 class="brown_heading">Benefits You Will Gain <span class="gray">after following the teachings</span></h3>
                            <div class="benefits_block">
                                <div class="row">
                                    <div class="col-lg-6 col-6">
                                        <div class="benefits_block_content pt-4">
                                            <img srcset="https://heal-satvicmovement-org.b-cdn.net/resources/img/benifits/11.webp 480w,https://heal-satvicmovement-org.b-cdn.net/resources/img/benifits/11.webp 800w" sizes="(max-width: 600px) 480px, 800px" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/benifits/11.webp">
                                        </div>
                                        <div class="benefits_desc pt-2"><span><b>Reach your ideal weight</b></span><span class="benefits_desc_extra"><br>transform your physique.</span></div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <div class="benefits_block_content pt-4">
                                            <img srcset="https://heal-satvicmovement-org.b-cdn.net/resources/img/benifits/12.webp 480w,https://heal-satvicmovement-org.b-cdn.net/resources/img/benifits/12.webp 800w" sizes="(max-width: 600px) 480px, 800px" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/benifits/12.webp">
                                        </div>
                                        <div class="benefits_desc pt-2"><span><b>Save money on expensive pills</b></span><span class="benefits_desc_extra"><br>heal naturally through lifestyle changes</span></div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <div class="benefits_block_content pt-5">
                                            <img srcset="https://heal-satvicmovement-org.b-cdn.net/resources/img/benifits/13.webp 480w,https://heal-satvicmovement-org.b-cdn.net/resources/img/benifits/13.webp 800w" sizes="(max-width: 600px) 480px, 800px" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/benifits/13.webp">
                                        </div>
                                        <div class="benefits_desc pt-2"><span><b>Gain more energy in life</b></span><span class="benefits_desc_extra"><br>accomplish more in less time</span></div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <div class="benefits_block_content pt-5">
                                            <img srcset="https://heal-satvicmovement-org.b-cdn.net/resources/img/benifits/14.webp 480w,https://heal-satvicmovement-org.b-cdn.net/resources/img/benifits/14.webp 800w" sizes="(max-width: 600px) 480px, 800px" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/benifits/14.webp">
                                        </div>
                                        <div class="benefits_desc pt-2"><span><b>Strengthen your immunity</b></span><span class="benefits_desc_extra"><br>protect yourself from future illnesses</span></div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <div class="benefits_block_content pt-5">
                                            <img srcset="https://heal-satvicmovement-org.b-cdn.net/resources/img/benifits/15.webp 480w,https://heal-satvicmovement-org.b-cdn.net/resources/img/benifits/15.webp 800w" sizes="(max-width: 600px) 480px, 800px" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/benifits/15.webp">
                                        </div>
                                        <div class="benefits_desc pt-2"><span><b>Uncomplicate health</b></span><span class="benefits_desc_extra"><br>understand how simple healing is</span></div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <div class="benefits_block_content pt-5">
                                            <img srcset="https://heal-satvicmovement-org.b-cdn.net/resources/img/benifits/16.webp 480w,https://heal-satvicmovement-org.b-cdn.net/resources/img/benifits/16.webp 800w" sizes="(max-width: 600px) 480px, 800px" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/benifits/16.webp">
                                        </div>
                                        <div class="benefits_desc pt-2"><span><b>Break free from dependency</b></span><span class="benefits_desc_extra"><br>Take your health back in your own hands</span></div>
                                    </div>
                                </div>
                                <div class="pt-5">
                                    <a href="https://heal.satvicmovement.org/?utm_source=web&utm_medium=upw#register_form" class="btn-get-started scrollto register-now-track-btn" id="new_register_now_btn">Register Now</a>
                                </div>
                            </div>
                        </div>

                        <div id="curriculum" class="white_block text-center curriculum mt-0 mb-sm-0">
                            <h3 class="brown_heading">Curriculum For <br>The 7 Days</h3>
                            <div class="content">
                                <div class="content-item active">
                                    <div class="grid gtc curr-sm-2 curr-md-2 curr-lg-2 curr_grid">
                                        <div class="row">
                                            <div class="col-3 curr_section">
                                                <div class="">
                                                    <div class="heading_cur1">Day 1</div>
                                                    <div class="heading_cur2">Mon</div>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="heading_cur3 curr_section">
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div>Understand the <b>root cause</b> of disease</div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div>Know the <b>3 basic laws</b> of Satvic healing</div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div>Meet the <b>best healer</b> in the world</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-3 curr_section">
                                                <div class="">
                                                    <div class="heading_cur1">Day 2</div>
                                                    <div class="heading_cur2">Tue</div>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="heading_cur3 curr_section">
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div>Uncover the importance of <b>detoxification</b></div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div> Optimal <b>fasting</b> methods for healing</div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div> Best morning <b>juices</b></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-3 curr_section">
                                                <div class="">
                                                    <div class="heading_cur1">Day 3</div>
                                                    <div class="heading_cur2">Wed</div>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="heading_cur3 curr_section">
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div> Every <b>disease</b> begins in the colon</div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div> Enemas: Powerful way to <b>cleanse</b></div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div> Cold packs: Improve <b>blood circulation</b></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-3 curr_section">
                                                <div class="">
                                                    <div class="heading_cur1">Day 4</div>
                                                    <div class="heading_cur2">Thur</div>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="heading_cur3 curr_section">
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div> How to use <b>food as medicine?</b></div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div> What is the perfect healing <b>breakfast?</b></div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div> Tweak <b>lunch</b> to help in disease reversal</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-3 curr_section">
                                                <div class="">
                                                    <div class="heading_cur1">Day 5</div>
                                                    <div class="heading_cur2">Fri</div>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="heading_cur3 curr_section">
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div> Two mistakes to avoid in your <b>mid-meal</b></div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div> The best <b>healing dinner</b> options</div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div> Creative <b>meal planning</b> activity</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-3 curr_section">
                                                <div class="">
                                                    <div class="heading_cur1">Day 6</div>
                                                    <div class="heading_cur2">Sat</div>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="heading_cur3 curr_section">
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div> Impact of <b>meat, fish and eggs </b></div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div> <b>Milk</b> - The truth nobody is telling</div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div> <b>Protein</b> and <b>calcium</b> needs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-3 curr_section">
                                                <div class="">
                                                    <div class="heading_cur1">Day 7</div>
                                                    <div class="heading_cur2">Sun</div>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="heading_cur3 curr_section">
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div> How to go about <b>your medication?</b></div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div> Understanding the <b>healing timeline</b></div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div> - </div>&nbsp;
                                                        <div> <b>Socialising</b>, going out and cravings</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="people" class="white_block people">
                            <h3 class="brown_heading mb-4 text-center">People are saying</h3>
                            <div class="row">
                                <div class="col-sn-12 col-nd-5 col-lg-4">
                                    <div class="highlight_review_mobile">
                                        <div class="highlight_review text-center mt-0">
                                            <div class="review">Highlighted review</div>
                                            <img loading="lazy" class="review_img" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/testimonial/Damini.webp" alt="People">
                                            <div class="review_name">Dr Damini Singh</div>
                                            <div class="review_location">25, Noida</div>
                                            <div class="d-none">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                            </div>
                                            <div class="review_detail show-read-more">If you were to see my photo from 2 years ago, you wouldn't recognize me. I was able to reduce my weight from <strong>108 kgs to 73 kgs</strong> within a period of
                                                <strong>3.5</strong> months. Then, my <strong>thyroid levels</strong> dropped from 34.5 to 0.8. No doctors, no medication, <strong>just Satvic diet and lifestyle.</strong>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-sn-12 col-nd-7 col-lg-8">
                                    <div id="one" class="testimonial active">
                                        <div class="people_block">
                                            <img loading="lazy" class="person" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/Ruchi_1.webp" alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Ruchi Kedia</div>
                                            <div class="place">25 years old, Amravati
                                                <div class="healed">Reversed PCOD, pre-diabetes, and thyroid in 4 months</div>
                                            </div>
                                        </div>
                                        <div class="detail">I moved to Pune for work and started eating a lot of outside food like <strong>pizzas</strong>, <strong>maggi</strong>, and <strong>vada
										pava</strong>. Soon after, I was diagnosed with <strong>PCOD</strong>, <strong>pre-diabetes</strong>, and <strong>thyroid issues</strong>. Rapid weight gain followed, and I reached 77 kgs. My periods became irregular, and doctors advised
                                            <strong>lifelong medication</strong>. Then, I discovered the Satvic healing plan. Gradually, my body started transforming. To cut a long story short, today I have <strong>reversed all my health
										problems</strong>, and <strong>lost 25 kgs</strong> of weight. And all of this <strong>without any pills</strong>.
                                        </div>
                                        <div class="people_block">
                                            <img loading="lazy" class="person" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/Vedant_1.webp" alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Vedant Sheth</div>
                                            <div class="place">33 year old, Bhavnagar, Gujarat</div>
                                            <div class="healed">Reversed his High BP in 3 months</div>
                                        </div>
                                        <div class="detail">I never thought I could get rid of my high blood pressure problem. But the Satvic healing plan proved me wrong! Within about 3 months of following it, I observed <strong>my blood pressure normalize</strong>. No
                                            more popping pills!
                                        </div>
                                        <div class="people_block">
                                            <img loading="lazy" class="person" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/Ananya_1.webp" alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Ananya Singh</div>
                                            <div class="place">22 years old, Nagpur</div>
                                            <div class="healed">Healed her acne in just 1 month</div>
                                        </div>
                                        <div class="detail">I have cured my <strong>PCOD</strong>, <strong>hair fall</strong>, <strong>acne</strong>, and, most importantly, my <strong>depression</strong> by following the Satvic lifestyle. What I underestimated in the beginning
                                            has completely changed my life today. Earlier, I would go for months without getting <strong>my periods</strong>, but now they come <strong>every month.</strong>
                                        </div>
                                    </div>
                                    <div id="two" class="testimonial" style="display:none">

                                        <div class="people_block">
                                            <img loading="lazy" class="person" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/Prajwal_1.webp" alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Prajwal Jhingre</div>
                                            <div class="place">22 years old, Nagpur</div>
                                            <div class="healed">Reversed his sinusitis & asthma in 3 months </div>
                                        </div>
                                        <div class="detail">I can proudly say, I have <strong>reversed my asthma and sinusitis</strong> by following the Satvic lifestyle. I went to Satvic Movement to ask for just 1 solution. But they ended up giving me my life back. Earlier,
                                            I had to go to the <strong>hospital</strong> twice every month. Today, I live a <strong>disease-free</strong> and <strong>medicine free life</strong>.
                                        </div>
                                        <div class="people_block">
                                            <img loading="lazy" class="person" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/Disha_1.webp" alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Disha Chopra</div>
                                            <div class="place">25 years old, Noida</div>
                                            <div class="healed">Reversed her gastritis and constipation</div>
                                        </div>
                                        <div class="detail">I was someone who used to love her parathas and chai early morning. But I always felt <strong>bloated</strong>. I also had <strong>gastritis</strong>, which soon turned into <strong>constipation</strong>. After
                                            this workshop at Satvic Movement, within 60 days of following the protocol, I could see every disease leaving my body.
                                        </div>
                                        <div class="people_block">
                                            <img loading="lazy" class="person" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/testimonial/Neha.webp" alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Neha Vasvani</div>
                                            <div class="place">43 years old, Mumbai</div>
                                            <div class="healed">Reversed her thyroid in 3 months </div>
                                        </div>
                                        <div class="detail">After following the Satvic healing plan, within 3 months, I got my blood tests done. From 8.25, <strong>my thyroid levels</strong> dropped to a normal range. I <strong>didn’t need medicines anymore</strong>. My
                                            12 year-long search of finding a solution to my health problems had finally ended.
                                            <br> When someone says, ‘Neha, You’ve reversed your thyroid, you can leave all of this now", I try to explain to them, that it is not a just diet to heal diseases. It is a way of life. One cannot understand
                                            the beauty of it merely listening to stories, or watching videos. Only and only through experiencing it on oneself can one understand the power of this lifestyle.
                                        </div>
                                    </div>
                                    <div id="three" class="testimonial" style="display:none">
                                        <div class="people_block">
                                            <img loading="lazy" class="person" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/testimonial/Tushar.webp" alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Tushar Rohilla</div>
                                            <div class="place">22 years old, Bahadurgarh, Haryana</div>
                                            <div class="healed">Reversed his Sinusitis in 28 days</div>
                                        </div>
                                        <div class="detail">Satvic's healing plan truly saved me from the monster of mucus. In just 28 days, my <strong>sinusitis</strong> vanished, <strong>headaches</strong> disappeared, and <strong>my breath became free</strong>. Satvic
                                            Movement has given me the gift of a <strong>disease-free existence</strong>, and I am forever grateful.
                                        </div>
                                        <div class="people_block">
                                            <img loading="lazy" class="person" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/testimonial/Debajani.webp" alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Debajani Mishra</div>
                                            <div class="place">50 years old, Bilaspur, Chattisgarh</div>
                                            <div class="healed">Lost 25 kilos in 8 months</div>
                                        </div>
                                        <div class="detail">At last year's Durga Puja, I was embarrassed with my
                                            <strong>huge tummy hanging out</strong> as I did dandia dance. Following this lifestyle has helped me <strong>lose 25 kilos in 8 months</strong>, I used to wear <strong>XL size clothes and now I wear XS!</strong>
                                        </div>

                                        <div class="people_block">
                                            <img loading="lazy" class="person" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/testimonial/Divyata.webp" alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Divyata Shah</div>
                                            <div class="place">31 years old, Mumbai</div>
                                            <div class="healed">Lost 20 kgs & Reversed 6 Diseases in 4 Months!</div>
                                        </div>
                                        <div class="detail">Only at the age of 28, I had almost 6 health issues: <strong>PCOD,
											High BP, Pre-Diabetes, Urticaria, Psoriasis and Migraine</strong>. Doctors said that I'll have to continue these medicines all my life. I don't know how I came across Satvic Movement's healing plan. I <strong>followed it religiously</strong>,
                                            exactly as told. And by the end of 4 months, each of those <strong>6 health problems vanished</strong> from my body.
                                        </div>
                                    </div>
                                    <div id="four" class="testimonial" style="display:none">

                                        <div class="people_block">
                                            <img loading="lazy" class="person" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/vattsal_1.webp" alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Vattsal Patel</div>
                                            <div class="place">34 years, Gujarat</div>
                                            <div class="healed">Reversed his High BP & cholesterol in 2.5 months</div>
                                        </div>
                                        <div class="detail">Satvic Lifestyle rewired my body. Medicines, stress, palpitations - all gone. <strong>Blood pressure</strong> dropped. <strong>Boxes
											full of medicines</strong> were thrown out into the black trash can outside our home. Family was amazed. <strong>Satvic food,
											fasting</strong>, and the detox procedures transformed me.
                                        </div>
                                        <div class="people_block">
                                            <img loading="lazy" class="person" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/testimonial/Siddhartha.webp" alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Siddhartha Sinha</div>
                                            <div class="place">45 years old, Delhi</div>
                                            <div class="healed">Reversed his high BP and sleep apnea in 3 months</div>
                                        </div>
                                        <div class="detail">Everything was normal in my life except that <strong>I wasn't
											sleeping properly</strong>. I needed a machine to breathe at night. I was diagnosed with <strong>sleep apnea</strong>. I also had
                                            <strong>hypertension</strong>, with my <strong>BP</strong> hovering around 170-180. But after Satvic lifestyle, now my BP around 125. My sleep apnea is gone. Now I <strong>sleep peacefully</strong> every night.
                                            It's like a miracle!
                                        </div>
                                        <div class="people_block">
                                            <img loading="lazy" class="person" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/testimonial/Sanchari.webp" alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                                <img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp" alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Sanchari Das</div>
                                            <div class="place">30 years old, New Delhi</div>
                                            <div class="healed">Healed her Thyroid & Diabetes</div>
                                        </div>
                                        <div class="detail">In 2018, my life was miserable. I didn't want to live anymore. I was around 85 kgs. I had <strong>HBA1C
											of 10</strong>. I had <strong>PCOD</strong> and <strong>thyroid</strong>, I took <strong>more medicines
											than food</strong>. Today, I have no PCOD. My <strong>HBA1C dropped
											from 10 to 6.1</strong>. And my <strong>skin glows</strong>. And more than anything, I'm no longer fueled by the <strong>two devils</strong> in my life: <strong>depression & diabetes</strong>.
                                        </div>
                                    </div>
                                    <div id="five" class="testimonial" style="display:none">

                                        <div class="people_block">
                                            <img loading="lazy" class="person" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/testimonial/Neeraj.webp" alt="People" width="100" height="100" />
                                            <div class="name">Neeraj Saini</div>
                                            <div class="place">50 years old, Faridabad</div>
                                            <div class="healed">Healed his psoriasis in 6 months</div>
                                        </div>
                                        <div class="detail"><strong>Psoriasis</strong> plagued me for 20 years, but Satvic Lifestyle changed everything. Today, my psoriasis patch has shrunk to a small scar, No more flare-ups.
                                        </div>
                                        <div class="people_block">
                                            <img loading="lazy" class="person" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/testimonial/Shreya.webp" alt="People" width="100" height="100" />
                                            <div class="name">Shreya Jain</div>
                                            <div class="place">25 years, New Delhi</div>
                                            <div class="healed">Healed her eczema in 3 months</div>
                                        </div>
                                        <div class="detail">I was trapped in a never-ending cycle of <strong>eczema</strong>, feeling helpless and lost. But with the Satvic Lifestyle, I <strong>healed my skin</strong>.. It's a journey I'll forever be grateful for. Satvic
                                            Movement, thank you!
                                        </div>
                                    </div>

                                    <div class="pagination_block">
                                        <nav aria-label="Page navigation example ">
                                            <ul class="pagination" id="pagination">
                                                <li class="page-item"><button class="page-link active" onclick="openTestinomial('one')">1</button></li>
                                                <li class="page-item"><button class="page-link" onclick="openTestinomial('two')">2</button></li>
                                                <li class="page-item"><button class="page-link" onclick="openTestinomial('three')">3</button></li>
                                                <li class="page-item"><button class="page-link" onclick="openTestinomial('four')">4</button></li>
                                                <li class="page-item"><button class="page-link" onclick="openTestinomial('five')">5</button></li>
                                                <!-- <li class="page-item"><button class="page-link" onclick="openTestinomial('five')">5</button></li> -->
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="about" class="white_block_no_padding about">
                            <div id="about-1" class="white_block about-1 text-center">
                                <h4 class="brown_heading text-center py-3">About the Hosts</h4>
                                <div class="row">
                                    <div class="col-lg-6 pe-3 pe-sm-3 mt-sm-0">
                                        <img loading="lazy" class="about_img w-100" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/hosts/subah_1.webp" alt="subah">
                                        <h3 class="brown_heading mt-0 mt-sm-4 mb-3" id="subah" style="font-size: 30px !important;">Subah Saraf</h3>
                                        <p class="aboput_text">
                                            <span class="d-block">Subah is an <strong>acclaimed health educator</strong>, published author and co-founder of the health education platform 'Satvic Movement'. Subah's journey into health began after she <strong>healed her own chronic diseases</strong> (thyroid imbalance, PCOD, major hairfall and acne) by following <strong>natural healing principles</strong>.</span>
                                            <span class="d-block mt-md-3 mt-3">At the young age of 17, she decided to devote her life to the purpose of uplifting people's health. She learnt the science of <strong>nature cure</strong> under the guidance of multiple Indian masters. She is also a <strong>certified health educator</strong> from the Hippocrates Health Institute, Florida. </span>
                                            <span class="d-block mt-md-3 mt-3">Subah's goal is to share this intricate healing knowledge with as many people as possible, so that we can move closer to a <strong>disease-free world</strong>.</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-6 ps-3 ps-sm-3 pt-3 pt-sm-0">
                                        <img loading="lazy" class="about_img w-100 pt-4" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/hosts/harsh_1.webp" alt="harsh">
                                        <h3 class="brown_heading mt-0 mt-sm-4 mb-3" id="harsh" style="font-size: 30px !important;">Harshvardhan Saraf</h3>
                                        <p class="aboput_text">
                                            <span class="d-block">Harshvardhan Saraf, a social entrepreneur and visionary, is the <strong>co-founder of Satvic Movement'</strong>. </span>
                                            <span class="d-block mt-md-3 mt-3">His journey began with his own personal health challenges. From a young age, Harshvardhan struggled with <strong>chronic sinusitis</strong> and <strong>skin problems</strong>, which affected his quality of life. Despite consulting renowned doctors in Mumbai and London, he found no relief and was even advised to undergo <strong>nose surgery</strong>. However, at the age of 20, Harshvardhan made a pivotal decision to transform his <strong>food and lifestyle habits</strong>. </span>
                                            <span class="d-block mt-md-3 mt-3">To his amazement, these changes not only <strong>resolved his chronic health issues</strong> entirely but also made the need for surgery unnecessary. This profound transformation became a defining moment for him and ignited his purpose.</span>
                                            <span class="d-block mt-md-3 mt-3">Today, Harshvardhan is committed to creating a <strong>global movement</strong> where individuals can reclaim their health with nature's abundant healing resources.</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="register_form" class="register_form text-center">
                            <br/><br/>
                            <h3 class="register_tag">Register Now</h3>
                            <div class="register_mobile_details">
                                <span class="date-and-time"><img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/date-white.png" alt="Date" width="100" height="100" />20th Jan - 26th Jan everyday								</span>

                                <span class="date-and-time"><img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/time-white.png" alt="Date" width="100" height="100" />
																											6 to 07:15 AM (IST)
																							or<br>
																																							<span class="timeslot-text">
																						8 to 09:15 AM (IST)
																							or<br>
											</span> <span class="timeslot-text">
																						4 to 05:15 PM (IST)
																							or<br>
											</span> <span class="timeslot-text">
																						8 to 09:15 PM (IST)
											</span> </span>
                                <span class="date-and-time"><img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/rupee-white.png" alt="Date" width="100" height="100" />Contribution: Rs: 990 - 2990</span>
                            </div>
                            <form style="display: none;" id="rxp_frm">
                                <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                                <input type="hidden" name="razorpay_signature" id="razorpay_signature">
                                <input type="hidden" name="razorpay_order_id" id="razorpay_order_id">
                            </form>
                            <div class="form_block">
                                <form id="reg_form">
                                    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                                    <input type="hidden" name="razorpay_signature" id="razorpay_signature">
                                    <input type="hidden" name="utm_source" id="utm_source" value="web">
                                    <input type="hidden" name="utm_medium" id="utm_medium" value="upw">
                                    <input type="hidden" name="utm_campaign" id="utm_campaign" value="">
                                    <input type="hidden" name="utm_term" id="utm_term" value="">
                                    <input type="hidden" name="utm_content" id="utm_content" value="">
                                    <input type="hidden" name="http_refer_id" id="http_refer_id" value="">
                                    <input type="hidden" class="form-control" placeholder="Enter" name="register-amount" id="amount" value="99000">
                                    <!-- register-amount in paise -->
                                    <input type="hidden" name="country" id="country" value="">

                                    <div class="row">
                                        <div class="col-sm-12 col-lg-6 mb-3 mb-sm-0">
                                            <label class="d-none">Name</label>
                                            <input type="text" class="form-control" placeholder="Name*" name="reg-name" required id="name" autocomplete="off" value="">
                                            <div id="name_error"></div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3 mb-sm-0">
                                            <label class="d-none">Email</label>
                                            <input type="email" class="form-control" placeholder="Email*" name="reg-email" required id="email" autocomplete="off" value="">
                                            <div id="email_error"></div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-sm-12 col-lg-6 mb-4 mb-sm-3 mb-md-3 d-flex">
                                            <label class="d-none">Phone Number</label>
                                            <select name="country_code" id="country_code" class="custom-autocomplete">
												<option value="+376">AD +376</option><option value="+971">AE +971</option><option value="+93">AF +93</option><option value="+1268">AG +1268</option><option value="+1264">AI +1264</option><option value="+355">AL +355</option><option value="+374">AM +374</option><option value="+599">AN +599</option><option value="+244">AO +244</option><option value="+672">AQ +672</option><option value="+54">AR +54</option><option value="+1684">AS +1684</option><option value="+43">AT +43</option><option value="+61">AU +61</option><option value="+297">AW +297</option><option value="+358">AX +358</option><option value="+994">AZ +994</option><option value="+387">BA +387</option><option value="+1246">BB +1246</option><option value="+880">BD +880</option><option value="+32">BE +32</option><option value="+226">BF +226</option><option value="+359">BG +359</option><option value="+973">BH +973</option><option value="+257">BI +257</option><option value="+229">BJ +229</option><option value="+590">BL +590</option><option value="+1441">BM +1441</option><option value="+673">BN +673</option><option value="+591">BO +591</option><option value="+55">BR +55</option><option value="+1242">BS +1242</option><option value="+975">BT +975</option><option value="+267">BW +267</option><option value="+375">BY +375</option><option value="+501">BZ +501</option><option value="+1">CA +1</option><option value="+61">CC +61</option><option value="+243">CD +243</option><option value="+236">CF +236</option><option value="+242">CG +242</option><option value="+41">CH +41</option><option value="+225">CI +225</option><option value="+682">CK +682</option><option value="+56">CL +56</option><option value="+237">CM +237</option><option value="+86">CN +86</option><option value="+57">CO +57</option><option value="+506">CR +506</option><option value="+53">CU +53</option><option value="+238">CV +238</option><option value="+61">CX +61</option><option value="+357">CY +357</option><option value="+420">CZ +420</option><option value="+49">DE +49</option><option value="+253">DJ +253</option><option value="+45">DK +45</option><option value="+1767">DM +1767</option><option value="+1849">DO +1849</option><option value="+213">DZ +213</option><option value="+593">EC +593</option><option value="+372">EE +372</option><option value="+20">EG +20</option><option value="+291">ER +291</option><option value="+34">ES +34</option><option value="+251">ET +251</option><option value="+358">FI +358</option><option value="+679">FJ +679</option><option value="+500">FK +500</option><option value="+691">FM +691</option><option value="+298">FO +298</option><option value="+33">FR +33</option><option value="+241">GA +241</option><option value="+44">GB +44</option><option value="+1473">GD +1473</option><option value="+995">GE +995</option><option value="+594">GF +594</option><option value="+44">GG +44</option><option value="+233">GH +233</option><option value="+350">GI +350</option><option value="+299">GL +299</option><option value="+220">GM +220</option><option value="+224">GN +224</option><option value="+590">GP +590</option><option value="+240">GQ +240</option><option value="+30">GR +30</option><option value="+500">GS +500</option><option value="+502">GT +502</option><option value="+1671">GU +1671</option><option value="+245">GW +245</option><option value="+592">GY +592</option><option value="+852">HK +852</option><option value="+504">HN +504</option><option value="+385">HR +385</option><option value="+509">HT +509</option><option value="+36">HU +36</option><option value="+62">ID +62</option><option value="+353">IE +353</option><option value="+972">IL +972</option><option value="+44">IM +44</option><option value="+91" selected>IN +91</option><option value="+246">IO +246</option><option value="+964">IQ +964</option><option value="+98">IR +98</option><option value="+354">IS +354</option><option value="+39">IT +39</option><option value="+44">JE +44</option><option value="+1876">JM +1876</option><option value="+962">JO +962</option><option value="+81">JP +81</option><option value="+254">KE +254</option><option value="+996">KG +996</option><option value="+855">KH +855</option><option value="+686">KI +686</option><option value="+269">KM +269</option><option value="+1869">KN +1869</option><option value="+850">KP +850</option><option value="+82">KR +82</option><option value="+965">KW +965</option><option value="+ 345">KY + 345</option><option value="+77">KZ +77</option><option value="+856">LA +856</option><option value="+961">LB +961</option><option value="+1758">LC +1758</option><option value="+423">LI +423</option><option value="+94">LK +94</option><option value="+231">LR +231</option><option value="+266">LS +266</option><option value="+370">LT +370</option><option value="+352">LU +352</option><option value="+371">LV +371</option><option value="+218">LY +218</option><option value="+212">MA +212</option><option value="+377">MC +377</option><option value="+373">MD +373</option><option value="+382">ME +382</option><option value="+590">MF +590</option><option value="+261">MG +261</option><option value="+692">MH +692</option><option value="+389">MK +389</option><option value="+223">ML +223</option><option value="+95">MM +95</option><option value="+976">MN +976</option><option value="+853">MO +853</option><option value="+1670">MP +1670</option><option value="+596">MQ +596</option><option value="+222">MR +222</option><option value="+1664">MS +1664</option><option value="+356">MT +356</option><option value="+230">MU +230</option><option value="+960">MV +960</option><option value="+265">MW +265</option><option value="+52">MX +52</option><option value="+60">MY +60</option><option value="+258">MZ +258</option><option value="+264">NA +264</option><option value="+687">NC +687</option><option value="+227">NE +227</option><option value="+672">NF +672</option><option value="+234">NG +234</option><option value="+505">NI +505</option><option value="+31">NL +31</option><option value="+47">NO +47</option><option value="+977">NP +977</option><option value="+674">NR +674</option><option value="+683">NU +683</option><option value="+64">NZ +64</option><option value="+968">OM +968</option><option value="+507">PA +507</option><option value="+51">PE +51</option><option value="+689">PF +689</option><option value="+675">PG +675</option><option value="+63">PH +63</option><option value="+92">PK +92</option><option value="+48">PL +48</option><option value="+508">PM +508</option><option value="+872">PN +872</option><option value="+1939">PR +1939</option><option value="+970">PS +970</option><option value="+351">PT +351</option><option value="+680">PW +680</option><option value="+595">PY +595</option><option value="+974">QA +974</option><option value="+262">RE +262</option><option value="+40">RO +40</option><option value="+381">RS +381</option><option value="+7">RU +7</option><option value="+250">RW +250</option><option value="+966">SA +966</option><option value="+677">SB +677</option><option value="+248">SC +248</option><option value="+249">SD +249</option><option value="+46">SE +46</option><option value="+65">SG +65</option><option value="+290">SH +290</option><option value="+386">SI +386</option><option value="+47">SJ +47</option><option value="+421">SK +421</option><option value="+232">SL +232</option><option value="+378">SM +378</option><option value="+221">SN +221</option><option value="+252">SO +252</option><option value="+597">SR +597</option><option value="+211">SS +211</option><option value="+239">ST +239</option><option value="+503">SV +503</option><option value="+963">SY +963</option><option value="+268">SZ +268</option><option value="+1649">TC +1649</option><option value="+235">TD +235</option><option value="+228">TG +228</option><option value="+66">TH +66</option><option value="+992">TJ +992</option><option value="+690">TK +690</option><option value="+670">TL +670</option><option value="+993">TM +993</option><option value="+216">TN +216</option><option value="+676">TO +676</option><option value="+90">TR +90</option><option value="+1868">TT +1868</option><option value="+688">TV +688</option><option value="+886">TW +886</option><option value="+255">TZ +255</option><option value="+380">UA +380</option><option value="+256">UG +256</option><option value="+1">US +1</option><option value="+598">UY +598</option><option value="+998">UZ +998</option><option value="+379">VA +379</option><option value="+1784">VC +1784</option><option value="+58">VE +58</option><option value="+1284">VG +1284</option><option value="+1340">VI +1340</option><option value="+84">VN +84</option><option value="+678">VU +678</option><option value="+681">WF +681</option><option value="+685">WS +685</option><option value="+967">YE +967</option><option value="+262">YT +262</option><option value="+27">ZA +27</option><option value="+260">ZM +260</option><option value="+263">ZW +263</option>
											</select>
                                            <div class="d-block w-100">
                                                <input type="text" class="form-control phone" placeholder="Whatsapp Number*" name="reg-mob" required id="phone" autocomplete="off" value="">
                                                <div class="mob_code d-none">(People outside India, please add your ISD code)</div>
                                            </div>
                                            <div id="mob_error"></div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3 mb-sm-0 city_div">
                                            <label class="d-none">City</label>
                                            <input type="text" class="form-control" placeholder="City*" name="reg-city" required id="city" autocomplete="off" value="">
                                            <div id="city_error"></div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-12 col-lg-12 mb-4 mb-sm-3 mb-md-3 w-100 d-flex" id="time_slot_div">
                                            <span class="custom-autocomplete date-and-time time-slot" style="width:65px!important;"><img loading="lazy" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/time-white.png" alt="Date" /></span>
                                            <select name="time_slot" id="time_slot" class="custom-select">
											<option value="">Choose your time slot*</option>
																							<option data-workshop_date="Monday, 20 January 2025" value="583" data-timeslot="20th Jan - 26th Jan  6 - 07:15 AM (IST)" >20th Jan - 26th Jan  6 - 07:15 AM (IST)</option>
																							<option data-workshop_date="Monday, 20 January 2025" value="580" data-timeslot="20th Jan - 26th Jan  8 - 09:15 AM (IST)" >20th Jan - 26th Jan  8 - 09:15 AM (IST)</option>
																							<option data-workshop_date="Monday, 20 January 2025" value="581" data-timeslot="20th Jan - 26th Jan  4 - 05:15 PM (IST)" >20th Jan - 26th Jan  4 - 05:15 PM (IST)</option>
																							<option data-workshop_date="Monday, 20 January 2025" value="582" data-timeslot="20th Jan - 26th Jan  8 - 09:15 PM (IST)" >20th Jan - 26th Jan  8 - 09:15 PM (IST)</option>
																					</select>
                                            <div id="time_slot_error"></div>
                                        </div>
                                    </div>
                                    <div class="pb-3">
                                        <div class="choose-your-amt pb-3 text-left" style="font-size: 16px !important;color: white">Select the amount you would like to contribute for this workshop. Your support helps us sustain Satvic Movement.</div>
                                        <div class="time_slot_table">
                                            <div class="time_slot_table_cell cell_one" style="width: 130px;">
                                                <input type="radio" name="reg_amount" id="amount_990" class="radio-input d-none isvalid" value="990">
                                                <label for="amount_990" class="selecter">
													<div class="am2">₹ 990</div>
												</label>
                                            </div>
                                            <div class="time_slot_table_cell cell_one" style="width: 130px;">
                                                <input type="radio" name="reg_amount" id="amount_1490" class="radio-input d-none isvalid" value="1490">
                                                <label for="amount_1490" class="selecter">
													<div class="am2">₹ 1490</div>
												</label>
                                            </div>
                                            <div class="time_slot_table_cell cell_one" style="width: 130px;">
                                                <input type="radio" name="reg_amount" id="amount_1990" class="radio-input d-none isvalid" value="1990" checked>
                                                <label for="amount_1990" class="selecter">
													<div class="am2">₹ 1990</div>
												</label>
                                            </div>
                                            <div class="time_slot_table_cell cell_one" style="width: 130px;">
                                                <input type="radio" name="reg_amount" id="amount_2990" class="radio-input d-none isvalid" value="2990">
                                                <label for="amount_2990" class="selecter">
													<div class="am2">₹ 2990</div>
												</label>
                                            </div>
                                        </div>
                                        <div id="amount_error"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-12 mb-2 mb-sm-1">
                                            <div class="form-check radio-container checkbox-space">
                                                <label class="form-check-label ps-0" for="selected_time_slot">
												Are you currently suffering from any health problems?
											</label>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input" type="radio" value="yes" style="width: 27px;" name="take_medicine" id="take_medicine_yes">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="take_medicine_yes"> Yes  </label>
                                                    <input class="form-check-input" type="radio" value="no" style="width: 27px;" name="take_medicine" id="take_medicine_no">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="take_medicine_no"> No  </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-12 mb-2 mb-sm-1 d-none" id="reason_block">
                                            <div class="form-check radio-container checkbox-space">
                                                <label class="form-check-label ps-0" for="list-item-label">
    									    Please specify what health problem you have:
    									    </label>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="Thyroid imbalance" id="Thyroid-imbalance" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="Thyroid imbalance">
    									        Thyroid imbalance 
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="Excess weight" id="Excess-weight" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="Excess weight">
    									        Excess weight 
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="High BP" id="High-BP" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="High BP">
    									        High BP 
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="Diabetes type 2" id="Diabetes-type-2" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="Diabetes type 2">
    									        Diabetes type 2 
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="PCOD" id="PCOD" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="PCOD">
    									        PCOD 
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="Asthma or sinusitis" id="Asthma-or-sinusitis" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="Asthma or sinusitis">
    									        Asthma or sinusitis
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="Acidity or constipation" id="Acidity-or-constipation" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="Acidity or constipation">
    									        Acidity or constipation 
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="Skin problems" id="Skin-problems" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="Skin problems">
    									        Skin problems 
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="Fatty Liver" id="Fatty-Liver" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="Fatty Liver">
    									        Fatty Liver
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="High cholesterol" id="High-cholesterol" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="High cholesterol">
    									        High cholesterol 
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="Diabetes type 1" id="Diabetes-type-1" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="Diabetes type 1">
    									        Diabetes type 1
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="Vitiligo" id="Vitiligo" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="Vitiligo">
    									        Vitiligo 
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="IBS" id="IBS" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="IBS">
    									        IBS 
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="CKD" id="CKD" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="CKD">
    									        CKD
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="Rheumatoid arthritis" id="Rheumatoid-arthritis" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="Rheumatoid arthritis">
    									        Rheumatoid arthritis
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="Ankylosing spondylosis" id="Ankylosing-spondylosis" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="Ankylosing spondylosis">
    									        Ankylosing spondylosis
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="Osteoporosis" id="Osteoporosis" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="Osteoporosis">
    									        Osteoporosis
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="Muscular dystrophy" id="Muscular-dystrophy" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="Muscular dystrophy">
    									        Muscular dystrophy
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="Alopecia" id="Alopecia" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="Alopecia">
    									        Alopecia
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="Liver cirrohsis" id="Liver-cirrohsis" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="Liver cirrohsis">
    									        Liver cirrohsis
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="Hashimoto's thyroid" id="Hashimoto's-thyroid" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="Hashimoto's thyroid">
    									        Hashimoto's thyroid
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="Cancer" id="Cancer" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="Cancer">
    									        Cancer
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="Depression" id="Depression" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="Depression">
    									        Depression
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check" type="checkbox" value="Neurological/Psychiatric disorder" id="Neurological/Psychiatric-disorder" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="Neurological/Psychiatric disorder">
    									       Neurological/Psychiatric disorder
    									        </label>
                                                </div>
                                                <div class="d-flex flex-row w-100" style="margin-left: 41px;">
                                                    <input class="form-check-input reason_check_other" type="checkbox" value="Other" id="Other" style="width: 15px;" name="reg-taking-medication[]">&nbsp;&nbsp;
                                                    <label class="form-check-label ps-0" for="Other">
    									        Other
    									        </label>
                                                </div>
                                                <input type="text" class="form-control d-none" name="other_reason" id="other_reason" required>
                                                <div class="check_error" id="other_check_error"></div>
                                            </div>
                                        </div>
                                        <div id="reason_check_error"></div>
                                        <div id="group-3" class="d-none waiver mt-0 mt-sm-3">
                                            <label id="waiver_message" class="mb-0 mb-sm-3 text-warning"> Important Note: For <strong id="checked_disease"></strong>, the Satvic healing plan could be helpful, but may not be sufficient on its own. This condition requires adjunct therapies and personalized guidance from a certified doctor, which we are unable to provide in an online platform like Satvic Movement.</label>
                                            <label id="waiver_message_2" class="mb-0 mb-sm-3 text-warning"> Important Note: For <strong id="checked_disease_2"></strong>, the Satvic healing plan could be helpful, but may not be sufficient on its own. These conditions require adjunct therapies and personalized guidance from a certified doctor, which we are unable to provide in an online platform like Satvic Movement.</label>
                                            <p><label><span class="wpcf7-form-control-wrap reg-accept-waiver-actions"><span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required">
								</span></span></label>
                                            </p>
                                        </div>
                                        <span class="waiver_check_span">
								<input type="checkbox" class="form-check-input"  value="I confirm that I am not pregnant, breastfeeding, a child below age 14, or severely underweight." id="waiver_checkbox_reason" >
								I confirm that I am not pregnant, breastfeeding, a child below age 14, or severely underweight.
								</span>
                                        <span class="waiver_check_span">
								<input type="checkbox" class="form-check-input" name="reg-accept-waiver-actions[]" value="I agree and accept the terms and conditions" id="waiver_checkbox_second" >
								I agree and accept the <a href="https://heal.satvicmovement.org/terms_condition" target="_blank">terms and conditions</a>.
								</span>
                                        <div class="check_error" id="waiver_check_error"></div>
                                    </div>
                                    <button id="pay_button" class="btn-get-started">Pay Now<img loading="lazy" class="btn_arrow" src="https://heal-satvicmovement-org.b-cdn.net/resources/img/btn-arrow-brown.png" alt="arrow" width="20" height="17" /></button>
                                    <div class="contribution mobile_display_none">Contribution: ₹ 990 - 2990 </div>
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
        function getCleanPath(url) {
            var urlObj = new URL(url);
            var pathname = urlObj.pathname;
            if (pathname.charAt(0) === '/') {
                pathname = pathname.substr(1);
            }
            return pathname;
        }
        var workshopname = 'Heal Yourself Challenge';
        var current_url_path = '/?utm_source=web&utm_medium=upw';
        var current_url_protocol = 'https:';
        var current_domain = 'heal.satvicmovement.org';
        var current_url = 'https://heal.satvicmovement.org/?utm_source=web&utm_medium=upw';
        var source_page = getCleanPath(current_url);
    </script>

    <script type="text/javascript">
        mixpanel.track('page_visit', {
            'workshop_name': 'Heal Yourself Challenge',
            'activity_code': 'page_visit',
            'source_page': (source_page) ? source_page : '',
            'current_url_path': '/?utm_source=web&utm_medium=upw',
            'current_url_protocol': 'https:',
            'current_domain': 'heal.satvicmovement.org',
            'UCAMPAIGN': '',
            'USOURCE': 'web',
            'UMEDIUM': 'upw',
            'UTERM': '',
            'UCONTENT': ''
        });
        /*clevertap.event.push("page_visit", {
 		'workshop_name': 'Heal Yourself Challenge', 
		'activity_code': 'page_visit',
		'current_url_path': '/?utm_source=web&utm_medium=upw',
		'current_url_protocol': 'https:',
		'current_domain':'heal.satvicmovement.org'
	});*/
        $(".register-now-track-btn").on("click", function() {
            const eventName = "register_click";
            mixpanel.track(eventName, {
                'button_position': $.trim($(this).data("btn")),
                'workshop_name': 'Heal Yourself Challenge',
                'activity_code': 'register_click',
                'source_page': (source_page) ? source_page : '',
                'current_url_path': '/?utm_source=web&utm_medium=upw',
                'current_url_protocol': 'https:',
                'current_domain': 'heal.satvicmovement.org'
            });
            /*clevertap.event.push(eventName, {
                'button_position': $.trim($(this).data("btn")),
                'workshop_name': 'Heal Yourself Challenge',
                'activity_code': 'register_click',
                'source_page' : (source_page) ? source_page : '',
                'current_url_path': '/?utm_source=web&utm_medium=upw',
                'current_url_protocol': 'https:',
                'current_domain': 'heal.satvicmovement.org'
            });*/
        });

        var checkboxcount = $("div.radio-container input[type=checkbox]").length;
        $("div.radio-container input[type=checkbox]").on("change", function() {
            const eventName = "accepted_terms";
            var checkcount = $("div.radio-container input[type=checkbox]:checked").length;
            if (checkboxcount == checkcount) {
                mixpanel.track(eventName, {
                    'workshop_name': 'Heal Yourself Challenge',
                    'activity_code': 'accepted_terms',
                    'source_page': (source_page) ? source_page : '',
                    'current_url_path': '/?utm_source=web&utm_medium=upw',
                    'current_url_protocol': 'https:',
                    'current_domain': 'heal.satvicmovement.org'
                });
                /*clevertap.event.push(eventName, {
	   			'workshop_name': 'Heal Yourself Challenge',  
				'activity_code': 'accepted_terms',
				'source_page' : (source_page) ? source_page : '',
				'current_url_path': '/?utm_source=web&utm_medium=upw',
				'current_url_protocol': 'https:',
				'current_domain':'heal.satvicmovement.org'
	  		});*/
            }
        });

        $("#name").blur(function() {
            const eventName = "start_typing";
            mixpanel.track(eventName, {
                'workshop_name': 'Heal Yourself Challenge',
                'activity_code': 'start_typing',
                'source_page': (source_page) ? source_page : '',
                'current_url_path': '/?utm_source=web&utm_medium=upw',
                'current_url_protocol': 'https:',
                'current_domain': 'heal.satvicmovement.org'
            });
            /*clevertap.event.push(eventName, {
   		'workshop_name': 'Heal Yourself Challenge',  
		'activity_code': 'start_typing',
		'source_page' : (source_page) ? source_page : '',
		'current_url_path': '/?utm_source=web&utm_medium=upw',
		'current_url_protocol': 'https:',
		'current_domain':'heal.satvicmovement.org'
  	});*/
        });
        if ('home' == 'thankyou') {
            mixpanel.track('thankyou_page', {
                'workshop_name': 'Heal Yourself Challenge',
                'activity_code': 'thankyou_page',
                'source_page': (source_page) ? source_page : '',
                'current_url_path': '/?utm_source=web&utm_medium=upw',
                'current_url_protocol': 'https:',
                'current_domain': 'heal.satvicmovement.org'
            });
            /*clevertap.event.push('thankyou_page', {
   		'workshop_name': 'Heal Yourself Challenge',
		'activity_code': 'thankyou_page',
		'source_page' : (source_page) ? source_page : '',
		'current_url_path': '/?utm_source=web&utm_medium=upw',
		'current_url_protocol': 'https:',
		'current_domain':'heal.satvicmovement.org'
  	});*/
        }
        $(".accordion-button").on("click", function() {
            const eventName = "faq_expand";
            if (!$(this).hasClass("collapsed")) {
                mixpanel.track(eventName, {
                    'question_number': $.trim($(this).data("q_no")),
                    'workshop_name': 'Heal Yourself Challenge',
                    'activity_code': 'faq_expand',
                    'source_page': (source_page) ? source_page : '',
                    'current_url_path': '/?utm_source=web&utm_medium=upw',
                    'current_url_protocol': 'https:',
                    'current_domain': 'heal.satvicmovement.org'
                });
                /*clevertap.event.push(eventName, {
                           'question_number':  $.trim($(this).data("q_no")),
                        'workshop_name': 'Heal Yourself Challenge',  
                        'activity_code': 'faq_expand',
                        'source_page' : (source_page) ? source_page : '',
                        'current_url_path': '/?utm_source=web&utm_medium=upw',
                        'current_url_protocol': 'https:',
                        'current_domain':'heal.satvicmovement.org'
                  });*/
            }
        });
        $(".menu-btn").on("click", function() {
            const eventName = "menu_click";
            mixpanel.track(eventName, {
                'activity': $.trim($(this).data("menu")),
                'workshop_name': 'Heal Yourself Challenge',
                'activity_code': 'menu_click',
                'source_page': (source_page) ? source_page : '',
                'current_url_path': '/?utm_source=web&utm_medium=upw',
                'current_url_protocol': 'https:',
                'current_domain': 'heal.satvicmovement.org'
            });
            /*clevertap.event.push(eventName, {
                       'activity':  $.trim($(this).data("menu")),
                    'workshop_name': 'Heal Yourself Challenge',  
                    'activity_code': 'menu_click',
                    'source_page' : (source_page) ? source_page : '',
                    'current_url_path': '/?utm_source=web&utm_medium=upw',
                    'current_url_protocol': 'https:',
                    'current_domain':'heal.satvicmovement.org'
              });*/
        });
        $("#thumb_0").on('click', function() {
            const eventName = "video_click";
            mixpanel.track(eventName, {
                'workshop_name': 'Heal Yourself Challenge',
                'activity_code': 'video_click',
                'source_page': (source_page) ? source_page : '',
                'current_url_path': '/?utm_source=web&utm_medium=upw',
                'current_url_protocol': 'https:',
                'current_domain': 'heal.satvicmovement.org'
            });
            /*clevertap.event.push(eventName, {
                       'workshop_name': 'Heal Yourself Challenge',  
                    'activity_code': 'video_click',
                    'source_page' : (source_page) ? source_page : '',
                    'current_url_path': '/?utm_source=web&utm_medium=upw',
                    'current_url_protocol': 'https:',
                    'current_domain':'heal.satvicmovement.org'
              });*/
        });
        $("#welcome_video_0").on('click', function() {
            const eventName = "thankyou_page_Activity";
            mixpanel.track(eventName, {
                'workshop_name': 'Heal Yourself Challenge',
                'activity_code': 'thankyou_page_Activity',
                'activity': 'video',
                'source_page': (source_page) ? source_page : '',
                'current_url_path': '/?utm_source=web&utm_medium=upw',
                'current_url_protocol': 'https:',
                'current_domain': 'heal.satvicmovement.org'
            });
            /*clevertap.event.push(eventName, {
                       'workshop_name': 'Heal Yourself Challenge',  
                    'activity_code': 'thankyou_page_Activity',
                    'activity': 'video',
                    'source_page' : (source_page) ? source_page : '',
                    'current_url_path': '/?utm_source=web&utm_medium=upw',
                    'current_url_protocol': 'https:',
                    'current_domain':'heal.satvicmovement.org'
              });*/
        });
        $("#whatsapp_btn").on('click', function() {
            const eventName = "talk_to_us";
            mixpanel.track(eventName, {
                'workshop_name': 'Heal Yourself Challenge',
                'source_page': (source_page) ? source_page : '',
                'current_url_path': '/?utm_source=web&utm_medium=upw',
                'current_url_protocol': 'https:',
                'current_domain': 'heal.satvicmovement.org',
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            setTimeout(init_execution, 1000);

            function loadScript(url, callback) {
                var script = document.createElement("script");
                script.type = "text/javascript";
                if (script.readyState) { //IE
                    script.onreadystatechange = function() {
                        if (script.readyState == "loaded" || script.readyState == "complete") {
                            script.onreadystatechange = null;
                            script.setAttribute("crossorigin", "anonymous")
                            callback();
                        }
                    };
                } else { //Others
                    script.onload = function() {
                        callback();
                    };
                }
                script.src = url;
                document.getElementsByTagName("head")[0].appendChild(script);
            }

            function init_execution() {
                $(document).scroll(function() {
                    var y = $(this).scrollTop();
                    if (y > 190) {
                        $('.register_desktop').fadeIn();
                        $('.register_desktop').css("display", "block");
                    } else {
                        $('.register_desktop').fadeOut();
                        $('.register_desktop').css("display", "none");
                    }
                });
                $(document).ready(function() {
                    if ('Surat' != '') {
                        $('#city').val('Surat');
                    }
                    if ('IN' != '') {
                        $("#country_code > option").each(function() {
                            var text = this.text;
                            var value = this.value;
                            var textArr = text.split(' ');
                            if (textArr[0] == 'IN') {
                                $(this).attr('selected', 'selected');
                                return false;
                            }
                        });
                    }
                    if ('India' != '') {
                        $('#country').val('India');
                    }
                    // Apply Linkify to the text inside the container
                    $('.accordion-body').linkify();
                });

            }
        });
    </script>
    <script>
        var page_url = "https://heal.satvicmovement.org/";
    </script>
    <script>
        function youtubeVideoPlay(id, link) {
            if (id == 0) {
                $('#thumb_' + id).html('<iframe loading="lazy" width="100%" id="mobile-banner-videos" src="' + link + '?autoplay=1&playsinline=1" title="YouTube video player" frameborder="0" style="border-radius: 20px; width:100%;height: 100%;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
            } else {
                $('#thumb_' + id).html('<iframe loading="lazy" width="100%" src="' + link + '?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
            }
            return;
        }

        function getYouTubeVideoId(url) {
            var query = url.split('?')[1];
            var params = new URLSearchParams(query);
            return params.get('v');
        }

        function thankYouPageYoutubeVideoPlay(id, link) {
            var iframe_height = $("#welcome_video_0").height();
            if (id == 0) {
                $('#welcome_video_' + id).html('<iframe loading="lazy" width="100%" id="thankyou-mobile-videos" src="https://www.youtube.com/embed/' + getYouTubeVideoId(link) + '?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;position: relative;top: 7px;height:' + iframe_height + 'px;" allowfullscreen></iframe>');
            } else {
                $('#welcome_video_' + id).html('<iframe loading="lazy" width="100%" src="https://www.youtube.com/embed/' + getYouTubeVideoId(link) + '?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
            }
            return;
        }

        function isOnScreen(elem) {
            // if the element doesn't exist, abort
            if (elem.length == 0) {
                return;
            }
            var $window = jQuery(window)
            var viewport_top = $window.scrollTop()
            var viewport_height = $window.height()
            var viewport_bottom = viewport_top + viewport_height
            var $elem = jQuery(elem)
            var top = $elem.offset().top
            var height = $elem.height()
            var bottom = top + height

            return (top >= viewport_top && top < viewport_bottom) ||
                (bottom > viewport_top && bottom <= viewport_bottom) ||
                (height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
        }
        jQuery(document).ready(function() {
            window.addEventListener('scroll', function(e) {
                if (isOnScreen(jQuery('#register_form'))) { /* Pass element id/class you want to check */
                    $('#header').hide();
                } else {
                    $('#header').show();
                }
                if (isOnScreen(jQuery('#register_form')) || isOnScreen(jQuery('#header'))) {
                    $('.register_mobile').fadeOut();
                    $('.register_mobile').css("display", "none");
                } else {
                    $('.register_mobile').fadeIn();
                    $('.register_mobile').css("display", "block");
                }

            });
            if (isOnScreen(jQuery('#register_form')) || isOnScreen(jQuery('#header'))) {
                $('.register_mobile').fadeOut();
                $('.register_mobile').css("display", "none");
            }
        });
    </script>
</body>

</html>
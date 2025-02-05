@extends('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="breadcrumb_section page-title-light background_bg overlay_bg_70"
        data-img-src="{{ asset('assets/images/breadcrumb_bg4.jpg') }}">
        <div class="abt-sec">
        <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 text-center">
                        <div class="page-title space">
                            <h1>Events Details</h1>
                        </div>
                        <!-- <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Events Details</li>
                            </ol>
                        </nav> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BREADCRUMB -->

    <!-- START SECTION EVENTS -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="single_events">
                        <div class="event_img">
                            <img src="{{ $event->thumb_image }}" alt="thumb_image">
                        </div>
                        <div class="events_title">
                            <h2>{{ $event->name }}</h2>
                        </div>
                        <div class="event_desc">
                            {!! $event->description !!}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 pt-3 pt-lg-0">
                    <div class="sidebar">
                        <div class="widget event_detail box_shadow4">
                            <h5 class="widget_title">Event Infomation</h5>
                            <div class="event_list">
                                <ul class="border_bottom_dash">
                                    <li>
                                        <div class="classes_cat">
                                            <label>Time: </label>
                                            <span>{{ $event->formatted_time }}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="classes_cat">
                                            <label>Start Date: </label>
                                            <span>{{ $event->formatted_date }}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="classes_student">
                                            <label>Location: </label>
                                            <span>{{ $event->location }}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="classes_student">
                                            <label>Fees: </label>
                                            <span>{{ $event->fees }}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <a href="#" class="btn btn-default btn-block mt-3">Register Now</a>
                        </div>
                        <div class="widget event_map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193229.77301255226!2d-74.05531241936525!3d40.823236500441624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f613438663b5%3A0xce20073c8862af08!2sW+123rd+St%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1533565007513"
                                allowfullscreen=""></iframe>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title">Featured Events</h5>
                            <div class="carousel_slider owl-carousel owl-theme" data-margin="15" data-dots="false"
                                data-loop="true" data-autoheight="true" data-autoplay="true" data-items="1">
                                @foreach ($events as $event)
                                    <div class="items">
                                        <div class="event_box event_box_style1 box_shadow4 animation"
                                            data-animation="fadeInUp" data-animation-delay="0.2s">
                                            <div class="event_img">
                                                <img src="{{ $event->thumb_image }}" alt="event_img" />
                                                <div class="event_date">
                                                    <h5>{{ $event->formatted_date }}</h5>
                                                </div>
                                            </div>
                                            <div class="event_info">
                                                <h5 class="event_title">{{ $event->name }}</h5>
                                                <ul class="list_none event_meta">
                                                    <li><i class="fa-regular fa-clock"></i>>{{ $event->formatted_time }}
                                                    </li>
                                                    <li><i class="fa-solid fa-location-pin"></i>{{ $event->location }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <div id="people" class="white_block people">
                            <h3 class="brown_heading mb-4 text-center">People are saying</h3>
                            <div class="row">
                                <div class="col-sn-12 col-nd-5 col-lg-4">
                                    <div class="highlight_review_mobile">
                                        <div class="highlight_review text-center mt-0">
                                            <div class="review">Highlighted review</div>
                                            <img loading="lazy" class="review_img"
                                                src="https://heal-satvicmovement-org.b-cdn.net/resources/img/testimonial/Damini.webp"
                                                alt="People">
                                            <div class="review_name">Dr Damini Singh</div>
                                            <div class="review_location">25, Noida</div>
                                            <div class="d-none">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                            </div>
                                            <div class="review_detail show-read-more">If you were to see my photo from 2
                                                years ago, you wouldn't recognize me. I was able to reduce my weight from
                                                <strong>108 kgs to 73 kgs</strong> within a period of
                                                <strong>3.5</strong> months. Then, my <strong>thyroid levels</strong>
                                                dropped from 34.5 to 0.8. No doctors, no medication, <strong>just Satvic
                                                    diet and lifestyle.</strong>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sn-12 col-nd-7 col-lg-8">
                                    <div id="one" class="testimonial active">
                                        <div class="people_block">
                                            <img loading="lazy" class="person"
                                                src="https://heal-satvicmovement-org.b-cdn.net/resources/img/Ruchi_1.webp"
                                                alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Ruchi Kedia</div>
                                            <div class="place">25 years old, Amravati
                                                <div class="healed">Reversed PCOD, pre-diabetes, and thyroid in 4 months
                                                </div>
                                            </div>
                                        </div>
                                        <div class="detail">I moved to Pune for work and started eating a lot of outside
                                            food like <strong>pizzas</strong>, <strong>maggi</strong>, and <strong>vada
                                                pava</strong>. Soon after, I was diagnosed with <strong>PCOD</strong>,
                                            <strong>pre-diabetes</strong>, and <strong>thyroid issues</strong>. Rapid weight
                                            gain followed, and I reached 77 kgs. My periods became irregular, and doctors
                                            advised
                                            <strong>lifelong medication</strong>. Then, I discovered the Satvic healing
                                            plan. Gradually, my body started transforming. To cut a long story short, today
                                            I have <strong>reversed all my health
                                                problems</strong>, and <strong>lost 25 kgs</strong> of weight. And all of
                                            this <strong>without any pills</strong>.
                                        </div>
                                        <div class="people_block">
                                            <img loading="lazy" class="person"
                                                src="https://heal-satvicmovement-org.b-cdn.net/resources/img/Vedant_1.webp"
                                                alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Vedant Sheth</div>
                                            <div class="place">33 year old, Bhavnagar, Gujarat</div>
                                            <div class="healed">Reversed his High BP in 3 months</div>
                                        </div>
                                        <div class="detail">I never thought I could get rid of my high blood pressure
                                            problem. But the Satvic healing plan proved me wrong! Within about 3 months of
                                            following it, I observed <strong>my blood pressure normalize</strong>. No
                                            more popping pills!
                                        </div>
                                        <div class="people_block">
                                            <img loading="lazy" class="person"
                                                src="https://heal-satvicmovement-org.b-cdn.net/resources/img/Ananya_1.webp"
                                                alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Ananya Singh</div>
                                            <div class="place">22 years old, Nagpur</div>
                                            <div class="healed">Healed her acne in just 1 month</div>
                                        </div>
                                        <div class="detail">I have cured my <strong>PCOD</strong>, <strong>hair
                                                fall</strong>, <strong>acne</strong>, and, most importantly, my
                                            <strong>depression</strong> by following the Satvic lifestyle. What I
                                            underestimated in the beginning
                                            has completely changed my life today. Earlier, I would go for months without
                                            getting <strong>my periods</strong>, but now they come <strong>every
                                                month.</strong>
                                        </div>
                                    </div>
                                    <div id="two" class="testimonial" style="display:none">

                                        <div class="people_block">
                                            <img loading="lazy" class="person"
                                                src="https://heal-satvicmovement-org.b-cdn.net/resources/img/Prajwal_1.webp"
                                                alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Prajwal Jhingre</div>
                                            <div class="place">22 years old, Nagpur</div>
                                            <div class="healed">Reversed his sinusitis & asthma in 3 months </div>
                                        </div>
                                        <div class="detail">I can proudly say, I have <strong>reversed my asthma and
                                                sinusitis</strong> by following the Satvic lifestyle. I went to Satvic
                                            Movement to ask for just 1 solution. But they ended up giving me my life back.
                                            Earlier,
                                            I had to go to the <strong>hospital</strong> twice every month. Today, I live a
                                            <strong>disease-free</strong> and <strong>medicine free life</strong>.
                                        </div>
                                        <div class="people_block">
                                            <img loading="lazy" class="person"
                                                src="https://heal-satvicmovement-org.b-cdn.net/resources/img/Disha_1.webp"
                                                alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Disha Chopra</div>
                                            <div class="place">25 years old, Noida</div>
                                            <div class="healed">Reversed her gastritis and constipation</div>
                                        </div>
                                        <div class="detail">I was someone who used to love her parathas and chai early
                                            morning. But I always felt <strong>bloated</strong>. I also had
                                            <strong>gastritis</strong>, which soon turned into
                                            <strong>constipation</strong>. After
                                            this workshop at Satvic Movement, within 60 days of following the protocol, I
                                            could see every disease leaving my body.
                                        </div>
                                        <div class="people_block">
                                            <img loading="lazy" class="person"
                                                src="https://heal-satvicmovement-org.b-cdn.net/resources/img/testimonial/Neha.webp"
                                                alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Neha Vasvani</div>
                                            <div class="place">43 years old, Mumbai</div>
                                            <div class="healed">Reversed her thyroid in 3 months </div>
                                        </div>
                                        <div class="detail">After following the Satvic healing plan, within 3 months, I got
                                            my blood tests done. From 8.25, <strong>my thyroid levels</strong> dropped to a
                                            normal range. I <strong>didn’t need medicines anymore</strong>. My
                                            12 year-long search of finding a solution to my health problems had finally
                                            ended.
                                            <br> When someone says, ‘Neha, You’ve reversed your thyroid, you can leave all
                                            of this now", I try to explain to them, that it is not a just diet to heal
                                            diseases. It is a way of life. One cannot understand
                                            the beauty of it merely listening to stories, or watching videos. Only and only
                                            through experiencing it on oneself can one understand the power of this
                                            lifestyle.
                                        </div>
                                    </div>
                                    <div id="three" class="testimonial" style="display:none">
                                        <div class="people_block">
                                            <img loading="lazy" class="person"
                                                src="https://heal-satvicmovement-org.b-cdn.net/resources/img/testimonial/Tushar.webp"
                                                alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Tushar Rohilla</div>
                                            <div class="place">22 years old, Bahadurgarh, Haryana</div>
                                            <div class="healed">Reversed his Sinusitis in 28 days</div>
                                        </div>
                                        <div class="detail">Satvic's healing plan truly saved me from the monster of mucus.
                                            In just 28 days, my <strong>sinusitis</strong> vanished,
                                            <strong>headaches</strong> disappeared, and <strong>my breath became
                                                free</strong>. Satvic
                                            Movement has given me the gift of a <strong>disease-free existence</strong>, and
                                            I am forever grateful.
                                        </div>
                                        <div class="people_block">
                                            <img loading="lazy" class="person"
                                                src="https://heal-satvicmovement-org.b-cdn.net/resources/img/testimonial/Debajani.webp"
                                                alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Debajani Mishra</div>
                                            <div class="place">50 years old, Bilaspur, Chattisgarh</div>
                                            <div class="healed">Lost 25 kilos in 8 months</div>
                                        </div>
                                        <div class="detail">At last year's Durga Puja, I was embarrassed with my
                                            <strong>huge tummy hanging out</strong> as I did dandia dance. Following this
                                            lifestyle has helped me <strong>lose 25 kilos in 8 months</strong>, I used to
                                            wear <strong>XL size clothes and now I wear XS!</strong>
                                        </div>

                                        <div class="people_block">
                                            <img loading="lazy" class="person"
                                                src="https://heal-satvicmovement-org.b-cdn.net/resources/img/testimonial/Divyata.webp"
                                                alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Divyata Shah</div>
                                            <div class="place">31 years old, Mumbai</div>
                                            <div class="healed">Lost 20 kgs & Reversed 6 Diseases in 4 Months!</div>
                                        </div>
                                        <div class="detail">Only at the age of 28, I had almost 6 health issues:
                                            <strong>PCOD,
                                                High BP, Pre-Diabetes, Urticaria, Psoriasis and Migraine</strong>. Doctors
                                            said that I'll have to continue these medicines all my life. I don't know how I
                                            came across Satvic Movement's healing plan. I <strong>followed it
                                                religiously</strong>,
                                            exactly as told. And by the end of 4 months, each of those <strong>6 health
                                                problems vanished</strong> from my body.
                                        </div>
                                    </div>
                                    <div id="four" class="testimonial" style="display:none">

                                        <div class="people_block">
                                            <img loading="lazy" class="person"
                                                src="https://heal-satvicmovement-org.b-cdn.net/resources/img/vattsal_1.webp"
                                                alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Vattsal Patel</div>
                                            <div class="place">34 years, Gujarat</div>
                                            <div class="healed">Reversed his High BP & cholesterol in 2.5 months</div>
                                        </div>
                                        <div class="detail">Satvic Lifestyle rewired my body. Medicines, stress,
                                            palpitations - all gone. <strong>Blood pressure</strong> dropped. <strong>Boxes
                                                full of medicines</strong> were thrown out into the black trash can outside
                                            our home. Family was amazed. <strong>Satvic food,
                                                fasting</strong>, and the detox procedures transformed me.
                                        </div>
                                        <div class="people_block">
                                            <img loading="lazy" class="person"
                                                src="https://heal-satvicmovement-org.b-cdn.net/resources/img/testimonial/Siddhartha.webp"
                                                alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Siddhartha Sinha</div>
                                            <div class="place">45 years old, Delhi</div>
                                            <div class="healed">Reversed his high BP and sleep apnea in 3 months</div>
                                        </div>
                                        <div class="detail">Everything was normal in my life except that <strong>I wasn't
                                                sleeping properly</strong>. I needed a machine to breathe at night. I was
                                            diagnosed with <strong>sleep apnea</strong>. I also had
                                            <strong>hypertension</strong>, with my <strong>BP</strong> hovering around
                                            170-180. But after Satvic lifestyle, now my BP around 125. My sleep apnea is
                                            gone. Now I <strong>sleep peacefully</strong> every night.
                                            It's like a miracle!
                                        </div>
                                        <div class="people_block">
                                            <img loading="lazy" class="person"
                                                src="https://heal-satvicmovement-org.b-cdn.net/resources/img/testimonial/Sanchari.webp"
                                                alt="People" width="100" height="100" />
                                            <div class="name_star d-none">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                                <img loading="lazy"
                                                    src="https://heal-satvicmovement-org.b-cdn.net/resources/img/star.webp"
                                                    alt="Star" width="20" height="19">
                                            </div>
                                            <div class="name">Sanchari Das</div>
                                            <div class="place">30 years old, New Delhi</div>
                                            <div class="healed">Healed her Thyroid & Diabetes</div>
                                        </div>
                                        <div class="detail">In 2018, my life was miserable. I didn't want to live anymore.
                                            I was around 85 kgs. I had <strong>HBA1C
                                                of 10</strong>. I had <strong>PCOD</strong> and <strong>thyroid</strong>, I
                                            took <strong>more medicines
                                                than food</strong>. Today, I have no PCOD. My <strong>HBA1C dropped
                                                from 10 to 6.1</strong>. And my <strong>skin glows</strong>. And more than
                                            anything, I'm no longer fueled by the <strong>two devils</strong> in my life:
                                            <strong>depression & diabetes</strong>.
                                        </div>
                                    </div>
                                    <div id="five" class="testimonial" style="display:none">

                                        <div class="people_block">
                                            <img loading="lazy" class="person"
                                                src="https://heal-satvicmovement-org.b-cdn.net/resources/img/testimonial/Neeraj.webp"
                                                alt="People" width="100" height="100" />
                                            <div class="name">Neeraj Saini</div>
                                            <div class="place">50 years old, Faridabad</div>
                                            <div class="healed">Healed his psoriasis in 6 months</div>
                                        </div>
                                        <div class="detail"><strong>Psoriasis</strong> plagued me for 20 years, but Satvic
                                            Lifestyle changed everything. Today, my psoriasis patch has shrunk to a small
                                            scar, No more flare-ups.
                                        </div>
                                        <div class="people_block">
                                            <img loading="lazy" class="person"
                                                src="https://heal-satvicmovement-org.b-cdn.net/resources/img/testimonial/Shreya.webp"
                                                alt="People" width="100" height="100" />
                                            <div class="name">Shreya Jain</div>
                                            <div class="place">25 years, New Delhi</div>
                                            <div class="healed">Healed her eczema in 3 months</div>
                                        </div>
                                        <div class="detail">I was trapped in a never-ending cycle of
                                            <strong>eczema</strong>, feeling helpless and lost. But with the Satvic
                                            Lifestyle, I <strong>healed my skin</strong>.. It's a journey I'll forever be
                                            grateful for. Satvic
                                            Movement, thank you!
                                        </div>
                                    </div>

                                    <div class="pagination_block">
                                        <nav aria-label="Page navigation example ">
                                            <ul class="pagination" id="pagination">
                                                <li class="page-item"><button class="page-link active"
                                                        onclick="openTestinomial('one')">1</button></li>
                                                <li class="page-item"><button class="page-link"
                                                        onclick="openTestinomial('two')">2</button></li>
                                                <li class="page-item"><button class="page-link"
                                                        onclick="openTestinomial('three')">3</button></li>
                                                <li class="page-item"><button class="page-link"
                                                        onclick="openTestinomial('four')">4</button></li>
                                                <li class="page-item"><button class="page-link"
                                                        onclick="openTestinomial('five')">5</button></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div> -->
    <!-- END SECTION EVENTS -->
@endsection

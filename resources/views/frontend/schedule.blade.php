@extends('frontend.layouts.app')
@section('content')
    {{-- <!-- START SECTION BREADCRUMB --> --}}
    <section class="breadcrumb_section page-title-light background_bg bg_fixed overlay_bg_blue_70"
        data-img-src="assets/images/breadcrumb_bg2.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h1>schedule</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">schedule</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION BREADCRUMB --> --}}

    {{-- <!-- START SECTION CLASSES TIMETABLE --> --}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="classes_filter animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <li><a href="#" class="current" data-filter="all">All Classes</a></li>
                        <li><a href="#" data-filter="hatha">Hatha</a></li>
                        <li><a href="#" data-filter="kundalini">Kundalini</a></li>
                        <li><a href="#" data-filter="pilates">Pilates</a></li>
                        <li><a href="#" data-filter="alignment">Alignment</a></li>
                        <li><a href="#" data-filter="yoga-dance">Yoga Dance</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="schedule_table box_shadow1 table-responsive animation" data-animation="fadeInUp"
                        data-animation-delay="0.3s">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <td>Time</td>
                                    <td>Monday</td>
                                    <td>Tuesday</td>
                                    <td>Wednesday</td>
                                    <td>Thursday</td>
                                    <td>Friday</td>
                                    <td>Saturday</td>
                                    <td>Sunday</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>9:00AM</td>
                                    <td>
                                        <div data-classes-schedule="hatha">
                                            <div class="classes_title">
                                                <h6>Hatha Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>9:00 - 10:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Maria</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <div data-classes-schedule="kundalini">
                                            <div class="classes_title">
                                                <h6>Kundalini Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>9:00 - 10:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Elena</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="pilates">
                                            <div class="classes_title">
                                                <h6>Pilates Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>9:00 - 10:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Regina</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="alignment">
                                            <div class="classes_title">
                                                <h6>Alignment Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>9:00 - 10:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Maria</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="pilates">
                                            <div class="classes_title">
                                                <h6>Pilates Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>9:00 - 10:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Regina</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>10:00AM</td>
                                    <td>
                                        <div data-classes-schedule="pilates">
                                            <div class="classes_title">
                                                <h6>Pilates Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>10:00 - 11:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Regina</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="alignment">
                                            <div class="classes_title">
                                                <h6>Alignment Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>10:00 - 11:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Maria</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="yoga-dance">
                                            <div class="classes_title">
                                                <h6>Yoga Dance</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>10:00 - 11:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Elena</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <div data-classes-schedule="kundalini">
                                            <div class="classes_title">
                                                <h6>Kundalini Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>10:00 - 11:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Elena</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="hatha">
                                            <div class="classes_title">
                                                <h6>Hatha Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>10:00 - 11:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Maria</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="yoga-dance">
                                            <div class="classes_title">
                                                <h6>Yoga Dance</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>10:00 - 11:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Elena</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11:00AM</td>
                                    <td>
                                        <div data-classes-schedule="hatha">
                                            <div class="classes_title">
                                                <h6>Hatha Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>11:00 - 12:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Maria</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <div data-classes-schedule="pilates">
                                            <div class="classes_title">
                                                <h6>Pilates Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>11:00 - 12:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Regina</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="alignment">
                                            <div class="classes_title">
                                                <h6>Alignment Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>11:00 - 12:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Maria</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="yoga-dance">
                                            <div class="classes_title">
                                                <h6>Yoga Dance</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>11:00 - 12:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Elena</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="kundalini">
                                            <div class="classes_title">
                                                <h6>Kundalini Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>11:00 - 12:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Elena</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>&nbsp; </td>
                                </tr>
                                <tr>
                                    <td>12:00AM</td>
                                    <td>
                                        <div data-classes-schedule="pilates">
                                            <div class="classes_title">
                                                <h6>Pilates Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>12:00 - 01:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Regina</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="kundalini">
                                            <div class="classes_title">
                                                <h6>Kundalini Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>12:00 - 01:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Elena</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="hatha">
                                            <div class="classes_title">
                                                <h6>Hatha Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>12:00 - 01:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Maria</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <div data-classes-schedule="pilates">
                                            <div class="classes_title">
                                                <h6>Pilates Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>12:00 - 01:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Regina</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="alignment">
                                            <div class="classes_title">
                                                <h6>Alignment Yoga</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>12:00 - 01:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Maria</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-classes-schedule="yoga-dance">
                                            <div class="classes_title">
                                                <h6>Yoga Dance</h6>
                                            </div>
                                            <div class="classes_timing">
                                                <span>12:00 - 01:00</span>
                                            </div>
                                            <div class="cl_trainer">
                                                <span>Elena</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- END SECTION CLASSES TIMETABLE --> --}}
@endsection

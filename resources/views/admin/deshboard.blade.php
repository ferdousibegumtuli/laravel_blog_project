@extends('layouts.app')
@section('content')
    <div class="page-wrapper">

        <div class="page-body">
            <div class="row">
                <!-- card1 start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card widget-card-1">
                        <div class="card-block-small">
                            <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                            <span class="text-c-blue f-w-600">Use space</span>
                            <h4>49/50GB</h4>
                            <div>
                                <span class="f-left m-t-10 text-muted">
                                    <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Get more space
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card1 end -->
                <!-- card1 start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card widget-card-1">
                        <div class="card-block-small">
                            <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
                            <span class="text-c-pink f-w-600">Revenue</span>
                            <h4>$23,589</h4>
                            <div>
                                <span class="f-left m-t-10 text-muted">
                                    <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Last 24 hours
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card1 end -->
                <!-- card1 start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card widget-card-1">
                        <div class="card-block-small">
                            <i class="icofont icofont-warning-alt bg-c-green card1-icon"></i>
                            <span class="text-c-green f-w-600">Fixed issue</span>
                            <h4>45</h4>
                            <div>
                                <span class="f-left m-t-10 text-muted">
                                    <i class="text-c-green f-16 icofont icofont-tag m-r-10"></i>Tracked via microsoft
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card1 end -->
                <!-- card1 start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card widget-card-1">
                        <div class="card-block-small">
                            <i class="icofont icofont-social-twitter bg-c-yellow card1-icon"></i>
                            <span class="text-c-yellow f-w-600">Followers</span>
                            <h4>+562</h4>
                            <div>
                                <span class="f-left m-t-10 text-muted">
                                    <i class="text-c-yellow f-16 icofont icofont-refresh m-r-10"></i>Just update
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card1 end -->
                <!-- Statestics Start -->
                <div class="col-md-12 col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h5>Statestics</h5>
                            <div class="card-header-left ">
                            </div>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="icofont icofont-simple-left "></i></li>
                                    <li><i class="icofont icofont-maximize full-card"></i></li>
                                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                                    <li><i class="icofont icofont-error close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-block">
                            <div id="statestics-chart" style="height: 517px; overflow: hidden; text-align: left;">
                                <div class="amcharts-main-div" style="position: relative;">
                                    <div class="amcharts-chart-div" style="overflow: hidden; position: relative; text-align: left; width: 518px; height: 517px; padding: 0px; touch-action: auto; cursor: default;"><svg version="1.1" style="position: absolute; width: 518px; height: 517px; top: 0.1875px; left: -0.203125px;">
                                            <desc>JavaScript chart by amCharts 3.21.5</desc>
                                            <g>
                                                <path cs="100,100" d="M0.5,0.5 L517.5,0.5 L517.5,516.5 L0.5,516.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0"></path>
                                                <path cs="100,100" d="M0.5,0.5 L476.5,0.5 L476.5,481.5 L0.5,481.5 L0.5,0.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" transform="translate(41,0)"></path>
                                            </g>
                                            <g>
                                                <g transform="translate(41,0)">
                                                    <g>
                                                        <rect x="0.5" y="0.5" width="53" height="481" rx="0" ry="0" stroke-width="0" fill="#FAFAFA" stroke="#FAFAFA" fill-opacity="1" stroke-opacity="1" transform="translate(26,0)"></rect>
                                                    </g>
                                                    <g>
                                                        <rect x="0.5" y="0.5" width="53" height="481" rx="0" ry="0" stroke-width="0" fill="#FAFAFA" stroke="#FAFAFA" fill-opacity="1" stroke-opacity="1" transform="translate(132,0)"></rect>
                                                    </g>
                                                    <g>
                                                        <rect x="0.5" y="0.5" width="53" height="481" rx="0" ry="0" stroke-width="0" fill="#FAFAFA" stroke="#FAFAFA" fill-opacity="1" stroke-opacity="1" transform="translate(238,0)"></rect>
                                                    </g>
                                                    <g>
                                                        <rect x="0.5" y="0.5" width="53" height="481" rx="0" ry="0" stroke-width="0" fill="#FAFAFA" stroke="#FAFAFA" fill-opacity="1" stroke-opacity="1" transform="translate(344,0)"></rect>
                                                    </g>
                                                    <g>
                                                        <rect x="0.5" y="0.5" width="26" height="481" rx="0" ry="0" stroke-width="0" fill="#FAFAFA" stroke="#FAFAFA" fill-opacity="1" stroke-opacity="1" transform="translate(450,0)"></rect>
                                                    </g>
                                                </g>
                                                <g transform="translate(41,0)" visibility="visible">
                                                    <g>
                                                        <path cs="100,100" d="M0.5,481.5 L0.5,481.5 L476.5,481.5" fill="none" stroke-width="1" stroke-dasharray="6" stroke-opacity="0.1" stroke="#000000"></path>
                                                    </g>
                                                    <g>
                                                        <path cs="100,100" d="M0.5,437.5 L0.5,437.5 L476.5,437.5" fill="none" stroke-width="1" stroke-dasharray="6" stroke-opacity="0.1" stroke="#000000"></path>
                                                    </g>
                                                    <g>
                                                        <path cs="100,100" d="M0.5,394.5 L0.5,394.5 L476.5,394.5" fill="none" stroke-width="1" stroke-dasharray="6" stroke-opacity="0.1" stroke="#000000"></path>
                                                    </g>
                                                    <g>
                                                        <path cs="100,100" d="M0.5,350.5 L0.5,350.5 L476.5,350.5" fill="none" stroke-width="1" stroke-dasharray="6" stroke-opacity="0.1" stroke="#000000"></path>
                                                    </g>
                                                    <g>
                                                        <path cs="100,100" d="M0.5,306.5 L0.5,306.5 L476.5,306.5" fill="none" stroke-width="1" stroke-dasharray="6" stroke-opacity="0.1" stroke="#000000"></path>
                                                    </g>
                                                    <g>
                                                        <path cs="100,100" d="M0.5,262.5 L0.5,262.5 L476.5,262.5" fill="none" stroke-width="1" stroke-dasharray="6" stroke-opacity="0.1" stroke="#000000"></path>
                                                    </g>
                                                    <g>
                                                        <path cs="100,100" d="M0.5,219.5 L0.5,219.5 L476.5,219.5" fill="none" stroke-width="1" stroke-dasharray="6" stroke-opacity="0.1" stroke="#000000"></path>
                                                    </g>
                                                    <g>
                                                        <path cs="100,100" d="M0.5,175.5 L0.5,175.5 L476.5,175.5" fill="none" stroke-width="1" stroke-dasharray="6" stroke-opacity="0.1" stroke="#000000"></path>
                                                    </g>
                                                    <g>
                                                        <path cs="100,100" d="M0.5,131.5 L0.5,131.5 L476.5,131.5" fill="none" stroke-width="1" stroke-dasharray="6" stroke-opacity="0.1" stroke="#000000"></path>
                                                    </g>
                                                    <g>
                                                        <path cs="100,100" d="M0.5,87.5 L0.5,87.5 L476.5,87.5" fill="none" stroke-width="1" stroke-dasharray="6" stroke-opacity="0.1" stroke="#000000"></path>
                                                    </g>
                                                    <g>
                                                        <path cs="100,100" d="M0.5,44.5 L0.5,44.5 L476.5,44.5" fill="none" stroke-width="1" stroke-dasharray="6" stroke-opacity="0.1" stroke="#000000"></path>
                                                    </g>
                                                    <g>
                                                        <path cs="100,100" d="M0.5,0.5 L0.5,0.5 L476.5,0.5" fill="none" stroke-width="1" stroke-dasharray="6" stroke-opacity="0.1" stroke="#000000"></path>
                                                    </g>
                                                </g>
                                            </g>
                                            <g transform="translate(41,0)" clip-path="url(#AmChartsEl-15)">
                                                <g visibility="hidden">
                                                    <g transform="translate(0,0)" visibility="hidden">
                                                        <rect x="0.5" y="0.5" width="53" height="481" rx="0" ry="0" stroke-width="0" fill="#FC6180" stroke="#FC6180" fill-opacity="0" stroke-opacity="0" transform="translate(-27,0)"></rect>
                                                    </g>
                                                </g>
                                            </g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g>
                                                <g transform="translate(41,0)">
                                                    <g clip-path="url(#AmChartsEl-18)">
                                                        <path cs="100,100" d="M26,395 C39,391,53,317,79,317 C106,318,106,395,132,396 C159,397,159,335,185,338 C212,340,212,452,238,446 C265,441,265,248,291,227 C318,206,318,17,344,26 C371,36,371,404,397,414 C424,423,437,220,450,210 M0,0 L0,0" fill="none" fill-opacity="0" stroke-width="2" stroke-opacity="1" stroke="#4680ff"></path>
                                                    </g>
                                                    <g clip-path="url(#AmChartsEl-17)">
                                                        <path cs="100,100" d="M26,395 C39,391,53,317,79,317 C106,318,106,395,132,396 C159,397,159,335,185,338 C212,340,212,452,238,446 C265,441,265,248,291,227 C318,206,318,17,344,26 C371,36,371,404,397,414 C424,423,437,220,450,210 M0,0 L0,0" fill="none" fill-opacity="0" stroke-width="2" stroke-opacity="1" stroke="#4680ff"></path>
                                                    </g>
                                                    <clipPath id="AmChartsEl-17">
                                                        <rect x="0" y="0" width="476" height="481" rx="0" ry="0" stroke-width="0"></rect>
                                                    </clipPath>
                                                    <clipPath id="AmChartsEl-18">
                                                        <rect x="0" y="481" width="476" height="1" rx="0" ry="0" stroke-width="0"></rect>
                                                    </clipPath>
                                                    <g></g>
                                                </g>
                                            </g>
                                            <g></g>
                                            <g>
                                                <path cs="100,100" d="M0.5,481.5 L476.5,481.5 L476.5,481.5" fill="none" stroke-width="1" stroke-dasharray="6" stroke-opacity="0.2" stroke="#000000" transform="translate(41,0)"></path>
                                                <g>
                                                    <path cs="100,100" d="M0.5,0.5 L476.5,0.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(41,481)"></path>
                                                </g>
                                                <g>
                                                    <path cs="100,100" d="M0.5,0.5 L0.5,481.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(41,0)" visibility="visible"></path>
                                                </g>
                                            </g>
                                            <g>
                                                <g transform="translate(41,0)" clip-path="url(#AmChartsEl-16)" style="pointer-events: none;">
                                                    <path cs="100,100" d="M0.5,0.5 L476.5,0.5 L476.5,0.5" fill="none" stroke-width="1" stroke-opacity="false" stroke="#FC6180" visibility="hidden"></path>
                                                </g>
                                                <clipPath id="AmChartsEl-16">
                                                    <rect x="0" y="0" width="476" height="481" rx="0" ry="0" stroke-width="0"></rect>
                                                </clipPath>
                                            </g>
                                            <g></g>
                                            <g>
                                                <g transform="translate(41,0)">
                                                    <circle r="4.5" cx="0" cy="0" fill="#4680ff" stroke="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(26,395)" aria-label=" Jan 0.98"></circle>
                                                    <circle r="4.5" cx="0" cy="0" fill="#4680ff" stroke="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(79,317)" aria-label=" Feb 1.87"></circle>
                                                    <circle r="4.5" cx="0" cy="0" fill="#4680ff" stroke="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(132,396)" aria-label=" Mar 0.97"></circle>
                                                    <circle r="4.5" cx="0" cy="0" fill="#4680ff" stroke="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(185,338)" aria-label=" Apr 1.64"></circle>
                                                    <circle r="4.5" cx="0" cy="0" fill="#4680ff" stroke="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(238,446)" aria-label=" May 0.4"></circle>
                                                    <circle r="4.5" cx="0" cy="0" fill="#4680ff" stroke="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(291,227)" aria-label=" Jun 2.9"></circle>
                                                    <circle r="4.5" cx="0" cy="0" fill="#4680ff" stroke="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(344,26)" aria-label=" Jul 5.2"></circle>
                                                    <circle r="4.5" cx="0" cy="0" fill="#4680ff" stroke="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(397,414)" aria-label=" Aug 0.77"></circle>
                                                    <circle r="4.5" cx="0" cy="0" fill="#4680ff" stroke="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(450,210)" aria-label=" Sap 3.1"></circle>
                                                </g>
                                            </g>
                                            <g>
                                                <g></g>
                                            </g>
                                            <g>
                                                <g transform="translate(41,0)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(26,498.5)">
                                                        <tspan y="6" x="0">Jan</tspan>
                                                    </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(79,498.5)">
                                                        <tspan y="6" x="0">Feb</tspan>
                                                    </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(132,498.5)">
                                                        <tspan y="6" x="0">Mar</tspan>
                                                    </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(185,498.5)">
                                                        <tspan y="6" x="0">Apr</tspan>
                                                    </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(238,498.5)">
                                                        <tspan y="6" x="0">May</tspan>
                                                    </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(291,498.5)">
                                                        <tspan y="6" x="0">Jun</tspan>
                                                    </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(344,498.5)">
                                                        <tspan y="6" x="0">Jul</tspan>
                                                    </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(397,498.5)">
                                                        <tspan y="6" x="0">Aug</tspan>
                                                    </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(450,498.5)">
                                                        <tspan y="6" x="0">Sap</tspan>
                                                    </text></g>
                                                <g transform="translate(41,0)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,480.5)">
                                                        <tspan y="6" x="0">0.0</tspan>
                                                    </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,436.5)">
                                                        <tspan y="6" x="0">0.5</tspan>
                                                    </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,393.5)">
                                                        <tspan y="6" x="0">1.0</tspan>
                                                    </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,349.5)">
                                                        <tspan y="6" x="0">1.5</tspan>
                                                    </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,305.5)">
                                                        <tspan y="6" x="0">2.0</tspan>
                                                    </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,261.5)">
                                                        <tspan y="6" x="0">2.5</tspan>
                                                    </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,218.5)">
                                                        <tspan y="6" x="0">3.0</tspan>
                                                    </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,174.5)">
                                                        <tspan y="6" x="0">3.5</tspan>
                                                    </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,130.5)">
                                                        <tspan y="6" x="0">4.0</tspan>
                                                    </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,86.5)">
                                                        <tspan y="6" x="0">4.5</tspan>
                                                    </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,43.5)">
                                                        <tspan y="6" x="0">5.0</tspan>
                                                    </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,-0.5)">
                                                        <tspan y="6" x="0">5.5</tspan>
                                                    </text></g>
                                            </g>
                                            <g></g>
                                            <g transform="translate(41,0)"></g>
                                            <g></g>
                                            <g></g>
                                            <clipPath id="AmChartsEl-15">
                                                <rect x="-1" y="-1" width="478" height="483" rx="0" ry="0" stroke-width="0"></rect>
                                            </clipPath>
                                        </svg></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-12 col-xl-4">
                    <div class="card fb-card">
                        <div class="card-header">
                            <i class="icofont icofont-social-facebook"></i>
                            <div class="d-inline-block">
                                <h5>facebook</h5>
                                <span>blog page timeline</span>
                            </div>
                        </div>
                        <div class="card-block text-center">
                            <div class="row">
                                <div class="col-6 b-r-default">
                                    <h2>23</h2>
                                    <p class="text-muted">Active</p>
                                </div>
                                <div class="col-6">
                                    <h2>23</h2>
                                    <p class="text-muted">Comment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card dribble-card">
                        <div class="card-header">
                            <i class="icofont icofont-social-dribbble"></i>
                            <div class="d-inline-block">
                                <h5>dribble</h5>
                                <span>Product page analysis</span>
                            </div>
                        </div>
                        <div class="card-block text-center">
                            <div class="row">
                                <div class="col-6 b-r-default">
                                    <h2>23</h2>
                                    <p class="text-muted">Live</p>
                                </div>
                                <div class="col-6">
                                    <h2>23</h2>
                                    <p class="text-muted">Message</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card twitter-card">
                        <div class="card-header">
                            <i class="icofont icofont-social-twitter"></i>
                            <div class="d-inline-block">
                                <h5>twitter</h5>
                                <span>current new timeline</span>
                            </div>
                        </div>
                        <div class="card-block text-center">
                            <div class="row">
                                <div class="col-6 b-r-default">
                                    <h2>25</h2>
                                    <p class="text-muted">new tweet</p>
                                </div>
                                <div class="col-6">
                                    <h2>450+</h2>
                                    <p class="text-muted">Follower</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Email Sent End -->
                <!-- Data widget start -->
                <div class="col-md-12 col-xl-6">
                    <div class="card project-task">
                        <div class="card-header">
                            <div class="card-header-left ">
                                <h5>Time spent : project &amp; task</h5>
                            </div>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="icofont icofont-simple-left "></i></li>
                                    <li><i class="icofont icofont-maximize full-card"></i></li>
                                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                                    <li><i class="icofont icofont-error close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-block p-b-10">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Project &amp; Task</th>
                                            <th>Time Spents</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="task-contain">
                                                    <h6 class="bg-c-blue d-inline-block text-center">U</h6>
                                                    <p class="d-inline-block m-l-20">UI Design</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="d-inline-block m-r-20">4 : 36</p>
                                                <div class="progress d-inline-block">
                                                    <div class="progress-bar bg-c-blue" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="task-contain">
                                                    <h6 class="bg-c-pink d-inline-block text-center">R</h6>
                                                    <p class="d-inline-block m-l-20">Redesign Android App</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="d-inline-block m-r-20">4 : 36</p>
                                                <div class="progress d-inline-block">
                                                    <div class="progress-bar bg-c-pink" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="task-contain">
                                                    <h6 class="bg-c-yellow d-inline-block text-center">L</h6>
                                                    <p class="d-inline-block m-l-20">Logo Design</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="d-inline-block m-r-20">4 : 36</p>
                                                <div class="progress d-inline-block">
                                                    <div class="progress-bar bg-c-yellow" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="task-contain">
                                                    <h6 class="bg-c-green d-inline-block text-center">A</h6>
                                                    <p class="d-inline-block m-l-20">Appestia landing Page</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="d-inline-block m-r-20">4 : 36</p>
                                                <div class="progress d-inline-block">
                                                    <div class="progress-bar bg-c-green" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="task-contain">
                                                    <h6 class="bg-c-blue d-inline-block text-center">L</h6>
                                                    <p class="d-inline-block m-l-20">Logo Design</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="d-inline-block m-r-20">4 : 36</p>
                                                <div class="progress d-inline-block">
                                                    <div class="progress-bar bg-c-blue" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:50%">
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
                <div class="col-md-12 col-xl-6">
                    <div class="card add-task-card">
                        <div class="card-header">
                            <div class="card-header-left">
                                <h5>To do list</h5>
                            </div>
                            <div class="card-header-right">
                                <button class="btn btn-card btn-primary">Add task </button>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="to-do-list">
                                <div class="checkbox-fade fade-in-primary d-block">
                                    <label class="check-task d-block">
                                        <input type="checkbox" value="">
                                        <span class="cr">
                                            <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                        </span>
                                        <span>
                                            <h6>Schedule Meeting with Compnes <span class="label bg-c-green m-l-10 f-10">2 week</span></h6>
                                        </span>
                                        <div class="task-card-img m-l-40">
                                            <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="" alt="" class="img-40" data-original-title="Lary Doe"></a>
                                            <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="" alt="" class="img-40 m-l-10" data-original-title="Alia"></a>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="to-do-list">
                                <div class="checkbox-fade fade-in-primary d-block">
                                    <label class="check-task d-block">
                                        <input type="checkbox" value="">
                                        <span class="cr">
                                            <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                        </span>
                                        <span>
                                            <h6>Meeting With HOD's and borad</h6>
                                            <p class="text-muted m-l-40">23 january 2003</p>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="to-do-list">
                                <div class="checkbox-fade fade-in-primary d-block">
                                    <label class="check-task d-block">
                                        <input type="checkbox" value="">
                                        <span class="cr">
                                            <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                        </span>
                                        <span>
                                            <h6>Create template, admin with responsive<span class="label bg-c-pink m-l-10">2 week</span></h6>
                                        </span>
                                        <div class="task-card-img m-l-40">
                                            <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="" alt="" class="img-40" data-original-title="Alia"></a>
                                            <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="" alt="" class="img-40 m-l-10" data-original-title="Suzen"></a>
                                            <a href="#!"><img src="assets/images/avatar-4.jpg" data-toggle="tooltip" title="" alt="" class="img-40 m-l-10" data-original-title="Lary Doe"></a>
                                            <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="" alt="" class="img-40 m-l-10" data-original-title="Josephin Doe"></a>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="to-do-list">
                                <div class="checkbox-fade fade-in-primary d-block">
                                    <label class="check-task d-block">
                                        <input type="checkbox" value="">
                                        <span class="cr">
                                            <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                        </span>
                                        <span>
                                            <h6>Meeting With HOD's and borad</h6>
                                            <p class="text-muted m-l-40">23 january 2003</p>
                                        </span>
                                        <div class="task-card-img m-l-40">
                                            <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="" alt="" class="img-40" data-original-title="Lary Doe"></a>
                                            <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="" alt="" class="img-40 m-l-10" data-original-title="Alia"></a>
                                            <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="" alt="" class="img-40 m-l-10" data-original-title="Josephin Doe"></a>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Data widget End -->

            </div>
        </div>
    </div>

    <div id="styleSelector">

    </div>
@endsection
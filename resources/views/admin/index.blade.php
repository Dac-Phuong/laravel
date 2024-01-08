@extends('dashboard')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- View sales -->
            <div class="col-xl-4 mb-4 col-lg-5 col-12">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-7">
                            <div class="card-body text-nowrap">
                                <h5 class="card-title mb-0">Congratulations John! 🎉</h5>
                                <p class="mb-2">Best seller of the month</p>
                                <h4 class="text-primary mb-1">$48.9k</h4>
                                <a href="javascript:;" class="btn btn-primary waves-effect waves-light">View Sales</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- View sales -->

            <!-- Statistics -->
            <div class="col-xl-8 mb-4 col-lg-7 col-12">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="card-title mb-0">Số liệu thống kê</h5>
                            <small class="text-muted">Đã cập nhật 1 tháng trước</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row gy-3">
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-primary me-3 p-2"><i
                                            class="ti ti-chart-pie-2 ti-sm"></i></div>
                                    <div class="card-info">
                                        <h5 class="mb-0">{{ count($total_order) }} </h5>
                                        <small>Đơn hàng đã bán</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-info me-3 p-2"><i class="ti ti-users ti-sm"></i>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="mb-0">{{ count($total_customer) }}</h5>
                                        <small>Khách hàng</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-danger me-3 p-2"><i
                                            class="ti ti-shopping-cart ti-sm"></i></div>
                                    <div class="card-info">
                                        <h5 class="mb-0">{{ count($total_product) }}</h5>
                                        <small>Các sản phẩm</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-success me-3 p-2"><i
                                            class="ti ti-currency-dollar ti-sm"></i></div>
                                    <div class="card-info">
                                        <h5 class="mb-0">{{number_format($total_price)}} VNĐ</h5>
                                        <small>Doanh thu</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Statistics -->

            <div class="col-xl-4 col-12">
                <div class="row">
                    <!-- Expenses -->
                    <div class="col-xl-6 mb-4 col-md-3 col-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5 class="card-title mb-0">82.5k</h5>
                                <small class="text-muted">Chi phí</small>
                            </div>
                            <div class="card-body" style="position: relative;">
                                <div id="expensesChart" style="min-height: 76px;">
                                    <div id="apexcharts6sktd5o2"
                                        class="apexcharts-canvas apexcharts6sktd5o2 apexcharts-theme-light"
                                        style="width: 164px; height: 76px;"><svg id="SvgjsSvg1622" width="164"
                                            height="76" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1624" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(9.5, 0)">
                                                <defs id="SvgjsDefs1623">
                                                    <clipPath id="gridRectMask6sktd5o2">
                                                        <rect id="SvgjsRect1626" width="151" height="142" x="-3" y="-1"
                                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask6sktd5o2"></clipPath>
                                                    <clipPath id="nonForecastMask6sktd5o2"></clipPath>
                                                    <clipPath id="gridRectMarkerMask6sktd5o2">
                                                        <rect id="SvgjsRect1627" width="149" height="144" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG1628" class="apexcharts-radialbar">
                                                    <g id="SvgjsG1629">
                                                        <g id="SvgjsG1630" class="apexcharts-tracks">
                                                            <g id="SvgjsG1631"
                                                                class="apexcharts-radialbar-track apexcharts-track"
                                                                rel="1">
                                                                <path id="apexcharts-radialbarTrack-0"
                                                                    d="M 19.63414634146342 70 A 52.86585365853658 52.86585365853658 0 0 1 125.36585365853658 70"
                                                                    fill="none" fill-opacity="1"
                                                                    stroke="rgba(219,218,222,0.85)" stroke-opacity="1"
                                                                    stroke-linecap="round"
                                                                    stroke-width="3.1280487804878057" stroke-dasharray="0"
                                                                    class="apexcharts-radialbar-area"
                                                                    data:pathOrig="M 19.63414634146342 70 A 52.86585365853658 52.86585365853658 0 0 1 125.36585365853658 70">
                                                                </path>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1633">
                                                            <g id="SvgjsG1637"
                                                                class="apexcharts-series apexcharts-radial-series"
                                                                seriesName="Progress" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1638"
                                                                    d="M 19.63414634146342 70 A 52.86585365853658 52.86585365853658 0 0 1 112.99759342586304 36.01848429279089"
                                                                    fill="none" fill-opacity="0.85"
                                                                    stroke="rgba(255,159,67,0.85)" stroke-opacity="1"
                                                                    stroke-linecap="round"
                                                                    stroke-width="6.951219512195124" stroke-dasharray="0"
                                                                    class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                    data:angle="140" data:value="78" index="0" j="0"
                                                                    data:pathOrig="M 19.63414634146342 70 A 52.86585365853658 52.86585365853658 0 0 1 112.99759342586304 36.01848429279089">
                                                                </path>
                                                            </g>
                                                            <circle id="SvgjsCircle1634" r="46.30182926829268"
                                                                cx="72.5" cy="70"
                                                                class="apexcharts-radialbar-hollow" fill="transparent">
                                                            </circle>
                                                            <g id="SvgjsG1635" class="apexcharts-datalabels-group"
                                                                transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                                <text id="SvgjsText1636"
                                                                    font-family="Helvetica, Arial, sans-serif" x="72.5"
                                                                    y="65" text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="22px" font-weight="500" fill="#5d596c"
                                                                    class="apexcharts-text apexcharts-datalabel-value"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">78%</text>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1639" x1="0" y1="0" x2="145"
                                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                    stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1640" x1="0" y1="0" x2="145"
                                                    y2="0" stroke-dasharray="0" stroke-width="0"
                                                    stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG1625" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                    </div>
                                </div>
                                <div class="mt-md-2 text-center mt-lg-3 mt-3">
                                    <small class="text-muted mt-3">$21k Expenses more than last month</small>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 213px; height: 161px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Expenses -->

                    <!-- Profit last month -->
                    <div class="col-xl-6 mb-4 col-md-3 col-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5 class="card-title mb-0">Profit</h5>
                                <small class="text-muted">Last Month</small>
                            </div>
                            <div class="card-body" style="position: relative;">
                                <div id="profitLastMonth" style="min-height: 90px;">
                                    <div id="apexchartsxpcfw6zd"
                                        class="apexcharts-canvas apexchartsxpcfw6zd apexcharts-theme-light"
                                        style="width: 164px; height: 90px;"><svg id="SvgjsSvg1641" width="164"
                                            height="90" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG1643" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(6, 12)">
                                                <defs id="SvgjsDefs1642">
                                                    <clipPath id="gridRectMaskxpcfw6zd">
                                                        <rect id="SvgjsRect1648" width="157" height="75" x="-3"
                                                            y="-1" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskxpcfw6zd"></clipPath>
                                                    <clipPath id="nonForecastMaskxpcfw6zd"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskxpcfw6zd">
                                                        <rect id="SvgjsRect1649" width="169" height="91" x="-9"
                                                            y="-9" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <line id="SvgjsLine1647" x1="0" y1="0" x2="0"
                                                    y2="73" stroke="#b6b6b6" stroke-dasharray="3"
                                                    stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                                    width="1" height="73" fill="#b1b9c4" filter="none"
                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1666" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1667" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1676" class="apexcharts-grid">
                                                    <g id="SvgjsG1677" class="apexcharts-gridlines-horizontal"></g>
                                                    <g id="SvgjsG1678" class="apexcharts-gridlines-vertical">
                                                        <line id="SvgjsLine1679" x1="0" y1="0"
                                                            x2="0" y2="73" stroke="#dbdade"
                                                            stroke-dasharray="6" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1680" x1="30.2" y1="0"
                                                            x2="30.2" y2="73" stroke="#dbdade"
                                                            stroke-dasharray="6" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1681" x1="60.4" y1="0"
                                                            x2="60.4" y2="73" stroke="#dbdade"
                                                            stroke-dasharray="6" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1682" x1="90.6" y1="0"
                                                            x2="90.6" y2="73" stroke="#dbdade"
                                                            stroke-dasharray="6" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1683" x1="120.8" y1="0"
                                                            x2="120.8" y2="73" stroke="#dbdade"
                                                            stroke-dasharray="6" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1684" x1="151" y1="0"
                                                            x2="151" y2="73" stroke="#dbdade"
                                                            stroke-dasharray="6" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <line id="SvgjsLine1686" x1="0" y1="73"
                                                        x2="151" y2="73" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1685" x1="0" y1="1"
                                                        x2="0" y2="73" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1650" class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG1651" class="apexcharts-series" seriesName="seriesx1"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1665"
                                                            d="M 0 73L 30.2 42.58333333333333L 60.4 60.83333333333333L 90.6 24.33333333333333L 120.8 42.58333333333333L 151 6.083333333333329"
                                                            fill="none" fill-opacity="1" stroke="rgba(0,207,232,0.85)"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-line" index="0"
                                                            clip-path="url(#gridRectMaskxpcfw6zd)"
                                                            pathTo="M 0 73L 30.2 42.58333333333333L 60.4 60.83333333333333L 90.6 24.33333333333333L 120.8 42.58333333333333L 151 6.083333333333329"
                                                            pathFrom="M -1 73L -1 73L 30.2 73L 60.4 73L 90.6 73L 120.8 73L 151 73">
                                                        </path>
                                                        <g id="SvgjsG1652" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g id="SvgjsG1654" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskxpcfw6zd)">
                                                                <circle id="SvgjsCircle1655" r="3.5" cx="0"
                                                                    cy="73"
                                                                    class="apexcharts-marker no-pointer-events w0ls2rzn6"
                                                                    stroke="transparent" fill="#00cfe8" fill-opacity="1"
                                                                    stroke-width="3.2" stroke-opacity="0.9"
                                                                    rel="0" j="0" index="0"
                                                                    default-marker-size="3.5"></circle>
                                                                <circle id="SvgjsCircle1656" r="3.5" cx="30.2"
                                                                    cy="42.58333333333333"
                                                                    class="apexcharts-marker no-pointer-events wp47yk2bq"
                                                                    stroke="transparent" fill="#00cfe8" fill-opacity="1"
                                                                    stroke-width="3.2" stroke-opacity="0.9"
                                                                    rel="1" j="1" index="0"
                                                                    default-marker-size="3.5"></circle>
                                                            </g>
                                                            <g id="SvgjsG1657" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskxpcfw6zd)">
                                                                <circle id="SvgjsCircle1658" r="3.5" cx="60.4"
                                                                    cy="60.83333333333333"
                                                                    class="apexcharts-marker no-pointer-events w2msxcfzt"
                                                                    stroke="transparent" fill="#00cfe8" fill-opacity="1"
                                                                    stroke-width="3.2" stroke-opacity="0.9"
                                                                    rel="2" j="2" index="0"
                                                                    default-marker-size="3.5"></circle>
                                                            </g>
                                                            <g id="SvgjsG1659" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskxpcfw6zd)">
                                                                <circle id="SvgjsCircle1660" r="3.5" cx="90.6"
                                                                    cy="24.33333333333333"
                                                                    class="apexcharts-marker no-pointer-events wl5rij652"
                                                                    stroke="transparent" fill="#00cfe8" fill-opacity="1"
                                                                    stroke-width="3.2" stroke-opacity="0.9"
                                                                    rel="3" j="3" index="0"
                                                                    default-marker-size="3.5"></circle>
                                                            </g>
                                                            <g id="SvgjsG1661" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskxpcfw6zd)">
                                                                <circle id="SvgjsCircle1662" r="3.5" cx="120.8"
                                                                    cy="42.58333333333333"
                                                                    class="apexcharts-marker no-pointer-events wu8h6vsgi"
                                                                    stroke="transparent" fill="#00cfe8" fill-opacity="1"
                                                                    stroke-width="3.2" stroke-opacity="0.9"
                                                                    rel="4" j="4" index="0"
                                                                    default-marker-size="3.5"></circle>
                                                            </g>
                                                            <g id="SvgjsG1663" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskxpcfw6zd)">
                                                                <circle id="SvgjsCircle1664" r="5" cx="151"
                                                                    cy="6.083333333333329"
                                                                    class="apexcharts-marker no-pointer-events wl56u8t5c"
                                                                    stroke="#00cfe8" fill="#ffffff" fill-opacity="1"
                                                                    stroke-width="3.2" stroke-opacity="0.9"
                                                                    rel="5" j="5" index="0"
                                                                    default-marker-size="5"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1653" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1687" x1="0" y1="0" x2="151"
                                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                    stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1688" x1="0" y1="0" x2="151"
                                                    y2="0" stroke-dasharray="0" stroke-width="0"
                                                    stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1689" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1690" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1691" class="apexcharts-point-annotations"></g>
                                                <rect id="SvgjsRect1692" width="0" height="0" x="0" y="0"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                    class="apexcharts-zoom-rect"></rect>
                                                <rect id="SvgjsRect1693" width="0" height="0" x="0" y="0"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                    class="apexcharts-selection-rect"></rect>
                                            </g>
                                            <rect id="SvgjsRect1646" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                            <g id="SvgjsG1674" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-8, 0)">
                                                <g id="SvgjsG1675" class="apexcharts-yaxis-texts-g"></g>
                                            </g>
                                            <g id="SvgjsG1644" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 45px;"></div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                                    <h4 class="mb-0">624k</h4>
                                    <small class="text-success">+8.24%</small>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 213px; height: 161px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Profit last month -->

                    <!-- Generated Leads -->
                    <div class="col-xl-12 mb-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between" style="position: relative;">
                                    <div class="d-flex flex-column">
                                        <div class="card-title mb-auto">
                                            <h5 class="mb-1 text-nowrap">Generated Leads</h5>
                                            <small>Monthly Report</small>
                                        </div>
                                        <div class="chart-statistics">
                                            <h3 class="card-title mb-1">4,350</h3>
                                            <small class="text-success text-nowrap fw-medium"><i
                                                    class="ti ti-chevron-up me-1"></i> 15.8%</small>
                                        </div>
                                    </div>
                                    <div id="generatedLeadsChart" style="min-height: 153.8px;">
                                        <div id="apexchartst0e9ctft"
                                            class="apexcharts-canvas apexchartst0e9ctft apexcharts-theme-light"
                                            style="width: 130px; height: 153.8px;"><svg id="SvgjsSvg1694" width="130"
                                                height="153.79999999999998" xmlns="http://www.w3.org/2000/svg"
                                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1696" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(-28.5, 15)">
                                                    <defs id="SvgjsDefs1695">
                                                        <clipPath id="gridRectMaskt0e9ctft">
                                                            <rect id="SvgjsRect1698" width="191" height="132" x="-2"
                                                                y="0" rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskt0e9ctft"></clipPath>
                                                        <clipPath id="nonForecastMaskt0e9ctft"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskt0e9ctft">
                                                            <rect id="SvgjsRect1699" width="191" height="136" x="-2"
                                                                y="-2" rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG1700" class="apexcharts-pie">
                                                        <g id="SvgjsG1701" transform="translate(0, 0) scale(1)">
                                                            <circle id="SvgjsCircle1702" r="42.27317073170732"
                                                                cx="93.5" cy="66" fill="transparent">
                                                            </circle>
                                                            <g id="SvgjsG1703" class="apexcharts-slices">
                                                                <g id="SvgjsG1704"
                                                                    class="apexcharts-series apexcharts-pie-series"
                                                                    seriesName="Electronic" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath1705"
                                                                        d="M 93.5 5.609756097560975 A 60.390243902439025 60.390243902439025 0 0 1 153.8702225747668 64.44507721439629 L 135.75915580233675 64.9115540500774 A 42.27317073170732 42.27317073170732 0 0 0 93.5 23.726829268292683 L 93.5 5.609756097560975 z"
                                                                        fill="rgba(40,199,111,1)" fill-opacity="1"
                                                                        stroke-opacity="1" stroke-linecap="butt"
                                                                        stroke-width="0" stroke-dasharray="0"
                                                                        class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                        index="0" j="0"
                                                                        data:angle="88.52459016393442" data:startAngle="0"
                                                                        data:strokeWidth="0" data:value="45"
                                                                        data:pathOrig="M 93.5 5.609756097560975 A 60.390243902439025 60.390243902439025 0 0 1 153.8702225747668 64.44507721439629 L 135.75915580233675 64.9115540500774 A 42.27317073170732 42.27317073170732 0 0 0 93.5 23.726829268292683 L 93.5 5.609756097560975 z">
                                                                    </path>
                                                                </g>
                                                                <g id="SvgjsG1706"
                                                                    class="apexcharts-series apexcharts-pie-series"
                                                                    seriesName="Sports" rel="2"
                                                                    data:realIndex="1">
                                                                    <path id="SvgjsPath1707"
                                                                        d="M 153.8702225747668 64.44507721439629 A 60.390243902439025 60.390243902439025 0 0 1 70.26998080793818 121.7435894693956 L 77.23898656555673 105.02051262857694 A 42.27317073170732 42.27317073170732 0 0 0 135.75915580233675 64.9115540500774 L 153.8702225747668 64.44507721439629 z"
                                                                        fill="#28c76fb3" fill-opacity="1"
                                                                        stroke-opacity="1" stroke-linecap="butt"
                                                                        stroke-width="0" stroke-dasharray="0"
                                                                        class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                        index="0" j="1"
                                                                        data:angle="114.09836065573771"
                                                                        data:startAngle="88.52459016393442"
                                                                        data:strokeWidth="0" data:value="58"
                                                                        data:pathOrig="M 153.8702225747668 64.44507721439629 A 60.390243902439025 60.390243902439025 0 0 1 70.26998080793818 121.7435894693956 L 77.23898656555673 105.02051262857694 A 42.27317073170732 42.27317073170732 0 0 0 135.75915580233675 64.9115540500774 L 153.8702225747668 64.44507721439629 z">
                                                                    </path>
                                                                </g>
                                                                <g id="SvgjsG1708"
                                                                    class="apexcharts-series apexcharts-pie-series"
                                                                    seriesName="Decor" rel="3" data:realIndex="2">
                                                                    <path id="SvgjsPath1709"
                                                                        d="M 70.26998080793818 121.7435894693956 A 60.390243902439025 60.390243902439025 0 0 1 33.75155866739671 74.78096332531551 L 51.676091067177694 72.14667432772086 A 42.27317073170732 42.27317073170732 0 0 0 77.23898656555673 105.02051262857694 L 70.26998080793818 121.7435894693956 z"
                                                                        fill="#28c76f80" fill-opacity="1"
                                                                        stroke-opacity="1" stroke-linecap="butt"
                                                                        stroke-width="0" stroke-dasharray="0"
                                                                        class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                        index="0" j="2"
                                                                        data:angle="59.016393442622956"
                                                                        data:startAngle="202.62295081967213"
                                                                        data:strokeWidth="0" data:value="30"
                                                                        data:pathOrig="M 70.26998080793818 121.7435894693956 A 60.390243902439025 60.390243902439025 0 0 1 33.75155866739671 74.78096332531551 L 51.676091067177694 72.14667432772086 A 42.27317073170732 42.27317073170732 0 0 0 77.23898656555673 105.02051262857694 L 70.26998080793818 121.7435894693956 z">
                                                                    </path>
                                                                </g>
                                                                <g id="SvgjsG1710"
                                                                    class="apexcharts-series apexcharts-pie-series"
                                                                    seriesName="Fashion" rel="4"
                                                                    data:realIndex="3">
                                                                    <path id="SvgjsPath1711"
                                                                        d="M 33.75155866739671 74.78096332531551 A 60.390243902439025 60.390243902439025 0 0 1 93.4894599141317 5.6097570173569835 L 93.49262193989219 23.72682991214989 A 42.27317073170732 42.27317073170732 0 0 0 51.676091067177694 72.14667432772086 L 33.75155866739671 74.78096332531551 z"
                                                                        fill="#28c76f29" fill-opacity="1"
                                                                        stroke-opacity="1" stroke-linecap="butt"
                                                                        stroke-width="0" stroke-dasharray="0"
                                                                        class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                                        index="0" j="3"
                                                                        data:angle="98.36065573770492"
                                                                        data:startAngle="261.6393442622951"
                                                                        data:strokeWidth="0" data:value="50"
                                                                        data:pathOrig="M 33.75155866739671 74.78096332531551 A 60.390243902439025 60.390243902439025 0 0 1 93.4894599141317 5.6097570173569835 L 93.49262193989219 23.72682991214989 A 42.27317073170732 42.27317073170732 0 0 0 51.676091067177694 72.14667432772086 L 33.75155866739671 74.78096332531551 z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1712" class="apexcharts-datalabels-group"
                                                            transform="translate(0, 0) scale(1)"><text id="SvgjsText1713"
                                                                font-family="Public Sans" x="93.5" y="86"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size=".8125rem" font-weight="400" fill="#28c76f"
                                                                class="apexcharts-text apexcharts-datalabel-label"
                                                                style="font-family: &quot;Public Sans&quot;;">Total</text><text
                                                                id="SvgjsText1714" font-family="Public Sans" x="93.5"
                                                                y="67" text-anchor="middle" dominant-baseline="auto"
                                                                font-size="1.375rem" font-weight="500" fill="#5d596c"
                                                                class="apexcharts-text apexcharts-datalabel-value"
                                                                style="font-family: &quot;Public Sans&quot;;">184</text>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1715" x1="0" y1="0"
                                                        x2="187" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1716" x1="0" y1="0"
                                                        x2="187" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                                <g id="SvgjsG1697" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-false">
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(40, 199, 111);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgba(40, 199, 111, 0.7);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgba(40, 199, 111, 0.5);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 4;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgba(40, 199, 111, 0.16);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 401px; height: 155px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Generated Leads -->
                </div>
            </div>

            <!-- Revenue Report -->
            <div class="col-12 col-xl-8 mb-4">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row row-bordered g-0">
                            <div class="col-md-8 position-relative p-4">
                                <div class="card-header d-inline-block p-0 text-wrap position-absolute">
                                    <h5 class="m-0 card-title">Revenue Report</h5>
                                </div>
                                <div id="totalRevenueChart" class="mt-n1" style="min-height: 413px;">
                                    <div id="apexcharts9aphj654"
                                        class="apexcharts-canvas apexcharts9aphj654 apexcharts-theme-light"
                                        style="width: 565px; height: 413px;"><svg id="SvgjsSvg1717" width="565"
                                            height="413" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <foreignObject x="0" y="0" width="565" height="413">
                                                <div class="apexcharts-legend apexcharts-align-right apx-legend-position-top"
                                                    xmlns="http://www.w3.org/1999/xhtml"
                                                    style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 206.5px;">
                                                    <div class="apexcharts-legend-series" rel="1"
                                                        seriesname="Earning" data:collapsed="false"
                                                        style="margin: 2px 10px;"><span class="apexcharts-legend-marker"
                                                            rel="1" data:collapsed="false"
                                                            style="background: rgb(115, 103, 240) !important; color: rgb(115, 103, 240); height: 12px; width: 12px; left: -3px; top: 2px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                            class="apexcharts-legend-text" rel="1" i="0"
                                                            data:default-text="Earning" data:collapsed="false"
                                                            style="color: rgb(111, 107, 125); font-size: 12px; font-weight: 400; font-family: &quot;Public Sans&quot;;">Earning</span>
                                                    </div>
                                                    <div class="apexcharts-legend-series" rel="2"
                                                        seriesname="Expense" data:collapsed="false"
                                                        style="margin: 2px 10px;"><span class="apexcharts-legend-marker"
                                                            rel="2" data:collapsed="false"
                                                            style="background: rgb(255, 159, 67) !important; color: rgb(255, 159, 67); height: 12px; width: 12px; left: -3px; top: 2px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                            class="apexcharts-legend-text" rel="2" i="1"
                                                            data:default-text="Expense" data:collapsed="false"
                                                            style="color: rgb(111, 107, 125); font-size: 12px; font-weight: 400; font-family: &quot;Public Sans&quot;;">Expense</span>
                                                    </div>
                                                </div>
                                                <style type="text/css">
                                                    .apexcharts-legend {
                                                        display: flex;
                                                        overflow: auto;
                                                        padding: 0 10px;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom,
                                                    .apexcharts-legend.apx-legend-position-top {
                                                        flex-wrap: wrap
                                                    }

                                                    .apexcharts-legend.apx-legend-position-right,
                                                    .apexcharts-legend.apx-legend-position-left {
                                                        flex-direction: column;
                                                        bottom: 0;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                    .apexcharts-legend.apx-legend-position-right,
                                                    .apexcharts-legend.apx-legend-position-left {
                                                        justify-content: flex-start;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                        justify-content: center;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                        justify-content: flex-end;
                                                    }

                                                    .apexcharts-legend-series {
                                                        cursor: pointer;
                                                        line-height: normal;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                                    .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                        display: flex;
                                                        align-items: center;
                                                    }

                                                    .apexcharts-legend-text {
                                                        position: relative;
                                                        font-size: 14px;
                                                    }

                                                    .apexcharts-legend-text *,
                                                    .apexcharts-legend-marker * {
                                                        pointer-events: none;
                                                    }

                                                    .apexcharts-legend-marker {
                                                        position: relative;
                                                        display: inline-block;
                                                        cursor: pointer;
                                                        margin-right: 3px;
                                                        border-style: solid;
                                                    }

                                                    .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                    .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                        display: inline-block;
                                                    }

                                                    .apexcharts-legend-series.apexcharts-no-click {
                                                        cursor: auto;
                                                    }

                                                    .apexcharts-legend .apexcharts-hidden-zero-series,
                                                    .apexcharts-legend .apexcharts-hidden-null-series {
                                                        display: none !important;
                                                    }

                                                    .apexcharts-inactive-legend {
                                                        opacity: 0.45;
                                                    }
                                                </style>
                                            </foreignObject>
                                            <g id="SvgjsG1719" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(55.526123046875, 71)">
                                                <defs id="SvgjsDefs1718">
                                                    <linearGradient id="SvgjsLinearGradient1723" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1724" stop-opacity="0.4"
                                                            stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop1725" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop1726" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMask9aphj654">
                                                        <rect id="SvgjsRect1728" width="509.473876953125" height="316.73"
                                                            x="-5" y="-3" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask9aphj654"></clipPath>
                                                    <clipPath id="nonForecastMask9aphj654"></clipPath>
                                                    <clipPath id="gridRectMarkerMask9aphj654">
                                                        <rect id="SvgjsRect1729" width="503.473876953125" height="314.73"
                                                            x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <rect id="SvgjsRect1727" width="0" height="310.73" x="0" y="0"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke-dasharray="3" fill="url(#SvgjsLinearGradient1723)"
                                                    class="apexcharts-xcrosshairs" y2="310.73" filter="none"
                                                    fill-opacity="0.9"></rect>
                                                <g id="SvgjsG1753" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1754" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"><text id="SvgjsText1756"
                                                            font-family="Public Sans" x="27.748548719618057" y="339.73"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#a5a3ae"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: &quot;Public Sans&quot;;">
                                                            <tspan id="SvgjsTspan1757">Jan</tspan>
                                                            <title>Jan</title>
                                                        </text><text id="SvgjsText1759" font-family="Public Sans"
                                                            x="83.24564615885417" y="339.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: &quot;Public Sans&quot;;">
                                                            <tspan id="SvgjsTspan1760">Feb</tspan>
                                                            <title>Feb</title>
                                                        </text><text id="SvgjsText1762" font-family="Public Sans"
                                                            x="138.74274359809027" y="339.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: &quot;Public Sans&quot;;">
                                                            <tspan id="SvgjsTspan1763">Mar</tspan>
                                                            <title>Mar</title>
                                                        </text><text id="SvgjsText1765" font-family="Public Sans"
                                                            x="194.2398410373264" y="339.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: &quot;Public Sans&quot;;">
                                                            <tspan id="SvgjsTspan1766">Apr</tspan>
                                                            <title>Apr</title>
                                                        </text><text id="SvgjsText1768" font-family="Public Sans"
                                                            x="249.7369384765625" y="339.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: &quot;Public Sans&quot;;">
                                                            <tspan id="SvgjsTspan1769">May</tspan>
                                                            <title>May</title>
                                                        </text><text id="SvgjsText1771" font-family="Public Sans"
                                                            x="305.2340359157986" y="339.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: &quot;Public Sans&quot;;">
                                                            <tspan id="SvgjsTspan1772">Jun</tspan>
                                                            <title>Jun</title>
                                                        </text><text id="SvgjsText1774" font-family="Public Sans"
                                                            x="360.7311333550347" y="339.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: &quot;Public Sans&quot;;">
                                                            <tspan id="SvgjsTspan1775">Jul</tspan>
                                                            <title>Jul</title>
                                                        </text><text id="SvgjsText1777" font-family="Public Sans"
                                                            x="416.22823079427076" y="339.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: &quot;Public Sans&quot;;">
                                                            <tspan id="SvgjsTspan1778">Aug</tspan>
                                                            <title>Aug</title>
                                                        </text><text id="SvgjsText1780" font-family="Public Sans"
                                                            x="471.72532823350684" y="339.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: &quot;Public Sans&quot;;">
                                                            <tspan id="SvgjsTspan1781">Sep</tspan>
                                                            <title>Sep</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1796" class="apexcharts-grid">
                                                    <g id="SvgjsG1797" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1799" x1="0" y1="0"
                                                            x2="499.473876953125" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1800" x1="0" y1="62.146"
                                                            x2="499.473876953125" y2="62.146" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1801" x1="0" y1="124.292"
                                                            x2="499.473876953125" y2="124.292" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1802" x1="0" y1="186.438"
                                                            x2="499.473876953125" y2="186.438" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1803" x1="0" y1="248.584"
                                                            x2="499.473876953125" y2="248.584" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1804" x1="0" y1="310.73"
                                                            x2="499.473876953125" y2="310.73" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1798" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1806" x1="0" y1="310.73"
                                                        x2="499.473876953125" y2="310.73" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1805" x1="0" y1="1"
                                                        x2="0" y2="310.73" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1730" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG1731" class="apexcharts-series" seriesName="Earning"
                                                        rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1733"
                                                            d="M 16.649129231770836 177.43800000000002L 16.649129231770836 27.6438Q 16.649129231770836 18.6438 25.649129231770836 18.6438L 23.84796820746528 18.6438Q 32.84796820746528 18.6438 32.84796820746528 27.6438L 32.84796820746528 27.6438L 32.84796820746528 177.43800000000002Q 32.84796820746528 186.43800000000002 23.84796820746528 186.43800000000002L 25.649129231770836 186.43800000000002Q 16.649129231770836 186.43800000000002 16.649129231770836 177.43800000000002z"
                                                            fill="rgba(115,103,240,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="6" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask9aphj654)"
                                                            pathTo="M 16.649129231770836 177.43800000000002L 16.649129231770836 27.6438Q 16.649129231770836 18.6438 25.649129231770836 18.6438L 23.84796820746528 18.6438Q 32.84796820746528 18.6438 32.84796820746528 27.6438L 32.84796820746528 27.6438L 32.84796820746528 177.43800000000002Q 32.84796820746528 186.43800000000002 23.84796820746528 186.43800000000002L 25.649129231770836 186.43800000000002Q 16.649129231770836 186.43800000000002 16.649129231770836 177.43800000000002z"
                                                            pathFrom="M 16.649129231770836 177.43800000000002L 16.649129231770836 177.43800000000002L 32.84796820746528 177.43800000000002L 32.84796820746528 177.43800000000002L 32.84796820746528 177.43800000000002L 32.84796820746528 177.43800000000002L 32.84796820746528 177.43800000000002L 16.649129231770836 177.43800000000002"
                                                            cy="18.6438" cx="69.14622667100696" j="0" val="270"
                                                            barHeight="167.79420000000002"
                                                            barWidth="22.198838975694443"></path>
                                                        <path id="SvgjsPath1734"
                                                            d="M 72.14622667100696 177.43800000000002L 72.14622667100696 64.93140000000002Q 72.14622667100696 55.931400000000025 81.14622667100696 55.931400000000025L 79.3450656467014 55.931400000000025Q 88.3450656467014 55.931400000000025 88.3450656467014 64.93140000000002L 88.3450656467014 64.93140000000002L 88.3450656467014 177.43800000000002Q 88.3450656467014 186.43800000000002 79.3450656467014 186.43800000000002L 81.14622667100696 186.43800000000002Q 72.14622667100696 186.43800000000002 72.14622667100696 177.43800000000002z"
                                                            fill="rgba(115,103,240,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="6" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask9aphj654)"
                                                            pathTo="M 72.14622667100696 177.43800000000002L 72.14622667100696 64.93140000000002Q 72.14622667100696 55.931400000000025 81.14622667100696 55.931400000000025L 79.3450656467014 55.931400000000025Q 88.3450656467014 55.931400000000025 88.3450656467014 64.93140000000002L 88.3450656467014 64.93140000000002L 88.3450656467014 177.43800000000002Q 88.3450656467014 186.43800000000002 79.3450656467014 186.43800000000002L 81.14622667100696 186.43800000000002Q 72.14622667100696 186.43800000000002 72.14622667100696 177.43800000000002z"
                                                            pathFrom="M 72.14622667100696 177.43800000000002L 72.14622667100696 177.43800000000002L 88.3450656467014 177.43800000000002L 88.3450656467014 177.43800000000002L 88.3450656467014 177.43800000000002L 88.3450656467014 177.43800000000002L 88.3450656467014 177.43800000000002L 72.14622667100696 177.43800000000002"
                                                            cy="55.931400000000025" cx="124.64332411024307" j="1"
                                                            val="210" barHeight="130.5066"
                                                            barWidth="22.198838975694443"></path>
                                                        <path id="SvgjsPath1735"
                                                            d="M 127.64332411024307 177.43800000000002L 127.64332411024307 83.57520000000001Q 127.64332411024307 74.57520000000001 136.64332411024307 74.57520000000001L 134.8421630859375 74.57520000000001Q 143.8421630859375 74.57520000000001 143.8421630859375 83.57520000000001L 143.8421630859375 83.57520000000001L 143.8421630859375 177.43800000000002Q 143.8421630859375 186.43800000000002 134.8421630859375 186.43800000000002L 136.64332411024307 186.43800000000002Q 127.64332411024307 186.43800000000002 127.64332411024307 177.43800000000002z"
                                                            fill="rgba(115,103,240,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="6" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask9aphj654)"
                                                            pathTo="M 127.64332411024307 177.43800000000002L 127.64332411024307 83.57520000000001Q 127.64332411024307 74.57520000000001 136.64332411024307 74.57520000000001L 134.8421630859375 74.57520000000001Q 143.8421630859375 74.57520000000001 143.8421630859375 83.57520000000001L 143.8421630859375 83.57520000000001L 143.8421630859375 177.43800000000002Q 143.8421630859375 186.43800000000002 134.8421630859375 186.43800000000002L 136.64332411024307 186.43800000000002Q 127.64332411024307 186.43800000000002 127.64332411024307 177.43800000000002z"
                                                            pathFrom="M 127.64332411024307 177.43800000000002L 127.64332411024307 177.43800000000002L 143.8421630859375 177.43800000000002L 143.8421630859375 177.43800000000002L 143.8421630859375 177.43800000000002L 143.8421630859375 177.43800000000002L 143.8421630859375 177.43800000000002L 127.64332411024307 177.43800000000002"
                                                            cy="74.57520000000001" cx="180.14042154947919" j="2"
                                                            val="180" barHeight="111.86280000000001"
                                                            barWidth="22.198838975694443"></path>
                                                        <path id="SvgjsPath1736"
                                                            d="M 183.14042154947919 177.43800000000002L 183.14042154947919 71.14600000000002Q 183.14042154947919 62.146000000000015 192.14042154947919 62.146000000000015L 190.33926052517364 62.146000000000015Q 199.33926052517364 62.146000000000015 199.33926052517364 71.14600000000002L 199.33926052517364 71.14600000000002L 199.33926052517364 177.43800000000002Q 199.33926052517364 186.43800000000002 190.33926052517364 186.43800000000002L 192.14042154947919 186.43800000000002Q 183.14042154947919 186.43800000000002 183.14042154947919 177.43800000000002z"
                                                            fill="rgba(115,103,240,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="6" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask9aphj654)"
                                                            pathTo="M 183.14042154947919 177.43800000000002L 183.14042154947919 71.14600000000002Q 183.14042154947919 62.146000000000015 192.14042154947919 62.146000000000015L 190.33926052517364 62.146000000000015Q 199.33926052517364 62.146000000000015 199.33926052517364 71.14600000000002L 199.33926052517364 71.14600000000002L 199.33926052517364 177.43800000000002Q 199.33926052517364 186.43800000000002 190.33926052517364 186.43800000000002L 192.14042154947919 186.43800000000002Q 183.14042154947919 186.43800000000002 183.14042154947919 177.43800000000002z"
                                                            pathFrom="M 183.14042154947919 177.43800000000002L 183.14042154947919 177.43800000000002L 199.33926052517364 177.43800000000002L 199.33926052517364 177.43800000000002L 199.33926052517364 177.43800000000002L 199.33926052517364 177.43800000000002L 199.33926052517364 177.43800000000002L 183.14042154947919 177.43800000000002"
                                                            cy="62.146000000000015" cx="235.6375189887153" j="3"
                                                            val="200" barHeight="124.292"
                                                            barWidth="22.198838975694443"></path>
                                                        <path id="SvgjsPath1737"
                                                            d="M 238.6375189887153 177.43800000000002L 238.6375189887153 40.07300000000001Q 238.6375189887153 31.073000000000008 247.6375189887153 31.073000000000008L 245.83635796440973 31.073000000000008Q 254.83635796440973 31.073000000000008 254.83635796440973 40.07300000000001L 254.83635796440973 40.07300000000001L 254.83635796440973 177.43800000000002Q 254.83635796440973 186.43800000000002 245.83635796440973 186.43800000000002L 247.6375189887153 186.43800000000002Q 238.6375189887153 186.43800000000002 238.6375189887153 177.43800000000002z"
                                                            fill="rgba(115,103,240,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="6" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask9aphj654)"
                                                            pathTo="M 238.6375189887153 177.43800000000002L 238.6375189887153 40.07300000000001Q 238.6375189887153 31.073000000000008 247.6375189887153 31.073000000000008L 245.83635796440973 31.073000000000008Q 254.83635796440973 31.073000000000008 254.83635796440973 40.07300000000001L 254.83635796440973 40.07300000000001L 254.83635796440973 177.43800000000002Q 254.83635796440973 186.43800000000002 245.83635796440973 186.43800000000002L 247.6375189887153 186.43800000000002Q 238.6375189887153 186.43800000000002 238.6375189887153 177.43800000000002z"
                                                            pathFrom="M 238.6375189887153 177.43800000000002L 238.6375189887153 177.43800000000002L 254.83635796440973 177.43800000000002L 254.83635796440973 177.43800000000002L 254.83635796440973 177.43800000000002L 254.83635796440973 177.43800000000002L 254.83635796440973 177.43800000000002L 238.6375189887153 177.43800000000002"
                                                            cy="31.073000000000008" cx="291.1346164279514" j="4"
                                                            val="250" barHeight="155.365"
                                                            barWidth="22.198838975694443"></path>
                                                        <path id="SvgjsPath1738"
                                                            d="M 294.1346164279514 177.43800000000002L 294.1346164279514 21.42920000000001Q 294.1346164279514 12.429200000000009 303.1346164279514 12.429200000000009L 301.33345540364587 12.429200000000009Q 310.33345540364587 12.429200000000009 310.33345540364587 21.42920000000001L 310.33345540364587 21.42920000000001L 310.33345540364587 177.43800000000002Q 310.33345540364587 186.43800000000002 301.33345540364587 186.43800000000002L 303.1346164279514 186.43800000000002Q 294.1346164279514 186.43800000000002 294.1346164279514 177.43800000000002z"
                                                            fill="rgba(115,103,240,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="6" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask9aphj654)"
                                                            pathTo="M 294.1346164279514 177.43800000000002L 294.1346164279514 21.42920000000001Q 294.1346164279514 12.429200000000009 303.1346164279514 12.429200000000009L 301.33345540364587 12.429200000000009Q 310.33345540364587 12.429200000000009 310.33345540364587 21.42920000000001L 310.33345540364587 21.42920000000001L 310.33345540364587 177.43800000000002Q 310.33345540364587 186.43800000000002 301.33345540364587 186.43800000000002L 303.1346164279514 186.43800000000002Q 294.1346164279514 186.43800000000002 294.1346164279514 177.43800000000002z"
                                                            pathFrom="M 294.1346164279514 177.43800000000002L 294.1346164279514 177.43800000000002L 310.33345540364587 177.43800000000002L 310.33345540364587 177.43800000000002L 310.33345540364587 177.43800000000002L 310.33345540364587 177.43800000000002L 310.33345540364587 177.43800000000002L 294.1346164279514 177.43800000000002"
                                                            cy="12.429200000000009" cx="346.6317138671875" j="5"
                                                            val="280" barHeight="174.0088"
                                                            barWidth="22.198838975694443"></path>
                                                        <path id="SvgjsPath1739"
                                                            d="M 349.6317138671875 177.43800000000002L 349.6317138671875 40.07300000000001Q 349.6317138671875 31.073000000000008 358.6317138671875 31.073000000000008L 356.83055284288196 31.073000000000008Q 365.83055284288196 31.073000000000008 365.83055284288196 40.07300000000001L 365.83055284288196 40.07300000000001L 365.83055284288196 177.43800000000002Q 365.83055284288196 186.43800000000002 356.83055284288196 186.43800000000002L 358.6317138671875 186.43800000000002Q 349.6317138671875 186.43800000000002 349.6317138671875 177.43800000000002z"
                                                            fill="rgba(115,103,240,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="6" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask9aphj654)"
                                                            pathTo="M 349.6317138671875 177.43800000000002L 349.6317138671875 40.07300000000001Q 349.6317138671875 31.073000000000008 358.6317138671875 31.073000000000008L 356.83055284288196 31.073000000000008Q 365.83055284288196 31.073000000000008 365.83055284288196 40.07300000000001L 365.83055284288196 40.07300000000001L 365.83055284288196 177.43800000000002Q 365.83055284288196 186.43800000000002 356.83055284288196 186.43800000000002L 358.6317138671875 186.43800000000002Q 349.6317138671875 186.43800000000002 349.6317138671875 177.43800000000002z"
                                                            pathFrom="M 349.6317138671875 177.43800000000002L 349.6317138671875 177.43800000000002L 365.83055284288196 177.43800000000002L 365.83055284288196 177.43800000000002L 365.83055284288196 177.43800000000002L 365.83055284288196 177.43800000000002L 365.83055284288196 177.43800000000002L 349.6317138671875 177.43800000000002"
                                                            cy="31.073000000000008" cx="402.1288113064236" j="6"
                                                            val="250" barHeight="155.365"
                                                            barWidth="22.198838975694443"></path>
                                                        <path id="SvgjsPath1740"
                                                            d="M 405.1288113064236 177.43800000000002L 405.1288113064236 27.6438Q 405.1288113064236 18.6438 414.1288113064236 18.6438L 412.32765028211804 18.6438Q 421.32765028211804 18.6438 421.32765028211804 27.6438L 421.32765028211804 27.6438L 421.32765028211804 177.43800000000002Q 421.32765028211804 186.43800000000002 412.32765028211804 186.43800000000002L 414.1288113064236 186.43800000000002Q 405.1288113064236 186.43800000000002 405.1288113064236 177.43800000000002z"
                                                            fill="rgba(115,103,240,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="6" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask9aphj654)"
                                                            pathTo="M 405.1288113064236 177.43800000000002L 405.1288113064236 27.6438Q 405.1288113064236 18.6438 414.1288113064236 18.6438L 412.32765028211804 18.6438Q 421.32765028211804 18.6438 421.32765028211804 27.6438L 421.32765028211804 27.6438L 421.32765028211804 177.43800000000002Q 421.32765028211804 186.43800000000002 412.32765028211804 186.43800000000002L 414.1288113064236 186.43800000000002Q 405.1288113064236 186.43800000000002 405.1288113064236 177.43800000000002z"
                                                            pathFrom="M 405.1288113064236 177.43800000000002L 405.1288113064236 177.43800000000002L 421.32765028211804 177.43800000000002L 421.32765028211804 177.43800000000002L 421.32765028211804 177.43800000000002L 421.32765028211804 177.43800000000002L 421.32765028211804 177.43800000000002L 405.1288113064236 177.43800000000002"
                                                            cy="18.6438" cx="457.6259087456597" j="7" val="270"
                                                            barHeight="167.79420000000002"
                                                            barWidth="22.198838975694443"></path>
                                                        <path id="SvgjsPath1741"
                                                            d="M 460.6259087456597 177.43800000000002L 460.6259087456597 102.21900000000001Q 460.6259087456597 93.21900000000001 469.6259087456597 93.21900000000001L 467.82474772135413 93.21900000000001Q 476.82474772135413 93.21900000000001 476.82474772135413 102.21900000000001L 476.82474772135413 102.21900000000001L 476.82474772135413 177.43800000000002Q 476.82474772135413 186.43800000000002 467.82474772135413 186.43800000000002L 469.6259087456597 186.43800000000002Q 460.6259087456597 186.43800000000002 460.6259087456597 177.43800000000002z"
                                                            fill="rgba(115,103,240,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="6" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask9aphj654)"
                                                            pathTo="M 460.6259087456597 177.43800000000002L 460.6259087456597 102.21900000000001Q 460.6259087456597 93.21900000000001 469.6259087456597 93.21900000000001L 467.82474772135413 93.21900000000001Q 476.82474772135413 93.21900000000001 476.82474772135413 102.21900000000001L 476.82474772135413 102.21900000000001L 476.82474772135413 177.43800000000002Q 476.82474772135413 186.43800000000002 467.82474772135413 186.43800000000002L 469.6259087456597 186.43800000000002Q 460.6259087456597 186.43800000000002 460.6259087456597 177.43800000000002z"
                                                            pathFrom="M 460.6259087456597 177.43800000000002L 460.6259087456597 177.43800000000002L 476.82474772135413 177.43800000000002L 476.82474772135413 177.43800000000002L 476.82474772135413 177.43800000000002L 476.82474772135413 177.43800000000002L 476.82474772135413 177.43800000000002L 460.6259087456597 177.43800000000002"
                                                            cy="93.21900000000001" cx="513.1230061848958" j="8"
                                                            val="150" barHeight="93.21900000000001"
                                                            barWidth="22.198838975694443"></path>
                                                    </g>
                                                    <g id="SvgjsG1742" class="apexcharts-series" seriesName="Expense"
                                                        rel="2" data:realIndex="1">
                                                        <path id="SvgjsPath1744"
                                                            d="M 16.649129231770836 204.43800000000002L 16.649129231770836 273.4424Q 16.649129231770836 282.4424 25.649129231770836 282.4424L 23.84796820746528 282.4424Q 32.84796820746528 282.4424 32.84796820746528 273.4424L 32.84796820746528 273.4424L 32.84796820746528 204.43800000000002Q 32.84796820746528 195.43800000000002 23.84796820746528 195.43800000000002L 25.649129231770836 195.43800000000002Q 16.649129231770836 195.43800000000002 16.649129231770836 204.43800000000002z"
                                                            fill="rgba(255,159,67,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="6" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMask9aphj654)"
                                                            pathTo="M 16.649129231770836 204.43800000000002L 16.649129231770836 273.4424Q 16.649129231770836 282.4424 25.649129231770836 282.4424L 23.84796820746528 282.4424Q 32.84796820746528 282.4424 32.84796820746528 273.4424L 32.84796820746528 273.4424L 32.84796820746528 204.43800000000002Q 32.84796820746528 195.43800000000002 23.84796820746528 195.43800000000002L 25.649129231770836 195.43800000000002Q 16.649129231770836 195.43800000000002 16.649129231770836 204.43800000000002z"
                                                            pathFrom="M 16.649129231770836 204.43800000000002L 16.649129231770836 204.43800000000002L 32.84796820746528 204.43800000000002L 32.84796820746528 204.43800000000002L 32.84796820746528 204.43800000000002L 32.84796820746528 204.43800000000002L 32.84796820746528 204.43800000000002L 16.649129231770836 204.43800000000002"
                                                            cy="264.4424" cx="69.14622667100696" j="0" val="-140"
                                                            barHeight="-87.0044" barWidth="22.198838975694443"></path>
                                                        <path id="SvgjsPath1745"
                                                            d="M 72.14622667100696 204.43800000000002L 72.14622667100696 285.8716Q 72.14622667100696 294.8716 81.14622667100696 294.8716L 79.3450656467014 294.8716Q 88.3450656467014 294.8716 88.3450656467014 285.8716L 88.3450656467014 285.8716L 88.3450656467014 204.43800000000002Q 88.3450656467014 195.43800000000002 79.3450656467014 195.43800000000002L 81.14622667100696 195.43800000000002Q 72.14622667100696 195.43800000000002 72.14622667100696 204.43800000000002z"
                                                            fill="rgba(255,159,67,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="6" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMask9aphj654)"
                                                            pathTo="M 72.14622667100696 204.43800000000002L 72.14622667100696 285.8716Q 72.14622667100696 294.8716 81.14622667100696 294.8716L 79.3450656467014 294.8716Q 88.3450656467014 294.8716 88.3450656467014 285.8716L 88.3450656467014 285.8716L 88.3450656467014 204.43800000000002Q 88.3450656467014 195.43800000000002 79.3450656467014 195.43800000000002L 81.14622667100696 195.43800000000002Q 72.14622667100696 195.43800000000002 72.14622667100696 204.43800000000002z"
                                                            pathFrom="M 72.14622667100696 204.43800000000002L 72.14622667100696 204.43800000000002L 88.3450656467014 204.43800000000002L 88.3450656467014 204.43800000000002L 88.3450656467014 204.43800000000002L 88.3450656467014 204.43800000000002L 88.3450656467014 204.43800000000002L 72.14622667100696 204.43800000000002"
                                                            cy="276.8716" cx="124.64332411024307" j="1"
                                                            val="-160" barHeight="-99.4336"
                                                            barWidth="22.198838975694443"></path>
                                                        <path id="SvgjsPath1746"
                                                            d="M 127.64332411024307 204.43800000000002L 127.64332411024307 298.30080000000004Q 127.64332411024307 307.30080000000004 136.64332411024307 307.30080000000004L 134.8421630859375 307.30080000000004Q 143.8421630859375 307.30080000000004 143.8421630859375 298.30080000000004L 143.8421630859375 298.30080000000004L 143.8421630859375 204.43800000000002Q 143.8421630859375 195.43800000000002 134.8421630859375 195.43800000000002L 136.64332411024307 195.43800000000002Q 127.64332411024307 195.43800000000002 127.64332411024307 204.43800000000002z"
                                                            fill="rgba(255,159,67,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="6" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMask9aphj654)"
                                                            pathTo="M 127.64332411024307 204.43800000000002L 127.64332411024307 298.30080000000004Q 127.64332411024307 307.30080000000004 136.64332411024307 307.30080000000004L 134.8421630859375 307.30080000000004Q 143.8421630859375 307.30080000000004 143.8421630859375 298.30080000000004L 143.8421630859375 298.30080000000004L 143.8421630859375 204.43800000000002Q 143.8421630859375 195.43800000000002 134.8421630859375 195.43800000000002L 136.64332411024307 195.43800000000002Q 127.64332411024307 195.43800000000002 127.64332411024307 204.43800000000002z"
                                                            pathFrom="M 127.64332411024307 204.43800000000002L 127.64332411024307 204.43800000000002L 143.8421630859375 204.43800000000002L 143.8421630859375 204.43800000000002L 143.8421630859375 204.43800000000002L 143.8421630859375 204.43800000000002L 143.8421630859375 204.43800000000002L 127.64332411024307 204.43800000000002"
                                                            cy="289.30080000000004" cx="180.14042154947919" j="2"
                                                            val="-180" barHeight="-111.86280000000001"
                                                            barWidth="22.198838975694443"></path>
                                                        <path id="SvgjsPath1747"
                                                            d="M 183.14042154947919 204.43800000000002L 183.14042154947919 279.65700000000004Q 183.14042154947919 288.65700000000004 192.14042154947919 288.65700000000004L 190.33926052517364 288.65700000000004Q 199.33926052517364 288.65700000000004 199.33926052517364 279.65700000000004L 199.33926052517364 279.65700000000004L 199.33926052517364 204.43800000000002Q 199.33926052517364 195.43800000000002 190.33926052517364 195.43800000000002L 192.14042154947919 195.43800000000002Q 183.14042154947919 195.43800000000002 183.14042154947919 204.43800000000002z"
                                                            fill="rgba(255,159,67,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="6" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMask9aphj654)"
                                                            pathTo="M 183.14042154947919 204.43800000000002L 183.14042154947919 279.65700000000004Q 183.14042154947919 288.65700000000004 192.14042154947919 288.65700000000004L 190.33926052517364 288.65700000000004Q 199.33926052517364 288.65700000000004 199.33926052517364 279.65700000000004L 199.33926052517364 279.65700000000004L 199.33926052517364 204.43800000000002Q 199.33926052517364 195.43800000000002 190.33926052517364 195.43800000000002L 192.14042154947919 195.43800000000002Q 183.14042154947919 195.43800000000002 183.14042154947919 204.43800000000002z"
                                                            pathFrom="M 183.14042154947919 204.43800000000002L 183.14042154947919 204.43800000000002L 199.33926052517364 204.43800000000002L 199.33926052517364 204.43800000000002L 199.33926052517364 204.43800000000002L 199.33926052517364 204.43800000000002L 199.33926052517364 204.43800000000002L 183.14042154947919 204.43800000000002"
                                                            cy="270.65700000000004" cx="235.6375189887153" j="3"
                                                            val="-150" barHeight="-93.21900000000001"
                                                            barWidth="22.198838975694443"></path>
                                                        <path id="SvgjsPath1748"
                                                            d="M 238.6375189887153 204.43800000000002L 238.6375189887153 248.584Q 238.6375189887153 257.584 247.6375189887153 257.584L 245.83635796440973 257.584Q 254.83635796440973 257.584 254.83635796440973 248.584L 254.83635796440973 248.584L 254.83635796440973 204.43800000000002Q 254.83635796440973 195.43800000000002 245.83635796440973 195.43800000000002L 247.6375189887153 195.43800000000002Q 238.6375189887153 195.43800000000002 238.6375189887153 204.43800000000002z"
                                                            fill="rgba(255,159,67,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="6" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMask9aphj654)"
                                                            pathTo="M 238.6375189887153 204.43800000000002L 238.6375189887153 248.584Q 238.6375189887153 257.584 247.6375189887153 257.584L 245.83635796440973 257.584Q 254.83635796440973 257.584 254.83635796440973 248.584L 254.83635796440973 248.584L 254.83635796440973 204.43800000000002Q 254.83635796440973 195.43800000000002 245.83635796440973 195.43800000000002L 247.6375189887153 195.43800000000002Q 238.6375189887153 195.43800000000002 238.6375189887153 204.43800000000002z"
                                                            pathFrom="M 238.6375189887153 204.43800000000002L 238.6375189887153 204.43800000000002L 254.83635796440973 204.43800000000002L 254.83635796440973 204.43800000000002L 254.83635796440973 204.43800000000002L 254.83635796440973 204.43800000000002L 254.83635796440973 204.43800000000002L 238.6375189887153 204.43800000000002"
                                                            cy="239.584" cx="291.1346164279514" j="4" val="-100"
                                                            barHeight="-62.146" barWidth="22.198838975694443"></path>
                                                        <path id="SvgjsPath1749"
                                                            d="M 294.1346164279514 204.43800000000002L 294.1346164279514 223.72560000000001Q 294.1346164279514 232.72560000000001 303.1346164279514 232.72560000000001L 301.33345540364587 232.72560000000001Q 310.33345540364587 232.72560000000001 310.33345540364587 223.72560000000001L 310.33345540364587 223.72560000000001L 310.33345540364587 204.43800000000002Q 310.33345540364587 195.43800000000002 301.33345540364587 195.43800000000002L 303.1346164279514 195.43800000000002Q 294.1346164279514 195.43800000000002 294.1346164279514 204.43800000000002z"
                                                            fill="rgba(255,159,67,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="6" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMask9aphj654)"
                                                            pathTo="M 294.1346164279514 204.43800000000002L 294.1346164279514 223.72560000000001Q 294.1346164279514 232.72560000000001 303.1346164279514 232.72560000000001L 301.33345540364587 232.72560000000001Q 310.33345540364587 232.72560000000001 310.33345540364587 223.72560000000001L 310.33345540364587 223.72560000000001L 310.33345540364587 204.43800000000002Q 310.33345540364587 195.43800000000002 301.33345540364587 195.43800000000002L 303.1346164279514 195.43800000000002Q 294.1346164279514 195.43800000000002 294.1346164279514 204.43800000000002z"
                                                            pathFrom="M 294.1346164279514 204.43800000000002L 294.1346164279514 204.43800000000002L 310.33345540364587 204.43800000000002L 310.33345540364587 204.43800000000002L 310.33345540364587 204.43800000000002L 310.33345540364587 204.43800000000002L 310.33345540364587 204.43800000000002L 294.1346164279514 204.43800000000002"
                                                            cy="214.72560000000001" cx="346.6317138671875" j="5"
                                                            val="-60" barHeight="-37.287600000000005"
                                                            barWidth="22.198838975694443"></path>
                                                        <path id="SvgjsPath1750"
                                                            d="M 349.6317138671875 204.43800000000002L 349.6317138671875 236.15480000000002Q 349.6317138671875 245.15480000000002 358.6317138671875 245.15480000000002L 356.83055284288196 245.15480000000002Q 365.83055284288196 245.15480000000002 365.83055284288196 236.15480000000002L 365.83055284288196 236.15480000000002L 365.83055284288196 204.43800000000002Q 365.83055284288196 195.43800000000002 356.83055284288196 195.43800000000002L 358.6317138671875 195.43800000000002Q 349.6317138671875 195.43800000000002 349.6317138671875 204.43800000000002z"
                                                            fill="rgba(255,159,67,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="6" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMask9aphj654)"
                                                            pathTo="M 349.6317138671875 204.43800000000002L 349.6317138671875 236.15480000000002Q 349.6317138671875 245.15480000000002 358.6317138671875 245.15480000000002L 356.83055284288196 245.15480000000002Q 365.83055284288196 245.15480000000002 365.83055284288196 236.15480000000002L 365.83055284288196 236.15480000000002L 365.83055284288196 204.43800000000002Q 365.83055284288196 195.43800000000002 356.83055284288196 195.43800000000002L 358.6317138671875 195.43800000000002Q 349.6317138671875 195.43800000000002 349.6317138671875 204.43800000000002z"
                                                            pathFrom="M 349.6317138671875 204.43800000000002L 349.6317138671875 204.43800000000002L 365.83055284288196 204.43800000000002L 365.83055284288196 204.43800000000002L 365.83055284288196 204.43800000000002L 365.83055284288196 204.43800000000002L 365.83055284288196 204.43800000000002L 349.6317138671875 204.43800000000002"
                                                            cy="227.15480000000002" cx="402.1288113064236" j="6"
                                                            val="-80" barHeight="-49.7168"
                                                            barWidth="22.198838975694443"></path>
                                                        <path id="SvgjsPath1751"
                                                            d="M 405.1288113064236 204.43800000000002L 405.1288113064236 248.584Q 405.1288113064236 257.584 414.1288113064236 257.584L 412.32765028211804 257.584Q 421.32765028211804 257.584 421.32765028211804 248.584L 421.32765028211804 248.584L 421.32765028211804 204.43800000000002Q 421.32765028211804 195.43800000000002 412.32765028211804 195.43800000000002L 414.1288113064236 195.43800000000002Q 405.1288113064236 195.43800000000002 405.1288113064236 204.43800000000002z"
                                                            fill="rgba(255,159,67,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="6" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMask9aphj654)"
                                                            pathTo="M 405.1288113064236 204.43800000000002L 405.1288113064236 248.584Q 405.1288113064236 257.584 414.1288113064236 257.584L 412.32765028211804 257.584Q 421.32765028211804 257.584 421.32765028211804 248.584L 421.32765028211804 248.584L 421.32765028211804 204.43800000000002Q 421.32765028211804 195.43800000000002 412.32765028211804 195.43800000000002L 414.1288113064236 195.43800000000002Q 405.1288113064236 195.43800000000002 405.1288113064236 204.43800000000002z"
                                                            pathFrom="M 405.1288113064236 204.43800000000002L 405.1288113064236 204.43800000000002L 421.32765028211804 204.43800000000002L 421.32765028211804 204.43800000000002L 421.32765028211804 204.43800000000002L 421.32765028211804 204.43800000000002L 421.32765028211804 204.43800000000002L 405.1288113064236 204.43800000000002"
                                                            cy="239.584" cx="457.6259087456597" j="7" val="-100"
                                                            barHeight="-62.146" barWidth="22.198838975694443"></path>
                                                        <path id="SvgjsPath1752"
                                                            d="M 460.6259087456597 204.43800000000002L 460.6259087456597 298.30080000000004Q 460.6259087456597 307.30080000000004 469.6259087456597 307.30080000000004L 467.82474772135413 307.30080000000004Q 476.82474772135413 307.30080000000004 476.82474772135413 298.30080000000004L 476.82474772135413 298.30080000000004L 476.82474772135413 204.43800000000002Q 476.82474772135413 195.43800000000002 467.82474772135413 195.43800000000002L 469.6259087456597 195.43800000000002Q 460.6259087456597 195.43800000000002 460.6259087456597 204.43800000000002z"
                                                            fill="rgba(255,159,67,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="6" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMask9aphj654)"
                                                            pathTo="M 460.6259087456597 204.43800000000002L 460.6259087456597 298.30080000000004Q 460.6259087456597 307.30080000000004 469.6259087456597 307.30080000000004L 467.82474772135413 307.30080000000004Q 476.82474772135413 307.30080000000004 476.82474772135413 298.30080000000004L 476.82474772135413 298.30080000000004L 476.82474772135413 204.43800000000002Q 476.82474772135413 195.43800000000002 467.82474772135413 195.43800000000002L 469.6259087456597 195.43800000000002Q 460.6259087456597 195.43800000000002 460.6259087456597 204.43800000000002z"
                                                            pathFrom="M 460.6259087456597 204.43800000000002L 460.6259087456597 204.43800000000002L 476.82474772135413 204.43800000000002L 476.82474772135413 204.43800000000002L 476.82474772135413 204.43800000000002L 476.82474772135413 204.43800000000002L 476.82474772135413 204.43800000000002L 460.6259087456597 204.43800000000002"
                                                            cy="289.30080000000004" cx="513.1230061848958" j="8"
                                                            val="-180" barHeight="-111.86280000000001"
                                                            barWidth="22.198838975694443"></path>
                                                    </g>
                                                    <g id="SvgjsG1732" class="apexcharts-datalabels"
                                                        data:realIndex="0"></g>
                                                    <g id="SvgjsG1743" class="apexcharts-datalabels"
                                                        data:realIndex="1"></g>
                                                </g>
                                                <line id="SvgjsLine1807" x1="0" y1="0"
                                                    x2="499.473876953125" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1808" x1="0" y1="0"
                                                    x2="499.473876953125" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1809" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1810" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1811" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <g id="SvgjsG1782" class="apexcharts-yaxis" rel="0"
                                                transform="translate(9.526123046875, 0)">
                                                <g id="SvgjsG1783" class="apexcharts-yaxis-texts-g"><text
                                                        id="SvgjsText1784" font-family="Public Sans" x="20" y="72.5"
                                                        text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                        font-weight="400" fill="#a5a3ae"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: &quot;Public Sans&quot;;">
                                                        <tspan id="SvgjsTspan1785">300</tspan>
                                                        <title>300</title>
                                                    </text><text id="SvgjsText1786" font-family="Public Sans" x="20"
                                                        y="134.64600000000002" text-anchor="end"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a5a3ae" class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: &quot;Public Sans&quot;;">
                                                        <tspan id="SvgjsTspan1787">200</tspan>
                                                        <title>200</title>
                                                    </text><text id="SvgjsText1788" font-family="Public Sans" x="20"
                                                        y="196.79200000000003" text-anchor="end"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a5a3ae" class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: &quot;Public Sans&quot;;">
                                                        <tspan id="SvgjsTspan1789">100</tspan>
                                                        <title>100</title>
                                                    </text><text id="SvgjsText1790" font-family="Public Sans" x="20"
                                                        y="258.93800000000005" text-anchor="end"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a5a3ae" class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: &quot;Public Sans&quot;;">
                                                        <tspan id="SvgjsTspan1791">0</tspan>
                                                        <title>0</title>
                                                    </text><text id="SvgjsText1792" font-family="Public Sans" x="20"
                                                        y="321.08400000000006" text-anchor="end"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a5a3ae" class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: &quot;Public Sans&quot;;">
                                                        <tspan id="SvgjsTspan1793">-100</tspan>
                                                        <title>-100</title>
                                                    </text><text id="SvgjsText1794" font-family="Public Sans" x="20"
                                                        y="383.2300000000001" text-anchor="end" dominant-baseline="auto"
                                                        font-size="13px" font-weight="400" fill="#a5a3ae"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: &quot;Public Sans&quot;;">
                                                        <tspan id="SvgjsTspan1795">-200</tspan>
                                                        <title>-200</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1720" class="apexcharts-annotations"></g>
                                        </svg></div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 614px; height: 458px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                            <div class="col-md-4 p-4">
                                <div class="text-center mt-4">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-primary dropdown-toggle waves-effect"
                                            type="button" id="budgetId" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" fdprocessedid="3w4yia">
                                            <script>
                                                document.write(new Date().getFullYear())
                                            </script>2023
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="budgetId">
                                            <a class="dropdown-item prev-year1" href="javascript:void(0);">
                                                <script>
                                                    document.write(new Date().getFullYear() - 1)
                                                </script>2022
                                            </a>
                                            <a class="dropdown-item prev-year2" href="javascript:void(0);">
                                                <script>
                                                    document.write(new Date().getFullYear() - 2)
                                                </script>2021
                                            </a>
                                            <a class="dropdown-item prev-year3" href="javascript:void(0);">
                                                <script>
                                                    document.write(new Date().getFullYear() - 3)
                                                </script>2020
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="text-center pt-4 mb-0">$25,825</h3>
                                <p class="mb-4 text-center"><span class="fw-medium">Budget: </span>56,800</p>
                                <div class="px-3" style="position: relative;">
                                    <div id="budgetChart" style="min-height: 115px;">
                                        <div id="apexchartsc0umvcz5h"
                                            class="apexcharts-canvas apexchartsc0umvcz5h apexcharts-theme-light"
                                            style="width: 227px; height: 100px;"><svg id="SvgjsSvg1812" width="227"
                                                height="100" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1814" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(25, 0)">
                                                    <defs id="SvgjsDefs1813">
                                                        <clipPath id="gridRectMaskc0umvcz5h">
                                                            <rect id="SvgjsRect1819" width="198" height="102"
                                                                x="-3" y="-1" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskc0umvcz5h"></clipPath>
                                                        <clipPath id="nonForecastMaskc0umvcz5h"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskc0umvcz5h">
                                                            <rect id="SvgjsRect1820" width="196" height="104"
                                                                x="-2" y="-2" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <line id="SvgjsLine1818" x1="0" y1="0"
                                                        x2="0" y2="100" stroke="#b6b6b6"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                        height="100" fill="#b1b9c4" filter="none"
                                                        fill-opacity="0.9" stroke-width="1"></line>
                                                    <g id="SvgjsG1830" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1831" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1844" class="apexcharts-grid">
                                                        <g id="SvgjsG1845" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1847" x1="0" y1="0"
                                                                x2="192" y2="0" stroke="#dbdade"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1848" x1="0" y1="25"
                                                                x2="192" y2="25" stroke="#dbdade"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1849" x1="0" y1="50"
                                                                x2="192" y2="50" stroke="#dbdade"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1850" x1="0" y1="75"
                                                                x2="192" y2="75" stroke="#dbdade"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1851" x1="0" y1="100"
                                                                x2="192" y2="100" stroke="#dbdade"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1846" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine1853" x1="0" y1="100"
                                                            x2="192" y2="100" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1852" x1="0" y1="1"
                                                            x2="0" y2="100" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1821"
                                                        class="apexcharts-line-series apexcharts-plot-series">
                                                        <g id="SvgjsG1822" class="apexcharts-series"
                                                            seriesName="LastxMonth" data:longestSeries="true"
                                                            rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1825"
                                                                d="M 0 75C 6.72 75 12.48 87.5 19.2 87.5C 25.919999999999998 87.5 31.68 62.5 38.4 62.5C 45.12 62.5 50.879999999999995 80 57.599999999999994 80C 64.32 80 70.08 70 76.8 70C 83.52 70 89.28 93.75 96 93.75C 102.72 93.75 108.47999999999999 50 115.19999999999999 50C 121.91999999999999 50 127.68 71.25 134.4 71.25C 141.12 71.25 146.88 65 153.6 65C 160.32 65 166.07999999999998 93.75 172.79999999999998 93.75C 179.51999999999998 93.75 185.28 62.5 192 62.5"
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(219,218,222,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="1"
                                                                stroke-dasharray="5" class="apexcharts-line"
                                                                index="0" clip-path="url(#gridRectMaskc0umvcz5h)"
                                                                pathTo="M 0 75C 6.72 75 12.48 87.5 19.2 87.5C 25.919999999999998 87.5 31.68 62.5 38.4 62.5C 45.12 62.5 50.879999999999995 80 57.599999999999994 80C 64.32 80 70.08 70 76.8 70C 83.52 70 89.28 93.75 96 93.75C 102.72 93.75 108.47999999999999 50 115.19999999999999 50C 121.91999999999999 50 127.68 71.25 134.4 71.25C 141.12 71.25 146.88 65 153.6 65C 160.32 65 166.07999999999998 93.75 172.79999999999998 93.75C 179.51999999999998 93.75 185.28 62.5 192 62.5"
                                                                pathFrom="M -1 100L -1 100L 19.2 100L 38.4 100L 57.599999999999994 100L 76.8 100L 96 100L 115.19999999999999 100L 134.4 100L 153.6 100L 172.79999999999998 100L 192 100">
                                                            </path>
                                                            <g id="SvgjsG1823" class="apexcharts-series-markers-wrap"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <g id="SvgjsG1826" class="apexcharts-series"
                                                            seriesName="ThisxMonth" data:longestSeries="true"
                                                            rel="2" data:realIndex="1">
                                                            <path id="SvgjsPath1829"
                                                                d="M 0 37.5C 6.72 37.5 12.48 50 19.2 50C 25.919999999999998 50 31.68 25 38.4 25C 45.12 25 50.879999999999995 42.5 57.599999999999994 42.5C 64.32 42.5 70.08 32.5 76.8 32.5C 83.52 32.5 89.28 56.25 96 56.25C 102.72 56.25 108.47999999999999 12.5 115.19999999999999 12.5C 121.91999999999999 12.5 127.68 33.75 134.4 33.75C 141.12 33.75 146.88 27.5 153.6 27.5C 160.32 27.5 166.07999999999998 56.25 172.79999999999998 56.25C 179.51999999999998 56.25 185.28 25 192 25"
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(115,103,240,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-line"
                                                                index="1" clip-path="url(#gridRectMaskc0umvcz5h)"
                                                                pathTo="M 0 37.5C 6.72 37.5 12.48 50 19.2 50C 25.919999999999998 50 31.68 25 38.4 25C 45.12 25 50.879999999999995 42.5 57.599999999999994 42.5C 64.32 42.5 70.08 32.5 76.8 32.5C 83.52 32.5 89.28 56.25 96 56.25C 102.72 56.25 108.47999999999999 12.5 115.19999999999999 12.5C 121.91999999999999 12.5 127.68 33.75 134.4 33.75C 141.12 33.75 146.88 27.5 153.6 27.5C 160.32 27.5 166.07999999999998 56.25 172.79999999999998 56.25C 179.51999999999998 56.25 185.28 25 192 25"
                                                                pathFrom="M -1 100L -1 100L 19.2 100L 38.4 100L 57.599999999999994 100L 76.8 100L 96 100L 115.19999999999999 100L 134.4 100L 153.6 100L 172.79999999999998 100L 192 100">
                                                            </path>
                                                            <g id="SvgjsG1827" class="apexcharts-series-markers-wrap"
                                                                data:realIndex="1"></g>
                                                        </g>
                                                        <g id="SvgjsG1824" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                        <g id="SvgjsG1828" class="apexcharts-datalabels"
                                                            data:realIndex="1"></g>
                                                    </g>
                                                    <line id="SvgjsLine1854" x1="0" y1="0"
                                                        x2="192" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1855" x1="0" y1="0"
                                                        x2="192" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1856" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1857" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1858" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect1817" width="0" height="0" x="0" y="0"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g id="SvgjsG1843" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG1815" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 50px;"></div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 260px; height: 116px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        fdprocessedid="bvqdbh">Increase Budget</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

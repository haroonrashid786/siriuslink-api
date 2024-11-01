@extends('layouts.app')
@section('title')
{{ 'Dashboard' }}
@endsection
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    {{ __('You are logged in!') }}
</div>
</div>
</div>
</div>
</div> --}}

{{-- <div class="container-fluid"> --}}

<!-- start page title -->
{{-- <div class="page-title-right">
        <ol class="breadcrumb m-0 ps-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
            <li class="breadcrumb-item active">Saas</li>
        </ol>
    </div> --}}
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Dashboard</h4>



        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        {{-- <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                                </div>
                                <div class="flex-grow-1 align-self-center">
                                    <div class="text-muted">
                                        <p class="mb-2">Welcome to SiriusLink Dashboard</p>
                                        <h5 class="mb-1">Admin</h5>
                                        <p class="mb-0">UI / UX Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 align-self-center">
                            <div class="text-lg-center mt-4 mt-lg-0">
                                <div class="row">
                                    <div class="col-4">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Total Projects</p>
                                            <h5 class="mb-0">48</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Projects</p>
                                            <h5 class="mb-0">40</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Clients</p>
                                            <h5 class="mb-0">18</h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="clearfix mt-4 mt-lg-0">
                                <div class="dropdown float-end">
                                    <button class="btn btn-primary" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bxs-cog align-middle me-1"></i> Setting
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div> --}}
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-4">
        <div class="card bg-primary bg-soft">
            <div>
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-primary">Welcome Back !</h5>
                            <p>SiriusLink</p>
                            <p>Admin Dashboard</p>

                            {{-- <ul class="ps-3 mb-0">
                                    <li class="py-1">{{ count($shippers) }} Shipper(s)</li>
                            <li class="py-1">{{ count($carriers) }} Carrier(s)</li>
                            </ul> --}}
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar-xs me-3">
                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                    <i class="bx bx-copy-alt"></i>
                                </span>
                            </div>
                            <h5 class="font-size-14 mb-0">Orders</h5>
                        </div>
                        <div class="text-muted mt-4">
                            <h4>{{ 0 }} </h4>
                            {{-- <div class="d-flex">
                                    <span class="badge badge-soft-success font-size-12"> + 0.2% </span> <span class="ms-2 text-truncate">From previous period</span>
                                </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar-xs me-3">
                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                    <i class="bx bx-archive-in"></i>
                                </span>
                            </div>
                            <h5 class="font-size-14 mb-0">Shippers</h5>
                        </div>
                        <div class="text-muted mt-4">
                            <h4>{{ 0 }} </h4>
                            {{-- <div class="d-flex">
                                    <span class="badge badge-soft-success font-size-12"> + 0.2% </span> <span class="ms-2 text-truncate">From previous period</span>
                                </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar-xs me-3">
                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                    <i class="bx bx-purchase-tag-alt"></i>
                                </span>
                            </div>
                            <h5 class="font-size-14 mb-0">Carriers</h5>
                        </div>
                        <div class="text-muted mt-4">
                            <h4>{{ 0 }} </h4>

                            {{-- <div class="d-flex">
                                    <span class="badge badge-soft-warning font-size-12"> 0% </span> <span class="ms-2 text-truncate">From previous period</span>
                                </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>

<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body">
                {{-- <div class="clearfix">
                        <div class="float-end">
                            <div class="input-group input-group-sm">
                                <select class="form-select form-select-sm">
                                    <option value="JA" selected="">Jan</option>
                                    <option value="DE">Dec</option>
                                    <option value="NO">Nov</option>
                                    <option value="OC">Oct</option>
                                </select>
                                <label class="input-group-text">Month</label>
                            </div>
                        </div>
                        <h4 class="card-title mb-4">Earning</h4>
                    </div> --}}

                <div class="row">
                    {{-- <div class="col-lg-4">
                            <div class="text-muted">
                                <div class="mb-4">
                                    <p>This month</p>
                                    <h4>$2453.35</h4>
                                    <div><span class="badge badge-soft-success font-size-12 me-1"> + 0.2% </span> From
                                        previous period</div>
                                </div>

                                <div>
                                    <a href="javascript: void(0);"
                                        class="btn btn-primary waves-effect waves-light btn-sm">View Details <i
                                            class="mdi mdi-chevron-right ms-1"></i></a>
                                </div>

                                <div class="mt-4">
                                    <p class="mb-2">Last month</p>
                                    <h5>$2281.04</h5>
                                </div>

                            </div>
                        </div> --}}

                    <div class="col-lg-12">
                        {{-- <div id="line-chart-cst" class="apex-charts" data-colors="[&quot;--bs-primary&quot;]" dir="ltr" style="min-height: 335px;"><div id="apexchartsoeoa4dvj" class="apexcharts-canvas apexchartsoeoa4dvj apexcharts-theme-light" style="width: 568px; height: 320px;"><svg id="SvgjsSvg1211" width="568" height="320" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background-color: transparent;"><g id="SvgjsG1213" class="apexcharts-inner apexcharts-graphical" transform="translate(40.84375, 30)"><defs id="SvgjsDefs1212"><clipPath id="gridRectMaskoeoa4dvj"><rect id="SvgjsRect1219" width="524.15625" height="250.797375" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskoeoa4dvj"><rect id="SvgjsRect1220" width="521.15625" height="251.797375" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter1226" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1227" flood-color="#000000" flood-opacity="0.2" result="SvgjsFeFlood1227Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1228" in="SvgjsFeFlood1227Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1228Out"></feComposite><feOffset id="SvgjsFeOffset1229" dx="7" dy="18" result="SvgjsFeOffset1229Out" in="SvgjsFeComposite1228Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1230" stdDeviation="8 " result="SvgjsFeGaussianBlur1230Out" in="SvgjsFeOffset1229Out"></feGaussianBlur><feBlend id="SvgjsFeBlend1231" in="SourceGraphic" in2="SvgjsFeGaussianBlur1230Out" mode="normal" result="SvgjsFeBlend1231Out"></feBlend></filter></defs><line id="SvgjsLine1218" x1="0" y1="0" x2="0" y2="247.797375" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="247.797375" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1232" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1233" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1235" font-family="Helvetica, Arial, sans-serif" x="0" y="276.797375" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1236">1</tspan><title>1</title></text><text id="SvgjsText1238" font-family="Helvetica, Arial, sans-serif" x="47.01420454545454" y="276.797375" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1239">2</tspan><title>2</title></text><text id="SvgjsText1241" font-family="Helvetica, Arial, sans-serif" x="94.0284090909091" y="276.797375" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1242">3</tspan><title>3</title></text><text id="SvgjsText1244" font-family="Helvetica, Arial, sans-serif" x="141.04261363636363" y="276.797375" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1245">4</tspan><title>4</title></text><text id="SvgjsText1247" font-family="Helvetica, Arial, sans-serif" x="188.05681818181816" y="276.797375" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1248">5</tspan><title>5</title></text><text id="SvgjsText1250" font-family="Helvetica, Arial, sans-serif" x="235.07102272727272" y="276.797375" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1251">6</tspan><title>6</title></text><text id="SvgjsText1253" font-family="Helvetica, Arial, sans-serif" x="282.0852272727273" y="276.797375" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1254">7</tspan><title>7</title></text><text id="SvgjsText1256" font-family="Helvetica, Arial, sans-serif" x="329.09943181818187" y="276.797375" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1257">8</tspan><title>8</title></text><text id="SvgjsText1259" font-family="Helvetica, Arial, sans-serif" x="376.11363636363643" y="276.797375" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1260">9</tspan><title>9</title></text><text id="SvgjsText1262" font-family="Helvetica, Arial, sans-serif" x="423.127840909091" y="276.797375" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1263">10</tspan><title>10</title></text><text id="SvgjsText1265" font-family="Helvetica, Arial, sans-serif" x="470.14204545454555" y="276.797375" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1266">11</tspan><title>11</title></text><text id="SvgjsText1268" font-family="Helvetica, Arial, sans-serif" x="517.1562500000001" y="276.797375" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1269">12</tspan><title>12</title></text></g><line id="SvgjsLine1270" x1="0" y1="248.797375" x2="517.15625" y2="248.797375" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG1289" class="apexcharts-grid"><g id="SvgjsG1290" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1304" x1="0" y1="0" x2="517.15625" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1305" x1="0" y1="35.399625" x2="517.15625" y2="35.399625" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1306" x1="0" y1="70.79925" x2="517.15625" y2="70.79925" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1307" x1="0" y1="106.198875" x2="517.15625" y2="106.198875" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1308" x1="0" y1="141.5985" x2="517.15625" y2="141.5985" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1309" x1="0" y1="176.99812500000002" x2="517.15625" y2="176.99812500000002" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1310" x1="0" y1="212.39775000000003" x2="517.15625" y2="212.39775000000003" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1311" x1="0" y1="247.79737500000005" x2="517.15625" y2="247.79737500000005" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1291" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1292" x1="0" y1="248.797375" x2="0" y2="254.797375" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1293" x1="47.01420454545455" y1="248.797375" x2="47.01420454545455" y2="254.797375" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1294" x1="94.0284090909091" y1="248.797375" x2="94.0284090909091" y2="254.797375" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1295" x1="141.04261363636363" y1="248.797375" x2="141.04261363636363" y2="254.797375" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1296" x1="188.0568181818182" y1="248.797375" x2="188.0568181818182" y2="254.797375" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1297" x1="235.07102272727275" y1="248.797375" x2="235.07102272727275" y2="254.797375" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1298" x1="282.0852272727273" y1="248.797375" x2="282.0852272727273" y2="254.797375" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1299" x1="329.09943181818187" y1="248.797375" x2="329.09943181818187" y2="254.797375" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1300" x1="376.11363636363643" y1="248.797375" x2="376.11363636363643" y2="254.797375" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1301" x1="423.127840909091" y1="248.797375" x2="423.127840909091" y2="254.797375" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1302" x1="470.14204545454555" y1="248.797375" x2="470.14204545454555" y2="254.797375" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1303" x1="517.1562500000001" y1="248.797375" x2="517.1562500000001" y2="254.797375" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1313" x1="0" y1="247.797375" x2="517.15625" y2="247.797375" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1312" x1="0" y1="1" x2="0" y2="247.797375" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1221" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1222" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1225" d="M 0 208.85778749999997C 16.45497159090909 208.85778749999997 30.559232954545458 176.998125 47.01420454545455 176.998125C 63.469176136363636 176.998125 77.57343750000001 191.15797499999996 94.0284090909091 191.15797499999996C 110.48338068181819 191.15797499999996 124.58764204545456 138.05853749999997 141.04261363636365 138.05853749999997C 157.49758522727274 138.05853749999997 171.6018465909091 145.13846249999997 188.0568181818182 145.13846249999997C 204.5117897727273 145.13846249999997 218.61605113636364 63.719325 235.07102272727275 63.719325C 251.52599431818186 63.719325 265.6302556818182 74.33921249999997 282.0852272727273 74.33921249999997C 298.54019886363636 74.33921249999997 312.64446022727276 120.35872499999999 329.0994318181818 120.35872499999999C 345.5544034090909 120.35872499999999 359.65866477272726 77.87917499999998 376.1136363636364 77.87917499999998C 392.5686079545455 77.87917499999998 406.6728693181818 28.31970000000001 423.12784090909093 28.31970000000001C 439.58281250000005 28.31970000000001 453.6870738636364 77.87917499999998 470.1420454545455 77.87917499999998C 486.59701704545455 77.87917499999998 500.70127840909095 49.55947499999996 517.15625 49.55947499999996" fill="none" fill-opacity="1" stroke="rgba(85,110,230,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskoeoa4dvj)" filter="url(#SvgjsFilter1226)" pathTo="M 0 208.85778749999997C 16.45497159090909 208.85778749999997 30.559232954545458 176.998125 47.01420454545455 176.998125C 63.469176136363636 176.998125 77.57343750000001 191.15797499999996 94.0284090909091 191.15797499999996C 110.48338068181819 191.15797499999996 124.58764204545456 138.05853749999997 141.04261363636365 138.05853749999997C 157.49758522727274 138.05853749999997 171.6018465909091 145.13846249999997 188.0568181818182 145.13846249999997C 204.5117897727273 145.13846249999997 218.61605113636364 63.719325 235.07102272727275 63.719325C 251.52599431818186 63.719325 265.6302556818182 74.33921249999997 282.0852272727273 74.33921249999997C 298.54019886363636 74.33921249999997 312.64446022727276 120.35872499999999 329.0994318181818 120.35872499999999C 345.5544034090909 120.35872499999999 359.65866477272726 77.87917499999998 376.1136363636364 77.87917499999998C 392.5686079545455 77.87917499999998 406.6728693181818 28.31970000000001 423.12784090909093 28.31970000000001C 439.58281250000005 28.31970000000001 453.6870738636364 77.87917499999998 470.1420454545455 77.87917499999998C 486.59701704545455 77.87917499999998 500.70127840909095 49.55947499999996 517.15625 49.55947499999996" pathFrom="M -1 318.59662499999996L -1 318.59662499999996L 47.01420454545455 318.59662499999996L 94.0284090909091 318.59662499999996L 141.04261363636365 318.59662499999996L 188.0568181818182 318.59662499999996L 235.07102272727275 318.59662499999996L 282.0852272727273 318.59662499999996L 329.0994318181818 318.59662499999996L 376.1136363636364 318.59662499999996L 423.12784090909093 318.59662499999996L 470.1420454545455 318.59662499999996L 517.15625 318.59662499999996"></path><g id="SvgjsG1223" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1319" r="0" cx="0" cy="0" class="apexcharts-marker wilx9uqpsf no-pointer-events" stroke="#ffffff" fill="#556ee6" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1224" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1314" x1="0" y1="0" x2="517.15625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1315" x1="0" y1="0" x2="517.15625" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1316" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1317" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1318" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1320" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1321" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1217" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1271" class="apexcharts-yaxis" rel="0" transform="translate(10.84375, 0)"><g id="SvgjsG1272" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1273" font-family="Helvetica, Arial, sans-serif" x="20" y="31.7" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1274">90</tspan></text><text id="SvgjsText1275" font-family="Helvetica, Arial, sans-serif" x="20" y="67.099625" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1276">80</tspan></text><text id="SvgjsText1277" font-family="Helvetica, Arial, sans-serif" x="20" y="102.49925" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1278">70</tspan></text><text id="SvgjsText1279" font-family="Helvetica, Arial, sans-serif" x="20" y="137.89887499999998" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1280">60</tspan></text><text id="SvgjsText1281" font-family="Helvetica, Arial, sans-serif" x="20" y="173.2985" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1282">50</tspan></text><text id="SvgjsText1283" font-family="Helvetica, Arial, sans-serif" x="20" y="208.698125" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1284">40</tspan></text><text id="SvgjsText1285" font-family="Helvetica, Arial, sans-serif" x="20" y="244.09775000000002" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1286">30</tspan></text><text id="SvgjsText1287" font-family="Helvetica, Arial, sans-serif" x="20" y="279.49737500000003" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1288">20</tspan></text></g></g><g id="SvgjsG1214" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 160px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(85, 110, 230);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div> --}}
                        {{-- <div class="resize-triggers"><div class="expand-trigger"><div style="width: 593px; height: 321px;"></div></div><div class="contract-trigger"></div></div> --}}
                        <div id="chart">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Convention Analytics</h4>

                <div style="position: relative;">
                    <div id="piechart">
                    </div>
                    {{-- <div id="donut-chart"
                            data-colors="[&quot;--bs-primary&quot;, &quot;--bs-success&quot;, &quot;--bs-danger&quot;]"
                            class="apex-charts" style="min-height: 240.7px;">
                            <div id="apexchartssvnuuu4o" class="apexcharts-canvas apexchartssvnuuu4o apexcharts-theme-light"
                                style="width: 400px; height: 240.7px;"><svg id="SvgjsSvg1322" width="400" height="240.7"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background-color: transparent;">
                                    <g id="SvgjsG1324" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(82, 0)">
                                        <defs id="SvgjsDefs1323">
                                            <clipPath id="gridRectMasksvnuuu4o">
                                                <rect id="SvgjsRect1326" width="244" height="262" x="-3"
                                                    y="-1" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                                </rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMasksvnuuu4o">
                                                <rect id="SvgjsRect1327" width="242" height="264" x="-2"
                                                    y="-2" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                                </rect>
                                            </clipPath>
                                            <filter id="SvgjsFilter1336" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feFlood id="SvgjsFeFlood1337" flood-color="#000000" flood-opacity="0.45"
                                                    result="SvgjsFeFlood1337Out" in="SourceGraphic"></feFlood>
                                                <feComposite id="SvgjsFeComposite1338" in="SvgjsFeFlood1337Out"
                                                    in2="SourceAlpha" operator="in" result="SvgjsFeComposite1338Out">
                                                </feComposite>
                                                <feOffset id="SvgjsFeOffset1339" dx="1" dy="1"
                                                    result="SvgjsFeOffset1339Out" in="SvgjsFeComposite1338Out"></feOffset>
                                                <feGaussianBlur id="SvgjsFeGaussianBlur1340" stdDeviation="1 "
                                                    result="SvgjsFeGaussianBlur1340Out" in="SvgjsFeOffset1339Out">
                                                </feGaussianBlur>
                                                <feBlend id="SvgjsFeBlend1341" in="SourceGraphic"
                                                    in2="SvgjsFeGaussianBlur1340Out" mode="normal"
                                                    result="SvgjsFeBlend1341Out"></feBlend>
                                            </filter>
                                            <filter id="SvgjsFilter1346" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feFlood id="SvgjsFeFlood1347" flood-color="#000000" flood-opacity="0.45"
                                                    result="SvgjsFeFlood1347Out" in="SourceGraphic"></feFlood>
                                                <feComposite id="SvgjsFeComposite1348" in="SvgjsFeFlood1347Out"
                                                    in2="SourceAlpha" operator="in" result="SvgjsFeComposite1348Out">
                                                </feComposite>
                                                <feOffset id="SvgjsFeOffset1349" dx="1" dy="1"
                                                    result="SvgjsFeOffset1349Out" in="SvgjsFeComposite1348Out"></feOffset>
                                                <feGaussianBlur id="SvgjsFeGaussianBlur1350" stdDeviation="1 "
                                                    result="SvgjsFeGaussianBlur1350Out" in="SvgjsFeOffset1349Out">
                                                </feGaussianBlur>
                                                <feBlend id="SvgjsFeBlend1351" in="SourceGraphic"
                                                    in2="SvgjsFeGaussianBlur1350Out" mode="normal"
                                                    result="SvgjsFeBlend1351Out"></feBlend>
                                            </filter>
                                            <filter id="SvgjsFilter1356" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feFlood id="SvgjsFeFlood1357" flood-color="#000000" flood-opacity="0.45"
                                                    result="SvgjsFeFlood1357Out" in="SourceGraphic"></feFlood>
                                                <feComposite id="SvgjsFeComposite1358" in="SvgjsFeFlood1357Out"
                                                    in2="SourceAlpha" operator="in" result="SvgjsFeComposite1358Out">
                                                </feComposite>
                                                <feOffset id="SvgjsFeOffset1359" dx="1" dy="1"
                                                    result="SvgjsFeOffset1359Out" in="SvgjsFeComposite1358Out"></feOffset>
                                                <feGaussianBlur id="SvgjsFeGaussianBlur1360" stdDeviation="1 "
                                                    result="SvgjsFeGaussianBlur1360Out" in="SvgjsFeOffset1359Out">
                                                </feGaussianBlur>
                                                <feBlend id="SvgjsFeBlend1361" in="SourceGraphic"
                                                    in2="SvgjsFeGaussianBlur1360Out" mode="normal"
                                                    result="SvgjsFeBlend1361Out"></feBlend>
                                            </filter>
                                        </defs>
                                        <g id="SvgjsG1328" class="apexcharts-pie">
                                            <g id="SvgjsG1329" transform="translate(0, 0) scale(1)">
                                                <circle id="SvgjsCircle1330" r="77.06829268292684" cx="119"
                                                    cy="119" fill="transparent"></circle>
                                                <g id="SvgjsG1331" class="apexcharts-slices">
                                                    <g id="SvgjsG1332" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="SeriesxA" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1333"
                                                            d="M 119 8.902439024390233 A 110.09756097560977 110.09756097560977 0 0 1 141.8905700573504 226.69166511493654 L 135.02339904014528 194.3841655804556 A 77.06829268292684 77.06829268292684 0 0 0 119 41.93170731707316 L 119 8.902439024390233 z"
                                                            fill="rgba(85,110,230,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                            index="0" j="0" data:angle="168"
                                                            data:startAngle="0" data:strokeWidth="2" data:value="56"
                                                            data:pathOrig="M 119 8.902439024390233 A 110.09756097560977 110.09756097560977 0 0 1 141.8905700573504 226.69166511493654 L 135.02339904014528 194.3841655804556 A 77.06829268292684 77.06829268292684 0 0 0 119 41.93170731707316 L 119 8.902439024390233 z"
                                                            stroke="#ffffff"></path>
                                                    </g>
                                                    <g id="SvgjsG1342" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="SeriesxB" rel="2" data:realIndex="1">
                                                        <path id="SvgjsPath1343"
                                                            d="M 141.8905700573504 226.69166511493654 A 110.09756097560977 110.09756097560977 0 0 1 11.30833488506343 96.10942994264965 L 43.6158344195444 102.97660095985475 A 77.06829268292684 77.06829268292684 0 0 0 135.02339904014528 194.3841655804556 L 141.8905700573504 226.69166511493654 z"
                                                            fill="rgba(52,195,143,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                            index="0" j="1" data:angle="114"
                                                            data:startAngle="168" data:strokeWidth="2" data:value="38"
                                                            data:pathOrig="M 141.8905700573504 226.69166511493654 A 110.09756097560977 110.09756097560977 0 0 1 11.30833488506343 96.10942994264965 L 43.6158344195444 102.97660095985475 A 77.06829268292684 77.06829268292684 0 0 0 135.02339904014528 194.3841655804556 L 141.8905700573504 226.69166511493654 z"
                                                            stroke="#ffffff"></path>
                                                    </g>
                                                    <g id="SvgjsG1352" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="SeriesxC" rel="3" data:realIndex="2">
                                                        <path id="SvgjsPath1353"
                                                            d="M 11.30833488506343 96.10942994264965 A 110.09756097560977 110.09756097560977 0 0 1 118.98078435072314 8.90244070127197 L 118.9865490455062 41.93170849089037 A 77.06829268292684 77.06829268292684 0 0 0 43.6158344195444 102.97660095985475 L 11.30833488506343 96.10942994264965 z"
                                                            fill="rgba(244,106,106,1)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                            index="0" j="2" data:angle="78"
                                                            data:startAngle="282" data:strokeWidth="2" data:value="26"
                                                            data:pathOrig="M 11.30833488506343 96.10942994264965 A 110.09756097560977 110.09756097560977 0 0 1 118.98078435072314 8.90244070127197 L 118.9865490455062 41.93170849089037 A 77.06829268292684 77.06829268292684 0 0 0 43.6158344195444 102.97660095985475 L 11.30833488506343 96.10942994264965 z"
                                                            stroke="#ffffff"></path>
                                                    </g>
                                                    <g id="SvgjsG1334" class="apexcharts-datalabels"><text
                                                            id="SvgjsText1335" font-family="Helvetica, Arial, sans-serif"
                                                            x="212.07026976435435" y="109.21792047044732"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-text apexcharts-pie-label"
                                                            filter="url(#SvgjsFilter1336)"
                                                            style="font-family: Helvetica, Arial, sans-serif;">46.7%</text>
                                                    </g>
                                                    <g id="SvgjsG1344" class="apexcharts-datalabels"><text
                                                            id="SvgjsText1345" font-family="Helvetica, Arial, sans-serif"
                                                            x="52.82687783573989" y="185.17312216426012"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-text apexcharts-pie-label"
                                                            filter="url(#SvgjsFilter1346)"
                                                            style="font-family: Helvetica, Arial, sans-serif;">31.7%</text>
                                                    </g>
                                                    <g id="SvgjsG1354" class="apexcharts-datalabels"><text
                                                            id="SvgjsText1355" font-family="Helvetica, Arial, sans-serif"
                                                            x="60.10635589221658" y="46.27240635331091"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-text apexcharts-pie-label"
                                                            filter="url(#SvgjsFilter1356)"
                                                            style="font-family: Helvetica, Arial, sans-serif;">21.7%</text>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1362" x1="0" y1="0" x2="238"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1363" x1="0" y1="0" x2="238"
                                            y2="0" stroke-dasharray="0" stroke-width="0"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG1325" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(85, 110, 230);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label"></span><span
                                                    class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(52, 195, 143);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label"></span><span
                                                    class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(244, 106, 106);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label"></span><span
                                                    class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 401px; height: 242px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>

                {{-- <div class="text-center text-muted">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-4">
                                    <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-primary me-1"></i> Product
                                        A</p>
                                    <h5>$ 2,132</h5>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4">
                                    <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-success me-1"></i> Product
                                        B</p>
                                    <h5>$ 1,763</h5>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4">
                                    <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-danger me-1"></i> Product
                                        C</p>
                                    <h5>$ 973</h5>
                                </div>
                            </div>
                        </div>
                    </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    {{-- <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-end">
                            <div class="input-group input-group-sm">
                                <select class="form-select form-select-sm">
                                    <option value="JA" selected="">Jan</option>
                                    <option value="DE">Dec</option>
                                    <option value="NO">Nov</option>
                                    <option value="OC">Oct</option>
                                </select>
                                <label class="input-group-text">Month</label>
                            </div>
                        </div>
                        <h4 class="card-title mb-4">Top Selling product</h4>
                    </div>

                    <div class="text-muted text-center">
                        <p class="mb-2">Product A</p>
                        <h4>$ 6385</h4>
                        <p class="mt-4 mb-0"><span class="badge badge-soft-success font-size-11 me-2"> 0.6% <i class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                    </div>

                    <div class="table-responsive mt-4">
                        <table class="table align-middle mb-0">
                            <tbody>
                                <tr>
                                    <td>
                                        <h5 class="font-size-14 mb-1">Product A</h5>
                                        <p class="text-muted mb-0">Neque quis est</p>
                                    </td>

                                    <td style="position: relative;">
                                        <div id="radialchart-1" data-colors="[&quot;--bs-primary&quot;]" class="apex-charts" style="min-height: 61px;"><div id="apexchartswm41guhw" class="apexcharts-canvas apexchartswm41guhw apexcharts-theme-light" style="width: 60px; height: 61px;"><svg id="SvgjsSvg1364" width="60" height="61" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background-color: transparent;"><g id="SvgjsG1366" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1365"><clipPath id="gridRectMaskwm41guhw"><rect id="SvgjsRect1368" width="66" height="62" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskwm41guhw"><rect id="SvgjsRect1369" width="64" height="64" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1370" class="apexcharts-radialbar"><g id="SvgjsG1371"><g id="SvgjsG1372" class="apexcharts-tracks"><g id="SvgjsG1373" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 29.99642420350187 9.512195433998325" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.678048780487805" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 29.99642420350187 9.512195433998325"></path></g></g><g id="SvgjsG1375"><g id="SvgjsG1377" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1378" d="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 0 1 44.98383193561228 43.972649328109725" fill="none" fill-opacity="0.85" stroke="rgba(85,110,230,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.853658536585366" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="133" data:value="37" index="0" j="0" data:pathOrig="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 0 1 44.98383193561228 43.972649328109725"></path></g><circle id="SvgjsCircle1376" r="17.64878048780488" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1379" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1380" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1367" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 112px; height: 86px;"></div></div><div class="contract-trigger"></div></div></td>
                                    <td>
                                        <p class="text-muted mb-1">Sales</p>
                                        <h5 class="mb-0">37 %</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-size-14 mb-1">Product B</h5>
                                        <p class="text-muted mb-0">Quis autem iure</p>
                                    </td>

                                    <td style="position: relative;">
                                        <div id="radialchart-2" data-colors="[&quot;--bs-success&quot;]" class="apex-charts" style="min-height: 61px;"><div id="apexchartsc13gm8xv" class="apexcharts-canvas apexchartsc13gm8xv apexcharts-theme-light" style="width: 60px; height: 61px;"><svg id="SvgjsSvg1381" width="60" height="61" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background-color: transparent;"><g id="SvgjsG1383" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1382"><clipPath id="gridRectMaskc13gm8xv"><rect id="SvgjsRect1385" width="66" height="62" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskc13gm8xv"><rect id="SvgjsRect1386" width="64" height="64" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1387" class="apexcharts-radialbar"><g id="SvgjsG1388"><g id="SvgjsG1389" class="apexcharts-tracks"><g id="SvgjsG1390" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 29.99642420350187 9.512195433998325" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.678048780487805" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 29.99642420350187 9.512195433998325"></path></g></g><g id="SvgjsG1392"><g id="SvgjsG1394" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1395" d="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 9.888613802535662 33.90925746625116" fill="none" fill-opacity="0.85" stroke="rgba(52,195,143,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.853658536585366" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="259" data:value="72" index="0" j="0" data:pathOrig="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 9.888613802535662 33.90925746625116"></path></g><circle id="SvgjsCircle1393" r="17.64878048780488" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1396" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1397" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1384" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 112px; height: 86px;"></div></div><div class="contract-trigger"></div></div></td>
                                    <td>
                                        <p class="text-muted mb-1">Sales</p>
                                        <h5 class="mb-0">72 %</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-size-14 mb-1">Product C</h5>
                                        <p class="text-muted mb-0">Sed aliquam mauris.</p>
                                    </td>

                                    <td style="position: relative;">
                                        <div id="radialchart-3" data-colors="[&quot;--bs-danger&quot;]" class="apex-charts" style="min-height: 61px;"><div id="apexcharts5x17kcwe" class="apexcharts-canvas apexcharts5x17kcwe apexcharts-theme-light" style="width: 60px; height: 61px;"><svg id="SvgjsSvg1398" width="60" height="61" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background-color: transparent;"><g id="SvgjsG1400" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1399"><clipPath id="gridRectMask5x17kcwe"><rect id="SvgjsRect1402" width="66" height="62" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask5x17kcwe"><rect id="SvgjsRect1403" width="64" height="64" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1404" class="apexcharts-radialbar"><g id="SvgjsG1405"><g id="SvgjsG1406" class="apexcharts-tracks"><g id="SvgjsG1407" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 29.99642420350187 9.512195433998325" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.678048780487805" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 29.99642420350187 9.512195433998325"></path></g></g><g id="SvgjsG1409"><g id="SvgjsG1411" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1412" d="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 25.043551407226317 49.87922951394725" fill="none" fill-opacity="0.85" stroke="rgba(244,106,106,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.853658536585366" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="194" data:value="54" index="0" j="0" data:pathOrig="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 25.043551407226317 49.87922951394725"></path></g><circle id="SvgjsCircle1410" r="17.64878048780488" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1413" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1414" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1401" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 112px; height: 86px;"></div></div><div class="contract-trigger"></div></div></td>
                                    <td>
                                        <p class="text-muted mb-1">Sales</p>
                                        <h5 class="mb-0">54 %</h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}

    {{-- <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Tasks</h4>

                    <ul class="nav nav-pills bg-light rounded">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">In Process</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Upcoming</a>
                        </li>
                    </ul>

                    <div class="mt-4">
                        <div data-simplebar="init" style="max-height: 250px;"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -15px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">

                            <div class="table-responsive">
                                <table class="table table-nowrap align-middle table-hover mb-0">
                                    <tbody>
                                        <tr>
                                            <td style="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck01">
                                                    <label class="form-check-label" for="tasklistCheck01"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">Skote Saas Dashboard</a></h5>
                                                <p class="text-muted mb-0">Assigned to Mark</p>
                                            </td>
                                            <td style="width: 90px;">
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck02">
                                                    <label class="form-check-label" for="tasklistCheck02"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">New Landing UI</a></h5>
                                                <p class="text-muted mb-0">Assigned to Team A</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck02">
                                                    <label class="form-check-label" for="tasklistCheck02"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">Brand logo design</a></h5>
                                                <p class="text-muted mb-0">Assigned to Janis</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck04">
                                                    <label class="form-check-label" for="tasklistCheck04"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">Blog Template UI</a></h5>
                                                <p class="text-muted mb-0">Assigned to Dianna</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck05">
                                                    <label class="form-check-label" for="tasklistCheck05"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">Multipurpose Landing</a></h5>
                                                <p class="text-muted mb-0">Assigned to Team B</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck06">
                                                    <label class="form-check-label" for="tasklistCheck06"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">Redesign - Landing page</a></h5>
                                                <p class="text-muted mb-0">Assigned to Jerry</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck07">
                                                    <label class="form-check-label" for="tasklistCheck07"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">Skote Crypto Dashboard</a></h5>
                                                <p class="text-muted mb-0">Assigned to Eric</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 448px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 139px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
                    </div>
                </div>

                <div class="card-footer bg-transparent border-top">
                    <div class="text-center">
                        <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light"> Add new Task</a>
                    </div>
                </div>
            </div>
        </div> --}}

    {{-- <div class="col-xl-4">
            <div class="card">
                <div class="card-body border-bottom">
                    <div class="row">
                        <div class="col-md-4 col-9">
                            <h5 class="font-size-15 mb-1">Steven Franklin</h5>
                            <p class="text-muted mb-0"><i class="mdi mdi-circle text-success align-middle me-1"></i> Active now</p>
                        </div>
                        <div class="col-md-8 col-3">
                            <ul class="list-inline user-chat-nav text-end mb-0">
                                <li class="list-inline-item d-none d-sm-inline-block">
                                    <div class="dropdown">
                                        <button class="btn nav-btn" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-search-alt-2"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end py-0 dropdown-menu-md">
                                            <form class="p-3">
                                                <div class="form-group m-0">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">

                                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item  d-none d-sm-inline-block">
                                    <div class="dropdown">
                                        <button class="btn nav-btn" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-cog"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">View Profile</a>
                                            <a class="dropdown-item" href="#">Clear chat</a>
                                            <a class="dropdown-item" href="#">Muted</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="dropdown">
                                        <button class="btn nav-btn" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else</a>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body pb-0">
                    <div>
                        <div class="chat-conversation">
                            <ul class="list-unstyled" data-simplebar="init" style="max-height: 260px;"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -15px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
                                <li>
                                    <div class="chat-day-title">
                                        <span class="title">Today</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="conversation-list">
                                        <div class="dropdown">

                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                              </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Copy</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Forward</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <div class="ctext-wrap">
                                            <div class="conversation-name">Steven Franklin</div>
                                            <p>
                                                Hello!
                                            </p>
                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:00</p>
                                        </div>

                                    </div>
                                </li>

                                <li class="right">
                                    <div class="conversation-list">
                                        <div class="dropdown">

                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                              </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Copy</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Forward</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <div class="ctext-wrap">
                                            <div class="conversation-name">Henry Wells</div>
                                            <p>
                                                Hi, How are you? What about our next meeting?
                                            </p>

                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:02</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="conversation-list">
                                        <div class="dropdown">

                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                              </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Copy</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Forward</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <div class="ctext-wrap">
                                            <div class="conversation-name">Steven Franklin</div>
                                            <p>
                                                Yeah everything is fine
                                            </p>

                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:06</p>
                                        </div>

                                    </div>
                                </li>

                                <li class="last-chat">
                                    <div class="conversation-list">
                                        <div class="dropdown">

                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                              </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Copy</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Forward</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <div class="ctext-wrap">
                                            <div class="conversation-name">Steven Franklin</div>
                                            <p>&amp; Next meeting tomorrow 10.00AM</p>
                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:06</p>
                                        </div>

                                    </div>
                                </li>

                                <li class="right">
                                    <div class="conversation-list">
                                        <div class="dropdown">

                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                              </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Copy</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Forward</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <div class="ctext-wrap">
                                            <div class="conversation-name">Henry Wells</div>
                                            <p>
                                                Wow that's great
                                            </p>

                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:07</p>
                                        </div>
                                    </div>
                                </li>


                            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 539px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 101px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></ul>
                        </div>

                    </div>
                </div>

                <div class="p-3 chat-input-section">
                    <div class="row">
                        <div class="col">
                            <div class="position-relative">
                                <input type="text" class="form-control rounded chat-input" placeholder="Enter Message...">
                                <div class="chat-input-links">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item"><a href="javascript: void(0);"><i class="mdi mdi-emoticon-happy-outline"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript: void(0);"><i class="mdi mdi-file-image-outline"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript: void(0);"><i class="mdi mdi-file-document-outline"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary chat-send w-md waves-effect waves-light"><span class="d-none d-sm-inline-block me-2">Send</span> <i class="mdi mdi-send"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

</div>
<!-- end row -->

{{-- </div> --}}
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

@endsection

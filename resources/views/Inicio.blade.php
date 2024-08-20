@extends('Plantilla.Principal')
@section('title', 'Tablero Inicial')
@section('Contenido')
<section class="content">
<div class="row">
    <div class="col-xl-9 col-12">
       
        <div class="box pull-up">
            <div class="box-body">
                <div class="d-md-flex justify-content-between align-items-center">
                    <div>
                        <p><span class="text-primary">Equity</span> | <span class="text-fade">Consumption</span></p>
                        <h3 class="mb-0 fw-500">Prudential FMCG Fund - Growth</h3>
                    </div>
                    <div class="mt-10 mt-md-0">
                        <a href="invest.html" class="waves-effect waves-light btn btn-outline btn-primary">Invest Now</a>
                    </div>
                </div>
                <hr>
                <div class="d-md-flex justify-content-between align-items-center">								
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="min-w-100">
                            <p class="mb-0 text-fade">Fund Size</p>
                            <h6 class="mb-0">1,189.60cr</h6>
                        </div>
                        <div class="mx-lg-50 mx-20 min-w-70">
                            <p class="mb-0 text-fade">Return(P.A.)</p>
                            <h6 class="mb-0 text-success">+3.29%</h6>
                        </div>
                        <div>
                            <p class="mb-0 text-fade">Risk</p>
                            <h6 class="mb-0">High</h6>
                        </div>
                    </div>
                    <div class="mt-10 mt-md-0">
                        <a href="#" class="waves-effect waves-light btn btn-primary btn-flat"><i class="fa fa-shopping-cart me-10"></i>Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <div class="col-xl-3 col-12">
        <div class="mb-20">
            <a href="#" class="waves-effect waves-light btn w-p100 btn-success mb-5">Invest Now <i class="ms-15 fa fa-angle-right"></i></a>
        </div>
        <div class="box bg-transparent no-shadow">
            <div class="box-header ps-0 pb-0">
                <h3 class="box-title no-border">
                    Upcoming SIP
                </h3>
            </div>
        </div>
        <div class="box">
            <div class="box-body">
                <p class="mb-15">25 Dec 2021</p>
                <div class="d-flex pb-15 mb-15 bb-1 bb-dashed">
                    <div class="" style="width: 50px;    margin-right: 13px;">
                        <img src="{{ asset('app-assets/images/logo/logo-1.jpg') }}" class="avatar b-1" alt="" />
                    </div>
                    <div class="text-overflow" style="margin-left: 5px;">
                        <a href="#">
                            <p class="mb-0 fw-500 text-overflow">Prudential FMCG Fund - Growth</p>
                            <p class="mb-0 fw-500">$500</p>
                        </a>
                    </div>
                </div>
                <div class="d-flex pb-15 mb-15 bb-1 bb-dashed">
                    <div class="me-10" style="width: 50px;">
                        <img src="{{ asset('app-assets/images/logo/logo-2.jpg') }}" class="avatar b-1" alt="" />
                    </div>
                    <div class="text-overflow" style="margin-left: 5px;">
                        <a href="#">
                            <p class="mb-0 fw-500 text-overflow">Market Fund Direct-Growth</p>
                            <p class="mb-0 fw-500">$500</p>
                        </a>
                    </div>
                </div>
                <div class="d-flex pb-15 mb-15 bb-1 bb-dashed">
                    <div class="me-10 modal-1">
                        <img src="{{ asset('app-assets/images/logo/logo-3.jpg') }}" class="avatar b-1" alt="" />
                    </div>
                    <div class="text-overflow overflow_box">
                        <a href="#">
                            <p class="mb-0 fw-500 text-overflow">ABCD Money Market Fund Direct Plan-Growth</p>
                            <p class="mb-0 fw-500">$500</p>
                        </a>
                    </div>
                </div>
                <p class="mb-15">01 Jan 2022</p>
                <div class="d-flex pb-15 mb-15 bb-1 bb-dashed">
                    <div class="me-10 modal-1 ">
                        <img src="{{ asset('app-assets/images/logo/logo-4.jpg') }}" class="avatar b-1" alt="" />
                    </div>
                    <div class="text-overflow overflow_box">
                        <a href="#">
                            <p class="mb-0 fw-500 text-overflow">A&D Money Market Fund Direct-Growth</p>
                            <p class="mb-0 fw-500">$500</p>
                        </a>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="me-10" style="width: 50px;">
                        <img src="{{ asset('app-assets/images/logo/logo-5.jpg') }}" class="avatar b-1" alt="" />
                    </div>
                    <div class="text-overflow" style="margin-left: 5px;">
                        <a href="#">
                            <p class="mb-0 fw-500 text-overflow">Index Sensex Direct</p>
                            <p class="mb-0 fw-500">$500</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="box bg-transparent no-shadow">
            <div class="box-header ps-0 pb-0">
                <h3 class="box-title no-border">
                    Best funds to buy
                </h3>
            </div>
        </div>
        <div class="box">
            <div class="box-body funds_1">
                <div class="fund-scorll">
                    <div class="d-flex align-items-center pb-15 mb-15 bb-1 bb-dashed">
                        <div class="me-10" style="width: 50px;">
                            <img src="{{ asset('app-assets/images/logo/logo-1.jpg') }}" class="avatar b-1" alt="" />
                        </div>
                        <div>
                            <a href="#">
                                <p class="mb-0 fw-500">Prudential FMCG Fund - Growth</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pb-15 mb-15 bb-1 bb-dashed">
                        <div class="me-10" style="width: 50px;">
                            <img src="{{ asset('app-assets/images/logo/logo-2.jpg') }}" class="avatar b-1" alt="" />
                        </div>
                        <div>
                            <a href="#">
                                <p class="mb-0 fw-500">Market Fund Direct-Growth</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pb-15 mb-15 bb-1 bb-dashed">
                        <div class="me-10 modal-1">
                            <img src="{{ asset('app-assets/images/logo/logo-3.jpg') }}" class="avatar b-1" alt="" />
                        </div>
                        <div>
                            <a href="#">
                                <p class="mb-0 fw-500 overflow_box_1" >ABCD Money Market Fund Direct Plan-Growth</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pb-15 mb-15 bb-1 bb-dashed">
                        <div class="me-10 modal-1">
                            <img src="{{ asset('app-assets/images/logo/logo-4.jpg') }}" class="avatar b-1" alt="" />
                        </div>
                        <div>
                            <a href="#">
                                <p class="mb-0 fw-500 overflow_box_1">A&D Money Market Fund Direct-Growth</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pb-15 mb-15 bb-1 bb-dashed">
                        <div class="me-10" style="width: 50px;">
                            <img src="{{ asset('app-assets/images/logo/logo-1.jpg') }}" class="avatar b-1" alt="" />
                        </div>
                        <div>
                            <a href="#">
                                <p class="mb-0 fw-500">Prudential FMCG Fund - Growth</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pb-15 mb-15 bb-1 bb-dashed">
                        <div class="me-10" style="width: 50px;">
                            <img src="{{ asset('app-assets/images/logo/logo-2.jpg') }}" class="avatar b-1" alt="" />
                        </div>
                        <div>
                            <a href="#">
                                <p class="mb-0 fw-500">Market Fund Direct-Growth</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="me-10" style="width: 50px;">
                            <img src="{{ asset('app-assets/images/logo/logo-5.jpg') }}" class="avatar b-1" alt="" />
                        </div>
                        <div>
                            <a href="#">
                                <p class="mb-0 fw-500">Index Sensex Direct</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection
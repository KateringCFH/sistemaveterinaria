<?php
$c= Auth::user()->
cargo;
?>
@extends('layouts.'.$c)
@section('contenido')
<section id="main-content">
    <section class="wrapper">
        <h3>
            <i class="fa fa-angle-right">
            </i>
            Chartjs Charts
        </h3>
        <!-- page start-->
        <div class="tab-pane" id="chartjs">
            <div class="row mt">
                <div class="col-lg-6">
                    <div class="content-panel">
                        <h4>
                            <i class="fa fa-angle-right">
                            </i>
                            Doughnut
                        </h4>
                        <div class="panel-body text-center">
                            <canvas height="300" id="doughnut" width="400">
                            </canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-panel">
                        <h4>
                            <i class="fa fa-angle-right">
                            </i>
                            Line
                        </h4>
                        <div class="panel-body text-center">
                            <canvas height="300" id="line" width="400">
                            </canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt">
                <div class="col-lg-6">
                    <div class="content-panel">
                        <h4>
                            <i class="fa fa-angle-right">
                            </i>
                            Radar
                        </h4>
                        <div class="panel-body text-center">
                            <canvas height="300" id="radar" width="400">
                            </canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-panel">
                        <h4>
                            <i class="fa fa-angle-right">
                            </i>
                            Polar Area
                        </h4>
                        <div class="panel-body text-center">
                            <canvas height="300" id="polarArea" width="400">
                            </canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt">
                <div class="col-lg-6">
                    <div class="content-panel">
                        <h4>
                            <i class="fa fa-angle-right">
                            </i>
                            Bar
                        </h4>
                        <div class="panel-body text-center">
                            <canvas height="300" id="bar" width="400">
                            </canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-panel">
                        <h4>
                            <i class="fa fa-angle-right">
                            </i>
                            Pie
                        </h4>
                        <div class="panel-body text-center">
                            <canvas height="300" id="pie" width="400">
                            </canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!-- /MAIN CONTENT -->
@endsection

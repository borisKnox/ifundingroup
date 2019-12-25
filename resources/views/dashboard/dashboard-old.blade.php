@extends('dashboard.layout.master')
@section('username')
    {{ $user->name }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="card card-statistic-2">
            <div class="card-chart">
                <canvas id="balance-chart" height="80"></canvas>
            </div>
            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-dollar-sign"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>INVESTMENTS TO DATE</h4>
                </div>
                <div class="card-body">
                    59
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="card card-statistic-2">
            <div class="card-chart">
                <canvas id="balance-chart" height="80"></canvas>
            </div>
            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-dollar-sign"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>INVESTED TO DATE</h4>
                </div>
                <div class="card-body">
                    187,13
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="card card-statistic-2">
            <div class="card-chart">
                <canvas id="sales-chart" height="80"></canvas>
            </div>
            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-dollar-sign"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>DISTRIBUTION INCOME</h4>
                </div>
                <div class="card-body">
                    4,732
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="card card-statistic-2">
            <div class="card-chart">
                <canvas id="sales-chart" height="80"></canvas>
            </div>
            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-dollar-sign"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>DISTRIBUTION CAPITAL</h4>
                </div>
                <div class="card-body">
                    4,732
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4>Budget vs Sales</h4>
            </div>
            <div class="card-body">
                <canvas id="myChart" height="158"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection

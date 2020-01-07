@extends('dashboard.layout.newdash')
@section('navmenu')
    <ul class="nav nav-pills">
        <li class=""><a href="{{ route('dashboard') }}" >Dashboard</a></li>
        <li class=""><a href="{{ route('money') }}" >Money</a></li>
        <li class="active"><a href="{{ route('earningHistory') }}" >Earning history</a></li>
        <li class=""><a href="{{ route('withdrawal') }}" >Withdrawal</a></li>
        <li class=""><a href="{{ route('lendNow') }}" >Lend now</a></li>
        <li class=""><a href="{{ route('borrowerNow') }}" >Borrow now</a></li>
        @if($user->role=='admin')
        <li class=""><a href="{{ route('appsetting') }}" >App setting</a></li>
        @endif
    </ul>
@endsection
@section('content')
    <div class="modals-area">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="modal-inner-pro">
                    <div class="row">
                        <h2 class="section-title">Earning</h2>
                        @if(count($earnig)!=0)
                        @foreach($earnig as $evalue)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                <h2>{{$evalue->created}}</h2>
                                <p>From Lending deposit to {{$evalue->id}} at valued 11.60% interest of deposit {{$evalue->amount}}USD</p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <hr>
                    <div class="row">
                        <h2 class="section-title">Withdrawal</h2>
                        @if(count($withdrawal)!=0)
                        @foreach($withdrawal as $wvalue)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                <h2>{{$wvalue->created_at}}</h2>
                                <p>Withdrawal processed to {{$wvalue->investment->loan->firstname}} {{$wvalue->investment->loan->firstname}} at valued deposit {{$wvalue->investment->amout}}USD</p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <hr>
                    <div class="row">
                        <h2 class="section-title">Bonus</h2>
                        @if(count($subscript)!=0)
                        @foreach($subscript as $ssvalue)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                <h2>{{$ssvalue->created}}</h2>
                                <p>Get Bonus from {{$ssvalue->id}} at valued deposit {{$ssvalue->quantity}}USD</p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <hr>
                    <div class="row">
                        <h2 class="section-title">Lending</h2>
                        @if(count($investment)!=0)
                        @foreach($investment as $ivalue)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                <h2>{{$ivalue->created_at}}</h2>
                                <p>Lend to {{$ivalue->loan->firstname}} {{$ivalue->firstname}} at valued deposit {{$ivalue->amout}}USD</p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <hr>
                    <div class="row">
                        <h2 class="section-title">Borrowing</h2>
                        @if(count($loan)!=0)
                        @foreach($loan as $lvalue)
                        @if(count($lvalue->investment()->get())!=0)
                        @foreach($lvalue->investment()->get() as $invvalue)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                <h2>{{$invvalue->created_at}}</h2>
                                <p>Borrow from {{$invvalue->loan->firstname}} {{$invvalue->loan->firstname}} at valued deposit  {{$invvalue->amout}}USD</p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('template.master')

@section('content')
<section id="recommended-four-box" class="bg-white">
    <div class="container">
    <div class="row py-3 text-center">

        <div class="col-3">
        <div class="card bg-dark">
            <div class="card-body">
                <div class="card-text text-primary" style="color: #fff; font-size: 0.9rem;">
                    <div class="mb-1 jp-title-recom">RECOMMENDED COLUMN</div>
                    <div style="border-top: 1px solid #eee; width: 50%; margin: auto;"></div>
                    <div class="text-white jp-text-recom">オススメ</div>
                </div>
            </div>
        </div>
        </div>

        <div class="col-3">
        <div class="card bg-dark">
            <div class="card-body">
                <div class="card-text text-primary" style="color: #fff; font-size: 0.9rem;">
                    <div class="mb-1 jp-title-recom">RECOMMENDED DIET</div>
                    <div style="border-top: 1px solid #eee; width: 50%; margin: auto;"></div>
                    <div class="text-white jp-text-recom">ダイエット</div>
                </div>
            </div>
        </div>
        </div>

        <div class="col-3">
        <div class="card bg-dark">
            <div class="card-body">
                <div class="card-text text-primary" style="color: #fff; font-size: 0.9rem;">
                    <div class="mb-1 jp-title-recom">RECOMMENDED BEAUTY</div>
                    <div style="border-top: 1px solid #eee; width: 50%; margin: auto;"></div>
                    <div class="text-white jp-text-recom">美容</div>
                </div>
            </div>
        </div>
        </div>

        <div class="col-3">
        <div class="card bg-dark">
            <div class="card-body">
                <div class="card-text text-primary" style="color: #fff; font-size: 0.9rem;">
                    <div class="mb-1 jp-title-recom">RECOMMENDED HEALTH</div>
                    <div style="border-top: 1px solid #eee; width: 50%; margin: auto;"></div>
                    <div class="text-white jp-text-recom">健康</div>
                </div>
            </div>
        </div>
        </div>

    </div>
    </div>
</section>

<section id="recommended-dishes">
    <div class="container">
    <div class="row">

        @foreach($data['recommended_list'] as $recommended)
        <div class="col-sm-6 col-md-3 pb-2">
            <div class="card">
                <img class="card-img" src="{{asset('img/arenttest/dish.png')}}" alt="">
                <div class="card-img-overlay">
                    <div class="card-text bg-yellow px-3 py-1" style="position: absolute; bottom: 0; left: 0; color: #fff;">
                        <small>{{ $recommended['datetime_at'] }}</small>
                    </div>
                </div>
            </div>
            <div>
                <div class="jp-text-recom">{{ $recommended['title'] }}</div>

                @foreach($recommended['tags'] as $tag)
                <div class="jp-text-recom text-primary">#{{ $tag['name'] }}</div>
                @endforeach
            </div>
        </div>
        @endforeach

    </div>

    <div class="text-center">
        <button class="btn btn-primary text-white">コラムをもっと見る</button>
    </div>
    </div>
</section>
@stop
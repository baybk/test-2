@extends('template.master')

@section('content')
<section class="bg-white">
    <div class="container">
        <div class="row py-3 text-center">

            <div class="col-4">
            <div class="card card-record">
                <img class="card-img" src="img/arenttest/dish.png" alt="">
                <div class="card-img-overlay card-img-overlay-record">
                <div class="group-text-center">
                    <div class="card-text px-1 text-yellow">
                    <small>BODY RECORD</small>
                    </div>
                    <div class="card-text bg-primary px-1 text-white">
                        <small>自分のカラダの記録</small>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <div class="col-4">
            <div class="card card-record">
                <img class="card-img" src="img/arenttest/dish.png" alt="">
                <div class="card-img-overlay card-img-overlay-record">
                <div class="group-text-center">
                    <div class="card-text px-1 text-yellow">
                    <small>MY EXERCISE</small>
                    </div>
                    <div class="card-text bg-primary px-1 text-white">
                        <small>自分の運動の記録</small>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <div class="col-4">
            <div class="card card-record">
                <img class="card-img" src="img/arenttest/dish.png" alt="">
                <div class="card-img-overlay card-img-overlay-record">
                <div class="group-text-center">
                    <div class="card-text px-1 text-yellow">
                    <small>MY DIARY</small>
                    </div>
                    <div class="card-text bg-primary px-1 text-white">
                        <small>自分の日記</small>
                    </div>
                </div>
                </div>
            </div>
            </div>

        </div>
        </div>
    </section>

    <section id="my-record">
        <div class="container">
        <img src="img/arenttest/my-record.png" class="img-fluid" alt="">
        </div>
    </section>

    <section id="my-exercise" class="py-4">
        <div class="container">
        <div>MY BODY RECORD</div>
        <div class="table-exercise table-responsive">
            <table class="table table-custom-dark">
            <tbody>

                @foreach($data['body_record_list'] as $bodyRecordItem)
                <tr>
                    <th>&#9900;</th>
                    <td>{{ $bodyRecordItem['month_at_formatted'] }}</td>
                    <td class="text-yellow">{{ $bodyRecordItem['weight'] }} kg</td>
                    <td class="text-yellow">{{ $bodyRecordItem['fat_percentage'] }} %</td>
                </tr>
                @endforeach

            </tbody>
            </table>
        </div>
        </div>
    </section>

    <section id="my-exercise" class="py-4">
        <div class="container">
        <div>MY EXERCISE</div>
        <div class="table-exercise table-responsive">
            <table class="table table-custom-dark">
            <tbody>

                @foreach($data['exercise_list'] as $exerciseItem)
                <tr>
                    <th>&#9900;</th>
                    <td>{{ $exerciseItem['name'] }}</td>
                    <td class="text-yellow">{{ $exerciseItem['kcal'] }} kcal</td>
                    <td class="text-yellow">{{ $exerciseItem['minutes'] }} minutes</td>
                </tr>
                @endforeach

            </tbody>
            </table>
        </div>
        </div>
    </section>

    <section>
        <div class="container">
        <div>MY DIARY</div>
        <div class="row mb-3">

            @foreach($data['diary_list'] as $diaryItem)
            <div class="col-sm-3 mb-2">
                <div class="diary-box">
                    <div class="medium">{{ $diaryItem['date_at_formatted'] }}</div>
                    <div class="medium">{{ $diaryItem['time_at_formatted'] }}</div>
                    <div class="small text-justify">{{ $diaryItem['diary'] }}</div>
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
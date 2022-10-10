@extends('layout')
@section('title', 'Home')

@section('konten')
{{-- Jumbotron image --}}
<Section class="jumbotron">
    <div class="container pt-5 pb-3">
        <div class="row">
            <div class="col-lg-12 col-sm-5 text-center pb-2">
                <h2>Inilah 10 Anime Series Peringkat 1-10 Dunia Yang Wajib Kamu Tonton!</h2>
            </div>
            <div class="col-lg-12 col-sm-7 ">
                <img src="{{url('/img/fullmetal_alchemist.jpg')}}" class="img-fluid banner_img">
            </div>
        </div>
    </div>
</Section>
{{-- Akhir Jumbotron Image --}}

{{-- Biar ga kena effect container, waves taro diluar section jumbotron biar keisi full --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,256L26.7,218.7C53.3,181,107,107,160,101.3C213.3,96,267,160,320,176C373.3,192,427,160,480,149.3C533.3,139,587,149,640,154.7C693.3,160,747,160,800,144C853.3,128,907,96,960,96C1013.3,96,1067,128,1120,149.3C1173.3,171,1227,181,1280,176C1333.3,171,1387,149,1413,138.7L1440,128L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path></svg>


<div class="container">
    <div class="row text-justify">
            <div class="col-lg-12 col-sm-7">
                    <p>Ada banyak sekali anime-anime bagus, tapi belum tentu jika menurut kita bagus orang lain akan menilai bagus juga. Sehingga rating yang diberikan oleh banyak penonton pun akan sangat berpengaruh pada popularitas anime tersebut. Namun, untuk list anime-anime dibawah ini rating dari anime mereka sangat tinggi lohh, bagi mimin anime yang punya rating diatas 7 mimin anggap punya story atau plot cerita yang bagus yaa itu opini mimin.</p>
                    
                    <p>Langsung aja masuk ke list nya, berikut beberapa anime yang menempati posisi 1-10 Top Anime in the world versi website MAL (My Anime List)</p>
            </div>
            {{-- List Anime --}}
            @foreach ($top_anime as $anime)
            <div class="col-lg-12 col-sm-7">
                <h3>{{ $loop->iteration }}. {{$anime->title}}</h3>
                <h5>Score : {{ $anime->score }}</h5>
                <h6>Type : </h6>
                <p>{{ $anime->description }}</p>
            </div>
            @endforeach
            {{-- Akhir List Anime --}}
    </div>
</div>   



@endsection
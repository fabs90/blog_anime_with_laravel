@extends('layout')
@section('title', 'Home')

@section('konten')
{{-- Jumbotron image --}}
<Section class="jumbotron">
    <div class="container pt-5 pb-1">
        <div class="row">
            <div class="col-lg-4 col-sm-5">
                <h2>Selamat Datang Di Blog TAAKA</h2>
                <p style="color:gray ;">Blog yang suka bahas hal-hal jejepangan!🎌</p>
            </div>
            <div class="col-lg-8 col-sm-7">
                <img src="{{url('/img/shoukaku_AL.jpg')}}" class="img-fluid">
            </div>
        </div>
    </div>
</Section>
{{-- Akhir Jumbotron Image --}}

{{-- Biar ga kena effect container, waves taro diluar section jumbotron biar keisi full --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,256L26.7,218.7C53.3,181,107,107,160,101.3C213.3,96,267,160,320,176C373.3,192,427,160,480,149.3C533.3,139,587,149,640,154.7C693.3,160,747,160,800,144C853.3,128,907,96,960,96C1013.3,96,1067,128,1120,149.3C1173.3,171,1227,181,1280,176C1333.3,171,1387,149,1413,138.7L1440,128L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path></svg>

<section class="biodata">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                    <h1><b>About Author</b></h1>
            </div>
            <div class="col-lg-12 col-sm-12">
                <img src="{{url('img/slebew_fabian.jpg')}}" class="img-fluid mt-3 profile">
            </div>
            
                <div class="col-lg-12 col-sm-12 text-center">
                    <h2 class="my-3">Fabian Juliansyah Cahyadi</h2>
                    <p>Mahasiswa tingkat 2 di universitas Gunadarma jurusan sistem informasi. Technology, programming, and japanese culture enthusiast. Dengan berbekal ilmu dari internet maupun dosen, ingin membagikan informasi-informasi menarik seputar hal-hal yang saya sukai dan tekuni. Hope you guys like it, よろしくお願いします.</p>
                </div>
        </div>  
    </div> 
</section>
@endsection
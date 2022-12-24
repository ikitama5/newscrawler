@extends('dashboard.layout')

@section('konten')
    <p class="card2 card-title justify-center">
      Berita Terkini
    </p>

    @foreach ($list as $item)
        <div class="col">
            <div class="col-md-2 ">
                <div class="card w-96 bg-white shadow-xl col">
                    <figure class="px-10 pt-10">
                        <img src="{{ $item[0] }}" alt="" class="rounded-xl" />
                    </figure>
                    <div class="card-body items-center text-center m-2">
                        <h2 class="card-title">{{ $item[1] }}</h2>
                        <p class="card-text"><small class="text-muted align-content-between">{{ $item[4] }}
                                {{ $item[3] }}</small></p>
                        <div class="card-actions">
                            <a class="btn btn-primary " href="{{ $item[2] }}">baca</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{-- scaping python
        {{-- <form action="/runpython" method="post">
            @csrf
            <button type="submit">scrap</button>
        </form>   --}}
     
@endsection

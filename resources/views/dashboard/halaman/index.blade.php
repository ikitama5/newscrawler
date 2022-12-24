@extends('dashboard.layout')

@section('konten')
    {{-- <p class="card-title">Kelola Berita</p>

    <div class="pb-3"><a href="{{route('halaman.create')}}" class="btn btn-primary"> + Tambah Berita</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>Judul</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $i}}</td>
                        <td>{{ $item->judul}}</td>
                        <td>
                            <a href="{{ route('halaman.edit', $item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            <form onsubmit="return confirm('Yakin hapus data?') " action="{{ route('halaman.destroy', $item->id)}}" class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit" name='submit'>DEL</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++; ?>
                @endforeach               
            </tbody>
        </table> --}}
        {{-- <form action="/runpython" method="post">
            @csrf
            <button type="submit">scrap</button>
        </form>   --}}
    </div>

    <div class="container">
        <div class="search-box">
            <div class="search-input">
                <form action='/runpython' id='search-form' method='get' target='_top'>
                    <input type="text" placeholder='Cari Artikel Disini ...' class="input">
                    <button id='search-button' type='submit'>
                        <span>Search</span>
                    </button>
                </form>    
            </div>
        </div>            
    </div>
    
    <style>
        .container{
            background-color: white;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }        
        .search-box {
            display: flex;
            align-items: center;
            background-color: gainsboro;
            padding: 8px 16px;
            border-radius: 40px;
            position: relative;
            width: 100%;
            margin: 0;
        }
        .search-box .search-icon {
            font-size: 1.18rem;
            color: seagreen;
        }
        .search-box .search-input {
            transition: .5s;
            width: 0px;
            overflow: hidden;
        }
        .search-box .input {
            border: none;
            outline: none;
            background-color: unset;
            padding: 8px;
            font-weight: bold;
        }
        .search-box:hover .search-input{           
            width: 200px; 
            margin-left: 8px; 
        }
        #search-button {
            position: absolute;
            top: 0px;right: 0px;
            height: 64px;
            width: 82px;
            font-size: 14px;
            color: #fff;
            text-align: center;
            line-height: 42px;
            border-width: 0;
            background-color: #1a7db7;
            -webkit-border-radius: 0px 5px 5px 0px;
            -moz-border-radius: 0px 5px 5px 0px;
            border-radius: 0px 30px 30px 0px;
            cursor: pointer;
        }
        </style>
        
@endsection

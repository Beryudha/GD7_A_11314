@extends('dashboard')

@section('content')
<style>
    /* width */
    ::-webkit-scrollbar {
    width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey; 
    border-radius: 10px;
    background-color: #23141E;
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
    background: Orange; 
    border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
    background: #b30000; 
    }


    .table-container {
        background-color: #23141E;
        object-fit: cover;
        width: 100%;
        position: absolute;
        top: 0;
        padding-top: 20px;
        padding-left: 20px;
        padding-right: 20px;
        left: 0;
        z-index: -1;
        border: 1px solid black;
    }
    .table-container::-webkit-scrollbar {
        width: 0px;
    }
    .table-container .content-index{
        margin-top: 20px;
        margin-left: 20px;
    }
    hr {
        border: 1px solid #D6B56E;
    }
    h2,h4,h5,p {
        font-family: goldenbook,serif;
        font-style: normal;
    }
    h2{
        text-align: center;
        color: #FFFFFF;
    }
    h2:hover{
        color: #D6B56E;
    }
    .card {
        width: 220px;
        background-color: transparent;
        /* border: 1px solid #D6B56E; */
        border-radius: 10px;
        color: #FFFFFF;
        elevation: 1;
    }
    .card:hover {
        border: 1px solid #D6B56E;
    }

    .card-img-top{
        width: 180px;
    }
    
</style>

<div class="container-details">
    <div class="table-container">
        <div class="content-index">
            <div class="title">
                <h2 class="mt-3">2022 IU CONCERT〈The Golden Hour: Under The
                Orange Sun〉</h2>
            </div>
            <div class="mt-4">
                <hr>
                <h5 class="mt-3" style="text-align:center; color: #FFFFFF;">Our Official Merchandise</h5>
                @if($merchandise->isEmpty())
                <p style="color:white">No merchandise available at the moment.</p>
                @else
                    <div class="row row-cols-1 row-cols-md-3 g-5 mx-5" >
                    @foreach ($barang as $key => $barangItem)    
                        <div class="col">
                            <div class="card" style="box-shadow: 0 0 10px black">
                               
                                <div class="card-body">
                                <img src="{{ $barangItem['gambar'] }}" class="card-img-top" alt="...">
                                </div>
                            </div>
                                <h5 class="card-title mt-3" style="color: white;"> {{ $merchandise[$key]->name }} </h5>
                                <p class="card-text" style="color: white;"> 
                                    Stock masih {{ $merchandise[$key]->stock }} <br>
                                    Harga {{ number_format( $merchandise[$key]->price , 2, "," , ".") }}
                                </p>
                        </div>
                    @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
   
    </div>

</div>

@endsection
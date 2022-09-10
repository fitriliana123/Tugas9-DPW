@extends('template.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <a href="{{ url('admin/produk') }}" class="btn btn-primary btn-sm "><i class="fas fa-arrow-left"> Kembali</i></a>
            <div class="card">
                <div class="card-header">
                    Detail Data Produk
                    <a href="{{url('admin/produk', $produk->id)}}/edit" class="btn btn-dark btn-sm float-right"><i class="fa fa-edit"></i> Edit
                    </a>
                </div>
                <div class="card-body">
                    <h4>{{$produk->nama}}</h4>
                    <hr>
                    <p> Rp. {{number_format($produk->harga)}} |
                        Stok : {{$produk->stok}} |
                        Berat : {{$produk->berat}} kg |
                        Seller : {{$produk->seller->nama}} |
                        Tanggal Produk : {{$produk->created_at->diffForHumans()}}
                    </p>
                    <p>
                        {!! nl2br($produk->deskripsi) !!}
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
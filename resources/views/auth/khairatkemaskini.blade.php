@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h5 class="pb-3 mb-4 font-italic border-bottom">
                            Maklumat Pengguna
                        </h5>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="namapenuh">Nama Penuh</label> 
                                <input class="form-control" type="text" value="{{$user->namapenuh}}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nomborkad">Nombor KP</label>
                                <input class="form-control" type="text" value="{{$user->nomborkad}}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="alamatrumah">Alamat Rumah</label>
                            <textarea class="form-control" type="text" placeholder="{{$user->alamatrumah}}"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="tarikhlahir">Tarikh Lahir</label>
                                <input class="form-control" type="date" value="{{$user->tarikhlahir}}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="telrumah">Telefon (Rumah)</label>
                                <input class="form-control" type="text" value="{{$user->telrumah}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="telpemohon">Nombor Telefon</label>
                                <input class="form-control" type="text" value="{{$user->telpemohon}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="namawaris">Nama Waris</label>
                                <input class="form-control" type="text" value="{{$user->namawaris}}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="telwaris">Nombor Telefon Waris</label>
                                <input class="form-control" type="text" value="{{$user->telwaris}}">
                            </div>
                        </div>

                        <br>

                        <h5 class="pb-3 mb-4 font-italic border-bottom">
                            Maklumat Tanggungan
                        </h5>

                        <div class="table-responsive">          
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Umur</th>
                                        <th>Nombor KP</th>
                                        <th>Hubungan</th>
                                    </tr>
                                </thead>
                                @foreach ($tanggungans as $tanggungan)
                                <tbody>
                                    <tr>    
                                        <th> <input class="form-control" type="text" value="{{$tanggungan->tangnama}}"> </th>
                                        <th> <input class="form-control" type="text" value="{{$tanggungan->tangumur}}"> </th>
                                        <th> <input class="form-control" type="text" value="{{$tanggungan->tangkp}}"> </th>
                                        <th> <input class="form-control" type="text" value="{{$tanggungan->tanghubungan}}"> </th>              
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>

                        <br>

                        <h5 class="pb-3 mb-4 font-italic border-bottom">
                            Bukti Bayaran
                        </h5>

                        <div class="col">
                            <div class="col-md-6 mb-3">
                                <label for="resitbayaran">Resit Bayaran</label>
                                <input type="file" class="form-control-file" id="resitbayaran" aria-describedby="fileHelp">
                            </div>
                        </div>

                        <br>
                            
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary"> Simpan </button>
                            </div>
                        </div>

                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

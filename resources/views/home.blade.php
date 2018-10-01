@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
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
                            <input class="form-control" type="text" placeholder="{{$user->namapenuh}}" readonly>
                            <!-- 
                            kalau nak editable 
                            <input class="form-control" type="text" value="{{$user->namapenuh}}" id="example-text-input">
                            -->
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nomborkad">Nombor KP</label>
                            <input class="form-control" type="text" placeholder="{{$user->nomborkad}}" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="alamatrumah">Alamat Rumah</label>
                        <textarea class="form-control" type="text" placeholder="{{$user->alamatrumah}}" readonly></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="tarikhlahir">Tarikh Lahir</label>
                            <input class="form-control" type="text" placeholder="{{$user->tarikhlahir}}" readonly>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="telrumah">Telefon (Rumah)</label>
                            <input class="form-control" type="text" placeholder="{{$user->telrumah}}" readonly>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="telpemohon">Nombor Telefon</label>
                            <input class="form-control" type="text" placeholder="{{$user->telpemohon}}" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="namawaris">Nama Waris</label>
                            <input class="form-control" type="text" placeholder="{{$user->namawaris}}" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="telwaris">Nombor Telefon Waris</label>
                            <input class="form-control" type="text" placeholder="{{$user->telwaris}}" readonly>
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
                                    <th> <input class="form-control" type="text" placeholder="{{$tanggungan->tangnama}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="{{$tanggungan->tangumur}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="{{$tanggungan->tangkp}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="{{$tanggungan->tanghubungan}}" readonly> </th>              
                                </tr>
                            </tbody>
                            @endforeach
                            <!--
                            <tbody>
                                <tr>    
                                    <th> <input class="form-control" type="text" placeholder="{{$user->tangnama2}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="{{$user->tangumur2}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="{{$user->tangkp2}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="{{$user->tanghubungan2}}" readonly> </th>             
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>    
                                    <th> <input class="form-control" type="text" placeholder="{{$user->tangnama3}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="{{$user->tangumur3}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="{{$user->tangkp3}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="{{$user->tanghubungan3}}" readonly> </th>             
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>    
                                    <th> <input class="form-control" type="text" placeholder="{{$user->tangnama4}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="{{$user->tangumur4}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="{{$user->tangkp4}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="{{$user->tanghubungan4}}" readonly> </th>             
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>    
                                    <th> <input class="form-control" type="text" placeholder="{{$user->tangnama5}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="{{$user->tangumur5}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="{{$user->tangkp5}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="{{$user->tanghubungan5}}" readonly> </th>             
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>    
                                    <th> <input class="form-control" type="text" placeholder="{{$user->tangnama6}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="{{$user->tangumur6}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="{{$user->tangkp6}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="{{$user->tanghubungan6}}" readonly> </th>             
                                </tr>
                            </tbody>
                            -->
                        </table>
                    </div>

                    <br>

                    <h5 class="pb-3 mb-4 font-italic border-bottom">
                        Maklumat Bayaran
                    </h5>

                    <div class="table-responsive">          
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Tarikh Bayaran</th>
                                    <th>Jumlah Perlu Dibayar</th>
                                    <th>Sudah Dibayar</th>
                                    <th>Baki</th>
                                </tr>
                            </thead>
                            @foreach ($bayarans as $bayaran)
                            <tbody>
                                <tr>    
                                    <th> <input class="form-control" type="text" placeholder="{{$bayaran->tarikhbayaran}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="RM {{$bayaran->jumlah}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="RM {{$bayaran->bayar}}" readonly> </th>
                                    <th> <input class="form-control" type="text" placeholder="RM {{$bayaran->jumlah - $bayaran->bayar}}" readonly> </th>              
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>

                    <br>
                        
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <a class="btn btn-primary" href="khairatkemaskini" role="button">Kemaskini</a>
                        </div>
                    </div>

                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

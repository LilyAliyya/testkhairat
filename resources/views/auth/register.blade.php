@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Borang Khairat Kematian</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <h5 class="pb-3 mb-4 font-italic border-bottom">
                            Maklumat Pemohon (Diisi Oleh Ketua Keluarga)
                        </h5>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="email">Alamat E-mel</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="password">Kata Laluan</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="password-confirm">Sahkan Kata Laluan</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="namapenuh">Nama Penuh</label>
                                <input id="namapenuh" type="text" class="form-control{{ $errors->has('namapenuh') ? ' is-invalid' : '' }}" name="namapenuh" value="{{ old('namapenuh') }}" required autofocus>

                                @if ($errors->has('namapenuh'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('namapenuh') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nomborkad">Nombor KP (Tanpa "-")</label>
                                <input id="nomborkad" type="text" class="form-control{{ $errors->has('nomborkad') ? ' is-invalid' : '' }}" name="nomborkad" value="{{ old('nomborkad') }}" required autofocus>

                                @if ($errors->has('nomborkad'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nomborkad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="alamatrumah">Alamat Rumah</label>
                            <textarea id="alamatrumah" type="text" class="form-control{{ $errors->has('alamatrumah') ? ' is-invalid' : '' }}" name="alamatrumah" value="{{ old('alamatrumah') }}"  rows="3" required autofocus></textarea>

                            @if ($errors->has('alamatrumah'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('alamatrumah') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="tarikhlahir">Tarikh Lahir</label>
                                <input id="tarikhlahir" type="date" class="form-control{{ $errors->has('tarikhlahir') ? ' is-invalid' : '' }}" name="tarikhlahir" value="{{ old('tarikhlahir') }}" required autofocus>

                                @if ($errors->has('tarikhlahir'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tarikhlahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="telrumah">Telefon (Rumah)</label>
                                <input id="telrumah" type="text" class="form-control{{ $errors->has('telrumah') ? ' is-invalid' : '' }}" name="telrumah" value="{{ old('telrumah') }}" required autofocus>

                                @if ($errors->has('telrumah'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('telrumah') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="telpemohon">Nombor Telefon</label>
                                <input id="telpemohon" type="text" class="form-control{{ $errors->has('telpemohon') ? ' is-invalid' : '' }}" name="telpemohon" value="{{ old('telpemohon') }}" required autofocus>

                                @if ($errors->has('telpemohon'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('telpemohon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="namawaris">Nama Waris</label>
                                <input id="namawaris" type="text" class="form-control{{ $errors->has('namawaris') ? ' is-invalid' : '' }}" name="namawaris" value="{{ old('namawaris') }}" required autofocus>

                                @if ($errors->has('namawaris'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('namawaris') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="telwaris">Nombor Telefon Waris</label>
                                <input id="telwaris" type="text" class="form-control{{ $errors->has('telwaris') ? ' is-invalid' : '' }}" name="telwaris" value="{{ old('telwaris') }}" required autofocus>

                                @if ($errors->has('telwaris'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('telwaris') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <br>
                        
                        <h5 class="pb-3 mb-4 font-italic border-bottom">
                            Maklumat Tanggungan
                        </h5>

                        <div name="tanggungan" id="tanggungan" class="table-responsive">          
                            <table class="table" id="dynamic_field">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Umur</th>
                                        <th>Nombor KP</th>
                                        <th>Hubungan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>    
                                        <th> <input id="tangnama" type="text" class="form-control name_list" name="tangnama" autofocus> </th>
                                        <th> <input id="tangumur" type="text" class="form-control name_list" name="tangumur" autofocus> </th>
                                        <th> <input id="tangkp" type="text" class="form-control name_list" name="tangkp" autofocus></th>
                                        <th> 
                                            <select name="tanghubungan" class="form-control custom-select d-block w-100 name_list">
                                                <option value="">Pilih Hubungan</option>
                                                <option value="Isteri / Suami">Isteri / Suami</option>
                                                <option value="Anak">Anak</option>
                                                <option value="Ibu / Bapa Yang Tinggal Bersama">Ibu / Bapa Yang Tinggal Bersama</option>
                                            </select>
                                        </th>    
                                        <th><button type="button" name="add" id="add" class="btn btn-success">+</button></th>        
                                    </tr>
                                </tbody>
                                

                                <!--
                                <tbody>
                                    <tr>    
                                        <th> <input id="tangnama2" type="text" class="form-control" name="tangnama2" autofocus> </th>
                                        <th> <input id="tangumur2" type="text" class="form-control" name="tangumur2" autofocus> </th>
                                        <th> <input id="tangkp2" type="text" class="form-control" name="tangkp2" autofocus> </th>
                                        <th> 
                                            <select name="tanghubungan2" class="form-control custom-select d-block w-100">
                                                <option value="">Pilih Hubungan</option>
                                                <option value="Isteri / Suami">Isteri / Suami</option>
                                                <option value="Anak">Anak</option>
                                                <option value="Ibu / Bapa Yang Tinggal Bersama">Ibu / Bapa Yang Tinggal Bersama</option>
                                            </select>
                                        </th>               
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>    
                                        <th> <input id="tangnama3" type="text" class="form-control" name="tangnama3" autofocus> </th>
                                        <th> <input id="tangumur3" type="text" class="form-control" name="tangumur3" autofocus> </th>
                                        <th> <input id="tangkp3" type="text" class="form-control" name="tangkp3" autofocus> </th>
                                        <th> 
                                            <select name="tanghubungan3" class="form-control custom-select d-block w-100">
                                                <option value="">Pilih Hubungan</option>
                                                <option value="Isteri / Suami">Isteri / Suami</option>
                                                <option value="Anak">Anak</option>
                                                <option value="Ibu / Bapa Yang Tinggal Bersama">Ibu / Bapa Yang Tinggal Bersama</option>
                                            </select>
                                        </th>               
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>    
                                        <th> <input id="tangnama4" type="text" class="form-control" name="tangnama4" autofocus> </th>
                                        <th> <input id="tangumur4" type="text" class="form-control" name="tangumur4" autofocus> </th>
                                        <th> <input id="tangkp4" type="text" class="form-control" name="tangkp4" autofocus> </th>
                                        <th> 
                                            <select name="tanghubungan4" class="form-control custom-select d-block w-100">
                                                <option value="">Pilih Hubungan</option>
                                                <option value="Isteri / Suami">Isteri / Suami</option>
                                                <option value="Anak">Anak</option>
                                                <option value="Ibu / Bapa Yang Tinggal Bersama">Ibu / Bapa Yang Tinggal Bersama</option>
                                            </select>
                                        </th>               
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>    
                                        <th> <input id="tangnama5" type="text" class="form-control" name="tangnama5" autofocus> </th>
                                        <th> <input id="tangumur5" type="text" class="form-control" name="tangumur5" autofocus> </th>
                                        <th> <input id="tangkp5" type="text" class="form-control" name="tangkp5" autofocus> </th>
                                        <th> 
                                            <select name="tanghubungan5" class="form-control custom-select d-block w-100">
                                                <option value="">Pilih Hubungan</option>
                                                <option value="Isteri / Suami">Isteri / Suami</option>
                                                <option value="Anak">Anak</option>
                                                <option value="Ibu / Bapa Yang Tinggal Bersama">Ibu / Bapa Yang Tinggal Bersama</option>
                                            </select>
                                        </th>               
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>    
                                        <th> <input id="tangnama6" type="text" class="form-control" name="tangnama6" autofocus> </th>
                                        <th> <input id="tangumur6" type="text" class="form-control" name="tangumur6" autofocus> </th>
                                        <th> <input id="tangkp6" type="text" class="form-control" name="tangkp6" autofocus> </th>
                                        <th> 
                                            <select name="tanghubungan6" class="form-control custom-select d-block w-100">
                                                <option value="">Pilih Hubungan</option>
                                                <option value="Isteri / Suami">Isteri / Suami</option>
                                                <option value="Anak">Anak</option>
                                                <option value="Ibu / Bapa Yang Tinggal Bersama">Ibu / Bapa Yang Tinggal Bersama</option>
                                            </select>
                                        </th>               
                                    </tr>
                                </tbody>
                                -->
                                
                            </table>
                        </div>

                        <br>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Daftar') }}
                                </button>
                            </div>
                        </div>

                        <br>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){   
      var i=1;  

      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input id="tangnama" type="text" class="form-control name_list" name="tangnama[]" autofocus></td><td><input id="tangumur" type="text" class="form-control name_list" name="tangumur[]" autofocus></td><td><input id="tangkp" type="text" class="form-control name_list" name="tangkp[]" autofocus></td><td><select name="tanghubungan[]" class="form-control custom-select d-block w-100 name_list"><option value="">Pilih Hubungan</option><option value="Isteri / Suami">Isteri / Suami</option><option value="Anak">Anak</option><option value="Ibu / Bapa Yang Tinggal Bersama">Ibu / Bapa Yang Tinggal Bersama</option></select><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">x</button></tr>');  
      });

      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
    });  
</script>
@endsection
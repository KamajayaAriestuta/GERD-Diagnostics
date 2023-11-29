@extends('index')

@section('title', 'Diagnostik GERD')
@section ('content')
        <div class="row">
            <div class="col-md-12">
                <form enctype="multipart/form-data" method="POST" action="{{ route('store') }}">
                  @csrf
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Masukan Data Diri</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                    <div class="card-body">
                      <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Lengkap" name="nama">
                      </div>
                      <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="text" class="form-control" id="umur" placeholder="Masukan Umur" name="umur">
                      </div>
                      <div class="form-group">
                        <label for="kelamin">Jenis Kelamin</label>
                        <select class="custom-select" name="kelamin" id="kelamin">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>                    
                    </div>
                </div>
                <div class="card card-secondary">
                    <div class="card-header">
                      <h3 class="card-title">Gejala yang Dirasakan</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <form>
                        <div class="row">
                          <div class="col-sm-6">
                            <!-- checkbox -->
                            <div class="form-group">
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="1" name="diagnostik1">
                                <label for="customCheckbox1" class="custom-control-label"><p>Merasa Mual</p></label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="1" name="diagnostik2">
                                <label for="customCheckbox2" class="custom-control-label"><p>Muntah</p></label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="1" name="diagnostik3">
                                <label for="customCheckbox3" class="custom-control-label"><p>Suara Serak</p></label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="1" name="diagnostik4">
                                <label for="customCheckbox4" class="custom-control-label"><p>Terasa Sakit ketika Menelan</p></label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox5" value="1" name="diagnostik5">
                                <label for="customCheckbox5" class="custom-control-label"><p>Otot Perut terasa Kencang</p></label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox6" value="1" name="diagnostik6">
                                <label for="customCheckbox6" class="custom-control-label"><p>Merasa Panas di Bagian Dada</p></label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox7" value="1" name="diagnostik7">
                                <label for="customCheckbox7" class="custom-control-label"><p>Rasa Asam di Mulut</p></label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox8" value="1" name="diagnostik8">
                                <label for="customCheckbox8" class="custom-control-label"><p>Rasa Terbakar di Ulu Hati</p></label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox9" value="1" name="diagnostik9">
                                <label for="customCheckbox9" class="custom-control-label"><p>Rasa Terbakar di Tenggorokan</p></label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox10" value="1" name="diagnostik10">
                                <label for="customCheckbox10" class="custom-control-label"><p>Penurunan Berat Badan</p></label>
                              </div>
                            </div>
                        </div>
                    </div>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-success">Lihat Hasil Diagnosis</button>
                  </div>
                </form>
              </div>
        </div>
@endsection
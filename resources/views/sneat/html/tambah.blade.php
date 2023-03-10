  @extends('sneat.html.index')
@section('konten')
    <div class="row">
                <div class="col-xxl">
                  <div class="card mb-2">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Data Customer</h5>
                      <small class="text-muted float-end">Isikan Data Diri Dibawah ini!</small>
                    </div>
                    <div class="card-body">
                      <form action='/pesan/store' method="post">
                        @csrf
                        <div class="row mb-2">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">No Pesanan</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="id_pesan" value="{{ Session::get ('id_pesan')}}" id="id_pesan" placeholder="1,2,3,4,etc" />
                          </div>
                        </div>
                        <div class="row mb-2">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_cust" value="{{ Session::get ('nama_cust')}}" id="nama_cust" placeholder="Tuliskan Nama sesuai KTP" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Alamat</label>
                          <div class="col-sm-10">
                            <input
                              type="text" class="form-control" name="alamat" value="{{ Session::get ('alamat')}}" id="alamat" placeholder=""/>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">No.Identitas</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input type="text" class="form-control" name="no_iden" value="{{ Session::get ('no_iden')}}" id="no_iden" placeholder="(331234XXXXXXXX)"
                                aria-label="john.doe"
                                aria-describedby="basic-default-email2"
                              />
                              <span class="input-group-text" id="basic-default-email2"></span>
                            </div>
                            <div class="form-text">KTP/SIM/PASPOR</div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Jenis Pesanan</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              
                              class="form-control phone-mask"
                              name="jenis_pesan" value="{{ Session::get ('jenis_pesan')}}" id="jenis_pesan"
                              placeholder=""
                              aria-label="658 799 8941"
                              aria-describedby="basic-default-phone"
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Harga</label>
                          <div class="col-sm-10">
                            <textarea
                  
                              class="form-control"
                              name="Harga" value="{{ Session::get ('Harga')}}" id="Harga"
                              placeholder=""
                              aria-label="Hi, Do you have a moment to talk Joe?"
                              aria-describedby="basic-icon-default-message2"
                            ></textarea>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" name="submit">Pesan</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                </div>
@endsection
  
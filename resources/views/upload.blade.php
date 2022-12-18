@extends ('admin.ds')
@section ('pagetitle')
<div class="pagetitle">
      <h1>Upload Revisi Proposal TA</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Upload Revisi Proposal TA</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
@endsection
@section ('sidebar')
  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed" href="/dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->
    <!-- start Bimbingan TA -->
    <li class="nav-heading">Bimbingan TA</li>
    <li class="nav-item">
      <a class="nav-link collapsed " href="/upload">
        <i class="bi bi-journal-text"></i>
        <span>Mengajukan Proposal</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/upload">
        <i class="bi bi-layer-forward"></i>
        <span>Upload Revisi Proposal TA</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed " href="/upload">
        <i class="bi bi-calendar-week"></i>
        <span>Jadwal Sidang</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="/upload">
        <i class="bi bi-layer-forward"></i>
        <span>Upload Revisi TA</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed " href="/upload">
        <i class="bi bi-brush"></i>
        <span>Penilaian</span>
      </a>
    </li>
    <!-- End Bimbingan TA -->
    <!-- start tracking ta -->
    <li class="nav-heading">Tracking TA</li>
    <li class="nav-item">
      <a class="nav-link collapsed " href="/dashboard">
        <i class="bi bi-signpost-split-fill"></i>
        <span>Tracking TA</span>
      </a>
    </li>
    <!-- end tracking TA -->
    <!-- start upload berkas -->
    <li class="nav-heading">Upload Berkas</li>
    <li class="nav-item">
      <a class="nav-link collapsed " href="/dashboard">
        <i class="bi bi-file-earmark-text"></i>
        <span>Upload Bebas Lab</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed " href="/dashboard">
        <i class="bi bi-file-earmark-check"></i>
        <span>Upload Lembar Pengesahan</span>
      </a>
    </li>
  </ul>
@endsection
@section ('main')

  @if(Session::has('message'))
      <div class="alert alert-success" role="alert">
        {{ Session::get('message') }}
      </div>
  @endif
  <section class="section">
            <div>
    
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Silahkan Upload File Revisi TA dan Berikan Keterangan Revisi Proposal TA</h5>
                  <br>
                  <!-- General Form Elements -->
                  <form method="post" action="{{route('upber')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                      <label for="inputPassword" class="col-sm-2 col-form-label">NRP</label>
                      <div class="col-sm-10">
                        <input type="text" name="nrp" class="form-control" value="{{Auth::user()->NRP}}">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPassword" class="col-sm-2 col-form-label">NAMA</label>
                      <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputNumber" class="col-sm-2 col-form-label">File Upload <br> file harus berupa .pdf</label>
                      <div class="col-sm-10">
                        <br>
                        <input class="form-control" name="file" type="file" id="formFile">
                      </div>
                    </div>
                    <br>
                    <div class="row mb-3">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan Revisi TA</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px" name="ket"></textarea>
                      </div>
                    </div>

                    <!-- awal hapus -->
                    <!-- <div class="row mb-3">
                      <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                      <div class="col-sm-10">
                        <input type="time" class="form-control">
                      </div>
                    </div>
    
                    <div class="row mb-3">
                      <label for="inputColor" class="col-sm-2 col-form-label">Color Picker</label>
                      <div class="col-sm-10">
                        <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#4154f1" title="Choose your color">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px"></textarea>
                      </div>
                    </div>
                    <fieldset class="row mb-3">
                      <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                          <label class="form-check-label" for="gridRadios1">
                            First radio
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                          <label class="form-check-label" for="gridRadios2">
                            Second radio
                          </label>
                        </div>
                        <div class="form-check disabled">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios" value="option" disabled>
                          <label class="form-check-label" for="gridRadios3">
                            Third disabled radio
                          </label>
                        </div>
                      </div>
                    </fieldset>
                    <div class="row mb-3">
                      <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend>
                      <div class="col-sm-10">
    
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck1">
                          <label class="form-check-label" for="gridCheck1">
                            Example checkbox
                          </label>
                        </div>
    
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                          <label class="form-check-label" for="gridCheck2">
                            Example checkbox 2
                          </label>
                        </div>
    
                      </div>
                    </div>
    
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Disabled</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="Read only / Disabled" disabled>
                      </div>
                    </div>
    
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Select</label>
                      <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    </div>
    
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Multi Select</label>
                      <div class="col-sm-10">
                        <select class="form-select" multiple aria-label="multiple select example">
                          <option selected>Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    </div> -->
                    <!-- end hapus -->

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Submit Button</label>
                      <div class="col-sm-10">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal" style="color:black;">Submit Form</button>
                        <div class="modal fade" id="basicModal" tabindex="-1">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Upload File Revisi Proposal TA</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Apakah anda yakin untuk Upload file ini ?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="color:black;">tidak</button>
                                <button type="submit" class="btn btn-primary" style="color:black;">Iya</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
    
                  </form><!-- End General Form Elements -->
    
                </div>
              </div>
    
            </div>
        </section>
    

@endsection
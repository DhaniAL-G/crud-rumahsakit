<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Add rumahsakit</h3>
                   @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                     {{session ('sukses')}}
                    </div>
                   @endif
                    <div class = 'row'>
  
                  <form action="{{ url('rumahsakit/store') }} " method="POST">
                        
                   @csrf
                       <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">idpasien</label>
                        <input name="idpasien" type="text" class="form-control" id="formGroupExampleInput2" placeholder="idpasien" >
                       </div>
                       <div class="mb-3">
                        <label for="formGroupExampleInput3" class="form-label">nama_pasien</label>
                        <input name="nama_pasien" type="text" class="form-control" id="formGroupExampleInput" placeholder="nama_pasien" >
                      </div>
                      <div class="mb-3">
                       <label for="formGroupExampleInput4" class="form-label">jenis_kelamin</label>
                       <input name="jenis_kelamin" type="integer" class="form-control" id="formGroupExampleInput2" placeholder="jenis_kelamin" >
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput5" class="form-label">jenis_penyakit</label>
                        <input name="jenis_penyakit" type="text" class="form-control" id="formGroupExampleInput" placeholder="jenis_penyakit" >
                      </div>
                      <div class="mb-3">
                       <label for="formGroupExampleInput6" class="form-label">lama_inap</label>
                       <input name="lama_inap" type="text" class="form-control" id="formGroupExampleInput2" placeholder="lama_inap" >
                      </div>
                      
                      
                       
                       
  
                        <button type="submit" class="btn btn-warning" >Submit</button>
          </form>
      </div>
    </div>
<!DOCTYPE html>


    <head>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            <div class = 'row'>
                <div class='col-6'>
                   <h1>rumahsakit</h1>
                <div class='col-6'>
                </div>
                <!-- Button trigger modal -->
                <a href="{{ url('rumahsakit/create') }}" class="btn btn-success btn-sm">
                  <i class="fa fa-plus"></i> Add
              </a>


                  Tambah pasien 
                 
                  </button>
                    </div>

                      </div>
                      
                <table class='table table-hover'>
                    <tr>
                        <th>idpasien</th>
                        <th>nama_pasien</th>
                        <th>jenis_kelamin</th>
                        <th>jenis_penyakit</th>
                        <th>lama_inap</th>
           
                    </tr>
                    @foreach ($rumahsakit as $rumahsakit)
                    <tr>
                        <td>{{ $rumahsakit->idpasien }}</td>
                        <td>{{ $rumahsakit->nama_pasien}}</td>
                        <td>{{ $rumahsakit->jenis_kelamin }}</td>
                        <td>{{ $rumahsakit->jenis_penyakit}}</td>
                        <td>{{ $rumahsakit->lama_inap }}</td>
                                  
                          <td><a href="/rumahsakit/{{$rumahsakit->idpasien}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/rumahsakit/{{$rumahsakit->idpasien}}/delete"class="btn btn-danger btn-sm " 
                              onclick="return confirm ('Apakah yakin untuk dihapus ?')">Hapus</a>
                            </a>

                        </td>
                        
                        
                    </tr>
                        
                    @endforeach

                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
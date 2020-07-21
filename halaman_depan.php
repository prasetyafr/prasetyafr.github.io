<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.12.1-web/css/all.min.css">


    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-light" style="background: #1b69b3;">
    <a class="navbar-brand" href="#">
      <img src="img/kai logo.png" style="height: 50px; width: 50px;  margin-top: -10px;  margin-bottom: -10px;" ></a>
      <a href=""  style="margin-left: -50px; font-size: 15px; font-family: Source Sans Pro ; text-align: left; color: white; text-decoration: none;">Home</a>
      <a href="<?= base_url('konfirmasi')?>"  style="margin-right: 700px; font-size: 15px; font-family: Source Sans Pro; color: white; text-decoration: none;">Konfirmasi Pembayaran</a>

  <button type="button" class="btn btn-outline-secondary" style="text-align: right;">Login</button>
  </nav>

    <div class="row">
      <div class="col-md-3">
          <div class="card-header text-white text-center" style="background-color: #0b56a7; font-weight: bold; width: 345px;">
            <div>
       <img src="img/kai putih.png" style="margin-top: -12px; border: 4px solid; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;"></div>
          </div>

          <div class="card-header text-white text-center" style="background-color: #f08519; font-weight: bold; width: 345px;">
            PESANAN TIKET
          </div>

          <div class="card-body"  style="background-color: #0b56a7; font-family: Source Sans Pro ; width: 345px; ">                
              <div class="form-group" >
                  <select id="inputState" class="form-control" style="margin-bottom: 5px;">
                    <option selected="selected" value="">Stasiun Asal</option>
                  <?php foreach ($stasiun as $st): ?>
                  <option value="<?= $st->id ?>"><?= $st->nama_stasiun ?></option>
                                                      
                                                      <?php endforeach ?>
                                                      </select>

                  <div class="form-group" >
                  <select id="inputState" class="form-control" style="margin-bottom: 5px;">
                    <option selected="selected" value="">Stasiun Tujuan</option>
                  <?php foreach ($stasiun as $st): ?>
                  <option value="<?= $st->id ?>"><?= $st->nama_stasiun ?></option>
                                                      
                                                      <?php endforeach ?>
                                                      </select>

              <div class="form-group" style="margin-bottom: 5px;">
                <input type="date" name="tanggal" class="form-control" min="<?= date('Y-m-d') ?>" value='<?= date('Y-m-d') ?>'>
              </div>

              <div class="form-group" >
                  <select id="inputState" class="form-control" style="margin-bottom: 5px;">
                  <option selected="selected" value="" >Dewasa</option>
                    <optgroup label="Dewasa (>3 Tahun)">
                                            
                                         <?php for ($i=1; $i <=4 ; $i++): ?>
                  <option value="<?= $i ?>"><?= $i ?> Dewasa</option>
                  <?php endfor; ?>
                   </optgroup>
                  </select>

             <div class="form-group" >
                  <select id="inputState" class="form-control" style="margin-bottom: 5px;">
                  <option selected="selected" value="" >Bayi</option>
                    <optgroup label="Bayi (<3 Tahun)">
                                            
                                          <option>0 Bayi</option>  
                                          <option>1 Bayi</option>
                                          <option>2 Bayi</option>
                                          <option>3 Bayi</option>
                                          <option>4 Bayi</option>
                    </optgroup>
                  </select>
              
              </div>
              
              <a href="<?= base_url('jadwal') ?>"><button class="btn text-white btn-block" style="background-color: #f08519; font-weight: bold; margin-top: 67px;" >Pesan & Cari Kereta</button></a>

            </form>
          </div>

        </div>

      </div>

    </div>
        
         <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #01184a; width: 1366px;">

        
     <img src="img/footer.png" class="text-center bold" ></img>
     <img src="img/footer2.png" class="text-center bold" style="margin-left: 350px;"></img>

    </nav>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f08200; width: 1366px;">
       <p style="text-align: center; margin-left: 400px; margin-top: 10px; margin-bottom: 10px; font-weight: bold; font-family: Source Sans Pro; color: white;">© 2017 PT KERETA API INDONESIA (PERSERO), All Rights Reserved</p>
    </nav>

     </div>


  <div class="col-md-9" >
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\1.jpg" class="d-block w-100" alt="...">
        </div>
          <div class="carousel-item">
            <img src="img\2.jpg" class="d-block w-100 " alt="..." >
          </div>
          <div class="carousel-item">
        <img src="img\3.jpg" class="d-block w-100" alt="..." >
      </div>
       <div class="carousel-item">
            <img src="img\4.jpg" class="d-block w-100 " alt="..." >
          </div>
          <div class="carousel-item">
        <img src="img\5.jpg" class="d-block w-100" alt="..." >
      </div>
       <div class="carousel-item">
            <img src="img\6.jpg" class="d-block w-100 " alt="..." >
          </div>
          <div class="carousel-item">
        <img src="img\7.jpg" class="d-block w-100" alt="..." >
      </div>
       <div class="carousel-item">
            <img src="img\8.jpg" class="d-block w-100 " alt="..." >
          </div>
          <div class="carousel-item">
        <img src="img\9.jpg" class="d-block w-100" alt="..." >
      </div>
       <div class="carousel-item">
            <img src="img\10.jpg" class="d-block w-100 " alt="..." >
          </div>
          <div class="carousel-item">
        <img src="img\11.jpg" class="d-block w-100" alt="..." >
      </div>
       <div class="carousel-item">
            <img src="img\12.jpg" class="d-block w-100 " alt="..." >
          </div>
          <div class="carousel-item">
        <img src="img\13.jpg" class="d-block w-100" alt="..." >
      </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
</div>







   









<script src="<?= base_url('bootstrap/js/bootstrap.min.js')?>"></script>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
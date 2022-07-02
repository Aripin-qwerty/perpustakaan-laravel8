<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Perpustakaan</title>
  </head>
  <body>

@extends('layout.master')
@section('content')

<div class="jumbotron" style="background-image: url(https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=990&q=80); background-size: 100%;">
   <div class="container for-about">
   </div>
</div>


<div class="heading">
  <h1 style= "color: #4E73DF;">Recommended</h1>
</div>


<main>
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
          <img src="assets/img/book3.jpg" alt="">

            <div class="card-body">
              <p class="card-text">Buku ini berfokus pada apa yang telah dibicarakan penulis selama beberapa dekade. Tempat kita bekerja dan jenis pekerjaan yang kita lakukan seringkali berubah dengan cepat dan tidak terduga bagi banyak orang.</p>
              <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-sm btn-primary">View</button>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img/book2.jpg" alt="">

            <div class="card-body">
              <p class="card-text">Banyak dari kita menjalani hidup dengan berpikir bahwa satu-satunya orang yang mampu berpikir kreatif adalah seniman, penulis, dan orang lain yang telah dilatih untuk menerapkan proses berpikir ini dalam keadaan tertentu dan sporadis.  </p>
              <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-sm btn-primary">View</button>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="assets/img/book1.jpg" alt="">

            <div class="card-body">
              <p class="card-text">Buku pertama yang menyaring pendekatan Buffett terhadap manajemen dan kehidupan perusahaan. Ini memberikan analisis definitif tentang prinsip sistem Berkshire, biaya dan manfaatnya, dan bagaimana hal itu dapat diadaptasi untuk organisasi lain.</p>
              <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-sm btn-primary">View</button>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="assets/img/book1.jpg" alt="">

            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum expedita ullam aliquid dignissimos. Tempore, atque nam. Aliquam placeat facere ex.</p>
              <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-sm btn-primary">View</button>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="assets/img/book2.jpg" alt="">

            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum expedita ullam aliquid dignissimos. Tempore, atque nam. Aliquam placeat facere ex.</p>
              <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-sm btn-primary">View</button>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="assets/img/book2.jpg" alt="">

            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum expedita ullam aliquid dignissimos. Tempore, atque nam. Aliquam placeat facere ex.</p>
              <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-sm btn-primary">View</button>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</main>




    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>








@endsection
  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>









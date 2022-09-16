<!DOCTYPE html>
<html lang="vi" class="csstransforms3d">

<head>
  <title><?php echo $Galaxy['title'][0]['title']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="http://localhost/Galaxy_cinema/assets/css/Galaxy-style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b4c4f987a3.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- google tag manager-->

  <script type="text/javascript" src="http://localhost/Galaxy_cinema/assets/js/Buy_ticket.js"> </script>
  <script type="text/javascript" src="http://localhost/Galaxy_cinema/assets/js/Login.js"> </script>
  <script>
    var rel = <?= json_encode($Galaxy['cinema_movies_rel']); ?>;
    var cinema = <?= json_encode($Galaxy['cinema']); ?>;
    var movies = <?= json_encode($Galaxy['movies']); ?>;
    var movie_schedule = <?= json_encode(($Galaxy['movie_schedule_rel'])); ?>; 
  </script>
</head>

<body>
  <header>
    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="logo">
              <a rel="external" href="/Galaxy_cinema/Home">
                <img src="http://localhost/Galaxy_cinema/assets/img/galaxy-logo.png" alt="Galaxy Cinema" width="400px" height="50px">
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="search">
              <form class="search-form" action="submit">
                <div class="input-append">
                  <input placeholder="Ten Dien Vien, Ten Phim..." class="search-box" type="text" autocomplete="off">
                  <button type="submit" class="search-btn">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-2">
            <ul class="secondary-nav">
              <a id="loginlink" rel="external" href="#" data-bs-toggle="modal" data-bs-target="#myModal">
                <i class="fa fa-user"></i>
                Log In
              </a>
              <a rel="external" href="/" class="active">VN</a>
              <span>|</span>
              <a rel="external" href="/en">EN</a>
            </ul>
          </div>
        </div>
      </div>
      <!-- nav pills -->
      <div class="galaxy-nav">
        <div class="container">
          <nav>
            <ul class="primary-nav">
              <li>
                <a href="/Galaxy_cinema/lich-chieu">mua vé</a>
              </li>
              <li class="sub-nav">
                <a rel="external" href="javascript::">phim</a>
                <div class="sub-menu">
                  <ul class="undefined">
                    <li>
                      <a rel="external" href="/Galaxy_cinema/phim-dang-chieu">Phim dang chieu</a>
                    </li>
                    <li>
                      <a rel="external" href="/Galaxy_cinema/phim-sap-chieu">Phim sap chieu</a>
                    </li>
                  </ul>
                </div>

              </li>
              <li class="sub-nav">
                <a rel="external" href="javascript::">goc dien anh</a>
                <div class="sub-menu">
                  <ul class="undefined">
                    <li>
                      <a href="/Galaxy_cinema/the-loai-phim">the loai phim</a>
                    </li>

                    <li>
                      <a href="/Galaxy_cinema/dien-vien">dien vien</a>
                    </li>
                    <li>
                      <a href="/Galaxy_cinema/dao-dien">dao dien</a>
                    </li>
                    <li>
                      <a href="/Galaxy_cinema/binh-luan-phim">binh luan phim</a>
                    </li>
                    <li>
                      <a href="/Galaxy_cinema/blog-dien-anh">blog dien anh</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="sub-nav">
                <a rel="external" href="javascript::">su kien</a>
                <div class="sub-menu">
                  <ul class="undefined">
                    <li>
                      <a href="/Galaxy_cinema/uu-dai">uu dai</a>
                    </li>
                    <li>
                      <a href="/Galaxy_cinema/phim-hay-thang">phim hay thang</a>
                  </ul>
                </div>
              </li>
              <li>
                <a href="/Galaxy_cinema/rap-gia-ve">rap/gia ve</a>
              </li>
              <li>
                <a href="/Galaxy_cinema/ho-tro">ho tro</a>
              </li>
              <li>
                <a href="/Galaxy_cinema/thanh-vien">thanh vien</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
  </header>

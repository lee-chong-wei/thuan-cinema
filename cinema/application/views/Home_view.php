<!-- Load Header -->
<?php $this->load->view('Header'); ?>

<!-- BODY -->
<!-- slide show -->
<div id="Main-carousel" class="carousel slide" data-interval="5000" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <?php
    $current_time = strtotime(date("Y/m/d"));
    $query = $this->db->get('poster');
    $k = $query->num_rows();
    $number_button = 0;
    for ($i = 0; $i < $k; $i++) {
      $poster_start_time = strtotime($Galaxy['poster'][$i]['start_time']);
      $poster_end_time = strtotime($Galaxy['poster'][$i]['end_time']);
      if (($current_time >= $poster_start_time) && ($current_time <= $poster_end_time)) {
        switch ($number_button) {
          case '0': ?>
            <button type="button" data-bs-target="#Main-carousel" data-bs-slide-to="<?php echo $number_button; ?>" class="active" aria-current="true"></button>
          <?php
            break;
          default: ?>
            <button type="button" data-bs-target="#Main-carousel" data-bs-slide-to="<?php echo $number_button; ?>"></button>
        <?php break;
        } ?>
      <?php
        $number_button += 1;
      }  ?>
    <?php } ?>
  </div>
  <div class="carousel-inner">
    <?php
    $current_time = strtotime(date("Y/m/d"));
    $query = $this->db->get('poster');
    $k = $query->num_rows();
    $active = 0;
    for ($i = 0; $i < $k; $i++) {
      $poster_start_time = strtotime($Galaxy['poster'][$i]['start_time']);
      $poster_end_time = strtotime($Galaxy['poster'][$i]['end_time']);
      if (($current_time >= $poster_start_time) && ($current_time <= $poster_end_time)) {
        $active += 1;
        switch ($active) {
          case '1': ?>
            <div class="carousel-item active">
              <a href="<?php echo $Galaxy['poster'][$i]['link']; ?>" link="<?php echo $Galaxy['poster'][$i]['link']; ?>">
                <img src="<?php echo $Galaxy['poster'][$i]['image']; ?>" class="d-block w-100" data-was-processed="true">
              </a>
            </div>
          <?php break;

          default: ?>
            <div class="carousel-item">
              <a href="<?php echo $Galaxy['poster'][$i]['link']; ?>" link="<?php echo $Galaxy['poster'][$i]['link']; ?>">
                <img src="<?php echo $Galaxy['poster'][$i]['image']; ?>" class="d-block w-100" data-was-processed="true">
              </a>
            </div>
        <?php break;
        } ?>
      <?php }  ?>
    <?php } ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#Main-carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#Main-carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <div class="box-buy-ticket animated zoomIn">
    <section class="tabs">
      <div class="label-tab">MUA VE NHANH</div>
        <ul class="nav nav-tabs" id="tab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" data-bs-toggle="tab" href="#Film">Theo Phim</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" href="#Date">Theo Ngay</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" href="#Cinema">Theo Rap</a>
          </li>
        </ul>
        <!-- quick buying ticket content -->
        <div class="tab-content" id="tab-content">
        <div class="tab-pane fade show active" id="Film" role="tabpanel" aria-labelledby="Film">
            <div class="content-1">
              <form>
                <a class="btn btn-select btn-select-light">
                  <select class="form-select" id="moviePick" onchange="pickMovie()">
                    <option value="? number:-1 ?" selected="selected" hidden>Chon phim</option>
                    <?php
                    $current_time = strtotime(date("Y/m/d"));
                    $query = $this->db->get('movies');
                    $k = $query->num_rows();
                    for ($i = 0; $i < $k; $i++) {
                      $start_time = strtotime($Galaxy['movies'][$i]['start_time']);
                      $end_time = strtotime($Galaxy['movies'][$i]['end_time']);
                      if (($current_time >= $start_time) && ($current_time <= $end_time)) { ?>
                        <option value="<?php echo $Galaxy['movies'][$i]['movie_id']; ?>"><?php echo $Galaxy['movies'][$i]['names_EN']; ?></option>
                      <?php } ?>
                    <?php } ?>
                  </select>
                </a>
              </form>
              <form>
                <a class="btn btn-select btn-select-light">
                  <span class="btn-select-arrow"></span>
                  <select class="form-select" id="cinemaPick" onchange="pickDate()">
                    <option value="" selected="selected">Chon Rap</option>
                  </select>
                </a>
              </form>
              <form>
                <a class="btn btn-select btn-select-light">
                  <span class="btn-select-arrow"></span>
                  <select class="form-select" id="datePick" onchange="pickTime()">
                    <option value="" selected>Chon Ngay</option>
                  </select>
                </a>
              </form>
              <form>
                <a class="btn btn-select btn-select-light">
                  <span class="btn-select-arrow"></span>
                  <select class="form-select" id="timePick">
                    <option selected>Chon suat</option>
                  </select>
                </a>
              </form>
            </div>
          </div>
          <div class="tab-pane fade" id="Date" role="tabpanel" aria-labelledby="Date">
              <form>
                <a class="btn btn-select btn-select-light">
                  <span class="btn-select-arrow"></span>
                  <select class="form-select" id="tab-selector-2">
                    <option selected>Chon Ngay</option>
                    <option value="1">Thor: Love and Thunder</option>
                    <option value="2">Minions: The rise of Gru</option>
                    <option value="3">Em va Trinh</option>
                  </select>
                </a>
              </form>
              <form>
                <a class="btn btn-select btn-select-light">
                  <span class="btn-select-arrow"></span>
                  <select class="form-select" id="tab-selector-2">
                    <option selected>Chon Rap</option>
                    <option value="1">Thor: Love and Thunder</option>
                    <option value="2">Minions: The rise of Gru</option>
                    <option value="3">Em va Trinh</option>
                  </select>
                </a>
              </form>
              <form>
                <a class="btn btn-select btn-select-light">
                  <span class="btn-select-arrow"></span>
                  <select class="form-select" id="tab-selector-2">
                    <option selected>Chon Phim</option>
                    <option value="1">Thor: Love and Thunder</option>
                    <option value="2">Minions: The rise of Gru</option>
                    <option value="3">Em va Trinh</option>
                  </select>
                </a>
              </form>
              <form>
                <a class="btn btn-select btn-select-light">
                  <span class="btn-select-arrow"></span>
                  <select class="form-select" id="tab-selector-2">
                    <option selected>Chon suat</option>
                    <option value="1">Thor: Love and Thunder</option>
                    <option value="2">Minions: The rise of Gru</option>
                    <option value="3">Em va Trinh</option>
                  </select>
                </a>
              </form>
          </div>
          <div class="tab-pane fade" id="Cinema" role="tabpanel" aria-labelledby="Cinema">
            <div class="content-3">
              <form>
                <a class="btn btn-select btn-select-light">
                  <span class="btn-select-arrow"></span>
                  <select class="form-select" id="tab-selector-3">
                    <option selected>Chon Rap</option>
                    <option value="1">Thor: Love and Thunder</option>
                    <option value="2">Minions: The rise of Gru</option>
                    <option value="3">Em va Trinh</option>
                  </select>
                </a>
              </form>
              <form>
                <a class="btn btn-select btn-select-light">
                  <span class="btn-select-arrow"></span>
                  <select class="form-select" id="tab-selector-3">
                    <option selected>Chon Phim</option>
                    <option value="1">Thor: Love and Thunder</option>
                    <option value="2">Minions: The rise of Gru</option>
                    <option value="3">Em va Trinh</option>
                  </select>
                </a>
              </form>
              <form>
                <a class="btn btn-select btn-select-light">
                  <span class="btn-select-arrow"></span>
                  <select class="form-select" id="tab-selector-3">
                    <option selected>Chon Ngay</option>
                    <option value="1">Thor: Love and Thunder</option>
                    <option value="2">Minions: The rise of Gru</option>
                    <option value="3">Em va Trinh</option>
                  </select>
                </a>
              </form>
              <form>
                <a class="btn btn-select btn-select-light">
                  <span class="btn-select-arrow"></span>
                  <select class="form-select" id="tab-selector-3">
                    <option selected>Chon suat</option>
                    <option value="1">Thor: Love and Thunder</option>
                    <option value="2">Minions: The rise of Gru</option>
                    <option value="3">Em va Trinh</option>
                  </select>
                </a>
              </form>
            </div>
          </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a class="btn" href="#">MUA VE</a>
        </div>
        <div class="clear-shadow"></div>
      </div>
      
      
      <!-- show tab content for chon phim/chon rap/chon ngay -->
    </section>
  </div>
</div>
</div>
<!-- end slide show -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="tab-movies">
        <div class="tab-movies-line">
          <!-- hot new  -->
          <div class="hot-new pull-right">
            <?php
            $current_time = strtotime(date("Y/m/d"));
            $query = $this->db->get('hot_new');
            $k = $query->num_rows();
            for ($i = 0; $i < $k; $i++) {
              $start_time = strtotime($Galaxy['hot_new'][$i]['start_time']);
              $end_time = strtotime($Galaxy['hot_new'][$i]['end_time']);
              if (($current_time >= $start_time) && ($current_time <= $end_time)) { ?>
                <a>
                  <img src="<?php echo $Galaxy['hot_new'][$i]['image']; ?>" width="40px" height="30px">
                </a>
                <a href="<?php echo $Galaxy['hot_new'][$i]['link']; ?>"><?php echo $Galaxy['hot_new'][$i]['title']; ?></a>
              <?php } ?>
            <?php } ?>
          </div>
          <!-- current movie nav -->
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">PHIM DANG CHIEU</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">PHIM SAP CHIEU</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabcontent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="row movies-group">
                <?php
                $current_time = strtotime(date("Y/m/d"));
                $query = $this->db->get('movies');
                $k = $query->num_rows();
                for ($i = 0; $i < $k; $i++) {
                  $start_time = strtotime($Galaxy['movies'][$i]['start_time']);
                  $end_time = strtotime($Galaxy['movies'][$i]['end_time']);
                  if (($current_time >= $start_time) && ($current_time <= $end_time)) { ?>
                    <div class="col-md-4 movies-item">
                      <div class="article-movies-home">
                        <img src="<?php echo $Galaxy['movies'][$i]['image_home']; ?>" data-was-processed="true" width="100%" class="image">
                        <a href="<?php echo $Galaxy['movies'][$i]['link']; ?>">
                          <div class="description-hover overlay">
                            <div class="group">
                              <div class="btn btn-secondary-white">mua ve</div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="title-movie">
                        <h4 class="text-uppercase"><?php echo $Galaxy['movies'][$i]['names_EN']; ?></h4>
                        <h4 class="vn text-uppercase"><?php echo $Galaxy['movies'][$i]['names_VN']; ?></h4>
                      </div>
                    </div>
                  <?php } ?>
                <?php } ?>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button class="btn btn-secondary me-md-2" type="button">Xem Them <i class="fa fa-chevron-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab up coming movie -->
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="row movies-group">
                <?php
                $current_time = strtotime(date("Y/m/d"));
                $query = $this->db->get('movies');
                $k = $query->num_rows();
                for ($i = 0; $i < $k; $i++) {
                  $start_time = strtotime($Galaxy['movies'][$i]['start_time']);
                  if ($current_time <= $start_time) { ?>
                    <div class="col-md-4 movies-item">
                      <div class="article-movies-home">
                        <img src="<?php echo $Galaxy['movies'][$i]['image_home']; ?>" data-was-processed="true" width="100%" class="image">
                        <a href="<?php echo $Galaxy['movies'][$i]['link']; ?>">
                          <div class="description-hover overlay">
                            <div class="group">
                              <div class="btn btn-secondary-white">mua ve</div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="title-movie">
                        <h4 class="text-uppercase"><?php echo $Galaxy['movies'][$i]['names_EN']; ?></h4>
                        <h4 class="vn text-uppercase"><?php echo $Galaxy['movies'][$i]['names_VN']; ?></h4>
                      </div>
                    </div>
                  <?php } ?>
                <?php } ?>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button class="btn btn-secondary me-md-2" type="button">Xem Them <i class="fa fa-chevron-right"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- section movie commentary / blog -->
<div class="container">
  <section id="comment-blog">
    <div class="row">
      <!-- movie commentary -->
      <div class="col-md-6 col-xs-12">
        <a href="/Galaxy_cinema/Binh_luan_phim" class="title-block">
          <h3>BINH LUAN PHIM</h3>
        </a>
        <?php
        $current_time = strtotime(date("Y/m/d"));
        $query = $this->db->get('commentary');
        $k = $query->num_rows();
        for ($i = 0; $i < $k; $i++) {
          $start_time = strtotime($Galaxy['commentary'][$i]['start_time']);
          $end_time = strtotime($Galaxy['commentary'][$i]['end_time']);
          if (($current_time >= $start_time) && ($current_time <= $end_time)) { ?>
            <article class="blog">
              <div class="movie-thumb">
                <a href="<?php echo $Galaxy['commentary'][$i]['link']; ?>">
                  <img src="<?php echo $Galaxy['commentary'][$i]['image']; ?>">
                </a>
              </div>
              <h5>
                <a href="<?php echo $Galaxy['commentary'][$i]['link']; ?>">
                  <?php echo $Galaxy['commentary'][$i]['title']; ?>
                </a>
              </h5>
              <ul>
                <li>
                  <span class="like" style="margin-right: 5px;">
                    <button class="btn btn-primary" type="button">
                      <i class="fa-regular fa-thumbs-up"></i>Thich
                    </button>
                  </span>
                </li>
                <li style="margin-right: 5px;">
                  <span>
                    <div class="view-wrap">
                      <i class="fa-regular fa-eye"></i>
                      <span><?php echo $Galaxy['commentary'][$i]['views']; ?></span>
                    </div>
                  </span>
                </li>
                <li>
                  <div class="rating-movie rating-home">
                    <i class="fa-solid fa-star"></i>
                    <strong class="review-home">...</strong>
                    <span>/10</span>
                    <span>&nbsp;... </span>
                  </div>
                </li>
              </ul>
              <div class="blog-content">
                <p>
                  <span style="font-size: 14px;">
                    <span style="font-family: Arial,Helvetica,sans-serif;">
                      <span style="line-height: 107%">
                        <?php echo $Galaxy['commentary'][$i]['description']; ?>
                      </span>
                    </span>
                  </span>
                </p>
              </div>
            </article>
          <?php } ?>
        <?php } ?>
      </div>
      <!-- end movie commentary -->
      <!-- movie blog -->
      <div class="col-md-6 col-xs-12">
        <a href="/Galaxy_cinema/movie-blog" class="title-block">
          <h3 style="text-transform: upper-case;">BLOg dien anh</h3>
        </a>
        <?php
        $current_time = strtotime(date("Y/m/d"));
        $query = $this->db->get('blog');
        $k = $query->num_rows();
        for ($i = 0; $i < $k; $i++) {
          $start_time = strtotime($Galaxy['blog'][$i]['start_time']);
          $end_time = strtotime($Galaxy['blog'][$i]['end_time']);
          if (($current_time >= $start_time) && ($current_time <= $end_time)) { ?>
            <article class="blog">
              <div class="movie-thumb">
                <a href="<?php echo $Galaxy['blog'][$i]['link']; ?>">
                  <img src="<?php echo $Galaxy['blog'][$i]['image']; ?>">
                </a>
              </div>
              <h5>
                <a href="<?php echo $Galaxy['blog'][$i]['link']; ?>">
                  <?php echo $Galaxy['blog'][$i]['title']; ?>
                </a>
              </h5>
              <ul>
                <li>
                  <span class="like" style="margin-right: 5px;">
                    <button class="btn btn-primary" type="button">
                      <i class="fa-regular fa-thumbs-up"></i>Thich
                    </button>
                  </span>
                </li>
                <li style="margin-right: 5px;">
                  <span>
                    <div class="view-wrap">
                      <i class="fa-regular fa-eye"></i>
                      <span><?php echo $Galaxy['blog'][$i]['views']; ?></span>
                    </div>
                  </span>
                </li>
              </ul>
              <div class="blog-content">
                <p>
                  <span style="font-size: 14px;">
                    <span style="font-family: Arial,Helvetica,sans-serif;">
                      <span style="line-height: 107%">
                        <?php echo $Galaxy['blog'][$i]['description']; ?>
                      </span>
                    </span>
                  </span>
                </p>
              </div>
            </article>
          <?php }
          ?>
        <?php } ?>
      </div>

      <!-- end movie blog -->
    </div>
  </section>
</div>

<!-- promotion -->
<div class="container">
  <div class="row">
    <section id="promotion">
      <div class="col-md-12">
        <a href="/Galaxy_cinema/khuyen-mai" class="title-block">
          <h3>tin khuyen mai</h3>
        </a>
        <div class="row-promotion">
          <?php
          $current_time = strtotime(date("Y/m/d"));
          $query = $this->db->get('promotion');
          $k = $query->num_rows();
          for ($i = 0; $i < $k; $i++) {
            $start_time = strtotime($Galaxy['promotion'][$i]['start_time']);
            $end_time = strtotime($Galaxy['promotion'][$i]['end_time']);
            if (($current_time >= $start_time) && ($current_time <= $end_time)) { ?>
              <div class="col-md-3 promotion-item">
                <div class="promotion-item-home">
                  <a href="<?php echo $Galaxy['promotion'][$i]['link']; ?>">
                    <img src="<?php echo $Galaxy['promotion'][$i]['image']; ?>" class="lazy loaded">
                  </a>
                  <div class="description-hover overlay">
                    <a href="<?php echo $Galaxy['promotion'][$i]['link']; ?>">
                      <div class="info">
                        <h2><?php echo $Galaxy['promotion'][$i]['name']; ?></h2>
                        <p></p>
                        <span style="font-family:Arial,Helvetica,sans-serif;">
                          <span style="font-size:14px">
                            <span style="line-height: 107%;">
                              <?php echo $Galaxy['promotion'][$i]['description']; ?>
                            </span>
                          </span>
                        </span>
                      </div>
                    </a>
                    <div class="group">
                      <div class="btn btn-secondary-white">chi tiet</div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          <?php } ?>
        </div>
      </div>
    </section>
  </div>
</div>
<!-- end promotion -->

<!-- section galaxy cinema info -->
<div class="row">
  <div class="col-md-12">
    <section class="content-seo">
      <h3>GALAXY CINEMA</h3>
      <div class="row content-seo">
        <div class="col-md-12">
          <div class="content-text">
            <p style="margin-top: 0; margin-right: 0; margin-bottom: 10px; margin-left: 0; text-align:justify;">
              <span style="font-family: Arial,Helvetica,sans-serif;">
                <span style="font-size: 14px;">
                  <a href="/Galaxy_cinema/">
                    <b>Galaxy cinema</b>
                  </a>
                  "&nbsp; là một trong những công ty tư nhân đầu tiên về điện ảnh được thành lập từ năm 2003, đã khẳng định thương hiệu là 1 trong
                  10 địa điểm vui chơi giải trí được yêu thích nhất. Ngoài hệ thống rạp chiếu phim hiện đại, thu hút hàng triệu lượt người đến xem"
                  <a href="/Galaxy_cinema/">
                    <b>Galaxy cinema</b>
                  </a>
                  "còn hấp dẫn khán giả bởi không khí thân thiện cũng như chất lượng dịch vụ hàng đầu."
                </span>
              </span>
            </p>
            <p style="margin-top: 0; margin-right: 0; margin-bottom: 10px; margin-left: 0; text-align:justify;">
              <span style="font-family: Arial,Helvetica,sans-serif;">
                <span style="font-size: 14px;">
                  "Đến website"
                  <a href="/Galaxy_cinema/">
                    <i>galaxycine.vn</i>
                  </a>
                  "khách hàng sẽ dễ dàng tham khảo các"
                  <a href="/Galaxy_cinema/phim-dang-chieu">
                    <i>phim hay nhat</i>
                  </a>,
                  <a href="/Galaxy_cinema/phim-dang-chieu">
                    <i>phim moi nhat</i>
                  </a>
                  "đang chiếu hoặc sắp chiếu luôn được cập nhật thường xuyên."
                  <a href="/Galaxy_cinema/lich-chieu">
                    <i>Lich chieu</i>
                  </a>
                  "tại tất cả hệ thống"
                  <a href="/Galaxy_cinema/">
                    <i>rap chieu phim</i>
                  </a> "của"
                  <a href="/Galaxy_cinema/">
                    <b>Galaxy cinema</b>
                  </a>
                  "cũng được cập nhật đầy đủ hàng ngày hàng giờ trên trang chủ."
                </span>
              </span>
            </p>
            <p style="margin-top: 0; margin-right: 0; margin-bottom: 10px; margin-left: 0; text-align:justify;">
              <span style="font-family: Arial,Helvetica,sans-serif;">
                <span style="font-size: 14px;">
                  Từ vũ trụ điện ảnh Marvel, người hâm mộ sẽ có cuộc tái ngộ với Người Nhện qua Spider-Man: No Way Home hoặc Doctor Strange 2.
                  Ngoài ra 007: No Time To Die, Turning Red, Minions: The Rise Of Gru..., là những tác phẩm hứa hẹn sẽ gây bùng nổ phòng vé trong thời gian tới.
                </span>
              </span>
            </p>
            <p style="margin-top: 0; margin-right: 0; margin-bottom: 10px; margin-left: 0; text-align:justify;">
              <span style="font-family: Arial,Helvetica,sans-serif;">
                <span style="font-size: 14px;">
                  "Giờ đây đặt vé tại"
                  <a href="/Galaxy_cinema/">
                    <b>Galaxy cinema</b>
                  </a>
                  "càng thêm dễ dàng chỉ với vài thao tác vô cùng đơn giản. Để mua vé, hãy vào tab Mua vé. Quý khách có thể chọn Mua vé theo phim,
                  theo rạp, hoặc theo ngày. Sau đó, tiến hành mua vé theo các bước hướng dẫn. Chỉ trong vài phút, quý khách sẽ nhận được tin nhắn và email phản hồi"
                  <i>dat ve thanh cong</i> cua
                  <a href="/Galaxy_cinema/">
                    <b>Galaxy cinema</b>
                  </a>
                  "Quý khách có thể dùng tin nhắn lấy vé tại quầy vé của"
                  <a href="/Galaxy_cinema/">
                    <b>Galaxy cinema</b>
                  </a>
                  "hoặc quét mã QR để một bước vào rạp mà không cần tốn thêm bất kỳ công đoạn nào nữa."
                </span>
              </span>
            </p>
            <p style="margin-top: 0; margin-right: 0; margin-bottom: 10px; margin-left: 0; text-align:justify;">
              <span style="font-family: Arial,Helvetica,sans-serif;">
                <span style="font-size: 14px;">
                  "Nếu bạn đã chọn được"
                  <a href="/Galaxy_cinema/phim-dang-chieu">
                    <i>phim hay</i>
                  </a>
                  "để xem, hãy đặt vé cực nhanh bằng box"
                  <i>Mua ve nhanh</i> ngay tu
                  <a href="/Galaxy_cinema/">
                    <i>Trang Chu</i>
                  </a>
                  "Chỉ cần một phút, tin nhắn và email phản hồi của"
                  <a href="/Galaxy_cinema/lich-chieu">
                    <b>Galaxy Cinema</b>
                  </a>
                  "sẽ gửi ngay vào điện thoại và hộp mail của bạn."
                </span>
              </span>
            </p>
            <p style="margin-top: 0; margin-right: 0; margin-bottom: 10px; margin-left: 0; text-align:justify;">
              <span style="font-family: Arial,Helvetica,sans-serif;">
                <span style="font-size: 14px;">
                  "Nếu chưa quyết định sẽ xem
                  <i>phim mới </i> nào, hãy tham khảo các bộ
                  <a href="/Galaxy_cinema/phim-dang-chieu">
                    <i>phim hay</i>
                  </a>
                  trong mục
                  <a href="/Galaxy_cinema/phim-dang-chieu">
                    <i>Phim Đang Chiếu</i>
                  </a>
                  cũng như
                  <a href="/Galaxy_cinema/phim-dang-chieu">
                    <i>Phim Đang Chiếu</i>
                  </a> tại
                  <a href="/Galaxy_cinema/phim-dang-chieu">
                    <i>rạp chiếu phim</i>
                  </a> bằng cách vào mục
                  <a href="/Galaxy_cinema/binh-luan-phim">
                    <i>Bình Luận Phim</i>
                  </a> ở Góc Điện Ảnh để đọc
                  những bài bình luận chân thật nhất, tham khảo và cân nhắc. Sau đó, chỉ việc đặt vé bằng box Mua Vé Nhanh ngay
                  ở đầu trang để chọn được suất chiếu và chỗ ngồi vừa ý nhất."
                </span>
              </span>
            </p>
            <p style="margin-top: 0; margin-right: 0; margin-bottom: 10px; margin-left: 0; text-align:justify;">
              <span style="font-family: Arial,Helvetica,sans-serif;">
                <span style="font-size: 14px;">
                  <a href="/Galaxy_cinema">
                    <b>Galaxy Cinema</b>
                  </a>
                  luôn có những chương trình
                  <a href="/Galaxy_cinema/phim-dang-chieu">
                    <i> khuyến mãi, ưu đãi,</i>
                  </a> quà tặng vô cùng hấp dẫn như
                  <i>giảm giá vé,</i> tặng vé xem phim miễn phí, tặng Combo, tặng quà phim…
                  dành cho các khách hàng."
                </span>
              </span>
            </p>
            <p style="margin-top: 0; margin-right: 0; margin-bottom: 10px; margin-left: 0; text-align:justify;">
              <span style="font-family: Arial,Helvetica,sans-serif;">
                <span style="font-size: 14px;">
                  Trang web
                  <a href="/Galaxy_cinema">
                    <b>galaxycine.vn</b>
                  </a>
                  còn có mục <i>Góc Điện Ảnh</i> - nơi lưu trữ dữ liệu về phim, diễn viên và đạo diễn,
                  những bài viết chuyên sâu về điện ảnh, hỗ trợ người yêu phim dễ dàng hơn trong việc lựa chọn phim và
                  bổ sung thêm kiến thức về điện ảnh cho bản thân. Ngoài ra, vào mỗi tháng,
                  <a href="/Galaxy_cinema">
                    <b>galaxycine.vn </b>
                  </a>
                  cũng giới thiệu các
                  <a href="/Galaxy_cinema/phim-sap-chieu">
                    <i>phim sắp chiếu </i>
                  </a>
                  hot nhất trong mục
                  <a href="/Galaxy_cinema/phim-hay">
                    <i>Phim Hay Tháng</i>
                  </a>.
                </span>
              </span>
            </p>
            <p style="margin-top: 0; margin-right: 0; margin-bottom: 10px; margin-left: 0; text-align:justify;">
              <span style="font-family: Arial,Helvetica,sans-serif;">
                <span style="font-size: 14px;">
                  Hiện nay,
                  <a href="/Galaxy_cinema">
                    <b>galaxycine.vn</b>
                  </a>
                  đang ngày càng phát triển hơn nữa với các chương trình đặc sắc, các khuyến mãi hấp dẫn,
                  đem đến cho khán giả những bộ phim bom tấn của thế giới và Việt Nam nhanh chóng và sớm nhất.
                </span>
              </span>
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
</div>

<!-- end section comment blog -->
<!-- load footer -->
<?php $this->load->view('Footer'); ?>

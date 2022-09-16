<?php $this->load->view('Header'); ?>
 

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
                        <option value="<?php echo $Galaxy['movies'][$i]['movies_id']; ?>"><?php echo $Galaxy['movies'][$i]['names_EN']; ?></option>
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
       </div>
       <p>Select a new car from the list.</p>

<select id="mySelect" >
  <option value="Audi">Audi</option>
  <option value="BMW">BMW</option>
  <option value="Mercedes">Mercedes</option>
  <option value="Volvo">Volvo</option>
</select>

<p>When you select a new car, a function is triggered which outputs the value of the selected car.</p>

<p id="demo">123</p>

<script>

</script>

    
</body>
</html>
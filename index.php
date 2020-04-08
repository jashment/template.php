<?php $title= 'Cabot Cruises'; include '_header.php'; ?>
  <div class="bodyDiv">
    <main>
      <div class="myslider">
        <picture>
          <source srcset="sliders/slider01h.jpg" media="(min-width: 35rem)" />
          <img src="sliders/slider01s.png" alt="Cruise1" />
        </picture>

        <picture>
          <source srcset="sliders/slider02h.png" media="(min-width: 35rem)" />
          <img src="sliders/slider02s.png" alt="Cruise2" />
        </picture>

        <picture>
          <source srcset="sliders/slider03h.png" media="(min-width: 35rem)" />
          <img src="sliders/slider03s.png" alt="Cruise3" />
        </picture>

        <picture>
          <source srcset="sliders/slider04h.png" media="(min-width: 35rem)" />
          <img src="sliders/slider04s.png" alt="Cruise4" />
        </picture>
      </div>

      <div class="sec3 clearfix">
        <div class="row">
          <div class="column small-6 medium-4 large-3">
            <a href="#" class="imgSelect">
              <img src="sliders/slider01s.png" style="width: 100%;" alt="slider1" />
              <div class="translucentOver"></div>
              <div class="blogHead">Blog Post #1</div>

              <div class="blogFoot">
                May 1, 2018
              </div>
            </a>
          </div>
          <!-- end column-->

          <div class="column small-6 medium-4 large-3">
            <a href="#" class="imgSelect">
              <img src="sliders/slider02s.png" style="width: 100%;" alt="slider2" />
              <div class="translucentOver"></div>
              <div class="blogHead">Blog Post #2</div>

              <div class="blogFoot">
                May 1, 2018
              </div>
            </a>
          </div>
          <!-- end column-->

          <div class="column small-6 medium-4 large-3">
            <a href="#" class="imgSelect">
              <img src="sliders/slider03s.png" style="width: 100%;" alt="slider3" />
              <div class="translucentOver"></div>
              <div class="blogHead">Blog Post #3</div>

              <div class="blogFoot">
                May 1, 2018
              </div>
            </a>
          </div>
          <!-- end column-->

          <div class="column small-6 medium-4 large-3">
            <a href="#" class="imgSelect">
              <img src="sliders/slider04s.png" style="width: 100%;" alt="slider4" />
              <div class="translucentOver"></div>
              <div class="blogHead">Blog Post #4</div>

              <div class="blogFoot">
                May 1, 2018
              </div>
            </a>
          </div>
          <!-- end column-->
        </div>
        <!-- end row-->
      </div>
    </main>
  </div>

  <?php include '_footer.php'; ?>
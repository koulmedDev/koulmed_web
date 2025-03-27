<section id="blogs" class="blogs">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Nos blogs récents</h2>
      <p>Restez informé des dernières innovations et tendances dans le domaine médical.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper init-swiper" data-speed="600" data-delay="5000" data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 1,
                "spaceBetween": 40
              },
              "1200": {
                "slidesPerView": 3,
                "spaceBetween": 20
              }
            }
          }
        </script>
        <div class="swiper-wrapper">
          @forelse ($blogs as $blog)
            <div class="swiper-slide">
              <div class="blog-item">
                <img src="{{ asset('storage/blogs/' . $blog->image) }}" class="blog-img" alt="{{ $blog->titre }}">
                <div class="blog-content">
                  <h3>{{ $blog->titre }}</h3>
                  <p class="text-muted"><i class="far fa-calendar-alt"></i> {{ $blog->created_at->format('d/m/Y H:i') }}</p>
                  <p>{{ \Illuminate\Support\Str::limit(strip_tags($blog->contenu), 100) }}</p>
                  <a href="{{ route('blog.detail', $blog->id) }}" class="btn btn-primary">Lire plus</a>
                </div>
              </div>
            </div><!-- End blog item -->
          @empty
            <div class="swiper-slide">
              <div class="blog-item">
                <div class="blog-content text-center">
                  <h3>Aucun blog disponible pour le moment</h3>
                  <p>Revenez bientôt pour découvrir nos articles</p>
                </div>
              </div>
            </div>
          @endforelse
        </div><br><br>
        <div class="swiper-pagination"></div>
      </div>
    </div>
</section>

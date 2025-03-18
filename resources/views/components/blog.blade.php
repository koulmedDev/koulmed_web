<section id="blog">
    <div class="blog-container">
      <!-- Titre et description -->
      <div class="blog-header">
        <h2 class="blog-title">Nos blogs récents</h2>
        <p class="blog-description">
          Restez informé des dernières innovations<br>
          et tendances dans le domaine médical.
        </p>

        <!-- Boutons de navigation -->
        <div class="blog-navigation">
          <button class="nav-button prev-button">
            <i class="fas fa-angle-left"></i>
          </button>
          <button class="nav-button next-button">
            <i class="fas fa-angle-right"></i>
          </button>
        </div>
      </div>

      <!-- Les cartes de blog -->
      <div class="blog-cards">
        @forelse ($blogs as $blog)
          <div class="blog-card">
            <img src="{{ asset('storage/blogs/' . $blog->image) }}" alt="{{ $blog->titre }}" class="blog-image">
            <div class="blog-content">
              <h3 class="blog-card-title">{{ $blog->titre }}</h3>
              <p class="blog-card-description">{{ Str::limit(strip_tags($blog->contenu), 100) }}</p>
              <a href="{{ route('blog.detail', $blog->id) }}" class="blog-read-more">Lire plus</a>
            </div>
          </div>
        @empty
          <div class="no-blogs">
            <p>Aucun blog disponible pour le moment.</p>
          </div>
        @endforelse
      </div>

      <!-- Lien vers tous les blogs -->
      <div class="text-center mt-4">
        <a href="{{ route('blogs') }}" class="btn btn-primary">Voir tous les blogs</a>
      </div>
    </div>
  </section>

<div class="row mb-4 d-flex justify-content-center" id="cyber-news">
    <div class="col-12 col-md-10">

        <div class="text-center mb-4">
            <h3>Cybersecurity in the News</h3>
            <p class="text-muted">
                Recent cybersecurity news, alerts, vulnerabilities, and industry developments.
            </p>
        </div>

        <div class="row g-3">

            @forelse($news as $article)

                <div class="col-12 col-md-6">
                    <article class="cyber-news-card h-100">

                        <small class="news-source">
                            {{ $article['source'] }}
                        </small>

                        <h5>{{ $article['title'] }}</h5>

                        <p>
                            {{ \Illuminate\Support\Str::limit($article['description'], 180) }}
                        </p>

                        <a href="{{ $article['link'] }}"
                           target="_blank"
                           rel="noopener"
                           class="degree-link">
                            Read Article →
                        </a>

                    </article>
                </div>

            @empty

                <p class="text-center text-muted">
                    Cybersecurity news is temporarily unavailable.
                </p>

            @endforelse

        </div>

        <div class="text-end mt-4">
            <a href="#top" class="back-to-top-link">
                Back to top ↑
            </a>
        </div>

    </div>

</div>
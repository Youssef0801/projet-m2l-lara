@include('partial.head')

{{-- head --}}
    <body>
    
        <header>
        <h1><span class="align-v" aria-hidden="true">📂</span>{{ $title }}</h1>
    </header>
    <main>
   

        @if(session('success'))
            <p class="success">
              {{ session('success') }}
          </p>
        @endif


      <section>
        <h2>{{ $titre }}</h2>
        
        <form action="{{ route('contact.store') }}" method="POST">@csrf
   

        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" required>
        <label for="subject">Sujet:</label>
        <input type="text" id="subject" name="subject" required>
        <label for="phone">Téléphone:</label>
        <input type="tel" id="phone" name="phone" required>
        <label for="attachment">Pièce jointe:</label>
        <input type="file" id="attachment" name="attachment" accept=".jpg,.jpeg,.png,.pdf" required>
        <p>Nous vous remercions de votre confiance et restons à votre disposition pour toute question ou information complémentaire.</p>
            </p>
 
    <button type="submit"  class="btn-default btn-success">Enregistrer</button>
</form>
      </section>
    </main>
    @include('partial.footer')
        <script type="module" src="{{ Vite::asset('resources/js/app.js') }}"></script>
  
    </body>
</html>

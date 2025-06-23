@include('partial.head')

{{-- head --}}
    <body>
    
        <header>
        <h1><span class="align-v" aria-hidden="true">📂</span>{{ $title }}</h1>
    </header>
    <main>
    
      <section>
        <h2>{{ $title}}</h2>
        <p>
            Voici nos membres inscrits dans la base de données.
        </p>
 

        <table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Pays</th>
            <th>Date d'inscription</th>
        </tr>
    </thead>
    <tbody>
        @foreach($membres as $membre)
        <tr>
            <td>{{ $membre->nom }}</td>
            <td>{{ $membre->prenom }}</td>
            <td>{{ $membre->email }}</td>
            <td>{{ $membre->pays }}</td>
            <td>{{ \Carbon\Carbon::parse($membre->created_at)->translatedFormat('d m Y') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="/" class="btn-default btn-secondary">Home</a>


        
      </section>
    </main>
    @include('partial.footer')
        <script type="module" src="{{ Vite::asset('resources/js/app.js') }}"></script>
    </body>
</html>
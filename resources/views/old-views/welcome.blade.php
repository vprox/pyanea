@extends('layout');
@section('content')
            <div class="content">
              <!--   <div class="title ">
                    Υποψήφιοι Αναπληρωτές Ειδικής Αγωγής ΠΔΕ Αττικής
                </div> -->
                <div class="jumbotron">
                <h2>Υποψήφιοι Αναπληρωτές Ειδικής Αγωγής ΠΔΕ Αττικής</h2>      
                <p>Απο το site αυτό μπορείτε να πληροφορηθείτε για τις προτιμήσεις σας ως υποψήφιοι Αναπληρωτές ΕΑ ΠΔΕ Αττικής</p>
                <p>Αναζητήστε τις προτιμήσεις σας χρησιμοποιώντας τον ΑΦΜ σας και τον ΑΣΤ (ή Αριθμό Διαβατηρίου) που είχατε δηλώσει στην αίτηση σας. </p>
              </div>
                <div class="links">
                    <a href='{{ route('Applicants') }}'>Υποψήφιοι Αναπληρωτές</a>
                    <a href='{{ route('Searchform') }}'>Φόρμα Αναζήτησης</a>
                    <a href='#'>Έντυπο Δήλωσης Πρτιμήσεων</a> 
                    <a href="mailto:pliroforikipde@gmail.com">Επικοινωνία</a>
                    <a href='#'>Περί</a>
                   <!--  <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> -->
                </div>
            </div>

@endsection
@extends('layout')
@section('content')
    <div class='content'>
        <div class='alert alert-warning'>      
            <p>{{session('thereisproblem')}}</p>
            <p> Έχετε βάλει την επιλογή <b>{{session('problematic')}} </b> περισσότερες απο <b>1</b> φορά.</p>
            <p>Γυρίστε πίσω και Επιλέξτε έτσι ώστε η κάθε επιλογή σας να εμφανίζεται ΜΟΝΟ ΜΙΑ ΦΟΡΑ</p>
            <p>Μόνο το <b>0</b> μπορεί να επιλεγεί πολλές φορές. Επιλέγοντας 0 το συστημα θεωρεί οτι δεν θέλετε να επιλέξετε την Διεύθυνση/ΚΕΔΔΥ</p>
            <p><a href='' onclick='history.go(-1);' align='center'> Επιστροφή </a></p> 
            <p> Διαφορετικά επιλέξτε το κουμπί ΠΙΣΩ του φυλλομετρητή σας</p>               
        </div>
    </div>
@endsection

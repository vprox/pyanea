@extends('layout')
@section('content')

                <div style='text-align:center'>
                    <a href='{{ url('/')}}'> <i class="w3-xxlarge w3-spin fa fa-home"></i>
                        
                    </a>
                </div>
                <h2>Φόρμα Αναζήτησης Υποψήφιων Αναπληρωτών ΠΔΕ Αττικής</h2>      
                <div class='alert alert-info'>
                    <i class="w3-xlarge w3-text-orange fa fa-info"> </i>
                      Αναζητήστε τις προτιμήσεις σας χρησιμοποιώντας
                    <ol>
                        <li>τον ΑΦΜ σας (<b>9</b> αριθμοί )</li>
                        <li>και τoν ΑΤ (ή Αριθμό Διαβατηρίου) <b>χωρίς κενά</b> και <b>ΕΛΛΗΝΙΚΑ (αν πρόκειται για ΑΤ)</b>, <b>ΛΑΤΙΝΙΚΑ (αν πρόκειται για Διαβατήριο)</b></li>
                    </ol>
                        που είχατε δηλώσει στην αίτηση σας.
                </div>
                
              
                
                <div class='w3-panel w3-orange' style='margin:auto; height:auto; width:70%; text-align:center' >
                    <form method='post' action='{{ route('Search') }}' style='margin:auto; padding:10px'>
                    {{ csrf_field() }}
                        
                            <div class='form-group row'> 
                                <div class='col-lg-6'style='margin-left:25%;  margin-top:5px;  font-family: "Comic Sans MS", cursive, sans-serif;'> 
                                     <select class="w3-select" style='width:50%; color:red' name="klados">
                                          <option value="" >Επιλέξτε κλάδο</option>
                                          <option value="ΠΕ21-26">ΠΕ21-26</option>
                                          <option value="ΠΕ22">ΠΕ22</option>
                                          <option value="ΠΕ23">ΠΕ23</option>
                                          <option value="ΠΕ24">ΠΕ24</option>
                                          <option value="ΠΕ25">ΠΕ25</option>
                                          <option value="ΠΕ28">ΠΕ28</option>
                                          <option value="ΠΕ29">ΠΕ29</option>
                                          <option value="ΠΕ30">ΠΕ30</option>
                                          <option value="ΕΒΠ">ΕΒΠ</option>
                                    </select> 
                                </div>
                            </div>   
                            <div class='form-group row'>
                                 <div class='col-lg-6'style='margin-left:25%; '>
                                    <div class="input-group" data-toggle="tooltip" title="Εισάγετε το ΑΦΜ σας. 9 αριθμοί">    
                                         <span class='input-group-addon' for="afm">ΑΦΜ</span>
                                         <input type="text" class="form-control" name="afm" style='color:blue; text-align:center; font-family: "Comic Sans MS", cursive, sans-serif; '>
                                    </div>
                                </div> 
                            </div>    
                            <div class='form-group row'>
                                <div class='col-lg-6' style='margin-left:25%'>
                                    <div class="input-group" data-toggle="tooltip" title="Βάλτε τους χαρακτήρες ΧΩΡΙΣ ΚΕΝΑ " >
                                        <span class='input-group-addon' for="at">ΑΤ &nbsp; &nbsp;</span>
                                        <input type="text" class="form-control" name="at" style='text-transform: uppercase;color:blue; text-align:center; font-family: "Comic Sans MS", cursive, sans-serif;'>
                                    </div>
                                </div>
                              
                                       
                                
                            </div>
                            <div class='form-group row'>
                                <div class='col-lg-12'>
                                    <div class="input-group" style='margin-left:25%'>
                                        <div>
                                            <button type="submit" class="btn btn-success"><i class='w3-large w3-text-yellow fa fa-search'> Αναζήτηση</i></button>
                                            <a href='{{ route('Searchform') }}'><button type="button" class="btn btn-primary" >Καθαρισμός</button></a>
                                        </div>
                                    </div> 
                                </div>
                            </div> 

                    </form>
                    

                </div>

                
                <div class='w3-panel w3-red' hidden> Αν η αναζήτηση σας δεν είναι επιτυχής
                        <ul>
                            <li>Δοκιμάστε να βάλετε το ΑΦΜ σας χωρίς το <b>0</b> (μηδέν) αν αρχίζει από <b>0</b> (μηδέν)</li>
                            <li>Δοκιμάστε να προσθέσετε πίσω απο το ΑΦΜ σας τον <b>* </b>(αστερίσκο). Παρόμοια κάντε και στον ΑΤ. </li>
                        </ul>
                </div>

@endsection

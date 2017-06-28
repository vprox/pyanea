<?php $message='δεν έχει επιλεχθεί' ?>
                <div style='text-align:center'>
                    <a href='{{ url('/')}}'> <i class="w3-xxlarge w3-spin fa fa-home"></i>
                        
                    </a>
                </div>
                <div class="container">              
                            <h3>Δηλωθείσες Προτιμήσεις Υποψήφιου Αναπληρωτή {{$Applicant->klados}}</h3>
                            <h1>{{$Applicant->surname}} &nbsp; {{$Applicant->name}}  </h1>
                            
                            <h3>Όνομα Πατρός: {{$Applicant->fathername}}  </h3>
                            
                            <h3>ΑΦΜ: {{$Applicant->afm}} &nbsp; ΑΔΤ|ΑΔ: <span>{{$Applicant->at}}</span></h3>
                    
                            <div> 
                            @if($Applicant->klados <>'ΕΒΠ')

                            κατηγορία πίνακα: {{$Applicant->katigoria_pinaka}}
                            @endif
                            
                            </div>

<form method='post' action='{{ route('Updatechoices') }}'>
                    {{ csrf_field()}}
                    <div class='form-group form-group-sm '>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Διευθύνσεις</th>
                                <th><b>Σειρά προτίμησης</b></th>      
                            </tr>
                        </thead>
                        
                        <tbody>

                            <tr class='info'>
                                <td>Α' Αθήνας</td>
                                <td align='center'><b>
                                    <select class='form-control' value="{{ old('aathinas')}}" name='aathinas'>
                                        <option>{{$Applicant->aathinas}}</option>
                                        <option disabled>---------</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select></b>
                                </td>
                            </tr> 
                            <tr class='warning'>
                                <td>Β' Αθήνας</td>
                                <td align='center'><b>
                                    <select class='form-control'  value="{{ old('bathinas') }}" name='bathinas'>
                                        <option>{{$Applicant->bathinas}}</option>
                                        <option disabled>---------</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select></b>
                                </td>
                            </tr>       
                            <tr class="success">
                                <td>Γ' Αθήνας</td>
                                <td align='center'><b>
                                    <select class='form-control'  value="{{ old('cathinas') }}" name='cathinas'>
                                        <option>{{$Applicant->cathinas}}</option>
                                        <option disabled>---------</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select></b>
                                </td>
                            </tr>
                            <tr class='info'>
                                <td>Δ' Αθήνας</td>
                                 <td align='center'><b>
                                    <select class='form-control'  value="{{ old('dathinas')}}" name='dathinas'>
                                        <option>{{$Applicant->dathinas}}</option>
                                        <option disabled>---------</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select></b>
                                </td>
                            </tr> 
                            <tr class='warning'>
                                <td>Ανατολικής Αττικής</td>
                                <td align='center'><b>
                                    <select class='form-control'  value="{{ old('anatolikiattiki')}}" name='anatolikiattiki'>
                                        <option>{{$Applicant->anatolikiattiki}}</option>
                                        <option disabled>---------</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select></b>
                                </td>
                            </tr>       
                            <tr class="success">
                                <td>Δυτικής Αττικής</td>
                                <td align='center'><b>
                                    <select class='form-control'  value="{{ old('ditikiattiki')}}" name='ditikiattiki'>
                                        <option>{{$Applicant->ditikiattiki}}</option>
                                        <option disabled>---------</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select></b>
                                </td>   
                            </tr>
                            <tr class='info'>
                                <td>Πειραιάς</td>
                                <td align='center'><b>
                                    <select class='form-control'  value="{{old('peiraias')}}" name='peiraias'>
                                        <option>{{$Applicant->peiraias}}</option>
                                        <option disabled>---------</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select></b>
                                </td>    
                            </tr> 
                        </tbody>
                            
                     </table>
                     </div>
                     <span>
                     <button type='submit' class='btn btn-default'> 
                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"> Αποθήκευση</span>
                     </button>
                     </span>
                    <input type='hidden' value='{{$Applicant->id}}' name='Applicant_id'>
                    <input type='hidden' value='0' name='keddyaathinas'>
                    <input type='hidden' value='0' name='keddybathinas'>
                    <input type='hidden' value='0' name='keddycathinas'>
                    <input type='hidden' value='0' name='keddydathinas'>
                    <input type='hidden' value='0' name='keddyanatolikiattiki'>
                    <input type='hidden' value='0' name='keddyditikiattiki'>
                    <input type='hidden' value='0' name='keddypeiraias'>
                    
</form>
           
                </div>
        

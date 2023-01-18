<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <!-- Title -->
      <title>Project</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Meta description -->
     
      <!-- CSS -->
      <link href="{{ URL::asset('dist/css/main.css') }}" rel="stylesheet" type="text/css">
      <!-- Favicon -->
      <link rel="icon" type="image/png" href="dist/img/favicon.ico">
   </head>
    
    <!-- body start -->
   <body>
      <header>
         <div class="container"> 
            <div class="row">
               <div class="col-lg-12 col-12 text-center">
                  <img src="dist/img/logo.png" alt="">
               </div>
            </div>
         </div>
      </header>

      <section class="bnrsection">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 p-0">
                  <img src="dist/img/bnr.jpg" alt="">
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="offset-lg-1 col-lg-10 col-md-12 col-12 text-center">
                  <h1>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
                  <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
               </div>
               <div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10 col-12 text-center">
                  <div class="formpart">
                     <!-- <form action="test"> -->
                     @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                     @endforeach

                     @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                     @endif
                     {{ Form::open(array('url' => 'personal')) }}
                        <div id="slide01">
                           <h3>Enter Your Personal Details</h3>
                           <div class="mb-3 text-start">
                              <label for="FormControlInput1" class="form-label">First Name</label>
                              <input type="text" class="form-control" value="{{old('fname')}}" name="fname" id="FormControlInput1" placeholder="First Name">
                           </div>
                           <div class="mb-3 text-start">
                              <label for="FormControlInput2" class="form-label">Last Name</label>
                              <input type="text" class="form-control" value="{{old('lname')}}" name="lname" id="FormControlInput2" placeholder="Last Name">
                           </div>
                           <div class="mb-3 text-start">
                              <label for="FormControlInput3" class="form-label">Enter Your Date of Birth</label>
                              <fieldset>
                                 <legend> Date Of Birth</legend>
                                 <div class="row">
                                    <div class="form-group col-lg-4 col-md-4 col-sm-4 col-12 ">
                                       <select name="lstDobDay" id="lstDobDay" class="form-control watermark">
                                             <option value="">Day </option>
                                             @for ($i = 1; $i <= 31; $i++)
                                                <option {{ old('lstDobDay') == $i ? "selected" : "" }} value="{{$i}}">{{$i}}</option>
                                             @endfor
                                          </select>
                                       <i class="validate " aria-hidden="true" style="display:none;"></i>
                                       <span id="dobDay_err" class="error_msg error"></span>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4 col-sm-4 col-12 ">
                                       <select name="lstDobMonth" id="lstDobMonth" class="form-control watermark">
                                          <option value="">Month </option>
                                          <option {{ old('lstDobMonth') == '1' ? "selected" : "" }} value="1">January</option>
                                          <option {{ old('lstDobMonth') == '2' ? "selected" : "" }} value="2">February</option>
                                          <option {{ old('lstDobMonth') == '3' ? "selected" : "" }} value="3">March</option>
                                          <option {{ old('lstDobMonth') == '4' ? "selected" : "" }} value="4">April</option>
                                          <option {{ old('lstDobMonth') == '5' ? "selected" : "" }} value="5">May</option>
                                          <option {{ old('lstDobMonth') == '6' ? "selected" : "" }} value="6">June</option>
                                          <option {{ old('lstDobMonth') == '7' ? "selected" : "" }} value="7">July</option>
                                          <option {{ old('lstDobMonth') == '8' ? "selected" : "" }} value="8">August</option>
                                          <option {{ old('lstDobMonth') == '9' ? "selected" : "" }} value="9">September</option>
                                          <option {{ old('lstDobMonth') == '10' ? "selected" : "" }} value="10">October</option>
                                          <option {{ old('lstDobMonth') == '11' ? "selected" : "" }} value="11">November</option>
                                          <option {{ old('lstDobMonth') == '12' ? "selected" : "" }} value="12">December</option>
                                       </select>
                                       <i class="validate " aria-hidden="true" style="display:none;"></i>
                                       <span id="dobMonth_err" class="error_msg"></span>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4 col-sm-4 col-12">
                                       <select name="lstDobYear" id="lstDobYear" class="form-control">
                                             <option value="">Year</option>
                                             @for ($i = 2002; $i >= 1919; $i--)
                                                <option {{ old('lstDobYear') == $i ? "selected" : "" }} value="{{$i}}">{{$i}}</option>
                                             @endfor
                                       </select>
                                       <i class="validate " aria-hidden="true" style="display:none;"></i>
                                       <span id="dobYear_err" class="error_msg"></span>
                                    </div>
                                    <span id="dob_final_err" class="error_msg"></span>
                                 </div>
                              </fieldset>
                           </div>
                           <div class="mb-3 text-center">
                              <button type="button" class="btn btn-warning next01">Next</button>
                           </div>
                        </div>
                        <div id="slide02" style="display:none;">
                           <h3>Enter Your Contact Details</h3>
                           <div class="mb-3 text-start">
                              <label for="FormControlInput4" class="form-label">Email Address</label>
                              <input type="email" class="form-control" value="{{old('email')}}" name="email" id="FormControlInput4" placeholder="Email Address">
                           </div>
                           <div class="mb-3 text-start">
                              <label for="FormControlInput5" class="form-label">Phone Number</label>
                              <input type="text" class="form-control" value="{{old('phone')}}" name="phone" id="FormControlInput5" placeholder="Phone Number">
                           </div>
                           <div class="mb-3 text-center">
                              <!-- <button type="button" class="btn btn-success" id="submit_claim">Submit</button> -->
                              <button type="submit" class="btn btn-success">Submit</button>
                           </div>
                        </div>
                     <!-- </form> -->
                     {{ Form::close() }}
                  </div>
               </div>
            </div>
         </div>
      </section>


      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-12"> 
                  <h5>Lorem Ipsum is simply dummy text</h5>
                  <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                  <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                  <p>Copyright@2022</p>
               </div>
            </div>
         </div>
      </footer>



      <script src="dist/js/app.js"></script>
   </body>
    <!--body end -->
    
</html>
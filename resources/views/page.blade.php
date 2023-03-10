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
      <!-- <link rel="icon" type="image/png" href="dist/img/favicon.ico"> -->
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
         <!-- <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 p-0">
                  <img src="dist/img/bnr.jpg" alt="">
               </div>
            </div>
         </div> -->
         <div class="container">
            <div class="row">
               <div class="offset-lg-1 col-lg-10 col-md-12 col-12 text-center">
                  <h1>Hi <span>{{ $personal->fname }}</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
                  <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
               </div>
               <div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10 col-12 text-center">
                  <div class="formpart">
                     <!-- <form action=""> -->
                     
                        <div id="slide03" style="display: block;">
                           <h3>Do you have a Previous Address?</h3>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label next02" for="flexRadioDefault1">
                              Yes
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" onclick="location.href = '{{ url('thanks/' . $personal->id) }}';" for="flexRadioDefault2">
                              No
                            </label>
                          </div>
                        </div>
                        
                        
                        
                        {{ Form::open(array('url' => array('address', $personal->id))) }}
                        <div id="slide04" style="display:none;">
                           <h3>Enter your Previous Address</h3>
                            <div class="mb-3 text-start">
                                <label class="form-label">Previous Address 1</label>
                                <input type="text" class="form-control mb-3" name="address1[]" id="" placeholder="Address line 1">
                                <input type="text" class="form-control mb-3" name="address2[]" id="" placeholder="Address line 2">
                                <input type="text" class="form-control mb-3" name="address3[]" id="" placeholder="Address line 3">
                            </div>
                           
                            <div class="mb-3 text-center" id="submitoradd01">
                                <!-- <button type="button" class="btn btn-success tothank">Submit</button> -->
                                <button type="submit" class="btn btn-success">Submit</button>
                                <p><a href="#postaddrs2" id="showadrs2">Add Another Address</a></p>
                                <p><a href="#postaddrs2" id="back02"><< Back</a></p>
                            </div> 


                            <div id="postaddrs2" style="display:none">
                                <div class="mb-3 text-start">
                                    <label for="" class="form-label">Previous Address 2</label>
                                    <input type="text" class="form-control mb-3" name="address1[]" id="" placeholder="Address line 1">
                                    <input type="text" class="form-control mb-3" name="address2[]" id="" placeholder="Address line 2">
                                    <input type="text" class="form-control mb-3" name="address3[]" id="" placeholder="Address line 3">
                                </div>
                            
                                <div class="mb-3 text-center" id="submitoradd02">
                                    <!-- <button type="button" class="btn btn-success tothank">Submit</button> -->
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <p><a href="#postaddrs3" id="showadrs3">Add Another Address</a></p>
                                    <p><a href="#slide04" id="remove3">Remove Address</a></p>
                                </div> 
                            </div>


                            <div id="postaddrs3" style="display:none">
                                <div class="mb-3 text-start">
                                    <label for="" class="form-label">Previous Address 3</label>
                                    <input type="text" class="form-control mb-3" name="address1[]" id="" placeholder="Address line 1">
                                    <input type="text" class="form-control mb-3" name="address2[]" id="" placeholder="Address line 2">
                                    <input type="text" class="form-control mb-3" name="address3[]" id="" placeholder="Address line 3">
                                </div>
    
                                <div class="mb-3 text-center">
                                    <!-- <button type="button" class="btn btn-success tothank">Submit</button> -->
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <p><a href="#slide04" id="remove4">Remove Address</a></p>
                                </div> 
                            </div>
                            

                        </div>
                        {{ Form::close() }}
                     <!-- </form> -->
                     
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



      <script src="{{ URL::asset('dist/js/app.js') }}"></script>
   </body>
    <!--body end -->
    
</html>
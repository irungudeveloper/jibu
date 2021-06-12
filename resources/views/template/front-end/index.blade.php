@extends('template.front-end.master')
@section('content')

@include('template.front-end.navbar')

  
     <div class="container-fluid m-0 p-0">
      <div class="row m-0 p-0">
        <div class="col-md-12 col-lg-12 col-sm-12 col-12 pt-3 pb-3">
          <div class="row">
            <div class="col-sm-12 col-12 col-lg-6 col-md-6">
              <h4 class="text-center">Writing Services</h4>
              <p class="text-center">Do you have a research paper, essay, school project or an assigment that needs to be done in limited time? Worry no more, you know why, cause we got you. Here at JIBU, we have qualified writers and researchers who are available to do the work for you. Just specify the deadline, the minimum pages required and the type of assignment you want done. </p>
            </div>

            <div class="col-sm-12 col-12 col-lg-6 col-md-6">
                <div class="card border-1 p-3">
          <form onsubmit = "event.preventDefault(); quotation();">
          @csrf
          <div class="form-group row justify-content-center">
            <div class="col-sm-12 col-md-2 col-lg-2">
              <label>Select Currency :</label>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
              <select class="form-control" id="currency">
                <option>SELECT CURRENCY</option>
                <option value="ksh">KSH</option>
                <option value="$">USD</option>
                <option value="£">EUR</option>
              </select>
            </div>
          </div>  
          <div class="form-group row justify-content-center">
            <div class="col-sm-12 col-md-2 col-lg-2">
              <label>Select Paper :</label>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
              <select class="form-control" id="paper">
                <option>SELECT PAPER</option>
                <option value="proposal" >Project Proposal</option>
                <option value="term" >Term Paper</option>
                <option value="resume">Resume</option>
              </select>
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-12 col-md-2 col-lg-2">
              <label>Select Number Of Pages :</label>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
              <input type="number" name="" class="form-control" id="pages">
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-12 col-md-2 col-lg-2">
              <label>Select Hours Till Deadline :</label>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
              <input type="number" name="" class="form-control" id="hours">
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-12 text-center">
                <button type="submit" id="submit" class="text-white button button-sm radius-10-0">Get Quotation</button>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-12 text-center" id="addquote">
                
            </div>
          </div>

        </form>
        </div>
            </div>

          </div>

        </div>
      </div>
    </div>

    
    <script type="text/javascript">
      
       function quotation()
        {
            document.getElementById("addquote").innerHTML = '';

            var price_page = 20;
            var hour_price = 20000;
            var paper_rate;

            var paper = $('#paper').val();
            var hours = $('#hours').val();
            var pages = $('#pages').val();
            var currency = $('#currency').val();

            if (paper == "proposal") 
            {
              paper_rate = 100;
            }

             if (paper == "term") 
            {
              paper_rate = 200;
            }

             if (paper == "resume") 
            {
              paper_rate = 50;
            }


            var total_price = Math.floor((price_page*pages)+(hour_price/hours)+paper_rate);

            console.log(total_price);

            sessionStorage.setItem("price", total_price);
            sessionStorage.setItem("paper", paper);
            sessionStorage.setItem("pages", pages);
            sessionStorage.setItem("hours", hours);

             document.getElementById("addquote").innerHTML += 
              "<p class='mt-3' >The price is: "+ currency+ total_price +" <span><a href='{{route('essay')}}' class='text-white button btn-success button-sm radius-10-0'>Proceed</a> </span></p>";

        }
      
    </script>
    

@include('template.front-end.footer')

@endsection
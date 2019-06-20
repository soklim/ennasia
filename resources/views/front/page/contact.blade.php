@extends('front.fragement.layout')

@section('content1')
    <div class="container-fluid">
        <div class="container-fluid" id="main-contact">
            <h1 id="contact-us">CONTACT US</h1>

        </div>

        <div class="container" style="margin-top: 50px;margin-bottom: 50px">
            <div class="row">
                <div class="col-md-6">
                    <h3>More Info</h3>
                    <p><b>Address:</b> #74, Street 93, Sangkat Tonle Bassac, Khan Chamkar morn
                        Phnom Penh, Cambodia.</p>
                    <p><b>Phone:</b> 010 254 294</p>
                    <p><b>Email:</b> support@anachaktechno.com</p>
                </div>
                <div class="col-md-6">
                    <h3>Get In Touch</h3>
                    <form>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" maxlength="10" type="text" placeholder="Your Phone" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Your Message"></textarea>
                        </div>
                        <div class="form-group">
                           <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
    <div class="container">

    </div>



@stop

<!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
@include('includes.messages')
<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
        <div class="row d-flex align-items-stretch no-gutters">
            <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                <form autocomplete="off" action="{{route('drcare-messages-store')}}" method="POST" >
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="message" cols="30" rows="7" class="form-control"
                                  placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">

                <iframe id="map"
                        frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBF_j7pM_oKMYs0k4iD-m_YVCJ9PsnhUcI
    &q=91+Vassall+Street,+Quincy,+MA+02170" allowfullscreen>
                </iframe>

            </div>
        </div>
    </div>
</section>

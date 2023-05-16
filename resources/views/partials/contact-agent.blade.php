  <div class="col-md-12">
     <div class="row section-t3">
        <div class="col-sm-12">
           <div class="title-box-d">
              <h3 class="title-d">Contact Agent</h3>
           </div>
        </div>
     </div>
     <div class="row">
        <div class="col-md-6 col-lg-4">
           <img src="assets/img/agent-4.jpg"
              alt=""
              class="img-fluid">
        </div>
        <div class="col-md-6 col-lg-4">
           <div class="property-agent">
              <h4 class="title-agent">{{ $property->user->name }}</h4>
              <p class="color-text-a">
                 Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam
                 vehicula elementum sed sit amet
                 dui. Quisque velit nisi,
                 pretium ut lacinia in, elementum id enim.
              </p>
              <ul class="list-unstyled">
                 <li class="d-flex justify-content-between">
                    <strong>Phone:</strong>
                    <span class="color-text-a">{{ $property->user->phone }}</span>
                 </li>
                 <li class="d-flex justify-content-between">
                    <strong>Mobile:</strong>
                    <span class="color-text-a">777 287 378 737</span>
                 </li>
                 <li class="d-flex justify-content-between">
                    <strong>Email:</strong>
                    <span class="color-text-a">{{ $property->user->email }}</span>
                 </li>
                 <li class="d-flex justify-content-between">
                    <strong>Skype:</strong>
                    <span class="color-text-a">Annabela.ge</span>
                 </li>
              </ul>
              <div class="socials-a">
                 <ul class="list-inline">
                    <li class="list-inline-item">
                       <a href="#">
                          <i class="bi bi-facebook"
                             aria-hidden="true"></i>
                       </a>
                    </li>
                    <li class="list-inline-item">
                       <a href="#">
                          <i class="bi bi-twitter"
                             aria-hidden="true"></i>
                       </a>
                    </li>
                    <li class="list-inline-item">
                       <a href="#">
                          <i class="bi bi-instagram"
                             aria-hidden="true"></i>
                       </a>
                    </li>
                    <li class="list-inline-item">
                       <a href="#">
                          <i class="bi bi-linkedin"
                             aria-hidden="true"></i>
                       </a>
                    </li>
                 </ul>
              </div>
           </div>
        </div>
        <div class="col-md-12 col-lg-4">
           <div class="property-contact">
              <form class="form-a">
                 <div class="row">
                    <div class="col-md-12 mb-1">
                       <div class="form-group">
                          <input type="text"
                             class="form-control form-control-lg form-control-a"
                             id="inputName"
                             placeholder="Name *"
                             required>
                       </div>
                    </div>
                    <div class="col-md-12 mb-1">
                       <div class="form-group">
                          <input type="email"
                             class="form-control form-control-lg form-control-a"
                             id="inputEmail1"
                             placeholder="Email *"
                             required>
                       </div>
                    </div>
                    <div class="col-md-12 mb-1">
                       <div class="form-group">
                          <textarea id="textMessage"
                             class="form-control"
                             placeholder="Comment *"
                             name="message"
                             cols="45"
                             rows="8"
                             required></textarea>
                       </div>
                    </div>
                    <div class="col-md-12 mt-3">
                       <button type="submit"
                          class="btn btn-a">Send Message</button>
                    </div>
                 </div>
              </form>
           </div>
        </div>
     </div>
  </div>

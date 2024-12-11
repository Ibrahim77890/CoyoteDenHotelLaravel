@extends('layouts.app')

@section('content')
    <section class="contact">
    <div class="c_main_div">
    <div class="c_main_first_half">
      <h2 class="c_p_head">Get in Touch</h2>
      <div>
        <p class="c_p">Numbers</p>
        <p class="c_simple"><svg class="svg" aria-hidden="true" class="e-font-icon-svg e-fas-phone-square"
            viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M400 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM94 416c-7.033 0-13.057-4.873-14.616-11.627l-14.998-65a15 15 0 0 1 8.707-17.16l69.998-29.999a15 15 0 0 1 17.518 4.289l30.997 37.885c48.944-22.963 88.297-62.858 110.781-110.78l-37.886-30.997a15.001 15.001 0 0 1-4.289-17.518l30-69.998a15 15 0 0 1 17.16-8.707l65 14.998A14.997 14.997 0 0 1 384 126c0 160.292-129.945 290-290 290z">
            </path>
          </svg>&nbsp; &nbsp; +92300-5121060</p>
        <p class="c_simple"><svg class="svg" aria-hidden="true" class="e-font-icon-svg e-fab-whatsapp"
            viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
            </path>
          </svg>&nbsp; &nbsp; +92300-5121060</p>
      </div>

      <div>
        <p class="c_p">Email</p>
        <p class="c_simple">republika.summit@gmail.com</p>
      </div>
    </div>
    <div class="c_main_second_half">
      <h2 class="c_p_head">Send Us a Message</h2>
      <input class="c_input" id="name_data" type="name" placeholder="Name" required />
      <input class="c_input" id="phone_data" placeholder="Phone Number" required />
      <input class="c_input" id="email_data" type="email" placeholder="Email" required />
      <textarea class="c_input" id="message_data" type="Message" placeholder="* Message...."></textarea>
      <button class="btn-contact">Submit</button>
    </div>
  </div>
    </section>
@endsection
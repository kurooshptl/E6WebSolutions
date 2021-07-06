@extends('app')


@section('content')

    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">We create awesome experiences</span>
                        <h1 class="text-capitalize mb-4 text-lg">
                            Dream, Believe, Work, Achieve, Celebrate
                        </h1>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="#" class="text-white-50">Quote</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section service border-top">
        <div class="container">
            <form id="contact-form" class="contact__form" method="post" action="{{route('quote.store')}}">
                <!-- CROSS Site Request Forgery Protection -->
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <div class="section-title">
                            <h2 class="text-color">We’re listening</h2>
                            <span class="h6">You can contact us using the contact form below. If you have a project in mind, our Project Planner might be more suitable.</span>
                        </div>
                    </div>

                    <div class="col-lg-12 ">
                        <div class="section-title text-center">
                            <h3>All about youself</h3>
                            @if(Session::has('success'))
                                <div class="alert alert-success contact__msg"  role="alert">
                                    {{Session::get('success')}}
                                </div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Full Name" value="{{old('name')}}">
                                    @error('name')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="email" type="text" class="form-control" placeholder="Email Address" value="{{old('email')}}">
                                    @error('email')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="contact" type="tel" class="form-control" placeholder="Telephone" value="{{old('contact')}}">
                                    @error('contact')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="company_name" type="text" class="form-control" placeholder="Company Name (Optional)" value="{{old('company_name')}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 ">
                        <div class="section-title text-center">
                            <h3>All about your company</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="company_location" type="text" class="form-control" placeholder="Where your company based in ?" value="{{old('company_location')}}">
                                    @error('company_location')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="company_services" type="text" class="form-control" placeholder="What product/services you sell ?" value="{{old('company_services')}}">
                                    @error('company_services')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="company_number_of_employee" type="number" class="form-control" placeholder="How many employee do you have ?" value="{{old('company_number_of_employee')}}">
                                    @error('company_number_of_employee')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="company_demographic" type="text" class="form-control" placeholder="Who is your target market / demographic ?" value="{{old('company_demographic')}}">
                                    @error('company_demographic')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h3>What help you need from us?</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input name="design" type="checkbox" class="form-control" {{old('design') == 'on'?'checked':''}}>
                                    <p>
                                        <strong>Design</strong>
                                    </p>
                                    <p>Branding & Logo Design, Web/App design, UX Strategy, Video Animation</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input name="development" type="checkbox" class="form-control" {{old('development') == 'on'?'checked':''}}>
                                    <p>
                                        <strong>Development</strong>
                                    </p>
                                    <p>Front-end development, CMS, eCommerce, Web Applications</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input name="marketing" type="checkbox" class="form-control" {{old('marketing') == 'on'?'checked':''}}>
                                    <p>
                                        <strong>Digital Marketing</strong>
                                    </p>
                                    <p>Search Engine Optimization, Social Media Optimization, Paid Marketing, Content Marketing</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h3>Other Details</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="competitors_position" class="form-control" placeholder="Who are your competitors and how do they position themeselves ? How do you differ from them ?">{{old('competitors_position')}}</textarea>
                                    @error('competitors_position')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="brand_message_detail" type="text" class="form-control" placeholder="What is the overall message you wish to portray with your brand? What should people feel when they see or think of your brand? or any other details">{{old('brand_message_detail')}}</textarea>
                                    @error('brand_message_detail')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <button class="btn btn-main" name="submit" type="submit">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection

@extends('layouts.app')
@section('title', 'Nana | Edit Contact Us')
@section('content')
     <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1"> Form Edit Data Contact Us</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                       
                        <div class="col-lg-6 ml-3 mt-4">
                        <div class="card">
                                    <div class="card-header">
                                        <strong>Edit Contact Us</strong> Form
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{route('contacts.update', $contact->id)}}" method="post" class="">
                                            {{csrf_field()}}
                                            <div class="form-group">

                                                <label for="nf-email" class=" form-control-label">Nama</label>
                                                <input type="text" id="nf-email" name="Nama" class="form-control" value="{{ $contact->Nama}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Email</label>
                                                <input type="email" id="nf-email" name="Email"  class="form-control" value="{{ $contact->Email}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Pesan</label>
                                                <textarea name="Pesan" class="form-control">{{ $contact->Pesan}}</textarea>
                                            </div>
                                            
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Ubah
                                                </button>
                                               
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
@endsection
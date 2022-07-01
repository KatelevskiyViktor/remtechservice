@extends('layouts.layout')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title">Наши работы</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @for($i = 1; $i < 114; $i++)
                                    <div class="col-sm-2">
                                        <a href="{{asset('storage/images/gallery_maxsize/image'.$i.'.jpg')}}" data-toggle="lightbox" {{--data-title="Изделие {{$i}}"--}} data-gallery="gallery">
                                            <img src="{{asset('storage/images/gallery_miniatures/image'.$i.'.jpg')}}" class="img-fluid mb-2" alt="Специальное технологическое оборудование"/>
                                        </a>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection

@extends('layouts.layout')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row sl-container">


                    @if(isset($photos))
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title">{{$ru_subcat}}</h4>
                            </div>
                            <div class="card-body">
                                <div class="row rcenter">
                                    @for($i = 1; $i <= (int)$photos; $i++)
                                        <div class="col-sm-2 new_size">
                                            <a href="{{asset('storage/images/'.$category.'/'.$subcat.'/max/image'.$i.'.jpg')}}" data-toggle="lightbox" data-title="Изделие {{$i}}" data-gallery="gallery">
                                                <img src="{{asset('storage/images/'.$category.'/'.$subcat.'/min/image'.$i.'.jpg')}}" class="img-fluid mb-2" alt="Специальное технологическое оборудование"/>
                                            </a>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        @elseif(isset($just_cat))
                            @foreach($just_cat as $jc)
                                <a href="{{route('gallery.category', ['category' => $jc->category])}}">
                                    <div class="card sl-card card-primary">
                                        <div class="card-header">
                                            <h4 class="card-title h_cat">{{$jc->ru_name_cat}}</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">

                                                    <div class="col-sm-2">

                                                            <img src="{{asset('storage/images/'
                                                                        .$jc->category
                                                                        .($jc->subcategories == '0' ? '' : '/'
                                                                        .explode(':', $jc->subcategories)[0])
                                                                        .'/min/image1.jpg')}}"
                                                                        class="img-fluid sl-img-fluid mb-2"
                                                                        alt="Специальное технологическое оборудование"/>

                                                    </div>


                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @elseif(isset($subcategories))
                            @for($i = 0; $i < count($subcategories); $i++)
                                <a href="{{route('gallery.subcat', ['category' => $category, 'subcat' => $subcategories[$i]])}}">
                                    <div class="card sl-card card-primary">
                                        <div class="card-header">
                                                <h4 class="h_cat card-title">{{$ru_subcategories[$i]}}</h4>
                                            </div>
                                        <div class="card-body">
                                                <div class="row">

                                                    <div class="col-sm-2">

                                                        <img src="{{asset('storage/images/'.$category.'/'.$subcategories[$i].'/min/image1.jpg')}}" class="img-fluid sl-img-fluid mb-2" alt="Специальное технологическое оборудование"/>

                                                    </div>


                                                </div>
                                            </div>
                                    </div>
                                </a>
                            @endfor
                        @elseif(isset($photoss))
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4 class="h_cat card-title">{{$ru_name_cat}}</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row rcenter">
                                        @for($i = 1; $i <= (int)$photoss; $i++)
                                            <div class="col-sm-2 new_size">
                                                <a href="{{asset('storage/images/'.$category.'/max/image'.$i.'.jpg')}}" data-toggle="lightbox" data-title="Изделие {{$i}}" data-gallery="gallery">
                                                    <img src="{{asset('storage/images/'.$category.'/min/image'.$i.'.jpg')}}" class="img-fluid mb-2" alt="Специальное технологическое оборудование"/>
                                                </a>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                    @endif



            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection

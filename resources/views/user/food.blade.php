<section class="product spad">
        <div class="container">
            <div class="row">
            @foreach($data as $data)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="menuimage/{{$data->image}}">
                            <div class="product__label">
                                <span>Cupcake</span>
                            </div>
                        </div>
                       
                        <div class="product__item__text">
                            <h6><a href="#">{{$data->name}}</a></h6>
                            <div class="product__item__price">{{$data->price}}$</div>
                            <div class="cart_add">
                                <a href="{{url('wisslist')}}">Add to cart</a>
                            </div>
                        </div>
                    
                    </div>
                </div>
                
                @endforeach
               
            </div>
        </div>
    </section>
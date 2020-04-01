@extends('welcome')

@section('middleBlock')
<!-- Copy from https://selection-studio.com/350-elementov-bootstrap.html -->
		<div class="ui-127">
		
			<div class="container">
					
				<div class="row">
		
					<div class="col-md-6 col-sm-6">
						<!-- Ecommerce UI #1 -->
						<div class="ecom-ui ecom-ui-one">
							<div class="img-container">
								<!-- Product Image -->
                                                                <h4><i class="fa fa-bookmark red"></i>{{$product[0]->name}}</h4>
								<img class="img-responsive" src="{{asset('../storage\app\\'.$product[0]->image)}}" alt="" />
							</div>
							<!-- product details -->
							<div class="product-details">
								<!-- about product text -->
                                                                @foreach ($longDescription as $line)
								<p>{{$line}}</p>
                                                                @endforeach
								<!-- Price -->
								<div>
									<span class="price red">{{$product[0]->price}} р</span>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
                                        </div>
                                </div>
                                    
                        </div>
                </div>
@endsection
@extends('welcome')

@section('middleBlock')
		<!-- Скопировано с https://selection-studio.com/downloads/Razrabotka/mega-elements-bootstrap/ui/ui-165.html -->
		<div class="ui-165 ml-5">
			<div class="container ml-5">
				<div class="row allign-items-start">
						<!-- Item -->
                                                @foreach ($products as $product)
						<div class="ui-item bg-red col-md-3 col-sm-6 col-xs-8 col-mob ml-2">
							<!-- Main Heading -->
							<h3><a href="#">{{$product->name}}</a></h3>
							<!-- Hover -->
							<div class="ui-hover">
                                                            
								<!-- Hover Content -->
								<div class="ui-hcontent">
									<!-- Heading -->
									<h4><a href="{{ url('category/'.$product->category.'/'.$product->id) }}">{{$product->name}}</a></h4>	
									<!-- Paragraph -->
									<p>{{$product->description}}</p>
								</div>
							</div>
						</div>
                                                @endforeach
					</div>
                                </div>
                            

		</div>
		<!-- UI - X Ends -->
@endsection

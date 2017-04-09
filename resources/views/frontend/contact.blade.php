@extends('frontend.layout.master')

@section('main-content')


<div class="container">

	<h1 class="title">Contact</h1>


	<!-- form -->
	<div class="contact">



		<div class="row">
			
			<div class="col-sm-12">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244315.8406494833!2d96.1695098!3d16.90382095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1949e223e196b%3A0x56fbd271f8080bb4!2sYangon!5e0!3m2!1sen!2smm!4v1488298963207" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>


					<div class="col-sm-6 col-sm-offset-3">
						<div class="spacer">   		

							<h4>Write to us</h4>
							<form role="form">
								<div class="form-group">	
									<input type="text" class="form-control" id="name" placeholder="Name">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="email" placeholder="Enter email">
								</div>
								<div class="form-group">
									<input type="phone" class="form-control" id="phone" placeholder="Phone">
								</div>
								<div class="form-group">
									<textarea type="email" class="form-control"  placeholder="Message" rows="4"></textarea>
								</div>
								
								<button type="submit" class="btn btn-default">Send</button>
							</form>
						</div>


					</div>





				</div>
			</div>
		</div>
		<!-- form -->

	</div>
</div>



@endsection

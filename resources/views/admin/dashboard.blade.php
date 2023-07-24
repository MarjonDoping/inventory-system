@extends('admin.layout')
@section('content')

<main>
			<div class=" text-center">
				<div class="center">
					<h1>Hello Admin Welcome<br> to Dashboard</h1>
                    <ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="/page-add">Home</a>
						</li>
					</ul>
			</div>

          
			</div>

			<ul class="box-info">
				<li>
					<i class='bx ' > <i class="fa fa-pencil" aria-hidden="true"></i></i>
					<span class="text">
						
						<h6>You can now edit</h6>
					</span>
				</li>
				<li>
					<i class='bx' ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></i>
					<span class="text">
						<h6>You can now create </h6>
					</span>
				</li>
                <li>
					<i class='bx ' > <i class="fa fa-trash" aria-hidden="true"></i></i>
					<span class="text">
						
						<h6>You can now delete</h6>
					</span>
				</li>
                <li>
					<i class='bx ' > <i class="fa fa-wrench" aria-hidden="true"></i></i>
					<span class="text">
						
						<h6>You can now update</h6>
					</span>
				</li>
                <li>
					<i class='bx ' > <i class="fa fa-calendar-o" aria-hidden="true"></i></i>
					<span class="text">
						
						<h6>You can now manage</h6>
					</span>
				</li>
				<li>
                <i class='bx ' > <i class="fa fa-eye" aria-hidden="true"></i></i>
					<span class="text">
						<h6>You can now Post</h6>
					</span>
				</li>
			</ul>

</main>
@endsection

@push('footer-script')

@endpush 


